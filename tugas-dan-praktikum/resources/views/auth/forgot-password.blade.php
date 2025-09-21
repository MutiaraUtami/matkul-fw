<x-guest-layout class="bg-gray-900 min-h-screen flex items-center justify-center">
    <form method="POST" action="{{ route('password.email') }}" 
          class="max-w-md w-full bg-blue-600 shadow-lg rounded-xl px-8 py-6">
        @csrf

        <!-- Title -->
        <div class="text-center mb-6">
            <h1 class="text-2xl font-bold text-white">Lupa Password 🔑</h1>
            <p class="text-sm text-blue-200">
                Masukkan email kamu, kami akan kirim link reset password.
            </p>
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4 text-blue-200" :status="session('status')" />

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" class="text-white" />
            <x-text-input id="email" 
                          class="block mt-1 w-full rounded-lg border-gray-300 focus:border-blue-400 focus:ring-blue-400"
                          type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-blue-200" />
        </div>

        <!-- Action -->
        <div class="flex items-center justify-center mt-6">
            <x-primary-button class="bg-blue-500 hover:bg-blue-600 focus:ring-blue-500 text-white">
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
