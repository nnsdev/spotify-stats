<modal name="artist_short" height="auto" :adaptive="true">
    <div class="p-8 h-full">
        <textarea class="w-full h-64 border p-4 border-grey">
@foreach($artists['short_term'] as $artist)
{{ $loop->index + 1}}. {{ $artist->name }}
@endforeach</textarea>
            <div class="text-right mt-2">
                <button @click="hide('artist_short')" class="bg-transparent hover:bg-red text-red no-underline font-semibold hover:text-white py-2 px-4 border border-red hover:border-transparent rounded">
                    Close
                </button>
            </div>
    </div>
</modal>
<modal name="artist_mid" height="auto" :adaptive="true">
    <div class="p-8 h-full">
        <textarea class="w-full h-64 border p-4 border-grey">
@foreach($artists['mid_term'] as $artist)
{{ $loop->index + 1}}. {{ $artist->name }}
@endforeach</textarea>
            <div class="text-right mt-2">
                <button @click="hide('artist_mid')" class="bg-transparent hover:bg-red text-red no-underline font-semibold hover:text-white py-2 px-4 border border-red hover:border-transparent rounded">
                    Close
                </button>
            </div>
    </div>
</modal>
<modal name="artist_long" height="auto" :adaptive="true">
    <div class="p-8 h-full">
        <textarea class="w-full h-64 border p-4 border-grey">
@foreach($artists['long_term'] as $artist)
{{ $loop->index + 1}}. {{ $artist->name }}
@endforeach</textarea>
            <div class="text-right mt-2">
                <button @click="hide('artist_long')" class="bg-transparent hover:bg-red text-red no-underline font-semibold hover:text-white py-2 px-4 border border-red hover:border-transparent rounded">
                    Close
                </button>
            </div>
    </div>
</modal>
<modal name="song_short" height="auto" :adaptive="true">
    <div class="p-8 h-full">
        <textarea class="w-full h-64 border p-4 border-grey">
@foreach($songs['short_term'] as $song)
{{ $loop->index + 1}}.@foreach($song->artists as $artist) {{ $artist->name }}{{ (!$loop->last) ? ',' : '' }}@endforeach - {{ $song->name }}
@endforeach</textarea>
            <div class="text-right mt-2">
                <button @click="hide('song_short')" class="bg-transparent hover:bg-red text-red no-underline font-semibold hover:text-white py-2 px-4 border border-red hover:border-transparent rounded">
                    Close
                </button>
            </div>
    </div>
</modal>
<modal name="song_mid" height="auto" :adaptive="true">
    <div class="p-8 h-full">
        <textarea class="w-full h-64 border p-4 border-grey">
@foreach($songs['mid_term'] as $song)
{{ $loop->index + 1}}.@foreach($song->artists as $artist) {{ $artist->name }}{{ (!$loop->last) ? ',' : '' }}@endforeach - {{ $song->name }}
@endforeach</textarea>
            <div class="text-right mt-2">
                <button @click="hide('song_mid')" class="bg-transparent hover:bg-red text-red no-underline font-semibold hover:text-white py-2 px-4 border border-red hover:border-transparent rounded">
                    Close
                </button>
            </div>
    </div>
</modal>
<modal name="song_long" height="auto" :adaptive="true">
    <div class="p-8 h-full">
        <textarea class="w-full h-64 border p-4 border-grey">
@foreach($songs['long_term'] as $song)
{{ $loop->index + 1}}.@foreach($song->artists as $artist) {{ $artist->name }}{{ (!$loop->last) ? ',' : '' }}@endforeach - {{ $song->name }}
@endforeach</textarea>
            <div class="text-right mt-2">
                <button @click="hide('song_long')" class="bg-transparent hover:bg-red text-red no-underline font-semibold hover:text-white py-2 px-4 border border-red hover:border-transparent rounded">
                    Close
                </button>
            </div>
    </div>
</modal>