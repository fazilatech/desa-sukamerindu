<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Data Kelahiran - Kepala Desa</title>

    <style>        * {
            box-sizing: border-box;
        }

        html,
        body {
            margin: 0;
            padding: 0;
            min-height: 100%;
        }

        body {
            font-family: "Segoe UI", Arial, sans-serif;
            background: #f3f6f9;
            color: #10233f;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        button {
            font-family: inherit;
        }


        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f7fa;
            color: #10233f;
        }

        .page {
            min-height: 100vh;
            display: flex;
        }

        /* SIDEBAR */
        .sidebar {
            width: 255px;
            min-height: 100vh;
            background: #087238;
            color: white;
            padding: 30px 14px;
            flex-shrink: 0;
        }

        .brand {
            text-align: center;
            padding-bottom: 25px;
            border-bottom: 1px solid rgba(255,255,255,.22);
        }

        .logo {
            width: 90px;
            height: 90px;
            object-fit: contain;
            background: white;
            border-radius: 7px;
            padding: 6px;
        }

        .brand-title {
            margin: 18px 0 8px;
            font-size: 18px;
            line-height: 1.2;
            font-weight: 800;
            letter-spacing: .2px;
        }

        .brand-subtitle {
            font-size: 12px;
            line-height: 1.4;
            opacity: .95;
        }

        .nav {
            margin-top: 22px;
        }

        .nav-item,
        .nav-dropdown-toggle {
            width: 100%;
            min-height: 44px;
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 0 18px;
            margin-bottom: 6px;
            border: 0;
            border-radius: 9px;
            background: transparent;
            color: white;
            text-decoration: none;
            font: inherit;
            font-size: 14px;
            line-height: 1.2;
            font-weight: 600;
            cursor: pointer;
            text-align: left;
        }

        .nav-item:hover,
        .nav-dropdown-toggle:hover,
        .nav-item.active,
        .nav-dropdown-toggle.active {
            background: rgba(255,255,255,.14);
        }

        .nav-icon {
            width: 22px;
            text-align: center;
        }

        .nav-dropdown {
            margin-bottom: 7px;
        }

        .nav-dropdown-toggle {
            justify-content: flex-start;
        }

        .nav-dropdown-arrow {
            margin-left: auto;
            font-size: 10px;
            transition: .2s;
        }

        .nav-dropdown.open .nav-dropdown-arrow {
            transform: rotate(180deg);
        }

        .nav-dropdown-menu {
            display: none;
            padding: 0 0 5px 52px;
        }

        .nav-dropdown.open .nav-dropdown-menu {
            display: block;
        }

        .nav-dropdown-menu a {
            display: block;
            padding: 9px 12px;
            color: rgba(255,255,255,.9);
            text-decoration: none;
            border-radius: 7px;
            font-size: 13px;
            line-height: 1.25;
            font-weight: 500;
        }

        .nav-dropdown-menu a:hover,
        .nav-dropdown-menu a.active {
            background: rgba(255,255,255,.13);
            color: white;
        }

        /* MAIN */
        .main {
            flex: 1;
            min-width: 0;
        }

        .topbar {
            height: 72px;
            background: white;
            border-bottom: 1px solid #e5e7eb;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 34px;
        }

        .topbar-title {
            margin: 0;
            color: #087238;
            font-size: 18px;
            line-height: 1.2;
            font-weight: 700;
            letter-spacing: .1px;
        }

        .profile-area {
            position: relative;
        }

        .profile {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 5px 7px;
            border-radius: 10px;
            cursor: pointer;
            user-select: none;
            transition: background .2s ease;
        }

        .profile-area {
            position: relative;
            z-index: 2001;
        }

        .profile:hover {
            background: #f8fafc;
        }

        .avatar {
            width: 40px;
            height: 40px;
            min-width: 40px;
            border-radius: 50%;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #dcfce7;
            color: #087238;
            font-weight: 800;
            font-size: 13px;
        }

        .avatar img {
            width: 100%;
            height: 100%;
            display: block;
            object-fit: cover;
        }

        .profile-info {
            min-width: 0;
        }

        .profile-dropdown {
            position: absolute;
            top: calc(100% + 10px);
            right: 0;
            width: 175px;
            padding: 8px;
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            box-shadow: 0 12px 30px rgba(16, 35, 63, .12);
            z-index: 2000;
            display: none;
        }

        .profile-dropdown.show {
            display: block;
        }

        .dropdown-profile,
        .dropdown-logout {
            width: 100%;
            min-height: 42px;
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 0 12px;
            border: 0;
            border-radius: 8px;
            background: transparent;
            text-decoration: none;
            font: inherit;
            font-size: 12px;
            font-weight: 700;
            text-align: left;
            cursor: pointer;
        }

        .dropdown-profile {
            color: #263b57;
        }

        .dropdown-logout {
            color: #ef4444;
        }

        .dropdown-profile:hover {
            background: #f5f7fa;
            color: #087238;
        }

        .dropdown-logout:hover {
            background: #fef2f2;
        }

        .profile-dropdown form {
            margin: 0;
        }

        .avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #dcfce7;
            color: #087238;
            font-weight: 800;
            font-size: 13px;
        }

        .profile-name {
            font-weight: 700;
            font-size: 13px;
            line-height: 1.2;
        }

        .profile-role {
            margin-top: 3px;
            color: #66809d;
            font-size: 11px;
            line-height: 1.2;
        }


        /* =========================
           CONTENT
        ========================== */

        .content {
            padding: 35px 30px;
        }

        .page-heading {
            margin-bottom: 25px;
        }

        .page-heading h1 {
            margin: 0;
            font-size: 29px;
            font-weight: 800;
            color: #10233f;
        }

        .page-heading p {
            margin: 7px 0 0;
            color: #66809d;
            font-size: 13px;
        }

        /* =========================
           TABLE CARD
        ========================== */

        .table-card {
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 16px;
            padding: 25px;
            box-shadow: 0 4px 15px rgba(15,23,42,.04);
        }

        .table-header {
            margin-bottom: 20px;
        }

        .table-title {
            margin: 0;
            color: #10233f;
            font-size: 18px;
            font-weight: 800;
        }

        .table-wrapper {
            width: 100%;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 1000px;
        }

        th {
            text-align: left;
            padding: 13px 10px;
            border-bottom: 1px solid #e5e7eb;
            color: #526b85;
            font-size: 12px;
            font-weight: 700;
            white-space: nowrap;
        }

        td {
            padding: 14px 10px;
            border-bottom: 1px solid #f0f2f5;
            color: #526b85;
            font-size: 13px;
            white-space: nowrap;
        }

        tr:last-child td {
            border-bottom: none;
        }

        .name {
            color: #10233f;
            font-weight: 700;
        }

        .gender {
            display: inline-block;
            padding: 5px 9px;
            border-radius: 999px;
            font-size: 11px;
            font-weight: 700;
            background: #f1f5f9;
            color: #526b85;
        }

        .empty-row {
            text-align: center;
            color: #94a3b8;
            padding: 35px 12px;
        }


        /* =========================
           STATISTIK KELAHIRAN
        ========================== */

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 16px;
            margin-bottom: 20px;
        }

        .stat-card {
            background: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 15px;
            padding: 19px 20px;
            box-shadow: 0 4px 15px rgba(15,23,42,.04);
        }

        .stat-icon {
            width: 39px;
            height: 39px;
            border-radius: 11px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #e8f8ef;
            font-size: 18px;
        }

        .stat-number {
            margin: 14px 0 3px;
            color: #10233f;
            font-size: 27px;
            line-height: 1;
            font-weight: 800;
        }

        .stat-label {
            color: #6b819b;
            font-size: 12px;
        }

        .chart-card {
            background: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 16px;
            padding: 22px 24px 18px;
            margin-bottom: 20px;
            box-shadow: 0 4px 15px rgba(15,23,42,.04);
        }

        .chart-header {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 15px;
            margin-bottom: 10px;
        }

        .chart-title {
            margin: 0;
            color: #10233f;
            font-size: 18px;
            font-weight: 800;
        }

        .chart-subtitle {
            margin: 5px 0 0;
            color: #7186a0;
            font-size: 12px;
        }

        .chart-controls {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            gap: 8px;
            flex-wrap: wrap;
        }

        .year-select {
            min-width: 100px;
            height: 38px;
            padding: 0 11px;
            border: 1px solid #dbe3eb;
            border-radius: 9px;
            background: #fff;
            color: #46617e;
            outline: none;
            cursor: pointer;
        }

        .chart-wrap {
            position: relative;
            width: 100%;
            min-width: 0;
            height: 350px;
        }

        .chart-wrap canvas {
            display: block;
            width: 100% !important;
            height: 100% !important;
        }

        .chart-wrap.doughnut-mode {
            height: 360px;
            min-height: 300px;
        }

        .chart-wrap.doughnut-mode canvas {
            max-width: 100%;
        }

        .chart-highlight {
            margin-top: 14px;
            padding: 11px 14px;
            border: 1px solid #d9f0e2;
            border-radius: 9px;
            background: #f2fbf5;
            color: #176b3d;
            font-size: 12px;
            line-height: 1.5;
        }

        .birth-insights {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 12px;
            margin-top: 14px;
        }

        .birth-insight {
            min-width: 0;
            display: flex;
            align-items: center;
            gap: 11px;
            padding: 13px 14px;
            border: 1px solid #e5ebf0;
            border-radius: 12px;
            background: #fbfcfd;
        }

        .birth-insight-main {
            border-color: #d8eadf;
            background: #f7fcf9;
        }

        .insight-icon {
            width: 38px;
            height: 38px;
            flex: 0 0 38px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            background: #e8f7ee;
            font-size: 18px;
        }

        .insight-label {
            color: #71839a;
            font-size: 10px;
            font-weight: 600;
            margin-bottom: 3px;
        }

        .insight-value {
            color: #10233f;
            font-size: 15px;
            line-height: 1.2;
            font-weight: 800;
        }

        .insight-meta {
            color: #16804a;
            font-size: 10px;
            font-weight: 600;
            margin-top: 3px;
        }

        .table-toolbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 15px;
            margin-bottom: 16px;
            flex-wrap: wrap;
        }

        .table-description {
            margin: 4px 0 0;
            color: #8395a9;
            font-size: 11px;
        }

        .filter-group {
            display: flex;
            align-items: center;
            gap: 8px;
            flex-wrap: wrap;
        }

        .filter-input,
        .filter-select {
            height: 37px;
            padding: 0 11px;
            border: 1px solid #dbe3eb;
            border-radius: 8px;
            background: #fff;
            color: #49647f;
            font-family: inherit;
            font-size: 12px;
            outline: none;
        }

        .filter-input {
            width: 210px;
        }

        .filter-input:focus,
        .filter-select:focus,
        .year-select:focus {
            border-color: #78b995;
            box-shadow: 0 0 0 3px rgba(8,114,56,.08);
        }

        .reset-btn {
            height: 37px;
            padding: 0 12px;
            border: 1px solid #dbe3eb;
            border-radius: 8px;
            background: #fff;
            color: #526b85;
            font-family: inherit;
            font-size: 12px;
            cursor: pointer;
        }

        .reset-btn:hover {
            background: #f6f8fa;
        }

        .result-info {
            margin: 0 0 12px;
            color: #8395a9;
            font-size: 11px;
        }

        .detail-btn {
            padding: 7px 11px;
            border: 0;
            border-radius: 7px;
            background: #087238;
            color: #fff;
            font-size: 11px;
            font-weight: 700;
            cursor: pointer;
        }

        .detail-btn:hover {
            background: #075f30;
        }

        .detail-modal {
            position: fixed;
            inset: 0;
            z-index: 2000;
            display: none;
            align-items: center;
            justify-content: center;
            padding: 20px;
            background: rgba(15,23,42,.45);
        }

        .detail-modal.show {
            display: flex;
        }

        .detail-box {
            width: min(700px, 100%);
            max-height: 90vh;
            overflow-y: auto;
            background: #fff;
            border-radius: 15px;
            padding: 23px;
            box-shadow: 0 20px 60px rgba(15,23,42,.2);
        }

        .detail-head {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 10px;
            margin-bottom: 18px;
        }

        .detail-head h3 {
            margin: 0;
            color: #10233f;
            font-size: 19px;
        }

        .close-detail {
            width: 34px;
            height: 34px;
            border: 0;
            border-radius: 50%;
            background: #f1f5f9;
            color: #526b85;
            font-size: 19px;
            cursor: pointer;
        }

        .detail-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 10px;
        }

        .detail-item {
            padding: 12px;
            border: 1px solid #edf1f5;
            border-radius: 9px;
        }

        .detail-item small {
            display: block;
            margin-bottom: 5px;
            color: #8999aa;
            font-size: 10px;
        }

        .detail-item strong {
            color: #243e59;
            font-size: 12px;
        }

        @media (max-width: 1000px) {
            .stats-grid {
                grid-template-columns: 1fr;
            }

            .chart-header,
            .table-toolbar {
                align-items: flex-start;
                flex-direction: column;
            }

            .chart-controls {
                width: 100%;
                justify-content: flex-start;
            }

            .filter-group {
                width: 100%;
            }

            .chart-wrap {
                height: 320px;
            }

            .chart-wrap.doughnut-mode {
                height: 330px;
            }
        }

        @media (max-width: 900px) {
            .sidebar {
                width: 220px;
            }

            .topbar {
                padding: 0 22px;
            }

            .content {
                padding: 30px 22px;
            }

            .profile-info {
                display: none;
            }
        }

        @media (max-width: 650px) {
            .filter-input {
                width: 100%;
            }

            .filter-group {
                display: grid;
                grid-template-columns: 1fr;
                width: 100%;
            }

            .filter-input,
            .filter-select,
            .reset-btn,
            .year-select {
                width: 100%;
            }

            .detail-grid {
                grid-template-columns: 1fr;
            }

            .chart-card {
                padding: 17px 13px 14px;
            }

            .chart-header {
                gap: 12px;
            }

            .chart-title {
                font-size: 17px;
            }

            .chart-subtitle {
                font-size: 11px;
                line-height: 1.45;
            }

            .chart-wrap {
                height: 285px;
            }

            .chart-wrap.doughnut-mode {
                height: 300px;
                min-height: 280px;
            }

            .birth-insights {
                grid-template-columns: 1fr;
            }

            .chart-controls {
                display: grid;
                grid-template-columns: 1fr 1fr;
                width: 100%;
            }
        }

        @media (max-width: 420px) {
            .chart-controls {
                grid-template-columns: 1fr;
            }

            .chart-wrap {
                height: 250px;
            }

            .chart-wrap.doughnut-mode {
                height: 275px;
                min-height: 260px;
            }

            .chart-highlight {
                font-size: 11px;
            }

            .birth-insight {
                padding: 12px;
            }
        }
    

                /* =====================================================
                   SYNC NAVBAR DENGAN DATA WARGA
                   Jangan hapus dropdown Data Warga.
                ===================================================== */
        
                html,
                body {
                    margin: 0;
                    padding: 0;
                    min-height: 100%;
                }
        
                body {
                    font-family: "Segoe UI", Arial, sans-serif;
                    background: #f3f6f9;
                    color: #10233f;
                }
        
                .sidebar {
                    width: 300px;
                    min-height: 100vh;
                    background: #096b35;
                    color: white;
                    padding: 36px 16px 24px;
                    display: flex;
                    flex-direction: column;
                    flex-shrink: 0;
                }
        
                .brand {
                    text-align: center;
                    padding-bottom: 30px;
                    border-bottom: 1px solid rgba(255,255,255,.25);
                }
        
                .logo {
                    width: 105px;
                    height: 105px;
                    object-fit: contain;
                    background: white;
                    border-radius: 8px;
                    padding: 8px;
                    display: block;
                    margin: 0 auto 20px;
                }
        
                .brand-title {
                    margin: 0;
                    font-size: 22px;
                    font-weight: 800;
                    letter-spacing: .5px;
                }
        
                .brand-subtitle {
                    margin-top: 8px;
                    font-size: 15px;
                    color: rgba(255,255,255,.9);
                }
        
                .nav {
                    margin-top: 28px;
                }
        
                .nav-item,
                .nav-dropdown-toggle {
                    width: 100%;
                    display: flex;
                    align-items: center;
                    gap: 15px;
                    padding: 14px 20px;
                    margin-bottom: 8px;
                    border: 0;
                    border-radius: 9px;
                    background: transparent;
                    color: white;
                    text-decoration: none;
                    font-family: inherit;
                    font-size: 15px;
                    line-height: 1.2;
                    font-weight: 600;
                    cursor: pointer;
                    text-align: left;
                }
        
                .nav-item:hover,
                .nav-dropdown-toggle:hover {
                    background: rgba(255,255,255,.10);
                }
        
                .nav-item.active,
                .nav-dropdown-toggle.active {
                    background: rgba(255,255,255,.16);
                    border: 1px solid rgba(255,255,255,.55);
                }
        
                .nav-icon {
                    width: 22px;
                    text-align: center;
                    font-size: 17px;
                    flex-shrink: 0;
                }
        
                .nav-dropdown {
                    margin-bottom: 8px;
                }
        
                .nav-dropdown-toggle {
                    justify-content: flex-start;
                }
        
                .nav-dropdown-arrow {
                    margin-left: auto;
                    font-size: 12px;
                    transition: transform .2s ease;
                }
        
                .nav-dropdown.open .nav-dropdown-arrow {
                    transform: rotate(180deg);
                }
        
                .nav-dropdown-menu {
                    display: none;
                    padding: 4px 0 4px 37px;
                }
        
                .nav-dropdown.open .nav-dropdown-menu {
                    display: block;
                }
        
                .nav-dropdown-menu a {
                    display: block;
                    padding: 10px 14px;
                    margin-bottom: 3px;
                    border-radius: 7px;
                    color: rgba(255,255,255,.92);
                    font-size: 14px;
                    line-height: 1.25;
                    font-weight: 500;
                    text-decoration: none;
                }
        
                .nav-dropdown-menu a:hover,
                .nav-dropdown-menu a.active {
                    background: rgba(255,255,255,.10);
                    color: white;
                }
        
                .topbar {
                    height: 84px;
                    background: white;
                    border-bottom: 1px solid #e5e7eb;
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                    padding: 0 38px;
                }
        
                .topbar-title {
                    margin: 0;
                    color: #087238;
                    font-size: 22px;
                    font-weight: 800;
                }
        
                .profile-area {
                    position: relative;
                    display: flex;
                    align-items: center;
                }
        
                .profile {
                    display: flex;
                    align-items: center;
                    gap: 12px;
                    cursor: pointer;
                    padding: 6px 10px;
                    border-radius: 12px;
                    transition: .2s;
                }
        
                .profile:hover {
                    background: #f3f4f6;
                }
        
                .avatar {
                    width: 48px;
                    height: 48px;
                    min-width: 48px;
                    border-radius: 50%;
                    background: #dcfce7;
                    color: #087238;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    font-weight: 800;
                    font-size: 16px;
                    overflow: hidden;
                    flex-shrink: 0;
                }
        
                .avatar img {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                    display: block;
                }
        
                .profile-info {
                    line-height: 1.25;
                }
        
                .profile-name {
                    font-size: 15px;
                    font-weight: 700;
                    color: #111827;
                }
        
                .profile-role {
                    font-size: 13px;
                    color: #6b7280;
                    margin-top: 4px;
                }
        
                @media (max-width: 900px) {
                    .sidebar {
                        width: 240px;
                    }
        
                    .topbar {
                        padding: 0 25px;
                    }
        
                    .content {
                        padding: 35px 25px;
                    }
                }
        
                @media (max-width: 650px) {
                    .page {
                        display: block;
                    }
        
                    .sidebar {
                        width: 100%;
                        min-height: auto;
                    }
        
                    .topbar {
                        height: auto;
                        padding: 20px;
                    }
        
                    .content {
                        padding: 25px 20px;
                    }
        
                    .profile-role {
                        display: none;
                    }
                }

        /* =====================================================
           FIXED SIDEBAR + STICKY TOPBAR
           Sidebar tetap di tempat saat halaman di-scroll.
        ====================================================== */
        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;
            width: 300px;
            height: 100vh;
            overflow-y: auto;
            overflow-x: hidden;
            z-index: 3000;
        }

        .main {
            margin-left: 300px;
            min-width: 0;
        }

        .topbar {
            position: sticky;
            top: 0;
            z-index: 2500;
        }

        /* Scrollbar sidebar tetap tipis dan rapi */
        .sidebar::-webkit-scrollbar {
            width: 5px;
        }

        .sidebar::-webkit-scrollbar-track {
            background: transparent;
        }

        .sidebar::-webkit-scrollbar-thumb {
            background: rgba(255,255,255,.25);
            border-radius: 10px;
        }

        /* Dropdown profil */
        .profile-dropdown {
            position: absolute;
            top: calc(100% + 8px);
            right: 0;
            width: 180px;
            padding: 8px;
            background: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            box-shadow: 0 12px 30px rgba(16,35,63,.15);
            z-index: 4000;
            display: none;
        }

        .profile-dropdown.show {
            display: block;
        }

        .dropdown-profile,
        .dropdown-logout {
            width: 100%;
            min-height: 42px;
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 0 12px;
            border: 0;
            border-radius: 8px;
            background: transparent;
            font-family: inherit;
            font-size: 13px;
            font-weight: 700;
            text-decoration: none;
            text-align: left;
            cursor: pointer;
        }

        .dropdown-profile {
            color: #263b57;
        }

        .dropdown-logout {
            color: #ef4444;
        }

        .dropdown-profile:hover {
            background: #f5f7fa;
            color: #087238;
        }

        .dropdown-logout:hover {
            background: #fef2f2;
        }

        @media (max-width: 900px) {
            .sidebar {
                width: 240px;
            }

            .main {
                margin-left: 240px;
            }
        }

        @media (max-width: 650px) {
            .sidebar {
                position: relative;
                width: 100%;
                height: auto;
                min-height: auto;
                max-height: none;
                overflow: visible;
            }

            .main {
                margin-left: 0;
            }

            .topbar {
                position: sticky;
                top: 0;
            }
        }
