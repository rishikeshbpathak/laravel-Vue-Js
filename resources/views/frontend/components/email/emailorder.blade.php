@extends('frontend.components.email.emailshell')
@section('body')
@include('frontend.components.email.emailheader')
<div class="cust-padding">
    <div>
        <h2 class="roboto-bold txt-initial">
            Danke für die Bestellung!
        </h2>
        <h3 class="roboto-bold txt-initial">
            Hallo {{ $name }},
        </h3>
        <p class="h-margin-top">
            vielen Dank für Ihre Bestellung in unserem Onlineshop <a href="die-clevere-insulinpumpe.de" class="para-link">die-clevere-insulinpumpe.de</a>.
        </p>
        <p>
            Sobald diese versendet ist, bekommen Sie einen Link per E-Mail (von DHL) über den Sie Ihre Bestellung
            verfolgen können.
            Wir versenden die Ware (sofern vorrätig) in der Regel am darauf folgenden Werktag (Mo bis Fr).
        </p>
        <p>
            <span class="roboto-bold txt-initial">
                Voraussichtliches Lieferdatum:
            </span>
            <span>
                {{$expected_delivery_date}}
            </span>
        </p>
        <p>
            Viele Grüße und bis bald <br>
            Ihr VitalAire Diabetes-Team
        </p>
    </div>
    <br>

    <div>
        <table class="uk-table">
            <tr>
                <td>
                    <div>
                        <h3 class="roboto-bold txt-initial mob-tex-center">
                            Bestellübersicht
                        </h3>
                    </div>
                </td>
                <td>
                    <div class="uk-text-right mob-tex-center">
                        <span class="roboto-bold txt-initial">
                            Bestellnummer:
                        </span>
                        <span>{{$order->order_no}}</span>
                        <br>
                        <span class="roboto-bold txt-initial">
                            Bestelldatum:
                        </span>
                        <span>{{$order->created_at}}</span>
                    </div>
                </td>
            </tr>
        </table>
        <br>

        @foreach($carts as $cart)

        <table class="uk-table border-bottom">
            <tr>
                @foreach($product_image as $pi)
                @if($cart->cart_number == $order->cart_number)
                @if($pi->product_id == $cart->product_id)
                <td class="image-width">

                    <div class="image-width">
                        <img src="https://cdn.discordapp.com/attachments/725016728525996093/725299292809592932/slider3.png" alt="slider" width="150px">
                    </div>

                </td>
                @endif
                @endif
                @endforeach

                <td class="">
                    <div>
                        <span class="roboto-bold txt-initial">{{$cart->sub_product->article_name}}</span><br>
                        <span class="font0_8">Inhalt: 10 Stück ({{$cart->sub_product->price}} € * / 1 Stück)</span><br>
                        <span class="font0_8">{{$cart->sub_product->cannula_length}} mm /
                            {{$cart->sub_product->house_length}} cm</span><br>
                        <span class="font0_8">Artikelnummer: {{$cart->sub_product->item_number}}</span><br>
                        <span class="font0_8">Zahlungsart: {{$cart->payment_option}}</span><br>
                        <span class="font0_8">Anzahl: {{$cart->quantity}}</span><br>
                    </div>
                </td>
                <td class=" grid-center">
                    <div>
                        <span class="roboto-bold">
                            {{$cart->price}} €
                        </span>
                    </div>
                </td>
            </tr>
        </table>

        @endforeach

        <div>
            <table class="uk-table payment-table">
                <tbody>
                    <tr>
                        <td>Zahlungsart</td>
                        <td class="roboto-bold uk-text-right txt-initial">
                            Kassenrezept, Selbstzahler
                        </td>
                    </tr>
                    <tr>
                        <td>Kassenrezept-Produkte</td>
                        <td class="roboto-bold uk-text-right">
                            {{$total}} €
                        </td>
                    </tr>
                    {{-- <tr>
                        <td>Selbstzahler-Produkte</td>
                        <td class="roboto-bold uk-text-right">
                            12,45 €
                        </td>
                    </tr> --}}
                    <tr>
                        <td>Lieferung</td>
                        <td class="roboto-bold uk-text-right txt-initial">
                            kostenlos
                        </td>
                    </tr>
                    <tr>
                        <td>Gutschein</td>
                        <td class="roboto-bold uk-text-right">
                            @if($order->discount == '0.00')
                            0.00 €
                            @else
                            {{$order->discount}} €
                            @endif

                        </td>
                    </tr>
                    <tr>
                        <td>Inkl. MwSt. 16 %</td>
                        <td class="roboto-bold uk-text-right">
                            {{$order->vat}} €

                        </td>
                    </tr>
                    <tr class="border-top-padding">
                        <td class="roboto-bold txt-initial">Gesamtsumme inkl. MwSt.</td>
                        <td class="roboto-bold uk-text-right">
                            {{$order->amount}} €
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br>
        <div class="uk-grid-match" uk-grid>
            <div class="uk-width-auto@m uk-width-1-1@s">
                <div>
                    <button class="email-button">
                        BESTELLUNG ANSEHEN
                    </button>
                </div>
            </div>
        </div>
        <table class="uk-table mob-grid-no-padding">
            <tr>
                <td style="width: 50%">
                    <div>
                        <span class="roboto-bold txt-initial">Lieferadresse</span><br>
                        <span>
                            {{$delivery_address->firstname}} {{$delivery_address->lastname}}<br>
                            {{$delivery_address->street}} <br>
                            {{$delivery_address->house_number}} <br>
                            {{$delivery_address->place}} <br>
                            {{$delivery_address->postcode}} <br>
                        </span>
                    </div>
                </td>
                <td style="width: 50%">
                    <div>
                        <span class="roboto-bold txt-initial">Rechnungsadresse</span><br>
                        <span>
                            {{$billing_address->street}} <br>
                            {{$billing_address->house_number}}<br>
                            {{$billing_address->place}}<br>
                            {{$billing_address->postcode}}<br>
                            <br>
                        </span>
                    </div>
                </td>
            </tr>
        </table>
        <table class="uk-table mob-grid-no-padding">
            <tr>
                <td style="width: 50%">
                    <div>
                        <span class="roboto-bold txt-initial">Versand</span><br>
                        <span>
                            Kostenlose Lieferung
                        </span>
                    </div>
                </td>
                <td style="width: 50%">
                    <div>
                        <span class="roboto-bold txt-initial">Zahlung*</span><br>
                        <span>
                            Rezept
                        </span>
                        <br><br>
                        <span class="font0_8">
                            *Ist dein Original-Rezept nicht innerhalb von 2 Wochen bei uns eingegangen, müssen
                            wir dir die Bestellung in Rechnung stellen.
                        </span>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <br><br>
    <div>
        <span class="roboto-bold txt-initial">
            Ihre Adresse hat sich geändert?
        </span>
        <br>
        <span>
            Für eine abgeschlossene Bestellung kann die Liefer- und Rechnungsadresse leider nicht mehr geändert werden.
            Falls Ihr
            Paket nicht zugestellt werden kann, kommt es als Rücksendung wieder zu uns.
        </span>
        <br><br>
        <span>
            Sie möchten einen Artikel <a href="{{url('/tslimonlineshop') }}" class="para-link">zurückschicken</a>?
        </span>
    </div>
</div>
@include('frontend.components.email.emailfooter')
@endsection
