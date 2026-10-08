<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Profil Warga - Desa Sukamerindu
    </title>


    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Segoe UI", Arial, sans-serif;
        }


        html,
        body {
            width: 100%;
            min-height: 100%;
        }


        body {
            background: #f3f6f9;
            color: #1f2937;
        }


        button,
        input,
        select,
        textarea {
            font-family: inherit;
        }


        /* =====================================================
           CONTENT
        ====================================================== */

        .page-content {

            width: 100%;

            min-height: calc(100vh - 80px);

            padding:
                45px 20px 60px;

        }


        .content-container {

            width: 1060px;

            max-width: 100%;

            margin:
                0 auto;

        }


        /* =====================================================
           PAGE HEADER
        ====================================================== */

        .page-header {

            margin-bottom: 28px;

        }


        .page-header h1 {

            font-size: 30px;

            line-height: 1.2;

            font-weight: 800;

            color: #173b5f;

        }


        .page-header p {

            margin-top: 8px;

            font-size: 14px;

            color: #68809a;

        }


        /* =====================================================
           PROFILE CARD
        ====================================================== */

        .profile-card {

            background: #ffffff;

            border:
                1px solid #e5e7eb;

            border-radius: 16px;

            padding: 28px;

            box-shadow:
                0 2px 8px
                rgba(15, 23, 42, 0.03);

        }


        /* =====================================================
           PROFILE HEADER
        ====================================================== */

        .profile-header {

            display: flex;

            align-items: center;

            gap: 18px;

            padding-bottom: 24px;

            margin-bottom: 25px;

            border-bottom:
                1px solid #e5e7eb;

        }


        .profile-avatar-wrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
            flex-shrink: 0;
        }

        .profile-avatar {
            position: relative;
            width: 68px;
            height: 68px;
            border-radius: 50%;
            overflow: hidden;
            background: #dcfce7;
            color: #166534;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            font-weight: 800;
            flex-shrink: 0;
            cursor: pointer;
        }

        .profile-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .avatar-overlay {
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.45);
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            opacity: 0;
            transition: .2s;
        }

        .profile-avatar:hover .avatar-overlay {
            opacity: 1;
        }

        .photo-hint {
            margin-top: 5px;
            font-size: 9px;
            color: #94a3b8;
            white-space: nowrap;
        }


        .profile-header h2 {

            font-size: 23px;

            color: #111827;

            margin-bottom: 5px;

        }


        .profile-header p {

            color: #64748b;

            font-size: 14px;

        }


        .role-badge {

            display: inline-block;

            margin-top: 7px;

            padding:
                4px 10px;

            background: #dcfce7;

            color: #166534;

            border-radius: 20px;

            font-size: 12px;

            font-weight: 700;

        }


        /* =====================================================
           SUCCESS
        ====================================================== */

        .success-message {

            margin-bottom: 25px;

            padding:
                13px 16px;

            border-radius: 9px;

            background: #dcfce7;

            border:
                1px solid #86efac;

            color: #166534;

            font-size: 14px;

        }


        /* =====================================================
           ERROR
        ====================================================== */

        .error-message {

            margin-bottom: 25px;

            padding:
                13px 16px;

            border-radius: 9px;

            background: #fee2e2;

            border:
                1px solid #fecaca;

            color: #b91c1c;

            font-size: 14px;

        }


        .error-message ul {

            margin-left: 18px;

        }


        .error-message li {

            margin-bottom: 4px;

        }


        /* =====================================================
           SECTION
        ====================================================== */

        .section {

            margin-bottom: 32px;

        }


        .section-title {

            display: flex;

            align-items: center;

            gap: 9px;

            margin-bottom: 18px;

            padding-bottom: 10px;

            border-bottom:
                1px solid #e5e7eb;

        }


        .section-title::before {

            content: "";

            width: 4px;

            height: 21px;

            border-radius: 4px;

            background: #16a34a;

        }


        .section-title h3 {

            font-size: 17px;

            color: #173b5f;

            font-weight: 800;

        }


        /* =====================================================
           GRID
        ====================================================== */

        .profile-grid {

            display: grid;

            grid-template-columns:
                1fr 1fr;

            gap:
                20px 18px;

        }


        .field {

            display: flex;

            flex-direction: column;

        }


        .field.full {

            grid-column:
                1 / -1;

        }


        .field label {

            font-size: 13px;

            font-weight: 700;

            color: #111827;

            margin-bottom: 7px;

        }


        .field input,
        .field select,
        .field textarea {

            width: 100%;

            padding:
                12px 13px;

            border:
                1px solid #d1d5db;

            border-radius: 9px;

            background: #ffffff;

            color: #334155;

            font-size: 14px;

            outline: none;

            transition: .2s;

        }


        .field textarea {

            min-height: 90px;

            resize: vertical;

        }


        .field input:focus,
        .field select:focus,
        .field textarea:focus {

            border-color: #16a34a;

            box-shadow:
                0 0 0 3px
                rgba(22, 163, 74, .10);

        }


        .field small {

            margin-top: 5px;

            color: #94a3b8;

            font-size: 11px;

        }


        /* =====================================================
           READONLY
        ====================================================== */

        .field input[readonly] {

            background: #f8fafc;

            color: #64748b;

            cursor: not-allowed;

        }


        /* =====================================================
           FORM ACTION
        ====================================================== */

        .form-actions {

            display: flex;

            justify-content: flex-end;

            padding-top: 23px;

            border-top:
                1px solid #e5e7eb;

        }


        .btn-save {

            border: none;

            background: #166534;

            color: #ffffff;

            padding:
                12px 20px;

            border-radius: 9px;

            font-size: 14px;

            font-weight: 700;

            cursor: pointer;

            transition: .2s;

        }


        .btn-save:hover {

            background: #14532d;

            transform:
                translateY(-1px);

        }


        /* =====================================================
           RESPONSIVE
        ====================================================== */

        @media (max-width: 900px) {

            .content-container {

                width: 100%;

            }

            .profile-grid {

                grid-template-columns: 1fr;

            }

            .field.full {

                grid-column: auto;

            }

        }


        @media (max-width: 600px) {

            .page-content {

                padding:
                    30px 15px 50px;

            }


            .page-header h1 {

                font-size: 25px;

            }


            .profile-card {

                padding: 20px;

            }


            .profile-header {

                align-items: flex-start;

            }


            .profile-avatar {

                width: 58px;

                height: 58px;

                font-size: 19px;

            }


            .profile-header h2 {

                font-size: 20px;

            }

        }

    </style>

