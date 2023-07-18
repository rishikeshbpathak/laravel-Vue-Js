@extends('frontend.shell')
@section('body')
@include('frontend.components.header')
<div class="uk-position-relative">
    <div class="banner-content-absolute" uk-grid>
        <div class="uk-width-1-1 grid-center">
            <div>
                <span class="new-banner-content roboto wh">Control-IQ und Basal-IQ Technologie</span><br><br>
                <span class="roboto wh sub-banner-content">Studienergebnisse, Daten und wichtige Informationen</span>
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
                Informationen für Fachkreise
            </a>
        </div>

    </div>

    <h1 class="txt-blue fonth1 roboto-slab-regular">
        Informationen zur Control-IQ™ und Basal-IQ™ Technologie
    </h1>

    <h2 class="txt-blue roboto fonth2 font24" style="margin-top: -5px">
        Officimus aut officte aut omnim experorio quiaspe ristiatincit hit lab idundig endandi sci
    </h2>
    <div class="" uk-grid>
        <div class="uk-width-2-3@m uk-width-1-1@s">
            <div class="uk-text-justify tslim-para">
                <br>
                <p class="font18">
                    Elloreperum faccaepre core de occae incti cone vendit, to blabo. Ut facero offic temolecae
                    niminul laborem net ellabor rumendit, culluptatur, odit, te mi, simagni sin nobis aut dis el ex
                    ex estis magnient volorempore nes esequam, susante modi inihit millab inum eiunt est et
                    dus moloreri corae. La evel eat est, od ma cullani mporum quost et od enissequatis doluptur,
                    quam faccus as dolendae lictem. Nequiae parum ducillupta que magnat.
                </p>
                <p class="font18">
                    Hent voluptur? Os voloren dandendam, aut am re ea comnihit que plam nihit minto eum erum
                    faccuptas dolupta eperuptist dolupti aut adit volupta sitiamus de pra core doluptatet rest estorum
                    des iliquae seceribus simagnieni dis et ommolesto voles conesed quuntemqui nonest,
                </p>
            </div>
        </div>
        <div class="uk-width-1-3@m uk-width-1-1@s grid-center">
            <div>
                <img src="{{url('/assets/png/frontend/tslimx2withbg.png')}}" alt="tablet">
            </div>
        </div>
    </div>
</div>
<div class="back-grey">
    <div class="cust-padding uk-text-center">
        <h3 class="roboto-slab-regular txt-grey" style="letter-spacing: 1.5px;">Innovative Technologie und modernes
            Design für alle Lebenslagen</h3>
        <br>
        <div class="uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-match button-height-tslim-relative" uk-grid>
            <div>
                <div>
                    <img src="{{url('/assets/png/frontend/control.png')}}" width="60" alt="calculator">
                    <h4 class="txt-blue font24">
                        Control-IQ Technologie
                    </h4>
                    <br class="no-break-same-line-1-1">
                </div>
                <br>
                <div>
                    <p class="font18">
                        Os etur Deratur sitatu? Quis id mos earia
                        consequ iantus aditecus as dolorum in re id
                        mi, voluptur Pore eossini magnis minist lab
                        int assuntur sit haris doloria dolorem ad
                    </p>
                </div>
                <br><br>
                <div class="button-height-tslim"></div>
                <div class="button-height-tslim-absolute">
                    <a href="{{url('/control-iq-technologie')}}" class="custom-button info-button font16">
                        ZUR CONTROL-IQ STUDIE
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
                        Os etur Deratur sitatu? Quis id mos earia
                        consequ iantus aditecus as dolorum in re id
                        mi, voluptur Pore eossini magnis minist lab
                        int assuntur sit haris doloria dolorem ad
                    </p>
                </div>
                <br><br>
                <div class="button-height-tslim"></div>
                <div class="button-height-tslim-absolute">
                    <a href="{{url('/basal-iq-technologie')}}" class="custom-button info-button font16">
                        ZUR BASAL-IQ STUDIE
                    </a>
                </div>
            </div>
        </div>
        <br>
    </div>
</div>
<div class="cust-padding uk-text-center">
    
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
                    Vorhersage und Hilfe bei der Prävention von Hypoglykämien ganz ohne Fingerstechen. Falls
                    Glukose-Alarme und CGM-Werte nicht mit den Symptomen oder Erwartungen übereinstimmen,
                    sollten Blutzuckermesswerte genutzt werden, um Therapieentscheidungen bei Diabetes
                    zu treffen.
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
<br><br><br>

@include('frontend.components.footer')
@endsection
@push('css')
@css('frontend/tslim')
@endpush