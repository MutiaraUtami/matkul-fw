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
    <header class="bg-blue-600 text-white p-4 flex space-x-6">
        <h1 class="text-xl font-bold">UTS Praktikum</h1>
        <a href="{{ url('/uts/web') }}" class="hover:bg-blue-700 px-3 py-1 rounded">Web</a>
        <a href="{{ url('/uts/database') }}" class="hover:bg-blue-700 px-3 py-1 rounded">Database</a>
    </header>

    <!-- Body -->
    <main class="p-6 flex-grow">
        @yield('content')
    </main>

    <!-- Footer-->
    <footer class="bg-gray-800 text-white text-center p-3">
        <p>&copy; 2025 UTS Framework Pemrograman Web</p>
    </footer>

</body>
</html>
