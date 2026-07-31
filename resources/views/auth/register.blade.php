<x-guest-layout>
    <div class="mb-6 text-center">
        <!-- Logo Header -->
        <a href="/" class="inline-flex items-center justify-center">
            <x-application-logo />
        </a>
        <h2 class="mt-4 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
            Create your account
        </h2>
        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
            Get started with ClearCut AI
        </p>
    </div>

    <form method="POST" action="{{ route('register') }}" class="space-y-4">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" class="font-medium text-gray-700 dark:text-gray-300" />
            <x-text-input id="name" class="block mt-1 w-full rounded-xl border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="John Doe" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" class="font-medium text-gray-700 dark:text-gray-300" />
            <x-text-input id="email" class="block mt-1 w-full rounded-xl border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="name@example.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Password')" class="font-medium text-gray-700 dark:text-gray-300" />
            <x-text-input id="password" class="block mt-1 w-full rounded-xl border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                            type="password"
                            name="password"
                            placeholder="••••••••"
                            required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div>
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="font-medium text-gray-700 dark:text-gray-300" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full rounded-xl border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                            type="password"
                            name="password_confirmation" 
                            placeholder="••••••••"
                            required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Submit Button & Login Link -->
        <div class="pt-2">
            <x-primary-button class="w-full justify-center py-3 text-base font-semibold rounded-xl bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-500 hover:to-purple-500 transition-all duration-200 shadow-md shadow-indigo-500/20">
                {{ __('Register') }}
            </x-primary-button>
        </div>

        <div class="text-center mt-4">
            <a class="text-sm font-medium text-indigo-600 hover:text-indigo-500 transition-colors" href="{{ route('login') }}">
                {{ __('Already registered? Sign in') }}
            </a>
        </div>
    </form>
</x-guest-layout>