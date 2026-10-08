<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Perihal - Sekretaris Desa
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
        ====================================================== */

        .layout {
            display: flex;
            min-height: 100vh;
        }


        /* =====================================================
           SIDEBAR
        ====================================================== */

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
        ====================================================== */

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
        ====================================================== */

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
           PERIHAL CONTENT
        ====================================================== */

        .perihal-grid {
            display: grid;

            grid-template-columns:
                repeat(2, minmax(0, 1fr));

            gap: 18px;

            margin-top: 6px;
        }


        .perihal-card {
            background: #ffffff;

            border: 1px solid #e3eaf1;

            border-radius: 14px;

            padding: 24px;

            min-height: 155px;

            text-decoration: none;

            display: flex;

            align-items: center;

            gap: 18px;

            position: relative;

            box-shadow:
                0 4px 12px rgba(23,63,103,0.05);

            transition:
                transform 0.2s,
                box-shadow 0.2s,
                border-color 0.2s;
        }


        .perihal-card:hover {
            transform: translateY(-2px);

            border-color: #b9d9c8;

            box-shadow:
                0 8px 20px rgba(23,63,103,0.09);
        }


        .perihal-icon {
            width: 54px;

            height: 54px;

            border-radius: 12px;

            background: #edf8f2;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 25px;

            flex-shrink: 0;
        }


        .perihal-info {
            flex: 1;
        }


        .perihal-info h2 {
            color: #173f67;

            font-size: 17px;

            margin-bottom: 7px;
        }


        .perihal-info p {
            color: #6b829a;

            font-size: 13px;

            line-height: 1.6;
        }


        .perihal-arrow {
            color: #08733a;

            font-size: 21px;

            font-weight: 700;

            flex-shrink: 0;
        }


        /* =====================================================
           MAIN
        ====================================================== */

        .main {
            margin-left: 255px;

            width:
                calc(100% - 255px);
        }


        /* =====================================================
           TOPBAR
        ====================================================== */

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
        ====================================================== */

        .profile-dropdown {
            position: relative;
        }


        .profile-dropdown summary {
            list-style: none;

            cursor: pointer;
        }


        .profile-dropdown
        summary::-webkit-details-marker {
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


        .profile-dropdown[open]
        .profile-arrow {
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
        ====================================================== */

        .content {
            padding: 35px;
        }


        /* =====================================================
           PAGE HEADING
        ====================================================== */

        .heading {
            display: flex;

            align-items: flex-start;

            justify-content: space-between;

            margin-bottom: 25px;
        }


        .heading-left h1 {
            font-size: 27px;

            color: #17456f;

            margin-bottom: 7px;
        }


        .heading-left p {
            font-size: 14px;

            color: #6b7f94;
        }


        /* =====================================================
           TOTAL BADGE
        ====================================================== */

        .total-badge {
            background: #edf5fb;

            color: #17456f;

            padding: 8px 14px;

            border-radius: 20px;

            font-size: 12px;

            font-weight: 700;

            white-space: nowrap;
        }


        /* =====================================================
           CARD
        ====================================================== */

        .card {
            background: #ffffff;

            border:
                1px solid #e5e7eb;

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
        ====================================================== */

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

            white-space: nowrap;
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


        tbody tr:hover {
            background: #fafcfd;
        }


        /* =====================================================
           NAMA WARGA
        ====================================================== */

        .warga-name {
            font-weight: 700;

            color: #173f67;
        }


        .warga-email {
            display: block;

            margin-top: 4px;

            font-size: 12px;

            color: #8a9aac;
        }


        /* =====================================================
           STATUS
        ====================================================== */

        .status {
            display: inline-block;

            padding: 6px 10px;

            border-radius: 20px;

            font-size: 11px;

            font-weight: 700;
        }


        .status-aktif {
            background: #dcf8e8;

            color: #17824d;
        }


        /* =====================================================
           EMPTY
        ====================================================== */

        .empty {
            text-align: center;

            padding: 35px 20px;

            color: #7b8da1;

            font-size: 13px;
        }


        .empty-icon {
            font-size: 30px;

            margin-bottom: 10px;
        }


        .empty strong {
            display: block;

            margin-bottom: 5px;

            color: #40566d;
        }


        /* =====================================================
           RESPONSIVE
        ====================================================== */

        @media (max-width: 1000px) {

            .heading {
                gap: 15px;
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


            .heading {
                flex-direction: column;
            }


            .perihal-grid {
                grid-template-columns: 1fr;
            }

        }

    </style>

</head>


<body>

<div class="layout">


    <!-- =====================================================
         SIDEBAR SEKDES
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
                        perihal
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


        <!-- TOPBAR -->

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



        <!-- =====================================================
             CONTENT
        ====================================================== -->

        <section class="content">


            <!-- HEADING -->

            <div class="heading">


                <div class="heading-left">

                    <h1>
                        Perihal Desa
                    </h1>

                    <p>
                        Informasi mengenai profil dan identitas Desa Sukamerindu.
                    </p>

                </div>


                <div class="total-badge">

                    4 Menu

                </div>

            </div>



            <!-- =================================================
                 PERIHAL
            ================================================== -->

            <div class="perihal-grid">


                <a
                    href="{{ url('/sekdes/profil-desa') }}"
                    class="perihal-card"
                >

                    <div class="perihal-icon">
                        🏛️
                    </div>

                    <div class="perihal-info">

                        <h2>
                            Profil Desa
                        </h2>

                        <p>
                            Kelola informasi profil dan identitas Desa Sukamerindu.
                        </p>

                    </div>

                    <span class="perihal-arrow">
                        →
                    </span>

                </a>



                <a
                    href="{{ url('/sekdes/visi-misi') }}"
                    class="perihal-card"
                >

                    <div class="perihal-icon">
                        🎯
                    </div>

                    <div class="perihal-info">

                        <h2>
                            Visi &amp; Misi
                        </h2>

                        <p>
                            Kelola visi dan misi yang menjadi arah pembangunan desa.
                        </p>

                    </div>

                    <span class="perihal-arrow">
                        →
                    </span>

                </a>



                <a
                    href="{{ url('/sekdes/perangkat-desa') }}"
                    class="perihal-card"
                >

                    <div class="perihal-icon">
                        👥
                    </div>

                    <div class="perihal-info">

                        <h2>
                            Perangkat Desa
                        </h2>

                        <p>
                            Kelola informasi perangkat dan struktur pemerintahan desa.
                        </p>

                    </div>

                    <span class="perihal-arrow">
                        →
                    </span>

                </a>



                <a
                    href="{{ url('/sekdes/kontak-desa') }}"
                    class="perihal-card"
                >

                    <div class="perihal-icon">
                        📞
                    </div>

                    <div class="perihal-info">

                        <h2>
                            Kontak Desa
                        </h2>

                        <p>
                            Kelola alamat, nomor telepon, email, dan kontak desa.
                        </p>

                    </div>

                    <span class="perihal-arrow">
                        →
                    </span>

                </a>


            </div>


        </section>


    </main>

</div>

</body>

</html>
