@extends('frontend.shell')
@section('body')
@include('frontend.components.headershop')



<div class="shop-padding">
    <div uk-grid class=" uk-grid-match nav-tab">
        <div class="uk-width-auto">
            <a href="{{url('')}}">
                <img src="{{url('/assets/icons/home.png')}}" class="home-icons" alt="home">
            </a>
        </div>
        <div class="uk-width-auto grid-center txt-blue">
            <span uk-icon="icon:chevron-double-right;"></span>
        </div>
        <div class="uk-width-auto grid-center txt-blue">
            <a class="atag ">
                {{$product->category->name}}
            </a>
        </div>
        <div class="uk-width-auto grid-center txt-blue">
            <span uk-icon="icon:chevron-double-right;"></span>
        </div>
        <div class="uk-width-auto grid-center txt-blue">
            <a class="atag ">
                {{$product->article_name}}
            </a>
        </div>
        <div class="uk-width-expand">

        </div>
    </div>
    <br><br>


    <products detailsurl="{{url('/produkt/details/'.$product->id)}}" subproducturl="{{url('/produkt/subproduct')}}"
        carturl="{{url('/produkt/Addcart')}}" quantityurl="{{url('/produkt/updatecart')}}">
    </products>
    <br><br>
    <div class="back-light-blue ">
        <div class="uk-padding">
            <ul class="uk-subnav uk-subnav-pill blue-card-switch" uk-switcher>
                <li><a href="#">Beschreibung</a></li>
                <li><a href="#">Daten</a></li>
                <li><a href="#">Zubehör</a></li>
                <li><a href="#">Bewertungen</a></li>
            </ul>
            <ul class="uk-switcher uk-margin">
                <li>
                    <div uk-grid>
                        <div class="uk-width-1-2@m uk-width-1-1@s">
                            {{-- <h4 class="txt-blue roboto-bold">
                                Ut fugit earumquos repre exeris eum que milique dolorerum faceaquate rescienis sima
                                alitaqu iscidendae.
                            </h4> --}}
                            <p class="font0_8">
                                {{$product->product_description}}
                            </p>
                            {{-- <ul class="font0_8">
                                <li>
                                    20-45° Soft-Kanüle ermöglicht es dem Anwender, seinen optimalen Einführwinkel selbst
                                    zu wählen
                                </li>
                                <li>
                                    leicht manuell einzuführen und einfach zu diskonnektieren
                                </li>
                                <li>
                                    diskret im Tragen durch flaches Profil
                                </li>
                                <li>
                                    abkoppelbarer Infusionsschlauch direkt an der Kanüle
                                </li>
                                <li>
                                    verschiedene Kanülen- und Schlauchlängen
                                </li>
                                <li>
                                    bevorzugt für Kinder, aktive Personen und schlanke Erwachsene
                                </li>
                            </ul> --}}
                        </div>
                        <div class="uk-width-1-2@m uk-width-1-1@s">
                            <div>
                                <div class="uk-text-right">
                                    {{-- <div class="uk-inline double-deck uk-text-center">
                                        <div class="deck1">
                                            20°–45° Soft
                                        </div>
                                        <div class="deck2">
                                            t:lock
                                        </div>
                                    </div> --}}
                                    <img src="{{storage($product->image)}}" width="100" alt="product">
                                </div>
                                @foreach($product_images as $product_img)
                                @if($product_img->product_id == $product->id)
                                <div class="uk-text-center">
                                    <img src="{{storage($product_img->filename)}}" width="300" alt="product">
                                </div>
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="uk-overflow-auto">
                        <table class="uk-table uk-table-divider shop-table">
                            <thead>
                                <tr>
                                    <th>
                                        Bezeichnung
                                    </th>
                                    <th>
                                        Artikelnr
                                    </th>
                                    <th>
                                        Kanülenlänge
                                    </th>
                                    <th>
                                        Schlauchlänge
                                    </th>
                                    <th>
                                        Füllvolumen Kanüle
                                    </th>
                                    <th>
                                        Lieferumfang
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($subproducts as $subproduct)
                                <tr>
                                    <td>
                                        {{$subproduct->article_name}}
                                    </td>
                                    <td>
                                        {{$subproduct->item_number}}
                                    </td>
                                    <td>
                                        {{$subproduct->cannula_length}} mm
                                    </td>
                                    <td>
                                        {{$subproduct->house_length}} cm
                                    </td>
                                    <td>
                                        {{$subproduct->filling_volume_cannula}} IE
                                    </td>
                                    <td>
                                        {{$subproduct->scope_of_delivery}} St.
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </li>
                <li>
                    <div class="uk-child-width-1-3@l uk-child-width-1-2@m uk-child-width-1-1@s zubehor-padd" uk-grid>
                        @foreach($accessories as $accessory)
                        @if ($accessory->category_id == $product->category_id)
                        <div>
                            <div class="shop-card shop-card-transparent">
                                <div class="divwidthcontent">
                                    @foreach($product_images as $img)
                                    @if($img->product_id == $accessory->id)
                                    <img src="{{storage($img->filename)}}" alt="product" class="uk-position-center" />
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                            <div class="uk-text-center uk-padding-small">
                                <span class=" txt-blue roboto-bold">
                                    {{$accessory->article_name}}
                                </span>
                                <br>
                                <div class="star-width uk-inline">
                                    <div class="uk-child-width-1-5 " uk-grid>
                                        @for($i=0;$i < 5; $i++) @if($i<$accessory->average_rating)
                                            <a href="" class="small-left-padding staratag">
                                                <img src="{{url('/assets/png/frontend/starfilled.png')}}" alt="product"
                                                    width="20">
                                            </a>
                                            @else
                                            <a href="" class="small-left-padding staratag">
                                                <img src="{{url('/assets/png/frontend/starempty.png')}}" alt="product"
                                                    width="20">
                                            </a>
                                            @endif
                                            @endfor
                                    </div>
                                </div>
                            </div>
                            <a class="custom-button uk-width-1-1" href="{{url('/produkt/'.$accessory->article_name)}}">
                                ZUM ARTIKEL5
                            </a>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </li>

                <li>
                    <div class="uk-child-width-1-2@m uk-child-width-1-1@m uk-grid-match" uk-grid>
                        <div>
                            <div>
                                <p class="font0_8">
                                    Alle Kundenbewertungen werden freiwillig abgegeben und sind sichtbar, solange der
                                    Artikel erhältlich ist. Spam-Bewertungen werden von uns moderiert.
                                </p>
                                <div class="uk-text-center">
                                    <span class="rating-text" @load="">
                                        {{$product->average_rating}}.0
                                    </span>
                                    <br>
                                    <div class="uk-inline  mob-star-width star-width">
                                        <div class="uk-child-width-1-5 " uk-grid>
                                            @for($i=0;$i < 5; $i++) @if($i<$product->average_rating)
                                                <a class="small-left-padding staratag">
                                                    <img src="{{url('/assets/png/frontend/starfilled.png')}}" alt="product"
                                                        width="20">
                                                </a>
                                                @else
                                                <a class="small-left-padding staratag">
                                                    <img src="{{url('/assets/png/frontend/starempty.png')}}" alt="product"
                                                        width="20">
                                                </a>
                                                @endif
                                                @endfor
                                        </div>
                                    </div>
                                    <br><br>
                                    <span class="txt-blue">
                                        {{count($reviews)}} Bewertungen
                                    </span>
                                    <br><br>
                                    <a class="custom-button" href="{{url('/produkt/review/'.$product->article_name)}}">
                                        JETZT BEWERTEN
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="bewertugen-scroll">
                                <div class="uk-text-center">
                                    <h4 class="txt-blue roboto-bold">
                                        Die neuesten Bewertungen
                                    </h4>
                                </div>
                                @foreach($reviews as $review)
                                <div uk-grid class="uk-grid-match" style="margin-left: 0px!important">
                                    <div class="uk-width-auto@m uk-width-1-1@s grid-center">
                                        <div>
                                            <img src="{{url('/assets/images/frontend/productdouble.png')}}" width="80"
                                                alt="product">
                                        </div>
                                    </div>

                                    <div class="uk-width-expand@m uk-width-1-1@s small-left-padding ">
                                        <div>
                                            @if($review->radio1 == 'on')
                                            <span class="font0_8">
                                                <b>Jon Doy</b>
                                            </span>
                                            <br>
                                            @endif
                                            <span class="font0_8">
                                                {{$review->comments}}
                                            </span>

                                            <div>
                                                <div class="uk-inline uk-width-1-1" style="padding-left: 35px">
                                                    <div class="uk-child-width-1-5 " uk-grid>
                                                        @for($i=0;$i < 5; $i++) @if($i<$review->ratings)
                                                            <a class="small-left-padding staratag">
                                                                <img src="{{url('/assets/png/frontend/starfilled.png')}}"
                                                                    alt="starfilled" width="20">
                                                            </a>
                                                            @else
                                                            <a class="small-left-padding staratag">
                                                                <img src="{{url('/assets/png/frontend/starempty.png')}}"
                                                                    alt="starempty" width="20">
                                                            </a>
                                                            @endif
                                                            @endfor
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
    </div>

    <br><br>
    <div class="uk-text-center">
        <h3 class="txt-blue roboto-slab-regular">
            Beliebte Produkte
        </h3>
    </div>
    <div class="shop-padding uk-position-relative">

        <div class="uk-visible-toggle uk-light" tabindex="-1" uk-slider>

            <ul class="uk-slider-items uk-child-width-1-3@m " uk-grid>
                @foreach($pop_products as $pop_product)
                <li>
                    <a href="{{url('/produkt/'.$pop_product->article_name)}}">
                        <div class="shop-card">
                            <div>
                                @foreach($product_images as $img)
                                @if($img->product_id == $pop_product->id)
                                <img src="{{storage($img->filename)}}" alt="product" class="uk-position-center" />
                                @endif
                                @endforeach

                            </div>
                        </div>
                        <div class="uk-text-center">
                            <span class="roboto-bold txt-grey">
                                {{$pop_product->article_name}}
                            </span>
                        </div>
                    </a>
                </li>
                @endforeach
            </ul>

            <a class="uk-position-center-left" href="#" uk-slidenav-previous uk-slider-item="previous"
                style="color: grey;visibility:visible!important"></a>
            <a class="uk-position-center-right" href="#" uk-slidenav-next uk-slider-item="next"
                style="color: grey;visibility:visible!important;"></a>

        </div>
    </div>
