@extends('frontend.shell')
@section('body')
@include('frontend.components.header')
<div class="uk-position-relative">
    <div class="banner-content-absolute" uk-grid>
        <div class="uk-width-1-1 grid-center">
            <div>
                <span class="new-banner-content roboto wh">Erste Schritte <br>
                    mit der t:slim X2</span><br><br>
                <span class="roboto wh sub-banner-content">Service & Support</span>
            </div>
        </div>
    </div>
    <img class="banner-width"
        src="{{url('/assets/banner/vitalaire-diabetes-header-02-tslim-x2-insulinpumpe-erste-schritte.jpg')}}"
        alt="Erste Schritte mit der t:slim X2 banner">
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
                Erste Schritte mit der t:slim X2
            </a>
        </div>

    </div>

    <h1 class="txt-blue fonth1 roboto-slab-regular">
        Los geht’s mit der neuen t:slim X2™ Insulinpumpe
    </h1>

    <h2 class="txt-blue fonth2 font24" style="margin-top: -5px;">
        Hier einige wichtige Hinweise zur Nutzung der Insulinpumpe unter alltäglichen Bedingungen
    </h2>

    <div class="" uk-grid>
        <div class="uk-width-2-3@m uk-width-1-1@s">
            <div class="uk-text-justify tslim-para">
                <br>
                <H3 class="txt-blue font20"><b>Allgemeines:</b></H3>
                <ul class="font18">
                    <li>
                        <p>
                            Das Display der t:slim X2™ Insulinpumpe ist werkseitig mit einer Schutzfolie versehen –
                            bitte nicht entfernen. Bei Beschädigung kann der Displayschutz ausgetauscht werden (bitte
                            direkt an VitalAire wenden).
                        </p>
                    </li>
                    <li>
                        <p>
                            Die t:slim X2 bitte nicht verwenden bei: Röntgenstrahlung, CT, MRT, nuklearmedizinischen
                            Untersuchungen, Ganzkörperscan am Flughafen sowie manchen Fahrgeschäften in Freizeitparks.
                            Es gilt: Alle Umgebungsbedingungen, die für Herzschrittmacher ungeeignet sind, sollten mit
                            der t:slim X2 ebenfalls gemieden werden.
                        </p>
                    </li>
                    <li>
                        <p>
                            In der kalten Jahreszeit sollte die t:slim X2 Pumpe nah am Körper getragen werden.
                        </p>
                    </li>
                    <li>
                        <p>
                            Die auf der Rückseite vorhandenen Entlüftungsschlitze sind unbedingt frei zu halten (keine
                            Cremes, Schweiß beim Sport etc.). Bei Verstopfung der Entlüftungslöcher ertönt ein
                            Alarmsignal.
                        </p>
                    </li>
                    <li>
                        <p>
                            Die t:slim X2 mit einem Mikrofasertuch reinigen, Tuch ggf. leicht mit Wasser anfeuchten.
                        </p>
                    </li>
                    <li>
                        <p>
                            Zum Schutz der Insulinpumpe vor Kratzern oder Beschädigung z.B. durch Stürze, sollte die
                            Pumpe immer in einer Pumpenhülle getragen werden.
                        </p>
                    </li>
                    <li>
                        <p>
                            Bevor die Pumpe in die Tasche gesteckt wird, sollte der Pumpenbildschirm ausgeschaltet
                            werden.
                        </p>
                    </li>
                </ul>
                <p class="font18"></p>
                <H3 class="txt-blue font20"><b>Aufladen der t:slim X2 Insulinpumpe</b></H3>
                <ul class="font18">
                    <li>
                        <p>
                            Für die erste Inbetriebnahme muss die t:slim X2 an eine Ladequelle angeschlossen werden.
                        </p>
                    </li>
                    <li>
                        <p>
                            Bei vollständig entladenem Akku kann das Aufladen bis zu 2,5 Stunden dauern. Vorteil: Es ist
                            kein Abnehmen der Pumpe während des Aufladens notwendig.
                        </p>
                    </li>
                    <li>
                        <p>
                            Die Aufladung der Pumpe mit dem zugehörigen USB-Kabel kann über eine Wandsteckdose, eine
                            Powerbank oder den USB-Kfz-Adapter erfolgen.
                        </p>
                    </li>
                    <li>
                        <p>
                            Der Akku kann täglich für 10–15 Minuten geladen werden, z.B. während man duscht, die Zähne
                            putzt oder im Auto auf dem Weg zur Arbeit. 
                        </p>
                    </li>
                    <li>
                        <p>
                            Es ist KEINE Überladung möglich. Kein Memory-Effekt durch Akkutechnologie –
                            wiederaufladbarer Lithium-Polymer-Akku.
                        </p>
                    </li>
                    <li>
                        <p>
                            Akku hält bei CGM-Nutzung ca. 4 Tage, ohne CGM-Nutzung bis zu 7 Tage.
                        </p>
                    </li>
                    <li>
                        <p>
                            Die Anzeige des Akku-Ladezustands befindet sich in der linken oberen Ecke des
                            Startbildschirms. Der Akkuladestand wird oberhalb von 5 % in 5-%-Schritten angezeigt (z. B.
                            100 %, 95 %, 90 %, 85 %). Sobald er weniger als 5 % beträgt, erfolgt die Anzeige in
                            Schritten von 1 % (z. B. 4 %, 3 %, 2 %, 1 %).
                        </p>
                    </li>
                </ul>
                <p class="font18"></p>
                <H3 class="txt-blue font20"><b>CGM-Nutzung</b></H3>
                <ul class="font18">
                    <li>
                        <p>
                            Der Dexcom Sensor kann nur mit einem Gerät verbunden werden, entweder mit der t:slim X2
                            oder dem Dexcom Empfänger. Bevor die t:slim X2 mit dem CGM verbunden wird, muss der Dexcom
                            Empfänger mind. 15 Minuten vorher ausgeschaltet werden.
                        </p>
                    </li>
                    <li>
                        <p>
                            Die Nutzung der Dexcom App und der t:slim X2 sind gleichzeitig möglich. Die Sensorsitzung
                            sollte jedoch entweder auf der Dexcom App (bevorzugt) oder der t:slim X2 gestartet werden,
                            sonst kann eine Fehlermeldung ertönen.
                        </p>
                    </li>
                    <li>
                        <p>
                            Bei Signalverlust vom Dexcom Transmitter zur t:slim X2 Insulinpumpe ertönt ein
                            Alarmsignal. Eventuell stören andere Bluetooth-Geräte wie z.B. Babyfon oder Musikboxen die
                            Verbindung.
                        </p>
                    </li>
                    <li>
                        <p>
                            Die t:slim X2 Insulinpumpe und den Dexcom G6 Sensor möglichst auf derselben Körperseite tragen, um
                            eine ungestörte Kommunikation beider Geräte zu ermöglichen.
                        </p>
                    </li>
                </ul>
                <H3 class="txt-blue font20"><b>Alarme</b></H3>
                <ul class="font18">
                    <li>
                        <p>
                            Immer lesen, was auf dem Bildschirm steht!
                        </p>
                    </li>
                    <li>
                        <p>
                            Alarme immer quittieren!
                        </p>
                    </li>
                    <li>
                        <p>
                            Um von der Pumpe eine Warnung zu erhalten, wenn sich die Glukosewerte außerhalb des
                            Zielbereichs befinden oder schnell ändern, müssen die entsprechenden Warnmeldungen im
                            CGM-Menü aktiviert sein. 
                        </p>
                    </li>
                    <li>
                        <p>
                            Um eine Warnmeldung bei Unterbrechung und Fortsetzung der Insulinabgabe zu erhalten, sind
                            die Warneinstellungen im Basal-IQ™ Menü zu aktivieren.
                        </p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="uk-width-1-3@m uk-width-1-1@s grid-center">
            <div>
                <img src="{{url('/assets/png/frontend/fingersensorwithbg.png')}}" alt="fingersensor">
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
@css('frontend/erste')
{{-- @push('js')
@js('frontend/myjs') --}}
@endpush