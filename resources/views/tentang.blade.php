<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang LogicGen - Platform Belajar Online</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero-bg {
           background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://www.educenter.id/wp-content/uploads/2018/01/Belajar-Anak.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: white;
            min-height: 60vh;
        }
        .feature-icon {
            font-size: 3rem;
            color: #3577ea;
        }
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        .btn-custom {
            background: linear-gradient(45deg, #3a9af9, #00ffc3);
            border: none;
            color: white;
            transition: all 0.3s ease;
        }
        .btn-custom:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(58, 154, 249, 0.4);
        }
        .animate-fade-in {
            animation: fadeIn 1s ease-in;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
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
            <a class="navbar-brand fw-bold text-white">LogicGen Operation</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="tentang">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="paket">Paket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="diskon">Diskon</a>
                    </li>
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="btn btn-link nav-link">Logout</button>
                            </form>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login.post') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    
    <section class="hero-bg py-5">
        <div class="container animate-fade-in">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold">Tentang LogicGen</h1>
                    <p class="lead">LogicGen adalah bimbel yang fokus pada pengembangan logika dan pemecahan masalah. Kami percaya bahwa belajar yang menyenangkan adalah kunci kesuksesan.</p>
                    <a href="paket" class="btn btn-custom btn-lg me-3">Lihat Paket</a>
                </div>
            </div>
        </div>
    </section>

    
    <section class="py-5 bg-light">
        <div class="container animate-fade-in">
            <h2 class="text-center mb-5 fw-bold">Mengenal LogicGen Lebih Dekat</h2>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card h-100 border-0 shadow-sm animate-fade-in" style="animation-delay: 0.2s;">
                        <div class="card-body">
                            <h5 class="card-title">Visi Kami</h5>
                            <p class="card-text">Menjadi bimbel terdepan yang membantu siswa mengembangkan kemampuan logika dan kreativitas dalam menyelesaikan masalah.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card h-100 border-0 shadow-sm animate-fade-in" style="animation-delay: 0.4s;">
                        <div class="card-body">
                            <h5 class="card-title">Misi Kami</h5>
                            <p class="card-text">Menyediakan materi belajar yang interaktif, tutor berpengalaman, dan teknologi pendukung untuk menciptakan pengalaman belajar yang menyenangkan dan efektif.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm animate-fade-in" style="animation-delay: 0.6s;">
                        <div class="card-body text-center">
                            <div class="feature-icon mb-3"></div>
                            <h5 class="card-title">Pendidikan Berkualitas</h5>
                            <p class="card-text">Kurikulum yang disusun oleh ahli pendidikan dengan metode pembelajaran terbaru.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm animate-fade-in" style="animation-delay: 0.8s;">
                        <div class="card-body text-center">
                            <div class="feature-icon mb-3"></div>
                            <h5 class="card-title">Tutor Profesional</h5>
                            <p class="card-text">Tim tutor yang kompeten dan bersertifikat siap membantu Anda belajar.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm animate-fade-in" style="animation-delay: 1s;">
                        <div class="card-body text-center">
                            <div class="feature-icon mb-3"></div>
                            <h5 class="card-title">Teknologi Modern</h5>
                            <p class="card-text">Platform online dengan fitur interaktif dan mudah digunakan di berbagai perangkat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section class="bg-primary text-white py-5 animate-fade-in">
        <div class="container text-center">
            <h2 class="mb-4">Bergabunglah dengan Kami!</h2>
            <p class="lead mb-4">Mulai perjalanan belajar Anda bersama LogicGen hari ini.</p>
            <a href="register" class="btn btn-custom btn-lg">Daftar Sekarang</a>
        </div>
    </section>

    
    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>LogicGen</h5>
                    <p>Pilihan tepat untuk masa depan.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <ul class="list-unstyled">
                        <li><a href="kontak" class="text-white text-decoration-none">Hubungi Kami</a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="text-center">
                <p>&copy; 2026 LogicGen. All rights reserved.</p>
            </div>
        </div>
    </footer>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
