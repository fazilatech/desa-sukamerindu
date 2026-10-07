<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengaduanController extends Controller
{
    /**
     * Menampilkan halaman pengaduan warga.
     */
    public function index()
    {
        abort_unless(
            auth()->user()->role === 'warga',
            403
        );

        $pengaduan = DB::table('pengaduan')
            ->where('user_id', auth()->id())
            ->orderByDesc('created_at')
            ->get();

        return view(
            'warga.pengaduan',
            compact('pengaduan')
        );
    }

    /**
     * Menyimpan pengaduan warga.
     */
    public function store(Request $request)
    {
        abort_unless(
            auth()->user()->role === 'warga',
            403
        );

        $validated = $request->validate([
            'judul' => [
                'required',
                'string',
                'max:255',
            ],

            'kategori' => [
                'required',
                'string',
                'max:100',
            ],

            'lokasi' => [
                'nullable',
                'string',
                'max:255',
            ],

            'isi' => [
                'required',
                'string',
            ],

            'lampiran' => [
                'nullable',
                'image',
                'max:2048',
            ],
        ]);

        $data = [
            'user_id' => auth()->id(),
            'judul' => $validated['judul'],
            'kategori' => $validated['kategori'],
            'lokasi' => $validated['lokasi'] ?? null,
            'isi' => $validated['isi'],
            'status' => 'Menunggu',
            'created_at' => now(),
            'updated_at' => now(),
        ];


        if ($request->hasFile('lampiran')) {

            $data['lampiran'] = $request
                ->file('lampiran')
                ->store('pengaduan', 'public');
        }


        DB::table('pengaduan')->insert($data);

        return redirect()
            ->route('warga.pengaduan')
            ->with(
                'success',
                'Pengaduan berhasil dikirim.'
            );
    }
}
