@extends('frontend.components.email.emailshell')
@section('body')
@include('frontend.components.email.emailheader')
<div class="email-padding uk-text-center">
    <br>
    <h2 class="roboto-bold txt-initial">Aktivierung Ihres Kontos.</h2>
    <br>
    <span>
        Diese ist nur noch ein Klick entfernt.
    </span>
    <br><br>
    <a href="{{url('/activate/'.$user_id) }}" class="email-button ">
        KONTO AKTIVIEREN
    </a>
    <br><br>
    <span class="font0_8">
        Sollte der Buttonlink nicht funktionieren, kopieren Sie bitte diesen Link in Ihre Browserzeile: <br>
        <a class="atag" href="{{url('/activate/'.$user_id) }}">{{url('/activate/'.$user_id) }}</a>
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