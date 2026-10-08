<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        @yield('title', 'Dashboard Kepala Desa')
    </title>


    <style>

        /* =====================================================
           RESET
        ===================================================== */

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

        .kepala-layout {
            min-height: 100vh;
            display: block;
        }



        /* =====================================================
           SIDEBAR KEPALA DESA
        ===================================================== */

        .sidebar {
            width: 300px;

            min-width: 300px;
            height: 100vh;

            background: #096b35;

            color: white;

            padding:
                36px
                16px
                24px;

            display: flex;

            flex-direction: column;

            flex-shrink: 0;

            position: fixed !important;
            top: 0 !important;
            left: 0 !important;

            height: 100vh !important;
            overflow-y: auto;
            overflow-x: hidden;

            z-index: 10000 !important;
        }



        /* =====================================================
           BRAND
        ===================================================== */

        .sidebar-logo {
            text-align: center;

            padding-bottom: 30px;

            border-bottom:
                1px solid
                rgba(255,255,255,.25);
        }


        .sidebar-logo img {
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


        .sidebar-logo h2 {
            margin: 0;

            font-size: 22px;

            font-weight: 800;

            letter-spacing: .5px;
        }


        .sidebar-logo p {
            margin:
                8px
                0
                0;

            font-size: 15px;

            color:
                rgba(255,255,255,.9);
        }



        /* =====================================================
           NAVIGATION
        ===================================================== */

        .sidebar-menu {
            margin-top: 28px;
        }


        .sidebar-menu a {
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


        .sidebar-menu a:hover {
            background:
                rgba(255,255,255,.10);
        }


        .sidebar-menu a.active {
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
           PERIHAL DROPDOWN
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

        .main-wrapper {
            flex: 1;

            min-width: 0;

            margin-left: 300px !important;
            min-height: 100vh;
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

            position: fixed !important;
            top: 0 !important;
            right: 0 !important;
            left: 300px !important;

            width: auto !important;

            z-index: 9999 !important;
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
        }


        .profile {
            display: flex;

            align-items: center;

            gap: 12px;

            cursor: pointer;

            padding: 6px 10px;

            border-radius: 10px;

            transition: .2s;
        }


        .profile:hover {
            background: #f3f4f6;
        }


        .profile-avatar {
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

        .profile-avatar img {
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
            display: none;

            position: absolute;

            top: calc(100% + 8px);

            right: 0;

            width: 160px;

            background: white;

            border:
                1px solid #e5e7eb;

            border-radius: 9px;

            box-shadow:
                0 8px 24px
                rgba(0,0,0,.12);

            padding: 6px;

            z-index: 1000;
        }


        .profile-dropdown.show {
            display: block;
        }


        .profile-dropdown-link {
            display: block;
            width: 100%;
            padding: 11px 12px;
            border-radius: 7px;
            color: #10233f;
            font-size: 14px;
            font-weight: 600;
            transition: .2s;
        }


        .profile-dropdown-link:hover {
            background: #f3f4f6;
        }


        .logout-form {
            margin: 0;
        }


        .logout-button {
            width: 100%;

            border: none;

            background: transparent;

            padding:
                11px
                12px;

            text-align: left;

            border-radius: 7px;

            color: #dc2626;

            font-family: inherit;

            font-size: 14px;

            font-weight: 600;

            cursor: pointer;

            transition: .2s;
        }


        .logout-button:hover {
            background: #fef2f2;
        }



        /* =====================================================
           CONTENT
        ===================================================== */

        .content {
            padding: 35px;

            margin-top: 84px !important;

            min-height: calc(100vh - 84px);

            overflow-y: visible;
        }



        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 900px) {

            .sidebar {
                width: 240px;

                min-width: 240px;
            }


            .topbar {
                padding:
                    0
                    25px;
            }


            .content {
                padding:
                    30px
                    25px;
            }

        }



        @media (max-width: 650px) {

            .kepala-layout {
                display: block;
            }


            .sidebar {
                width: 100%;

                min-width: 100%;

                min-height: auto;
            }


            .topbar {
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

        }

    </style>

    @stack('styles')

</head>


<body>


<div class="kepala-layout">


    {{-- =====================================================
         SIDEBAR KEPALA DESA
    ====================================================== --}}

    <aside class="sidebar">


        {{-- BRAND --}}

        <div class="sidebar-logo">

            <img
                src="https://cdn.phototourl.com/free/2026-08-19-ada8088c-135b-4f75-94c5-ef27a75114f8.png"
                alt="Logo Desa"
            >


            <h2>
                DESA SUKAMERINDU
            </h2>


            <p>
                Sistem Informasi Desa
            </p>

        </div>



        {{-- NAVIGATION --}}

        <nav class="sidebar-menu">


            {{-- DASHBOARD --}}

            <a
                href="{{ route('kepala-desa.dashboard') }}"
                class="{{ request()->routeIs('kepala-desa.dashboard') ? 'active' : '' }}"
            >

                <span class="nav-icon">
                    🏠
                </span>

                <span>
                    Dashboard
                </span>

            </a>



            {{-- PENGAJUAN SURAT --}}

            <a
                href="{{ route('kepala-desa.pengajuan') }}"
                class="{{ request()->routeIs('kepala-desa.pengajuan*') ? 'active' : '' }}"
            >

                <span class="nav-icon">
                    📄
                </span>

                <span>
                    Pengajuan Surat
                </span>

            </a>



            {{-- DATA WARGA --}}

            <a
                href="{{ route('kepala-desa.data-warga') }}"
                class="{{ request()->routeIs('kepala-desa.data-warga*') ? 'active' : '' }}"
            >

                <span class="nav-icon">
                    👥
                </span>

                <span>
                    Data Warga
                </span>

            </a>



            {{-- PENGUMUMAN DROPDOWN --}}

            <div class="nav-dropdown {{ request()->routeIs('kepala-desa.informasi*', 'kepala-desa.agenda*') ? 'open' : '' }}">

                <button
                    type="button"
                    class="nav-dropdown-toggle {{ request()->routeIs('kepala-desa.informasi*', 'kepala-desa.agenda*') ? 'active' : '' }}"
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

                    <a
                        href="{{ route('kepala-desa.informasi') }}"
                        class="{{ request()->routeIs('kepala-desa.informasi*') ? 'active' : '' }}"
                    >
                        Informasi
                    </a>

                    <a
                        href="{{ route('kepala-desa.agenda') }}"
                        class="{{ request()->routeIs('kepala-desa.agenda*') ? 'active' : '' }}"
                    >
                        Agenda
                    </a>

                </div>

            </div>


            {{-- PERIHAL DROPDOWN --}}

            <div class="nav-dropdown {{ request()->routeIs('kepala-desa.perihal*') ? 'open' : '' }}">

                <button
                    type="button"
                    class="nav-dropdown-toggle {{ request()->routeIs('kepala-desa.perihal*') ? 'active' : '' }}"
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

                    <a href="{{ route('kepala-desa.perihal.profil-desa') }}"
                        class="{{ request()->routeIs('kepala-desa.perihal.profil-desa') ? 'active' : '' }}">
                        Profil Desa
                    </a>

                    <a href="{{ route('kepala-desa.perihal.visi-misi') }}"
                        class="{{ request()->routeIs('kepala-desa.perihal.visi-misi') ? 'active' : '' }}">
                        Visi &amp; Misi
                    </a>

                    <a href="{{ route('kepala-desa.perihal.struktur') }}"
                        class="{{ request()->routeIs('kepala-desa.perihal.struktur') ? 'active' : '' }}">
                        Struktur Pemerintahan
                    </a>

                </div>

            </div>


        </nav>


    </aside>



    {{-- =====================================================
         MAIN
    ====================================================== --}}

    <div class="main-wrapper">


        {{-- TOPBAR --}}

        <header class="topbar">


            <div class="topbar-title">

                @yield(
                    'topbar-title',
                    'Dashboard Kepala Desa'
                )

            </div>



            {{-- =================================================
                 PROFILE BELLA
            ================================================== --}}

            <div class="profile-area">


                <div
                    class="profile"
                    onclick="toggleProfileDropdown()"
                >


                    <div class="profile-avatar">

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



                {{-- =================================================
                     DROPDOWN
                ================================================== --}}

                <div
                    id="profileDropdown"
                    class="profile-dropdown"
                >

                    <a
                        href="{{ route('kepala-desa.profil') }}"
                        class="profile-dropdown-link"
                    >
                        👤 Profil
                    </a>


                    <form
                        method="POST"
                        action="{{ route('logout') }}"
                        class="logout-form"
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


            </div>


        </header>



        {{-- =================================================
             PAGE CONTENT
        ================================================== --}}

        <main class="content">

            @yield('content')

        </main>


    </div>


</div>



{{-- =========================================================
     PROFILE DROPDOWN SCRIPT
========================================================= --}}

<script>

    function toggleNavDropdown(button) {

        const dropdown = button.closest('.nav-dropdown');

        if (dropdown) {
            dropdown.classList.toggle('open');
        }

    }



    function toggleProfileDropdown() {

        const dropdown =
            document.getElementById('profileDropdown');

        if (dropdown) {

            dropdown.classList.toggle('show');

        }

    }


    document.addEventListener(
        'click',
        function(event) {

            const profileArea =
                document.querySelector('.profile-area');

            const dropdown =
                document.getElementById('profileDropdown');


            if (
                profileArea &&
                dropdown &&
                !profileArea.contains(event.target)
            ) {

                dropdown.classList.remove('show');

            }

        }
    );

</script>


@stack('scripts')


</body>

</html>
