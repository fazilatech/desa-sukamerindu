<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Edit Profil Desa - Desa Sukamerindu</title>


    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;

            font-family:
                "Segoe UI",
                Arial,
                sans-serif;
        }


        body {

            min-height: 100vh;

            background: #f3f6f9;

            color: #102a43;

        }


        /* =====================================================
           CONTENT
        ====================================================== */

        .page {

            max-width: 1100px;

            margin: 0 auto;

            padding: 55px 30px 80px;

        }


        .page-header {

            margin-bottom: 30px;

        }


        .page-header h1 {

            font-size: 38px;

            font-weight: 800;

            color: #102a43;

            margin-bottom: 10px;

        }


        .page-header p {

            font-size: 16px;

            color: #64748b;

            line-height: 1.7;

        }


        /* =====================================================
           CARD
        ====================================================== */

        .card {

            background: #ffffff;

            border-radius: 16px;

            padding: 32px;

            margin-bottom: 25px;

            border: 1px solid #e5e7eb;

            box-shadow:
                0 8px 25px
                rgba(15, 23, 42, .05);

        }


        .card-header {

            display: flex;

            align-items: center;

            gap: 12px;

            margin-bottom: 25px;

            padding-bottom: 18px;

            border-bottom:
                1px solid #e5e7eb;

        }


        .card-icon {

            width: 45px;

            height: 45px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 10px;

            background: #dcfce7;

            font-size: 22px;

        }


        .card-header h2 {

            font-size: 22px;

            color: #006b3c;

            font-weight: 800;

        }


        /* =====================================================
           FORM GRID
        ====================================================== */

        .form-grid {

            display: grid;

            grid-template-columns:
                repeat(2, 1fr);

            gap: 20px;

        }


        .form-group {

            margin-bottom: 5px;

        }


        .form-group.full {

            grid-column: 1 / -1;

        }


        .form-group label {

            display: block;

            margin-bottom: 8px;

            color: #102a43;

            font-size: 14px;

            font-weight: 700;

        }


        .form-group input,

        .form-group textarea {

            width: 100%;

            padding: 12px 14px;

            border:
                1px solid #d1d5db;

            border-radius: 9px;

            background: #ffffff;

            color: #102a43;

            font-size: 14px;

            outline: none;

            transition:
                border-color .2s,
                box-shadow .2s;

        }


        .form-group textarea {

            min-height: 130px;

            resize: vertical;

            line-height: 1.6;

        }


        .form-group input:focus,

        .form-group textarea:focus {

            border-color: #006b3c;

            box-shadow:
                0 0 0 3px
                rgba(0, 107, 60, .08);

        }


        /* =====================================================
           ACTION BUTTON
        ====================================================== */

        .form-actions {

            display: flex;

            justify-content: flex-end;

            align-items: center;

            gap: 10px;

            margin-top: 28px;

            padding-top: 20px;

            border-top:
                1px solid #e5e7eb;

        }


        .btn {

            display: inline-flex;

            align-items: center;

            justify-content: center;

            gap: 7px;

            border: 0;

            border-radius: 9px;

            padding: 11px 18px;

            font-size: 14px;

            font-weight: 700;

            text-decoration: none;

            cursor: pointer;

        }


        .btn-primary {

            background: #006b3c;

            color: #ffffff;

        }


        .btn-primary:hover {

            background: #00552f;

        }


        .btn-secondary {

            background: #e5e7eb;

            color: #374151;

        }


        .btn-secondary:hover {

            background: #d1d5db;

        }


        /* =====================================================
           ALERT
        ====================================================== */

        .alert {

            padding: 13px 16px;

            border-radius: 10px;

            margin-bottom: 20px;

            font-size: 14px;

            line-height: 1.5;

        }


        .alert-error {

            background: #fef2f2;

            border:
                1px solid #fecaca;

            color: #b91c1c;

        }


        .error-list {

            margin-left: 18px;

            margin-top: 5px;

        }


        /* =====================================================
           RESPONSIVE
        ====================================================== */

        @media (max-width: 700px) {

            .page {

                padding:
                    35px 18px 60px;

            }


            .page-header h1 {

                font-size: 30px;

            }


            .card {

                padding: 23px;

            }


            .form-grid {

                grid-template-columns: 1fr;

            }


            .form-group.full {

                grid-column: auto;

            }


            .form-actions {

                flex-direction: column-reverse;

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
         NAVBAR SEKDES
    ====================================================== --}}

    @include('layouts.navigation')


    {{-- =====================================================
         CONTENT
    ====================================================== --}}

    <main class="page">


        <div class="page-header">

            <h1>
                Edit Profil Desa
            </h1>

            <p>
                Ubah informasi mengenai Desa Sukamerindu
                dan pemerintahan desa.
            </p>

        </div>


        {{-- =================================================
             ERROR VALIDATION
        ================================================== --}}

        @if($errors->any())

            <div class="alert alert-error">

                <strong>
                    Data belum dapat disimpan.
                </strong>

                <ul class="error-list">

                    @foreach($errors->all() as $error)

                        <li>
                            {{ $error }}
                        </li>

                    @endforeach

                </ul>

            </div>

        @endif


        {{-- =================================================
             FORM EDIT PROFIL
        ================================================== --}}

        <section class="card">


            <div class="card-header">

                <div class="card-icon">
                    🏛️
                </div>

                <h2>
                    Informasi Profil Desa
                </h2>

            </div>


            <form
                method="POST"
                action="{{ route('sekdes.profil-desa.update', $profilDesa->id) }}"
            >

                @csrf

                @method('PUT')


                <div class="form-grid">


                    {{-- NAMA DESA --}}

                    <div class="form-group">

                        <label for="nama_desa">
                            Nama Desa
                        </label>

                        <input
                            type="text"
                            id="nama_desa"
                            name="nama_desa"
                            value="{{ old('nama_desa', $profilDesa->nama_desa ?? '') }}"
                            placeholder="Masukkan nama desa"
                            required
                        >

                    </div>


                    {{-- KABUPATEN --}}

                    <div class="form-group">

                        <label for="kabupaten">
                            Kabupaten
                        </label>

                        <input
                            type="text"
                            id="kabupaten"
                            name="kabupaten"
                            value="{{ old('kabupaten', $profilDesa->kabupaten ?? '') }}"
                            placeholder="Masukkan kabupaten"
                            required
                        >

                    </div>


                    {{-- PROVINSI --}}

                    <div class="form-group">

                        <label for="provinsi">
                            Provinsi
                        </label>

                        <input
                            type="text"
                            id="provinsi"
                            name="provinsi"
                            value="{{ old('provinsi', $profilDesa->provinsi ?? '') }}"
                            placeholder="Masukkan provinsi"
                            required
                        >

                    </div>


                    {{-- SISTEM INFORMASI --}}

                    <div class="form-group">

                        <label for="sistem_informasi">
                            Sistem Informasi
                        </label>

                        <input
                            type="text"
                            id="sistem_informasi"
                            name="sistem_informasi"
                            value="{{ old('sistem_informasi', $profilDesa->sistem_informasi ?? '') }}"
                            placeholder="Masukkan nama sistem informasi"
                            required
                        >

                    </div>


                    {{-- TENTANG DESA --}}

                    <div class="form-group full">

                        <label for="tentang_desa">
                            Tentang Desa
                        </label>

                        <textarea
                            id="tentang_desa"
                            name="tentang_desa"
                            placeholder="Masukkan informasi mengenai Desa Sukamerindu"
                            required
                        >{{ old('tentang_desa', $profilDesa->tentang_desa ?? '') }}</textarea>

                    </div>


                    {{-- DESKRIPSI SISTEM --}}

                    <div class="form-group full">

                        <label for="deskripsi_sistem">
                            Deskripsi Sistem Informasi
                        </label>

                        <textarea
                            id="deskripsi_sistem"
                            name="deskripsi_sistem"
                            placeholder="Masukkan deskripsi Sistem Informasi Desa"
                            required
                        >{{ old('deskripsi_sistem', $profilDesa->deskripsi_sistem ?? '') }}</textarea>

                    </div>


                    {{-- PEMERINTAHAN DESA --}}

                    <div class="form-group full">

                        <label for="pemerintahan_desa">
                            Pemerintahan Desa
                        </label>

                        <textarea
                            id="pemerintahan_desa"
                            name="pemerintahan_desa"
                            placeholder="Masukkan informasi pemerintahan desa"
                            required
                        >{{ old('pemerintahan_desa', $profilDesa->pemerintahan_desa ?? '') }}</textarea>

                    </div>


                    {{-- INFORMASI PEMERINTAHAN --}}

                    <div class="form-group full">

                        <label for="informasi_pemerintahan">
                            Informasi Pemerintahan
                        </label>

                        <textarea
                            id="informasi_pemerintahan"
                            name="informasi_pemerintahan"
                            placeholder="Masukkan informasi tambahan mengenai pemerintahan desa"
                            required
                        >{{ old('informasi_pemerintahan', $profilDesa->informasi_pemerintahan ?? '') }}</textarea>

                    </div>


                </div>


                {{-- =================================================
                     BUTTON
                ================================================== --}}

                <div class="form-actions">

                    <a
                        href="{{ route('sekdes.profil-desa') }}"
                        class="btn btn-secondary"
                    >
                        ← Batal
                    </a>


                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        💾 Simpan Perubahan
                    </button>

                </div>


            </form>


        </section>


    </main>


</body>

</html>
