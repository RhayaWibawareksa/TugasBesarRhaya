<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar - Bimbel Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #00BFFF 0%, #87CEEB 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .register-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            padding: 2rem;
            max-width: 400px;
            width: 100%;
        }
        .register-card h2 {
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
    <div class="register-card">
        <h2>Daftar Bimbel Online</h2>

        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('register.store') }}">
            @csrf

            <div class="mb-2">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" 
                       id="nama" name="nama" value="{{ old('nama') }}" required>
                @error('nama') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
            </div>

            <div class="mb-2">
                <label for="asal_sekolah" class="form-label">Asal Sekolah</label>
                <input type="text" class="form-control @error('asal_sekolah') is-invalid @enderror" 
                       id="asal_sekolah" name="asal_sekolah" value="{{ old('asal_sekolah') }}" required>
                @error('asal_sekolah') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
            </div>

            <div class="mb-2">
                <label for="no_pribadi" class="form-label">No. Pribadi</label>
                <input type="tel" class="form-control @error('no_pribadi') is-invalid @enderror" 
                       id="no_pribadi" name="no_pribadi" value="{{ old('no_pribadi') }}" required>
                @error('no_pribadi') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
            </div>

            <div class="mb-2">
                <label for="no_wali" class="form-label">No. Wali/Orang Tua</label>
                <input type="tel" class="form-control @error('no_wali') is-invalid @enderror" 
                       id="no_wali" name="no_wali" value="{{ old('no_wali') }}" required>
                @error('no_wali') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
            </div>

            <div class="mb-2">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" 
                       id="email" name="email" value="{{ old('email') }}" required>
                @error('email') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
            </div>

            <div class="mb-2">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control @error('alamat') is-invalid @enderror" 
                          id="alamat" name="alamat" rows="2" required>{{ old('alamat') }}</textarea>
                @error('alamat') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label for="pilih_paket" class="form-label">Pilih Paket</label>
                <select class="form-select @error('pilih_paket') is-invalid @enderror" 
                        id="pilih_paket" name="pilih_paket" required>
                    <option value="">-- Pilih Paket --</option>
                    <option value="Basic">Basic</option>
                    <option value="Standard">Standard</option>
                    <option value="Premium">Premium</option>
                    <option value="Persiapan Ujian">Persiapan Ujian</option>
                    <option value="Masuk PTN">Masuk PTN</option>
                    <option value="Private">Private</option>
                </select>
                @error('pilih_paket') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
            </div>

            <button type="submit" class="btn btn-custom w-100 mb-2">Daftar</button>
        </form>
    </div>

    
    <div class="modal fade" id="notifikasiModal" tabindex="-1" aria-labelledby="notifikasiLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg">
                <div class="modal-body text-center py-5">
                    <div style="font-size: 3rem; margin-bottom: 1rem;">
                        <i class="bi bi-check-circle text-success"></i>
                    </div>
                    <h5 class="modal-title" id="notifikasiLabel" style="color: #3577ea; font-weight: bold;">Pendaftaran Berhasil!</h5>
                    <p class="text-muted mt-3">Terima kasih telah mendaftar di Bimble Online. Silakan cek email Anda untuk informasi lebih lanjut.</p>
                    <a href="/" class="btn btn-primary mt-3" style="background: linear-gradient(45deg, #00BFFF, #87CEEB); border: none;">Kembali ke Beranda</a>
                </div>
            </div>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">

</body>
</html>
