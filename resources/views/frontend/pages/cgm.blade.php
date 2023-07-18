@extends('frontend.shell')
@section('body')
@include('frontend.components.header')
<div class="uk-position-relative">
    <div class="banner-content-absolute" uk-grid>
        <div class="uk-width-1-1 grid-center">
            <div>
                <span class="new-banner-content roboto wh">Integration rtCGM</span><br><br>
                <span class="roboto wh sub-banner-content">Zuverlässig unterwegs</span>
            </div>
        </div>
    </div>
    <img class="banner-width"
        src="{{url('/assets/banner/vitalaire-diabetes-header-12-deine-tslim-x2-insulinpumpe-fgm-cgm.jpg')}}" alt="Integration rtCGM Banner">
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
                Integration rtCGM
            </a>
        </div>

    </div>

    <h1 class="txt-blue fonth1 roboto-slab-regular">
        rtCGM Nutzung mit der t:slim X2™ Insulinpumpe
    </h1>

    <h2 class="txt-blue fonth2 font24" style="margin-top: -5px;">
        Mit dem Dexcom G6 ohne Fingerstechen Therapieentscheidungen treffen
    </h2>
    <br>
    <div class="" uk-grid>
        <div class="uk-width-2-3@m uk-width-1-1@s">
            <div class="uk-text-justify tslim-para">
                <p class="font18">
                    Bei Verbindung des Dexcom G6 Systems mit der t:slim X2™ Insulinpumpe können die CGM Sensormesswerte
                    alle 5 Minuten an die Insulinpumpe übermittelt werden. Dabei wird der Dexcom Empfänger durch die
                    t:slim X2 Insulinpumpe ersetzt, und die Sensormesswerte werden direkt auf dem Display der
                    Insulinpumpe angezeigt, ohne dass eine Kalibrierung erforderlich ist. Die CGM Sensormesswerte können
                    zusätzlich auf das Smartphone bei Verwendung der Dexcom App übermittelt werden. <br>
                    Das Dexcom G6 ist das einzige werkseitig kalibrierte System zur kontinuierlichen Glukosemessung
                    (CGM), das für Therapieentscheidungen ohne Fingerstechen* zugelassen ist. Die Sensor-Tragezeit
                    beträgt 10 Tage und die Laufzeit des Transmitters bis zu 3 Monate. <br>
                    Die Dexcom G6 Sensoren und Transmitter werden separat von der Dexcom GmbH verkauft und sind nicht
                    bei der VitalAire GmbH erhältlich. Weitere Informationen zum Produkt finden Sie auf der Website des
                    Herstellers <a href="https://www.dexcom.com/de-DE" target="_blank" rel="noopener"
                        class="link">Dexcom</a>.
                </p>
                <p class="font16">
                    Dexcom und Dexcom G6 ist eine eingetragene Marke oder eine Marke von Dexcom, Inc. in den USA
                    und/oder anderen Ländern.
                </p>
            </div>
        </div>
        <div class="uk-width-1-3@m uk-width-1-1@s grid-center">
            <div>
                <img src="{{url('/assets/png/frontend/integrationwithbg.png')}}" alt="integration">
            </div>
        </div>
    </div>
</div>
@include('frontend.components.footer')
@endsection
@push('css')
@css('frontend/basal')
@endpush