<div class="mt-2 md:p-8 mx-auto">
    <carousel :per-page-custom="[[0,1],[500,2],[700,3],[1000,4],[1300,5]]" :pagination-padding="2">
        @foreach($songs[$range] as $song)
        <slide>
            <img src="{{ getPicture($song->album->images) }}" alt="{{ $song->name }}" class="xs:h-32 xs:w-32 md:h-48 md:w-48">
            <h3 class="mt-2 {{ (strlen($song->name) > 20) ? 'text-base' : '' }}">{{ $loop->index +1 }}. {{ $song->name }}</h3>
            <p>@foreach($song->artists as $artist) {{ $artist->name }}@if(!$loop->last),@endif @endforeach</p>
        </slide>
        @endforeach
    </carousel>
    <div class="text-center mt-8">
        <button @click="show('{{ $range }}')" class="btn hover:text-{{ $color }}">
            Copy
        </button>
        <a href="/playlist/create/{{ $range }}" class="btn hover:text-{{ $color }}">
            Create Playlist
        </a>
    </div>
</div>