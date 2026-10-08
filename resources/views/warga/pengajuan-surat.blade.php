<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Pengajuan Surat - Desa Sukamerindu</title>


    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;

            font-family:
                "Segoe UI",
                Arial,
                sans-serif;
        }


        body {

            min-height: 100vh;

            background: #f3f6f9;

            color: #1f2937;
        }


        .page-content {

            min-height:
                calc(100vh - 76px);

            background: #f3f6f9;

            padding:
                50px 45px;
        }


        .content-container {

            max-width: 1250px;

            margin: 0 auto;
        }


        .page-header {

            margin-bottom: 28px;
        }


        .page-header h1 {

            color: #0f2f52;

            font-size: 32px;

            font-weight: 800;

            margin-bottom: 7px;
        }


        .page-header p {

            color: #66809e;

            font-size: 14px;
        }


        .card {

            background: #ffffff;

            border:
                1px solid #e5e7eb;

            border-radius: 16px;

            padding:
                30px;

            margin-bottom: 18px;

            box-shadow:
                0 4px 15px
                rgba(0, 0, 0, .04);
        }


        .welcome-card {

            margin-bottom: 18px;
        }


        .welcome-card h2 {

            color: #087443;

            font-size: 19px;

            font-weight: 800;

            margin-bottom: 7px;
        }


        .welcome-card p {

            color: #66809e;

            font-size: 13px;
        }


        .card-header {

            margin-bottom: 22px;
        }


        .card-header h2 {

            color: #0f2f52;

            font-size: 19px;

            font-weight: 800;

            margin-bottom: 5px;
        }


        .card-header p {

            color: #66809e;

            font-size: 13px;
        }


        /* =====================================================
           FORM
        ===================================================== */

        .form-group {

            margin-bottom: 18px;
        }


        .form-group label {

            display: block;

            margin-bottom: 7px;

            color: #0f2f52;

            font-size: 13px;

            font-weight: 700;
        }


        .form-control {

            width: 100%;

            padding:
                11px 13px;

            border:
                1px solid #d1dce8;

            border-radius: 7px;

            background: #ffffff;

            color: #374151;

            font-size: 13px;

            outline: none;

            transition: .2s;
        }


        .form-control:focus {

            border-color: #16824d;

            box-shadow:
                0 0 0 3px
                rgba(22, 130, 77, .08);
        }


        textarea.form-control {

            min-height: 105px;

            resize: vertical;
        }


        .btn-submit {

            display: inline-flex;

            align-items: center;

            justify-content: center;

            gap: 6px;

            padding:
                9px 15px;

            background: #087f42;

            color: #ffffff;

            border: none;

            border-radius: 7px;

            font-size: 13px;

            font-weight: 700;

            cursor: pointer;

            transition: .2s;
        }


        .btn-submit:hover {

            background: #066b37;
        }


        /* =====================================================
           ALERT
        ===================================================== */

        .alert-success {

            padding:
                12px 15px;

            margin-bottom: 18px;

            background: #dcfce7;

            border:
                1px solid #bbf7d0;

            color: #166534;

            border-radius: 8px;

            font-size: 13px;

            font-weight: 600;
        }


        .alert-error {

            padding:
                12px 15px;

            margin-bottom: 18px;

            background: #fee2e2;

            border:
                1px solid #fecaca;

            color: #b91c1c;

            border-radius: 8px;

            font-size: 13px;
        }


        .alert-error ul {

            margin-left: 18px;
        }


        /* =====================================================
           TABEL PENGAJUAN SURAT
        ===================================================== */

        .table-wrapper {

            width: 100%;

            overflow-x: auto;
        }


        .pengajuan-table {

            width: 100%;

            border-collapse: collapse;

            min-width: 900px;
        }


        .pengajuan-table thead {

            background: #eefbf3;
        }


        .pengajuan-table th {

            padding:
                12px 14px;

            text-align: left;

            color: #087443;

            font-size: 12px;

            font-weight: 700;

            white-space: nowrap;
        }


        .pengajuan-table td {

            padding:
                14px;

            border-bottom:
                1px solid #e5e7eb;

            color: #374151;

            font-size: 12px;

            vertical-align: middle;
        }


        .pengajuan-table tbody tr:hover {

            background: #fafafa;
        }


        /* =====================================================
           STATUS
        ===================================================== */

        .status {

            display: inline-block;

            padding:
                6px 10px;

            border-radius: 999px;

            font-size: 11px;

            font-weight: 600;

            white-space: nowrap;
        }


        .status-menunggu {

            background: #fff3cd;

            color: #a16207;
        }


        .status-disetujui {

            background: #dbeafe;

            color: #1d4ed8;
        }


        .status-selesai {

            background: #dcfce7;

            color: #15803d;
        }


        .status-ditolak {

            background: #fee2e2;

            color: #dc2626;
        }


        /* =====================================================
           KETERANGAN
        ===================================================== */

        .keterangan-cell {

            max-width: 250px;

            line-height: 1.5;

            word-break: break-word;
        }


        /* =====================================================
           TOMBOL DETAIL
        ===================================================== */

        .btn-detail {

            display: inline-flex;

            align-items: center;

            gap: 5px;

            padding:
                7px 11px;

            background: #6b7280;

            color: #ffffff;

            text-decoration: none;

            border-radius: 7px;

            font-size: 11px;

            font-weight: 600;

            white-space: nowrap;

            transition: .2s;
        }


        .btn-detail:hover {

            background: #4b5563;

            color: #ffffff;
        }


        /* =====================================================
           DATA KOSONG
        ===================================================== */

        .empty-data {

            text-align: center !important;

            padding: 30px !important;

            color: #6b7280 !important;
        }


        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 600px) {

            .page-content {

                padding:
                    25px 15px;
            }


            .page-header h1 {

                font-size: 24px;
            }


            .card {

                padding: 20px;
            }

        }

    </style>

