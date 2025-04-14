<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar-brand img {
            height: 40px;
        }
        .card img {
            height: 200px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://via.placeholder.com/150x40" alt="Logo Perpustakaan">
                Perpustakaan
            </a>
        </div>
    </nav>

    <div class="container mt-5">
        <h1 class="text-center mb-4">Selamat Datang di Perpustakaan</h1>

        <!-- Search Bar -->
        <div class="row mb-4">
            <div class="col-md-6 offset-md-3">
                <form action="#" method="GET">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Cari buku..." name="search">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Daftar Buku -->
        <div class="row">
            <!-- Contoh Buku 1 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Buku 1">
                    <div class="card-body">
                        <h5 class="card-title">Judul Buku 1</h5>
                        <p class="card-text">Deskripsi singkat tentang buku 1.</p>
                        <a href="#" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
            <!-- Contoh Buku 2 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Buku 2">
                    <div class="card-body">
                        <h5 class="card-title">Judul Buku 2</h5>
                        <p class="card-text">Deskripsi singkat tentang buku 2.</p>
                        <a href="#" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
            <!-- Contoh Buku 3 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Buku 3">
                    <div class="card-body">
                        <h5 class="card-title">Judul Buku 3</h5>
                        <p class="card-text">Deskripsi singkat tentang buku 3.</p>
                        <a href="#" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
