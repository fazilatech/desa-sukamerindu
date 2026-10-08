<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Aparatur Desa - Desa Sukamerindu</title>

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

        .layout {
            display: flex;
            min-height: 100vh;
        }

        /* =====================================================
           SIDEBAR SEKDES
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

        .dropdown-arrow {
            margin-left: auto;
            font-size: 10px;
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

        .content {
            padding: 30px 35px 50px;
        }

        /* =====================================================
           FORM
        ===================================================== */

        .form-card {
            max-width: 850px;
            margin: 0 auto;
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            padding: 28px;
            box-shadow: 0 3px 12px rgba(0,0,0,0.05);
        }

        .form-header {
            margin-bottom: 25px;
        }

        .form-header h2 {
            color: #08733a;
            font-size: 20px;
            font-weight: 800;
        }

        .form-header p {
            margin-top: 7px;
            color: #6b7280;
            font-size: 13px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #173f67;
            font-size: 13px;
            font-weight: 700;
        }

        .form-group input[type="text"],
        .form-group input[type="file"] {
            width: 100%;
            padding: 12px 13px;
            border: 1px solid #d9dee5;
            border-radius: 8px;
            background: #ffffff;
            color: #173f67;
            font-family: Arial, sans-serif;
            font-size: 13px;
        }

        .form-group input:focus {
            outline: none;
            border-color: #08733a;
            box-shadow: 0 0 0 3px rgba(8,115,58,0.08);
        }

        .help-text {
            margin-top: 7px;
            color: #6b7280;
            font-size: 11px;
        }

        .error-box {
            margin-bottom: 20px;
            padding: 12px 14px;
            background: #fff1f2;
            border: 1px solid #fecdd3;
            border-radius: 8px;
            color: #be123c;
            font-size: 12px;
        }

        .error-box ul {
            margin-left: 18px;
            margin-top: 5px;
        }

        .button-area {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            margin-top: 28px;
            padding-top: 20px;
            border-top: 1px solid #e5e7eb;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 11px 18px;
            border-radius: 8px;
            text-decoration: none;
            border: none;
            cursor: pointer;
            font-family: Arial, sans-serif;
            font-size: 13px;
            font-weight: 700;
        }

        .btn-back {
            background: #eef2f7;
            color: #40566d;
        }

        .btn-back:hover {
            background: #e3e8ef;
        }

        .btn-save {
            background: #08733a;
            color: #ffffff;
        }

        .btn-save:hover {
            background: #075f30;
        }

        @media (max-width: 800px) {

            .sidebar {
                width: 220px;
            }

            .main {
                margin-left: 220px;
                width: calc(100% - 220px);
            }

            .topbar {
                padding: 0 20px;
            }

            .content {
                padding: 20px;
            }
        }

        @media (max-width: 600px) {

            .sidebar {
                position: relative;
                width: 100%;
                min-height: auto;
            }

            .main {
                margin-left: 0;
                width: 100%;
            }

            .layout {
                display: block;
            }

            .button-area {
                flex-direction: column;
            }

            .btn {
                width: 100%;
            }
        }
    </style>
</head>

<body>

