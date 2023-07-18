@extends('frontend.shell')
@section('body')
@include('frontend.components.header')
<div class="uk-position-relative">
    <div class="banner-content-absolute" uk-grid>
        <div class="uk-width-1-1 grid-center">
            <div>
                <span class="new-banner-content roboto wh">Die Control-IQ Technologie</span><br><br>
                <span class="roboto wh sub-banner-content">Zuverlässig an Ihrer Seite</span>
            </div>
        </div>
    </div>
    <img class="banner-width"
        src="{{url('/assets/banner/tslim-X2-insulinpumpe-diabetes-teaser-control-iq-vitalaire-guitar.jpg')}}"
        alt="control-banner">
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
                Control-IQ Technologie
            </a>
        </div>

    </div>

    <h1 class="txt-blue fonth1 roboto-slab-regular">
        Control-IQ™ Technologie bei der t:slim X2 Insulinpumpe
    </h1>

    <h2 class="txt-blue roboto fonth2 font24" style="margin-top: -5px">
        Vorhersage des Gewebeglukosespiegels und automatische Anpassung der Insulinabgabe
    </h2>

    <div class="" uk-grid>
        <div class="uk-width-2-3@m uk-width-1-1@s">
            <div class="uk-text-justify tslim-para">
                <br>
                <p class="font18">
                    Mit der neuen Control-IQ™ Technologie steht ein Hybrid-Closed-Loop-System der neuesten
                    Generation zur Verfügung. Die Control-IQ Technologie hilft, die Zeit im Zielbereich zu erhöhen
                    und Hyperglykämien oder Hypoglykämien zu reduzieren:
                    <ul class="font18" style="padding-left: 20px">
                        <li>
                            30-Minuten-Vorhersage des Gewebeglukosespiegels.
                        </li>
                        <li>
                            Verringerung oder Unterbrechung der basalen Insulinabgabe, wenn ein Absinken des Glukosespiegels
                            unter den Zielbereich erwartet wird.
                        </li>
                        <li>
                            Erhöhung der basalen Insulinabgabe, wenn ein Anstieg des Gewebeglukosespiegels über
                            den Zielbereich erwartet wird.
                        </li>
                        <li>
                            Abgabe eines automatischen Korrekturbolus, wenn trotz Erhöhung oder maximaler Insulinabgabe ein Anstieg des Gewebeglukosespiegels über den Grenzwert erwartet wird, falls erforderlich max. ein pro Stunde.
                        </li>
                    </ul>
                </p>
            </div>
        </div>
        <div class="uk-width-1-3@m uk-width-1-1@s grid-center">
            <div>
                <img src="{{url('/assets/png/frontend/controlwithbg.png')}}" alt="basal">
            </div>
        </div>
    </div>
    <div class="" uk-grid>
        <div class="uk-width-2-3@m uk-width-1-1@s">
            <div class="uk-text-justify tslim-para">
                <h2 class="txt-blue roboto fonth2 font24">
                    Der Control-IQ Algorithmus unterscheidet drei verschiedene Aktivitätsprofile:
                </h2>
                <p class="font18">
                    <span class="txt-blue roboto font24">Normal:</span><br>
                    Ist keine Aktivität ausgewählt, versucht der Control-IQ Algorithmus, den Glukosewert zwischen
                    112,5 mg/dl (klinisches Zentrum) und 160 mg/dl zu halten. 30 Minuten vor dem Verlassen dieses Korridors
                    wird die Basalrate entsprechend angepasst. Sollten Werte größer als 180 mg/dl vorhergesagt
                    werden, gibt die t:slim X2 Insulinpumpe einen automatisierten Bolus ab.
                    Manuelle Bolusabgaben bei Kohlenhydrataufnahme sind nach wie vor notwendig.
                </p>
                <p class="font18">
                    <span class="txt-blue roboto font24">Bewegung:</span><br>
                    Durch das Aktivieren der Aktivität „<b>Bewegung</b>“ unterstützt die t:slim X2 Sie dabei, den Zielbereich
                    auch bei körperlicher Aktivität nicht zu verlassen.
                </p>
                <p class="font18">
                    <span class="txt-blue roboto font24">Schlaf:</span><br>
                    Durch Auswählen der Aktivität „<b>Schlaf</b>“ wird die Basalrate so angepasst, dass morgens ein
                    Glukosewert von 110 mg/dl erreicht wird. Es besteht die Möglichkeit, zwei verschiedene
                    Schlaf-Aktivitäten zu programmieren (z.B. Wochentag/Wochenende).
                </p>
                <p class="font18">
                    Voraussetzung für die korrekte Funktion sind aktuelle Werte des CGM-Sensors, eine getestete Basalrate sowie erprobte KH- und
                    Korrekturfaktoren. Bei einer Fehlfunktion des CGM des Patienten sind die Vorhersage des Glukosespiegels und die Unterbrechung
                    der Insulinabgabe nicht möglich. Gleiches gilt für den Fall, dass die Pumpe kein CGM-Signal empfängt. Es wird empfohlen, dass der
                    Patient die Komponenten des Pumpensystems (d. h. Pumpe, Reservoir, CGM und Infusionsset) stets gemäß der jeweiligen Gebrauchsanweisung
                    verwendet und regelmäßig überprüft, um sicherzustellen, dass sie wie erwartet funktionieren. Patienten müssen
                    stets auf ihre Symptome achten, den Glukosespiegel aktiv kontrollieren und steuern und bei der Behandlung entsprechend den Empfehlungen des behandelnden Arztes vorgehen.
                </p>
            </div>
        </div>
        <div class="uk-width-1-3@m uk-width-1-1@s grid-center">
            <div>
            </div>
        </div>
    </div>
    <div class="" uk-grid>
        <div class="uk-width-2-3@m uk-width-1-1@s">
            <div class="uk-text-justify tslim-para">
                <h2 class="txt-blue roboto fonth2 font24">
                    Informationen zu Behandlungswerten und Zielwerten
                </h2>
                <p class="font18">
                    <b>Behandlungswerte:</b> sind jene Sensordaten, die den Algorithmus dazu veranlassen, die Insulindosierung anzupassen.
                </p>
                <p class="font18">
                    <b>Zielwert:</b> Unter dem Zielwert versteht man den Wert, der als Berechnungsgrundlage für die Bolusberechnung
                    dient. Dieser ist bei aktivierter Control-IQ Technologie immer 110 mg/dl.
                </p>
                <p class="font18">
                    <b>TDI = Total Daily Insuline Dose:</b> Gesamtmenge an verabreichtem Insulin, Basalrate, automatische
                    und manuelle Boli
                </p>

                {{-- <p class="font16">
                    <ul style="list-style-type: none;">
                        <li class="star-list-class">
                            Control-IQ™ Technologie* ist kein Ersatz für aktives Selbstmanagement des Diabetes.
                            Falls Glukose-Alarme und CGM-Werte nicht mit Ihren Symptomen oder Erwartungen übereinstimmen, nutzen Sie Blutzuckermesswerte,
                            um Therapieentscheidungen für Ihren Diabetes zu treffen.
                        </li>
                    </ul>
                </p> --}}
                {{-- <p class="font16">
                    <ul style="list-style-type: none;">
                        <li class="num-list-class">
                            Voraussetzung für die korrekte Funktion sind aktuelle Werte des CGM-Sensors, eine getestete Basalrate sowie erprobte KH- und
                            Korrekturfaktoren. Bei einer Fehlfunktion des CGM des Patienten sind die Vorhersage des Glukosespiegels und die Unterbrechung
                            der Insulinabgabe nicht möglich. Gleiches gilt für den Fall, dass die Pumpe kein CGM-Signal empfängt. Es wird empfohlen, dass der
                            Patient die Komponenten des Pumpensystems (d. h. Pumpe, Reservoir, CGM und Infusionsset) stets gemäß der jeweiligen Gebrauchsanweisung
                            verwendet und regelmäßig überprüft, um sicherzustellen, dass sie wie erwartet funktionieren. Patienten müssen
                            stets auf ihre Symptome achten, den Glukosespiegel aktiv kontrollieren und steuern und bei der Behandlung entsprechend den Empfehlungen des behandelnden Arztes vorgehen.
                        </li>
                    </ul>
                </p> --}}
            </div>
        </div>
        <div class="uk-width-1-3@m uk-width-1-1@s grid-center">
            <div>
            </div>
        </div>
    </div>
