<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DataKelahiranController extends Controller
{
    public function index(Request $request)
    {
        abort_unless(
            auth()->check() && auth()->user()->role === 'kepala_desa',
            403
        );

        /*
         * Data kelahiran hanya untuk warga yang lahir di Kepahiang.
         * Tahun tidak dibatasi, jadi 1987, 1989, 2026, dst. tetap masuk.
         */
        $kelahiran = DB::table('kelahiran')
            ->whereRaw("LOWER(TRIM(COALESCE(tempat_lahir, ''))) = ?", ['kepahiang'])
            ->orderByDesc('tanggal_lahir')
            ->orderBy('nama_bayi', 'asc')
            ->get();

        /*
         * Warga yang lahir di Kepahiang juga ditampilkan jika belum
         * mempunyai data pada tabel kelahiran.
         */
        $warga = DB::table('users')
            ->where('role', 'warga')
            ->whereNotNull('tanggal_lahir')
            ->whereRaw("LOWER(TRIM(COALESCE(tempat_lahir, ''))) = ?", ['kepahiang'])
            ->orderByDesc('tanggal_lahir')
            ->orderBy('name', 'asc')
            ->get([
                'id',
                'nik',
                'name',
                'no_kk',
                'tempat_lahir',
                'tanggal_lahir',
                'jenis_kelamin',
                'alamat',
            ]);

        $nikSudahAda = $kelahiran
            ->pluck('nik_bayi')
            ->filter()
            ->map(fn ($nik) => (string) $nik)
            ->toArray();

        $dataWarga = $warga
            ->filter(function ($item) use ($nikSudahAda) {
                return empty($item->nik)
                    || !in_array((string) $item->nik, $nikSudahAda, true);
            })
            ->map(function ($item) {
                $dusun = null;

                if (!empty($item->no_kk)) {
                    $keluarga = DB::table('keluarga')
                        ->where('no_kk', $item->no_kk)
                        ->first();

                    $dusun = $keluarga->dusun ?? null;
                }

                return (object) [
                    'id' => null,
                    'nik_bayi' => $item->nik,
                    'nama_bayi' => $item->name,
                    'tempat_lahir' => $item->tempat_lahir,
                    'tanggal_lahir' => $item->tanggal_lahir,
                    'jenis_kelamin' => $item->jenis_kelamin,
                    'nik_ayah' => null,
                    'nama_ayah' => null,
                    'nik_ibu' => null,
                    'nama_ibu' => null,
                    'penolong_kelahiran' => null,
                    'no_kk' => $item->no_kk,
                    'alamat' => $item->alamat,
                    'dusun' => $dusun,
                ];
            })
            ->values();

        /* Gabungkan dan tetap gunakan tanggal lahir asli masing-masing data. */
        $dataKelahiran = $dataWarga
            ->concat($kelahiran)
            ->sortByDesc(function ($item) {
                return $item->tanggal_lahir
                    ? Carbon::parse($item->tanggal_lahir)->timestamp
                    : 0;
            })
            ->values();

        $tahunTersedia = range(1960, 2026);
        rsort($tahunTersedia);

        $tahunGrafik = (int) $request->query('tahun', 2026);

        if ($tahunGrafik < 1960 || $tahunGrafik > 2026) {
            $tahunGrafik = 2026;
        }

        /*
         * Statistik selalu dihitung dari tanggal_lahir.
         * Jadi Nandi dengan 2026-01-01 otomatis masuk Januari.
         */
        $grafikBulanan = array_fill(1, 12, 0);

        foreach ($dataKelahiran as $item) {
            if (empty($item->tanggal_lahir)) {
                continue;
            }

            $tanggal = Carbon::parse($item->tanggal_lahir);

            if ((int) $tanggal->format('Y') === $tahunGrafik) {
                $grafikBulanan[(int) $tanggal->format('n')]++;
            }
        }

        $namaBulan = [
            1 => 'Januari',
            2 => 'Februari',
            3 => 'Maret',
            4 => 'April',
            5 => 'Mei',
            6 => 'Juni',
            7 => 'Juli',
            8 => 'Agustus',
            9 => 'September',
            10 => 'Oktober',
            11 => 'November',
            12 => 'Desember',
        ];

        $jumlahBulanTerbanyak = max($grafikBulanan);
        $bulanTerbanyak = '-';

        if ($jumlahBulanTerbanyak > 0) {
            $bulanIndex = array_search($jumlahBulanTerbanyak, $grafikBulanan, true);
            $bulanTerbanyak = $namaBulan[$bulanIndex] ?? '-';
        }

        return view('kepala-desa.data-kelahiran', compact(
            'dataKelahiran',
            'grafikBulanan',
            'tahunGrafik',
            'tahunTersedia',
            'bulanTerbanyak',
            'jumlahBulanTerbanyak'
        ));
    }
}
