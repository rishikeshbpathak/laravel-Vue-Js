@extends('frontend.shell')
@section('body')
@include('frontend.components.header')
<div class="uk-position-relative">
    <div class="banner-content-absolute" uk-grid>
        <div class="uk-width-1-1 grid-center">
            <div>
                <span class="new-banner-content roboto wh">Kontakt</span><br><br>
                <span class="roboto wh sub-banner-content">Service & Support</span>
            </div>
        </div>
    </div>
    <img class="banner-width"
        src="{{url('/assets/banner/vitalaire-diabetes-header-09-tslim-x2-insulinpumpe-kontakt.jpg')}}"
        alt="Kontakt banner">
    <br class="mob">
</div>
<div class="form-padding custom-padding-top">
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
                Kontakt
            </a>
        </div>

    </div>
    <h1 class="txt-blue fonth1 roboto-slab-regular">
        Kontakt zum Diabetes-Team von VitalAire
    </h1>

    <h2 class="txt-blue fonth2 font24" style="margin-top: -5px;">
        Fragen rund um die t:slim X2™ Insulinpumpe, zur Bestellung oder den Verbrauchsmaterialien? VitalAire hilft
    </h2>

    @if(session_has('status'))
    <div class="uk-alert-success" uk-alert>
        <a class="uk-alert-close" uk-close></a>
        <p class="txt-blue roboto-slab-regular">{{flash('status')}}</p>
    </div>
    @endif


    <form action="{{url('/kontaktformular/store')}}" method="POST" name="contactForm" id="contactForm"
        onsubmit="return validation();">
        <div uk-grid>
            <div class="uk-width-1-3">
                <label class="font16" for="type-general"><input class="uk-radio" type="radio" name="type" value="general" id="type-general" checked required>&nbsp;Allgemeine Anfrage</label>
            </div>
            <div class="uk-width-1-3">
                <label class="font16" for="type-tech"><input class="uk-radio" type="radio" name="type" value="tech" id="type-tech" required>&nbsp;Technische Anfrage</label>
            </div>
            <div class="uk-width-1-3">
                <label class="font16" for="type-question"><input class="uk-radio" type="radio" name="type" value="question" id="type-question" required>&nbsp;Frage zur Bestellung</label>
            </div>
        </div>
        <div>
            <label class="font16">Vorname*</label> <br />
            <input type="text" name="firstname" id="firstname" class="uk-width-1-1 margin-top-input" required>
        </div>
        <div>
            <label class="font16">Nachname*</label> <br />
            <input type="text" name="surname" id="surname" class="uk-width-1-1 margin-top-input" required>
        </div>
        <div>
            <label class="font16">E-Mail*</label> <br />
            <input type="email" name="email" id="email" class="uk-width-1-1 margin-top-input" required>
        </div>
        <div style="position: relative">
            <label class="font16">Nachricht*</label> <br />
            <div contenteditable="true" name="content-editable-div" id="content-editable-div"
                class="uk-width-1-1 margin-top-input custom-textarea">
            </div>
            <input class="custom-hidden-input uk-width-1-1" name="message" id="message" value="" />
            <span class="uk-hidden" id="requireddiv">
                Bitte füllen Sie auch den Nachrichtenbereich aus.
            </span>
        </div>
        <div class="g-recaptcha" data-sitekey="6Ld4DUgaAAAAALOwAJjmXN7t289eybkF0g26yLbj"></div>
        <br>
        <span id="errRecaptcha" style="color:red;"></span><br><br>
        <span class="font18">
            Mit Bestätigung der Schaltfläche „Anfrage senden“ willige ich darin ein, dass die VitalAire GmbH die von
            mir angegebenen personenbezogenen Daten zum Zwecke der Kontaktaufnahme verarbeitet und speichert. Meine
            Einwilligung kann ich jederzeit ohne Angabe von Gründen per E-Mail an <a
                href="mailto:datenschutz@vitalaire.de" class="text-link">datenschutz@vitalaire.de</a> widerrufen.
            Bitte beachten Sie unsere <a href="{{url('/datenschutz')}}" class="text-link">Datenschutzhinweise</a>.
        </span>
        <br><br><br>
        <button class="custom-button uk-width-auto@m uk-width-1-1@s font16" type="submit">
            ANFRAGE SENDEN
        </button>
    </form>
</div>
@include('frontend.components.footer')
@push('js')
@js('frontend/kontaktform')
@js('backend/jquery.min')
<script src="https://www.google.com/recaptcha/api.js"></script>
{{-- @js('backend/recaptcha') --}}
@endpush
@endsection
@push('css')
@css('frontend/registrierung')
@endpush