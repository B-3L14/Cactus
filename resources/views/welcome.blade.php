<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full w-full">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel + Vue.js</title>
        @vite(['resources/js/app.js'])
    </head>
    <body class="h-full w-full">
        <div class="h-full w-full overflow-hidden max-sm:overflow-auto" id="app"></div>
    </body>
</html>
