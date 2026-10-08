<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Informasi Desa - Sekretaris Desa
    </title>


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
           SIDEBAR SEKRETARIS DESA
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

            border-bottom:
                1px solid rgba(255,255,255,0.25);

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
           MENU
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
            background:
                rgba(255,255,255,0.12);

            color: #ffffff;
        }


        .menu a.active {
            background:
                rgba(255,255,255,0.16);

            color: #ffffff;

            border:
                1px solid rgba(255,255,255,0.45);
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
        ====================================================== */

        .menu-dropdown {
            width: 100%;
        }


        .menu-dropdown summary {
            list-style: none;

            cursor: pointer;

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


        .menu-dropdown summary::-webkit-details-marker {
            display: none;
        }


        .menu-dropdown summary:hover {
            background: rgba(255,255,255,0.12);

            color: #ffffff;
        }


        .menu-dropdown[open] > summary {
            background: rgba(255,255,255,0.16);

            color: #ffffff;

            border: 1px solid rgba(255,255,255,0.45);
        }


        .menu-dropdown .dropdown-arrow {
            margin-left: auto;

            font-size: 11px;

            transition: 0.2s;
        }


        .menu-dropdown[open] .dropdown-arrow {
            transform: rotate(180deg);
        }


        .menu-submenu {
            background: #ffffff;

            border-radius: 9px;

            margin: 3px 0 2px;

            padding: 7px;

            box-shadow: 0 5px 16px rgba(0,0,0,0.10);
        }


        .menu-submenu a {
            color: #173f67;

            padding: 11px 12px;

            border-radius: 7px;

            font-size: 13px;

            font-weight: 600;

            display: flex;

            align-items: center;

            gap: 10px;

            text-decoration: none;

            transition: 0.2s;
        }


        .menu-submenu a:hover {
            background: #edf8f2;

            color: #17663f;
        }


        .menu-submenu-icon {
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

            width:
                calc(100% - 255px);

            min-height: 100vh;
        }


        /* =====================================================
           TOPBAR
        ===================================================== */

        .topbar {
            height: 75px;

            background: #ffffff;

            border-bottom:
                1px solid #e5e7eb;

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

            top:
                calc(100% + 10px);

            right: 0;

            width: 170px;

            background: #ffffff;

            border:
                1px solid #e5e7eb;

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


        /* =====================================================
           PAGE HEADER
        ===================================================== */

        .page-header {
            display: flex;

            justify-content: space-between;

            align-items: flex-start;

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
        }


        .information-count {
            background: #eaf4fb;

            color: #155587;

            padding: 8px 15px;

            border-radius: 20px;

            font-size: 12px;

            font-weight: 600;

            white-space: nowrap;
        }


        /* =====================================================
           INFORMATION GRID
        ===================================================== */

        .information-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 24px;
            align-items: start;
        }

        /* =====================================================
           SEARCH & FILTER
        ===================================================== */

        .filter-bar {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 14px;
            padding: 18px 20px;
            margin-bottom: 24px;
            box-shadow: 0 4px 14px rgba(0,0,0,0.04);
        }

        .filter-row {
            display: grid;
            grid-template-columns: minmax(260px, 1.5fr) minmax(190px, 1fr) minmax(190px, 1fr);
            gap: 14px;
            align-items: end;
        }

        .filter-field {
            min-width: 0;
        }

        .filter-label {
            display: block;
            margin-bottom: 7px;
            font-size: 12px;
            font-weight: 700;
            color: #64748b;
        }

        .search-wrap {
            position: relative;
        }

        .search-icon {
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 15px;
            color: #7890a7;
            pointer-events: none;
        }

        .search-input,
        .filter-select {
            width: 100%;
            height: 44px;
            border: 1px solid #dbe3ea;
            border-radius: 9px;
            background: #ffffff;
            color: #173f67;
            font-family: Arial, sans-serif;
            font-size: 13px;
            outline: none;
        }

        .search-input {
            padding: 0 14px 0 40px;
        }

        .filter-select {
            padding: 0 12px;
            cursor: pointer;
        }

        .search-input:focus,
        .filter-select:focus {
            border-color: #08733a;
            box-shadow: 0 0 0 3px rgba(8,115,58,0.08);
        }

        .other-filter {
            display: none;
            margin-top: 14px;
            max-width: 33.33%;
        }

        .other-filter.show {
            display: block;
        }

        .filter-info {
            margin-top: 11px;
            font-size: 12px;
            color: #7890a7;
        }

        /* =====================================================
           COMMENTS
        ===================================================== */

        .comment-section {
            margin-top: 15px;
            padding-top: 13px;
            border-top: 1px solid #edf1f5;
        }

        .comment-toggle {
            width: 100%;
            border: 0;
            background: #f7fafc;
            color: #17456f;
            border-radius: 8px;
            padding: 9px 11px;
            font-family: Arial, sans-serif;
            font-size: 12px;
            font-weight: 700;
            text-align: left;
            cursor: pointer;
        }

        .comment-toggle:hover {
            background: #edf8f2;
            color: #17663f;
        }

        .comment-body {
            display: none;
            margin-top: 10px;
        }

        .comment-body.show {
            display: block;
        }

        .comment-list {
            display: flex;
            flex-direction: column;
            gap: 8px;
            max-height: 180px;
            overflow-y: auto;
            margin-bottom: 10px;
        }

        .comment-item {
            background: #f8fafc;
            border: 1px solid #edf1f5;
            border-radius: 8px;
            padding: 9px 10px;
        }

        .comment-head {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 8px;
            margin-bottom: 4px;
        }

        .comment-name {
            font-size: 12px;
            font-weight: 700;
            color: #173f67;
        }

        .comment-date {
            font-size: 10px;
            color: #94a3b8;
            white-space: nowrap;
        }

        .comment-text {
            font-size: 12px;
            line-height: 1.5;
            color: #617b94;
            white-space: pre-line;
        }

        .comment-empty {
            font-size: 12px;
            color: #7890a7;
            margin-bottom: 9px;
        }

        .comment-form {
            display: flex;
            flex-direction: column;
            gap: 7px;
        }

        .comment-input {
            width: 100%;
            min-height: 72px;
            resize: vertical;
            border: 1px solid #dbe3ea;
            border-radius: 8px;
            padding: 9px 10px;
            font-family: Arial, sans-serif;
            font-size: 12px;
            color: #173f67;
            outline: none;
        }

        .comment-input:focus {
            border-color: #08733a;
        }

        .comment-button {
            align-self: flex-end;
            border: 0;
            background: #08733a;
            color: #ffffff;
            padding: 8px 12px;
            border-radius: 7px;
            font-family: Arial, sans-serif;
            font-size: 12px;
            font-weight: 700;
            cursor: pointer;
        }

        .comment-button:hover {
            background: #065f30;
        }

        .filter-empty {
            display: none;
            grid-column: 1 / -1;
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 14px;
            padding: 55px 25px;
            text-align: center;
            box-shadow: 0 4px 14px rgba(0,0,0,0.04);
        }

        .filter-empty.show {
            display: block;
        }


        /* =====================================================
           INFORMATION CARD
        ===================================================== */

        .information-card {
            width: 100%;
            min-height: 330px;

            background: #ffffff;

            border:
                1px solid #e5e7eb;

            border-radius: 14px;

            padding: 20px;

            box-shadow:
                0 4px 14px rgba(0,0,0,0.05);

            display: flex;

            flex-direction: column;

            transition: 0.2s ease;

        }


        .information-card:hover {

            transform:
                translateY(-2px);

            box-shadow:
                0 7px 20px rgba(0,0,0,0.08);

        }


        /* =====================================================
           CARD TOP
        ===================================================== */

        .information-top {

            display: flex;

            justify-content: space-between;

            align-items: flex-start;

            gap: 10px;

        }


        .information-icon {

            width: 42px;
            height: 42px;

            border-radius: 10px;

            background: #edf5fb;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 19px;

            flex-shrink: 0;

        }


        .information-date {

            font-size: 11px;

            color: #7890a7;

            white-space: nowrap;

            padding-top: 5px;

        }


        /* =====================================================
           CATEGORY
        ===================================================== */

        .information-category {

            display: inline-block;

            margin-top: 15px;

            padding: 5px 9px;

            border-radius: 20px;

            background: #e7f8ef;

            color: #13804b;

            font-size: 10px;

            font-weight: 700;

        }


        /* =====================================================
           TITLE
        ===================================================== */

        .information-title {

            margin-top: 13px;

            font-size: 18px;

            font-weight: 800;

            color: #173f67;

            line-height: 1.35;

            word-break: break-word;

        }


        /* =====================================================
           DESCRIPTION
        ===================================================== */

        .information-description {

            margin-top: 9px;

            font-size: 13px;

            line-height: 1.55;

            color: #617b94;

            display: -webkit-box;

            -webkit-line-clamp: 4;

            -webkit-box-orient: vertical;

            overflow: hidden;

        }


        /* =====================================================
           CARD FOOTER
        ===================================================== */

        .information-footer {

            margin-top: auto;

            padding-top: 14px;

            border-top:
                1px solid #edf1f5;

            display: flex;

            justify-content: space-between;

            align-items: center;

        }


        .publisher {

            display: flex;

            align-items: center;

            gap: 7px;

            font-size: 11px;

            font-weight: 700;

            color: #13804b;

        }


        .publisher-icon {

            font-size: 14px;

        }


        .published-status {

            font-size: 11px;

            color: #7890a7;

        }


        /* =====================================================
           EMPTY STATE
        ===================================================== */

        .empty-card {
            width: 100%;
            min-height: 330px;

            background: #ffffff;

            border:
                1px solid #e5e7eb;

            border-radius: 14px;

            display: flex;

            flex-direction: column;

            align-items: center;

            justify-content: center;

            text-align: center;

            box-shadow:
                0 4px 14px rgba(0,0,0,0.05);

        }


        .empty-icon {

            width: 52px;
            height: 52px;

            border-radius: 50%;

            background: #edf5fb;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 22px;

            margin-bottom: 12px;

        }


        .empty-card h3 {

            font-size: 15px;

            color: #173f67;

            margin-bottom: 6px;

        }


        .empty-card p {

            font-size: 12px;

            color: #7890a7;

        }


        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 1100px) {

            .information-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .filter-row {
                grid-template-columns: 1fr 1fr;
            }

            .search-wrap {
                grid-column: 1 / -1;
            }

            .other-filter {
                max-width: none;
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


            .information-grid {
                grid-template-columns: 1fr;
            }

            .filter-row {
                grid-template-columns: 1fr;
            }

            .search-wrap {
                grid-column: auto;
            }

            .information-card,
            .empty-card {
                width: 100%;
                min-height: 330px;
            }

        }

    </style>

</head>


<body>


<div class="layout">


    <!-- =====================================================
         SIDEBAR SEKRETARIS DESA
    ====================================================== -->

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
                href="{{ route('sekdes.informasi') }}"
                class="{{ request()->routeIs('sekdes.informasi') ? 'active' : '' }}"
            >

                <span class="menu-icon">
                    📢
                </span>

                <span>
                    Informasi
                </span>

            </a>


        



            {{-- PERIHAL --}}

            <details
                class="menu-dropdown"
                {{ request()->is('sekdes/profil-desa*')
                    || request()->is('sekdes/visi-misi*')
                    || request()->is('sekdes/perangkat-desa*')
                    || request()->is('sekdes/kontak-desa*')
                    ? 'open'
                    : '' }}
            >

                <summary>

                    <span class="menu-icon">
                        ℹ️
                    </span>

                    <span>
                        Perihal
                    </span>

                    <span class="dropdown-arrow">
                        ▼
                    </span>

                </summary>


                <div class="menu-submenu">

                    <a
                        href="{{ url('/sekdes/profil-desa') }}"
                    >

                        <span class="menu-submenu-icon">
                            🏛️
                        </span>

                        <span>
                            Profil Desa
                        </span>

                    </a>


                    <a
                        href="{{ url('/sekdes/visi-misi') }}"
                    >

                        <span class="menu-submenu-icon">
                            🎯
                        </span>

                        <span>
                            Visi &amp; Misi
                        </span>

                    </a>


                    <a
                        href="{{ url('/sekdes/perangkat-desa') }}"
                    >

                        <span class="menu-submenu-icon">
                            👥
                        </span>

                        <span>
                            Perangkat Desa
                        </span>

                    </a>


                    <a
                        href="{{ url('/sekdes/kontak-desa') }}"
                    >

                        <span class="menu-submenu-icon">
                            📞
                        </span>

                        <span>
                            Kontak Desa
                        </span>

                    </a>

                </div>

            </details>

</nav>

    </aside>



    <!-- =====================================================
         MAIN
    ====================================================== -->

    <main class="main">


        <!-- =================================================
             TOPBAR
        ================================================== -->

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



        <!-- =================================================
             CONTENT
        ================================================== -->

        <section class="content">


            <!-- PAGE HEADER -->

            <div class="page-header">


                <div>

                    <h1>
                        Informasi Desa
                    </h1>


                    <p>
                        Daftar informasi yang tersedia untuk masyarakat.
                    </p>

                </div>


                <div class="information-count">

                    {{ $informasi->count() }} Informasi

                </div>


            </div>


            <!-- =================================================
                 SEARCH & FILTER
            ================================================== -->

            <div class="filter-bar">

                <div class="filter-row">

                    <div class="filter-field search-wrap">
                        <span class="search-icon">🔎</span>
                        <input
                            type="text"
                            id="searchInformasi"
                            class="search-input"
                            placeholder="Cari informasi..."
                            autocomplete="off"
                        >
                    </div>

                    <div class="filter-field">
                        <label class="filter-label" for="filterTanggal">
                            Filter Tanggal
                        </label>

                        <select id="filterTanggal" class="filter-select">
                            <option value="semua">Semua</option>
                            <option value="hari-ini">Hari Ini</option>
                            <option value="kemarin">Kemarin</option>
                            <option value="7-hari">7 Hari Terakhir</option>
                            <option value="30-hari">30 Hari Terakhir</option>
                        </select>
                    </div>

                    <div class="filter-field">
                        <label class="filter-label" for="filterKategori">
                            Kategori
                        </label>

                        <select id="filterKategori" class="filter-select">
                            <option value="semua">Semua</option>
                            <option value="pengumuman">Pengumuman</option>
                            <option value="kegiatan desa">Kegiatan Desa</option>
                            <option value="lainnya">Lainnya</option>
                        </select>
                    </div>

                </div>

                <div id="otherFilter" class="filter-field other-filter">
                    <label class="filter-label" for="filterLainnya">
                        Pilih Kategori Lainnya
                    </label>

                    <select id="filterLainnya" class="filter-select">
                        <option value="semua">Semua Kategori Lainnya</option>
                    </select>
                </div>

                <div id="filterInfo" class="filter-info">
                    Menampilkan semua informasi.
                </div>

            </div>


            <!-- =================================================
                 DAFTAR INFORMASI
            ================================================== -->

            @if($informasi->count() > 0)


                <div class="information-grid">


                    @foreach($informasi as $item)


                        <article
                            class="information-card information-item"
                            data-title="{{ strtolower($item->judul) }}"
                            data-content="{{ strtolower($item->isi ?? '') }}"
                            data-category="{{ strtolower($item->kategori ?? 'Informasi') }}"
                            data-date="{{ \Carbon\Carbon::parse($item->created_at)->format('Y-m-d') }}"
                        >


                            <!-- TOP -->

                            <div class="information-top">


                                <div class="information-icon">

                                    📢

                                </div>


                                <span class="information-date">

                                    {{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('d M Y') }}

                                </span>


                            </div>



                            <!-- CATEGORY -->

                            <span class="information-category">

                                {{ $item->kategori ?? 'Informasi' }}

                            </span>



                            <!-- TITLE -->

                            <h2 class="information-title">

                                {{ $item->judul }}

                            </h2>



                            <!-- DESCRIPTION -->

                            @if(!empty($item->isi))

                                <p class="information-description">

                                    {{ $item->isi }}

                                </p>

                            @endif



                            <!-- FOOTER -->

                            <div class="information-footer">


                                <div class="publisher">

                                    <span class="publisher-icon">
                                        📢
                                    </span>

                                    <span>
                                        Informasi Desa
                                    </span>

                                </div>


                                <span class="published-status">

                                    Dipublikasikan

                                </span>


                            </div>


                            <!-- =================================================
                                 KOMENTAR
                            ================================================== -->

                            <div class="comment-section">

                                <button
                                    type="button"
                                    class="comment-toggle"
                                    onclick="toggleComments({{ $item->id }})"
                                >
                                    💬 Lihat / Tulis Komentar
                                </button>

                                <div
                                    id="comments-{{ $item->id }}"
                                    class="comment-body"
                                >

                                    @if(!empty($item->komentar_list) && count($item->komentar_list) > 0)

                                        <div class="comment-list">

                                            @foreach($item->komentar_list as $komentar)

                                                <div class="comment-item">

                                                    <div class="comment-head">

                                                        <span class="comment-name">
                                                            {{ $komentar->nama_pengguna ?? $komentar->nama_warga ?? 'Pengguna' }}
                                                        </span>

                                                        <span class="comment-date">
                                                            {{ \Carbon\Carbon::parse($komentar->created_at)->locale('id')->translatedFormat('d M Y, H:i') }}
                                                        </span>

                                                    </div>

                                                    <div class="comment-text">
                                                        {{ $komentar->komentar }}
                                                    </div>

                                                </div>

                                            @endforeach

                                        </div>

                                    @else

                                        <div class="comment-empty">
                                            Belum ada komentar.
                                        </div>

                                    @endif

                                    <form
                                        class="comment-form"
                                        method="POST"
                                        action="{{ route('sekdes.informasi.komentar', $item->id) }}"
                                    >

                                        @csrf

                                        <textarea
                                            name="komentar"
                                            class="comment-input"
                                            placeholder="Tulis komentar..."
                                            maxlength="1000"
                                            required
                                        ></textarea>

                                        <button
                                            type="submit"
                                            class="comment-button"
                                        >
                                            Kirim Komentar
                                        </button>

                                    </form>

                                </div>

                            </div>


                        </article>


                    @endforeach

                    <div id="filterEmpty" class="filter-empty">
                        <div class="empty-icon">🔎</div>
                        <h3>Tidak ada informasi ditemukan</h3>
                        <p style="margin-top:6px;">
                            Coba ubah kata pencarian atau filter yang dipilih.
                        </p>
                    </div>


                </div>


            @else


                <!-- EMPTY -->

                <div class="information-grid">


                    <div class="empty-card">


                        <div class="empty-icon">
                            📢
                        </div>


                        <h3>
                            Belum Ada Informasi
                        </h3>


                        <p>
                            Belum ada informasi desa.
                        </p>


                    </div>


                </div>


            @endif


        </section>


    </main>


</div>


<script>

    /* =====================================================
       SEARCH & FILTER INFORMASI
    ===================================================== */

    document.addEventListener('DOMContentLoaded', function () {

        const searchInput = document.getElementById('searchInformasi');
        const filterTanggal = document.getElementById('filterTanggal');
        const filterKategori = document.getElementById('filterKategori');
        const filterLainnya = document.getElementById('filterLainnya');
        const otherFilter = document.getElementById('otherFilter');
        const filterInfo = document.getElementById('filterInfo');
        const filterEmpty = document.getElementById('filterEmpty');
        const cards = Array.from(
            document.querySelectorAll('.information-item')
        );

        if (!searchInput || !filterTanggal || !filterKategori) {
            return;
        }

        const otherCategories = [...new Set(
            cards
                .map(card => (card.dataset.category || '').trim())
                .filter(category =>
                    category &&
                    category !== 'pengumuman' &&
                    category !== 'kegiatan desa'
                )
        )].sort();

        otherCategories.forEach(category => {
            const option = document.createElement('option');
            option.value = category;
            option.textContent =
                category.charAt(0).toUpperCase() + category.slice(1);
            filterLainnya.appendChild(option);
        });

        function isDateMatch(cardDate, selectedDate) {

            if (selectedDate === 'semua') {
                return true;
            }

            const today = new Date();
            today.setHours(0, 0, 0, 0);

            const itemDate = new Date(cardDate + 'T00:00:00');
            itemDate.setHours(0, 0, 0, 0);

            const diffDays = Math.floor(
                (today - itemDate) / (1000 * 60 * 60 * 24)
            );

            if (selectedDate === 'hari-ini') {
                return diffDays === 0;
            }

            if (selectedDate === 'kemarin') {
                return diffDays === 1;
            }

            if (selectedDate === '7-hari') {
                return diffDays >= 0 && diffDays <= 6;
            }

            if (selectedDate === '30-hari') {
                return diffDays >= 0 && diffDays <= 29;
            }

            return true;
        }

        function applyFilter() {

            const search = searchInput.value.toLowerCase().trim();
            const tanggal = filterTanggal.value;
            const kategori = filterKategori.value;
            const kategoriLainnya = filterLainnya.value;

            let visibleCount = 0;

            cards.forEach(card => {

                const title = (card.dataset.title || '').toLowerCase();
                const content = (card.dataset.content || '').toLowerCase();
                const category = (card.dataset.category || '').toLowerCase();
                const date = card.dataset.date || '';

                const matchesSearch =
                    !search ||
                    title.includes(search) ||
                    content.includes(search) ||
                    category.includes(search);

                let matchesCategory = true;

                if (kategori === 'pengumuman') {
                    matchesCategory = category === 'pengumuman';
                }

                if (kategori === 'kegiatan desa') {
                    matchesCategory = category === 'kegiatan desa';
                }

                if (kategori === 'lainnya') {

                    matchesCategory =
                        category !== 'pengumuman' &&
                        category !== 'kegiatan desa';

                    if (
                        kategoriLainnya !== 'semua' &&
                        kategoriLainnya !== ''
                    ) {
                        matchesCategory =
                            category === kategoriLainnya;
                    }
                }

                const matchesDate =
                    isDateMatch(date, tanggal);

                const show =
                    matchesSearch &&
                    matchesCategory &&
                    matchesDate;

                card.style.display = show ? '' : 'none';

                if (show) {
                    visibleCount++;
                }
            });

            if (filterEmpty) {
                filterEmpty.classList.toggle(
                    'show',
                    visibleCount === 0
                );
            }

            if (visibleCount === 0) {
                filterInfo.textContent =
                    'Tidak ada informasi yang sesuai dengan pencarian/filter.';
            } else {
                filterInfo.textContent =
                    'Menampilkan ' + visibleCount + ' informasi.';
            }
        }

        filterKategori.addEventListener('change', function () {

            const isOther =
                this.value === 'lainnya';

            otherFilter.classList.toggle(
                'show',
                isOther
            );

            if (!isOther) {
                filterLainnya.value = 'semua';
            }

            applyFilter();
        });

        searchInput.addEventListener(
            'input',
            applyFilter
        );

        filterTanggal.addEventListener(
            'change',
            applyFilter
        );

        filterLainnya.addEventListener(
            'change',
            applyFilter
        );

        applyFilter();
    });


    /* =====================================================
       TOGGLE KOMENTAR
    ===================================================== */

    function toggleComments(id) {

        const commentBox =
            document.getElementById('comments-' + id);

        if (!commentBox) {
            return;
        }

        commentBox.classList.toggle('show');
    }

</script>


</body>

</html>
