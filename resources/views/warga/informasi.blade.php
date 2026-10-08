<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Informasi - Sistem Informasi Desa Sukamerindu
    </title>


    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        body {
            min-height: 100vh;

            font-family:
                "Segoe UI",
                Arial,
                Helvetica,
                sans-serif;

            background: #f3f6f9;

            color: #1f2937;
        }


        /* =====================================================
           CONTENT
        ====================================================== */

        .page-content {

            min-height:
                calc(100vh - 76px);

            background: #f3f6f9;

            padding:
                50px 45px;
        }


        .content-container {

            max-width: 1250px;

            margin: 0 auto;
        }


        /* =====================================================
           PAGE HEADER
        ====================================================== */

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


        /* =====================================================
           SEARCH & FILTER INFORMASI
        ====================================================== */

        .information-toolbar {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 18px;
            width: 100%;
        }

        .information-search {
            position: relative;
            flex: 1;
            min-width: 0;
        }

        .information-search-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 15px;
            color: #7b8ca3;
            pointer-events: none;
        }

        .information-search input {
            width: 100%;
            height: 46px;
            padding: 0 16px 0 42px;
            border: 1px solid #dbe3eb;
            border-radius: 12px;
            outline: none;
            background: #ffffff;
            color: #1f2937;
            font-family: "Segoe UI", Arial, Helvetica, sans-serif;
            font-size: 13px;
            transition: border-color .2s ease, box-shadow .2s ease;
        }

        .information-search input:focus {
            border-color: #0f2f52;
            box-shadow: 0 0 0 3px rgba(15, 47, 82, .07);
        }

        .information-filter {
            position: relative;
            flex: 0 0 205px;
        }

        .information-filter-button {
            width: 100%;
            height: 46px;
            padding: 0 14px;
            border: 1px solid #dbe3eb;
            border-radius: 12px;
            outline: none;
            background: #ffffff;
            color: #52667d;
            font-family: "Segoe UI", Arial, Helvetica, sans-serif;
            font-size: 13px;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 8px;
            transition: border-color .2s ease, box-shadow .2s ease, background .2s ease;
        }

        .information-filter-button:hover,
        .information-filter-button.open,
        .information-filter-button.active {
            border-color: #9bb6d0;
            background: #ffffff;
        }

        .filter-button-left {
            display: flex;
            align-items: center;
            gap: 9px;
        }

        .information-filter-icon {
            font-size: 14px;
            color: #52667d;
        }

        .information-filter-chevron {
            font-size: 10px;
            transition: transform .2s ease;
        }

        .information-filter-button.open .information-filter-chevron {
            transform: rotate(180deg);
        }

        .information-filter-panel {
            position: absolute;
            top: calc(100% + 9px);
            right: 0;
            z-index: 100;
            width: 310px;
            max-width: calc(100vw - 30px);
            padding: 18px;
            background: #ffffff;
            border: 1px solid #dbe3eb;
            border-radius: 14px;
            box-shadow: 0 14px 32px rgba(15, 47, 82, .13);
            opacity: 0;
            visibility: hidden;
            transform: translateY(-5px);
            transition: opacity .18s ease, visibility .18s ease, transform .18s ease;
        }

        .information-filter.open .information-filter-panel {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .filter-panel-title {
            color: #0f2f52;
            font-size: 15px;
            font-weight: 800;
            margin-bottom: 16px;
        }

        .filter-group {
            margin-bottom: 18px;
        }

        .filter-label {
            color: #52667d;
            font-size: 12px;
            font-weight: 800;
            margin-bottom: 9px;
        }

        .category-check-list {
            display: flex;
            flex-direction: column;
            gap: 2px;
            max-height: 235px;
            overflow-y: auto;
            padding-right: 3px;
        }

        .category-check {
            display: flex;
            align-items: center;
            gap: 9px;
            padding: 7px 6px;
            border-radius: 8px;
            color: #52667d;
            font-size: 12px;
            cursor: pointer;
            transition: background .18s ease;
        }

        .category-check:hover {
            background: #f5f8fb;
        }

        .category-check input {
            width: 15px;
            height: 15px;
            accent-color: #0f2f52;
            cursor: pointer;
            flex: 0 0 auto;
        }

        .category-check span {
            flex: 1;
        }

        .information-date-select {
            width: 100%;
            height: 40px;
            padding: 0 11px;
            border: 1px solid #dbe3eb;
            border-radius: 9px;
            outline: none;
            background: #ffffff;
            color: #52667d;
            font-family: "Segoe UI", Arial, Helvetica, sans-serif;
            font-size: 12px;
            cursor: pointer;
        }

        .information-date-select:focus {
            border-color: #0f2f52;
            box-shadow: 0 0 0 3px rgba(15, 47, 82, .06);
        }

        .filter-selected-info {
            display: none;
            margin-bottom: 18px;
            color: #66809e;
            font-size: 12px;
        }

        .filter-selected-info.show {
            display: block;
        }

        .filter-selected-info strong {
            color: #0f2f52;
        }

        .filter-actions {
            display: flex;
            justify-content: flex-end;
            gap: 8px;
            padding-top: 14px;
            border-top: 1px solid #edf0f4;
        }

        .filter-action {
            border: 0;
            border-radius: 9px;
            padding: 9px 14px;
            font-family: "Segoe UI", Arial, Helvetica, sans-serif;
            font-size: 12px;
            font-weight: 700;
            cursor: pointer;
        }

        .filter-reset {
            background: #f1f5f9;
            color: #52667d;
        }

        .filter-apply {
            background: #0f2f52;
            color: #ffffff;
        }

        .filter-reset:hover,
        .filter-apply:hover {
            opacity: .9;
        }

        .announcement-card.is-hidden {
            display: none;
        }

        .information-empty-filter {
            display: none;
            text-align: center;
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 16px;
            padding: 55px 25px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, .04);
        }

        .information-empty-filter.show {
            display: block;
        }

        .information-empty-filter .empty-icon {
            margin-bottom: 10px;
            font-size: 42px;
        }

        .information-empty-filter .empty-title {
            margin-bottom: 7px;
        }

        .information-empty-filter .empty-text {
            line-height: 1.6;
        }

        /* =====================================================
           LIST INFORMASI
        ====================================================== */

        .announcement-list {

            display: grid;

            grid-template-columns:
                repeat(2, minmax(0, 1fr));

            gap: 20px;
        }


        .announcement-card {

            background: #ffffff;

            border:
                1px solid #e5e7eb;

            border-radius: 16px;

            padding: 25px;

            box-shadow:
                0 4px 15px
                rgba(0, 0, 0, .04);

            transition:
                transform .25s ease,
                box-shadow .25s ease,
                border-color .25s ease;

            cursor: pointer;
        }


        .announcement-card:hover {

            transform: translateY(-6px);

            box-shadow:
                0 12px 28px
                rgba(15, 47, 82, .12);

            border-color: #d7e3ef;
        }


        .announcement-top {

            display: flex;

            align-items: center;

            justify-content: space-between;

            margin-bottom: 20px;
        }


        .category {

            display: inline-flex;

            align-items: center;

            padding:
                7px 12px;

            border-radius: 999px;

            background: #dcfce7;

            color: #087b3f;

            font-size: 12px;

            font-weight: 700;
        }


        .announcement-date {

            color: #8a9ab0;

            font-size: 12px;
        }


        .announcement-title {

            color: #0f2f52;

            font-size: 20px;

            font-weight: 800;

            margin-bottom: 12px;
        }


        .announcement-content {

            color: #64748b;

            font-size: 14px;

            line-height: 1.7;

            white-space: pre-line;

            margin-bottom: 22px;
        }


        .announcement-footer {

            padding-top: 16px;

            border-top:
                1px solid #edf0f4;

            display: flex;

            justify-content: space-between;

            align-items: center;
        }


        .announcement-author {

            color: #8a9ab0;

            font-size: 12px;
        }


        /* =====================================================
           KOMENTAR
        ====================================================== */

        .comment-section {

            margin-top: 20px;

            padding-top: 18px;

            border-top:
                1px solid #edf0f4;
        }


        .comment-title {

            color: #0f2f52;

            font-size: 14px;

            font-weight: 700;

            margin-bottom: 10px;
        }


        .comment-login-info {

            color: #8a9ab0;

            font-size: 13px;

            line-height: 1.6;

            background: #f8fafc;

            border-radius: 10px;

            padding: 12px 14px;
        }


        .comment-form {

            display: flex;

            flex-direction: column;

            gap: 10px;
        }


        .comment-input {

            width: 100%;

            min-height: 80px;

            resize: vertical;

            padding: 11px 13px;

            border:
                1px solid #dbe3eb;

            border-radius: 10px;

            outline: none;

            font-family:
                "Segoe UI",
                Arial,
                Helvetica,
                sans-serif;

            font-size: 13px;

            color: #334155;

            background: #ffffff;
        }


        .comment-input:focus {

            border-color: #9bb6d0;

            box-shadow:
                0 0 0 3px
                rgba(15, 47, 82, .06);
        }


        .comment-button {

            align-self: flex-end;

            border: none;

            border-radius: 9px;

            padding: 9px 17px;

            background: #0f2f52;

            color: #ffffff;

            font-size: 12px;

            font-weight: 700;

            cursor: pointer;
        }


        .comment-button:hover {

            opacity: .92;
        }


        /* =====================================================
           EMPTY STATE
        ====================================================== */

        .empty {

            background: #ffffff;

            border:
                1px solid #e5e7eb;

            border-radius: 16px;

            padding:
                70px 30px;

            text-align: center;

            box-shadow:
                0 4px 15px
                rgba(0, 0, 0, .04);
        }


        .empty-icon {

            font-size: 50px;

            margin-bottom: 15px;
        }


        .empty-title {

            color: #0f2f52;

            font-size: 19px;

            font-weight: 800;

            margin-bottom: 8px;
        }


        .empty-text {

            color: #7b8ca3;

            font-size: 14px;
        }


        /* =====================================================
           RESPONSIVE
        ====================================================== */

        @media (max-width: 900px) {

            .page-content {

                padding:
                    35px 25px;
            }


            .page-header h1 {

                font-size: 28px;
            }


            .announcement-list {

                grid-template-columns: 1fr;
            }

        }


        @media (max-width: 600px) {

            .information-toolbar {

                margin-bottom: 18px;
            }


            .information-toolbar {

                flex-direction: column;

                align-items: stretch;

                gap: 10px;
            }


            .information-search {

                min-width: 100%;
            }


            .information-filter {

                flex: 0 0 auto;

                width: 100%;
            }

            .information-filter-panel {
                width: 310px;
                max-width: calc(100vw - 30px);
            }


            .information-filter-panel {
                right: 0;
            }


            .page-content {

                padding:
                    25px 15px;
            }


            .page-header h1 {

                font-size: 24px;
            }


            .page-header p {

                font-size: 13px;
            }


            .announcement-card {

                padding:
                    22px 18px;
            }


            .announcement-top {

                align-items: flex-start;

                gap: 10px;
            }


            .announcement-footer {

                gap: 10px;

                flex-wrap: wrap;
            }

        }

    </style>

