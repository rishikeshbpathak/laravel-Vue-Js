@extends('frontend.shell')
@section('body')
@include('frontend.components.header')
<div class="uk-position-relative">
    <div class="banner-content-absolute" uk-grid>
        <div class="uk-width-1-1 grid-center">
            <div>
                <span class="new-banner-content roboto wh">Danke</span><br><br>
                <span class="roboto wh sub-banner-content">Service & Support</span>
            </div>
        </div>
    </div>
    <img class="banner-width"
        src="{{url('/assets/banner/vitalaire-diabetes-header-09-tslim-x2-insulinpumpe-kontakt.jpg')}}" alt="Danke banner">
    <br class="mob">
</div>
<div class="form-padding custom-padding-top">
    <div uk-grid class="nav-tab">
        <div class="uk-width-auto">
            <a href="{{url('')}}">
                <img src="{{url('/assets/icons/home.png')}}" class="home-icons" alt="home">
            </a>
        </div>
        <div class="uk-width-auto txt-blue">
            <span uk-icon="icon:chevron-double-right;" class="vertical-icon"></span>
        </div>
        <div class="uk-width-auto txt-blue">
            <a class="atag font16">
                Service & Support
            </a>
        </div>
        <div class="uk-width-auto txt-blue">
            <span uk-icon="icon:chevron-double-right;" class="vertical-icon"></span>
        </div>
        <div class="uk-width-auto txt-blue">
            <a class="atag font16" href="{{url('/kontakt')}}">
                Kontakt
            </a>
        </div>
        <div class="uk-width-auto txt-blue">
            <span uk-icon="icon:chevron-double-right;" class="vertical-icon"></span>
        </div>
        <div class="uk-width-expand@m uk-width-1-1@s txt-blue-darker">
            <a class="atag font16">
                Danke
            </a>
        </div>


        {{-- <div class="uk-width-expand uk-visible@m">

        </div> --}}

    </div>
    <h1 class="txt-blue fonth1 roboto-slab-regular">
        Vielen Dank für deinen Anfrage
    </h1>

    <h2 class="txt-blue fonth2 font24">
        Sie wurde erfolgreich an uns gesendet. Wir melden uns umgehend bei dir. Dein VitalAire Diabetes Team
    </h2>

</div>
@include('frontend.components.footer')
@push('js')
@js('frontend/kontaktform')
@js('backend/jquery.min')
{{-- @js('backend/recaptcha') --}}
@endpush
@endsection
@push('css')
@css('frontend/registrierung')
@endpush