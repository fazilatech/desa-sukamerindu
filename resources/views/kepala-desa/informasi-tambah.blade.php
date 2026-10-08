@extends('layouts.kepala-desa')

@section('title', 'Buat Informasi')

@section('topbar-title', 'Informasi')

@push('styles')
<style>
    .page-heading {
        max-width: 1000px;
        margin: 0 auto 25px;
    }

    .page-heading h1 {
        margin: 0 0 8px;
        font-size: 32px;
        color: #12345b;
    }

    .page-heading p {
        margin: 0;
        color: #6680a0;
        font-size: 14px;
    }

    .form-card {
        max-width: 1000px;
        margin: 0 auto;
        background: white;
        border-radius: 12px;
        padding: 30px;
        box-shadow: 0 3px 12px rgba(0,0,0,.05);
    }

    .form-group {
        margin-bottom: 22px;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        font-size: 14px;
        font-weight: 700;
        color: #12345b;
    }

    .form-group input,
    .form-group textarea,
    .form-group select {
        width: 100%;
        padding: 13px 14px;
        border: 1px solid #d7dee8;
        border-radius: 8px;
        font-size: 14px;
        font-family: inherit;
        color: #12345b;
        background: white;
    }

    .form-group textarea {
        min-height: 180px;
        resize: vertical;
    }

    .form-group input:focus,
    .form-group textarea:focus,
    .form-group select:focus {
        outline: none;
        border-color: #08783d;
    }

    .error {
        margin-bottom: 20px;
        padding: 14px;
        background: #fee2e2;
        color: #b91c1c;
        border-radius: 8px;
        font-size: 14px;
    }

    .error ul {
        margin: 8px 0 0;
    }

    .actions {
        display: flex;
        gap: 10px;
        margin-top: 25px;
    }

    .btn {
        border: none;
        border-radius: 8px;
        padding: 12px 20px;
        font-weight: 700;
        cursor: pointer;
        text-decoration: none;
        font-size: 14px;
    }

    .btn-primary {
        background: #08783d;
        color: white;
    }

    .btn-primary:hover {
        background: #065c2e;
    }

    .btn-secondary {
        background: #e5e7eb;
        color: #374151;
    }

    @media (max-width: 650px) {
        .page-heading h1 {
            font-size: 26px;
        }

        .form-card {
            padding: 20px;
        }

        .actions {
            flex-wrap: wrap;
        }
    }
</style>
@endpush

@section('content')

    <div class="page-heading">

        <h1>
            Buat Informasi
        </h1>

        <p>
            Tambahkan informasi baru untuk warga Desa Sukamerindu.
        </p>

    </div>


    <div class="form-card">

        @if($errors->any())

            <div class="error">

                <strong>
                    Ada kesalahan:
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


        <form
            action="{{ route('kepala-desa.informasi.store') }}"
            method="POST"
        >

            @csrf


            {{-- JUDUL --}}

            <div class="form-group">

                <label for="judul">
                    Judul Informasi
                </label>

                <input
                    type="text"
                    id="judul"
                    name="judul"
                    value="{{ old('judul') }}"
                    placeholder="Contoh: Kerja Bakti Desa"
                    required
                >

            </div>


            {{-- KATEGORI --}}

            <div class="form-group">

                <label for="kategori">
                    Kategori
                </label>

                <select
                    id="kategori"
                    name="kategori"
                    required
                >

                    <option value="">
                        -- Pilih Kategori --
                    </option>

                    <option
                        value="Informasi"
                        {{ old('kategori') == 'Informasi' ? 'selected' : '' }}
                    >
                        Pengumuman
                    </option>

                    <option
                        value="Kegiatan Desa"
                        {{ old('kategori') == 'Kegiatan Desa' ? 'selected' : '' }}
                    >
                        Kegiatan Desa
                    </option>

                    <option
                        value="Pelayanan"
                        {{ old('kategori') == 'Pelayanan' ? 'selected' : '' }}
                    >
                        Pelayanan
                    </option>

                    <option
                        value="Himbauan"
                        {{ old('kategori') == 'Himbauan' ? 'selected' : '' }}
                    >
                        Pembangunan
                    </option>

                    <option
                        value="Himbauan"
                        {{ old('kategori') == 'Himbauan' ? 'selected' : '' }}
                    >
                        Kesehatan
                    </option>

                    <option
                        value="Himbauan"
                        {{ old('kategori') == 'Himbauan' ? 'selected' : '' }}
                    >
                        Pendidikan
                    </option>

                    <option
                        value="Himbauan"
                        {{ old('kategori') == 'Himbauan' ? 'selected' : '' }}
                    >
                        Kemasyarakatan
                    </option>

                </select>

            </div>


            {{-- ISI INFORMASI --}}

            <div class="form-group">

                <label for="isi">
                    Isi Informasi
                </label>

                <textarea
                    id="isi"
                    name="isi"
                    placeholder="Tulis isi informasi di sini..."
                    required
                >{{ old('isi') }}</textarea>

            </div>


            {{-- STATUS --}}

            <div class="form-group">

                <label for="status">
                    Status
                </label>

                <select
                    id="status"
                    name="status"
                    required
                >

                    <option
                        value="Publikasi"
                        {{ old('status', 'Publikasi') == 'Publikasi' ? 'selected' : '' }}
                    >
                        Publikasi
                    </option>

                    <option
                        value="Draft"
                        {{ old('status') == 'Draft' ? 'selected' : '' }}
                    >
                        Draft
                    </option>

                </select>

            </div>


            {{-- BUTTON --}}

            <div class="actions">

                <a
                    href="{{ route('kepala-desa.informasi') }}"
                    class="btn btn-secondary"
                >
                    ← Kembali
                </a>

                <button
                    type="submit"
                    class="btn btn-primary"
                >
                    📢 Simpan Informasi
                </button>

            </div>


        </form>

    </div>

@endsection
