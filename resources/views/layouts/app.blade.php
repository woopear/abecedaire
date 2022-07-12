<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <title>{{ $titlePage ?? 'Abecedaire' }}</title>
    </head>
    <body>
        <header>
            je suis le header
        </header>
        <main>
            <button class="cursor-pointer" darkmodebtn>
                Switch dark mode
            </button>
            @yield('content-app')
        </main>
        <footer>
            je suis le footer
        </footer>
    </body>
</html>
