<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel + Vue.js</title>
        @vite(['resources/js/app.js'])
    </head>
    <body class="h-full">
        <div class="h-full" id="app"></div>
    </body>
</html>
