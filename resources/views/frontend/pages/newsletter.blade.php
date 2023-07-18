@extends('frontend.shell')
@section('body')
@include('frontend.components.header')

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
        <div class=" uk-width-auto txt-blue">
            <a class="atag font16">
                Service & Support
            </a>
        </div>
        <div class="uk-width-auto txt-blue">
            <span uk-icon="icon:chevron-double-right;" class="vertical-icon"></span>
        </div>
        <div class="uk-width-expand@m uk-width-1-1@s txt-blue-darker">
            <a class="atag font16">
                Newsletter
            </a>
        </div>
    </div>
    <h1 class="txt-blue roboto-slab-regular fonth1">Newsletter abonnieren</h1>
    <h2 class="txt-blue fonth2">Jetzt zum Newsletter anmelden und als Erster informiert sein
    </h2>
    <br>
    @if(session_has('success'))
    <div class="uk-alert-success" uk-alert>
        <a class="uk-alert-close" uk-close></a>
        <p>{{flash('success')}}</p>
    </div>
    @endif
    @if(session_has('error'))
    <div class="uk-alert-danger" uk-alert>
        <a class="uk-alert-close" uk-close></a>
        <p>{{flash('error')}}</p>
    </div>
    @endif
    <form action="{{url('/newsletter/storesubscribe')}}" method="post">
        <fieldset class="uk-fieldset">
            <div>
                <label class="font16" for="firstname">Vorname*</label>
                <br>
                <input type="text" name="firstname" id="firstname" class="margin-top-input uk-width-1-1" required>
            </div>
            <div>
                <label class="font16" for="lastname">Nachname*</label>
                <br>
                <input type="text" name="lastname" id="lastname" class="margin-top-input uk-width-1-1" required>
            </div>
            <div>
                <label class="font16" for="email">E-Mail*</label>
                <br>
                <input type="email" name="email" id="email" class="margin-top-input uk-width-1-1" required>
            </div>
            <div>
                <h3 class="txt-blue roboto-slab-regular font20">Damit wir individuell auf dich eingehen können, fülle
                    bitte
                    noch
                    die folgenden Felder aus:</h3>
            </div>
            <div>
                <label class="font16" for="owndexcom">Hast Du bereits ein Dexcom G6?</label>
                <br>
                <label class="font16"><input class="uk-radio" type="radio" name="owndexcom" value="Ja" required>
                    Ja</label>
                <br>
                <label class="font16"><input class="uk-radio" type="radio" name="owndexcom" value="Nein"> Nein</label>
            </div>
            <div>
                <label>Zugehörigkeit</label>
                <br />
                <select name="belonging" class="uk-width-1-1 uk-select margin-top-input" required>
                    <option value="Angehöriger">Angehöriger</option>
                    <option value="Patient">Patient</option>
                    <option value="Patientenvertreter">Patientenvertreter</option>
                    <option value="Blogger/Journalist">Blogger/Journalist</option>
                    <option value="Medizinisches Fachpersonal">Medizinisches Fachpersonal</option>
                    <option value="keine Angabe">keine Angabe</option>
                </select>
            </div>
            <div class="uk-button-radio">
                <label class="font16" for="gender">Geschlecht</label>
                <br>
                <label class="font16"><input class="uk-radio" type="radio" name="gender" value="m" required>
                    männlich</label>
                <br>
                <label class="font16"><input class="uk-radio" type="radio" name="gender" value="f">
                    weiblich</label>
                <br>
                <label class="font16"><input class="uk-radio" type="radio" name="gender" value="m"> andere</label>
            </div>
            <div>
                <label class="font16" for="dob">Geburtstag</label>
                <br>
                <input type="date" name="dob" id="dob" class="margin-top-input uk-width-1-1" required>
            </div>
            <div>
                <label class="font16" for="number">Telefonnummer</label>
                <br>
                <input type="number" name="number" id="number" class="margin-top-input uk-width-1-1" required>
            </div>
            <div>
                <label class="font16"><input class="uk-checkbox" type="checkbox" required> Ich habe die <a
                        href="{{url('/datenschutz')}}" class="para-text">Datenschutzbestimmungen</a> gelesen und
                    erkenne diese ausdrücklich an.</label>
            </div>
            <div uk-grid>
                <div class="uk-width-auto">
                    <img src="{{url('/assets/png/frontend/lock.png')}}" width="60" alt="lock">
                </div>
                <div class="uk-width-expand">
                    <p class="font16">
                        Wir nutzen Newsletter2Go als Software für die Versendung unserer Newsletter. Im Rahmen dieser
                        Anmeldung erklären Sie sich einverstanden, dass Ihre eingegebenen Daten an die Sendinblue GmbH
                        übermittelt werden. Bitte beachten Sie die <a href="{{url('/assets/pdf/frontend/N2G_DSE.pdf')}}"
                            class="para-text" target="_blank" rel="noopener">Datenschutzbestimmungen</a> und <a
                            href="{{url('/assets/pdf/frontend/N2G_AGB.pdf')}}" class="para-text" target="_blank"
                            rel="noopener">Allgemeinen Geschäftsbedingungen</a> der Sendinblue GmbH.
                    </p>
                </div>
            </div>
            <div>
                <button class="buttonnewsletter font16" type="submit">
                    NEWSLETTER ABONNIEREN
                </button>
            </div>
        </fieldset>
    </form>
</div>

@include('frontend.components.footer')
@endsection
@push('css')
@css('frontend/newsletter')
@endpush