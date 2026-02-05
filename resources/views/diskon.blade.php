<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diskon - LogicGen</title>
    
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
        .diskon-card .card-body, .diskon-card-third .card-body {
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
        .smart-learning-card .card-body {
            background-image: url('https://lh5.googleusercontent.com/proxy/WfxdcQzuh4hUZW_eYoxEGD0Fknjmr4Udvw4oGpA3n-lVAoLlIFPDv8ZOYD1ZieSmjx5JDOVkanBTln-qweRC5lwtah3zMzJtMSKKDv3Fe1KR867NXc-IGsDX23vB9aRAEkXdQw=w1200-h630-p-k-no-nu');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: white;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.7);
            min-height: 250px;
        }
        .tutor-milenial-card .card-body {
            background-image: url('https://internationalteacherstraining.com/become-our-partner/img/event2.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: white;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.7);
            min-height: 250px;
        }
        .interactive-class-card .card-body {
            background-image: url('https://thumbs.dreamstime.com/b/asian-elementary-school-students-raising-hands-class-primary-pupils-to-answer-questions-88341441.jpg?w=768');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: white;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.7);
            min-height: 250px;
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
        .diskon-card .btn-custom, .diskon-card-third .btn-custom {
            margin-top: 20px;
        }
        .diskon-card:hover, .diskon-card-third:hover {
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
                        <a class="nav-link active" aria-current="page" href="diskon">Diskon</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kontak">Kontak</a>
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
                    <h1 class="display-4 fw-bold">Diskon Spesial LogicGen</h1>
                    <p class="lead">Dapatkan potongan harga hingga 50% untuk paket belajar online kami. Jangan lewatkan kesempatan ini!</p>
                    <a href="paket" class="btn btn-custom btn-lg me-3">Lihat Paket</a>
                    <a href="kontak" class="btn btn-outline-light btn-lg">Hubungi Kami</a>
                </div>
                <div class="col-lg-6 text-center">
                   
                </div>
            </div>
        </div>
    </section>

    
    <section class="py-5" style="background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold animate-fade-in" style="background: linear-gradient(45deg, #3577ea, #4FC3F7); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; text-shadow: none;">Penawaran Diskon!</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm diskon-card">
                        <div class="card-body text-center">
                            <h5 class="card-title"><i class="bi bi-percent"></i> Diskon 30%</h5>
                            <p class="card-text">Untuk paket Matematika SD. Harga normal Rp 500.000, sekarang Rp 350.000.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm diskon-card">
                        <div class="card-body text-center">
                            <h5 class="card-title"><i class="bi bi-percent"></i> Diskon 40%</h5>
                            <p class="card-text">Untuk paket Sains SMP. Harga normal Rp 600.000, sekarang Rp 360.000.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm diskon-card-third">
                        <div class="card-body text-center">
                            <h5 class="card-title"><i class="bi bi-percent"></i> Diskon 50%</h5>
                            <p class="card-text">Untuk paket Lengkap SMA. Harga normal Rp 1.000.000, sekarang Rp 500.000.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section class="bg-primary text-white py-5">
        <div class="container text-center">
            <h2 class="mb-4">Jangan Lewatkan Diskon Terbatas!</h2>
            <p class="lead mb-4">Penawaran ini berlaku hingga 31 Desember 2026.</p>
            <a href="paket" class="btn btn-custom btn-lg">Lihat Paket</a>
        </div>
    </section>

    
    <footer class="text-white" style="background-color: #2d3436; width: 100%; margin-left: calc(-50vw + 50%); padding-left: calc(50vw - 50%); padding-right: calc(50vw - 50%);">
        <div class="container py-5">
            <div class="row mb-4">
                <div class="col-md-6">
                    <h5 class="fw-bold" style="font-size: 1.3rem;">LogicGen</h5>
                    <p style="color: #b2bec3;">Pilihan tepat untuk masa depan.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="kontak" class="text-white text-decoration-none" style="font-size: 1rem;">Hubungi Kami</a>
                </div>
            </div>
            <hr style="border-color: #636e72; margin: 2rem 0;">
            <div class="text-center">
                <p style="color: #b2bec3; margin: 0;">&copy; 2026 LogicGen. All rights reserved.</p>
            </div>
        </div>
    </footer>

  
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.diskon-card, .diskon-card-third');
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