</head>


<body>


    {{-- =====================================================
         NAVBAR UTAMA

         JANGAN BUAT NAVBAR SENDIRI DI SINI.
         Gunakan navbar yang SAMA seperti Pengajuan Surat.
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
                    Informasi Desa
                </h1>

                <p>
                    Informasi dan pengumuman terbaru dari
                    Desa Sukamerindu.
                </p>

            </div>



            @if(session('success'))

                <div
                    style="
                        margin-bottom:20px;
                        padding:12px 15px;
                        background:#dcfce7;
                        border:1px solid #bbf7d0;
                        border-radius:10px;
                        color:#087b3f;
                        font-size:13px;
                    "
                >
                    {{ session('success') }}
                </div>

            @endif


            {{-- =================================================
                 SEARCH + FILTER
                 SATU FILTER: KATEGORI MULTI-PILIH + TANGGAL
            ================================================== --}}

            <div class="information-toolbar">

                <div class="information-search">

                    <span class="information-search-icon">
                        🔎
                    </span>

                    <input
                        type="search"
                        id="informationSearch"
                        placeholder="Cari informasi..."
                        autocomplete="off"
                        aria-label="Cari informasi"
                    >

                </div>


                <div class="information-filter" id="informationFilterWrapper">

                    <button
                        type="button"
                        id="informationFilterButton"
                        class="information-filter-button"
                        aria-expanded="false"
                        aria-haspopup="true"
                    >

                        <span class="filter-button-left">
                            <span class="information-filter-icon">⚙</span>
                            <span>Filter</span>
                        </span>

                        <span class="information-filter-chevron">▼</span>

                    </button>


                    <div
                        class="information-filter-panel"
                        id="informationFilterPanel"
                    >

                        <div class="filter-panel-title">
                            Filter Informasi
                        </div>


                        {{-- KATEGORI: BISA PILIH 1 ATAU LEBIH --}}
                        <div class="filter-group">

                            <div class="filter-label">
                                Kategori
                            </div>

                            <div class="category-check-list">

                                @foreach([
                                    'Pengumuman',
                                    'Kegiatan Desa',
                                    'Pelayanan',
                                    'Pembangunan',
                                    'Kesehatan',
                                    'Pendidikan',
                                    'Kemasyarakatan'
                                ] as $kategori)

                                    <label class="category-check">

                                        <input
                                            type="checkbox"
                                            class="category-checkbox"
                                            value="{{ strtolower($kategori) }}"
                                        >

                                        <span>
                                            {{ $kategori }}
                                        </span>

                                    </label>

                                @endforeach

                            </div>

                        </div>


                        {{-- TANGGAL --}}
                        <div class="filter-group">

                            <div class="filter-label">
                                Tanggal
                            </div>

                            <select
                                id="informationDateFilter"
                                class="information-date-select"
                            >
                                <option value="semua">Semua</option>
                                <option value="hari-ini">Hari ini</option>
                                <option value="kemarin">Kemarin</option>
                                <option value="minggu-ini">Minggu ini</option>
                                <option value="minggu-lalu">Minggu lalu</option>
                                <option value="bulan-ini">Bulan ini</option>
                                <option value="bulan-lalu">Bulan lalu</option>
                                <option value="tahun-ini">Tahun ini</option>
                                <option value="tahun-lalu">Tahun lalu</option>
                            </select>

                        </div>


                        <div class="filter-actions">

                            <button
                                type="button"
                                id="resetInformationFilter"
                                class="filter-action filter-reset"
                            >
                                Reset
                            </button>

                            <button
                                type="button"
                                id="applyInformationFilter"
                                class="filter-action filter-apply"
                            >
                                Terapkan
                            </button>

                        </div>

                    </div>

                </div>

            </div>


            <div
                class="filter-selected-info"
                id="filterSelectedInfo"
            >
                Filter aktif:
                <strong id="filterSelectedText"></strong>
            </div>


            {{-- =================================================
                 DAFTAR INFORMASI
            ================================================== --}}

            @if($informasi->count() > 0)


                <div class="announcement-list">


                    @foreach($informasi as $item)


                        @php
                            $kategoriItem = trim($item->kategori ?? '');

                            $kategoriUtama = [
                                'pengumuman',
                                'kegiatan desa',
                                'pelayanan',
                                'pembangunan',
                                'kesehatan',
                                'pendidikan',
                                'kemasyarakatan',
                            ];

                            $kategoriFilter = strtolower($kategoriItem);

                            if (!in_array($kategoriFilter, $kategoriUtama)) {
                                $kategoriFilter = 'lainnya';
                            }

                            $teksCari = strtolower(
                                ($item->judul ?? '') . ' ' .
                                ($item->isi ?? '') . ' ' .
                                $kategoriItem
                            );
                        @endphp


                        <article
                            class="announcement-card"
                            data-category="{{ e($kategoriFilter) }}"
                            data-search="{{ e($teksCari) }}"
                            data-date="{{ optional($item->created_at)->format('Y-m-d') }}"
                        >


                            {{-- TOP --}}

                            <div class="announcement-top">


                                <span class="category">

                                    {{ $item->kategori }}

                                </span>


                                <span class="announcement-date">

                                    {{ \Carbon\Carbon::parse($item->created_at)
                                        ->locale('id')
                                        ->translatedFormat('d F Y') }}

                                </span>


                            </div>



                            {{-- JUDUL --}}

                            <h2 class="announcement-title">

                                {{ $item->judul }}

                            </h2>



                            {{-- ISI --}}

                            <div class="announcement-content">

                                {{ $item->isi }}

                            </div>



                            {{-- FOOTER --}}

                            <div class="announcement-footer">


                                <span class="announcement-author">

                                    📢 Informasi Desa

                                </span>


                                <span class="announcement-author">

                                    Dipublikasikan

                                </span>


                            </div>


                            {{-- =================================================
                                 KOMENTAR
                                 Komentar tersimpan di database.
                            ================================================== --}}

                            <div class="comment-section">

                                <div class="comment-title">
                                    💬 Komentar
                                </div>

                                {{-- DAFTAR KOMENTAR --}}
                                @if($item->komentar_list->count() > 0)

                                    <div style="display:flex; flex-direction:column; gap:10px; margin-bottom:14px;">

                                        @foreach($item->komentar_list as $komentar)

                                            <div
                                                style="
                                                    background:#f8fafc;
                                                    border:1px solid #edf0f4;
                                                    border-radius:10px;
                                                    padding:11px 13px;
                                                "
                                            >

                                                <div
                                                    style="
                                                        display:flex;
                                                        justify-content:space-between;
                                                        gap:10px;
                                                        margin-bottom:5px;
                                                    "
                                                >

                                                    <strong
                                                        style="
                                                            color:#0f2f52;
                                                            font-size:13px;
                                                        "
                                                    >
                                                        {{ $komentar->nama_warga }}
                                                    </strong>

                                                    <span
                                                        style="
                                                            color:#9aa8b8;
                                                            font-size:11px;
                                                        "
                                                    >
                                                        {{ \Carbon\Carbon::parse($komentar->created_at)->locale('id')->translatedFormat('d F Y, H:i') }}
                                                    </span>

                                                </div>

                                                <div
                                                    style="
                                                        color:#64748b;
                                                        font-size:13px;
                                                        line-height:1.6;
                                                        white-space:pre-line;
                                                    "
                                                >
                                                    {{ $komentar->komentar }}
                                                </div>

                                            </div>

                                        @endforeach

                                    </div>

                                @else

                                    <div
                                        style="
                                            color:#8a9ab0;
                                            font-size:13px;
                                            margin-bottom:12px;
                                        "
                                    >
                                        Belum ada komentar.
                                    </div>

                                @endif


                                @auth

                                    @if(auth()->user()->role === 'warga')

                                        <form
                                            class="comment-form"
                                            method="POST"
                                            action="{{ route('warga.informasi.komentar', $item->id) }}"
                                        >

                                            @csrf

                                            <textarea
                                                name="komentar"
                                                class="comment-input"
                                                placeholder="Tulis komentar..."
                                                maxlength="1000"
                                                required
                                            ></textarea>

                                            <button
                                                type="submit"
                                                class="comment-button"
                                            >
                                                Kirim Komentar
                                            </button>

                                        </form>

                                    @else

                                        <div class="comment-login-info">
                                            Komentar hanya dapat diberikan oleh warga.
                                        </div>

                                    @endif

                                @else

                                    <div class="comment-login-info">
                                        Silakan login terlebih dahulu untuk memberikan komentar.
                                    </div>

                                @endauth

                            </div>


                        </article>


                    @endforeach


                </div>


                {{-- HASIL FILTER / SEARCH KOSONG --}}

                <div
                    class="information-empty-filter"
                    id="informationEmptyFilter"
                >

                    <div class="empty-icon">
                        🔎
                    </div>

                    <div class="empty-title">
                        Informasi tidak ditemukan
                    </div>

                    <div class="empty-text">
                        Coba gunakan kata kunci atau kategori yang lain.
                    </div>

                </div>


            @else


                {{-- =================================================
                     BELUM ADA INFORMASI
                ================================================== --}}

                <div class="empty">


                    <div class="empty-icon">
                        📢
                    </div>


                    <div class="empty-title">

                        Belum Ada Informasi

                    </div>


                    <div class="empty-text">

                        Belum ada informasi yang
                        dipublikasikan oleh Desa Sukamerindu.

                    </div>


                </div>


            @endif


        </div>


    </main>



    <script>
        document.addEventListener('DOMContentLoaded', function () {

            const searchInput =
                document.getElementById('informationSearch');

            const filterWrapper =
                document.getElementById('informationFilterWrapper');

            const filterButton =
                document.getElementById('informationFilterButton');

            const filterPanel =
                document.getElementById('informationFilterPanel');

            const dateFilter =
                document.getElementById('informationDateFilter');

            const applyButton =
                document.getElementById('applyInformationFilter');

            const resetButton =
                document.getElementById('resetInformationFilter');

            const categoryCheckboxes =
                Array.from(document.querySelectorAll('.category-checkbox'));

            const cards =
                Array.from(document.querySelectorAll('.announcement-card'));

            const emptyState =
                document.getElementById('informationEmptyFilter');

            const selectedInfo =
                document.getElementById('filterSelectedInfo');

            const selectedText =
                document.getElementById('filterSelectedText');


            let selectedCategories = [];
            let selectedPeriod = 'semua';


            function normalize(value) {
                return (value || '').toLowerCase().trim();
            }


            function parseLocalDate(value) {
                if (!value) {
                    return null;
                }

                const parts = value.split('-');

                if (parts.length !== 3) {
                    return null;
                }

                return new Date(
                    Number(parts[0]),
                    Number(parts[1]) - 1,
                    Number(parts[2])
                );
            }


            function startOfDay(date) {
                return new Date(
                    date.getFullYear(),
                    date.getMonth(),
                    date.getDate()
                );
            }


            function startOfWeek(date) {
                const result = startOfDay(date);
                const day = result.getDay();
                const diff = day === 0 ? -6 : 1 - day;

                result.setDate(result.getDate() + diff);

                return result;
            }


            function endOfWeek(date) {
                const result = startOfWeek(date);
                result.setDate(result.getDate() + 6);

                return result;
            }


            function isDateInPeriod(dateValue, period) {

                if (period === 'semua') {
                    return true;
                }

                const date = parseLocalDate(dateValue);

                if (!date) {
                    return false;
                }

                const today = startOfDay(new Date());

                const yesterday = new Date(today);
                yesterday.setDate(yesterday.getDate() - 1);


                if (period === 'hari-ini') {
                    return date.getTime() === today.getTime();
                }


                if (period === 'kemarin') {
                    return date.getTime() === yesterday.getTime();
                }


                if (period === 'minggu-ini') {
                    const start = startOfWeek(today);
                    const end = endOfWeek(today);

                    return date >= start && date <= end;
                }


                if (period === 'minggu-lalu') {
                    const start = startOfWeek(today);
                    start.setDate(start.getDate() - 7);

                    const end = new Date(start);
                    end.setDate(end.getDate() + 6);

                    return date >= start && date <= end;
                }


                if (period === 'bulan-ini') {
                    return (
                        date.getFullYear() === today.getFullYear() &&
                        date.getMonth() === today.getMonth()
                    );
                }


                if (period === 'bulan-lalu') {
                    const previousMonth = new Date(
                        today.getFullYear(),
                        today.getMonth() - 1,
                        1
                    );

                    return (
                        date.getFullYear() === previousMonth.getFullYear() &&
                        date.getMonth() === previousMonth.getMonth()
                    );
                }


                if (period === 'tahun-ini') {
                    return date.getFullYear() === today.getFullYear();
                }


                if (period === 'tahun-lalu') {
                    return date.getFullYear() === today.getFullYear() - 1;
                }

                return true;
            }


            function updateFilterInfo() {

                const parts = [];

                if (selectedCategories.length > 0) {
                    parts.push(
                        'Kategori: ' + selectedCategories
                            .map(function (item) {
                                return item
                                    .split(' ')
                                    .map(function (word) {
                                        return word.charAt(0).toUpperCase() + word.slice(1);
                                    })
                                    .join(' ');
                            })
                            .join(', ')
                    );
                }


                if (selectedPeriod !== 'semua') {
                    const option =
                        dateFilter.options[dateFilter.selectedIndex];

                    parts.push(
                        'Tanggal: ' + option.textContent.trim()
                    );
                }


                if (parts.length > 0) {
                    selectedText.textContent = parts.join(' • ');
                    selectedInfo.classList.add('show');
                } else {
                    selectedInfo.classList.remove('show');
                }
            }


            function applyFilters() {

                const keyword = normalize(searchInput.value);
                let visibleCount = 0;


                cards.forEach(function (card) {

                    const cardCategory =
                        normalize(card.dataset.category);

                    const cardText =
                        normalize(card.dataset.search);

                    const cardDate =
                        card.dataset.date || '';


                    const categoryMatch =
                        selectedCategories.length === 0 ||
                        selectedCategories.includes(cardCategory);

                    const searchMatch =
                        keyword === '' ||
                        cardText.includes(keyword);

                    const dateMatch =
                        isDateInPeriod(cardDate, selectedPeriod);

                    const visible =
                        categoryMatch &&
                        searchMatch &&
                        dateMatch;


                    card.classList.toggle(
                        'is-hidden',
                        !visible
                    );

                    if (visible) {
                        visibleCount++;
                    }
                });


                if (emptyState) {
                    emptyState.classList.toggle(
                        'show',
                        visibleCount === 0
                    );
                }

                updateFilterInfo();
            }


            filterButton.addEventListener('click', function (event) {

                event.stopPropagation();

                const open =
                    filterWrapper.classList.toggle('open');

                filterButton.setAttribute(
                    'aria-expanded',
                    open ? 'true' : 'false'
                );
            });


            applyButton.addEventListener('click', function () {

                selectedCategories =
                    categoryCheckboxes
                        .filter(function (checkbox) {
                            return checkbox.checked;
                        })
                        .map(function (checkbox) {
                            return normalize(checkbox.value);
                        });

                selectedPeriod = normalize(dateFilter.value);

                applyFilters();

                filterWrapper.classList.remove('open');

                filterButton.setAttribute(
                    'aria-expanded',
                    'false'
                );

                filterButton.classList.toggle(
                    'active',
                    selectedCategories.length > 0 ||
                    selectedPeriod !== 'semua'
                );
            });


            resetButton.addEventListener('click', function () {

                categoryCheckboxes.forEach(function (checkbox) {
                    checkbox.checked = false;
                });

                dateFilter.value = 'semua';
                searchInput.value = '';

                selectedCategories = [];
                selectedPeriod = 'semua';

                applyFilters();

                filterButton.classList.remove('active');
            });


            searchInput.addEventListener(
                'input',
                applyFilters
            );


            document.addEventListener('click', function (event) {

                if (
                    filterWrapper &&
                    !filterWrapper.contains(event.target)
                ) {
                    filterWrapper.classList.remove('open');

                    filterButton.setAttribute(
                        'aria-expanded',
                        'false'
                    );
                }
            });


            applyFilters();

        });
    </script>

</body>

</html>
