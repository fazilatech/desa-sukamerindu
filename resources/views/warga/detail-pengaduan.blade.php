{{-- resources/views/warga/pengaduan.blade.php --}}

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Pengaduan Desa | Desa Sukamerindu</title>


    <style>

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }


        body {

            font-family:
                Arial,
                Helvetica,
                sans-serif;

            background: #f4f7fa;

            color: #153b60;

        }


        /* =====================================================
           MAIN
        ===================================================== */

        .page {

            max-width: 1160px;

            margin: 0 auto;

            padding: 52px 20px 70px;

        }


        .page-header {

            margin-bottom: 28px;

        }


        .page-title {

            font-size: 31px;

            line-height: 1.2;

            font-weight: 800;

            color: #153b60;

            margin-bottom: 8px;

        }


        .page-description {

            color: #6d87a2;

            font-size: 13px;

            line-height: 1.6;

        }


        .content-grid {

            display: grid;

            grid-template-columns:
                minmax(0, 1.7fr)
                minmax(310px, .9fr);

            gap: 22px;

            align-items: start;

        }


        /* =====================================================
           CARD
        ===================================================== */

        .card {

            background: #ffffff;

            border: 1px solid #e1e8ee;

            border-radius: 16px;

            overflow: hidden;

            box-shadow:
                0 3px 15px rgba(30, 60, 90, .04);

        }


        .card-header {

            min-height: 84px;

            padding: 20px 24px;

            display: flex;

            align-items: center;

            gap: 13px;

            border-bottom: 1px solid #edf1f4;

        }


        .card-icon {

            width: 43px;

            height: 43px;

            border-radius: 12px;

            background: #dcf9e8;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 21px;

            flex-shrink: 0;

        }


        .card-heading {

            min-width: 0;

        }


        .card-title {

            font-size: 17px;

            color: #087a3d;

            font-weight: 800;

        }


        .card-subtitle {

            margin-top: 5px;

            color: #8294a8;

            font-size: 12px;

        }


        .card-body {

            padding: 24px;

        }



        /* =====================================================
           FORM
        ===================================================== */

        .form-group {

            margin-bottom: 18px;

        }


        .form-label {

            display: block;

            margin-bottom: 8px;

            color: #183d61;

            font-size: 13px;

            font-weight: 700;

        }


        .required {

            color: #e45656;

        }


        .form-control {

            width: 100%;

            min-height: 43px;

            border: 1px solid #d9e3eb;

            border-radius: 9px;

            padding: 11px 13px;

            font-family: inherit;

            font-size: 13px;

            color: #244564;

            background: #ffffff;

            outline: none;

            transition: .2s;

        }


        .form-control:focus {

            border-color: #35b878;

            box-shadow:
                0 0 0 3px rgba(53, 184, 120, .10);

        }


        textarea.form-control {

            min-height: 125px;

            resize: vertical;

            line-height: 1.6;

        }


        select.form-control {

            cursor: pointer;

        }


        .form-help {

            margin-top: 7px;

            color: #91a1b2;

            font-size: 10px;

            line-height: 1.5;

        }


        .file-box {

            border: 1px dashed #cfdde8;

            border-radius: 10px;

            padding: 13px;

            background: #fbfdfe;

        }


        .file-box input {

            width: 100%;

            font-size: 12px;

            color: #60778e;

        }


        .submit-button {

            width: 100%;

            border: none;

            border-radius: 9px;

            background: #087a3d;

            color: #ffffff;

            min-height: 45px;

            font-size: 13px;

            font-weight: 700;

            cursor: pointer;

            transition: .2s;

        }


        .submit-button:hover {

            background: #066b35;

        }



        /* =====================================================
           PENGADUAN SAYA
        ===================================================== */

        .complaint-list {

            display: flex;

            flex-direction: column;

            gap: 12px;

        }


        .complaint-item {

            border: 1px solid #dfe7ed;

            border-radius: 13px;

            padding: 16px;

            background: #ffffff;

        }


        .complaint-top {

            display: flex;

            justify-content: space-between;

            align-items: flex-start;

            gap: 12px;

        }


        .complaint-title {

            color: #153b60;

            font-size: 13px;

            font-weight: 800;

            line-height: 1.4;

        }


        .complaint-date {

            margin-top: 5px;

            color: #8a9caf;

            font-size: 10px;

        }


        .complaint-category {

            margin-top: 4px;

            color: #7d91a5;

            font-size: 10px;

        }


        .complaint-description {

            margin-top: 13px;

            color: #627a92;

            font-size: 11px;

            line-height: 1.6;

        }


        .complaint-detail {

            margin-top: 14px;

            border-top: 1px solid #edf1f4;

            padding-top: 11px;

        }


        .complaint-detail summary {

            display: inline-flex;

            align-items: center;

            gap: 7px;

            color: #087a45;

            font-size: 11px;

            font-weight: 700;

            cursor: pointer;

            list-style: none;

            user-select: none;

        }


        .complaint-detail summary::-webkit-details-marker {

            display: none;

        }


        .complaint-detail summary::after {

            content: "＋";

            font-size: 14px;

            line-height: 1;

        }


        .complaint-detail[open] summary::after {

            content: "−";

        }


        .complaint-detail-body {

            margin-top: 13px;

            padding: 13px;

            border-radius: 10px;

            background: #f7faf8;

            color: #526a60;

            font-size: 11px;

            line-height: 1.7;

            overflow-wrap: anywhere;

        }


        .complaint-detail-label {

            margin: 0 0 3px;

            color: #234a38;

            font-size: 10px;

            font-weight: 800;

        }


        .complaint-detail-value {

            margin: 0 0 12px;

            white-space: pre-line;

        }


        .complaint-photo {

            display: block;

            width: 100%;

            max-height: 280px;

            object-fit: contain;

            margin-top: 8px;

            border: 1px solid #dce8e0;

            border-radius: 9px;

            background: #fff;

        }


        .complaint-no-photo {

            color: #819187;

            font-size: 10px;

            font-style: italic;

        }


        .status {

            flex-shrink: 0;

            border-radius: 30px;

            padding: 7px 11px;

            font-size: 10px;

            font-weight: 700;

        }


        .status-menunggu {

            color: #a76b00;

            background: #fff3d2;

        }


        .status-proses {

            color: #a76b00;

            background: #fff3d2;

        }


        .status-selesai {

            color: #087a3d;

            background: #d9f9e7;

        }


        .status-ditolak {

            color: #a44b4b;

            background: #fbe3e3;

        }


        .status-default {

            color: #597188;

            background: #edf2f6;

        }



        /* =====================================================
           ALUR PENGADUAN
        ===================================================== */

        .timeline {

            position: relative;

            padding: 20px 24px 24px;

        }


        .timeline-item {

            position: relative;

            display: flex;

            gap: 12px;

            padding-bottom: 23px;

        }


        .timeline-item:last-child {

            padding-bottom: 0;

        }


        .timeline-item:not(:last-child)::after {

            content: "";

            position: absolute;

            left: 11px;

            top: 25px;

            width: 1px;

            height: calc(100% - 15px);

            background: #d9ebe1;

        }


        .timeline-number {

            width: 23px;

            height: 23px;

            flex-shrink: 0;

            border-radius: 50%;

            background: #dcf9e8;

            color: #087a3d;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 11px;

            font-weight: 800;

            position: relative;

            z-index: 1;

        }


        .timeline-title {

            color: #183d61;

            font-size: 12px;

            font-weight: 800;

            line-height: 1.4;

        }


        .timeline-text {

            margin-top: 4px;

            color: #8497aa;

            font-size: 10px;

            line-height: 1.5;

        }



        /* =====================================================
           EMPTY STATE
        ===================================================== */

        .empty-state {

            text-align: center;

            padding: 28px 15px;

        }


        .empty-icon {

            font-size: 28px;

            margin-bottom: 9px;

        }


        .empty-title {

            color: #536c84;

            font-size: 13px;

            font-weight: 700;

        }


        .empty-text {

            margin-top: 5px;

            color: #9aaaba;

            font-size: 10px;

            line-height: 1.5;

        }



        /* =====================================================
           ALERT
        ===================================================== */

        .alert-success {

            margin-bottom: 20px;

            padding: 12px 15px;

            border-radius: 9px;

            background: #e1f8eb;

            border: 1px solid #bcebd0;

            color: #087a3d;

            font-size: 12px;

        }


        .alert-error {

            margin-bottom: 20px;

            padding: 12px 15px;

            border-radius: 9px;

            background: #fde9e9;

            border: 1px solid #f3caca;

            color: #a64444;

            font-size: 12px;

        }



        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 850px) {

            .content-grid {
                grid-template-columns: 1fr;
            }

        }


        @media (max-width: 600px) {

            .page {

                padding: 30px 13px 50px;

            }

            .page-title {

                font-size: 25px;

            }

            .card-header,
            .card-body {

                padding: 18px;

            }

            .user-information {

                display: none;

            }

            .user-area {

                min-width: 50px;

            }

            .complaint-top {

                flex-direction: column;

            }

        }

    </style>

