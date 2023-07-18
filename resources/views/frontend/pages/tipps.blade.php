@extends('frontend.shell')
@section('body')
@include('frontend.components.header')
<div class="uk-position-relative">
    <div class="banner-content-absolute" uk-grid>
        <div class="uk-width-1-1 grid-center">
            <div>
                <span class="new-banner-content roboto wh">Tipps & Tricks</span><br><br>
                <span class="roboto wh sub-banner-content">Deine t:slim X2</span>
            </div>
        </div>
    </div>
    <img class="banner-width"
        src="{{url('/assets/banner/vitalaire-diabetes-header-06-tslim-x2-insulinpumpe-tipps-tricks.jpg')}}"
        alt="Tipps & Tricks banner">
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
        <div class=" uk-width-auto txt-blue">
            <a class="atag font16">
                Deine t:slim X2
            </a>
        </div>
        <div class="uk-width-auto txt-blue">
            <span uk-icon="icon:chevron-double-right;" class="vertical-icon"></span>
        </div>
        <div class="uk-width-expand@m uk-width-1-1@s txt-blue-darker">
            <a class="atag font16">
                Tipps & Tricks
            </a>
        </div>
    </div>

    <h1 class="txt-blue fonth1 roboto-slab-regular">
        Tipps und Tricks zur t:slim X2™ Insulinpumpe
    </h1>

    <h2 class="txt-blue fonth2 font24">
        Tipps zur richtigen Hygiene und Pflege, dem CGM, der Batterie sowie Tricks zur Einstellung von Alarmen und
        weitere Informationen
    </h2>

    <div class="" uk-grid>
        <div class="uk-width-2-3@m uk-width-1-1@s">
            <div class="uk-text-justify tslim-para">
                <br>
                <p class="font18">
                    Hygiene u Pflege
                </p>
                <ul>
                    <li class="font18">
                        Bei Erhalt der t:slim X2™ bitte Aufkleber „mg/dl“ oder „mmol/l“ auf die Rückseite der t:slim X2™
                        auf einer freien Fläche anbringen! ??? ( Kein Aufkleber vorhanden!!!!)
                    </li>
                    <li class="font18">
                        Die auf der Rückseite vorhanden 6 Entlüftungsschlitze sind unbedingt frei und sauber zu halten
                        (keine Cremes, Achtung Schweiß beim Sport etc.) Bei Verschmutzung ertönt ein Alarmsignal
                    </li>
                    <li class="font18">
                        Die t:slim X2™ nur mit einem Mikrofaser-Tuch reinigen ggf. leicht mit Wasser anfeuchten
                    </li>
                    <li class="font18">
                        Bitte Händewaschen vor dem Reservoir-Wechsel, um Verschmutzungen zu vermeiden
                    </li>
                    <li class="font18">
                        Werksseitiger Schutz des Touchscreens der t:slim X2™ durch Panzerglas- bitte nicht entfernen.
                        Bei Bruch ist der Displayschutz austauschbar (Kontakt VitalAire)
                    </li>
                </ul>

                <br>
                <p class="font18">
                    CGM und Batterie
                </p>
                <ul>
                    <li class="font18">
                        Der Akku kann täglich für 10-15 Minuten geladen werden z.B.: während man duscht, im Auto, mit
                        einer Powerbank! Es ist KEINE Überladung möglich.
                    </li>
                    <li class="font18">
                        VOR dem Start der t:slim X2™ muss der Dexcom-Receiver ausgestellt sein. Ggf. ausschalten und 15
                        Minuten warten, bevor die t:slim X2™ mit dem CGM verbunden wird.
                    </li>
                    <li class="font18">
                        Den Dexcom-Sensor G6 entweder auf der Dexcom App (bevorzugt) ODER der t:slim starten- sonst gibt
                        ertönt eine Fehlermeldung.
                    </li>
                    <li class="font18">
                        MERKE: Bei Alarmen auf der Dexcom-App, handelt es sich um ein Sensor Problem-Bitte mit dem
                        Dexcom-Kundendienst Kontakt aufnehmen.
                    </li>
                </ul>

                <br>
                <p class="font18">
                    Alarme und Informationen
                </p>
                <ul>
                    <li class="font18">
                        Bei der ersten Inbetriebnahme und beim Ausschalten der t:slim™, bitte immer an eine Ladequelle
                        anschließen.
                    </li>
                    <li class="font18">
                        Im App-Bildschirm der t:simulator App bitte mit dem Feld t:slimX2™ mg/dl Pumpensimulator oder
                        t:slim X2™ Pumpensimulator mmol/l die Simulation auswählen.
                    </li>
                    <li class="font18">
                        Bitte immer die Pumpensimulation mit der Tastenkombination „1-2-3“ entsperren.
                    </li>
                    <li class="font18">
                        IMMER mit „T“-Home-Taste alle Anwendungen auf der t:slim X2™ abschließen- sonst ertönt z.B.: die
                        Fehlermeldung 11T- Inkompletter Bolus oder Fehlermeldung 12T-inkomplette Temporäre Basalrate
                        oder Fehlermeldung 28T- inkomplette CGM Kopplung, etc.
                    </li>
                    <li class="font18">
                        Achtung im Winter: Von der Wärme in die Kälte ertönt ggf. ein falscher Okklusionsalarm-
                        Empfehlung zur Blutglukose-Messung. Zur Vermeidung: die t:slim X2™ bitte nahe am Körper tragen.
                    </li>
                    <li class="font18">
                        Wenn das CGM- Signal 10 Minuten nicht verfügbar ist, kann die Basal-IQ™ nicht arbeiten- es
                        ertönt ein Alarmsignal ! Bitte die t:slim und das CGM Gerät wieder verbinden lassen.
                    </li>
                    <li class="font18">
                        Es ertönt ein Alarmsignal bei Signalverlust vom Transmitter zur t:slim™. Eventuell stören andere
                        Bluetooth-Geräte wie z.B. Babyfon die Verbindung zwischen t:slim und CGM
                    </li>
                    <li class="font18">
                        Wir empfehlen die t:slim X2™ und CGM Sensor möglichst auf der gleichen Köperseite tragen, um
                        eine ungestörte Kommunikation beider Geräte zu begünstigen.
                    </li>
                    <li class="font18">
                        Achtung Magnetfelder! Röntgen, CT, MRT, Nuklearmedizinische Untersuchungen, Ganzkörperscan am
                        Flughafen, bestimmte Fahrgeschäfte im Freizeitpark sind unbedingt zu VERMEIDEN-
                        MERKE: Alle Umgebungsbedingungen die für Herzschrittmacher ungeeignet sind, sollten mit der
                        t:slim X2 ebenfalls gemieden werden.
                    </li>
                    <li class="font18">
                        MERKE: Alarme IMMER quittieren!
                    </li>
                    <li class="font18">
                        MERKE: Alle einzustellenden Schritte IMMER mit „T“-Home Taste abschließen
                    </li>
                    <li class="font18">
                        MERKE: IMMER lesen was auf dem Bildschirm steht!
                    </li>
                </ul>
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