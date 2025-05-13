<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Daftar Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
    <style>
        body {
            background-color: #f8f9fa;
        }

        .page-header {
            background: linear-gradient(135deg, #0d6efd, #6610f2);
            color: white;
            padding: 4rem 0;
            text-align: center;
            margin-bottom: 2rem;
        }

        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: none;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .badge-type {
            font-size: 0.75rem;
            background-color: #ffc107;
            color: #212529;
        }

        .btn-outline-primary {
            transition: 0.3s;
        }

        .btn-outline-primary:hover {
            background-color: #0d6efd;
            color: white;
        }

        .icon-book {
            font-size: 2rem;
            color: #0d6efd;
        }
    </style>
</head>

<body>
    <header class="page-header">
        <div class="container">
            <h1 class="display-5 fw-bold"><i class="bi bi-journal-bookmark-fill me-2"></i>Daftar Buku</h1>
        </div>
    </header>

    <div class="container">
        @if ($books->isEmpty())
            <div class="alert alert-warning text-center" role="alert">
                Tidak ada buku tersedia.
            </div>
        @else
            <div class="row">
                @foreach ($books as $book)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body d-flex flex-column">
                                <div class="mb-2">
                                    <i class="bi bi-book icon-book"></i>
                                </div>
                                <h5 class="card-title text-primary">{{ $book->judul }}</h5>
                                <p class="card-text mb-1"><strong>Penerbit:</strong> {{ $book->penerbit }}</p>
                                <p class="card-text mb-1"><strong>Penulis:</strong> {{ $book->pencipta }}</p>
                                <span class="badge badge-type align-self-start mb-3">{{ $book->type }}</span>
                                <div class="mt-auto">
                                    <a href="#" class="btn btn-outline-primary btn-sm w-100">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
