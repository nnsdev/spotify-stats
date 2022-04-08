<div class="mt-2 md:p-8 mx-auto">
    <carousel :per-page-custom="[[0,1],[500,2],[700,3],[1000,4],[1300,5]]" :pagination-padding="2">
        @foreach($songs[$range."_term"] as $song)
        <slide>
            <img src="{{ getPicture($song->album->images) }}" alt="{{ $song->name }}" class="xs:h-48 xs:h-48 md:h-64 md:w-64">
            <h3 class="text-xl font-semibold mt-2 {{ (strlen($song->name) > 20) ? 'text-base' : '' }}">{{ $loop->index +1 }}. {{ $song->name }}</h3>
            <p>@foreach($song->artists as $artist) {{ $artist->name }}@if(!$loop->last),@endif @endforeach</p>
        </slide>
        @endforeach
    </carousel>
    <div class="text-center mt-8">
        <button @click="show('song_{{ $range }}')" class="btn hover:text-{{ $color }}">
            Copy
        </button>
        <a href="/playlist/create/{{ $range }}_term" class="btn hover:text-{{ $color }}">
            Create Playlist
        </a>
    </div>
</div>
