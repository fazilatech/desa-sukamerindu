<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        Profil Desa - {{ $profilDesa->nama_desa ?? 'Desa Sukamerindu' }}
    </title>

    <link
        rel="stylesheet"
        href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    >

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
            font-family: "Segoe UI", Arial, sans-serif;
            background: #f3f6f9;
            color: #10233f;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        .layout {
            min-height: 100vh;
            display: flex;
        }

        /* =========================
           SIDEBAR KEPALA DESA
        ========================== */

        .sidebar {
            width: 287px;
            min-height: 100vh;
            background: #096b35;
            color: white;
            padding: 36px 15px 24px;
            display: flex;
            flex-direction: column;
            flex-shrink: 0;
        }

        .brand {
            text-align: center;
            padding-bottom: 28px;
            border-bottom: 1px solid rgba(255,255,255,.25);
        }

        .brand-logo {
            width: 102px;
            height: 102px;
            object-fit: contain;
            background: white;
            border-radius: 8px;
            padding: 8px;
            display: block;
            margin: 0 auto 20px;
        }

        .brand h2 {
            margin: 0;
            font-size: 22px;
            font-weight: 800;
            letter-spacing: .3px;
        }

        .brand p {
            margin: 8px 0 0;
            font-size: 15px;
            color: rgba(255,255,255,.9);
        }

        .menu {
            margin-top: 28px;
        }

        .menu > a,
        .menu-dropdown > summary {
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
            cursor: pointer;
            list-style: none;
        }

        .menu > a:hover,
        .menu-dropdown > summary:hover,
        .menu > a.active,
        .menu-dropdown[open] > summary {
            background: rgba(255,255,255,.16);
        }

        .menu > a.active {
            border: 1px solid rgba(255,255,255,.55);
        }

        .menu-icon {
            width: 22px;
            text-align: center;
            font-size: 17px;
            flex-shrink: 0;
        }

        .menu-dropdown {
            margin-bottom: 8px;
        }

        .menu-dropdown > summary::-webkit-details-marker {
            display: none;
        }

        .menu-dropdown > summary::after {
            content: "▼";
            margin-left: auto;
            font-size: 11px;
        }

        .menu-dropdown[open] > summary::after {
            transform: rotate(180deg);
        }

        .menu-dropdown-menu {
            padding: 2px 0 6px 37px;
        }

        .menu-dropdown-menu a {
            display: block;
            padding: 10px 14px;
            margin-bottom: 3px;
            border-radius: 7px;
            color: rgba(255,255,255,.92);
            font-size: 14px;
            font-weight: 500;
        }

        .menu-dropdown-menu a:hover,
        .menu-dropdown-menu a.active {
            background: rgba(255,255,255,.10);
        }

        /* =========================
           MAIN + TOPBAR
        ========================== */

        .main {
            flex: 1;
            min-width: 0;
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
        }

        .profile {
            display: flex;
            align-items: center;
            gap: 12px;
            cursor: pointer;
            padding: 6px 10px;
            border-radius: 12px;
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

        .profile-dropdown {
            position: absolute;
            top: calc(100% + 10px);
            right: 0;
            width: 180px;
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(15,23,42,.12);
            padding: 8px;
            display: none;
            z-index: 1000;
        }

        .profile-dropdown.show {
            display: block;
        }

        .dropdown-profile,
        .dropdown-logout {
            display: block;
            width: 100%;
            padding: 11px 12px;
            border-radius: 8px;
            text-align: left;
            font-family: inherit;
            font-size: 14px;
            font-weight: 600;
        }

        .dropdown-profile:hover {
            background: #f3f4f6;
        }

        .dropdown-logout {
            border: none;
            background: transparent;
            color: #dc2626;
            cursor: pointer;
        }

        .dropdown-logout:hover {
            background: #fef2f2;
        }

        /* =========================
           CONTENT
        ========================== */

        .content {
            padding: 48px 38px 70px;
        }

        .profile-page {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
        }

        .page-header {
            margin-bottom: 28px;
        }

        .page-header h1 {
            margin: 0;
            font-size: 32px;
            font-weight: 800;
            color: #10233f;
        }

        .page-header p {
            margin: 8px 0 0;
            color: #66809d;
            font-size: 15px;
            line-height: 1.6;
        }

        .card {
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 16px;
            padding: 28px;
            margin-bottom: 24px;
            box-shadow: 0 4px 15px rgba(15,23,42,.04);
        }

        .card-title {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 18px;
        }

        .card-title .icon {
            width: 42px;
            height: 42px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            background: #dcfce7;
            font-size: 21px;
            flex-shrink: 0;
        }

        .card-title h2 {
            margin: 0;
            font-size: 22px;
            color: #006b3c;
            font-weight: 800;
        }

        .card p {
            color: #64748b;
            font-size: 15px;
            line-height: 1.8;
            margin: 0 0 12px;
        }

        .card p:last-child {
            margin-bottom: 0;
        }

        /* =========================
           INFORMASI DESA
        ========================== */

        .info-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 18px;
        }

        .info-item {
            padding: 20px;
            background: #f8fafc;
            border-radius: 12px;
            border: 1px solid #e5e7eb;
        }

        .info-item strong {
            display: block;
            color: #006b3c;
            font-size: 14px;
            margin-bottom: 7px;
        }

        .info-item span {
            color: #64748b;
            font-size: 14px;
            line-height: 1.6;
        }

        /* =========================
           APARATUR DESA
        ========================== */

        .aparatur-carousel {
            position: relative;
            overflow: hidden;
        }

        .aparatur-track {
            display: flex;
            gap: 16px;
            overflow-x: auto;
            scroll-behavior: smooth;
            scroll-snap-type: x mandatory;
            scrollbar-width: none;
            padding: 2px 1px 8px;
        }

        .aparatur-track::-webkit-scrollbar {
            display: none;
        }

        .aparatur-item {
            flex: 0 0 calc((100% - 48px) / 4);
            min-width: 0;
            scroll-snap-align: start;
            border-radius: 10px;
            overflow: hidden;
            background: white;
            border: 1px solid #e5e7eb;
            box-shadow: 0 4px 12px rgba(15,23,42,.06);
        }

        .aparatur-photo {
            width: 100%;
            aspect-ratio: 3 / 4;
            object-fit: cover;
            display: block;
            background: #e5e7eb;
        }

        .aparatur-photo-placeholder {
            width: 100%;
            aspect-ratio: 3 / 4;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #dcfce7;
            color: #087238;
            font-size: 48px;
            font-weight: 800;
        }

        .aparatur-info {
            padding: 13px 10px 15px;
            text-align: center;
            min-height: 82px;
        }

        .aparatur-jabatan {
            color: #006b3c;
            font-size: 13px;
            font-weight: 700;
            line-height: 1.4;
            margin-bottom: 5px;
        }

        .aparatur-nama {
            color: #475569;
            font-size: 13px;
            font-weight: 600;
            line-height: 1.45;
        }

        .aparatur-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 5;
            width: 38px;
            height: 38px;
            border: none;
            border-radius: 50%;
            background: #087238;
            color: white;
            font-size: 25px;
            line-height: 38px;
            text-align: center;
            cursor: pointer;
            box-shadow: 0 4px 12px rgba(15,23,42,.18);
        }

        .aparatur-btn:hover {
            background: #065c2e;
        }

        .aparatur-btn.prev {
            left: 7px;
        }

        .aparatur-btn.next {
            right: 7px;
        }

        /* =========================
           MAPS
        ========================== */

        .maps-grid {
            display: grid;
            grid-template-columns: 1fr 1.55fr;
            gap: 18px;
        }

        .map-box {
            position: relative;
            min-width: 0;
            overflow: hidden;
            border: 1px solid #d1d5db;
            border-radius: 12px;
            background: white;
        }

        .map-title {
            position: absolute;
            top: 16px;
            left: 0;
            z-index: 1000;
            padding: 9px 18px 10px 14px;
            background: #65a914;
            color: white;
            font-size: 18px;
            font-weight: 800;
            text-transform: uppercase;
            text-shadow: 1px 1px 2px rgba(0,0,0,.45);
            clip-path: polygon(0 0,100% 0,100% 100%,5% 100%,0 70%);
        }

        .map-title::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: -9px;
            border-top: 9px solid #2f6500;
            border-right: 9px solid transparent;
        }

        .desa-map {
            width: 100%;
            height: 390px;
            background: #e8eef0;
        }

        .map-info {
            min-height: 72px;
            padding: 12px 14px;
            background: white;
            color: #475569;
            font-size: 13px;
            line-height: 1.6;
        }

        .map-info strong {
            color: #006b3c;
        }

        .leaflet-container {
            font-family: "Segoe UI", Arial, sans-serif;
        }

        /* =========================
           RESPONSIVE
        ========================== */

        @media (max-width: 1000px) {
            .sidebar {
                width: 240px;
            }

            .content {
                padding: 35px 25px 60px;
            }

            .aparatur-item {
                flex-basis: calc((100% - 32px) / 3);
            }

            .maps-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 700px) {
            .layout {
                display: block;
            }

            .sidebar {
                width: 100%;
                min-height: auto;
            }

            .topbar {
                height: auto;
                padding: 18px 20px;
            }

            .content {
                padding: 25px 18px 50px;
            }

            .info-grid {
                grid-template-columns: 1fr;
            }

            .aparatur-item {
                flex-basis: calc((100% - 16px) / 2);
            }
        }

        @media (max-width: 420px) {
            .aparatur-item {
                flex-basis: 82%;
            }

            .profile-role {
                display: none;
            }
        }
    </style>
