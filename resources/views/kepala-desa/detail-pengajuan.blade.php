<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Detail Pengajuan - Desa Sukamerindu</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Segoe UI", Arial, sans-serif;
        }


        body {
            background: #f3f6f9;
            color: #102a43;
        }


        a {
            text-decoration: none;
            color: inherit;
        }


        /* =====================================================
           LAYOUT
        ===================================================== */

        .page-wrapper {
            min-height: 100vh;
            display: flex;
        }


        /* =====================================================
           SIDEBAR
        ===================================================== */

        .sidebar {
            width: 287px;
            min-height: 100vh;
            background: #08733b;
            color: white;
            padding: 34px 15px;
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;
        }


        .sidebar-brand {
            text-align: center;
            padding-bottom: 28px;
            border-bottom: 1px solid rgba(255,255,255,0.2);
        }


        .sidebar-logo {
            width: 100px;
            height: 100px;
            background: white;
            border-radius: 8px;
            object-fit: contain;
            padding: 8px;
            margin-bottom: 18px;
        }


        .sidebar-brand h1 {
            margin: 0;
            font-size: 22px;
            font-weight: 800;
            letter-spacing: .5px;
        }


        .sidebar-brand p {
            margin-top: 8px;
            font-size: 15px;
            color: rgba(255,255,255,.9);
        }


        /* =====================================================
           SIDEBAR MENU
        ===================================================== */

        .sidebar-menu {
            margin-top: 30px;
        }


        .sidebar-menu a {
            display: flex;
            align-items: center;
            gap: 16px;

            width: 100%;
            padding: 15px 22px;
            margin-bottom: 8px;

            border-radius: 9px;

            color: white;
            font-size: 15px;
            font-weight: 600;

            transition: 0.2s ease;
        }


        .sidebar-menu a:hover {
            background: rgba(255,255,255,0.10);
        }


        .sidebar-menu a.active {
            background: rgba(255,255,255,0.13);
            border: 1px solid rgba(255,255,255,0.45);
        }


        .sidebar-icon {
            width: 20px;
            text-align: center;
            font-size: 17px;
        }


        /* =====================================================
           MAIN
        ===================================================== */

        .main-content {
            width: calc(100% - 300px);
            margin-left: 300px;
            min-height: 100vh;
        }


        /* =====================================================
           TOPBAR
        ===================================================== */

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


        .topbar-user {
            display: flex;
            align-items: center;
            gap: 12px;
            cursor: pointer;
            padding: 6px 10px;
            border-radius: 12px;
            transition: .2s;
        }


        .topbar-user:hover {
            background: #f3f4f6;
        }


        .topbar-avatar {
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


        .topbar-user-info {
            line-height: 1.25;
        }


        .topbar-user-info strong {
            display: block;
            font-size: 15px;
            font-weight: 700;
            color: #111827;
        }


        .topbar-user-info span {
            display: block;
            margin-top: 4px;
            font-size: 13px;
            color: #6b7280;
        }


        .profile-dropdown {
            position: absolute;
            top: calc(100% + 10px);
            right: 0;
            width: 180px;
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(15, 23, 42, .12);
            padding: 8px;
            display: none;
            z-index: 1000;
        }


        .profile-dropdown.show {
            display: block;
        }


        .dropdown-logout {
            width: 100%;
            border: none;
            background: transparent;
            color: #dc2626;
            padding: 11px 12px;
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
            width: 100%;
            max-width: 1300px;

            margin: 0 auto;

            padding: 50px 36px 70px;
        }


        /* =====================================================
           PAGE TITLE
        ===================================================== */

        .page-title {
            margin-bottom: 28px;
        }


        .page-title h2 {
            font-size: 30px;
            line-height: 1.2;
            font-weight: 800;
            color: #102a43;
            margin-bottom: 8px;
        }


        .page-title p {
            font-size: 15px;
            line-height: 1.5;
            color: #68809a;
        }


        /* =====================================================
           DETAIL CARD
        ===================================================== */

        .detail-card {
            width: 100%;

            background: white;

            border: 1px solid #e5e7eb;

            border-radius: 16px;

            padding: 30px;

            box-shadow:
                0 2px 8px rgba(15, 23, 42, 0.03);
        }


        /* =====================================================
           CARD HEADER
        ===================================================== */

        .detail-header {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;

            gap: 20px;

            padding-bottom: 24px;

            border-bottom: 1px solid #e5e7eb;
        }


        .detail-header h3 {
            font-size: 21px;
            font-weight: 800;
            color: #102a43;
            margin-bottom: 7px;
        }


        .detail-header p {
            font-size: 14px;
            color: #68809a;
        }


        /* =====================================================
           STATUS
        ===================================================== */

        .status {
            display: inline-flex;
            align-items: center;
            justify-content: center;

            padding: 8px 15px;

            border-radius: 999px;

            font-size: 13px;
            font-weight: 700;

            white-space: nowrap;
        }


        .status-diproses {
            background: #fef3c7;
            color: #b45309;
        }


        .status-selesai {
            background: #dcfce7;
            color: #08733b;
        }


        .status-ditolak {
            background: #fee2e2;
            color: #dc2626;
        }


        /* =====================================================
           SECTION
        ===================================================== */

        .detail-section {
            padding: 26px 0;

            border-bottom: 1px solid #e5e7eb;
        }


        .detail-section:last-of-type {
            border-bottom: none;
        }


        .detail-section-title {
            font-size: 18px;
            font-weight: 800;
            color: #102a43;

            margin-bottom: 20px;
        }


        /* =====================================================
           INFORMATION GRID
        ===================================================== */

        .info-grid {
            display: grid;

            grid-template-columns:
                minmax(0, 1fr)
                minmax(0, 1fr);

            gap: 20px;
        }


        .info-item label {
            display: block;

            font-size: 13px;
            font-weight: 700;

            color: #102a43;

            margin-bottom: 8px;
        }


        .info-value {
            min-height: 44px;

            display: flex;
            align-items: center;

            padding: 11px 14px;

            background: #f8fafc;

            border: 1px solid #dbe3ea;

            border-radius: 9px;

            color: #526b84;

            font-size: 14px;
        }


        /* =====================================================
           KETERANGAN
        ===================================================== */

        .description-box {
            width: 100%;

            min-height: 120px;

            padding: 15px;

            background: #f8fafc;

            border: 1px solid #dbe3ea;

            border-radius: 9px;

            color: #526b84;

            font-size: 14px;

            line-height: 1.7;

            white-space: pre-line;
        }


        /* =====================================================
           ACTION
        ===================================================== */

        .action-area {
            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 15px;

            padding-top: 25px;
        }


        .back-button {
            display: inline-flex;

            align-items: center;
            justify-content: center;

            padding: 11px 18px;

            border-radius: 8px;

            border: 1px solid #d1d5db;

            background: white;

            color: #526b84;

            font-size: 14px;
            font-weight: 600;

            transition: 0.2s ease;
        }


        .back-button:hover {
            background: #f8fafc;
        }


        .action-buttons {
            display: flex;
            gap: 10px;
        }


        .action-buttons form {
            margin: 0;
        }


        .button {
            border: none;

            padding: 11px 20px;

            border-radius: 8px;

            font-family: inherit;

            font-size: 14px;
            font-weight: 700;

            cursor: pointer;
        }


        .button-reject {
            background: #fee2e2;
            color: #dc2626;
        }


        .button-reject:hover {
            background: #fecaca;
        }


        .button-approve {
            background: #08733b;
            color: white;
        }


        .button-approve:hover {
            background: #066331;
        }


        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 900px) {

            .sidebar {
                width: 230px;
            }


            .main-content {
                width: calc(100% - 230px);
                margin-left: 230px;
            }


            .info-grid {
                grid-template-columns: 1fr;
            }


            .sidebar-brand h1 {
                font-size: 18px;
            }
        }


        @media (max-width: 700px) {

            .sidebar {
                position: relative;

                width: 100%;
                min-height: auto;
            }


            .main-content {
                width: 100%;
                margin-left: 0;
            }


            .page-wrapper {
                display: block;
            }


            .topbar {
                padding: 0 20px;
            }


            .content {
                padding: 35px 20px 50px;
            }


            .detail-header {
                flex-direction: column;
            }


            .action-area {
                flex-direction: column;
                align-items: stretch;
            }


            .action-buttons {
                width: 100%;
            }


            .action-buttons .button {
                flex: 1;
            }
        }


    </style>

