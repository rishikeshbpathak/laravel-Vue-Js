@extends('frontend.shell')
@section('body')
@include('frontend.components.headershop')

<div class="back-grey">
    <div class="cust-padding uk-padding-remove-bottom mob-block" style="display: flex">
        <div class="uk-inline grid-center">
            <h2 class="txt-blue roboto-slab-regular">
                Einfach bestellt
            </h2>
            <h4 class="txt-blue h_margin-top">
                Ut fugit earumquos scienis sima conecatusam,
                alitaqu iscidendae.
            </h4>
        </div>
        <div class="uk-inline">
            <img src="{{url('/assets/images/frontend/david.png')}}" width="400" alt="Einfach bestellt banner">
        </div>
    </div>
</div>
<div class="cust-padding">
    <h2 class="txt-blue roboto-slab-regular">
        t:slim X2 Onlineshop
    </h2>
    <h4 class="txt-blue h_margin-top">
        Ut fugit earumquos repre exeris eum que milique dolorerum faceaquate rescienis alitaqu iscidendae.
    </h4>
    <br><br>
    <div class="uk-text-center">
        <div class="uk-inline">
            <ul class="uk-subnav uk-subnav-pill shop-switcher" uk-switcher="connect: .card-switch" id="categories">
                <li><a href="" data-toggle="tab" id="all" clicked="true">Alle</a></li>
                @foreach($categories as $category)
                <li><a data-toggle="tab" id="{{$category->id}}">{{$category->name}}</a></li>
                @endforeach
            </ul>
        </div>
        <br>

        <ul class="uk-switcher uk-margin card-switch" id="productContainer">
            <li>
                <div class="uk-child-width-1-3@l uk-child-width-1-2@m uk-child-width-1-1@s" uk-grid>
                    @foreach($products as $product)
                    <div>
                        <a class="atag" href="{{url('/produkt/'.$product->article_name)}}">
                            <div class="shop-card">
                                <div class="uk-inline">
                                    @foreach($product_images as $img)
                                    @if($img->product_id == $product->id)
                                    <img src="{{url('/storage/'.$img->filename)}}" alt="product" class="uk-position-center" uk-tooltip="title: {{$product->article_name}} {{$product->category->name}}; pos: bottom;">
                                    @endif
                                    @endforeach
                                    <div class="uk-overlay uk-position-top-right no-padding">
                                        @foreach($tags as $tag)
                                        @if($product->tag_id == $tag->id)
                                        @if($tag->name == 'NEU')
                                        <div class="shop-card-text-right green">
                                            <span>{{$tag->name}}</span>
                                        </div>
                                        @elseif($tag->name == 'BESTSELLER')
                                        <div class="shop-card-text-right yellow">
                                            <span>{{$tag->name}}</span>
                                        </div>
                                        @elseif($tag->name == 'SALE')
                                        <div class="shop-card-text-right red">
                                            <span>{{$tag->name}}</span>
                                        </div>
                                        @endif
                                        @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="uk-text-center uk-padding-small">
                                <span class="font1_2 txt-blue roboto-bold" uk-tooltip="title: {{$product->article_name}} {{$product->category->name}};">
                                    @if(strlen($product->article_name. " ". $product->category->name) > 20)
                                    {{substr($product->article_name. " ". $product->category->name, 0, 20)}}...
                                    @elseif(strlen($product->article_name. " ". $product->category->name) < 20) {{$product->article_name}} {{$product->category->name}} @endif </span> <br>
                                        <div class="star-padding">
                                            <div class="uk-child-width-1-5 " uk-grid>
                                                @for($i=0;$i < 5; $i++) @if($i<$product->average_rating)
                                                    <a class="small-left-padding staratag">
                                                        <img src="{{url('/assets/png/frontend/starfilled.png')}}" alt="starfilled" width="20">
                                                    </a>
                                                    @else
                                                    <a class="small-left-padding staratag">
                                                        <img src="{{url('/assets/png/frontend/starempty.png')}}" alt="starempty" width="20">
                                                    </a>
                                                    @endif
                                                    @endfor
                                            </div>
                                        </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </li>
            @foreach($categories as $category)
            <li>
                <div class="uk-child-width-1-3@m uk-child-width-1-1@s" uk-grid>
                    @foreach($products as $product)
                    @if($category->id == $product->category->id)
                    <div>
                        <a class="atag" href="{{url('/produkt/'.$product->article_name)}}">
                            <div class="shop-card">
                                <div class="uk-inline">
                                    @foreach($product_images as $img)
                                    @if($img->product_id == $product->id)
                                    <img src="{{url('/storage/'.$img->filename)}}" alt="product" class="uk-position-center" uk-tooltip="title: {{$product->article_name}} {{$product->category->name}}; pos: bottom;">
                                    @endif
                                    @endforeach
                                    <div class="uk-overlay uk-position-top-right no-padding">
                                        @foreach($tags as $tag)
                                        @if($product->tag_id == $tag->id)
                                        @if($tag->name == 'NEU')
                                        <div class="shop-card-text-right green">
                                            <span>{{$tag->name}}</span>
                                        </div>
                                        @elseif($tag->name == 'BESTSELLER')
                                        <div class="shop-card-text-right yellow">
                                            <span>{{$tag->name}}</span>
                                        </div>
                                        @elseif($tag->name == 'SALE')
                                        <div class="shop-card-text-right red">
                                            <span>{{$tag->name}}</span>
                                        </div>
                                        @endif
                                        @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="uk-text-center uk-padding-small">
                                <span class="font1_2 txt-blue roboto-bold" uk-tooltip="title: {{$product->article_name}} {{$product->category->name}};">
                                    @if(strlen($product->article_name. " ". $product->category->name) > 20)
                                    {{substr($product->article_name. " ". $product->category->name, 0, 20)}}...
                                    @elseif(strlen($product->article_name. " ". $product->category->name) < 20) {{$product->article_name}} {{$product->category->name}} @endif </span> <br>
                                        <div class="star-padding">
                                            <div class="uk-child-width-1-5 " uk-grid>
                                                @for($i=0;$i < 5; $i++) @if($i<$product->average_rating)
                                                    <a class="small-left-padding staratag">
                                                        <img src="{{url('/assets/png/frontend/starfilled.png')}}" alt="starfilled" width="20">
                                                    </a>
                                                    @else
                                                    <a class="small-left-padding staratag">
                                                        <img src="{{url('/assets/png/frontend/starempty.png')}}" alt="starempty" width="20">
                                                    </a>
                                                    @endif
                                                    @endfor
                                            </div>
                                        </div>
                            </div>
                        </a>
                    </div>
                    @endif
                    @endforeach
                </div>

            </li>
            @endforeach
        </ul>
    </div>
