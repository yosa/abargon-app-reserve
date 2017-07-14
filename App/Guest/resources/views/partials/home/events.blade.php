<div class="row">
@if( !count($events))
<div class="col l12">
    <p class="empty">
        <i class="icon fa fa-frown-o" aria-hidden="true"></i><br>
        No hay eventos disponibles, regresa más tarde
    </p>
</div>
@else
    @foreach($events as $r)
    @if ($loop->index % 3 === 0)
    </div><div class="row">
    @endif
    <div class="col s12 m4">
        <div class="card hoverable">
            <div class="card-image">
                <a href="{{ route('event.detail', [
                    'id'=>$r->id,
                    'title'=>str_slug($r->name)
                ]) }}" class="waves-effect">
                    <div class="labels">
                        @if ($r->finalized)
                        <span class="promotion badge red accent-4" data-badge-caption="Finalizado"></span>
                        @endif
                    </div>
                    <img src="{{ route('event.photo', [
                        'id'=>$r->idPhoto,
                        'width'=>1024,
                        'height'=>500
                    ]) }}" alt="{{ $r->name }}" />
                    <span class="card-title">{{ $r->name }}</span>
                </a>
            </div>
            <div class="card-content">
                <p>{{ str_limit($r->description, 100) }}</p>
            </div>
        </div>
    </div>
    @endforeach
@endif
</div>