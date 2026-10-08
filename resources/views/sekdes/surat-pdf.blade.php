<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">

    <title>Surat</title>

    <style>
        @page {
            margin: 20mm;
        }

        body {
            font-family: "Times New Roman", Times, serif;
            font-size: 12pt;
            color: #000;
            margin: 0;
            padding: 0;
        }

        table {
            border-collapse: collapse;
        }
    </style>
</head>

<body>

@php

    /*
    |--------------------------------------------------------------------------
    | Tentukan template berdasarkan jenis surat
    |--------------------------------------------------------------------------
    */

    $jenisSurat = strtolower(
        trim(
            $pengajuan->jenis_surat ?? ''
        )
    );


    $template = match ($jenisSurat) {

        /*
        |--------------------------------------------------------------------------
        | SURAT PENGANTAR
        |--------------------------------------------------------------------------
        */
        'pengantar',
        'surat pengantar'
            => 'warga.surat.surat-pengantar',


        /*
        |--------------------------------------------------------------------------
        | SURAT DOMISILI
        |--------------------------------------------------------------------------
        */
        'domisili',
        'surat domisili',
        'surat keterangan domisili'
            => 'warga.surat.surat-domisili',


        /*
        |--------------------------------------------------------------------------
        | SURAT KETERANGAN USAHA
        |--------------------------------------------------------------------------
        */
        'keterangan_usaha',
        'surat usaha',
        'surat keterangan usaha'
            => 'warga.surat.surat-keterangan-usaha',


        /*
        |--------------------------------------------------------------------------
        | SURAT KETERANGAN TIDAK MAMPU
        |--------------------------------------------------------------------------
        */
        'keterangan_tidak_mampu',
        'tidak_mampu',
        'surat tidak mampu',
        'surat keterangan tidak mampu'
            => 'warga.surat.surat-keterangan-tidak-mampu',


        /*
        |--------------------------------------------------------------------------
        | SURAT KETERANGAN KELAHIRAN
        |--------------------------------------------------------------------------
        */
        'keterangan_kelahiran',
        'kelahiran',
        'surat kelahiran',
        'surat keterangan kelahiran'
            => 'warga.surat.surat-keterangan-kelahiran',


        /*
        |--------------------------------------------------------------------------
        | SURAT KETERANGAN KEMATIAN
        |--------------------------------------------------------------------------
        */
        'keterangan_kematian',
        'kematian',
        'surat kematian',
        'surat keterangan kematian'
            => 'warga.surat.surat-keterangan-kematian',


        /*
        |--------------------------------------------------------------------------
        | JIKA JENIS SURAT TIDAK DIKENAL
        |--------------------------------------------------------------------------
        */
        default => null,

    };

@endphp


@if ($template && view()->exists($template))

    @include($template, [
        'pengajuan' => $pengajuan
    ])

@else

    <div style="text-align: center; margin-top: 100px;">

        <strong>
            Template surat tidak ditemukan.
        </strong>

        <br>
        <br>

        Jenis surat:
        {{ $pengajuan->jenis_surat ?? '-' }}

    </div>

@endif


</body>

</html>
