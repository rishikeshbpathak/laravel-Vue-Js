@extends('frontend.shell')
@section('body')
<div class="shome-padding uk-text-center">
    <img src="{{url('/assets/images/frontend/tabletwithinnerscreen.png')}}" alt="tabletwithinnerscreen" width="50%">
    <h2 class="txt-blue roboto-slab-regular">
        Onlineshop der t:slim X2 Insulinpumpe
    </h2>

    <h4 class="txt-blue">
        Der Zugang ist exklusiv für VitalAire Diabetes-Patienten mit der t:slim
    </h4>
    <div class="uk-padding-large uk-padding-remove-top">
        De peleseq uaepelitis reculpa rumendit volorercimet re licid erfero tem es etusam, quo beaDa senimusdam, santur
        sandelitam et omniatem repudit vel iur as elescium cum eri sinimus antur, atist assimus eos elent officip
        isciandunt, sin prent quundam que imolupt atistin nihit, quibus ero corercim fugit aces mi, ut facepudam
        alitectur sam ducitem dis aliquam, sint. idem ut

    </div>
    <br>
    <a class="custom-button " href="{{url('/login')}}">
        ANMELDEN
    </a>
    <br><br>
    <a href="{{url('/registrierung')}}" class="txt-blue atag">Registrieren</a>
    <br><br>
    <a href="{{url('/')}}" class="txt-blue txt-link atag">
        Zurück zur Website</a>

</div>
@endsection
@push('css')
@css('frontend/shophome')
@endpush