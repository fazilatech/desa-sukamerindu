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


        .search-box {
            width: 200px;

            padding:
                10px
                13px;

            border:
                1px solid #d1d5db;

            border-radius: 8px;

            outline: none;

            font-family: inherit;

            font-size: 12px;
        }


        .search-box:focus {
            border-color: #087238;
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
            border: 0;
            cursor: pointer;
            font-family: inherit;

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




        .detail-modal { position: fixed; inset: 0; background: rgba(15,23,42,.55); display:none; align-items:center; justify-content:center; padding:24px; z-index:2000; }
        .detail-modal.show { display:flex; }
        .detail-modal-card { width:min(900px,100%); max-height:90vh; overflow-y:auto; background:#fff; border-radius:18px; box-shadow:0 20px 60px rgba(15,23,42,.22); }
        .detail-modal-header { display:flex; align-items:center; justify-content:space-between; padding:22px 26px; border-bottom:1px solid #e5e7eb; position:sticky; top:0; background:#fff; z-index:2; }
        .detail-modal-header h2 { margin:0; color:#10233f; font-size:22px; font-weight:800; }
        .btn-close-detail { width:38px; height:38px; border:0; border-radius:9px; background:#f1f5f9; color:#526b85; font-size:22px; cursor:pointer; }
        .detail-profile { display:flex; align-items:center; gap:20px; padding:26px; }
        .detail-avatar { width:105px; height:105px; flex-shrink:0; border-radius:16px; background:#dcfce7; color:#087238; display:flex; align-items:center; justify-content:center; font-size:30px; font-weight:800; }
        .detail-profile h3 { margin:0 0 8px; color:#10233f; font-size:25px; }
        .detail-gender { display:inline-block; padding:5px 11px; border-radius:999px; background:#f1f5f9; color:#526b85; font-size:12px; font-weight:700; }
        .detail-section { padding:0 26px 24px; }
        .detail-section-title { margin:0 0 14px; padding-bottom:10px; border-bottom:1px solid #e5e7eb; color:#087238; font-size:17px; font-weight:800; }
        .detail-grid { display:grid; grid-template-columns:repeat(2,minmax(0,1fr)); gap:0 30px; }
        .detail-item { display:grid; grid-template-columns:150px 18px 1fr; gap:6px; padding:9px 0; color:#526b85; font-size:14px; }
        .detail-label { font-weight:600; }
        .detail-value { color:#10233f; font-weight:600; word-break:break-word; }
        .detail-modal-footer { display:flex; justify-content:flex-end; padding:18px 26px; border-top:1px solid #e5e7eb; }
        .btn-close-footer { border:0; border-radius:8px; background:#087238; color:#fff; padding:10px 18px; font-family:inherit; font-size:13px; font-weight:700; cursor:pointer; }
        @media (max-width:700px) { .detail-modal{padding:10px}.detail-grid{grid-template-columns:1fr}.detail-section{padding:0 20px 20px}.detail-modal-header,.detail-modal-footer{padding-left:20px;padding-right:20px}.detail-item{grid-template-columns:125px 18px 1fr}.detail-profile{padding:20px} }

        /* =====================================================
           RESPONSIVE
        ===================================================== */

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


            .stats {
                grid-template-columns: 1fr;
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


            .table-header {
                flex-direction: column;

                align-items: flex-start;

                gap: 12px;
            }


            .search-box {
                width: 100%;
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
                Data Warga
            </h2>



            <div class="profile-area">


                <div
                    class="profile"
                    onclick="toggleProfileDropdown()"
                >

                    <div class="avatar">

                        {{ strtoupper(
                            substr(
                                auth()->user()->name,
                                0,
                                2
                            )
                        ) }}

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


                    <input
                        type="text"
                        id="searchBox"
                        class="search-box"
                        placeholder="Cari nama atau NIK..."
                    >

                </div>



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

                                    <tr>

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
                                                onclick="openDetail(@js($item))"
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


    </main>


</div>




<div id="detailModal" class="detail-modal" onclick="closeDetail(event)">
    <div class="detail-modal-card" onclick="event.stopPropagation()">
        <div class="detail-modal-header">
            <h2>Detail Data Warga</h2>
            <button type="button" class="btn-close-detail" onclick="closeDetail()">&times;</button>
        </div>
        <div class="detail-profile">
            <div id="detailAvatar" class="detail-avatar">
                <img
                    id="detailFoto"
                    src=""
                    alt="Foto Warga"
                    style="width:100%;height:100%;object-fit:cover;border-radius:16px;display:none;"
                >
                <span id="detailAvatarText">--</span>
            </div>
            <div>
                <h3 id="detailNama">-</h3>
                <span id="detailGender" class="detail-gender">-</span>
            </div>
        </div>
        <div class="detail-section">
            <h3 class="detail-section-title">Informasi Pribadi</h3>
            <div class="detail-grid">
                <div class="detail-item"><span class="detail-label">NIK</span><span>:</span><span id="detailNik" class="detail-value">-</span></div>
                <div class="detail-item"><span class="detail-label">No. KK</span><span>:</span><span id="detailNoKk" class="detail-value">-</span></div>
                <div class="detail-item"><span class="detail-label">Tempat Lahir</span><span>:</span><span id="detailTempatLahir" class="detail-value">-</span></div>
                <div class="detail-item"><span class="detail-label">Tanggal Lahir</span><span>:</span><span id="detailTanggalLahir" class="detail-value">-</span></div>
                <div class="detail-item"><span class="detail-label">Agama</span><span>:</span><span id="detailAgama" class="detail-value">-</span></div>
                <div class="detail-item"><span class="detail-label">Pekerjaan</span><span>:</span><span id="detailPekerjaan" class="detail-value">-</span></div>
                <div class="detail-item"><span class="detail-label">Status Perkawinan</span><span>:</span><span id="detailStatus" class="detail-value">-</span></div>
                <div class="detail-item"><span class="detail-label">Kewarganegaraan</span><span>:</span><span id="detailKewarganegaraan" class="detail-value">-</span></div>
            </div>
        </div>
        <div class="detail-section">
            <h3 class="detail-section-title">Informasi Kontak</h3>
            <div class="detail-grid">
                <div class="detail-item"><span class="detail-label">No. HP</span><span>:</span><span id="detailHp" class="detail-value">-</span></div>
                <div class="detail-item"><span class="detail-label">Email</span><span>:</span><span id="detailEmail" class="detail-value">-</span></div>
            </div>
        </div>
        <div class="detail-section">
            <h3 class="detail-section-title">Informasi Alamat</h3>
            <div class="detail-grid">
                <div class="detail-item"><span class="detail-label">Alamat</span><span>:</span><span id="detailAlamat" class="detail-value">-</span></div>
                <div class="detail-item"><span class="detail-label">RT / RW</span><span>:</span><span id="detailRtRw" class="detail-value">-</span></div>
                <div class="detail-item"><span class="detail-label">Dusun</span><span>:</span><span id="detailDusun" class="detail-value">-</span></div>
                <div class="detail-item"><span class="detail-label">Desa</span><span>:</span><span id="detailDesa" class="detail-value">Sukamerindu</span></div>
                <div class="detail-item"><span class="detail-label">Kecamatan</span><span>:</span><span id="detailKecamatan" class="detail-value">Kepahiang</span></div>
                <div class="detail-item"><span class="detail-label">Kabupaten</span><span>:</span><span id="detailKabupaten" class="detail-value">Kepahiang</span></div>
                <div class="detail-item"><span class="detail-label">Provinsi</span><span>:</span><span id="detailProvinsi" class="detail-value">Bengkulu</span></div>
            </div>
        </div>
        <div class="detail-modal-footer"><button type="button" class="btn-close-footer" onclick="closeDetail()">Tutup</button></div>
    </div>
</div>

<script>



    function valueOrDash(value) { return value !== undefined && value !== null && String(value).trim() !== '' ? String(value) : '-'; }
    function firstValue(item, keys) { for (const key of keys) { if (item && item[key] !== undefined && item[key] !== null && String(item[key]).trim() !== '') return item[key]; } return '-'; }
    function setDetail(id, value) { const el=document.getElementById(id); if(el) el.textContent=valueOrDash(value); }
    function openDetail(item) {
        const nama = firstValue(item, ['nama', 'name']);

        setDetail('detailNama', nama);
        setDetail('detailGender', firstValue(item, ['jenis_kelamin', 'gender']));
        setDetail('detailNik', item.nik);
        setDetail('detailNoKk', firstValue(item, ['no_kk', 'nokk', 'nomor_kk']));
        setDetail('detailTempatLahir', firstValue(item, ['tempat_lahir', 'birth_place']));
        setDetail('detailTanggalLahir', firstValue(item, ['tanggal_lahir', 'tgl_lahir', 'birth_date']));
        setDetail('detailAgama', item.agama);
        setDetail('detailPekerjaan', firstValue(item, ['pekerjaan', 'occupation']));
        setDetail('detailStatus', firstValue(item, ['status_perkawinan', 'status_kawin']));
        setDetail('detailKewarganegaraan', firstValue(item, ['kewarganegaraan', 'nationality']));
        setDetail('detailHp', firstValue(item, ['no_hp', 'nomor_hp', 'phone', 'telepon']));
        setDetail('detailEmail', item.email);
        setDetail('detailAlamat', item.alamat);
        setDetail('detailRtRw', firstValue(item, ['rt_rw', 'rtrw', 'rt']));
        setDetail('detailDusun', item.dusun);
        setDetail('detailDesa', firstValue(item, ['desa', 'kelurahan']) === '-' ? 'Sukamerindu' : firstValue(item, ['desa', 'kelurahan']));
        setDetail('detailKecamatan', item.kecamatan || 'Kepahiang');
        setDetail('detailKabupaten', firstValue(item, ['kabupaten', 'kota']) === '-' ? 'Kepahiang' : firstValue(item, ['kabupaten', 'kota']));
        setDetail('detailProvinsi', item.provinsi || 'Bengkulu');

        // FOTO PROFIL WARGA
        const detailFoto = document.getElementById('detailFoto');
        const detailAvatarText = document.getElementById('detailAvatarText');

        // Bisa berasal dari profile_photo / foto_profil.
        // Kalau field kosong, coba cari file berdasarkan ID warga.
        const rawPhoto = firstValue(item, ['profile_photo', 'foto_profil']);
        const wargaId = item.id ?? item.user_id ?? item.warga_id ?? null;

        const candidates = [];

        if (rawPhoto !== '-') {
            let path = String(rawPhoto).trim();

            // URL penuh
            if (/^https?:\/\//i.test(path)) {
                candidates.push(path);
            } else {
                // storage/... atau /storage/...
                if (path.startsWith('storage/')) {
                    candidates.push("{{ url('/') }}/" + path);
                } else if (path.startsWith('/storage/')) {
                    candidates.push("{{ url('/') }}" + path);
                } else if (path.startsWith('images/')) {
                    candidates.push("{{ url('/') }}/" + path);
                } else if (path.startsWith('/images/')) {
                    candidates.push("{{ url('/') }}" + path);
                } else {
                    candidates.push("{{ url('/') }}/storage/" + path);
                    candidates.push("{{ url('/') }}/" + path);
                }
            }
        }

        // Fallback jika controller menyimpan foto langsung di public/images/profile/warga_ID.ext
        if (wargaId) {
            candidates.push(
                "{{ url('/') }}/images/profile/warga_" + wargaId + ".jpg",
                "{{ url('/') }}/images/profile/warga_" + wargaId + ".jpeg",
                "{{ url('/') }}/images/profile/warga_" + wargaId + ".png"
            );
        }

        detailFoto.style.display = 'none';
        detailAvatarText.style.display = 'block';
        detailAvatarText.textContent = nama !== '-' ? nama.substring(0, 2).toUpperCase() : '--';

        let fotoIndex = 0;

        function tryNextFoto() {
            if (fotoIndex >= candidates.length) return;

            const url = candidates[fotoIndex++];
            detailFoto.onload = function() {
                detailFoto.style.display = 'block';
                detailAvatarText.style.display = 'none';
            };
            detailFoto.onerror = function() {
                detailFoto.style.display = 'none';
                detailAvatarText.style.display = 'block';
                tryNextFoto();
            };
            detailFoto.src = url;
        }

        if (candidates.length) {
            tryNextFoto();
        }

        document.getElementById('detailModal').classList.add('show');
        document.body.style.overflow = 'hidden';
    }
    function closeDetail(event) { if(event && event.target!==event.currentTarget) return; document.getElementById('detailModal').classList.remove('show'); document.body.style.overflow=''; }
    document.addEventListener('keydown',function(event){ if(event.key==='Escape') closeDetail(); });

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

    const searchBox =
        document.getElementById(
            'searchBox'
        );


    searchBox.addEventListener(
        'input',
        function() {

            const keyword =
                this.value
                    .toLowerCase()
                    .trim();


            const rows =
                document.querySelectorAll(
                    '#wargaTable tr'
                );


            rows.forEach(
                function(row) {

                    const text =
                        row.textContent
                            .toLowerCase();


                    if (
                        !keyword ||
                        text.includes(keyword)
                    ) {

                        row.style.display = '';

                    } else {

                        row.style.display = 'none';

                    }

                }
            );

        }
    );



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


</script>


</body>

</html>
