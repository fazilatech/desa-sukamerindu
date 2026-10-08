<nav class="navbar">

    {{-- =====================================================
         BRAND
    ====================================================== --}}

    <a
        href="{{ route('dashboard') }}"
        class="navbar-brand"
    >

        <img
            src="https://cdn.phototourl.com/free/2026-08-19-ada8088c-135b-4f75-94c5-ef27a75114f8.png"
            alt="Logo Desa"
        >

        <div>

            <strong>
                DESA SUKAMERINDU
            </strong>

            <small>
                Sistem Informasi Desa
            </small>

        </div>

    </a>


    {{-- =====================================================
         MENU
    ====================================================== --}}

    <div class="navbar-menu">


        {{-- =================================================
             BELUM LOGIN
        ================================================== --}}

        @guest

            {{-- DASHBOARD --}}
            <a
                href="{{ route('dashboard') }}"
                class="nav-link"
            >

                <span class="nav-icon">
                    🏠
                </span>

                <span>
                    Dashboard
                </span>

            </a>


            {{-- LOGIN / REGISTER --}}
            @if(request()->routeIs('register'))

                {{-- LOGIN DI HALAMAN REGISTER --}}
                <a
                    href="{{ route('login') }}"
                    class="nav-link {{ request()->routeIs('login') ? 'active' : '' }}"
                >

                    <span class="nav-icon">
                        🔐
                    </span>

                    <span>
                        Login
                    </span>

                </a>

            @else

                {{-- REGISTER DI HALAMAN LOGIN --}}
                <a
                    href="{{ route('register') }}"
                    class="nav-link {{ request()->routeIs('register') ? 'active' : '' }}"
                >

                    <span class="nav-icon">
                        👤
                    </span>

                    <span>
                        Register
                    </span>

                </a>

            @endif

        @endguest



        {{-- =================================================
             SUDAH LOGIN
        ================================================== --}}

        @auth


            {{-- =================================================
                 WARGA
            ================================================== --}}

            @if(auth()->user()->role !== 'kepala_desa')


                {{-- DASHBOARD WARGA --}}
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
                        {{ request()->routeIs('warga.pengajuan') ? 'active' : '' }}"
                >

                    <span class="nav-icon">
                        📄
                    </span>

                    <span>
                        Pengajuan Surat
                    </span>

                </a>


                {{-- PROFIL --}}
                <a
                    href="{{ route('warga.profil') }}"
                    class="nav-link
                        {{ request()->routeIs('warga.profil') ? 'active' : '' }}"
                >

                    <span class="nav-icon">
                        👤
                    </span>

                    <span>
                        Profil
                    </span>

                </a>


            @endif



            {{-- =================================================
                 KEPALA DESA
            ================================================== --}}

            @if(auth()->user()->role === 'kepala_desa')


                {{-- DASHBOARD KEPALA DESA --}}
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


                {{-- PENGAJUAN SURAT KEPALA DESA --}}
                <a
                    href="{{ route('kepala-desa.pengajuan') }}"
                    class="nav-link
                        {{ request()->routeIs('kepala-desa.pengajuan') ? 'active' : '' }}"
                >

                    <span class="nav-icon">
                        📄
                    </span>

                    <span>
                        Pengajuan Surat
                    </span>

                </a>


            @endif



            {{-- =================================================
                 PEMBATAS
            ================================================== --}}

            <div class="nav-divider"></div>



            {{-- =================================================
                 USER PROFILE
            ================================================== --}}

            <div class="user-profile">

                <div class="user-avatar">

                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}

                </div>


                <div class="user-info">

                    <strong>
                        {{ auth()->user()->name }}
                    </strong>

                    <small>

                        {{ ucfirst(
                            str_replace(
                                '_',
                                ' ',
                                auth()->user()->role
                            )
                        ) }}

                    </small>

                </div>

            </div>



            {{-- =================================================
                 LOGOUT
            ================================================== --}}

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

                    <span>
                        🚪
                    </span>

                    <span>
                        Keluar
                    </span>

                </button>

            </form>


        @endauth


    </div>

</nav>



<style>

/* =========================================================
   NAVBAR
========================================================= */

