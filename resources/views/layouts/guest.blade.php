<!DOCTYPE html>
@vite(['resources/css/MasterLayout.css', 'resources/css/StyleGuide.css'])
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/StyleGuide.css'])
    </head>
    <body class="font-sans text-gray-900 antialiased auth">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
            <div class="backgroundImgContainer">
                <img class="backgroundImg" src="/images/MolvenoLogo.png" alt="">
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-[#d8d0c5] shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
