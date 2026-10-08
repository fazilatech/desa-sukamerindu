@extends('layouts.app')

@section('content')

<div style="min-height:100vh; background:#f4f7fb; padding:36px 32px;">

    {{-- HEADER --}}
    <div style="margin-bottom:28px;">
        <h1 style="margin:0 0 8px; color:#17365d; font-size:30px; font-weight:800;">
            Informasi
        </h1>

        <p style="margin:0; color:#6b83a3; font-size:14px;">
            Daftar informasi dan pengumuman yang telah dipublikasikan oleh Kepala Desa.
        </p>
    </div>


    {{-- DAFTAR INFORMASI --}}
    @if($informasi->count() > 0)

        <div style="
            display:grid;
            grid-template-columns:repeat(auto-fit, minmax(360px, 1fr));
            gap:20px;
        ">

            @foreach($informasi as $item)

                <div style="
                    background:#fff;
                    border:1px solid #e5eaf0;
                    border-radius:16px;
                    padding:22px;
                    box-shadow:0 4px 14px rgba(23,54,93,.06);
                ">

                    {{-- BADGE --}}
                    <div style="
                        display:flex;
                        justify-content:space-between;
                        align-items:center;
                        gap:10px;
                        margin-bottom:18px;
                    ">

                        <span style="
                            display:inline-block;
                            padding:6px 11px;
                            border-radius:999px;
                            background:#dcfce7;
                            color:#087443;
                            font-size:12px;
                            font-weight:700;
                        ">
                            {{ $item->kategori ?? 'Informasi' }}
                        </span>

                        <span style="
                            display:inline-block;
                            padding:6px 11px;
                            border-radius:999px;
                            background:#dcfce7;
                            color:#087443;
                            font-size:12px;
                            font-weight:700;
                        ">
                            Publikasi
                        </span>

                    </div>


                    {{-- JUDUL --}}
                    <h2 style="
                        margin:0 0 14px;
                        color:#17365d;
                        font-size:20px;
                        font-weight:800;
                        line-height:1.4;
                    ">
                        {{ $item->judul ?? 'Tanpa Judul' }}
                    </h2>


                    {{-- ISI --}}
                    <div style="
                        color:#667b98;
                        font-size:14px;
                        line-height:1.7;
                        margin-bottom:18px;
                    ">
                        {!! nl2br(e($item->isi ?? '')) !!}
                    </div>


                    {{-- TANGGAL --}}
                    <div style="
                        padding-top:14px;
                        border-top:1px solid #edf0f4;
                        color:#8a9ab0;
                        font-size:12px;
                        margin-bottom:20px;
                    ">
                        Dibuat:
                        {{ !empty($item->created_at)
                            ? \Carbon\Carbon::parse($item->created_at)->translatedFormat('d F Y, H:i')
                            : '-' }}
                    </div>


                    {{-- KOMENTAR --}}
                    <div style="
                        border-top:1px solid #edf0f4;
                        padding-top:18px;
                    ">

                        <div style="
                            font-size:15px;
                            font-weight:800;
                            color:#17365d;
                            margin-bottom:14px;
                        ">
                            💬 Komentar
                        </div>


                        @if(isset($item->komentar_list) && $item->komentar_list->count() > 0)

                            <div style="
                                display:flex;
                                flex-direction:column;
                                gap:10px;
                            ">

                                @foreach($item->komentar_list as $komentar)

                                    <div style="
                                        background:#f8fafc;
                                        border:1px solid #edf0f4;
                                        border-radius:10px;
                                        padding:11px 13px;
                                    ">

                                        <div style="
                                            display:flex;
                                            justify-content:space-between;
                                            align-items:center;
                                            gap:10px;
                                            margin-bottom:5px;
                                        ">

                                            <span style="
                                                font-size:13px;
                                                font-weight:700;
                                                color:#17365d;
                                            ">
                                                {{ $komentar->nama_pengguna ?? 'Pengguna' }}
                                            </span>

                                            <span style="
                                                font-size:11px;
                                                color:#94a3b8;
                                            ">
                                                {{ !empty($komentar->created_at)
                                                    ? \Carbon\Carbon::parse($komentar->created_at)->translatedFormat('d M Y, H:i')
                                                    : '-' }}
                                            </span>

                                        </div>


                                        <div style="
                                            font-size:13px;
                                            line-height:1.6;
                                            color:#5f718a;
                                        ">
                                            {{ $komentar->komentar ?? '' }}
                                        </div>

                                    </div>

                                @endforeach

                            </div>

                        @else

                            <div style="
                                background:#f8fafc;
                                border:1px dashed #dce3eb;
                                border-radius:10px;
                                padding:13px;
                                color:#94a3b8;
                                font-size:13px;
                                text-align:center;
                            ">
                                Belum ada komentar.
                            </div>

                        @endif

                    </div>

                </div>

            @endforeach

        </div>

    @else

        {{-- BELUM ADA INFORMASI --}}
        <div style="
            background:#fff;
            border:1px solid #e5eaf0;
            border-radius:16px;
            padding:50px 25px;
            text-align:center;
            box-shadow:0 4px 14px rgba(23,54,93,.05);
        ">

            <div style="
                font-size:42px;
                margin-bottom:12px;
            ">
                📢
            </div>

            <h2 style="
                margin:0 0 8px;
                color:#17365d;
                font-size:20px;
            ">
                Belum Ada Pengumuman
            </h2>

            <p style="
                margin:0;
                color:#8a9ab0;
                font-size:14px;
            ">
                Belum ada informasi yang dipublikasikan oleh Kepala Desa.
            </p>

        </div>

    @endif

</div>

@endsection
