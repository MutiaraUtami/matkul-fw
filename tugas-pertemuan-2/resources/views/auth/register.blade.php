<x-guest-layout class="bg-gray-900 min-h-screen flex items-center justify-center">
    <form method="POST" action="{{ route('register') }}" 
          class="max-w-md w-full bg-blue-600 shadow-lg rounded-xl px-8 py-6">
        @csrf

        <!-- Sambutan -->
        <div class="text-center mb-6">
            <h1 class="text-2xl font-bold text-white">Daftar Akun Baru ✨</h1>
            <p class="text-sm text-blue-200">Isi data di bawah untuk mendaftar</p>
        </div>

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" class="text-white" />
            <x-text-input id="name" class="block mt-1 w-full rounded-lg border-gray-300 focus:border-blue-400 focus:ring-blue-400"
                          type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2 text-blue-200" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" class="text-white" />
            <x-text-input id="email" class="block mt-1 w-full rounded-lg border-gray-300 focus:border-blue-400 focus:ring-blue-400"
                          type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-blue-200" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" class="text-white" />
            <x-text-input id="password" class="block mt-1 w-full rounded-lg border-gray-300 focus:border-blue-400 focus:ring-blue-400"
                          type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-blue-200" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-white" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full rounded-lg border-gray-300 focus:border-blue-400 focus:ring-blue-400"
                          type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-blue-200" />
        </div>

        <!-- Actions -->
        <div class="flex items-center justify-between mt-6">
            <a class="underline text-sm text-blue-200 hover:text-blue-400"
               href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-3 bg-blue-500 hover:bg-blue-600 focus:ring-blue-500 text-white">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
