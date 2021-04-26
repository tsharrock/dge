<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/app.css" >
        <title>Disc Exchange</title>
        @livewireStyles
    </head>
    <body class="antialiased">

    <div>
        <h1>Find your disc!</h1>
    </div>

    @livewire('discsearch')


    @livewireScripts
    </body>
</html>
