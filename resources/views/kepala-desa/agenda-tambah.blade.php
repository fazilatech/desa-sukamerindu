@extends('layouts.kepala-desa')

@section('title', 'Tambah Agenda')

@section('topbar-title', 'Tambah Agenda')

@push('styles')

<style>
    * {
        box-sizing: border-box;
        font-family: "Segoe UI", Arial, sans-serif;
    }

    body {
        margin: 0;
        background: #f3f6f9;
        color: #1f2937;
    }

    .page-content {
        min-height: calc(100vh - 76px);
        background: #f3f6f9;
        padding: 50px 45px;
    }

    .content-container {
        max-width: 900px;
        margin: 0 auto;
    }

    .page-header {
        margin-bottom: 28px;
    }

    .page-header h1 {
        color: #0f2f52;
        font-size: 32px;
        font-weight: 800;
        margin: 0 0 7px;
    }

    .page-header p {
        color: #66809e;
        font-size: 14px;
        line-height: 1.5;
        margin: 0;
    }

    .card {
        background: #fff;
        border: 1px solid #e5e7eb;
        border-radius: 16px;
        padding: 30px;
        box-shadow: 0 4px 15px rgba(0,0,0,.04);
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        color: #12395B;
        font-size: 13px;
        font-weight: 700;
        margin-bottom: 8px;
    }

    .form-group input,
    .form-group textarea {
        width: 100%;
        border: 1px solid #dfe5eb;
        border-radius: 10px;
        background: #fff;
        color: #1f2937;
        font-size: 14px;
        outline: none;
        padding: 11px 13px;
    }

    .form-group input {
        min-height: 44px;
    }

    .form-group textarea {
        min-height: 130px;
        resize: vertical;
    }

    .form-group input:focus,
    .form-group textarea:focus {
        border-color: #2f80bd;
        box-shadow: 0 0 0 3px rgba(47,128,189,.10);
    }

    .actions {
        display: flex;
        justify-content: flex-end;
        gap: 10px;
        margin-top: 25px;
    }

    .btn {
        min-height: 42px;
        padding: 0 17px;
        border: 0;
        border-radius: 9px;
        font-size: 13px;
        font-weight: 700;
        text-decoration: none;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    .btn-secondary {
        background: #eef1f4;
        color: #44546a;
    }

    .btn-primary {
        background: #087f3f;
        color: #fff;
    }

    .error-box {
        margin-bottom: 20px;
        padding: 13px 15px;
        border-radius: 10px;
        background: #fff0f0;
        border: 1px solid #ffd1d1;
        color: #b42318;
        font-size: 13px;
    }

    @media (max-width: 600px) {
        .page-content {
            padding: 25px 15px;
        }

        .card {
            padding: 20px 15px;
        }

        .page-header h1 {
            font-size: 24px;
        }

        .actions {
            flex-direction: column-reverse;
        }

        .btn {
            width: 100%;
        }
    }
</style>

@endpush

@section('content')

<main class="page-content">

    <div class="content-container">

        <div class="page-header">

            <h1>
                Tambah Agenda
            </h1>

            <p>
                Kelola agenda Desa Sukamerindu.
            </p>

        </div>

        <div class="card">

            @if ($errors->any())

                <div class="error-box">

                    <strong>Data belum dapat disimpan.</strong>

                    <ul style="margin:8px 0 0 18px; padding:0;">

                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach

                    </ul>

                </div>

            @endif

            <form
                action="{{ route('kepala-desa.agenda.store') }}"
                method="POST"
            >

                @csrf

                

                <div class="form-group">

                    <label for="judul">
                        Judul Agenda
                    </label>

                    <input
                        type="text"
                        id="judul"
                        name="judul"
                        value="{{ old('judul') }}"
                        placeholder="Contoh: Rapat Desa"
                        required
                    >

                </div>

                <div class="form-group">

                    <label for="tanggal">
                        Tanggal
                    </label>

                    <input
                        type="date"
                        id="tanggal"
                        name="tanggal"
                        value="{{ old('tanggal') }}"
                        required
                    >

                </div>

                <div class="form-group">

                    <label for="waktu">
                        Waktu
                    </label>

                    <input
                        type="time"
                        id="waktu"
                        name="waktu"
                        value="{{ old('waktu') }}"
                    >

                </div>

                <div class="form-group">

                    <label for="lokasi">
                        Lokasi
                    </label>

                    <input
                        type="text"
                        id="lokasi"
                        name="lokasi"
                        value="{{ old('lokasi') }}"
                        placeholder="Contoh: Balai Desa Sukamerindu"
                    >

                </div>

                <div class="form-group">

                    <label for="keterangan">
                        Keterangan
                    </label>

                    <textarea
                        id="keterangan"
                        name="keterangan"
                        placeholder="Tulis keterangan agenda jika diperlukan..."
                    >{{ old('keterangan') }}</textarea>

                </div>

                <div class="actions">

                    <a
                        href="{{ route('kepala-desa.agenda') }}"
                        class="btn btn-secondary"
                    >
                        ← Kembali
                    </a>

                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        📅 Simpan Agenda
                    </button>

                </div>

            </form>

        </div>

    </div>

</main>

@endsection
