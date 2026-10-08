<x-guest-layout>

    <div class="forgot-page">

        <div class="forgot-card">

            <!-- =================================================
                 LOGO DESA
            ================================================== -->

            <div class="brand-section">

                <div class="logo-wrapper">

                    <img
                        src="https://cdn.phototourl.com/free/2026-08-19-ada8088c-135b-4f75-94c5-ef27a75114f8.png"
                        alt="Logo Kabupaten Kepahiang"
                        class="logo-kepahiang"
                    >

                </div>

                <h2 class="brand-title">
                    DESA SUKAMERINDU
                </h2>

                <small class="brand-subtitle">
                    Sistem Informasi Desa
                </small>

            </div>


            <!-- =================================================
                 TITLE
            ================================================== -->

            <div class="title-section">

                <h2 class="forgot-title">
                    Lupa Password?
                </h2>

                <p class="forgot-description">
                    Jangan khawatir. Masukkan email yang terdaftar
                    pada akun Desa Sukamerindu kamu dan kami akan
                    mengirimkan link untuk membuat password baru.
                </p>

            </div>


            <!-- =================================================
                 STATUS
            ================================================== -->

            @if (session('status'))

                <div class="alert-success">

                    {{ session('status') }}

                </div>

            @endif


            <!-- =================================================
                 ERROR
            ================================================== -->

            @if ($errors->any())

                <div class="alert-danger">

                    <ul>

                        @foreach ($errors->all() as $error)

                            <li>
                                {{ $error }}
                            </li>

                        @endforeach

                    </ul>

                </div>

            @endif


            <!-- =================================================
                 FORM
            ================================================== -->

            <form
                method="POST"
                action="{{ route('password.email') }}"
            >

                @csrf


                <!-- EMAIL -->

                <div class="form-group">

                    <label
                        for="email"
                        class="forgot-label"
                    >
                        Email
                    </label>

                    <input
                        id="email"
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        class="forgot-input"
                        placeholder="Masukkan email kamu..."
                        required
                        autofocus
                        autocomplete="email"
                    >

                </div>


                <!-- BUTTON -->

                <button
                    type="submit"
                    class="forgot-button"
                >
                    Kirim Link Reset Password
                </button>

            </form>


            <!-- =================================================
                 BACK TO LOGIN
            ================================================== -->

            <div class="back-wrapper">

                <a
                    href="{{ route('login') }}"
                    class="back-login"
                >
                    ← Kembali ke Login
                </a>

            </div>


        </div>

    </div>


    <style>

        /* =====================================================
           PAGE
        ===================================================== */

        .forgot-page {

            min-height: 100vh;

            display: flex;

            align-items: center;

            justify-content: center;

            padding: 40px 20px;

            background: #f5f6f8;

        }


        /* =====================================================
           CARD
        ===================================================== */

        .forgot-card {

            width: 100%;

            max-width: 500px;

            background: #ffffff;

            border-radius: 30px;

            padding: 45px 50px;

            box-shadow:
                0 20px 60px rgba(0, 0, 0, .12);

        }


        /* =====================================================
           BRAND
        ===================================================== */

        .brand-section {

            text-align: center;

            margin-bottom: 30px;

        }


        .logo-wrapper {

            width: 90px;

            height: 90px;

            margin: 0 auto;

            display: flex;

            align-items: center;

            justify-content: center;

            background: #ffffff;

            border-radius: 18px;

            overflow: hidden;

        }


        .logo-kepahiang {

            width: 85px;

            height: 85px;

            object-fit: contain;

            display: block;

        }


        .brand-title {

            margin: 14px 0 4px;

            font-size: 20px;

            font-weight: 800;

            letter-spacing: 1.5px;

            color: #166534;

        }


        .brand-subtitle {

            color: #6b7280;

            font-size: 14px;

        }


        /* =====================================================
           TITLE
        ===================================================== */

        .title-section {

            text-align: center;

            margin-bottom: 28px;

        }


        .forgot-title {

            font-size: 34px;

            font-weight: 800;

            color: #111827;

            margin: 0 0 12px;

        }


        .forgot-description {

            color: #6b7280;

            line-height: 1.7;

            font-size: 15px;

            margin: 0;

        }


        /* =====================================================
           ALERT SUCCESS
        ===================================================== */

        .alert-success {

            background: #ecfdf5;

            border: 1px solid #a7f3d0;

            color: #047857;

            border-radius: 12px;

            padding: 13px 15px;

            margin-bottom: 20px;

            font-size: 14px;

        }


        /* =====================================================
           ALERT ERROR
        ===================================================== */

        .alert-danger {

            background: #fef2f2;

            border: 1px solid #fecaca;

            color: #b91c1c;

            border-radius: 12px;

            padding: 13px 15px;

            margin-bottom: 20px;

            font-size: 14px;

        }


        .alert-danger ul {

            margin: 0;

            padding-left: 20px;

        }


        /* =====================================================
           FORM
        ===================================================== */

        .form-group {

            margin-bottom: 24px;

        }


        .forgot-label {

            display: block;

            font-weight: 600;

            margin-bottom: 10px;

            color: #111827;

            font-size: 15px;

        }


        .forgot-input {

            width: 100%;

            border: 1px solid #e5e7eb;

            border-radius: 16px;

            padding: 15px 18px;

            font-size: 16px;

            outline: none;

            background: #ffffff;

            color: #111827;

            transition: .2s;

            box-sizing: border-box;

        }


        .forgot-input::placeholder {

            color: #9ca3af;

        }


        .forgot-input:focus {

            border-color: #16a34a;

            box-shadow:
                0 0 0 3px rgba(22, 163, 74, .12);

        }


        /* =====================================================
           BUTTON
        ===================================================== */

        .forgot-button {

            width: 100%;

            border: none;

            background: #16a34a;

            color: #ffffff;

            padding: 17px;

            border-radius: 16px;

            font-weight: 700;

            font-size: 16px;

            cursor: pointer;

            transition: .2s;

        }


        .forgot-button:hover {

            background: #15803d;

            transform: translateY(-1px);

        }


        .forgot-button:active {

            transform: translateY(0);

        }


        /* =====================================================
           BACK LOGIN
        ===================================================== */

        .back-wrapper {

            text-align: center;

            margin-top: 24px;

        }


        .back-login {

            color: #166534;

            text-decoration: none;

            font-weight: 600;

            font-size: 14px;

        }


        .back-login:hover {

            text-decoration: underline;

        }


        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 576px) {

            .forgot-page {

                padding: 25px 15px;

            }


            .forgot-card {

                padding: 35px 25px;

                border-radius: 22px;

            }


            .forgot-title {

                font-size: 28px;

            }


            .brand-title {

                font-size: 18px;

            }


            .logo-wrapper {

                width: 80px;

                height: 80px;

            }


            .logo-kepahiang {

                width: 75px;

                height: 75px;

            }

        }

    </style>

</x-guest-layout>
