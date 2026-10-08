{{-- =========================================================
     NAVIGATION
     resources/views/layouts/navigation.blade.php
     
     SATU NAVIGATION UNTUK:
     - GUEST
     - KEPALA DESA
     - SEKDES
     - WARGA
========================================================= --}}

<nav class="navbar">

    {{-- =====================================================
         BRAND / LOGO
    ====================================================== --}}

    <a
        href="{{ auth()->check()
            ? (auth()->user()->role === 'kepala_desa'
                ? route('kepala-desa.dashboard')
                : (auth()->user()->role === 'sekdes'
                    ? route('sekdes.dashboard')
                    : route('dashboard')))
            : route('home') }}"
        class="navbar-brand"
    >

        <img
            src="https://cdn.phototourl.com/free/2026-08-19-ada8088c-135b-4f75-94c5-ef27a75114f8.png"
            alt="Logo Desa Sukamerindu"
            class="navbar-logo"
        >

        <div class="brand-text">

            <strong>
                DESA SUKAMERINDU
            </strong>

            <span>
                Sistem Informasi Desa
            </span>

        </div>

    </a>


    {{-- =====================================================
         MENU TENGAH
    ====================================================== --}}

    <div class="navbar-menu">


        {{-- =================================================
             GUEST / BELUM LOGIN
        ================================================== --}}

        @guest

            {{-- DASHBOARD --}}

            <a
                href="{{ route('home') }}"
                class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
            >

                <span class="nav-icon">
                    🏠
                </span>

                <span>
                    Dashboard
                </span>

            </a>


            {{-- INFORMASI --}}

            <a
                href="{{ route('guest.informasi') }}"
                class="nav-link {{ request()->routeIs('guest.informasi*') ? 'active' : '' }}"
            >

                <span class="nav-icon">
                    📢
                </span>

                <span>
                    Informasi
                </span>

            </a>


            {{-- AGENDA --}}

            <a
                href="{{ route('guest.agenda') }}"
                class="nav-link {{ request()->routeIs('guest.agenda*') ? 'active' : '' }}"
            >

                <span class="nav-icon">
                    📅
                </span>

                <span>
                    Agenda
                </span>

            </a>


            {{-- TRANSPARANSI --}}

            <a
                href="{{ route('guest.transparansi') }}"
                class="nav-link {{ request()->routeIs('guest.transparansi*') ? 'active' : '' }}"
            >

                <span class="nav-icon">
                    💰
                </span>

                <span>
                    Transparansi
                </span>

            </a>


            {{-- PENGADUAN --}}

            <a
                href="{{ url('/pengaduan') }}"
                class="nav-link {{ request()->is('pengaduan*') ? 'active' : '' }}"
            >

                <span class="nav-icon">
                    📣
                </span>

                <span>
                    Pengaduan
                </span>

            </a>


            {{-- PERIHAL --}}

            <div class="nav-dropdown">

                <button
                    type="button"
                    class="nav-link nav-dropdown-button"
                    onclick="togglePerihal(event)"
                >

                    <span class="nav-icon">
                        ℹ️
                    </span>

                    <span>
                        Perihal
                    </span>

                    <span class="dropdown-arrow">
                        ▼
                    </span>

                </button>


                <div
                    class="nav-dropdown-menu"
                    id="perihalMenu"
                >

                    <a
                        href="{{ route('guest.profil-desa') }}"
                    >

                        🏛️

                        <span>
                            Profil Desa
                        </span>

                    </a>


                    <a
                        href="{{ route('home') }}#visi-misi"
                    >

                        🎯

                        <span>
                            Visi &amp; Misi
                        </span>

                    </a>


                    <a
                        href="{{ route('home') }}#perangkat-desa"
                    >

                        👥

                        <span>
                            Perangkat Desa
                        </span>

                    </a>


                    <a
                        href="{{ route('home') }}#kontak-desa"
                    >

                        📞

                        <span>
                            Kontak Desa
                        </span>

                    </a>

                </div>

            </div>

        @endguest



        {{-- =================================================
             USER LOGIN
        ================================================== --}}

        @auth


            {{-- =================================================
                 KEPALA DESA
            ================================================== --}}

            @if(auth()->user()->role === 'kepala_desa')


                {{-- DASHBOARD --}}

                <a
                    href="{{ route('kepala-desa.dashboard') }}"
                    class="nav-link
                        {{ request()->routeIs('kepala-desa.dashboard') ? 'active' : '' }}"
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
                    class="nav-link
                        {{ request()->routeIs('kepala-desa.pengajuan*') ? 'active' : '' }}"
                >

                    <span class="nav-icon">
                        📄
                    </span>

                    <span>
                        Pengajuan Surat
                    </span>

                </a>


                {{-- INFORMASI --}}

                <a
                    href="{{ route('kepala-desa.informasi') }}"
                    class="nav-link
                        {{ request()->routeIs('kepala-desa.informasi*') ? 'active' : '' }}"
                >

                    <span class="nav-icon">
                        📢
                    </span>

                    <span>
                        Informasi
                    </span>

                </a>


            {{-- =================================================
                 SEKRETARIS DESA
            ================================================== --}}

            @elseif(auth()->user()->role === 'sekdes')


                {{-- DASHBOARD --}}

                <a
                    href="{{ route('sekdes.dashboard') }}"
                    class="nav-link
                        {{ request()->routeIs('sekdes.dashboard') ? 'active' : '' }}"
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
                    href="{{ url('/sekdes/pengajuan-surat') }}"
                    class="nav-link
                        {{ request()->is('sekdes/pengajuan-surat*') ? 'active' : '' }}"
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
                    href="{{ url('/sekdes/data-warga') }}"
                    class="nav-link
                        {{ request()->is('sekdes/data-warga*') ? 'active' : '' }}"
                >

                    <span class="nav-icon">
                        👥
                    </span>

                    <span>
                        Data Warga
                    </span>

                </a>


                {{-- INFORMASI --}}

                <a
                    href="{{ url('/sekdes/informasi') }}"
                    class="nav-link
                        {{ request()->is('sekdes/informasi*') ? 'active' : '' }}"
                >

                    <span class="nav-icon">
                        📢
                    </span>

                    <span>
                        Informasi
                    </span>

                </a>


                {{-- AGENDA SEKDES --}}

                <a
                    href="{{ route('sekdes.agenda') }}"
                    class="nav-link
                        {{ request()->routeIs('sekdes.agenda*') ? 'active' : '' }}"
                >

                    <span class="nav-icon">
                        📅
                    </span>

                    <span>
                        Agenda
                    </span>

                </a>


                {{-- TRANSPARANSI --}}

                <a
                    href="{{ route('sekdes.transparansi') }}"
                    class="nav-link
                        {{ request()->routeIs('sekdes.transparansi*') ? 'active' : '' }}"
                >

                    <span class="nav-icon">
                        💰
                    </span>

                    <span>
                        Transparansi
                    </span>

                </a>


                {{-- PERIHAL --}}

                <div class="nav-dropdown">

                    <button
                        type="button"
                        class="nav-link nav-dropdown-button"
                        onclick="togglePerihal(event)"
                    >

                        <span class="nav-icon">
                            ℹ️
                        </span>

                        <span>
                            Perihal
                        </span>

                        <span class="dropdown-arrow">
                            ▼
                        </span>

                    </button>


                    <div
                        class="nav-dropdown-menu"
                        id="perihalMenu"
                    >

                        <a
                            href="{{ route('guest.profil-desa') }}"
                        >

                            🏛️

                            <span>
                                Profil Desa
                            </span>

                        </a>


                        <a
                            href="{{ route('home') }}#visi-misi"
                        >

                            🎯

                            <span>
                                Visi &amp; Misi
                            </span>

                        </a>


                        <a
                            href="{{ route('home') }}#perangkat-desa"
                        >

                            👥

                            <span>
                                Perangkat Desa
                            </span>

                        </a>


                        <a
                            href="{{ route('home') }}#kontak-desa"
                        >

                            📞

                            <span>
                                Kontak Desa
                            </span>

                        </a>

                    </div>

                </div>


            {{-- =================================================
                 WARGA
            ================================================== --}}

            @else


                {{-- DASHBOARD --}}

                <a
                    href="{{ route('dashboard') }}"
                    class="nav-link
                        {{ request()->routeIs('dashboard') ? 'active' : '' }}"
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
                    href="{{ route('warga.pengajuan') }}"
                    class="nav-link
                        {{ request()->routeIs('warga.pengajuan*') ? 'active' : '' }}"
                >

                    <span class="nav-icon">
                        📄
                    </span>

                    <span>
                        Pengajuan Surat
                    </span>

                </a>


                {{-- INFORMASI --}}

                <a
                    href="{{ route('warga.informasi') }}"
                    class="nav-link
                        {{ request()->routeIs('warga.informasi*') ? 'active' : '' }}"
                >

                    <span class="nav-icon">
                        📢
                    </span>

                    <span>
                        Informasi
                    </span>

                </a>


                {{-- AGENDA --}}

                <a
                    href="{{ route('warga.agenda') }}"
                    class="nav-link
                        {{ request()->routeIs('warga.agenda*') ? 'active' : '' }}"
                >

                    <span class="nav-icon">
                        📅
                    </span>

                    <span>
                        Agenda
                    </span>

                </a>


                {{-- TRANSPARANSI --}}

                <a
                    href="{{ url('/transparansi') }}"
                    class="nav-link
                        {{ request()->is('transparansi') ? 'active' : '' }}"
                >

                    <span class="nav-icon">
                        💰
                    </span>

                    <span>
                        Transparansi
                    </span>

                </a>


                {{-- PENGADUAN --}}

                <a
                    href="{{ url('/pengaduan') }}"
                    class="nav-link {{ request()->is('pengaduan*') ? 'active' : '' }}"
                >

                    <span class="nav-icon">
                        📣
                    </span>

                    <span>
                        Pengaduan
                    </span>

                </a>


                {{-- PERIHAL --}}

                <div class="nav-dropdown">

                    <button
                        type="button"
                        class="nav-link nav-dropdown-button"
                        onclick="togglePerihal(event)"
                    >

                        <span class="nav-icon">
                            ℹ️
                        </span>

                        <span>
                            Perihal
                        </span>

                        <span class="dropdown-arrow">
                            ▼
                        </span>

                    </button>


                    <div
                        class="nav-dropdown-menu"
                        id="perihalMenu"
                    >

                        <a
                            href="{{ route('guest.profil-desa') }}"
                        >

                            🏛️

                            <span>
                                Profil Desa
                            </span>

                        </a>


                        <a
                            href="{{ route('home') }}#visi-misi"
                        >

                            🎯

                            <span>
                                Visi &amp; Misi
                            </span>

                        </a>


                        <a
                            href="{{ route('home') }}#perangkat-desa"
                        >

                            👥

                            <span>
                                Perangkat Desa
                            </span>

                        </a>


                        <a
                            href="{{ route('home') }}#kontak-desa"
                        >

                            📞

                            <span>
                                Kontak Desa
                            </span>

                        </a>

                    </div>

                </div>


            @endif

        @endauth

    </div>



    {{-- =====================================================
         BAGIAN KANAN
         USER LOGIN
    ====================================================== --}}

    @auth

        <div class="nav-dropdown user-dropdown">


            {{-- USER BUTTON --}}

            <button
                type="button"
                class="navbar-user nav-dropdown-button"
                onclick="toggleUserMenu(event)"
            >

                {{-- AVATAR --}}

                <div class="user-avatar">

                    @if(auth()->user()->profile_photo)

                        <img
                            src="{{ str_starts_with(auth()->user()->profile_photo, 'images/')
                                ? asset(auth()->user()->profile_photo)
                                : asset('storage/' . auth()->user()->profile_photo) }}"
                            alt="Foto {{ auth()->user()->name }}"
                        >

                    @else

                        {{ strtoupper(
                            substr(auth()->user()->name, 0, 2)
                        ) }}

                    @endif

                </div>


                {{-- NAMA --}}

                <div class="user-info">

                    <strong>
                        {{ auth()->user()->name }}
                    </strong>


                    <span>

                        @if(auth()->user()->role === 'kepala_desa')

                            Kepala Desa

                        @elseif(auth()->user()->role === 'sekdes')

                            Sekretaris Desa

                        @else

                            Warga

                        @endif

                    </span>

                </div>


                {{-- PANAH --}}

                <span class="user-arrow">
                    ▼
                </span>

            </button>



            {{-- =================================================
                 DROPDOWN USER
            ================================================== --}}

            <div
                class="nav-dropdown-menu user-dropdown-menu"
                id="userMenu"
            >

                {{-- PROFIL WARGA --}}
                @if(auth()->user()->role !== 'kepala_desa' && auth()->user()->role !== 'sekdes')

                    <a
                        href="{{ route('warga.profil') }}"
                    >

                        👤

                        <span>
                            Profil Warga
                        </span>

                    </a>

                @endif


                <form
                    method="POST"
                    action="{{ route('logout') }}"
                >

                    @csrf

                    <button
                        type="submit"
                        class="logout-button"
                    >

                        🚪

                        <span>
                            Keluar
                        </span>

                    </button>

                </form>

            </div>

        </div>

    @endauth



    {{-- =====================================================
         GUEST / TOMBOL MASUK
    ====================================================== --}}

    @guest

        <div class="navbar-guest">

            <a
                href="{{ route('login') }}"
                class="login-button"
            >

                🔐

                <span>
                    Masuk
                </span>

            </a>

        </div>

    @endguest

