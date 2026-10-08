<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pengajuan Surat - Desa Sukamerindu</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Segoe UI", Arial, sans-serif;
        }

        body {
            min-height: 100vh;
            background: #f3f6f9;
            color: #1f2937;
        }

        .page-content {
            min-height: calc(100vh - 76px);
            background: #f3f6f9;
            padding: 50px 45px;
        }

        .content-container {
            max-width: 1250px;
            margin: 0 auto;
        }

        .page-header {
            margin-bottom: 28px;
        }

        .page-header h1 {
            color: #0f2f52;
            font-size: 32px;
            font-weight: 800;
            margin-bottom: 7px;
        }

        .page-header p {
            color: #66809e;
            font-size: 14px;
        }

        .card {
            background: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 16px;
            padding: 30px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, .04);
        }

        .card-header {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 20px;
            padding-bottom: 22px;
            border-bottom: 1px solid #e5e7eb;
        }

        .card-header h2 {
            color: #0f2f52;
            font-size: 21px;
            font-weight: 800;
            margin-bottom: 6px;
        }

        .card-header p {
            color: #66809e;
            font-size: 13px;
        }

        .section {
            padding: 26px 0;
            border-bottom: 1px solid #e5e7eb;
        }

        .section:last-of-type {
            border-bottom: none;
        }

        .section-title {
            display: flex;
            align-items: center;
            gap: 10px;
            color: #0f2f52;
            font-size: 18px;
            font-weight: 800;
            margin-bottom: 18px;
        }

        .section-title::before {
            content: "";
            width: 4px;
            height: 21px;
            border-radius: 999px;
            background: #0f2f52;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 16px;
        }

        .info-item {
            padding: 16px;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            background: #f8fafc;
        }

        .info-item label {
            display: block;
            color: #66809e;
            font-size: 11px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: .04em;
            margin-bottom: 7px;
        }

        .info-item strong,
        .info-item span.value {
            display: block;
            color: #0f2f52;
            font-size: 14px;
            line-height: 1.5;
            word-break: break-word;
        }

        .detail-row {
            display: grid;
            grid-template-columns: 210px 1fr;
            gap: 20px;
            padding: 15px 0;
            border-bottom: 1px solid #e5e7eb;
        }

        .detail-row:last-child {
            border-bottom: none;
        }

        .detail-label {
            color: #0f2f52;
            font-weight: 700;
        }

        .detail-value {
            color: #374151;
            line-height: 1.6;
            word-break: break-word;
        }

        .empty {
            color: #9ca3af;
            font-style: italic;
        }

        .status {
            display: inline-flex;
            align-items: center;
            padding: 7px 12px;
            border-radius: 999px;
            font-size: 12px;
            font-weight: 700;
        }

        .status-menunggu {
            background: #fff3cd;
            color: #a16207;
        }

        .status-diproses {
            background: #e0e7ff;
            color: #4338ca;
        }

        .status-disetujui {
            background: #dbeafe;
            color: #1d4ed8;
        }

        .status-selesai {
            background: #dcfce7;
            color: #15803d;
        }

        .status-ditolak {
            background: #fee2e2;
            color: #dc2626;
        }

        .status-default {
            background: #f3f4f6;
            color: #4b5563;
        }

        .timeline {
            position: relative;
            margin-left: 8px;
            padding-left: 28px;
        }

        .timeline::before {
            content: "";
            position: absolute;
            left: 6px;
            top: 8px;
            bottom: 8px;
            width: 2px;
            background: #e5e7eb;
        }

        .timeline-item {
            position: relative;
            padding-bottom: 20px;
        }

        .timeline-item:last-child {
            padding-bottom: 0;
        }

        .timeline-dot {
            position: absolute;
            left: -28px;
            top: 3px;
            width: 15px;
            height: 15px;
            border-radius: 50%;
            background: #fff;
            border: 3px solid #0f2f52;
            z-index: 1;
        }

        .timeline-title {
            color: #0f2f52;
            font-size: 14px;
            font-weight: 700;
        }

        .timeline-date {
            color: #6b7280;
            font-size: 12px;
            margin-top: 3px;
        }

        .action-area {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 10px;
            margin-top: 26px;
            padding-top: 22px;
            border-top: 1px solid #e5e7eb;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 7px;
            padding: 10px 16px;
            border: none;
            border-radius: 8px;
            text-decoration: none;
            cursor: pointer;
            font-size: 14px;
            font-weight: 700;
            transition: .2s ease;
        }

        .btn-back {
            background: #6b7280;
            color: #fff;
        }

        .btn-back:hover {
            background: #4b5563;
            color: #fff;
        }

        .btn-print {
            background: #0f2f52;
            color: #fff;
        }

        .btn-print:hover {
            background: #0b243e;
            color: #fff;
        }

        @media (max-width: 700px) {
            .page-content {
                padding: 25px 15px;
            }

            .page-header h1 {
                font-size: 24px;
            }

            .card {
                padding: 20px;
            }

            .card-header {
                flex-direction: column;
            }

            .info-grid,
            .note-grid {
                grid-template-columns: 1fr;
            }

            .detail-row {
                grid-template-columns: 1fr;
                gap: 5px;
            }
        }

        @media print {
            body {
                background: #fff;
            }

            .page-content {
                padding: 20px;
            }

            .card {
                border: none;
                box-shadow: none;
                padding: 0;
            }

            .action-area {
                display: none;
            }
        }
    </style>
