<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Detail Pengajuan Surat - Sekretaris Desa
    </title>


    <style>

/* =====================================================
           LAYOUT
        ===================================================== */

        .layout {
            display: flex;
            min-height: 100vh;
        }


        /* =====================================================
           SIDEBAR SEKDES
           DIBUAT SEPERTI SIDEBAR KEPALA DESA
        ===================================================== */

        .sidebar {
            width: 255px;
            background: #08733a;
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;
            padding: 30px 14px;
            color: #ffffff;
        }


        /* =====================================================
           BRAND
        ===================================================== */

        .brand {
            padding: 0 10px 30px;
            text-align: center;
            border-bottom: 1px solid rgba(255,255,255,0.25);
            margin-bottom: 22px;
        }


        .brand-logo {
            width: 90px;
            height: 90px;
            object-fit: contain;
            display: block;
            margin: 0 auto 15px;
        }


        .brand h2 {
            font-size: 20px;
            font-weight: 800;
            color: #ffffff;
            line-height: 1.3;
        }


        .brand p {
            margin-top: 8px;
            font-size: 13px;
            color: #ffffff;
        }


        /* =====================================================
           MENU SIDEBAR
        ===================================================== */

        .menu {
            display: flex;
            flex-direction: column;
            gap: 7px;
        }


        .menu a {
            text-decoration: none;
            color: #ffffff;
            padding: 14px 18px;
            border-radius: 9px;
            font-size: 14px;
            font-weight: 600;

            display: flex;
            align-items: center;

            gap: 12px;

            transition: 0.2s;
        }


        .menu a:hover {
            background: rgba(255,255,255,0.12);
            color: #ffffff;
        }


        .menu a.active {
            background: rgba(255,255,255,0.16);
            color: #ffffff;

            border: 1px solid rgba(255,255,255,0.45);
        }


        .menu-icon {
            width: 20px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }


        /* =====================================================
           MAIN
        ===================================================== */

        .main {
            margin-left: 255px;
            width: calc(100% - 255px);
        }


        /* =====================================================
           TOPBAR
        ===================================================== */

        .topbar {
            height: 75px;
            background: #ffffff;
            border-bottom: 1px solid #e5e7eb;

            display: flex;
            align-items: center;
            justify-content: space-between;

            padding: 0 35px;
        }


        .page-title {
            font-size: 20px;
            font-weight: 800;
            color: #173f67;
        }


        /* =====================================================
           PROFILE
        ===================================================== */

        .profile-dropdown {
            position: relative;
        }


        .profile-dropdown summary {
            list-style: none;
            cursor: pointer;
        }


        .profile-dropdown summary::-webkit-details-marker {
            display: none;
        }


        .profile {
            display: flex;
            align-items: center;
            gap: 12px;

            padding: 5px 8px;
            border-radius: 10px;

            transition: 0.2s;
        }


        .profile:hover {
            background: #f4f7fb;
        }


        .profile-arrow {
            margin-left: 3px;
            font-size: 11px;
            color: #718398;
        }


        .profile-dropdown[open] .profile-arrow {
            transform: rotate(180deg);
        }


        .profile-menu {
            position: absolute;

            top: calc(100% + 10px);
            right: 0;

            width: 170px;

            background: #ffffff;

            border: 1px solid #e5e7eb;
            border-radius: 10px;

            padding: 7px;

            box-shadow:
                0 8px 24px rgba(0,0,0,0.10);

            z-index: 100;
        }


        .logout-button {
            width: 100%;

            border: none;
            background: transparent;

            color: #b42318;

            padding: 10px 11px;

            border-radius: 7px;

            text-align: left;

            font-family: Arial, sans-serif;
            font-size: 13px;
            font-weight: 700;

            cursor: pointer;
        }


        .logout-button:hover {
            background: #fff1f0;
        }


        .avatar {
            width: 42px;
            height: 42px;

            border-radius: 50%;

            background: #e6f2fb;
            color: #17456f;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 14px;
            font-weight: 800;
        }


        .profile-info strong {
            display: block;

            font-size: 14px;
            color: #173f67;
        }


        .profile-info span {
            display: block;

            margin-top: 3px;

            font-size: 12px;
            color: #7b8da1;
        }


        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Segoe UI", Arial, sans-serif;
        }


        body {
            min-height: 100vh;
            background: #f3f6f9;
            color: #1f2937;
        }


        .page-content {
            min-height: calc(100vh - 76px);
            background: #f3f6f9;
            padding: 50px 45px;
        }


        .content-container {
            max-width: 1250px;
            margin: 0 auto;
        }


        /* =====================================================
           HEADER
        ===================================================== */

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


        /* =====================================================
           CARD
        ===================================================== */

        .card {
            background: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 16px;
            padding: 30px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, .04);
        }


        .card-header {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 20px;
            padding-bottom: 22px;
            border-bottom: 1px solid #e5e7eb;
        }


        .card-header h2 {
            color: #0f2f52;
            font-size: 21px;
            font-weight: 800;
            margin-bottom: 6px;
        }


        .card-header p {
            color: #66809e;
            font-size: 13px;
        }


        /* =====================================================
           ALERT
        ===================================================== */

        .alert {
            margin-bottom: 20px;
            padding: 14px 17px;
            border-radius: 10px;
            font-size: 14px;
            line-height: 1.5;
        }


        .alert-success {
            background: #dcfce7;
            color: #166534;
            border: 1px solid #bbf7d0;
        }


        .alert-error {
            background: #fee2e2;
            color: #991b1b;
            border: 1px solid #fecaca;
        }


        /* =====================================================
           SECTION
        ===================================================== */

        .section {
            padding: 26px 0;
            border-bottom: 1px solid #e5e7eb;
        }


        .section:last-of-type {
            border-bottom: none;
        }


        .section-title {
            display: flex;
            align-items: center;
            gap: 10px;
            color: #0f2f52;
            font-size: 18px;
            font-weight: 800;
            margin-bottom: 18px;
        }


        .section-title::before {
            content: "";
            width: 4px;
            height: 21px;
            border-radius: 999px;
            background: #0f2f52;
        }


        /* =====================================================
           INFO GRID
        ===================================================== */

        .info-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 16px;
        }


        .info-item {
            padding: 16px;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            background: #f8fafc;
        }


        .info-item label {
            display: block;
            color: #66809e;
            font-size: 11px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: .04em;
            margin-bottom: 7px;
        }


        .info-item strong,
        .info-item span.value {
            display: block;
            color: #0f2f52;
            font-size: 14px;
            line-height: 1.5;
            word-break: break-word;
        }


        /* =====================================================
           DETAIL ROW
        ===================================================== */

        .detail-row {
            display: grid;
            grid-template-columns: 210px 1fr;
            gap: 20px;
            padding: 15px 0;
            border-bottom: 1px solid #e5e7eb;
        }


        .detail-row:last-child {
            border-bottom: none;
        }


        .detail-label {
            color: #0f2f52;
            font-weight: 700;
        }


        .detail-value {
            color: #374151;
            line-height: 1.6;
            word-break: break-word;
        }


        .empty {
            color: #9ca3af;
            font-style: italic;
        }


        /* =====================================================
           STATUS
        ===================================================== */

        .status {
            display: inline-flex;
            align-items: center;
            padding: 7px 12px;
            border-radius: 999px;
            font-size: 12px;
            font-weight: 700;
        }


        .status-menunggu {
            background: #fff3cd;
            color: #a16207;
        }


        .status-diproses {
            background: #e0e7ff;
            color: #4338ca;
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


        .status-default {
            background: #f3f4f6;
            color: #4b5563;
        }


        /* =====================================================
           CATATAN
        ===================================================== */

        .note-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 16px;
        }


        .note-box {
            min-height: 105px;
            padding: 16px;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            background: #f8fafc;
        }


        .note-box h3 {
            color: #0f2f52;
            font-size: 13px;
            margin-bottom: 8px;
        }


        .note-box p {
            color: #4b5563;
            font-size: 14px;
            line-height: 1.6;
            white-space: pre-line;
        }


        /* =====================================================
           TIMELINE
        ===================================================== */

        .timeline {
            position: relative;
            margin-left: 8px;
            padding-left: 28px;
        }


        .timeline::before {
            content: "";
            position: absolute;
            left: 6px;
            top: 8px;
            bottom: 8px;
            width: 2px;
            background: #e5e7eb;
        }


        .timeline-item {
            position: relative;
            padding-bottom: 20px;
        }


        .timeline-item:last-child {
            padding-bottom: 0;
        }


        .timeline-dot {
            position: absolute;
            left: -28px;
            top: 3px;
            width: 15px;
            height: 15px;
            border-radius: 50%;
            background: #fff;
            border: 3px solid #0f2f52;
            z-index: 1;
        }


        .timeline-title {
            color: #0f2f52;
            font-size: 14px;
            font-weight: 700;
        }


        .timeline-date {
            color: #6b7280;
            font-size: 12px;
            margin-top: 3px;
        }


        /* =====================================================
           ACTION
        ===================================================== */

        .action-area {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 12px;
            margin-top: 26px;
            padding-top: 22px;
            border-top: 1px solid #e5e7eb;
        }


        .action-left,
        .action-right {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }


        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 7px;
            padding: 10px 16px;
            border: none;
            border-radius: 8px;
            text-decoration: none;
            cursor: pointer;
            font-size: 14px;
            font-weight: 700;
            transition: .2s ease;
        }


        .btn-back {
            background: #6b7280;
            color: #fff;
        }


        .btn-back:hover {
            background: #4b5563;
            color: #fff;
        }


        .btn-verifikasi {
            background: #2563eb;
            color: #fff;
        }


        .btn-verifikasi:hover {
            background: #1d4ed8;
        }


        .btn-tolak {
            background: #dc2626;
            color: #fff;
        }


        .btn-tolak:hover {
            background: #b91c1c;
        }


        /* =====================================================
           AREA VERIFIKASI
        ===================================================== */

        .verification-box {
            margin-top: 24px;
            padding: 20px;
            background: #f8fafc;
            border: 1px solid #dbe3ec;
            border-radius: 12px;
        }


        .verification-box h3 {
            color: #0f2f52;
            font-size: 15px;
            font-weight: 800;
            margin-bottom: 7px;
        }


        .verification-box p {
            color: #66809e;
            font-size: 13px;
            line-height: 1.6;
            margin-bottom: 16px;
        }


        .verification-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }


        .verification-actions form {
            margin: 0;
        }


        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 700px) {

            .page-content {
                padding: 25px 15px;
            }


            .page-header h1 {
                font-size: 24px;
            }


            .card {
                padding: 20px;
            }


            .card-header {
                flex-direction: column;
            }


            .info-grid,
            .note-grid {
                grid-template-columns: 1fr;
            }


            .detail-row {
                grid-template-columns: 1fr;
                gap: 5px;
            }


            .action-area {
                flex-direction: column;
            }

        }


        /* =====================================================
           PRINT
        ===================================================== */

        @media print {

            body {
                background: #fff;
            }


            .page-content {
                padding: 20px;
            }


            .card {
                border: none;
                box-shadow: none;
                padding: 0;
            }


            .action-area,
            .verification-box {
                display: none;
            }

        }

    </style>

