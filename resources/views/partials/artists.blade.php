<p class="mt-4">
  <a class="btn btn-primary" data-toggle="collapse" href="#export-artist-{{ $range_title }}" role="button" aria-expanded="false" aria-controls="export-artist-{{ $range_title }}">Export</a>
</p>
<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="export-artist-{{ $range_title }}">
      <div class="card card-body">
        @foreach($range as $artist)
        {{ $loop->index + 1}}. {{ $artist->name }}<br>
        @endforeach
      </div>
    </div>
  </div>
</div>
@foreach($range as $artist)
<div class="row mt-1">
    <div class="col-md-1">
        {{ $loop->index + 1 }}
    </div>
    <div class="col-md-1">
        <img src="{{ $artist->images[2]->url ?? $artist->images[0]->url }}" alt="{{ $artist->name }}" style="width: 50px; height: 50px;">
    </div>
    <div class="col-md-6 ml-1 align-self-center">
        <h4><a href="{{ $artist->external_urls->spotify }}" target="_blank" rel="noreferrer noopener" >{{ $artist->name }}</a></h4>
    </div>
</div>
@endforeach