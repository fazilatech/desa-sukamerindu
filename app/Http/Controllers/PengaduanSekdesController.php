<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengaduanSekdesController extends Controller
{
    /**
     * Menampilkan seluruh pengaduan warga untuk Sekdes.
     */
    public function index()
    {
        abort_unless(
            auth()->user()->role === 'sekdes',
            403
        );

        $pengaduan = DB::table('pengaduan')
            ->leftJoin('users', 'pengaduan.user_id', '=', 'users.id')
            ->select(
                'pengaduan.*',
                'users.name as nama_warga'
            )
            ->orderByDesc('pengaduan.created_at')
            ->get();

        $totalPengaduan = DB::table('pengaduan')->count();

        $menunggu = DB::table('pengaduan')
            ->where('status', 'Menunggu')
            ->count();

        $diproses = DB::table('pengaduan')
            ->where('status', 'Proses')
            ->count();

        $selesai = DB::table('pengaduan')
            ->where('status', 'Selesai')
            ->count();

        return view('sekdes.pengaduan', compact(
            'pengaduan',
            'totalPengaduan',
            'menunggu',
            'diproses',
            'selesai'
        ));
    }

    /**
     * Menampilkan detail pengaduan.
     */
    public function show($id)
    {
        abort_unless(
            auth()->user()->role === 'sekdes',
            403
        );

        $pengaduan = DB::table('pengaduan')
            ->leftJoin('users', 'pengaduan.user_id', '=', 'users.id')
            ->select(
                'pengaduan.*',
                'users.name as nama_warga'
            )
            ->where('pengaduan.id', $id)
            ->first();

        abort_if(!$pengaduan, 404);

        return view('sekdes.detail-pengaduan', compact('pengaduan'));
    }

    /**
     * Memperbarui status pengaduan.
     */
    public function update(Request $request, $id)
    {
        abort_unless(
            auth()->user()->role === 'sekdes',
            403
        );

        $validated = $request->validate([
            'status' => [
                'required',
                'in:Menunggu,Proses,Selesai,Ditolak'
            ],
            'catatan' => [
                'nullable',
                'string'
            ],
        ]);

        DB::table('pengaduan')
            ->where('id', $id)
            ->update([
                'status' => $validated['status'],
                'catatan' => $validated['catatan'] ?? null,
                'updated_at' => now(),
            ]);

        return redirect()
            ->route('sekdes.pengaduan')
            ->with('success', 'Status pengaduan berhasil diperbarui.');
    }
}
