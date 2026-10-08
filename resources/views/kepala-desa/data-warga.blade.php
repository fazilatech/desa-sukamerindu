<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Data Warga - Kepala Desa</title>


    <style>

        * {
            box-sizing: border-box;
        }


        html,
        body {
            margin: 0;
            padding: 0;
            min-height: 100%;
        }


        body {
            font-family:
                "Segoe UI",
                Arial,
                sans-serif;

            background: #f3f6f9;

            color: #10233f;
        }


        a {
            text-decoration: none;
            color: inherit;
        }



        /* =====================================================
           LAYOUT
        ===================================================== */

        .page {
            min-height: 100vh;

            display: flex;
        }



        /* =====================================================
           SIDEBAR
        ===================================================== */

        .sidebar {
            width: 300px;

            height: 100vh;
            min-height: 100vh;

            position: fixed;
            top: 0;
            left: 0;

            background: #096b35;

            color: white;

            padding:
                36px
                16px
                24px;

            display: flex;

            flex-direction: column;

            flex-shrink: 0;

            overflow-y: auto;
            overflow-x: hidden;

            z-index: 3000;
        }


        .brand {
            text-align: center;

            padding-bottom: 30px;

            border-bottom:
                1px solid
                rgba(255,255,255,.25);
        }


        .logo {
            width: 105px;
            height: 105px;

            object-fit: contain;

            background: white;

            border-radius: 8px;

            padding: 8px;

            display: block;

            margin:
                0 auto
                20px;
        }


        .brand-title {
            margin: 0;

            font-size: 22px;

            font-weight: 800;

            letter-spacing: .5px;
        }


        .brand-subtitle {
            margin-top: 8px;

            font-size: 15px;

            color:
                rgba(255,255,255,.9);
        }



        /* =====================================================
           NAVIGATION
        ===================================================== */

        .nav {
            margin-top: 28px;
        }


        .nav-item {
            display: flex;

            align-items: center;

            gap: 15px;

            width: 100%;

            padding:
                14px
                20px;

            margin-bottom: 8px;

            border-radius: 9px;

            color: white;

            font-size: 15px;

            font-weight: 600;

            transition: .2s;
        }


        .nav-item:hover {
            background:
                rgba(255,255,255,.10);
        }


        .nav-item.active {
            background:
                rgba(255,255,255,.16);

            border:
                1px solid
                rgba(255,255,255,.55);
        }


        .nav-icon {
            width: 22px;

            text-align: center;

            font-size: 17px;
        }



        /* =====================================================
           MAIN
        ===================================================== */

        .main {
            flex: 1;

            min-width: 0;

            margin-left: 300px;
        }



        /* =====================================================
           TOPBAR
        ===================================================== */

        .topbar {
            height: 84px;

            background: white;

            border-bottom:
                1px solid #e5e7eb;

            display: flex;

            align-items: center;

            justify-content: space-between;

            padding:
                0
                38px;

            position: fixed;
            top: 0;
            right: 0;
            left: 300px;

            z-index: 2500;
        }


        .topbar-title {
            margin: 0;

            color: #087238;

            font-size: 22px;

            font-weight: 800;
        }



        /* =====================================================
           PROFILE
        ===================================================== */

        .profile-area {
            position: relative;

            display: flex;

            align-items: center;
        }


        .profile {
            display: flex;

            align-items: center;

            gap: 12px;

            cursor: pointer;

            padding:
                6px
                10px;

            border-radius: 12px;

            transition: .2s;
        }


        .profile:hover {
            background: #f3f4f6;
        }


        .avatar {
            width: 48px;
            height: 48px;

            border-radius: 50%;

            background: #dcfce7;

            color: #087238;

            display: flex;

            align-items: center;

            justify-content: center;

            font-weight: 800;

            font-size: 16px;

            overflow: hidden;

            flex-shrink: 0;
        }

        .avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }


        .profile-info {
            line-height: 1.25;
        }


        .profile-name {
            font-size: 15px;

            font-weight: 700;

            color: #111827;
        }


        .profile-role {
            font-size: 13px;

            color: #6b7280;

            margin-top: 4px;
        }



        /* =====================================================
           PROFILE DROPDOWN
        ===================================================== */

        .profile-dropdown {
            position: absolute;

            top:
                calc(100% + 10px);

            right: 0;

            width: 180px;

            background: white;

            border:
                1px solid #e5e7eb;

            border-radius: 12px;

            box-shadow:
                0 10px 30px
                rgba(15,23,42,.12);

            padding: 8px;

            display: none;

            z-index: 1000;
        }


        .profile-dropdown.show {
            display: block;
        }


        .dropdown-profile {
            display: block;
            width: 100%;
            color: #10233f;
            padding: 11px 12px;
            border-radius: 8px;
            text-align: left;
            font-family: inherit;
            font-size: 14px;
            font-weight: 600;
            transition: .2s;
        }

        .dropdown-profile:hover {
            background: #f3f4f6;
        }

        .dropdown-logout {
            width: 100%;

            border: none;

            background: transparent;

            color: #dc2626;

            padding:
                11px
                12px;

            border-radius: 8px;

            text-align: left;

            font-family: inherit;

            font-size: 14px;

            font-weight: 600;

            cursor: pointer;
        }


        .dropdown-logout:hover {
            background: #fef2f2;
        }



        /* =====================================================
           CONTENT
        ===================================================== */

        .content {
            padding:
                132px
                38px
                48px;
        }


        .page-heading {
            margin-bottom: 28px;
        }


        .page-heading h1 {
            margin: 0;

            font-size: 32px;

            font-weight: 800;

            color: #10233f;
        }


        .page-heading p {
            margin:
                8px
                0
                0;

            color: #66809d;

            font-size: 15px;
        }



        /* =====================================================
           STATISTICS
        ===================================================== */

        .stats {
            display: grid;

            grid-template-columns:
                repeat(
                    3,
                    minmax(0,1fr)
                );

            gap: 20px;

            margin-bottom: 24px;
        }


        .stat-card {
            background: white;

            border:
                1px solid #e5e7eb;

            border-radius: 16px;

            padding: 24px;

            box-shadow:
                0 4px 15px
                rgba(15,23,42,.04);
        }


        .stat-icon {
            width: 46px;
            height: 46px;

            border-radius: 12px;

            background: #dcfce7;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 20px;

            margin-bottom: 18px;
        }


        .stat-number {
            margin: 0;

            font-size: 30px;

            font-weight: 800;

            color: #10233f;
        }


        .stat-label {
            margin-top: 5px;

            color: #66809d;

            font-size: 14px;
        }



        /* =====================================================
           TABLE
        ===================================================== */

        .table-card {
            background: white;

            border:
                1px solid #e5e7eb;

            border-radius: 16px;

            padding: 28px;

            box-shadow:
                0 4px 15px
                rgba(15,23,42,.04);
        }


        .table-header {
            display: flex;

            align-items: center;

            justify-content: space-between;

            margin-bottom: 20px;
        }


        .table-title {
            margin: 0;

            color: #10233f;

            font-size: 20px;

            font-weight: 800;
        }


        .filter-area {
            display: grid;
            grid-template-columns: minmax(220px, 1.6fr) minmax(145px, 1fr) minmax(145px, 1fr) auto;
            align-items: center;
            gap: 10px;
            width: min(100%, 760px);
        }

        .search-wrapper {
            position: relative;
            width: 100%;
        }

        .search-icon {
            position: absolute;
            left: 13px;
            top: 50%;
            transform: translateY(-50%);
            color: #7b8da1;
            font-size: 14px;
            pointer-events: none;
        }

        .search-box,
        .filter-select {
            width: 100%;
            height: 40px;
            border: 1px solid #d1d5db;
            border-radius: 9px;
            outline: none;
            background: white;
            font-family: inherit;
            font-size: 13px;
            color: #526b85;
            transition: .2s;
        }

        .search-box {
            padding: 10px 13px 10px 36px;
        }

        .filter-select {
            padding: 0 34px 0 12px;
            cursor: pointer;
        }

        .search-box:focus,
        .filter-select:focus {
            border-color: #087238;
            box-shadow: 0 0 0 3px rgba(8,114,56,.08);
        }

        .btn-reset-filter {
            height: 40px;
            padding: 0 14px;
            border: 1px solid #d1d5db;
            border-radius: 9px;
            background: #fff;
            color: #526b85;
            font-family: inherit;
            font-size: 12px;
            font-weight: 700;
            cursor: pointer;
            transition: .2s;
            white-space: nowrap;
        }

        .btn-reset-filter:hover {
            border-color: #087238;
            color: #087238;
            background: #f0fdf4;
        }

        .filter-result {
            display: flex;
            align-items: center;
            gap: 8px;
            min-height: 20px;
            margin: -8px 0 12px;
            color: #7b8da1;
            font-size: 12px;
        }

        .filter-result.active::before {
            content: '✓';
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 18px;
            height: 18px;
            border-radius: 50%;
            background: #dcfce7;
            color: #087238;
            font-size: 11px;
            font-weight: 800;
        }

        .filter-hint {
            color: #94a3b8;
            font-size: 11px;
        }

        .table-wrapper {
            width: 100%;

            overflow-x: auto;
        }


        table {
            width: 100%;

            border-collapse: collapse;
        }


        th {
            text-align: left;

            padding:
                14px
                12px;

            border-bottom:
                1px solid #e5e7eb;

            color: #526b85;

            font-size: 13px;

            font-weight: 700;
        }


        td {
            padding:
                16px
                12px;

            border-bottom:
                1px solid #f0f2f5;

            color: #526b85;

            font-size: 14px;
        }


        tr:last-child td {
            border-bottom: none;
        }


        .name {
            color: #10233f;

            font-weight: 700;
        }


        .gender {
            display: inline-block;

            padding:
                5px
                10px;

            border-radius: 999px;

            font-size: 12px;

            font-weight: 700;

            background: #f1f5f9;

            color: #526b85;
        }


        .btn-detail {
            display: inline-block;

            padding:
                7px
                13px;

            border-radius: 7px;

            background: #087238;

            color: white;

            font-size: 12px;

            font-weight: 700;

            transition: .2s;
        }


        .btn-detail:hover {
            background: #065c2e;
        }


        .empty-row {
            text-align: center;

            color: #94a3b8;

            padding:
                30px
                12px;
        }



        /* =====================================================
           DETAIL WARGA
        ===================================================== */

        .btn-detail {
            border: none;
            cursor: pointer;
            font-family: inherit;
        }

        .detail-modal {
            position: fixed;
            inset: 0;
            background: rgba(15, 23, 42, .48);
            display: none;
            align-items: center;
            justify-content: center;
            padding: 24px;
            z-index: 2000;
        }

        .detail-modal.show {
            display: flex;
        }

        .detail-box {
            width: min(760px, 100%);
            max-height: 88vh;
            overflow-y: auto;
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 20px 60px rgba(15,23,42,.20);
        }

        .detail-head {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 22px 26px;
            border-bottom: 1px solid #e5e7eb;
        }

        .detail-head h3 {
            margin: 0;
            color: #10233f;
            font-size: 20px;
            font-weight: 800;
        }

        .detail-close {
            width: 34px;
            height: 34px;
            border: 0;
            border-radius: 9px;
            background: #f1f5f9;
            color: #526b85;
            font-size: 20px;
            cursor: pointer;
        }

        .detail-close:hover {
            background: #e2e8f0;
        }

        .detail-body {
            padding: 26px;
        }

        .detail-profile {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 16px;
            margin-bottom: 22px;
            border-radius: 13px;
            background: #f0fdf4;
            border: 1px solid #dcfce7;
        }

        .detail-avatar {
            width: 52px;
            height: 52px;
            border-radius: 50%;
            background: #dcfce7;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 23px;
            overflow: hidden;
            flex-shrink: 0;
        }

        .detail-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .detail-avatar span {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
        }

        .detail-profile strong {
            display: block;
            color: #10233f;
            font-size: 16px;
            margin-bottom: 4px;
        }

        .detail-profile span {
            color: #66809d;
            font-size: 13px;
        }

        .detail-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 15px;
        }

        .detail-item {
            padding: 14px 15px;
            border: 1px solid #e5e7eb;
            border-radius: 11px;
            background: #fff;
        }

        .detail-label {
            color: #66809d;
            font-size: 12px;
            margin-bottom: 5px;
        }

        .detail-value {
            color: #10233f;
            font-size: 14px;
            font-weight: 700;
            word-break: break-word;
        }

        @media (max-width: 650px) {
            .detail-grid {
                grid-template-columns: 1fr;
            }
        }

        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 1100px) {
            .table-header {
                align-items: flex-start;
                flex-direction: column;
                gap: 14px;
            }

            .filter-area {
                width: 100%;
                grid-template-columns: minmax(220px, 1.5fr) repeat(2, minmax(145px, 1fr)) auto;
            }
        }

        @media (max-width: 760px) {
            .filter-area {
                grid-template-columns: 1fr 1fr;
            }

            .search-wrapper {
                grid-column: 1 / -1;
            }

            .btn-reset-filter {
                width: 100%;
            }
        }

        @media (max-width: 480px) {
            .filter-area {
                grid-template-columns: 1fr;
            }

            .search-wrapper {
                grid-column: auto;
            }

            .filter-select,
            .btn-reset-filter {
                width: 100%;
            }
        }

        @media (max-width: 900px) {

            .sidebar {
                width: 240px;
            }

            .main {
                margin-left: 240px;
            }

            .topbar {
                left: 240px;
                padding:
                    0
                    25px;
            }

            .content {
                padding:
                    132px
                    25px
                    35px;
            }

            .stats {
                grid-template-columns: 1fr;
            }

        }


        @media (max-width: 650px) {

            .page {
                display: block;
            }

            .sidebar {
                position: relative;
                width: 100%;
                height: auto;
                min-height: auto;
                overflow: visible;
            }

            .main {
                margin-left: 0;
            }

            .topbar {
                position: relative;
                left: auto;
                right: auto;
                top: auto;
                height: auto;
                padding: 20px;
            }

            .content {
                padding:
                    25px
                    20px;
            }

            .profile-role {
                display: none;
            }

            .table-header {
                flex-direction: column;

                align-items: flex-start;

                gap: 12px;
            }

        }


        /* =====================================================
           DROPDOWN NAVBAR
        ===================================================== */

        .nav-dropdown {
            margin-bottom: 8px;
        }

        .nav-dropdown-toggle {
            display: flex;
            align-items: center;
            gap: 15px;
            width: 100%;
            padding: 14px 20px;
            margin: 0;
            border: 0;
            border-radius: 9px;
            background: transparent;
            color: white;
            font-family: inherit;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            text-align: left;
        }

        .nav-dropdown-toggle:hover {
            background: rgba(255,255,255,.10);
        }

        .nav-dropdown-toggle.active {
            background: rgba(255,255,255,.16);
            border: 1px solid rgba(255,255,255,.55);
        }

        .nav-dropdown-arrow {
            margin-left: auto;
            font-size: 12px;
            transition: transform .2s ease;
        }

        .nav-dropdown.open .nav-dropdown-arrow {
            transform: rotate(180deg);
        }

        .nav-dropdown-menu {
            display: none;
            padding: 4px 0 4px 37px;
        }

        .nav-dropdown.open .nav-dropdown-menu {
            display: block;
        }

        .nav-dropdown-menu a {
            display: block;
            padding: 10px 14px;
            margin-bottom: 3px;
            border-radius: 7px;
            color: rgba(255,255,255,.92);
            font-size: 14px;
            font-weight: 500;
        }

        .nav-dropdown-menu a:hover,
        .nav-dropdown-menu a.active {
            background: rgba(255,255,255,.10);
        }

    </style>

