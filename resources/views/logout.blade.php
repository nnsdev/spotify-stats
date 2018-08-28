<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Spotify Stats</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body class="bg-blue-darker">
    <div id="app">
        <nav class="relative select-none bg-black lg:flex lg:items-stretch w-full">
            <div class="flex flex-no-shrink items-stretch h-12">
                <a href="/" class="nav-link font-bold text-2xl">Spotify Stats</a>
                <a href="https://gelmar.app" class="nav-link">Gelmar.app</a>
            </div>
        </nav>
        <div class="container mx-auto max-w-full max-h-full p-4">
            <h3 class="text-white">Thanks for using this :)</h3>
        </div>
    </div>
</body>
</html>