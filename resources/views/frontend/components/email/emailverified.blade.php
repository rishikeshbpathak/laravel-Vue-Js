@extends('frontend.components.email.emailshell')
@section('body')
@include('frontend.components.email.emailheader')
<div class="email-padding uk-text-center">
    <br>
    <h2 class="roboto-bold txt-initial">Herzlich willkommen Max.</h2>
    <br>
    <span>
        Ihre Registrierung war erfolgreich und Sie können nun unseren Onlineshop im vollen Umfang nutzen.
    </span>
    <br>
    <span>
        Sie können jederzeit Ihre persönlichen Daten im Menü unter “Mein Konto” ändern.
    </span>
    <br><br>
    <a href="{{url('/tslimonlineshop') }}" class="email-button ">
        ZUM ONLINESHOP
    </a>
    <br><br>
    <span class="font0_8">
        Sollte der Buttonlink nicht funktionieren, kopieren Sie bitte diesen Link in Ihre Browserzeile: <br>
        <a class="atag" href="{{url('/tslimonlineshop') }}">{{url('/tslimonlineshop') }}</a>
    </span>
    <br><br>
    <span>
        Sollten Sie diese E-Mail erhalten haben und sich nicht registriert haben,
        melden Sie es uns bitte per E-Mail an
        <a href="mailto:diabetes@vitalaire.de" class="para-link atag">diabetes@vitalaire.de</a>.
    </span>
    <br><br>
    <span class="roboto-bold">
        Bitte antworten Sie nicht auf diese E-Mail.
    </span>
</div>
@include('frontend.components.email.emailfooter')
@endsection