</head>


<body>


<div class="page">


    {{-- =====================================================
         SIDEBAR
    ====================================================== --}}

    <aside class="sidebar">

        <div>

            <div class="brand">

                <img
                    src="https://cdn.phototourl.com/free/2026-08-19-ada8088c-135b-4f75-94c5-ef27a75114f8.png"
                    alt="Logo Kabupaten Kepahiang"
                    class="logo"
                >


                <h2 class="brand-title">
                    DESA SUKAMERINDU
                </h2>


                <div class="brand-subtitle">
                    Sistem Informasi Desa
                </div>

            </div>



            <nav class="nav">

                <a
                    href="{{ route('kepala-desa.dashboard') }}"
                    class="nav-item {{ request()->routeIs('kepala-desa.dashboard') ? 'active' : '' }}"
                >
                    <span class="nav-icon">🏠</span>
                    <span>Dashboard</span>
                </a>

                <a
                    href="{{ route('kepala-desa.pengajuan') }}"
                    class="nav-item {{ request()->routeIs('kepala-desa.pengajuan*') ? 'active' : '' }}"
                >
                    <span class="nav-icon">📄</span>
                    <span>Pengajuan Surat</span>
                </a>

                <div class="nav-dropdown {{ request()->routeIs('kepala-desa.data-warga*', 'kepala-desa.data-keluarga*') ? 'open' : '' }}">
                    <button
                        type="button"
                        class="nav-dropdown-toggle {{ request()->routeIs('kepala-desa.data-warga*', 'kepala-desa.data-keluarga*') ? 'active' : '' }}"
                        onclick="toggleNavDropdown(this)"
                    >
                        <span class="nav-icon">👥</span>
                        <span>Data Warga</span>
                        <span class="nav-dropdown-arrow">▼</span>
                    </button>

                    <div class="nav-dropdown-menu">
                        <a
                            href="{{ route('kepala-desa.data-warga') }}"
                            class="{{ request()->routeIs('kepala-desa.data-warga*') ? 'active' : '' }}"
                        >Data Warga</a>

                        <a
                            href="{{ route('kepala-desa.data-keluarga') }}"
                            class="{{ request()->routeIs('kepala-desa.data-keluarga*') ? 'active' : '' }}"
                        >Data Keluarga</a>

                        <a href="#">Data Kelahiran</a>
                        <a href="#">Data Kematian</a>
                        <a href="#">Data Perpindahan</a>
                    </div>
                </div>

                <div class="nav-dropdown {{ request()->routeIs('kepala-desa.informasi*', 'kepala-desa.agenda*') ? 'open' : '' }}">
                    <button
                        type="button"
                        class="nav-dropdown-toggle {{ request()->routeIs('kepala-desa.informasi*', 'kepala-desa.agenda*') ? 'active' : '' }}"
                        onclick="toggleNavDropdown(this)"
                    >
                        <span class="nav-icon">📢</span>
                        <span>Pengumuman</span>
                        <span class="nav-dropdown-arrow">▼</span>
                    </button>

                    <div class="nav-dropdown-menu">
                        <a
                            href="{{ route('kepala-desa.informasi') }}"
                            class="{{ request()->routeIs('kepala-desa.informasi*') ? 'active' : '' }}"
                        >Informasi</a>

                        <a
                            href="{{ route('kepala-desa.agenda') }}"
                            class="{{ request()->routeIs('kepala-desa.agenda*') ? 'active' : '' }}"
                        >Agenda</a>
                    </div>
                </div>

                <div class="nav-dropdown">
                    <button
                        type="button"
                        class="nav-dropdown-toggle"
                        onclick="toggleNavDropdown(this)"
                    >
                        <span class="nav-icon">📋</span>
                        <span>Perihal</span>
                        <span class="nav-dropdown-arrow">▼</span>
                    </button>

                    <div class="nav-dropdown-menu">
                        <a href="{{ route('guest.profil-desa') }}">
                            Profil Desa
                        </a>
                        <a href="{{ route('home') }}#visi-misi">
                            Visi &amp; Misi
                        </a>
                        <a href="{{ route('home') }}#perangkat-desa">
                            Struktur Pemerintahan
                        </a>
                    </div>
                </div>

            </nav>

        </div>

    </aside>



    {{-- =====================================================
         MAIN
    ====================================================== --}}

    <main class="main">


        {{-- =================================================
             TOPBAR
        ================================================== --}}

        <header class="topbar">


            <h2 class="topbar-title">
                Data Warga
            </h2>



            <div class="profile-area">


                <div
                    class="profile"
                    onclick="toggleProfileDropdown()"
                >

                    <div class="avatar">

                        @if(auth()->user()->profile_photo)

                            <img
                                src="{{ asset('storage/' . auth()->user()->profile_photo) }}"
                                alt="Foto {{ auth()->user()->name }}"
                            >

                        @else

                            {{ strtoupper(
                                substr(
                                    auth()->user()->name,
                                    0,
                                    2
                                )
                            ) }}

                        @endif

                    </div>


                    <div class="profile-info">

                        <div class="profile-name">
                            {{ auth()->user()->name }}
                        </div>


                        <div class="profile-role">
                            Kepala Desa
                        </div>

                    </div>

                </div>



                <div
                    id="profileDropdown"
                    class="profile-dropdown"
                >

                    <a
                        href="{{ route('kepala-desa.profil') }}"
                        class="dropdown-profile"
                    >
                        👤&nbsp; Profil
                    </a>

                    <form
                        method="POST"
                        action="{{ route('logout') }}"
                    >

                        @csrf

                        <button
                            type="submit"
                            class="dropdown-logout"
                        >
                            🚪&nbsp; Keluar
                        </button>

                    </form>

                </div>


            </div>

        </header>



        {{-- =================================================
             CONTENT
        ================================================== --}}

        <section class="content">


            <div class="page-heading">

                <h1>
                    Data Warga
                </h1>

                <p>
                    Kelola dan pantau data kependudukan
                    warga Desa Sukamerindu.
                </p>

            </div>



            {{-- =================================================
                 STATISTICS
            ================================================== --}}

            <div class="stats">


                <div class="stat-card">

                    <div class="stat-icon">
                        👥
                    </div>

                    <h3
                        class="stat-number"
                        id="totalWarga"
                    >
                        0
                    </h3>

                    <div class="stat-label">
                        Total Warga
                    </div>

                </div>



                <div class="stat-card">

                    <div class="stat-icon">
                        👨
                    </div>

                    <h3
                        class="stat-number"
                        id="totalLaki"
                    >
                        0
                    </h3>

                    <div class="stat-label">
                        Laki-laki
                    </div>

                </div>



                <div class="stat-card">

                    <div class="stat-icon">
                        👩
                    </div>

                    <h3
                        class="stat-number"
                        id="totalPerempuan"
                    >
                        0
                    </h3>

                    <div class="stat-label">
                        Perempuan
                    </div>

                </div>


            </div>



            {{-- =================================================
                 DATA WARGA
            ================================================== --}}

            <div class="table-card">


                <div class="table-header">

                    <h3 class="table-title">
                        Daftar Data Warga
                    </h3>


                    <div class="filter-area">

                        <div class="search-wrapper">
                            <span class="search-icon">🔎</span>
                            <input
                                type="text"
                                id="searchBox"
                                class="search-box"
                                placeholder="Cari nama, NIK, atau alamat..."
                                autocomplete="off"
                            >
                        </div>

                        <select id="genderFilter" class="filter-select" aria-label="Filter jenis kelamin">
                            <option value="">Semua Jenis Kelamin</option>
                            <option value="laki-laki">Laki-laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>

                        <select id="statusFilter" class="filter-select" aria-label="Filter status perkawinan">
                            <option value="">Semua Status</option>
                            <option value="belum menikah">Belum Menikah</option>
                            <option value="menikah">Menikah</option>
                            <option value="cerai hidup">Cerai Hidup</option>
                            <option value="cerai mati">Cerai Mati</option>
                        </select>

                        <button
                            type="button"
                            id="resetFilter"
                            class="btn-reset-filter"
                        >
                            Reset
                        </button>

                    </div>

                </div>

                <div id="filterResult" class="filter-result"></div>

                <div class="table-wrapper">

                    <table>

                        <thead>

                            <tr>

                                <th>
                                    No
                                </th>

                                <th>
                                    NIK
                                </th>

                                <th>
                                    Nama Warga
                                </th>

                                <th>
                                    Jenis Kelamin
                                </th>

                                <th>
                                    Alamat
                                </th>

                                <th>
                                    Aksi
                                </th>

                            </tr>

                        </thead>


                        <tbody id="wargaTable">

                            @if(isset($warga) && $warga->count())

                                @foreach($warga as $index => $item)

                                    <tr
                                        data-gender="{{ strtolower($item->jenis_kelamin ?? $item->gender ?? '') }}"
                                        data-status="{{ strtolower($item->status_perkawinan ?? '') }}"
                                    >

                                        <td>
                                            {{ $index + 1 }}
                                        </td>

                                        <td>
                                            {{ $item->nik ?? '-' }}
                                        </td>

                                        <td class="name">
                                            {{ $item->nama ?? $item->name ?? '-' }}
                                        </td>

                                        <td>

                                            <span class="gender">

                                                {{ $item->jenis_kelamin
                                                    ?? $item->gender
                                                    ?? '-'
                                                }}

                                            </span>

                                        </td>

                                        <td>
                                            {{ $item->alamat ?? '-' }}
                                        </td>

                                        <td>

                                            <button
                                                type="button"
                                                class="btn-detail"
                                                onclick="openDetail(this)"
                                                data-id="{{ $item->id ?? $item->user_id ?? $item->warga_id ?? '' }}"
                                                data-photo="{{ $item->profile_photo ?? $item->foto_profil ?? '' }}"
                                                data-nik="{{ $item->nik ?? '-' }}"
                                                data-nama="{{ $item->nama ?? $item->name ?? '-' }}"
                                                data-gender="{{ $item->jenis_kelamin ?? $item->gender ?? '-' }}"
                                                data-alamat="{{ $item->alamat ?? '-' }}"
                                                data-no-kk="{{ $item->no_kk ?? $item->nomor_kk ?? '-' }}"
                                                data-tempat-lahir="{{ $item->tempat_lahir ?? '-' }}"
                                                data-tanggal-lahir="{{ $item->tanggal_lahir ?? '-' }}"
                                                data-agama="{{ $item->agama ?? '-' }}"
                                                data-pekerjaan="{{ $item->pekerjaan ?? '-' }}"
                                                data-status-perkawinan="{{ $item->status_perkawinan ?? '-' }}"
                                                data-no-hp="{{ $item->no_hp ?? $item->phone ?? '-' }}"
                                                data-email="{{ $item->email ?? '-' }}"
                                                data-rt="{{ $item->rt ?? '-' }}"
                                                data-rw="{{ $item->rw ?? '-' }}"
                                            >
                                                Lihat
                                            </button>

                                        </td>

                                    </tr>

                                @endforeach

                            @else

                                <tr>

                                    <td
                                        colspan="6"
                                        class="empty-row"
                                    >
                                        Belum ada data warga.
                                    </td>

                                </tr>

                            @endif

                        </tbody>

                    </table>

                </div>


            </div>


        </section>


        {{-- MODAL DETAIL DATA WARGA --}}
        <div id="detailModal" class="detail-modal" onclick="closeDetail(event)">
            <div class="detail-box" onclick="event.stopPropagation()">
                <div class="detail-head">
                    <h3>Detail Data Warga</h3>
                    <button type="button" class="detail-close" onclick="closeDetail()">&times;</button>
                </div>

                <div class="detail-body">
                    <div class="detail-profile">
                        <div class="detail-avatar" id="detailAvatar">
                            <img
                                id="detailFoto"
                                src=""
                                alt="Foto Warga"
                                style="width:100%;height:100%;object-fit:cover;border-radius:50%;display:none;"
                            >
                            <span id="detailAvatarText">👤</span>
                        </div>
                        <div>
                            <strong id="detailNama">-</strong>
                            <span id="detailNik">NIK: -</span>
                        </div>
                    </div>

                    <div class="detail-grid">
                        <div class="detail-item"><div class="detail-label">No. KK</div><div class="detail-value" id="detailNoKk">-</div></div>
                        <div class="detail-item"><div class="detail-label">Jenis Kelamin</div><div class="detail-value" id="detailGender">-</div></div>
                        <div class="detail-item"><div class="detail-label">Tempat Lahir</div><div class="detail-value" id="detailTempatLahir">-</div></div>
                        <div class="detail-item"><div class="detail-label">Tanggal Lahir</div><div class="detail-value" id="detailTanggalLahir">-</div></div>
                        <div class="detail-item"><div class="detail-label">Agama</div><div class="detail-value" id="detailAgama">-</div></div>
                        <div class="detail-item"><div class="detail-label">Pekerjaan</div><div class="detail-value" id="detailPekerjaan">-</div></div>
                        <div class="detail-item"><div class="detail-label">Status Perkawinan</div><div class="detail-value" id="detailStatus">-</div></div>
                        <div class="detail-item"><div class="detail-label">No. HP</div><div class="detail-value" id="detailHp">-</div></div>
                        <div class="detail-item"><div class="detail-label">Email</div><div class="detail-value" id="detailEmail">-</div></div>
                        <div class="detail-item"><div class="detail-label">RT / RW</div><div class="detail-value" id="detailRtRw">-</div></div>
                        <div class="detail-item" style="grid-column: 1 / -1;"><div class="detail-label">Alamat</div><div class="detail-value" id="detailAlamat">-</div></div>
                    </div>
                </div>
            </div>
        </div>

    </main>


