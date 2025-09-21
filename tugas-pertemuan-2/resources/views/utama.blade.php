<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utama - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Halaman Utama</h1>
    <a class="back" href="{{ route('home') }}">Kembali ke Home</a>
    <div class="container"> 
        @yield('content') 
    </div> 
</body>
</html>