<header>
    <div class="flex flex-wrap">
        <div class="w-full">
            <nav class="relative flex flex-wrap items-center px-2 py-3 bg-blue-200 rounded">
                    <div class="w-full relative flex justify-between lg:w-auto px-4 lg:static lg:block lg:justify-start">
                        <a class="text-sm font-bold inline-block mr-4 py-2 whitespace-nowrap uppercase text-black" href="{{ route('login') }}">
                            Process
                        </a>
                    </div>
                    <div class="flex lg:flex-grow items-center">
                        <ul class="flex flex-col lg:flex-row list-none ml-auto">
                            <li class="nav-item">
                                <button class="bg-blue-500 hover:bg-blue-700 rounded-full px-2 py-2">
                                    <a href="{{ route('register') }}" class="text-sm text-white font-bold px-2 py-4">Register</a>
                                </button>
                            </li>
                        </ul>
                    </div>
            </nav>
        </div>
</header>
<body>
<x-guest-layout>
    <x-auth-card>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')"/>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors"/>

        <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')"/>

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                         autofocus/>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')"/>

                <x-input id="password" class="block mt-1 w-full"
                         type="password"
                         name="password"
                         required autocomplete="current-password"/>
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"
                           class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                           name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                       href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
</body>
