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
                <a href="/" class="flex-no-grow flex-no-shrink relative py-2 px-4 leading-normal text-white no-underline flex items-center hover:bg-grey-darkest font-bold text-2xl">Spotify Stats</a>
                <a href="https://gelmar.app" class="flex-no-grow flex-no-shrink relative py-2 px-4 leading-normal text-white no-underline flex items-center hover:bg-grey-darkest">Gelmar.app</a>
            </div>
        </nav>
        <div class="bg-blue-darker text-white xs:p-2 md:p-8">
            <h1>Your favorite Artists in the past 4 Weeks</h1>
            <div class="mt-2 md:p-8 mx-auto">
                <carousel :per-page-custom="[[0,1],[500,2],[700,3],[1000,4],[1300,5]]" class="md:pl-8" :pagination-padding="2" :pagination-size="8">
                    @foreach($artists['short_term'] as $artist)
                    <slide>
                        <img src="{{ $artist->images[2]->url ?? $artist->images[0]->url }}" alt="{{ $artist->name }}" style="width: 175px; height: 175px;">
                        <h3 class="mt-2">{{ $loop->index + 1 }}. {{ $artist->name }}</h3>
                    </slide>
                    @endforeach
                </carousel>
                <div class="text-center mt-8">
                    <button @click="show('artist_short')" class="bg-transparent hover:bg-white text-white no-underline font-semibold hover:text-blue-darker py-2 px-4 border border-white hover:border-transparent rounded">
                        Copy
                    </button>
                </div>
            </div>
        </div>
        <div class="bg-green-dark text-white xs:p-2 md:p-8">
            <h1>Your favorite Songs in the past 4 Weeks</h1>
            <div class="mt-2 md:p-8 mx-auto">
                <carousel :per-page-custom="[[0,1],[500,2],[700,3],[1000,4],[1300,5]]" class="md:pl-8" :pagination-padding="2">
                    @foreach($songs['short_term'] as $song)
                    <slide>
                        <img src="{{ $song->album->images[2]->url ?? $song->album->images[0]->url }}" alt="{{ $song->name }}" style="width: 175px; height: 175px;">
                        <h3 class="mt-2">{{ $loop->index +1 }}. {{ $song->name }}</h3>
                        <p>@foreach($song->artists as $artist) {{ $artist->name }}@if(!$loop->last),@endif @endforeach</p>
                    </slide>
                    @endforeach
                </carousel>
                <div class="text-center mt-8">
                    <button @click="show('song_short')" class="bg-transparent hover:bg-white text-white no-underline font-semibold hover:text-green-dark py-2 px-4 border border-white hover:border-transparent rounded">
                        Copy
                    </button>
                </div>
            </div>
        </div>
        <div class="bg-purple text-white xs:p-2 md:p-8">
            <h1>Your favorite Artists in the past 6 Months</h1>
            <div class="mt-2 md:p-8 mx-auto">
                <carousel :per-page-custom="[[0,1],[500,2],[700,3],[1000,4],[1300,5]]" class="md:pl-8" :pagination-padding="2">
                    @foreach($artists['mid_term'] as $artist)
                    <slide>
                        <img src="{{ $artist->images[2]->url ?? $artist->images[0]->url }}" alt="{{ $artist->name }}" style="width: 175px; height: 175px;">
                        <h3 class="mt-2">{{ $loop->index + 1 }}. {{ $artist->name }}</h3>
                    </slide>
                    @endforeach
                </carousel>
                <div class="text-center mt-8">
                    <button @click="show('artist_mid')" class="bg-transparent hover:bg-white text-white no-underline font-semibold hover:text-purple py-2 px-4 border border-white hover:border-transparent rounded">
                        Copy
                    </button>
                </div>
            </div>
        </div>
        <div class="bg-teal text-white xs:p-2 md:p-8">
            <h1>Your favorite Songs in the past 6 Months</h1>
            <div class="mt-2 md:p-8 mx-auto">
                <carousel :per-page-custom="[[0,1],[500,2],[700,3],[1000,4],[1300,5]]" class="md:pl-8" :pagination-padding="2">
                    @foreach($songs['mid_term'] as $song)
                    <slide>
                        <img src="{{ $song->album->images[2]->url ?? $song->album->images[0]->url }}" alt="{{ $song->name }}" style="width: 175px; height: 175px;">
                        <h3 class="mt-2">{{ $loop->index +1 }}. {{ $song->name }}</h3>
                        <p>@foreach($song->artists as $artist) {{ $artist->name }}@if(!$loop->last),@endif @endforeach</p>
                    </slide>
                    @endforeach
                </carousel>
                <div class="text-center mt-8">
                    <button @click="show('song_mid')" class="bg-transparent hover:bg-white text-white no-underline font-semibold hover:text-teal py-2 px-4 border border-white hover:border-transparent rounded">
                        Copy
                    </button>
                </div>
            </div>
        </div>
        <div class="bg-red text-white xs:p-2 md:p-8">
            <h1>Your favorite Artists all-time</h1>
            <div class="mt-2 md:p-8 mx-auto">
                <carousel :per-page-custom="[[0,1],[500,2],[700,3],[1000,4],[1300,5]]" class="md:pl-8" :pagination-padding="2">
                    @foreach($artists['long_term'] as $artist)
                    <slide>
                        <img src="{{ $artist->images[2]->url ?? $artist->images[0]->url }}" alt="{{ $artist->name }}" style="width: 175px; height: 175px;">
                        <h3 class="mt-2">{{ $loop->index + 1 }}. {{ $artist->name }}</h3>
                    </slide>
                    @endforeach
                </carousel>
                <div class="text-center mt-8">
                    <button @click="show('artist_long')" class="bg-transparent hover:bg-white text-white no-underline font-semibold hover:text-red py-2 px-4 border border-white hover:border-transparent rounded">
                        Copy
                    </button>
                </div>
            </div>
        </div>
        <div class="bg-orange-dark text-white xs:p-2 md:p-8">
            <h1>Your favorite Songs all-time</h1>
            <div class="mt-2 md:p-8 mx-auto">
                <carousel :per-page-custom="[[0,1],[500,2],[700,3],[1000,4],[1300,5]]" class="md:pl-8" :pagination-padding="2">
                    @foreach($songs['long_term'] as $song)
                    <slide>
                        <img src="{{ $song->album->images[2]->url ?? $song->album->images[0]->url }}" alt="{{ $song->name }}" style="width: 175px; height: 175px;">
                        <h3 class="mt-2">{{ $loop->index +1 }}. {{ $song->name }}</h3>
                        <p>@foreach($song->artists as $artist) {{ $artist->name }}@if(!$loop->last),@endif @endforeach</p>
                    </slide>
                    @endforeach
                </carousel>
                <div class="text-center mt-8">
                    <button @click="show('song_long')"  class="bg-transparent hover:bg-white text-white no-underline font-semibold hover:text-orange-dark py-2 px-4 border border-white hover:border-transparent rounded">
                        Copy
                    </button>
                </div>
            </div>
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