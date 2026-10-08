<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Informasi - Kepala Desa</title>


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

        .page {
            min-height: 100vh;

            display: flex;
        }



        /* =====================================================
           SIDEBAR
           SAMA DENGAN PENGAJUAN SURAT
        ===================================================== */

        .sidebar {
            width: 300px;

            min-height: 100vh;

            background: #096b35;

            color: white;

            padding:
                36px
                16px
                24px;

            display: flex;

            flex-direction: column;

            flex-shrink: 0;
        }



        /* =====================================================
           BRAND
        ===================================================== */

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
        }



        /* =====================================================
           TOPBAR
           SAMA DENGAN PENGAJUAN SURAT
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

            transition: .2s;
        }


        .dropdown-logout:hover {
            background: #fef2f2;
        }



        /* =====================================================
           CONTENT
        ===================================================== */

        .content {
            padding:
                48px
                38px;
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
           HEADER INFORMASI
        ===================================================== */

        .announcement-header {
            background: white;

            border:
                1px solid #e5e7eb;

            border-radius: 16px;

            padding: 25px 28px;

            display: flex;

            align-items: center;

            justify-content: space-between;

            margin-bottom: 24px;

            box-shadow:
                0 4px 15px
                rgba(15,23,42,.04);
        }


        .announcement-header h2 {
            margin: 0;

            color: #10233f;

            font-size: 20px;

            font-weight: 800;
        }


        .announcement-header p {
            margin:
                7px
                0
                0;

            color: #718096;

            font-size: 14px;
        }


        .btn-add {
            display: inline-block;

            background: #087238;

            color: white;

            padding:
                11px
                17px;

            border-radius: 8px;

            text-decoration: none;

            font-size: 14px;

            font-weight: 700;

            transition: .2s;
        }


        .btn-add:hover {
            background: #065c2e;
        }



        /* =====================================================
           ALERT
        ===================================================== */

        .alert-success {
            margin-bottom: 20px;

            background: #dcfce7;

            color: #166534;

            border:
                1px solid #bbf7d0;

            padding:
                14px
                18px;

            border-radius: 8px;

            font-size: 14px;

            font-weight: 600;
        }



        /* =====================================================
           LIST INFROMASI
        ===================================================== */

        .announcement-list {
            display: grid;

            grid-template-columns:
                repeat(
                    2,
                    minmax(0, 1fr)
                );

            gap: 20px;
        }


        .announcement-card {
            background: white;

            border:
                1px solid #e5e7eb;

            border-radius: 16px;

            padding: 25px;

            box-shadow:
                0 4px 15px
                rgba(15,23,42,.04);
        }


        .card-top {
            display: flex;

            justify-content: space-between;

            align-items: center;

            gap: 10px;
        }


        .category {
            font-size: 12px;

            font-weight: 700;

            color: #087238;

            background: #dcfce7;

            padding:
                6px
                10px;

            border-radius: 20px;
        }


        .status {
            font-size: 12px;

            font-weight: 700;

            padding:
                6px
                10px;

            border-radius: 20px;
        }


        .status.publikasi {
            color: #166534;

            background: #dcfce7;
        }


        .status.draft {
            color: #92400e;

            background: #fef3c7;
        }


        .announcement-card h3 {
            margin:
                18px
                0
                0;

            font-size: 20px;

            color: #10233f;

            font-weight: 800;
        }


        .announcement-content {
            margin-top: 12px;

            color: #667085;

            line-height: 1.7;

            font-size: 14px;

            white-space: pre-line;
        }


        .announcement-date {
            margin-top: 18px;

            font-size: 12px;

            color: #94a3b8;
        }


        .card-actions {
            margin-top: 20px;

            padding-top: 15px;

            border-top:
                1px solid #edf0f3;

            display: flex;

            justify-content: flex-end;
        }


        .btn-edit {
            display: inline-block;
            text-decoration: none;
            background: #e0f2fe;
            color: #0369a1;
            padding: 8px 13px;
            border-radius: 7px;
            font-size: 13px;
            font-weight: 600;
            transition: .2s;
        }

        .btn-edit:hover {
            background: #bae6fd;
        }

        .comment-section {
            margin-top: 20px;
            padding-top: 18px;
            border-top: 1px solid #edf0f3;
        }

        .comment-title {
            color: #10233f;
            font-size: 14px;
            font-weight: 800;
            margin-bottom: 12px;
        }

        .comment-list {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-bottom: 14px;
        }

        .comment-item {
            background: #f8fafc;
            border: 1px solid #edf0f4;
            border-radius: 10px;
            padding: 11px 13px;
        }

        .comment-head {
            display: flex;
            justify-content: space-between;
            gap: 10px;
            margin-bottom: 5px;
        }

        .comment-name {
            color: #0f2f52;
            font-size: 13px;
            font-weight: 700;
        }

        .comment-date {
            color: #9aa8b8;
            font-size: 11px;
        }

        .comment-text {
            color: #64748b;
            font-size: 13px;
            line-height: 1.6;
            white-space: pre-line;
        }

        .comment-empty {
            color: #8a9ab0;
            font-size: 13px;
            margin-bottom: 12px;
        }

        .comment-form {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .comment-input {
            width: 100%;
            min-height: 85px;
            resize: vertical;
            box-sizing: border-box;
            border: 1px solid #dbe3ea;
            border-radius: 9px;
            padding: 10px 12px;
            font-family: inherit;
            font-size: 13px;
            outline: none;
        }

        .comment-input:focus {
            border-color: #087238;
        }

        .comment-button {
            align-self: flex-end;
            border: none;
            background: #087238;
            color: white;
            padding: 8px 13px;
            border-radius: 7px;
            font-family: inherit;
            font-size: 13px;
            font-weight: 600;
            cursor: pointer;
        }

        .comment-button:hover {
            background: #065c2e;
        }

        .action-buttons {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .btn-delete {
            border: none;

            background: #fee2e2;

            color: #b91c1c;

            padding:
                8px
                13px;

            border-radius: 7px;

            cursor: pointer;

            font-family: inherit;

            font-size: 13px;

            font-weight: 600;

            transition: .2s;
        }


        .btn-delete:hover {
            background: #fecaca;
        }




        /* =====================================================
           SEARCH & FILTER
        ===================================================== */

        .filter-bar {
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 16px;
            padding: 18px 20px;
            margin-bottom: 24px;
            box-shadow: 0 4px 15px rgba(15,23,42,.04);
        }

        .filter-row {
            display: grid;
            grid-template-columns: minmax(0, 1fr) 150px;
            gap: 12px;
            align-items: center;
        }

        .search-wrapper {
            position: relative;
        }

        .search-box {
            width: 100%;
            height: 44px;
            border: 1px solid #dbe3ea;
            border-radius: 9px;
            background: white;
            color: #10233f;
            font-family: inherit;
            font-size: 14px;
            outline: none;
            padding: 0 14px 0 42px;
        }

        .search-box:focus {
            border-color: #087238;
            box-shadow: 0 0 0 3px rgba(8,114,56,.08);
        }

        .search-icon {
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: #718096;
            font-size: 16px;
            pointer-events: none;
        }

        .filter-wrapper {
            position: relative;
        }

        .filter-button {
            width: 100%;
            height: 44px;
            border: 1px solid #dbe3ea;
            border-radius: 9px;
            background: white;
            color: #10233f;
            font-family: inherit;
            font-size: 14px;
            font-weight: 700;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            transition: .2s;
        }

        .filter-button:hover,
        .filter-button.active {
            border-color: #087238;
        }

        .filter-button.active {
            background: #087238;
            color: white;
        }

        .filter-arrow {
            font-size: 9px;
            transition: transform .2s;
        }

        .filter-button.open .filter-arrow {
            transform: rotate(180deg);
        }

        .filter-panel {
            display: none;
            position: absolute;
            top: calc(100% + 10px);
            right: 0;
            width: 310px;
            padding: 18px;
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 14px;
            box-shadow: 0 15px 35px rgba(15,23,42,.13);
            z-index: 1000;
        }

        .filter-panel.show {
            display: block;
        }

        .filter-panel-title {
            color: #10233f;
            font-size: 15px;
            font-weight: 800;
            margin-bottom: 16px;
        }

        .filter-group {
            margin-bottom: 18px;
        }

        .filter-label {
            display: block;
            margin-bottom: 8px;
            color: #64748b;
            font-size: 12px;
            font-weight: 700;
        }

        .category-list {
            max-height: 245px;
            overflow-y: auto;
            display: flex;
            flex-direction: column;
            gap: 2px;
        }

        .category-check {
            display: flex;
            align-items: center;
            gap: 9px;
            padding: 7px 6px;
            border-radius: 7px;
            color: #475569;
            font-size: 13px;
            cursor: pointer;
        }

        .category-check:hover {
            background: #f8fafc;
        }

        .category-check input {
            width: 15px;
            height: 15px;
            accent-color: #087238;
            cursor: pointer;
        }

        .date-select {
            width: 100%;
            height: 40px;
            border: 1px solid #dbe3ea;
            border-radius: 8px;
            background: white;
            color: #10233f;
            font-family: inherit;
            font-size: 13px;
            padding: 0 10px;
            outline: none;
            cursor: pointer;
        }

        .date-select:focus {
            border-color: #087238;
            box-shadow: 0 0 0 3px rgba(8,114,56,.08);
        }

        .filter-actions {
            display: flex;
            justify-content: flex-end;
            gap: 8px;
            padding-top: 14px;
            border-top: 1px solid #edf0f3;
        }

        .filter-reset,
        .filter-apply {
            border: none;
            border-radius: 7px;
            padding: 8px 13px;
            font-family: inherit;
            font-size: 12px;
            font-weight: 700;
            cursor: pointer;
        }

        .filter-reset {
            background: #f1f5f9;
            color: #475569;
        }

        .filter-apply {
            background: #087238;
            color: white;
        }

        .filter-result {
            margin-top: 10px;
            color: #718096;
            font-size: 12px;
        }

        .no-filter-result {
            grid-column: 1 / -1;
            display: none;
            background: white;
            border: 1px solid #e5e7eb;
            padding: 60px 30px;
            text-align: center;
            border-radius: 16px;
            color: #718096;
            box-shadow: 0 4px 15px rgba(15,23,42,.04);
        }

        .no-filter-result.show {
            display: block;
        }

        /* =====================================================
           EMPTY
        ===================================================== */

        .empty {
            grid-column: 1 / -1;

            background: white;

            border:
                1px solid #e5e7eb;

            padding:
                60px
                30px;

            text-align: center;

            border-radius: 16px;

            color: #718096;

            box-shadow:
                0 4px 15px
                rgba(15,23,42,.04);
        }


        .empty-icon {
            font-size: 45px;

            margin-bottom: 15px;
        }


        .empty h3 {
            margin: 0;

            color: #64748b;

            font-size: 19px;
        }



        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 1000px) {

            .sidebar {
                width: 260px;
            }


            .announcement-list {
                grid-template-columns: 1fr;
            }

        }


        @media (max-width: 900px) {

            .sidebar {
                width: 240px;
            }


            .topbar {
                padding:
                    0
                    25px;
            }


            .content {
                padding:
                    35px
                    25px;
            }

        }



        @media (max-width: 650px) {

            .page {
                display: block;
            }


            .sidebar {
                width: 100%;

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


            .filter-row {
                grid-template-columns: 1fr;
            }

            .filter-panel {
                left: 0;
                right: auto;
                width: 100%;
            }

            .announcement-header {
                flex-direction: column;

                align-items: flex-start;

                gap: 18px;
            }


            .btn-add {
                width: 100%;

                text-align: center;
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

            {{-- BRAND --}}

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



            {{-- =================================================
                 NAVIGATION
            ================================================== --}}

            <nav class="nav">

                <a href="{{ route('kepala-desa.dashboard') }}" class="nav-item {{ request()->routeIs('kepala-desa.dashboard') ? 'active' : '' }}">
                    <span class="nav-icon">🏠</span>
                    <span>Dashboard</span>
                </a>

                <a href="{{ route('kepala-desa.pengajuan') }}" class="nav-item {{ request()->routeIs('kepala-desa.pengajuan*') ? 'active' : '' }}">
                    <span class="nav-icon">📄</span>
                    <span>Pengajuan Surat</span>
                </a>

                <a href="{{ route('kepala-desa.data-warga') }}" class="nav-item {{ request()->routeIs('kepala-desa.data-warga*') ? 'active' : '' }}">
                    <span class="nav-icon">👥</span>
                    <span>Data Warga</span>
                </a>

                <div class="nav-dropdown {{ request()->routeIs('kepala-desa.informasi*', 'kepala-desa.agenda*') ? 'open' : '' }}">
                    <button type="button" class="nav-dropdown-toggle {{ request()->routeIs('kepala-desa.informasi*', 'kepala-desa.agenda*') ? 'active' : '' }}" onclick="toggleNavDropdown(this)">
                        <span class="nav-icon">📢</span>
                        <span>Pengumuman</span>
                        <span class="nav-dropdown-arrow">▼</span>
                    </button>
                    <div class="nav-dropdown-menu">
                        <a href="{{ route('kepala-desa.informasi') }}" class="{{ request()->routeIs('kepala-desa.informasi*') ? 'active' : '' }}">Informasi</a>
                        <a href="{{ route('kepala-desa.agenda') }}" class="{{ request()->routeIs('kepala-desa.agenda*') ? 'active' : '' }}">Agenda</a>
                    </div>
                </div>

                <div class="nav-dropdown">
                    <button type="button" class="nav-dropdown-toggle" onclick="toggleNavDropdown(this)">
                        <span class="nav-icon">📋</span>
                        <span>Perihal</span>
                        <span class="nav-dropdown-arrow">▼</span>
                    </button>
                    <div class="nav-dropdown-menu">
                        <a href="{{ route('guest.profil-desa') }}">Profil Desa</a>
                        <a href="#">Visi &amp; Misi</a>
                        <a href="#">Struktur Pemerintahan</a>
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
                Informasi
            </h2>



            {{-- PROFILE --}}

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
                                style="width:100%;height:100%;object-fit:cover;border-radius:50%;"
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



                {{-- DROPDOWN --}}

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


            {{-- PAGE HEADING --}}

            <div class="page-heading">

                <h1>
                    Informasi
                </h1>

                <p>
                    Kelola informasi dan pengumuman untuk warga Desa Sukamerindu.
                </p>

            </div>



            {{-- =================================================
                 HEADER INFORMASI
            ================================================== --}}

            <div class="announcement-header">

                <div>

                    <h2>
                        Daftar Informasi
                    </h2>

                    <p>
                        Buat dan kelola informasi yang akan disampaikan kepada warga.
                    </p>

                </div>


                <a
                    href="{{ route('kepala-desa.informasi.tambah') }}"
                    class="btn-add"
                >
                    + Buat Informasi 
                </a>

            </div>




            {{-- =================================================
                 SEARCH & FILTER
            ================================================== --}}

            <div class="filter-bar">

                <div class="filter-row">

                    <div class="search-wrapper">
                        <span class="search-icon">🔎</span>
                        <input
                            type="text"
                            id="searchInformasi"
                            class="search-box"
                            placeholder="Cari informasi..."
                            autocomplete="off"
                        >
                    </div>

                    <div class="filter-wrapper">

                        <button
                            type="button"
                            id="filterButton"
                            class="filter-button"
                        >
                            ⚙
                            <span>Filter</span>
                            <span class="filter-arrow">▼</span>
                        </button>

                        <div id="filterPanel" class="filter-panel">

                            <div class="filter-panel-title">
                                Filter Informasi
                            </div>

                            <div class="filter-group">
                                <label class="filter-label">
                                    Kategori
                                </label>

                                <div class="category-list">

                                    <label class="category-check">
                                        <input type="checkbox" class="category-check-input" value="Pengumuman">
                                        <span>Pengumuman</span>
                                    </label>

                                    <label class="category-check">
                                        <input type="checkbox" class="category-check-input" value="Kegiatan Desa">
                                        <span>Kegiatan Desa</span>
                                    </label>

                                    <label class="category-check">
                                        <input type="checkbox" class="category-check-input" value="Pelayanan">
                                        <span>Pelayanan</span>
                                    </label>


                                    <label class="category-check">
                                        <input type="checkbox" class="category-check-input" value="Pembangunan">
                                        <span>Pembangunan</span>
                                    </label>


                                    <label class="category-check">
                                        <input type="checkbox" class="category-check-input" value="Kesehatan">
                                        <span>Kesehatan</span>
                                    </label>

                                    <label class="category-check">
                                        <input type="checkbox" class="category-check-input" value="Pendidikan">
                                        <span>Pendidikan</span>
                                    </label>


                                    <label class="category-check">
                                        <input type="checkbox" class="category-check-input" value="Kemasyarakatan">
                                        <span>Kemasyarakatan</span>
                                    </label>

                                </div>
                            </div>

                            <div class="filter-group">
                                <label class="filter-label" for="filterTanggal">
                                    Tanggal
                                </label>

                                <select id="filterTanggal" class="date-select">
                                    <option value="semua">Semua</option>
                                    <option value="hari-ini">Hari Ini</option>
                                    <option value="kemarin">Kemarin</option>
                                    <option value="7-hari">7 Hari Terakhir</option>
                                    <option value="30-hari">30 Hari Terakhir</option>
                                </select>
                            </div>

                            <div class="filter-actions">
                                <button type="button" id="resetFilter" class="filter-reset">
                                    Reset
                                </button>
                                <button type="button" id="applyFilter" class="filter-apply">
                                    Terapkan
                                </button>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="filter-result" id="filterResult">
                    Menampilkan semua informasi.
                </div>

            </div>

            {{-- =================================================
                 SUCCESS MESSAGE
            ================================================== --}}

            @if(session('success'))

                <div class="alert-success">

                    {{ session('success') }}

                </div>

            @endif



            {{-- =================================================
                 DAFTAR INFORMASI
            ================================================== --}}

            <div class="announcement-list">


                @forelse($informasi as $item)


                    <article
                        class="announcement-card information-item"
                        data-title="{{ strtolower($item->judul) }}"
                        data-content="{{ strtolower($item->isi) }}"
                        data-category="{{ strtolower($item->kategori) }}"
                        data-date="{{ \Carbon\Carbon::parse($item->created_at)->format('Y-m-d') }}"
                    >


                        {{-- TOP CARD --}}

                        <div class="card-top">


                            <span class="category">
                                {{ $item->kategori }}
                            </span>


                            <span
                                class="status
                                {{ strtolower($item->status) === 'publikasi'
                                    ? 'publikasi'
                                    : 'draft'
                                }}"
                            >
                                {{ $item->status }}
                            </span>


                        </div>



                        {{-- JUDUL --}}

                        <h3>
                            {{ $item->judul }}
                        </h3>



                        {{-- ISI --}}

                        <div class="announcement-content">

                            {{ $item->isi }}

                        </div>



                        {{-- TANGGAL --}}

                        <div class="announcement-date">

                            Dibuat:

                            {{ \Carbon\Carbon::parse(
                                $item->created_at
                            )->translatedFormat(
                                'd F Y, H:i'
                            ) }}

                        </div>



                        {{-- AKSI --}}

                        <div class="card-actions">

                            <div class="action-buttons">

                                <a
                                    href="{{ route(
                                        'kepala-desa.informasi.edit',
                                        $item->id
                                    ) }}"
                                    class="btn-edit"
                                >
                                    ✏️ Edit
                                </a>

                                <form
                                    action="{{ route(
                                        'kepala-desa.informasi.hapus',
                                        $item->id
                                    ) }}"
                                    method="POST"
                                    onsubmit="return confirm(
                                        'Yakin ingin menghapus informasi ini?'
                                    )"
                                >

                                    @csrf

                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="btn-delete"
                                    >
                                        🗑 Hapus
                                    </button>

                                </form>

                            </div>

                        </div>


                        {{-- KOMENTAR --}}

                        <div class="comment-section">

                            <div class="comment-title">
                                💬 Komentar
                            </div>

                            @if($item->komentar_list->count() > 0)

                                <div class="comment-list">

                                    @foreach($item->komentar_list as $komentar)

                                        <div class="comment-item">

                                            <div class="comment-head">

                                                <span class="comment-name">
                                                    {{ $komentar->nama_pengguna }}
                                                </span>

                                                <span class="comment-date">
                                                    {{ \Carbon\Carbon::parse($komentar->created_at)->locale('id')->translatedFormat('d F Y, H:i') }}
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
                                action="{{ route(
                                    'kepala-desa.informasi.komentar',
                                    $item->id
                                ) }}"
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


                    </article>


                @empty


                    <div class="empty">


                        <div class="empty-icon">
                            📢
                        </div>


                        <h3>
                            Belum ada informasi
                        </h3>


                        <p style="margin-top:8px;">
                            Klik tombol "Buat Informasi"
                            untuk menambahkan informasi baru.
                        </p>


                    </div>


                @endforelse

                <div
                    id="noFilterResult"
                    class="no-filter-result"
                >
                    <div class="empty-icon">🔎</div>
                    <h3>Tidak ada informasi ditemukan</h3>
                    <p style="margin-top:8px;">
                        Coba ubah kata pencarian atau filter yang dipilih.
                    </p>
                </div>


            </div>


        </section>


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




    /* =====================================================
       SEARCH & FILTER INFORMASI
    ===================================================== */

    document.addEventListener('DOMContentLoaded', function () {

        const searchInput = document.getElementById('searchInformasi');
        const filterTanggal = document.getElementById('filterTanggal');
        const filterButton = document.getElementById('filterButton');
        const filterPanel = document.getElementById('filterPanel');
        const applyFilterButton = document.getElementById('applyFilter');
        const resetFilterButton = document.getElementById('resetFilter');
        const filterResult = document.getElementById('filterResult');
        const categoryInputs = Array.from(document.querySelectorAll('.category-check-input'));
        const cards = Array.from(document.querySelectorAll('.information-item'));

        if (!searchInput || !filterTanggal || !filterButton || !filterPanel) {
            return;
        }

        let selectedCategories = [];

        function normalize(value) {
            return (value || '').toLowerCase().trim();
        }

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

        function applyFilters() {

            const search = normalize(searchInput.value);
            const tanggal = filterTanggal.value;
            let visibleCount = 0;

            cards.forEach(card => {

                const title = normalize(card.dataset.title);
                const content = normalize(card.dataset.content);
                const category = normalize(card.dataset.category);
                const date = card.dataset.date;

                const matchesSearch =
                    !search ||
                    title.includes(search) ||
                    content.includes(search) ||
                    category.includes(search);

                const matchesCategory =
                    selectedCategories.length === 0 ||
                    selectedCategories.some(selected =>
                        normalize(selected) === category
                    );

                const matchesDate = isDateMatch(date, tanggal);

                const show =
                    matchesSearch &&
                    matchesCategory &&
                    matchesDate;

                card.style.display = show ? '' : 'none';

                if (show) {
                    visibleCount++;
                }
            });

            const noResult = document.getElementById('noFilterResult');

            if (noResult) {
                noResult.classList.toggle('show', visibleCount === 0);
            }

            if (filterResult) {
                if (visibleCount === 0) {
                    filterResult.textContent =
                        'Tidak ada informasi yang sesuai dengan pencarian/filter.';
                } else {
                    filterResult.textContent =
                        'Menampilkan ' + visibleCount + ' informasi.';
                }
            }
        }

        filterButton.addEventListener('click', function (event) {
            event.stopPropagation();
            filterPanel.classList.toggle('show');
            filterButton.classList.toggle('open');
        });

        filterPanel.addEventListener('click', function (event) {
            event.stopPropagation();
        });

        applyFilterButton.addEventListener('click', function () {

            selectedCategories = categoryInputs
                .filter(input => input.checked)
                .map(input => input.value);

            applyFilters();

            filterPanel.classList.remove('show');
            filterButton.classList.remove('open');

            const filterActive =
                selectedCategories.length > 0 ||
                filterTanggal.value !== 'semua';

            filterButton.classList.toggle('active', filterActive);
        });

        resetFilterButton.addEventListener('click', function () {

            categoryInputs.forEach(input => {
                input.checked = false;
            });

            selectedCategories = [];
            filterTanggal.value = 'semua';
            searchInput.value = '';

            applyFilters();

            filterButton.classList.remove('active');
        });

        searchInput.addEventListener('input', applyFilters);

        document.addEventListener('click', function () {
            filterPanel.classList.remove('show');
            filterButton.classList.remove('open');
        });

        applyFilters();
    });

    /* =====================================================
       CLOSE DROPDOWN
    ===================================================== */

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


</script>


</body>

</html>
