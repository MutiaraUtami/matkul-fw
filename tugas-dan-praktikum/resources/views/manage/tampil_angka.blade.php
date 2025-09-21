<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Users</title>
</head>
<body>
    <p>Hasil penjumlahan: {{ $hasil }}</p>

    <p class="text-gray-700">
            Role Anda adalah <span class="font-semibold text-blue-600">{{ Auth::user()->role }}</span>.
    </p>
</body>
</html>
