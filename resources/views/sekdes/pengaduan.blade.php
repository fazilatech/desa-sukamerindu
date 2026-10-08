<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Pengaduan Warga - Sekretaris Desa
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
           SIDEBAR SEKDES
           DIBUAT SEPERTI SIDEBAR KEPALA DESA
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
            border-bottom: 1px solid rgba(255,255,255,0.25);
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
           MENU SIDEBAR
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
            background: rgba(255,255,255,0.12);
            color: #ffffff;
        }


        .menu a.active {
            background: rgba(255,255,255,0.16);
            color: #ffffff;

            border: 1px solid rgba(255,255,255,0.45);
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
        ===================================================== */

        .menu-dropdown {
            position: relative;
        }


        .menu-dropdown-button {
            width: 100%;
            border: none;
            background: transparent;
            color: #ffffff;
            padding: 14px 18px;
            border-radius: 9px;
            font-family: Arial, sans-serif;
            font-size: 14px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 12px;
            cursor: pointer;
            text-align: left;
            transition: 0.2s;
        }


        .menu-dropdown-button:hover {
            background: rgba(255,255,255,0.12);
            color: #ffffff;
        }


        .menu-dropdown-button.active {
            background: rgba(255,255,255,0.16);
            color: #ffffff;
            border: 1px solid rgba(255,255,255,0.45);
        }


        .dropdown-arrow {
            margin-left: auto;
            font-size: 10px;
            transition: transform 0.2s ease;
        }


        .menu-dropdown.open .dropdown-arrow {
            transform: rotate(180deg);
        }


        .menu-dropdown-content {
            display: none;
            margin: 2px 0 4px;
            padding: 7px;
            background: #ffffff;
            border-radius: 9px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.12);
        }


        .menu-dropdown.open .menu-dropdown-content {
            display: block;
        }


        .menu-dropdown-content a {
            display: flex;
            align-items: center;
            gap: 9px;
            width: 100%;
            padding: 10px 11px;
            border-radius: 7px;
            color: #173f67;
            text-decoration: none;
            font-size: 13px;
            font-weight: 600;
            transition: 0.2s;
        }


        .menu-dropdown-content a:hover {
            background: #edf8f2;
            color: #08733a;
        }


        /* =====================================================
           MAIN
        ===================================================== */

        .main {
            margin-left: 255px;
            width: calc(100% - 255px);
        }


        /* =====================================================
           TOPBAR
        ===================================================== */

        .topbar {
            height: 75px;
            background: #ffffff;
            border-bottom: 1px solid #e5e7eb;

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

            top: calc(100% + 10px);
            right: 0;

            width: 170px;

            background: #ffffff;

            border: 1px solid #e5e7eb;
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


        .welcome {
            margin-bottom: 25px;
        }


        .welcome h1 {
            font-size: 27px;
            color: #17456f;

            margin-bottom: 7px;
        }


        .welcome p {
            font-size: 14px;
            color: #6b7f94;
        }


        /* =====================================================
           STATISTICS
        ===================================================== */

        .stats {
            display: grid;

            grid-template-columns:
                repeat(4, 1fr);

            gap: 18px;

            margin-bottom: 28px;
        }


        .stat-card {
            background: #ffffff;

            border: 1px solid #e5e7eb;

            border-radius: 13px;

            padding: 22px;

            box-shadow:
                0 3px 12px rgba(0,0,0,0.03);
        }


        .stat-icon {
            width: 42px;
            height: 42px;

            border-radius: 10px;

            background: #edf5fb;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 19px;

            margin-bottom: 15px;
        }


        .stat-card h3 {
            font-size: 13px;

            color: #718398;

            margin-bottom: 8px;
        }


        .stat-card strong {
            font-size: 27px;
            color: #173f67;
        }


        /* =====================================================
           CARD
        ===================================================== */

        .card {
            background: #ffffff;

            border: 1px solid #e5e7eb;

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
        ===================================================== */

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


        /* =====================================================
           STATUS
        ===================================================== */

        .status {
            display: inline-block;

            padding: 6px 10px;

            border-radius: 20px;

            font-size: 11px;

            font-weight: 700;
        }


        .status-menunggu {
            background: #fff4d6;
            color: #9a6b00;
        }


        .status-diproses {
            background: #e8f2ff;
            color: #23609b;
        }


        .status-selesai {
            background: #dcf8e8;
            color: #17824d;
        }


        /* =====================================================
           BUTTON
        ===================================================== */

        .btn {
            display: inline-block;

            padding: 8px 13px;

            border-radius: 7px;

            text-decoration: none;

            font-size: 12px;

            font-weight: 700;

            background: #17456f;

            color: #ffffff;
        }


        .btn:hover {
            background: #123956;
        }


        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 1000px) {

            .stats {
                grid-template-columns:
                    repeat(2, 1fr);
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


            {{-- AGENDA --}}

            <a
                href="{{ url('/sekdes/agenda') }}"
                class="{{ request()->is('sekdes/agenda*') ? 'active' : '' }}"
            >

                <span class="menu-icon">
                    📅
                </span>

                <span>
                    Agenda
                </span>

            </a>


            {{-- PENGADUAN --}}

            <a
                href="{{ url('/sekdes/pengaduan') }}"
                class="{{ request()->is('sekdes/pengaduan*') ? 'active' : '' }}"
            >

                <span class="menu-icon">
                    📋
                </span>

                <span>
                    Pengaduan
                </span>

            </a>


            {{-- PERIHAL --}}

            <div class="menu-dropdown" id="perihalDropdown">

                <button
                    type="button"
                    class="menu-dropdown-button"
                    onclick="togglePerihal()"
                >

                    <span class="menu-icon">
                        ℹ️
                    </span>

                    <span>
                        Perihal
                    </span>

                    <span class="dropdown-arrow">
                        ▼
                    </span>

                </button>


                <div class="menu-dropdown-content">

                    <a href="{{ route('guest.profil-desa') }}">
                        🏛️
                        <span>Profil Desa</span>
                    </a>

                    <a href="{{ route('home') }}#visi-misi">
                        🎯
                        <span>Visi &amp; Misi</span>
                    </a>

                    <a href="{{ route('home') }}#perangkat-desa">
                        👥
                        <span>Perangkat Desa</span>
                    </a>

                    <a href="{{ route('home') }}#kontak-desa">
                        📞
                        <span>Kontak Desa</span>
                    </a>

                </div>

            </div>


        </nav>

    </aside>



    <!-- =====================================================
         MAIN
    ====================================================== -->

    <main class="main">


        <!-- TOPBAR -->

        <header class="topbar">


            <div class="page-title">

                Pengaduan Warga

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

            @if(session('success'))
                <div class="alert">
                    {{ session('success') }}
                </div>
            @endif

            <div class="welcome">

                <h1>
                    Pengaduan Warga 📋
                </h1>

                <p>
                    Daftar pengaduan yang disampaikan oleh warga Desa Sukamerindu.
                </p>

            </div>

            <div class="stats">

                <div class="stat-card">
                    <div class="stat-icon">📋</div>
                    <h3>Total Pengaduan</h3>
                    <strong>{{ $totalPengaduan ?? 0 }}</strong>
                </div>

                <div class="stat-card">
                    <div class="stat-icon">⏳</div>
                    <h3>Menunggu</h3>
                    <strong>{{ $menunggu ?? 0 }}</strong>
                </div>

                <div class="stat-card">
                    <div class="stat-icon">⚙️</div>
                    <h3>Diproses</h3>
                    <strong>{{ $diproses ?? 0 }}</strong>
                </div>

                <div class="stat-card">
                    <div class="stat-icon">✅</div>
                    <h3>Selesai</h3>
                    <strong>{{ $selesai ?? 0 }}</strong>
                </div>

            </div>

            <div class="card">

                <div class="card-header">

                    <div>
                        <h2>
                            Daftar Pengaduan Warga
                        </h2>

                        <p>
                            Pengaduan terbaru akan muncul otomatis dari data warga.
                        </p>
                    </div>

                </div>

                <div class="table-wrapper">

                    <table>

                        <thead>
                            <tr>
                                <th>Nama Warga</th>
                                <th>Judul Pengaduan</th>
                                <th>Kategori</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>

                        @forelse($pengaduan as $item)

                            @php
                                $status = strtolower($item->status ?? 'menunggu');
                            @endphp

                            <tr>

                                <td>
                                    {{ $item->nama_warga ?? '-' }}
                                </td>

                                <td>
                                    <strong>
                                        {{ $item->judul }}
                                    </strong>
                                </td>

                                <td>
                                    {{ $item->kategori }}
                                </td>

                                <td>
                                    {{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y') }}
                                </td>

                                <td>

                                    @if($status === 'selesai')

                                        <span class="status status-selesai">
                                            Selesai
                                        </span>

                                    @elseif($status === 'proses')

                                        <span class="status status-diproses">
                                            Proses
                                        </span>

                                    @elseif($status === 'ditolak')

                                        <span class="status status-ditolak">
                                            Ditolak
                                        </span>

                                    @else

                                        <span class="status status-menunggu">
                                            Menunggu
                                        </span>

                                    @endif

                                </td>

                                <td>

                                    <a
                                        href="{{ route('sekdes.pengaduan.show', $item->id) }}"
                                        class="btn"
                                    >
                                        Detail
                                    </a>

                                </td>

                            </tr>

                        @empty

                            <tr>
                                <td colspan="6" style="text-align:center; padding:30px; color:#7b8da1;">
                                    Belum ada pengaduan dari warga.
                                </td>
                            </tr>

                        @endforelse

                        </tbody>

                    </table>

                </div>

            </div>

        </section>


    </main>


</div>


<script>

    function togglePerihal() {

        const dropdown = document.getElementById('perihalDropdown');

        if (!dropdown) {
            return;
        }

        dropdown.classList.toggle('open');

    }


    document.addEventListener('click', function(event) {

        const dropdown = document.getElementById('perihalDropdown');

        if (!dropdown) {
            return;
        }

        if (!dropdown.contains(event.target)) {
            dropdown.classList.remove('open');
        }

    });

</script>


</body>

</html>
