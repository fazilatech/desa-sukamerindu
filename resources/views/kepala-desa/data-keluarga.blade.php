<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Data Keluarga - Kepala Desa</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f7fa;
            color: #10233f;
        }

        .page {
            min-height: 100vh;
            display: flex;
        }

        /* SIDEBAR */
        .sidebar {
            width: 255px;
            min-height: 100vh;
            background: #087238;
            color: white;
            padding: 30px 14px;
            flex-shrink: 0;
        }

        .brand {
            text-align: center;
            padding-bottom: 25px;
            border-bottom: 1px solid rgba(255,255,255,.22);
        }

        .logo {
            width: 90px;
            height: 90px;
            object-fit: contain;
            background: white;
            border-radius: 7px;
            padding: 6px;
        }

        .brand-title {
            margin: 18px 0 8px;
            font-size: 18px;
            line-height: 1.2;
            font-weight: 800;
            letter-spacing: .2px;
        }

        .brand-subtitle {
            font-size: 12px;
            line-height: 1.4;
            opacity: .95;
        }

        .nav {
            margin-top: 22px;
        }

        .nav-item,
        .nav-dropdown-toggle {
            width: 100%;
            min-height: 44px;
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 0 18px;
            margin-bottom: 6px;
            border: 0;
            border-radius: 9px;
            background: transparent;
            color: white;
            text-decoration: none;
            font: inherit;
            font-size: 14px;
            line-height: 1.2;
            font-weight: 600;
            cursor: pointer;
            text-align: left;
        }

        .nav-item:hover,
        .nav-dropdown-toggle:hover,
        .nav-item.active,
        .nav-dropdown-toggle.active {
            background: rgba(255,255,255,.14);
        }

        .nav-icon {
            width: 22px;
            text-align: center;
        }

        .nav-dropdown {
            margin-bottom: 7px;
        }

        .nav-dropdown-toggle {
            justify-content: flex-start;
        }

        .nav-dropdown-arrow {
            margin-left: auto;
            font-size: 10px;
            transition: .2s;
        }

        .nav-dropdown.open .nav-dropdown-arrow {
            transform: rotate(180deg);
        }

        .nav-dropdown-menu {
            display: none;
            padding: 0 0 5px 52px;
        }

        .nav-dropdown.open .nav-dropdown-menu {
            display: block;
        }

        .nav-dropdown-menu a {
            display: block;
            padding: 9px 12px;
            color: rgba(255,255,255,.9);
            text-decoration: none;
            border-radius: 7px;
            font-size: 13px;
            line-height: 1.25;
            font-weight: 500;
        }

        .nav-dropdown-menu a:hover,
        .nav-dropdown-menu a.active {
            background: rgba(255,255,255,.13);
            color: white;
        }

        /* MAIN */
        .main {
            flex: 1;
            min-width: 0;
        }

        .topbar {
            height: 72px;
            background: white;
            border-bottom: 1px solid #e5e7eb;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 34px;
        }

        .topbar-title {
            margin: 0;
            color: #087238;
            font-size: 18px;
            line-height: 1.2;
            font-weight: 700;
            letter-spacing: .1px;
        }

        .profile-area {
            position: relative;
        }

        .profile {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 5px 7px;
            border-radius: 10px;
            cursor: pointer;
            user-select: none;
            transition: background .2s ease;
        }

        .profile-area {
            position: relative;
            z-index: 2001;
        }

        .profile:hover {
            background: #f8fafc;
        }

        .avatar {
            width: 40px;
            height: 40px;
            min-width: 40px;
            border-radius: 50%;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #dcfce7;
            color: #087238;
            font-weight: 800;
            font-size: 13px;
        }

        .avatar img {
            width: 100%;
            height: 100%;
            display: block;
            object-fit: cover;
        }

        .profile-info {
            min-width: 0;
        }

        .profile-dropdown {
            position: absolute;
            top: calc(100% + 10px);
            right: 0;
            width: 175px;
            padding: 8px;
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            box-shadow: 0 12px 30px rgba(16, 35, 63, .12);
            z-index: 2000;
            display: none;
        }

        .profile-dropdown.show {
            display: block;
        }

        .dropdown-profile,
        .dropdown-logout {
            width: 100%;
            min-height: 42px;
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 0 12px;
            border: 0;
            border-radius: 8px;
            background: transparent;
            text-decoration: none;
            font: inherit;
            font-size: 12px;
            font-weight: 700;
            text-align: left;
            cursor: pointer;
        }

        .dropdown-profile {
            color: #263b57;
        }

        .dropdown-logout {
            color: #ef4444;
        }

        .dropdown-profile:hover {
            background: #f5f7fa;
            color: #087238;
        }

        .dropdown-logout:hover {
            background: #fef2f2;
        }

        .profile-dropdown form {
            margin: 0;
        }

        .avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #dcfce7;
            color: #087238;
            font-weight: 800;
            font-size: 13px;
        }

        .profile-name {
            font-weight: 700;
            font-size: 13px;
            line-height: 1.2;
        }

        .profile-role {
            margin-top: 3px;
            color: #66809d;
            font-size: 11px;
            line-height: 1.2;
        }

        .content {
            padding: 36px 32px 60px;
        }

        .page-heading h1 {
            margin: 0 0 7px;
            font-size: 30px;
            line-height: 1.2;
            font-weight: 750;
            letter-spacing: -.3px;
        }

        .page-heading p {
            margin: 0;
            color: #66809d;
            font-size: 13px;
            line-height: 1.5;
        }

        /* STATISTICS */
        .stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 17px;
            margin-top: 25px;
        }

        .stat-card {
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 5px 15px rgba(16,35,63,.04);
        }

        .stat-icon {
            width: 40px;
            height: 40px;
            border-radius: 11px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #dcfce7;
            font-size: 19px;
        }

        .stat-number {
            margin: 15px 0 5px;
            font-size: 25px;
            line-height: 1.1;
            font-weight: 750;
        }

        .stat-label {
            color: #66809d;
            font-size: 12px;
            line-height: 1.35;
        }

        /* TABLE */
        .table-card {
            margin-top: 22px;
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 15px;
            padding: 24px;
            box-shadow: 0 5px 15px rgba(16,35,63,.04);
        }

        .table-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 18px;
            margin-bottom: 15px;
        }

        .table-title {
            margin: 0;
            font-size: 17px;
            line-height: 1.3;
            font-weight: 700;
        }

        .filter-area {
            display: grid;
            grid-template-columns: minmax(220px, 1.5fr) repeat(3, minmax(115px, 1fr)) auto;
            gap: 9px;
            width: min(100%, 850px);
            align-items: center;
        }

        .search-wrapper {
            position: relative;
        }

        .search-icon {
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            color: #7b8da1;
            pointer-events: none;
            font-size: 13px;
        }

        .search-box,
        .filter-select,
        .btn-reset {
            width: 100%;
            height: 40px;
            border: 1px solid #d1d5db;
            border-radius: 9px;
            background: white;
            outline: none;
            font: inherit;
            font-size: 12px;
            color: #526b85;
        }

        .search-box {
            padding: 0 12px 0 34px;
        }

        .filter-select {
            padding: 0 10px;
            cursor: pointer;
        }

        .btn-reset {
            width: auto;
            min-width: 68px;
            padding: 0 12px;
            cursor: pointer;
            font-weight: 700;
            white-space: nowrap;
        }

        .search-box:focus,
        .filter-select:focus,
        .btn-reset:hover {
            border-color: #087238;
        }

        .filter-result {
            display: none;
            margin: 0 0 13px;
            color: #66809d;
            font-size: 12px;
        }

        .filter-result.active {
            display: flex;
            gap: 8px;
            align-items: center;
        }

        .filter-hint {
            color: #9aa9b8;
        }

        .table-wrapper {
            width: 100%;
            overflow-x: auto;
        }

        table {
            width: 100%;
            min-width: 780px;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 14px 11px;
            text-align: left;
            border-bottom: 1px solid #edf0f3;
            font-size: 12px;
            line-height: 1.35;
            white-space: nowrap;
        }

        th {
            color: #526b85;
            font-weight: 700;
        }

        td {
            color: #526b85;
        }

        td.name {
            color: #10233f;
            font-weight: 700;
        }

        .family-number {
            font-weight: 700;
            color: #087238;
        }

        .members-badge {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            padding: 6px 9px;
            border-radius: 20px;
            background: #eff6ff;
            color: #315d87;
            font-weight: 700;
        }

        .btn-detail {
            border: 0;
            background: #087238;
            color: white;
            border-radius: 7px;
            padding: 8px 13px;
            font-size: 11px;
            font-weight: 800;
            cursor: pointer;
        }

        .btn-detail:hover {
            background: #075e2e;
        }

        .empty-row {
            text-align: center;
            padding: 30px !important;
            color: #8a9bad;
        }

        /* MODAL */
        .modal {
            position: fixed;
            inset: 0;
            z-index: 1000;
            display: none;
            align-items: center;
            justify-content: center;
            padding: 20px;
            background: rgba(10, 25, 40, .45);
        }

        .modal.show {
            display: flex;
        }

        .modal-card {
            width: min(720px, 100%);
            max-height: 88vh;
            overflow-y: auto;
            background: white;
            border-radius: 17px;
            padding: 25px;
            box-shadow: 0 20px 50px rgba(0,0,0,.18);
        }

        .modal-header {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 15px;
            margin-bottom: 20px;
        }

        .modal-header h2 {
            margin: 0 0 5px;
            font-size: 20px;
        }

        .modal-header p {
            margin: 0;
            color: #66809d;
            font-size: 12px;
        }

        .close-modal {
            width: 34px;
            height: 34px;
            border: 0;
            border-radius: 8px;
            background: #f1f5f9;
            color: #526b85;
            cursor: pointer;
            font-size: 18px;
        }

        .family-summary {
            padding: 15px;
            margin-bottom: 18px;
            border-radius: 12px;
            background: #f0fdf4;
            border: 1px solid #dcfce7;
        }

        .family-summary strong {
            display: block;
            margin-bottom: 4px;
            color: #087238;
        }

        .family-summary span {
            color: #66809d;
            font-size: 12px;
        }

        .head-selector {
            margin-top: 18px;
            padding: 16px;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            background: #f8fafc;
        }

        .head-selector label {
            display: block;
            margin-bottom: 8px;
            font-weight: 700;
            font-size: 13px;
            color: #10233f;
        }

        .head-selector .btn-detail {
            border: 0;
            cursor: pointer;
        }

        .member-list {
            display: grid;
            gap: 10px;
        }

        .member-item {
            display: grid;
            grid-template-columns: 45px 1fr auto;
            align-items: center;
            gap: 12px;
            padding: 13px;
            border: 1px solid #e5e7eb;
            border-radius: 11px;
        }

        .member-number {
            width: 34px;
            height: 34px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #dcfce7;
            color: #087238;
            font-weight: 800;
            font-size: 12px;
        }

        .member-name {
            color: #10233f;
            font-weight: 800;
            font-size: 13px;
        }

        .member-info {
            margin-top: 4px;
            color: #66809d;
            font-size: 11px;
        }

        .member-relation {
            padding: 5px 8px;
            border-radius: 15px;
            background: #f1f5f9;
            color: #526b85;
            font-size: 10px;
            font-weight: 700;
        }

        @media (max-width: 1100px) {
            .table-header {
                align-items: flex-start;
                flex-direction: column;
            }

            .filter-area {
                width: 100%;
                grid-template-columns: minmax(220px, 1.5fr) repeat(3, minmax(115px, 1fr)) auto;
            }
        }

        @media (max-width: 850px) {
            .sidebar {
                width: 220px;
            }

            .content {
                padding: 30px 22px 50px;
            }

            .stats {
                grid-template-columns: 1fr;
            }

            .filter-area {
                grid-template-columns: 1fr 1fr;
            }

            .search-wrapper {
                grid-column: 1 / -1;
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
                padding: 18px 20px;
            }

            .profile-role {
                display: none;
            }

            .profile-dropdown {
                right: 0;
                width: 170px;
            }

            .content {
                padding: 25px 16px 45px;
            }

            .page-heading h1 {
                font-size: 26px;
            }

            .filter-area {
                grid-template-columns: 1fr;
            }

            .search-wrapper {
                grid-column: auto;
            }

            .filter-select,
            .btn-reset {
                width: 100%;
            }

            .table-card {
                padding: 18px;
            }

            .member-item {
                grid-template-columns: 38px 1fr;
            }

            .member-relation {
                grid-column: 2;
                width: fit-content;
            }
        }

        /* =====================================================
           SYNC NAVBAR DENGAN DATA WARGA
           Jangan hapus dropdown Data Warga.
        ===================================================== */

        html,
        body {
            margin: 0;
            padding: 0;
            min-height: 100%;
        }

        body {
            font-family: "Segoe UI", Arial, sans-serif;
            background: #f3f6f9;
            color: #10233f;
        }

        .sidebar {
            width: 300px;
            min-height: 100vh;
            background: #096b35;
            color: white;
            padding: 36px 16px 24px;
            display: flex;
            flex-direction: column;
            flex-shrink: 0;
        }

        .brand {
            text-align: center;
            padding-bottom: 30px;
            border-bottom: 1px solid rgba(255,255,255,.25);
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

        .nav {
            margin-top: 28px;
        }

        .nav-item,
        .nav-dropdown-toggle {
            width: 100%;
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 14px 20px;
            margin-bottom: 8px;
            border: 0;
            border-radius: 9px;
            background: transparent;
            color: white;
            text-decoration: none;
            font-family: inherit;
            font-size: 15px;
            line-height: 1.2;
            font-weight: 600;
            cursor: pointer;
            text-align: left;
        }

        .nav-item:hover,
        .nav-dropdown-toggle:hover {
            background: rgba(255,255,255,.10);
        }

        .nav-item.active,
        .nav-dropdown-toggle.active {
            background: rgba(255,255,255,.16);
            border: 1px solid rgba(255,255,255,.55);
        }

        .nav-icon {
            width: 22px;
            text-align: center;
            font-size: 17px;
            flex-shrink: 0;
        }

        .nav-dropdown {
            margin-bottom: 8px;
        }

        .nav-dropdown-toggle {
            justify-content: flex-start;
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
            line-height: 1.25;
            font-weight: 500;
            text-decoration: none;
        }

        .nav-dropdown-menu a:hover,
        .nav-dropdown-menu a.active {
            background: rgba(255,255,255,.10);
            color: white;
        }

        .topbar {
            height: 84px;
            background: white;
            border-bottom: 1px solid #e5e7eb;
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
            min-width: 48px;
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

        @media (max-width: 900px) {
            .sidebar {
                width: 240px;
            }

            .topbar {
                padding: 0 25px;
            }

            .content {
                padding: 35px 25px;
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
                padding: 25px 20px;
            }

            .profile-role {
                display: none;
            }
        }

    </style>
</head>

<body>

<div class="page">

    <aside class="sidebar">

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
                class="nav-item"
            >
                <span class="nav-icon">🏠</span>
                <span>Dashboard</span>
            </a>

            <a
                href="{{ route('kepala-desa.pengajuan') }}"
                class="nav-item"
            >
                <span class="nav-icon">📄</span>
                <span>Pengajuan Surat</span>
            </a>

            <div class="nav-dropdown open">

                <button
                    type="button"
                    class="nav-dropdown-toggle active"
                    onclick="toggleNavDropdown(this)"
                >
                    <span class="nav-icon">👥</span>
                    <span>Data Warga</span>
                    <span class="nav-dropdown-arrow">▼</span>
                </button>

                <div class="nav-dropdown-menu">

                    <a
                        href="{{ route('kepala-desa.data-warga') }}"
                    >
                        Data Warga
                    </a>

                    <a
                        href="{{ route('kepala-desa.data-keluarga') }}"
                        class="active"
                    >
                        Data Keluarga
                    </a>

                    <a href="{{ route('kepala-desa.data-kelahiran') }}">
                        Data Kelahiran
                    </a>

                    <a href="#">
                        Data Kematian
                    </a>

                    <a href="#">
                        Data Perpindahan
                    </a>

                </div>

            </div>

            <div class="nav-dropdown">

                <button
                    type="button"
                    class="nav-dropdown-toggle"
                    onclick="toggleNavDropdown(this)"
                >
                    <span class="nav-icon">📢</span>
                    <span>Pengumuman</span>
                    <span class="nav-dropdown-arrow">▼</span>
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

    </aside>


    <main class="main">

        <header class="topbar">

            <h2 class="topbar-title">
                Data Keluarga
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

                <div
                    id="profileDropdown"
                    class="profile-dropdown"
                >
                    <a
                        href="{{ route('kepala-desa.profil') }}"
                        class="dropdown-profile"
                    >
                        <span>👤</span>
                        <span>Profil</span>
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
                            <span>🚪</span>
                            <span>Keluar</span>
                        </button>
                    </form>
                </div>

            </div>

        </header>


        <section class="content">

            <div class="page-heading">

                <h1>
                    Data Keluarga
                </h1>

                <p>
                    Kelola dan pantau data kartu keluarga Desa Sukamerindu.
                </p>

            </div>


            <div class="stats">

                <div class="stat-card">
                    <div class="stat-icon">👨‍👩‍👧</div>

                    <h3 class="stat-number" id="totalKeluarga">
                        {{ isset($keluarga) ? $keluarga->count() : 0 }}
                    </h3>

                    <div class="stat-label">
                        Total Keluarga
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-icon">🏠</div>

                    <h3 class="stat-number" id="totalKK">
                        {{ isset($keluarga) ? $keluarga->count() : 0 }}
                    </h3>

                    <div class="stat-label">
                        Total Kartu Keluarga
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-icon">👥</div>

                    <h3 class="stat-number" id="totalAnggota">
                        {{ isset($keluarga) ? $keluarga->sum(fn($item) => (int)($item->jumlah_anggota ?? 0)) : 0 }}
                    </h3>

                    <div class="stat-label">
                        Total Anggota Keluarga
                    </div>
                </div>

            </div>


            <div class="table-card">

                <div class="table-header">

                    <h3 class="table-title">
                        Daftar Data Keluarga
                    </h3>

                    <div class="filter-area">

                        <div class="search-wrapper">
                            <span class="search-icon">🔎</span>

                            <input
                                type="text"
                                id="searchBox"
                                class="search-box"
                                placeholder="Cari No. KK, kepala keluarga..."
                                autocomplete="off"
                            >
                        </div>

                        <select id="rtFilter" class="filter-select">
                            <option value="">Semua RT</option>
                            @foreach(($keluarga ?? collect()) as $filterItem)
                                @if(!empty($filterItem->rt) && $filterItem->rt !== "-")
                                    <option value="{{ $filterItem->rt }}">RT {{ $filterItem->rt }}</option>
                                @endif
                            @endforeach
                        </select>

                        <select id="rwFilter" class="filter-select">
                            <option value="">Semua RW</option>
                            @foreach(($keluarga ?? collect()) as $filterItem)
                                @if(!empty($filterItem->rw) && $filterItem->rw !== "-")
                                    <option value="{{ $filterItem->rw }}">RW {{ $filterItem->rw }}</option>
                                @endif
                            @endforeach
                        </select>

                        <select id="anggotaFilter" class="filter-select">
                            <option value="">Semua Jumlah</option>
                            <option value="1-3">1 - 3 Anggota</option>
                            <option value="4-6">4 - 6 Anggota</option>
                            <option value="7+">7+ Anggota</option>
                        </select>

                        <button
                            type="button"
                            id="resetFilter"
                            class="btn-reset"
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
                                <th>No</th>
                                <th>No. KK</th>
                                <th>Kepala Keluarga</th>
                                <th>Jumlah Anggota</th>
                                <th>Alamat</th>
                                <th>RT</th>
                                <th>RW</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody id="keluargaTable">

                            @if(isset($keluarga) && $keluarga->count())

                                @foreach($keluarga as $index => $item)

                                    <tr
                                        data-rt="{{ $item->rt ?? '' }}"
                                        data-rw="{{ $item->rw ?? '' }}"
                                        data-anggota="{{ $item->jumlah_anggota ?? 0 }}"
                                    >

                                        <td>
                                            {{ $index + 1 }}
                                        </td>

                                        <td class="family-number">
                                            {{ $item->no_kk ?? $item->nomor_kk ?? '-' }}
                                        </td>

                                        <td class="name">
                                            {{ $item->kepala_keluarga ?? $item->nama_kepala_keluarga ?? '-' }}
                                        </td>

                                        <td>
                                            <span class="members-badge">
                                                👥 {{ $item->jumlah_anggota ?? 0 }} orang
                                            </span>
                                        </td>

                                        <td>
                                            {{ $item->alamat ?? '-' }}
                                        </td>

                                        <td>{{ $item->rt ?? '-' }}</td>

                                        <td>{{ $item->rw ?? '-' }}</td>

                                        <td>
                                            <button
                                                type="button"
                                                class="btn-detail"
                                                onclick="openFamilyDetail(this)"
                                                data-kk="{{ $item->no_kk ?? $item->nomor_kk ?? '-' }}"
                                                data-kepala="{{ $item->kepala_keluarga ?? $item->nama_kepala_keluarga ?? '-' }}"
                                                data-jumlah="{{ $item->jumlah_anggota ?? 0 }}"
                                                data-alamat="{{ $item->alamat ?? '-' }}"
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
                                    <td colspan="8" class="empty-row">
                                        Belum ada data keluarga.
                                    </td>
                                </tr>

                            @endif

                        </tbody>

                    </table>

                </div>

            </div>

        </section>

    </main>

</div>


<div
    id="familyModal"
    class="modal"
    onclick="closeFamilyModal(event)"
>

    <div
        class="modal-card"
        onclick="event.stopPropagation()"
    >

        <div class="modal-header">

            <div>
                <h2>Detail Data Keluarga</h2>
                <p>Informasi kartu keluarga dan anggota keluarga.</p>
            </div>

            <button
                type="button"
                class="close-modal"
                onclick="closeFamilyModal()"
            >
                ×
            </button>

        </div>


        <div class="family-summary">

            <strong id="detailKK">
                -
            </strong>

            <span id="detailKepala">
                Kepala Keluarga: -
            </span>

            <br>

            <span id="detailAlamat">
                Alamat: -
            </span>

        </div>


        <div class="member-list" id="memberList">

            <div class="member-item">
                <div class="member-number">...</div>
                <div>
                    <div class="member-name">Memuat anggota...</div>
                    <div class="member-info">Mengambil data dari Data Warga.</div>
                </div>
            </div>

        </div>

        <div class="head-selector">
            <label for="headSelect">Pilih Kepala Keluarga</label>
            <select id="headSelect" class="filter-select" style="width:100%;">
                <option value="">Pilih warga yang menjadi kepala keluarga</option>
            </select>
            <button type="button" id="saveHeadButton" class="btn-detail" style="margin-top:10px;">
                Simpan Kepala Keluarga
            </button>
            <div id="headMessage" class="filter-result"></div>
        </div>

    </div>

</div>


<script>
    function toggleNavDropdown(button) {
        const dropdown = button.closest('.nav-dropdown');

        if (dropdown) {
            dropdown.classList.toggle('open');
        }
    }

    function toggleProfileDropdown() {
        const dropdown = document.getElementById('profileDropdown');

        if (dropdown) {
            dropdown.classList.toggle('show');
        }
    }

    const profileDropdown = document.getElementById('profileDropdown');

    if (profileDropdown) {
        profileDropdown.addEventListener('click', function(event) {
            event.stopPropagation();
        });
    }

    document.addEventListener('click', function(event) {
        const profileArea = document.querySelector('.profile-area');
        const dropdown = document.getElementById('profileDropdown');

        if (
            profileArea &&
            dropdown &&
            !profileArea.contains(event.target)
        ) {
            dropdown.classList.remove('show');
        }
    });


    const searchBox = document.getElementById('searchBox');
    const rtFilter = document.getElementById('rtFilter');
    const rwFilter = document.getElementById('rwFilter');
    const anggotaFilter = document.getElementById('anggotaFilter');
    const resetFilter = document.getElementById('resetFilter');
    const filterResult = document.getElementById('filterResult');


    function anggotaMatch(value, selected) {

        const jumlah = parseInt(value || 0);

        if (!selected) {
            return true;
        }

        if (selected === '1-3') {
            return jumlah >= 1 && jumlah <= 3;
        }

        if (selected === '4-6') {
            return jumlah >= 4 && jumlah <= 6;
        }

        if (selected === '7+') {
            return jumlah >= 7;
        }

        return true;
    }


    function applyFilters() {

        const keyword =
            searchBox.value
                .toLowerCase()
                .trim();

        const rt = rtFilter.value.toLowerCase().trim();
        const rw = rwFilter.value.toLowerCase().trim();

        const anggota =
            anggotaFilter.value;

        const rows =
            document.querySelectorAll(
                '#keluargaTable tr'
            );

        let total = 0;
        let visible = 0;

        rows.forEach(function(row) {

            if (
                row.querySelector('.empty-row')
            ) {
                return;
            }

            total++;

            const text =
                row.textContent
                    .toLowerCase();

            const rowRt = (row.getAttribute('data-rt') || '').toLowerCase();
            const rowRw = (row.getAttribute('data-rw') || '').toLowerCase();

            const rowAnggota =
                row.getAttribute('data-anggota') || 0;

            const matchKeyword =
                !keyword ||
                text.includes(keyword);

            const matchRt = !rt || rowRt === rt;
            const matchRw = !rw || rowRw === rw;

            const matchAnggota =
                anggotaMatch(
                    rowAnggota,
                    anggota
                );

            if (
                matchKeyword &&
                matchRt &&
                matchRw &&
                matchAnggota
            ) {
                row.style.display = '';
                visible++;
            } else {
                row.style.display = 'none';
            }

        });


        if (
            keyword ||
            rt ||
            rw ||
            anggota
        ) {

            filterResult.classList.add('active');

            filterResult.innerHTML =
                '<span>' +
                visible +
                ' data keluarga ditemukan' +
                '</span>' +
                '<span class="filter-hint">' +
                'dari ' +
                total +
                ' data' +
                '</span>';

        } else {

            filterResult.classList.remove('active');
            filterResult.innerHTML = '';

        }

    }


    searchBox.addEventListener(
        'input',
        applyFilters
    );

    rtFilter.addEventListener('change', applyFilters);
    rwFilter.addEventListener('change', applyFilters);

    anggotaFilter.addEventListener(
        'change',
        applyFilters
    );


    resetFilter.addEventListener(
        'click',
        function() {

            searchBox.value = '';
            rtFilter.value = '';
            rwFilter.value = '';
            anggotaFilter.value = '';

            applyFilters();

            searchBox.focus();

        }
    );


    let activeNoKk = null;

    async function openFamilyDetail(button) {

        activeNoKk = button.dataset.kk || '';

        document.getElementById('detailKK').textContent =
            'No. KK: ' + activeNoKk;

        document.getElementById('detailKepala').textContent =
            'Kepala Keluarga: ' +
            (button.dataset.kepala || 'Belum ditetapkan');

        document.getElementById('detailAlamat').textContent =
            'Alamat: ' +
            (button.dataset.alamat || '-') +
            ' • ' +
            'RT ' + (button.dataset.rt || '-') + ' • RW ' + (button.dataset.rw || '-');

        const memberList = document.getElementById('memberList');
        const headSelect = document.getElementById('headSelect');
        const headMessage = document.getElementById('headMessage');

        memberList.innerHTML =
            '<div class="member-item"><div class="member-number">...</div>' +
            '<div><div class="member-name">Memuat anggota...</div>' +
            '<div class="member-info">Mengambil data dari Data Warga.</div></div></div>';

        headSelect.innerHTML =
            '<option value="">Pilih warga yang menjadi kepala keluarga</option>';
        headMessage.textContent = '';

        document.getElementById('familyModal').classList.add('show');
        document.body.style.overflow = 'hidden';

        try {
            const response = await fetch(
                `{{ url('/kepala-desa/data-keluarga') }}/${encodeURIComponent(activeNoKk)}/anggota`,
                { headers: { 'Accept': 'application/json' } }
            );

            if (!response.ok) {
                throw new Error('Gagal mengambil anggota keluarga.');
            }

            const data = await response.json();
            const anggota = data.anggota || [];

            if (!anggota.length) {
                memberList.innerHTML =
                    '<div class="member-item"><div class="member-number">-</div>' +
                    '<div><div class="member-name">Tidak ada anggota</div>' +
                    '<div class="member-info">Belum ada warga dengan No. KK ini.</div></div></div>';
            } else {
                memberList.innerHTML = anggota.map((warga, index) => {
                    const jk = warga.jenis_kelamin || '-';
                    const pekerjaan = warga.pekerjaan || '-';
                    const isHead = String(data.kepala_keluarga_id || '') === String(warga.id);

                    return `
                        <div class="member-item">
                            <div class="member-number">${index + 1}</div>
                            <div style="flex:1;">
                                <div class="member-name">${escapeHtml(warga.name || '-')}</div>
                                <div class="member-info">
                                    NIK: ${escapeHtml(warga.nik || '-')} •
                                    ${escapeHtml(jk)} •
                                    Lahir: ${escapeHtml(warga.tanggal_lahir || '-')} •
                                    Pekerjaan: ${escapeHtml(pekerjaan)}
                                </div>
                            </div>
                            <span class="member-relation">
                                ${isHead ? 'Kepala Keluarga' : 'Anggota'}
                            </span>
                        </div>
                    `;
                }).join('');
            }

            anggota.forEach(warga => {
                const option = document.createElement('option');
                option.value = warga.id;
                option.textContent = `${warga.name} - ${warga.nik || 'NIK belum diisi'}`;
                if (String(data.kepala_keluarga_id || '') === String(warga.id)) {
                    option.selected = true;
                }
                headSelect.appendChild(option);
            });

        } catch (error) {
            memberList.innerHTML =
                '<div class="member-item"><div class="member-number">!</div>' +
                '<div><div class="member-name">Gagal memuat data</div>' +
                '<div class="member-info">' + escapeHtml(error.message) + '</div></div></div>';
        }
    }


    function escapeHtml(value) {
        return String(value ?? '')
            .replaceAll('&', '&amp;')
            .replaceAll('<', '&lt;')
            .replaceAll('>', '&gt;')
            .replaceAll('"', '&quot;')
            .replaceAll("'", '&#039;');
    }


    document.getElementById('saveHeadButton').addEventListener('click', async function() {

        const headId = document.getElementById('headSelect').value;
        const message = document.getElementById('headMessage');

        if (!activeNoKk || !headId) {
            message.textContent = 'Pilih warga terlebih dahulu.';
            return;
        }

        this.disabled = true;
        this.textContent = 'Menyimpan...';
        message.textContent = '';

        try {
            const response = await fetch(
                '{{ route('kepala-desa.data-keluarga.tetapkan-kepala') }}',
                {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': document
                            .querySelector('meta[name="csrf-token"]')
                            .getAttribute('content')
                    },
                    body: JSON.stringify({
                        no_kk: activeNoKk,
                        kepala_keluarga_id: headId
                    })
                }
            );

            const data = await response.json();

            if (!response.ok) {
                throw new Error(data.message || 'Gagal menyimpan kepala keluarga.');
            }

            message.textContent = data.message || 'Berhasil disimpan.';

            setTimeout(() => location.reload(), 700);

        } catch (error) {
            message.textContent = error.message;
        } finally {
            this.disabled = false;
            this.textContent = 'Simpan Kepala Keluarga';
        }
    });


    function closeFamilyModal(event) {

        if (
            event &&
            event.target &&
            event.target.id !== 'familyModal'
        ) {
            return;
        }

        document.getElementById('familyModal')
            .classList.remove('show');

        document.body.style.overflow = '';

    }


    document.addEventListener(
        'keydown',
        function(event) {

            if (event.key === 'Escape') {
                closeFamilyModal();
            }

        }
    );
</script>

</body>
</html>
