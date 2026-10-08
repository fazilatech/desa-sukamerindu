<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        {{ $pengajuan->jenis_surat ?? 'Surat' }}
        - Desa Sukamerindu
    </title>


    <style>

        /* =====================================================
           DASAR
        ====================================================== */

        @page {
            size: A4;
            margin: 0;
        }

        * {
            box-sizing: border-box;
        }

        html,
        body {
            margin: 0;
            padding: 0;
        }

        body {
            background: #e5e7eb;
            color: #111827;
            font-family: "Times New Roman", Times, serif;
        }


        /* =====================================================
           TOOLBAR
        ====================================================== */

        .toolbar {

            position: fixed;

            top: 20px;
            right: 25px;

            z-index: 100;

            display: flex;

            gap: 10px;

        }


        .toolbar a,
        .toolbar button {

            border: none;

            border-radius: 7px;

            padding: 10px 16px;

            font-family: Arial, sans-serif;

            font-size: 13px;

            font-weight: 700;

            text-decoration: none;

            cursor: pointer;

        }


        .toolbar a {

            background: #6b7280;

            color: white;

        }


        .toolbar button {

            background: #173b63;

            color: white;

        }


        .toolbar a:hover {

            background: #4b5563;

        }


        .toolbar button:hover {

            background: #102d4d;

        }


        /* =====================================================
           KERTAS A4
        ====================================================== */

        .paper {

            width: 210mm;

            min-height: 297mm;

            margin: 30px auto;

            padding: 20mm 22mm 22mm;

            background: white;

            box-shadow:
                0 4px 22px rgba(15, 23, 42, .14);

        }


        /* =====================================================
           KOP SURAT
        ====================================================== */

        .kop {

            display: grid;

            grid-template-columns: 27mm 1fr 27mm;

            align-items: center;

            min-height: 32mm;

        }


        .logo-wrap {

            width: 25mm;

            height: 29mm;

            display: flex;

            align-items: center;

            justify-content: center;

        }


        .logo-wrap img {

            max-width: 25mm;

            max-height: 29mm;

            object-fit: contain;

        }


        .kop-text {

            text-align: center;

            line-height: 1.15;

        }


        .kop-text .line-1 {

            font-size: 14pt;

            font-weight: bold;

            text-transform: uppercase;

        }


        .kop-text .line-2 {

            margin-top: 2px;

            font-size: 13pt;

            font-weight: bold;

            text-transform: uppercase;

        }


        .kop-text .line-3 {

            margin-top: 2px;

            font-size: 15pt;

            font-weight: bold;

            text-transform: uppercase;

        }


        .kop-text .address {

            margin-top: 5px;

            font-size: 9.5pt;

            line-height: 1.3;

        }


        .kop-line {

            margin-top: 4mm;

            border-top: 3px solid #111;

            position: relative;

        }


        .kop-line::after {

            content: "";

            display: block;

            margin-top: 2px;

            border-top: 1px solid #111;

        }


        /* =====================================================
           JUDUL SURAT
        ====================================================== */

        .judul {

            margin-top: 9mm;

            text-align: center;

        }


        .judul h1 {

            margin: 0;

            font-size: 15pt;

            font-weight: bold;

            text-transform: uppercase;

            text-decoration: underline;

            letter-spacing: .2px;

        }


        .nomor {

            margin-top: 5px;

            font-size: 11.5pt;

        }


        /* =====================================================
           ISI SURAT
        ====================================================== */

        .isi {

            margin-top: 10mm;

            font-size: 12pt;

            line-height: 1.65;

            text-align: justify;

        }


        .pembuka {

            margin: 0 0 7mm;

            text-indent: 10mm;

        }


        .data {

            width: calc(100% - 8mm);

            margin:

                2mm

                0

                7mm

                8mm;

            border-collapse: collapse;

        }


        .data td {

            vertical-align: top;

            padding: 1.4mm 0;

            font-size: 12pt;

        }


        .data .label {

            width: 38mm;

        }


        .data .colon {

            width: 7mm;

            text-align: center;

        }


        .data .value {

            font-weight: normal;

        }


        /* =====================================================
           BAGIAN KETERANGAN
        ====================================================== */

        .keterangan {

            margin-top: 5mm;

            margin-bottom: 7mm;

        }


        .keterangan p {

            margin: 0;

        }


        .keterangan-value {

            margin-top: 3mm;

            margin-left: 8mm;

            font-weight: bold;

        }


        /* =====================================================
           PENUTUP
        ====================================================== */

        .penutup {

            margin-top: 7mm;

            text-indent: 10mm;

        }


        /* =====================================================
           TANDA TANGAN
        ====================================================== */

        .ttd-wrapper {

            width: 100%;

            margin-top: 18mm;

        }


        .ttd {

            width: 72mm;

            margin-left: auto;

            text-align: center;

            font-size: 12pt;

            line-height: 1.5;

        }


        .ttd .tempat {

            margin-bottom: 2mm;

        }


        .ttd .jabatan {

            margin-bottom: 23mm;

        }


        .ttd .nama {

            font-weight: bold;

            text-decoration: underline;

        }


        /* =====================================================
           CATATAN SISTEM
        ====================================================== */

        .catatan-print {

            margin-top: 10mm;

            padding-top: 3mm;

            border-top: 1px solid #d1d5db;

            color: #6b7280;

            font-family: Arial, sans-serif;

            font-size: 8.5pt;

            text-align: center;

        }


        /* =====================================================
           RESPONSIVE
        ====================================================== */

        @media screen and (max-width: 900px) {

            .paper {

                width: calc(100% - 30px);

                min-height: auto;

                margin: 15px auto;

                padding: 30px;

            }

            .toolbar {

                position: sticky;

                top: 10px;

                justify-content: flex-end;

                margin: 10px 15px;

            }

        }


        /* =====================================================
           PRINT
        ====================================================== */

        @media print {

            html,
            body {

                background: white;

            }


            .toolbar,
            .catatan-print {

                display: none !important;

            }


            .paper {

                width: 210mm;

                min-height: 297mm;

                margin: 0;

                padding: 20mm 22mm 22mm;

                box-shadow: none;

            }

        }

    </style>

