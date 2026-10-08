<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Agenda Desa - Sekretaris Desa
    </title>


    <style>

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }


        body {
            font-family: Arial, sans-serif;
            background: #f4f7fb;
            color: #173f67;
        }


        /* =====================================================
           LAYOUT
        ===================================================== */

        .layout {
            display: flex;
            min-height: 100vh;
        }


        /* =====================================================
           SIDEBAR SEKDES
           DIBUAT SEPERTI SIDEBAR KEPALA DESA
        ===================================================== */

        .sidebar {
            width: 255px;
            background: #08733a;
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;
            padding: 30px 14px;
            color: #ffffff;
        }


        /* =====================================================
           BRAND
        ===================================================== */

        .brand {
            padding: 0 10px 30px;
            text-align: center;
            border-bottom: 1px solid rgba(255,255,255,0.25);
            margin-bottom: 22px;
        }


        .brand-logo {
            width: 90px;
            height: 90px;
            object-fit: contain;
            display: block;
            margin: 0 auto 15px;
        }


        .brand h2 {
            font-size: 20px;
            font-weight: 800;
            color: #ffffff;
            line-height: 1.3;
        }


        .brand p {
            margin-top: 8px;
            font-size: 13px;
            color: #ffffff;
        }


        /* =====================================================
           MENU SIDEBAR
        ===================================================== */

        .menu {
            display: flex;
            flex-direction: column;
            gap: 7px;
        }


        .menu a {
            text-decoration: none;
            color: #ffffff;
            padding: 14px 18px;
            border-radius: 9px;
            font-size: 14px;
            font-weight: 600;

            display: flex;
            align-items: center;

            gap: 12px;

            transition: 0.2s;
        }


        .menu a:hover {
            background: rgba(255,255,255,0.12);
            color: #ffffff;
        }


        .menu a.active {
            background: rgba(255,255,255,0.16);
            color: #ffffff;

            border: 1px solid rgba(255,255,255,0.45);
        }


        .menu-icon {
            width: 20px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }


        /* =====================================================
           DROPDOWN PERIHAL
        ===================================================== */

        .menu-dropdown {
            position: relative;
        }


        .menu-dropdown-button {
            width: 100%;
            border: none;
            background: transparent;
            color: #ffffff;
            padding: 14px 18px;
            border-radius: 9px;
            font-family: Arial, sans-serif;
            font-size: 14px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 12px;
            cursor: pointer;
            text-align: left;
            transition: 0.2s;
        }


        .menu-dropdown-button:hover {
            background: rgba(255,255,255,0.12);
            color: #ffffff;
        }


        .menu-dropdown-button.active {
            background: rgba(255,255,255,0.16);
            color: #ffffff;
            border: 1px solid rgba(255,255,255,0.45);
        }


        .dropdown-arrow {
            margin-left: auto;
            font-size: 10px;
            transition: transform 0.2s ease;
        }


        .menu-dropdown.open .dropdown-arrow {
            transform: rotate(180deg);
        }


        .menu-dropdown-content {
            display: none;
            margin: 2px 0 4px;
            padding: 7px;
            background: #ffffff;
            border-radius: 9px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.12);
        }


        .menu-dropdown.open .menu-dropdown-content {
            display: block;
        }


        .menu-dropdown-content a {
            display: flex;
            align-items: center;
            gap: 9px;
            width: 100%;
            padding: 10px 11px;
            border-radius: 7px;
            color: #173f67;
            text-decoration: none;
            font-size: 13px;
            font-weight: 600;
            transition: 0.2s;
        }


        .menu-dropdown-content a:hover {
            background: #edf8f2;
            color: #08733a;
        }


        /* =====================================================
           MAIN
        ===================================================== */

        .main {
            margin-left: 255px;
            width: calc(100% - 255px);
        }


        /* =====================================================
           TOPBAR
        ===================================================== */

        .topbar {
            height: 75px;
            background: #ffffff;
            border-bottom: 1px solid #e5e7eb;

            display: flex;
            align-items: center;
            justify-content: space-between;

            padding: 0 35px;
        }


        .page-title {
            font-size: 20px;
            font-weight: 800;
            color: #173f67;
        }


        /* =====================================================
           PROFILE
        ===================================================== */

        .profile-dropdown {
            position: relative;
        }


        .profile-dropdown summary {
            list-style: none;
            cursor: pointer;
            outline: none;
            border: none;
        }

        .profile-dropdown summary:focus,
        .profile-dropdown summary:focus-visible {
            outline: none;
            border: none;
            box-shadow: none;
        }


        .profile-dropdown summary::-webkit-details-marker {
            display: none;
        }


        .profile {
            display: flex;
            align-items: center;
            gap: 12px;

            padding: 5px 8px;
            border-radius: 10px;

            transition: 0.2s;
        }


        .profile:hover {
            background: #f4f7fb;
        }


        .profile-arrow {
            margin-left: 3px;
            font-size: 11px;
            color: #718398;
        }


        .profile-dropdown[open] .profile-arrow {
            transform: rotate(180deg);
        }


        .profile-menu {
            position: absolute;
            top: calc(100% + 10px);
            right: 0;
            width: 190px;
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            padding: 8px;
            box-shadow: 0 10px 28px rgba(15, 47, 82, 0.12);
            z-index: 100;
        }


        .logout-button {
            width: 100%;
            border: none;
            background: transparent;
            color: #b42318;
            padding: 11px 16px;
            border-radius: 8px;
            text-align: left;

            font-family: Arial, sans-serif;
            font-size: 13px;
            font-weight: 700;

            cursor: pointer;
        }


        .logout-button:hover {
            background: #fff1f0;
        }


        .avatar {
            width: 42px;
            height: 42px;

            border-radius: 50%;

            background: #e6f2fb;
            color: #17456f;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 14px;
            font-weight: 800;
        }


        .profile-info strong {
            display: block;

            font-size: 14px;
            color: #173f67;
        }


        .profile-info span {
            display: block;

            margin-top: 3px;

            font-size: 12px;
            color: #7b8da1;
        }


        /* =====================================================
           CONTENT
        ===================================================== */

        .content {
            padding: 35px;
        }


        .welcome {
            margin-bottom: 25px;
        }


        .welcome h1 {
            font-size: 27px;
            color: #17456f;

            margin-bottom: 7px;
        }


        .welcome p {
            font-size: 14px;
            color: #6b7f94;
        }


        /* =====================================================
           STATISTICS
        ===================================================== */

        .stats {
            display: grid;

            grid-template-columns:
                repeat(4, 1fr);

            gap: 18px;

            margin-bottom: 28px;
        }


        .stat-card {
            background: #ffffff;

            border: 1px solid #e5e7eb;

            border-radius: 13px;

            padding: 22px;

            box-shadow:
                0 3px 12px rgba(0,0,0,0.03);
        }


        .stat-icon {
            width: 42px;
            height: 42px;

            border-radius: 10px;

            background: #edf5fb;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 19px;

            margin-bottom: 15px;
        }


        .stat-card h3 {
            font-size: 13px;

            color: #718398;

            margin-bottom: 8px;
        }


        .stat-card strong {
            font-size: 27px;
            color: #173f67;
        }


        /* =====================================================
           CARD
        ===================================================== */

        .card {
            background: #ffffff;

            border: 1px solid #e5e7eb;

            border-radius: 13px;

            padding: 25px;

            margin-bottom: 25px;

            box-shadow:
                0 3px 12px rgba(0,0,0,0.03);
        }


        .card-header {
            display: flex;

            justify-content: space-between;
            align-items: center;

            margin-bottom: 20px;
        }


        .card-header h2 {
            font-size: 18px;
            color: #173f67;
        }


        .card-header p {
            margin-top: 5px;

            font-size: 13px;

            color: #7b8da1;
        }


        /* =====================================================
           TABLE
        ===================================================== */

        .table-wrapper {
            overflow-x: auto;
        }


        table {
            width: 100%;
            border-collapse: collapse;
        }


        th {
            text-align: left;

            background: #edf8f2;

            color: #17663f;

            padding: 13px;

            font-size: 12px;
        }


        td {
            padding: 14px 13px;

            border-bottom:
                1px solid #edf0f3;

            font-size: 13px;

            color: #40566d;
        }


        tbody tr:last-child td {
            border-bottom: none;
        }


        /* =====================================================
           STATUS
        ===================================================== */

        .status {
            display: inline-block;

            padding: 6px 10px;

            border-radius: 20px;

            font-size: 11px;

            font-weight: 700;
        }


        .status-menunggu {
            background: #fff4d6;
            color: #9a6b00;
        }


        .status-diproses {
            background: #e8f2ff;
            color: #23609b;
        }


        .status-selesai {
            background: #dcf8e8;
            color: #17824d;
        }


        /* =====================================================
           BUTTON
        ===================================================== */

        .btn {
            display: inline-block;

            padding: 8px 13px;

            border-radius: 7px;

            text-decoration: none;

            font-size: 12px;

            font-weight: 700;

            background: #17456f;

            color: #ffffff;
        }


        .btn:hover {
            background: #123956;
        }


        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 1000px) {

            .stats {
                grid-template-columns:
                    repeat(2, 1fr);
            }

        }


        @media (max-width: 700px) {

            .sidebar {
                width: 210px;
            }


            .main {
                margin-left: 210px;

                width:
                    calc(100% - 210px);
            }


            .content {
                padding: 20px;
            }


            .topbar {
                padding: 0 20px;
            }

        }


        /* =====================================================
           AGENDA SEKDES
           Kalender memakai layout Dashboard Sekdes
        ====================================================== */

        .agenda-page-content {
            padding: 35px;
        }

        .agenda-page-content .page-content {
            min-height: auto;
            padding: 0;
            background: transparent;
        }

        .agenda-page-content .content-container {
            max-width: 100%;
            margin: 0;
        }



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

    

        @media (max-width: 900px) {
            .agenda-page-content {
                padding: 25px;
            }
        }

        @media (max-width: 600px) {
            .agenda-page-content {
                padding: 20px;
            }
        }


    
        /* Menu Profile pada dropdown user */
        .profile-menu-item {
            display: flex;
            align-items: center;
            gap: 10px;
            width: 100%;
            padding: 11px 16px;
            margin: 0 0 6px;
            border-radius: 8px;
            color: #164b78;
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
            transition: background .2s ease, color .2s ease;
        }

        .profile-menu-item:hover {
            background: #eef7f1;
            color: #08733a;
        }

    </style>

