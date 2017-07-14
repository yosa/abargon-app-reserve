@extends('layouts.guest')

@section('head')
<link href="/reserve/css/site.css?v=1.0.0" rel="stylesheet">
@endsection

@section('content')
    @include('partials.navigation')
    <div class="container-fluid section-carousel">
        <section>
            @include('partials.home.carrousel')
        </section>
    </div>
    <div class="container section-events">
        <section>
            @include('partials.home.events')
        </section>
    </div>
@endsection

@section('footer')
@include('partials.errors')
@include('partials.scripts')
@include('partials.google.analytics')
@endsection
