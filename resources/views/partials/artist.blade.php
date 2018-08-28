<div class="mt-2 md:p-8 mx-auto">
    <carousel :per-page-custom="[[0,1],[500,2],[700,3],[1000,4],[1300,5]]" :pagination-padding="2">
        @foreach($artists[$range] as $artist)
        <slide>
            <img src="{{ getPicture($artist->images) }}" alt="{{ $artist->name }}" class="xs:h-32 xs:w-32 md:h-48 md:w-48">
            <h3 class="mt-2">{{ $loop->index + 1 }}. {{ $artist->name }}</h3>
        </slide>
        @endforeach
    </carousel>
    <div class="text-center mt-8">
        <button @click="show('{{ $range }}')" class="btn hover:text-{{ $color }}">
            Copy
        </button>
    </div>
</div>