</head>


<body>

<div class="layout">


    <!-- =====================================================
         SIDEBAR SEKDES
    ====================================================== -->

    <aside class="sidebar">


        <!-- BRAND -->

        <div class="brand">

            <img
                src="https://cdn.phototourl.com/free/2026-08-19-ada8088c-135b-4f75-94c5-ef27a75114f8.png"
                alt="Logo Desa Sukamerindu"
                class="brand-logo"
            >


            <h2>
                DESA SUKAMERINDU
            </h2>


            <p>
                Sistem Informasi Desa
            </p>

        </div>


        <!-- MENU -->

        <nav class="menu">


            {{-- DASHBOARD --}}

            <a
                href="{{ route('sekdes.dashboard') }}"
                class="{{ request()->routeIs('sekdes.dashboard') ? 'active' : '' }}"
            >

                <span class="menu-icon">
                    🏠
                </span>

                <span>
                    Dashboard
                </span>

            </a>


            {{-- PENGAJUAN SURAT --}}

            <a
                href="{{ url('/sekdes/pengajuan-surat') }}"
                class="{{ request()->is('sekdes/pengajuan-surat*') ? 'active' : '' }}"
            >

                <span class="menu-icon">
                    📄
                </span>

                <span>
                    Pengajuan Surat
                </span>

            </a>


            {{-- DATA WARGA --}}

            <a
                href="{{ url('/sekdes/data-warga') }}"
                class="{{ request()->is('sekdes/data-warga*') ? 'active' : '' }}"
            >

                <span class="menu-icon">
                    👥
                </span>

                <span>
                    Data Warga
                </span>

            </a>


            {{-- INFORMASI --}}

            <a
                href="{{ url('/sekdes/informasi') }}"
                class="{{ request()->is('sekdes/informasi*') ? 'active' : '' }}"
            >

                <span class="menu-icon">
                    📢
                </span>

                <span>
                    Informasi
                </span>

            </a>


            {{-- AGENDA --}}

            <a
                href="{{ route('sekdes.agenda') }}"
                class="{{ request()->routeIs('sekdes.agenda*') ? 'active' : '' }}"
            >

                <span class="menu-icon">
                    📅
                </span>

                <span>
                    Agenda
                </span>

            </a>


            {{-- PENGADUAN --}}

            <a
                href="{{ url('/sekdes/pengaduan') }}"
                class="{{ request()->is('sekdes/pengaduan*') ? 'active' : '' }}"
            >

                <span class="menu-icon">
                    📋
                </span>

                <span>
                    Pengaduan
                </span>

            </a>


            {{-- PERIHAL --}}

            <div class="menu-dropdown" id="perihalDropdown">

                <button
                    type="button"
                    class="menu-dropdown-button"
                    onclick="togglePerihal()"
                >

                    <span class="menu-icon">
                        ℹ️
                    </span>

                    <span>
                        Perihal
                    </span>

                    <span class="dropdown-arrow">
                        ▼
                    </span>

                </button>


                <div class="menu-dropdown-content">

                    <a href="{{ route('guest.profil-desa') }}">
                        🏛️
                        <span>Profil Desa</span>
                    </a>

                    <a href="{{ route('home') }}#visi-misi">
                        🎯
                        <span>Visi &amp; Misi</span>
                    </a>

                    <a href="{{ route('home') }}#perangkat-desa">
                        👥
                        <span>Perangkat Desa</span>
                    </a>

                    <a href="{{ route('home') }}#kontak-desa">
                        📞
                        <span>Kontak Desa</span>
                    </a>

                </div>

            </div>


        </nav>

    </aside>



    <!-- =====================================================
         MAIN
    ====================================================== -->

    <main class="main">


        <!-- TOPBAR -->

        <header class="topbar">


            <div class="page-title">

                Agenda Desa

            </div>



            <!-- PROFILE -->

            <details class="profile-dropdown">


                <summary class="profile">


                    <div class="avatar">

                        {{ strtoupper(
                            substr(auth()->user()->name, 0, 2)
                        ) }}

                    </div>


                    <div class="profile-info">

                        <strong>

                            {{ auth()->user()->name }}

                        </strong>


                        <span>

                            Sekretaris Desa

                        </span>

                    </div>


                    <span class="profile-arrow">
                        ▼
                    </span>


                </summary>



                <!-- DROPDOWN -->

                <div class="profile-menu">

                    <a
                        href="{{ route('profile.edit') }}"
                        class="profile-menu-item"
                    >
                        <span>👤</span>
                        <span>Profile</span>
                    </a>

                    <form
                        method="POST"
                        action="{{ route('logout') }}"
                    >

                        @csrf


                        <button
                            type="submit"
                            class="logout-button"
                        >

                            🚪 Keluar

                        </button>

                    </form>

                </div>


            </details>


        </header>



        <!-- =====================================================
             CONTENT
        ====================================================== -->

        <section class="content agenda-page-content">

