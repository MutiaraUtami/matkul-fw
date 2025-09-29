@extends('uts.app')

@section('content')
    <h2 class="text-2xl font-semibold mb-6">Menu UTS</h2>

    <div class="flex gap-6">
        <!-- Tombol ke Pemrograman Web -->
        <a href="{{ url('/uts/web') }}" 
           class="px-6 py-3 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 transition">
           Menu UTS Pemrograman Web
        </a>

        <!-- Tombol ke Database -->
        <a href="{{ url('/uts/database') }}" 
           class="px-6 py-3 bg-green-600 text-white rounded-lg shadow hover:bg-green-700 transition">
           Menu UTS Database
        </a>
    </div>
@endsection
