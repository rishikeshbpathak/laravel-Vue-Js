@extends('frontend.shell')
@section('body')
@include('frontend.components.header')
<div class="uk-position-relative">
    <div class="banner-content-absolute" uk-grid>
        <div class="uk-width-1-1 grid-center">
            <div>
                <span class="new-banner-content roboto wh">Anwendung <br>
                    diasend by glooko</span><br><br>
                <span class="roboto wh sub-banner-content">Alles auf einen Blick</span>
            </div>
        </div>
    </div>
    <img class="banner-width"
        src="{{url('/assets/banner/vitalaire-diabetes-header-13-deine-tslim-x2-insulinpumpe-diasend-glooko.jpg')}}"
        alt="Anwendung diasend by glooko banner">
    <br class="mob">
</div>
<div class="cust-padding custom-padding-top">
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
                t:slim X2
            </a>
        </div>
        <div class="uk-width-auto txt-blue">
            <span uk-icon="icon:chevron-double-right;" class="vertical-icon"></span>
        </div>
        <div class="uk-width-expand@m uk-width-1-1@s txt-blue-darker">
            <a class="atag font16">
                Anwendung diasend by glooko
            </a>
        </div>
    </div>

    <h1 class="txt-blue fonth1 roboto-slab-regular">
        Auslesen der t:slim X2™ Insulinpumpe mit diasend by glooko
    </h1>

    <h2 class="txt-blue fonth2 font24" style="margin-top: -5px;">
        Das Auslesen der t:slim X2 ist mit der diasend/glooko Software möglich
    </h2>
    <br>
    <div class="" uk-grid>
        <div class="uk-width-2-3@m uk-width-1-1@s">
            <div class="uk-text-justify tslim-para" style="margin: auto">
                <p class="font18">
                    Die Firma diasend bietet einen deutschsprachigen Support für alle Nutzer ihrer Software.
                    Die Server sind in Europa (Göteborg) gehostet und bieten dadurch europäischen Standard.
                </p>
                <p class="font18">
                    Parallel zu den Daten der tslim X2™ können die Clarity-Daten dargestellt werden, was eine einfache
                    Auswertung mit sich bringt.
                </p>
                <p class="font18">
                    Weitere Informationen finden sich auf der Webseite von <a class="link" title="diasend"
                        target="_blank" href="https://www.diasend.com/?locale=de_DE">diasend</a>.
                </p>
            </div>
        </div>
        <div class="uk-width-1-3@m uk-width-1-1@s grid-center">
            <div>
                <img src="{{url('/assets/png/frontend/diasendwithbg.png')}}" alt="diasend">
            </div>
        </div>
    </div>
</div>
@include('frontend.components.footer')
@endsection
@push('css')
@css('frontend/basal')
@endpush