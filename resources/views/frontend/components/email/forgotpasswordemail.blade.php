@extends('frontend.components.email.emailshell')
@section('body')
@include('frontend.components.email.emailheader')
<div class="email-padding uk-text-center">
    {{-- <p>Dear {{$name}}</p> --}}
    <br>
    <h2 class="roboto-bold txt-initial">Setze dein Passwort zurück</h2>
    <br>
    <span>
        Drücken Sie die Taste unten, um Ihr Passwort zu ändern.
    </span>
    <br><br>
    <a href="{{url('/Passwortvergessen/passwortandern/'.$user_id) }}" class="email-button">
        ÄNDERE DAS PASSWORT
    </a>
    <br><br>
    <span class="font0_8">
        Sollte der Buttonlink nicht funktionieren, kopieren Sie bitte diesen Link in Ihre Browserzeile <br>
        {{-- <a class="atag" href="http://localhost/vital-aire/Passwortvergessen/passwortandern/{{$user_id}}">Passwort
        jetzt
        zurücksetzen</a> --}}
        <a class="atag" href="{{url("/Passwortvergessen/passwortandern/$user_id") }}">{{url('/Passwortvergessen/passwortandern/'.$user_id) }}</a>
    </span>
    <br><br>
    <span>
        Sollten Sie diese E-Mail erhalten haben und sich nicht registriert haben, melden Sie es uns bitte per E-Mail an
        <a href="mailto:diabetes@vitalaire.de" class="para-link atag">diabetes@vitalaire.de</a>.
    </span>
    <br><br>
    <span class="roboto-bold">
        Bitte antworten Sie nicht auf diese E-Mail.
    </span>
</div>
@include('frontend.components.email.emailfooter')
@endsection
