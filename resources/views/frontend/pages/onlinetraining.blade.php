@extends('frontend.shell')
@section('body')
@include('frontend.components.header')
<div class="uk-position-relative">
    <div class="banner-content-absolute" uk-grid>
        <div class="uk-width-1-1 grid-center">
            <div>
                <span class="new-banner-content roboto wh">Webinar nach Control-IQ Upgrade</span><br><br>
                <span class="roboto wh sub-banner-content">Neues Lebensgefühl mit neuer Insulinpumpe</span>
            </div>
        </div>
    </div>
    <img class="banner-width"
        src="{{url('/assets/banner/tslim-X2-insulinpumpe-diabetes-teaser-control-iq-vitalaire-webinar.jpg')}}"
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
                Service & Support
            </a>
        </div>
        <div class="uk-width-auto txt-blue">
            <span uk-icon="icon:chevron-double-right;" class="vertical-icon"></span>
        </div>
        <div class="uk-width-auto txt-blue">
            <a href="{{url('/veranstaltungenwebinare')}}" class="atag font16">
                Veranstaltungen und Webinare
            </a>
        </div>
        <div class="uk-width-auto txt-blue">
            <span uk-icon="icon:chevron-double-right;" class="vertical-icon"></span>
        </div>
        <div class="uk-width-expand@m uk-width-1-1@s txt-blue-darker">
            <a class="atag font16">
                Webinar nach Control-IQ Upgrade
            </a>
        </div>

    </div>

    <h1 class="txt-blue fonth1 roboto-slab-regular">
        VitalAire Diabetes Webinar Control-IQ
    </h1>

    <h2 class="txt-blue roboto fonth2 font24" style="margin-top: -5px">
        Webinar für Rückfragen nach erfolgreichem Upgrade auf Control-IQ
    </h2>

    <div class="" uk-grid>
        <div class="uk-width-2-3@m uk-width-1-1@s">
            <div class="uk-text-justify tslim-para">
                <br>
                <p class="font18" style="color: #e7000e">
                    Wenn Sie bereits eine t:slim X2™ mit Basal-IQ Technologie verwenden und diese nun auf Control-IQ™
                    upgraden möchten, laden Sie sich die <a class="link" style="color: #e7000e" target="_blank"
                        href="{{storage('training/control-iq-upgrade-information-durchfuehrung-tslim-x2-insulinpumpe-vitalaire.pdf')}}">Informationen
                        zur Durchführung des Control-IQ Upgrades</a> als PDF herunter.
                </p>
                <br>
                <p class="font18">
                    <span class="font22">Folgende Informationen sind nur wichtig, wenn Sie:</span><br>
                <ul class="font18" style="padding-left: 20px">
                    <li>
                        die technische Einweisung für die Control-IQ absolviert haben
                    </li>
                    <li>
                        und Ihre t:slim X2 Insulinpumpe bereits auf Control-IQ upgegradet wurde
                    </li>
                    <li>
                        noch weitere Fragen zum Algorithmus haben
                    </li>
                </ul>
                </p>

                <p class="font18">
                    <span class="font22">In diesem Webinar klären wir Fragen nach dem Upgrade</span>
                </p>
                <p class="font18">
                    <span class="font20">Inhalte:</span>
                <ul class="font18" style="padding-left: 20px">
                    <li>
                        Allgemeine Funktionsweise der Control-IQ™ Technologie
                    </li>
                    <li>
                        Aktivität „Bewegung“ und „Schlaf“ – Was gibt es zu beachten?
                    </li>
                    <li>
                        Allgemeine Tipps & Tricks zur t:slim X2 mit Control-IQ™ Technologie
                    </li>
                </ul>
                </p>
                <p class="font18">
                    Für dieses Webinar sollten Sie sich ca. 2 Stunden Zeit nehmen.
                </p>
                <p class="font18">
                    Bitte prüfen Sie vorab, ob Ihr PC, Laptop, mobiles Endgerät die technischen Voraussetzungen erfüllt:
                    <a class="link"
                        href="https://help.edudip.com/de/knowledge-base/technische-voraussetzungen-zur-nutzung-der-edudip-software/"
                        target="_blank"
                        rel="noopener">https://help.edudip.com/de/knowledge-base/technische-voraussetzungen-zur-nutzung-der-edudip-software/</a>
                </p>
                <p class="font18">
                    <span class="font20">Hinweis:</span>
                    Sie können während des Webinars mit unserem Trainer per Chat in Kontakt treten.
                </p>
                <p class="font18">
                    Dieses Webinar ersetzt nicht den regelmäßigen Kontakt und die Schulung durch Ihren Diabetologen bzw.
                    Ihr Diabetes-Team.
                </p>
                <p class="font18">
                    Sollten Sie noch weitere Fragen zur t:slim X2 Insulinpumpe haben, kontaktieren Sie bitte unseren
                    Kundenservice unter <a class="link" href="tel:0800/100 16 44">0800/100 16 44</a> oder per E-Mail: <a
                        class="link" href="mailto:diabetes@vitalaire.de">diabetes@vitalaire.de</a>
                </p>


                <p class="font18">
                    <span class="font22">Technische Einweisung</span><br>
                    Die technische Einweisung in das t:slim X2 Pumpensystem ist notwendig, damit die korrekte
                    Handhabung und alle technischen Funktionen des Pumpensystems erlernt werden können.
                    Ebenso ist die technische Einweisung eine wichtige Voraussetzung für die Kostenübernahme
                    durch die Krankenkasse.
                </p>
            </div>
        </div>
        <div class="uk-width-1-3@m uk-width-1-1@s grid-center">
            <div>
                <img src="{{url('/assets/png/frontend/kalenderwithbg.png')}}" alt="kalender">
            </div>
        </div>
    </div>
