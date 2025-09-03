<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ByteSquad</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Welcome to ByteSquad</h1>
    <p class="tagline">Belajar coding asyik dan interaktif</p>
    <p>Pilih halaman:</p>
    <ul>
        <li><a href="{{ route('about') }}">About</a></li>
        <li><a href="{{ route('courses') }}">Courses</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
    </ul>
</body>
</html>