@extends('frontend.shell')
@section('body')
@include('frontend.components.header')
<div class="uk-position-relative">
    <div class="banner-content-absolute" uk-grid>
        <div class="uk-width-1-1 grid-center">
            <div>
                <span class="new-banner-content roboto wh">Die t:slim X2 im Alltag</span><br><br>
                <span class="roboto wh sub-banner-content">Service & Support</span>
            </div>
        </div>
    </div>
    <img class="banner-width"
        src="{{url('/assets/banner/vitalaire-diabetes-header-04-tslim-x2-insulinpumpe-anwendung.jpg')}}"
        alt="Die t:slim X2 im Alltag banner">
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
                Die t:slim X2 im Alltag
            </a>
        </div>

    </div>

    <h1 class="txt-blue fonth1 roboto-slab-regular">
        Die t:slim X2™ Insulinpumpe im Alltag
    </h1>

    <h2 class="txt-blue fonth2 font24" style="margin-top: -5px;">
        Schule, Sport, Arbeit, Auto fahren oder shoppen. Die clevere Insulinpumpe ist für jeden Menschen mit Diabetes
        geeignet
    </h2>

    <div class="" uk-grid>
        <div class="uk-width-2-3@m uk-width-1-1@s">
            <div class="uk-text-justify tslim-para">
                <br>
                <p class="font18">
                    Die t:slim X2 Insulinpumpe ist mit zwei unterschiedlichen Algorithmen verfügbar, die den Alltag mit Diabetes erleichtern können.
                </p>
                <p class="font18">
                    Die Control-IQ™ Technologie, die hohe und niedrige Glukosewerte vorhersagt und die Insulinabgabe automatisch anpasst, um die Zeit im Zielbereich zu erhöhen. Oder die Basal-IQ™ Technologie, die die Insulinabgabe stoppt um die Häufigkeit und Dauer von Hypoglykämien zu reduzieren.
                </p>
                <p class="font18">
                    Hier stellen wir regelmäßig neue Infos und Anwendungsberichte zu Alltag und Anwendung mit der t:slim
                    X2 vor.
                </p>
                <h3 class="font20 txt-blue"><b>Die t:slim X2 beim Sport:</b></h3>
                <p class="font18">
                    Sport erhöht die Insulinsensitivität der Muskelzellen und reduziert den Insulinbedarf. Wie viel
                    genau, hängt von verschiedenen Faktoren ab, wie der Dauer und Intensität der Übung, der Zeit, Art
                    und Dosis des letzten Bolus sowie dem Blutzuckerspiegel und dem Trainingsstatus. Pumpenträger können
                    die höhere Insulinsensitivität durch Senkung der Basalrate ausgleichen, da sonst das Risiko einer
                    Hypoglykämie besteht.
                </p>
                <p class="font18">
                    Die t:slim X2 kann eine individuelle temporäre Basalrate abgeben. Dazu kann die Basalrate zwischen
                    15 Min. und 72 Std. mit einer Rate von 0-250% individuell eingestellt werden.
                </p>
                <h3 class="font20 txt-blue"><b>Die t:slim X2 beim Essen:</b></h3>
                <p class="font18">
                    Neben dem normalen Bolus für die Mahlzeiteneinnahme gibt es die Möglichkeit, einen verlängerten
                    Bolus abzugeben. <br>
                    Der Standardbolus wird für Lebensmittel verwendet, die schnell in den Blutkreislauf aufgenommen
                    werden, z. B. Lebensmittel mit niedrigem Fett-, Eiweiß- oder Ballaststoffgehalt (wie Weißbrot,
                    Nudeln, Reis oder Obst). <br>
                    Lebensmittel mit hohem Fett-, Eiweiß- oder Ballaststoffgehalt (wie z.B. Pizza, Pasta mit Sahnesoße,
                    Sahnetorte oder auch bei Gastroparese) können den Blutzuckeranstieg verlangsamen. Wird hierbei nur
                    ein Standardbolus abgegeben, steigt das Risiko einer Hypoglykämie. Der Grund ist, dass das
                    Insulinanalogon innerhalb weniger Minuten und somit schneller wirkt, als die Kohlenhydrate im Blut
                    ankommen.
                </p>
                <p class="font18">
                    Der Abgabezeitraum dieser Insulinmenge kann bei der t:slim X2 bis zu 8 Stunden verlängert werden. Bei aktivierter Control-IQ Technologie ist der Bereich auf maximal 2 Stunden begrenzt.
                </p>
                {{-- <div class="font16" style="margin: 20px 0 20px 0">
                    <div uk-grid>
                        <div class="uk-width-auto">
                            *
                        </div>
                        <div class="uk-width-expand" style="padding-left: 20px">
                            <p>
                                Wenn Glukosewarnungen und CGM-Werte nicht zu den Symptomen oder Erwartungen passen,
                                verwenden Sie für Entscheidungen zur Diabetesbehandlung ein Blutzuckermessgerät! Systeme
                                wie
                                die t:slim X2 Insulinpumpe mit Basal-IQ Technologie sind kein Ersatz für ein aktives
                                Diabetes-Management, da es Situationen gibt, in denen auch automatische Systeme eine
                                Hypoglykämie nicht verhindern können. Die Basal-IQ Funktion basiert auf kontinuierlichen
                                CGM-Messwerten und kann weder den Glukosespiegel vorhersagen noch die Insulinabgabe
                                unterbrechen, wenn das CGM nicht ordnungsgemäß funktioniert oder nicht mit der Pumpe
                                kommunizieren kann
                            </p>
                        </div>
                    </div>
                </div> --}}
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