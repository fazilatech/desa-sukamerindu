<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Dashboard Warga - Desa Sukamerindu</title>


    <style>

        /* =====================================================
           RESET
        ====================================================== */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;

            font-family:
                "Segoe UI",
                Arial,
                sans-serif;
        }


        /* =====================================================
           HTML & BODY
        ====================================================== */

        html,
        body {
            width: 100%;
            min-height: 100%;
        }


        body {
            min-height: 100vh;

            background: #f3f6f9;

            color: #1f2937;
        }


        a {
            text-decoration: none;
            color: inherit;
        }


        /* =====================================================
           CONTENT

           SAMA PERSIS DENGAN
           PENGAJUAN SURAT
        ====================================================== */

        .page-content {

            min-height:
                calc(100vh - 76px);

            background: #f3f6f9;

            padding:
                50px 45px;
        }


        /* =====================================================
           CONTENT CONTAINER

           INI YANG MEMBUAT POSISI DASHBOARD
           SAMA DENGAN PENGAJUAN SURAT
        ====================================================== */

        .content-container {

            max-width: 1250px;

            margin: 0 auto;
        }


        /* =====================================================
           PAGE HEADER
        ====================================================== */

        .page-header {

            margin-bottom: 28px;
        }


        .page-header h1 {

            color: #0f2f52;

            font-size: 32px;

            font-weight: 800;

            margin-bottom: 7px;

            line-height: 1.2;
        }


        .page-header p {

            color: #66809e;

            font-size: 14px;

            line-height: 1.5;
        }


        /* =====================================================
           WELCOME CARD
        ====================================================== */

        .welcome-card {

            width: 100%;

            background: #ffffff;

            border:
                1px solid #e5e7eb;

            border-radius: 16px;

            padding:
                28px 30px;

            margin-bottom: 20px;

            box-shadow:
                0 4px 15px
                rgba(0, 0, 0, .04);
        }


        .welcome-card h2 {

            color: #087b3f;

            font-size: 20px;

            font-weight: 800;

            margin-bottom: 8px;

            line-height: 1.3;
        }


        .welcome-card p {

            color: #66809e;

            font-size: 14px;

            line-height: 1.6;
        }


        /* =====================================================
           DASHBOARD CARDS
        ====================================================== */

        .dashboard-grid {

            width: 100%;

            display: grid;

            grid-template-columns:
                repeat(2, minmax(0, 1fr));

            gap: 20px;
        }


        /* =====================================================
           DASHBOARD CARD
        ====================================================== */

        .dashboard-card {

            width: 100%;

            min-height: 158px;

            background: #ffffff;

            border:
                1px solid #e5e7eb;

            border-radius: 16px;

            padding: 24px;

            box-shadow:
                0 4px 15px
                rgba(0, 0, 0, .04);

            transition:
                transform .2s ease,
                box-shadow .2s ease;
        }


        .dashboard-card:hover {

            transform:
                translateY(-2px);

            box-shadow:
                0 8px 20px
                rgba(0, 0, 0, .07);
        }


        /* =====================================================
           ICON
        ====================================================== */

        .dashboard-card-icon {

            width: 46px;

            height: 46px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 11px;

            background: #dcfce7;

            font-size: 21px;

            margin-bottom: 17px;
        }


        /* =====================================================
           CARD TITLE
        ====================================================== */

        .dashboard-card h3 {

            color: #087b3f;

            font-size: 18px;

            font-weight: 800;

            margin-bottom: 7px;

            line-height: 1.3;
        }


        /* =====================================================
           CARD DESCRIPTION
        ====================================================== */

        .dashboard-card p {

            color: #66809e;

            font-size: 14px;

            line-height: 1.5;
        }


        /* =====================================================
           RESPONSIVE
        ====================================================== */

        @media (max-width: 900px) {

            .page-content {

                padding:
                    35px 25px;
            }


            .page-header h1 {

                font-size: 28px;
            }

        }


        @media (max-width: 600px) {

            .page-content {

                padding:
                    25px 15px;
            }


            .page-header h1 {

                font-size: 24px;
            }


            .page-header p {

                font-size: 13px;
            }


            .welcome-card {

                padding:
                    22px 18px;
            }


            .welcome-card h2 {

                font-size: 18px;
            }


            .dashboard-grid {

                grid-template-columns: 1fr;
            }


            .dashboard-card {

                padding: 22px 18px;
            }

        }

    </style>

</head>


<body>


    {{-- =====================================================
         NAVBAR
         SAMA DENGAN PENGAJUAN SURAT
    ====================================================== --}}

    @include('layouts.navigation')


    {{-- =====================================================
         CONTENT
    ====================================================== --}}

    <main class="page-content">


        <div class="content-container">


            {{-- =================================================
                 PAGE HEADER
            ================================================== --}}

            <div class="page-header">

                <h1>
                    Dashboard Warga
                </h1>

                <p>
                    Selamat datang di Sistem Informasi Desa Sukamerindu.
                </p>

            </div>



            {{-- =================================================
                 WELCOME CARD
            ================================================== --}}

            <div class="welcome-card">

                <h2>

                    Selamat Datang,
                    {{ auth()->user()->name }}

                </h2>


                <p>

                    Anda telah berhasil masuk ke dalam
                    Sistem Informasi Desa Sukamerindu sebagai warga.

                </p>

            </div>



            {{-- =================================================
                 DASHBOARD MENU
            ================================================== --}}

            <div class="dashboard-grid">


                {{-- =================================================
                     PENGAJUAN SURAT
                ================================================== --}}

                <a
                    href="{{ route('warga.pengajuan') }}"
                    class="dashboard-card"
                >

                    <div class="dashboard-card-icon">
                        📄
                    </div>


                    <h3>
                        Pengajuan Surat
                    </h3>


                    <p>
                        Ajukan surat administrasi desa secara online
                        dengan lebih mudah dan cepat.
                    </p>

                </a>



                {{-- =================================================
                     PROFIL WARGA
                ================================================== --}}

                <a
                    href="{{ route('warga.profil') }}"
                    class="dashboard-card"
                >

                    <div class="dashboard-card-icon">
                        👤
                    </div>


                    <h3>
                        Profil Warga
                    </h3>


                    <p>
                        Lihat informasi data pribadi dan identitas
                        warga yang terdaftar dalam sistem.
                    </p>

                </a>


            </div>


        </div>


    </main>


</body>

</html>
