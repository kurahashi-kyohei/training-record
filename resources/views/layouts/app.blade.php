<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="//fonts.bunny.net">
        <link href="//fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased ">
        <div class="min-h-screen ">
            @include('layouts.navigation')

            <!-- Page Content -->
            <main class="flex justify-center py-12 px-auto w-full relative bg-gray-50 h-screen">
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
