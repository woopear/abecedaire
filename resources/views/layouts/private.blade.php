<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <title>{{ $titlePage ?? 'Test Laravel' }}</title>
    </head>
    <body>
        <main>
            <button class="cursor-pointer" darkmodebtn>
                Switch dark mode
            </button>
            @yield('content-private')
        </main>
    </body>
</html>
