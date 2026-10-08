<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Informasi Desa - Desa Sukamerindu</title>


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


        .page {
            max-width: 1180px;
            margin: 0 auto;
            padding: 50px 35px 70px;
        }


        /* =====================================================
           HEADER
        ====================================================== */

        .page-header {
            margin-bottom: 28px;
        }


        .page-header h1 {
            font-size: 32px;
            font-weight: 800;
            color: #102a43;
            margin-bottom: 8px;
        }


        .page-header p {
            font-size: 15px;
            color: #718096;
        }


        /* =====================================================
           SEARCH + FILTER
        ====================================================== */

        .tools {
            display: grid;
            grid-template-columns: minmax(0, 1fr) 150px;
            gap: 14px;
            margin-bottom: 22px;
        }


        .search-box {
            position: relative;
        }


        .search-box input {
            width: 100%;
            height: 46px;
            border: 1px solid #dbe3ec;
            border-radius: 12px;
            background: #fff;
            color: #334155;
            outline: none;
            padding: 0 16px 0 43px;
            font-size: 14px;
            transition: .2s ease;
        }


        .search-box input:focus {
            border-color: #9bb8d4;
            box-shadow: 0 0 0 3px rgba(16, 42, 67, .07);
        }


        .search-icon {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 16px;
            pointer-events: none;
        }


        /* =====================================================
           FILTER WRAPPER
        ====================================================== */

        .filter-wrapper {
            position: relative;
        }


        .filter-button {
            width: 100%;
            height: 46px;

            border: 1px solid #dbe3ec;
            border-radius: 12px;

            background: #fff;
            color: #334155;

            font-family: inherit;
            font-size: 14px;
            font-weight: 700;

            cursor: pointer;

            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;

            transition: .2s ease;
        }


        .filter-button:hover {
            border-color: #9bb8d4;
            background: #f8fafc;
        }


        .filter-button.active {
            background: #102a43;
            color: #fff;
            border-color: #102a43;
        }


        .filter-arrow {
            font-size: 9px;
            transition: transform .2s ease;
        }


        .filter-button.open .filter-arrow {
            transform: rotate(180deg);
        }


        /* =====================================================
           FILTER PANEL
        ====================================================== */

        .filter-panel {
            display: none;

            position: absolute;

            top: calc(100% + 10px);
            right: 0;

            width: 310px;

            padding: 19px;

            background: #fff;

            border: 1px solid #e1e8ef;

            border-radius: 14px;

            box-shadow:
                0 15px 35px rgba(15, 23, 42, .13);

            z-index: 999;
        }


        .filter-panel.show {
            display: block;
        }


        .filter-panel-title {
            margin-bottom: 17px;

            color: #102a43;

            font-size: 16px;
            font-weight: 800;
        }


        /* =====================================================
           FILTER GROUP
        ====================================================== */

        .filter-group {
            margin-bottom: 20px;
        }


        .filter-label {
            margin-bottom: 10px;

            color: #374151;

            font-size: 13px;
            font-weight: 800;
        }


        /* =====================================================
           CATEGORY CHECKBOX
        ====================================================== */

        .category-list {
            display: flex;
            flex-direction: column;
            gap: 2px;

            max-height: 250px;

            overflow-y: auto;

            padding-right: 4px;
        }


        .filter-check {
            display: flex;
            align-items: center;

            gap: 10px;

            padding: 8px 7px;

            border-radius: 8px;

            color: #475569;

            font-size: 13px;

            cursor: pointer;

            transition: .15s ease;
        }


        .filter-check:hover {
            background: #f8fafc;
        }


        .filter-check input {
            width: 16px;
            height: 16px;

            accent-color: #102a43;

            cursor: pointer;
        }


        .filter-check span {
            flex: 1;
        }


        /* =====================================================
           DATE SELECT
        ====================================================== */

        .filter-date-select {
            width: 100%;
            height: 42px;

            padding: 0 12px;

            border: 1px solid #dbe3ec;

            border-radius: 9px;

            background: #fff;

            color: #374151;

            font-family: inherit;

            font-size: 13px;

            outline: none;

            cursor: pointer;
        }


        .filter-date-select:focus {
            border-color: #9bb8d4;

            box-shadow:
                0 0 0 3px rgba(16, 42, 67, .07);
        }


        /* =====================================================
           FILTER ACTION
        ====================================================== */

        .filter-actions {
            display: flex;

            justify-content: flex-end;

            gap: 8px;

            padding-top: 14px;

            border-top: 1px solid #edf0f2;
        }


        .filter-reset,
        .filter-apply {

            border: 0;

            border-radius: 9px;

            padding: 9px 15px;

            font-family: inherit;

            font-size: 12px;

            font-weight: 700;

            cursor: pointer;

            transition: .2s ease;
        }


        .filter-reset {
            background: #f1f5f9;
            color: #475569;
        }


        .filter-reset:hover {
            background: #e2e8f0;
        }


        .filter-apply {
            background: #102a43;
            color: #fff;
        }


        .filter-apply:hover {
            opacity: .9;
        }


        /* =====================================================
           ACTIVE FILTER INFO
        ====================================================== */

        .active-filter-info {
            display: none;

            margin-top: -10px;

            margin-bottom: 18px;

            font-size: 12px;

            color: #718096;
        }


        .active-filter-info.show {
            display: block;
        }


        .active-filter-info strong {
            color: #102a43;
        }


        /* =====================================================
           CARD GRID
        ====================================================== */

        .announcement-grid {
            display: grid;

            grid-template-columns:
                repeat(2, minmax(0, 1fr));

            gap: 24px;
        }


        .announcement-card {
            background: #fff;

            border: 1px solid #e5e7eb;

            border-radius: 16px;

            padding: 25px;

            box-shadow:
                0 8px 25px rgba(15, 23, 42, .05);

            transition: .2s ease;
        }


        .announcement-card:hover {
            transform: translateY(-3px);

            box-shadow:
                0 12px 30px rgba(15, 23, 42, .09);
        }


        /* =====================================================
           CARD TOP
        ====================================================== */

        .announcement-top {
            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 15px;

            margin-bottom: 18px;
        }


        .category {
            display: inline-flex;

            align-items: center;

            padding: 6px 12px;

            border-radius: 999px;

            background: #dcfce7;

            color: #00743f;

            font-size: 12px;

            font-weight: 700;
        }


        .date {
            font-size: 12px;

            color: #718096;

            white-space: nowrap;
        }


        /* =====================================================
           CARD CONTENT
        ====================================================== */

        .announcement-card h2 {
            font-size: 21px;

            font-weight: 800;

            color: #102a43;

            margin-bottom: 14px;

            line-height: 1.4;
        }


        .announcement-content {
            font-size: 14px;

            line-height: 1.8;

            color: #64748b;

            white-space: pre-line;
        }


        /* =====================================================
           CARD FOOTER
        ====================================================== */

        .announcement-footer {
            margin-top: 22px;

            padding-top: 15px;

            border-top: 1px solid #edf0f2;

            display: flex;

            justify-content: space-between;

            align-items: center;

            gap: 10px;

            font-size: 12px;

            color: #718096;
        }


        .source {
            color: #00743f;

            font-weight: 700;
        }


        /* =====================================================
           EMPTY
        ====================================================== */

        .empty {
            background: #fff;

            border: 1px solid #e5e7eb;

            border-radius: 16px;

            padding: 70px 30px;

            text-align: center;

            box-shadow:
                0 8px 25px rgba(15, 23, 42, .04);
        }


        .empty-icon {
            font-size: 45px;

            margin-bottom: 15px;
        }


        .empty h2 {
            font-size: 20px;

            color: #102a43;

            margin-bottom: 8px;
        }


        .empty p {
            font-size: 14px;

            color: #718096;
        }


        .no-result {
            display: none;
        }


        /* =====================================================
           KOMENTAR
        ====================================================== */

        .comment-section {
            margin-top: 20px;

            padding-top: 18px;

            border-top: 1px solid #edf1f5;
        }


        .comment-title {
            font-size: 15px;

            font-weight: 700;

            color: #12385b;

            margin-bottom: 14px;
        }


        .comment-list {
            display: flex;

            flex-direction: column;

            gap: 12px;

            margin-bottom: 16px;
        }


        .comment-item {
            padding: 12px 14px;

            background: #f8fafc;

            border: 1px solid #edf1f5;

            border-radius: 12px;
        }


        .comment-header {
            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 12px;

            margin-bottom: 6px;
        }


        .comment-name {
            font-size: 13px;

            font-weight: 700;

            color: #12385b;
        }


        .comment-date {
            font-size: 11px;

            color: #8aa0ba;

            white-space: nowrap;
        }


        .comment-text {
            margin: 0;

            color: #607894;

            font-size: 13px;

            line-height: 1.6;

            white-space: pre-line;

            word-break: break-word;
        }


        .comment-empty {
            color: #8aa0ba;

            font-size: 13px;

            margin: 0 0 14px;
        }


        .comment-form {
            display: flex;

            flex-direction: column;

            gap: 10px;
        }


        .comment-input {
            width: 100%;

            min-height: 90px;

            resize: vertical;

            padding: 12px 14px;

            border: 1px solid #dbe4ee;

            border-radius: 12px;

            background: #fff;

            color: #12385b;

            font-family: inherit;

            font-size: 13px;

            outline: none;

        }


        .comment-input:focus {
            border-color: #12385b;

            box-shadow:
                0 0 0 3px rgba(18, 56, 91, 0.08);
        }


        .comment-button {
            align-self: flex-end;

            border: 0;

            border-radius: 10px;

            padding: 10px 18px;

            background: #12385b;

            color: #fff;

            font-family: inherit;

            font-size: 12px;

            font-weight: 700;

            cursor: pointer;
        }


        .comment-button:hover {
            opacity: .92;
        }


        .comment-login-info {
            padding: 12px 14px;

            border-radius: 10px;

            background: #f8fafc;

            color: #7086a0;

            font-size: 12px;

            line-height: 1.5;
        }


        .comment-login-info a {
            color: #12385b;

            font-weight: 700;

            text-decoration: none;
        }


        /* =====================================================
           RESPONSIVE
        ====================================================== */

        @media (max-width: 800px) {

            .page {
                padding: 35px 20px 60px;
            }


            .tools {
                grid-template-columns: 1fr;
            }


            .announcement-grid {
                grid-template-columns: 1fr;
            }


            .page-header h1 {
                font-size: 27px;
            }


            .announcement-card {
                padding: 20px;
            }


            .filter-panel {
                right: 0;
            }

        }


        @media (max-width: 480px) {

            .announcement-top {
                align-items: flex-start;

                flex-direction: column;

                gap: 8px;
            }


            .announcement-footer {
                align-items: flex-start;

                flex-direction: column;
            }


            .filter-panel {
                position: fixed;

                top: 85px;

                left: 15px;

                right: 15px;

                width: auto;

                max-height:
                    calc(100vh - 105px);

                overflow-y: auto;
            }


            .comment-header {
                align-items: flex-start;

                flex-direction: column;

                gap: 3px;
            }


            .comment-date {
                white-space: normal;
            }


            .comment-button {
                width: 100%;
            }

        }

    </style>

