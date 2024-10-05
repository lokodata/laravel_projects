<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>


    <body class="font-sans antialiased">
        <div class="flex flex-col min-h-screen bg-white shadow dark:bg-gray-800">
            <div class="w-full px-6 mx-auto lg:max-w-7xl">
                <header class="justify-center py-10 items-right">
                    @if (Route::has('login'))
                        <livewire:welcome.navigation />
                    @endif
                </header>
            </div>
            <div class="flex flex-col items-center justify-center flex-grow p-6 mx-auto space-y-5 text-center max-w-7xl lg:p-8">
                <x-application-logo class="w-24 h-24 fill-current text-primary" />
                <x-button primary xl href="{{ route('register') }}">Get Started</x-button>
            </div>
        </div>
    </body>


</html>
