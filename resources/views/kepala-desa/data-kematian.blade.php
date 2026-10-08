<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Data Kematian - Kepala Desa</title>

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
                Data Kematian
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
                $dataKematian = collect($kematian ?? []);
                $totalKematian = $dataKematian->count();

                $totalLaki = $dataKematian
                    ->filter(function ($item) {
                        return strtolower(trim($item->jenis_kelamin ?? '')) === 'laki-laki';
                    })
                    ->count();

                $totalPerempuan = $dataKematian
                    ->filter(function ($item) {
                        return strtolower(trim($item->jenis_kelamin ?? '')) === 'perempuan';
                    })
                    ->count();

                $namaBulan = [
                    1 => 'Jan', 2 => 'Feb', 3 => 'Mar', 4 => 'Apr',
                    5 => 'Mei', 6 => 'Jun', 7 => 'Jul', 8 => 'Agu',
                    9 => 'Sep', 10 => 'Okt', 11 => 'Nov', 12 => 'Des',
                ];

                $tahunTersedia = range(1960, now()->year);
                rsort($tahunTersedia);
            @endphp

            <div class="page-heading">
                <h1>Data Kematian</h1>
                <p>Kelola dan pantau data kematian warga Desa Sukamerindu.</p>
            </div>

            <div class="stats-grid">

                <div class="stat-card">
                    <div class="stat-icon">⚰️</div>
                    <div class="stat-number">{{ $totalKematian }}</div>
                    <div class="stat-label">Total Data Kematian</div>
                </div>

                <div class="stat-card">
                    <div class="stat-icon">👨</div>
                    <div class="stat-number">{{ $totalLaki }}</div>
                    <div class="stat-label">Laki-laki</div>
                </div>

                <div class="stat-card">
                    <div class="stat-icon">👩</div>
                    <div class="stat-number">{{ $totalPerempuan }}</div>
                    <div class="stat-label">Perempuan</div>
                </div>

            </div>

            <div class="table-card">

                <div class="table-toolbar">
                    <div>
                        <h2 class="table-title">Daftar Data Kematian</h2>
                        <p class="table-description">
                            Data penduduk yang telah meninggal dunia di Desa Sukamerindu.
                        </p>
                    </div>

                    <div class="filter-group">
                        <input
                            type="text"
                            id="searchDeath"
                            class="filter-input"
                            placeholder="🔎 Cari nama / NIK..."
                        >

                        <select id="genderDeath" class="filter-select">
                            <option value="">Semua Jenis Kelamin</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>

                        <select id="monthDeath" class="filter-select">
                            <option value="">Semua Bulan</option>
                            @foreach($namaBulan as $nomor => $bulan)
                                <option value="{{ $nomor }}">{{ $bulan }}</option>
                            @endforeach
                        </select>

                        <select id="yearDeath" class="filter-select">
                            <option value="">Semua Tahun</option>
                            @foreach($tahunTersedia as $tahun)
                                <option value="{{ $tahun }}">{{ $tahun }}</option>
                            @endforeach
                        </select>

                        <button
                            type="button"
                            class="reset-btn"
                            onclick="resetDeathFilter()"
                        >
                            Reset
                        </button>
                    </div>
                </div>

                <p id="deathResult" class="result-info">
                    Menampilkan {{ $totalKematian }} data kematian.
                </p>

                <div class="table-wrapper">
                    <table>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Tanggal Lahir</th>
                                <th>Tempat Meninggal</th>
                                <th>Tanggal Meninggal</th>
                                <th>Sebab Kematian</th>
                                <th>Alamat</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>

                        <tbody id="deathTable">
                            @forelse($dataKematian as $index => $data)

                                @php
                                    $tanggalMeninggal = !empty($data->tanggal_meninggal)
                                        ? \Carbon\Carbon::parse($data->tanggal_meninggal)
                                        : null;

                                    $tanggalLahir = !empty($data->tanggal_lahir)
                                        ? \Carbon\Carbon::parse($data->tanggal_lahir)
                                        : null;

                                    $tahunData = $tanggalMeninggal
                                        ? $tanggalMeninggal->format('Y')
                                        : '';

                                    $bulanData = $tanggalMeninggal
                                        ? $tanggalMeninggal->format('n')
                                        : '';

                                    $tanggalMeninggalTampil = $tanggalMeninggal
                                        ? $tanggalMeninggal->format('d-m-Y')
                                        : '-';

                                    $tanggalLahirTampil = $tanggalLahir
                                        ? $tanggalLahir->format('d-m-Y')
                                        : '-';
                                @endphp

                                <tr
                                    data-search="{{ strtolower(($data->nik ?? '') . ' ' . ($data->nama ?? '')) }}"
                                    data-gender="{{ $data->jenis_kelamin ?? '' }}"
                                    data-year="{{ $tahunData }}"
                                    data-month="{{ $bulanData }}"
                                >
                                    <td>{{ $index + 1 }}</td>

                                    <td>{{ $data->nik ?? '-' }}</td>

                                    <td class="name">
                                        {{ $data->nama ?? '-' }}
                                    </td>

                                    <td>
                                        <span class="gender">
                                            {{ $data->jenis_kelamin ?? '-' }}
                                        </span>
                                    </td>

                                    <td>{{ $tanggalLahirTampil }}</td>
                                    <td>{{ $data->tempat_meninggal ?? '-' }}</td>
                                    <td>{{ $tanggalMeninggalTampil }}</td>
                                    <td>{{ $data->sebab_kematian ?? '-' }}</td>
                                    <td>{{ $data->alamat ?? '-' }}</td>
                                    <td>{{ $data->keterangan ?? '-' }}</td>
                                </tr>

                            @empty
                                <tr>
                                    <td colspan="10" class="empty-row">
                                        Belum ada data kematian.
                                    </td>
                                </tr>
                            @endforelse

                            <tr id="deathEmptyFilter" style="display:none;">
                                <td colspan="10" class="empty-row">
                                    Data kematian tidak ditemukan.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>

        </section>

    </main>

