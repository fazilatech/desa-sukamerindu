<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AparaturDesaController extends Controller
{
    public function create()
    {
        abort_unless(
            auth()->user()->role === 'sekdes',
            403
        );

        return view('sekdes.aparatur-tambah');
    }


    public function store(Request $request)
    {
        abort_unless(
            auth()->user()->role === 'sekdes',
            403
        );

        $validated = $request->validate([
            'nama' => [
                'required',
                'string',
                'max:150',
            ],

            'jabatan' => [
                'required',
                'string',
                'max:150',
            ],

            'foto' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:10000',
            ],
        ]);

        $foto = null;

        if ($request->hasFile('foto')) {
            $foto = $request
                ->file('foto')
                ->store('aparatur-desa', 'public');
        }

        DB::table('aparatur_desa')->insert([
            'nama' => $validated['nama'],
            'jabatan' => $validated['jabatan'],
            'foto' => $foto,
            'urutan' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()
            ->route('sekdes.profil-desa')
            ->with(
                'success',
                'Data aparatur desa berhasil ditambahkan.'
            );
    }


    public function edit($id)
    {
        abort_unless(
            auth()->user()->role === 'sekdes',
            403
        );

        $aparaturDesa = DB::table('aparatur_desa')
            ->where('id', $id)
            ->first();

        abort_unless(
            $aparaturDesa,
            404
        );

        return view(
            'sekdes.aparatur-edit',
            compact('aparaturDesa')
        );
    }


    public function update(Request $request, $id)
    {
        abort_unless(
            auth()->user()->role === 'sekdes',
            403
        );

        $aparaturDesa = DB::table('aparatur_desa')
            ->where('id', $id)
            ->first();

        abort_unless(
            $aparaturDesa,
            404
        );

        $validated = $request->validate([
            'nama' => [
                'required',
                'string',
                'max:150',
            ],

            'jabatan' => [
                'required',
                'string',
                'max:150',
            ],

            'foto' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:1000',
            ],
        ]);

        $data = [
            'nama' => $validated['nama'],
            'jabatan' => $validated['jabatan'],
            'updated_at' => now(),
        ];

        if ($request->hasFile('foto')) {

            if ($aparaturDesa->foto) {
                Storage::disk('public')
                    ->delete($aparaturDesa->foto);
            }

            $data['foto'] = $request
                ->file('foto')
                ->store('aparatur-desa', 'public');
        }

        DB::table('aparatur_desa')
            ->where('id', $id)
            ->update($data);

        return redirect()
            ->route('sekdes.profil-desa')
            ->with(
                'success',
                'Data aparatur desa berhasil diperbarui.'
            );
    }


    public function destroy($id)
    {
        abort_unless(
            auth()->user()->role === 'sekdes',
            403
        );

        $aparaturDesa = DB::table('aparatur_desa')
            ->where('id', $id)
            ->first();

        abort_unless(
            $aparaturDesa,
            404
        );

        if ($aparaturDesa->foto) {
            Storage::disk('public')
                ->delete($aparaturDesa->foto);
        }

        DB::table('aparatur_desa')
            ->where('id', $id)
            ->delete();

        return redirect()
            ->route('sekdes.profil-desa')
            ->with(
                'success',
                'Data aparatur desa berhasil dihapus.'
            );
    }
}
