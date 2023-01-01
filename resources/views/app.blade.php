<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        <script src="https://kit.fontawesome.com/b5cf6a9895.js" crossorigin="anonymous"></script>

        <title>Ciné</title>


    </head>
    <body>   

        @yield('content')

       
    </body>
</html>
