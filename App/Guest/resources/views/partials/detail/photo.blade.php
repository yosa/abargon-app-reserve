@if( count($event->idPhoto))
<img src="{{ route('event.photo', [
    'id'=>$event->idPhoto,
    'width'=>1024,
    'height'=>500
]) }}" alt="{{ $event->name }}" />
<p class="event-name white-text">{{ $event->name }}</p>
@else
<img src="https://loremflickr.com/1024/500/girl?random=1" alt="Foto no especificada" />
@endif