</head>


<body>


@include('layouts.navigation')


{{-- =====================================================
     MAIN
===================================================== --}}

<main class="page">


    <div class="page-header">

        <h1 class="page-title">
            Pengaduan Desa
        </h1>

        <p class="page-description">
            Sampaikan pengaduan atau laporan terkait pelayanan
            dan kondisi di lingkungan Desa Sukamerindu.
        </p>

    </div>



    {{-- SUCCESS --}}

    @if(session('success'))

        <div class="alert-success">
            {{ session('success') }}
        </div>

    @endif


    {{-- ERROR --}}

    @if(session('error'))

        <div class="alert-error">
            {{ session('error') }}
        </div>

    @endif



    <div class="content-grid">


        {{-- =================================================
             KOLOM KIRI
        ================================================== --}}

        <div>


            {{-- BUAT PENGADUAN --}}

            <section class="card">


                <div class="card-header">

                    <div class="card-icon">
                        📢
                    </div>

                    <div class="card-heading">

                        <div class="card-title">
                            Buat Pengaduan
                        </div>

                        <div class="card-subtitle">
                            Sampaikan laporan kepada pemerintah desa.
                        </div>

                    </div>

                </div>



                <div class="card-body">


                    {{-- FORM ACTION
                         route POST harus tersedia
                    --}}

                    <form
                        action="{{ route('warga.pengaduan.store') }}"
                        method="POST"
                        enctype="multipart/form-data"
                    >

                        @csrf


                        {{-- JUDUL --}}

                        <div class="form-group">

                            <label
                                class="form-label"
                                for="judul"
                            >

                                Judul Pengaduan

                                <span class="required">
                                    *
                                </span>

                            </label>


                            <input
                                type="text"
                                name="judul"
                                id="judul"
                                class="form-control"
                                value="{{ old('judul') }}"
                                placeholder="Contoh: Lampu jalan di Dusun 2 mati"
                                required
                            >

                        </div>



                        {{-- KATEGORI --}}

                        <div class="form-group">

                            <label
                                class="form-label"
                                for="kategori"
                            >

                                Kategori Pengaduan

                                <span class="required">
                                    *
                                </span>

                            </label>


                            <select
                                name="kategori"
                                id="kategori"
                                class="form-control"
                                required
                            >

                                <option value="">
                                    -- Pilih Kategori --
                                </option>

                                <option
                                    value="Infrastruktur"
                                    {{ old('kategori') === 'Infrastruktur' ? 'selected' : '' }}
                                >
                                    Infrastruktur
                                </option>

                                <option
                                    value="Pelayanan Desa"
                                    {{ old('kategori') === 'Pelayanan Desa' ? 'selected' : '' }}
                                >
                                    Pelayanan Desa
                                </option>

                                <option
                                    value="Lingkungan"
                                    {{ old('kategori') === 'Lingkungan' ? 'selected' : '' }}
                                >
                                    Lingkungan
                                </option>

                                <option
                                    value="Kebersihan"
                                    {{ old('kategori') === 'Kebersihan' ? 'selected' : '' }}
                                >
                                    Kebersihan
                                </option>

                                <option
                                    value="Fasilitas Umum"
                                    {{ old('kategori') === 'Fasilitas Umum' ? 'selected' : '' }}
                                >
                                    Fasilitas Umum
                                </option>

                                <option
                                    value="Lainnya"
                                    {{ old('kategori') === 'Lainnya' ? 'selected' : '' }}
                                >
                                    Lainnya
                                </option>

                            </select>

                        </div>



                        {{-- LOKASI --}}

                        <div class="form-group">

                            <label
                                class="form-label"
                                for="lokasi"
                            >
                                Lokasi Kejadian
                            </label>


                            <input
                                type="text"
                                name="lokasi"
                                id="lokasi"
                                class="form-control"
                                value="{{ old('lokasi') }}"
                                placeholder="Contoh: Dusun 2, RT 03 / RW 02"
                            >

                        </div>



                        {{-- ISI --}}

                        <div class="form-group">

                            <label
                                class="form-label"
                                for="isi"
                            >

                                Isi Pengaduan

                                <span class="required">
                                    *
                                </span>

                            </label>


                            <textarea
                                name="isi"
                                id="isi"
                                class="form-control"
                                placeholder="Jelaskan permasalahan atau pengaduan yang ingin disampaikan..."
                                required
                            >{{ old('isi') }}</textarea>


                            <div class="form-help">

                                Jelaskan permasalahan secara singkat,
                                jelas, dan sesuai kondisi yang terjadi.

                            </div>

                        </div>



                        {{-- LAMPIRAN --}}

                        <div class="form-group">

                            <label class="form-label">
                                Lampiran Foto
                            </label>


                            <div class="file-box">

                                <input
                                    type="file"
                                    name="lampiran"
                                    accept="image/*"
                                >

                            </div>


                            <div class="form-help">
                                Lampiran bersifat opsional.
                            </div>

                        </div>



                        <button
                            type="submit"
                            class="submit-button"
                        >

                            Kirim Pengaduan

                        </button>


                    </form>

                </div>


            </section>


        </div>



        {{-- =================================================
             KOLOM KANAN
        ================================================== --}}

        <div>


            {{-- PENGADUAN SAYA --}}

            <section class="card">


                <div class="card-header">

                    <div class="card-icon">
                        📋
                    </div>

                    <div class="card-heading">

                        <div class="card-title">
                            Pengaduan Saya
                        </div>

                        <div class="card-subtitle">
                            Pantau perkembangan pengaduan Anda.
                        </div>

                    </div>

                </div>



                <div class="card-body">


                    <div class="complaint-list">


                        {{-- =================================================
                             DATA DATABASE
                             TIDAK ADA DATA CONTOH DI SINI
                        ================================================== --}}

                        @forelse($pengaduan as $item)


                            <div class="complaint-item">


                                <div class="complaint-top">


                                    <div>

                                        <div class="complaint-title">

                                            {{ $item->judul }}

                                        </div>


                                        <div class="complaint-date">

                                            {{ \Carbon\Carbon::parse(
                                                $item->created_at
                                            )->locale('id')->translatedFormat(
                                                'd F Y'
                                            ) }}

                                        </div>


                                        @if(isset($item->kategori))

                                            <div class="complaint-category">

                                                Kategori:
                                                {{ $item->kategori }}

                                            </div>

                                        @endif

                                    </div>



                                    @php

                                        $status =
                                            $item->status ?? 'Menunggu';

                                        $statusClass = match ($status) {

                                            'Selesai'
                                                => 'status-selesai',

                                            'Diproses'
                                                => 'status-proses',

                                            'Ditolak'
                                                => 'status-ditolak',

                                            'Menunggu',
                                            'Diajukan'
                                                => 'status-menunggu',

                                            default
                                                => 'status-default',

                                        };

                                    @endphp


                                    <span
                                        class="status {{ $statusClass }}"
                                    >

                                        {{ $status }}

                                    </span>


                                </div>



                                <details class="complaint-detail">

                                    <summary>
                                        Lihat detail pengaduan
                                    </summary>

                                    <div class="complaint-detail-body">

                                        <div class="complaint-detail-label">
                                            Lokasi Kejadian
                                        </div>

                                        <div class="complaint-detail-value">
                                            {{ $item->lokasi ?? 'Tidak dicantumkan' }}
                                        </div>


                                        <div class="complaint-detail-label">
                                            Isi Pengaduan
                                        </div>

                                        <div class="complaint-detail-value">
                                            {{ $item->isi ?? 'Tidak ada keterangan.' }}
                                        </div>


                                        <div class="complaint-detail-label">
                                            Foto Lampiran
                                        </div>

                                        @php
                                            $fotoPengaduan = $item->lampiran ?? $item->foto ?? null;
                                        @endphp

                                        @if($fotoPengaduan)
                                            <a
                                                href="{{ \Illuminate\Support\Facades\Storage::url($fotoPengaduan) }}"
                                                target="_blank"
                                                rel="noopener noreferrer"
                                            >
                                                <img
                                                    src="{{ \Illuminate\Support\Facades\Storage::url($fotoPengaduan) }}"
                                                    alt="Foto lampiran pengaduan {{ $item->judul }}"
                                                    class="complaint-photo"
                                                    loading="lazy"
                                                >
                                            </a>

                                            <div class="complaint-no-photo" style="margin-top:7px;">
                                                Klik foto untuk melihat ukuran penuh.
                                            </div>
                                        @else
                                            <div class="complaint-no-photo">
                                                Tidak ada foto yang dilampirkan.
                                            </div>
                                        @endif

                                    </div>

                                </details>


                            </div>


                        @empty


                            {{-- TIDAK ADA DATA --}}

                            <div class="empty-state">

                                <div class="empty-icon">
                                    📋
                                </div>


                                <div class="empty-title">
                                    Belum Ada Pengaduan
                                </div>


                                <div class="empty-text">

                                    Pengaduan yang Anda kirim
                                    akan muncul di sini.

                                </div>

                            </div>


                        @endforelse


                    </div>


                </div>


            </section>



            {{-- ALUR PENGADUAN --}}

            <section
                class="card"
                style="margin-top:22px;"
            >


                <div class="card-header">

                    <div class="card-icon">
                        🔄
                    </div>

                    <div class="card-heading">

                        <div class="card-title">
                            Alur Pengaduan
                        </div>

                        <div class="card-subtitle">
                            Tahapan proses pengaduan desa.
                        </div>

                    </div>

                </div>



                <div class="timeline">


                    {{-- 1 --}}

                    <div class="timeline-item">

                        <div class="timeline-number">
                            1
                        </div>


                        <div>

                            <div class="timeline-title">
                                Warga Mengirim Pengaduan
                            </div>

                            <div class="timeline-text">
                                Warga mengisi dan mengirim laporan
                                melalui sistem.
                            </div>

                        </div>

                    </div>



                    {{-- 2 --}}

                    <div class="timeline-item">

                        <div class="timeline-number">
                            2
                        </div>


                        <div>

                            <div class="timeline-title">
                                Sekdes Menerima dan Memverifikasi
                            </div>

                            <div class="timeline-text">
                                Sekdes menerima dan memeriksa
                                pengaduan yang disampaikan warga.
                            </div>

                        </div>

                    </div>



                    {{-- 3 --}}

                    <div class="timeline-item">

                        <div class="timeline-number">
                            3
                        </div>


                        <div>

                            <div class="timeline-title">
                                Pengaduan Ditindaklanjuti
                            </div>

                            <div class="timeline-text">
                                Pengaduan diteruskan kepada
                                pihak yang terkait.
                            </div>

                        </div>

                    </div>



                    {{-- 4 --}}

                    <div class="timeline-item">

                        <div class="timeline-number">
                            4
                        </div>


                        <div>

                            <div class="timeline-title">
                                Status Diperbarui
                            </div>

                            <div class="timeline-text">
                                Warga dapat melihat perkembangan
                                pengaduan melalui halaman ini.
                            </div>

                        </div>

                    </div>


                </div>


            </section>


        </div>


    </div>


</main>


</body>

</html>