</div>

<script>
    function toggleNavDropdown(button) {
        const dropdown = button.closest('.nav-dropdown');
        if (!dropdown) return;

        dropdown.classList.toggle('open');
    }

    function toggleProfileDropdown() {
        const dropdown = document.getElementById('profileDropdown');
        if (!dropdown) return;

        dropdown.classList.toggle('show');
    }

    document.addEventListener('click', function (event) {
        const profileArea = document.querySelector('.profile-area');
        const dropdown = document.getElementById('profileDropdown');

        if (
            dropdown &&
            profileArea &&
            !profileArea.contains(event.target)
        ) {
            dropdown.classList.remove('show');
        }
    });

    (function () {
        const searchInput = document.getElementById('searchDeath');
        const genderSelect = document.getElementById('genderDeath');
        const monthSelect = document.getElementById('monthDeath');
        const yearSelect = document.getElementById('yearDeath');
        const result = document.getElementById('deathResult');
        const emptyFilter = document.getElementById('deathEmptyFilter');
        const rows = Array.from(document.querySelectorAll('#deathTable tr[data-search]'));

        function applyDeathFilter() {
            const search = (searchInput?.value || '').toLowerCase().trim();
            const gender = genderSelect?.value || '';
            const month = monthSelect?.value || '';
            const year = yearSelect?.value || '';
            let visible = 0;

            rows.forEach(function (row) {
                const matchesSearch = !search || row.dataset.search.includes(search);
                const matchesGender = !gender || row.dataset.gender === gender;
                const matchesMonth = !month || row.dataset.month === month;
                const matchesYear = !year || row.dataset.year === year;

                const show = matchesSearch && matchesGender && matchesMonth && matchesYear;
                row.style.display = show ? '' : 'none';

                if (show) {
                    visible++;
                    const numberCell = row.querySelector('td:first-child');
                    if (numberCell) numberCell.textContent = visible;
                }
            });

            if (emptyFilter) {
                emptyFilter.style.display = visible === 0 && rows.length > 0 ? '' : 'none';
            }

            if (result) {
                result.textContent = 'Menampilkan ' + visible + ' data kematian.';
            }
        }

        window.resetDeathFilter = function () {
            if (searchInput) searchInput.value = '';
            if (genderSelect) genderSelect.value = '';
            if (monthSelect) monthSelect.value = '';
            if (yearSelect) yearSelect.value = '';
            applyDeathFilter();
        };

        [searchInput, genderSelect, monthSelect, yearSelect].forEach(function (element) {
            if (!element) return;
            element.addEventListener('input', applyDeathFilter);
            element.addEventListener('change', applyDeathFilter);
        });

        applyDeathFilter();
    })();
</script>

</body>
</html>
