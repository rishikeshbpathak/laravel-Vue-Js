@extends('frontend.shell')
@section('body')
@include('frontend.components.header')
<img src="{{url('/assets/images/frontend/onlineshoppagemain.png')}}" class="vitalpagemain" alt="VitalAire" />
<div class="cust-padding">
    <div uk-grid class="uk-grid-match nav-tab">
        <div class="uk-width-auto">
            <a href="{{url('')}}">
                <img src="{{url('/assets/icons/home.png')}}" class="home-icons" alt="home">
            </a>
        </div>
        <div class="uk-width-auto grid-center txt-blue">
            <span uk-icon="icon:chevron-double-right;"></span>
        </div>
        <div class="uk-width-auto grid-center txt-blue-darker">
            <a class="atag">
                Onlineshop
            </a>
        </div>
        <div class="uk-width-expand">

        </div>

    </div>

    <h2 class="txt-blue roboto-slab-regular">
        Online Zubehör für die t:slim X2 Insulinpumpe kaufen
    </h2>
    <div>
        <h4 class="txt-blue">
            De peleseq uaepelitis reculpa rumendit volorercimet re licid erfero tem es etusam, quo bea
        </h4>
        <br>
        <div class="uk-text-justify tslim-para">
            <p style="font-size: 0.9em;line-height:25px">
                De peleseq uaepelitis reculpa rumendit volorercimet re licid erfero tem es etusam, quo beaDa senimusdam,
                santur sandelitam et omniatem
                repudit vel iur as elescium cum eri sinimus antur, atist assimus eos elent officip isciandunt, sin prent
                quundam que imolupt atistin nihit,
                quibus ero corercim fugit aces mi, ut facepudam alitem nis et lani ipit aut fugitas sectur sam ducitem
                hitatisquod mo omni odissit, quunt ut abo.
                Xima cus eos voluptiur alicides et dis aliquam, sint
            </p>
        </div>
    </div>
</div>
<div class="onlineshopslidercover">
    <div uk-slider="autoplay: true">
        <div class="uk-position-relative">
            <div class="uk-slider-container uk-light">
                <ul class="uk-slider-items uk-child-width-1-1@s uk-child-width-1-3@m image-slide">
                    @foreach($products as $product)
                    <li>
                        <div class="slider-relative">
                            <div class="uk-h3 slide-content center">
                                @if(session_has('user_id'))
                                <a class=" custom-button uk-position-center"
                                    href="{{url('/produkt/'.$product->article_name)}}">Zum
                                    Laden gehen
                                </a>
                                @else
                                <div class="uk-position-center">
                                    <a href="{{url('/login')}}" class="buttonslider">ANMELDEN</a>
                                    <br />
                                    <br />
                                    <a href="{{url('/registrierung')}}" class="buttonslider">REGISTRIEREN</a>
                                </div>
                                @endif
                            </div>
                        </div>
                        @foreach($product_images as $img)
                        @if($img->product_id == $product->id)
                        <img src="{{url('/storage/'.$img->filename)}}" alt="product" uk-cover style="width:100%;" />
                        @endif
                        @endforeach
                    </li>
                    @endforeach
                </ul>
            </div>
            {{-- <div class="uk-hidden@s">
                <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous
                    uk-slider-item="previous"></a>
                <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next
                    uk-slider-item="next"></a>
            </div> --}}
            <div>
                <a class="uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous
                    uk-slider-item="previous"></a>
                <a class="uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next
                    uk-slider-item="next"></a>
            </div>
        </div>
        <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
    </div>
</div>
<br>
<br>
<div class="back-grey">
    <div class="cust-padding uk-text-center">
        <h3 class="roboto-slab-regular txt-grey">So einfach können Sie online Verbrauchsmaterialien bestellen</h3>
        <br>
        <div class="uk-child-width-1-3@m uk-child-width-1-1@s" uk-grid>
            <div>
                <div>
                    <span class="uk-icon-button">
                        1
                    </span>
                    <h3 class="txt-blue">
                        Registrierung
                        <br>
                        <br>
                    </h3>
                    <p>
                        Moleculparci bere, in cus arcidia volores enducienis quibus, sant velibus di quam arum isquo
                        beat.
                    </p>
                    <br><br>
                </div>
            </div>
            <div>
                <div>
                    <span class="uk-icon-button">
                        2
                    </span>
                    <h3 class="txt-blue">
                        Bestellung
                        <br><br>
                    </h3>
                    <p>
                        Moleculparci bere, in cus arcidia volores enducienis quibus, sant velibus di quam arum isquo
                        beat.
                    </p>
                    <br><br>

                </div>
            </div>
            <div>
                <div>
                    <span class="uk-icon-button">
                        3
                    </span>
                    <h3 class="txt-blue">
                        Lieferung
                        <br><br>
                    </h3>

                    <p>
                        Moleculparci bere, in cus arcidia volores enducienis quibus, sant velibus di quam arum isquo
                        beat.
                    </p>
                    <br><br>
                </div>
            </div>
        </div>
        <div class="uk-text-center">
            <a class=" custom-button font0_8" href="{{url('/registrierung')}}">
                Zum Laden gehen
                {{-- JETZT REGISTRIEREN --}}
            </a>
        </div>
    </div>
</div>
<br>
<br>
<br>
<div class="center">
    <h4 class="roboto-slab-regular txt-blue">
        Du hast bereits ein Konto? Dann kannst Du dich hier anmelden:
    </h4>
    <br>
    <br>
    <a class=" custom-button" href="{{url('/registrierung')}}">
        Zum Laden gehen
        {{-- ANMELDEN --}}
    </a>
</div>
<br>
<br>
<br>
@include('frontend.components.footer')
@endsection
@push('css')
@css('frontend/onlineshop')
@endpush