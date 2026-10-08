<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desa Sukamerindu</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Segoe UI", Arial, sans-serif;
        }

        body {
            min-height: 100vh;
            color: #26352b;
            background: #f7f9f7;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        /* HERO DENGAN FOTO DESA */
        .hero {
            position: relative;
            min-height: 410px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 55px 24px;
            overflow: hidden;
            text-align: center;
            color: #fff;
            background-image:
                linear-gradient(rgba(5, 61, 31, .62), rgba(5, 61, 31, .72)),
                url("https://cdn.phototourl.com/free/2026-08-24-92e7fd04-494a-4960-a98e-1a563864824c.webp");
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
        }

        .hero-content {
            position: relative;
            z-index: 1;
            width: 100%;
            max-width: 760px;
        }

        .logo {
            display: block;
            width: 100px;
            height: 100px;
            object-fit: contain;
            margin: 0 auto 18px;
            filter: drop-shadow(0 3px 8px rgba(0, 0, 0, .25));
        }

        .hero h1 {
            margin-bottom: 14px;
            font-size: clamp(30px, 4vw, 43px);
            line-height: 1.2;
            font-weight: 750;
            text-shadow: 0 2px 8px rgba(0, 0, 0, .2);
        }

        .hero p {
            max-width: 650px;
            margin: 0 auto;
            color: rgba(255, 255, 255, .95);
            font-size: 16px;
            line-height: 1.75;
            text-shadow: 0 1px 5px rgba(0, 0, 0, .25);
        }

        .buttons {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 25px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            min-height: 45px;
            padding: 12px 23px;
            border: 1px solid transparent;
            border-radius: 7px;
            font-size: 14px;
            font-weight: 650;
            transition: .2s ease;
        }

        .btn-login {
            color: #176b3b;
            background: #fff;
        }

        .btn-login:hover {
            background: #eaf5ed;
            transform: translateY(-2px);
        }

        .btn-register {
            color: #fff;
            border-color: rgba(255, 255, 255, .8);
            background: rgba(255, 255, 255, .08);
        }

        .btn-register:hover {
            background: rgba(255, 255, 255, .18);
            transform: translateY(-2px);
        }

        /* KONTEN */
        .main-content {
            width: 100%;
            max-width: 1120px;
            margin: 0 auto;
            padding: 48px 25px 55px;
        }

        .intro {
            max-width: 780px;
            margin: 0 auto 38px;
            text-align: center;
        }

        .intro h2 {
            margin-bottom: 12px;
            color: #205b36;
            font-size: 25px;
            font-weight: 750;
        }

        .intro p {
            color: #68766c;
            font-size: 14px;
            line-height: 1.8;
        }

        .section-heading {
            margin-bottom: 20px;
        }

        .section-heading h2 {
            color: #205b36;
            font-size: 23px;
            font-weight: 750;
        }

        .section-heading p {
            margin-top: 7px;
            color: #718076;
            font-size: 14px;
            line-height: 1.6;
        }

        .service-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 18px;
        }

        .service-card {
            padding: 23px 22px;
            border: 1px solid #e2e9e3;
            border-radius: 10px;
            background: #fff;
            transition: .2s ease;
        }

        .service-card:hover {
            border-color: #b8d7c0;
            box-shadow: 0 7px 18px rgba(25, 70, 39, .06);
            transform: translateY(-2px);
        }

        .service-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 48px;
            height: 48px;
            margin-bottom: 15px;
            border-radius: 9px;
            background: #eaf5ed;
            font-size: 23px;
        }

        .service-card h3 {
            margin-bottom: 8px;
            color: #2b4d36;
            font-size: 16px;
            font-weight: 700;
        }

        .service-card p {
            color: #718076;
            font-size: 13px;
            line-height: 1.7;
        }

        .service-link {
            display: inline-block;
            margin-top: 15px;
            color: #176b3b;
            font-size: 13px;
            font-weight: 700;
        }

        .bottom-note {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 25px;
            margin-top: 35px;
            padding: 25px 28px;
            border-radius: 10px;
            background: #eaf4ec;
        }

        .bottom-note h3 {
            margin-bottom: 7px;
            color: #205b36;
            font-size: 18px;
        }

        .bottom-note p {
            color: #64766a;
            font-size: 13px;
            line-height: 1.7;
        }

        .bottom-note .btn {
            flex-shrink: 0;
            color: #fff;
            background: #176b3b;
        }

        .bottom-note .btn:hover {
            background: #0d5b32;
        }

        .footer {
            padding: 20px 25px;
            color: #dce9df;
            background: #164e2d;
            text-align: center;
            font-size: 12px;
            line-height: 1.7;
        }

        @media (max-width: 760px) {
            .hero {
                min-height: 390px;
                padding: 45px 20px;
                background-position: center;
            }

            .hero p {
                font-size: 14px;
            }

            .main-content {
                padding: 38px 18px 42px;
            }

            .service-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 13px;
            }

            .bottom-note {
                align-items: flex-start;
                flex-direction: column;
                padding: 22px;
            }
        }

        @media (max-width: 520px) {
            .hero {
                min-height: 400px;
            }

            .logo {
                width: 88px;
                height: 88px;
            }

            .hero h1 {
                font-size: 30px;
            }

            .buttons {
                flex-direction: column;
            }

            .buttons .btn {
                width: 100%;
            }

            .intro h2 {
                font-size: 22px;
            }

            .service-grid {
                grid-template-columns: 1fr;
            }

            .section-heading h2 {
                font-size: 21px;
            }
        }
    </style>
