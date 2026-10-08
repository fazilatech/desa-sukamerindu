<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Profil Desa - Desa Sukamerindu</title>


    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;

            font-family:
                "Segoe UI",
                Arial,
                sans-serif;
        }


        body {

            min-height: 100vh;

            background: #f3f6f9;

            color: #102a43;

        }


        /* =====================================================
           CONTENT
        ====================================================== */

        .page {

            max-width: 1100px;

            margin: 0 auto;

            padding: 55px 30px 80px;

        }


        .page-header {

            margin-bottom: 30px;

        }


        .page-header h1 {

            font-size: 38px;

            font-weight: 800;

            color: #102a43;

            margin-bottom: 10px;

        }


        .page-header p {

            font-size: 16px;

            color: #64748b;

            line-height: 1.7;

        }


        /* =====================================================
           CARD
        ====================================================== */

        .card {

            background: #ffffff;

            border-radius: 16px;

            padding: 32px;

            margin-bottom: 25px;

            border: 1px solid #e5e7eb;

            box-shadow:
                0 8px 25px
                rgba(15, 23, 42, .05);

        }


        .card-title {

            display: flex;

            align-items: center;

            gap: 12px;

            margin-bottom: 18px;

        }


        .card-title .icon {

            width: 42px;

            height: 42px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 10px;

            background: #dcfce7;

            font-size: 21px;

        }


        .card-title h2 {

            font-size: 22px;

            color: #006b3c;

            font-weight: 800;

        }


        .card p {

            color: #64748b;

            font-size: 15px;

            line-height: 1.8;

            margin-bottom: 12px;

        }


        .card p:last-child {

            margin-bottom: 0;

        }


        /* =====================================================
           INFO GRID
        ====================================================== */

        .info-grid {

            display: grid;

            grid-template-columns:
                repeat(2, 1fr);

            gap: 18px;

        }


        .info-item {

            padding: 20px;

            background: #f8fafc;

            border-radius: 12px;

            border: 1px solid #e5e7eb;

        }


        .info-item strong {

            display: block;

            color: #006b3c;

            font-size: 14px;

            margin-bottom: 7px;

        }


        .info-item span {

            color: #64748b;

            font-size: 14px;

            line-height: 1.6;

        }




        /* =====================================================
           APARATUR DESA
        ====================================================== */

        .aparatur-card {
            padding-bottom: 28px;
        }

        .aparatur-carousel {
            position: relative;
            overflow: hidden;
        }

        .aparatur-track {
            display: flex;
            gap: 16px;
            overflow-x: auto;
            scroll-behavior: smooth;
            scroll-snap-type: x mandatory;
            scrollbar-width: none;
            padding: 2px 1px 8px;
        }

        .aparatur-track::-webkit-scrollbar {
            display: none;
        }

        .aparatur-item {
            flex: 0 0 calc((100% - 48px) / 4);
            scroll-snap-align: start;
            min-width: 0;
            border-radius: 8px;
            overflow: hidden;
            background: #ffffff;
            border: 1px solid #e5e7eb;
            box-shadow: 0 4px 12px rgba(15, 23, 42, .06);
        }

        .aparatur-photo {
            width: 100%;
            aspect-ratio: 3 / 4;
            object-fit: cover;
            display: block;
            background: #e5e7eb;
        }

        .aparatur-info {
            padding: 13px 10px 15px;
            text-align: center;
            min-height: 82px;
        }

        .aparatur-jabatan {
            color: #006b3c;
            font-size: 13px;
            font-weight: 700;
            line-height: 1.4;
            margin-bottom: 5px;
        }

        .aparatur-nama {
            color: #475569;
            font-size: 13px;
            line-height: 1.4;
        }

        .aparatur-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 5;
            width: 38px;
            height: 38px;
            border: none;
            border-radius: 50%;
            background: #00804a;
            color: #ffffff;
            font-size: 25px;
            line-height: 1;
            cursor: pointer;
            box-shadow: 0 4px 12px rgba(15, 23, 42, .18);
        }

        .aparatur-btn:hover {
            background: #006b3c;
        }

        .aparatur-btn.prev {
            left: 7px;
        }

        .aparatur-btn.next {
            right: 7px;
        }

        @media (max-width: 900px) {
            .aparatur-item {
                flex-basis: calc((100% - 32px) / 3);
            }
        }

        @media (max-width: 650px) {
            .aparatur-item {
                flex-basis: calc((100% - 16px) / 2);
            }
        }

        @media (max-width: 420px) {
            .aparatur-item {
                flex-basis: 100%;
            }
        }

        /* =====================================================
           RESPONSIVE
        ====================================================== */

        @media (max-width: 700px) {

            .page {

                padding:
                    35px 18px 60px;

            }


            .page-header h1 {

                font-size: 30px;

            }


            .card {

                padding: 23px;

            }


            .info-grid {

                grid-template-columns: 1fr;

            }

        }


        /* =====================================================
           LOKASI / WILAYAH DESA
        ====================================================== */

        .location-grid {
            display: grid;
            grid-template-columns: 1fr 1.45fr;
            gap: 12px;
        }

        .map-box {
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            overflow: hidden;
            background: #ffffff;
        }

        .map-title {
            padding: 9px 10px;
            background: #ffffff;
            color: #08733a;
            font-size: 11px;
            font-weight: 800;
        }

        .map-frame {
            width: 100%;
            height: 245px;
            border: 0;
            display: block;
        }

        .map-description {
            padding: 8px 10px 10px;
            color: #40566d;
            font-size: 10px;
            line-height: 1.5;
        }

        @media (max-width: 900px) {
            .location-grid {
                grid-template-columns: 1fr;
            }
        }

    </style>
    <!-- Leaflet untuk peta wilayah desa -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css">

