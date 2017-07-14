@if( count($outstanding))
<div class="carousel carousel-slider">
    @foreach($outstanding as $r)
    <a class="carousel-item" href="{{ route('event.detail', [
        'id'=>$r->id,
        'title'=>str_slug($r->name)
    ]) }}">
        <img src="{{ route('event.photo', [
            'id'=>$r->idPhoto,
            'width'=>1024,
            'height'=>500
        ]) }}" alt="{{ $r->name }}" />
        <p class="event-name white-text">{{ $r->name }}</p>
    </a>
    @endforeach
</div>
@endif