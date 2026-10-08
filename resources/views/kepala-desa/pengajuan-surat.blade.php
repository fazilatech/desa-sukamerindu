<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Pengajuan Surat - Kepala Desa</title>


    <style>

        * {
            box-sizing: border-box;
        }


        html,
        body {
            margin: 0;
            padding: 0;
            min-height: 100%;
        }


        body {
            font-family:
                "Segoe UI",
                Arial,
                sans-serif;

            background: #f3f6f9;

            color: #10233f;
        }


        a {
            text-decoration: none;
            color: inherit;
        }




        .page {
            min-height: 100vh;

            display: flex;
        }



        .sidebar {
            width: 300px;

            min-height: 100vh;

            background: #096b35;

            color: white;

            padding:
                36px
                16px
                24px;

            display: flex;

            flex-direction: column;

            flex-shrink: 0;
        }


        .brand {
            text-align: center;

            padding-bottom: 30px;

            border-bottom:
                1px solid
                rgba(255,255,255,.25);
        }


        .logo {
            width: 105px;
            height: 105px;

            object-fit: contain;

            background: white;

            border-radius: 8px;

            padding: 8px;

            display: block;

            margin:
                0 auto
                20px;
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

            color:
                rgba(255,255,255,.9);
        }


        .nav {
            margin-top: 28px;
        }


        .nav-item {
            display: flex;

            align-items: center;

            gap: 15px;

            width: 100%;

            padding:
                14px
                20px;

            margin-bottom: 8px;

            border-radius: 9px;

            color: white;

            font-size: 15px;

            font-weight: 600;

            transition: .2s;
        }


        .nav-item:hover {
            background:
                rgba(255,255,255,.10);
        }


        .nav-item.active {
            background:
                rgba(255,255,255,.16);

            border:
                1px solid
                rgba(255,255,255,.55);
        }


        .nav-icon {
            width: 22px;

            text-align: center;

            font-size: 17px;
        }

        .nav-dropdown {
            margin-bottom: 8px;
        }

        .nav-dropdown-toggle {
            display: flex;
            align-items: center;
            gap: 15px;
            width: 100%;
            padding: 14px 20px;
            border: none;
            border-radius: 9px;
            color: white;
            background: transparent;
            font-family: inherit;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            text-align: left;
        }

        .nav-dropdown-toggle:hover {
            background: rgba(255,255,255,.10);
        }

        .nav-dropdown-toggle.active {
            background: rgba(255,255,255,.16);
            border: 1px solid rgba(255,255,255,.55);
        }

        .nav-dropdown-arrow {
            margin-left: auto;
            font-size: 12px;
            transition: transform .2s;
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
            font-weight: 500;
        }

        .nav-dropdown-menu a:hover,
        .nav-dropdown-menu a.active {
            background: rgba(255,255,255,.10);
        }



        .main {
            flex: 1;

            min-width: 0;
        }


        .topbar {
            height: 84px;

            background: white;

            border-bottom:
                1px solid #e5e7eb;

            display: flex;

            align-items: center;

            justify-content: space-between;

            padding:
                0
                38px;
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

            padding:
                6px
                10px;

            border-radius: 12px;

            transition: .2s;
        }


        .profile:hover {
            background: #f3f4f6;
        }


        .avatar {
            width: 48px;
            height: 48px;

            border-radius: 50%;

            background: #dcfce7;

            color: #087238;

            display: flex;

            align-items: center;

            justify-content: center;

            font-weight: 800;

            font-size: 16px;
        }

        .avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
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


        .profile-dropdown {
            position: absolute;

            top:
                calc(100% + 10px);

            right: 0;

            width: 180px;

            background: white;

            border:
                1px solid #e5e7eb;

            border-radius: 12px;

            box-shadow:
                0 10px 30px
                rgba(15,23,42,.12);

            padding: 8px;

            display: none;

            z-index: 1000;
        }


        .profile-dropdown.show {
            display: block;
        }


        .dropdown-profile {
            display: block;
            width: 100%;
            color: #10233f;
            padding: 11px 12px;
            border-radius: 8px;
            text-align: left;
            font-family: inherit;
            font-size: 14px;
            font-weight: 600;
            transition: .2s;
        }

        .dropdown-profile:hover {
            background: #f3f4f6;
        }

        .dropdown-logout {
            width: 100%;

            border: none;

            background: transparent;

            color: #dc2626;

            padding:
                11px
                12px;

            border-radius: 8px;

            text-align: left;

            font-family: inherit;

            font-size: 14px;

            font-weight: 600;

            cursor: pointer;

            transition: .2s;
        }


        .dropdown-logout:hover {
            background: #fef2f2;
        }



        .content {
            padding:
                48px
                38px;
        }


        .page-heading {
            margin-bottom: 28px;
        }


        .page-heading h1 {
            margin: 0;

            font-size: 32px;

            font-weight: 800;

            color: #10233f;
        }


        .page-heading p {
            margin:
                8px
                0
                0;

            color: #66809d;

            font-size: 15px;
        }


        .stats {
            display: grid;

            grid-template-columns:
                repeat(
                    3,
                    minmax(0,1fr)
                );

            gap: 20px;

            margin-bottom: 24px;
        }


        .stat-card {
            background: white;

            border:
                1px solid #e5e7eb;

            border-radius: 16px;

            padding: 24px;

            box-shadow:
                0 4px 15px
                rgba(15,23,42,.04);
        }


        .stat-icon {
            width: 46px;
            height: 46px;

            border-radius: 12px;

            background: #dcfce7;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 20px;

            margin-bottom: 18px;
        }


        .stat-number {
            margin: 0;

            font-size: 30px;

            font-weight: 800;

            color: #10233f;
        }


        .stat-label {
            margin-top: 5px;

            color: #66809d;

            font-size: 14px;
        }



        .table-card {
            background: white;

            border:
                1px solid #e5e7eb;

            border-radius: 16px;

            padding: 28px;

            box-shadow:
                0 4px 15px
                rgba(15,23,42,.04);
        }


        .table-header {
            display: flex;

            align-items: center;

            justify-content: space-between;

            margin-bottom: 20px;
        }


        .table-title {
            margin: 0;

            color: #10233f;

            font-size: 20px;

            font-weight: 800;
        }


        .search-box {
            width: 180px;

            padding:
                10px
                13px;

            border:
                1px solid #d1d5db;

            border-radius: 8px;

            outline: none;

            font-family: inherit;

            font-size: 12px;
        }


        .search-box:focus {
            border-color: #087238;
        }


        .table-wrapper {
            width: 100%;

            overflow-x: auto;
        }


        table {
            width: 100%;

            border-collapse: collapse;
        }


        th {
            text-align: left;

            padding:
                14px
                12px;

            border-bottom:
                1px solid #e5e7eb;

            color: #526b85;

            font-size: 13px;

            font-weight: 700;
        }


        td {
            padding:
                16px
                12px;

            border-bottom:
                1px solid #f0f2f5;

            color: #526b85;

            font-size: 14px;
        }


        tr:last-child td {
            border-bottom: none;
        }


        .name {
            color: #10233f;

            font-weight: 700;
        }


        .status {
            display: inline-block;

            padding:
                6px
                12px;

            border-radius: 999px;

            background: #fef3c7;

            color: #92400e;

            font-size: 12px;

            font-weight: 700;
        }


        .status.done {
            background: #dcfce7;

            color: #166534;
        }


        .status.cancelled {
            background: #fee2e2;

            color: #991b1b;
        }



        .btn-detail {
            display: inline-block;

            padding:
                7px
                13px;

            border-radius: 7px;

            background: #087238;

            color: white;

            font-size: 12px;

            font-weight: 700;

            transition: .2s;
        }


        .btn-detail:hover {
            background: #065c2e;
        }


        .empty-row {
            text-align: center;

            color: #94a3b8;

            padding:
                30px
                12px;
        }



        @media (max-width: 900px) {

            .sidebar {
                width: 240px;
            }


            .topbar {
                padding:
                    0
                    25px;
            }


            .content {
                padding:
                    35px
                    25px;
            }


            .stats {
                grid-template-columns: 1fr;
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
                padding:
                    25px
                    20px;
            }


            .profile-role {
                display: none;
            }


            .table-header {
                flex-direction: column;

                align-items: flex-start;

                gap: 12px;
            }


            .search-box {
                width: 100%;
            }

        }

    </style>