</head>


<body>


    {{-- =====================================================
         NAVBAR
         
         PENTING:
         Navbar diambil dari layouts.navigation
         supaya SAMA dengan Dashboard Warga.
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
                    Profil Warga
                </h1>

                <p>
                    Kelola informasi data diri Anda untuk keperluan administrasi desa.
                </p>

            </div>


            {{-- =================================================
                 PROFILE CARD
            ================================================== --}}

            <div class="profile-card">


                {{-- =================================================
                     FORM PROFIL
                     Header + upload foto + seluruh data berada dalam
                     satu form agar file selalu ikut terkirim.
                ================================================== --}}

                <form
                    id="profileForm"
                    method="POST"
                    action="{{ route('warga.profil.update') }}"
                    enctype="multipart/form-data"
                >

                    @csrf
                    @method('PUT')

                    {{-- =================================================
                         PROFILE HEADER
                    ================================================== --}}

                    <div class="profile-header">


                    <div class="profile-avatar-wrapper">

                        <label
                            for="foto_profil"
                            class="profile-avatar"
                            title="Klik untuk mengganti foto profil"
                        >

                            @if (!empty($warga->profile_photo))

                                <img
                                    id="profilePreview"
                                    src="{{ str_starts_with($warga->profile_photo, 'images/')
                                        ? asset($warga->profile_photo)
                                        : asset('storage/' . $warga->profile_photo) }}"
                                    alt="Foto Profil {{ $warga->name ?? 'Warga' }}"
                                >

                            @else

                                <span
                                    id="profileInitials"
                                    style="font-size:22px;font-weight:800;"
                                >
                                    {{ strtoupper(substr($warga->name ?? 'W', 0, 2)) }}
                                </span>

                            @endif

                            <div class="avatar-overlay">
                                📷
                            </div>

                        </label>

                        <input
                            type="file"
                            id="foto_profil"
                            name="foto_profil"
                            accept="image/jpeg,image/png,image/jpg"
                            hidden
                        >

                        <small class="photo-hint">
                            Klik foto untuk mengganti
                        </small>

                    </div>


                    <div>

                        <h2>
                            {{ $warga->name ?? '-' }}
                        </h2>

                        <p>
                            Akun warga Desa Sukamerindu
                        </p>

                        <span class="role-badge">
                            Warga
                        </span>

                    </div>


                </div>


                {{-- =================================================
                     SUCCESS MESSAGE
                ================================================== --}}

                @if (session('success'))

                    <div class="success-message">

                        ✅
                        {{ session('success') }}

                    </div>

                @endif


                {{-- =================================================
                     ERROR MESSAGE
                ================================================== --}}

                @if ($errors->any())

                    <div class="error-message">

                        <strong>
                            Data belum dapat disimpan:
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
                     DATA AKUN
                ================================================== --}}

                    <section class="section">

                        <div class="section-title">

                            <h3>
                                Data Akun
                            </h3>

                        </div>


                        <div class="profile-grid">


                            {{-- NAMA LENGKAP --}}

                            <div class="field">

                                <label for="name">
                                    Nama Lengkap
                                </label>

                                <input
                                    type="text"
                                    id="name"
                                    name="name"
                                    value="{{ old('name', $warga->name ?? '') }}"
                                    required
                                >

                            </div>


                            {{-- NIK --}}

                            <div class="field">

                                <label for="nik">
                                    NIK
                                </label>

                                <input
                                    type="text"
                                    id="nik"
                                    name="nik"
                                    value="{{ old('nik', $warga->nik ?? '') }}"
                                    maxlength="16"
                                    minlength="16"
                                    inputmode="numeric"
                                    required
                                >

                                <small>
                                    NIK harus terdiri dari 16 digit angka.
                                </small>

                            </div>


                            {{-- NOMOR KK --}}

                            <div class="field">

                                <label for="no_kk">
                                    Nomor KK
                                </label>

                                <input
                                    type="text"
                                    id="no_kk"
                                    name="no_kk"
                                    value="{{ old('no_kk', $warga->no_kk ?? '') }}"
                                    maxlength="16"
                                    minlength="16"
                                    inputmode="numeric"
                                    placeholder="Masukkan nomor KK"
                                >

                                <small>
                                    Nomor KK terdiri dari 16 digit angka.
                                </small>

                            </div>


                            {{-- USERNAME --}}

                            <div class="field">

                                <label for="username">
                                    Username
                                </label>

                                <input
                                    type="text"
                                    id="username"
                                    value="{{ $warga->username ?? '' }}"
                                    readonly
                                >

                                <small>
                                    Username digunakan untuk login dan tidak dapat diubah dari halaman ini.
                                </small>

                            </div>


                            {{-- NOMOR TELEPON --}}

                            <div class="field">

                                <label for="phone">
                                    Nomor Telepon
                                </label>

                                <input
                                    type="text"
                                    id="phone"
                                    name="phone"
                                    value="{{ old('phone', $warga->phone ?? '') }}"
                                    inputmode="numeric"
                                    placeholder="Masukkan nomor telepon"
                                >

                            </div>


                        </div>

                    </section>


                    {{-- =================================================
                         DATA IDENTITAS
                    ================================================== --}}

                    <section class="section">

                        <div class="section-title">

                            <h3>
                                Data Identitas
                            </h3>

                        </div>


                        <div class="profile-grid">


                            {{-- TEMPAT LAHIR --}}

                            <div class="field">

                                <label for="tempat_lahir">
                                    Tempat Lahir
                                </label>

                                <input
                                    type="text"
                                    id="tempat_lahir"
                                    name="tempat_lahir"
                                    value="{{ old('tempat_lahir', $warga->tempat_lahir ?? '') }}"
                                    placeholder="Contoh: Kepahiang"
                                >

                            </div>


                            {{-- TANGGAL LAHIR --}}

                            <div class="field">

                                <label for="tanggal_lahir">
                                    Tanggal Lahir
                                </label>

                                <input
                                    type="date"
                                    id="tanggal_lahir"
                                    name="tanggal_lahir"
                                    value="{{ old('tanggal_lahir', $warga->tanggal_lahir ?? '') }}"
                                >

                            </div>


                            {{-- JENIS KELAMIN --}}

                            <div class="field">

                                <label for="jenis_kelamin">
                                    Jenis Kelamin
                                </label>

                                <select
                                    id="jenis_kelamin"
                                    name="jenis_kelamin"
                                >

                                    <option value="">
                                        Pilih jenis kelamin
                                    </option>

                                    <option
                                        value="Laki-laki"
                                        {{ old('jenis_kelamin', $warga->jenis_kelamin ?? '') === 'Laki-laki' ? 'selected' : '' }}
                                    >
                                        Laki-laki
                                    </option>

                                    <option
                                        value="Perempuan"
                                        {{ old('jenis_kelamin', $warga->jenis_kelamin ?? '') === 'Perempuan' ? 'selected' : '' }}
                                    >
                                        Perempuan
                                    </option>

                                </select>

                            </div>


                            {{-- AGAMA --}}

                            <div class="field">

                                <label for="agama">
                                    Agama
                                </label>

                                <select
                                    id="agama"
                                    name="agama"
                                >

                                    <option value="">
                                        Pilih agama
                                    </option>

                                    @foreach ([
                                        'Islam',
                                        'Kristen Protestan',
                                        'Kristen Katolik',
                                        'Hindu',
                                        'Buddha',
                                        'Konghucu'
                                    ] as $agama)

                                        <option
                                            value="{{ $agama }}"
                                            {{ old('agama', $warga->agama ?? '') === $agama ? 'selected' : '' }}
                                        >
                                            {{ $agama }}
                                        </option>

                                    @endforeach

                                </select>

                            </div>


                            {{-- NAMA AYAH --}}
                            <div class="field">
                                <label for="nama_ayah">
                                    Nama Ayah
                                </label>

                                <input
                                    type="text"
                                    id="nama_ayah"
                                    name="nama_ayah"
                                    value="{{ old('nama_ayah', $warga->nama_ayah ?? '') }}"
                                    placeholder="Masukkan nama ayah"
                                >
                            </div>


                            {{-- NAMA IBU --}}
                            <div class="field">
                                <label for="nama_ibu">
                                    Nama Ibu
                                </label>

                                <input
                                    type="text"
                                    id="nama_ibu"
                                    name="nama_ibu"
                                    value="{{ old('nama_ibu', $warga->nama_ibu ?? '') }}"
                                    placeholder="Masukkan nama ibu"
                                >
                            </div>


                            {{-- STATUS PERKAWINAN --}}

                            <div class="field">

                                <label for="status_perkawinan">
                                    Status Perkawinan
                                </label>

                                <select
                                    id="status_perkawinan"
                                    name="status_perkawinan"
                                >

                                    <option value="">
                                        Pilih status perkawinan
                                    </option>

                                    @foreach ([
                                        'Belum Kawin',
                                        'Kawin',
                                        'Cerai Hidup',
                                        'Cerai Mati'
                                    ] as $status)

                                        <option
                                            value="{{ $status }}"
                                            {{ old('status_perkawinan', $warga->status_perkawinan ?? '') === $status ? 'selected' : '' }}
                                        >
                                            {{ $status }}
                                        </option>

                                    @endforeach

                                </select>

                            </div>


                            {{-- PEKERJAAN --}}

                            <div class="field">

                                <label for="pekerjaan">
                                    Pekerjaan
                                </label>

                                <input
                                    type="text"
                                    id="pekerjaan"
                                    name="pekerjaan"
                                    value="{{ old('pekerjaan', $warga->pekerjaan ?? '') }}"
                                    placeholder="Contoh: Wiraswasta"
                                >

                            </div>


                        </div>

                    </section>


                    {{-- =================================================
                         ALAMAT
                    ================================================== --}}

                    <section class="section">

                        <div class="section-title">

                            <h3>
                                Alamat
                            </h3>

                        </div>


                        <div class="profile-grid">


                            {{-- ALAMAT LENGKAP --}}

                            <div class="field full">

                                <label for="alamat">
                                    Alamat Lengkap
                                </label>

                                <textarea
                                    id="alamat"
                                    name="alamat"
                                    placeholder="Masukkan alamat lengkap"
                                >{{ old('alamat', $warga->alamat ?? '') }}</textarea>

                            </div>


                            {{-- RT --}}

                            <div class="field">

                                <label for="rt">
                                    RT
                                </label>

                                <input
                                    type="text"
                                    id="rt"
                                    name="rt"
                                    value="{{ old('rt', $warga->rt ?? '') }}"
                                    maxlength="5"
                                    placeholder="Contoh: 001"
                                >

                            </div>


                            {{-- RW --}}

                            <div class="field">

                                <label for="rw">
                                    RW
                                </label>

                                <input
                                    type="text"
                                    id="rw"
                                    name="rw"
                                    value="{{ old('rw', $warga->rw ?? '') }}"
                                    maxlength="5"
                                    placeholder="Contoh: 002"
                                >

                            </div>


                            {{-- DESA --}}

                            <div class="field">

                                <label for="desa">
                                    Desa
                                </label>

                                <input
                                    type="text"
                                    id="desa"
                                    name="desa"
                                    value="{{ old('desa', $warga->desa ?? '') }}"
                                    placeholder="Contoh: Sukamerindu"
                                >

                            </div>


                            {{-- KECAMATAN --}}

                            <div class="field">

                                <label for="kecamatan">
                                    Kecamatan
                                </label>

                                <input
                                    type="text"
                                    id="kecamatan"
                                    name="kecamatan"
                                    value="{{ old('kecamatan', $warga->kecamatan ?? '') }}"
                                    placeholder="Contoh: Kepahiang"
                                >

                            </div>


                            {{-- KABUPATEN --}}

                            <div class="field">

                                <label for="kabupaten">
                                    Kabupaten
                                </label>

                                <input
                                    type="text"
                                    id="kabupaten"
                                    name="kabupaten"
                                    value="{{ old('kabupaten', $warga->kabupaten ?? '') }}"
                                    placeholder="Contoh: Kepahiang"
                                >

                            </div>


                            {{-- PROVINSI --}}

                            <div class="field">

                                <label for="provinsi">
                                    Provinsi
                                </label>

                                <input
                                    type="text"
                                    id="provinsi"
                                    name="provinsi"
                                    value="{{ old('provinsi', $warga->provinsi ?? '') }}"
                                    placeholder="Contoh: Bengkulu"
                                >

                            </div>


                        </div>

                    </section>


                    {{-- =================================================
                         BUTTON
                    ================================================== --}}

                    <div class="form-actions">

                        <button
                            type="submit"
                            class="btn-save"
                        >

                            💾 Simpan Perubahan

                        </button>

                    </div>


                </form>


            </div>


        </div>

    </main>


    <script>
        const fotoInput = document.getElementById('foto_profil');
        const profilePreview = document.getElementById('profilePreview');
        const profileInitials = document.getElementById('profileInitials');
        const profileForm = document.getElementById('profileForm');

        if (fotoInput) {
            fotoInput.addEventListener('change', function () {

                const file = this.files[0];

                if (!file) {
                    return;
                }

                if (!['image/jpeg', 'image/png', 'image/jpg'].includes(file.type)) {
                    alert('Foto harus berformat JPG, JPEG, atau PNG.');
                    this.value = '';
                    return;
                }

                if (file.size > 2 * 1024 * 1024) {
                    alert('Ukuran foto maksimal 2 MB.');
                    this.value = '';
                    return;
                }

                const reader = new FileReader();

                reader.onload = function (event) {

                    if (profilePreview) {
                        profilePreview.src = event.target.result;
                        profilePreview.style.display = 'block';
                    }

                    if (profileInitials) {
                        profileInitials.style.display = 'none';
                    }
                };

                reader.readAsDataURL(file);

                /*
                 * FOTO LANGSUNG DIKIRIM KE SERVER.
                 * Tidak perlu menunggu tombol Simpan Perubahan.
                 */
                setTimeout(function () {
                    if (profileForm) {
                        profileForm.submit();
                    }
                }, 300);
            });
        }
    </script>

</body>

</html>
