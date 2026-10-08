<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Informasi</title>
    <style>
        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f3f6f9;
            color: #10233f;
        }
        .page { min-height: 100vh; display: flex; }
        .sidebar {
            width: 255px;
            min-height: 100vh;
            background: #087238;
            color: white;
            padding: 30px 14px;
        }
        .brand { text-align: center; padding-bottom: 25px; border-bottom: 1px solid rgba(255,255,255,.25); }
        .logo {
            width: 90px;
            height: 90px;
            object-fit: contain;
            background: white;
            border-radius: 8px;
            padding: 8px;
        }
        .brand-title { margin: 18px 0 8px; font-size: 19px; font-weight: 800; }
        .brand-subtitle { font-size: 13px; }
        .nav { margin-top: 25px; }
        .nav-item {
            display: flex;
            align-items: center;
            gap: 14px;
            width: 100%;
            padding: 14px 20px;
            margin-bottom: 8px;
            border-radius: 9px;
            color: white;
            text-decoration: none;
            font-size: 15px;
            font-weight: 600;
        }
        .nav-item:hover, .nav-item.active { background: rgba(255,255,255,.16); }
        .nav-icon { width: 22px; text-align: center; font-size: 17px; }
        .main { flex: 1; min-width: 0; }
        .topbar {
            height: 84px;
            background: white;
            border-bottom: 1px solid #e5e7eb;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 38px;
        }
        .topbar-title { margin: 0; color: #087238; font-size: 22px; font-weight: 800; }
        .profile { display: flex; align-items: center; gap: 12px; }
        .avatar {
            width: 48px; height: 48px; border-radius: 50%;
            background: #dcfce7; color: #087238;
            display: flex; align-items: center; justify-content: center;
            font-weight: 800;
        }
        .profile-name { font-size: 15px; font-weight: 700; color: #111827; }
        .profile-role { font-size: 13px; color: #6b7280; margin-top: 4px; }
        .content { padding: 48px 38px; }
        .page-heading { margin-bottom: 28px; }
        .page-heading h1 { margin: 0; font-size: 32px; font-weight: 800; }
        .page-heading p { margin: 8px 0 0; color: #66809d; font-size: 15px; }
        .form-card {
            max-width: 900px;
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 16px;
            padding: 28px;
            box-shadow: 0 4px 15px rgba(15,23,42,.04);
        }
        .form-group { margin-bottom: 20px; }
        label { display: block; margin-bottom: 8px; font-size: 14px; font-weight: 700; color: #10233f; }
        input, textarea, select {
            width: 100%;
            border: 1px solid #dbe3ea;
            border-radius: 9px;
            padding: 11px 13px;
            font-family: inherit;
            font-size: 14px;
            outline: none;
            background: white;
        }
        textarea { min-height: 180px; resize: vertical; }
        input:focus, textarea:focus, select:focus { border-color: #087238; }
        .error { margin-top: 6px; color: #b91c1c; font-size: 12px; }
        .actions { display: flex; gap: 10px; justify-content: flex-end; padding-top: 8px; }
        .btn {
            display: inline-block;
            border: none;
            border-radius: 8px;
            padding: 10px 16px;
            font-size: 14px;
            font-weight: 700;
            cursor: pointer;
            text-decoration: none;
        }
        .btn-cancel { background: #eef2f7; color: #475569; }
        .btn-save { background: #087238; color: white; }
        .btn-save:hover { background: #065c2e; }
        @media (max-width: 650px) {
            .page { display: block; }
            .sidebar { width: 100%; min-height: auto; }
            .topbar { height: auto; padding: 20px; }
            .content { padding: 25px 20px; }
            .profile-role { display: none; }
        }
    </style>
</head>
<body>
<div class="page">
    <aside class="sidebar">
        <div class="brand">
            <img
                src="https://cdn.phototourl.com/free/2026-08-19-ada8088c-135b-4f75-94c5-ef27a75114f8.png"
                alt="Logo Kabupaten Kepahiang"
                class="logo"
            >
            <h2 class="brand-title">DESA SUKAMERINDU</h2>
            <div class="brand-subtitle">Sistem Informasi Desa</div>
        </div>

        <nav class="nav">
            <a href="{{ route('kepala-desa.dashboard') }}" class="nav-item">
                <span class="nav-icon">🏠</span>
                <span>Dashboard</span>
            </a>
            <a href="{{ route('kepala-desa.pengajuan') }}" class="nav-item">
                <span class="nav-icon">📄</span>
                <span>Pengajuan Surat</span>
            </a>
            <a href="{{ route('kepala-desa.data-warga') }}" class="nav-item">
                <span class="nav-icon">👥</span>
                <span>Data Warga</span>
            </a>
            <a href="{{ route('kepala-desa.informasi') }}" class="nav-item active">
                <span class="nav-icon">📢</span>
                <span>Informasi</span>
            </a>
        </nav>
    </aside>

    <main class="main">
        <header class="topbar">
            <h2 class="topbar-title">Edit Informasi</h2>
            <div class="profile">
                <div class="avatar">
                    {{ strtoupper(substr(auth()->user()->name, 0, 2)) }}
                </div>
                <div>
                    <div class="profile-name">{{ auth()->user()->name }}</div>
                    <div class="profile-role">Kepala Desa</div>
                </div>
            </div>
        </header>

        <section class="content">
            <div class="page-heading">
                <h1>Edit Informasi</h1>
                <p>Perbarui isi informasi dan tentukan status publikasinya.</p>
            </div>

            <div class="form-card">
                <form method="POST" action="{{ route('kepala-desa.informasi.update', $informasi->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="judul">Judul Informasi</label>
                        <input
                            id="judul"
                            type="text"
                            name="judul"
                            value="{{ old('judul', $informasi->judul) }}"
                            required
                        >
                        @error('judul') <div class="error">{{ $message }}</div> @enderror
                    </div>

                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <input
                            id="kategori"
                            type="text"
                            name="kategori"
                            value="{{ old('kategori', $informasi->kategori) }}"
                            required
                        >
                        @error('kategori') <div class="error">{{ $message }}</div> @enderror
                    </div>

                    <div class="form-group">
                        <label for="isi">Isi Informasi</label>
                        <textarea id="isi" name="isi" required>{{ old('isi', $informasi->isi) }}</textarea>
                        @error('isi') <div class="error">{{ $message }}</div> @enderror
                    </div>

                    <div class="form-group">
                        <label for="status">Status</label>
                        <select id="status" name="status" required>
                            <option value="Publikasi" {{ old('status', $informasi->status) === 'Publikasi' ? 'selected' : '' }}>
                                Publikasi
                            </option>
                            <option value="Draft" {{ old('status', $informasi->status) === 'Draft' ? 'selected' : '' }}>
                                Draft
                            </option>
                        </select>
                        @error('status') <div class="error">{{ $message }}</div> @enderror
                    </div>

                    <div class="actions">
                        <a href="{{ route('kepala-desa.informasi') }}" class="btn btn-cancel">Batal</a>
                        <button type="submit" class="btn btn-save">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </section>
    </main>
</div>
</body>
</html>
