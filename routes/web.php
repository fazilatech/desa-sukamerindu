<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Http\Controllers\PengajuanSuratController;
use App\Http\Controllers\SekdesController;
use App\Http\Controllers\KepalaDesaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\AparaturDesaController;
use App\Http\Controllers\KepalaDesaProfileController;
use App\Http\Controllers\DataKelahiranController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PengaduanSekdesController;
use App\Http\Controllers\SekdesProfileController;


Route::get('/', function () {

    return view('home');

})->name('home');


Route::get('/informasi', function () {

    $informasi = DB::table('informasi')
        ->where('status', 'Publikasi')
        ->orderByDesc('created_at')
        ->get();

    return view(
        'guest.informasi',
        compact('informasi')
    );

})->name('guest.informasi');


Route::get('/agenda', [AgendaController::class, 'index'])
    ->name('guest.agenda');


Route::get('/sekdes/agenda', [AgendaController::class, 'index'])
    ->name('sekdes.agenda');


Route::get('/sekdes/transparansi', function () {

    abort_unless(
        auth()->user()->role === 'sekdes',
        403
    );

    return view('guest.transparansi');

})->name('sekdes.transparansi');


Route::get('/profil-desa', function () {

    if (
        auth()->check() &&
        auth()->user()->role === 'sekdes'
    ) {
        return redirect()->route(
            'sekdes.profil-desa'
        );
    }

    $profilDesa = DB::table('profil_desa')
        ->orderByDesc('id')
        ->first();

    return view(
        'guest.profil-desa',
        compact('profilDesa')
    );

})->name('guest.profil-desa');


Route::get('/transparansi', function () {

    return view('guest.transparansi');

})->name('guest.transparansi');


