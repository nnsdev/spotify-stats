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
                <a href="/logout" class="nav-link">Sign out</a>
            </div>
        </nav>
        <div class="bg-blue-600 text-white xs:p-2 md:p-8">
            <h1 class="text-2xl font-semibold">Your favorite Artists in the past 4 Weeks</h1>
            @include('partials.artist', ['range' => 'short', 'color' => 'blue-600'])
        </div>
        <div class="bg-green-700 text-white xs:p-2 md:p-8">
            <h1 class="text-2xl font-semibold">Your favorite Songs in the past 4 Weeks</h1>
            @include('partials.song', ['range' => 'short', 'color' => 'green-600'])
        </div>
        <div class="bg-purple-500 text-white xs:p-2 md:p-8">
            <h1 class="text-2xl font-semibold">Your favorite Artists in the past 6 Months</h1>
            @include('partials.artist', ['range' => 'mid', 'color' => 'purple-500'])
        </div>
        <div class="bg-teal-500 text-white xs:p-2 md:p-8">
            <h1 class="text-2xl font-semibold">Your favorite Songs in the past 6 Months</h1>
            @include('partials.song', ['range' => 'mid', 'color' => 'teal-500'])
        </div>
        <div class="bg-red-500 text-white xs:p-2 md:p-8">
            <h1 class="text-2xl font-semibold">Your favorite Artists all-time</h1>
            @include('partials.artist', ['range' => 'long', 'color' => 'red-500'])
        </div>
        <div class="bg-orange-600 text-white xs:p-2 md:p-8">
            <h1 class="text-2xl font-semibold">Your favorite Songs all-time</h1>
            @include('partials.song', ['range' => 'long', 'color' => 'orange-600'])
        </div>
        <div class="bg-black text-white xs:p-2 md:p-8">
            <div class="container">
                <strong>Disclaimer: This website does NOT store any of your information. All of your spotify information is saved client-side, as visible in the source code.</strong>
                <p>The date ranges are only estimates. Spotify has not published information on how long each term(short, mid, long) is.</p>
                <p>The Source for this website can be found on <a href="https://github.com/nnsdev/spotify-stats" class="text-white" target="_blank">GitHub</a>.</a></p>
            </div>
        </div>
        @include('partials.modals')
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
