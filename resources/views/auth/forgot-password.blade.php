<x-guest-layout>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
          <img class="mx-auto h-10 w-auto" src="{{ asset('gaelanlogo.png') }}" alt="Your Company">
          <h2 class="mt-4 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900 flicker-text">Forgot your password?</h2>
        </div>
        <div class="mb-2 mt-2 text-sm text-center text-gray-600 dark:text-gray-400">
            {{ __('No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>



    <div class="mt-4 sm:mx-auto sm:w-full sm:max-w-sm">

    <!-- Session Status -->
    <x-auth-session-status class="mb-2 mt-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-center mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>

        <div class="flex items-center justify-center mt-4">
            @if (Route::has('login'))
            <a class="text-sm font-light text-gray-500 dark:text-gray-400 text-center hover:underline" href="{{ route('login') }}">
              {{ __('Do you want to login?') }}
            </a>
            @endif
        </div>
        
    </form>
    </div>
    </div>
</x-guest-layout>
