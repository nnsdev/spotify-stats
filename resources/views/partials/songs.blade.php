<p class="mt-4">
  <a class="btn btn-primary" data-toggle="collapse" href="#export-song-{{ $range_title }}" role="button" aria-expanded="false" aria-controls="export-song-{{ $range_title }}">Export</a>
</p>
<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="export-song-{{ $range_title }}">
      <div class="card card-body">
        @foreach($range as $song)
        {{ $loop->index + 1}}. @foreach($song->artists as $artist) {{ $artist->name }}@if(!$loop->last),@endif @endforeach - {{ $song->name }}<br>
        @endforeach
      </div>
    </div>
  </div>
</div>
@foreach($range as $song)
<div class="row @if($loop->first) mt-4 @else mt-1 @endif">
    <div class="col-md-1">
        {{ $loop->index + 1 }}
    </div>
    <div class="col-md-1">
        <img src="{{ $song->album->images[2]->url ?? $song->album->images[0]->url }}" alt="{{ $song->name }}" style="width: 50px; height: 50px;">
    </div>
    <div class="col-md-6 ml-1 align-self-center">
        <h4>
            <a href="{{ $song->external_urls->spotify }}" target="_blank" rel="noreferrer noopener" >
                @foreach($song->artists as $artist) {{ $artist->name }}@if(!$loop->last),@endif @endforeach - {{ $song->name }}
            </a>
        </h4>
    </div>
</div>
@endforeach