@foreach($range as $artist)
<div class="row @if($loop->first) mt-4 @else mt-1 @endif">
    <div class="col-md-1">
        {{ $loop->index + 1 }}
    </div>
    <div class="col-md-1">
        <img src="{{ $artist->images[2]->url }}" alt="{{ $artist->name }}" style="width: 50px; height: 50px;">
    </div>
    <div class="col-md-6 ml-1 align-self-center">
        <h4><a href="{{ $artist->external_urls->spotify }}" target="_blank" rel="noreferrer noopener" >{{ $artist->name }}</a></h4>
    </div>
</div>
@endforeach