</head>


<body>


    <div class="layout">

        {{-- =====================================================
             SIDEBAR SEKDES
        ====================================================== --}}

        <aside class="sidebar">


        <!-- BRAND -->

        <div class="brand">

            <img
                src="https://cdn.phototourl.com/free/2026-08-19-ada8088c-135b-4f75-94c5-ef27a75114f8.png"
                alt="Logo Desa Sukamerindu"
                class="brand-logo"
            >


            <h2>
                DESA SUKAMERINDU
            </h2>


            <p>
                Sistem Informasi Desa
            </p>

        </div>


        <!-- MENU -->

        <nav class="menu">


            {{-- DASHBOARD --}}

            <a
                href="{{ route('sekdes.dashboard') }}"
                class="{{ request()->routeIs('sekdes.dashboard') ? 'active' : '' }}"
            >

                <span class="menu-icon">
                    🏠
                </span>

                <span>
                    Dashboard
                </span>

            </a>


            {{-- PENGAJUAN SURAT --}}

            <a
                href="{{ url('/sekdes/pengajuan-surat') }}"
                class="{{ request()->is('sekdes/pengajuan-surat*') ? 'active' : '' }}"
            >

                <span class="menu-icon">
                    📄
                </span>

                <span>
                    Pengajuan Surat
                </span>

            </a>


            {{-- DATA WARGA --}}

            <a
                href="{{ url('/sekdes/data-warga') }}"
                class="{{ request()->is('sekdes/data-warga*') ? 'active' : '' }}"
            >

                <span class="menu-icon">
                    👥
                </span>

                <span>
                    Data Warga
                </span>

            </a>


            {{-- INFORMASI --}}

            <a
                href="{{ url('/sekdes/informasi') }}"
                class="{{ request()->is('sekdes/informasi*') ? 'active' : '' }}"
            >

                <span class="menu-icon">
                    📢
                </span>

                <span>
                    Informasi
                </span>

            </a>


        </nav>

    </aside>


        <main class="main">

            {{-- =================================================
                 TOPBAR SEKDES
            ================================================== --}}

            <header class="topbar">


            <div class="page-title">

                Dashboard Sekretaris Desa

            </div>



            <!-- PROFILE -->

            <details class="profile-dropdown">


                <summary class="profile">


                    <div class="avatar">

                        {{ strtoupper(
                            substr(auth()->user()->name, 0, 2)
                        ) }}

                    </div>


                    <div class="profile-info">

                        <strong>

                            {{ auth()->user()->name }}

                        </strong>


                        <span>

                            Sekretaris Desa

                        </span>

                    </div>


                    <span class="profile-arrow">
                        ▼
                    </span>


                </summary>



                <!-- DROPDOWN -->

                <div class="profile-menu">

                    <form
                        method="POST"
                        action="{{ route('logout') }}"
                    >

                        @csrf


                        <button
                            type="submit"
                            class="logout-button"
                        >

                            🚪 Keluar

                        </button>

                    </form>

                </div>


            </details>


        </header>


            <section class="page-content">

        <div class="content-container">


            {{-- =================================================
                 HEADER
            ================================================== --}}

            <div class="page-header">

                <h1>
                    Detail Pengajuan Surat
                </h1>

                <p>
                    Periksa dan verifikasi pengajuan surat warga.
                </p>

            </div>


            {{-- =================================================
                 PESAN SUCCESS
            ================================================== --}}

            @if(session('success'))

                <div class="alert alert-success">

                    {{ session('success') }}

                </div>

            @endif


            {{-- =================================================
                 PESAN ERROR
            ================================================== --}}

            @if(session('error'))

                <div class="alert alert-error">

                    {{ session('error') }}

                </div>

            @endif


            @if($errors->any())

                <div class="alert alert-error">

                    <ul style="padding-left: 18px;">

                        @foreach($errors->all() as $error)

                            <li>
                                {{ $error }}
                            </li>

                        @endforeach

                    </ul>

                </div>

            @endif


            <div class="card">


                {{-- =================================================
                     HEADER CARD
                ================================================== --}}

                <div class="card-header">

                    <div>

                        <h2>
                            Pengajuan Surat
                        </h2>

                        <p>
                            Berikut rincian pengajuan surat dari warga.
                        </p>

                    </div>


                    {{-- STATUS --}}

                    <div>

                        @php

                            $status = strtolower(
                                trim($pengajuan->status ?? '')
                            );

                        @endphp


                        @if($status === 'menunggu')

                            <span class="status status-menunggu">
                                Menunggu Verifikasi
                            </span>

                        @elseif($status === 'diproses')

                            <span class="status status-diproses">
                                Sudah Diverifikasi
                            </span>

                        @elseif($status === 'disetujui')

                            <span class="status status-disetujui">
                                Disetujui Kepala Desa
                            </span>

                        @elseif($status === 'selesai')

                            <span class="status status-selesai">
                                Selesai
                            </span>

                        @elseif($status === 'ditolak')

                            <span class="status status-ditolak">
                                Ditolak
                            </span>

                        @else

                            <span class="status status-default">
                                {{ ucfirst($pengajuan->status ?? '-') }}
                            </span>

                        @endif

                    </div>

                </div>


                {{-- =================================================
                     RINGKASAN
                ================================================== --}}

                <section class="section">

                    <h2 class="section-title">
                        Ringkasan Pengajuan
                    </h2>


                    <div class="info-grid">


                        <div class="info-item">

                            <label>
                                Nomor Pengajuan
                            </label>

                            <strong>
                                #{{ $pengajuan->id ?? '-' }}
                            </strong>

                        </div>


                        <div class="info-item">

                            <label>
                                Nomor Surat
                            </label>

                            <span class="value">

                                @if(!empty($pengajuan->nomor_surat))

                                    {{ $pengajuan->nomor_surat }}

                                @else

                                    <span class="empty">
                                        Belum diterbitkan
                                    </span>

                                @endif

                            </span>

                        </div>


                        <div class="info-item">

                            <label>
                                Jenis Surat
                            </label>


                            @php

                                $jenisSurat = [

                                    'domisili'
                                        => 'Surat Domisili',

                                    'pengantar'
                                        => 'Surat Pengantar',

                                    'keterangan_usaha'
                                        => 'Surat Keterangan Usaha',

                                    'keterangan_tidak_mampu'
                                        => 'Surat Keterangan Tidak Mampu',

                                ];

                            @endphp


                            <strong>

                                {{
                                    $jenisSurat[
                                        $pengajuan->jenis_surat ?? ''
                                    ]
                                    ??
                                    ($pengajuan->jenis_surat ?? '-')
                                }}

                            </strong>

                        </div>


                        <div class="info-item">

                            <label>
                                Tanggal Pengajuan
                            </label>

                            <span class="value">

                                @if(!empty($pengajuan->created_at))

                                    {{
                                        \Carbon\Carbon::parse(
                                            $pengajuan->created_at
                                        )->format('d/m/Y H:i')
                                    }}

                                @else

                                    -

                                @endif

                            </span>

                        </div>


                    </div>

                </section>


                {{-- =================================================
                     DATA WARGA
                ================================================== --}}

                <section class="section">

                    <h2 class="section-title">
                        Data Warga
                    </h2>


                    <div class="detail-row">

                        <div class="detail-label">
                            NIK
                        </div>

                        <div class="detail-value">

                            @if(!empty($pengajuan->nik))

                                {{ $pengajuan->nik }}

                            @else

                                <span class="empty">
                                    Belum tersedia
                                </span>

                            @endif

                        </div>

                    </div>


                    <div class="detail-row">

                        <div class="detail-label">
                            Nama Warga
                        </div>

                        <div class="detail-value">

                            {{ $pengajuan->nama_warga ?? '-' }}

                        </div>

                    </div>

                </section>


                {{-- =================================================
                     DETAIL SURAT
                ================================================== --}}

                <section class="section">

                    <h2 class="section-title">
                        Detail Surat
                    </h2>


                    <div class="detail-row">

                        <div class="detail-label">
                            Jenis Surat
                        </div>

                        <div class="detail-value">

                            {{
                                $jenisSurat[
                                    $pengajuan->jenis_surat ?? ''
                                ]
                                ??
                                ($pengajuan->jenis_surat ?? '-')
                            }}

                        </div>

                    </div>


                    <div class="detail-row">

                        <div class="detail-label">
                            Keperluan
                        </div>

                        <div class="detail-value">

                            {{
                                $pengajuan->keterangan
                                ?? $pengajuan->keperluan
                                ?? '-'
                            }}

                        </div>

                    </div>

                </section>


                {{-- =================================================
                     INFORMASI PROSES
                ================================================== --}}

                <section class="section">

                    <h2 class="section-title">
                        Informasi Proses
                    </h2>


                    <div class="detail-row">

                        <div class="detail-label">
                            Status
                        </div>

                        <div class="detail-value">

                            @if($status === 'menunggu')

                                <span class="status status-menunggu">
                                    Menunggu Verifikasi Sekdes
                                </span>

                            @elseif($status === 'diproses')

                                <span class="status status-diproses">
                                    Diteruskan ke Kepala Desa
                                </span>

                            @elseif($status === 'disetujui')

                                <span class="status status-disetujui">
                                    Disetujui Kepala Desa
                                </span>

                            @elseif($status === 'selesai')

                                <span class="status status-selesai">
                                    Selesai
                                </span>

                            @elseif($status === 'ditolak')

                                <span class="status status-ditolak">
                                    Ditolak
                                </span>

                            @else

                                <span class="status status-default">
                                    {{ ucfirst($pengajuan->status ?? '-') }}
                                </span>

                            @endif

                        </div>

                    </div>


                    <div class="detail-row">

                        <div class="detail-value">

                            {{ $pengajuan->dibuat_oleh ?? '-' }}

                        </div>

                    </div>


                    <div class="detail-row">

                        <div class="detail-label">
                            Tanggal Proses
                        </div>

                        <div class="detail-value">

                            @if(!empty($pengajuan->selesai_pada))

                                {{
                                    \Carbon\Carbon::parse(
                                        $pengajuan->selesai_pada
                                    )->format('d/m/Y H:i')
                                }}

                            @elseif(!empty($pengajuan->tanggal_proses))

                                {{
                                    \Carbon\Carbon::parse(
                                        $pengajuan->tanggal_proses
                                    )->format('d/m/Y H:i')
                                }}

                            @else

                                <span class="empty">
                                    Belum diproses
                                </span>

                            @endif

                        </div>

                    </div>


                    <div class="detail-row">

                        <div class="detail-label">
                            Catatan Sekretaris
                        </div>

                        <div class="detail-value">

                            @if(!empty($pengajuan->catatan_sekdes))

                                {{ $pengajuan->catatan_sekdes }}

                            @else

                                <span class="empty">
                                    Belum ada catatan.
                                </span>

                            @endif

                        </div>

                    </div>


                    <div class="detail-row">

                        <div class="detail-label">
                            Catatan Kepala Desa
                        </div>

                        <div class="detail-value">

                            @if(!empty($pengajuan->catatan_kepala_desa))

                                {{ $pengajuan->catatan_kepala_desa }}

                            @else

                                <span class="empty">
                                    Belum ada catatan.
                                </span>

                            @endif

                        </div>

                    </div>

                </section>


                {{-- =================================================
                     RIWAYAT
                ================================================== --}}

                <section class="section">

                    <h2 class="section-title">
                        Riwayat Pengajuan
                    </h2>


                    <div class="timeline">


                        {{-- DIBUAT --}}

                        <div class="timeline-item">

                            <div class="timeline-dot"></div>

                            <div class="timeline-title">
                                Pengajuan Dibuat
                            </div>

                            <div class="timeline-date">

                                @if(!empty($pengajuan->created_at))

                                    {{
                                        \Carbon\Carbon::parse(
                                            $pengajuan->created_at
                                        )->format('d/m/Y H:i')
                                    }}

                                @else

                                    -

                                @endif

                            </div>

                        </div>


                        {{-- DIPROSES --}}

                        @if(!empty($pengajuan->tanggal_proses))

                            <div class="timeline-item">

                                <div class="timeline-dot"></div>

                                <div class="timeline-title">
                                    Diverifikasi Sekretaris Desa
                                </div>

                                <div class="timeline-date">

                                    {{
                                        \Carbon\Carbon::parse(
                                            $pengajuan->tanggal_proses
                                        )->format('d/m/Y H:i')
                                    }}

                                </div>

                            </div>

                        @endif


                        {{-- DISETUJUI --}}

                        @if($status === 'disetujui' || $status === 'selesai')

                            <div class="timeline-item">

                                <div class="timeline-dot"></div>

                                <div class="timeline-title">
                                    Disetujui Kepala Desa
                                </div>

                                <div class="timeline-date">
                                    Pengajuan telah disetujui Kepala Desa.
                                </div>

                            </div>

                        @endif


                        {{-- SELESAI --}}

                        @if($status === 'selesai')

                            <div class="timeline-item">

                                <div class="timeline-dot"></div>

                                <div class="timeline-title">
                                    Pengajuan Selesai
                                </div>

                                <div class="timeline-date">
                                    Surat telah selesai diproses.
                                </div>

                            </div>

                        @endif


                        {{-- DITOLAK --}}

                        @if($status === 'ditolak')

                            <div class="timeline-item">

                                <div class="timeline-dot"></div>

                                <div class="timeline-title">
                                    Pengajuan Ditolak
                                </div>

                                <div class="timeline-date">
                                    Pengajuan surat ditolak oleh Sekretaris Desa.
                                </div>

                            </div>

                        @endif


                    </div>

                </section>


                {{-- =================================================
                     AKSI SEKDES
                ================================================== --}}

                @if(
                    $status !== 'diproses' &&
                    $status !== 'disetujui' &&
                    $status !== 'selesai' &&
                    $status !== 'ditolak'
                )

                    <div class="verification-box">

                        <h3>
                            Verifikasi Pengajuan
                        </h3>

                        <p>
                            Periksa data dan dokumen pengajuan sebelum
                            meneruskan pengajuan kepada Kepala Desa.
                        </p>


                        <div class="verification-actions">


                            {{-- VERIFIKASI --}}

                            <form
                                action="{{ route('sekdes.pengajuan.verifikasi', $pengajuan->id) }}"
                                method="POST"
                                onsubmit="return confirm('Yakin ingin memverifikasi pengajuan ini dan meneruskannya kepada Kepala Desa?');"
                            >

                                @csrf

                                <button
                                    type="submit"
                                    class="btn btn-verifikasi"
                                >
                                    ✓ Verifikasi & Teruskan
                                </button>

                            </form>


                            {{-- TOLAK --}}

                            <form
                                action="{{ route('sekdes.pengajuan.tolak', $pengajuan->id) }}"
                                method="POST"
                                onsubmit="return confirm('Yakin ingin menolak pengajuan ini?');"
                            >

                                @csrf

                                <button
                                    type="submit"
                                    class="btn btn-tolak"
                                >
                                    ✕ Tolak Pengajuan
                                </button>

                            </form>


                        </div>

                    </div>

                @endif


                {{-- =================================================
                     TOMBOL BAWAH
                ================================================== --}}

                <div class="action-area">


                    <div class="action-left">

                        <a
                            href="{{ url('/sekdes/pengajuan-surat') }}"
                            class="btn btn-back"
                        >
                            ← Kembali
                        </a>

                    </div>


                    <div class="action-right">

                        {{-- Setelah selesai, baru cetak --}}

                        @if($status === 'selesai')

                            @if(Route::has('sekdes.pengajuan.surat'))

                                <a
                                    href="{{ route('sekdes.pengajuan.surat', ['id' => $pengajuan->id]) }}"
                                    class="btn btn-verifikasi"
                                    target="_blank"
                                >
                                    🖨️ Cetak Surat
                                </a>

                            @endif

                        @endif

                    </div>

                </div>


            </div>

        </div>

            </section>

        </main>

    </div>


</body>

</html>
