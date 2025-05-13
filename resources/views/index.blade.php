<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Perpustakaan Dewantara</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }

        .navbar {
            background: linear-gradient(90deg, #0d6efd, #6610f2);
        }

        .navbar .nav-link {
            color: #ffffffcc !important;
        }

        .navbar .nav-link:hover {
            color: #fff !important;
        }

        .hero {
            position: relative;
            background: url('https://via.placeholder.com/1920x700') center/cover no-repeat;
            color: white;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.6);
        }

        .hero::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }

        .hero .container {
            position: relative;
            z-index: 1;
        }

        .hero .btn-light {
            background-color: rgba(255, 255, 255, 0.85);
            border: none;
            transition: 0.3s;
        }

        .hero .btn-light:hover {
            background-color: #ffc107;
            color: #000;
        }

        .section-highlight {
            background: linear-gradient(to right, #f8f9fa, #e9ecef);
            padding: 4rem 0;
        }

        .card {
            border: none;
            transition: transform 0.3s ease-in-out;
        }

        .card:hover {
            transform: translateY(-7px);
        }

        .feature-icon {
            font-size: 2.8rem;
            color: #0d6efd;
            margin-bottom: 1rem;
        }

        footer {
            background-color: #212529;
            color: white;
        }

        footer a {
            color: #adb5bd;
            margin: 0 0.5rem;
            font-size: 1.2rem;
        }

        footer a:hover {
            color: white;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark shadow sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('home') }}">📚 Dewantara Library</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav align-items-lg-center">
                    <li class="nav-item"><a class="nav-link active" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('book') }}">Buku</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('kontak') }}">Kontak</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">Profil</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="hero text-center py-5">
        <div class="container py-5">
            <h1 class="display-4 fw-bold">Selamat Datang di <br><span class="badge bg-primary">Perpustakaan
                    Dewantara</span></h1>
            <p class="lead mt-3">"Membaca membuat kita mengetahui isi Dunia!"</p>
            <a href="{{ route('book') }}" class="btn btn-light btn-lg mt-3">Jelajahi Koleksi Buku</a>
        </div>
    </header>

    <section class="section-highlight text-center">
        <div class="container">
            <h2 class="fw-bold mb-5 text-primary">Kenapa Memilih Kami?</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <div class="feature-icon"><i class="bi bi-book-fill"></i></div>
                            <h5 class="card-title fw-bold text-dark">Koleksi Lengkap</h5>
                            <p class="card-text">Buku dari berbagai genre dan kategori, baik fiksi maupun non-fiksi.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <div class="feature-icon"><i class="bi bi-door-open-fill"></i></div>
                            <h5 class="card-title fw-bold text-dark">Fasilitas Nyaman</h5>
                            <p class="card-text">Lingkungan tenang, tempat duduk nyaman, dan fasilitas modern lainnya.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <div class="feature-icon"><i class="bi bi-wifi"></i></div>
                            <h5 class="card-title fw-bold text-dark">Akses Mudah</h5>
                            <p class="card-text">Lokasi strategis & layanan digital yang mudah diakses kapan saja.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="text-center py-4">
        <div class="container">
            <p class="mb-2">&copy; 2025 Perpustakaan Dewantara. All Rights Reserved.</p>
            <div>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
