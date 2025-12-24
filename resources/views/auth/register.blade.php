<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center vh-100">
<div class="container">
<div class="row justify-content-center">
<div class="col-md-4 card shadow p-4">
<div class="text-center mb-3">
    <img src="{{ asset('assets/logo-lokapreneur.png') }}"
         alt="LokaPreneur"
         style="height:40px;">
</div>

<form method="POST" action="/register">
@csrf
<input class="form-control mb-2" name="name" placeholder="Nama">
<input class="form-control mb-2" name="email" placeholder="Email">
<input class="form-control mb-2" type="password" name="password" placeholder="Password">
<button class="btn w-100"
        style="background:#234992;color:white;">
    Daftar
</button>

</form>

<p class="text-center mt-2">
<a href="/login">Sudah punya akun?</a>
</p>
</div>
</div>
</div>
</body>
</html>