</head>


<body>


<div class="page">


    <aside class="sidebar">

        <div>

            {{-- BRAND --}}

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



            {{-- NAVIGATION --}}

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
                <a
                    href="{{ route('kepala-desa.data-warga') }}"
                    class="nav-item {{ request()->routeIs('kepala-desa.data-warga*') ? 'active' : '' }}"
                >
                    <span class="nav-icon">👥</span>
                    <span>Data Warga</span>
                </a>

                {{-- PENGUMUMAN DROPDOWN --}}
                <div class="nav-dropdown {{ request()->routeIs('kepala-desa.informasi*', 'kepala-desa.agenda*') ? 'open' : '' }}">
                    <button
                        type="button"
                        class="nav-dropdown-toggle {{ request()->routeIs('kepala-desa.informasi*', 'kepala-desa.agenda*') ? 'active' : '' }}"
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

                {{-- PERIHAL DROPDOWN --}}
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
                        <a href="{{ route('guest.profil-desa') }}">Profil Desa</a>
                        <a href="{{ route('home') }}#visi-misi">Visi &amp; Misi</a>
                        <a href="{{ route('home') }}#perangkat-desa">Struktur Pemerintahan</a>
                    </div>
                </div>

            </nav>

        </div>

    </aside>



    <main class="main">



        <header class="topbar">


            <h2 class="topbar-title">
                Pengajuan Surat
            </h2>



            <div class="profile-area">


                {{-- PROFILE --}}

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



                {{-- DROPDOWN --}}

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


        <section class="content">


            {{-- PAGE HEADING --}}

            <div class="page-heading">

                <h1>
                    Pengajuan Surat
                </h1>

                <p>
                    Kelola dan pantau pengajuan surat administrasi
                    dari warga Desa Sukamerindu.
                </p>

            </div>



            <div class="stats">


                {{-- TOTAL --}}

                <div class="stat-card">

                    <div class="stat-icon">
                        📄
                    </div>


                    <h3
                        class="stat-number"
                        id="totalPengajuan"
                    >
                        0
                    </h3>


                    <div class="stat-label">
                        Total Pengajuan
                    </div>

                </div>



                {{-- DIPROSES --}}

                <div class="stat-card">

                    <div class="stat-icon">
                        ⏳
                    </div>


                    <h3
                        class="stat-number"
                        id="pengajuanDiproses"
                    >
                        0
                    </h3>


                    <div class="stat-label">
                        Sedang Diproses
                    </div>

                </div>



                {{-- SELESAI --}}

                <div class="stat-card">

                    <div class="stat-icon">
                        ✅
                    </div>


                    <h3
                        class="stat-number"
                        id="pengajuanSelesai"
                    >
                        0
                    </h3>


                    <div class="stat-label">
                        Selesai
                    </div>

                </div>


            </div>



            <div class="table-card">


                <div class="table-header">

                    <h3 class="table-title">
                        Daftar Pengajuan Surat
                    </h3>


                    <input
                        type="text"
                        id="searchBox"
                        class="search-box"
                        placeholder="Cari nama warga..."
                    >

                </div>



                <div class="table-wrapper">

                    <table>

                        <thead>

                            <tr>

                                <th>
                                    No
                                </th>

                                <th>
                                    Nama Warga
                                </th>

                                <th>
                                    Jenis Surat
                                </th>

                                <th>
                                    Tanggal
                                </th>

                                <th>
                                    Status
                                </th>

                                <th>
                                    Aksi
                                </th>

                            </tr>

                        </thead>


                        <tbody id="pengajuanTable">

                            <tr>

                                <td
                                    colspan="6"
                                    class="empty-row"
                                >
                                    Memuat data...
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

        if (dropdown) {
            dropdown.classList.toggle('open');
        }

    }



    function toggleProfileDropdown() {

        const dropdown =
            document.getElementById(
                'profileDropdown'
            );

        dropdown.classList.toggle('show');

    }



    document.addEventListener(
        'click',
        function(event) {

            const profileArea =
                document.querySelector(
                    '.profile-area'
                );

            const dropdown =
                document.getElementById(
                    'profileDropdown'
                );


            if (
                profileArea &&
                !profileArea.contains(
                    event.target
                )
            ) {

                dropdown.classList.remove(
                    'show'
                );

            }

        }
    );



    let semuaPengajuan = [];



    function formatJenisSurat(jenis) {

        const jenisSurat = {

            pengantar:
                'Surat Pengantar',

            domisili:
                'Surat Keterangan Domisili',

            usaha:
                'Surat Keterangan Usaha'

        };


        return jenisSurat[jenis]
            ?? jenis;

    }



    function formatTanggal(tanggal) {

        if (!tanggal) {
            return '-';
        }


        const date =
            new Date(
                String(tanggal)
                    .replace(
                        ' ',
                        'T'
                    )
            );


        if (
            isNaN(
                date.getTime()
            )
        ) {

            return tanggal;

        }


        const bulan = [

            'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'

        ];


        return (

            date.getDate()
            + ' '
            + bulan[
                date.getMonth()
            ]
            + ' '
            + date.getFullYear()

        );

    }



    function statusClass(status) {

        const value =
            String(
                status || ''
            ).toLowerCase();


        if (
            value === 'selesai'
            ||
            value === 'completed'
        ) {

            return 'status done';

        }


        if (
            value === 'ditolak'
            ||
            value === 'dibatalkan'
            ||
            value === 'cancelled'
        ) {

            return 'status cancelled';

        }


        return 'status';

    }



    function escapeHtml(value) {

        const div =
            document.createElement(
                'div'
            );


        div.textContent =
            value ?? '';


        return div.innerHTML;

    }




    function renderTable(data) {

        const tbody =
            document.getElementById(
                'pengajuanTable'
            );


        tbody.innerHTML = '';


        if (
            !data ||
            data.length === 0
        ) {

            tbody.innerHTML = `

                <tr>

                    <td
                        colspan="6"
                        class="empty-row"
                    >
                        Belum ada pengajuan surat.
                    </td>

                </tr>

            `;

            return;

        }


        data.forEach(
            function(item, index) {

                const row =
                    document.createElement(
                        'tr'
                    );


                const nama =
                    item.nama_warga
                    ?? 'Warga';


                const jenis =
                    formatJenisSurat(
                        item.jenis_surat
                    );


                const tanggal =
                    formatTanggal(
                        item.diajukan_pada
                    );


                const status =
                    item.status
                    ?? 'Diproses';


                const classStatus =
                    statusClass(
                        status
                    );


                row.innerHTML = `

                    <td>
                        ${index + 1}
                    </td>


                    <td class="name">
                        ${escapeHtml(nama)}
                    </td>


                    <td>
                        ${escapeHtml(jenis)}
                    </td>


                    <td>
                        ${escapeHtml(tanggal)}
                    </td>


                    <td>

                        <span
                            class="${classStatus}"
                        >
                            ${escapeHtml(status)}
                        </span>

                    </td>


                    <td>

                        <a
                            href="/kepala-desa/pengajuan-surat/${item.id}"
                            class="btn-detail"
                        >
                            Lihat
                        </a>

                    </td>

                `;


                tbody.appendChild(
                    row
                );

            }
        );

    }



    async function loadPengajuan() {

        try {

            const response =
                await fetch(
                    "{{ route('kepala-desa.dashboard.data') }}",
                    {
                        method: 'GET',

                        headers: {

                            'Accept':
                                'application/json',

                            'X-Requested-With':
                                'XMLHttpRequest'

                        },

                        cache: 'no-store'
                    }
                );


            if (!response.ok) {

                throw new Error(
                    'Gagal mengambil data.'
                );

            }


            const data =
                await response.json();


            document.getElementById(
                'totalPengajuan'
            ).textContent =
                data.totalPengajuan ?? 0;


            document.getElementById(
                'pengajuanDiproses'
            ).textContent =
                data.pengajuanDiproses ?? 0;


            document.getElementById(
                'pengajuanSelesai'
            ).textContent =
                data.pengajuanSelesai ?? 0;



            semuaPengajuan =
                data.semuaPengajuan
                ??
                data.pengajuanTerbaru
                ??
                [];


            filterPengajuan();


        } catch (error) {

            console.error(
                'Pengajuan error:',
                error
            );

        }

    }



    /* =====================================================
       SEARCH
    ===================================================== */

    function filterPengajuan() {

        const keyword =
            document.getElementById(
                'searchBox'
            ).value
            .toLowerCase()
            .trim();


        if (!keyword) {

            renderTable(
                semuaPengajuan
            );

            return;

        }


        const hasil =
            semuaPengajuan.filter(
                function(item) {

                    return String(
                        item.nama_warga
                        ?? ''
                    )
                    .toLowerCase()
                    .includes(
                        keyword
                    );

                }
            );


        renderTable(
            hasil
        );

    }


    document.getElementById(
        'searchBox'
    ).addEventListener(
        'input',
        filterPengajuan
    );



    loadPengajuan();


    setInterval(
        loadPengajuan,
        3000
    );


</script>


</body>

</html>
