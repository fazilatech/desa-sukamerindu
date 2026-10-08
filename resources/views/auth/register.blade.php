<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Daftar - Desa Sukamerindu</title>

</head>


<body>

    {{-- =====================================================
         NAVBAR
         Menggunakan navbar utama dari layouts.navigation
    ====================================================== --}}

    @include('layouts.navigation')


    {{-- =====================================================
         REGISTER PAGE
    ====================================================== --}}

    <div class="register-page">

        <div class="register-card">


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
                 HEADER
            ================================================== --}}

            <div class="header">

                <h1>
                    Desa Sukamerindu
                </h1>

                <h2>
                    Registrasi Akun Warga
                </h2>

                <p>
                    Silakan isi data berikut untuk membuat
                    akun warga Desa Sukamerindu.
                </p>

            </div>


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
                 FORM
            ================================================== --}}

            <form
                method="POST"
                action="{{ route('register') }}"
            >

                @csrf


                {{-- =================================================
                     NIK
                ================================================== --}}

                <div class="form-group">

                    <label for="nik">
                        NIK
                    </label>

                    <input
                        id="nik"
                        type="text"
                        name="nik"
                        value="{{ old('nik') }}"
                        placeholder="Masukkan 16 digit NIK"
                        minlength="16"
                        maxlength="16"
                        pattern="[0-9]{16}"
                        inputmode="numeric"
                        required
                    >

                    <small
                        id="nik-warning"
                        class="nik-warning"
                    >
                        NIK harus terdiri dari 16 digit angka.
                    </small>

                </div>


                {{-- =================================================
                     NAMA
                ================================================== --}}

                <div class="form-group">

                    <label for="name">
                        Nama Lengkap
                    </label>

                    <input
                        id="name"
                        type="text"
                        name="name"
                        value="{{ old('name') }}"
                        placeholder="Masukkan nama lengkap"
                        required
                    >

                </div>


                {{-- =================================================
                     NOMOR TELEPON
                ================================================== --}}

                <div class="form-group">

                    <label for="phone">
                        Nomor Telepon
                    </label>

                    <input
                        id="phone"
                        type="text"
                        name="phone"
                        value="{{ old('phone') }}"
                        placeholder="Masukkan nomor telepon"
                        inputmode="numeric"
                        required
                    >

                </div>


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
                        placeholder="Buat username"
                        required
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
                            placeholder="Buat password"
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
                     KONFIRMASI PASSWORD
                ================================================== --}}

                <div class="form-group">

                    <label for="password_confirmation">
                        Konfirmasi Password
                    </label>

                    <div class="password-box">

                        <input
                            id="password_confirmation"
                            type="password"
                            name="password_confirmation"
                            placeholder="Ulangi password"
                            required
                        >

                        <button
                            type="button"
                            id="toggleConfirmPassword"
                            aria-label="Tampilkan konfirmasi password"
                        >
                            👁
                        </button>

                    </div>

                </div>


                {{-- =================================================
                     BUTTON
                ================================================== --}}

                <button
                    type="submit"
                    class="register-btn"
                >
                    👤 Daftar sebagai Warga
                </button>

            </form>


            {{-- =================================================
                 LOGIN LINK
            ================================================== --}}

            <div class="login-link">

                Sudah memiliki akun?

                <a href="{{ route('login') }}">
                    Masuk ke Sistem
                </a>

            </div>


        </div>

    </div>


    {{-- =====================================================
         STYLE
    ====================================================== --}}

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
           BODY
        ====================================================== */

        body {

            min-height: 100vh;

            background:
                linear-gradient(
                    rgba(22,101,52,.85),
                    rgba(20,83,45,.9)
                );

            color: #1f2937;

        }


        /* =====================================================
           REGISTER PAGE
        ====================================================== */

        .register-page {

            min-height: calc(100vh - 76px);

            display: flex;

            align-items: center;

            justify-content: center;

            padding: 30px 20px;

        }


        /* =====================================================
           CARD
        ====================================================== */

        .register-card {

            width: 100%;

            max-width: 520px;

            background: white;

            border-radius: 20px;

            padding: 40px 45px;

            box-shadow:
                0 20px 60px
                rgba(0,0,0,.25);

        }


        /* =====================================================
           LOGO
        ====================================================== */

        .logo {

            display: flex;

            justify-content: center;

            margin-bottom: 15px;

        }


        .logo-circle {

            width: 95px;

            height: 95px;

            border-radius: 50%;

            background: white;

            display: flex;

            align-items: center;

            justify-content: center;

            overflow: hidden;

            border: 3px solid #166534;

            box-shadow:
                0 4px 12px
                rgba(0,0,0,.12);

        }


        .logo-circle img {

            width: 82px;

            height: 82px;

            object-fit: contain;

            display: block;

        }


        /* =====================================================
           HEADER
        ====================================================== */

        .header {

            text-align: center;

            margin-bottom: 25px;

        }


        .header h1 {

            color: #166534;

            font-size: 24px;

            font-weight: 800;

            margin-bottom: 8px;

        }


        .header h2 {

            color: #111827;

            font-size: 25px;

            margin-bottom: 8px;

        }


        .header p {

            color: #6b7280;

            font-size: 13px;

            line-height: 1.6;

        }


        /* =====================================================
           ERROR BOX
        ====================================================== */

        .error-box {

            background: #fee2e2;

            border: 1px solid #fecaca;

            color: #991b1b;

            border-radius: 9px;

            padding: 12px 15px;

            margin-bottom: 20px;

            font-size: 13px;

        }


        .error-box ul {

            margin: 0;

            padding-left: 18px;

        }


        /* =====================================================
           FORM
        ====================================================== */

        .form-group {

            margin-bottom: 16px;

        }


        .form-group label {

            display: block;

            font-size: 13px;

            font-weight: 600;

            margin-bottom: 7px;

            color: #1f2937;

        }


        .form-group input {

            width: 100%;

            padding: 12px 13px;

            border: 1px solid #d1d5db;

            border-radius: 9px;

            outline: none;

            font-size: 14px;

            background: white;

        }


        .form-group input:focus {

            border-color: #16a34a;

            box-shadow:
                0 0 0 3px
                rgba(22,163,74,.1);

        }


        /* =====================================================
           NIK WARNING
        ====================================================== */

        .nik-warning {

            display: none;

            color: #dc2626;

            font-size: 12px;

            margin-top: 6px;

        }


        .form-group input.nik-invalid {

            border-color: #dc2626;

            box-shadow:
                0 0 0 3px
                rgba(220,38,38,.1);

        }


        /* =====================================================
           PASSWORD
        ====================================================== */

        .password-box {

            position: relative;

        }


        .password-box input {

            padding-right: 45px;

        }


        .password-box button {

            position: absolute;

            right: 10px;

            top: 8px;

            width: 32px;

            height: 32px;

            border: none;

            background: transparent;

            cursor: pointer;

            font-size: 17px;

        }


        /* =====================================================
           REGISTER BUTTON
        ====================================================== */

        .register-btn {

            width: 100%;

            padding: 13px;

            margin-top: 5px;

            border: none;

            border-radius: 9px;

            background: #16a34a;

            color: white;

            font-weight: bold;

            cursor: pointer;

            font-size: 14px;

            transition: .2s;

        }


        .register-btn:hover {

            background: #15803d;

        }


        /* =====================================================
           LOGIN LINK
        ====================================================== */

        .login-link {

            text-align: center;

            margin-top: 20px;

            font-size: 13px;

            color: #6b7280;

        }


        .login-link a {

            color: #166534;

            font-weight: 700;

            text-decoration: none;

        }


        .login-link a:hover {

            text-decoration: underline;

        }


        /* =====================================================
           MOBILE
        ====================================================== */

        @media(max-width: 576px) {

            .register-page {

                min-height: calc(100vh - 60px);

                padding: 20px 15px;

            }


            .register-card {

                padding: 30px 25px;

            }


            .header h1 {

                font-size: 21px;

            }


            .header h2 {

                font-size: 22px;

            }

        }

    </style>


    {{-- =====================================================
         JAVASCRIPT
    ====================================================== --}}

    <script>

        document.addEventListener(
            'DOMContentLoaded',
            function () {


                /* =================================================
                   PASSWORD
                ================================================== */

                const password =
                    document.getElementById(
                        'password'
                    );


                const togglePassword =
                    document.getElementById(
                        'togglePassword'
                    );


                togglePassword.addEventListener(
                    'click',
                    function () {

                        if (
                            password.type ===
                            'password'
                        ) {

                            password.type =
                                'text';

                            togglePassword.textContent =
                                '👁️‍🗨️';

                        } else {

                            password.type =
                                'password';

                            togglePassword.textContent =
                                '👁';

                        }

                    }
                );


                /* =================================================
                   CONFIRM PASSWORD
                ================================================== */

                const confirmPassword =
                    document.getElementById(
                        'password_confirmation'
                    );


                const toggleConfirmPassword =
                    document.getElementById(
                        'toggleConfirmPassword'
                    );


                toggleConfirmPassword.addEventListener(
                    'click',
                    function () {

                        if (
                            confirmPassword.type ===
                            'password'
                        ) {

                            confirmPassword.type =
                                'text';

                            toggleConfirmPassword.textContent =
                                '👁️‍🗨️';

                        } else {

                            confirmPassword.type =
                                'password';

                            toggleConfirmPassword.textContent =
                                '👁';

                        }

                    }
                );


                /* =================================================
                   NIK
                ================================================== */

                const nik =
                    document.getElementById(
                        'nik'
                    );


                const nikWarning =
                    document.getElementById(
                        'nik-warning'
                    );


                nik.addEventListener(
                    'input',
                    function () {

                        /*
                         * Hanya boleh angka
                         */

                        this.value =
                            this.value.replace(
                                /\D/g,
                                ''
                            );


                        /*
                         * Jika kurang dari
                         * 16 digit
                         */

                        if (
                            this.value.length > 0 &&
                            this.value.length < 16
                        ) {

                            nikWarning.style.display =
                                'block';

                            this.classList.add(
                                'nik-invalid'
                            );

                        } else {

                            nikWarning.style.display =
                                'none';

                            this.classList.remove(
                                'nik-invalid'
                            );

                        }

                    }
                );


                /*
                 * Saat keluar dari
                 * input NIK
                 */

                nik.addEventListener(
                    'blur',
                    function () {

                        if (
                            this.value.length !== 16
                        ) {

                            nikWarning.style.display =
                                'block';

                            this.classList.add(
                                'nik-invalid'
                            );

                        }

                    }
                );


                /*
                 * Saat kembali
                 * ke input NIK
                 */

                nik.addEventListener(
                    'focus',
                    function () {

                        if (
                            this.value.length === 16
                        ) {

                            nikWarning.style.display =
                                'none';

                            this.classList.remove(
                                'nik-invalid'
                            );

                        }

                    }
                );


                /* =================================================
                   NOMOR TELEPON
                ================================================== */

                const phone =
                    document.getElementById(
                        'phone'
                    );


                phone.addEventListener(
                    'input',
                    function () {

                        this.value =
                            this.value.replace(
                                /\D/g,
                                ''
                            );

                    }
                );

            }
        );

    </script>


</body>

</html>
