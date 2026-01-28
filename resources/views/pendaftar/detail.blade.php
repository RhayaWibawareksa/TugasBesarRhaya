<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pendaftar - Bimble Online</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .detail-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            padding: 2rem;
        }
        .detail-row {
            border-bottom: 1px solid #e9ecef;
            padding: 1rem 0;
        }
        .detail-row:last-child {
            border-bottom: none;
        }
        .detail-label {
            font-weight: 600;
            color: #3577ea;
            width: 150px;
        }
        .detail-value {
            color: #333;
        }
        .badge-paket {
            background: linear-gradient(135deg, #00BFFF, #87CEEB);
            color: white;
            padding: 8px 15px;
            border-radius: 20px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="#">Bimble Online</a>
            <a href="/dashboard" class="btn btn-outline-primary">Kembali</a>
        </div>
    </nav>

    <section class="py-5" style="background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);">
        <div class="container">
            <div class="detail-card">
                <h2 class="mb-4">Detail Pendaftar</h2>
                
                <div class="detail-row">
                    <div class="d-flex">
                        <span class="detail-label">Nama :</span>
                        <span class="detail-value">{{ $pendaftar->nama }}</span>
                    </div>
                </div>

                <div class="detail-row">
                    <div class="d-flex">
                        <span class="detail-label">Asal Sekolah :</span>
                        <span class="detail-value">{{ $pendaftar->asal_sekolah }}</span>
                    </div>
                </div>

                <div class="detail-row">
                    <div class="d-flex">
                        <span class="detail-label">No. Pribadi :</span>
                        <span class="detail-value">{{ $pendaftar->no_pribadi }}</span>
                    </div>
                </div>

                <div class="detail-row">
                    <div class="d-flex">
                        <span class="detail-label">No. Wali :</span>
                        <span class="detail-value">{{ $pendaftar->no_wali }}</span>
                    </div>
                </div>

                <div class="detail-row">
                    <div class="d-flex">
                        <span class="detail-label">Email :</span>
                        <span class="detail-value">{{ $pendaftar->email }}</span>
                    </div>
                </div>

                <div class="detail-row">
                    <div class="d-flex">
                        <span class="detail-label">Alamat :</span>
                        <span class="detail-value">{{ $pendaftar->alamat }}</span>
                    </div>
                </div>

                <div class="detail-row">
                    <div class="d-flex">
                        <span class="detail-label">Paket :</span>
                        <span class="badge-paket">{{ $pendaftar->pilih_paket }}</span>
                    </div>
                </div>

                <div class="detail-row">
                    <div class="d-flex">
                        <span class="detail-label">Terdaftar :</span>
                        <span class="detail-value">{{ \Carbon\Carbon::parse($pendaftar->created_at)->format('d M Y H:i') }}</span>
                    </div>
                </div>

                <div class="mt-4">
                    <a href="{{ route('pendaftar.edit', $pendaftar->id) }}" class="btn btn-warning">
                        <i class="bi bi-pencil"></i> Edit
                    </a>
                    <form method="POST" action="{{ route('pendaftar.destroy', $pendaftar->id) }}" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">
                            <i class="bi bi-trash"></i> Hapus
                        </button>
                    </form>
                    <a href="/dashboard" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
