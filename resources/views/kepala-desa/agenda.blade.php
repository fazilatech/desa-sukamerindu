@extends('layouts.kepala-desa')

@section('title', 'Agenda Desa')

@section('topbar-title', 'Agenda Desa')

@push('styles')
<style>
/* =====================================================
           RESET
        ====================================================== */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;

            font-family:
                "Segoe UI",
                Arial,
                sans-serif;
        }


        /* =====================================================
           HTML & BODY
        ====================================================== */

        html,
        body {
            width: 100%;
            min-height: 100%;
        }


        body {
            min-height: 100vh;

            background: #f3f6f9;

            color: #1f2937;
        }


        a {
            text-decoration: none;
            color: inherit;
        }


        /* =====================================================
           CONTENT
           SAMA DENGAN DASHBOARD WARGA
        ====================================================== */

        .page-content {

            min-height:
                calc(100vh - 76px);

            background: #f3f6f9;

            padding:
                50px 45px;
        }


        /* =====================================================
           CONTENT CONTAINER
        ====================================================== */

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

            line-height: 1.2;
        }


        .page-header p {

            color: #66809e;

            font-size: 14px;

            line-height: 1.5;
        }


        /* =====================================================
           CARD
        ====================================================== */

        .card {

            width: 100%;

            background: #ffffff;

            border:
                1px solid #e5e7eb;

            border-radius: 16px;

            padding: 28px 30px;

            box-shadow:
                0 4px 15px
                rgba(0, 0, 0, .04);

            margin-bottom: 20px;
        }


        /* =====================================================
           CRUD AGENDA
        ====================================================== */

        .page-header-with-action {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 20px;
        }

        .btn-agenda-add {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 42px;
            padding: 0 17px;
            border-radius: 9px;
            background: #087f3f;
            color: #ffffff;
            font-size: 13px;
            font-weight: 700;
            text-decoration: none;
            white-space: nowrap;
        }

        .btn-agenda-add:hover {
            background: #066b35;
        }

        .agenda-actions {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-top: 14px;
            padding-top: 12px;
            border-top: 1px solid #edf0f3;
        }

        .agenda-action-edit,
        .agenda-action-delete {
            border: 0;
            border-radius: 8px;
            min-height: 34px;
            padding: 0 12px;
            font-size: 12px;
            font-weight: 700;
            cursor: pointer;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .agenda-action-edit {
            background: #e8f4ff;
            color: #1769aa;
        }

        .agenda-action-delete {
            background: #ffe9e9;
            color: #b42318;
        }

        @media (max-width: 600px) {
            .page-header-with-action {
                flex-direction: column;
            }

            .btn-agenda-add {
                width: 100%;
            }

            .agenda-actions {
                flex-wrap: wrap;
            }
        }


        /* =====================================================
           CALENDAR HEADER
        ====================================================== */
        .calendar-header {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 25px;
        }

        .calendar-title-wrapper {
            position: relative;
        }

        .calendar-title {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            border: 0;
            background: transparent;
            color: #0f2f52;
            font-size: 21px;
            font-weight: 800;
            cursor: pointer;
            padding: 6px 10px;
            border-radius: 9px;
            transition: background .2s ease, color .2s ease;
        }

        .calendar-title:hover,
        .calendar-title.active {
            background: #f3f6f9;
        }

        .calendar-title-arrow {
            font-size: 14px;
            color: #0f2f52;
            transition: transform .2s ease;
        }

        .calendar-title.active .calendar-title-arrow {
            transform: rotate(180deg);
        }

        /* =====================================================
           MONTH / YEAR PICKER
        ====================================================== */

        .month-picker {
            position: absolute;
            top: calc(100% + 10px);
            left: 50%;
            z-index: 50;
            width: 290px;
            padding: 16px;
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            box-shadow: 0 12px 30px rgba(15, 47, 82, .12);
            transform: translateX(-50%) translateY(-5px);
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
            transition: opacity .18s ease, transform .18s ease, visibility .18s ease;
        }

        .month-picker.show {
            opacity: 1;
            visibility: visible;
            pointer-events: auto;
            transform: translateX(-50%) translateY(0);
        }

        .month-picker::before {
            content: "";
            position: absolute;
            top: -7px;
            left: 50%;
            width: 13px;
            height: 13px;
            background: #ffffff;
            border-left: 1px solid #e5e7eb;
            border-top: 1px solid #e5e7eb;
            transform: translateX(-50%) rotate(45deg);
        }

        .picker-year {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 13px;
        }

        .picker-year-button {
            width: 34px;
            height: 34px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            background: #f8fafc;
            color: #0f2f52;
            font-size: 18px;
            font-weight: 700;
            cursor: pointer;
            transition: background .2s ease, transform .2s ease;
        }

        .picker-year-button:hover {
            background: #eef4f8;
            transform: translateY(-1px);
        }

        .picker-year-value {
            color: #0f2f52;
            font-size: 18px;
            font-weight: 800;
        }

        .month-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 7px;
        }

        .month-button {
            min-height: 38px;
            border: 0;
            border-radius: 8px;
            background: transparent;
            color: #374151;
            font-size: 13px;
            font-weight: 600;
            cursor: pointer;
            transition: background .2s ease, color .2s ease;
        }

        .month-button:hover {
            background: #f0f9ff;
            color: #12395B;
        }

        .month-button.selected {
            background: #2f80bd;
            color: #ffffff;
            font-weight: 700;
        }

        .calendar-nav {
            position: absolute;

            top: 50%;

            width: 40px;

            height: 40px;

            display: flex;

            align-items: center;

            justify-content: center;

            border: 0;

            border-radius: 9px;

            background: #f3f4f6;

            color: #0f2f52;

            font-size: 20px;

            font-weight: 700;

            transform: translateY(-50%);

            transition:
                background .2s ease,
                transform .2s ease;
        }

        .calendar-nav:first-child {
            left: 0;
        }

        .calendar-nav:last-child {
            right: 0;
        }

        .calendar-nav:hover {
            background: #e5e7eb;

            transform: translateY(-50%) translateY(-1px);
        }
