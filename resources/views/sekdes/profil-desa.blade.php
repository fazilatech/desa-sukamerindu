<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Desa - Desa Sukamerindu</title>

    <style>


        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }


        body {
            font-family: Arial, sans-serif;
            background: #f4f7fb;
            color: #173f67;
        }


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
           DROPDOWN PERIHAL
        ===================================================== */

        .menu-dropdown {
            position: relative;
        }


        .menu-dropdown-button {
            width: 100%;
            border: none;
            background: transparent;
            color: #ffffff;
            padding: 14px 18px;
            border-radius: 9px;
            font-family: Arial, sans-serif;
            font-size: 14px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 12px;
            cursor: pointer;
            text-align: left;
            transition: 0.2s;
        }


        .menu-dropdown-button:hover {
            background: rgba(255,255,255,0.12);
            color: #ffffff;
        }


        .menu-dropdown-button.active {
            background: rgba(255,255,255,0.16);
            color: #ffffff;
            border: 1px solid rgba(255,255,255,0.45);
        }


        .dropdown-arrow {
            margin-left: auto;
            font-size: 10px;
            transition: transform 0.2s ease;
        }


        .menu-dropdown.open .dropdown-arrow {
            transform: rotate(180deg);
        }


        .menu-dropdown-content {
            display: none;
            margin: 2px 0 4px;
            padding: 7px;
            background: #ffffff;
            border-radius: 9px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.12);
        }


        .menu-dropdown.open .menu-dropdown-content {
            display: block;
        }


        .menu-dropdown-content a {
            display: flex;
            align-items: center;
            gap: 9px;
            width: 100%;
            padding: 10px 11px;
            border-radius: 7px;
            color: #173f67;
            text-decoration: none;
            font-size: 13px;
            font-weight: 600;
            transition: 0.2s;
        }


        .menu-dropdown-content a:hover {
            background: #edf8f2;
            color: #08733a;
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


        /* =====================================================
           CONTENT
        ===================================================== */

        .content {
            padding: 35px;
        }


        .welcome {
            margin-bottom: 25px;
        }


        .welcome h1 {
            font-size: 27px;
            color: #17456f;

            margin-bottom: 7px;
        }


        .welcome p {
            font-size: 14px;
            color: #6b7f94;
        }


        /* =====================================================
           STATISTICS
        ===================================================== */

        .stats {
            display: grid;

            grid-template-columns:
                repeat(4, 1fr);

            gap: 18px;

            margin-bottom: 28px;
        }


        .stat-card {
            background: #ffffff;

            border: 1px solid #e5e7eb;

            border-radius: 13px;

            padding: 22px;

            box-shadow:
                0 3px 12px rgba(0,0,0,0.03);
        }


        .stat-icon {
            width: 42px;
            height: 42px;

            border-radius: 10px;

            background: #edf5fb;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 19px;

            margin-bottom: 15px;
        }


        .stat-card h3 {
            font-size: 13px;

            color: #718398;

            margin-bottom: 8px;
        }


        .stat-card strong {
            font-size: 27px;
            color: #173f67;
        }


        /* =====================================================
           CARD
        ===================================================== */

        .card {
            background: #ffffff;

            border: 1px solid #e5e7eb;

            border-radius: 13px;

            padding: 25px;

            margin-bottom: 25px;

            box-shadow:
                0 3px 12px rgba(0,0,0,0.03);
        }


        .card-header {
            display: flex;

            justify-content: space-between;
            align-items: center;

            margin-bottom: 20px;
        }


        .card-header h2 {
            font-size: 18px;
            color: #173f67;
        }


        .card-header p {
            margin-top: 5px;

            font-size: 13px;

            color: #7b8da1;
        }


        /* =====================================================
           TABLE
        ===================================================== */

        .table-wrapper {
            overflow-x: auto;
        }


        table {
            width: 100%;
            border-collapse: collapse;
        }


        th {
            text-align: left;

            background: #edf8f2;

            color: #17663f;

            padding: 13px;

            font-size: 12px;
        }


        td {
            padding: 14px 13px;

            border-bottom:
                1px solid #edf0f3;

            font-size: 13px;

            color: #40566d;
        }


        tbody tr:last-child td {
            border-bottom: none;
        }


        /* =====================================================
           STATUS
        ===================================================== */

        .status {
            display: inline-block;

            padding: 6px 10px;

            border-radius: 20px;

            font-size: 11px;

            font-weight: 700;
        }


        .status-menunggu {
            background: #fff4d6;
            color: #9a6b00;
        }


        .status-diproses {
            background: #e8f2ff;
            color: #23609b;
        }


        .status-selesai {
            background: #dcf8e8;
            color: #17824d;
        }


        /* =====================================================
           BUTTON
        ===================================================== */

        .btn {
            display: inline-block;

            padding: 8px 13px;

            border-radius: 7px;

            text-decoration: none;

            font-size: 12px;

            font-weight: 700;

            background: #17456f;

            color: #ffffff;
        }


        .btn:hover {
            background: #123956;
        }


        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 1000px) {

            .stats {
                grid-template-columns:
                    repeat(2, 1fr);
            }

        }


        @media (max-width: 700px) {

            .sidebar {
                width: 210px;
            }


            .main {
                margin-left: 210px;

                width:
                    calc(100% - 210px);
            }


            .content {
                padding: 20px;
            }


            .topbar {
                padding: 0 20px;
            }

        }




        /* =====================================================
           PROFIL DESA - MENYESUAIKAN DASHBOARD SEKDES
        ===================================================== */

        .page {
            padding: 35px;
        }

        .page-header {
            margin-bottom: 25px;
        }

        .page-header h1 {
            font-size: 27px;
            font-weight: 800;
            color: #17456f;
            margin-bottom: 7px;
        }

        .page-header p {
            font-size: 14px;
            color: #6b7f94;
            line-height: 1.7;
        }

        .alert {
            padding: 13px 16px;
            border-radius: 10px;
            margin-bottom: 20px;
            font-size: 14px;
            font-weight: 600;
        }

        .alert-success {
            background: #dcfce7;
            color: #166534;
            border: 1px solid #bbf7d0;
        }

        .alert-error {
            background: #fef2f2;
            color: #b91c1c;
            border: 1px solid #fecaca;
        }

        .profile-card {
            background: #ffffff;
            border-radius: 13px;
            padding: 25px;
            margin-bottom: 25px;
            border: 1px solid #e5e7eb;
            box-shadow: 0 3px 12px rgba(0,0,0,0.03);
        }

        .card-header-crud {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 15px;
            margin-bottom: 18px;
        }

        .card-title {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .card-title .icon {
            width: 42px;
            height: 42px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            background: #dcfce7;
            font-size: 21px;
        }

        .card-title h2 {
            font-size: 20px;
            color: #006b3c;
            font-weight: 800;
        }

        .profile-card p {
            color: #64748b;
            font-size: 14px;
            line-height: 1.8;
            margin-bottom: 12px;
        }

        .profile-card p:last-child {
            margin-bottom: 0;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 18px;
        }

        .info-item {
            padding: 20px;
            background: #f8fafc;
            border-radius: 12px;
            border: 1px solid #e5e7eb;
        }

        .info-item strong {
            display: block;
            color: #006b3c;
            font-size: 14px;
            margin-bottom: 7px;
        }

        .info-item span {
            color: #64748b;
            font-size: 14px;
            line-height: 1.6;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 7px;
            border: 0;
            border-radius: 7px;
            padding: 8px 13px;
            font-size: 12px;
            font-weight: 700;
            text-decoration: none;
            cursor: pointer;
        }

        .btn-primary {
            background: #08733a;
            color: #ffffff;
        }

        .btn-primary:hover {
            background: #065d30;
        }

        .btn-edit {
            background: #eff6ff;
            color: #1d4ed8;
        }

        .btn-delete {
            background: #fef2f2;
            color: #dc2626;
        }

        .btn-secondary {
            background: #e5e7eb;
            color: #374151;
        }

        .crud-form {
            display: none;
            margin-top: 22px;
            padding: 22px;
            background: #f8fafc;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
        }

        .crud-form.show {
            display: block;
        }

        .form-group {
            margin-bottom: 16px;
        }

        .form-group label {
            display: block;
            margin-bottom: 7px;
            color: #173f67;
            font-size: 13px;
            font-weight: 700;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 11px 13px;
            border: 1px solid #d1d5db;
            border-radius: 9px;
            background: #ffffff;
            color: #173f67;
            font-size: 13px;
            outline: none;
        }

        .form-group textarea {
            min-height: 110px;
            resize: vertical;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            border-color: #08733a;
        }

        .form-actions {
            display: flex;
            gap: 9px;
            margin-top: 5px;
        }

        .crud-note {
            margin-top: 12px;
            font-size: 13px;
            color: #64748b;
        }

        .field-error {
            margin-top: 5px;
            color: #dc2626;
            font-size: 12px;
        }

        @media (max-width: 700px) {
            .page {
                padding: 20px;
            }

            .info-grid {
                grid-template-columns: 1fr;
            }

            .card-header-crud {
                align-items: flex-start;
                flex-direction: column;
            }

            .form-actions {
                flex-wrap: wrap;
            }
        }

    
        /* =====================================================
           APARATUR DESA
        ====================================================== */

        .apparatus-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
        }

        .apparatus-card {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
        }

        .apparatus-photo {
            height: 190px;
            background: #eef0f3;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #08733a;
            font-size: 42px;
            font-weight: 800;
        }

        .apparatus-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }


        .apparatus-info {
            padding: 12px 8px 14px;
            text-align: center;
        }

        .apparatus-info strong {
            display: block;
            color: #08733a;
            font-size: 11px;
            margin-bottom: 5px;
        }

        .apparatus-info span {
            display: block;
            color: #40566d;
            font-size: 11px;
        }

        /* =====================================================
           WILAYAH / LOKASI DESA
        ====================================================== */

        .location-grid {
            display: grid;
            grid-template-columns: 1fr 1.45fr;
            gap: 12px;
        }

        .map-box {
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            overflow: hidden;
            background: #ffffff;
        }

        .map-title {
            padding: 9px 10px;
            background: #ffffff;
            color: #08733a;
            font-size: 11px;
            font-weight: 800;
        }

        .map-frame {
            width: 100%;
            height: 245px;
            border: 0;
            display: block;
        }

        .map-description {
            padding: 8px 10px 10px;
            color: #40566d;
            font-size: 10px;
            line-height: 1.5;
        }

        @media (max-width: 900px) {
            .apparatus-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .location-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 500px) {
            .apparatus-grid {
                grid-template-columns: 1fr;
            }
        }

    </style>
