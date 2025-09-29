<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">

    <!-- Header -->
    <header class="bg-blue-600 text-white p-4">
        <h1 class="text-xl font-bold">UTS Praktikum</h1>
    </header>

    <!-- Body -->
    <main class="p-6 flex-grow">
        @yield('content')
    </main>

    <!-- Footer (sticky di bawah) -->
    <footer class="bg-gray-800 text-white text-center p-3">
        <p>&copy; 2025 UTS Framework Pemrograman Web</p>
    </footer>

</body>
</html>
