<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    /**
     * Tampilkan profil warga yang sedang login.
     */
    public function edit()
    {
        abort_unless(
            auth()->check(),
            403
        );

        abort_unless(
            auth()->user()->role === 'warga',
            403
        );

        $warga = DB::table('users')
            ->where(
                'users.id',
                auth()->id()
            )
            ->first();

        abort_unless(
            $warga,
            404
        );


        $fotoProfil = null;

        foreach (['jpg', 'jpeg', 'png'] as $extension) {
            $relativePath = 'images/profile/warga_' . $warga->id . '.' . $extension;
            $fullPath = public_path($relativePath);

            if (file_exists($fullPath)) {
                $fotoProfil = $relativePath;
                break;
            }
        }

        /*
        | Jika belum pernah upload foto, gunakan foto default Anne.
        */
        if (!$fotoProfil) {
            $fotoProfil = 'images/profile/anne.jpg';
        }

        $warga->foto_profil = $fotoProfil;

        return view(
            'warga.profil',
            compact('warga')
        );
    }


    /**
     * Simpan perubahan profil warga dan foto profil.
     */
    public function update(Request $request)
    {
        abort_unless(
            auth()->check(),
            403
        );

        abort_unless(
            auth()->user()->role === 'warga',
            403
        );

        $request->validate([

            'name' => [
                'required',
                'string',
                'max:255',
            ],

            'nik' => [
                'required',
                'digits:16',
            ],

            'no_kk' => [
                'nullable',
                'digits:16',
            ],

            'tempat_lahir' => [
                'nullable',
                'string',
                'max:100',
            ],

            'tanggal_lahir' => [
                'nullable',
                'date',
            ],

            'jenis_kelamin' => [
                'nullable',
                'in:Laki-laki,Perempuan',
            ],

            'agama' => [
                'nullable',
                'string',
                'max:30',
            ],

            'status_perkawinan' => [
                'nullable',
                'string',
                'max:30',
            ],

            'pekerjaan' => [
                'nullable',
                'string',
                'max:100',
            ],

            'alamat' => [
                'nullable',
                'string',
                'max:1000',
            ],

            'rt' => [
                'nullable',
                'string',
                'max:5',
            ],

            'rw' => [
                'nullable',
                'string',
                'max:5',
            ],

            'desa' => [
                'nullable',
                'string',
                'max:100',
            ],

            'kecamatan' => [
                'nullable',
                'string',
                'max:100',
            ],

            'kabupaten' => [
                'nullable',
                'string',
                'max:100',
            ],

            'provinsi' => [
                'nullable',
                'string',
                'max:100',
            ],

            'phone' => [
                'nullable',
                'string',
                'max:20',
            ],


            'foto_profil' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png',
                'max:2048',
            ],

        ]);


        DB::table('users')
            ->where(
                'id',
                auth()->id()
            )
            ->update([

                'name' =>
                    $request->name,

                'nik' =>
                    $request->nik,

                'no_kk' =>
                    $request->no_kk,

                'tempat_lahir' =>
                    $request->tempat_lahir,

                'tanggal_lahir' =>
                    $request->tanggal_lahir,

                'jenis_kelamin' =>
                    $request->jenis_kelamin,

                'agama' =>
                    $request->agama,

                'status_perkawinan' =>
                    $request->status_perkawinan,

                'pekerjaan' =>
                    $request->pekerjaan,

                'alamat' =>
                    $request->alamat,

                'rt' =>
                    $request->rt,

                'rw' =>
                    $request->rw,

                'desa' =>
                    $request->desa,

                'kecamatan' =>
                    $request->kecamatan,

                'kabupaten' =>
                    $request->kabupaten,

                'provinsi' =>
                    $request->provinsi,

                'phone' =>
                    $request->phone,

                'updated_at' =>
                    now(),

            ]);


        if ($request->hasFile('foto_profil')) {

            $folder = public_path('images/profile');

            if (!is_dir($folder)) {
                mkdir(
                    $folder,
                    0755,
                    true
                );
            }

            /*
            | Hapus foto lama milik warga yang sama.
            */
            foreach (['jpg', 'jpeg', 'png'] as $extension) {

                $oldFile = $folder
                    . DIRECTORY_SEPARATOR
                    . 'warga_'
                    . auth()->id()
                    . '.'
                    . $extension;

                if (file_exists($oldFile)) {
                    unlink($oldFile);
                }
            }

            /*
            | Ambil ekstensi asli file yang sudah divalidasi.
            */
            $extension = strtolower(
                $request
                    ->file('foto_profil')
                    ->getClientOriginalExtension()
            );


            $filename =
                'warga_'
                . auth()->id()
                . '.'
                . $extension;

            $request
                ->file('foto_profil')
                ->move(
                    $folder,
                    $filename
                );

            /*

            DB::table('users')
                ->where('id', auth()->id())
                ->update([
                    'profile_photo' => 'images/profile/' . $filename,
                    'updated_at' => now(),
                ]);
        }


        return redirect()
            ->route(
                'warga.profil'
            )
            ->with(
                'success',
                'Data profil berhasil diperbarui.'
            );
    }
}