/* =====================================================
           CALENDAR
        ====================================================== */

        .calendar-weekdays {

            display: grid;

            grid-template-columns:
                repeat(7, minmax(0, 1fr));

            border-top:
                1px solid #e5e7eb;

            border-left:
                1px solid #e5e7eb;
        }


        .weekday {

            min-height: 45px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-right:
                1px solid #e5e7eb;

            border-bottom:
                1px solid #e5e7eb;

            color: #0f2f52;

            font-size: 13px;

            font-weight: 700;

            background: #f8fafc;
        }


        .calendar-grid {

            display: grid;

            grid-template-columns:
                repeat(7, minmax(0, 1fr));

            border-left:
                1px solid #e5e7eb;

            border-top:
                1px solid #e5e7eb;
        }


        .calendar-day {

            min-height: 115px;

            padding: 10px;

            background: #ffffff;

            border-right:
                1px solid #e5e7eb;

            border-bottom:
                1px solid #e5e7eb;
        }


        .calendar-day.today {

            background: #f0f9ff;
        }


        .date-number {

            width: 32px;

            height: 32px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 50%;

            color: #374151;

            font-size: 13px;

            font-weight: 700;

            margin-bottom: 7px;
        }


        .date-number.today-number {

            background: #12395B;

            color: #ffffff;
        }


        /* =====================================================
           AGENDA DALAM KALENDER
        ====================================================== */

        .agenda-item {

            width: 100%;

            padding: 7px 8px;

            margin-bottom: 5px;

            background: #f0fdf4;

            border:
                1px solid #dcfce7;

            border-radius: 7px;
        }


        .agenda-item-title {

            color: #15803d;

            font-size: 11px;

            font-weight: 700;

            line-height: 1.3;
        }


        .agenda-item-time {

            color: #6b7280;

            font-size: 10px;

            margin-top: 3px;
        }


        /* =====================================================
           DAFTAR AGENDA
        ====================================================== */

        .section-title {

            color: #0f2f52;

            font-size: 21px;

            font-weight: 800;

            margin-bottom: 20px;
        }


        .agenda-toolbar {

            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 12px;

            margin-bottom: 20px;
        }


        .agenda-search {

            position: relative;

            flex: 1;

            min-width: 0;
        }


        .agenda-search-icon {

            position: absolute;

            left: 14px;

            top: 50%;

            transform: translateY(-50%);

            color: #66809e;

            font-size: 16px;

            pointer-events: none;
        }


        .agenda-search input,
        .agenda-filter select {

            width: 100%;

            height: 44px;

            border: 1px solid #dfe5eb;

            border-radius: 10px;

            background: #ffffff;

            color: #1f2937;

            font-size: 13px;

            outline: none;

            transition:
                border-color .2s ease,
                box-shadow .2s ease;
        }


        .agenda-search input {

            padding: 0 14px 0 40px;
        }


        .agenda-filter {

            width: 190px;

            flex-shrink: 0;
        }


        .agenda-filter select {

            padding: 0 12px;

            cursor: pointer;
        }


        .agenda-search input:focus,
        .agenda-filter select:focus {

            border-color: #2f80bd;

            box-shadow:
                0 0 0 3px
                rgba(47, 128, 189, .10);
        }


        .agenda-list {

            display: flex;

            flex-direction: column;

            gap: 22px;
        }


        .agenda-day-group {

            display: flex;

            flex-direction: column;

            gap: 10px;
        }


        .agenda-day-header {

            display: flex;

            align-items: center;

            gap: 10px;

            padding-bottom: 8px;

            border-bottom: 1px solid #edf0f3;
        }


        .agenda-day-number {

            min-width: 44px;

            height: 44px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 10px;

            background: #eef7fc;

            color: #12395B;

            font-size: 19px;

            font-weight: 800;
        }


        .agenda-day-name {

            color: #12395B;

            font-size: 15px;

            font-weight: 800;

            line-height: 1.3;
        }


        .agenda-day-full-date {

            color: #66809e;

            font-size: 12px;

            margin-top: 2px;
        }


        .agenda-list-item {

            width: 100%;

            padding: 17px 20px;

            border:
                1px solid #e5e7eb;

            border-radius: 12px;

            background: #ffffff;

            transition:
                border-color .2s ease,
                box-shadow .2s ease;
        }


        .agenda-list-item:hover {

            border-color: #d6e1e9;

            box-shadow:
                0 4px 14px
                rgba(15, 47, 82, .05);
        }


        .agenda-list-item[hidden],
        .agenda-day-group[hidden] {

            display: none;
        }


        .agenda-search-empty {

            display: none;

            text-align: center;

            padding: 35px 20px;

            color: #66809e;
        }


        .agenda-search-empty.show {

            display: block;
        }


        .agenda-search-empty-icon {

            font-size: 34px;

            margin-bottom: 8px;
        }


        .agenda-search-empty h3 {

            color: #12395B;

            font-size: 16px;

            font-weight: 700;

            margin-bottom: 4px;
        }


        .agenda-search-empty p {

            font-size: 13px;
        }




        .agenda-list-item {

            width: 100%;

            padding: 18px 20px;

            border:
                1px solid #e5e7eb;

            border-radius: 12px;

            background: #ffffff;
        }


        .agenda-list-content {

            display: flex;

            align-items: flex-start;

            gap: 18px;
        }


        .agenda-date {

            flex-shrink: 0;

            width: 58px;

            text-align: center;
        }


        .agenda-date-month {

            color: #66809e;

            font-size: 12px;

            font-weight: 600;

            text-transform: uppercase;
        }


        .agenda-date-number {

            color: #0f2f52;

            font-size: 25px;

            font-weight: 800;

            line-height: 1.2;

            margin-top: 2px;
        }


        .agenda-info {

            flex: 1;
        }


        .agenda-info h3 {

            color: #12395B;

            font-size: 16px;

            font-weight: 700;

            margin-bottom: 7px;
        }


        .agenda-info p {

            color: #66809e;

            font-size: 13px;

            line-height: 1.5;

            margin-bottom: 3px;
        }


        .agenda-empty {

            text-align: center;

            padding: 45px 20px;
        }


        .agenda-empty-icon {

            font-size: 40px;

            margin-bottom: 12px;
        }


        .agenda-empty h3 {

            color: #12395B;

            font-size: 17px;

            font-weight: 700;

            margin-bottom: 5px;
        }


        .agenda-empty p {

            color: #66809e;

            font-size: 13px;
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


            .calendar-day {

                min-height: 100px;

                padding: 7px;
            }

        }


        @media (max-width: 600px) {

            .calendar-title {
                font-size: 18px;
                padding: 5px 8px;
            }

            .calendar-nav {
                width: 36px;
                height: 36px;
                font-size: 18px;
            }

            .month-picker {
                width: min(290px, calc(100vw - 50px));
                padding: 14px;
            }

            .picker-year-value {
                font-size: 17px;
            }

            .month-button {
                min-height: 36px;
                font-size: 12px;
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


            .card {

                padding: 20px 15px;
            }


            .calendar-day {

                min-height: 85px;

                padding: 5px;
            }


            .weekday {

                font-size: 11px;
            }


            .date-number {

                width: 27px;

                height: 27px;

                font-size: 11px;
            }


            .agenda-item {

                padding: 5px;
            }


            .agenda-item-title {

                font-size: 9px;
            }


            .agenda-item-time {

                font-size: 8px;
            }


            .agenda-toolbar {

                flex-direction: column;

                align-items: stretch;
            }


            .agenda-filter {

                width: 100%;
            }


            .agenda-day-header {

                align-items: flex-start;
            }


            .agenda-day-number {

                min-width: 40px;

                height: 40px;

                font-size: 17px;
            }


            .agenda-day-name {

                font-size: 14px;
            }


            .agenda-list-content {

                gap: 12px;
            }


            .agenda-date {

                width: 45px;
            }


            .agenda-date-number {

                font-size: 21px;
            }

        }
</style>
@endpush

@section('content')

    @php
        $agendaRoute = 'kepala-desa.agenda';
    @endphp

    <main class="page-content">

        <div class="content-container">

<div class="content-container">


            {{-- =================================================
                 PAGE HEADER
            ================================================== --}}

            <div class="page-header page-header-with-action">

                <div>

                    <h1>
                        Agenda Desa
                    </h1>

                    <p>
                        Lihat jadwal kegiatan dan agenda Desa Sukamerindu.
                    </p>

                </div>

                <a
                    href="{{ route('kepala-desa.agenda.tambah') }}"
                    class="btn-agenda-add"
                >
                    + Tambah Agenda
                </a>

            </div>


            {{-- =================================================
                 KALENDER
            ================================================== --}}

            <div class="card">


                @php

                    $prevMonth =
                        $tanggalAwal->copy()->subMonth();

                    $nextMonth =
                        $tanggalAwal->copy()->addMonth();

                @endphp
                 {{-- HEADER KALENDER --}}

                 <div class="calendar-header">

                    <a
                        href="{{ route($agendaRoute, [
                            'bulan' => $prevMonth->month,
                            'tahun' => $prevMonth->year
                        ]) }}"
                        class="calendar-nav"
                        aria-label="Bulan sebelumnya"
                    >
                        ←
                    </a>

                    <div class="calendar-title-wrapper">

                        <button
                            type="button"
                            class="calendar-title"
                            id="calendarTitleButton"
                            aria-expanded="false"
                            aria-controls="monthPicker"
                        >
                            {{ $tanggalAwal->translatedFormat('F Y') }}
                            <span class="calendar-title-arrow">⌄</span>
                        </button>

                        <div class="month-picker" id="monthPicker">

                            <div class="picker-year">

                                <button
                                    type="button"
                                    class="picker-year-button"
                                    id="previousYear"
                                    aria-label="Tahun sebelumnya"
                                >‹</button>

                                <div class="picker-year-value" id="pickerYear">
                                    {{ $tahun }}
                                </div>

                                <button
                                    type="button"
                                    class="picker-year-button"
                                    id="nextYear"
                                    aria-label="Tahun berikutnya"
                                >›</button>

                            </div>

                            <div class="month-grid" id="monthGrid">

                                @php
                                    $namaBulan = [
                                        1 => 'Jan',
                                        2 => 'Feb',
                                        3 => 'Mar',
                                        4 => 'Apr',
                                        5 => 'May',
                                        6 => 'Jun',
                                        7 => 'Jul',
                                        8 => 'Aug',
                                        9 => 'Sep',
                                        10 => 'Oct',
                                        11 => 'Nov',
                                        12 => 'Dec',
                                    ];
                                @endphp

                                @foreach ($namaBulan as $nomorBulan => $nama)
                                    <button
                                        type="button"
                                        class="month-button {{ $nomorBulan == $bulan ? 'selected' : '' }}"
                                        data-month="{{ $nomorBulan }}"
                                    >
                                        {{ $nama }}
                                    </button>
                                @endforeach

                            </div>

                        </div>

                    </div>

                    <a
                        href="{{ route($agendaRoute, [
                            'bulan' => $nextMonth->month,
                            'tahun' => $nextMonth->year
                        ]) }}"
                        class="calendar-nav"
                        aria-label="Bulan berikutnya"
                    >
                        →
                    </a>

                 </div>

                 {{-- NAMA HARI --}}

                <div class="calendar-weekdays">

                    @foreach (
                        ['Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab', 'Min']
                        as $hari
                    )

                        <div class="weekday">

                            {{ $hari }}

                        </div>

                    @endforeach

                </div>


                {{-- KALENDER --}}

                @php

                    // Senin = 0
                    // Minggu = 6

                    $hariPertama =
                        $tanggalAwal->dayOfWeekIso - 1;

                    $jumlahHari =
                        $tanggalAkhir->day;

                @endphp


                <div class="calendar-grid">


                    {{-- KOTAK KOSONG SEBELUM TANGGAL 1 --}}

                    @for (
                        $i = 0;
                        $i < $hariPertama;
                        $i++
                    )

                        <div class="calendar-day"></div>

                    @endfor


                    {{-- TANGGAL --}}

                    @for (
                        $tanggal = 1;
                        $tanggal <= $jumlahHari;
                        $tanggal++
                    )


                        @php

                            $tanggalSekarang =
                                Carbon\Carbon::create(
                                    $tahun,
                                    $bulan,
                                    $tanggal
                                )->toDateString();


                            $agendaHariIni =
                                $agenda->where(
                                    'tanggal',
                                    $tanggalSekarang
                                );


                            $hariIni =
                                now()->toDateString()
                                === $tanggalSekarang;

                        @endphp


                        <div
                            class="calendar-day
                                {{ $hariIni ? 'today' : '' }}"
                        >


                            {{-- NOMOR TANGGAL --}}

                            <div
                                class="date-number
                                    {{ $hariIni
                                        ? 'today-number'
                                        : ''
                                    }}"
                            >

                                {{ $tanggal }}

                            </div>


                            {{-- AGENDA --}}

                            @foreach (
                                $agendaHariIni
                                as $item
                            )

                                <div class="agenda-item">


                                    <div
                                        class="agenda-item-title"
                                    >

                                        {{ $item->judul }}

                                    </div>


                                    @if ($item->waktu)

                                        <div
                                            class="agenda-item-time"
                                        >

                                            🕐

                                            {{
                                                Carbon\Carbon::parse(
                                                    $item->waktu
                                                )->format('H:i')
                                            }}

                                            WIB

                                        </div>

                                    @endif


                                </div>

                            @endforeach


                        </div>


                    @endfor


                </div>


            </div>


            {{-- =================================================
                 DAFTAR AGENDA
            ================================================== --}}

            <div class="card">

                <div class="section-title">
                    Daftar Agenda
                </div>


                {{-- SEARCH + FILTER SELALU DITAMPILKAN --}}

                <div class="agenda-toolbar">

                    <div class="agenda-search">

                        <span class="agenda-search-icon">
                            🔎
                        </span>

                        <input
                            type="search"
                            id="agendaSearch"
                            placeholder="Cari agenda..."
                            autocomplete="off"
                            aria-label="Cari agenda"
                        >

                    </div>


                    <div class="agenda-filter">

                        <select
                            id="agendaFilter"
                            aria-label="Filter agenda"
                        >

                            <option value="all">
                                Semua agenda
                            </option>

                            <option value="today">
                                Hari ini
                            </option>

                            <option value="next7">
                                7 hari ke depan
                            </option>

                            <option value="upcoming">
                                Agenda mendatang
                            </option>

                        </select>

                    </div>

                </div>


                @if ($agenda->count())

                    @php
                        /*
                         * Kelompokkan agenda berdasarkan tanggal,
                         * kemudian urutkan berdasarkan tanggal dan waktu.
                         */
                        $agendaHarian = $agenda
                            ->sortBy(function ($item) {
                                return $item->tanggal . ' ' . ($item->waktu ?? '00:00:00');
                            })
                            ->groupBy(function ($item) {
                                return Carbon\Carbon::parse($item->tanggal)->toDateString();
                            });
                    @endphp


                    {{-- AGENDA HARIAN --}}

                    <div
                        class="agenda-list"
                        id="agendaList"
                    >

                        @foreach ($agendaHarian as $tanggalAgenda => $agendaHari)

                            <div
                                class="agenda-day-group"
                                data-date="{{ $tanggalAgenda }}"
                            >

                                {{-- HEADER HARI --}}

                                <div class="agenda-day-header">

                                    <div class="agenda-day-number">
                                        {{ Carbon\Carbon::parse($tanggalAgenda)->format('d') }}
                                    </div>


                                    <div>

                                        <div class="agenda-day-name">
                                            {{ Carbon\Carbon::parse($tanggalAgenda)->translatedFormat('l') }}
                                        </div>


                                        <div class="agenda-day-full-date">
                                            {{ Carbon\Carbon::parse($tanggalAgenda)->translatedFormat('d F Y') }}
                                        </div>

                                    </div>

                                </div>


                                {{-- AGENDA PADA HARI TERSEBUT --}}

                                @foreach ($agendaHari as $item)

                                    @php
                                        $teksPencarian = strtolower(
                                            ($item->judul ?? '') . ' ' .
                                            ($item->lokasi ?? '') . ' ' .
                                            ($item->keterangan ?? '')
                                        );
                                    @endphp


                                    <div
                                        class="agenda-list-item agenda-search-item"
                                        data-search="{{ e($teksPencarian) }}"
                                        data-date="{{ $tanggalAgenda }}"
                                    >

                                        <div class="agenda-list-content">

                                            <div class="agenda-info">

                                                <h3>
                                                    {{ $item->judul }}
                                                </h3>


                                                @if ($item->waktu)

                                                    <p>
                                                        🕐
                                                        {{ Carbon\Carbon::parse($item->waktu)->format('H:i') }}
                                                        WIB
                                                    </p>

                                                @endif


                                                @if ($item->lokasi)

                                                    <p>
                                                        📍 {{ $item->lokasi }}
                                                    </p>

                                                @endif


                                                @if ($item->keterangan)

                                                    <p>
                                                        {{ $item->keterangan }}
                                                    </p>

                                                @endif

                                            </div>

                                        </div>

                                        <div class="agenda-actions">

                                            <a
                                                href="{{ route('kepala-desa.agenda.edit', $item->id) }}"
                                                class="agenda-action-edit"
                                            >
                                                ✏️ Edit
                                            </a>

                                            <form
                                                action="{{ route('kepala-desa.agenda.destroy', $item->id) }}"
                                                method="POST"
                                                onsubmit="return confirm('Yakin ingin menghapus agenda ini?');"
                                            >

                                                @csrf
                                                @method('DELETE')

                                                <button
                                                    type="submit"
                                                    class="agenda-action-delete"
                                                >
                                                    🗑️ Hapus
                                                </button>

                                            </form>

                                        </div>

                                    </div>

                                @endforeach

                            </div>

                        @endforeach

                    </div>


                    {{-- HASIL SEARCH / FILTER KOSONG --}}

                    <div
                        class="agenda-search-empty"
                        id="agendaSearchEmpty"
                    >

                        <div class="agenda-search-empty-icon">
                            🔎
                        </div>

                        <h3>
                            Agenda tidak ditemukan
                        </h3>

                        <p>
                            Coba gunakan kata kunci atau filter tanggal yang lain.
                        </p>

                    </div>


                @else

                    {{-- TIDAK ADA AGENDA PADA BULAN YANG DIPILIH --}}

                    <div
                        class="agenda-empty"
                        id="agendaNoData"
                    >

                        <div class="agenda-empty-icon">
                            📅
                        </div>

                        <h3>
                            Belum Ada Agenda
                        </h3>

                        <p>
                            Belum ada agenda desa pada bulan ini.
                        </p>

                    </div>

                @endif

            </div>


            </div>


            </div>


        </div>

        </div>

    </main>

