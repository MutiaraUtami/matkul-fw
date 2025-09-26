@extends('navbars.shownavbar')

@section('title', 'Welcome Page')

@section('content')
    <div class="welcome text-center">
        <h1>Selamat Datang di Website Ini</h1>
        <p>
            Website ini dibuat untuk memberikan informasi dan layanan terbaik bagi Anda.  
            Silakan jelajahi menu yang tersedia di atas untuk memulai.
        </p>
    </div>

    <hr class="my-5">

    <div class="features">
        <h2 class="mb-3">Fitur Utama</h2>
        <ul>
            <li>Menyediakan informasi terbaru</li>
            <li>Mudah digunakan oleh siapa saja</li>
            <li>Desain responsif untuk semua perangkat</li>
        </ul>
    </div>

    <div class="footer-note mt-5">
        <p>&copy; {{ date('Y') }} Website Ini. Semua hak dilindungi.</p>
    </div>
@endsection