.navbar {

    width: 100%;

    min-height: 76px;

    background: #ffffff;

    border-bottom:
        1px solid #e5e7eb;

    display: flex;

    align-items: center;

    justify-content: space-between;

    padding: 12px 45px;

    box-shadow:
        0 3px 15px
        rgba(0, 0, 0, .05);

}



/* =========================================================
   BRAND
========================================================= */

.navbar-brand {

    display: flex;

    align-items: center;

    gap: 12px;

    text-decoration: none;

    color: #111827;

}


.navbar-brand img {

    width: 52px;

    height: 52px;

    min-width: 52px;

    object-fit: contain;

}


.navbar-brand > div {

    display: flex;

    flex-direction: column;

    justify-content: center;

}


.navbar-brand strong {

    display: block;

    font-size: 16px;

    font-weight: 700;

    letter-spacing: 2px;

    line-height: 1.2;

}


.navbar-brand small {

    display: block;

    margin-top: 4px;

    font-size: 12px;

    color: #6b7280;

    line-height: 1.2;

}



/* =========================================================
   MENU
========================================================= */

.navbar-menu {

    display: flex;

    align-items: center;

    gap: 16px;

}



/* =========================================================
   NAV LINK
========================================================= */

.nav-link {

    display: flex;

    align-items: center;

    gap: 6px;

    padding: 10px 0;

    border-radius: 0;

    color: #374151;

    text-decoration: none;

    font-size: 14px;

    font-weight: 600;

    position: relative;

    transition: .3s;

}



/* =========================================================
   ICON
========================================================= */

.nav-icon {

    font-size: 15px;

    line-height: 1;

}



/* =========================================================
   HOVER
========================================================= */

.nav-link:hover {

    background: transparent;

    color: #000000;

}



/* =========================================================
   ACTIVE
========================================================= */

.nav-link.active {

    background: transparent;

    color: #111827;

}



/* =========================================================
   GARIS BAWAH
========================================================= */

.nav-link::after {

    content: '';

    position: absolute;

    left: 0;

    bottom: -5px;

    width: 0;

    height: 2px;

    background: #111827;

    transition: .3s;

}


.nav-link:hover::after,

.nav-link.active::after {

    width: 100%;

}



/* =========================================================
   DIVIDER
========================================================= */

.nav-divider {

    width: 1px;

    height: 38px;

    background: #e5e7eb;

    margin: 0 10px;

}



/* =========================================================
   USER PROFILE
========================================================= */

.user-profile {

    display: flex;

    align-items: center;

    gap: 10px;

    padding: 0 4px;

}


.user-avatar {

    width: 38px;

    height: 38px;

    min-width: 38px;

    border-radius: 50%;

    background: #dcfce7;

    color: #166534;

    display: flex;

    align-items: center;

    justify-content: center;

    font-size: 14px;

    font-weight: 700;

}


.user-info {

    display: flex;

    flex-direction: column;

    justify-content: center;

    min-width: 75px;

}


.user-info strong {

    color: #111827;

    font-size: 13px;

    font-weight: 700;

    line-height: 1.3;

}


.user-info small {

    color: #6b7280;

    font-size: 11px;

    line-height: 1.3;

}



/* =========================================================
   LOGOUT
========================================================= */

.logout-form {

    margin: 0;

}


.logout-button {

    border: none;

    background: #fee2e2;

    color: #b91c1c;

    padding: 9px 14px;

    border-radius: 8px;

    font-size: 13px;

    font-weight: 600;

    cursor: pointer;

    transition: .2s;

}


.logout-button:hover {

    background: #fecaca;

}



/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 900px) {

    .navbar {

        padding:
            12px 20px;

    }


    .nav-link span {

        display: none;

    }


    .user-info {

        display: none;

    }

}



@media (max-width: 600px) {

    .navbar-brand small {

        display: none;

    }


    .navbar-brand strong {

        font-size: 14px;

        letter-spacing: 1px;

    }


    .navbar-brand img {

        width: 44px;

        height: 44px;

        min-width: 44px;

    }


    .navbar-menu {

        gap: 10px;

    }


    .nav-link {

        padding: 8px;

    }


    .nav-divider {

        margin: 0 4px;

    }


    .logout-button span:last-child {

        display: none;

    }

}

</style>
