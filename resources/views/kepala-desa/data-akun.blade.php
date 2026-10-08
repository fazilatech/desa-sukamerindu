@extends('layouts.kepala-desa')

@section('title', 'Data Akun Kepala Desa')

@section('topbar-title', 'Data Akun Kepala Desa')

@push('styles')
<style>
    .account-page { max-width: 1050px; margin: 0 auto; }
    .page-heading { margin-bottom: 25px; }
    .page-heading h1 { margin: 0; font-size: 28px; color: #123f6b; font-weight: 800; }
    .page-heading p { margin: 7px 0 0; color: #6b7f93; font-size: 14px; }
    .account-card { background: #fff; border: 1px solid #e3e9ef; border-radius: 14px; box-shadow: 0 4px 14px rgba(18,63,107,.05); padding: 30px; }
    .account-header { display:flex; align-items:center; gap:25px; padding-bottom:25px; border-bottom:1px solid #edf1f5; margin-bottom:28px; }
    .account-photo { width:105px; height:105px; border-radius:50%; background:#dcfce7; color:#087238; display:flex; align-items:center; justify-content:center; font-size:30px; font-weight:800; flex-shrink:0; overflow:hidden; }
    .account-photo img { width:100%; height:100%; object-fit:cover; }
    .account-header-info h2 { margin:0; color:#123f6b; font-size:22px; font-weight:800; }
    .account-header-info p { margin:6px 0 0; color:#6b7f93; font-size:14px; }
    .account-section-title { margin:0 0 20px; color:#123f6b; font-size:18px; font-weight:800; }
    .account-grid { display:grid; grid-template-columns:repeat(2,minmax(0,1fr)); gap:20px 25px; }
    .account-item { display:flex; flex-direction:column; gap:7px; }
    .account-label { font-size:13px; font-weight:700; color:#526b82; }
    .account-value { min-height:43px; padding:11px 14px; background:#f8fafc; border:1px solid #e3e9ef; border-radius:8px; color:#253b53; font-size:14px; }
    .account-role { display:inline-flex; align-items:center; width:fit-content; padding:6px 12px; border-radius:20px; background:#dcfce7; color:#087238; font-size:12px; font-weight:700; }
    .account-actions { display:flex; justify-content:flex-end; gap:10px; margin-top:30px; padding-top:25px; border-top:1px solid #edf1f5; }
    .account-button { border:none; border-radius:8px; padding:11px 17px; font-family:inherit; font-size:13px; font-weight:700; cursor:pointer; text-decoration:none; }
    .button-photo { background:#f0fdf4; color:#087238; border:1px solid #bbf7d0; }
    .button-edit { background:#123f6b; color:#fff; }
    .button-password { background:#f3f4f6; color:#374151; }
    .account-button:hover { opacity:.88; }
    .alert-success { margin-bottom:20px; padding:12px 15px; border-radius:8px; background:#f0fdf4; border:1px solid #bbf7d0; color:#166534; font-size:14px; }
    .alert-error { margin-bottom:20px; padding:12px 15px; border-radius:8px; background:#fef2f2; border:1px solid #fecaca; color:#991b1b; font-size:14px; }
    .alert-error ul { margin:0; padding-left:18px; }
    .modal { display:none; position:fixed; inset:0; z-index:9999; background:rgba(15,23,42,.45); align-items:center; justify-content:center; padding:20px; }
    .modal.show { display:flex; }
    .modal-card { width:100%; max-width:480px; background:#fff; border-radius:14px; box-shadow:0 20px 50px rgba(0,0,0,.18); padding:25px; }
    .modal-header { display:flex; justify-content:space-between; align-items:center; margin-bottom:20px; }
    .modal-header h3 { margin:0; color:#123f6b; font-size:19px; }
    .modal-close { border:0; background:transparent; font-size:24px; color:#64748b; cursor:pointer; }
    .form-group { margin-bottom:16px; }
    .form-group label { display:block; margin-bottom:7px; color:#526b82; font-size:13px; font-weight:700; }
    .form-group input { width:100%; box-sizing:border-box; padding:11px 13px; border:1px solid #dbe3ea; border-radius:8px; outline:none; font-family:inherit; font-size:14px; }
    .form-group input:focus { border-color:#123f6b; }
    .modal-actions { display:flex; justify-content:flex-end; gap:10px; margin-top:22px; }
    .modal-btn { border:0; border-radius:8px; padding:10px 16px; font-size:13px; font-weight:700; cursor:pointer; }
    .modal-cancel { background:#f3f4f6; color:#374151; }
    .modal-submit { background:#123f6b; color:#fff; }
    .current-photo { display:flex; justify-content:center; margin-bottom:18px; }
    .current-photo .account-photo { width:90px; height:90px; font-size:26px; }
    @media (max-width:700px) {
        .account-grid { grid-template-columns:1fr; }
        .account-header { align-items:flex-start; }
        .account-actions { flex-direction:column; }
        .account-button { width:100%; text-align:center; }
    }
</style>
@endpush

@section('content')
<div class="account-page">

    <div class="page-heading">
        <h1>Data Akun Kepala Desa</h1>
        <p>Kelola informasi akun Kepala Desa.</p>
    </div>

    @if(session('success'))
        <div class="alert-success">{{ session('success') }}</div>
    @endif

    @if($errors->any())
        <div class="alert-error">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="account-card">
        <div class="account-header">
            <div class="account-photo">
                @if($akun->profile_photo)
                    <img src="{{ asset('storage/' . $akun->profile_photo) }}" alt="Foto Profil">
                @else
                    {{ strtoupper(substr($akun->name, 0, 2)) }}
                @endif
            </div>
            <div class="account-header-info">
                <h2>{{ $akun->name }}</h2>
                <p>Kepala Desa</p>
            </div>
        </div>

        <h3 class="account-section-title">Informasi Akun</h3>

        <div class="account-grid">
            <div class="account-item">
                <div class="account-label">Nama</div>
                <div class="account-value">{{ $akun->name }}</div>
            </div>

            <div class="account-item">
                <div class="account-label">NIP</div>
                <div class="account-value">{{ $akun->nip ?: 'Belum diisi' }}</div>
            </div>

            <div class="account-item">
                <div class="account-label">Email</div>
                <div class="account-value">{{ $akun->email ?: 'Belum diisi' }}</div>
            </div>

            <div class="account-item">
                <div class="account-label">Jabatan</div>
                <div class="account-value">
                    <span class="account-role">Kepala Desa</span>
                </div>
            </div>
        </div>

        <div class="account-actions">
            <button type="button" class="account-button button-photo" onclick="openModal('photoModal')">📷 Ganti Foto</button>
            <button type="button" class="account-button button-password" onclick="openModal('passwordModal')">🔑 Ganti Password</button>
            <button type="button" class="account-button button-edit" onclick="openModal('editModal')">✏️ Ubah Data</button>
        </div>
    </div>
</div>

{{-- MODAL UBAH DATA --}}
<div class="modal" id="editModal">
    <div class="modal-card">
        <div class="modal-header">
            <h3>Ubah Data Akun</h3>
            <button type="button" class="modal-close" onclick="closeModal('editModal')">&times;</button>
        </div>

        <form method="POST" action="{{ route('kepala-desa.profil.update') }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Nama</label>
                <input id="name" type="text" name="name" value="{{ old('name', $akun->name) }}" required>
            </div>

            <div class="form-group">
                <label for="nip">NIP</label>
                <input id="nip" type="text" name="nip" value="{{ old('nip', $akun->nip) }}" maxlength="30" placeholder="Masukkan NIP">
            </div>

            <div class="modal-actions">
                <button type="button" class="modal-btn modal-cancel" onclick="closeModal('editModal')">Batal</button>
                <button type="submit" class="modal-btn modal-submit">Simpan Perubahan</button>
            </div>
        </form>
    </div>
</div>

{{-- MODAL GANTI FOTO --}}
<div class="modal" id="photoModal">
    <div class="modal-card">
        <div class="modal-header">
            <h3>Ganti Foto Profil</h3>
            <button type="button" class="modal-close" onclick="closeModal('photoModal')">&times;</button>
        </div>

        <div class="current-photo">
            <div class="account-photo">
                @if($akun->profile_photo)
                    <img src="{{ asset('storage/' . $akun->profile_photo) }}" alt="Foto Profil">
                @else
                    {{ strtoupper(substr($akun->name, 0, 2)) }}
                @endif
            </div>
        </div>

        <form method="POST" action="{{ route('kepala-desa.profil.foto') }}" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="foto">Pilih Foto</label>
                <input id="foto" type="file" name="foto" accept=".jpg,.jpeg,.png,.webp" required>
            </div>

            <div class="modal-actions">
                <button type="button" class="modal-btn modal-cancel" onclick="closeModal('photoModal')">Batal</button>
                <button type="submit" class="modal-btn modal-submit">Simpan Foto</button>
            </div>
        </form>
    </div>
</div>

{{-- MODAL GANTI PASSWORD --}}
<div class="modal" id="passwordModal">
    <div class="modal-card">
        <div class="modal-header">
            <h3>Ganti Password</h3>
            <button type="button" class="modal-close" onclick="closeModal('passwordModal')">&times;</button>
        </div>

        <form method="POST" action="{{ route('kepala-desa.profil.password') }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="password_lama">Password Lama</label>
                <input id="password_lama" type="password" name="password_lama" required>
            </div>

            <div class="form-group">
                <label for="password">Password Baru</label>
                <input id="password" type="password" name="password" minlength="8" required>
            </div>

            <div class="form-group">
                <label for="password_confirmation">Konfirmasi Password Baru</label>
                <input id="password_confirmation" type="password" name="password_confirmation" minlength="8" required>
            </div>

            <div class="modal-actions">
                <button type="button" class="modal-btn modal-cancel" onclick="closeModal('passwordModal')">Batal</button>
                <button type="submit" class="modal-btn modal-submit">Simpan Password</button>
            </div>
        </form>
    </div>
</div>

<script>
    function openModal(id) {
        document.getElementById(id).classList.add('show');
    }

    function closeModal(id) {
        document.getElementById(id).classList.remove('show');
    }

    document.querySelectorAll('.modal').forEach(function(modal) {
        modal.addEventListener('click', function(event) {
            if (event.target === modal) {
                modal.classList.remove('show');
            }
        });
    });
</script>
@endsection
