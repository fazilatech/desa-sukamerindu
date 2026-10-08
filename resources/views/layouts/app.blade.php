<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desa Sukamerindu</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f7fb;
            color: #173f68;
        }

        .layout {
            display: flex;
            min-height: 100vh;
        }

        /* SIDEBAR */
        .sidebar {
            width: 244px;
            min-height: 100vh;
            background: #08783d;
            color: white;
            padding: 25px 14px;
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;
        }

        .logo-section {
            text-align: center;
            padding-bottom: 26px;
            border-bottom: 1px solid rgba(255,255,255,0.25);
        }

        .logo-section img {
            width: 75px;
            height: 75px;
            object-fit: contain;
            margin-bottom: 10px;
        }

        .logo-section h2 {
            font-size: 21px;
            line-height: 1.25;
            margin-bottom: 8px;
        }

        .logo-section p {
            font-size: 13px;
        }

        .menu {
            margin-top: 22px;
        }

        .menu a {
            display: flex;
            align-items: center;
            gap: 13px;
            padding: 13px 18px;
            margin-bottom: 5px;
            border-radius: 9px;
            color: white;
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
        }

        .menu a:hover,
        .menu a.active {
            background: rgba(255,255,255,0.16);
        }

        .menu-icon {
            width: 20px;
            text-align: center;
        }

        /* CONTENT */
        .main {
            margin-left: 244px;
            width: calc(100% - 244px);
            min-height: 100vh;
        }

        /* HEADER */
        .header {
            height: 72px;
            background: white;
            border-bottom: 1px solid #e5e9ef;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 32px;
        }

        .header-title {
            font-size: 21px;
            font-weight: 700;
            color: #173f68;
        }

        .profile {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .profile-circle {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            background: #e8f2fa;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            color: #173f68;
        }

        .profile-info {
            line-height: 1.3;
        }

        .profile-name {
            font-weight: 700;
            font-size: 14px;
        }

        .profile-role {
            font-size: 12px;
            color: #7b8794;
        }

        .profile-arrow {
            color: #708090;
            margin-left: 3px;
        }

        /* PAGE */
        .page {
            padding: 34px;
        }

        .page-title {
            font-size: 27px;
            color: #173f68;
            margin-bottom: 8px;
        }

        .page-description {
            color: #66809a;
            font-size: 14px;
            margin-bottom: 25px;
        }

        /* CARD */
        .card {
            background: white;
            border-radius: 13px;
            padding: 25px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.04);
        }

        .card-title {
            font-size: 19px;
            font-weight: 700;
            color: #173f68;
            margin-bottom: 5px;
        }

        .card-description {
            color: #7990a5;
            font-size: 13px;
            margin-bottom: 20px;
        }

        /* TABLE */
        .table-wrapper {
            width: 100%;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead th {
            background: #eaf7f0;
            color: #176044;
            font-size: 13px;
            font-weight: 700;
            text-align: left;
            padding: 13px 14px;
        }

        tbody td {
            padding: 14px;
            border-bottom: 1px solid #edf0f3;
            font-size: 13px;
            color: #425b72;
        }

        tbody tr:hover {
            background: #fafcfd;
        }

        /* STATUS */
        .status {
            display: inline-block;
            padding: 6px 11px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }

        .status-diproses {
            background: #fff3cd;
            color: #856404;
        }

        .status-selesai {
            background: #d4edda;
            color: #155724;
        }

        .status-ditolak {
            background: #f8d7da;
            color: #721c24;
        }

        /* BUTTON */
        .btn {
            display: inline-block;
            padding: 7px 13px;
            border-radius: 6px;
            text-decoration: none;
            font-size: 12px;
            font-weight: 600;
        }

        .btn-detail {
            background: #e8f2fa;
            color: #18527f;
        }

        .btn-detail:hover {
            background: #d8eaf7;
        }

        .empty {
            text-align: center;
            padding: 35px;
            color: #7990a5;
            font-size: 13px;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 200px;
            }

            .main {
                margin-left: 200px;
                width: calc(100% - 200px);
            }

            .page {
                padding: 20px;
            }

            .header {
                padding: 0 20px;
            }
        }
    </style>
</head>

<body>

<div class="layout">

    {{-- SIDEBAR --}}
    <aside class="sidebar">

        <div class="logo-section">

            {{-- Kalau logo desa sudah ada, ganti src ini --}}
            <img src="{{ asset('images/logo-kepahiang.png') }}" alt="Logo Desa">

            <h2>DESA<br>SUKAMERINDU</h2>
            <p>Sistem Informasi Desa</p>

        </div>

        <nav class="menu">

            <a href="{{ route('sekdes.dashboard') }}"
               class="{{ request()->routeIs('sekdes.dashboard') ? 'active' : '' }}">
                <span class="menu-icon">🏠</span>
                Dashboard
            </a>

            <a href="{{ route('sekdes.pengajuan') }}"
               class="{{ request()->routeIs('sekdes.pengajuan') ? 'active' : '' }}">
                <span class="menu-icon">📄</span>
                Pengajuan Surat
            </a>

            <a href="#">
                <span class="menu-icon">👥</span>
                Data Warga
            </a>

            <a href="#">
                <span class="menu-icon">📢</span>
                Informasi
            </a>

        </nav>

    </aside>


    {{-- MAIN --}}
    <main class="main">

        {{-- HEADER --}}
        <header class="header">

            <div class="header-title">
                Dashboard Sekretaris Desa
            </div>

            @auth
                <div class="profile">

                    <div class="profile-circle">
                        {{ strtoupper(substr(auth()->user()->name, 0, 2)) }}
                    </div>

                    <div class="profile-info">
                        <div class="profile-name">
                            {{ auth()->user()->name }}
                        </div>

                        <div class="profile-role">
                            Sekretaris Desa
                        </div>
                    </div>

                    <span class="profile-arrow">▼</span>

                </div>
            @endauth

        </header>


        {{-- ISI HALAMAN --}}
        <section class="page">
            @yield('content')
        </section>

    </main>

</div>

</body>
</html>
