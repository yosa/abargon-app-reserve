@extends('layouts.guest')

@section('head')
<link href="/reserve/css/site.css?v=1.0.0" rel="stylesheet">
@endsection

@section('content')
    @include('partials.navigation')
    <div class="container-fluid section-detail-photo">
        <section>
            @include('partials.detail.photo')
        </section>
    </div>
    <div class="container">
        <section class="section-detail-content">
            @include('partials.detail.content')
        </section>
    </div>
    <div class="container">
        <section class="section-detail-form">
            @include('partials.detail.reservation')
        </section>
    </div>
@endsection

@section('footer')
@include('partials.errors')
@include('partials.scripts')
@include('partials.google.analytics')
@endsection
