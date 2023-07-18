<div class="uk-text-center">
    <h2 class="txt-blue robotoslab-regular">
        Bestellung prüfen
    </h2>
</div>

<div v-for="cart in summerycartdet">
    <div class="back-light-blue">
        <div class="uk-padding uk-position-relative">
            <div class="uk-position-right close-button">
                <a @click="deleteCartItem(cart.id)">
                    <img src="{{url('/assets/png/frontend/delete.png')}}" width="20" alt=" close-button">
                </a>
            </div>
            <div class="uk-grid-match" uk-grid>
                <div class="uk-width-auto@m uk-width-1-1@s grid-center">
                    <div v-for="img in summeryimages">
                        <div v-if="img.product_id == cart.product_id">
                            <img v-bind:src="'./storage/'+img.filename" alt="slider3" width="100">
                        </div>
                    </div>
                </div>
                <div class="uk-width-expand@m uk-width-1-1@s grid-center">
                    <div>
                        <h4 class="txt-blue roboto-slab-regular">
                            @{{cart.sub_product.article_name}}
                        </h4>
                        <div class="font0_8">
                            <span class="txt-blue roboto-bold">
                                Inhalt :
                            </span>
                            <span class="txt-blue"> 10 Stück (@{{cart.sub_product.price}} € * / 1 Stück)
                            </span>
                            <br>
                            <span class="txt-blue roboto-bold">Größe:
                            </span>
                            <span class="txt-blue"> @{{cart.sub_product.cannula_length}} mm /
                                @{{cart.sub_product.house_length}} cm
                            </span>
                            <br>
                            <span class="txt-blue roboto-bold">Artikelnummer:
                            </span>
                            <span class="txt-blue"> @{{cart.sub_product.item_number}}
                            </span>
                        </div>
                    </div>
                </div>
                <div class="uk-width-expand@m uk-width-1-1@s grid-center">
                    <div>
                        <select name="payment_opt" class="uk-select inner-padding-select txt-blue font0_8 uk-text-center" @change="changePaymentopt($event,cart.quantity,cart.id)" v-bind:value="cart.payment_opt">
                            <option value="mit_kassenrezept" :selected="(cart.payment_opt == 'mit_kassenrezept')">Mit
                                Kassenrezept</option>
                            <option value="mit_privatrezept" :selected="(cart.payment_opt == 'mit_privatrezept')">Mit
                                Privatrezept</option>
                            <option value="selbstzahler" :selected="(cart.payment_opt == 'selbstzahler')">Selbstzahler
                            </option>
                        </select>
                    </div>
                </div>
                <br class="mob">
                <br class="mob">
                <br class="mob">
                <div class="uk-width-auto@m uk-width-1-1@s grid-center">
                    <div class="number-spinner" uk-grid>
                        <div class="uk-width-auto">
                            <div>
                                <button class="butoncoveringanimg" data-dir="dwn" v-if="cart.quantity != 1" @click="count(cart.quantity,cart.id,'dec',cart.payment_opt)" v-bind:id="cart.id">
                                    <img src="{{url('/assets/png/frontend/minus.png')}}" alt="minus" width="20">
                                </button>
                                <button class="butoncoveringanimg" v-if="cart.quantity == 1">
                                    <img src="{{url('/assets/png/frontend/minus.png')}}" class="invisible" alt="minus" width="20">
                                </button>
                            </div>
                        </div>
                        <div class="uk-width-auto" style="padding-left:20px">
                            <div>
                                <input type="tel" class="quantityofcart uk-text-center" v-bind:value="cart.quantity">
                            </div>
                        </div>
                        <div class="uk-width-auto" style="padding-left:20px">
                            <div>
                                <button class="butoncoveringanimg" data-dir="up" v-bind:id="cart.id" @click="count(cart.quantity,cart.id,'inc',cart.payment_opt)">
                                    <img src="{{url('/assets/png/frontend/plus.png')}}" alt="plus" width="20">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-expand@m uk-width-1-1@s grid-center">
                    <div class="uk-text-right">
                        <input type="hidden" name="cartid" id="cartid" value="cart.id">
                        <input type="hidden" name="cartp" id="cartp" value="cart.sub_product.price">
                        <span class="txt-blue roboto-bold" v-bind:id="'price'+cart.id">
                            @{{cart.price}} €
                        </span>
                        {{-- <span class="txt-blue roboto-bold" id="pricev+cart.id">
                            @{{grand_total=cart.sub_product.price * cart.quantity}} €
                        </span> --}}
                        {{-- <span class="txt-blue roboto-bold" id="pricev+cart.id" v-if="discountfinalprice==0">
                            @{{grand_total=cart.sub_product.price * cart.quantity}} €
                        </span>
                        <span class="txt-blue roboto-bold" id="pricev+cart.id" v-else>
                            @{{discountfinalprice}} €
                        </span> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
</div>



<hr>

<div class="listinsidepadding">
    <div class="uk-child-width-1-2@m uk-child-width-1-1@s" uk-grid>
        <div>
            <div uk-grid>
                <div class="uk-width-expand">
                    <h5 class="txt-blue roboto-bold">Lieferadresse</h5>
                    <br>
                    <div v-for="dadd in deliveryaddress">
                        <span class="txt-grey" v-if="dadd.preference == '1'">
                            @{{dadd.firstname}} @{{dadd.lastname}}<br>
                            @{{dadd.street}} <br>
                            @{{dadd.house_number}} <br>
                            @{{dadd.place}} <br>
                            @{{dadd.postcode}} <br>
                        </span>
                    </div>
                </div>
                <div class="uk-width-auto">
                    <div class="moveiconlilbitup">
                        <a uk-switcher-item="1" class="uk-icon-button edit-icon">
                            <img src="{{url('/assets/png/frontend/edit.png')}}" width="60%" alt="edit">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div uk-grid>
                <div class="uk-width-expand">
                    <h5 class="txt-blue roboto-bold">Rechnungsadresse</h5>
                    <br>
                    <div v-for="badd in billingaddress">
                        <span class="txt-grey" v-if="badd.preference == '1'">
                            @{{badd.street}} <br>
                            @{{badd.house_number}} <br>
                            @{{badd.place}} <br>
                            @{{badd.postcode}} <br>
                            <br>
                        </span>
                    </div>
                </div>
                <div class="uk-width-auto">
                    <div class="moveiconlilbitup">
                        <a uk-switcher-item="1" class="uk-icon-button edit-icon">
                            <img src="{{url('/assets/png/frontend/edit.png')}}" width="60%" alt="edit">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<hr>

<div class="listinsidepadding">
    <div class="uk-child-width-1-2@m uk-child-width-1-1@s" uk-grid>
        <div>
            <div uk-grid>
                <div class="uk-width-expand">
                    <h5 class="txt-blue roboto-bold">Lieferung</h5>
                    <br>
                    <span class="txt-grey">
                        DHL (Standard-Lieferung)
                    </span>
                </div>
                <div class="uk-width-auto">
                    <div class="uk-text-left">
                        <h5 class="txt-blue roboto-bold">
                            23.05. – 24.05.
                        </h5>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div uk-grid>
                <div class="uk-width-expand">
                    <h5 class="txt-blue roboto-bold">Zahlungart</h5>
                    <br>
                    <span class="txt-grey">
                        Rechnung
                    </span>
                </div>
                <div class="uk-width-auto">
                    <div class="moveiconlilbitup">
                        <a uk-switcher-item="2" class="uk-icon-button edit-icon">
                            <img src="{{url('/assets/png/frontend/edit.png')}}" width="60%" alt="edit">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<hr>

<div class="uk-padding">
    <div class="uk-grid-match" uk-grid>
        <div class="uk-width-auto@m uk-width-1-1@s grid-center des">
            <div class="invisible">
                <img src="{{url('/assets/images/frontend/slider3.png')}}" alt="slider3" width="100">
            </div>
        </div>
        <div class="uk-width-expand@m uk-width-1-1@s grid-center">
            <div class="payment-cost">
                {{-- <div uk-grid>
                        <div class="uk-width-expand">
                            <div>
                                <span>
                                    Zwischensumme Kassenrezept-Produkte
                                </span>
                            </div>
                        </div>
                        <div class="uk-width-auto">
                            <div class="uk-text-right">
                                <span class="roboto-bold">
                                    0,00 €
                                </span>
                            </div>
                        </div>
                    </div> --}}
                <div uk-grid>
                    <div class="uk-width-expand">
                        <div>
                            <span>
                                Zwischensumme Kassenrezept-Produkte
                            </span>
                        </div>
                    </div>
                    <div class="uk-width-auto">
                        <div class="uk-text-right">
                            <span class="roboto-bold" id="totalv">
                                @{{pro_total}}
                            </span>
                        </div>
                    </div>
                </div>
                <div uk-grid>
                    <div class="uk-width-expand">
                        <div>
                            <span>
                                Lieferung
                            </span>
                        </div>
                    </div>
                    <div class="uk-width-auto">
                        <div class="uk-text-right">
                            <span class="roboto-bold">
                                0,00 €
                            </span>
                        </div>
                    </div>
                </div>
                <div uk-grid class="uk-grid-match">
                    <div class="uk-width-expand">
                        <div>
                            <form @submit="formSubmit">
                                <input type="text" class="border-input" v-model="coupon_code" id="coupon_code">&nbsp;&nbsp;
                                <button class="custom-button" type="submit">EINLÖSEN</button>
                            </form>
                        </div>
                    </div>
                    <div class="uk-width-auto grid-center">
                        <div class="uk-text-right">
                            {{-- <span class="roboto-bold">
                                0,00 €
                            </span> --}}

                            <span class="roboto-bold" v-if="discount_amount==0">
                                0,00 €
                            </span>
                            <span class="roboto-bold" v-else>
                                @{{discount_amount}}
                            </span>
                        </div>
                    </div>

                </div>
                <span style="color:red;" v-if="discounterrmsg">Gutschein ist ungültig</span>
                <hr>
                <div uk-grid>
                    <div class="uk-width-expand">
                        <div>
                            <span class="roboto-bold">
                                Deine Gesamtsumme
                            </span>
                        </div>
                    </div>
                    <div class="uk-width-auto">
                        {{-- <div class="uk-text-right">
                            <span class="roboto-bold">
                                @{{grand_total}} €
                        </span>
                    </div> --}}
                    <div class="uk-text-right">
                        <span class="roboto-bold" v-if="discount_amount==0">
                            @{{pro_total}}
                        </span>
                        <span class="roboto-bold" v-else>
                            @{{discountfinalprice}}
                        </span>
                    </div>
                </div>
            </div>
            <div uk-grid>
                <div class="uk-width-expand">
                    <div>
                        <span>
                            Inkl. MwSt. 16 %
                        </span>
                    </div>
                </div>
                <div class="uk-width-auto">
                    <div class="uk-text-right">
                        <span class="roboto-bold" id="vatv" v-if="discount_amount==0">
                            @{{vat}}
                        </span>
                        <span class="roboto-bold" v-else>
                            @{{discountfinalvat}}
                        </span>
                    </div>
                </div>
            </div>
            <hr>
            <div uk-grid>
                <div class="uk-width-expand">
                    <div>
                        <span>
                            Ihre Gesamtsumme
                        </span>
                    </div>
                </div>
                <div class="uk-width-auto">
                    <div class="uk-text-right">
                        <span class="roboto-bold" id="vat" v-if="discount_amount==0">
                            @{{grand_total}}
                        </span>
                        <span class="roboto-bold" id="vat" v-else>
                            @{{discountgrandtotal}}
                        </span>
                    </div>
                </div>
            </div>
            <div class="uk-text-center paddingfootertally">
                <footer>
                    Mit deiner Bestellung erklärst du dich mit unseren Datenschutzbestimmungen, AGB und
                    Widerrufsbestimmungen einverstanden.
                </footer>
            </div>
            <div uk-grid>
                <div class="uk-width-auto">
                    <div>
                        <input class="uk-checkbox" type="checkbox" v-on:click="checkPrivacy($event)">
                    </div>
                </div>
                <div class="uk-width-expand">
                    <div>
                        <span>
                            Hiermit bestätige ich, dass ich das Originalrezept innerhalb von 2 Wochen an die
                            VitalAire GmbH senden werde.
                            Mir ist bewusst das ich sonst eine Rechnung über die getätigte Bestellung erhalten
                            werde.
                        </span>
                    </div>
                </div>
            </div>
            <span style="color:red;">@{{error}}</span>
        </div>
    </div>
</div>
</div>
<div class="uk-child-width-1-2@m uk-child-width-1-1@s" uk-grid>
    <div>
        <div>
            <a uk-switcher-item="previous" class="custom-button uk-width-auto@m uk-width-1-1@s">
                ZURÜCK
            </a>
        </div>
    </div>
    <div>
        <div class="uk-text-right">
            <a class="custom-button-orange uk-width-auto@m uk-width-1-1@s" @click="generateOrder()">
                JETZT KAUFEN
            </a>
        </div>
    </div>
</div>
