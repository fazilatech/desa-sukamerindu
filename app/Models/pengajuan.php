<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengajuanSuratController extends Controller
{
    public function index()
    {
        $riwayat = DB::table('pengajuan_surat')
            ->where('user_id', auth()->id())
            ->orderByDesc('created_at')
            ->get();

        return view('warga.pengajuan-surat', compact('riwayat'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis_surat' => ['required', 'in:pengantar,domisili,usaha'],
            'keterangan' => ['required', 'string', 'max:1000'],
        ]);

        $pengajuanId = DB::table('pengajuan_surat')->insertGetId([
            'user_id' => auth()->id(),
            'jenis_surat' => $request->jenis_surat,
            'keterangan' => $request->keterangan,
            'status' => 'Diproses',
            'nomor_surat' => null,
            'diajukan_pada' => now(),
            'selesai_pada' => null,
            'catatan' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('riwayat_pengajuan_surat')->insert([
            'pengajuan_surat_id' => $pengajuanId,
            'status' => 'Diproses',
            'keterangan' => $request->keterangan,
            'user_id' => auth()->id(),
            'waktu' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('warga.pengajuan')
            ->with('success', 'Pengajuan surat berhasil dikirim.');
    }

    public function show($id)
    {
        $pengajuan = DB::table('pengajuan_surat')
            ->join('users', 'users.id', '=', 'pengajuan_surat.user_id')
            ->leftJoin('profil_warga', 'profil_warga.user_id', '=', 'users.id')
            ->select(
                'pengajuan_surat.*',
                'users.name as nama_warga',
                'profil_warga.nik',
                'profil_warga.no_kk',
                'profil_warga.tempat_lahir',
                'profil_warga.tanggal_lahir',
                'profil_warga.jenis_kelamin',
                'profil_warga.agama',
                'profil_warga.status_perkawinan',
                'profil_warga.pekerjaan',
                'profil_warga.alamat',
                'profil_warga.rt',
                'profil_warga.rw',
                'profil_warga.desa',
                'profil_warga.kecamatan',
                'profil_warga.kabupaten',
                'profil_warga.provinsi'
            )
            ->where('pengajuan_surat.id', $id)
            ->where('pengajuan_surat.user_id', auth()->id())
            ->first();

        abort_unless($pengajuan, 404);

        return view('warga.detail-pengajuan', compact('pengajuan'));
    }
}
