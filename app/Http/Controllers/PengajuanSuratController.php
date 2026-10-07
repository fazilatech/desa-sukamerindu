<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengajuanSuratController extends Controller
{
    public function index()
    {
        $pengajuanSurat = DB::table('pengajuan_surat')
            ->where('user_id', auth()->id())
            ->orderByDesc('created_at')
            ->get();

        return view('warga.pengajuan-surat', compact('pengajuanSurat'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis_surat' => [
                'required',
                'in:pengantar,domisili,tidak_mampu,usaha,kelahiran,kematian'
            ],
            'keterangan' => [
                'required',
                'string',
                'max:1000'
            ],
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

        return redirect()
            ->route('warga.pengajuan')
            ->with('success', 'Pengajuan surat berhasil dikirim.');
    }

    public function show($id)
    {
        $pengajuan = DB::table('pengajuan_surat')
            ->join(
                'users',
                'users.id',
                '=',
                'pengajuan_surat.user_id'
            )
            ->select(
                'pengajuan_surat.*',

                // Data warga dari tabel users
                'users.name as nama_warga',
                'users.nik',
                'users.no_kk',
                'users.tempat_lahir',
                'users.tanggal_lahir',
                'users.jenis_kelamin',
                'users.agama',
                'users.status_perkawinan',
                'users.pekerjaan',
                'users.alamat',
                'users.rt',
                'users.rw',
                'users.desa',
                'users.kecamatan',
                'users.kabupaten',
                'users.provinsi'
            )
            ->where('pengajuan_surat.id', $id)
            ->where('pengajuan_surat.user_id', auth()->id())
            ->first();

        abort_unless($pengajuan, 404);

        return view(
            'warga.detail-pengajuan',
            compact('pengajuan')
        );
    }
}
