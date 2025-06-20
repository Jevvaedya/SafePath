<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div>
            {{-- Asumsi x-input-label sudah menggunakan text-text-main --}}
            <x-input-label for="name" :value="__('Name')" /> 
            {{-- Asumsi x-text-input sudah menggunakan focus:border-primary focus:ring-primary --}}
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            {{-- Link "Already registered?" dengan warna tema --}}
            <a class="underline text-sm text-gray-600 hover:text-primary rounded-md" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            {{-- Tombol Register menggunakan x-primary-button yang sudah di-style --}}
            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>