</style>
</head>

<body>

<div class="page">

    {{-- =====================================================
         SIDEBAR
    ====================================================== --}}

    <aside class="sidebar">

        <div>

            <div class="brand">

                <img
                    src="https://cdn.phototourl.com/free/2026-08-19-ada8088c-135b-4f75-94c5-ef27a75114f8.png"
                    alt="Logo Kabupaten Kepahiang"
                    class="logo"
                >

                <h2 class="brand-title">
                    DESA SUKAMERINDU
                </h2>

                <div class="brand-subtitle">
                    Sistem Informasi Desa
                </div>

            </div>


            <nav class="nav">

                {{-- DASHBOARD --}}
                <a
                    href="{{ route('kepala-desa.dashboard') }}"
                    class="nav-item {{ request()->routeIs('kepala-desa.dashboard') ? 'active' : '' }}"
                >
                    <span class="nav-icon">🏠</span>
                    <span>Dashboard</span>
                </a>


                {{-- PENGAJUAN SURAT --}}
                <a
                    href="{{ route('kepala-desa.pengajuan') }}"
                    class="nav-item {{ request()->routeIs('kepala-desa.pengajuan*') ? 'active' : '' }}"
                >
                    <span class="nav-icon">📄</span>
                    <span>Pengajuan Surat</span>
                </a>


                {{-- DATA WARGA --}}
                <div class="nav-dropdown open">

                    <button
                        type="button"
                        class="nav-dropdown-toggle active"
                        onclick="toggleNavDropdown(this)"
                    >

                        <span class="nav-icon">👥</span>

                        <span>Data Warga</span>

                        <span class="nav-dropdown-arrow">▼</span>

                    </button>


                    <div class="nav-dropdown-menu">

                        <a
                            href="{{ route('kepala-desa.data-warga') }}"
                            class="{{ request()->routeIs('kepala-desa.data-warga') ? 'active' : '' }}"
                        >
                            Data Warga
                        </a>


                        <a
                            href="{{ route('kepala-desa.data-keluarga') }}"
                            class="{{ request()->routeIs('kepala-desa.data-keluarga') ? 'active' : '' }}"
                        >
                            Data Keluarga
                        </a>


                        <a
                            href="{{ route('kepala-desa.data-kelahiran') }}"
                            class="{{ request()->routeIs('kepala-desa.data-kelahiran') ? 'active' : '' }}"
                        >
                            Data Kelahiran
                        </a>


                        {{-- 
                            Pakai URL langsung supaya navbar tidak
                            error RouteNotFoundException kalau route
                            kematian belum diberi nama.
                        --}}
                        <a
                            href="{{ url('/kepala-desa/data-kematian') }}"
                            class="{{ request()->is('kepala-desa/data-kematian') ? 'active' : '' }}"
                        >
                            Data Kematian
                        </a>


                        <a
                            href="{{ url('/kepala-desa/data-perpindahan') }}"
                            class="{{ request()->is('kepala-desa/data-perpindahan') ? 'active' : '' }}"
                        >
                            Data Perpindahan
                        </a>

                    </div>

                </div>


                {{-- PENGUMUMAN --}}
                <div
                    class="nav-dropdown
                    {{ request()->routeIs('kepala-desa.informasi*', 'kepala-desa.agenda*') ? 'open' : '' }}"
                >

                    <button
                        type="button"
                        class="nav-dropdown-toggle
                        {{ request()->routeIs('kepala-desa.informasi*', 'kepala-desa.agenda*') ? 'active' : '' }}"
                        onclick="toggleNavDropdown(this)"
                    >

                        <span class="nav-icon">📢</span>

                        <span>Pengumuman</span>

                        <span class="nav-dropdown-arrow">▼</span>

                    </button>


                    <div class="nav-dropdown-menu">

                        <a
                            href="{{ route('kepala-desa.informasi') }}"
                            class="{{ request()->routeIs('kepala-desa.informasi*') ? 'active' : '' }}"
                        >
                            Informasi
                        </a>


                        <a
                            href="{{ route('kepala-desa.agenda') }}"
                            class="{{ request()->routeIs('kepala-desa.agenda*') ? 'active' : '' }}"
                        >
                            Agenda
                        </a>

                    </div>

                </div>


                {{-- PERIHAL --}}
                <div class="nav-dropdown">

                    <button
                        type="button"
                        class="nav-dropdown-toggle"
                        onclick="toggleNavDropdown(this)"
                    >

                        <span class="nav-icon">📋</span>

                        <span>Perihal</span>

                        <span class="nav-dropdown-arrow">▼</span>

                    </button>


                    <div class="nav-dropdown-menu">

                        <a
                            href="{{ route('kepala-desa.perihal.profil-desa') }}"
                        >
                            Profil Desa
                        </a>


                        <a
                            href="{{ route('kepala-desa.perihal.visi-misi') }}"
                        >
                            Visi &amp; Misi
                        </a>


                        <a
                            href="{{ route('kepala-desa.perihal.struktur') }}"
                        >
                            Struktur Pemerintahan
                        </a>

                    </div>

                </div>

            </nav>

        </div>

    </aside>


    {{-- =====================================================
         MAIN
    ====================================================== --}}

    <main class="main">


        {{-- =================================================
             TOPBAR
        ================================================== --}}

        <header class="topbar">

            <h2 class="topbar-title">
                Data Kelahiran
            </h2>


            <div class="profile-area">

                <div
                    class="profile"
                    onclick="toggleProfileDropdown()"
                >

                    <div class="avatar">

                        @if(auth()->user()->profile_photo)

                            <img
                                src="{{ asset('storage/' . auth()->user()->profile_photo) }}"
                                alt="Foto {{ auth()->user()->name }}"
                            >

                        @else

                            {{ strtoupper(
                                substr(
                                    auth()->user()->name,
                                    0,
                                    2
                                )
                            ) }}

                        @endif

                    </div>


                    <div class="profile-info">

                        <div class="profile-name">
                            {{ auth()->user()->name }}
                        </div>

                        <div class="profile-role">
                            Kepala Desa
                        </div>

                    </div>

                </div>


                {{-- PROFILE DROPDOWN --}}

                <div
                    id="profileDropdown"
                    class="profile-dropdown"
                >

                    <a
                        href="{{ route('kepala-desa.profil') }}"
                        class="dropdown-profile"
                    >
                        👤&nbsp; Profil
                    </a>


                    <form
                        method="POST"
                        action="{{ route('logout') }}"
                    >

                        @csrf

                        <button
                            type="submit"
                            class="dropdown-logout"
                        >
                            🚪&nbsp; Keluar
                        </button>

                    </form>

                </div>

            </div>

        </header>


        {{-- =================================================
             CONTENT
        ================================================== --}}

        <section class="content">

            @php
                $dataKelahiran = $dataKelahiran ?? ($kelahiran ?? collect());
                $dataKelahiran = collect($dataKelahiran);

                $totalKelahiran = $dataKelahiran->count();

                $totalLaki = $dataKelahiran
                    ->filter(function ($item) {
                        return strtolower(trim($item->jenis_kelamin ?? '')) === 'laki-laki';
                    })
                    ->count();

                $totalPerempuan = $dataKelahiran
                    ->filter(function ($item) {
                        return strtolower(trim($item->jenis_kelamin ?? '')) === 'perempuan';
                    })
                    ->count();

                $namaBulan = [
                    1 => 'Jan', 2 => 'Feb', 3 => 'Mar', 4 => 'Apr',
                    5 => 'Mei', 6 => 'Jun', 7 => 'Jul', 8 => 'Agu',
                    9 => 'Sep', 10 => 'Okt', 11 => 'Nov', 12 => 'Des',
                ];

                // Grafik dihitung langsung dari tanggal_lahir pada data yang tampil,
                // sehingga tidak bergantung pada variabel controller tambahan.
                // Tahun grafik selalu tersedia dari 1960 sampai 2026,
                // walaupun pada tahun tertentu belum ada data kelahiran.
                $tahunTersedia = range(1960, 2026);
                rsort($tahunTersedia);

                $tahunGrafik = (int) request('tahun', $tahunGrafik ?? now()->year);
                if ($tahunGrafik < 1960 || $tahunGrafik > 2026) {
                    $tahunGrafik = 2026;
                }

                $grafikSemuaTahun = [];
                $grafikGenderSemuaTahun = [];

                foreach ($tahunTersedia as $tahun) {
                    $grafikSemuaTahun[$tahun] = array_fill(1, 12, 0);
                    $grafikGenderSemuaTahun[$tahun] = [
                        'laki' => array_fill(1, 12, 0),
                        'perempuan' => array_fill(1, 12, 0),
                        'tidak_diketahui' => array_fill(1, 12, 0),
                    ];
                }

                foreach ($dataKelahiran as $item) {
                    if (empty($item->tanggal_lahir)) {
                        continue;
                    }

                    $tanggal = \Carbon\Carbon::parse($item->tanggal_lahir);
                    $tahun = (int) $tanggal->format('Y');
                    $bulan = (int) $tanggal->format('n');
                    $gender = strtolower(trim($item->jenis_kelamin ?? ''));

                    if (!isset($grafikSemuaTahun[$tahun])) {
                        $grafikSemuaTahun[$tahun] = array_fill(1, 12, 0);
                        $grafikGenderSemuaTahun[$tahun] = [
                            'laki' => array_fill(1, 12, 0),
                            'perempuan' => array_fill(1, 12, 0),
                            'tidak_diketahui' => array_fill(1, 12, 0),
                        ];
                    }

                    $grafikSemuaTahun[$tahun][$bulan]++;

                    if ($gender === 'laki-laki' || $gender === 'laki laki' || $gender === 'laki') {
                        $grafikGenderSemuaTahun[$tahun]['laki'][$bulan]++;
                    } elseif ($gender === 'perempuan') {
                        $grafikGenderSemuaTahun[$tahun]['perempuan'][$bulan]++;
                    } else {
                        $grafikGenderSemuaTahun[$tahun]['tidak_diketahui'][$bulan]++;
                    }
                }

                $nilaiGrafik = array_values($grafikSemuaTahun[$tahunGrafik] ?? array_fill(1, 12, 0));
                $genderGrafik = $grafikGenderSemuaTahun[$tahunGrafik] ?? [
                    'laki' => array_fill(1, 12, 0),
                    'perempuan' => array_fill(1, 12, 0),
                    'tidak_diketahui' => array_fill(1, 12, 0),
                ];

                $jumlahBulanTerbanyak = max($nilaiGrafik ?: [0]);
                $indexBulanTerbanyak = array_search($jumlahBulanTerbanyak, $nilaiGrafik, true);
                $bulanTerbanyak = $jumlahBulanTerbanyak > 0
                    ? $namaBulan[$indexBulanTerbanyak + 1]
                    : '-';

                $nilaiLaki = array_values($genderGrafik['laki']);
                $nilaiPerempuan = array_values($genderGrafik['perempuan']);

                $jumlahLakiTerbanyak = max($nilaiLaki ?: [0]);
                $jumlahPerempuanTerbanyak = max($nilaiPerempuan ?: [0]);

                $indexLakiTerbanyak = array_search($jumlahLakiTerbanyak, $nilaiLaki, true);
                $indexPerempuanTerbanyak = array_search($jumlahPerempuanTerbanyak, $nilaiPerempuan, true);

                $bulanLakiTerbanyak = $jumlahLakiTerbanyak > 0
                    ? $namaBulan[$indexLakiTerbanyak + 1]
                    : '-';

                $bulanPerempuanTerbanyak = $jumlahPerempuanTerbanyak > 0
                    ? $namaBulan[$indexPerempuanTerbanyak + 1]
                    : '-';

                // Tahun dengan jumlah kelahiran terbanyak dari seluruh data.
                $jumlahPerTahun = [];
                foreach ($dataKelahiran as $item) {
                    if (empty($item->tanggal_lahir)) {
                        continue;
                    }

                    $tahunData = (int) \Carbon\Carbon::parse($item->tanggal_lahir)->format('Y');

                    if ($tahunData >= 1960 && $tahunData <= 2026) {
                        $jumlahPerTahun[$tahunData] = ($jumlahPerTahun[$tahunData] ?? 0) + 1;
                    }
                }

                $tahunTerbanyak = '-';
                $jumlahTahunTerbanyak = 0;

                if (!empty($jumlahPerTahun)) {
                    $jumlahTahunTerbanyak = max($jumlahPerTahun);
                    $tahunTerbanyak = array_search($jumlahTahunTerbanyak, $jumlahPerTahun, true);
                }
            @endphp

            <div class="page-heading">
                <h1>Data Kelahiran</h1>
                <p>Kelola dan pantau data kelahiran warga Desa Sukamerindu.</p>
            </div>

            <div class="stats-grid">

                <div class="stat-card">
                    <div class="stat-icon">👶</div>
                    <div class="stat-number">{{ $totalKelahiran }}</div>
                    <div class="stat-label">Total Kelahiran</div>
                </div>

                <div class="stat-card">
                    <div class="stat-icon">👦</div>
                    <div class="stat-number">{{ $totalLaki }}</div>
                    <div class="stat-label">Bayi Laki-laki</div>
                </div>

                <div class="stat-card">
                    <div class="stat-icon">👧</div>
                    <div class="stat-number">{{ $totalPerempuan }}</div>
                    <div class="stat-label">Bayi Perempuan</div>
                </div>

            </div>


            <div class="chart-card">

                <div class="chart-header">

                    <div>
                        <h2 class="chart-title">Statistik Kelahiran</h2>
                        <p class="chart-subtitle">
                            Lihat jumlah kelahiran per bulan serta perbandingan bayi laki-laki dan perempuan.
                        </p>
                    </div>

                    <div class="chart-controls">

                        <select
                            id="chartType"
                            class="year-select"
                            aria-label="Pilih model grafik"
                        >
                            <option value="bar">📊 Batang</option>
                            <option value="line">📈 Garis</option>
                            <option value="doughnut">🍩 Lingkaran</option>
                        </select>

                        <select
                            id="chartYear"
                            class="year-select"
                            aria-label="Pilih tahun"
                        >
                            @foreach($tahunTersedia as $tahun)
                                <option
                                    value="{{ $tahun }}"
                                    {{ (int) $tahun === (int) $tahunGrafik ? 'selected' : '' }}
                                >
                                    {{ $tahun }}
                                </option>
                            @endforeach
                        </select>

                    </div>

                </div>

                <div class="chart-wrap">
                    <canvas id="birthChart"></canvas>
                </div>

                <div class="birth-insights">
                    <div class="birth-insight birth-insight-main">
                        <div class="insight-icon">🏆</div>
                        <div>
                            <div class="insight-label">Bulan kelahiran terbanyak</div>
                            <div class="insight-value">{{ $bulanTerbanyak }}</div>
                            <div class="insight-meta">
                                {{ $jumlahBulanTerbanyak }} kelahiran · {{ $tahunGrafik }}
                            </div>
                        </div>
                    </div>

                    <div class="birth-insight">
                        <div class="insight-icon">👦</div>
                        <div>
                            <div class="insight-label">Bayi laki-laki terbanyak</div>
                            <div class="insight-value">{{ $bulanLakiTerbanyak }}</div>
                            <div class="insight-meta">
                                {{ $jumlahLakiTerbanyak }} bayi · {{ $tahunGrafik }}
                            </div>
                        </div>
                    </div>

                    <div class="birth-insight">
                        <div class="insight-icon">👧</div>
                        <div>
                            <div class="insight-label">Bayi perempuan terbanyak</div>
                            <div class="insight-value">{{ $bulanPerempuanTerbanyak }}</div>
                            <div class="insight-meta">
                                {{ $jumlahPerempuanTerbanyak }} bayi · {{ $tahunGrafik }}
                            </div>
                        </div>
                    </div>

                    <div class="birth-insight birth-insight-year">
                        <div class="insight-icon">📅</div>
                        <div>
                            <div class="insight-label">Tahun kelahiran terbanyak</div>
                            <div class="insight-value">{{ $tahunTerbanyak }}</div>
                            <div class="insight-meta">
                                {{ $jumlahTahunTerbanyak }} kelahiran
                            </div>
                        </div>
                    </div>
                </div>

                <div class="chart-highlight">
                    📊 Tahun <strong>{{ $tahunGrafik }}</strong>:
                    kelahiran terbanyak tercatat pada
                    <strong>{{ $bulanTerbanyak }}</strong>
                    dengan <strong>{{ $jumlahBulanTerbanyak }}</strong> kelahiran.
                    Untuk jenis kelamin, data juga ditampilkan pada grafik.
                </div>

            </div>


            <div class="table-card">

                <div class="table-toolbar">

                    <div>
                        <h2 class="table-title">Daftar Data Kelahiran</h2>
                        <p class="table-description">
                            Data kelahiran yang tercatat di Desa Sukamerindu.
                        </p>
                    </div>

                    <div class="filter-group">

                        <input
                            type="text"
                            id="searchBirth"
                            class="filter-input"
                            placeholder="🔎 Cari nama bayi / NIK..."
                        >

                        <select id="genderBirth" class="filter-select">
                            <option value="">Semua Jenis Kelamin</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>

                        <select id="monthBirth" class="filter-select">
                            <option value="">Semua Bulan</option>
                            @foreach($namaBulan as $nomor => $bulan)
                                <option value="{{ $nomor }}">{{ $bulan }}</option>
                            @endforeach
                        </select>

                        <select id="yearBirth" class="filter-select" aria-label="Pilih tahun kelahiran">
                            <option value="" selected>Semua Tahun</option>
                            @foreach($tahunTersedia as $tahun)
                                <option value="{{ $tahun }}">{{ $tahun }}</option>
                            @endforeach
                        </select>

                        <select id="dusunBirth" class="filter-select">
                            <option value="">Semua Dusun</option>
                            @foreach($dataKelahiran->pluck('dusun')->filter()->map(fn($dusun) => trim($dusun))->unique()->sort() as $dusun)
                                <option value="{{ $dusun }}">{{ $dusun }}</option>
                            @endforeach
                        </select>

                        <button
                            type="button"
                            class="reset-btn"
                            onclick="resetBirthFilter()"
                        >
                            Reset
                        </button>

                    </div>

                </div>


                <p id="birthResult" class="result-info">
                    Menampilkan {{ $totalKelahiran }} data kelahiran.
                </p>


                <div class="table-wrapper">

                    <table>

                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIK Bayi</th>
                                <th>Nama Bayi</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Nama Ayah</th>
                                <th>Nama Ibu</th>
                                <th>No. KK</th>
                                <th>Dusun</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody id="birthTable">

                            @forelse($dataKelahiran as $index => $data)

                                @php
                                    $tanggalLahir = !empty($data->tanggal_lahir)
                                        ? \Carbon\Carbon::parse($data->tanggal_lahir)
                                        : null;

                                    $tahunData = $tanggalLahir
                                        ? $tanggalLahir->format('Y')
                                        : '';

                                    $bulanData = $tanggalLahir
                                        ? $tanggalLahir->format('n')
                                        : '';

                                    $dusunData = trim((string) ($data->dusun ?? ''));

                                    $tanggalTampil = $tanggalLahir
                                        ? $tanggalLahir->format('d-m-Y')
                                        : '-';
                                @endphp

                                <tr
                                    data-search="{{ strtolower(($data->nik_bayi ?? '') . ' ' . ($data->nama_bayi ?? '') . ' ' . ($data->nama_ayah ?? '') . ' ' . ($data->nama_ibu ?? '')) }}"
                                    data-gender="{{ $data->jenis_kelamin ?? '' }}"
                                    data-year="{{ $tahunData }}"
                                    data-month="{{ $bulanData }}"
                                    data-dusun="{{ $dusunData }}"
                                >

                                    <td>{{ $index + 1 }}</td>

                                    <td>{{ $data->nik_bayi ?? '-' }}</td>

                                    <td class="name">
                                        {{ $data->nama_bayi ?? '-' }}
                                    </td>

                                    <td>{{ $data->tempat_lahir ?? '-' }}</td>

                                    <td>{{ $tanggalTampil }}</td>

                                    <td>
                                        <span class="gender">
                                            {{ $data->jenis_kelamin ?? '-' }}
                                        </span>
                                    </td>

                                    <td>{{ $data->nama_ayah ?? '-' }}</td>

                                    <td>{{ $data->nama_ibu ?? '-' }}</td>

                                    <td>{{ $data->no_kk ?? '-' }}</td>

                                    <td>{{ $data->dusun ?? '-' }}</td>

                                    <td>
                                        <button
                                            type="button"
                                            class="detail-btn"
                                            onclick="openBirthDetail(this)"
                                            data-nik="{{ $data->nik_bayi ?? '-' }}"
                                            data-nama="{{ $data->nama_bayi ?? '-' }}"
                                            data-tempat="{{ $data->tempat_lahir ?? '-' }}"
                                            data-tanggal="{{ $tanggalTampil }}"
                                            data-gender="{{ $data->jenis_kelamin ?? '-' }}"
                                            data-ayah="{{ $data->nama_ayah ?? '-' }}"
                                            data-ibu="{{ $data->nama_ibu ?? '-' }}"
                                            data-kk="{{ $data->no_kk ?? '-' }}"
                                            data-dusun="{{ $data->dusun ?? '-' }}"
                                        >
                                            Detail
                                        </button>
                                    </td>

                                </tr>

                            @empty

                                <tr>
                                    <td colspan="11" class="empty-row">
                                        Belum ada data kelahiran.
                                    </td>
                                </tr>

                            @endforelse

                            <tr id="birthEmptyFilter" style="display:none;">
                                <td colspan="11" class="empty-row">
                                    Data kelahiran tidak ditemukan.
                                </td>
                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>

        </section>


    </main>

