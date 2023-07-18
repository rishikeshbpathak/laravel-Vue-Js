@extends('frontend.shell')
@section('body')
@include('frontend.components.header')
<div class="uk-position-relative">
    <div class="banner-content-absolute" uk-grid>
        <div class="uk-width-1-1 grid-center">
            <div>
                <span class="new-banner-content roboto wh">t:slim X2 Insulinpumpe</span><br><br>
                <span class="roboto wh sub-banner-content">Uneingeschränkt im Alltag</span>
            </div>
        </div>
    </div>
    <img class="banner-width" style="height: 120%"
        src="{{url('/assets/banner/vitalaire-diabetes-header-10-deine-tslim-x2-insulinpumpe.jpg')}}"
        alt="t:slim X2 Insulinpumpe banner">
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
            <a class="tslimatag font16">
                t:slim X2 Insulinpumpe
            </a>
        </div>

    </div>

    <h1 class="txt-blue fonth1 roboto-slab-regular">
        Die t:slim X2™ Insulinpumpe – entspannter mit Diabetes leben
    </h1>

    <h2 class="txt-blue roboto fonth2 font24" style="margin-top: -5px">
        Innovative Technik im Hintergrund, einfache Handhabung im Vordergrund
    </h2>
    <div class="" uk-grid>
        <div class="uk-width-2-3@m uk-width-1-1@s">
            <div class="uk-text-justify tslim-para">
                <br>
                <p class="font18">
                    Intensive Entwicklung und jahrelange Erfahrung sind in einer Insulinpumpe vereint, die den
                    Markt neu definiert. Ob Control-IQ™ Technologie oder Basal-IQ™ Technologie und CGM-Integration
                    – hinter den Kulissen setzt die t:slim X2™ Insulinpumpe alles daran, die Überwachung des
                    Glukosespiegels zu erleichtern, und vieles läuft dabei automatisch.
                </p>
                <p class="font18">
                    (Control-IQ Technologie: ab 25 kg Körpergewicht und mindestens 10 E Tagesinsulinbedarf).
                </p>
            </div>
        </div>
        <div class="uk-width-1-3@m uk-width-1-1@s grid-center">
            <div>
                <img src="{{url('/assets/images/frontend/tabletwithinnerscreenwithproductcontrol.png')}}" alt="tablet">
            </div>
        </div>
    </div>
</div>
<div class="back-grey">
    <div class="cust-padding uk-text-center">
        <h3 class="roboto-slab-regular txt-grey" style="letter-spacing: 1.5px;">Innovative Technologie und modernes
            Design für alle Lebenslagen</h3>
        <br>
        <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match button-height-tslim-relative" uk-grid>
            <div>
                <div>
                    <img src="{{url('/assets/png/frontend/control.png')}}" width="60" alt="calculator">
                    <h4 class="txt-blue font24">
                        Control-IQ™ Technologie
                    </h4>
                    <br class="no-break-same-line-1-1">
                </div>
                <br>
                <div>
                    <p class="font18">
                        30-Minuten-Vorhersage des Gewebeglukosespiegels und automatische Anpassung der Insulinabgabe an den vorhergesagten Glukosespiegel in Verbindung mit Dexcom G6<sup>®</sup> CGM. (Hybrid-Closed-Loop)
                    </p>
                </div>
                <br><br>
                <div class="button-height-tslim"></div>
                <div class="button-height-tslim-absolute">
                    <a href="{{url('/control-iq-technologie')}}" class="custom-button info-button font16">
                        WEITERE INFORMATIONEN
                    </a>
                </div>
            </div>
            <div>
                <div>
                    <img src="{{url('/assets/png/frontend/basal.png')}}" width="60" alt="calculator">
                    <h4 class="txt-blue font24">
                        Basal-IQ™ Technologie
                    </h4>
                    <br class="no-break-same-line-1-1">
                </div>
                <br>
                <div>
                    <p class="font18">
                        Vorhersage niedriger Blutzuckerwerte sowie automatische Unterbrechung und Fortsetzung der Insulinabgabe in Verbindung mit Dexcom G6 CGM.
                    </p>
                </div>
                <br><br>
                <div class="button-height-tslim"></div>
                <div class="button-height-tslim-absolute">
                    <a href="{{url('/basal-iq-technologie')}}" class="custom-button info-button font16">
                        WEITERE INFORMATIONEN
                    </a>
                </div>
            </div>
            <div>
                <div>
                    <img src="{{url('/assets/png/frontend/integration.png')}}" width="60" alt="fingersensor">
                    <h4 class="txt-blue font24">
                        CGM-Integration
                    </h4>
                    <br class="no-break-same-line-1-2">
                </div>
                <br>
                <div>
                    <p class="font18">
                        Bei Einbindung des Dexcom G6<sup>®</sup> CGM Anzeige der Messwerte direkt am Touchscreen der t:slim X2™. Keine Kalibrierung, kein Fingerstechen nötig.
                    </p>
                </div>
                <br><br>
                <div class="button-height-tslim"></div>
                <div class="button-height-tslim-absolute">
                    <a href="{{url('/integration-rtcgm')}}" class="custom-button info-button font16">
                        WEITERE INFORMATIONEN
                    </a>
                </div>
            </div>
            {{-- <div>
                <div>
                    <img src="{{url('/assets/png/frontend/drop.png')}}" width="60" alt="drop">
                    <h4 class="txt-blue font24">
                        Micro-Delivery™
                        Technologie
                    </h4>
                </div>
                <br>
                <div>
                    <p class="font18">
                        Ermöglicht die Abgabe kleinster Insulineinheiten (0,001 Einheiten), hohe Genauigkeit (+/- 5 %)
                        und einen effektiven Schutz vor ungewollter Insulinabgabe.
                    </p>
                </div>
                <br><br>
                <div class="button-height-tslim"></div>
                <div class="button-height-tslim-absolute">

                </div>
            </div> --}}
        </div>
        <br>
    </div>
