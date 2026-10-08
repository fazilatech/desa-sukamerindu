<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Surat Keterangan Domisili</title>

    <style>
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
            background: #eef1f4;
            color: #000;
            font-family: "Times New Roman", Times, serif;
            font-size: 12pt;
            line-height: 1.5;
        }

        /* =====================================================
           TOMBOL CETAK
        ====================================================== */

        .print-button {
            position: fixed;
            top: 18px;
            right: 18px;
            z-index: 100;
        }

        .print-button button {
            padding: 9px 15px;
            border: 1px solid #111;
            border-radius: 5px;
            background: #2864d7;
            color: #fff;
            font-family: Arial, sans-serif;
            font-size: 13px;
            cursor: pointer;
        }

        .print-button button:hover {
            background: #1d4ed8;
        }

        /* =====================================================
           KERTAS A4
        ====================================================== */

        .surat {
            width: 210mm;
            min-height: 297mm;
            margin: 35px auto;
            padding: 18mm 20mm 20mm 20mm;
            background: #fff;
            box-shadow: 0 3px 18px rgba(0, 0, 0, .14);
        }

        /* =====================================================
           KOP SURAT
        ====================================================== */

        .kop {
            width: 100%;
            border-bottom: 3px double #000;
            padding-bottom: 8px;
            margin-bottom: 18px;
            text-align: center;
        }

        .kop-table {
            width: 100%;
            border-collapse: collapse;
        }

        .kop-logo {
            width: 25mm;
            vertical-align: middle;
            text-align: center;
        }

        .kop-logo img {
            width: 22mm;
            height: 22mm;
            object-fit: contain;
        }

        .kop-text {
            text-align: center;
            vertical-align: middle;
            padding-right: 25mm;
        }

        .kop .pemerintah {
            font-size: 14pt;
            font-weight: bold;
            line-height: 1.15;
        }

        .kop .desa {
            font-size: 16pt;
            font-weight: bold;
            line-height: 1.15;
        }

        .kop .wilayah {
            font-size: 11pt;
            font-weight: bold;
            line-height: 1.25;
        }

        .kop .alamat-kantor {
            margin-top: 3px;
            font-size: 10pt;
            line-height: 1.2;
        }

        /* =====================================================
           JUDUL SURAT
        ====================================================== */

        .judul {
            margin: 18px 0 18px;
            text-align: center;
        }

        .judul h1 {
            margin: 0;
            font-size: 14pt;
            font-weight: bold;
            text-decoration: underline;
            line-height: 1.25;
        }

        .nomor {
            margin-top: 5px;
            font-size: 12pt;
        }

        /* =====================================================
           ISI SURAT
        ====================================================== */

        .isi {
            width: 100%;
            text-align: justify;
        }

        .paragraf {
            margin: 0 0 13px 0;
            text-align: justify;
            text-justify: inter-word;
            line-height: 1.5;
        }

        /* =====================================================
           IDENTITAS WARGA
        ====================================================== */

        .identitas {
            width: 100%;
            margin: 8px 0 15px 0;
        }

        .identitas table {
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed;
        }

        .identitas td {
            padding: 1px 0;
            vertical-align: top;
            line-height: 1.4;
        }

        .identitas .label {
            width: 42mm;
            white-space: nowrap;
        }

        .identitas .titik-dua {
            width: 7mm;
            text-align: center;
        }

        .identitas .nilai {
            width: auto;
            text-align: left;
            word-wrap: break-word;
        }

        /* =====================================================
           KETERANGAN DOMISILI
        ====================================================== */

        .domisili {
            margin: 4px 0 15px 8mm;
            font-weight: bold;
            text-align: left;
            line-height: 1.5;
        }

        /* =====================================================
           PENUTUP
        ====================================================== */

        .penutup {
            margin-top: 8px;
            text-align: justify;
        }

        /* =====================================================
           TANDA TANGAN
        ====================================================== */

        .ttd {
            width: 75mm;
            margin-left: auto;
            margin-top: 28px;
            text-align: center;
            line-height: 1.5;
        }

        .ttd .tempat {
            margin-bottom: 2px;
        }

        .ttd .jabatan {
            font-weight: bold;
        }

        .ruang-tanda-tangan {
            height: 58px;
        }

        .ttd .nama {
            font-weight: bold;
            text-decoration: underline;
        }

        .ttd .nip {
            margin-top: 2px;
        }

        /* =====================================================
           PRINT
        ====================================================== */

        @media print {

            .print-button {
                display: none;
            }

            html,
            body {
                width: 210mm;
                min-height: 297mm;
                background: #fff;
            }

            .surat {
                width: 210mm;
                min-height: 297mm;
                margin: 0;
                padding: 18mm 20mm 20mm 20mm;
                box-shadow: none;
            }
        }
    </style>