</head>

<body>
    <div class="layout">

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


            {{-- PERIHAL --}}

            <div class="menu-dropdown" id="perihalDropdown">

                <button
                    type="button"
                    class="menu-dropdown-button"
                    onclick="togglePerihal()"
                >

                    <span class="menu-icon">
                        ℹ️
                    </span>

                    <span>
                        Perihal
                    </span>

                    <span class="dropdown-arrow">
                        ▼
                    </span>

                </button>


                <div class="menu-dropdown-content">

                    <a href="{{ route('sekdes.profil-desa') }}">
                        🏛️
                        <span>Profil Desa</span>
                    </a>

                    <a href="{{ route('home') }}#visi-misi">
                        🎯
                        <span>Visi &amp; Misi</span>
                    </a>

                    <a href="{{ route('home') }}#perangkat-desa">
                        👥
                        <span>Perangkat Desa</span>
                    </a>

                    <a href="{{ route('home') }}#kontak-desa">
                        📞
                        <span>Kontak Desa</span>
                    </a>

                </div>

            </div>


        </nav>

    </aside>

        <main class="main">

        <header class="topbar">


            <div class="page-title">

                Profil Desa

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

    <main class="page">
        <div class="page-header">
            <h1>Profil Desa</h1>
            <p>Informasi umum mengenai Desa Sukamerindu dan pemerintahan desa.</p>
        </div>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if(session('error'))
            <div class="alert alert-error">{{ session('error') }}</div>
        @endif

        @if($errors->any())
            <div class="alert alert-error">
                {{ $errors->first() }}
            </div>
        @endif

        {{-- TENTANG DESA --}}
        <section class="profile-card">
            <div class="card-header-crud">
                <div class="card-title">
                    <div class="icon">🏛️</div>
                    <h2>Tentang Desa Sukamerindu</h2>
                </div>
                <button type="button" class="btn btn-primary" onclick="toggleProfilForm('formTentang')">✏️ Edit</button>
            </div>

            <p>{{ $profilDesa->tentang_desa ?? 'Desa Sukamerindu merupakan salah satu desa yang berada di wilayah Kabupaten Kepahiang. Desa ini memiliki masyarakat yang beragam serta mengembangkan berbagai potensi desa untuk mendukung kesejahteraan masyarakat.' }}</p>
            <p>{{ $profilDesa->deskripsi_sistem ?? 'Melalui Sistem Informasi Desa Sukamerindu, informasi mengenai pelayanan dan kegiatan desa dapat disampaikan kepada masyarakat secara lebih mudah dan terintegrasi.' }}</p>

            <div id="formTentang" class="crud-form">
                <form method="POST" action="{{ isset($profilDesa) ? route('sekdes.profil-desa.update', $profilDesa->id) : route('sekdes.profil-desa.store') }}">
                    @csrf
                    <input type="hidden" name="nama_desa" value="{{ old('nama_desa', $profilDesa->nama_desa ?? 'Desa Sukamerindu') }}">
                    <input type="hidden" name="kabupaten" value="{{ old('kabupaten', $profilDesa->kabupaten ?? 'Kepahiang') }}">
                    <input type="hidden" name="provinsi" value="{{ old('provinsi', $profilDesa->provinsi ?? 'Bengkulu') }}">
                    <input type="hidden" name="sistem_informasi" value="{{ old('sistem_informasi', $profilDesa->sistem_informasi ?? 'Sistem Informasi Desa Sukamerindu') }}">
                    <input type="hidden" name="pemerintahan_desa" value="{{ old('pemerintahan_desa', $profilDesa->pemerintahan_desa ?? 'Pemerintahan Desa Sukamerindu berperan dalam memberikan pelayanan administrasi kepada masyarakat serta mengelola kegiatan desa.') }}">
                    <input type="hidden" name="informasi_pemerintahan" value="{{ old('informasi_pemerintahan', $profilDesa->informasi_pemerintahan ?? 'Informasi mengenai perangkat desa, pelayanan administrasi, dan kegiatan desa dapat diakses melalui Sistem Informasi Desa Sukamerindu.') }}">
                    @if(isset($profilDesa)) @method('PUT') @endif

                    <div class="form-group">
                        <label for="tentang_desa">Tentang Desa</label>
                        <textarea id="tentang_desa" name="tentang_desa" required>{{ old('tentang_desa', $profilDesa->tentang_desa ?? 'Desa Sukamerindu merupakan salah satu desa yang berada di wilayah Kabupaten Kepahiang. Desa ini memiliki masyarakat yang beragam serta mengembangkan berbagai potensi desa untuk mendukung kesejahteraan masyarakat.') }}</textarea>
                        @error('tentang_desa')<div class="field-error">{{ $message }}</div>@enderror
                    </div>

                    <div class="form-group">
                        <label for="deskripsi_sistem">Deskripsi Sistem Informasi</label>
                        <textarea id="deskripsi_sistem" name="deskripsi_sistem" required>{{ old('deskripsi_sistem', $profilDesa->deskripsi_sistem ?? 'Melalui Sistem Informasi Desa Sukamerindu, informasi mengenai pelayanan dan kegiatan desa dapat disampaikan kepada masyarakat secara lebih mudah dan terintegrasi.') }}</textarea>
                        @error('deskripsi_sistem')<div class="field-error">{{ $message }}</div>@enderror
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">💾 Simpan</button>
                        <button type="button" class="btn btn-secondary" onclick="toggleProfilForm('formTentang')">Batal</button>
                    </div>
                </form>
            </div>
        </section>

        {{-- INFORMASI DESA --}}
        <section class="profile-card">
            <div class="card-header-crud">
                <div class="card-title">
                    <div class="icon">📋</div>
                    <h2>Informasi Desa</h2>
                </div>
                <button type="button" class="btn btn-primary" onclick="toggleProfilForm('formInformasi')">➕ Tambah</button>
            </div>

            <div class="info-grid">
                <div class="info-item"><strong>Nama Desa</strong><span>{{ $profilDesa->nama_desa ?? 'Desa Sukamerindu' }}</span></div>
                <div class="info-item"><strong>Kabupaten</strong><span>{{ $profilDesa->kabupaten ?? 'Kepahiang' }}</span></div>
                <div class="info-item"><strong>Provinsi</strong><span>{{ $profilDesa->provinsi ?? 'Bengkulu' }}</span></div>
                <div class="info-item"><strong>Sistem Informasi</strong><span>{{ $profilDesa->sistem_informasi ?? 'Sistem Informasi Desa Sukamerindu' }}</span></div>
            </div>

            <div id="formInformasi" class="crud-form">
                <form method="POST" action="{{ isset($profilDesa) ? route('sekdes.profil-desa.update', $profilDesa->id) : route('sekdes.profil-desa.store') }}">
                    @csrf
                    <input type="hidden" name="tentang_desa" value="{{ old('tentang_desa', $profilDesa->tentang_desa ?? 'Desa Sukamerindu merupakan salah satu desa yang berada di wilayah Kabupaten Kepahiang. Desa ini memiliki masyarakat yang beragam serta mengembangkan berbagai potensi desa untuk mendukung kesejahteraan masyarakat.') }}">
                    <input type="hidden" name="deskripsi_sistem" value="{{ old('deskripsi_sistem', $profilDesa->deskripsi_sistem ?? 'Melalui Sistem Informasi Desa Sukamerindu, informasi mengenai pelayanan dan kegiatan desa dapat disampaikan kepada masyarakat secara lebih mudah dan terintegrasi.') }}">
                    <input type="hidden" name="pemerintahan_desa" value="{{ old('pemerintahan_desa', $profilDesa->pemerintahan_desa ?? 'Pemerintahan Desa Sukamerindu berperan dalam memberikan pelayanan administrasi kepada masyarakat serta mengelola kegiatan desa.') }}">
                    <input type="hidden" name="informasi_pemerintahan" value="{{ old('informasi_pemerintahan', $profilDesa->informasi_pemerintahan ?? 'Informasi mengenai perangkat desa, pelayanan administrasi, dan kegiatan desa dapat diakses melalui Sistem Informasi Desa Sukamerindu.') }}">
                    @if(isset($profilDesa)) @method('PUT') @endif

                    <div class="form-group">
                        <label for="nama_desa">Nama Desa</label>
                        <input type="text" id="nama_desa" name="nama_desa" value="{{ old('nama_desa', $profilDesa->nama_desa ?? 'Desa Sukamerindu') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="kabupaten">Kabupaten</label>
                        <input type="text" id="kabupaten" name="kabupaten" value="{{ old('kabupaten', $profilDesa->kabupaten ?? 'Kepahiang') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="provinsi">Provinsi</label>
                        <input type="text" id="provinsi" name="provinsi" value="{{ old('provinsi', $profilDesa->provinsi ?? 'Bengkulu') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="sistem_informasi">Sistem Informasi</label>
                        <input type="text" id="sistem_informasi" name="sistem_informasi" value="{{ old('sistem_informasi', $profilDesa->sistem_informasi ?? 'Sistem Informasi Desa Sukamerindu') }}" required>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">💾 Simpan</button>
                        <button type="button" class="btn btn-secondary" onclick="toggleProfilForm('formInformasi')">Batal</button>
                    </div>
                </form>

                @if(isset($profilDesa))
                    <form method="POST" action="{{ route('sekdes.profil-desa.destroy', $profilDesa->id) }}" onsubmit="return confirm('Yakin ingin menghapus data profil desa?');" style="margin-top:10px">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-delete">🗑️ Hapus Data</button>
                    </form>
                @endif

                <div class="crud-note">Data pada bagian ini dapat ditambah, diedit, dan dihapus oleh Sekretaris Desa.</div>
            </div>
        </section>

        {{-- PEMERINTAHAN DESA --}}
        <section class="profile-card">
            <div class="card-header-crud">
                <div class="card-title">
                    <div class="icon">👥</div>
                    <h2>Pemerintahan Desa</h2>
                </div>
                <button type="button" class="btn btn-primary" onclick="toggleProfilForm('formPemerintahan')">✏️ Edit</button>
            </div>

            <p>{{ $profilDesa->pemerintahan_desa ?? 'Pemerintahan Desa Sukamerindu berperan dalam memberikan pelayanan administrasi kepada masyarakat serta mengelola berbagai kegiatan dan program pembangunan desa.' }}</p>
            <p>{{ $profilDesa->informasi_pemerintahan ?? 'Informasi mengenai perangkat desa, pelayanan administrasi, dan kegiatan desa dapat diakses melalui Sistem Informasi Desa.' }}</p>

            <div id="formPemerintahan" class="crud-form">
                <form method="POST" action="{{ isset($profilDesa) ? route('sekdes.profil-desa.update', $profilDesa->id) : route('sekdes.profil-desa.store') }}">
                    @csrf
                    <input type="hidden" name="nama_desa" value="{{ old('nama_desa', $profilDesa->nama_desa ?? 'Desa Sukamerindu') }}">
                    <input type="hidden" name="kabupaten" value="{{ old('kabupaten', $profilDesa->kabupaten ?? 'Kepahiang') }}">
                    <input type="hidden" name="provinsi" value="{{ old('provinsi', $profilDesa->provinsi ?? 'Bengkulu') }}">
                    <input type="hidden" name="sistem_informasi" value="{{ old('sistem_informasi', $profilDesa->sistem_informasi ?? 'Sistem Informasi Desa Sukamerindu') }}">
                    <input type="hidden" name="tentang_desa" value="{{ old('tentang_desa', $profilDesa->tentang_desa ?? 'Desa Sukamerindu merupakan salah satu desa yang berada di wilayah Kabupaten Kepahiang. Desa ini memiliki masyarakat yang beragam serta mengembangkan berbagai potensi desa untuk mendukung kesejahteraan masyarakat.') }}">
                    <input type="hidden" name="deskripsi_sistem" value="{{ old('deskripsi_sistem', $profilDesa->deskripsi_sistem ?? 'Melalui Sistem Informasi Desa Sukamerindu, informasi mengenai pelayanan dan kegiatan desa dapat disampaikan kepada masyarakat secara lebih mudah dan terintegrasi.') }}">
                    @if(isset($profilDesa)) @method('PUT') @endif

                    <div class="form-group">
                        <label for="pemerintahan_desa">Pemerintahan Desa</label>
                        <textarea id="pemerintahan_desa" name="pemerintahan_desa" required>{{ old('pemerintahan_desa', $profilDesa->pemerintahan_desa ?? 'Pemerintahan Desa Sukamerindu berperan dalam memberikan pelayanan administrasi kepada masyarakat serta mengelola berbagai kegiatan dan program pembangunan desa.') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="informasi_pemerintahan">Informasi Pemerintahan</label>
                        <textarea id="informasi_pemerintahan" name="informasi_pemerintahan" required>{{ old('informasi_pemerintahan', $profilDesa->informasi_pemerintahan ?? 'Informasi mengenai perangkat desa, pelayanan administrasi, dan kegiatan desa dapat diakses melalui Sistem Informasi Desa.') }}</textarea>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">💾 Simpan</button>
                        <button type="button" class="btn btn-secondary" onclick="toggleProfilForm('formPemerintahan')">Batal</button>
                    </div>
                </form>
            </div>

        </section>

        {{-- APARATUR DESA --}}
        <section class="profile-card">

            <div class="card-header-crud">

                <div class="card-title">
                    <div class="icon">👤</div>
                    <h2>Aparatur Desa</h2>
                </div>

                <a
                    href="{{ route('sekdes.aparatur-desa.create') }}"
                    class="btn btn-primary"
                >
                    ➕ Tambah
                </a>

            </div>


            <div class="apparatus-grid">

                {{-- =================================================
                     SEKRETARIS DESA DARI AKUN YANG SEDANG LOGIN
                     Data nama mengikuti user yang sedang login,
                     jadi tidak perlu diketik ulang secara manual.
                ================================================== --}}
                @auth
                    <div class="apparatus-card">

                        <div class="apparatus-photo">

                            @php
                                $userName = auth()->user()->name ?? 'Sekretaris Desa';
                                $profilePhoto = data_get(auth()->user(), 'profile_photo_path');
                            @endphp

                            @if($profilePhoto)
                                <img
                                    src="{{ asset('storage/' . $profilePhoto) }}"
                                    alt="{{ $userName }}"
                                    style="width:100%;height:100%;object-fit:cover;"
                                >
                            @else
                                {{ strtoupper(substr($userName, 0, 1)) }}
                            @endif

                        </div>

                        <div class="apparatus-info">

                            <strong>
                                Sekretaris Desa
                            </strong>

                            <span>
                                {{ $userName }}
                            </span>

                            <div
                                style="
                                    margin-top:10px;
                                    font-size:11px;
                                    color:#64748b;
                                "
                            >
                                Data akun aktif
                            </div>

                        </div>

                    </div>
                @endauth


                {{-- =================================================
                     APARATUR DESA LAIN DARI DATABASE
                ================================================== --}}
                @forelse(($aparatur ?? collect()) as $item)

                    <div class="apparatus-card">

                        <div class="apparatus-photo">

                            @if($item->foto)

                                <img
                                    src="{{ asset('storage/' . $item->foto) }}"
                                    alt="{{ $item->nama }}"
                                    style="width:100%;height:100%;object-fit:cover;"
                                >

                            @else

                                {{ strtoupper(substr($item->nama, 0, 1)) }}

                            @endif

                        </div>


                        <div class="apparatus-info">

                            <strong>
                                {{ $item->jabatan }}
                            </strong>

                            <span>
                                {{ $item->nama }}
                            </span>


                            <div
                                style="
                                    display:flex;
                                    justify-content:center;
                                    gap:6px;
                                    margin-top:10px;
                                "
                            >

                                <a
                                    href="{{ route('sekdes.aparatur-desa.edit', $item->id) }}"
                                    class="btn btn-edit"
                                    style="padding:6px 9px;"
                                >
                                    ✏️ Edit
                                </a>


                                <form
                                    method="POST"
                                    action="{{ route('sekdes.aparatur-desa.destroy', $item->id) }}"
                                    onsubmit="return confirm('Yakin ingin menghapus aparatur ini?');"
                                >

                                    @csrf

                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="btn btn-delete"
                                        style="padding:6px 9px;"
                                    >
                                        🗑️
                                    </button>

                                </form>

                            </div>

                        </div>

                    </div>

                @empty
                    {{-- Tidak menampilkan pesan kosong karena akun Sekdes
                         sudah ditampilkan dari user yang sedang login. --}}
                @endforelse

            </div>


            <div class="crud-note">
                Data aparatur dapat ditambah, diedit, dan dihapus oleh Sekretaris Desa.
            </div>

        </section>

        {{-- LOKASI / WILAYAH DESA --}}
        <section class="profile-card">
            <div class="card-header-crud">
                <div class="card-title">
                    <div class="icon">📍</div>
                    <h2>Lokasi Desa</h2>
                </div>
            </div>

            <div class="location-grid">
                <div class="map-box">
                    <div class="map-title">📍 LOKASI DESA</div>
                    <iframe
                        class="map-frame"
                        src="https://www.openstreetmap.org/export/embed.html?bbox=102.50%2C-3.70%2C102.60%2C-3.60&amp;layer=mapnik"
                        loading="lazy">
                    </iframe>
                    <div class="map-description">
                        <strong>Desa Sukamerindu</strong><br>
                        Kabupaten Kepahiang, Provinsi Bengkulu.
                    </div>
                </div>

                <div class="map-box">
                    <div class="map-title">🗺️ WILAYAH DESA</div>
                    <iframe
                        class="map-frame"
                        src="https://www.openstreetmap.org/export/embed.html?bbox=102.45%2C-3.75%2C102.65%2C-3.55&amp;layer=mapnik"
                        loading="lazy">
                    </iframe>
                    <div class="map-description">
                        <strong>Wilayah Desa Sukamerindu</strong><br>
                        Peta wilayah desa dapat ditampilkan di bagian ini.
                    </div>
                </div>
            </div>

            <div class="crud-note">
                Peta ini sudah ditambahkan ke halaman Sekdes. Koordinat dan batas wilayah bisa kita sesuaikan dengan data peta yang dipakai di halaman Kepala Desa.
            </div>
        </section>
    </main>

        </main>
    </div>



    <script>
        function toggleProfilForm(id) {
            const form = document.getElementById(id);
            if (!form) return;
            form.classList.toggle('show');
        }
    </script>
</body>
</html>
