@extends('frontend.shell')
@section('body')
@include('frontend.components.header')
<div class="uk-position-relative">
    <div class="banner-content-absolute" uk-grid>
        <div class="uk-width-1-1 grid-center">
            <div>
                <span class="new-banner-content roboto wh">Technische <br>
                    Hilfestellung</span><br><br>
                <span class="roboto wh sub-banner-content">Deine t:slim X2</span>
            </div>
        </div>
    </div>
    <img class="banner-width"
        src="{{url('/assets/banner/vitalaire-diabetes-header-05-tslim-x2-insulinpumpe-technische-hilfestellung.jpg')}}"
        alt="Technische Hilfestellung banner">
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
                Deine t:slim X2
            </a>
        </div>
        <div class="uk-width-auto txt-blue">
            <span uk-icon="icon:chevron-double-right;" class="vertical-icon"></span>
        </div>
        <div class="uk-width-expand@m uk-width-1-1@s txt-blue-darker">
            <a class="atag font16">
                Technische Hilfestellung
            </a>
        </div>
        {{-- <div class="uk-width-expand uk-visible@m">

        </div> --}}

    </div>

    <h1 class="txt-blue fonth1 roboto-slab-regular">
        Hilfe zur Einstellung der t:slim X2 Insulinpumpe
    </h1>

    <h2 class="txt-blue fonth2 font24">
        Allgemeine technische Informationen und Hilfe zur optimalen Einstelllung
    </h2>

    <div class="" uk-grid>
        <div class="uk-width-2-3@m uk-width-1-1@s">
            <div class="uk-text-justify tslim-para">
                <br>
                <p class="font18">
                    Von den "ersten Schritten zur Einrichtung", über die "Einstellung der Insulinpumpe" bis zur
                    "Insulinpumpe in der Anwendung" gibt es darüber hinaus technische Hilfe, die wir dir von VitalAire
                    bereitstellen. Du kannst jederzeit in den FAQs weitere Antworten auf Fragen von Menschen mit
                    Diabetes sowie aus der Diabetes Community finden.
                </p>
                <p class="font18">
                    Schau dir unsere Videos zu den Einstellungen der t:slim X2 Insulinpumpe an, um sie optimal für dich
                    einzustellen.
                </p>
                <p class="font18">
                    Kommst du nicht weiter, nutze bitte unser Kontaktformular.
                </p>
            </div>
        </div>
        <div class="uk-width-1-3@m uk-width-1-1@s grid-center">
            <div>
                <img src="{{url('/assets/png/frontend/calculatorwithbg.png')}}" alt="calculator">
            </div>
        </div>
    </div>
</div>


<div id="youtube-base">
    @foreach ($tslimsteps as $tslimstep)
    {{-- @if ($loop->index % 2 != 1 ) --}}
    <div id="{{ $tslimstep->id }}-video" class="back-lgrey">
        <div class="cust-padding uk-position-relative">
            <div class="uk-position-center back-grid-left" style="top: 250px !important;">
                <span class="">
                    @if ($loop->index + 1 <= 9) 0{{ $loop->index + 1 }} @else {{  $loop->index + 1 }} @endif </span>
                        </div> <div class="uk-child-width-1-2@m uk-child-width-1-1@s uk-position-relative"
                        style="z-index: 100!important;" uk-grid>
                        <div>
                            <div uk-grid>
                                <div class="uk-width-expand@m uk-width-1-1@s">
                                    <h4 class="txt-blue font24">
                                        {{ $tslimstep->title }}

                                    </h4>
                                </div>
                                <div class="uk-width-auto@m uk-width-1-1@s">
                                    <span class="darkgrey" style="float: right;">
                                        <img src="{{url('/assets/png/frontend/timer.png')}}" width="18"
                                            style="margin-top: -5px" alt="timer">
                                        {{ $tslimstep->vidduration }}
                                    </span>
                                </div>

                            </div>
                            <br><br>
                            <h2 class="roboto-slab-regular darkgrey" style="margin-top: -10px">
                                {{ $tslimstep->subtitle }}
                            </h2>
                            <button uk-toggle="target: #my-id{{$loop->index }}"
                                style="background-color:transparent;border:none;outline:none;" type="button"
                                class="txt-blue"><img src="{{url('/assets/png/frontend/visible.png')}}" width="50"
                                    alt="visible">
                                Videobeschreibung</button>
                            <div id="my-id{{$loop->index }}" hidden>
                                <p class="font18 darkgrey">
                                    {!! $tslimstep->description !!}
                                </p>
                            </div>
                        </div>
                        <div class="mobile-bottom-margin">
                            <div class="">
                                <div class="video-container">
                                    <iframe src="https://www.youtube.com/embed/{{ $tslimstep->video }}">
                                    </iframe>
                                    <br>

                                    @foreach ($pdfcounts as $pdfcount)
                                    @if ($tslimstep->id == $pdfcount['setup_id'])
                                    @if($pdfcount['count'] != 0)
                                    <h4 class="txt-blue font24">
                                        Dokumente
                                    </h4>
                                    @endif
                                    @endif
                                    @endforeach
                                    @foreach ($setuppdfs as $setuppdf)
                                    @if ($setuppdf->setup_id == $tslimstep->id)
                                    <br>
                                    <div class="uk-grid-match" uk-grid>
                                        <div class="uk-width-expand">
                                            <div>
                                                <span class="darkgrey font18">
                                                    {{ $setuppdf->filename }}
                                                </span>
                                            </div>
                                        </div>
                                        <div class="uk-width-auto">
                                            <div>
                                                <a style="text-decoration: none !important;"
                                                    href="{{storage($setuppdf->filelocation)}}" class="download-icon"
                                                    uk-icon="icon:download" target="_blank" rel="noopener"></a>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
            </div>
        </div>
    </div>

    @endforeach
</div>

@include('frontend.components.footer')
@endsection
@push('css')
@css('frontend/einfach')
@endpush