<div class="layout">

    {{-- =====================================================
         SIDEBAR SEKDES
    ====================================================== --}}

    <aside class="sidebar">

        {{-- BRAND --}}
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


        {{-- MENU --}}
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


            {{-- DATA WARGA --}}
            <a
                href="{{ route('sekdes.data-warga') }}"
                class="{{ request()->routeIs('sekdes.data-warga') ? 'active' : '' }}"
            >
                <span class="menu-icon">
                    👥
                </span>

                <span>
                    Data Warga
                </span>
            </a>


            {{-- PENGAJUAN SURAT --}}
            <a
                href="{{ route('sekdes.pengajuan') }}"
                class="{{ request()->is('sekdes/pengajuan-surat*') ? 'active' : '' }}"
            >
                <span class="menu-icon">
                    📄
                </span>

                <span>
                    Pengajuan Surat
                </span>
            </a>


            {{-- INFORMASI --}}
            <a
                href="{{ route('sekdes.informasi') }}"
                class="{{ request()->routeIs('sekdes.informasi') ? 'active' : '' }}"
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
                href="{{ route('sekdes.agenda') }}"
                class="{{ request()->routeIs('sekdes.agenda') ? 'active' : '' }}"
            >
                <span class="menu-icon">
                    🗓️
                </span>

                <span>
                    Agenda
                </span>
            </a>


            {{-- TRANSPARANSI --}}
            <a
                href="{{ route('sekdes.transparansi') }}"
                class="{{ request()->routeIs('sekdes.transparansi') ? 'active' : '' }}"
            >
                <span class="menu-icon">
                    💰
                </span>

                <span>
                    Transparansi
                </span>
            </a>


            {{-- PERIHAL --}}
            <div class="menu-dropdown">

                <button
                    type="button"
                    class="menu-dropdown-button"
                    onclick="togglePerihal()"
                >

                    <span class="menu-icon">
                        📘
                    </span>

                    <span>
                        Perihal
                    </span>

                    <span class="dropdown-arrow">
                        ▼
                    </span>

                </button>


                <div class="menu-dropdown-content">

                    <a href="{{ route('sekdes.profil-desa') }}">
                        🏡 Profil Desa
                    </a>

                    <a href="{{ route('sekdes.kontak') }}">
                        ☎️ Kontak
                    </a>

                </div>

            </div>

        </nav>

    </aside>


    {{-- =====================================================
         MAIN
    ====================================================== --}}

    <main class="main">

        <header class="topbar">

            <div class="page-title">
                Tambah Aparatur Desa
            </div>

        </header>


        <div class="content">

            <div class="form-card">

                <div class="form-header">

                    <h2>
                        Tambah Aparatur Desa
                    </h2>

                    <p>
                        Isi foto, nama, dan jabatan aparatur desa melalui form berikut.
                    </p>

                </div>


                {{-- =================================================
                     ERROR VALIDATION
                ================================================== --}}

                @if ($errors->any())

                    <div class="error-box">

                        <strong>
                            Data belum dapat disimpan.
                        </strong>

                        <ul>

                            @foreach ($errors->all() as $error)

                                <li>
                                    {{ $error }}
                                </li>

                            @endforeach

                        </ul>

                    </div>

                @endif


                {{-- =================================================
                     FORM TAMBAH
                ================================================== --}}

                <form
                    action="{{ route('sekdes.aparatur-desa.store') }}"
                    method="POST"
                    enctype="multipart/form-data"
                >

                    @csrf


                    {{-- FOTO --}}
                    <div class="form-group">

                        <label for="foto">
                            Foto Aparatur
                        </label>

                        <input
                            type="file"
                            id="foto"
                            name="foto"
                            accept="image/jpeg,image/png,image/webp"
                        >

                        <div class="help-text">
                            Format JPG, JPEG, PNG, atau WEBP. Maksimal 2 MB.
                        </div>

                    </div>


                    {{-- NAMA --}}
                    <div class="form-group">

                        <label for="nama">
                            Nama Aparatur
                        </label>

                        <input
                            type="text"
                            id="nama"
                            name="nama"
                            value="{{ old('nama') }}"
                            placeholder="Masukkan nama aparatur"
                            maxlength="150"
                            required
                        >

                    </div>


                    {{-- JABATAN --}}
                    <div class="form-group">

                        <label for="jabatan">
                            Jabatan
                        </label>

                        <input
                            type="text"
                            id="jabatan"
                            name="jabatan"
                            value="{{ old('jabatan') }}"
                            placeholder="Masukkan jabatan"
                            maxlength="150"
                            required
                        >

                    </div>


                    {{-- BUTTON --}}
                    <div class="button-area">

                        <a
                            href="{{ route('sekdes.profil-desa') }}"
                            class="btn btn-back"
                        >
                            ← Kembali
                        </a>

                        <button
                            type="submit"
                            class="btn btn-save"
                        >
                            💾 Simpan
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </main>

</div>


<script>
    function togglePerihal() {

        const dropdown = document.querySelector('.menu-dropdown');

        if (dropdown) {
            dropdown.classList.toggle('open');
        }

    }
</script>

</body>
</html>