</head>

<body>
    {{-- NAVBAR --}}
    @include('layouts.navigation')

    {{-- HERO --}}
    <section class="hero">
        <div class="hero-content">
            <img
                src="https://cdn.phototourl.com/free/2026-08-19-ada8088c-135b-4f75-94c5-ef27a75114f8.png"
                alt="Logo Desa Sukamerindu"
                class="logo"
            >

            <h1>Desa Sukamerindu</h1>
            <p>
                Sistem Informasi Pendataan Penduduk Desa untuk membantu pengelolaan
                data kependudukan secara lebih mudah, tertata, dan terintegrasi.
            </p>

            <div class="buttons">
                <a href="{{ route('login') }}" class="btn btn-login">🔐 Masuk ke Sistem</a>
                <a href="{{ route('register') }}" class="btn btn-register">👤 Daftar sebagai Warga</a>
            </div>
        </div>
    </section>

    <main class="main-content">
        <section class="intro">
            <h2>Selamat Datang di Portal Desa Sukamerindu</h2>
            <p>
                Portal ini menyediakan akses ke informasi dan layanan administrasi
                desa. Warga dapat membuat akun untuk menggunakan layanan yang tersedia
                dan melihat informasi sesuai hak akses masing-masing.
            </p>
        </section>

        <section class="services">
            <div class="section-heading">
                <h2>Layanan Desa</h2>
                <p>Beberapa layanan yang dapat diakses melalui sistem informasi desa.</p>
            </div>

            <div class="service-grid">
                <a href="{{ route('login') }}" class="service-card">
                    <div class="service-icon">📄</div>
                    <h3>Pengajuan Surat</h3>
                    <p>Ajukan surat administrasi desa melalui akun warga.</p>
                    <span class="service-link">Masuk untuk mengajukan →</span>
                </a>

                <a href="{{ route('login') }}" class="service-card">
                    <div class="service-icon">👤</div>
                    <h3>Profil Warga</h3>
                    <p>Lihat informasi profil dan data diri yang terdaftar di sistem.</p>
                    <span class="service-link">Masuk ke akun →</span>
                </a>

                <a href="{{ url('/informasi') }}" class="service-card">
                    <div class="service-icon">📢</div>
                    <h3>Informasi Desa</h3>
                    <p>Temukan informasi umum mengenai portal dan layanan desa.</p>
                    <span class="service-link">Baca informasi →</span>
                </a>
            </div>
        </section>

        <section class="bottom-note" id="informasi">
            <div>
                <h3>Belum memiliki akun?</h3>
                <p>Daftarkan diri sebagai warga untuk mulai menggunakan layanan yang tersedia.</p>
            </div>
            <a href="{{ route('register') }}" class="btn">Daftar sebagai Warga →</a>
        </section>
    </main>

    <footer class="footer">
        <p><strong>Desa Sukamerindu</strong></p>
        <p>Sistem Informasi Desa</p>
    </footer>
</body>
</html>
