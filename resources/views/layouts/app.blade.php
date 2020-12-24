<!DOCTYPE html>
<html>

    <head>

        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">

        @livewireStyles

    </head>

    <body>

        @yield('content')

        @livewireScripts

    </body>

</html>
