<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="halloween">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <script is:inline>
            // ☝️ This script prevent the FART effect.
            if (localStorage.getItem("theme") === null) {
                document.documentElement.setAttribute("data-theme", "halloween");
            } else
                document.documentElement.setAttribute(
                    "data-theme",
                    localStorage.getItem("theme")
                );
        </script>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="font-sans antialiased">
            {{ $slot }}
        </div>
    </body>
</html>