</div>
<div class="back-grey">
    <div class="shop-padding">
        <div class="uk-text-center">
            <h3 class="txt-grey roboto-slab-regular">
                Anwendungsvideos
            </h3>
        </div>
        <br>
        <div class="uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-match" uk-grid>
            <div>
                <div>
                    <img src="{{url('/assets/images/frontend/homepagetslim.png')}}" alt="tslim">
                </div>
            </div>
            <div>
                <div class="grid-center ">
                    <h4 class="txt-blue roboto-slab-regular">
                        Name Anwendungsvideo 1
                    </h4>
                    <span>
                        Kurzbeschreibung <br>
                        4:12 Min.
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
{{-- <div class="rating">
    <div class="uk-text-center">
        <div class="uk-inline uk-width-1-3   back-light-blue">
            <div class="uk-padding-small">
                <h3 class="txt-blue roboto-slab-regular">
                    Anwendungsvideos
                </h3>
                <div uk-grid class="uk-grid-match">
                    <div class="uk-width-auto">
                        <div>
                            <img src="{{url('/assets/images/frontend/productdouble.png')}}" width="80" alt="product">

</div>
</div>
<div class="uk-width-expand small-left-padding grid-center">
    <div class="uk-text-left">
        <span class="txt-blue roboto-bold">
            Anwendungsvideos
        </span>
        <br>
        <span class="txt-blue">
            13 mm – 60 cm
        </span>
    </div>
</div>
</div>
<br>
<div>
    <div class="uk-inline uk-width-1-3" style="padding-left: 30px">
        <div class="uk-child-width-1-5 " uk-grid>
            @for($i=1;$i <= 5; $i++) <a class="small-left-padding">
                <img class="stars{{$i}}" @click="getStarRatings({{$i}})"
                    src="{{url('/assets/png/frontend/starempty.png')}}">
                </a>
                @endfor
        </div>
    </div>
</div>
<div>
    <form action="{{url('/review')}}" method="post">
        <span class="txt-blue roboto-bold">
            Mit deiner Meinung hilfst du uns und anderen.
        </span>
        <br>
        <input type="hidden" name="ratings" v-model="ratings">
        <input type="hidden" value="{{session('user_id')}}" name="user_id">
        <input type="hidden" value="{{$product->id}}" name="product_id">
        <textarea class="rating-textarea" name="comments" rows="4"></textarea>
        <br><br>
        <div class="uk-inline uk-form-controls">
            <label><input class="uk-checkbox" type="checkbox" name="radio1"> <span class="txt-blue ">Zeige
                    meinen Vornamen an</span></label>
        </div>
        <br><br>
        <button class="custom-button atag">
            BEWERTUNG ABSENDEN
        </button>
    </form>
</div>
</div>
</div>

</div>
</div> --}}
@include('frontend.components.footershop')

@endsection
@push('css')
@css('frontend/produkt')
@endpush