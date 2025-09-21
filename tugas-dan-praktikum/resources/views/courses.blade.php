<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ByteSquad</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Courses</h1>
    <ul>
        <li><a href="{{ route('framework-web') }}">Framework Web</a></li>
        <li><a href="{{ route('mobile-programming') }}">Mobile Programming</a></li>
    </ul>
    <a class ="back" href="{{ route('home') }}">Kembali ke Home</a>
</body>
</html>