</head>

<body>

    {{-- =====================================================
         AMBIL DATA KEPALA DESA
    ====================================================== --}}

    @php
        $kepalaDesa = \Illuminate\Support\Facades\DB::table('users')
            ->where('role', 'kepala_desa')
            ->first();
    @endphp


    {{-- =====================================================
         TOMBOL CETAK
    ====================================================== --}}

    <div class="print-button">
        <button onclick="window.print()">
            🖨️ Cetak / Simpan PDF
        </button>
    </div>


    {{-- =====================================================
         KERTAS SURAT
    ====================================================== --}}

    <div class="surat">


        {{-- =================================================
             KOP SURAT
        ================================================== --}}

        <div class="kop">

            <table class="kop-table">

                <tr>

                    {{-- LOGO --}}
                    <td class="kop-logo">

                        <img
                            src="https://cdn.phototourl.com/free/2026-08-19-ada8088c-135b-4f75-94c5-ef27a75114f8.png"
                            alt="Logo Desa"
                        >

                    </td>


                    {{-- TEKS KOP --}}
                    <td class="kop-text">

                        <div class="pemerintah">
                            PEMERINTAH KABUPATEN KEPAHIANG
                        </div>

                        <div class="desa">
                            DESA SUKAMERINDU
                        </div>

                        <div class="wilayah">
                            KECAMATAN
                            {{ $pengajuan->kecamatan ?? '....................' }}
                            KABUPATEN
                            {{ $pengajuan->kabupaten ?? '....................' }}
                        </div>

                        <div class="wilayah">
                            PROVINSI
                            {{ $pengajuan->provinsi ?? '....................' }}
                        </div>

                        <div class="alamat-kantor">
                            Alamat:
                            {{ $pengajuan->alamat_kantor ?? 'Kantor Desa Sukamerindu' }}
                        </div>

                    </td>

                </tr>

            </table>

        </div>


        {{-- =================================================
             JUDUL SURAT
        ================================================== --}}

        <div class="judul">

            <h1>
                SURAT KETERANGAN DOMISILI
            </h1>

            <div class="nomor">
                Nomor:
                {{ $pengajuan->nomor_surat ?? '................................' }}
            </div>

        </div>


        {{-- =================================================
             ISI SURAT
        ================================================== --}}

        <div class="isi">


            {{-- PARAGRAF PEMBUKA --}}

            <p class="paragraf">

                Yang bertanda tangan di bawah ini, Kepala Desa Sukamerindu,
                Kecamatan {{ $pengajuan->kecamatan ?? '....................' }},
                Kabupaten {{ $pengajuan->kabupaten ?? '....................' }},
                menerangkan bahwa:

            </p>


            {{-- =================================================
                 IDENTITAS WARGA
            ================================================== --}}

            <div class="identitas">

                <table>

                    <tr>

                        <td class="label">
                            Nama
                        </td>

                        <td class="titik-dua">
                            :
                        </td>

                        <td class="nilai">
                            {{ $pengajuan->nama_warga ?? '................................' }}
                        </td>

                    </tr>


                    <tr>

                        <td class="label">
                            NIK
                        </td>

                        <td class="titik-dua">
                            :
                        </td>

                        <td class="nilai">
                            {{ $pengajuan->nik ?? '................................' }}
                        </td>

                    </tr>


                    <tr>

                        <td class="label">
                            Tempat/Tanggal Lahir
                        </td>

                        <td class="titik-dua">
                            :
                        </td>

                        <td class="nilai">

                            {{ $pengajuan->tempat_lahir ?? '................................' }},

                            @if(!empty($pengajuan->tanggal_lahir))

                                {{ \Carbon\Carbon::parse($pengajuan->tanggal_lahir)->translatedFormat('d F Y') }}

                            @else

                                ................................

                            @endif

                        </td>

                    </tr>


                    <tr>

                        <td class="label">
                            Jenis Kelamin
                        </td>

                        <td class="titik-dua">
                            :
                        </td>

                        <td class="nilai">
                            {{ $pengajuan->jenis_kelamin ?? '................................' }}
                        </td>

                    </tr>


                    <tr>

                        <td class="label">
                            Agama
                        </td>

                        <td class="titik-dua">
                            :
                        </td>

                        <td class="nilai">
                            {{ $pengajuan->agama ?? '................................' }}
                        </td>

                    </tr>


                    <tr>

                        <td class="label">
                            Status Perkawinan
                        </td>

                        <td class="titik-dua">
                            :
                        </td>

                        <td class="nilai">
                            {{ $pengajuan->status_perkawinan ?? '................................' }}
                        </td>

                    </tr>


                    <tr>

                        <td class="label">
                            Pekerjaan
                        </td>

                        <td class="titik-dua">
                            :
                        </td>

                        <td class="nilai">
                            {{ $pengajuan->pekerjaan ?? '................................' }}
                        </td>

                    </tr>


                    <tr>

                        <td class="label">
                            Alamat KTP
                        </td>

                        <td class="titik-dua">
                            :
                        </td>

                        <td class="nilai">
                            {{ $pengajuan->alamat ?? '................................' }}
                        </td>

                    </tr>

                </table>

            </div>


            {{-- =================================================
                 KETERANGAN DOMISILI
            ================================================== --}}

            <p class="paragraf">

                Adalah benar warga yang
                <strong>berdomisili/bertempat tinggal di Desa Sukamerindu</strong>,
                Kecamatan {{ $pengajuan->kecamatan ?? '....................' }},
                Kabupaten {{ $pengajuan->kabupaten ?? '....................' }},
                Provinsi {{ $pengajuan->provinsi ?? '....................' }},
                dengan alamat:

            </p>


            {{-- ALAMAT DOMISILI --}}

            <div class="domisili">

                {{ $pengajuan->alamat ?? '..............................................................' }}

                @if(!empty($pengajuan->rt) || !empty($pengajuan->rw))

                    , RT {{ $pengajuan->rt ?? '....' }}
                    / RW {{ $pengajuan->rw ?? '....' }}

                @endif


                @if(!empty($pengajuan->desa))

                    , Desa {{ $pengajuan->desa }}

                @endif


                @if(!empty($pengajuan->kecamatan))

                    , Kecamatan {{ $pengajuan->kecamatan }}

                @endif


                @if(!empty($pengajuan->kabupaten))

                    , Kabupaten {{ $pengajuan->kabupaten }}

                @endif

            </div>


            {{-- =================================================
                 PARAGRAF PENJELASAN
            ================================================== --}}

            <p class="paragraf">

                Surat keterangan ini dibuat berdasarkan keterangan yang
                bersangkutan dan data administrasi kependudukan yang ada,
                untuk dipergunakan sebagaimana mestinya.

            </p>


            {{-- =================================================
                 PARAGRAF PENUTUP
            ================================================== --}}

            <p class="paragraf">

                Demikian surat keterangan ini dibuat dengan sebenar-benarnya
                agar dapat dipergunakan sebagaimana mestinya.

            </p>


        </div>


        {{-- =================================================
             TANDA TANGAN KEPALA DESA
        ================================================== --}}

        <div class="ttd">

            <div class="tempat">

                Kepahiang,
                {{ now()->translatedFormat('d F Y') }}

            </div>


            <div class="jabatan">

                Kepala Desa Sukamerindu

            </div>


            <div class="ruang-tanda-tangan">

                {{-- Tempat tanda tangan dan stempel --}}

            </div>


            <div class="nama">

                {{ $kepalaDesa->name ?? '[NAMA KEPALA DESA]' }}

            </div>


            <div class="nip">

                NIP.
                {{ $kepalaDesa->nip ?? '[Jika ada]' }}

            </div>

        </div>


    </div>

</body>

</html>
