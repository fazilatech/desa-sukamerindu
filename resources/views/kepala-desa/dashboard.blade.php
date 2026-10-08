<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Dashboard Kepala Desa</title>


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
        }



        /* =====================================================
           SIDEBAR
        ===================================================== */

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 300px;
            height: 100vh;

            background: #096b35;
            color: white;

            padding: 36px 16px 24px;

            display: flex;
            flex-direction: column;

            overflow-y: auto;
            overflow-x: hidden;
            z-index: 1000;

            scrollbar-width: thin;
        }

        .sidebar::-webkit-scrollbar {
            width: 5px;
        }

        .sidebar::-webkit-scrollbar-track {
            background: transparent;
        }

        .sidebar::-webkit-scrollbar-thumb {
            background: rgba(255,255,255,.25);
            border-radius: 10px;
        }


        .brand {
            text-align: center;

            padding-bottom: 30px;

            border-bottom:
                1px solid rgba(255,255,255,.25);
        }


        .logo {
            width: 105px;
            height: 105px;

            object-fit: contain;

            background: white;

            border-radius: 8px;

            padding: 8px;

            display: block;

            margin: 0 auto 20px;
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

            color: rgba(255,255,255,.9);
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

            padding: 14px 20px;

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
                1px solid rgba(255,255,255,.55);
        }


        .nav-icon {
            width: 22px;

            text-align: center;

            font-size: 17px;
        }



        /* =====================================================
           NAV DROPDOWN
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
            border: none;
            border-radius: 9px;
            color: white;
            background: transparent;
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
            transition: transform .2s;
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

        .nav-dropdown-menu a:hover {
            background: rgba(255,255,255,.10);
        }


        /* =====================================================
           MAIN
        ===================================================== */

        .main {
            min-width: 0;
            margin-left: 300px;
            min-height: 100vh;
        }



        /* =====================================================
           TOPBAR
        ===================================================== */

        .topbar {
            position: sticky;
            top: 0;
            z-index: 900;

            height: 84px;

            background: white;

            border-bottom:
                1px solid #e5e7eb;

            display: flex;

            align-items: center;

            justify-content: space-between;

            padding: 0 38px;
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

            padding: 6px 10px;

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

            top: calc(100% + 10px);

            right: 0;

            width: 180px;

            background: white;

            border:
                1px solid #e5e7eb;

            border-radius: 12px;

            box-shadow:
                0 10px 30px rgba(15, 23, 42, .12);

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

            padding: 11px 12px;

            border-radius: 8px;

            text-align: left;

            font-family: inherit;

            font-size: 14px;

            font-weight: 600;

            cursor: pointer;

            transition: .2s;
        }


        .dropdown-logout:hover {
            background: #fef2f2;
        }



        /* =====================================================
           CONTENT
        ===================================================== */

        .content {
            padding: 48px 38px;
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
            margin: 8px 0 0;

            color: #66809d;

            font-size: 15px;
        }



        /* =====================================================
           WELCOME CARD
        ===================================================== */

        .welcome-card {
            background: white;

            border:
                1px solid #e5e7eb;

            border-radius: 16px;

            padding: 30px;

            margin-bottom: 24px;

            box-shadow:
                0 4px 15px rgba(15, 23, 42, .04);
        }


        .welcome-title {
            margin: 0 0 8px;

            color: #087238;

            font-size: 21px;

            font-weight: 800;
        }


        .welcome-text {
            margin: 0;

            color: #66809d;

            font-size: 15px;
        }



        /* =====================================================
           QUICK ACCESS
        ===================================================== */

        .quick-links {
            display: grid;

            grid-template-columns: repeat(2, minmax(0, 1fr));

            gap: 18px;

            margin-bottom: 24px;
        }


        .quick-card {
            display: flex;

            align-items: center;

            gap: 18px;

            background: white;

            border: 1px solid #e5e7eb;

            border-radius: 16px;

            padding: 22px 25px;

            box-shadow: 0 4px 15px rgba(15, 23, 42, .04);

            transition: .2s;
        }


        .quick-card:hover {
            transform: translateY(-2px);

            box-shadow: 0 8px 22px rgba(15, 23, 42, .08);
        }


        .quick-icon {
            width: 52px;

            height: 52px;

            border-radius: 13px;

            background: #dcfce7;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 22px;

            flex-shrink: 0;
        }


        .quick-content {
            flex: 1;
        }


        .quick-content h3 {
            margin: 0 0 5px;

            color: #087238;

            font-size: 18px;

            font-weight: 800;
        }


        .quick-content p {
            margin: 0;

            color: #66809d;

            font-size: 14px;
        }


        .quick-arrow {
            font-size: 24px;

            font-weight: 700;

            color: #087238;
        }



        /* =====================================================
           STAT CARDS
        ===================================================== */

        .stats {
            display: grid;

            grid-template-columns:
                repeat(3, minmax(0, 1fr));

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
                0 4px 15px rgba(15, 23, 42, .04);
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
                0 4px 15px rgba(15, 23, 42, .04);
        }


        .table-title {
            margin: 0 0 20px;

            color: #10233f;

            font-size: 20px;

            font-weight: 800;
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

            padding: 14px 12px;

            border-bottom:
                1px solid #e5e7eb;

            color: #526b85;

            font-size: 13px;

            font-weight: 700;
        }


        td {
            padding: 16px 12px;

            border-bottom:
                1px solid #f0f2f5;

            color: #526b85;

            font-size: 14px;
        }


        tr:last-child td {
            border-bottom: none;
        }


        .status {
            display: inline-block;

            padding: 6px 12px;

            border-radius: 999px;

            background: #fef3c7;

            color: #92400e;

            font-size: 12px;

            font-weight: 700;
        }


        .status.done {
            background: #dcfce7;

            color: #166534;
        }


        .status.cancelled {
            background: #fee2e2;

            color: #991b1b;
        }


        .empty-row {
            text-align: center;

            color: #94a3b8;

            padding: 30px 12px;
        }



        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 900px) {

            .sidebar {
                width: 240px;
            }

            .main {
                margin-left: 240px;
            }


            .topbar {
                padding: 0 25px;
            }


            .content {
                padding: 35px 25px;
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
                height: auto;

                padding: 20px;
            }


            .content {
                padding: 25px 20px;
            }


            .profile-role {
                display: none;
            }


            .quick-links {
                grid-template-columns: 1fr;
            }

            .quick-card {
                padding: 18px;
            }

        }

    </style>

