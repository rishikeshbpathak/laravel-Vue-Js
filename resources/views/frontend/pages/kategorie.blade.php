@extends('frontend.shell')
@section('body')
@include('frontend.components.headershop')

<div class="cust-padding">

    <h2 class="txt-blue roboto-slab-regular">
        {{$category->name}}
    </h2>

    <h4 class="txt-blue">
        Ut fugit earumquos repre exeris eum que milique dolorerum faceaquate rescienis alitaqu iscidendae.
    </h4>

    <p>
        De peleseq uaepelitis reculpa rumendit volorercimet re licid erfero tem es etusam, quo beaDa senimusdam, santur
        sandelitam et omniatem repudit vel iur as elescium cum eri sinimus antur, atist assimus eos elent officip
        isciandunt, sin prent quundam que imolupt atistin nihit, quibus ero corercim fugit aces mi, ut facepudam alitem
        nis et lani ipit aut fugitas sectur sam ducitem hitatisquod mo omni odissit, quunt ut abo. Xima cus eos
        voluptiur alicides et dis aliquam, sint.

    </p>
    <br>

    @if(count($products)>0)

    <div class="uk-child-width-1-3@l uk-child-width-1-2@m uk-child-width-1-1@s" uk-grid>
        @foreach($products as $product)
        <div>
            <a class="atag" href="{{url('/produkt/'.$product->article_name)}}">
                <div class="shop-card">
                    <div class="uk-inline">
                        @foreach($product_images as $img)
                        @if($img->product_id == $product->id)
                        <img src="{{url('/storage/'.$img->filename)}}" alt="product" class="category-image uk-position-center"
                            uk-tooltip="title: {{$product->article_name}} {{$product->category->name}}; pos: bottom;">
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
                    <span class="font0_8 txt-blue roboto-bold"
                        uk-tooltip="title: {{$product->article_name}} {{$product->category->name}};">
                        @if(strlen($product->article_name. " ". $product->category->name) > 27)
                        {{substr($product->article_name. " ". $product->category->name, 0, 27)}}...
                        @elseif(strlen($product->article_name. " ". $product->category->name) < 27)
                            {{$product->article_name}} {{$product->category->name}} @endif </span> <br>
                            <div class="star-padding">
                                <div class="uk-child-width-1-5 " uk-grid>
                                    @for($i=0;$i < 5; $i++) @if($i<$product->average_rating)
                                        <a href="" class="small-left-padding staratag">
                                            <img src="{{url('/assets/png/frontend/starfilled.png')}}" alt="starfilled" width="20">
                                        </a>
                                        @else
                                        <a href="" class="small-left-padding staratag">
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
    @else
    <div class="uk-child-width-1-3@m uk-child-width-1-1@s" uk-grid>
        Product Not Available
    </div>
    @endif

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
<br>
<br>
@include('frontend.components.footershop')
@endsection
@push('css')
@css('frontend/produkt')
@endpush