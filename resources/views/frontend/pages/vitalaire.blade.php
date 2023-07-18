@extends('frontend.shell')
@section('body')
@include('frontend.components.header')
<img src="{{url('/assets/images/frontend/vitalairepagemain.png')}}" class="vitalpagemain" alt="VitalAire" />
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
        <div class="uk-width-expand@m uk-width-1-1@s txt-blue-darker">
            <a class="vitalaireatag font16">
                VitalAire
            </a>
        </div>
        {{-- <div class="uk-width-expand uk-visible@m">

        </div> --}}

    </div>

    <h1 class="txt-blue fonth1 roboto-slab-regular">
        VitalAire Deutschland - ein Unternehmen der Air Liquide
    </h1>
    <div class="" uk-grid>
        <div class="uk-width-2-3@m uk-width-1-1@s">
            <h2 class="txt-blue fonth2 font24">
                Als Homecare-Spezialist unterstützen und betreuen wir täglich mehr als 190.000 Patienten in Deutschland
            </h2>
            <br>
            <div class="uk-text-justify tslim-para font18">
                <p>
                    VitalAire ist ein deutschlandweit agierendes Homecare Unternehmen und kompetenter Partner in den
                    Bereichen respiratorische Heim- und kontinuierliche Infusionstherapie für Menschen mit chronischen
                    Erkrankungen.
                </p>
                <p>
                    Unsere Kundennähe, sowie ein hervorragendes Servicegefühl zeichnen unsere Tätigkeit aus. Als
                    Unternehmen der AIR LIQUIDE Healthcare sind wir ein starker internationaler Partner für unsere 1,5
                    Mio.
                    Patienten weltweit.
                </p>
                <p>
                    VitalAire ist Importeur für die t:slim X2 Insulinpumpe und alle zugehörenden Produkte in
                    Deutschland.
                </p>
                <p>
                    Wenn Sie mehr über unsere einzelnen Therapiebereiche erfahren möchten, besuchen Sie unsere Website:
                </p>
            </div>
        </div>
        <div class="uk-width-1-3@m uk-width-1-1@s  grid-center" style="padding-left: 80px">
            <div class="uk-text-center">
                <img src="{{url('/assets/images/frontend/vitalairelogorgb.png')}}" alt="Vital Aire Logo">
            </div>
        </div>
    </div>
    <div class="vitalairecenter">
        <a class="custom-button font16" href="https://www.vitalaire.de">
            ZUR WEBSEITE VON VITALAIRE
        </a>
    </div>
</div>

@include('frontend.components.footer')
@endsection
@push('css')
@css('frontend/vitalaire')
@endpush
