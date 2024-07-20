<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title ?? 'Personal Library' }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;600;800&display=swap" rel="stylesheet">

        <!-- Scripts -->
        <script src="https://cdn.tailwindcss.com"></script>

        <!-- Vite -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="font-sans antialiased bg-stone-100">
        <div class="flex flex-col h-screen bg-stone-100">
            <header class="text-center w-full pt-4">
                <h1 class="text-3xl">{{ $title ?? 'Personal Library' }}</h1>
            </header>
            <main class="flex flex-grow justify-center">
                <section class="antialiased bg-stone-100 text-gray-700 p-0 md:p-4">

                    {{ $slot }}

                </section>
            </main>
        </div>

        @stack('scripts')

    </body>
</html>