<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @include('navbars.navbar')

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