</head>

<body>

<div class="layout">

    {{-- =====================================================
         SIDEBAR KEPALA DESA
    ====================================================== --}}
    <aside class="sidebar">

        <div class="brand">
            <img
                src="https://cdn.phototourl.com/free/2026-08-19-ada8088c-135b-4f75-94c5-ef27a75114f8.png"
                alt="Logo Desa Sukamerindu"
                class="brand-logo"
            >

            <h2>DESA SUKAMERINDU</h2>
            <p>Sistem Informasi Desa</p>
        </div>

        <nav class="menu">

            <a
                href="{{ route('kepala-desa.dashboard') }}"
                class="{{ request()->routeIs('kepala-desa.dashboard') ? 'active' : '' }}"
            >
                <span class="menu-icon">🏠</span>
                <span>Dashboard</span>
            </a>

            <a
                href="{{ route('kepala-desa.pengajuan') }}"
                class="{{ request()->routeIs('kepala-desa.pengajuan*') ? 'active' : '' }}"
            >
                <span class="menu-icon">📄</span>
                <span>Pengajuan Surat</span>
            </a>

            <a
                href="{{ route('kepala-desa.data-warga') }}"
                class="{{ request()->routeIs('kepala-desa.data-warga*') ? 'active' : '' }}"
            >
                <span class="menu-icon">👥</span>
                <span>Data Warga</span>
            </a>

            <details
                class="menu-dropdown"
                {{ request()->routeIs('kepala-desa.informasi*', 'kepala-desa.agenda*') ? 'open' : '' }}
            >
                <summary>
                    <span class="menu-icon">📢</span>
                    <span>Pengumuman</span>
                </summary>

                <div class="menu-dropdown-menu">
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
            </details>

            <details class="menu-dropdown" open>
                <summary>
                    <span class="menu-icon">📋</span>
                    <span>Perihal</span>
                </summary>

                <div class="menu-dropdown-menu">

                    <a
                        href="{{ route('kepala-desa.perihal.profil-desa') }}"
                        class="active"
                    >
                        Profil Desa
                    </a>

                    <a href="{{ route('kepala-desa.perihal.profil-desa') }}">
                        Visi &amp; Misi
                    </a>

                    <a href="{{ route('kepala-desa.perihal.struktur') }}">
                        Struktur Pemerintahan
                    </a>

                </div>
            </details>

        </nav>
    </aside>

    {{-- =====================================================
         MAIN
    ====================================================== --}}
    <main class="main">

        <header class="topbar">

            <h2 class="topbar-title">
                Profil Desa
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

        <section class="content">

            <div class="profile-page">

                <div class="page-header">
                    <h1>Profil Desa</h1>

                    <p>
                        Informasi umum mengenai
                        {{ $profilDesa->nama_desa ?? 'Desa Sukamerindu' }}
                        dan pemerintahan desa.
                    </p>
                </div>

                {{-- TENTANG DESA --}}
                <section class="card">

                    <div class="card-title">
                        <div class="icon">🏛️</div>

                        <h2>
                            Tentang
                            {{ $profilDesa->nama_desa ?? 'Desa Sukamerindu' }}
                        </h2>
                    </div>

                    <p>
                        {{ $profilDesa->tentang_desa ?? 'Desa Sukamerindu merupakan salah satu desa yang berada di wilayah Kabupaten Kepahiang. Desa ini memiliki masyarakat yang beragam serta mengembangkan berbagai potensi desa untuk mendukung kesejahteraan masyarakat.' }}
                    </p>

                    <p>
                        {{ $profilDesa->deskripsi_sistem ?? 'Melalui Sistem Informasi Desa Sukamerindu, informasi mengenai pelayanan dan kegiatan desa dapat disampaikan kepada masyarakat secara lebih mudah dan terintegrasi.' }}
                    </p>

                </section>

                {{-- INFORMASI DESA --}}
                <section class="card">

                    <div class="card-title">
                        <div class="icon">📋</div>
                        <h2>Informasi Desa</h2>
                    </div>

                    <div class="info-grid">

                        <div class="info-item">
                            <strong>Nama Desa</strong>
                            <span>
                                {{ $profilDesa->nama_desa ?? 'Desa Sukamerindu' }}
                            </span>
                        </div>

                        <div class="info-item">
                            <strong>Kabupaten</strong>
                            <span>
                                {{ $profilDesa->kabupaten ?? 'Kepahiang' }}
                            </span>
                        </div>

                        <div class="info-item">
                            <strong>Provinsi</strong>
                            <span>
                                {{ $profilDesa->provinsi ?? 'Bengkulu' }}
                            </span>
                        </div>

                        <div class="info-item">
                            <strong>Sistem Informasi</strong>
                            <span>
                                {{ $profilDesa->sistem_informasi ?? 'Sistem Informasi Desa Sukamerindu' }}
                            </span>
                        </div>

                    </div>
                </section>

                {{-- PEMERINTAHAN DESA --}}
                <section class="card">

                    <div class="card-title">
                        <div class="icon">👥</div>
                        <h2>Pemerintahan Desa</h2>
                    </div>

                    <p>
                        {{ $profilDesa->pemerintahan_desa ?? 'Pemerintahan Desa Sukamerindu berperan dalam memberikan pelayanan administrasi kepada masyarakat serta mengelola berbagai kegiatan dan program pembangunan desa.' }}
                    </p>

                    <p>
                        {{ $profilDesa->informasi_pemerintahan ?? 'Informasi mengenai perangkat desa, pelayanan administrasi, dan kegiatan desa dapat diakses melalui Sistem Informasi Desa.' }}
                    </p>

                </section>

                {{-- APARATUR DESA --}}
                <section class="card">

                    <div class="card-title">
                        <div class="icon">👤</div>
                        <h2>Aparatur Desa</h2>
                    </div>

                    <div class="aparatur-carousel">

                        <button
                            type="button"
                            class="aparatur-btn prev"
                            aria-label="Geser ke kiri"
                            onclick="geserAparatur(-1)"
                        >
                            ‹
                        </button>

                        <div
                            class="aparatur-track"
                            id="aparaturTrack"
                        >

                            @forelse($aparatur as $item)

                                <div class="aparatur-item">

                                    @if($item->foto)
                                        <img
                                            class="aparatur-photo"
                                            src="{{ asset('storage/' . $item->foto) }}"
                                            alt="{{ $item->nama }}"
                                        >
                                    @else
                                        <div class="aparatur-photo-placeholder">
                                            {{ strtoupper(substr($item->nama, 0, 1)) }}
                                        </div>
                                    @endif

                                    <div class="aparatur-info">

                                        <div class="aparatur-jabatan">
                                            {{ $item->jabatan }}
                                        </div>

                                        <div class="aparatur-nama">
                                            {{ $item->nama }}
                                        </div>

                                    </div>

                                </div>

                            @empty

                                <div
                                    style="
                                        width:100%;
                                        padding:30px;
                                        text-align:center;
                                        color:#64748b;
                                    "
                                >
                                    Belum ada data aparatur desa.
                                </div>

                            @endforelse

                        </div>

                        <button
                            type="button"
                            class="aparatur-btn next"
                            aria-label="Geser ke kanan"
                            onclick="geserAparatur(1)"
                        >
                            ›
                        </button>

                    </div>

                </section>

                {{-- LOKASI DESA --}}
                <section class="card">

                    <div class="card-title">
                        <div class="icon">📍</div>
                        <h2>Lokasi Desa</h2>
                    </div>

                    <div class="maps-grid">

                        <div class="map-box">

                            <div class="map-title">
                                Lokasi Desa
                            </div>

                            <div
                                id="mapLokasiDesa"
                                class="desa-map"
                            ></div>

                            <div class="map-info">
                                <strong>Desa Sukamerindu</strong><br>
                                Kecamatan Kepahiang, Kabupaten Kepahiang,
                                Provinsi Bengkulu
                            </div>

                        </div>

                        <div class="map-box">

                            <div class="map-title">
                                Wilayah Desa
                            </div>

                            <div
                                id="mapWilayahDesa"
                                class="desa-map"
                            ></div>

                            <div class="map-info">
                                <strong>Wilayah Desa Sukamerindu</strong><br>
                                Peta dapat digunakan untuk melihat posisi
                                Desa Sukamerindu dan lingkungan di sekitarnya.
                            </div>

                        </div>

                    </div>

                </section>

            </div>

        </section>

    </main>