Route::middleware('auth')->group(function () {


    Route::get('/sekdes/kontak', function () {

        abort_unless(
            auth()->user()->role === 'sekdes',
            403
        );

        return redirect()->route('home') . '#kontak-desa';

    })->name('sekdes.kontak');


    Route::get('/dashboard', function () {

        if (
            auth()->user()->role === 'kepala_desa'
        ) {

            return redirect()->route(
                'kepala-desa.dashboard'
            );

        }

        if (
            auth()->user()->role === 'sekdes'
        ) {

            return redirect()->route(
                'sekdes.dashboard'
            );

        }

        return view('dashboard');

    })->name('dashboard');



    Route::get(
        '/pengaduan',
        [PengaduanController::class, 'index']
    )->name('warga.pengaduan');

    Route::post(
        '/pengaduan',
        [PengaduanController::class, 'store']
    )->name('warga.pengaduan.store');


    Route::get(
        '/sekdes/dashboard',
        [SekdesController::class, 'dashboard']
    )->name('sekdes.dashboard');


    Route::get(
        '/sekdes/profil',
        [SekdesProfileController::class, 'index']
    )->name('sekdes.profil');


    Route::put(
        '/sekdes/profil',
        [SekdesProfileController::class, 'update']
    )->name('sekdes.profil.update');


    Route::post(
        '/sekdes/profil/foto',
        [SekdesProfileController::class, 'updatePhoto']
    )->name('sekdes.profil.foto');


    Route::put(
        '/sekdes/profil/password',
        [SekdesProfileController::class, 'updatePassword']
    )->name('sekdes.profil.password');



    Route::get(
        '/sekdes/pengaduan',
        [PengaduanSekdesController::class, 'index']
    )->name('sekdes.pengaduan');


    Route::get(
        '/sekdes/pengaduan/{id}',
        [PengaduanSekdesController::class, 'show']
    )->name('sekdes.pengaduan.show');


    Route::put(
        '/sekdes/pengaduan/{id}',
        [PengaduanSekdesController::class, 'update']
    )->name('sekdes.pengaduan.update');


    Route::get(
        '/sekdes/informasi',
        function () {

            abort_unless(
                auth()->user()->role === 'sekdes',
                403
            );

            $informasi = DB::table('informasi')
                ->orderByDesc('created_at')
                ->get();

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
                        'users.name as nama_pengguna'
                    )
                    ->orderBy(
                        'komentar.created_at',
                        'asc'
                    )
                    ->get();

            }

            return view(
                'sekdes.informasi',
                compact('informasi')
            );

        }
    )->name(
        'sekdes.informasi'
    );



    Route::get(
        '/sekdes/informasi/tambah',
        function () {

            abort_unless(
                auth()->user()->role === 'sekdes',
                403
            );

            return view(
                'sekdes.informasi-tambah'
            );

        }
    )->name(
        'sekdes.informasi.tambah'
    );


    Route::post(
        '/sekdes/informasi',
        function (Request $request) {

            abort_unless(
                auth()->user()->role === 'sekdes',
                403
            );

            $validated = $request->validate([
                'judul' => [
                    'required',
                    'string',
                    'max:255',
                ],
                'isi' => [
                    'required',
                    'string',
                ],
                'kategori' => [
                    'required',
                    'string',
                    'max:100',
                ],
                'status' => [
                    'required',
                    'in:Publikasi,Draft',
                ],
            ]);

            DB::table('informasi')->insert([
                'judul' => $validated['judul'],
                'isi' => $validated['isi'],
                'kategori' => $validated['kategori'],
                'status' => $validated['status'],
                'dibuat_oleh' => auth()->id(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            return redirect()
                ->route(
                    'sekdes.informasi'
                )
                ->with(
                    'success',
                    'Informasi berhasil dibuat.'
                );

        }
    )->name(
        'sekdes.informasi.store'
    );


    Route::get(
        '/sekdes/informasi/{id}/edit',
        function ($id) {

            abort_unless(
                auth()->user()->role === 'sekdes',
                403
            );

            $informasi = DB::table('informasi')
                ->where('id', $id)
                ->first();

            abort_unless(
                $informasi,
                404
            );

            return view(
                'sekdes.informasi-edit',
                compact('informasi')
            );

        }
    )->name(
        'sekdes.informasi.edit'
    );



    Route::put(
        '/sekdes/informasi/{id}',
        function (Request $request, $id) {

            abort_unless(
                auth()->user()->role === 'sekdes',
                403
            );

            $validated = $request->validate([
                'judul' => [
                    'required',
                    'string',
                    'max:255',
                ],
                'isi' => [
                    'required',
                    'string',
                ],
                'kategori' => [
                    'required',
                    'string',
                    'max:100',
                ],
                'status' => [
                    'required',
                    'in:Publikasi,Draft',
                ],
            ]);

            $informasi = DB::table('informasi')
                ->where('id', $id)
                ->first();

            abort_unless(
                $informasi,
                404
            );

            DB::table('informasi')
                ->where('id', $id)
                ->update([
                    'judul' => $validated['judul'],
                    'isi' => $validated['isi'],
                    'kategori' => $validated['kategori'],
                    'status' => $validated['status'],
                    'updated_at' => now(),
                ]);

            return redirect()
                ->route(
                    'sekdes.informasi'
                )
                ->with(
                    'success',
                    'Informasi berhasil diperbarui.'
                );

        }
    )->name(
        'sekdes.informasi.update'
    );


    Route::post(
        '/sekdes/informasi/{informasiId}/komentar',
        function (Request $request, $informasiId) {

            abort_unless(
                auth()->user()->role === 'sekdes',
                403
            );

            $validated = $request->validate([
                'komentar' => [
                    'required',
                    'string',
                    'max:1000',
                ],
            ]);

            $informasi = DB::table('informasi')
                ->where('id', $informasiId)
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

            return redirect()
                ->route(
                    'sekdes.informasi'
                )
                ->with(
                    'success',
                    'Komentar berhasil ditambahkan.'
                );

        }
    )->name(
        'sekdes.informasi.komentar'
    );


    Route::delete(
        '/sekdes/informasi/{id}',
        function ($id) {

            abort_unless(
                auth()->user()->role === 'sekdes',
                403
            );

            $informasi = DB::table('informasi')
                ->where('id', $id)
                ->first();

            abort_unless(
                $informasi,
                404
            );

            DB::table('komentar')
                ->where(
                    'informasi_id',
                    $id
                )
                ->delete();

            DB::table('informasi')
                ->where(
                    'id',
                    $id
                )
                ->delete();

            return redirect()
                ->route(
                    'sekdes.informasi'
                )
                ->with(
                    'success',
                    'Informasi berhasil dihapus.'
                );

        }
    )->name(
        'sekdes.informasi.hapus'
    );


    Route::get(
        '/sekdes/profil-desa',
        function () {

            abort_unless(
                auth()->user()->role === 'sekdes',
                403
            );

            $profilDesa = DB::table('profil_desa')
                ->orderByDesc('id')
                ->first();

            $aparatur = DB::table('aparatur_desa')
                ->orderBy('urutan')
                ->orderBy('id')
                ->get();

            return view(
                'sekdes.profil-desa',
                compact(
                    'profilDesa',
                    'aparatur'
                )
            );

        }
    )->name(
        'sekdes.profil-desa'
    );


    Route::post(
        '/sekdes/profil-desa',
        function (Request $request) {

            abort_unless(
                auth()->user()->role === 'sekdes',
                403
            );

            $validated = $request->validate([
                'nama_desa' => [
                    'required',
                    'string',
                    'max:255',
                ],
                'kabupaten' => [
                    'required',
                    'string',
                    'max:255',
                ],
                'provinsi' => [
                    'required',
                    'string',
                    'max:255',
                ],
                'sistem_informasi' => [
                    'required',
                    'string',
                    'max:255',
                ],
                'tentang_desa' => [
                    'required',
                    'string',
                ],
                'deskripsi_sistem' => [
                    'required',
                    'string',
                ],
                'pemerintahan_desa' => [
                    'required',
                    'string',
                ],
                'informasi_pemerintahan' => [
                    'required',
                    'string',
                ],
            ]);

            DB::table('profil_desa')->insert([
                'nama_desa' =>
                    $validated['nama_desa'],

                'kabupaten' =>
                    $validated['kabupaten'],

                'provinsi' =>
                    $validated['provinsi'],

                'sistem_informasi' =>
                    $validated['sistem_informasi'],

                'tentang_desa' =>
                    $validated['tentang_desa'],

                'deskripsi_sistem' =>
                    $validated['deskripsi_sistem'],

                'pemerintahan_desa' =>
                    $validated['pemerintahan_desa'],

                'informasi_pemerintahan' =>
                    $validated['informasi_pemerintahan'],

                'created_at' =>
                    now(),

                'updated_at' =>
                    now(),
            ]);

            return redirect()
                ->route(
                    'sekdes.profil-desa'
                )
                ->with(
                    'success',
                    'Profil desa berhasil ditambahkan.'
                );

        }
    )->name(
        'sekdes.profil-desa.store'
    );


    Route::put(
        '/sekdes/profil-desa/{id}',
        function (Request $request, $id) {

            abort_unless(
                auth()->user()->role === 'sekdes',
                403
            );

            $profilDesa = DB::table('profil_desa')
                ->where('id', $id)
                ->first();

            abort_unless(
                $profilDesa,
                404
            );

            $validated = $request->validate([
                'nama_desa' => [
                    'sometimes',
                    'required',
                    'string',
                    'max:255',
                ],
                'kabupaten' => [
                    'sometimes',
                    'required',
                    'string',
                    'max:255',
                ],
                'provinsi' => [
                    'sometimes',
                    'required',
                    'string',
                    'max:255',
                ],
                'sistem_informasi' => [
                    'sometimes',
                    'required',
                    'string',
                    'max:255',
                ],
                'tentang_desa' => [
                    'sometimes',
                    'required',
                    'string',
                ],
                'deskripsi_sistem' => [
                    'sometimes',
                    'required',
                    'string',
                ],
                'pemerintahan_desa' => [
                    'sometimes',
                    'required',
                    'string',
                ],
                'informasi_pemerintahan' => [
                    'sometimes',
                    'required',
                    'string',
                ],
            ]);

            if (empty($validated)) {
                return redirect()
                    ->route(
                        'sekdes.profil-desa'
                    )
                    ->with(
                        'error',
                        'Tidak ada data yang diubah.'
                    );
            }

            $validated['updated_at'] = now();

            DB::table('profil_desa')
                ->where('id', $id)
                ->update($validated);

            return redirect()
                ->route(
                    'sekdes.profil-desa'
                )
                ->with(
                    'success',
                    'Profil desa berhasil diperbarui.'
                );

        }
    )->name(
        'sekdes.profil-desa.update'
    );


    Route::delete(
        '/sekdes/profil-desa/{id}',
        function ($id) {

            abort_unless(
                auth()->user()->role === 'sekdes',
                403
            );

            $profilDesa = DB::table('profil_desa')
                ->where(
                    'id',
                    $id
                )
                ->first();

            abort_unless(
                $profilDesa,
                404
            );

            DB::table('profil_desa')
                ->where(
                    'id',
                    $id
                )
                ->delete();

            return redirect()
                ->route(
                    'sekdes.profil-desa'
                )
                ->with(
                    'success',
                    'Profil desa berhasil dihapus.'
                );

        }
    )->name(
        'sekdes.profil-desa.destroy'
    );



    Route::get(
        '/sekdes/aparatur-desa/tambah',
        [AparaturDesaController::class, 'create']
    )->name(
        'sekdes.aparatur-desa.create'
    );


    Route::post(
        '/sekdes/aparatur-desa',
        [AparaturDesaController::class, 'store']
    )->name(
        'sekdes.aparatur-desa.store'
    );


    Route::get(
        '/sekdes/aparatur-desa/{aparaturDesa}/edit',
        [AparaturDesaController::class, 'edit']
    )->name(
        'sekdes.aparatur-desa.edit'
    );


    Route::put(
        '/sekdes/aparatur-desa/{aparaturDesa}',
        [AparaturDesaController::class, 'update']
    )->name(
        'sekdes.aparatur-desa.update'
    );


    Route::delete(
        '/sekdes/aparatur-desa/{aparaturDesa}',
        [AparaturDesaController::class, 'destroy']
    )->name(
        'sekdes.aparatur-desa.destroy'
    );


    Route::get(
        '/sekdes/data-warga',
        function () {

            abort_unless(
                auth()->user()->role === 'sekdes',
                403
            );

            $warga = DB::table('users')
                ->where('role', 'warga')
                ->orderBy('name', 'asc')
                ->get();

            return view(
                'sekdes.data-warga',
                compact('warga')
            );

        }
    )->name(
        'sekdes.data-warga'
    );


    Route::get(
        '/kepala-desa/dashboard',
        [KepalaDesaController::class, 'dashboard']
    )->name('kepala-desa.dashboard');


    Route::get(
        '/kepala-desa/profil',
        [KepalaDesaProfileController::class, 'index']
    )->name(
        'kepala-desa.profil'
    );


    Route::put(
        '/kepala-desa/profil',
        [KepalaDesaProfileController::class, 'update']
    )->name(
        'kepala-desa.profil.update'
    );


    Route::post(
        '/kepala-desa/profil/foto',
        [KepalaDesaProfileController::class, 'updatePhoto']
    )->name(
        'kepala-desa.profil.foto'
    );


    Route::put(
        '/kepala-desa/profil/password',
        [KepalaDesaProfileController::class, 'updatePassword']
    )->name(
        'kepala-desa.profil.password'
    );


    Route::get(
        '/kepala-desa/agenda',
        function (Request $request) {

            abort_unless(
                auth()->user()->role === 'kepala_desa',
                403
            );

            $bulan = (int) $request->get(
                'bulan',
                now()->month
            );

            $tahun = (int) $request->get(
                'tahun',
                now()->year
            );

            if ($bulan < 1 || $bulan > 12) {
                $bulan = now()->month;
            }

            if ($tahun < 2000 || $tahun > 2100) {
                $tahun = now()->year;
            }

            $tanggalAwal = \Carbon\Carbon::create(
                $tahun,
                $bulan,
                1
            )->startOfMonth();

            $tanggalAkhir = $tanggalAwal
                ->copy()
                ->endOfMonth();

            $prevMonth = $tanggalAwal
                ->copy()
                ->subMonth();

            $nextMonth = $tanggalAwal
                ->copy()
                ->addMonth();

            $agenda = DB::table('agenda')
                ->whereBetween(
                    'tanggal',
                    [
                        $tanggalAwal->toDateString(),
                        $tanggalAkhir->toDateString(),
                    ]
                )
                ->orderBy('tanggal')
                ->orderBy('waktu')
                ->get();

            return view(
                'kepala-desa.agenda',
                compact(
                    'agenda',
                    'bulan',
                    'tahun',
                    'tanggalAwal',
                    'tanggalAkhir',
                    'prevMonth',
                    'nextMonth'
                )
            );

        }
    )->name(
        'kepala-desa.agenda'
    );



    Route::get(
        '/kepala-desa/agenda/tambah',
        function () {

            abort_unless(
                auth()->user()->role === 'kepala_desa',
                403
            );

            return view(
                'kepala-desa.agenda-tambah'
            );

        }
    )->name(
        'kepala-desa.agenda.tambah'
    );


    Route::post(
        '/kepala-desa/agenda',
        function (Request $request) {

            abort_unless(
                auth()->user()->role === 'kepala_desa',
                403
            );

            $validated = $request->validate([
                'judul' => [
                    'required',
                    'string',
                    'max:255',
                ],

                'tanggal' => [
                    'required',
                    'date',
                ],

                'waktu' => [
                    'nullable',
                    'date_format:H:i',
                ],

                'lokasi' => [
                    'nullable',
                    'string',
                    'max:255',
                ],

                'keterangan' => [
                    'nullable',
                    'string',
                ],
            ]);

            DB::table('agenda')->insert([
                'judul' => $validated['judul'],
                'tanggal' => $validated['tanggal'],
                'waktu' => $validated['waktu'] ?? null,
                'lokasi' => $validated['lokasi'] ?? null,
                'keterangan' => $validated['keterangan'] ?? null,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            return redirect()
                ->route('kepala-desa.agenda', [
                    'bulan' => date('n', strtotime($validated['tanggal'])),
                    'tahun' => date('Y', strtotime($validated['tanggal'])),
                ])
                ->with(
                    'success',
                    'Agenda berhasil ditambahkan.'
                );

        }
    )->name(
        'kepala-desa.agenda.store'
    );


    Route::get(
        '/kepala-desa/agenda/{id}/edit',
        function ($id) {

            abort_unless(
                auth()->user()->role === 'kepala_desa',
                403
            );

            $agendaItem = DB::table('agenda')
                ->where('id', $id)
                ->first();

            abort_unless(
                $agendaItem,
                404
            );

            return view(
                'kepala-desa.agenda-edit',
                compact('agendaItem')
            );

        }
    )->name(
        'kepala-desa.agenda.edit'
    );


    Route::put(
        '/kepala-desa/agenda/{id}',
        function (Request $request, $id) {

            abort_unless(
                auth()->user()->role === 'kepala_desa',
                403
            );

            $agendaItem = DB::table('agenda')
                ->where('id', $id)
                ->first();

            abort_unless(
                $agendaItem,
                404
            );

            $validated = $request->validate([
                'judul' => [
                    'required',
                    'string',
                    'max:255',
                ],

                'tanggal' => [
                    'required',
                    'date',
                ],

                'waktu' => [
                    'nullable',
                    'date_format:H:i',
                ],

                'lokasi' => [
                    'nullable',
                    'string',
                    'max:255',
                ],

                'keterangan' => [
                    'nullable',
                    'string',
                ],
            ]);

            DB::table('agenda')
                ->where('id', $id)
                ->update([
                    'judul' => $validated['judul'],
                    'tanggal' => $validated['tanggal'],
                    'waktu' => $validated['waktu'] ?? null,
                    'lokasi' => $validated['lokasi'] ?? null,
                    'keterangan' => $validated['keterangan'] ?? null,
                    'updated_at' => now(),
                ]);

            return redirect()
                ->route('kepala-desa.agenda', [
                    'bulan' => date('n', strtotime($validated['tanggal'])),
                    'tahun' => date('Y', strtotime($validated['tanggal'])),
                ])
                ->with(
                    'success',
                    'Agenda berhasil diperbarui.'
                );

        }
    )->name(
        'kepala-desa.agenda.update'
    );


    Route::delete(
        '/kepala-desa/agenda/{id}',
        function ($id) {

            abort_unless(
                auth()->user()->role === 'kepala_desa',
                403
            );

            $agendaItem = DB::table('agenda')
                ->where('id', $id)
                ->first();

            abort_unless(
                $agendaItem,
                404
            );

            DB::table('agenda')
                ->where('id', $id)
                ->delete();

            return redirect()
                ->route('kepala-desa.agenda', [
                    'bulan' => date('n', strtotime($agendaItem->tanggal)),
                    'tahun' => date('Y', strtotime($agendaItem->tanggal)),
                ])
                ->with(
                    'success',
                    'Agenda berhasil dihapus.'
                );

        }
    )->name(
        'kepala-desa.agenda.destroy'
    );



    Route::get('/kepala-desa/dashboard/data', function () {

        abort_unless(
            auth()->user()->role === 'kepala_desa',
            403
        );

        $totalPengajuan = DB::table(
            'pengajuan_surat'
        )->count();


        $pengajuanDiproses = DB::table(
            'pengajuan_surat'
        )
            ->where('status', 'Diproses')
            ->count();


        $pengajuanSelesai = DB::table(
            'pengajuan_surat'
        )
            ->where('status', 'Selesai')
            ->count();


        $pengajuanTerbaru = DB::table(
            'pengajuan_surat'
        )

            ->join(
                'users',
                'users.id',
                '=',
                'pengajuan_surat.user_id'
            )

            ->select(
                'pengajuan_surat.id',
                'users.name as nama_warga',
                'pengajuan_surat.jenis_surat',
                'pengajuan_surat.diajukan_pada',
                'pengajuan_surat.status'
            )

            ->orderByDesc(
                'pengajuan_surat.created_at'
            )

            ->limit(10)

            ->get();


        return response()->json([

            'totalPengajuan' =>
                $totalPengajuan,

            'pengajuanDiproses' =>
                $pengajuanDiproses,

            'pengajuanSelesai' =>
                $pengajuanSelesai,

            'pengajuanTerbaru' =>
                $pengajuanTerbaru,

        ]);

    })->name(
        'kepala-desa.dashboard.data'
    );



    Route::get('/kepala-desa/data-warga', function () {

        abort_unless(
            auth()->user()->role === 'kepala_desa',
            403
        );


        $warga = DB::table('users')
            ->where('role', 'warga')
            ->orderBy('name', 'asc')
            ->get();



        foreach ($warga as $item) {

            if (!empty($item->profile_photo)) {
                continue;
            }


            $folder = public_path('images/profile');

            if (!is_dir($folder)) {
                continue;
            }


            $patterns = [

                $folder . '/warga_' . $item->id . '.jpg',

                $folder . '/warga_' . $item->id . '.jpeg',

                $folder . '/warga_' . $item->id . '.png',

                $folder . '/warga_' . $item->id . '.webp',

                $folder . '/warga_' . $item->id . '_*.jpg',

                $folder . '/warga_' . $item->id . '_*.jpeg',

                $folder . '/warga_' . $item->id . '_*.png',

                $folder . '/warga_' . $item->id . '_*.webp',

            ];


            foreach ($patterns as $pattern) {

                $files = glob($pattern);

                if (!empty($files)) {

                    $filename = basename($files[0]);

                    $item->profile_photo =
                        'images/profile/' . $filename;

                    break;
                }
            }
        }


        return view(
            'kepala-desa.data-warga',
            compact('warga')
        );

    })->name(
        'kepala-desa.data-warga'
    );



    Route::get('/kepala-desa/data-keluarga', function () {

        abort_unless(
            auth()->user()->role === 'kepala_desa',
            403
        );


        $warga = DB::table('users')
            ->where('role', 'warga')
            ->whereNotNull('no_kk')
            ->where('no_kk', '!=', '')
            ->orderBy('no_kk', 'asc')
            ->orderBy('id', 'asc')
            ->get([
                'id',
                'no_kk',
                'name',
                'alamat',
                'rt',
                'rw',
            ]);

        $noKkList = $warga
            ->pluck('no_kk')
            ->unique()
            ->values();

        $dataKeluarga = $noKkList->isNotEmpty()
            ? DB::table('keluarga')
                ->whereIn('no_kk', $noKkList)
                ->get()
                ->keyBy('no_kk')
            : collect();

        $keluarga = $warga
            ->groupBy('no_kk')
            ->map(function ($anggota, $noKk) use ($dataKeluarga) {

                $data = $dataKeluarga->get($noKk);
                $kepalaId = $data->kepala_keluarga_id ?? null;

                $kepala = $kepalaId
                    ? $anggota->firstWhere('id', $kepalaId)
                    : null;

                $wargaPertama = $anggota->first();

                return (object) [
                    'id' => $data->id ?? null,
                    'no_kk' => $noKk,
                    'kepala_keluarga_id' => $kepalaId,
                    'kepala_keluarga' => $kepala->name ?? null,
                    'jumlah_anggota' => $anggota->count(),
                    'alamat' => $data->alamat ?? ($wargaPertama->alamat ?? '-'),
                    'dusun' => $data->dusun ?? null,
                    'rt' => $data->rt ?? ($wargaPertama->rt ?? '-'),
                    'rw' => $data->rw ?? ($wargaPertama->rw ?? '-'),
                ];
            })
            ->sortBy('no_kk')
            ->values();

        return view(
            'kepala-desa.data-keluarga',
            compact('keluarga')
        );

    })->name(
        'kepala-desa.data-keluarga'
    );


    Route::get(
        '/kepala-desa/data-keluarga/{noKk}/anggota',
        function ($noKk) {

            abort_unless(
                auth()->user()->role === 'kepala_desa',
                403
            );

            $anggota = DB::table('users')
                ->where('role', 'warga')
                ->where('no_kk', $noKk)
                ->orderBy('id', 'asc')
                ->get([
                    'id',
                    'nik',
                    'name',
                    'jenis_kelamin',
                    'tempat_lahir',
                    'tanggal_lahir',
                    'status_perkawinan',
                    'pekerjaan',
                    'alamat',
                    'rt',
                    'rw',
                ]);

            $keluarga = DB::table('keluarga')
                ->where('no_kk', $noKk)
                ->first();

            return response()->json([
                'anggota' => $anggota,
                'kepala_keluarga_id' =>
                    $keluarga->kepala_keluarga_id ?? null,
            ]);

        }
    )->name(
        'kepala-desa.data-keluarga.anggota'
    );



    Route::post(
        '/kepala-desa/data-keluarga/tetapkan-kepala',
        function (Request $request) {

            abort_unless(
                auth()->user()->role === 'kepala_desa',
                403
            );

            $validated = $request->validate([
                'no_kk' => [
                    'required',
                    'string',
                    'max:16',
                ],

                'kepala_keluarga_id' => [
                    'required',
                    'integer',
                    'exists:users,id',
                ],
            ]);

            $kepala = DB::table('users')
                ->where('id', $validated['kepala_keluarga_id'])
                ->where('role', 'warga')
                ->where('no_kk', $validated['no_kk'])
                ->first();

            if (!$kepala) {
                return response()->json([
                    'message' =>
                        'Warga tersebut bukan anggota dari No. KK yang dipilih.',
                ], 422);
            }

            $keluarga = DB::table('keluarga')
                ->where('no_kk', $validated['no_kk'])
                ->first();

            $data = [
                'kepala_keluarga_id' => $kepala->id,
                'alamat' => $kepala->alamat,
                'updated_at' => now(),
            ];

            if ($keluarga) {

                DB::table('keluarga')
                    ->where('id', $keluarga->id)
                    ->update($data);

            } else {

                DB::table('keluarga')->insert([
                    'no_kk' => $validated['no_kk'],
                    'kepala_keluarga_id' => $kepala->id,
                    'alamat' => $kepala->alamat,
                    'dusun' => null,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }

            return response()->json([
                'success' => true,
                'message' => 'Kepala keluarga berhasil ditetapkan.',
            ]);

        }
    )->name(
        'kepala-desa.data-keluarga.tetapkan-kepala'
    );



    Route::get(
        '/kepala-desa/data-kelahiran',
        [DataKelahiranController::class, 'index']
    )->name('kepala-desa.data-kelahiran');


    Route::get('/kepala-desa/data-kelahiran/tambah', function () {

        abort_unless(
            auth()->user()->role === 'kepala_desa',
            403
        );

        $warga = DB::table('users')
            ->where('role', 'warga')
            ->whereNotNull('nik')
            ->orderBy('name', 'asc')
            ->get([
                'id',
                'nik',
                'name',
                'no_kk',
                'alamat',
            ]);

        return view(
            'kepala-desa.tambah-kelahiran',
            compact('warga')
        );

    })->name(
        'kepala-desa.data-kelahiran.tambah'
    );



    Route::get('/kepala-desa/data-kelahiran/warga/{id}', function ($id) {

        abort_unless(
            auth()->user()->role === 'kepala_desa',
            403
        );

        $warga = DB::table('users')
            ->where('id', $id)
            ->where('role', 'warga')
            ->first([
                'id',
                'nik',
                'name',
                'no_kk',
                'alamat',
            ]);

        abort_unless($warga, 404);

        return response()->json($warga);

    })->name(
        'kepala-desa.data-kelahiran.warga'
    );


    Route::post('/kepala-desa/data-kelahiran', function (Request $request) {

        abort_unless(
            auth()->user()->role === 'kepala_desa',
            403
        );

        $validated = $request->validate([
            'nik_bayi' => [
                'nullable',
                'string',
                'max:16',
            ],
            'nama_bayi' => [
                'required',
                'string',
                'max:255',
            ],
            'tempat_lahir' => [
                'required',
                'string',
                'max:255',
            ],
            'tanggal_lahir' => [
                'required',
                'date',
            ],
            'jenis_kelamin' => [
                'required',
                'in:Laki-laki,Perempuan',
            ],
            'ayah_id' => [
                'required',
                'integer',
            ],
            'ibu_id' => [
                'required',
                'integer',
            ],
        ]);

        $ayah = DB::table('users')
            ->where('id', $validated['ayah_id'])
            ->where('role', 'warga')
            ->first();

        $ibu = DB::table('users')
            ->where('id', $validated['ibu_id'])
            ->where('role', 'warga')
            ->first();

        abort_unless($ayah && $ibu, 422);

        $noKk = $ayah->no_kk ?: $ibu->no_kk;

        $dusun = null;

        if ($noKk) {
            $keluarga = DB::table('keluarga')
                ->where('no_kk', $noKk)
                ->first();

            if ($keluarga) {
                $dusun = $keluarga->dusun ?? null;
            }
        }

        DB::table('kelahiran')->insert([
            'nik_bayi' => $validated['nik_bayi'] ?? null,
            'nama_bayi' => $validated['nama_bayi'],
            'tempat_lahir' => $validated['tempat_lahir'],
            'tanggal_lahir' => $validated['tanggal_lahir'],
            'jenis_kelamin' => $validated['jenis_kelamin'],
            'nik_ayah' => $ayah->nik,
            'nama_ayah' => $ayah->name,
            'nik_ibu' => $ibu->nik,
            'nama_ibu' => $ibu->name,
            'no_kk' => $noKk,
            'dusun' => $dusun,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()
            ->route('kepala-desa.data-kelahiran')
            ->with(
                'success',
                'Data kelahiran berhasil ditambahkan.'
            );

    })->name(
        'kepala-desa.data-kelahiran.store'
    );



    Route::get('/kepala-desa/data-kematian', function () {

        abort_unless(
            auth()->user()->role === 'kepala_desa',
            403
        );

        $kematian = DB::table('kematian')
            ->orderByDesc('tanggal_meninggal')
            ->orderBy('nama', 'asc')
            ->get();

        return view(
            'kepala-desa.data-kematian',
            compact('kematian')
        );

    })->name(
        'kepala-desa.data-kematian'
    );



    Route::get('/kepala-desa/data-perpindahan', function () {

        abort_unless(
            auth()->user()->role === 'kepala_desa',
            403
        );

        $perpindahan = DB::table('perpindahan')
            ->orderByDesc('tanggal_pindah')
            ->get();

        return view(
            'kepala-desa.data-perpindahan',
            compact('perpindahan')
        );

    })->name(
        'kepala-desa.data-perpindahan'
    );



    Route::get(
        '/kepala-desa/perihal/profil-desa',
        function () {

            abort_unless(
                auth()->user()->role === 'kepala_desa',
                403
            );

            $profilDesa = DB::table('profil_desa')
                ->orderByDesc('id')
                ->first();

            $aparatur = DB::table('aparatur_desa')
                ->orderBy('urutan')
                ->orderBy('id')
                ->get();

            return view(
                'kepala-desa.profil-desa',
                compact(
                    'profilDesa',
                    'aparatur'
                )
            );

        }
    )->name(
        'kepala-desa.perihal.profil-desa'
    );


    Route::get(
        '/kepala-desa/perihal/visi-misi',
        function () {

            abort_unless(
                auth()->user()->role === 'kepala_desa',
                403
            );

            return view('kepala-desa.visi-misi');

        }
    )->name(
        'kepala-desa.perihal.visi-misi'
    );



    Route::get(
        '/kepala-desa/visi-misi',
        function () {

            abort_unless(
                auth()->user()->role === 'kepala_desa',
                403
            );

            return view('visi-misi');

        }
    )->name(
        'kepala-desa.visi-misi'
    );


    Route::get(
        '/kepala-desa/perihal/struktur',
        function () {

            abort_unless(
                auth()->user()->role === 'kepala_desa',
                403
            );

            return redirect()->to(
                route('guest.profil-desa') . '#struktur-pemerintahan'
            );

        }
    )->name(
        'kepala-desa.perihal.struktur'
    );



    Route::get(
        '/sekdes/pengajuan-surat',
        function () {

            abort_unless(
                auth()->user()->role === 'sekdes',
                403
            );

            $pengajuan = DB::table('pengajuan_surat')
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
                ->get();

            return view(
                'sekdes.pengajuan-surat',
                compact('pengajuan')
            );

        }
    )->name(
        'sekdes.pengajuan'
    );



    Route::get(
        '/sekdes/pengajuan-surat/{id}',
        function ($id) {

            abort_unless(
                auth()->user()->role === 'sekdes',
                403
            );

            $pengajuan = DB::table('pengajuan_surat')
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
                ->where('pengajuan_surat.id', $id)
                ->first();

            abort_unless($pengajuan, 404);

            return view(
                'sekdes.detail-pengajuan',
                compact('pengajuan')
            );

        }
    )->name('sekdes.pengajuan.detail');



    Route::post(
        '/sekdes/pengajuan-surat/{id}/verifikasi',
        function ($id) {

            abort_unless(
                auth()->user()->role === 'sekdes',
                403
            );

            $pengajuan = DB::table('pengajuan_surat')
                ->where('id', $id)
                ->first();

            abort_unless($pengajuan, 404);

            if ($pengajuan->status === 'Selesai') {
                return back()->with(
                    'error',
                    'Pengajuan ini sudah selesai.'
                );
            }

            if ($pengajuan->status === 'Ditolak') {
                return back()->with(
                    'error',
                    'Pengajuan ini sudah ditolak.'
                );
            }

            $now = now();

            DB::table('pengajuan_surat')
                ->where('id', $id)
                ->update([
                    'status' => 'Diproses',
                    'dibuat_oleh' => auth()->user()->name,
                    'tanggal_proses' => $now,
                    'catatan_sekretaris' => 'Pengajuan telah diverifikasi dan diteruskan kepada Kepala Desa.',
                    'updated_at' => $now,
                ]);

            DB::table('riwayat_pengajuan_surat')->insert([
                'pengajuan_surat_id' => $id,
                'status' => 'Diproses',
                'keterangan' => 'Pengajuan telah diverifikasi oleh Sekretaris Desa dan diteruskan kepada Kepala Desa.',
                'user_id' => auth()->id(),
                'waktu' => $now,
                'created_at' => $now,
                'updated_at' => $now,
            ]);

            return redirect()
                ->route('sekdes.pengajuan.detail', $id)
                ->with('success', 'Pengajuan berhasil diverifikasi dan diteruskan kepada Kepala Desa.');

        }
    )->name('sekdes.pengajuan.verifikasi');



    Route::post(
        '/sekdes/pengajuan-surat/{id}/tolak',
        function ($id) {

            abort_unless(
                auth()->user()->role === 'sekdes',
                403
            );

            $pengajuan = DB::table('pengajuan_surat')
                ->where('id', $id)
                ->first();

            abort_unless($pengajuan, 404);

            if (in_array($pengajuan->status, ['Selesai', 'Ditolak'], true)) {
                return back()->with(
                    'error',
                    'Pengajuan ini sudah tidak dapat diproses.'
                );
            }

            $now = now();

            DB::table('pengajuan_surat')
                ->where('id', $id)
                ->update([
                    'status' => 'Ditolak',
                    'dibuat_oleh' => auth()->user()->name,
                    'tanggal_proses' => $now,
                    'catatan_sekretaris' => 'Pengajuan surat ditolak oleh Sekretaris Desa.',
                    'updated_at' => $now,
                ]);

            DB::table('riwayat_pengajuan_surat')->insert([
                'pengajuan_surat_id' => $id,
                'status' => 'Ditolak',
                'keterangan' => 'Pengajuan surat ditolak oleh Sekretaris Desa.',
                'user_id' => auth()->id(),
                'waktu' => $now,
                'created_at' => $now,
                'updated_at' => $now,
            ]);

            return redirect()
                ->route('sekdes.pengajuan.detail', $id)
                ->with('success', 'Pengajuan surat berhasil ditolak.');

        }
    )->name('sekdes.pengajuan.tolak');



    Route::get(
        '/kepala-desa/pengajuan-surat',
        function () {

            abort_unless(
                auth()->user()->role === 'kepala_desa',
                403
            );


            return view(
                'kepala-desa.pengajuan-surat'
            );

        }
    )->name(
        'kepala-desa.pengajuan'
    );



    Route::get(
        '/kepala-desa/pengajuan-surat/{id}',
        function ($id) {

            abort_unless(
                auth()->user()->role === 'kepala_desa',
                403
            );


            $pengajuan = DB::table(
                'pengajuan_surat'
            )

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

                ->where(
                    'pengajuan_surat.id',
                    $id
                )

                ->first();


            abort_unless(
                $pengajuan,
                404
            );


            return view(
                'kepala-desa.detail-pengajuan',
                compact('pengajuan')
            );

        }
    )->name(
        'kepala-desa.pengajuan.detail'
    );



    Route::post(
        '/kepala-desa/pengajuan-surat/{id}/selesai',
        function ($id) {

            abort_unless(
                auth()->user()->role === 'kepala_desa',
                403
            );


            $pengajuan = DB::table(
                'pengajuan_surat'
            )
                ->where('id', $id)
                ->first();


            abort_unless(
                $pengajuan,
                404
            );


            if (
                $pengajuan->status === 'Selesai'
            ) {

                return back()->with(
                    'error',
                    'Pengajuan ini sudah selesai.'
                );

            }


            $tahun = now()->year;


            $jumlahSurat = DB::table(
                'pengajuan_surat'
            )

                ->whereNotNull(
                    'nomor_surat'
                )

                ->whereYear(
                    'selesai_pada',
                    $tahun
                )

                ->count();


            $nomorUrut =
                $jumlahSurat + 1;


            $nomorSurat =
                '470/'
                . str_pad(
                    $nomorUrut,
                    3,
                    '0',
                    STR_PAD_LEFT
                )
                . '/DS-SKM/'
                . $tahun;


            DB::table(
                'pengajuan_surat'
            )

                ->where('id', $id)

                ->update([

                    'status' =>
                        'Selesai',

                    'nomor_surat' =>
                        $nomorSurat,

                    'selesai_pada' =>
                        now(),

                    'tanggal_persetujuan' =>
                        now(),

                    'updated_at' =>
                        now(),

                ]);


            DB::table(
                'riwayat_pengajuan_surat'
            )

                ->insert([

                    'pengajuan_surat_id' =>
                        $id,

                    'status' =>
                        'Selesai',

                    'keterangan' =>
                        'Pengajuan surat telah diselesaikan oleh Kepala Desa.',

                    'user_id' =>
                        auth()->id(),

                    'waktu' =>
                        now(),

                    'created_at' =>
                        now(),

                    'updated_at' =>
                        now(),

                ]);


            return redirect()
                ->route(
                    'kepala-desa.pengajuan.detail',
                    $id
                )
                ->with(
                    'success',
                    'Pengajuan berhasil diselesaikan. Nomor surat: '
                    . $nomorSurat
                );

        }
    )->name(
        'kepala-desa.pengajuan.selesai'
    );



    Route::post(
        '/kepala-desa/pengajuan-surat/{id}/tolak',
        function ($id) {

            abort_unless(
                auth()->user()->role === 'kepala_desa',
                403
            );


            $pengajuan = DB::table(
                'pengajuan_surat'
            )
                ->where(
                    'id',
                    $id
                )
                ->first();


            abort_unless(
                $pengajuan,
                404
            );


            if (
                $pengajuan->status === 'Selesai'
            ) {

                return back()->with(
                    'error',
                    'Pengajuan ini sudah selesai.'
                );

            }


            if (
                $pengajuan->status === 'Ditolak'
            ) {

                return back()->with(
                    'error',
                    'Pengajuan ini sudah ditolak.'
                );

            }


            DB::table(
                'pengajuan_surat'
            )
                ->where(
                    'id',
                    $id
                )
                ->update([
                    'status' =>
                        'Ditolak',

                    'tanggal_persetujuan' =>
                        now(),

                    'updated_at' =>
                        now(),
                ]);


            DB::table(
                'riwayat_pengajuan_surat'
            )
                ->insert([
                    'pengajuan_surat_id' =>
                        $id,

                    'status' =>
                        'Ditolak',

                    'keterangan' =>
                        'Pengajuan surat ditolak oleh Kepala Desa.',

                    'user_id' =>
                        auth()->id(),

                    'waktu' =>
                        now(),

                    'created_at' =>
                        now(),

                    'updated_at' =>
                        now(),
                ]);


            return redirect()
                ->route(
                    'kepala-desa.pengajuan.detail',
                    $id
                )
                ->with(
                    'success',
                    'Pengajuan surat berhasil ditolak.'
                );

        }
    )->name(
        'kepala-desa.pengajuan.tolak'
    );



    Route::get(
        '/kepala-desa/pengajuan-surat/{id}/surat',
        function ($id) {

            abort_unless(
                auth()->user()->role === 'kepala_desa',
                403
            );


            $pengajuan = DB::table(
                'pengajuan_surat'
            )

                ->join(
                    'users',
                    'users.id',
                    '=',
                    'pengajuan_surat.user_id'
                )

                ->select(
                    'pengajuan_surat.*',
                    'users.name as nama_warga',
                    'users.nik as nik',
                    'users.tempat_lahir as tempat_lahir',
                    'users.tanggal_lahir as tanggal_lahir',
                    'users.jenis_kelamin as jenis_kelamin',
                    'users.agama as agama',
                    'users.status_perkawinan as status_perkawinan',
                    'users.pekerjaan as pekerjaan',
                    'users.alamat as alamat',
                    'users.rt as rt',
                    'users.rw as rw',
                    'users.desa as desa',
                    'users.kecamatan as kecamatan',
                    'users.kabupaten as kabupaten',
                    'users.provinsi as provinsi'
                )

                ->where(
                    'pengajuan_surat.id',
                    $id
                )

                ->first();


            abort_unless(
                $pengajuan,
                404
            );


            abort_unless(
                $pengajuan->status === 'Selesai',
                403
            );


            return view(
                'kepala-desa.surat-pdf',
                compact('pengajuan')
            );

        }
    )->name(
        'kepala-desa.pengajuan.surat'
    );




    Route::get(
        '/sekdes/pengajuan-surat/{id}/surat',
        function ($id) {

            abort_unless(
                auth()->user()->role === 'sekdes',
                403
            );


            $pengajuan = DB::table(
                'pengajuan_surat'
            )

                ->join(
                    'users',
                    'users.id',
                    '=',
                    'pengajuan_surat.user_id'
                )

                ->select(
                    'pengajuan_surat.*',
                    'users.name as nama_warga',
                    'users.nik as nik',
                    'users.tempat_lahir as tempat_lahir',
                    'users.tanggal_lahir as tanggal_lahir',
                    'users.jenis_kelamin as jenis_kelamin',
                    'users.agama as agama',
                    'users.status_perkawinan as status_perkawinan',
                    'users.pekerjaan as pekerjaan',
                    'users.alamat as alamat',
                    'users.rt as rt',
                    'users.rw as rw',
                    'users.desa as desa',
                    'users.kecamatan as kecamatan',
                    'users.kabupaten as kabupaten',
                    'users.provinsi as provinsi'
                )

                ->where(
                    'pengajuan_surat.id',
                    $id
                )

                ->first();


            abort_unless(
                $pengajuan,
                404
            );


            abort_unless(
                strtolower($pengajuan->status) === 'selesai',
                403
            );


            return view(
                'sekdes.surat-pdf',
                compact('pengajuan')
            );

        }
    )->name(
        'sekdes.pengajuan.surat'
    );




    Route::get(
        '/kepala-desa/informasi',
        function () {

            abort_unless(
                auth()->user()->role === 'kepala_desa',
                403
            );

            $informasi = DB::table('informasi')
                ->orderByDesc('created_at')
                ->get();

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
                        'users.name as nama_pengguna'
                    )
                    ->orderBy(
                        'komentar.created_at',
                        'asc'
                    )
                    ->get();
            }

            return view(
                'kepala-desa.informasi',
                compact('informasi')
            );

        }
    )->name(
        'kepala-desa.informasi'
    );



    Route::get(
        '/kepala-desa/informasi/tambah',
        function () {

            abort_unless(
                auth()->user()->role === 'kepala_desa',
                403
            );


            return view(
                'kepala-desa.informasi-tambah'
            );

        }
    )->name(
        'kepala-desa.informasi.tambah'
    );



    Route::post(
        '/kepala-desa/informasi',
        function () {

            abort_unless(
                auth()->user()->role === 'kepala_desa',
                403
            );


            request()->validate([

                'judul' => [
                    'required',
                    'string',
                    'max:255',
                ],

                'isi' => [
                    'required',
                    'string',
                ],

                'kategori' => [
                    'required',
                    'string',
                    'max:100',
                ],

                'status' => [
                    'required',
                    'in:Publikasi,Draft',
                ],

            ]);


            DB::table(
                'informasi'
            )->insert([

                'judul' =>
                    request('judul'),

                'isi' =>
                    request('isi'),

                'kategori' =>
                    request('kategori'),

                'status' =>
                    request('status'),

                'dibuat_oleh' =>
                    auth()->id(),

                'created_at' =>
                    now(),

                'updated_at' =>
                    now(),

            ]);


            return redirect()
                ->route(
                    'kepala-desa.informasi'
                )
                ->with(
                    'success',
                    'Informasi berhasil dibuat.'
                );

        }
    )->name(
        'kepala-desa.informasi.store'
    );



    Route::get(
        '/kepala-desa/informasi/{id}/edit',
        function ($id) {

            abort_unless(
                auth()->user()->role === 'kepala_desa',
                403
            );

            $informasi = DB::table('informasi')
                ->where('id', $id)
                ->first();

            abort_unless(
                $informasi,
                404
            );

            return view(
                'kepala-desa.informasi-edit',
                compact('informasi')
            );

        }
    )->name(
        'kepala-desa.informasi.edit'
    );


    Route::put(
        '/kepala-desa/informasi/{id}',
        function (Request $request, $id) {

            abort_unless(
                auth()->user()->role === 'kepala_desa',
                403
            );

            $validated = $request->validate([
                'judul' => [
                    'required',
                    'string',
                    'max:255',
                ],
                'isi' => [
                    'required',
                    'string',
                ],
                'kategori' => [
                    'required',
                    'string',
                    'max:100',
                ],
                'status' => [
                    'required',
                    'in:Publikasi,Draft',
                ],
            ]);

            $informasi = DB::table('informasi')
                ->where('id', $id)
                ->first();

            abort_unless(
                $informasi,
                404
            );

            DB::table('informasi')
                ->where('id', $id)
                ->update([
                    'judul' => $validated['judul'],
                    'isi' => $validated['isi'],
                    'kategori' => $validated['kategori'],
                    'status' => $validated['status'],
                    'updated_at' => now(),
                ]);

            return redirect()
                ->route('kepala-desa.informasi')
                ->with(
                    'success',
                    'Informasi berhasil diperbarui.'
                );

        }
    )->name(
        'kepala-desa.informasi.update'
    );



    Route::post(
        '/kepala-desa/informasi/{informasiId}/komentar',
        function (Request $request, $informasiId) {

            abort_unless(
                auth()->user()->role === 'kepala_desa',
                403
            );

            $validated = $request->validate([
                'komentar' => [
                    'required',
                    'string',
                    'max:1000',
                ],
            ]);

            $informasi = DB::table('informasi')
                ->where('id', $informasiId)
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

            return redirect()
                ->route('kepala-desa.informasi')
                ->with(
                    'success',
                    'Komentar berhasil ditambahkan.'
                );

        }
    )->name(
        'kepala-desa.informasi.komentar'
    );



    Route::delete(
        '/kepala-desa/informasi/{id}',
        function ($id) {

            abort_unless(
                auth()->user()->role === 'kepala_desa',
                403
            );


            $informasi = DB::table(
                'informasi'
            )
                ->where('id', $id)
                ->first();

            abort_unless(
                $informasi,
                404
            );


            DB::table('komentar')
                ->where('informasi_id', $id)
                ->delete();

            DB::table(
                'informasi'
            )
                ->where('id', $id)
                ->delete();


            return redirect()
                ->route(
                    'kepala-desa.informasi'
                )
                ->with(
                    'success',
                    'informasi berhasil dihapus.'
                );

        }
    )->name(
        'kepala-desa.informasi.hapus'
    );



    Route::get(
        '/pengajuan-surat',
        function () {

            abort_unless(
                auth()->user()->role === 'warga',
                403
            );

            return app(
                PengajuanSuratController::class
            )->index();

        }
    )->name(
        'warga.pengajuan'
    );


    Route::post(
        '/pengajuan-surat',
        function (Request $request) {

            abort_unless(
                auth()->user()->role === 'warga',
                403
            );

            return app(
                PengajuanSuratController::class
            )->store($request);

        }
    )->name(
        'warga.pengajuan.store'
    );



    Route::get(
        '/pengajuan-surat/{id}',
        function ($id) {

            abort_unless(
                auth()->user()->role === 'warga',
                403
            );

            return app(
                PengajuanSuratController::class
            )->show($id);

        }
    )->name(
        'pengajuan-surat.detail'
    );



    Route::get(
        '/warga/informasi',
        [InformasiController::class, 'index']
    )->name(
        'warga.informasi'
    );


    Route::post(
        '/warga/informasi/{informasiId}/komentar',
        [InformasiController::class, 'storeKomentar']
    )->name(
        'warga.informasi.komentar'
    );



    Route::get(
        '/warga/agenda',
        [AgendaController::class, 'index']
    )->name(
        'warga.agenda'
    );



    Route::get(
        '/pengajuan-surat/{id}/surat',
        function ($id) {

            abort_unless(
                auth()->user()->role === 'warga',
                403
            );


            $pengajuan = DB::table(
                'pengajuan_surat'
            )

                ->join(
                    'users',
                    'users.id',
                    '=',
                    'pengajuan_surat.user_id'
                )

                ->select(
                    'pengajuan_surat.*',

                    // DATA AKUN WARGA
                    'users.name as nama_warga',

                    // DATA IDENTITAS WARGA DARI profil_warga
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

                ->where(
                    'pengajuan_surat.id',
                    $id
                )

                ->where(
                    'pengajuan_surat.user_id',
                    auth()->id()
                )

                ->first();


            abort_unless(
                $pengajuan,
                404
            );


            $status = strtolower(
                trim(
                    $pengajuan->status ?? ''
                )
            );


            abort_unless(
                in_array(
                    $status,
                    [
                        'selesai',
                        'disetujui',
                    ],
                    true
                ),
                403
            );



            $jenisSurat = strtolower(
                trim(
                    $pengajuan->jenis_surat ?? ''
                )
            );


            $template = match ($jenisSurat) {

                'pengantar',
                'surat pengantar'
                    => 'warga.surat.surat-pengantar',

                'domisili',
                'surat domisili',
                'surat keterangan domisili'
                    => 'warga.surat.surat-domisili',

                'keterangan_usaha',
                'surat usaha',
                'surat keterangan usaha'
                    => 'warga.surat.surat-usaha',

                'keterangan_tidak_mampu',
                'tidak_mampu',
                'surat tidak mampu',
                'surat keterangan tidak mampu'
                    => 'warga.surat.surat-tidak-mampu',

                'keterangan_kelahiran',
                'kelahiran',
                'surat kelahiran',
                'surat keterangan kelahiran'
                    => 'warga.surat.surat-kelahiran',

                'keterangan_kematian',
                'kematian',
                'surat kematian',
                'surat keterangan kematian'
                    => 'warga.surat.surat-kematian',

                default => abort(
                    404,
                    'Template surat tidak ditemukan.'
                ),
            };


            return view(
                $template,
                compact('pengajuan')
            );

        }
    )->name(
        'warga.pengajuan.surat'
    );


    Route::get(
        '/surat/{id}',
        function ($id) {

            abort_unless(
                auth()->user()->role === 'warga',
                403
            );

            return redirect()->route(
                'warga.pengajuan.surat',
                $id
            );

        }
    )->name(
        'warga.surat'
    );


    Route::get(
        '/profil-warga',
        [ProfileController::class, 'edit']
    )->name(
        'warga.profil'
    );

    Route::put(
        '/profil-warga',
        [ProfileController::class, 'update']
    )->name(
        'warga.profil.update'
    );


    Route::get(
        '/profile',
        [ProfileController::class, 'edit']
    )->name(
        'profile.edit'
    );


    Route::patch(
        '/profile',
        [ProfileController::class, 'update']
    )->name(
        'profile.update'
    );


    Route::delete(
        '/profile',
        [ProfileController::class, 'destroy']
    )->name(
        'profile.destroy'
    );

});


require __DIR__.'/auth.php';
