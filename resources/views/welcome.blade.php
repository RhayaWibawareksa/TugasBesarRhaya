<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bimble Online - Landing Page</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero-bg {
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://lh3.googleusercontent.com/Q7h_pz1CZP1pr1BiRXJS5-otc3RxuB8fKHN8y0vA9yCm2twe-m_6BaTE5GIqSuZ48tR97as_WRC7feDBp4f2ApStHtFyhmK0-UfWis6unr9gyzeDFQRA8QKBTq9mBa920yy7K2NSEzwItoNpQbKPeQs');
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
                        <a class="nav-link active text-white" aria-current="page" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="tentang">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="paket">Paket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="diskon">Diskon</a>
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
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold">Belajar Matematika & Sains Lebih Mudah</h1>
                    <p class="lead">Platform belajar online dengan metode interaktif, tutor berpengalaman, dan materi yang menarik untuk siswa sekolah.</p>
                    <a href="register" class="btn btn-outline-light btn-lg me-3">Mulai Belajar</a>
                    <a href="tentang" class="btn btn-outline-light btn-lg">Pelajari Lebih Lanjut</a>
                </div>
            </div>
        </div>
    </section>

    
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold">Kenapa Pilih LogicGen?</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm smart-learning-card">
                        <div class="card-body text-center">
                            <div class="feature-icon mb-3">
                            </div>
                            <h5 class="card-title">Smart Learning Method</h5>
                            <p class="card-text">Belajar jadi lebih terstruktur dan masuk akal.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm tutor-milenial-card">
                        <div class="card-body text-center">
                            <div class="feature-icon mb-3">
                                
                            </div>
                            <h5 class="card-title">Tutor Milenial</h5>
                            <p class="card-text">Kakak pengajar yang asik, kompeten, dan update sama kurikulum terbaru.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm interactive-class-card">
                        <div class="card-body text-center">
                            <h5 class="card-title">Interactive Class</h5>
                            <p class="card-text">Kelas seru dengan dukungan teknologi pendukung belajar.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold">Apa Kata Siswa Kami?</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <p class="card-text">"LogicGen bikin belajar matematika jadi seru! Tutornya asik dan jelasinnya gampang dipahami."</p>
                            <h6 class="card-title">- Daffa, Siswa SMA</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <p class="card-text">"Materi lengkap dan ada video pembelajaran. Nilai saya naik drastis setelah ikut kelas di sini."</p>
                            <h6 class="card-title">- Putri, Siswa SMA</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <p class="card-text">"Platformnya user-friendly dan bisa diakses kapan saja. Recommended buat persiapan ujian!"</p>
                            <h6 class="card-title">- Rafi, Siswa SMA</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section class="bg-primary text-white py-5">
        <div class="container text-center">
            <h2 class="mb-4">Siap untuk belajar?</h2>
            <p class="lead mb-4">Raih masa depan bersama LogicGen</p>
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

    
    <div class="modal fade" id="notifikasiDaftarModal" tabindex="-1" aria-labelledby="notifikasiLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg">
                <div class="modal-body text-center py-5">
                    <div style="font-size: 3rem; margin-bottom: 1rem;">
                        <i class="bi bi-check-circle text-success"></i>
                    </div>
                    <h5 class="modal-title" id="notifikasiLabel" style="color: #3577ea; font-weight: bold;">Pendaftaran Berhasil!</h5>
                    <p class="text-muted mt-3">{{ session('success') }}</p>
                    <a href="/" class="btn btn-primary mt-3" style="background: linear-gradient(45deg, #00BFFF, #87CEEB); border: none;">Lanjutkan</a>
                </div>
            </div>
        </div>
    </div>

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        @if(session('success'))
            document.addEventListener('DOMContentLoaded', function() {
                const modal = new bootstrap.Modal(document.getElementById('notifikasiDaftarModal'), {
                    backdrop: 'static',
                    keyboard: false
                });
                modal.show();
            });
        @endif
    </script>
</body>
</html>