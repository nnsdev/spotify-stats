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
<body>
    <div id="app">
        <nav class="relative select-none bg-black lg:flex lg:items-stretch w-full">
            <div class="flex flex-no-shrink items-stretch h-12">
                <a href="/" class="nav-link font-bold text-2xl">Spotify Stats</a>
                <a href="/logout" class="nav-link">Logout</a>
                <a href="https://gelmar.app" class="nav-link">Gelmar.app</a>
            </div>
        </nav>
        <div class="bg-blue-darker text-white xs:p-2 md:p-8">
            <h1>Your favorite Artists in the past 4 Weeks</h1>
            @include('partials.artist', ['range' => 'short_term', 'color' => 'blue-darker'])
        </div>
        <div class="bg-green-dark text-white xs:p-2 md:p-8">
            <h1>Your favorite Songs in the past 4 Weeks</h1>
            @include('partials.song', ['range' => 'short_term', 'color' => 'green-dark'])
        </div>
        <div class="bg-purple text-white xs:p-2 md:p-8">
            <h1>Your favorite Artists in the past 6 Months</h1>
            @include('partials.artist', ['range' => 'mid_term', 'color' => 'purple'])
        </div>
        <div class="bg-teal text-white xs:p-2 md:p-8">
            <h1>Your favorite Songs in the past 6 Months</h1>
            @include('partials.song', ['range' => 'mid_term', 'color' => 'teal'])
        </div>
        <div class="bg-red text-white xs:p-2 md:p-8">
            <h1>Your favorite Artists all-time</h1>
            @include('partials.artist', ['range' => 'long_term', 'color' => 'red'])
        </div>
        <div class="bg-orange-dark text-white xs:p-2 md:p-8">
            <h1>Your favorite Songs all-time</h1>
            @include('partials.song', ['range' => 'long_term', 'color' => 'orange-dark'])
        </div>
        <div class="bg-black text-white xs:p-2 md:p-8">
            <div class="container">
                <strong>Disclaimer: This website does NOT store any of your information. All of your spotify information is saved client-side, as visible in the source code.</strong>
                <p>The date ranges are only estimates. Spotify has not published information on how long each term(short, mid, long) is.</p>
                <p>If you like this website, please also check out my <a href="https://twitter.com/juliengelmar" class="text-white" target="_blank">Twitter</a> or my <a href="https://github.com/JulienGelmar" class="text-white" target="_blank">GitHub</a>. The Source for this website can be found on <a href="https://github.com/JulienGelmar/spotify-stats" class="text-white" target="_blank">GitHub</a>.</a></p>
            </div>
        </div>
        @include('partials.modals')
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>