<div class="uk-text-center">
    <h2 class="txt-blue robotoslab-regular">
        Danke für Deine Bestellung, Maximiliane.
    </h2>
    <br>
    <span>
        Du bekommst automatisch eine Bestellbestätigung per E-Mail. Du kannst Sie aber auch direkt ausdrucken.
    </span>
</div>
<br>
<div>
    <div class="uk-child-width-1-2@m uk-child-width-1-1@s" uk-grid v-if="order != null">
        <div>
            <div class="uk-child-width-1-2" uk-grid>
                <div>
                    <span class="txt-blue roboto-500">Bestellnummer:</span>
                </div>
                <div>
                    <span class="txt-grey">
                        VITAL-@{{order.id}}
                        {{-- @{{order.order_no}} --}}
                    </span>
                </div>
            </div>
            <br>
            <div class="uk-child-width-1-2" uk-grid>
                <div>
                    <span class="txt-blue roboto-500">Bestellung erhalten:</span>
                </div>
                <div>
                    <span class="txt-grey">
                        @{{order.created_at}}
                        {{-- 20.05.2020 12:12:35 --}}
                    </span>
                </div>
            </div>
            <br>
            <div class="uk-child-width-1-2" uk-grid>
                <div>
                    <span class="txt-blue roboto-500">Rezept hochgeladen:</span>
                </div>
                <div>
                    <a v-bind:href="'./storage/'+cartdetail.file_name" target="_blank" rel="noopener"
                        class="reciepttag">REZEPT</a>
                </div>
            </div>
            <br>
            <div class="uk-child-width-1-2" uk-grid>
                <div>
                    <span class="txt-blue roboto-500">Lieferadresse:</span>
                </div>
                <div>
                    <span class="txt-grey">
                        @{{successdeliveryaddress.firstname}} @{{successdeliveryaddress.lastname}}<br>
                        @{{successdeliveryaddress.street}} <br>
                        @{{successdeliveryaddress.house_number}} <br>
                        @{{successdeliveryaddress.place}} <br>
                        @{{successdeliveryaddress.postcode}} <br>
                    </span>
                </div>
            </div>
            <br>
        </div>
        <div>
            <div class="uk-child-width-1-2" uk-grid>
                <div>
                    <span class="txt-blue roboto-500">Lieferung voraussichtlich:</span>
                </div>
                <div>
                    <span class="txt-grey">
                        @{{expected_delivery_date}}
                        {{-- 23.05.-24.05.2020 --}}
                    </span>
                </div>
            </div>
            <br>
            <div class="uk-child-width-1-2" uk-grid>
                <div>
                    <span class="txt-blue roboto-500">Versand mit:</span>
                </div>
                <div>
                    <span class="txt-grey">
                        DHL
                    </span>
                </div>
            </div>
            <br>
            <div class="uk-child-width-1-2" uk-grid>
                <div>
                    <span class="txt-blue roboto-500">Trackingnummer:</span>
                </div>
                <div>
                    <span class="txt-grey">
                        Kommt separat per E-Mail
                    </span>
                </div>
            </div>
            <br>
            <div class="uk-child-width-1-2" uk-grid>
                <div>
                    <span class="txt-blue roboto-500">Rechnungsadresse:</span>
                </div>
                <div>
                    <span class="txt-grey">
                        @{{successbillingaddress.street}} <br>
                        @{{successbillingaddress.house_number}} <br>
                        @{{successbillingaddress.place}} <br>
                        @{{successbillingaddress.postcode}} <br>
                        <br>
                    </span>
                </div>
            </div>
            <br>
        </div>
    </div>
</div>
<div class="uk-child-width-1-2@m uk-child-width-1-1@s" uk-grid>
    <div>
        <h3 class="txt-blue robotoslab-regular">
            Wichtig! So gehts weiter:
        </h3>
        <p class="txt-grey">
            Wenn Du mit einem Rezept bestellt hast, drucke am besten gleich deinen Freiumschlag aus oder nutze deine
            vorhandenen Freiumschläge und sende uns das Original per Post.
        </p>
        <p class="txt-red roboto-500">
            Ist dein Original-Rezept nicht innerhalb von 2 Wochen bei uns eingegangen, müssen wir dir die Bestellung in
            Rechnung stellen.
        </p>
    </div>
    <div>
        <div class="bg-grey">
            <div class="uk-child-width-1-2@l  uk-child-width-1-1@m sucessinnerpadding" uk-grid>
                <div>
                    <img src="{{url('/assets/images/frontend/pdfpreview.png')}}" width="500px" alt="pdfpreview">
                </div>
                <div class="uk-text-center grid-center">
                    <br class="mob">
                    <a class="custom-button" href="{{url('/assets/pdf/frontend/Freiumschlag.pdf')}}" download>DOWNLOAD
                        FREIUMSCHLAG</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="uk-child-width-1-2@m uk-child-width-1-1@s" uk-grid>
    <div class="uk-text-left">
        <a class="custom-button uk-width-auto@m uk-width-1-1@s"
            v-bind:href="'./orders/invoice/'+order.id">Bestellbestätigung DRUCKEN </a>
    </div>
    <div class="uk-text-right">
        <a class="custom-button uk-width-auto@m uk-width-1-1@s" href="{{url('/tslimonlineshop')}}">ZURÜCK ZUM SHOP</a>
    </div>
</div>