<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="{{asset('css/output.css')}}" rel="stylesheet">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
<div class="min-h-screen  flex flex-col sm:justify-center items-center pt-6 sm:pt-0 dark:bg-gray-600" style="background-image: url({{asset('/images/2.jpg')}}); background-size: cover">
    <a href="/">
        <img src="{{asset('images/market1.png')}}" class="w-40 h-40 fill-current text-gray-500" />
    </a>

    <div class="flex text-white VK-Sans justify-center rounded-3xl bg-opacity-15 bg-gray-600 backdrop-blur-md mt-4 py-10 px-10 h-full ">
        <form method="POST" action="{{route('login.submit') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Юзернейм или Почта') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Пароль') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Помни меня') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                        {{ __('Забыли свой пароль?') }}
                    </a>
                @endif

                <x-button class="ms-4">
                    {{ __('Вход в аккаунт') }}
                </x-button>
            </div>
        </form>
    </div>



</div>
</body>
</html>
