<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite('resources/css/app.css')
</head>

<body class="antialiased">
    <div class="max-w-2xl py-16 mx-auto">
        <a href="{{ route('posts.index') }}"
            class="inline-block text-2xl font-extrabold transition-colors duration-100 hover:text-blue-500">
            {{ config('app.name') }}</a>
        <main class="mt-16">
            {{ $slot }}
        </main>
    </div>
</body>

</html>
