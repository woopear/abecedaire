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
        <main mainprivate>
            <section sideleftmenu>
                <nav navmenuside>
                    je suis la nav
                </nav>
                <footer>
                    je suis le footer
                </footer>
            </section>
            <section contentmain>
                @yield('content-app')
            </section>
        </main>
    </body>
</html>
