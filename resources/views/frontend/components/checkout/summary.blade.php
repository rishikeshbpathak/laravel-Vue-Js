<div class="uk-text-center">

    <h2 class="txt-blue robotoslab-regular" id="total_tital">
        Dein Warenkorb gesamt: @{{pro_total}}
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
                        <select name="payment_opt"
                            class="uk-select inner-padding-select txt-blue font0_8 uk-text-center"
                            @change="changePaymentopt($event,cart.quantity,cart.id)" v-bind:value="cart.payment_opt">
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
                    <div class="number-spinner" uk-grid v-if="cart.sub_product.inventory != 0">
                        <div class="uk-width-auto">
                            <div>
                                <button class="butoncoveringanimg" data-dir="dwn" v-if="cart.quantity != 1"
                                    @click="count(cart.quantity,cart.id,'dec',cart.payment_opt)"
                                    v-bind:data-id="cart.id">
                                    <img src="{{url('/assets/png/frontend/minus.png')}}" alt="minus" width="20">
                                </button>
                                <button class="butoncoveringanimg" v-if="cart.quantity == 1">
                                    <img src="{{url('/assets/png/frontend/minus.png')}}" class="invisible" alt="minus"
                                        width="20">
                                </button>
                            </div>
                        </div>
                        <div class="uk-width-auto" style="padding-left:20px">
                            <div>
                                <input type="tel" class="quantityofcart uk-text-center" v-bind:id="cart.id"
                                    v-bind:value="cart.quantity">
                            </div>
                        </div>
                        <div class="uk-width-auto" style="padding-left:20px">
                            <div>
                                <button class="butoncoveringanimg" data-dir="up" v-bind:id="cart.id"
                                    @click="count(cart.quantity,cart.id,'inc',cart.payment_opt)">
                                    <img src="{{url('/assets/png/frontend/plus.png')}}" alt="plus" width="20">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-expand@m uk-width-1-1@s grid-center">
                    <div class="uk-text-right">
                        <input type="hidden" name="cartid" id="cartid" v-bind:value="cart.id">
                        <input type="hidden" name="cartp" id="cartp" v-bind:value="cart.sub_product.price">
                        <span class="txt-blue roboto-bold" v-bind:id="'price'+cart.id">
                            @{{cart.price}} €
                        </span>
                    </div>
                </div>



            </div>
        </div>
    </div>
    <br>
</div>

<div class="uk-padding" id="targetDiv">
    <div class="uk-grid-match" uk-grid>
        <div class="uk-width-auto@m uk-width-1-1@s grid-center des">
            <div class="invisible">
                <img src="{{url('/assets/images/frontend/slider3.png')}}" alt="slider3" width="100">
            </div>
        </div>
        <div class="uk-width-expand@m uk-width-1-1@s grid-center">
            <div class="payment-cost">
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
                            <span class="roboto-bold" id="total">
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
                        <div class="uk-text-right">
                            <span class="roboto-bold">
                                @{{pro_total}}
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
                            <span class="roboto-bold" id="vat">
                                @{{vat}}
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
                            <span class="roboto-bold" id="vat">
                                @{{grand_total}}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="uk-child-width-1-2@m uk-child-width-1-1@s" uk-grid>
    <div>
        <div>
            <a href="{{url('/tslimonlineshop')}}" class="custom-button uk-width-auto@m uk-width-1-1@s">
                WEITER EINKAUFEN
            </a>
        </div>
    </div>
    <div>
        <div class="uk-text-right">
            <a uk-switcher-item="next" class="custom-button-orange uk-width-auto@m uk-width-1-1@s">
                ZUR KASSE
            </a>
        </div>
    </div>
</div>

<br>
<hr>
<br>
<div class="uk-text-center">
    <h3 class="txt-grey roboto-slab-regular">
        Beliebte Produkte
    </h3>
</div>
<div class="shop-padding uk-position-relative">


    <div class="uk-visible-toggle uk-light" tabindex="-1" uk-slider="autoplay: true">

        <ul class="uk-slider-items uk-child-width-1-3@m " uk-grid>
            @foreach($beliebte_produktes as $product)
            <li>
                <a href="{{url('/produkt/'.$product->article_name)}}">
                    <div class="shop-card">
                        <div>
                            @foreach($product_images as $img)
                            @if($img->product_id == $product->id)
                            <img src="{{url('/storage/'.$img->filename)}}" alt="product" class="uk-position-center">
                            @endif
                            @endforeach

                        </div>
                    </div>
                    <div class="uk-text-center">
                        <span class="roboto-bold txt-grey">
                            {{$product->article_name}}
                        </span>
                    </div>
                </a>
            </li>
            @endforeach
        </ul>

        <a class="uk-position-center-left" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
        <a class="uk-position-center-right" href="#" uk-slidenav-next uk-slider-item="next"></a>
        {{-- <div>
            <a class="uk-position-center-left-out uk-position-small slider-arrow" href="#" uk-slidenav-previous
                uk-slider-item="previous" style="color: grey;visibility:visible!important;"></a>
            <a class="uk-position-center-right-out uk-position-small slider-arrow" href="#" uk-slidenav-next
                uk-slider-item="next" style="color: grey;visibility:visible!important;"></a>
        </div> --}}

    </div>
</div>