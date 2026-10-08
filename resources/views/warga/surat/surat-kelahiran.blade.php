<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">

    <title>
        Surat Keterangan Kelahiran
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
    </style>
</head>

<body>

    <div class="kop">
        <h3>PEMERINTAH DESA SUKAMERINDU</h3>
        <h2>DESA SUKAMERINDU</h2>
        <p>Kecamatan Sukamerindu, Kabupaten Kepahiang</p>
        <p>Provinsi Bengkulu</p>
    </div>

    <div class="judul">
        <h3>SURAT KETERANGAN KELAHIRAN</h3>

        <p>
            Nomor: {{ $pengajuan->nomor_surat ?? '-' }}
        </p>
    </div>

    <div class="isi">

        <p>
            Yang bertanda tangan di bawah ini, Kepala Desa Sukamerindu,
            Kecamatan Sukamerindu, Kabupaten Kepahiang, menerangkan bahwa
            telah terjadi kelahiran seorang anak dari:
        </p>

        <p><strong>Orang Tua:</strong></p>

        <table class="data">

            <tr>
                <td width="170">Nama Ayah</td>
                <td>: {{ $pengajuan->nama_ayah ?? '-' }}</td>
            </tr>

            <tr>
                <td>Nama Ibu</td>
                <td>: {{ $pengajuan->nama_ibu ?? '-' }}</td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td>: {{ $pengajuan->alamat ?? '-' }}</td>
            </tr>

        </table>

        <p><strong>Data Kelahiran:</strong></p>

        <table class="data">

            <tr>
                <td width="170">Nama Anak</td>
                <td>: {{ $pengajuan->nama_anak ?? '-' }}</td>
            </tr>

            <tr>
                <td>Jenis Kelamin</td>
                <td>: {{ $pengajuan->jenis_kelamin_anak ?? '-' }}</td>
            </tr>

            <tr>
                <td>Tempat Lahir</td>
                <td>: {{ $pengajuan->tempat_lahir ?? '-' }}</td>
            </tr>

            <tr>
                <td>Tanggal Lahir</td>
                <td>: {{ $pengajuan->tanggal_lahir ?? '-' }}</td>
            </tr>

        </table>

        <p>
            Demikian surat keterangan kelahiran ini dibuat berdasarkan
            keterangan yang benar untuk dapat dipergunakan sebagaimana
            mestinya.
        </p>

    </div>

    <div class="ttd">

        <p>
            Sukamerindu,
            {{ $pengajuan->selesai_pada
                ? \Carbon\Carbon::parse($pengajuan->selesai_pada)->translatedFormat('d F Y')
                : now()->translatedFormat('d F Y')
            }}
        </p>

        <p>Kepala Desa Sukamerindu</p>

        <div class="nama">
            {{ $pengajuan->disetujuiOleh->name ?? '-' }}
        </div>

    </div>

</body>

</html>
