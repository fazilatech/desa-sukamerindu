<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AgendaController extends Controller
{
    public function index(Request $request)
    {
        $bulan = $request->get('bulan', now()->month);
        $tahun = $request->get('tahun', now()->year);

        $tanggalAwal = Carbon::create($tahun, $bulan, 1);
        $tanggalAkhir = $tanggalAwal->copy()->endOfMonth();

        $agenda = DB::table('agenda')
            ->whereBetween('tanggal', [
                $tanggalAwal->toDateString(),
                $tanggalAkhir->toDateString()
            ])
            ->orderBy('tanggal')
            ->orderBy('waktu')
            ->get();

        // Gunakan view sesuai role/route yang sedang dibuka.
        // Warga tetap memakai agenda warga, sedangkan Sekdes
        // memakai halaman Agenda dengan layout Dashboard Sekdes.
        $view = $request->routeIs('sekdes.agenda')
            ? 'sekdes.agenda'
            : 'warga.agenda';

        return view($view, compact(
            'agenda',
            'bulan',
            'tahun',
            'tanggalAwal',
            'tanggalAkhir'
        ));
    }
}