<div class="content-container">


            {{-- =================================================
                 PAGE HEADER
            ================================================== --}}

            <div class="page-header">

                <h1>
                    Agenda Desa
                </h1>

                <p>
                    Lihat jadwal kegiatan dan agenda Desa Sukamerindu.
                </p>

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
                        href="{{ route('sekdes.agenda', [
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
                        href="{{ route('sekdes.agenda', [
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

        </section>


    </main>


</div>


<script>

    function togglePerihal() {

        const dropdown = document.getElementById('perihalDropdown');

        if (!dropdown) {
            return;
        }

        dropdown.classList.toggle('open');

    }


    document.addEventListener('click', function(event) {

        const dropdown = document.getElementById('perihalDropdown');

        if (!dropdown) {
            return;
        }

        if (!dropdown.contains(event.target)) {
            dropdown.classList.remove('open');
        }

    });

</script>



    <!-- =====================================================
         JAVASCRIPT AGENDA SEKDES
    ====================================================== -->

    <script>
document.addEventListener('DOMContentLoaded', function () {

            const titleButton = document.getElementById('calendarTitleButton');
            const monthPicker = document.getElementById('monthPicker');
            const pickerYear = document.getElementById('pickerYear');
            const previousYear = document.getElementById('previousYear');
            const nextYear = document.getElementById('nextYear');
            const monthButtons = document.querySelectorAll('.month-button');

            let selectedYear = {{ $tahun }};
            const agendaUrl = @json(route('sekdes.agenda'));

            // Buka / tutup pilihan bulan dan tahun.
            titleButton.addEventListener('click', function (event) {

                event.stopPropagation();

                const isOpen = monthPicker.classList.toggle('show');

                titleButton.classList.toggle('active', isOpen);

                titleButton.setAttribute(
                    'aria-expanded',
                    isOpen ? 'true' : 'false'
                );
            });

            // Klik di luar picker = tutup.
            document.addEventListener('click', function (event) {

                if (
                    !monthPicker.contains(event.target) &&
                    !titleButton.contains(event.target)
                ) {
                    monthPicker.classList.remove('show');
                    titleButton.classList.remove('active');
                    titleButton.setAttribute('aria-expanded', 'false');
                }
            });

            // Tahun sebelumnya.
            previousYear.addEventListener('click', function () {
                selectedYear--;
                pickerYear.textContent = selectedYear;
            });

            // Tahun berikutnya.
            nextYear.addEventListener('click', function () {
                selectedYear++;
                pickerYear.textContent = selectedYear;
            });

            // Pilih bulan.
            monthButtons.forEach(function (button) {

                button.addEventListener('click', function () {

                    const month = this.dataset.month;

                    window.location.href =
                        agendaUrl +
                        '?bulan=' + month +
                        '&tahun=' + selectedYear;
                });

            });

        });
    


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

                const filter =
                    filterSelect.value;

                const today =
                    new Date();

                today.setHours(0, 0, 0, 0);


                let visibleCount = 0;


                dayGroups.forEach(function (group) {

                    const dateText =
                        group.dataset.date;

                    const groupDate =
                        new Date(dateText + 'T00:00:00');

                    const dateDiff =
                        Math.round(
                            (groupDate - today) /
                            (1000 * 60 * 60 * 24)
                        );


                    let dateMatches = true;


                    if (filter === 'today') {

                        dateMatches =
                            dateDiff === 0;

                    }


                    if (filter === 'next7') {

                        dateMatches =
                            dateDiff >= 0 &&
                            dateDiff <= 7;

                    }


                    if (filter === 'upcoming') {

                        dateMatches =
                            dateDiff >= 0;

                    }


                    const agendaItems =
                        group.querySelectorAll(
                            '.agenda-search-item'
                        );

                    let visibleInGroup = 0;


                    agendaItems.forEach(function (item) {

                        const searchText =
                            normalize(
                                item.dataset.search
                            );

                        const keywordMatches =
                            !keyword ||
                            searchText.includes(keyword);


                        const shouldShow =
                            dateMatches &&
                            keywordMatches;


                        item.hidden =
                            !shouldShow;


                        if (shouldShow) {

                            visibleInGroup++;

                            visibleCount++;

                        }

                    });


                    group.hidden =
                        visibleInGroup === 0;

                });


                if (emptyMessage) {

                    emptyMessage.classList.toggle(
                        'show',
                        visibleCount === 0
                    );

                }

            }


            searchInput.addEventListener(
                'input',
                applyAgendaFilter
            );


            filterSelect.addEventListener(
                'change',
                applyAgendaFilter
            );


            applyAgendaFilter();

        });
    </script>


</body>

</html>