</head>


<body>


    {{-- =====================================================
         NAVBAR
    ====================================================== --}}

    @include('layouts.navigation')


    {{-- =====================================================
         CONTENT
    ====================================================== --}}

    <main class="page">


        {{-- =================================================
             HEADER
        ================================================== --}}

        <div class="page-header">

            <h1>
                Informasi Desa
            </h1>

            <p>
                Informasi dan pengumuman terbaru
                dari Desa Sukamerindu.
            </p>

        </div>


        {{-- =================================================
             SEARCH + FILTER
        ================================================== --}}

        <div class="tools">


            {{-- SEARCH --}}

            <div class="search-box">

                <span class="search-icon">
                    🔎
                </span>

                <input
                    type="text"
                    id="searchInput"
                    placeholder="Cari informasi..."
                    autocomplete="off"
                >

            </div>


            {{-- FILTER --}}

            <div class="filter-wrapper">

                <button
                    type="button"
                    id="filterButton"
                    class="filter-button"
                >

                    ⚙

                    <span>
                        Filter
                    </span>

                    <span class="filter-arrow">
                        ▼
                    </span>

                </button>


                {{-- =========================================
                     FILTER PANEL
                ========================================== --}}

                <div
                    class="filter-panel"
                    id="filterPanel"
                >


                    <div class="filter-panel-title">
                        Filter Informasi
                    </div>


                    {{-- =====================================
                         KATEGORI
                    ====================================== --}}

                    <div class="filter-group">

                        <div class="filter-label">
                            Kategori
                        </div>


                        <div class="category-list">


                            <label class="filter-check">

                                <input
                                    type="checkbox"
                                    class="category-check"
                                    value="Pengumuman"
                                >

                                <span>
                                    Pengumuman
                                </span>

                            </label>


                            <label class="filter-check">

                                <input
                                    type="checkbox"
                                    class="category-check"
                                    value="Kegiatan Desa"
                                >

                                <span>
                                    Kegiatan Desa
                                </span>

                            </label>


                            <label class="filter-check">

                                <input
                                    type="checkbox"
                                    class="category-check"
                                    value="Pelayanan"
                                >

                                <span>
                                    Pelayanan
                                </span>

                            </label>


                            <label class="filter-check">

                                <input
                                    type="checkbox"
                                    class="category-check"
                                    value="Pembangunan"
                                >

                                <span>
                                    Pembangunan
                                </span>

                            </label>


                            <label class="filter-check">

                                <input
                                    type="checkbox"
                                    class="category-check"
                                    value="Kesehatan"
                                >

                                <span>
                                    Kesehatan
                                </span>

                            </label>


                            <label class="filter-check">

                                <input
                                    type="checkbox"
                                    class="category-check"
                                    value="Pendidikan"
                                >

                                <span>
                                    Pendidikan
                                </span>

                            </label>


                            <label class="filter-check">

                                <input
                                    type="checkbox"
                                    class="category-check"
                                    value="Kemasyarakatan"
                                >

                                <span>
                                    Kemasyarakatan
                                </span>

                            </label>


                        </div>

                    </div>


                    {{-- =====================================
                         TANGGAL
                    ====================================== --}}

                    <div class="filter-group">

                        <div class="filter-label">
                            Tanggal
                        </div>


                        <select
                            id="dateFilter"
                            class="filter-date-select"
                        >

                            <option value="all">
                                Semua
                            </option>

                            <option value="today">
                                Hari ini
                            </option>

                            <option value="yesterday">
                                Kemarin
                            </option>

                            <option value="week">
                                Minggu ini
                            </option>

                            <option value="last_week">
                                Minggu lalu
                            </option>

                            <option value="month">
                                Bulan ini
                            </option>

                            <option value="last_month">
                                Bulan lalu
                            </option>

                            <option value="year">
                                Tahun ini
                            </option>

                            <option value="last_year">
                                Tahun lalu
                            </option>

                        </select>

                    </div>


                    {{-- =====================================
                         ACTION
                    ====================================== --}}

                    <div class="filter-actions">

                        <button
                            type="button"
                            id="resetFilter"
                            class="filter-reset"
                        >
                            Reset
                        </button>


                        <button
                            type="button"
                            id="applyFilter"
                            class="filter-apply"
                        >
                            Terapkan
                        </button>

                    </div>


                </div>

            </div>

        </div>


        {{-- =================================================
             INFO FILTER AKTIF
        ================================================== --}}

        <div
            class="active-filter-info"
            id="activeFilterInfo"
        >

            Filter aktif:
            <strong id="activeFilterText"></strong>

        </div>


        {{-- =================================================
             DATA INFORMASI
        ================================================== --}}

        @if($informasi->count() > 0)


            <div class="announcement-grid">


                @foreach($informasi as $item)


                    <article
                        class="announcement-card"

                        data-category="{{ strtolower(trim($item->kategori)) }}"

                        data-search="{{ strtolower($item->kategori . ' ' . $item->judul . ' ' . $item->isi) }}"

                        data-date="{{ \Carbon\Carbon::parse($item->created_at)->format('Y-m-d') }}"
                    >


                        {{-- =================================
                             TOP
                        ================================== --}}

                        <div class="announcement-top">


                            <span class="category">

                                {{ $item->kategori }}

                            </span>


                            <span class="date">

                                {{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('d F Y') }}

                            </span>


                        </div>


                        {{-- =================================
                             JUDUL
                        ================================== --}}

                        <h2>

                            {{ $item->judul }}

                        </h2>


                        {{-- =================================
                             ISI
                        ================================== --}}

                        <div class="announcement-content">

                            {{ $item->isi }}

                        </div>


                        {{-- =================================
                             FOOTER
                        ================================== --}}

                        <div class="announcement-footer">


                            <span class="source">

                                📢 Informasi Desa

                            </span>


                            <span>

                                Dipublikasikan

                            </span>


                        </div>


                        {{-- =================================
                             KOMENTAR
                        ================================== --}}

                        <div class="comment-section">


                            <div class="comment-title">
                                💬 Komentar
                            </div>


                            @if(isset($item->komentar_list) && $item->komentar_list->count() > 0)


                                <div class="comment-list">


                                    @foreach($item->komentar_list as $komentar)


                                        <div class="comment-item">


                                            <div class="comment-header">


                                                <span class="comment-name">

                                                    {{ $komentar->nama_pengguna }}

                                                </span>


                                                <span class="comment-date">

                                                    {{ \Carbon\Carbon::parse($komentar->created_at)->translatedFormat('d F Y, H:i') }}

                                                </span>


                                            </div>


                                            <p class="comment-text">

                                                {{ $komentar->komentar }}

                                            </p>


                                        </div>


                                    @endforeach


                                </div>


                            @else


                                <p class="comment-empty">

                                    Belum ada komentar.

                                </p>


                            @endif


                            @auth


                                @if(in_array(auth()->user()->role, ['warga', 'kepala_desa']))


                                    <form
                                        action="{{ route('guest.informasi.komentar', $item->id) }}"
                                        method="POST"
                                        class="comment-form"
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

                                        Akun ini tidak memiliki akses
                                        untuk memberikan komentar.

                                    </div>


                                @endif


                            @else


                                <div class="comment-login-info">

                                    Silakan

                                    <a href="{{ route('login') }}">
                                        login
                                    </a>

                                    terlebih dahulu untuk memberikan komentar.

                                </div>


                            @endauth


                        </div>


                    </article>


                @endforeach


            </div>


        @else


            {{-- =============================================
                 KOSONG
            ============================================== --}}

            <div class="empty">


                <div class="empty-icon">
                    📢
                </div>


                <h2>
                    Belum ada informasi
                </h2>


                <p>
                    Belum ada informasi atau pengumuman
                    yang dipublikasikan oleh Desa Sukamerindu.
                </p>


            </div>


        @endif


        {{-- =================================================
             HASIL FILTER KOSONG
        ================================================== --}}

        <div
            class="empty no-result"
            id="noResult"
        >


            <div class="empty-icon">
                🔎
            </div>


            <h2>
                Informasi tidak ditemukan
            </h2>


            <p>
                Coba gunakan kata kunci, kategori,
                atau filter waktu yang lain.
            </p>


        </div>


    </main>



    {{-- =====================================================
         JAVASCRIPT
    ====================================================== --}}

    <script>

        document.addEventListener(
            'DOMContentLoaded',
            function () {


                /* =============================================
                   ELEMENT
                ============================================== */

                const searchInput =
                    document.getElementById(
                        'searchInput'
                    );


                const dateFilter =
                    document.getElementById(
                        'dateFilter'
                    );


                const filterButton =
                    document.getElementById(
                        'filterButton'
                    );


                const filterPanel =
                    document.getElementById(
                        'filterPanel'
                    );


                const applyFilter =
                    document.getElementById(
                        'applyFilter'
                    );


                const resetFilter =
                    document.getElementById(
                        'resetFilter'
                    );


                const categoryChecks =
                    Array.from(
                        document.querySelectorAll(
                            '.category-check'
                        )
                    );


                const cards =
                    Array.from(
                        document.querySelectorAll(
                            '.announcement-card'
                        )
                    );


                const noResult =
                    document.getElementById(
                        'noResult'
                    );


                const activeFilterInfo =
                    document.getElementById(
                        'activeFilterInfo'
                    );


                const activeFilterText =
                    document.getElementById(
                        'activeFilterText'
                    );


                let selectedCategories = [];



                /* =============================================
                   BUKA / TUTUP FILTER
                ============================================== */

                filterButton.addEventListener(
                    'click',
                    function (event) {

                        event.stopPropagation();


                        filterPanel.classList.toggle(
                            'show'
                        );


                        filterButton.classList.toggle(
                            'open'
                        );

                    }
                );



                /* =============================================
                   KLIK DI LUAR FILTER
                ============================================== */

                document.addEventListener(
                    'click',
                    function (event) {

                        const wrapper =
                            document.querySelector(
                                '.filter-wrapper'
                            );


                        if (
                            wrapper &&
                            !wrapper.contains(
                                event.target
                            )
                        ) {

                            filterPanel.classList.remove(
                                'show'
                            );


                            filterButton.classList.remove(
                                'open'
                            );

                        }

                    }
                );



                /* =============================================
                   TANGGAL
                ============================================== */

                function localDateOnly(date) {

                    return new Date(
                        date.getFullYear(),
                        date.getMonth(),
                        date.getDate()
                    );

                }



                function sameDay(a, b) {

                    return (
                        a.getTime() ===
                        b.getTime()
                    );

                }



                function startOfWeek(date) {

                    const d =
                        new Date(date);


                    const day =
                        d.getDay();


                    const diff =
                        day === 0
                            ? -6
                            : 1 - day;


                    d.setDate(
                        d.getDate() + diff
                    );


                    return localDateOnly(d);

                }



                function endOfWeek(date) {

                    const start =
                        startOfWeek(date);


                    const end =
                        new Date(start);


                    end.setDate(
                        end.getDate() + 6
                    );


                    return end;

                }



                function dateMatches(
                    dateString,
                    filter
                ) {


                    if (
                        filter === 'all'
                    ) {

                        return true;

                    }


                    const itemDate =
                        localDateOnly(
                            new Date(
                                dateString +
                                'T00:00:00'
                            )
                        );


                    const today =
                        localDateOnly(
                            new Date()
                        );



                    if (
                        filter === 'today'
                    ) {

                        return sameDay(
                            itemDate,
                            today
                        );

                    }



                    if (
                        filter === 'yesterday'
                    ) {

                        const yesterday =
                            new Date(today);


                        yesterday.setDate(
                            yesterday.getDate() - 1
                        );


                        return sameDay(
                            itemDate,
                            yesterday
                        );

                    }



                    if (
                        filter === 'week'
                    ) {

                        return (
                            itemDate >=
                                startOfWeek(today) &&

                            itemDate <=
                                endOfWeek(today)
                        );

                    }



                    if (
                        filter === 'last_week'
                    ) {

                        const thisStart =
                            startOfWeek(today);


                        const lastStart =
                            new Date(thisStart);


                        lastStart.setDate(
                            lastStart.getDate() - 7
                        );


                        const lastEnd =
                            new Date(lastStart);


                        lastEnd.setDate(
                            lastEnd.getDate() + 6
                        );


                        return (
                            itemDate >=
                                lastStart &&

                            itemDate <=
                                lastEnd
                        );

                    }



                    if (
                        filter === 'month'
                    ) {

                        return (
                            itemDate.getMonth() ===
                                today.getMonth() &&

                            itemDate.getFullYear() ===
                                today.getFullYear()
                        );

                    }



                    if (
                        filter === 'last_month'
                    ) {

                        const lastMonth =
                            new Date(
                                today.getFullYear(),
                                today.getMonth() - 1,
                                1
                            );


                        return (
                            itemDate.getMonth() ===
                                lastMonth.getMonth() &&

                            itemDate.getFullYear() ===
                                lastMonth.getFullYear()
                        );

                    }



                    if (
                        filter === 'year'
                    ) {

                        return (
                            itemDate.getFullYear() ===
                            today.getFullYear()
                        );

                    }



                    if (
                        filter === 'last_year'
                    ) {

                        return (
                            itemDate.getFullYear() ===
                            today.getFullYear() - 1
                        );

                    }



                    return true;

                }



                /* =============================================
                   APPLY FILTER
                ============================================== */

                function applyFilters() {


                    const keyword =
                        searchInput.value
                            .trim()
                            .toLowerCase();


                    const selectedDate =
                        dateFilter.value;


                    let visibleCount = 0;



                    cards.forEach(
                        function (card) {


                            const category =
                                (
                                    card.dataset.category ||
                                    ''
                                )
                                .trim()
                                .toLowerCase();


                            const searchable =
                                (
                                    card.dataset.search ||
                                    ''
                                )
                                .toLowerCase();


                            const date =
                                card.dataset.date ||
                                '';



                            /* =================================
                               CATEGORY MULTI SELECT
                            ================================== */

                            const categoryMatch =
                                selectedCategories.length === 0 ||
                                selectedCategories.some(
                                    function (selected) {

                                        return (
                                            selected
                                                .trim()
                                                .toLowerCase() ===
                                            category
                                        );

                                    }
                                );



                            /* =================================
                               SEARCH
                            ================================== */

                            const searchMatch =
                                keyword === '' ||
                                searchable.includes(
                                    keyword
                                );



                            /* =================================
                               DATE
                            ================================== */

                            const dateMatch =
                                dateMatches(
                                    date,
                                    selectedDate
                                );



                            /* =================================
                               FINAL
                            ================================== */

                            const show =
                                categoryMatch &&
                                searchMatch &&
                                dateMatch;


                            card.style.display =
                                show
                                    ? ''
                                    : 'none';


                            if (show) {

                                visibleCount++;

                            }

                        }
                    );



                    noResult.style.display =
                        visibleCount === 0
                            ? 'block'
                            : 'none';



                    updateFilterInfo();

                }



                /* =============================================
                   INFO FILTER AKTIF
                ============================================== */

                function updateFilterInfo() {


                    const info = [];


                    if (
                        selectedCategories.length > 0
                    ) {

                        info.push(
                            'Kategori: ' +
                            selectedCategories.join(
                                ', '
                            )
                        );

                    }


                    if (
                        dateFilter.value !== 'all'
                    ) {

                        const dateText =
                            dateFilter
                                .options[
                                    dateFilter
                                        .selectedIndex
                                ]
                                .textContent
                                .trim();


                        info.push(
                            'Tanggal: ' +
                            dateText
                        );

                    }


                    if (info.length > 0) {

                        activeFilterText.textContent =
                            info.join(' • ');


                        activeFilterInfo.classList.add(
                            'show'
                        );

                    } else {

                        activeFilterInfo.classList.remove(
                            'show'
                        );

                    }

                }



                /* =============================================
                   TERAPKAN
                ============================================== */

                applyFilter.addEventListener(
                    'click',
                    function () {


                        selectedCategories =
                            categoryChecks
                                .filter(
                                    function (checkbox) {

                                        return checkbox.checked;

                                    }
                                )
                                .map(
                                    function (checkbox) {

                                        return checkbox.value;

                                    }
                                );


                        applyFilters();


                        filterPanel.classList.remove(
                            'show'
                        );


                        filterButton.classList.remove(
                            'open'
                        );


                        if (
                            selectedCategories.length > 0 ||
                            dateFilter.value !== 'all'
                        ) {

                            filterButton.classList.add(
                                'active'
                            );

                        } else {

                            filterButton.classList.remove(
                                'active'
                            );

                        }

                    }
                );



                /* =============================================
                   RESET
                ============================================== */

                resetFilter.addEventListener(
                    'click',
                    function () {


                        categoryChecks.forEach(
                            function (checkbox) {

                                checkbox.checked =
                                    false;

                            }
                        );


                        selectedCategories = [];


                        dateFilter.value =
                            'all';


                        searchInput.value =
                            '';


                        applyFilters();


                        filterButton.classList.remove(
                            'active'
                        );

                    }
                );



                /* =============================================
                   SEARCH LANGSUNG
                ============================================== */

                searchInput.addEventListener(
                    'input',
                    applyFilters
                );



                /* =============================================
                   FILTER PERTAMA KALI
                ============================================== */

                applyFilters();


            }
        );

    </script>


</body>

</html>
