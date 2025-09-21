<x-guest-layout class="bg-gray-900 min-h-screen flex items-center justify-center">
    <form method="POST" action="{{ route('login') }}" 
          class="max-w-md w-full bg-blue-600 shadow-lg rounded-xl px-8 py-6">
        @csrf

        <!-- Sambutan -->
        <div class="text-center mb-6">
            <h1 class="text-2xl font-bold text-white">Selamat Datang 👋</h1>
            <p class="text-sm text-blue-200">Silakan login untuk melanjutkan</p>
        </div>

        <!-- Email -->
        <div>
            <x-input-label for="email" :value="__('Email')" class="text-white"/>
            <x-text-input id="email"
                class="block mt-1 w-full rounded-lg border-gray-300 focus:border-blue-400 focus:ring-blue-400"
                type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" class="text-white"/>
            <x-text-input id="password"
                class="block mt-1 w-full rounded-lg border-gray-300 focus:border-blue-400 focus:ring-blue-400"
                type="password" name="password" required autocomplete="current-password" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded border-gray-300 text-blue-600 focus:ring-blue-500"
                    name="remember">
                <span class="ms-2 text-sm text-white">{{ __('Remember me') }}</span>
            </label>
        </div>

        <!-- Actions -->
        <div class="flex items-center justify-between mt-6">
            <a class="underline text-sm text-blue-200 hover:text-blue-400"
                href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>

            <x-primary-button
                class="ms-3 bg-blue-500 hover:bg-blue-600 focus:ring-blue-500 text-white">
                {{ __('Log in') }}
            </x-primary-button>
        </div>

        <!-- Register -->
        <div class="mt-6 text-center">
            <p class="text-sm text-blue-200">
                Belum punya akun?
                <a href="{{ route('register') }}"
                   class="text-white hover:text-blue-300 font-medium">
                    Daftar sekarang
                </a>
            </p>
        </div>
    </form>
</x-guest-layout>