</div>
<div class="cust-padding uk-text-center">
    <h3 class="roboto-slab-regular txt-grey font28">Vorteile der Insulinpumpe</h3>
    <br>
    <div class="uk-child-width-1-4@m uk-child-width-1-1@s" uk-grid>
        <div>
            <div>
                <img src="{{url('/assets/png/frontend/usb.png')}}" width="60" alt="usb">
                <h4 class="txt-blue font24">
                    Superflexibel
                </h4>
                <br class="no-break-same-line-2-1">
            </div>
            <br>
            <div>
                <p class="font18">
                    6 individuell programmierbare Profile mit jeweils 16 Zeitsegmenten, wiederaufladbarer Akku über Micro-USB, wasserfest nach IPX7.
                </p>
            </div>
        </div>
        <div>
            <div>
                <img src="{{url('/assets/png/frontend/settings.png')}}" width="60" alt="settings">
                <h4 class="txt-blue font24">
                    Kinderleicht
                </h4>
                <br class="no-break-same-line-2-1">
            </div>
            <br>
            <div>
                <p class="font18">
                    Großer farbiger Touchscreen, intuitive Menüführung und einfache Personalisierung.
                </p>
            </div>
        </div>
        <div>
            <div>
                <img src="{{url('/assets/png/frontend/gym.png')}}" width="60" alt="gym">
                <h4 class="txt-blue font24">
                    Extrem stabil und klein
                </h4>
            </div>
            <br>
            <div>
                <p class="font18">
                    Äußerst robustes Aluminiumgehäuse. Größe einer Kreditkarte inkl. 3-ml-Reservoir.
                </p>
            </div>
        </div>
        <div>
            <div>
                <img src="{{url('/assets/png/frontend/recycle.png')}}" width="60" alt="recycle">
                <h4 class="txt-blue font24">
                    Immer up to date
                </h4>
                <br class="no-break-same-line-2-2">
            </div>
            <br>
            <div>
                <p class="font18">
                    Integration neuer Features mittels einfach durchzuführender Software-­Updates.
                </p>
            </div>
        </div>
    </div>
    <br>
</div>
<div class="back-grey">
    <div class="cust-padding">
        <div class="uk-child-width-1-2@m uk-child-width-1-1@s" uk-grid>
            <div>
                <div class="right sectionminorpadding-leftimg">
                    <img src="{{url('/assets/images/frontend/tslim-X2-diabetes-insulinpumpe-peter-td1-vitalaire.png')}}"
                        alt="guyddogs">
                </div>
            </div>
            <div>
                <div>
                    <div class=" ">
                        <div>
                            <h3 class="txt-blue roboto-slab-regular double-quotes">Ich liebe es, mit meinen
                                Freunden abzuhängen.
                                Die Pumpe macht mir das Leben viel leichter.
                            </h3>
                            <div>
                                <p class="sectionptag font18">
                                    Peter, Typ-1-Diabetes, Tierfreund, Tennischampion und ist ein Familienmensch</p>
                            </div>
                        </div>
                    </div>

                </div>
                <br class="mob">
            </div>
        </div>
    </div>
</div>

@if (!empty($pdfs))
<div class="cust-padding uk-text-center">
    <p class="txt-blue roboto-slab-regular font28">
        Downloads
    </p>
    <br>
    <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match grid-stick mob-padding-download" uk-grid>
        @foreach($pdfs as $pdf)
        <div>
            <div class="card-blue uk-position-relative">
                <div style="width: 100%">
                @foreach ($tags as $tag)
                            @foreach ($pdf->tag as $singletag)
                                @if ($singletag)
                                @if ($singletag == $tag->id)
                                    <span class="tags-global" style="background-color: {{ $tag->bg_color }}">{{ $tag->name }}</span>
                                @endif
                                @else
                                <span class="tags-global" style="visibility: hidden" >PDF</span>
                                @endif
                            @endforeach
                        @endforeach
                </div>
                <div class="card-text-hover uk-position-center">
                    <span class="txt-blue roboto-slab-regular font18">
                        {{$pdf->name}}
                    </span>
                    <br>
                    <span class="txt-blue roboto-slab-regular font18">
                        {{$pdf->description}}
                    </span>
                    <br><br>
                    <a class="custom-button download-button font16" target="_blank"
                        href="{{$pdf->type == 'link' ? $pdf->link : storage($pdf->file_name)}}">DOWNLOAD
                        &nbsp;<span class="download-uk-icon" uk-icon="icon:download" style="margin-bottom: 1px"
                            ratio="0.8"></span></a>
                </div>
                @if($pdf->imagealt)
                <img src="{{storage($pdf->uploaded_image)}}" alt="{{ $pdf->imagealt }}">
                @else
                <img src="{{storage($pdf->uploaded_image)}}" alt="PDF">
                @endif
            </div>
        </div>
        @endforeach

    </div>
</div>
@endif
<br><br><br>

@include('frontend.components.footer')
@endsection
@push('css')
@css('frontend/tslim')
@endpush