<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>LokaPreneur</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="/assets/Frame 3.png">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            background: #f4f6f9;
            font-family: 'Segoe UI', sans-serif;
        }

        .sidebar {
            width: 260px;
            min-height: 100vh;
            background: linear-gradient(180deg, #1f2933, #111827);
            color: #fff;
        }

        .sidebar .brand {
            font-size: 22px;
            font-weight: bold;
            padding: 20px;
            color: #ff9800;
        }

.sidebar a {
    color: #cfd8dc;
    padding: 12px 20px;
    display: flex;
    align-items: center;
    text-decoration: none;
    transition: all 0.25s ease;
    position: relative;
}

.sidebar a::before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    height: 100%;
    width: 4px;
    background: #ff9800;
    opacity: 0;
    transition: opacity 0.25s;
}

.sidebar a:hover {
    background: rgba(255,255,255,0.08);
    color: #fff;
    padding-left: 26px;
}

.sidebar a:hover::before {
    opacity: 1;
}


        .content {
            padding: 30px;
        }

        .navbar-top {
            background: #fff;
            padding: 15px 25px;
            border-bottom: 1px solid #ddd;
        }

        .card {
            border: none;
            border-radius: 14px;
        }

        .card-shadow {
            box-shadow: 0 8px 24px rgba(0,0,0,0.05);
        }

        .card-hover {
    transition: all 0.3s ease;
}

.card-hover:hover {
    transform: translateY(-6px);
    box-shadow: 0 16px 32px rgba(0,0,0,0.08);
}


        .brand img {
    transition: transform 0.3s ease;
}

.brand img:hover {
    transform: scale(1.08) rotate(-2deg);
}

.product-card {
    transition: all 0.3s ease;
    overflow: hidden;
}

.product-card img {
    transition: transform 0.4s ease;
}

.product-card:hover img {
    transform: scale(1.08);
}

.product-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 16px 32px rgba(0,0,0,0.12);
}

.btn {
    transition: all 0.2s ease;
}

.btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 16px rgba(0,0,0,0.15);
}

.form-control:focus {
    border-color: #ff9800;
    box-shadow: 0 0 0 0.15rem rgba(255,152,0,.25);
}

/* PAGE TRANSITION */
.page-wrapper {
    opacity: 0;
    transform: translateY(10px);
    animation: pageFadeIn 0.5s ease forwards;
}

@keyframes pageFadeIn {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.brand img {
    background: #ffffff;
    padding: 6px;
    border-radius: 12px;
}

.btn-tambah-produk {
    background-color: #234992;
    border-color: #234992;
    color: #fff;
}

.btn-tambah-produk:hover {
    background-color: #1c3b75;
    border-color: #1c3b75;
    color: #fff;
}

.btn-simpan {
    background-color: #234992;
    border-color: #234992;
    color: #fff;
}

.btn-simpan:hover {
    background-color: #1c3b75;
    border-color: #1c3b75;
    color: #fff;
}

.btn-simpan {
    background-color: #234992;
    border-color: #234992;
    color: #fff;
}


    </style>
</head>
<body>

<div class="d-flex">
    @auth
    <!-- SIDEBAR -->
    <div class="sidebar">
        <div class="brand d-flex align-items-center gap-3">
    <img src="{{ asset('assets/logo-lokapreneur.png') }}"
         alt="LokaPreneur"
         style="height:42px;">
</div>

        <a href="/dashboard"><i class="bi bi-speedometer2"></i> Dashboard</a>
        <a href="/produk"><i class="bi bi-box-seam"></i> Produk</a>
        <a href="/marketplace"><i class="bi bi-shop"></i> Marketplace</a>
        <a href="/laporan">
    <i class="bi bi-file-earmark-text"></i> Laporan Transaksi
</a>


        <hr class="text-secondary mx-3">

        <a href="/logout"
           onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            <i class="bi bi-box-arrow-right"></i> Logout
        </a>

        <form id="logout-form" action="/logout" method="POST">
            @csrf
        </form>
    </div>
    @endauth

    <!-- MAIN -->
    <div class="flex-grow-1">
        <div class="navbar-top d-flex justify-content-between align-items-center">
            <div>
                <strong>Dashboard</strong>
            </div>
            <div>
                {{ auth()->user()->name ?? '' }}
            </div>
        </div>

        <div class="content">
            @yield('content')
        </div>
    </div>
</div>

</body>
</html>