</div>
<div class="back-sl-purple">
    <div class="uk-text-center">
        <h3 class="roboto-slab-regular txt-purple font28">
            Control-IQ Technologie
        </h3>
        <br>
        <img src="{{url('/assets/images/frontend/control-iq-technologie-tslim-x2-insulinpumpe-vitalaire-diabetes-grafik.jpg')}}" alt="control-table">
        <br>
        <br>
    </div>
    <div class="purple-card-mod" uk-grid>
        <div class="uk-width-expand">
            <div class="purple-card-mod-first">
                <h3 class="txt-purple font20 bold" style="letter-spacing: 1px">
                    Seit ich die t:slim X2 mit Control-IQ benutze, konnte ich
                    meine „Time in Range“ <i>(Zeit im Zielbereich)</i> deutlich verbessern.
                    In gewissen Situationen muss ich mir weniger
                    Gedanken um meinen Diabetes machen, das ist für mich
                    ein Gewinn an Lebensqualität!
                </h3>
            </div>
        </div>
        <div class="uk-width-auto">
            <img src="{{url('/assets/images/frontend/vitalaire-diabetes-control-iq-portraet.png')}}" alt="girl">
        </div>
    </div>
</div>

<div class="cust-padding">
    <br>
    
        <h3 class="roboto-slab-regular txt-grey font28">
            Verantwortungsvoller Einsatz der Control-IQ Technologie
        </h3>
    <p class="font18">
        Wenn Glukosewarnungen und CGM-Werte nicht zu den Symptomen oder Erwartungen passen, verwenden Sie für Entscheidungen zur
        Diabetesbehandlung ein Blutzuckermessgerät.
    </p>
    <p class="font18">
        Systeme wie die t:slim X2 Insulinpumpe mit Control-IQ Technologie sind kein Ersatz für ein aktives Diabetes-Management, da es Situationen
        gibt, bei denen auch automatische Systeme eine Hypoglykämie oder Hyperglykämie nicht verhindern können. Die Control-IQ Technologie
        wurde entwickelt, um Blutzuckerschwankungen zu verringern, ersetzt jedoch nicht die Bolusgabe zur Nahrungsaufnahme oder zur Korrektur eines hohen
        Glukosewerts zu korrigieren und behandelt keine niedrigen Blutzuckerwerte.
    </p>
    <p class="font18">
        Die Control-IQ Funktion basiert auf kontinuierlichen CGM-Messwerten und kann weder den Glukosespiegel vorhersagen noch die Insulinabgabe
        anpassen, wenn das CGM nicht ordnungsgemäß funktioniert oder nicht mit der Pumpe kommunizieren kann. Voraussetzung für die korrekte
        Funktion der Control-IQ Technologie sind aktuelle CGM-Sensorwerte, die Eingabe der korrekt bestimmten Basalrate sowie der erprobten KH- und
        Korrekturfaktoren.
    </p>
    <p class="font18">
        Es wird empfohlen, dass der Patient die Komponenten der Pumpe und das CGM stets gemäß der jeweiligen Gebrauchsanweisung verwendet
        und regelmäßig überprüft, um sicherzustellen, dass sie wie erwartet funktionieren.
    </p>
    <br>
</div>

<div class="back-grey">
    <div class="cust-padding uk-padding-remove-top">
        <br>
        <h3 class="roboto-slab-regular txt-grey font28">
            Die clevere Insulinpumpe mit Control-IQ Technologie
        </h3>
        <div class="uk-grid-match" uk-grid>
            <div class="uk-width-2-3@m uk-width-1-1@s">
                <br><br>
                <p class="font18">
                    Die Control-IQ Technologie hilft die Zeit im Zielbereich zu erhöhen und Hyper- oder Hypoglykämien zu reduzieren. Falls Glukose-Alarme und CGM-Werte nicht mit den Symptomen oder Erwartungen übereinstimmen, sollten Blutzuckermesswerte genutzt werden, um Therapieentscheidungen bei Diabetes zu treffen.
                </p>
            </div>
            <div class="uk-width-1-3@m uk-width-1-1@s grid-center">
                <div class="uk-text-center">
                    <img src="{{url('/assets/images/frontend/tabletwithinnerscreencontrol.png')}}" alt="tablet">
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