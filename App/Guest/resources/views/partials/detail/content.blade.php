<div class="row">
    <div class="col l8">
        <p>{!! str_replace(PHP_EOL, '</p><p>', $event->description) !!}</p>
    </div>
    <div class="col l4">
        <ul>
            <li>
                <b>Fecha inicio: </b> {{ $event->startDate }}
            </li>
            <li>
                <b>Fecha fin: </b> {{ $event->endDate }}
            </li>
            <li>
                <b>Lugares disponibles: </b> {{ $event->maximumCapacity - $event->totalReservations }}
            </li>
            <li>
                <b>Destacado: </b> {{ $event->outstanding ? 'Si' : 'No' }}
            </li>
        </ul>
    </div>
</div>