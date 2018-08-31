<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Check your favorite songs and artists on Spotify over different timespans.">
    <meta property="og:title" content="Spotify Statistics"> 
    <meta property="og:type" content="website"> 
    <meta name="twitter:card" content="app"></meta>
    <meta name="twitter:creator" content="@juliengelmar" />
    <meta property="og:url" content="https:/spotify.whatan.app" />
    <meta name="og:description" property="og:description" content="Check your favorite songs and artists on Spotify over different timespans.">
    <meta name="robots" content="index"> 
    <title>Spotify Stats</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body class="bg-green-dark text-white h-screen font-sans">
    <div id="app">
        <nav class="relative select-none bg-black lg:flex lg:items-stretch w-full">
            <div class="flex flex-no-shrink items-stretch h-12">
                <a href="/" class="nav-link font-bold text-2xl">Spotify Stats</a>
                <a href="/logout" class="nav-link">Logout</a>
                <a href="https://gelmar.app" class="nav-link">Gelmar.app</a>
            </div>
        </nav>
        <div class="flex items-center h-screen w-full">
            <div class="w-full mx-auto text-center">
                <h1 class="mb-2">Spotify Statistics</h1>
                <h4 class="mb-4">Check your favorite songs and artists over different timespans and create Playlists of it.</h4>
                <a href="/login" class="p-2 rounded-xl border border-2 border-white bg-transparent text-white no-underline hover:bg-green-darker hover:border-transparent">Check your Statistics</a>
            </div>
        </div>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>