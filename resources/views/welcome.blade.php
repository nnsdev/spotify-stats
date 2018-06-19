<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Spotify Stats</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ env('APP_URL') }}">Spotify Top Songs</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" target="_blank" rel="noreferrer noopener" href="https://gelmar.app">Gelmar.app</a>
            </li>
        </form>
    </div>
    </nav>
    <div class="container-md mx-4 mt-4">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="artist-short-tab" data-toggle="tab" href="#artist-short" role="tab" aria-controls="home" aria-selected="true">
                                Short Term</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="artist-mid-tab" data-toggle="tab" href="#artist-mid" role="tab" aria-controls="artist-mid" aria-selected="false">
                                Mid Term</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="artist-long-tab" data-toggle="tab" href="#artist-long" role="tab" aria-controls="artist-long" aria-selected="false">
                                Long Term</a>
                        </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="artist-short" role="tabpanel" aria-labelledby="artist-short-tab">
                                @include('partials.artists', ['range_title' => 'short_term', 'range' => $artists['short_term']])
                            </div>
                            <div class="tab-pane fade" id="artist-mid" role="tabpanel" aria-labelledby="artist-mid-tab">
                                @include('partials.artists', ['range_title' => 'mid_term', 'range' => $artists['mid_term']])
                            </div>
                            <div class="tab-pane fade" id="artist-long" role="tabpanel" aria-labelledby="artist-long-tab">
                                @include('partials.artists', ['range_title' => 'long_term', 'range' => $artists['long_term']])
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-2">
                    <div class="card-body">
                        <table class="table table-hover">
                            <tr>
                                <td style="font-weight: bold;">Short Term</td>
                                <td>~ 4 Weeks</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold;">Mid Term</td>
                                <td>~ 6 Months</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold;">Long Term</td>
                                <td>Since account created</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="song-short-tab" data-toggle="tab" href="#song-short" role="tab" aria-controls="song-short" aria-selected="true">
                                Short Term</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="song-mid-tab" data-toggle="tab" href="#song-mid" role="tab" aria-controls="song-mid" aria-selected="false">
                                Mid Term</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="song-long-tab" data-toggle="tab" href="#song-long" role="tab" aria-controls="song-long" aria-selected="false">
                                Long Term</a>
                        </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="song-short" role="tabpanel" aria-labelledby="song-short-tab">
                                @include('partials.songs', ['range_title' => 'short_term', 'range' => $songs['short_term']])
                            </div>
                            <div class="tab-pane fade" id="song-mid" role="tabpanel" aria-labelledby="song-mid-tab">
                                @include('partials.songs', ['range_title' => 'mid_term', 'range' => $songs['mid_term']])
                            </div>
                            <div class="tab-pane fade" id="song-long" role="tabpanel" aria-labelledby="song-long-tab">
                                @include('partials.songs', ['range_title' => 'long_term', 'range' => $songs['long_term']])
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>