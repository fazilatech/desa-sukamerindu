<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        {{ $surat['judul'] }} - Desa Sukamerindu
    </title>


    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Segoe UI", Arial, sans-serif;
        }


        body {
            min-height: 100vh;
            background: #f3f6f9;
            color: #172033;
        }


        /* =====================================================
           SIDEBAR
        ====================================================== */

        .sidebar {

            position: fixed;

            left: 0;
            top: 0;

            width: 315px;
            height: 100vh;

            background: #126331;

            color: white;

            padding: 35px 18px;

            display: flex;
            flex-direction: column;

            z-index: 10;
        }


        /* BRAND */

        .brand {

            text-align: center;

            padding-bottom: 28px;

            border-bottom:
                1px solid rgba(255,255,255,.25);

        }


        .brand img {

            width: 105px;
            height: 105px;

            object-fit: contain;

            background: white;

            border-radius: 9px;

            padding: 7px;

            margin-bottom: 15px;
        }


        .brand h2 {

            font-size: 21px;

            font-weight: 800;

            letter-spacing: .3px;
        }


        .brand p {

            margin-top: 8px;

            font-size: 15px;

            opacity: .85;
        }


        /* =====================================================
           MENU
        ====================================================== */

        .sidebar-menu {

            margin-top: 25px;

            display: flex;

            flex-direction: column;

            gap: 8px;
        }


        .sidebar-menu a {

            display: flex;

            align-items: center;

            gap: 15px;

            padding: 15px 20px;

            border-radius: 9px;

            color: white;

            text-decoration: none;

            font-size: 16px;

            font-weight: 600;

            transition: .2s;
        }


        .sidebar-menu a:hover {

            background:
                rgba(255,255,255,.12);
        }


        .sidebar-menu a.active {

            background:
                rgba(255,255,255,.15);

            border:
                1px solid rgba(255,255,255,.8);
        }


        .menu-icon {

            width: 25px;

            text-align: center;

            font-size: 18px;
        }


        /* =====================================================
           LOGOUT
        ====================================================== */

        .logout {

            margin-top: auto;

            border-top:
                1px solid rgba(255,255,255,.25);

            padding-top: 20px;
        }


        .logout a {

            display: flex;

            align-items: center;

            gap: 15px;

            padding: 15px 20px;

            border-radius: 9px;

            color: white;

            text-decoration: none;

            font-size: 16px;

            font-weight: 600;
        }


        .logout a:hover {

            background:
                rgba(255,255,255,.12);
        }


        /* =====================================================
           MAIN
        ====================================================== */

        .main {

            margin-left: 315px;

            min-height: 100vh;
        }


        /* =====================================================
           TOPBAR
        ====================================================== */

        .topbar {

            height: 88px;

            background: white;

            border-bottom:
                1px solid #e5e7eb;

            display: flex;

            align-items: center;

            justify-content: space-between;

            padding: 0 50px;
        }


        .page-title {

            font-size: 23px;

            font-weight: 800;

            color: #166534;
        }


        .user-area {

            display: flex;

            align-items: center;

            gap: 13px;
        }


        .avatar {

            width: 50px;
            height: 50px;

            border-radius: 50%;

            background: #dcfce7;

            color: #166534;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 17px;

            font-weight: 800;
        }


        .user-info strong {

            display: block;

            font-size: 16px;
        }


        .user-info span {

            display: block;

            color: #6b7280;

            font-size: 13px;

            margin-top: 2px;
        }


        /* =====================================================
           CONTENT
        ====================================================== */

        .content {

            padding: 45px 55px 70px;
        }


        .heading {

            margin-bottom: 25px;
        }


        .heading h1 {

            font-size: 32px;

            color: #172033;

            margin-bottom: 7px;
        }


        .heading p {

            color: #64748b;

            font-size: 16px;
        }


        /* =====================================================
           SURAT WRAPPER
        ====================================================== */

        .letter-wrapper {

            background: white;

            border-radius: 14px;

            padding: 35px;

            box-shadow:
                0 5px 20px rgba(0,0,0,.06);
        }


        /* =====================================================
           KERTAS SURAT
        ====================================================== */

        .letter {

            max-width: 900px;

            margin: auto;

            background: white;

            border:
                1px solid #d8dee7;

            padding: 60px 70px;
        }


        /* =====================================================
           KOP SURAT
        ====================================================== */

        .letter-header {

            display: flex;

            align-items: center;

            justify-content: center;

            gap: 20px;

            padding-bottom: 18px;

            border-bottom:
                3px solid #166534;

            margin-bottom: 28px;
        }


        .letter-header img {

            width: 80px;
            height: 80px;

            object-fit: contain;
        }


        .letter-header-text {

            text-align: center;
        }


        .letter-header-text h3 {

            font-size: 16px;

            font-weight: 700;
        }


        .letter-header-text h2 {

            font-size: 22px;

            font-weight: 800;

            color: #166534;

            margin-top: 2px;
        }


        .letter-header-text p {

            font-size: 12px;

            margin-top: 4px;

            color: #374151;
        }


        /* =====================================================
           JUDUL SURAT
        ====================================================== */

        .letter-title {

            text-align: center;

            margin:
                28px 0 32px;
        }


        .letter-title h1 {

            font-size: 18px;

            font-weight: 800;

            text-decoration: underline;

            margin-bottom: 7px;
        }


        .letter-title p {

            font-size: 14px;

            color: #374151;
        }


        /* =====================================================
           ISI
        ====================================================== */

        .letter-body {

            font-size: 15px;

            line-height: 1.8;

            text-align: justify;
        }


        .letter-body p {

            margin-bottom: 15px;
        }


        /* DATA WARGA */

        .identity {

            margin:
                18px 0 20px;
        }


        .identity-row {

            display: grid;

            grid-template-columns:
                160px 20px 1fr;

            margin-bottom: 7px;
        }


        .identity-row .label {

            font-weight: 600;
        }


        /* =====================================================
           TANDA TANGAN
        ====================================================== */

        .signature {

            width: 260px;

            margin-left: auto;

            margin-top: 45px;

            text-align: center;

            font-size: 14px;

            line-height: 1.6;
        }


        .signature-space {

            height: 75px;
        }


        .signature strong {

            text-decoration: underline;
        }


        /* =====================================================
           ACTION BUTTON
        ====================================================== */

        .letter-actions {

            max-width: 900px;

            margin:
                25px auto 0;

            display: flex;

            justify-content: space-between;

            align-items: center;
        }


        .btn {

            display: inline-flex;

            align-items: center;

            justify-content: center;

            gap: 8px;

            padding: 12px 20px;

            border-radius: 9px;

            text-decoration: none;

            font-size: 14px;

            font-weight: 700;

            border: none;

            cursor: pointer;

            transition: .2s;
        }


        .btn-back {

            background: #eef2f7;

            color: #374151;
        }


        .btn-back:hover {

            background: #e2e8f0;
        }


        .btn-print {

            background: #166534;

            color: white;
        }


        .btn-print:hover {

            background: #14532d;

            transform: translateY(-1px);
        }


        /* =====================================================
           PRINT
        ====================================================== */

        @media print {

            body {

                background: white;
            }


            .sidebar,
            .topbar,
            .heading,
            .letter-actions {

                display: none !important;
            }


            .main {

                margin-left: 0;
            }


            .content {

                padding: 0;
            }


            .letter-wrapper {

                padding: 0;

                box-shadow: none;
            }


            .letter {

                max-width: none;

                border: none;

                padding: 30px 55px;
            }
        }


        /* =====================================================
           RESPONSIVE
        ====================================================== */

        @media (max-width: 900px) {

            .sidebar {

                width: 230px;
            }


            .main {

                margin-left: 230px;
            }


            .topbar {

                padding: 0 25px;
            }


            .content {

                padding: 30px 25px;
            }


            .letter {

                padding: 40px 30px;
            }
        }


        @media (max-width: 650px) {

            .sidebar {

                position: relative;

                width: 100%;

                height: auto;
            }


            .main {

                margin-left: 0;
            }


            .letter-header {

                flex-direction: column;
            }


            .letter {

                padding: 30px 20px;
            }


            .identity-row {

                grid-template-columns:
                    120px 15px 1fr;
            }


            .letter-actions {

                flex-direction: column;

                gap: 12px;

                align-items: stretch;
            }


            .btn {

                width: 100%;
            }
        }

    </style>

