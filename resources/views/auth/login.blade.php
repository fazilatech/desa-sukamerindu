<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Login - Desa Sukamerindu</title>

</head>


<body>


    {{-- =========================================================
         NAVBAR
         Menggunakan navbar utama dari layouts.navigation
    ========================================================== --}}

    @include('layouts.navigation')


    {{-- =========================================================
         LOGIN PAGE
    ========================================================== --}}

    <div class="login-page">


        <div class="login-container">


            {{-- =================================================
                 LEFT SIDE
            ================================================== --}}

            <div class="login-left">


                {{-- =================================================
                     OVERLAY FOTO
                ================================================== --}}

                <div class="login-overlay"></div>


                <div class="login-left-content">


                    {{-- =================================================
                         LOGO
                    ================================================== --}}

                    <div class="logo">

                        <div class="logo-circle">

                            <img
                                src="https://cdn.phototourl.com/free/2026-08-19-ada8088c-135b-4f75-94c5-ef27a75114f8.png"
                                alt="Logo Desa Sukamerindu"
                            >

                        </div>

                    </div>


                    {{-- =================================================
                         TITLE
                    ================================================== --}}

                    <h1>
                        Desa Sukamerindu
                    </h1>


                    {{-- =================================================
                         DESCRIPTION
                    ================================================== --}}

                    <p>

                        Sistem Informasi Pendataan Penduduk Desa
                        untuk membantu pengelolaan data kependudukan
                        secara cepat, rapi dan terintegrasi.

                    </p>


                </div>

            </div>


            {{-- =================================================
                 RIGHT SIDE
            ================================================== --}}

            <div class="login-right">


                <h2>
                    Selamat Datang
                </h2>


                <p class="login-subtitle">

                    Masuk ke sistem informasi Desa Sukamerindu.

                </p>


                {{-- =================================================
                     ERROR
                ================================================== --}}

                @if ($errors->any())

                    <div class="error-box">

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
                     LOGIN FORM
                ================================================== --}}

                <form
                    method="POST"
                    action="{{ route('login') }}"
                >

                    @csrf


                    {{-- =================================================
                         USERNAME
                    ================================================== --}}

                    <div class="form-group">

                        <label for="username">
                            Username
                        </label>


                        <input
                            id="username"
                            type="text"
                            name="username"
                            value="{{ old('username') }}"
                            placeholder="Masukkan username"
                            required
                            autofocus
                        >

                    </div>


                    {{-- =================================================
                         PASSWORD
                    ================================================== --}}

                    <div class="form-group">

                        <label for="password">
                            Password
                        </label>


                        <div class="password-box">

                            <input
                                id="password"
                                type="password"
                                name="password"
                                placeholder="Masukkan password"
                                required
                            >


                            <button
                                type="button"
                                id="togglePassword"
                                aria-label="Tampilkan password"
                            >
                                👁
                            </button>

                        </div>

                    </div>


                    {{-- =================================================
                         REMEMBER + FORGOT PASSWORD
                    ================================================== --}}

                    <div class="remember-row">


                        <label class="remember-label">

                            <input
                                type="checkbox"
                                name="remember"
                            >

                            <span>
                                Ingat saya
                            </span>

                        </label>


                        @if (Route::has('password.request'))

                            <a
                                href="{{ route('password.request') }}"
                            >
                                Lupa Password?
                            </a>

                        @endif


                    </div>


                    {{-- =================================================
                         LOGIN BUTTON
                    ================================================== --}}

                    <button
                        type="submit"
                        class="login-btn"
                    >
                        🔐 Masuk ke Sistem
                    </button>


                </form>


                {{-- =================================================
                     REGISTER
                ================================================== --}}

                <div class="register-link">

                    Belum memiliki akun warga?

                    <a href="{{ route('register') }}">
                        Daftar sekarang
                    </a>

                </div>


            </div>


        </div>

    </div>


<style>

/* =========================================================
   RESET
========================================================= */

* {

    margin: 0;

    padding: 0;

    box-sizing: border-box;

    font-family:
        "Segoe UI",
        Arial,
        sans-serif;

}


/* =========================================================
   BODY
========================================================= */

body {

    min-height: 100vh;

    background: #f3f6f9;

    color: #1f2937;

}


/* =========================================================
   LOGIN PAGE
   FOTO DESA SEBAGAI BACKGROUND BESAR
========================================================= */

