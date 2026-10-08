<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visi & Misi - Kepala Desa</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f3f6fa;
            color: #12345b;
        }

        .layout {
            display: flex;
            min-height: 100vh;
        }

        /* SIDEBAR */
        .sidebar {
            width: 287px;
            background: #087536;
            color: white;
            padding: 35px 15px;
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
        }

        .logo-box {
            width: 101px;
            height: 101px;
            background: white;
            border-radius: 9px;
            margin: 0 auto 22px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .logo-box img {
            width: 80px;
            height: 80px;
            object-fit: contain;
        }

        .desa-name {
            text-align: center;
            font-size: 22px;
            font-weight: 800;
            margin-bottom: 8px;
        }

        .desa-subtitle {
            text-align: center;
            font-size: 15px;
            margin-bottom: 30px;
        }

        .sidebar-line {
            height: 1px;
            background: rgba(255,255,255,0.25);
            margin-bottom: 28px;
        }

        .nav-item {
            display: flex;
            align-items: center;
            gap: 14px;
            color: white;
            text-decoration: none;
            padding: 16px 22px;
            margin-bottom: 5px;
            border-radius: 8px;
            font-size: 15px;
            font-weight: 600;
        }

        .nav-item:hover {
            background: rgba(255,255,255,0.10);
        }

        .nav-item.active {
            background: rgba(255,255,255,0.16);
            border: 1px solid rgba(255,255,255,0.55);
        }

        .nav-icon {
            width: 20px;
            text-align: center;
            font-size: 17px;
        }

        .nav-dropdown {
            display: block;
        }

        .nav-dropdown-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            color: white;
            padding: 16px 22px;
            font-size: 15px;
            font-weight: 600;
        }

        .nav-dropdown-header-left {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .nav-dropdown-menu {
            padding-left: 48px;
        }

        .nav-dropdown-menu a {
            display: block;
            color: white;
            text-decoration: none;
            padding: 12px 16px;
            border-radius: 7px;
            font-size: 14px;
            font-weight: 600;
        }

        .nav-dropdown-menu a:hover {
            background: rgba(255,255,255,0.10);
        }

        .nav-dropdown-menu a.active {
            background: rgba(255,255,255,0.16);
            border: 1px solid rgba(255,255,255,0.55);
        }

        /* MAIN */
        .main {
            margin-left: 287px;
            width: calc(100% - 287px);
            min-height: 100vh;
        }

        /* TOPBAR */
        .topbar {
            height: 112px;
            background: white;
            border-bottom: 1px solid #e8edf2;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 35px;
        }

        .topbar-title {
            font-size: 21px;
            font-weight: 800;
            color: #087536;
        }

        .profile {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .profile-circle {
            width: 46px;
            height: 46px;
            border-radius: 50%;
            background: #dcf8e7;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #087536;
            font-weight: 800;
        }

        .profile-name {
            font-size: 15px;
            font-weight: 700;
            color: #172b4d;
        }

        .profile-role {
            font-size: 13px;
            color: #7587a3;
            margin-top: 4px;
        }

        /* CONTENT */
        .content {
            padding: 50px 36px 70px;
        }

        .page-title {
            font-size: 32px;
            font-weight: 800;
            color: #102f56;
            margin-bottom: 8px;
        }

        .page-description {
            font-size: 15px;
            color: #6d86a7;
            margin-bottom: 30px;
        }

        .card {
            background: white;
            border-radius: 16px;
            padding: 32px;
            margin-bottom: 24px;
            border: 1px solid #e3e9ef;
            box-shadow: 0 4px 14px rgba(20, 50, 80, 0.04);
        }

        .card-title {
            font-size: 22px;
            font-weight: 800;
            color: #087536;
            margin-bottom: 18px;
        }

        .card-text {
            font-size: 16px;
            line-height: 1.8;
            color: #637c9e;
        }

        .visi-box {
            background: #f0fbf4;
            border-left: 5px solid #087536;
            padding: 24px;
            border-radius: 10px;
        }

        .visi-text {
            font-size: 19px;
            line-height: 1.8;
            color: #17375f;
            font-weight: 600;
        }

        .misi-list {
            padding-left: 25px;
            margin-top: 5px;
        }

        .misi-list li {
            font-size: 16px;
            line-height: 1.8;
            color: #637c9e;
            margin-bottom: 12px;
            padding-left: 8px;
        }

        @media (max-width: 900px) {
            .sidebar {
                width: 230px;
            }

            .main {
                margin-left: 230px;
                width: calc(100% - 230px);
            }

            .desa-name {
                font-size: 17px;
            }
        }
    </style>
</head>

<body>

<div class="layout">

    <!-- SIDEBAR -->
    <aside class="sidebar">

        <div class="logo-box">
            {{-- Ganti dengan path logo desa jika sudah ada --}}
            <img src="{{ asset('images/logo-kepahiang.png') }}"
                 alt="Logo Desa"
                 onerror="this.style.display='none'">
        </div>

        <div class="desa-name">
            DESA SUKAMERINDU
        </div>

        <div class="desa-subtitle">
            Sistem Informasi Desa
        </div>

        <div class="sidebar-line"></div>

        <a href="{{ url('/kepala-desa/dashboard') }}" class="nav-item">
            <span class="nav-icon">🏠</span>
            <span>Dashboard</span>
        </a>

        <a href="{{ url('/kepala-desa/pengajuan-surat') }}" class="nav-item">
            <span class="nav-icon">📄</span>
            <span>Pengajuan Surat</span>
        </a>

        <a href="{{ url('/kepala-desa/data-warga') }}" class="nav-item">
            <span class="nav-icon">👥</span>
            <span>Data Warga</span>
        </a>

        <!-- PENGUMUMAN -->
        <div class="nav-dropdown">

            <div class="nav-dropdown-header">
                <div class="nav-dropdown-header-left">
                    <span class="nav-icon">📢</span>
                    <span>Pengumuman</span>
                </div>

                <span>▲</span>
            </div>

            <div class="nav-dropdown-menu">

                <a href="{{ url('/kepala-desa/informasi') }}">
                    Informasi
                </a>

                <a href="{{ url('/kepala-desa/agenda') }}">
                    Agenda
                </a>

            </div>

        </div>

        <!-- PERIHAL -->
        <div class="nav-dropdown">

            <div class="nav-dropdown-header">
                <div class="nav-dropdown-header-left">
                    <span class="nav-icon">📋</span>
                    <span>Perihal</span>
                </div>

                <span>▲</span>
            </div>

            <div class="nav-dropdown-menu">

                <a href="#">
                    Profil Desa
                </a>

                <a href="{{ route('kepala-desa.perihal.visi-misi') }}"
                   class="active">
                    Visi &amp; Misi
                </a>

                <a href="#">
                    Struktur Pemerintahan
                </a>

            </div>

        </div>

    </aside>


    <!-- MAIN -->
    <main class="main">

        <!-- TOPBAR -->
        <header class="topbar">

            <div class="topbar-title">
                Visi &amp; Misi
            </div>

            <div class="profile">

                <div class="profile-circle">
                    BE
                </div>

                <div>
                    <div class="profile-name">
                        Bella
                    </div>

                    <div class="profile-role">
                        Kepala Desa
                    </div>
                </div>

            </div>

        </header>


        <!-- CONTENT -->
        <section class="content">

            <h1 class="page-title">
                Visi &amp; Misi Desa Sukamerindu
            </h1>

            <p class="page-description">
                Informasi mengenai visi dan misi Pemerintah Desa Sukamerindu.
            </p>


            <!-- VISI -->
            <div class="card">

                <h2 class="card-title">
                    Visi
                </h2>

                <div class="visi-box">

                    <p class="visi-text">
                        Terwujudnya Desa Sukamerindu yang maju, mandiri,
                        sejahtera, dan berdaya saing dengan mengedepankan
                        pelayanan masyarakat yang transparan dan berkualitas.
                    </p>

                </div>

            </div>


            <!-- MISI -->
            <div class="card">

                <h2 class="card-title">
                    Misi
                </h2>

                <ol class="misi-list">

                    <li>
                        Meningkatkan kualitas pelayanan kepada masyarakat
                        secara cepat, mudah, dan transparan.
                    </li>

                    <li>
                        Meningkatkan pembangunan desa yang merata dan
                        berkelanjutan.
                    </li>

                    <li>
                        Mendorong peningkatan perekonomian dan kesejahteraan
                        masyarakat desa.
                    </li>

                    <li>
                        Meningkatkan kualitas sumber daya manusia melalui
                        pendidikan dan kegiatan pemberdayaan masyarakat.
                    </li>

                    <li>
                        Mewujudkan tata kelola pemerintahan desa yang
                        terbuka, efektif, dan bertanggung jawab.
                    </li>

                </ol>

            </div>

        </section>

    </main>

</div>

</body>
</html>