</div>



<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.7/dist/chart.umd.min.js"></script>

<script>
(function () {
    const canvas = document.getElementById('birthChart');
    const yearSelect = document.getElementById('chartYear');
    const typeSelect = document.getElementById('chartType');

    if (!canvas || typeof Chart === 'undefined') return;

    const labels = @json(array_values($namaBulan));
    const allData = @json($grafikSemuaTahun);
    const allGenderData = @json($grafikGenderSemuaTahun);

    let selectedYear = String(@json($tahunGrafik));
    let selectedType = localStorage.getItem('desa_birth_chart_type') || 'bar';
    let chart = null;

    const green = '#087238';
    const blue = '#3b82f6';
    const pink = '#ec6f9e';
    const grid = '#edf1f4';
    const text = '#70849b';

    function valuesFor(year) {
        return Object.values(allData[year] || Array(12).fill(0)).map(Number);
    }

    function genderFor(year, gender) {
        const data = allGenderData[year] || {};
        return Object.values(data[gender] || Array(12).fill(0)).map(Number);
    }

    function sum(values) {
        return values.reduce((a, b) => a + Number(b || 0), 0);
    }

    function max(values) {
        return Math.max(...values, 0);
    }

    function commonTooltip() {
        return {
            backgroundColor: '#10233f',
            titleColor: '#fff',
            bodyColor: '#fff',
            padding: 11,
            displayColors: true,
            callbacks: {
                label: function (context) {
                    return ' ' + context.dataset.label + ': ' + Number(context.raw || 0) + ' kelahiran';
                }
            }
        };
    }

    function buildChart(type) {
        const totalValues = valuesFor(selectedYear);
        const maleValues = genderFor(selectedYear, 'laki');
        const femaleValues = genderFor(selectedYear, 'perempuan');
        const isDoughnut = type === 'doughnut';
        const isLine = type === 'line';

        if (chart) chart.destroy();

        const wrap = document.querySelector('.chart-wrap');
        if (wrap) wrap.classList.toggle('doughnut-mode', isDoughnut);

        let config;

        if (isDoughnut) {
            const male = sum(maleValues);
            const female = sum(femaleValues);
            const unknown = Math.max(sum(totalValues) - male - female, 0);
            const doughnutValues = [male, female, unknown];

            config = {
                type: 'doughnut',
                data: {
                    labels: ['Laki-laki', 'Perempuan', 'Belum diisi'],
                    datasets: [{
                        data: doughnutValues,
                        backgroundColor: [blue, pink, '#d7dee7'],
                        borderColor: '#fff',
                        borderWidth: 5,
                        hoverOffset: 8,
                        spacing: 2
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    cutout: '67%',
                    radius: '82%',
                    animation: { duration: 500, easing: 'easeOutQuart' },
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                color: text,
                                usePointStyle: true,
                                pointStyle: 'circle',
                                boxWidth: 9,
                                boxHeight: 9,
                                padding: 16,
                                font: { size: 10, weight: '600' }
                            }
                        },
                        tooltip: {
                            backgroundColor: '#10233f',
                            titleColor: '#fff',
                            bodyColor: '#fff',
                            padding: 11,
                            callbacks: {
                                label: function (context) {
                                    const value = Number(context.raw || 0);
                                    const total = sum(doughnutValues);
                                    const percent = total ? ((value / total) * 100).toFixed(1) : '0.0';
                                    return ' ' + value + ' bayi (' + percent + '%)';
                                }
                            }
                        }
                    }
                },
                plugins: [{
                    id: 'birthCenter',
                    afterDraw: function (chartInstance) {
                        const meta = chartInstance.getDatasetMeta(0);
                        if (!meta.data.length) return;
                        const point = meta.data[0];
                        const ctx = chartInstance.ctx;
                        const total = sum(doughnutValues);
                        ctx.save();
                        ctx.textAlign = 'center';
                        ctx.textBaseline = 'middle';
                        ctx.fillStyle = '#10233f';
                        ctx.font = '800 30px Segoe UI, Arial';
                        ctx.fillText(total, point.x, point.y - 7);
                        ctx.fillStyle = '#7186a0';
                        ctx.font = '700 9px Segoe UI, Arial';
                        ctx.fillText('TOTAL KELAHIRAN', point.x, point.y + 15);
                        ctx.restore();
                    }
                }]
            };
        } else if (isLine) {
            config = {
                type: 'line',
                data: {
                    labels,
                    datasets: [
                        {
                            label: 'Total Kelahiran', data: totalValues,
                            borderColor: green, backgroundColor: 'rgba(8,114,56,.08)',
                            borderWidth: 3, pointRadius: 3, pointHoverRadius: 6,
                            pointBackgroundColor: green, pointBorderColor: '#fff',
                            pointBorderWidth: 2, tension: .35, fill: true
                        },
                        {
                            label: 'Laki-laki', data: maleValues,
                            borderColor: blue, backgroundColor: 'rgba(59,130,246,.05)',
                            borderWidth: 2, pointRadius: 3, pointHoverRadius: 5,
                            pointBackgroundColor: blue, pointBorderColor: '#fff',
                            pointBorderWidth: 2, tension: .35, fill: false
                        },
                        {
                            label: 'Perempuan', data: femaleValues,
                            borderColor: pink, backgroundColor: 'rgba(236,111,158,.05)',
                            borderWidth: 2, pointRadius: 3, pointHoverRadius: 5,
                            pointBackgroundColor: pink, pointBorderColor: '#fff',
                            pointBorderWidth: 2, tension: .35, fill: false
                        }
                    ]
                },
                options: monthlyOptions(max(totalValues, max(maleValues), max(femaleValues)), false)
            };
        } else {
            // Batang: laki-laki/perempuan sebagai batang utama + total sebagai garis.
            config = {
                type: 'bar',
                data: {
                    labels,
                    datasets: [
                        {
                            type: 'bar', label: 'Laki-laki', data: maleValues,
                            backgroundColor: blue, borderColor: blue,
                            borderWidth: 1, borderRadius: 6, borderSkipped: false,
                            categoryPercentage: .58, barPercentage: .78, maxBarThickness: 30
                        },
                        {
                            type: 'bar', label: 'Perempuan', data: femaleValues,
                            backgroundColor: pink, borderColor: pink,
                            borderWidth: 1, borderRadius: 6, borderSkipped: false,
                            categoryPercentage: .58, barPercentage: .78, maxBarThickness: 30
                        },
                        {
                            type: 'line', label: 'Total Kelahiran', data: totalValues,
                            borderColor: green, backgroundColor: green,
                            borderWidth: 2.5, pointRadius: 3, pointHoverRadius: 5,
                            pointBackgroundColor: green, pointBorderColor: '#fff',
                            pointBorderWidth: 2, tension: .25, fill: false
                        }
                    ]
                },
                options: monthlyOptions(max(totalValues, max(maleValues), max(femaleValues)), true),
                plugins: [{
                    id: 'barValues',
                    afterDatasetsDraw: function (chartInstance) {
                        const ctx = chartInstance.ctx;
                        ctx.save();
                        ctx.textAlign = 'center';
                        ctx.textBaseline = 'bottom';
                        ctx.font = '700 9px Segoe UI, Arial';
                        ctx.fillStyle = '#526b85';
                        chartInstance.data.datasets.forEach(function (dataset, datasetIndex) {
                            if (dataset.type === 'line') return;
                            const meta = chartInstance.getDatasetMeta(datasetIndex);
                            meta.data.forEach(function (element, index) {
                                const value = Number(dataset.data[index] || 0);
                                if (value <= 0) return;
                                const pos = element.tooltipPosition();
                                ctx.fillText(value, pos.x, pos.y - 5);
                            });
                        });
                        ctx.restore();
                    }
                }]
            };
        }

        chart = new Chart(canvas, config);
    }

    function monthlyOptions(maxValue, groupedBar) {
        const upper = Math.max(maxValue + 1, 2);
        return {
            responsive: true,
            maintainAspectRatio: false,
            animation: { duration: 450, easing: 'easeOutQuart' },
            interaction: { mode: 'index', intersect: false },
            layout: { padding: { top: 14, right: 6, left: 0, bottom: 0 } },
            scales: {
                x: {
                    grid: { display: false },
                    border: { display: false },
                    ticks: {
                        color: text,
                        font: { size: 10, weight: '600' },
                        maxRotation: 0,
                        autoSkip: false
                    }
                },
                y: {
                    beginAtZero: true,
                    suggestedMax: upper,
                    border: { display: false },
                    grid: { color: grid },
                    ticks: {
                        color: '#8293a5',
                        precision: 0,
                        stepSize: 1,
                        font: { size: 10 }
                    }
                }
            },
            plugins: {
                legend: {
                    display: true,
                    position: 'top',
                    align: 'start',
                    labels: {
                        color: '#526b85',
                        usePointStyle: true,
                        pointStyle: 'circle',
                        boxWidth: 8,
                        boxHeight: 8,
                        padding: 14,
                        font: { size: 10, weight: '600' }
                    }
                },
                tooltip: commonTooltip()
            }
        };
    }

    function updateInsights() {
        const totalValues = valuesFor(selectedYear);
        const maleValues = genderFor(selectedYear, 'laki');
        const femaleValues = genderFor(selectedYear, 'perempuan');

        const maxTotal = max(totalValues);
        const maxMale = max(maleValues);
        const maxFemale = max(femaleValues);

        const totalIndex = totalValues.indexOf(maxTotal);
        const maleIndex = maleValues.indexOf(maxMale);
        const femaleIndex = femaleValues.indexOf(maxFemale);

        const totalMonth = maxTotal > 0 ? labels[totalIndex] : '-';
        const maleMonth = maxMale > 0 ? labels[maleIndex] : '-';
        const femaleMonth = maxFemale > 0 ? labels[femaleIndex] : '-';

        const cards = document.querySelectorAll('.birth-insight');
        if (cards.length >= 3) {
            cards[0].querySelector('.insight-value').textContent = totalMonth;
            cards[0].querySelector('.insight-meta').textContent = maxTotal + ' kelahiran · ' + selectedYear;
            cards[1].querySelector('.insight-value').textContent = maleMonth;
            cards[1].querySelector('.insight-meta').textContent = maxMale + ' bayi · ' + selectedYear;
            cards[2].querySelector('.insight-value').textContent = femaleMonth;
            cards[2].querySelector('.insight-meta').textContent = maxFemale + ' bayi · ' + selectedYear;
        }

        const highlight = document.querySelector('.chart-highlight');
        if (highlight) {
            highlight.innerHTML =
                '📊 Tahun <strong>' + selectedYear + '</strong>: kelahiran terbanyak tercatat pada ' +
                '<strong>' + totalMonth + '</strong> dengan <strong>' + maxTotal + '</strong> kelahiran. ' +
                'Grafik memperlihatkan perbandingan laki-laki dan perempuan setiap bulan.';
        }
    }

    if (typeSelect) {
        if (!['bar', 'line', 'doughnut'].includes(selectedType)) selectedType = 'bar';
        typeSelect.value = selectedType;
        typeSelect.addEventListener('change', function () {
            selectedType = this.value;
            localStorage.setItem('desa_birth_chart_type', selectedType);
            buildChart(selectedType);
        });
    }

    if (yearSelect) {
        yearSelect.addEventListener('change', function () {
            selectedYear = String(this.value);
            buildChart(selectedType);
            updateInsights();
        });
    }

    buildChart(selectedType);
    updateInsights();
})();