</head>


<body>


<div class="page">


    <!-- =====================================================
         SIDEBAR
    ====================================================== -->

    <aside class="sidebar">

        <div>

            <!-- BRAND -->

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



            <!-- NAVIGATION -->

            <nav class="nav">

                <!-- DASHBOARD -->
                <a
                    href="{{ route('kepala-desa.dashboard') }}"
                    class="nav-item active"
                >
                    <span class="nav-icon">
                        🏠
                    </span>
                    <span>
                        Dashboard
                    </span>
                </a>

                <!-- PENGAJUAN SURAT -->
                <a
                    href="{{ route('kepala-desa.pengajuan') }}"
                    class="nav-item"
                >
                    <span class="nav-icon">
                        📄
                    </span>
                    <span>
                        Pengajuan Surat
                    </span>
                </a>

                <!-- DATA WARGA DROPDOWN -->
                <div class="nav-dropdown {{ request()->routeIs('kepala-desa.data-warga*', 'kepala-desa.data-keluarga*', 'kepala-desa.data-kelahiran*', 'kepala-desa.data-kematian*', 'kepala-desa.data-perpindahan*') ? 'open' : '' }}">
                    <button
                        type="button"
                        class="nav-dropdown-toggle {{ request()->routeIs('kepala-desa.data-warga*', 'kepala-desa.data-keluarga*', 'kepala-desa.data-kelahiran*', 'kepala-desa.data-kematian*', 'kepala-desa.data-perpindahan*') ? 'active' : '' }}"
                        onclick="toggleNavDropdown(this)"
                    >
                        <span class="nav-icon">
                            👥
                        </span>

                        <span>
                            Data Warga
                        </span>

                        <span class="nav-dropdown-arrow">
                            ▼
                        </span>
                    </button>

                    <div class="nav-dropdown-menu">

                        <a
                            href="{{ route('kepala-desa.data-warga') }}"
                            class="{{ request()->routeIs('kepala-desa.data-warga*') ? 'active' : '' }}"
                        >
                            Data Warga
                        </a>

                        <a
                            href="{{ route('kepala-desa.data-keluarga') }}"
                            class="{{ request()->routeIs('kepala-desa.data-keluarga*') ? 'active' : '' }}"
                        >
                            Data Keluarga
                        </a>

                        <a
                            href="{{ route('kepala-desa.data-kelahiran') }}"
                            class="{{ request()->routeIs('kepala-desa.data-kelahiran*') ? 'active' : '' }}"
                        >
                            Data Kelahiran
                        </a>

                        <a
                            href="{{ route('kepala-desa.data-kematian') }}"
                            class="{{ request()->routeIs('kepala-desa.data-kematian*') ? 'active' : '' }}"
                        >
                            Data Kematian
                        </a>

                        <a
                            href="{{ route('kepala-desa.data-perpindahan') }}"
                            class="{{ request()->routeIs('kepala-desa.data-perpindahan*') ? 'active' : '' }}"
                        >
                            Data Perpindahan
                        </a>

                    </div>
                </div>

                <!-- PENGUMUMAN DROPDOWN -->
                <div class="nav-dropdown">
                    <button
                        type="button"
                        class="nav-dropdown-toggle"
                        onclick="toggleNavDropdown(this)"
                    >
                        <span class="nav-icon">
                            📢
                        </span>
                        <span>
                            Pengumuman
                        </span>
                        <span class="nav-dropdown-arrow">
                            ▼
                        </span>
                    </button>

                    <div class="nav-dropdown-menu">
                        <a href="{{ route('kepala-desa.informasi') }}">
                            Informasi
                        </a>
                        <a href="{{ route('kepala-desa.agenda') }}">
                            Agenda
                        </a>
                    </div>
                </div>

                <!-- PERIHAL DROPDOWN -->
                <div class="nav-dropdown">
                    <button
                        type="button"
                        class="nav-dropdown-toggle"
                        onclick="toggleNavDropdown(this)"
                    >
                        <span class="nav-icon">
                            📋
                        </span>
                        <span>
                            Perihal
                        </span>
                        <span class="nav-dropdown-arrow">
                            ▼
                        </span>
                    </button>

                    <div class="nav-dropdown-menu">
                        <a href="{{ route('kepala-desa.perihal.profil-desa') }}">
                            Profil Desa
                        </a>
                        <a href="{{ route('kepala-desa.perihal.visi-misi') }}">
                            Visi &amp; Misi
                        </a>
                        <a href="{{ route('home') . '#perangkat-desa' }}">
                            Struktur Pemerintahan
                        </a>
                    </div>
                </div>

            </nav>

        </div>

    </aside>



    <!-- =====================================================
         MAIN
    ====================================================== -->

    <main class="main">


        <!-- =================================================
             TOPBAR
        ================================================== -->

        <header class="topbar">


            <h2 class="topbar-title">
                Dashboard Kepala Desa
            </h2>



            <div class="profile-area">


                <!-- PROFILE -->

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
                            {{ strtoupper(substr(auth()->user()->name, 0, 2)) }}
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



                <!-- DROPDOWN -->

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



        <!-- =================================================
             CONTENT
        ================================================== -->

        <section class="content">


            <!-- PAGE HEADING -->

            <div class="page-heading">

                <h1>
                    Dashboard Kepala Desa
                </h1>

                <p>
                    Selamat datang di Sistem Informasi Desa Sukamerindu.
                </p>

            </div>



            <!-- =================================================
                 WELCOME
            ================================================== -->

            <div class="welcome-card">

                <h3 class="welcome-title">

                    Selamat Datang,
                    {{ auth()->user()->name }}

                </h3>


                <p class="welcome-text">

                    Anda masuk sebagai Kepala Desa.
                    Kelola dan pantau pelayanan administrasi
                    desa melalui dashboard ini.

                </p>

            </div>



            <!-- =================================================
                 MENU UTAMA DASHBOARD
            ================================================== -->

            <div class="quick-links">

                <a
                    href="{{ route('kepala-desa.pengajuan') }}"
                    class="quick-card"
                >
                    <div class="quick-icon">📄</div>
                    <div class="quick-content">
                        <h3>Pengajuan Surat</h3>
                        <p>Lihat dan kelola pengajuan surat dari warga desa.</p>
                    </div>
                    <div class="quick-arrow">→</div>
                </a>

                <a
                    href="{{ route('kepala-desa.data-warga') }}"
                    class="quick-card"
                >
                    <div class="quick-icon">👥</div>
                    <div class="quick-content">
                        <h3>Data Warga</h3>
                        <p>Lihat dan pantau data kependudukan warga desa.</p>
                    </div>
                    <div class="quick-arrow">→</div>
                </a>

                <a
                    href="{{ route('kepala-desa.informasi') }}"
                    class="quick-card"
                >
                    <div class="quick-icon">📢</div>
                    <div class="quick-content">
                        <h3>Informasi</h3>
                        <p>Lihat informasi dan pengumuman terbaru desa.</p>
                    </div>
                    <div class="quick-arrow">→</div>
                </a>

                <a
                    href="{{ route('kepala-desa.agenda') }}"
                    class="quick-card"
                >
                    <div class="quick-icon">📅</div>
                    <div class="quick-content">
                        <h3>Agenda</h3>
                        <p>Lihat agenda dan kegiatan Desa Sukamerindu.</p>
                    </div>
                    <div class="quick-arrow">→</div>
                </a>

            </div>



            <!-- =================================================
                 STATISTICS
            ================================================== -->

            <div class="stats">


                <!-- TOTAL -->

                <div class="stat-card">

                    <div class="stat-icon">
                        📄
                    </div>


                    <h3
                        class="stat-number"
                        id="totalPengajuan"
                    >
                        0
                    </h3>


                    <div class="stat-label">
                        Total Pengajuan Surat
                    </div>

                </div>



                <!-- DIPROSES -->

                <div class="stat-card">

                    <div class="stat-icon">
                        ⏳
                    </div>


                    <h3
                        class="stat-number"
                        id="pengajuanDiproses"
                    >
                        0
                    </h3>


                    <div class="stat-label">
                        Pengajuan Diproses
                    </div>

                </div>



                <!-- SELESAI -->

                <div class="stat-card">

                    <div class="stat-icon">
                        ✅
                    </div>


                    <h3
                        class="stat-number"
                        id="pengajuanSelesai"
                    >
                        0
                    </h3>


                    <div class="stat-label">
                        Pengajuan Selesai
                    </div>

                </div>


            </div>



            <!-- =================================================
                 RECENT APPLICATIONS
            ================================================== -->

            <div class="table-card">


                <h3 class="table-title">
                    Pengajuan Surat Terbaru
                </h3>


                <div class="table-wrapper">


                    <table>


                        <thead>

                            <tr>

                                <th>
                                    Nama Warga
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

                            </tr>

                        </thead>



                        <tbody id="pengajuanTerbaru">

                            <tr>

                                <td
                                    colspan="4"
                                    class="empty-row"
                                >
                                    Memuat data...
                                </td>

                            </tr>

                        </tbody>


                    </table>

                </div>


            </div>


        </section>


    </main>