</div>



<script>


    /* =====================================================
       PROFILE DROPDOWN
    ===================================================== */

    function toggleNavDropdown(button) {
        const dropdown = button.closest('.nav-dropdown');
        if (dropdown) {
            dropdown.classList.toggle('open');
        }
    }


    function toggleProfileDropdown() {

        const dropdown =
            document.getElementById(
                'profileDropdown'
            );

        dropdown.classList.toggle('show');

    }


    document.addEventListener(
        'click',
        function(event) {

            const profileArea =
                document.querySelector(
                    '.profile-area'
                );

            const dropdown =
                document.getElementById(
                    'profileDropdown'
                );


            if (
                profileArea &&
                !profileArea.contains(
                    event.target
                )
            ) {

                dropdown.classList.remove(
                    'show'
                );

            }

        }
    );



    /* =====================================================
       SEARCH DATA WARGA
    ===================================================== */

    const searchBox = document.getElementById('searchBox');
    const genderFilter = document.getElementById('genderFilter');
    const statusFilter = document.getElementById('statusFilter');
    const resetFilter = document.getElementById('resetFilter');
    const filterResult = document.getElementById('filterResult');

    function normalizeGender(value) {
        const gender = (value || '').toLowerCase().trim();

        if (gender.includes('laki') || gender === 'l') return 'laki-laki';
        if (gender.includes('perempuan') || gender === 'p') return 'perempuan';

        return '';
    }

    function normalizeStatus(value) {
        return (value || '')
            .toLowerCase()
            .trim()
            .replace(/\s+/g, ' ');
    }

    function applyFilters() {
        const keyword = searchBox.value.toLowerCase().trim();
        const selectedGender = genderFilter.value;
        const selectedStatus = normalizeStatus(statusFilter.value);

        const rows = document.querySelectorAll('#wargaTable tr');
        let visibleCount = 0;
        let totalRows = 0;

        rows.forEach(function(row) {
            if (row.querySelector('.empty-row')) return;

            totalRows++;

            const text = row.textContent.toLowerCase();
            const rowGender = normalizeGender(row.getAttribute('data-gender'));
            const rowStatus = normalizeStatus(row.getAttribute('data-status'));

            const matchesKeyword = !keyword || text.includes(keyword);
            const matchesGender = !selectedGender || rowGender === selectedGender;
            const matchesStatus = !selectedStatus || rowStatus === selectedStatus;

            if (matchesKeyword && matchesGender && matchesStatus) {
                row.style.display = '';
                visibleCount++;
            } else {
                row.style.display = 'none';
            }
        });

        const isFiltering = keyword || selectedGender || selectedStatus;

        if (isFiltering) {
            filterResult.classList.add('active');
            filterResult.innerHTML =
                '<span>' + visibleCount + ' data warga ditemukan</span>' +
                '<span class="filter-hint">dari ' + totalRows + ' data</span>';
        } else {
            filterResult.classList.remove('active');
            filterResult.innerHTML = '';
        }
    }

    searchBox.addEventListener('input', applyFilters);
    genderFilter.addEventListener('change', applyFilters);
    statusFilter.addEventListener('change', applyFilters);

    resetFilter.addEventListener('click', function() {
        searchBox.value = '';
        genderFilter.value = '';
        statusFilter.value = '';
        applyFilters();
        searchBox.focus();
    });



    /* =====================================================
       HITUNG DATA WARGA DARI TABLE
    ===================================================== */

    function updateStatistics() {

        const rows =
            document.querySelectorAll(
                '#wargaTable tr'
            );


        let total = 0;

        let laki = 0;

        let perempuan = 0;


        rows.forEach(
            function(row) {

                if (
                    row.querySelector(
                        '.empty-row'
                    )
                ) {
                    return;
                }


                total++;


                const gender =
                    row.cells[3]
                        ?.textContent
                        .toLowerCase()
                        .trim();


                if (
                    gender.includes('laki')
                    ||
                    gender === 'l'
                ) {

                    laki++;

                }


                if (
                    gender.includes('perempuan')
                    ||
                    gender === 'p'
                ) {

                    perempuan++;

                }

            }
        );


        document.getElementById(
            'totalWarga'
        ).textContent = total;


        document.getElementById(
            'totalLaki'
        ).textContent = laki;


        document.getElementById(
            'totalPerempuan'
        ).textContent = perempuan;

    }


    updateStatistics();


    /* =====================================================
       DETAIL DATA WARGA
    ===================================================== */

    function setDetail(id, value) {
        document.getElementById(id).textContent = value || '-';
    }

    function openDetail(button) {
        setDetail('detailNama', button.dataset.nama);
        setDetail('detailNik', 'NIK: ' + (button.dataset.nik || '-'));
        setDetail('detailNoKk', button.dataset.noKk);
        setDetail('detailGender', button.dataset.gender);
        setDetail('detailTempatLahir', button.dataset.tempatLahir);
        setDetail('detailTanggalLahir', button.dataset.tanggalLahir);
        setDetail('detailAgama', button.dataset.agama);
        setDetail('detailPekerjaan', button.dataset.pekerjaan);
        setDetail('detailStatus', button.dataset.statusPerkawinan);
        setDetail('detailHp', button.dataset.noHp);
        setDetail('detailEmail', button.dataset.email);
        setDetail('detailRtRw', (button.dataset.rt || '-') + ' / ' + (button.dataset.rw || '-'));
        setDetail('detailAlamat', button.dataset.alamat);

        // =========================
        // FOTO WARGA
        // =========================
        const foto = document.getElementById('detailFoto');
        const avatarText = document.getElementById('detailAvatarText');

        const rawPhoto = (button.dataset.photo || '').trim();
        const wargaId = (button.dataset.id || '').trim();

        const candidates = [];

        if (rawPhoto) {
            if (/^https?:\/\//i.test(rawPhoto)) {
                candidates.push(rawPhoto);
            } else if (rawPhoto.startsWith('storage/')) {
                candidates.push("{{ url('/') }}/" + rawPhoto);
            } else if (rawPhoto.startsWith('/storage/')) {
                candidates.push("{{ url('/') }}" + rawPhoto);
            } else if (rawPhoto.startsWith('images/')) {
                candidates.push("{{ url('/') }}/" + rawPhoto);
            } else if (rawPhoto.startsWith('/images/')) {
                candidates.push("{{ url('/') }}" + rawPhoto);
            } else {
                candidates.push("{{ url('/') }}/storage/" + rawPhoto);
                candidates.push("{{ url('/') }}/" + rawPhoto);
            }
        }

        // Fallback kalau foto disimpan di public/images/profile/warga_ID.ext
        if (wargaId) {
            candidates.push(
                "{{ url('/') }}/images/profile/warga_" + wargaId + ".jpg",
                "{{ url('/') }}/images/profile/warga_" + wargaId + ".jpeg",
                "{{ url('/') }}/images/profile/warga_" + wargaId + ".png"
            );
        }

        foto.style.display = 'none';
        avatarText.style.display = 'flex';

        let index = 0;

        function tryNextFoto() {
            if (index >= candidates.length) {
                return;
            }

            const url = candidates[index++];

            foto.onload = function() {
                foto.style.display = 'block';
                avatarText.style.display = 'none';
            };

            foto.onerror = function() {
                foto.style.display = 'none';
                avatarText.style.display = 'flex';
                tryNextFoto();
            };

            foto.src = url;
        }

        if (candidates.length > 0) {
            tryNextFoto();
        }

        document.getElementById('detailModal').classList.add('show');
        document.body.style.overflow = 'hidden';
    }

    function closeDetail(event) {
        if (event && event.target !== event.currentTarget) return;
        document.getElementById('detailModal').classList.remove('show');
        document.body.style.overflow = '';
    }

    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            closeDetail();
        }
    });

</script>


</body>

</html>
