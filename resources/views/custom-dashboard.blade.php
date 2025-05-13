<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
    <style>
        body {
            background: linear-gradient(135deg, #e0e7ff, #f8f9fa);
            min-height: 100vh;
        }

        .card {
            border: none;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
            border-radius: 1rem;
        }

        .profile-img {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid #0d6efd;
            box-shadow: 0 0 10px rgba(13, 110, 253, 0.4);
        }

        .btn-custom {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }

        .card-header {
            background-color: #0d6efd;
            color: white;
            border-top-left-radius: 1rem;
            border-top-right-radius: 1rem;
        }

        table th {
            width: 150px;
            color: #495057;
        }

        .list-group-item {
            border-left: 5px solid #0d6efd;
            transition: 0.3s ease;
        }

        .list-group-item:hover {
            background-color: #e9f1ff;
        }
    </style>
</head>

<body>
    <div class="container my-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold text-primary"><i class="bi bi-person-circle me-2"></i>Profile Dashboard</h2>
            <a href="{{ url('/') }}" class="btn btn-secondary btn-sm">
                <i class="bi bi-arrow-left-circle me-1"></i> Kembali ke Halaman Utama
            </a>
        </div>

        <div class="row">
            <!-- Profile Summary -->
            <div class="col-md-4 mb-4">
                <div class="card text-center p-4">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSgB730p0ChSl_CNr5N6n05AGzEtEAhFypOFg&s"
                        alt="Profile Picture" class="profile-img mx-auto mb-3">
                    <h4 class="card-title">{{ Auth::user()->name }}</h4>
                    <p class="text-muted">{{ Auth::user()->email }}</p>

                    <form method="GET" action="{{ route('profile.edit') }}" class="d-grid gap-2 mb-2">
                        @csrf
                        <button type="submit" class="btn btn-outline-primary btn-custom">
                            <i class="bi bi-pencil-square"></i> Edit Profile
                        </button>
                    </form>

                    <form method="POST" action="{{ route('logout') }}" class="d-grid gap-2">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-custom">
                            <i class="bi bi-box-arrow-right"></i> Log Out
                        </button>
                    </form>
                </div>
            </div>

            <!-- Detail Info + Activities -->
            <div class="col-md-8">
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="mb-0"><i class="bi bi-info-circle-fill me-2"></i>Profile Details</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-borderless">
                            <tr>
                                <th>Nama Lengkap</th>
                                <td>{{ Auth::user()->name }}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{ Auth::user()->email }}</td>
                            </tr>
                            <tr>
                                <th>No. Telepon</th>
                                <td><span class="text-muted">Coming Soon</span></td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0"><i class="bi bi-clock-history me-2"></i>Aktivitas Terbaru Profile</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item"><i class="bi bi-check-circle me-2 text-success"></i>Dibuat
                            {{ Auth::user()->created_at}}</li>
                            <li class="list-group-item"><i class="bi bi-pencil-square me-2 text-primary"></i>
                                Diperbarui: {{ Auth::user()->updated_at}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
