@extends('frontend.shell')
@section('body')
@include('frontend.components.header')
<div class="uk-position-relative">
    <div class="banner-content-absolute" uk-grid>
        <div class="uk-width-1-1 grid-center">
            <div>
                <span class="new-banner-content roboto wh">Die Basal-IQ Technologie</span><br><br>
                <span class="roboto wh sub-banner-content">Sicher bei der Arbeit</span>
            </div>
        </div>
    </div>
    <img class="banner-width"
        src="{{url('/assets/banner/vitalaire-diabetes-header-11-deine-tslim-x2-insulinpumpe-basal-iq.jpg')}}"
        alt="basal-banner">
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
                Basal-IQ Technologie
            </a>
        </div>

    </div>

    <h1 class="txt-blue fonth1 roboto-slab-regular">
        So funktioniert die Basal-IQ™ Technologie bei der t:slim X2™
    </h1>

    <h2 class="txt-blue roboto fonth2 font24" style="margin-top: -5px">
        Vorhersage des Gewebeglukosespiegels, Unterbrechnung und Fortsetzung der Insulinabgabe
    </h2>

    <div class="" uk-grid>
        <div class="uk-width-2-3@m uk-width-1-1@s">
            <div class="uk-text-justify tslim-para" style="margin: auto">
                <br>
                <p class="font18">
                    Die Basal-IQ™ Technologie reagiert prädiktiv auf drohende Hypoglykämien, dies ist vor allem bei
                    Hypoglykämie-Wahrnehmungsstörungen eine große Unterstützung im Alltag.
                </p>
                <p class="font18">
                    Durch Vorhersage niedriger Glukosewerte sowie automatischer Unterbrechung und Fortsetzung der
                    Insulinabgabe in Verbindung mit Dexcom G6 hilft diese Technologie dabei, Häufigkeit und Dauer von
                    Hypoglykämien zu reduzieren <sup>(1,2)</sup>.
                </p>
            </div>
        </div>
        <div class="uk-width-1-3@m uk-width-1-1@s grid-center">
            <div>
                <img src="{{url('/assets/png/frontend/basalwithbg.png')}}" alt="basal">
            </div>
        </div>
    </div>
</div>
<div class="back-sl-purple">
    <div class="uk-text-center">
        <h3 class="roboto-slab-regular txt-purple font28">
            Basal-IQ™ Technologie
        </h3>
        <br>
        <img src="{{url('/assets/images/frontend/orderthing.png')}}" alt="basal-info">
        <br>
        <br>
        <div class="purple-card font18">
            <div class="uk-padding-small">
                <h3 class="txt-purple font18 uk-margin-remove bold">
                    1 Vorhersage
                </h3>
                <p class="">
                    30-Minuten-Vorhersage des Gewebeglukosespiegels
                </p>
            </div>
        </div>
        <div class="purple-card font18">
            <div class="uk-padding-small">
                <h3 class="txt-purple font18 uk-margin-remove bold">
                    2 Unterbrechung
                </h3>
                <p>
                    Unterbrechung der Insulinabgabe:
                    <ul>
                        <li class="uk-text-left">
                            wenn ein Absinken des Gewebeglukosespiegels unter 80 mg/dl (4,4 mmol/l) erwartet wird.
                        </li>
                        <li class="uk-text-left">
                            wenn ein Sensorglukosewert unter 70 mg/dl (3,9 mmol/l) sinkt.
                        </li>
                    </ul>
                </p>
            </div>
        </div>
        <div class="purple-card font18">
            <div class="uk-padding-small">
                <h3 class="txt-purple font18 uk-margin-remove bold">
                    3 Fortsetzung
                </h3>
                <p class="">
                    Fortsetzung der Insulinabgabe, sobald die Sensorglukosewerte wieder ansteigen.
                </p>
            </div>
        </div>
    </div>
    <div class="purple-card-mod" uk-grid>
        <div class="uk-width-expand">
            <div class="purple-card-mod-first">
                <h3 class="txt-purple font20 bold">
                    Bei der Basal-IQ Technologie gibt es keine komplizierten Einstellungen. Alles passiert im
                    Hintergrund ohne ständige Eingaben oder Interaktionen mit der Pumpe.
                </h3>
            </div>
        </div>
        <div class="uk-width-auto">
            <img src="{{url('/assets/images/frontend/vitalaire-diabetes-basal-iq-portraet.png')}}" alt="afroguy">
        </div>
    </div>
</div>

<div class="cust-padding">
    <br>
    <h3 class="roboto-slab-regular txt-grey font28">Verantwortungsvoller Einsatz der Basal-IQ Technologie</h3>
    <p class="font18">
        Systeme wie die t:slim X2 Insulinpumpe mit Basal-IQ Technologie sind kein Ersatz für ein aktives
        Diabetesmanagement. Es gibt dennoch Situationen, in denen automatisierte Systeme eine Hypoglykämie
        nicht verhindern können. Voraussetzung für die korrekte Basal-IQ Funktion sind aktuelle Werte des CGM-Sensors.
        Bei einer Fehlfunktion des CGM des Patienten sind die Vorhersage des Glukosespiegels und
        die Unterbrechung der Insulinabgabe nicht möglich. Gleiches gilt für den Fall, dass die Pumpe kein CGM-Signal
        empfängt. Es wird empfohlen, dass der Patient die Komponenten des Pumpensystems (d. h.
        Pumpe, Reservoir, CGM und Infusionsset) stets gemäß der jeweiligen Gebrauchsanweisung verwendet und regelmäßig
        überprüft, um sicherzustellen, dass sie wie erwartet funktionieren. Patienten müssen
        stets auf ihre Symptome achten, den Glukosespiegel aktiv kontrollieren und steuern und bei der Behandlung
        entsprechend Ihren Empfehlungen vorgehen.
    </p>
    <br>
</div>

<div class="back-grey">
    <div class="cust-padding uk-padding-remove-top">
        <br>
        <h3 class="roboto-slab-regular txt-grey font28">
            Die clevere Insulinpumpe mit Basal-IQ Technologie
        </h3>
        <div class="uk-grid-match" uk-grid>
            <div class="uk-width-2-3@m uk-width-1-1@s">
                <br><br>
                <p class="font18">
                    Vorhersage und Hilfe bei der Prävention von Hypoglykämien ganz ohne Fingerstechen. Falls
                    Glukose-Alarme und CGM-Werte nicht mit den Symptomen oder Erwartungen übereinstimmen, sollten
                    Blutzuckermesswerte genutzt werden, um Therapieentscheidungen bei Diabetes zu treffen.
                </p>
            </div>
            <div class="uk-width-1-3@m uk-width-1-1@s grid-center">
                <div class="uk-text-center">
                    <img src="{{url('/assets/images/frontend/tabletwithinnerscreen.png')}}" alt="tablet">
                    <br><br>
                    <a href="{{url('/tslim-x2-insulinpumpe')}}"
                        class="custom-button uk-width-auto@m uk-width-1-1@s font16">
                        MEHR ÜBER DIE T:SLIM X2
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>

@if (!empty($pdfs))
<div class="cust-padding uk-padding-remove-top">

    <div class="uk-text-center">
        <p class="roboto-slab-regular txt-blue font28">
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
</div>
@endif
@include('frontend.components.footer')
@endsection
@push('css')
@css('frontend/basal')
{{-- @js('frontend/percent') --}}
@endpush