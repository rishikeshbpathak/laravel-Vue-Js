@extends('frontend.shell')
@section('body')
<div class="uk-text-center">
    <div style="padding-top: 5%">
        <h1 style="color:#86b5c3; font-size: 300px">404</h1>
        <h4 style="font-size: 26px">Die gesuchte Seite ist nicht verfügbar.</h4>
    </div>
    <br>
    <a href="{{url('/')}}" style="font-size: 21px" class="buttonnewsletter">Zurück zur Startseite</a>
</div>

@endsection
@push('css')
@css('frontend/unsubscribe')
@endpush