</div>
<div class="back-grey">
    <div style="padding: 5% 12% 0 12%">
        <div class="uk-text-center">
            <h3 class="roboto-slab-regular font28" style="color: #666666">
                Webinar-Termin buchen und direkt offene Fragen klären
            </h3>

        </div>
        <div class="" uk-grid>
            <div class="uk-width-expand">
                <div class="purple-card-mod-first">
                    <p class="font22 txt-blue">
                        Während des Webinars steht ein Trainer/eine Trainerin
                        live für Rückfragen zur Verfügung.
                    </p>
                    <p class="font18">
                        <b>Wichtig:</b> Die Anmeldung zum kostenfreien Webinar erfolgt über die
                        Onlineplattform Edudip. Klicken Sie für eine Terminvereinbarung auf den unteren Button.
                    </p>
                    <p class="font18">
                        <b>Bitte für den Termin bereit halten:</b><br>
                    <ul class="font18" style="padding-left: 20px">
                        <li>
                            die t:slim X2 Insulinpumpe
                        </li>
                        <li>
                            Stift und Zettel
                        </li>
                        <li>
                            Ihre offenen Fragen zur Control-IQ Technologie
                        </li>
                    </ul>
                    </p>
                    <div class="mob uk-padding-large uk-text-center">
                        <a class="custom-button font16" target="_blank" rel="noopener"
                            href="https://next.edudip.com/de/webinar/webinar-nach-control-iq-upgrade/1777438">WEBINAR-TERMIN
                            BUCHEN</a>
                    </div>
                </div>
            </div>
            <div class="uk-width-auto">
                <img class="des" style="visibility: hidden"
                    src="{{url('/assets/images/frontend/vitalaire-diabetes-control-iq-portraet-online-training.png')}}"
                    alt="guy">
                <img class="mob"
                    src="{{url('/assets/images/frontend/vitalaire-diabetes-control-iq-portraet-online-training.png')}}"
                    alt="guy">
            </div>
        </div>
        <div class="des" uk-grid>
            <div class="uk-width-1-4">

            </div>
            <div class="uk-width-1-2 uk-text-center">
                <a class="custom-button font16" target="_blank" rel="noopener"
                    href="https://next.edudip.com/de/webinar/webinar-nach-control-iq-upgrade/1777438">WEBINAR-TERMIN
                    BUCHEN</a>
            </div>
            <div class="uk-width-1-4 uk-text-right">
                <img style="margin-top: -125px"
                    src="{{url('/assets/images/frontend/vitalaire-diabetes-control-iq-portraet-online-training.png')}}"
                    alt="guy">
            </div>
        </div>
    </div>
</div>

<div class="cust-padding">
    @include('frontend.components.webinar.listing')
    <br>
    <br>
    <br>
    <br>
    <div class="uk-text-center">
        <h3 class="roboto-slab-regular txt-grey font28">
            Offene Fragen zur t:slim X2 mit Basal-IQ oder Control-IQ Technologie?
        </h3>
    </div>
    <p class="font18">
        Wir beantworten allgemeine und spezielle Fragen zu unserer t:slim X2 Insulinpumpe mit Basal-IQ oder Control-IQ
        Technologie in unseren <a class="link" href="{{url('/faq')}}" title="FAQs">FAQs</a>. Unsere <a class="link"
            href="{{url('/videos-tslim-x2-insulinpumpe-einstellen')}}" title="Videos">Videos</a> sind die einfachste Art
        die t:slim X2 zu verstehen und die Insulinpumpe noch besser kennzulernen und optimal einzustellen.
    </p>
    <p class="font18">
        Für weitere Fragen, die nicht im FAQ gestellt oder mit den Videos beantwortet werden konnten, steht unser
        VitalAire Diabetes Innendienst mit Rat
        und Tat zur Seite. Bitte einfach eine E-Mail an <a class="link"
            href="mailto:diabetes@vitalaire.de">diabetes@vitalaire.de</a> schreiben oder direkt unter <a class="link"
            href="tel:0800/100 16 44">0800/100 16 44*</a> anrufen.
    </p>
    <div class="uk-padding uk-text-center">
        <a class="custom-button-small font16" href="{{url('/faq')}}">ZU DEN FAQ</a>
    </div>
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
                    <a href="{{url('/control-iq-technologie')}}"
                        class="custom-button uk-width-auto@m uk-width-1-1@s font16">
                        MEHR ÜBER CONTROL-IQ
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
@include('frontend.components.footer')
@endsection
@push('css')
@css('frontend/onlinetraining')
{{-- @js('frontend/percent') --}}
@endpush