</nav>



{{-- =========================================================
     CSS NAVBAR
========================================================= --}}

<style>

    /* =====================================================
       RESET KHUSUS NAVBAR
    ====================================================== */

    .navbar,
    .navbar * {
        box-sizing: border-box;
    }



    /* =====================================================
       NAVBAR UTAMA
    ====================================================== */

    .navbar {

        width: 100% !important;

        height: 84px;

        position: relative !important;

        display: block !important;

        background: #ffffff;

        border-bottom: 1px solid #e5e7eb;

        z-index: 1000;

    }



    /* =====================================================
       BRAND / LOGO
    ====================================================== */

    .navbar-brand {

        position: absolute !important;

        left: 42px !important;

        right: auto !important;

        top: 50% !important;

        transform: translateY(-50%) !important;

        margin: 0 !important;

        display: flex;

        align-items: center;

        gap: 11px;

        text-decoration: none;

        z-index: 10;

    }


    .navbar-logo {

        width: 52px;

        height: 52px;

        object-fit: contain;

        flex-shrink: 0;

    }


    .brand-text {

        display: flex;

        flex-direction: column;

        align-items: flex-start;

        justify-content: center;

        gap: 3px;

        margin: 0;

        padding: 0;

        line-height: 1.2;

        text-align: left;

    }


    .brand-text strong {

        display: block;

        margin: 0;

        padding: 0;

        color: #08783f;

        font-size: 18px;

        font-weight: 800;

        line-height: 1.15;

        letter-spacing: .2px;

        white-space: nowrap;

    }


    .brand-text span {

        display: block;

        margin: 0;

        padding: 0;

        color: #718096;

        font-size: 13px;

        line-height: 1.2;

        white-space: nowrap;

    }



    /* =====================================================
       MENU UTAMA
    ====================================================== */

    .navbar-menu {

        position: absolute !important;

        left: 50% !important;

        right: auto !important;

        top: 50% !important;

        bottom: auto !important;

        transform: translate(-50%, -50%) !important;

        margin: 0 !important;

        padding: 0 !important;

        width: max-content !important;

        max-width: none !important;

        display: flex !important;

        flex-direction: row !important;

        align-items: center !important;

        justify-content: center !important;

        gap: 6px !important;

        white-space: nowrap;

        z-index: 5;

    }



    /* =====================================================
       LINK MENU
    ====================================================== */

    .nav-link {

        display: inline-flex !important;

        align-items: center;

        justify-content: center;

        gap: 8px;

        min-height: 42px;

        padding: 10px 15px;

        margin: 0 !important;

        border: none;

        border-radius: 10px;

        background: transparent;

        color: #102a43;

        text-decoration: none;

        font-family: inherit;

        font-size: 14px;

        font-weight: 600;

        white-space: nowrap;

        cursor: pointer;

        transition: all .2s ease;

    }


    .nav-link:hover {

        background: #f0fdf4;

        color: #08783f;

    }


    .nav-link.active {

        background: #dcfce7;

        color: #08783f;

        /* Bobot tetap sama dengan menu lain agar tidak tampak lebih tebal */
        font-weight: 600;

    }


    .nav-icon {

        display: inline-flex;

        align-items: center;

        justify-content: center;

        font-size: 15px;

        line-height: 1;

    }



    /* =====================================================
       DROPDOWN
    ====================================================== */

    .nav-dropdown {

        position: relative;

        flex-shrink: 0;

        margin: 0;

        padding: 0;

    }


    .nav-dropdown-button {

        font-family: inherit;

    }


    .dropdown-arrow {

        font-size: 9px;

        margin-left: 2px;

    }


    .nav-dropdown-menu {

        display: none;

        position: absolute;

        top: calc(100% + 8px);

        left: 50%;

        transform: translateX(-50%);

        min-width: 210px;

        padding: 7px;

        background: #ffffff;

        border: 1px solid #e5e7eb;

        border-radius: 11px;

        box-shadow:
            0 15px 35px rgba(0, 0, 0, .12);

        z-index: 2000;

    }


    .nav-dropdown-menu.show {

        display: block;

    }


    .nav-dropdown-menu a {

        display: flex;

        align-items: center;

        gap: 9px;

        width: 100%;

        padding: 10px 12px;

        border-radius: 8px;

        color: #374151;

        text-decoration: none;

        font-size: 13px;

        font-weight: 600;

        white-space: nowrap;

        transition: all .2s ease;

    }


    .nav-dropdown-menu a:hover {

        background: #f0fdf4;

        color: #08783f;

    }



    /* =====================================================
       USER KANAN
    ====================================================== */

    .navbar-user {

        position: absolute !important;

        right: 42px !important;

        left: auto !important;

        top: 50% !important;

        transform: translateY(-50%) !important;

        margin: 0 !important;

        display: flex;

        align-items: center;

        gap: 9px;

        z-index: 10;

    }


    .user-avatar {

        width: 43px;

        height: 43px;

        border-radius: 50%;

        background: #dcfce7;

        color: #08783f;

        display: flex;

        align-items: center;

        justify-content: center;

        overflow: hidden;

        font-size: 13px;

        font-weight: 800;

        flex-shrink: 0;

    }


    .user-avatar img {

        width: 100%;

        height: 100%;

        object-fit: cover;

        display: block;

    }


    .user-info {

        display: flex;

        flex-direction: column;

        justify-content: center;

        line-height: 1.2;

    }


    .user-info strong {

        color: #111827;

        font-size: 14px;

        font-weight: 700;

        white-space: nowrap;

    }


    .user-info span {

        color: #718096;

        font-size: 12px;

        margin-top: 3px;

        white-space: nowrap;

    }


    .user-arrow {

        color: #64748b;

        font-size: 9px;

        margin-left: 2px;

    }



    /* =====================================================
       USER DROPDOWN
    ====================================================== */

    .user-dropdown {

        position: absolute !important;

        right: 42px !important;

        top: 50% !important;

        transform: translateY(-50%) !important;

        margin: 0 !important;

        padding: 0 !important;

        display: flex !important;

        align-items: center !important;

        z-index: 20;

    }


    .user-dropdown .navbar-user {

        position: static !important;

        right: auto !important;

        left: auto !important;

        top: auto !important;

        transform: none !important;

        margin: 0 !important;

        border: none;

        background: transparent;

        font-family: inherit;

        cursor: pointer;

    }


    .user-dropdown-menu {

        left: auto !important;

        right: 0 !important;

        min-width: 170px;

    }


    .user-dropdown-menu.show {

        display: block;

    }



    /* =====================================================
       LOGOUT
    ====================================================== */

    .logout-button {

        width: 100%;

        border: none;

        background: transparent;

        text-align: left;

        padding: 10px 12px;

        border-radius: 8px;

        color: #dc2626;

        font-family: inherit;

        font-size: 13px;

        font-weight: 600;

        cursor: pointer;

    }


    .logout-button:hover {

        background: #fef2f2;

    }



    /* =====================================================
       GUEST / LOGIN
    ====================================================== */

    .navbar-guest {

        position: absolute !important;

        right: 42px !important;

        left: auto !important;

        top: 50% !important;

        transform: translateY(-50%) !important;

        margin: 0 !important;

        z-index: 10;

    }


    .login-button {

        display: inline-flex;

        align-items: center;

        justify-content: center;

        gap: 7px;

        min-height: 42px;

        padding: 10px 18px;

        border-radius: 9px;

        background: #08783f;

        color: #ffffff;

        text-decoration: none;

        font-size: 14px;

        font-weight: 700;

        white-space: nowrap;

        transition: all .2s ease;

    }


    .login-button:hover {

        background: #056331;

        color: #ffffff;

    }



    /* =====================================================
       TABLET
    ====================================================== */

    @media (max-width: 1200px) {

        .navbar-brand {

            left: 25px !important;

        }


        .user-dropdown,
        .navbar-user,
        .navbar-guest {

            right: 25px !important;

        }


        .brand-text strong {

            font-size: 16px;

        }


        .nav-link {

            padding-left: 11px;

            padding-right: 11px;

            font-size: 13px;

        }

    }



    /* =====================================================
       LAYAR LEBIH KECIL
    ====================================================== */

    @media (max-width: 950px) {

        .navbar {

            height: 78px;

        }


        .navbar-logo {

            width: 46px;

            height: 46px;

        }


        .brand-text strong {

            font-size: 15px;

        }


        .brand-text span {

            font-size: 11px;

        }


        .navbar-menu {

            gap: 2px !important;

        }


        .nav-link {

            padding-left: 8px;

            padding-right: 8px;

            font-size: 13px;

        }

    }



    /* =====================================================
       MOBILE
    ====================================================== */

    @media (max-width: 750px) {

        .navbar {

            height: auto;

            min-height: 75px;

            padding: 10px 15px;

        }


        .navbar-brand {

            position: static !important;

            transform: none !important;

        }


        .navbar-menu {

            position: static !important;

            transform: none !important;

            width: 100% !important;

            max-width: 100% !important;

            overflow-x: auto;

            justify-content: center !important;

            padding: 6px 0 !important;

        }


        .navbar-user {

            position: static !important;

            transform: none !important;

            margin-left: auto !important;

        }


        .user-dropdown {

            position: static !important;

            transform: none !important;

            margin-left: auto !important;

        }


        .navbar-guest {

            position: static !important;

            transform: none !important;

            margin-left: auto !important;

        }

    }

</style>



{{-- =========================================================
     JAVASCRIPT
========================================================= --}}

<script>

    function togglePerihal(event) {

        event.stopPropagation();

        const menu =
            document.getElementById('perihalMenu');

        if (!menu) {

            return;

        }

        menu.classList.toggle('show');

    }



    function toggleUserMenu(event) {

        event.stopPropagation();

        const menu =
            document.getElementById('userMenu');

        if (!menu) {

            return;

        }

        menu.classList.toggle('show');

    }



    document.addEventListener(
        'click',
        function(event) {

            const perihalDropdown =
                document.querySelector(
                    '.nav-dropdown:not(.user-dropdown)'
                );

            const perihalMenu =
                document.getElementById('perihalMenu');


            if (
                perihalDropdown &&
                perihalMenu &&
                !perihalDropdown.contains(event.target)
            ) {

                perihalMenu.classList.remove('show');

            }



            const userDropdown =
                document.querySelector('.user-dropdown');

            const userMenu =
                document.getElementById('userMenu');


            if (
                userDropdown &&
                userMenu &&
                !userDropdown.contains(event.target)
            ) {

                userMenu.classList.remove('show');

            }

        }
    );

</script>
