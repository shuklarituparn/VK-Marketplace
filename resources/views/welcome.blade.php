<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <title>Welcome</title>
        <link href="{{asset('css/output.css')}}" rel="stylesheet">
        <link rel="icon" href="{{asset('favicon/favicon.ico')}}" type="image/x-icon">
    </head>
    <body>
    <div class="flex h-screen w-screen items-center justify-center  bg-gray-900 bg-cover bg-no-repeat" style="background-image: url({{asset('/images/2.jpg')}});">
        <div class="rounded-3xl bg-gray-800 bg-opacity-15 px-4 py-4  sm:px-10 sm:mb-8 sm:py-10 md:px-10 md:py-10 shadow-2xl backdrop-blur-md">
            <div class="text-white VK-Sans">
                <div class="mb-4 sm:mb-8 flex flex-col items-center">
                    <img src="{{asset('images/market1.png')}}" class="w-24 sm:w-32 md:w-40" alt="" />
                    <h1 class="mb-2 text-xl sm:text-2xl md:text-3xl text-center py-4 sm:py-6 md:py-9 VK-Sans">VK Маркетплейс</h1>
                    <ul class="mb-2 ml-2 VK-Sans text-center">
                        <li class="text-xs sm:text-sm indent-2"> Чтобы продолжить, пожалуйста, авторизуйтесь или зарегистрируйтесь</li>
                    </ul>
                </div>
                <div class="mb-4  space-x-16 sm:mb-8 flex flex-row justify-between">

                    <a href="/api/v1/login" class="mt-4 sm:mt-4 px-4 VK-Sans text-white bg-gray-800 text-center bg-opacity-40 hover:bg-blue-700 border border-gray-200 focus:ring-2 focus:outline-none focus:ring-gray-100 font-sans rounded-full text-sm sm:text-md px-5 sm:px-8 py-2 text-center inline-flex items-center">
                        Авторизуйтесь

                    </a>
                    <a href="/api/v1/register" class="mt-4 sm:mt-4 VK-Sans text-white bg-gray-800 text-center bg-opacity-40 hover:bg-blue-700 border border-gray-200 focus:ring-2 focus:outline-none focus:ring-gray-100 font-sans rounded-full text-sm sm:text-md px-5 sm:px-8 py-2 text-center inline-flex items-center">
                        Зарегистрируйтесь

                    </a>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