</head>


<body>

    @php
        // Ambil data aparatur langsung dari tabel yang sama dengan Sekdes.
        // Jadi perubahan foto, nama, dan jabatan otomatis terbaca di halaman publik.
        $aparatur = \Illuminate\Support\Facades\DB::table('aparatur_desa')
            ->orderBy('urutan')
            ->orderBy('id')
            ->get();
    @endphp


    {{-- =====================================================
         NAVBAR
    ====================================================== --}}

    @include('layouts.navigation')



    {{-- =====================================================
         CONTENT
    ====================================================== --}}

    <main class="page">


        {{-- HEADER --}}

        <div class="page-header">

            <h1>
                Profil Desa
            </h1>

            <p>
                Informasi umum mengenai Desa Sukamerindu
                dan pemerintahan desa.
            </p>

        </div>



        {{-- =================================================
             TENTANG DESA
        ================================================== --}}

        <section class="card">

            <div class="card-title">

                <div class="icon">
                    🏛️
                </div>

                <h2>
                    Tentang Desa Sukamerindu
                </h2>

            </div>


            <p>

                Desa Sukamerindu merupakan salah satu desa
                yang berada di wilayah Kabupaten Kepahiang.

                Desa ini memiliki masyarakat yang beragam
                serta mengembangkan berbagai potensi desa
                untuk mendukung kesejahteraan masyarakat.

            </p>


            <p>

                Melalui Sistem Informasi Desa Sukamerindu,
                informasi mengenai pelayanan dan kegiatan
                desa dapat disampaikan kepada masyarakat
                secara lebih mudah dan terintegrasi.

            </p>

        </section>



        {{-- =================================================
             INFORMASI DESA
        ================================================== --}}

        <section class="card">

            <div class="card-title">

                <div class="icon">
                    📋
                </div>

                <h2>
                    Informasi Desa
                </h2>

            </div>


            <div class="info-grid">


                <div class="info-item">

                    <strong>
                        Nama Desa
                    </strong>

                    <span>
                        Desa Sukamerindu
                    </span>

                </div>


                <div class="info-item">

                    <strong>
                        Kabupaten
                    </strong>

                    <span>
                        Kepahiang
                    </span>

                </div>


                <div class="info-item">

                    <strong>
                        Provinsi
                    </strong>

                    <span>
                        Bengkulu
                    </span>

                </div>


                <div class="info-item">

                    <strong>
                        Sistem Informasi
                    </strong>

                    <span>
                        Sistem Informasi Desa Sukamerindu
                    </span>

                </div>


            </div>

        </section>



        {{-- =================================================
             PEMERINTAHAN DESA
        ================================================== --}}

        <section class="card">

            <div class="card-title">

                <div class="icon">
                    👥
                </div>

                <h2>
                    Pemerintahan Desa
                </h2>

            </div>


            <p>

                Pemerintahan Desa Sukamerindu berperan dalam
                memberikan pelayanan administrasi kepada
                masyarakat serta mengelola berbagai kegiatan
                dan program pembangunan desa.

            </p>


            <p>

                Informasi mengenai perangkat desa,
                pelayanan administrasi, dan kegiatan desa
                dapat diakses melalui Sistem Informasi Desa.

            </p>

        </section>



        {{-- =================================================
             APARATUR DESA
        ================================================== --}}

        <section class="card aparatur-card">

            <div class="card-title">

                <div class="icon">
                    👤
                </div>

                <h2>
                    Aparatur Desa
                </h2>

            </div>

            <div class="aparatur-carousel">

                <button
                    type="button"
                    class="aparatur-btn prev"
                    aria-label="Geser ke kiri"
                    onclick="geserAparatur(-1)"
                >
                    ‹
                </button>

                <div class="aparatur-track" id="aparaturTrack">

                    @forelse($aparatur as $item)

                        <div class="aparatur-item">

                            @if($item->foto)
                                <img
                                    class="aparatur-photo"
                                    src="{{ asset('storage/' . $item->foto) }}"
                                    alt="{{ $item->nama }}"
                                >
                            @else
                                <div
                                    class="aparatur-photo"
                                    style="display:flex;align-items:center;justify-content:center;font-size:48px;color:#006b3c;"
                                >
                                    {{ strtoupper(substr($item->nama, 0, 1)) }}
                                </div>
                            @endif

                            <div class="aparatur-info">
                                <div class="aparatur-jabatan">
                                    {{ $item->jabatan }}
                                </div>
                                <div class="aparatur-nama">
                                    {{ $item->nama }}
                                </div>
                            </div>

                        </div>

                    @empty

                        <div style="width:100%;padding:30px;text-align:center;color:#64748b;">
                            Belum ada data aparatur desa.
                        </div>

                    @endforelse

                </div>

                <button
                    type="button"
                    class="aparatur-btn next"
                    aria-label="Geser ke kanan"
                    onclick="geserAparatur(1)"
                >
                    ›
                </button>

            </div>

        </section>




        {{-- =================================================
             LOKASI / WILAYAH DESA
        ================================================== --}}

        <section class="card">

            <div class="card-title">

                <div class="icon">📍</div>

                <h2>
                    Lokasi Desa
                </h2>

            </div>

            <div class="location-grid">

                <div class="map-box">

                    <div class="map-title">
                        📍 LOKASI DESA
                    </div>

                    <iframe
                        class="map-frame"
                        src="https://www.openstreetmap.org/export/embed.html?bbox=102.50%2C-3.70%2C102.60%2C-3.60&amp;layer=mapnik"
                        loading="lazy">
                    </iframe>

                    <div class="map-description">
                        <strong>Desa Sukamerindu</strong><br>
                        Kabupaten Kepahiang, Provinsi Bengkulu.
                    </div>

                </div>

                <div class="map-box">

                    <div class="map-title">
                        🗺️ WILAYAH DESA
                    </div>

                    <div
                        id="wilayahDesaMap"
                        class="map-frame"
                        aria-label="Peta wilayah Desa Sukamerindu">
                    </div>

                    <div class="map-description">
                        <strong>Wilayah Desa Sukamerindu</strong><br>
                        Batas polygon ditampilkan dari data batas administrasi desa BIG.
                    </div>

                </div>

            </div>

        </section>


    </main>


    <script>
        function geserAparatur(arah) {
            const track = document.getElementById('aparaturTrack');

            if (!track) {
                return;
            }

            const item = track.querySelector('.aparatur-item');

            if (!item) {
                return;
            }

            const jarak = item.offsetWidth + 16;

            track.scrollBy({
                left: arah * jarak,
                behavior: 'smooth'
            });
        }
    </script>




    <!-- Leaflet -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

    <!-- Esri Leaflet: membaca SATU polygon desa dari layanan resmi BIG -->
    <script src="https://unpkg.com/esri-leaflet@3.0.17/dist/esri-leaflet.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {

            const mapElement = document.getElementById('wilayahDesaMap');

            if (!mapElement || typeof L === 'undefined') {
                return;
            }

            /*
             * PETA KANAN = WILAYAH DESA
             *
             * Polygon TIDAK dibuat manual.
             * Data diambil dari Feature Layer resmi Badan Informasi Geospasial (BIG).
             *
             * Desa yang ditampilkan hanya:
             * Desa Sukamerindu, Kecamatan Kepahiang, Kabupaten Kepahiang,
             * Provinsi Bengkulu.
             *
             * Kode PUM Desa Sukamerindu:
             * 17.08.04.2023
             *
             * PENTING:
             * Jangan memakai dynamicMapLayer tanpa filter yang benar karena
             * layer BIG berisi banyak desa. Di sini digunakan featureLayer +
             * where agar yang diambil hanya SATU desa tersebut.
             */
            const bigFeatureLayer =
                'https://geoservices.big.go.id/rbi/rest/services/' +
                'BATASWILAYAH/Administrasi_AR_KelDesa_10K/MapServer/0';

            const kodeDesa = '17.08.04.2023';

            const map = L.map('wilayahDesaMap', {
                zoomControl: true,
                attributionControl: true
            });

            /* Basemap OpenStreetMap */
            L.tileLayer(
                'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
                {
                    maxZoom: 19,
                    attribution: '&copy; OpenStreetMap contributors'
                }
            ).addTo(map);

            /*
             * Posisi awal hanya sebagai fallback.
             * Setelah polygon BIG berhasil dimuat, peta otomatis
             * melakukan fitBounds ke batas polygon yang sebenarnya.
             */
            map.setView([-3.6393833, 102.6103233], 13);

            if (!L.esri || !L.esri.featureLayer) {
                console.error('Esri Leaflet gagal dimuat.');
                return;
            }

            /*
             * HANYA ambil polygon dengan KDEPUM Desa Sukamerindu.
             * Jadi desa-desa lain di sekitar Kepahiang TIDAK ikut digambar.
             */
            const wilayahLayer = L.esri.featureLayer({
                url: bigFeatureLayer,
                where: "KDEPUM = '" + kodeDesa + "'",
                style: function () {
                    return {
                        color: '#006b3c',
                        weight: 3,
                        opacity: 1,
                        fillColor: '#22c55e',
                        fillOpacity: 0.20
                    };
                },
                fields: [
                    'NAMOBJ',
                    'KDEPUM',
                    'WADMKD',
                    'WADMKC',
                    'WADMKK',
                    'WADMPR',
                    'LUASWH'
                ],
                attribution: 'Badan Informasi Geospasial (BIG)'
            }).addTo(map);

            /*
             * Setelah polygon SATU desa selesai dimuat,
             * pusatkan peta tepat pada wilayah tersebut.
             */
            wilayahLayer.on('load', function () {

                const bounds = wilayahLayer.getBounds();

                if (bounds && bounds.isValid()) {
                    map.fitBounds(bounds, {
                        padding: [15, 15],
                        maxZoom: 14
                    });
                }

                console.log(
                    'Polygon Desa Sukamerindu berhasil dimuat dari BIG.'
                );
            });

            /* Popup informasi desa */
            wilayahLayer.bindPopup(function (layer) {

                const p = layer.feature && layer.feature.properties
                    ? layer.feature.properties
                    : {};

                return `
                    <strong>Desa ${p.WADMKD || 'Sukamerindu'}</strong><br>
                    Kecamatan ${p.WADMKC || 'Kepahiang'}<br>
                    Kabupaten ${p.WADMKK || 'Kepahiang'}<br>
                    Provinsi ${p.WADMPR || 'Bengkulu'}<br>
                    Kode wilayah: ${p.KDEPUM || kodeDesa}
                `;
            });

            wilayahLayer.on('requesterror', function (error) {
                console.error('Data polygon BIG gagal dimuat:', error);
            });

        });
    </script>

</body>

</html>
