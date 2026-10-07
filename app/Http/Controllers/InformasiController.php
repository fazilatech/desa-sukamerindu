<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InformasiController extends Controller
{
    /**
     * Menampilkan daftar informasi desa untuk warga.
     */
    public function index()
    {
        abort_unless(
            auth()->user()->role === 'warga',
            403
        );

        $informasi = DB::table('informasi')
            ->where('status', 'Publikasi')
            ->orderByDesc('created_at')
            ->get();

        /*
         * Ambil komentar untuk setiap informasi.
         */
        foreach ($informasi as $item) {
            $item->komentar_list = DB::table('komentar')
                ->join(
                    'users',
                    'users.id',
                    '=',
                    'komentar.user_id'
                )
                ->where(
                    'komentar.informasi_id',
                    $item->id
                )
                ->select(
                    'komentar.id',
                    'komentar.komentar',
                    'komentar.created_at',
                    'users.name as nama_warga'
                )
                ->orderBy(
                    'komentar.created_at',
                    'asc'
                )
                ->get();
        }

        return view(
            'warga.informasi',
            compact('informasi')
        );
    }

    /**
     * Menampilkan detail informasi desa.
     */
    public function show($id)
    {
        abort_unless(
            auth()->user()->role === 'warga',
            403
        );

        $informasi = DB::table('informasi')
            ->where('id', $id)
            ->where('status', 'Publikasi')
            ->first();

        abort_unless(
            $informasi,
            404
        );

        return view(
            'warga.detail-informasi',
            compact('informasi')
        );
    }

    /**
     * Menyimpan komentar warga pada informasi desa.
     */
    public function storeKomentar(Request $request, $informasiId)
    {
        abort_unless(
            auth()->user()->role === 'warga',
            403
        );

        $validated = $request->validate([
            'komentar' => [
                'required',
                'string',
                'max:1000'
            ],
        ]);

        $informasi = DB::table('informasi')
            ->where('id', $informasiId)
            ->where('status', 'Publikasi')
            ->first();

        abort_unless(
            $informasi,
            404
        );

        DB::table('komentar')->insert([
            'informasi_id' => $informasiId,
            'user_id' => auth()->id(),
            'komentar' => $validated['komentar'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return back()->with(
            'success',
            'Komentar berhasil dikirim.'
        );
    }
}