</head>


<body>


<div class="page-wrapper">


    {{-- =====================================================
         SIDEBAR
    ====================================================== --}}

    <aside class="sidebar">

        <div class="sidebar-brand">

            <img
                src="https://cdn.phototourl.com/free/2026-08-19-ada8088c-135b-4f75-94c5-ef27a75114f8.png"
                alt="Logo Kabupaten Kepahiang"
                class="sidebar-logo"
            >

            <h1>
                DESA SUKAMERINDU
            </h1>

            <p>
                Sistem Informasi Desa
            </p>

        </div>


        <nav class="sidebar-menu">

            <a href="{{ route('kepala-desa.dashboard') }}">
                <span class="sidebar-icon">🏠</span>
                <span>Dashboard</span>
            </a>


            <a
                href="{{ route('kepala-desa.pengajuan') }}"
                class="active"
            >
                <span class="sidebar-icon">📄</span>
                <span>Pengajuan Surat</span>
            </a>


            <a href="{{ route('kepala-desa.data-warga') }}">
                <span class="sidebar-icon">👥</span>
                <span>Data Warga</span>
            </a>


            <a href="{{ route('kepala-desa.informasi') }}">
                <span class="sidebar-icon">📢</span>
                <span>Informasi</span>
            </a>

        </nav>


    </aside>



    {{-- =====================================================
         MAIN CONTENT
    ====================================================== --}}

    <main class="main-content">


        {{-- TOPBAR --}}

        <header class="topbar">

            <div class="topbar-title">
                Detail Pengajuan
            </div>


            <div class="profile-area">

                <div
                    class="topbar-user"
                    onclick="toggleProfileDropdown()"
                >

                    <div class="topbar-avatar">
                        {{ strtoupper(substr(auth()->user()->name, 0, 2)) }}
                    </div>


                    <div class="topbar-user-info">

                        <strong>
                            {{ auth()->user()->name }}
                        </strong>

                        <span>
                            Kepala Desa
                        </span>

                    </div>

                </div>


                <div
                    id="profileDropdown"
                    class="profile-dropdown"
                >

                    <form
                        method="POST"
                        action="{{ route('logout') }}"
                    >

                        @csrf

                        <button
                            type="submit"
                            class="dropdown-logout"
                        >
                            🚪 Keluar
                        </button>

                    </form>

                </div>

            </div>


        </header>



        {{-- CONTENT --}}

        <div class="content">


            {{-- =================================================
                 TITLE
            ================================================== --}}

            <section class="page-title">

                <h2>
                    Detail Pengajuan Surat
                </h2>

                <p>
                    Lihat informasi lengkap pengajuan surat dari warga Desa Sukamerindu.
                </p>

            </section>



            {{-- =================================================
                 DETAIL
            ================================================== --}}

            <section class="detail-card">


                {{-- HEADER DETAIL --}}

                <div class="detail-header">

                    <div>

                        <h3>
                            Pengajuan Surat
                        </h3>

                        <p>
                            Informasi pengajuan surat warga.
                        </p>

                    </div>


                    @php

                        $status = strtolower(
                            $pengajuan->status ?? 'diproses'
                        );

                    @endphp


                    @if($status === 'selesai' || $status === 'disetujui')

                        <span class="status status-selesai">
                            Selesai
                        </span>

                    @elseif($status === 'ditolak')

                        <span class="status status-ditolak">
                            Ditolak
                        </span>

                    @else

                        <span class="status status-diproses">
                            Diproses
                        </span>

                    @endif

                </div>



                {{-- =================================================
                     INFORMASI PENGAJUAN
                ================================================== --}}

                <div class="detail-section">

                    <h4 class="detail-section-title">
                        Informasi Pengajuan
                    </h4>


                    <div class="info-grid">


                        <div class="info-item">

                            <label>
                                Nomor Pengajuan
                            </label>

                            <div class="info-value">

                                #{{ $pengajuan->id ?? '-' }}

                            </div>

                        </div>



                        <div class="info-item">

                            <label>
                                Tanggal Pengajuan
                            </label>

                            <div class="info-value">

                                @if(!empty($pengajuan->created_at))

                                    {{ \Carbon\Carbon::parse($pengajuan->created_at)->translatedFormat('d F Y') }}

                                @else

                                    -

                                @endif

                            </div>

                        </div>



                        <div class="info-item">

                            <label>
                                Nama Warga
                            </label>

                            <div class="info-value">

                                {{ $pengajuan->nama_warga ?? '-' }}

                            </div>

                        </div>



                        <div class="info-item">

                            <label>
                                Jenis Surat
                            </label>

                            <div class="info-value">

                                {{ $pengajuan->jenis_surat ?? '-' }}

                            </div>

                        </div>


                    </div>

                </div>



                {{-- =================================================
                     KETERANGAN
                ================================================== --}}

                <div class="detail-section">

                    <h4 class="detail-section-title">
                        Keterangan / Keperluan
                    </h4>


                    <div class="description-box">

                        {{ $pengajuan->keterangan ?? $pengajuan->keperluan ?? 'Tidak ada keterangan.' }}

                    </div>

                </div>



                {{-- =================================================
                     ACTION
                ================================================== --}}

                <div class="action-area">


                    {{-- KEMBALI --}}

                    <a
                        href="{{ route('kepala-desa.pengajuan') }}"
                        class="back-button"
                    >

                        ← Kembali

                    </a>



                    {{-- =================================================
                         JIKA MASIH DIPROSES
                    ================================================== --}}

                    @if(
                        $status !== 'selesai' &&
                        $status !== 'disetujui' &&
                        $status !== 'ditolak'
                    )

                        <div class="action-buttons">


                            {{-- TOLAK --}}

                            <form
                                method="POST"
                                action="{{ route('kepala-desa.pengajuan.tolak', $pengajuan->id) }}"
                                onsubmit="return confirm('Yakin ingin menolak pengajuan surat ini?');"
                            >

                                @csrf

                                <button
                                    type="submit"
                                    class="button button-reject"
                                >
                                    Tolak
                                </button>

                            </form>



                            {{-- SETUJUI --}}

                            <form
                                method="POST"
                                action="{{ route('kepala-desa.pengajuan.selesai', $pengajuan->id) }}"
                                onsubmit="return confirm('Yakin ingin menyetujui pengajuan surat ini?');"
                            >

                                @csrf

                                <button
                                    type="submit"
                                    class="button button-approve"
                                >
                                    ✓ Setujui
                                </button>

                            </form>


                        </div>


                    {{-- =================================================
                         JIKA SUDAH SELESAI
                    ================================================== --}}

                    @elseif($status === 'selesai' || $status === 'disetujui')

                        <div class="action-buttons">

                            <a
                                href="{{ route('kepala-desa.pengajuan.detail', $pengajuan->id) }}"
                                class="button button-approve"
                            >
                                📄 Lihat Surat
                            </a>

                        </div>

                    @endif


                </div>


            </section>


        </div>


    </main>


</div>


<script>

    function toggleProfileDropdown() {

        const dropdown =
            document.getElementById('profileDropdown');


        if (!dropdown) {
            return;
        }


        dropdown.classList.toggle('show');

    }


    document.addEventListener('click', function (event) {

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

    });

</script>


</body>

</html>