@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {

        const titleButton = document.getElementById('calendarTitleButton');
        const monthPicker = document.getElementById('monthPicker');
        const pickerYear = document.getElementById('pickerYear');
        const previousYear = document.getElementById('previousYear');
        const nextYear = document.getElementById('nextYear');
        const monthButtons = document.querySelectorAll('.month-button');

        let selectedYear = {{ $tahun }};
        const agendaUrl = @json(route($agendaRoute));

        if (
            titleButton &&
            monthPicker &&
            pickerYear &&
            previousYear &&
            nextYear
        ) {

            titleButton.addEventListener('click', function (event) {

                event.stopPropagation();

                const isOpen = monthPicker.classList.toggle('show');

                titleButton.classList.toggle('active', isOpen);

                titleButton.setAttribute(
                    'aria-expanded',
                    isOpen ? 'true' : 'false'
                );

            });


            document.addEventListener('click', function (event) {

                if (
                    !monthPicker.contains(event.target) &&
                    !titleButton.contains(event.target)
                ) {

                    monthPicker.classList.remove('show');

                    titleButton.classList.remove('active');

                    titleButton.setAttribute(
                        'aria-expanded',
                        'false'
                    );

                }

            });


            previousYear.addEventListener('click', function () {

                selectedYear--;

                pickerYear.textContent = selectedYear;

            });


            nextYear.addEventListener('click', function () {

                selectedYear++;

                pickerYear.textContent = selectedYear;

            });


            monthButtons.forEach(function (button) {

                button.addEventListener('click', function () {

                    const month = this.dataset.month;

                    window.location.href =
                        agendaUrl +
                        '?bulan=' + month +
                        '&tahun=' + selectedYear;

                });

            });

        }

    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {

        const searchInput =
            document.getElementById('agendaSearch');

        const filterSelect =
            document.getElementById('agendaFilter');

        const emptyMessage =
            document.getElementById('agendaSearchEmpty');

        const dayGroups =
            document.querySelectorAll('.agenda-day-group');


        if (!searchInput || !filterSelect) {
            return;
        }


        function normalize(text) {

            return (text || '')
                .toLowerCase()
                .trim();

        }


        function applyAgendaFilter() {

            const keyword =
                normalize(searchInput.value);

            const selectedFilter =
                filterSelect.value;

            let visibleItems = 0;


            dayGroups.forEach(function (group) {

                const items =
                    group.querySelectorAll(
                        '.agenda-list-item'
                    );

                let visibleInGroup = 0;


                items.forEach(function (item) {

                    const text =
                        normalize(item.textContent);

                    const matchesSearch =
                        !keyword ||
                        text.includes(keyword);


                    const matchesFilter =
                        selectedFilter === 'semua' ||
                        item.dataset.date === selectedFilter;


                    const visible =
                        matchesSearch &&
                        matchesFilter;


                    item.hidden = !visible;


                    if (visible) {
                        visibleInGroup++;
                        visibleItems++;
                    }

                });


                group.hidden =
                    visibleInGroup === 0;

            });


            emptyMessage.classList.toggle(
                'show',
                visibleItems === 0
            );

        }


        searchInput.addEventListener(
            'input',
            applyAgendaFilter
        );

        filterSelect.addEventListener(
            'change',
            applyAgendaFilter
        );

    });
</script>
@endpush