</head>


<body>


@php

    /* =========================================================
       LOGO
    ========================================================= */

    $logoCandidates = [

        'images/logo-desa.png',

        'images/logo.png',

        'images/logo-kepahiang.png',

        'img/logo.png',

        'img/logo-desa.png',

    ];


    $logoPath = null;


    foreach ($logoCandidates as $candidate) {

        if (file_exists(public_path($candidate))) {

            $logoPath = asset($candidate);

            break;

        }

    }


    /* =========================================================
       JENIS SURAT
    ========================================================= */

    $jenisAsli = trim(
        (string) (
            $pengajuan->jenis_surat
            ?? $pengajuan->jenis
            ?? ''
        )
    );


    /*
    | Semua kemungkinan value disamakan
    | agar judul surat tetap benar.
    */

    $jenisKey = strtolower($jenisAsli);

    $jenisKey = str_replace(
        [' ', '-'],
        '_',
        $jenisKey
    );


    /* =========================================================
       JUDUL SURAT
    ========================================================= */

    $judulSurat = match ($jenisKey) {

        'domisili',
        'surat_keterangan_domisili'
            => 'SURAT KETERANGAN DOMISILI',

        'pengantar',
        'surat_pengantar'
            => 'SURAT PENGANTAR',

        'tidak_mampu',
        'keterangan_tidak_mampu',
        'surat_keterangan_tidak_mampu'
            => 'SURAT KETERANGAN TIDAK MAMPU',

        'usaha',
        'keterangan_usaha',
        'surat_keterangan_usaha'
            => 'SURAT KETERANGAN USAHA',

        'kelahiran',
        'keterangan_kelahiran',
        'surat_keterangan_kelahiran'
            => 'SURAT KETERANGAN KELAHIRAN',

        'kematian',
        'keterangan_kematian',
        'surat_keterangan_kematian'
            => 'SURAT KETERANGAN KEMATIAN',

        'pindah',
        'keterangan_pindah',
        'surat_keterangan_pindah'
            => 'SURAT KETERANGAN PINDAH',

        default
            => strtoupper(
                $jenisAsli ?: 'SURAT KETERANGAN'
            ),

    };


    /* =========================================================
       DATA SURAT
    ========================================================= */

    $nomorSurat = $pengajuan->nomor_surat
        ?? '................................';


    $namaWarga = $pengajuan->nama_warga
        ?? $pengajuan->name
        ?? '-';


    $nik = $pengajuan->nik
        ?? '-';


    $keperluan = $pengajuan->keperluan
        ?? $pengajuan->keterangan
        ?? '-';


    /* =========================================================
       TANGGAL
    ========================================================= */

    $tanggalSurat = !empty(
        $pengajuan->selesai_pada
    )

        ? \Carbon\Carbon::parse(
            $pengajuan->selesai_pada
        )
            ->locale('id')
            ->translatedFormat('d F Y')

        : now()
            ->locale('id')
            ->translatedFormat('d F Y');


    /* =========================================================
       KEPALA DESA
    ========================================================= */

    $namaKepalaDesa =
        'Kepala Desa Sukamerindu';


    if (

        auth()->check()

        && isset(auth()->user()->role)

        && strtolower(
            str_replace(
                ['-', ' '],
                '_',
                auth()->user()->role
            )
        ) === 'kepala_desa'

        && !empty(auth()->user()->name)

    ) {

        $namaKepalaDesa =
            auth()->user()->name;

    }

