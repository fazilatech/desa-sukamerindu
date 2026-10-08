<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">

    <title>
        Surat Pengantar
    </title>

    <style>
        body {
            font-family: "Times New Roman", serif;
            font-size: 12pt;
            line-height: 1.5;
            margin: 40px 60px;
            color: #000;
        }

        .kop {
            text-align: center;
            border-bottom: 3px solid #000;
            padding-bottom: 10px;
            margin-bottom: 25px;
        }

        .kop h3 {
            margin: 0;
            font-size: 14pt;
            font-weight: bold;
        }

        .kop h2 {
            margin: 0;
            font-size: 16pt;
            font-weight: bold;
        }

        .kop p {
            margin: 2px 0;
            font-size: 11pt;
        }

        .judul {
            text-align: center;
            margin-bottom: 25px;
        }

        .judul h3 {
            margin: 0;
            text-decoration: underline;
        }

        .judul p {
            margin: 3px 0;
        }

        .isi {
            text-align: justify;
        }

        table.data {
            margin: 15px 0 15px 30px;
        }

        table.data td {
            padding: 2px 8px;
            vertical-align: top;
        }

        .ttd {
            width: 250px;
            margin-left: auto;
            margin-top: 40px;
            text-align: center;
        }

        .ttd .nama {
            margin-top: 70px;
            font-weight: bold;
            text-decoration: underline;
        }

        @media print {
            body {
                margin: 30px 50px;
            }
        }
    </style>
</head>

<body>

    {{-- =================================================
         KOP SURAT
    ================================================== --}}

    <div class="kop">

        <h3>
            PEMERINTAH DESA SUKAMERINDU
        </h3>

        <h2>
            DESA SUKAMERINDU
        </h2>

        <p>
            Kecamatan Sukamerindu, Kabupaten Kepahiang
        </p>

        <p>
            Provinsi Bengkulu
        </p>

    </div>


    {{-- =================================================
         JUDUL SURAT
    ================================================== --}}

    <div class="judul">

        <h3>
            SURAT PENGANTAR
        </h3>

        <p>
            Nomor:
            {{ $pengajuan->nomor_surat ?? '-' }}
        </p>

    </div>


    {{-- =================================================
         ISI SURAT
    ================================================== --}}

    <div class="isi">

        <p>
            Yang bertanda tangan di bawah ini, Kepala Desa Sukamerindu,
            Kecamatan Sukamerindu, Kabupaten Kepahiang, menerangkan bahwa:
        </p>


        <table class="data">

            <tr>
                <td width="150">
                    Nama
                </td>

                <td>
                    :
                    {{ $pengajuan->user->name ?? '-' }}
                </td>
            </tr>

            <tr>
                <td>
                    NIK
                </td>

                <td>
                    :
                    {{ $pengajuan->user->profilWarga->nik ?? '-' }}
                </td>
            </tr>

            <tr>
                <td>
                    Tempat/Tanggal Lahir
                </td>

                <td>
                    :
                    {{ $pengajuan->user->profilWarga->tempat_lahir ?? '-' }},
                    {{ $pengajuan->user->profilWarga->tanggal_lahir ?? '-' }}
                </td>
            </tr>

            <tr>
                <td>
                    Jenis Kelamin
                </td>

                <td>
                    :
                    {{ $pengajuan->user->profilWarga->jenis_kelamin ?? '-' }}
                </td>
            </tr>

            <tr>
                <td>
                    Alamat
                </td>

                <td>
                    :
                    {{ $pengajuan->user->profilWarga->alamat ?? '-' }}
                </td>
            </tr>

        </table>


        <p>
            Adalah benar warga Desa Sukamerindu yang mengajukan surat
            pengantar untuk keperluan:
        </p>


        <p>
            <strong>
                {{ $pengajuan->keterangan ?? '-' }}
            </strong>
        </p>


        <p>
            Demikian surat pengantar ini dibuat dengan sebenar-benarnya
            untuk dapat dipergunakan sebagaimana mestinya.
        </p>

    </div>


    {{-- =================================================
         TANDA TANGAN
    ================================================== --}}

    <div class="ttd">

        <p>
            Sukamerindu,
            {{ $pengajuan->selesai_pada
                ? \Carbon\Carbon::parse($pengajuan->selesai_pada)->translatedFormat('d F Y')
                : now()->translatedFormat('d F Y')
            }}
        </p>

        <p>
            Kepala Desa Sukamerindu
        </p>


        <div class="nama">

            {{ $pengajuan->disetujuiOleh->name ?? '-' }}

        </div>

    </div>

</body>

</html>
