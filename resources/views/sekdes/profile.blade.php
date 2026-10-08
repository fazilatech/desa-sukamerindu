<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Profile - Desa Sukamerindu</title>


    <style>

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }


        body {
            font-family: Arial, sans-serif;
            background: #f3f6fa;
            color: #12395d;
        }


        .profile-container {
            max-width: 1100px;
            margin: 45px auto;
            padding: 0 25px;
        }


        .profile-page-title {
            margin-bottom: 25px;
        }


        .profile-page-title h1 {
            font-size: 30px;
            font-weight: 700;
            margin-bottom: 6px;
        }


        .profile-page-title p {
            color: #6d87a3;
            font-size: 14px;
        }


        .profile-card {
            background: #ffffff;
            border-radius: 16px;
            padding: 30px;
            box-shadow: 0 4px 18px rgba(0, 0, 0, 0.06);
            margin-bottom: 22px;
        }


        .profile-header {
            display: flex;
            align-items: center;
            gap: 20px;
            padding-bottom: 25px;
            border-bottom: 1px solid #e5ebf1;
            margin-bottom: 25px;
        }


        .profile-avatar {
            width: 90px;
            height: 90px;

            border-radius: 50%;
            overflow: hidden;

            background: #e8f3fb;
            color: #174a76;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 28px;
            font-weight: bold;

            flex-shrink: 0;
            cursor: pointer;
            position: relative;
            border: 3px solid #ffffff;
            box-shadow: 0 3px 12px rgba(23, 74, 118, 0.12);
            transition: transform .2s ease, box-shadow .2s ease;
        }


        .profile-avatar:hover {
            transform: scale(1.04);
            box-shadow: 0 5px 16px rgba(23, 74, 118, 0.20);
        }


        .profile-avatar::after {
            content: "📷";
            position: absolute;
            right: 2px;
            bottom: 14px;
            width: 28px;
            height: 28px;
            border-radius: 50%;
            background: transparent;
            color: inherit;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 13px;
            border: none;
        }


        .profile-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }


        .profile-header h2 {
            font-size: 22px;
            margin-bottom: 5px;
        }


        .profile-header span {
            color: #6d87a3;
            font-size: 14px;
        }


        .profile-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }


        .form-group {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }


        .form-group label {
            font-size: 14px;
            font-weight: 600;
            color: #315574;
        }


        .form-group input {
            width: 100%;
            padding: 12px 14px;

            border: 1px solid #d9e2ea;
            border-radius: 9px;

            font-size: 14px;
            background: #f9fbfd;
            color: #34516b;

            outline: none;
        }


        .form-group input:focus {
            border-color: #1c628f;
        }


        .photo-section {
            padding-top: 5px;
        }


        .section-title {
            font-size: 18px;
            font-weight: 700;
            color: #174a76;
            margin-bottom: 8px;
        }


        .section-description {
            color: #6d87a3;
            font-size: 13px;
            margin-bottom: 18px;
        }


        .photo-form {
            display: flex;
            align-items: center;
            gap: 12px;
            flex-wrap: wrap;
        }


        .photo-input {
            width: 100%;
            max-width: 500px;

            padding: 11px 12px;

            border: 1px solid #d9e2ea;
            border-radius: 9px;

            background: #f9fbfd;
            color: #34516b;
            font-size: 13px;
        }


        .photo-input:focus {
            outline: none;
            border-color: #1c628f;
        }


        .photo-help {
            margin-top: 9px;
            color: #7a8da1;
            font-size: 11px;
        }


        .photo-error {
            margin-top: 9px;
            color: #b42318;
            font-size: 12px;
        }


        .btn-primary {
            border: none;

            background: #08733a;
            color: #ffffff;

            padding: 11px 18px;

            border-radius: 9px;

            font-size: 13px;
            font-weight: 700;

            cursor: pointer;
        }


        .btn-primary:hover {
            background: #075f30;
        }


        .button-area {
            margin-top: 28px;
            display: flex;
            justify-content: flex-end;
        }


        .btn-back {
            text-decoration: none;

            background: #eef3f7;
            color: #315574;

            padding: 11px 20px;

            border-radius: 9px;

            font-size: 14px;
            font-weight: 600;
        }


        .btn-back:hover {
            background: #e2eaf0;
        }


        .alert-success {
            margin-bottom: 20px;

            padding: 12px 15px;

            border-radius: 9px;

            background: #ecfdf3;
            border: 1px solid #b7ebc6;

            color: #166534;

            font-size: 13px;
            font-weight: 600;
        }


        .alert-error {
            margin-bottom: 20px;

            padding: 12px 15px;

            border-radius: 9px;

            background: #fff1f2;
            border: 1px solid #fecdd3;

            color: #b42318;

            font-size: 13px;
        }


        .alert-error ul {
            margin: 7px 0 0 18px;
        }


        footer {
            text-align: center;

            margin-top: 25px;

            color: #7b8da1;

            font-size: 12px;
        }




        /* =====================================================
           LAYOUT & NAVBAR SEKDES
        ====================================================== */

        .app-layout {
            min-height: 100vh;
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            width: 255px;
            padding: 26px 14px 20px;
            background: linear-gradient(180deg, #08733a 0%, #075f30 100%);
            color: #ffffff;
            overflow-y: auto;
            z-index: 1000;
            box-shadow: 4px 0 18px rgba(0,0,0,.08);
        }

        .brand {
            padding: 2px 10px 24px;
            text-align: center;
            border-bottom: 1px solid rgba(255,255,255,.22);
            margin-bottom: 18px;
        }

        .brand-logo {
            width: 76px;
            height: 76px;
            object-fit: contain;
            display: block;
            margin: 0 auto 11px;
        }

        .brand h2 {
            color: #ffffff;
            font-size: 17px;
            font-weight: 800;
            letter-spacing: .3px;
            line-height: 1.25;
        }

        .brand p {
            margin-top: 5px;
            color: rgba(255,255,255,.82);
            font-size: 11px;
        }

        .menu {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .menu a,
        .menu-dropdown-button {
            width: 100%;
            min-height: 46px;
            padding: 11px 13px;
            border: 1px solid transparent;
            border-radius: 11px;
            background: transparent;
            color: #ffffff;
            font-family: Arial, sans-serif;
            font-size: 13px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 11px;
            text-decoration: none;
            transition: .2s ease;
        }

        .menu a:hover,
        .menu-dropdown-button:hover {
            background: rgba(255,255,255,.11);
            transform: translateX(2px);
        }

        .menu a.active,
        .menu-dropdown-button.active {
            background: rgba(255,255,255,.16);
            border-color: rgba(255,255,255,.32);
            box-shadow: inset 3px 0 0 #ffffff;
        }

        .menu-icon {
            width: 22px;
            height: 22px;
            flex: 0 0 22px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
        }

        .menu-dropdown {
            position: relative;
        }

        .menu-dropdown-button {
            cursor: pointer;
            text-align: left;
        }

        .dropdown-arrow {
            margin-left: auto;
            font-size: 9px;
            transition: transform .2s ease;
        }

        .menu-dropdown.open .dropdown-arrow {
            transform: rotate(180deg);
        }

        .menu-dropdown-content {
            display: none;
            margin: 3px 5px 5px;
            padding: 6px;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 8px 22px rgba(0,0,0,.13);
        }

        .menu-dropdown.open .menu-dropdown-content {
            display: block;
        }

        .menu-dropdown-content a {
            min-height: 39px;
            padding: 9px 10px;
            color: #173f67;
            border-radius: 8px;
            font-size: 12px;
            transform: none;
        }

        .menu-dropdown-content a:hover {
            background: #edf8f2;
            color: #08733a;
            transform: none;
        }

        .main-area {
            margin-left: 255px;
            min-height: 100vh;
        }

        .topbar {
            position: sticky;
            top: 0;
            height: 76px;
            padding: 0 35px;
            background: rgba(255,255,255,.96);
            border-bottom: 1px solid #e5eaf0;
            backdrop-filter: blur(10px);
            display: flex;
            align-items: center;
            justify-content: space-between;
            z-index: 900;
        }

        .topbar-title small {
            display: block;
            margin-bottom: 3px;
            color: #7890a8;
            font-size: 11px;
            font-weight: 600;
        }

        .topbar-title strong {
            color: #173f67;
            font-size: 18px;
            font-weight: 800;
        }

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

        .top-profile {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 6px 8px;
            border-radius: 12px;
            transition: .2s ease;
        }

        .top-profile:hover {
            background: #f3f7f5;
        }

        .top-avatar {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            overflow: hidden;
            background: #e7f5ed;
            color: #08733a;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 13px;
            font-weight: 800;
            border: 2px solid #d8eee1;
            flex-shrink: 0;
        }

        .top-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .top-profile-info strong {
            display: block;
            color: #173f67;
            font-size: 13px;
            font-weight: 800;
        }

        .top-profile-info span {
            display: block;
            margin-top: 2px;
            color: #7b8da1;
            font-size: 11px;
        }

        .top-profile-arrow {
            margin-left: 3px;
            color: #718398;
            font-size: 10px;
            transition: transform .2s ease;
        }

        .profile-dropdown[open] .top-profile-arrow {
            transform: rotate(180deg);
        }

        .profile-menu {
            position: absolute;
            top: calc(100% + 8px);
            right: 0;
            width: 205px;
            padding: 9px;
            background: #ffffff;
            border: 1px solid #e5eaf0;
            border-radius: 13px;
            box-shadow: 0 12px 30px rgba(15,47,82,.13);
            z-index: 1200;
        }

        .profile-menu-header {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 9px 8px 11px;
            margin-bottom: 5px;
            border-bottom: 1px solid #edf0f3;
        }

        .profile-menu-header strong {
            display: block;
            color: #173f67;
            font-size: 12px;
        }

        .profile-menu-header span {
            display: block;
            margin-top: 2px;
            color: #7b8da1;
            font-size: 10px;
        }

        .profile-menu-item {
            display: flex;
            align-items: center;
            gap: 9px;
            width: 100%;
            padding: 10px 9px;
            border-radius: 8px;
            color: #315574;
            font-size: 12px;
            font-weight: 700;
            text-decoration: none;
        }

        .profile-menu-item:hover {
            background: #edf8f2;
            color: #08733a;
        }

        .logout-button {
            width: 100%;
            border: 0;
            background: transparent;
            color: #b42318;
            padding: 10px 9px;
            border-radius: 8px;
            text-align: left;
            font-family: Arial, sans-serif;
            font-size: 12px;
            font-weight: 700;
            cursor: pointer;
        }

        .logout-button:hover {
            background: #fff1f0;
        }

        .content-area {
            padding: 34px 35px 40px;
        }


        @media (max-width: 700px) {

            .profile-grid {
                grid-template-columns: 1fr;
            }


            .profile-container {
                margin: 25px auto;
            }


            .profile-card {
                padding: 20px;
            }


            .profile-header {
                align-items: flex-start;
            }


            .profile-avatar {
                width: 75px;
                height: 75px;
            }


            .photo-form {
                align-items: stretch;
                flex-direction: column;
            }


            .photo-input {
                max-width: none;
            }

        }


        @media (max-width: 900px) {
            .sidebar {
                width: 220px;
            }
            .main-area {
                margin-left: 220px;
            }
            .topbar {
                padding: 0 22px;
            }
            .content-area {
                padding: 28px 22px 35px;
            }
        }

        @media (max-width: 700px) {
            .sidebar {
                position: relative;
                width: 100%;
                min-height: auto;
                max-height: none;
                padding: 18px 12px;
            }
            .main-area {
                margin-left: 0;
            }
            .topbar {
                position: sticky;
                height: auto;
                min-height: 70px;
                padding: 10px 15px;
            }
            .topbar-title small {
                display: none;
            }
            .topbar-title strong {
                font-size: 16px;
            }
            .top-profile-info {
                display: none;
            }
            .content-area {
                padding: 22px 15px 30px;
            }
            .profile-container {
                margin: 0 auto;
                padding: 0;
            }
        }


    

        /* =====================================================
           NAVBAR KHUSUS HALAMAN PROFILE
        ====================================================== */
        body {
            background: #f4f7fb;
        }

        .profile-navbar {
            position: sticky;
            top: 0;
            z-index: 1000;
            width: 100%;
            height: 74px;
            padding: 0 42px;
            background: #ffffff;
            border-bottom: 1px solid #e5eaf0;
            box-shadow: 0 4px 18px rgba(15,47,82,.06);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .profile-nav-brand {
            display: flex;
            align-items: center;
            gap: 11px;
            text-decoration: none;
            color: #12395d;
        }

        .profile-nav-brand img {
            width: 43px;
            height: 43px;
            object-fit: contain;
        }

        .profile-nav-brand-text strong {
            display: block;
            font-size: 15px;
            font-weight: 800;
            letter-spacing: .2px;
        }

        .profile-nav-brand-text span {
            display: block;
            margin-top: 2px;
            color: #7a8da3;
            font-size: 10px;
        }

        .profile-nav-links {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .profile-nav-links a {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            padding: 9px 13px;
            border-radius: 9px;
            color: #49657f;
            text-decoration: none;
            font-size: 12px;
            font-weight: 700;
            transition: .2s ease;
        }

        .profile-nav-links a:hover {
            background: #f0f7f3;
            color: #08733a;
        }

        .profile-nav-links a.active {
            background: #eaf7ef;
            color: #08733a;
        }

        .profile-nav-user {
            display: flex;
            align-items: center;
            gap: 9px;
            padding-left: 15px;
            border-left: 1px solid #e6ebef;
        }

        .profile-nav-avatar {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            overflow: hidden;
            background: #e8f5ed;
            color: #08733a;
            border: 2px solid #d8eee1;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 11px;
            font-weight: 800;
        }

        .profile-nav-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .profile-nav-user strong {
            display: block;
            color: #173f67;
            font-size: 12px;
        }

        .profile-nav-user span {
            display: block;
            margin-top: 2px;
            color: #7b8da1;
            font-size: 10px;
        }

        .profile-nav-logout {
            margin-left: 8px;
            border: 0;
            background: #fff1f0;
            color: #b42318;
            width: 34px;
            height: 34px;
            border-radius: 9px;
            cursor: pointer;
            font-size: 15px;
            transition: .2s ease;
        }

        .profile-nav-logout:hover {
            background: #ffe3e0;
            transform: translateY(-1px);
        }

        .back-button {
            position: fixed;
            top: 22px;
            left: 24px;
            z-index: 100;

            width: 42px;
            height: 42px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: #ffffff;
            color: #12395d;

            border: 1px solid #dfe7ef;
            border-radius: 50%;

            box-shadow: 0 4px 14px rgba(18, 57, 93, 0.10);

            font-size: 23px;
            font-weight: 500;
            line-height: 1;
            text-decoration: none;

            transition: all .2s ease;
        }

        .back-button:hover {
            background: #08733a;
            color: #ffffff;
            border-color: #08733a;
            transform: translateX(-2px);
            box-shadow: 0 6px 18px rgba(8, 115, 58, 0.18);
        }

        .profile-main {
            min-height: 100vh;
            padding: 45px 24px 35px;
        }

        @media (max-width: 1050px) {
            .back-button {
                top: 16px;
                left: 16px;
            }
        }

        @media (max-width: 760px) {
            .back-button {
                width: 38px;
                height: 38px;
                top: 13px;
                left: 13px;
                font-size: 21px;
            }

            .profile-main {
                padding: 70px 14px 25px;
            }

            .profile-grid {
                grid-template-columns: 1fr;
            }
        }


    </style>

<body>

<a
    href="{{ route('sekdes.dashboard') }}"
    class="back-button"
    title="Kembali ke Dashboard"
    aria-label="Kembali ke Dashboard"
>
    ←
</a>

<main class="profile-main">

<div class="profile-container">


    <div class="profile-page-title">

        <h1>
            Profile
        </h1>

        <p>
            Informasi akun Sekretaris Desa Sukamerindu.
        </p>

    </div>


    {{-- =====================================================
         PESAN BERHASIL
    ====================================================== --}}

    @if(session('success'))

        <div class="alert-success">

            {{ session('success') }}

        </div>

    @endif


    {{-- =====================================================
         PESAN ERROR
    ====================================================== --}}

    @if($errors->any())

        <div class="alert-error">

            <strong>
                Data belum dapat disimpan:
            </strong>

            <ul>

                @foreach($errors->all() as $error)

                    <li>
                        {{ $error }}
                    </li>

                @endforeach

            </ul>

        </div>

    @endif


    {{-- =====================================================
         DATA PROFIL
    ====================================================== --}}

    <div class="profile-card">

        <div class="profile-header">

            <form
                id="profilePhotoForm"
                method="POST"
                action="{{ route('sekdes.profil.foto') }}"
                enctype="multipart/form-data"
            >

                @csrf

                <label
                    for="foto_profil"
                    class="profile-avatar"
                    title="Klik foto untuk mengganti foto profil"
                >

                    @if(!empty($akun->profile_photo))

                        <img
                            src="{{ asset($akun->profile_photo) }}"
                            alt="{{ $akun->name }}"
                        >

                    @else

                        {{ strtoupper(substr($akun->name, 0, 2)) }}

                    @endif

                </label>

                <input
                    type="file"
                    id="foto_profil"
                    name="foto_profil"
                    accept=".jpg,.jpeg,.png,.webp"
                    style="display:none;"
                    onchange="document.getElementById('profilePhotoForm').submit();"
                >

            </form>

            <div>

                <h2>
                    {{ $akun->name }}
                </h2>

                <span>
                    Sekretaris Desa
                </span>

            </div>

        </div>

        {{-- NAMA + EMAIL LANGSUNG BISA DIUBAH --}}
        <form
            method="POST"
            action="{{ route('sekdes.profil.update') }}"
        >

            @csrf
            @method('PUT')

            <div class="profile-grid">

                <div class="form-group">

                    <label for="name">
                        Nama
                    </label>

                    <input
                        type="text"
                        id="name"
                        name="name"
                        value="{{ old('name', $akun->name) }}"
                        required
                    >

                </div>

                <div class="form-group">

                    <label for="email">
                        Email
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="{{ old('email', $akun->email ?? '') }}"
                        placeholder="Masukkan email"
                        required
                    >

                </div>

                <div class="form-group">

                    <label>
                        Role
                    </label>

                    <input
                        type="text"
                        value="Sekretaris Desa"
                        readonly
                    >

                </div>

                <div class="form-group">

                    <label>
                        Status
                    </label>

                    <input
                        type="text"
                        value="Aktif"
                        readonly
                    >

                </div>

            </div>

            <div
                style="
                    margin-top:18px;
                    display:flex;
                    justify-content:flex-end;
                "
            >

                <button
                    type="submit"
                    class="btn-primary"
                >
                    💾 Simpan Perubahan
                </button>

            </div>

        </form>




    </div>


    {{-- =====================================================
         UBAH PASSWORD
    ====================================================== --}}

    <div class="profile-card">

        <div class="section-title">
            Ubah Password
        </div>

        <div class="section-description">
            Gunakan password lama untuk membuat password baru.
        </div>


        <form
            method="POST"
            action="{{ route('sekdes.profil.password') }}"
        >

            @csrf

            @method('PUT')


            <div class="form-group">

                <label for="password_lama">
                    Password Lama
                </label>

                <input
                    type="password"
                    id="password_lama"
                    name="password_lama"
                    required
                >

            </div>


            <div
                style="
                    height:15px;
                "
            ></div>


            <div class="form-group">

                <label for="password">
                    Password Baru
                </label>

                <input
                    type="password"
                    id="password"
                    name="password"
                    required
                >

            </div>


            <div
                style="
                    height:15px;
                "
            ></div>


            <div class="form-group">

                <label for="password_confirmation">
                    Konfirmasi Password Baru
                </label>

                <input
                    type="password"
                    id="password_confirmation"
                    name="password_confirmation"
                    required
                >

            </div>


            <div
                style="
                    margin-top:15px;
                    display:flex;
                    justify-content:flex-end;
                "
            >

                <button
                    type="submit"
                    class="btn-primary"
                >
                    🔐 Ubah Password
                </button>

            </div>


        </form>

    </div>


    <footer>

        Sistem Informasi Desa Sukamerindu

    </footer>

</main>

</body>

</html>
