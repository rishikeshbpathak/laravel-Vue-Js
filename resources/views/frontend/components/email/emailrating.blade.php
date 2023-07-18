@extends('frontend.components.email.emailshell')
@section('body')
@include('frontend.components.email.emailheader')
<div class="cust-padding uk-text-center">
    <h2 class="roboto-bold txt-initial">
        Ihre Meinung ist uns und anderen Kunden wichtig, Max!
    </h2>
    <br>
    <p>
        Bitte bewerten Sie Ihre Bestellung bei VitalAire Diabetes <a href=""
            class="para-link">(die-clevere-insulinpumpe.de)</a> <br>
        und helfen Sie mit Ihrem Feedback anderen Kunden bei Ihrer Produktauswahl.
    </p>
    <br>
    <p>
        Vielen Dank und bis bald <br>
        Ihr VitalAire Diabetes-Team
    </p>
    <br>
    <br>
    <h3 class="roboto-bold txt-initial">
        t:slim X2 Reservoir
    </h3>
    <div class="uk-width-1-3 uk-inline mob-star-width">
        <img src="https://cdn.discordapp.com/attachments/725016728525996093/725299292809592932/slider3.png"
            alt="Product" width="150px">
        <div class="uk-flex star-padding">
            <img src="https://cdn.discordapp.com/attachments/725016728525996093/725299075569942558/starfilled.png"
                width="40" alt="starfilled">
            <img src="https://cdn.discordapp.com/attachments/725016728525996093/725299075569942558/starfilled.png"
                width="40" alt="starfilled">
            <img src="https://cdn.discordapp.com/attachments/725016728525996093/725299075569942558/starfilled.png"
                width="40" alt="starfilled">
            <img src="https://cdn.discordapp.com/attachments/725016728525996093/725299075569942558/starfilled.png"
                width="40" alt="starfilled">
            <img src="https://cdn.discordapp.com/attachments/725016728525996093/725299075569942558/starfilled.png"
                width="40" alt="starfilled">
        </div>
    </div>
    <br><br><br>
    <a href="{{url('/activate/'.$product_name) }}" class="email-button">
        JETZT BEWERTEN
        </button>
</div>
@include('frontend.components.email.emailfooter')
@endsection