</head>


<body>


    {{-- =====================================================
         NAVBAR
         JANGAN DIUBAH
    ====================================================== --}}

    @include('layouts.navigation')


    <main class="page-content">

        <div class="content-container">


            {{-- =================================================
                 HEADER
            ================================================== --}}

            <div class="page-header">

                <h1>
                    Pengajuan Surat
                </h1>

                <p>
                    Ajukan surat administrasi desa secara online dengan mudah dan cepat.
                </p>

            </div>


            {{-- =================================================
                 PESAN SUCCESS
            ================================================== --}}

            @if(session('success'))

                <div class="alert-success">

                    {{ session('success') }}

                </div>

            @endif


            {{-- =================================================
                 PESAN ERROR
            ================================================== --}}

            @if($errors->any())

                <div class="alert-error">

                    <ul>

                        @foreach($errors->all() as $error)

                            <li>
                                {{ $error }}
                            </li>

                        @endforeach

                    </ul>

                </div>

            @endif


            {{-- =================================================
                 WELCOME
            ================================================== --}}

            <div class="card welcome-card">

                <h2>
                    Halo, {{ auth()->user()->name }} 👋
                </h2>

                <p>
                    Silakan pilih jenis surat yang ingin kamu ajukan.
                    Pengajuan akan diproses oleh pihak desa.
                </p>

            </div>


            {{-- =================================================
                 FORM PENGAJUAN
            ================================================== --}}

            <div class="card">

                <div class="card-header">

                    <h2>
                        Form Pengajuan Surat
                    </h2>

                </div>


                <form
                    action="{{ route('warga.pengajuan.store') }}"
                    method="POST"
                >

                    @csrf


                    {{-- JENIS SURAT --}}

                    <div class="form-group">

                        <label for="jenis_surat">
                            Jenis Surat
                        </label>


                        <select
                            name="jenis_surat"
                            id="jenis_surat"
                            class="form-control"
                            required
                        >

                            <option value="">
                                -- Pilih Jenis Surat --
                            </option>

                            <option value="domisili">
                                Surat Keterangan Domisili
                            </option>

                            <option value="pengantar">
                                Surat Pengantar
                            </option>

                            <option value="tidak_mampu">
                                Surat Keterangan Tidak Mampu
                            </option>

                            <option value="usaha">
                                Surat Keterangan Usaha
                            </option>

                            <option value="kelahiran">
                                Surat Keterangan Kelahiran
                            </option>

                            <option value="kematian">
                                Surat Keterangan Kematian
                            </option>

                        </select>

                    </div>


                    {{-- KETERANGAN --}}

                    <div class="form-group">

                        <label for="keterangan">
                            Keterangan / Keperluan
                        </label>


                        <textarea
                            name="keterangan"
                            id="keterangan"
                            class="form-control"
                            placeholder="Jelaskan keperluan pengajuan surat..."
                            required
                        ></textarea>

                    </div>


                    {{-- BUTTON --}}

                    <button
                        type="submit"
                        class="btn-submit"
                    >

                        📄
                        Ajukan Surat

                    </button>


                </form>

            </div>


            {{-- =================================================
                 DAFTAR PENGAJUAN
            ================================================== --}}

            <div class="card">

                <div class="card-header">

                    <h2>
                        Daftar Pengajuan Surat
                    </h2>

                    <p>
                        Lihat riwayat pengajuan surat yang telah kamu ajukan.
                    </p>

                </div>


                <div class="table-wrapper">

                    <table class="pengajuan-table">

                        <thead>

                            <tr>

                                <th>
                                    Nama
                                </th>

                                <th>
                                    Jenis Surat
                                </th>

                                <th>
                                    Tanggal
                                </th>

                                <th>
                                    Status
                                </th>

                                <th>
                                    Keterangan
                                </th>

                                <th>
                                    Aksi
                                </th>

                            </tr>

                        </thead>


                        <tbody>

                            @forelse($pengajuanSurat as $pengajuan)

                                <tr>


                                    {{-- NAMA --}}

                                    <td>

                                        {{ auth()->user()->name }}

                                    </td>


                                    {{-- JENIS SURAT --}}

                                    <td>

                                        {{ $pengajuan->jenis_surat ?? '-' }}

                                    </td>


                                    {{-- TANGGAL --}}

                                    <td>

                                        {{ \Carbon\Carbon::parse($pengajuan->created_at)->format('d/m/Y') }}

                                    </td>


                                    {{-- STATUS --}}

                                    <td>

                                        @if($pengajuan->status == 'menunggu')

                                            <span class="status status-menunggu">
                                                Menunggu Persetujuan Kepala Desa
                                            </span>

                                        @elseif($pengajuan->status == 'disetujui')

                                            <span class="status status-disetujui">
                                                Disetujui
                                            </span>

                                        @elseif($pengajuan->status == 'selesai')

                                            <span class="status status-selesai">
                                                Selesai
                                            </span>

                                        @elseif($pengajuan->status == 'ditolak')

                                            <span class="status status-ditolak">
                                                Ditolak
                                            </span>

                                        @else

                                            <span class="status">
                                                {{ ucfirst($pengajuan->status ?? '-') }}
                                            </span>

                                        @endif

                                    </td>


                                    {{-- KETERANGAN --}}

                                    <td>

                                        <div class="keterangan-cell">

                                            {{ $pengajuan->keterangan ?? '-' }}

                                        </div>

                                    </td>


                                    {{-- AKSI --}}

                                    <td>

                                        <a
                                            href="{{ route('pengajuan-surat.detail', $pengajuan->id) }}"
                                            class="btn-detail"
                                        >

                                            👁
                                            Detail

                                        </a>

                                    </td>


                                </tr>

                            @empty

                                <tr>

                                    <td
                                        colspan="6"
                                        class="empty-data"
                                    >

                                        Belum ada pengajuan surat.

                                    </td>

                                </tr>

                            @endforelse

                        </tbody>

                    </table>

                </div>

            </div>


        </div>

    </main>


</body>

</html>
