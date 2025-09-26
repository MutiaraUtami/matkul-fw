<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<div class="p-6 bg-white rounded-lg shadow-md">
    @include('navbars.navbar')
    @auth
        <h1 class="text-xl font-bold mb-4">
            Selamat Datang, {{ Auth::user()->name }} 👋
        </h1>
        <p class="text-gray-700">
            Role Anda adalah <span class="font-semibold text-blue-600">{{ Auth::user()->role }}</span>.
        </p>
    @endauth

    @guest
        <h1 class="text-xl font-bold mb-4">Selamat Datang 👋</h1>
        <p class="text-gray-700">Silakan login untuk melihat detail akun Anda.</p>
    @endguest
</div>

    
    <p>Pilih halaman:</p>
    <ul>
        <li><a href="{{ route('about') }}">About</a></li>
        <li><a href="{{ route('courses') }}">Courses</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
    </ul>

    <div class = "box">
            <h2>{{ config('app.name') }}</h2>
            <p>Ini adalah perubahan baru di praktikum 3</p>
    </div>
    
    <!-- Logout -->
    <div class="logout">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </div>
    
</body>
</html>