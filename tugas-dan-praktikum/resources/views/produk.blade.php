<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div class="alert alert-{{ $alertType }}">
        {{ $pesan }}
    </div>

    <x-alert type="{{ $alertType }}">{{ $pesan }}</x-alert>
</body>
</html>