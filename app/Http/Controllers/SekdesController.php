<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class SekdesController extends Controller
{
    public function dashboard()
    {
        abort_unless(
            auth()->user()->role === 'sekdes',
            403
        );

        $totalPengajuan = DB::table('pengajuan_surat')
            ->count();

        $menunggu = DB::table('pengajuan_surat')
            ->where('status', 'Diproses')
            ->count();

        $diproses = DB::table('pengajuan_surat')
            ->where('status', 'Diproses')
            ->count();

        $selesai = DB::table('pengajuan_surat')
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
            'sekdes.dashboard',
            compact(
                'totalPengajuan',
                'menunggu',
                'diproses',
                'selesai',
                'pengajuanTerbaru'
            )
        );
    }
}