</head>


<body>


    {{-- =====================================================
         SIDEBAR
    ====================================================== --}}

    <aside class="sidebar">


        {{-- BRAND --}}

        <div class="brand">

            <img
                src="https://cdn.phototourl.com/free/2026-08-19-ada8088c-135b-4f75-94c5-ef27a75114f8.png"
                alt="Logo Kabupaten Kepahiang"
            >

            <h2>
                DESA SUKAMERINDU
            </h2>

            <p>
                Sistem Informasi Desa
            </p>

        </div>


        {{-- MENU --}}

        <nav class="sidebar-menu">


            <a
                href="{{ route('warga.pengajuan') }}"
                class="active"
            >

                <span class="menu-icon">
                    📄
                </span>

                <span>
                    Pengajuan Surat
                </span>

            </a>


            <a
                href="{{ route('warga.profil') }}"
            >

                <span class="menu-icon">
                    👤
                </span>

                <span>
                    Profil Warga
                </span>

            </a>


        </nav>


        {{-- LOGOUT --}}

        <div class="logout">

            <a
                href="#"
                onclick="
                    event.preventDefault();
                    document.getElementById('logout-form').submit();
                "
            >

                <span class="menu-icon">
                    🚪
                </span>

                <span>
                    Keluar
                </span>

            </a>

        </div>


        <form
            id="logout-form"
            method="POST"
            action="{{ route('logout') }}"
            style="display:none;"
        >

            @csrf

        </form>


    </aside>



    {{-- =====================================================
         MAIN
    ====================================================== --}}

    <main class="main">


        {{-- TOPBAR --}}

        <header class="topbar">


            <div class="page-title">

                Lihat Surat

            </div>


            <div class="user-area">


                <div class="avatar">

                    {{ strtoupper(substr(auth()->user()->name, 0, 2)) }}

                </div>


                <div class="user-info">

                    <strong>
                        {{ auth()->user()->name }}
                    </strong>

                    <span>
                        Warga
                    </span>

                </div>


            </div>


        </header>



        {{-- CONTENT --}}

        <section class="content">


            <div class="heading">

                <h1>
                    Surat Selesai
                </h1>

                <p>
                    Surat berikut telah selesai diproses
                    oleh Pemerintah Desa.
                </p>

            </div>



            <div class="letter-wrapper">


                {{-- =================================================
                     KERTAS SURAT
                ================================================== --}}

                <div class="letter">


                    {{-- KOP SURAT --}}

                    <div class="letter-header">


                        <img
                            src="https://cdn.phototourl.com/free/2026-08-19-ada8088c-135b-4f75-94c5-ef27a75114f8.png"
                            alt="Logo Desa"
                        >


                        <div class="letter-header-text">

                            <h3>
                                PEMERINTAH KABUPATEN KEPAHIANG
                            </h3>

                            <h2>
                                DESA SUKAMERINDU
                            </h2>

                            <p>
                                Kecamatan Sukamerindu,
                                Kabupaten Kepahiang
                            </p>

                        </div>


                    </div>



                    {{-- JUDUL --}}

                    <div class="letter-title">

                        <h1>
                            {{ $surat['judul'] }}
                        </h1>

                        <p>
                            Nomor:
                            {{ $surat['nomor'] }}
                        </p>

                    </div>



                    {{-- ISI SURAT --}}

                    <div class="letter-body">


                        <p>

                            Yang bertanda tangan di bawah ini,
                            Kepala Desa Sukamerindu, menerangkan
                            bahwa:

                        </p>



                        {{-- DATA WARGA --}}

                        <div class="identity">


                            <div class="identity-row">

                                <span class="label">
                                    Nama
                                </span>

                                <span>
                                    :
                                </span>

                                <span>
                                    {{ auth()->user()->name }}
                                </span>

                            </div>


                            <div class="identity-row">

                                <span class="label">
                                    NIK
                                </span>

                                <span>
                                    :
                                </span>

                                <span>
                                    {{ auth()->user()->nik ?? '-' }}
                                </span>

                            </div>


                            <div class="identity-row">

                                <span class="label">
                                    Username
                                </span>

                                <span>
                                    :
                                </span>

                                <span>
                                    {{ auth()->user()->username }}
                                </span>

                            </div>


                            <div class="identity-row">

                                <span class="label">
                                    No. Telepon
                                </span>

                                <span>
                                    :
                                </span>

                                <span>
                                    {{ auth()->user()->phone ?? '-' }}
                                </span>

                            </div>


                        </div>



                        <p>

                            Adalah benar warga Desa Sukamerindu
                            yang terdaftar dalam administrasi
                            kependudukan Desa Sukamerindu.

                        </p>


                        <p>

                            Surat ini dibuat berdasarkan pengajuan
                            warga dan telah selesai diproses oleh
                            Pemerintah Desa Sukamerindu.

                        </p>


                        <p>

                            Demikian surat keterangan ini dibuat
                            dengan sebenar-benarnya untuk dapat
                            dipergunakan sebagaimana mestinya.

                        </p>



                        {{-- TANDA TANGAN --}}

                        <div class="signature">


                            <p>
                                Sukamerindu,
                                21 Agustus 2026
                            </p>


                            <p>
                                Kepala Desa Sukamerindu
                            </p>


                            <div class="signature-space">
                            </div>


                            <strong>
                                ( NAMA KEPALA DESA )
                            </strong>


                        </div>


                    </div>


                </div>



                {{-- =================================================
                     BUTTON
                ================================================== --}}

                <div class="letter-actions">


                    <a
                        href="{{ route('warga.pengajuan') }}"
                        class="btn btn-back"
                    >

                        ← Kembali

                    </a>


                    <button
                        type="button"
                        class="btn btn-print"
                        onclick="window.print()"
                    >

                        🖨️ Cetak / Simpan PDF

                    </button>


                </div>


            </div>


        </section>


    </main>


</body>

</html>
