<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Bimble Online</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .hero-bg {
            background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('https://png.pngtree.com/back_origin_pic/03/59/76/4b1c43ba785feb0d3b76aa472cbea4b6.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: white;
            min-height: 50vh;
            position: relative;
        }
        .hero-bg::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0,0,0,0.2);
            backdrop-filter: blur(1px);
            z-index: 1;
        }
        .hero-bg .container {
            position: relative;
            z-index: 2;
        }
        .card-dashboard {
            background: linear-gradient(135deg, #3577ea 0%, #4FC3F7 100%);
            color: white;
            border-radius: 15px;
            border: none;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }
        .card-dashboard:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.2);
        }
        .table-custom {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        .table-custom thead {
            background: linear-gradient(135deg, #3577ea 0%, #4FC3F7 100%);
            color: white;
        }
        .table-custom tbody tr {
            border-bottom: 1px solid #e9ecef;
            transition: background-color 0.2s;
        }
        .table-custom tbody tr:hover {
            background-color: #f0f8ff;
        }
        .badge-paket {
            background: linear-gradient(135deg, #00BFFF, #87CEEB);
            color: white;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.85rem;
        }
        .btn-custom {
            background: linear-gradient(45deg, #00BFFF, #87CEEB);
            border: none;
            color: white;
            border-radius: 50px;
            padding: 10px 25px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .btn-custom:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(0, 191, 255, 0.3);
            color: white;
        }
        .stat-card {
            text-align: center;
        }
        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            margin: 15px 0;
        }
        .animate-fade-in {
            animation: fadeIn 1s ease-in;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        .navbar-toggler {
            border: none;
        }
        .navbar-toggler:focus {
            box-shadow: none;
        }
    </style>
</head>
<body>
   
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="#">Bimble Online</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tentang">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="paket">Paket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="diskon">Diskon</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kontak">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="dashboard">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                            @csrf
                            <button type="submit" class="btn btn-link nav-link">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    
    <section class="hero-bg py-5">
        <div class="container animate-fade-in">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold">Dashboard Admin</h1>
                    <p class="lead">Kelola data pendaftaran siswa dan monitor aktivitas bimbel Anda.</p>
                </div>
            </div>
        </div>
    </section>

    
    <section class="py-5" style="background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card card-dashboard stat-card">
                        <div class="card-body">
                            <i class="bi bi-people" style="font-size: 2.5rem;"></i>
                            <h5 class="card-title mt-3">Total Pendaftar</h5>
                            <div class="stat-number">{{ $totalPendaftar ?? 0 }}</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-dashboard stat-card">
                        <div class="card-body">
                            <i class="bi bi-box" style="font-size: 2.5rem;"></i>
                            <h5 class="card-title mt-3">Total Paket</h5>
                            <div class="stat-number">6</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-dashboard stat-card">
                        <div class="card-body">
                            <i class="bi bi-graph-up" style="font-size: 2.5rem;"></i>
                            <h5 class="card-title mt-3">Konversi</h5>
                            <div class="stat-number">{{ $totalPendaftar ? round(($totalPendaftar / 100) * 100, 1) : 0 }}%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   
    <section class="py-5">
        <div class="container">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="bi bi-check-circle"></i> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="bi bi-exclamation-circle"></i> {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <h2 class="mb-4 fw-bold">Data Pendaftar Bimbel</h2>
            
            @if($pendaftaran && count($pendaftaran) > 0)
                <div class="table-responsive table-custom">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Asal Sekolah</th>
                                <th>No. Pribadi</th>
                                <th>No. Wali</th>
                                <th>Email</th>
                                <th>Paket</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pendaftaran as $key => $data)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td><strong>{{ $data->nama }}</strong></td>
                                    <td>{{ $data->asal_sekolah }}</td>
                                    <td>{{ $data->no_pribadi }}</td>
                                    <td>{{ $data->no_wali }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td><span class="badge-paket">{{ $data->pilih_paket }}</span></td>
                                    <td>
                                        <a href="{{ route('pendaftar.show', $data->id) }}" class="btn btn-sm btn-info" title="Detail">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="{{ route('pendaftar.edit', $data->id) }}" class="btn btn-sm btn-warning" title="Edit">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <form method="POST" action="{{ route('pendaftar.destroy', $data->id) }}" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" title="Hapus" onclick="return confirm('Yakin ingin menghapus data ini?')">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="alert alert-info text-center py-5">
                    <i class="bi bi-inbox" style="font-size: 3rem;"></i>
                    <h5 class="mt-3">Belum Ada Data Pendaftar</h5>
                    <p>Data pendaftaran siswa akan ditampilkan di sini.</p>
                </div>
            @endif
        </div>
    </section>

    
    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>Bimble Online</h5>
                    <p>Platform bimbingan belajar online terpercaya.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <ul class="list-unstyled">
                        <li><a href="kontak" class="text-white text-decoration-none">Hubungi Kami</a></li>
                        <li><a href="tentang" class="text-white text-decoration-none">Tentang Kami</a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="text-center">
                <p>&copy; 2026 Bimble Online. All rights reserved.</p>
            </div>
        </div>
    </footer>

    
    <div class="modal fade" id="notifikasiSuccessModal" tabindex="-1" aria-labelledby="notifikasiSuccessLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg">
                <div class="modal-body text-center py-5">
                    <div style="font-size: 3rem; margin-bottom: 1rem;">
                        <i class="bi bi-check-circle text-success"></i>
                    </div>
                    <h5 class="modal-title" id="notifikasiSuccessLabel" style="color: #3577ea; font-weight: bold;">Berhasil!</h5>
                    <p class="text-muted mt-3" id="notifikasiSuccessText"></p>
                    <button type="button" class="btn btn-primary mt-3" style="background: linear-gradient(45deg, #00BFFF, #87CEEB); border: none;" data-bs-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>

    
    <div class="modal fade" id="notifikasiErrorModal" tabindex="-1" aria-labelledby="notifikasiErrorLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg">
                <div class="modal-body text-center py-5">
                    <div style="font-size: 3rem; margin-bottom: 1rem;">
                        <i class="bi bi-x-circle text-danger"></i>
                    </div>
                    <h5 class="modal-title" id="notifikasiErrorLabel" style="color: #dc3545; font-weight: bold;">Error!</h5>
                    <p class="text-muted mt-3" id="notifikasiErrorText"></p>
                    <button type="button" class="btn btn-danger mt-3" data-bs-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        @if(session('success'))
            document.addEventListener('DOMContentLoaded', function() {
                document.getElementById('notifikasiSuccessText').textContent = '{{ session('success') }}';
                const modal = new bootstrap.Modal(document.getElementById('notifikasiSuccessModal'), {
                    backdrop: 'static',
                    keyboard: false
                });
                modal.show();
            });
        @endif

        @if(session('error'))
            document.addEventListener('DOMContentLoaded', function() {
                document.getElementById('notifikasiErrorText').textContent = '{{ session('error') }}';
                const modal = new bootstrap.Modal(document.getElementById('notifikasiErrorModal'), {
                    backdrop: 'static',
                    keyboard: false
                });
                modal.show();
            });
        @endif
    </script>
</body>
</html>