</div>



<script>


    /* =====================================================
       PROFILE DROPDOWN
    ===================================================== */

    function toggleProfileDropdown() {

        const dropdown =
            document.getElementById('profileDropdown');

        dropdown.classList.toggle('show');

    }



    /* =====================================================
       NAV DROPDOWN
    ===================================================== */

    function toggleNavDropdown(button) {
        const dropdown = button.closest('.nav-dropdown');

        if (dropdown) {
            dropdown.classList.toggle('open');
        }
    }



    /* =====================================================
       CLOSE DROPDOWN
    ===================================================== */

    document.addEventListener(
        'click',
        function(event) {

            const profileArea =
                document.querySelector('.profile-area');

            const dropdown =
                document.getElementById('profileDropdown');


            if (
                profileArea &&
                !profileArea.contains(event.target)
            ) {

                dropdown.classList.remove('show');

            }

        }
    );



    /* =====================================================
       FORMAT JENIS SURAT
    ===================================================== */

    function formatJenisSurat(jenis) {

        const jenisSurat = {

            pengantar:
                'Surat Pengantar',

            domisili:
                'Surat Keterangan Domisili',

            usaha:
                'Surat Keterangan Usaha'

        };


        return jenisSurat[jenis]
            ?? jenis;

    }



    /* =====================================================
       FORMAT TANGGAL
    ===================================================== */

    function formatTanggal(tanggal) {

        if (!tanggal) {
            return '-';
        }


        const date =
            new Date(
                tanggal.replace(' ', 'T')
            );


        if (isNaN(date.getTime())) {
            return tanggal;
        }


        const bulan = [

            'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'

        ];


        return (

            date.getDate()
            + ' '
            + bulan[date.getMonth()]
            + ' '
            + date.getFullYear()

        );

    }



    /* =====================================================
       FORMAT STATUS
    ===================================================== */

    function formatStatus(status) {

        if (!status) {
            return 'Diproses';
        }


        return status;

    }



    /* =====================================================
       STATUS CLASS
    ===================================================== */

    function statusClass(status) {

        const value =
            String(status || '')
                .toLowerCase();


        if (
            value === 'selesai'
            || value === 'completed'
        ) {

            return 'status done';

        }


        if (
            value === 'ditolak'
            || value === 'dibatalkan'
            || value === 'cancelled'
        ) {

            return 'status cancelled';

        }


        return 'status';

    }



    /* =====================================================
       LOAD DASHBOARD DATA
    ===================================================== */

    async function loadDashboardData() {

        try {

            const response =
                await fetch(
                    "{{ route('kepala-desa.dashboard.data') }}",
                    {
                        method: 'GET',

                        headers: {
                            'Accept':
                                'application/json',

                            'X-Requested-With':
                                'XMLHttpRequest'
                        },

                        cache: 'no-store'
                    }
                );


            if (!response.ok) {

                throw new Error(
                    'Gagal mengambil data dashboard.'
                );

            }


            const data =
                await response.json();



            /* =================================================
               UPDATE STATISTICS
            ================================================== */

            document.getElementById(
                'totalPengajuan'
            ).textContent =
                data.totalPengajuan ?? 0;


            document.getElementById(
                'pengajuanDiproses'
            ).textContent =
                data.pengajuanDiproses ?? 0;


            document.getElementById(
                'pengajuanSelesai'
            ).textContent =
                data.pengajuanSelesai ?? 0;



            /* =================================================
               UPDATE TABLE
            ================================================== */

            const tbody =
                document.getElementById(
                    'pengajuanTerbaru'
                );


            tbody.innerHTML = '';



            if (
                !data.pengajuanTerbaru
                || data.pengajuanTerbaru.length === 0
            ) {

                tbody.innerHTML = `

                    <tr>

                        <td
                            colspan="4"
                            class="empty-row"
                        >
                            Belum ada pengajuan surat.
                        </td>

                    </tr>

                `;

                return;

            }



            data.pengajuanTerbaru.forEach(
                function(item) {

                    const row =
                        document.createElement('tr');


                    const nama =
                        item.nama_warga
                        ?? 'Warga';


                    const jenis =
                        formatJenisSurat(
                            item.jenis_surat
                        );


                    const tanggal =
                        formatTanggal(
                            item.diajukan_pada
                        );


                    const status =
                        formatStatus(
                            item.status
                        );


                    const classStatus =
                        statusClass(
                            item.status
                        );


                    row.innerHTML = `

                        <td>
                            ${escapeHtml(nama)}
                        </td>

                        <td>
                            ${escapeHtml(jenis)}
                        </td>

                        <td>
                            ${escapeHtml(tanggal)}
                        </td>

                        <td>

                            <span
                                class="${classStatus}"
                            >
                                ${escapeHtml(status)}
                            </span>

                        </td>

                    `;


                    tbody.appendChild(row);

                }
            );


        } catch (error) {

            console.error(
                'Dashboard error:',
                error
            );

        }

    }



    /* =====================================================
       ESCAPE HTML
    ===================================================== */

    function escapeHtml(value) {

        const div =
            document.createElement('div');


        div.textContent =
            value ?? '';


        return div.innerHTML;

    }



    /* =====================================================
       LOAD PERTAMA KALI
    ===================================================== */

    loadDashboardData();



    /* =====================================================
       REALTIME POLLING
       UPDATE SETIAP 3 DETIK
    ===================================================== */

    setInterval(
        loadDashboardData,
        3000
    );


</script>




</body>

</html>