</head>

<body>

    {{-- NAVBAR --}}
    @include('layouts.navigation')

    <main class="page-content">
        <div class="content-container">

            {{-- HEADER --}}
            <div class="page-header">
                <h1>Detail Pengajuan Surat</h1>
                <p>Informasi lengkap pengajuan surat kamu.</p>
            </div>

            <div class="card">

                {{-- HEADER CARD --}}
                <div class="card-header">

                    <div>
                        <h2>Pengajuan Surat</h2>
                        <p>Berikut rincian pengajuan surat yang kamu kirim.</p>
                    </div>

                    <div>

                        @php
                            $status = strtolower(
                                trim($pengajuan->status ?? '')
                            );
                        @endphp

                        @if($status === 'menunggu')

                            <span class="status status-menunggu">
                                Menunggu Persetujuan
                            </span>

                        @elseif($status === 'diproses')

                            <span class="status status-diproses">
                                Sedang Diproses
                            </span>

                        @elseif($status === 'disetujui')

                            <span class="status status-disetujui">
                                Disetujui
                            </span>

                        @elseif($status === 'selesai')

                            <span class="status status-selesai">
                                Selesai
                            </span>

                        @elseif($status === 'ditolak')

                            <span class="status status-ditolak">
                                Ditolak
                            </span>

                        @else

                            <span class="status status-default">
                                {{ ucfirst($pengajuan->status ?? '-') }}
                            </span>

                        @endif

                    </div>

                </div>


                {{-- =====================================================
                     RINGKASAN PENGAJUAN
                ====================================================== --}}

                <section class="section">

                    <h2 class="section-title">
                        Ringkasan Pengajuan
                    </h2>

                    <div class="info-grid">

                        <div class="info-item">

                            <label>
                                Nomor Pengajuan
                            </label>

                            <strong>
                                #{{ $pengajuan->id ?? '-' }}
                            </strong>

                        </div>


                        <div class="info-item">

                            <label>
                                Nomor Surat
                            </label>

                            <span class="value">

                                @if(!empty($pengajuan->nomor_surat))

                                    {{ $pengajuan->nomor_surat }}

                                @else

                                    <span class="empty">
                                        Belum diterbitkan
                                    </span>

                                @endif

                            </span>

                        </div>


                        <div class="info-item">

                            <label>
                                Jenis Surat
                            </label>

                            @php

                                $jenisSurat = [

                                    'domisili'
                                    => 'Surat Domisili',

                                    'pengantar'
                                    => 'Surat Pengantar',

                                    'keterangan_usaha'
                                    => 'Surat Keterangan Usaha',

                                    'keterangan_tidak_mampu'
                                    => 'Surat Keterangan Tidak Mampu',

                                ];

                            @endphp

                            <strong>
                                {{
                                    $jenisSurat[
                                        $pengajuan->jenis_surat ?? ''
                                    ]
                                    ??
                                    ($pengajuan->jenis_surat ?? '-')
                                }}
                            </strong>

                        </div>


                        <div class="info-item">

                            <label>
                                Tanggal Pengajuan
                            </label>

                            <span class="value">

                                @if(!empty($pengajuan->created_at))

                                    {{
                                        \Carbon\Carbon::parse(
                                            $pengajuan->created_at
                                        )->format('d/m/Y H:i')
                                    }}

                                @else

                                    -

                                @endif

                            </span>

                        </div>

                    </div>

                </section>


                {{-- =====================================================
                     DATA WARGA
                ====================================================== --}}

                <section class="section">

                    <h2 class="section-title">
                        Data Warga
                    </h2>


                    <div class="detail-row">

                        <div class="detail-label">
                            NIK
                        </div>

                        <div class="detail-value">

                            @if(!empty($pengajuan->nik))

                                {{ $pengajuan->nik }}

                            @elseif(!empty(auth()->user()->nik))

                                {{ auth()->user()->nik }}

                            @else

                                <span class="empty">
                                    Belum tersedia
                                </span>

                            @endif

                        </div>

                    </div>


                    <div class="detail-row">

                        <div class="detail-label">
                            Nama
                        </div>

                        <div class="detail-value">

                            {{
                                $pengajuan->nama_warga
                                ?? auth()->user()->name
                                ?? '-'
                            }}

                        </div>

                    </div>

                </section>


                {{-- =====================================================
                     DETAIL SURAT
                ====================================================== --}}

                <section class="section">

                    <h2 class="section-title">
                        Detail Surat
                    </h2>


                    <div class="detail-row">

                        <div class="detail-label">
                            Jenis Surat
                        </div>

                        <div class="detail-value">

                            {{
                                $jenisSurat[
                                    $pengajuan->jenis_surat ?? ''
                                ]
                                ??
                                ($pengajuan->jenis_surat ?? '-')
                            }}

                        </div>

                    </div>


                    <div class="detail-row">

                        <div class="detail-label">
                            Keperluan
                        </div>

                        <div class="detail-value">

                            {{
                                $pengajuan->keterangan
                                ?? $pengajuan->keperluan
                                ?? '-'
                            }}

                        </div>

                    </div>

                </section>


                {{-- =====================================================
                     INFORMASI PROSES
                ====================================================== --}}

                            @php

                                $tanggalPersetujuan =
                                    $pengajuan->tanggal_persetujuan
                                    ?? $pengajuan->approved_at
                                    ?? null;

                            @endphp


                            @php

                                $tanggalProses =
                                    $pengajuan->tanggal_proses
                                    ?? $pengajuan->processed_at
                                    ?? null;

                            @endphp


                <section class="section">

                    <h2 class="section-title">
                        Informasi Proses
                    </h2>


                    <div class="detail-row">

                        <div class="detail-label">
                            Status
                        </div>

                        <div class="detail-value">

                            @if($status === 'menunggu')

                                <span class="status status-menunggu">
                                    Menunggu Persetujuan
                                </span>

                            @elseif($status === 'diproses')

                                <span class="status status-diproses">
                                    Sedang Diproses
                                </span>

                            @elseif($status === 'disetujui')

                                <span class="status status-disetujui">
                                    Disetujui
                                </span>

                            @elseif($status === 'selesai')

                                <span class="status status-selesai">
                                    Selesai
                                </span>

                            @elseif($status === 'ditolak')

                                <span class="status status-ditolak">
                                    Ditolak
                                </span>

                            @else

                                <span class="status status-default">
                                    {{ ucfirst($pengajuan->status ?? '-') }}
                                </span>

                            @endif

                        </div>

                    </div>


                </section>


                {{-- =====================================================
                     RIWAYAT PENGAJUAN
                ====================================================== --}}

                <section class="section">

                    <h2 class="section-title">
                        Riwayat Pengajuan
                    </h2>


                    <div class="timeline">

                        {{-- PENGAJUAN DIBUAT --}}
                        <div class="timeline-item">

                            <div class="timeline-dot"></div>

                            <div class="timeline-title">
                                Pengajuan Dibuat
                            </div>

                            <div class="timeline-date">

                                @if(!empty($pengajuan->created_at))

                                    {{
                                        \Carbon\Carbon::parse(
                                            $pengajuan->created_at
                                        )->format('d/m/Y H:i')
                                    }}

                                @else

                                    -

                                @endif

                            </div>

                        </div>


                        {{-- PENGAJUAN DIPROSES --}}
                        @if(!empty($tanggalProses))

                            <div class="timeline-item">

                                <div class="timeline-dot"></div>

                                <div class="timeline-title">
                                    Pengajuan Diproses
                                </div>

                                <div class="timeline-date">

                                    {{
                                        \Carbon\Carbon::parse(
                                            $tanggalProses
                                        )->format('d/m/Y H:i')
                                    }}

                                </div>

                            </div>

                        @endif


                        {{-- PENGAJUAN DISETUJUI --}}
                        @if(!empty($tanggalPersetujuan))

                            <div class="timeline-item">

                                <div class="timeline-dot"></div>

                                <div class="timeline-title">
                                    Pengajuan Disetujui
                                </div>

                                <div class="timeline-date">

                                    {{
                                        \Carbon\Carbon::parse(
                                            $tanggalPersetujuan
                                        )->format('d/m/Y H:i')
                                    }}

                                </div>

                            </div>

                        @endif


                        {{-- PENGAJUAN DITOLAK --}}
                        @if($status === 'ditolak')

                            <div class="timeline-item">

                                <div class="timeline-dot"></div>

                                <div class="timeline-title">
                                    Pengajuan Ditolak
                                </div>

                                <div class="timeline-date">
                                    Status pengajuan saat ini ditolak.
                                </div>

                            </div>

                        @elseif($status === 'selesai')

                            {{-- PENGAJUAN SELESAI --}}
                            <div class="timeline-item">

                                <div class="timeline-dot"></div>

                                <div class="timeline-title">
                                    Pengajuan Selesai
                                </div>

                                <div class="timeline-date">
                                    Surat telah selesai diproses.
                                </div>

                            </div>

                        @endif

                    </div>

                </section>


                {{-- =====================================================
                     TOMBOL AKSI
                ====================================================== --}}

                <div class="action-area">

                    {{-- KEMBALI --}}
                    <a
                        href="{{ route('warga.pengajuan') }}"
                        class="btn btn-back"
                    >
                        ← Kembali
                    </a>


                    {{-- CETAK SURAT --}}
                    @if(
                        $status === 'selesai' ||
                        $status === 'disetujui'
                    )

                        <a
                            href="{{ route('warga.surat', ['id' => $pengajuan->id]) }}"
                            class="btn btn-print"
                            target="_blank"
                        >
                            🖨️ Cetak Surat
                        </a>

                    @endif

                </div>

            </div>

        </div>
    </main>

</body>
</html>