@endphp



{{-- =========================================================
     TOOLBAR
========================================================= --}}

<div class="toolbar">

    <a href="{{ url()->previous() }}">
        ← Kembali
    </a>


    <button
        type="button"
        onclick="window.print()"
    >
        🖨 Cetak Surat
    </button>

</div>



{{-- =========================================================
     KERTAS SURAT
========================================================= --}}

<main class="paper">


    {{-- =====================================================
         KOP SURAT
    ====================================================== --}}

    <header>

        <div class="kop">


            {{-- LOGO --}}

            <div class="logo-wrap">

                @if ($logoPath)

                    <img
                        src="{{ $logoPath }}"
                        alt="Logo Desa Sukamerindu"
                    >

                @endif

            </div>



            {{-- NAMA INSTANSI --}}

            <div class="kop-text">

                <div class="line-1">
                    PEMERINTAH KABUPATEN KEPAHIANG
                </div>


                <div class="line-2">
                    KECAMATAN KEPAHIANG
                </div>


                <div class="line-3">
                    DESA SUKAMERINDU
                </div>


                <div class="address">

                    Kecamatan Kepahiang,
                    Kabupaten Kepahiang

                    <br>

                    Provinsi Bengkulu

                </div>

            </div>


            {{-- KOLOM KANAN KOSONG
                 supaya kop tetap seimbang --}}

            <div></div>


        </div>


        {{-- GARIS KOP --}}

        <div class="kop-line"></div>

    </header>



    {{-- =====================================================
         JUDUL SURAT
    ====================================================== --}}

    <section class="judul">


        <h1>
            {{ $judulSurat }}
        </h1>


        <div class="nomor">

            Nomor :
            {{ $nomorSurat }}

        </div>


    </section>



    {{-- =====================================================
         ISI SURAT
    ====================================================== --}}

    <section class="isi">


        {{-- PEMBUKA --}}

        <p class="pembuka">

            Yang bertanda tangan di bawah ini,
            Kepala Desa Sukamerindu, Kecamatan Kepahiang,
            Kabupaten Kepahiang, menerangkan bahwa:

        </p>



        {{-- =================================================
             DATA WARGA
        ================================================== --}}

        <table class="data">


            <tr>

                <td class="label">
                    Nama
                </td>

                <td class="colon">
                    :
                </td>

                <td class="value">
                    {{ $namaWarga }}
                </td>

            </tr>



            <tr>

                <td class="label">
                    NIK
                </td>

                <td class="colon">
                    :
                </td>

                <td class="value">
                    {{ $nik }}
                </td>

            </tr>


        </table>



        {{-- =================================================
             KETERANGAN
        ================================================== --}}

        <div class="keterangan">


            <p>

                Adalah benar warga Desa Sukamerindu
                dan berdasarkan pengajuan yang disampaikan
                kepada Pemerintah Desa Sukamerindu,
                surat ini diterbitkan untuk keperluan:

            </p>


            <div class="keterangan-value">

                {{ $keperluan }}

            </div>


        </div>



        {{-- =================================================
             PENUTUP
        ================================================== --}}

        <p class="penutup">

            Demikian surat ini dibuat dengan sebenarnya
            untuk dapat dipergunakan sebagaimana mestinya.

        </p>


    </section>



    {{-- =====================================================
         TANDA TANGAN
    ====================================================== --}}

    <section class="ttd-wrapper">


        <div class="ttd">


            <div class="tempat">

                Sukamerindu,
                {{ $tanggalSurat }}

            </div>


            <div class="jabatan">

                Kepala Desa Sukamerindu

            </div>


            <div class="nama">

                {{ $namaKepalaDesa }}

            </div>


        </div>


    </section>



    {{-- =====================================================
         CATATAN
    ====================================================== --}}

    <div class="catatan-print">

        Dokumen ini dicetak melalui
        Sistem Informasi Desa Sukamerindu.

    </div>


</main>


</body>

</html>
