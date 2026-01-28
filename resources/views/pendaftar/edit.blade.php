<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pendaftar - Bimble Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #00BFFF 0%, #87CEEB 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Poppins', sans-serif;
        }
        .edit-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            padding: 2rem;
            max-width: 500px;
            width: 100%;
        }
        .edit-card h2 {
            color: #3577ea;
            font-weight: bold;
            text-align: center;
            margin-bottom: 1.5rem;
        }
        .btn-custom {
            background: linear-gradient(45deg, #00BFFF, #87CEEB);
            border: none;
            color: white;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .btn-custom:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 191, 255, 0.4);
            color: white;
        }
    </style>
</head>
<body>
    <div class="edit-card">
        <h2>Edit Data Pendaftar</h2>

        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('pendaftar.update', $pendaftar->id) }}">
            @csrf
            @method('PUT')

            <div class="mb-2">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" 
                       id="nama" name="nama" value="{{ $pendaftar->nama }}" required>
                @error('nama') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
            </div>

            <div class="mb-2">
                <label for="asal_sekolah" class="form-label">Asal Sekolah</label>
                <input type="text" class="form-control @error('asal_sekolah') is-invalid @enderror" 
                       id="asal_sekolah" name="asal_sekolah" value="{{ $pendaftar->asal_sekolah }}" required>
                @error('asal_sekolah') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
            </div>

            <div class="mb-2">
                <label for="no_pribadi" class="form-label">No. Pribadi</label>
                <input type="tel" class="form-control @error('no_pribadi') is-invalid @enderror" 
                       id="no_pribadi" name="no_pribadi" value="{{ $pendaftar->no_pribadi }}" required>
                @error('no_pribadi') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
            </div>

            <div class="mb-2">
                <label for="no_wali" class="form-label">No. Wali/Orang Tua</label>
                <input type="tel" class="form-control @error('no_wali') is-invalid @enderror" 
                       id="no_wali" name="no_wali" value="{{ $pendaftar->no_wali }}" required>
                @error('no_wali') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
            </div>

            <div class="mb-2">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" 
                       id="email" name="email" value="{{ $pendaftar->email }}" required>
                @error('email') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
            </div>

            <div class="mb-2">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control @error('alamat') is-invalid @enderror" 
                          id="alamat" name="alamat" rows="2" required>{{ $pendaftar->alamat }}</textarea>
                @error('alamat') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label for="pilih_paket" class="form-label">Pilih Paket</label>
                <select class="form-select @error('pilih_paket') is-invalid @enderror" 
                        id="pilih_paket" name="pilih_paket" required>
                    <option value="">-- Pilih Paket --</option>
                    <option value="Basic" {{ $pendaftar->pilih_paket == 'Basic' ? 'selected' : '' }}>Basic</option>
                    <option value="Standard" {{ $pendaftar->pilih_paket == 'Standard' ? 'selected' : '' }}>Standard</option>
                    <option value="Premium" {{ $pendaftar->pilih_paket == 'Premium' ? 'selected' : '' }}>Premium</option>
                    <option value="Persiapan Ujian" {{ $pendaftar->pilih_paket == 'Persiapan Ujian' ? 'selected' : '' }}>Persiapan Ujian</option>
                    <option value="Masuk PTN" {{ $pendaftar->pilih_paket == 'Masuk PTN' ? 'selected' : '' }}>Masuk PTN</option>
                    <option value="Private" {{ $pendaftar->pilih_paket == 'Private' ? 'selected' : '' }}>Private</option>
                </select>
                @error('pilih_paket') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
            </div>

            <button type="submit" class="btn btn-custom w-100 mb-2">Simpan Perubahan</button>
            <a href="/dashboard" class="btn btn-secondary w-100">Batal</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