// ============================================================
// FILTER TABEL DATA KELAHIRAN
// ============================================================
(function () {
    const searchInput = document.getElementById('searchBirth');
    const genderSelect = document.getElementById('genderBirth');
    const yearSelect = document.getElementById('yearBirth');
    const monthSelect = document.getElementById('monthBirth');
    const dusunSelect = document.getElementById('dusunBirth');
    const table = document.getElementById('birthTable');
    const result = document.getElementById('birthResult');
    const emptyFilter = document.getElementById('birthEmptyFilter');

    if (!table) return;

    const rows = Array.from(table.querySelectorAll('tr[data-search]'));

    function normalize(value) {
        return String(value || '').trim().toLowerCase();
    }

    function applyBirthFilter() {
        const search = normalize(searchInput ? searchInput.value : '');
        const gender = normalize(genderSelect ? genderSelect.value : '');
        const year = String(yearSelect ? yearSelect.value : '');
        const month = String(monthSelect ? monthSelect.value : '');
        const dusun = normalize(dusunSelect ? dusunSelect.value : '');

        let visible = 0;

        rows.forEach(function (row) {
            const matchSearch = !search || normalize(row.dataset.search).includes(search);
            const matchGender = !gender || normalize(row.dataset.gender) === gender;
            const matchYear = !year || String(row.dataset.year || '') === year;
            const matchMonth = !month || String(row.dataset.month || '') === month;
            const matchDusun = !dusun || normalize(row.dataset.dusun) === dusun;

            const show = matchSearch && matchGender && matchYear && matchMonth && matchDusun;
            row.style.display = show ? '' : 'none';

            if (show) {
                visible++;
                const numberCell = row.querySelector('td:first-child');
                if (numberCell) numberCell.textContent = visible;
            }
        });

        if (emptyFilter) {
            emptyFilter.style.display = visible === 0 ? '' : 'none';
        }

        if (result) {
            result.textContent = 'Menampilkan ' + visible + ' data kelahiran.';
        }
    }

    window.resetBirthFilter = function () {
        if (searchInput) searchInput.value = '';
        if (genderSelect) genderSelect.value = '';
        if (yearSelect) yearSelect.value = '';
        if (monthSelect) monthSelect.value = '';
        if (dusunSelect) dusunSelect.value = '';
        applyBirthFilter();
    };

    [searchInput, genderSelect, yearSelect, monthSelect, dusunSelect].forEach(function (element) {
        if (!element) return;
        element.addEventListener('input', applyBirthFilter);
        element.addEventListener('change', applyBirthFilter);
    });

    applyBirthFilter();
})();


// ============================================================
// NAVBAR + DROPDOWN PROFIL
// ============================================================
function toggleNavDropdown(button) {
    const dropdown = button.closest('.nav-dropdown');
    if (!dropdown) return;

    // Tutup dropdown lain agar navbar tetap rapi.
    document.querySelectorAll('.nav-dropdown.open').forEach(function (item) {
        if (item !== dropdown) item.classList.remove('open');
    });

    dropdown.classList.toggle('open');
}

function toggleProfileDropdown() {
    const dropdown = document.getElementById('profileDropdown');
    if (!dropdown) return;

    dropdown.classList.toggle('show');
}

// Tutup dropdown profil ketika klik di luar area foto profil.
document.addEventListener('click', function (event) {
    const profileArea = document.querySelector('.profile-area');
    const dropdown = document.getElementById('profileDropdown');

    if (!profileArea || !dropdown) return;

    if (!profileArea.contains(event.target)) {
        dropdown.classList.remove('show');
    }
});
</script>

</html>
