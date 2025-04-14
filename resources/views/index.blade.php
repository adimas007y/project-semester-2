<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Dewantara</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }
        header {
            background: linear-gradient(90deg, #0d6efd, #6610f2);
        }
        .card:hover {
            transform: translateY(-5px);
            transition: 0.3s;
            box-shadow: 0 8px 16px rgba(0,0,0,0.15);
        }
        footer {
            background-color: #343a40;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{route('home')}}">📚 Dewantara Library</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active" href="{{route('home')}}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('book')}}">Buku</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('about')}}">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('kontak')}}">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="text-white text-center py-5">
        <div class="container">
            <h1 class="display-4 fw-bold">Selamat Datang di Perpustakaan Dewantara</h1>
            <p class="lead">"Membaca membuat kita mengetahui isi Dunia!"</p>
        </div>
    </header>

    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-4 fw-semibold">Koleksi Buku Unggulan</h2>
            <div class="row g-4">
                <!-- Loop Buku 1 - 10 -->
                <!-- Ganti judul dan deskripsi sesuai kebutuhan -->
                <!-- Gambar pakai placeholder -->
                <!-- Card 1 sampai 10 -->
                <!-- Card Layout -->
                <!-- 10 buku -->

                <!-- Buku 1 -->
                <div class="col-md-4">
                    <div class="card border-0 h-100 shadow-sm">
                        <img src="https://via.placeholder.com/400x250?text=Buku+1" class="card-img-top" alt="Buku 1">
                        <div class="card-body">
                            <h5 class="card-title">Judul Buku 1</h5>
                            <p class="card-text">Deskripsi singkat buku 1.</p>
                            <a href="#" class="btn btn-outline-primary w-100">Lihat Detail</a>
                        </div>
                    </div>
                </div>

                <!-- Buku 2 -->
                <div class="col-md-4">
                    <div class="card border-0 h-100 shadow-sm">
                        <img src="https://via.placeholder.com/400x250?text=Buku+2" class="card-img-top" alt="Buku 2">
                        <div class="card-body">
                            <h5 class="card-title">Judul Buku 2</h5>
                            <p class="card-text">Deskripsi singkat buku 2.</p>
                            <a href="#" class="btn btn-outline-primary w-100">Lihat Detail</a>
                        </div>
                    </div>
                </div>

                <!-- Buku 3 -->
                <div class="col-md-4">
                    <div class="card border-0 h-100 shadow-sm">
                        <img src="https://via.placeholder.com/400x250?text=Buku+3" class="card-img-top" alt="Buku 3">
                        <div class="card-body">
                            <h5 class="card-title">Judul Buku 3</h5>
                            <p class="card-text">Deskripsi singkat buku 3.</p>
                            <a href="#" class="btn btn-outline-primary w-100">Lihat Detail</a>
                        </div>
                    </div>
                </div>

                <!-- Buku 4 -->
                <div class="col-md-4">
                    <div class="card border-0 h-100 shadow-sm">
                        <img src="https://via.placeholder.com/400x250?text=Buku+4" class="card-img-top" alt="Buku 4">
                        <div class="card-body">
                            <h5 class="card-title">Judul Buku 4</h5>
                            <p class="card-text">Deskripsi singkat buku 4.</p>
                            <a href="#" class="btn btn-outline-primary w-100">Lihat Detail</a>
                        </div>
                    </div>
                </div>

                <!-- Buku 5 -->
                <div class="col-md-4">
                    <div class="card border-0 h-100 shadow-sm">
                        <img src="https://via.placeholder.com/400x250?text=Buku+5" class="card-img-top" alt="Buku 5">
                        <div class="card-body">
                            <h5 class="card-title">Judul Buku 5</h5>
                            <p class="card-text">Deskripsi singkat buku 5.</p>
                            <a href="#" class="btn btn-outline-primary w-100">Lihat Detail</a>
                        </div>
                    </div>
                </div>

                <!-- Buku 6 -->
                <div class="col-md-4">
                    <div class="card border-0 h-100 shadow-sm">
                        <img src="https://via.placeholder.com/400x250?text=Buku+6" class="card-img-top" alt="Buku 6">
                        <div class="card-body">
                            <h5 class="card-title">Judul Buku 6</h5>
                            <p class="card-text">Deskripsi singkat buku 6.</p>
                            <a href="#" class="btn btn-outline-primary w-100">Lihat Detail</a>
                        </div>
                    </div>
                </div>

                <!-- Buku 7 -->
                <div class="col-md-4">
                    <div class="card border-0 h-100 shadow-sm">
                        <img src="https://via.placeholder.com/400x250?text=Buku+7" class="card-img-top" alt="Buku 7">
                        <div class="card-body">
                            <h5 class="card-title">Judul Buku 7</h5>
                            <p class="card-text">Deskripsi singkat buku 7.</p>
                            <a href="#" class="btn btn-outline-primary w-100">Lihat Detail</a>
                        </div>
                    </div>
                </div>

                <!-- Buku 8 -->
                <div class="col-md-4">
                    <div class="card border-0 h-100 shadow-sm">
                        <img src="https://via.placeholder.com/400x250?text=Buku+8" class="card-img-top" alt="Buku 8">
                        <div class="card-body">
                            <h5 class="card-title">Judul Buku 8</h5>
                            <p class="card-text">Deskripsi singkat buku 8.</p>
                            <a href="#" class="btn btn-outline-primary w-100">Lihat Detail</a>
                        </div>
                    </div>
                </div>

                <!-- Buku 9 -->
                <div class="col-md-4">
                    <div class="card border-0 h-100 shadow-sm">
                        <img src="https://via.placeholder.com/400x250?text=Buku+9" class="card-img-top" alt="Buku 9">
                        <div class="card-body">
                            <h5 class="card-title">Judul Buku 9</h5>
                            <p class="card-text">Deskripsi singkat buku 9.</p>
                            <a href="#" class="btn btn-outline-primary w-100">Lihat Detail</a>
                        </div>
                    </div>
                </div>

                <!-- Buku 10 -->
                <div class="col-md-4">
                    <div class="card border-0 h-100 shadow-sm">
                        <img src="https://via.placeholder.com/400x250?text=Buku+10" class="card-img-top" alt="Buku 10">
                        <div class="card-body">
                            <h5 class="card-title">Judul Buku 10</h5>
                            <p class="card-text">Deskripsi singkat buku 10.</p>
                            <a href="#" class="btn btn-outline-primary w-100">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer class="text-white text-center py-3 mt-5">
        <p class="mb-0">&copy; 2023 Perpustakaan Dewantara. All Rights Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
