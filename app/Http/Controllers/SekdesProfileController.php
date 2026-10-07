<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class SekdesProfileController extends Controller
{
    /**
     * Menampilkan profil Sekretaris Desa.
     */
    public function index()
    {
        abort_unless(auth()->check(), 403);

        abort_unless(
            auth()->user()->role === 'sekdes',
            403
        );

        $akun = DB::table('users')
            ->where('id', auth()->id())
            ->first();

        abort_unless($akun, 404);

        return view(
            'sekdes.profile',
            compact('akun')
        );
    }


    /**
     * Memperbarui nama dan email akun Sekretaris Desa.
     */
    public function update(Request $request)
    {
        abort_unless(auth()->check(), 403);

        abort_unless(
            auth()->user()->role === 'sekdes',
            403
        );

        $validated = $request->validate([
            'name' => [
                'required',
                'string',
                'max:255',
            ],

            'email' => [
                'required',
                'email',
                'max:255',
            ],
        ]);

        DB::table('users')
            ->where('id', auth()->id())
            ->update([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'updated_at' => now(),
            ]);

        return redirect()
            ->route('sekdes.profil')
            ->with(
                'success',
                'Data profil berhasil diperbarui.'
            );
    }


    /**
     * Mengganti foto profil Sekretaris Desa.
     */
    public function updatePhoto(Request $request)
    {
        abort_unless(auth()->check(), 403);

        abort_unless(
            auth()->user()->role === 'sekdes',
            403
        );

        $request->validate([
            'foto_profil' => [
                'required',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:2048',
            ],
        ]);

        $akun = DB::table('users')
            ->where('id', auth()->id())
            ->first();

        abort_unless($akun, 404);

        $file = $request->file('foto_profil');

        if (!$file || !$file->isValid()) {
            return back()
                ->withErrors([
                    'foto_profil' =>
                        'Foto gagal diupload. Silakan pilih foto lagi.',
                ]);
        }

        $folder = public_path('images/profile');

        if (!is_dir($folder)) {
            mkdir($folder, 0755, true);
        }

        /*
         * Hapus foto lama jika tersimpan di sistem aplikasi.
         */
        if (!empty($akun->profile_photo)) {

            $oldPath = $akun->profile_photo;

            if (str_starts_with($oldPath, 'images/profile/')) {

                $oldFullPath = public_path($oldPath);

                if (is_file($oldFullPath)) {
                    @unlink($oldFullPath);
                }

            } elseif (Storage::disk('public')->exists($oldPath)) {

                Storage::disk('public')->delete($oldPath);
            }
        }

        $extension = strtolower(
            $file->getClientOriginalExtension()
        );

        $filename =
            'sekdes_' .
            auth()->id() .
            '_' .
            time() .
            '_' .
            uniqid() .
            '.' .
            $extension;

        $file->move(
            $folder,
            $filename
        );

        $photoPath =
            'images/profile/' .
            $filename;

        DB::table('users')
            ->where('id', auth()->id())
            ->update([
                'profile_photo' => $photoPath,
                'updated_at' => now(),
            ]);

        return redirect()
            ->route('sekdes.profil')
            ->with(
                'success',
                'Foto profil berhasil diperbarui.'
            );
    }


    /**
     * Mengganti password akun Sekretaris Desa.
     */
    public function updatePassword(Request $request)
    {
        abort_unless(auth()->check(), 403);

        abort_unless(
            auth()->user()->role === 'sekdes',
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

        $akun = DB::table('users')
            ->where('id', auth()->id())
            ->first();

        abort_unless($akun, 404);

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

        DB::table('users')
            ->where('id', auth()->id())
            ->update([
                'password' => Hash::make(
                    $validated['password']
                ),
                'updated_at' => now(),
            ]);

        return redirect()
            ->route('sekdes.profil')
            ->with(
                'success',
                'Password berhasil diubah.'
            );
    }
}