.login-page {

    min-height: calc(100vh - 76px);

    display: flex;

    align-items: center;

    justify-content: center;

    padding: 30px;


    /* =====================================================
       FOTO DESA SEBAGAI BACKGROUND BESAR
    ====================================================== */

    background-image:

        linear-gradient(
            rgba(22, 101, 52, .20),
            rgba(20, 83, 45, .30)
        ),

        url(
            "https://cdn.phototourl.com/free/2026-08-24-92e7fd04-494a-4960-a98e-1a563864824c.webp"
        );

    background-size: cover;

    background-position: center;

    background-repeat: no-repeat;

}


/* =========================================================
   LOGIN CONTAINER
   CARD UTAMA TRANSPARAN
========================================================= */

.login-container {

    width: 100%;

    max-width: 1050px;

    min-height: 600px;

    /*
     * CARD DIBUAT TRANSPARAN
     * supaya foto belakang masih terlihat
     */

    background: rgba(255, 255, 255, .18);

    border-radius: 22px;

    overflow: hidden;

    box-shadow:
        0 25px 70px
        rgba(0, 0, 0, .25);

    display: grid;

    grid-template-columns:
        0.9fr 1.1fr;

    /*
     * Efek glass
     */

    backdrop-filter: blur(5px);

    -webkit-backdrop-filter: blur(5px);

}


/* =========================================================
   LEFT SIDE
   FOTO DESA
========================================================= */

.login-left {

    position: relative;

    overflow: hidden;

    color: white;

    padding: 55px 45px;

    display: flex;

    flex-direction: column;

    justify-content: center;

    align-items: center;

    text-align: center;


    /* FOTO DESA */

    background-image:

        url(
            "https://cdn.phototourl.com/free/2026-08-24-92e7fd04-494a-4960-a98e-1a563864824c.webp"
        );

    background-size: cover;

    background-position: center;

    background-repeat: no-repeat;

}


/* =========================================================
   OVERLAY FOTO
========================================================= */

.login-overlay {

    position: absolute;

    inset: 0;

    background:

        linear-gradient(
            160deg,
            rgba(22, 101, 52, .58),
            rgba(20, 83, 45, .68)
        );

    z-index: 1;

}


/* =========================================================
   CONTENT LEFT
========================================================= */

.login-left-content {

    position: relative;

    z-index: 2;

    display: flex;

    flex-direction: column;

    align-items: center;

    justify-content: center;

}


/* =========================================================
   LOGO
========================================================= */

.logo {

    margin-bottom: 22px;

    display: flex;

    justify-content: center;

    align-items: center;

}


/* =========================================================
   LOGO CIRCLE
========================================================= */

.logo-circle {

    width: 110px;

    height: 110px;

    border-radius: 50%;

    background: rgba(255, 255, 255, .95);

    display: flex;

    align-items: center;

    justify-content: center;

    overflow: hidden;

    padding: 9px;

    box-shadow:
        0 8px 20px
        rgba(0, 0, 0, .20);

}


/* =========================================================
   LOGO IMAGE
========================================================= */

.logo-circle img {

    width: 92px;

    height: 92px;

    object-fit: contain;

    display: block;

}


/* =========================================================
   LEFT TITLE
========================================================= */

.login-left h1 {

    font-size: 30px;

    font-weight: 700;

    margin-bottom: 12px;

    text-shadow:
        0 2px 8px
        rgba(0,0,0,.25);

}


/* =========================================================
   LEFT DESCRIPTION
========================================================= */

.login-left p {

    max-width: 370px;

    font-size: 14px;

    line-height: 1.8;

    opacity: .95;

    text-shadow:
        0 2px 6px
        rgba(0,0,0,.25);

}


/* =========================================================
   RIGHT SIDE
   PUTIH TRANSPARAN / GLASS
========================================================= */

.login-right {

    padding: 55px 60px;

    display: flex;

    flex-direction: column;

    justify-content: center;


    /*
     * PUTIH TRANSPARAN
     * Foto belakang masih sedikit terlihat
     */

    background: rgba(255, 255, 255, .70);


    /*
     * Glass effect
     */

    backdrop-filter: blur(8px);

    -webkit-backdrop-filter: blur(8px);

}


/* =========================================================
   RIGHT TITLE
========================================================= */

