<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - LogicGen</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero-bg {
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://cdn.pixabay.com/photo/2024/12/28/01/27/ai-generated-9295105_1280.jpg');
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
        .card-body {
            background: linear-gradient(135deg, #E0F7FA 0%, #B3E5FC 100%);
        }
        .card-title {
            color: #00BFFF;
        }
        .card-text {
            color: #4682B4;
        }
        .btn-custom {
            background: linear-gradient(45deg, #00BFFF, #87CEEB);
            border: none;
            color: white;
            transition: all 0.3s ease;
        }
        .btn-custom:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(0, 191, 255, 0.4);
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
            <a class="navbar-brand fw-bold text-white" href="#">LogicGen Operation</a>
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
                        <a class="nav-link active" aria-current="page" href="kontak">Kontak</a>
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
                    <h1 class="display-4 fw-bold">Hubungi Kami</h1>
                    <p class="lead">Ada pertanyaan atau butuh bantuan? Jangan ragu untuk menghubungi tim LogicGen. Kami siap membantu!</p>
                </div>
            </div>
        </div>
    </section>

    
    <section class="py-5 bg-light">
        <div class="container animate-fade-in">
            <h2 class="text-center mb-5 fw-bold">Informasi Kontak</h2>
            <div class="row">
                <div class="col-md-12">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Informasi Kontak</h5>
                            <img src="/images/rhaya.jpg" alt="Foto Rhaya Wibawareksa" class="img-fluid rounded mb-3" style="max-width: 200px;">
                            <p class="card-text"><strong>Nama:</strong> Rhaya Wibawareksa</p>
                            <p class="card-text"><strong>Telepon:</strong> +62 838-6003-788</p>
                            <p class="card-text"><strong>Email:</strong> rhayawr7@gmail.com</p>
                            <p class="card-text"><strong>Jam Kerja:</strong> Senin - Jumat, 08:00 - 12:00 WIB</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container animate-fade-in">
            <h2 class="text-center mb-5 fw-bold">Informasi Kontak</h2>
            <div class="row">
                <div class="col-md-12">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Informasi Kontak</h5>
                            <img src="/images/Fauzan.jpeg" alt="Foto Fauzan Adriansah" class="img-fluid rounded mb-3" style="max-width: 200px;">
                            <p class="card-text"><strong>Nama:</strong> Fauzan Adriansah</p>
                            <p class="card-text"><strong>Telepon:</strong> +62 812-3456-7890</p>
                            <p class="card-text"><strong>Email:</strong> fauzanadriansah031@gmail.com</p>
                            <p class="card-text"><strong>Jam Kerja:</strong> Senin - Jumat, 12:00 - 17:00 WIB</p>
                        </div>
                    </div>
                </div>
            </div>
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
