<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class KepalaDesaProfileController extends Controller
{
    /**
     * Menampilkan halaman Data Akun Kepala Desa.
     */
    public function index()
    {
        $akun = auth()->user();

        abort_unless(
            $akun->role === 'kepala_desa',
            403
        );

        return view(
            'kepala-desa.data-akun',
            compact('akun')
        );
    }


    /**
     * Mengubah data akun Kepala Desa.
     */
    public function update(Request $request)
    {
        $akun = auth()->user();

        abort_unless(
            $akun->role === 'kepala_desa',
            403
        );

        $validated = $request->validate([
            'name' => [
                'required',
                'string',
                'max:255',
            ],

            'nip' => [
                'nullable',
                'string',
                'max:30',
            ],
        ]);

        $akun->name = $validated['name'];
        $akun->nip = $validated['nip'] ?? null;

        $akun->save();

        return redirect()
            ->route('kepala-desa.profil')
            ->with(
                'success',
                'Data akun berhasil diperbarui.'
            );
    }


    /**
     * Mengganti foto profil Kepala Desa.
     */
    public function updatePhoto(Request $request)
    {
        $akun = auth()->user();

        abort_unless(
            $akun->role === 'kepala_desa',
            403
        );

        $request->validate([
            'foto' => [
                'required',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:2048',
            ],
        ]);

        if (
            $akun->profile_photo &&
            Storage::disk('public')->exists($akun->profile_photo)
        ) {
            Storage::disk('public')->delete(
                $akun->profile_photo
            );
        }

        $path = $request
            ->file('foto')
            ->store(
                'profile',
                'public'
            );

        $akun->profile_photo = $path;

        $akun->save();

        return redirect()
            ->route('kepala-desa.profil')
            ->with(
                'success',
                'Foto profil berhasil diperbarui.'
            );
    }


    /**
     * Mengganti password Kepala Desa.
     */
    public function updatePassword(Request $request)
    {
        $akun = auth()->user();

        abort_unless(
            $akun->role === 'kepala_desa',
            403
        );

        $validated = $request->validate([
            'password_lama' => [
                'required',
            ],

            'password' => [
                'required',
                'string',
                'min:8',
                'confirmed',
            ],
        ]);

        if (
            !Hash::check(
                $validated['password_lama'],
                $akun->password
            )
        ) {
            return back()
                ->withErrors([
                    'password_lama' =>
                        'Password lama tidak sesuai.',
                ]);
        }

        $akun->password = Hash::make(
            $validated['password']
        );

        $akun->save();

        return redirect()
            ->route('kepala-desa.profil')
            ->with(
                'success',
                'Password berhasil diubah.'
            );
    }
}
