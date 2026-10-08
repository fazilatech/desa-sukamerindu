<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Detail Pengaduan - Sekretaris Desa
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
           LAMPIRAN / IMAGE PREVIEW
        ===================================================== */

        .attachment-preview {
            display: inline-flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 7px;
        }

        .attachment-thumbnail {
            width: 155px;
            height: 110px;
            object-fit: cover;
            border: 1px solid #dfe5eb;
            border-radius: 9px;
            background: #f8fafc;
            cursor: pointer;
            display: block;
            transition: transform 0.18s ease, box-shadow 0.18s ease;
        }

        .attachment-thumbnail:hover {
            transform: scale(1.02);
            box-shadow: 0 5px 16px rgba(23,69,111,0.14);
        }

        .attachment-hint {
            font-size: 12px;
            color: #7b8da1;
        }

        .attachment-modal {
            display: none;
            position: fixed;
            inset: 0;
            z-index: 9999;
            background: rgba(0,0,0,0.78);
            padding: 35px;
            align-items: center;
            justify-content: center;
        }

        .attachment-modal.show {
            display: flex;
        }

        .attachment-modal-content {
            position: relative;
            max-width: 92vw;
            max-height: 90vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .attachment-modal-image {
            display: block;
            max-width: 90vw;
            max-height: 88vh;
            object-fit: contain;
            border-radius: 8px;
            background: #ffffff;
            box-shadow: 0 10px 35px rgba(0,0,0,0.28);
        }

        .attachment-modal-close {
            position: fixed;
            top: 18px;
            right: 28px;
            width: 42px;
            height: 42px;
            border: none;
            border-radius: 50%;
            background: rgba(255,255,255,0.95);
            color: #173f67;
            font-size: 28px;
            line-height: 42px;
            text-align: center;
            cursor: pointer;
            z-index: 10001;
        }

        .attachment-modal-close:hover {
            background: #ffffff;
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

                Detail Pengaduan

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

            <a
                href="{{ route('sekdes.pengaduan') }}"
                style="
                    display:inline-block;
                    margin-bottom:18px;
                    color:#17456f;
                    text-decoration:none;
                    font-weight:700;
                    font-size:14px;
                "
            >
                ← Kembali ke Pengaduan
            </a>

            <div class="card">

                <h2 style="margin-bottom:20px; font-size:22px; color:#17456f;">
                    {{ $pengaduan->judul }}
                </h2>

                <div style="display:grid; gap:0;">

                    <div style="display:grid; grid-template-columns:180px 1fr; padding:13px 0; border-bottom:1px solid #edf0f3;">
                        <div style="font-weight:700; color:#718398;">Nama Warga</div>
                        <div style="color:#40566d;">{{ $pengaduan->nama_warga ?? '-' }}</div>
                    </div>

                    <div style="display:grid; grid-template-columns:180px 1fr; padding:13px 0; border-bottom:1px solid #edf0f3;">
                        <div style="font-weight:700; color:#718398;">Kategori</div>
                        <div style="color:#40566d;">{{ $pengaduan->kategori ?? '-' }}</div>
                    </div>

                    <div style="display:grid; grid-template-columns:180px 1fr; padding:13px 0; border-bottom:1px solid #edf0f3;">
                        <div style="font-weight:700; color:#718398;">Lokasi</div>
                        <div style="color:#40566d;">{{ $pengaduan->lokasi ?? '-' }}</div>
                    </div>

                    <div style="display:grid; grid-template-columns:180px 1fr; padding:13px 0; border-bottom:1px solid #edf0f3;">
                        <div style="font-weight:700; color:#718398;">Tanggal</div>
                        <div style="color:#40566d;">
                            {{ \Carbon\Carbon::parse($pengaduan->created_at)->format('d/m/Y H:i') }}
                        </div>
                    </div>

                    <div style="display:grid; grid-template-columns:180px 1fr; padding:13px 0; border-bottom:1px solid #edf0f3;">
                        <div style="font-weight:700; color:#718398;">Isi Pengaduan</div>
                        <div style="color:#40566d; white-space:pre-line;">{{ $pengaduan->isi ?? '-' }}</div>
                    </div>

                    @if($pengaduan->lampiran)
                        <div style="display:grid; grid-template-columns:180px 1fr; padding:13px 0; border-bottom:1px solid #edf0f3;">
                            <div style="font-weight:700; color:#718398;">Lampiran</div>

                            <div class="attachment-preview">
                                <img
                                    src="{{ asset('storage/' . $pengaduan->lampiran) }}"
                                    alt="Lampiran Pengaduan"
                                    class="attachment-thumbnail"
                                    onclick="openAttachmentModal(this.src)"
                                >

                                <span class="attachment-hint">
                                    Klik gambar untuk melihat
                                </span>
                            </div>
                        </div>
                    @endif

                    <!-- MODAL PREVIEW LAMPIRAN -->
                    <div
                        id="attachmentModal"
                        class="attachment-modal"
                        onclick="closeAttachmentModal()"
                    >
                        <button
                            type="button"
                            class="attachment-modal-close"
                            onclick="closeAttachmentModal()"
                            aria-label="Tutup preview"
                        >
                            &times;
                        </button>

                        <div
                            class="attachment-modal-content"
                            onclick="event.stopPropagation()"
                        >
                            <img
                                id="attachmentModalImage"
                                class="attachment-modal-image"
                                src=""
                                alt="Preview Lampiran"
                            >
                        </div>
                    </div>

                </div>

                @if(session('success'))
                    <div class="alert" style="margin-top:20px;">
                        {{ session('success') }}
                    </div>
                @endif

                <form
                    method="POST"
                    action="{{ route('sekdes.pengaduan.update', $pengaduan->id) }}"
                    style="margin-top:25px;"
                >
                    @csrf
                    @method('PUT')

                    <div style="margin-bottom:18px;">
                        <label
                            for="status"
                            style="
                                display:block;
                                margin-bottom:8px;
                                font-size:13px;
                                font-weight:700;
                                color:#173f67;
                            "
                        >
                            Status Pengaduan
                        </label>

                        <select
                            id="status"
                            name="status"
                            required
                            style="
                                width:100%;
                                padding:11px 12px;
                                border:1px solid #d8e0e8;
                                border-radius:8px;
                                font-family:Arial,sans-serif;
                                color:#173f67;
                                background:#fff;
                            "
                        >
                            <option value="Menunggu" {{ $pengaduan->status === 'Menunggu' ? 'selected' : '' }}>
                                Menunggu
                            </option>

                            <option value="Proses" {{ $pengaduan->status === 'Proses' ? 'selected' : '' }}>
                                Proses
                            </option>

                            <option value="Selesai" {{ $pengaduan->status === 'Selesai' ? 'selected' : '' }}>
                                Selesai
                            </option>

                            <option value="Ditolak" {{ $pengaduan->status === 'Ditolak' ? 'selected' : '' }}>
                                Ditolak
                            </option>
                        </select>
                    </div>

                    <div style="margin-bottom:18px;">
                        <label
                            for="catatan"
                            style="
                                display:block;
                                margin-bottom:8px;
                                font-size:13px;
                                font-weight:700;
                                color:#173f67;
                            "
                        >
                            Catatan Sekdes
                        </label>

                        <textarea
                            id="catatan"
                            name="catatan"
                            rows="5"
                            placeholder="Tambahkan catatan jika diperlukan..."
                            style="
                                width:100%;
                                padding:11px 12px;
                                border:1px solid #d8e0e8;
                                border-radius:8px;
                                font-family:Arial,sans-serif;
                                resize:vertical;
                                color:#173f67;
                            "
                        >{{ $pengaduan->catatan ?? '' }}</textarea>
                    </div>

                    <button
                        type="submit"
                        class="btn"
                        style="border:none; cursor:pointer;"
                    >
                        Simpan Perubahan
                    </button>

                </form>

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


    function openAttachmentModal(src) {

        const modal = document.getElementById('attachmentModal');
        const image = document.getElementById('attachmentModalImage');

        if (!modal || !image) {
            return;
        }

        image.src = src;
        modal.classList.add('show');
        document.body.style.overflow = 'hidden';

    }


    function closeAttachmentModal() {

        const modal = document.getElementById('attachmentModal');
        const image = document.getElementById('attachmentModalImage');

        if (!modal) {
            return;
        }

        modal.classList.remove('show');
        document.body.style.overflow = '';

        if (image) {
            image.src = '';
        }

    }


    document.addEventListener('keydown', function(event) {

        if (event.key === 'Escape') {
            closeAttachmentModal();
        }

    });

</script>


</body>

</html>
