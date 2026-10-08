<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Transparansi Desa Sukamerindu</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f1f5f9;
            color: #334155;
        }

        /* =========================
           CONTENT
        =========================
        ========================= */

        .page-container {
            max-width: 665px;
            margin: 40px auto;
            padding: 0 10px;
        }

        .page-title {
            margin-bottom: 25px;
        }

        .page-title h1 {
            margin: 0;
            font-size: 25px;
            color: #12304a;
            font-weight: 700;
        }

        .page-title p {
            margin-top: 7px;
            margin-bottom: 0;
            color: #64748b;
            font-size: 10px;
        }

        /* =========================
           CARD
        ========================= */

        .card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 11px;
            padding: 20px;
            margin-bottom: 18px;
            box-shadow: 0 2px 5px rgba(15, 23, 42, 0.04);
        }

        .card-header {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 16px;
        }

        .card-icon {
            width: 27px;
            height: 27px;
            border-radius: 6px;
            background: #d1fae5;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
        }

        .card-header h2 {
            margin: 0;
            font-size: 15px;
            color: #087443;
            font-weight: 700;
        }

        .description {
            font-size: 10px;
            color: #64748b;
            line-height: 1.8;
            margin: 0;
        }

        /* =========================
           TRANSPARANSI ITEMS
        ========================= */

        .transparansi-list {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
        }

        .transparansi-item {
            border: 1px solid #e2e8f0;
            background: #f8fafc;
            border-radius: 8px;
            padding: 14px;
        }

        .transparansi-item h3 {
            margin: 0 0 7px 0;
            font-size: 10px;
            color: #087443;
            font-weight: 700;
        }

        .transparansi-item p {
            margin: 0;
            font-size: 9px;
            color: #64748b;
            line-height: 1.6;
        }

        .year-box {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border: 1px solid #e2e8f0;
            background: #f8fafc;
            padding: 12px 14px;
            border-radius: 8px;
            margin-bottom: 9px;
        }

        .year-box:last-child {
            margin-bottom: 0;
        }

        .year-title {
            font-size: 10px;
            font-weight: 700;
            color: #334155;
        }

        .year-status {
            font-size: 9px;
            color: #087443;
            background: #dcfce7;
            padding: 4px 8px;
            border-radius: 5px;
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 850px) {

            .navbar {
                padding: 0 15px;
            }

            .nav-menu {
                gap: 12px;
                margin-right: 15px;
            }

            .nav-menu a {
                font-size: 9px;
            }

            .page-container {
                max-width: 90%;
            }
        }

        @media (max-width: 650px) {

            .navbar {
                height: auto;
                min-height: 70px;
                flex-wrap: wrap;
                padding: 12px 15px;
                gap: 10px;
            }

            .nav-menu {
                order: 3;
                width: 100%;
                justify-content: center;
                margin: 5px 0 0;
                flex-wrap: wrap;
            }

            .login-button {
                margin-left: auto;
            }

            .transparansi-list {
                grid-template-columns: 1fr;
            }

            .page-container {
                margin-top: 25px;
            }
        }
    </style>
</head>

<body>

    {{-- NAVBAR UTAMA --}}
    @include('layouts.navigation')



    <!-- =========================
         CONTENT
    ========================= -->

    <main class="page-container">

        <div class="page-title">

            <h1>
                Transparansi Desa
            </h1>

            <p>
                Informasi transparansi dan pengelolaan keuangan Desa Sukamerindu.
            </p>

        </div>


        <!-- TENTANG TRANSPARANSI -->

        <div class="card">

            <div class="card-header">

                <div class="card-icon">
                    💰
                </div>

                <h2>
                    Transparansi Desa Sukamerindu
                </h2>

            </div>

            <p class="description">
                Transparansi Desa Sukamerindu merupakan bentuk keterbukaan
                pemerintah desa dalam menyampaikan informasi mengenai
                pengelolaan anggaran dan kegiatan desa kepada masyarakat.
            </p>

        </div>


        <!-- INFORMASI KEUANGAN -->

        <div class="card">

            <div class="card-header">

                <div class="card-icon">
                    📊
                </div>

                <h2>
                    Informasi Keuangan Desa
                </h2>

            </div>


            <div class="transparansi-list">

                <div class="transparansi-item">

                    <h3>
                        Pendapatan Desa
                    </h3>

                    <p>
                        Informasi mengenai sumber dan jumlah pendapatan
                        yang diterima oleh Desa Sukamerindu.
                    </p>

                </div>


                <div class="transparansi-item">

                    <h3>
                        Belanja Desa
                    </h3>

                    <p>
                        Informasi mengenai penggunaan anggaran untuk
                        kegiatan dan pelayanan masyarakat desa.
                    </p>

                </div>


                <div class="transparansi-item">

                    <h3>
                        Pembiayaan Desa
                    </h3>

                    <p>
                        Informasi mengenai pembiayaan dalam penyelenggaraan
                        pemerintahan dan pembangunan desa.
                    </p>

                </div>


                <div class="transparansi-item">

                    <h3>
                        Realisasi Anggaran
                    </h3>

                    <p>
                        Informasi mengenai realisasi penggunaan anggaran
                        Desa Sukamerindu.
                    </p>

                </div>

            </div>

        </div>


        <!-- TAHUN ANGGARAN -->

        <div class="card">

            <div class="card-header">

                <div class="card-icon">
                    📅
                </div>

                <h2>
                    Tahun Anggaran
                </h2>

            </div>


            <div class="year-box">

                <span class="year-title">
                    Tahun Anggaran 2026
                </span>

                <span class="year-status">
                    Tersedia
                </span>

            </div>


            <div class="year-box">

                <span class="year-title">
                    Tahun Anggaran 2025
                </span>

                <span class="year-status">
                    Tersedia
                </span>

            </div>

        </div>


        <!-- KETERBUKAAN INFORMASI -->

        <div class="card">

            <div class="card-header">

                <div class="card-icon">
                    📄
                </div>

                <h2>
                    Keterbukaan Informasi
                </h2>

            </div>

            <p class="description">
                Pemerintah Desa Sukamerindu berkomitmen untuk menyediakan
                informasi yang dapat diakses masyarakat sebagai bentuk
                keterbukaan dalam penyelenggaraan pemerintahan desa.
            </p>

        </div>

    </main>

</body>
</html>