.login-right h2 {

    color: #166534;

    font-size: 28px;

    margin-bottom: 8px;

}


/* =========================================================
   SUBTITLE
========================================================= */

.login-subtitle {

    color: #6b7280;

    font-size: 14px;

    margin-bottom: 25px;

}


/* =========================================================
   ERROR
========================================================= */

.error-box {

    background: rgba(254, 242, 242, .95);

    border: 1px solid #fecaca;

    color: #b91c1c;

    border-radius: 9px;

    padding: 12px 15px;

    margin-bottom: 18px;

    font-size: 13px;

}


.error-box ul {

    margin: 0;

    padding-left: 18px;

}


/* =========================================================
   FORM
========================================================= */

.form-group {

    margin-bottom: 18px;

}


.form-group label {

    display: block;

    font-size: 13px;

    font-weight: 600;

    margin-bottom: 7px;

    color: #374151;

}


.form-group input {

    width: 100%;

    padding: 12px 13px;

    border: 1px solid #d1d5db;

    border-radius: 9px;

    outline: none;

    font-size: 14px;

    transition: .2s;

    /*
     * Input tetap agak solid
     * supaya gampang dibaca
     */

    background: rgba(255,255,255,.88);

}


.form-group input:focus {

    border-color: #16a34a;

    box-shadow:
        0 0 0 3px
        rgba(22, 163, 74, .10);

}


/* =========================================================
   PASSWORD
========================================================= */

.password-box {

    position: relative;

}


.password-box input {

    padding-right: 45px;

}


.password-box button {

    position: absolute;

    right: 10px;

    top: 50%;

    transform: translateY(-50%);

    border: none;

    background: none;

    cursor: pointer;

    font-size: 18px;

    padding: 3px;

}


/* =========================================================
   REMEMBER
========================================================= */

.remember-row {

    display: flex;

    justify-content: space-between;

    align-items: center;

    margin-bottom: 22px;

    font-size: 13px;

}


.remember-label {

    display: flex;

    align-items: center;

    gap: 7px;

    cursor: pointer;

}


.remember-label input {

    accent-color: #16a34a;

}


.remember-row a {

    color: #166534;

    text-decoration: none;

    font-weight: 600;

}


.remember-row a:hover {

    text-decoration: underline;

}


/* =========================================================
   LOGIN BUTTON
========================================================= */

.login-btn {

    width: 100%;

    padding: 13px;

    border: none;

    border-radius: 9px;

    background: #16a34a;

    color: white;

    font-weight: 700;

    cursor: pointer;

    font-size: 14px;

    transition: .2s;

}


.login-btn:hover {

    background: #15803d;

    transform: translateY(-1px);

}


/* =========================================================
   REGISTER
========================================================= */

.register-link {

    text-align: center;

    margin-top: 20px;

    font-size: 13px;

    color: #6b7280;

}


.register-link a {

    color: #166534;

    font-weight: 700;

    text-decoration: none;

}


.register-link a:hover {

    text-decoration: underline;

}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 768px) {


    .login-page {

        min-height: auto;

        padding: 15px;

    }


    .login-container {

        grid-template-columns: 1fr;

        max-width: 500px;

        min-height: auto;

    }


    .login-left {

        min-height: 350px;

        padding: 40px 25px;

    }


    .login-left h1 {

        font-size: 25px;

    }


    .login-left p {

        font-size: 13px;

    }


    .login-right {

        padding: 35px 25px;

        background: rgba(255, 255, 255, .78);

    }


    .logo-circle {

        width: 95px;

        height: 95px;

    }


    .logo-circle img {

        width: 80px;

        height: 80px;

    }

}

</style>


<script>

document.addEventListener(
    'DOMContentLoaded',
    function () {


        /* =====================================================
           SHOW / HIDE PASSWORD
        ===================================================== */

        const togglePassword =
            document.getElementById(
                'togglePassword'
            );


        const password =
            document.getElementById(
                'password'
            );


        if (
            togglePassword &&
            password
        ) {

            togglePassword.addEventListener(

                'click',

                function () {


                    if (
                        password.type ===
                        'password'
                    ) {


                        password.type =
                            'text';


                        this.textContent =
                            '👁️‍🗨️';

                    }


                    else {


                        password.type =
                            'password';


                        this.textContent =
                            '👁';

                    }

                }

            );

        }

    }

);

</script>


</body>

</html>