</div>

<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<script>
    function toggleProfileDropdown() {
        const dropdown = document.getElementById('profileDropdown');

        if (dropdown) {
            dropdown.classList.toggle('show');
        }
    }

    document.addEventListener('click', function (event) {
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

    function geserAparatur(arah) {
        const track = document.getElementById('aparaturTrack');

        if (!track) {
            return;
        }

        const item = track.querySelector('.aparatur-item');

        if (!item) {
            return;
        }

        const jarak = item.getBoundingClientRect().width + 16;

        track.scrollBy({
            left: arah * jarak,
            behavior: 'smooth'
        });
    }

    document.addEventListener('DOMContentLoaded', function () {

        const latitude = -3.6393833;
        const longitude = 102.6103233;

        const lokasiMap = L.map('mapLokasiDesa', {
            scrollWheelZoom: true,
            zoomControl: true
        }).setView([latitude, longitude], 15);

        const wilayahMap = L.map('mapWilayahDesa', {
            scrollWheelZoom: true,
            zoomControl: true
        }).setView([latitude, longitude], 14);

        const satelliteLokasi = L.tileLayer(
            'https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}',
            {
                maxZoom: 19,
                attribution: 'Tiles &copy; Esri'
            }
        );

        const streetLokasi = L.tileLayer(
            'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
            {
                maxZoom: 19,
                attribution: '&copy; OpenStreetMap contributors'
            }
        );

        const satelliteWilayah = L.tileLayer(
            'https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}',
            {
                maxZoom: 19,
                attribution: 'Tiles &copy; Esri'
            }
        );

        const streetWilayah = L.tileLayer(
            'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
            {
                maxZoom: 19,
                attribution: '&copy; OpenStreetMap contributors'
            }
        );

        satelliteLokasi.addTo(lokasiMap);
        satelliteWilayah.addTo(wilayahMap);

        L.circleMarker(
            [latitude, longitude],
            {
                radius: 9,
                fillColor: '#1683d8',
                color: '#ffffff',
                weight: 3,
                opacity: 1,
                fillOpacity: 1
            }
        )
        .addTo(lokasiMap)
        .bindPopup(
            '<strong>Desa Sukamerindu</strong><br>' +
            'Kecamatan Kepahiang<br>' +
            'Kabupaten Kepahiang<br>' +
            'Provinsi Bengkulu'
        );

        L.circleMarker(
            [latitude, longitude],
            {
                radius: 8,
                fillColor: '#1683d8',
                color: '#ffffff',
                weight: 3,
                opacity: 1,
                fillOpacity: 1
            }
        )
        .addTo(wilayahMap)
        .bindPopup(
            '<strong>Desa Sukamerindu</strong><br>' +
            'Kecamatan Kepahiang<br>' +
            'Kabupaten Kepahiang<br>' +
            'Provinsi Bengkulu'
        );

        L.control.layers(
            {
                'Satelit': satelliteLokasi,
                'Peta Jalan': streetLokasi
            },
            null,
            {
                collapsed: true
            }
        ).addTo(lokasiMap);

        L.control.layers(
            {
                'Satelit': satelliteWilayah,
                'Peta Jalan': streetWilayah
            },
            null,
            {
                collapsed: true
            }
        ).addTo(wilayahMap);

        L.control.scale({
            imperial: false,
            position: 'bottomleft'
        }).addTo(lokasiMap);

        L.control.scale({
            imperial: false,
            position: 'bottomleft'
        }).addTo(wilayahMap);

        setTimeout(function () {
            lokasiMap.invalidateSize();
            wilayahMap.invalidateSize();
        }, 300);
    });
</script>

</body>
</html>
