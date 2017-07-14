@extends('layouts.reports')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="page-header">
                <h1 class="title">{{ $report->name }}</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h3>Descripción</h3>
            <p>{!! str_replace(PHP_EOL, '</p><p>', $report->description) !!}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h3>Reservaciones</h3>
            <table class="table">
                <tbody>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Correo electronico</th>
                        <th>Numero de personas</th>
                        <th>Reservado a las</th>
                    </tr>
                    @if( !count($report->reservations))
                    <tr>
                        <td colspan="5" class="empty">Sin reservaciones</td>
                    </tr>
                    @else
                        @foreach( $report->reservations as $reservation)
                    <tr>
                        <td>{{ $reservation->name }}</td>
                        <td>{{ $reservation->lastname }}</td>
                        <td>{{ $reservation->email }}</td>
                        <td>{{ $reservation->numberPeople }}</td>
                        <td>{{ $reservation->createdAt }}</td>
                    </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection