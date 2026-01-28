<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paket - Bimble Online</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
   
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .hero-bg {
            background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('https://img.freepik.com/premium-photo/group-high-school-students-sitting-classroom-writing-notebooks_368093-9542.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: white;
            min-height: 60vh;
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
        .feature-icon {
            font-size: 3rem;
            color: #3577ea;
        }
        .card-body {
            background: linear-gradient(135deg, #E0F7FA 0%, #B3E5FC 100%);
        }
        .paket-card .card-body {
            background: linear-gradient(135deg, #3577ea 0%, #4FC3F7 100%);
            color: white;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.7);
            min-height: 200px;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        .btn-custom {
            background: linear-gradient(45deg, #00BFFF, #87CEEB);
            border: none;
            color: white;
            border-radius: 50px;
            padding: 12px 30px;
            font-weight: 600;
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            box-shadow: 0 4px 15px rgba(0, 191, 255, 0.3);
        }
        .btn-custom:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 8px 25px rgba(0, 191, 255, 0.5);
        }
        .paket-card .btn-custom {
            margin-top: 20px;
        }
        .paket-card:hover {
            transform: translateY(-15px) scale(1.05);
            box-shadow: 0 20px 50px rgba(0,0,0,0.3);
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
        .animate-fade-in {
            animation: fadeIn 1.2s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
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
    
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm" style="background: linear-gradient(45deg, #3577ea, #4FC3F7);">
        <div class="container">
            <a class="navbar-brand fw-bold text-white" href="#">Bimble Online</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="paket">Paket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tentang">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kontak">Kontak</a>
                    </li>
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                                @csrf
                                <button type="submit" class="btn btn-link nav-link">Logout</button>
                            </form>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="login">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="register">Register</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    
    <section class="hero-bg text-white py-5" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://img.freepik.com/premium-photo/group-high-school-students-sitting-classroom-writing-notebooks_368093-9542.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; min-height: 60vh; position: relative;">
        <div class="container animate-fade-in" style="position: relative; z-index: 2;">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold">Paket Bimbingan Terbaik</h1>
                    <p class="lead">Pilih paket pembelajaran yang sesuai dengan kebutuhan Anda. Kami menyediakan berbagai pilihan untuk semua tingkat pendidikan.</p>
                    <a href="#paket-section" class="btn btn-custom btn-lg me-3">Lihat Paket</a>
                    <a href="kontak" class="btn btn-outline-light btn-lg">Hubungi Kami</a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5" id="paket-section" style="background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold animate-fade-in" style="background: linear-gradient(45deg, #3577ea, #4FC3F7); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; text-shadow: none;">Paket Bimbingan Pilihan!</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm paket-card">
                        <div class="card-body text-center">
                            <h5 class="card-title"><i class="bi bi-book"></i> Paket Basic</h5>
                            <p class="card-text"><strong>Rp 99.000</strong> / bulan</p>
                            <p>2 sesi per minggu, 1 tutor pilihan, akses materi dasar, konsultasi chat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm paket-card">
                        <div class="card-body text-center">
                            <h5 class="card-title"><i class="bi bi-star"></i> Paket Standard</h5>
                            <p class="card-text"><strong>Rp 199.000</strong> / bulan</p>
                            <p>4 sesi per minggu, 2 tutor pilihan, akses lengkap, video call unlimited.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm paket-card">
                        <div class="card-body text-center">
                            <h5 class="card-title"><i class="bi bi-gem"></i> Paket Premium</h5>
                            <p class="card-text"><strong>Rp 299.000</strong> / bulan</p>
                            <p>Unlimited sesi, 3+ tutor pilihan, semua materi premium, konsultasi 24/7.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5" style="background: white;">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold animate-fade-in" style="background: linear-gradient(45deg, #3577ea, #4FC3F7); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; text-shadow: none;">Paket Spesial</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm paket-card">
                        <div class="card-body text-center">
                            <h5 class="card-title"><i class="bi bi-pencil-square"></i> Persiapan Ujian</h5>
                            <p class="card-text"><strong>Rp 150.000</strong> / 4 minggu</p>
                            <p>Intensif 3 sesi/minggu, fokus materi ujian, soal latihan UN/UTBK.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm paket-card">
                        <div class="card-body text-center">
                            <h5 class="card-title"><i class="bi bi-mortarboard"></i> Masuk PTN</h5>
                            <p class="card-text"><strong>Rp 499.000</strong> / bulan</p>
                            <p>Program 12 bulan komprehensif, tim spesialis, simulasi SNBT/SBMPTN.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm paket-card">
                        <div class="card-body text-center">
                            <h5 class="card-title"><i class="bi bi-person-hearts"></i> Tutor Private</h5>
                            <p class="card-text"><strong>Rp 249.000</strong> / sesi (60 menit)</p>
                            <p>1 on 1 dengan tutor, fleksibel jadwal, materi sesuai kebutuhan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section class="bg-primary text-white py-5" style="width: 100%; margin-left: calc(-50vw + 50%); padding-left: calc(50vw - 50%); padding-right: calc(50vw - 50%);">
        <div class="container text-center">
            <h2 class="mb-4" style="font-size: 2.5rem; font-weight: bold;">Siap untuk belajar?</h2>
            <p class="lead mb-0" style="font-size: 1.2rem;">Raih masa depan bersama Bimble Online</p>
        </div>
    </section>

    
    <footer class="text-white" style="background-color: #2d3436; width: 100%; margin-left: calc(-50vw + 50%); padding-left: calc(50vw - 50%); padding-right: calc(50vw - 50%);">
        <div class="container py-5">
            <div class="row mb-4">
                <div class="col-md-6">
                    <h5 class="fw-bold" style="font-size: 1.3rem;">Bimble Online</h5>
                    <p style="color: #b2bec3;">Pilihan tepat untuk masa depan.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="kontak" class="text-white text-decoration-none" style="font-size: 1rem;">Hubungi Kami</a>
                </div>
            </div>
            <hr style="border-color: #636e72; margin: 2rem 0;">
            <div class="text-center">
                <p style="color: #b2bec3; margin: 0;">&copy; 2026 Bimble Online. All rights reserved.</p>
            </div>
        </div>
    </footer>

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        function showNotifikasi(paketName) {
            alert('Anda telah memilih paket: ' + paketName + '\nSilakan melanjutkan ke halaman pendaftaran.');
        }

        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.paket-card');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry, index) => {
                    if (entry.isIntersecting) {
                        setTimeout(() => {
                            entry.target.classList.add('animate-fade-in');
                        }, index * 200);
                    }
                });
            }, { threshold: 0.1 });

            cards.forEach(card => observer.observe(card));
        });
    </script>
</body>
</html>
