<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class KepalaDesaController extends Controller
{
    public function dashboard()
    {
        abort_unless(
            auth()->user()->role === 'kepala_desa',
            403
        );

        $totalPengajuan = DB::table('pengajuan_surat')
            ->count();

        $pengajuanDiproses = DB::table('pengajuan_surat')
            ->where('status', 'Diproses')
            ->count();

        $pengajuanSelesai = DB::table('pengajuan_surat')
            ->where('status', 'Selesai')
            ->count();

        $pengajuanTerbaru = DB::table('pengajuan_surat')
            ->join(
                'users',
                'users.id',
                '=',
                'pengajuan_surat.user_id'
            )
            ->select(
                'pengajuan_surat.*',
                'users.name as nama_warga'
            )
            ->orderByDesc(
                'pengajuan_surat.created_at'
            )
            ->limit(10)
            ->get();

        return view(
            'kepala-desa.dashboard',
            compact(
                'totalPengajuan',
                'pengajuanDiproses',
                'pengajuanSelesai',
                'pengajuanTerbaru'
            )
        );
    }
}
