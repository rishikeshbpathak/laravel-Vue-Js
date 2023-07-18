@extends('frontend.shell')
@section('body')
@include('frontend.components.header')
<div class="uk-position-relative">
    <div class="banner-content-absolute" uk-grid>
        <div class="uk-width-1-1 grid-center">
            <div>
                <span class="new-banner-content roboto wh">Videos zum Einstellen<br>
                    der t:slim X2 Insulinpumpe</span><br><br>
                <span class="roboto wh sub-banner-content">Service & Support</span>
            </div>
        </div>
    </div>
    <img class="banner-width"
        src="{{url('/assets/banner/vitalaire-diabetes-header-03-tslim-x2-insulinpumpe-einstellungen.jpg')}}"
        alt="Videos zum Einstellen der t:slim X2 banner">
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
                Service & Support
            </a>
        </div>
        <div class="uk-width-auto txt-blue">
            <span uk-icon="icon:chevron-double-right;" class="vertical-icon"></span>
        </div>
        <div class="uk-width-expand@m uk-width-1-1@s txt-blue-darker">
            <a class="atag font16">
                Videos zum Einstellen der t:slim X2
            </a>
        </div>
    </div>

    <h1 class="txt-blue fonth1 roboto-slab-regular">
        Die t:slim X2™ optimal einstellen
    </h1>

    <h2 class="txt-blue fonth2 font24" style="margin-top: -5px;">
        Videos und Videobeschreibungen zur Einstellung der Insulinpumpe
    </h2>

    <div class="" uk-grid>
        <div class="uk-width-2-3@m uk-width-1-1@s">
            <div class="uk-text-justify tslim-para">
                <br>
                <p class="font18">
                    Als zusätzliche Unterstützung stehen neben der Gebrauchsanleitung kurze Anwendungsvideos für die
                    t:slim X2™ Insulinpumpe bereit. <br>
                    Durch Klick auf den Titel wird das Video geöffnet, neben der Darstellung findet man unter
                    Videobeschreibungen auch die gesamten deutschen Untertitel auf einen Blick wieder.
                </p>
                <p class="font18">
                    <b>Tipp:</b> Sollte das Video zu schnell wiedergegeben werden, findet man unter Einstellungen in
                    YouTube
                    die Möglichkeit zu einer langsameren Wiedergabe (z.B. 0,5x).
                </p>

                <ol>
                    <h3 style="margin-left:-30px; margin-top:40px;" class="font20 txt-blue">
                        <b>
                            Allgemeine Pumpeneinstellungen
                        </b>
                    </h3>
                    <li class="font18">
                        <a class="link" href="#41-video">
                            Zurück zum Startbildschirm
                        </a>
                    </li>
                    <li class="font18">
                        <a class="link" href="#7-video">
                            Ganz einfach die Uhrzeit und das Datum ändern
                        </a>
                    </li>
                    <li class="font18">
                        <a class="link" href="#43-video">
                            Funktionen der farbigen LED-Anzeige
                        </a>
                    </li>
                    <li class="font18">
                        <a class="link" href="#42-video">
                            Aktuelle Softwareversion anzeigen
                        </a>
                    </li>
                    <li class="font18">
                        <a class="link" href="#44-video">
                            t:slim X2 ausschalten
                        </a>
                    </li>
                    <li class="font18">
                        <a class="link" href="#37-video">
                            Insulinabgabe manuell fortsetzen
                        </a>
                    </li>
                    <h3 style="margin-left:-30px" class="font20 txt-blue">
                        <b>
                            Parametereinstellungen
                        </b>
                    </h3>
                    <li class="font18">
                        <a class="link" href="#26-video">
                            Persönliches Profil erstellen
                        </a>
                    </li>
                    <li class="font18">
                        <a class="link" href="#34-video">
                            Temporäre Basalrate einstellen
                        </a>
                    </li>
                    <li class="font18">
                        <a class="link" href="#27-video">
                            Transmitter-ID eingeben
                        </a>
                    </li>
                    <h3 style="margin-left:-30px" class="font20 txt-blue">
                        <b>
                            Reservoir
                        </b>
                    </h3>
                    <li class="font18">
                        <a class="link" href="#28-video">
                            Reservoir richtig befüllen 
                        </a>
                    </li>
                    <li class="font18">
                        <a class="link" href="#29-video">
                            Reservoir Füllstandsanzeige
                        </a>
                    </li>
                    <h3 style="margin-left:-30px" class="font20 txt-blue">
                        <b>
                            Bolus
                        </b>
                    </h3>
                    <li class="font18">
                        <a class="link" href="#32-video">
                            So funktioniert der Bolusrechner
                        </a>
                    </li>
                    <li class="font18">
                        <a class="link" href="#30-video">
                            Einen Bolus abgeben
                        </a>
                    </li>
                    <li class="font18">
                        <a class="link" href="#33-video">
                            Einen verlängerten Bolus abgeben
                        </a>
                    </li>
                    <li class="font18">
                        <a class="link" href="#35-video">
                            Einen Sofortbolus einstellen
                        </a>
                    </li>
                </ol>
                <ol>
                    <h3 style="margin-left:-30px; margin-top:40px;" class="font20 txt-blue">
                        <b>
                            Infusionssets
                        </b>
                    </h3>
                    <li class="font18">
                        <a class="link" href="#45-video">
                            Einführen des AutoSoft™ 30 Infusionssets
                        </a>
                    </li>
                    <li class="font18">
                        <a class="link" href="#46-video">
                            Einführen des AutoSoft™ 90 Infusionssets
                        </a>
                    </li>
                    <li class="font18">
                        <a class="link" href="#47-video">
                            Einführen des TruSteel™ Infusionssets
                        </a>
                    </li>
                    <li class="font18">
                        <a class="link" href="#48-video">
                            Einführen des VariSoft™ Infusionssets
                        </a>
                    </li>
                </ol>


            </div>
        </div>
        <div class="uk-width-1-3@m uk-width-1-1@s grid-center">
            <div>
                <img src="{{url('/assets/png/frontend/settingswithbg.png')}}" alt="settings">
            </div>
        </div>
    </div>
</div>

<div id="youtube-base">
    @foreach ($insulinpumpsetting as $tslimstep)
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