<!DOCTYPE html>
<html>
<head>
    <title>Login - LokaPreneur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center vh-100">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card card-shadow p-4">
                <div class="text-center mb-3">
    <img src="{{ asset('assets/logo-lokapreneur.png') }}"
         alt="LokaPreneur"
         style="height:40px;">
</div>

<h3 class="text-center mb-4 text-warning"></h3>

                @if(session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif

                <form method="POST" action="/login">
                    @csrf
                    <input class="form-control mb-3" name="email" placeholder="Email">
                    <input class="form-control mb-3" type="password" name="password" placeholder="Password">
                    <button class="btn w-100"
        style="background:#234992;color:white;">
    Masuk
</button>

                </form>

                <p class="text-center mt-3">
                    Belum punya akun? <a href="/register">Daftar</a>
                </p>
            </div>
        </div>
    </div>
</div>

</body>
</html>
