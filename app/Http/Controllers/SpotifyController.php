<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SpotifyWebAPI\Session;
use SpotifyWebAPI\SpotifyWebAPI;

class SpotifyController extends Controller
{

    protected $session;

    protected $api;

    public function __construct()
    {
        $this->session = new Session(
            getenv('SPOTIFY_CLIENT_ID'),
            getenv('SPOTIFY_CLIENT_SECRET'),
            getenv('SPOTIFY_REDIRECT')
        );
        $this->api = new SpotifyWebAPI();
    }

    public function index()
    {
        return redirect($this->session->getAuthorizeUrl([
            'scope' => [
                'user-read-email',
                'user-top-read',
                'playlist-modify-public',
            ],
        ]));
    }

    public function callback(Request $request)
    {
        $this->session->requestAccessToken($request->get('code'));
        $request->session()->put('token', $this->session->getAccessToken());
        return redirect('/dashboard');
    }

    public function dashboard()
    {
        $this->api->setAccessToken(\Session::get('token'));
        return view('dashboard', [
            'artists' => [
                'long_term' => $this->api->getMyTop('artists', [
                    'time_range' => 'long_term', 'limit' => '50',
                ])->items,
                'mid_term' => $this->api->getMyTop('artists', [
                    'limit' => '50',
                ])->items,
                'short_term' => $this->api->getMyTop('artists', [
                    'time_range' => 'short_term', 'limit' => '50',
                ])->items,
            ],
            'songs' => [
                'long_term' => $this->api->getMyTop('tracks', [
                    'time_range' => 'long_term', 'limit' => '50',
                ])->items,
                'mid_term' => $this->api->getMyTop('tracks', [
                    'limit' => '50',
                ])->items,
                'short_term' => $this->api->getMyTop('tracks', [
                    'time_range' => 'short_term', 'limit' => '50',
                ])->items,
            ],
        ]);
    }

    protected function readable($term)
    {
        switch($term) {
            case "short_term":
                return "in the past Month";
            case "mid_term":
                return "in the past 6 Months";
            default:
                return "of all time";
        }
    }

    public function createPlaylist($term)
    {
        if(!in_array($term, ['short_term', 'mid_term', 'long_term'])) {
            $term = 'long_term';
        }
        $this->api->setAccessToken(\Session::get('token'));
        $songs = collect($this->api->getMyTop('tracks', [
            'time_range' => $term, 'limit' => 50,
        ])->items)->map(function ($song) {
            return $song->uri;
        });
        $playlist = $this->api->createPlaylist([
            'name' => 'My Top Tracks '.$this->readable($term),
            'description' => 'Stats as of '.now()->format("d/m/y").'. Made By NNS\' Spotify Stats website: https://spotify.malding.dev'
        ]);
        $this->api->addPlaylistTracks($playlist->id, $songs->toArray());
        return redirect()->back();
    }
}