</div>

<div class="back-grey">
    <div class="cust-padding uk-text-center">
        <h3 class="roboto-slab-regular txt-grey">Mit einem Rezept bestellen – so einfach gehts</h3>
        <br>
        <div class="uk-child-width-1-3@m uk-child-width-1-1@s" uk-grid>
            <div>
                <div>
                    <img src="{{url('/assets/png/frontend/cartblue.png')}}" alt="cartblue" width="50">
                    <h3 class="txt-blue">
                        Produkt online bestellen

                    </h3>
                    <p class="font0_8">
                        Moleculparci bere, in cus arcidia volores enducienis quibus, sant velibus di quam arum isquo
                        beat.
                    </p>
                    <br><br>

                </div>
            </div>
            <div>
                <div>
                    <img src="{{url('/assets/png/frontend/mailsecond.png')}}" alt="mailsecond" width="50">

                    <h3 class="txt-blue">
                        Rezept in Freiumschlag
                    </h3>
                    <p class="font0_8">
                        Moleculparci bere, in cus arcidia volores enducienis quibus, sant velibus di quam arum isquo
                        beat.
                    </p>

                </div>
            </div>
            <div>
                <div>
                    <img src="{{url('/assets/png/frontend/package.png')}}" alt="package" width="50">

                    <h3 class="txt-blue">
                        Lieferung kommt bald
                    </h3>
                    <p class="font0_8">
                        Wir rechnen mit Ihrer gesetzlichen Krankenkasse ab.
                    </p>
                </div>
            </div>
        </div>
        <div class="uk-text-center">
            <a class="custom-button ">
                JETZT REGISTRIEREN
            </a>
        </div>
    </div>
</div>
<div class="cust-padding uk-text-center">
    <h3 class="roboto-slab-regular txt-grey">Ihre Vorteile bei VitalAire</h3>
    <br>
    <div class="uk-child-width-1-3@m uk-child-width-1-1@s" uk-grid>
        <div>
            <div>
                <img src="{{url('/assets/png/frontend/checkmark.png')}}" alt="checkmark" width="50">

                <h3 class="txt-blue">
                    Höchste Qualität
                    und Sicherheit:

                </h3>
                <p class="font0_8">
                    Ro etur, sus ad quo beate pa dolorem qui doloreptus, tectur aut molupta temporem in nem qui reri
                    dipsae nonsed quis es dolest,
                </p>
                <br><br>

            </div>
        </div>
        <div>
            <div>
                <img src="{{url('/assets/png/frontend/checkmark.png')}}" alt="checkmark" width="50">
                <h3 class="txt-blue">
                    Keine gesetzliche Zuzahlung:

                </h3>
                <p class="font0_8">
                    Ro etur, sus ad quo beate pa dolorem qui doloreptus, tectur aut molupta temporem in nem qui reri
                    dipsae nonsed quis es dolest,
                </p>

            </div>
        </div>
        <div>
            <div>
                <img src="{{url('/assets/png/frontend/checkmark.png')}}" alt="checkmark" width="50">
                <h3 class="txt-blue">
                    Partner aller Krankenkassen:

                </h3>
                <p class="font0_8">
                    Ro etur, sus ad quo beate pa dolorem qui doloreptus, tectur aut molupta temporem in nem qui reri
                    dipsae nonsed quis es dolest,
                </p>
            </div>
        </div>
    </div>

</div>

@include('frontend.components.footershop')
@endsection
@push('css')
@css('frontend/tslimonlineshop')
@endpush
