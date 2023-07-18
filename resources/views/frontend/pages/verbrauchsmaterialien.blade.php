@extends('frontend.shell')
@section('body')
@include('frontend.components.header')
<div class="uk-position-relative">
    <div class="banner-content-absolute" uk-grid>
        <div class="uk-width-1-1 grid-center">
            <div>
                <span class="new-banner-content roboto wh">Verbrauchsmaterialien & Zubehör</span><br><br>
                <span class="roboto wh sub-banner-content">Passend für jede Situation</span>
            </div>
        </div>
    </div>
    <img class="banner-width"
        src="{{url('/assets/banner/vitalaire-diabetes-header-14-deine-tslim-x2-insulinpumpe-verbrauchsmaterialien.jpg')}}"
        alt="Verbrauchsmaterialien & Zubehör banner">
    <br class="mob">
</div>
<div class="cust-padding custom-padding-top">
    <div uk-grid class="nav-tab">
        <div class="uk-width-auto">
            <a href="{{url('')}}">
                <img src="{{url('/assets/icons/home.png')}}" class="home-icons" alt="home">
            </a>
        </div>
        <div class="uk-width-auto txt-blue">
            <span uk-icon="icon:chevron-double-right;" class="vertical-icon"></span>
        </div>
        <div class="uk-width-auto txt-blue">
            <a class=" atag font16">
                t:slim X2
            </a>
        </div>
        <div class="uk-width-auto txt-blue">
            <span uk-icon="icon:chevron-double-right;" class="vertical-icon"></span>
        </div>
        <div class="uk-width-expand@m uk-width-1-1@s txt-blue-darker">
            <a class="atag font16">
                Verbrauchsmaterialien & Zubehör
            </a>
        </div>

    </div>

    <h1 class="txt-blue fonth1 roboto-slab-regular">
        Verbrauchsmaterialien und Zubehör für die t:slim X2™
    </h1>

    <h2 class="txt-blue fonth2 font24" style="margin-top: -5px;">
        Individuelle Infusionssets und Produkte für eine optimale Insulintherapie
    </h2>
    <div class="" uk-grid>
        <div class="uk-width-2-3@m uk-width-1-1@s">
            <div class="uk-text-justify tslim-para font18">
                <br>
                <h3 class="font20 txt-blue"><b>Verbrauchsmaterialien</b></h3>
                <p class="font18">
                    Spezielles Verbrauchsmaterial wie das t:slim X2™ Reservoir und Infusionssets mit t:lock™ Anschluss
                    sichern eine optimale Insulinpumpentherapie mit der t:slim X2.
                </p>
                <p class="font18">
                    Ausgerichtet auf die individuellen Ansprüche, können Infusionssets mit unterschiedlichem
                    Kanülenmaterial, verschiedenen Katheterlängen, Einführwinkeln und -hilfen verwendet werden.
                </p>
                <p class="font18">
                    Der patentierte t:lock Anschluss optimiert den Befüllvorgang und sorgt für eine sichere
                    Insulinabgabe.
                </p>
            </div>
        </div>
        <div class="uk-width-1-3@m uk-width-1-1@s grid-center">
            <div>
                <img src="{{url('/assets/png/frontend/verbrauchsmaterialienwithbg.png')}}" alt="verbrauchsmaterialien">
            </div>
        </div>
    </div>
    {{-- <div class="uk-text-center">
        <a class="custom-button font16" href="https://www.vitalaire.de/de/shop" target="_blank" rel="noopener">
            ZUM ONLINESHOP
        </a>
    </div> --}}
</div>
<div class="back-grey">
    <div class="cust-padding">
        <div class="uk-grid-match" uk-grid style="margin-left: 0px!important;">
            <div class="uk-width-1-3@m uk-width-1-1@s">
                <div>
                    <img src="{{url('/assets/images/frontend/lock.png')}}" alt="lock">
                </div>
            </div>
            <div class="uk-width-2-3@m uk-width-1-1@s grid-center" style="padding-left:0px!important;">
                <div>
                    <h2 class="roboto-slab-regular txt-grey">
                        t:lock™ Anschluss
                    </h2>
                    <ul class="font18">
                        <li>
                            reduziert die Zeit zum Befüllen des Infusionssets um 30 Sekunden
                        </li>
                        <li>
                            senkt den Insulinbedarf zum Befüllen des Infusionssets um 4,4 Einheiten
                        </li>
                    </ul>
                    <br />
                    <span class="font18">
                        Infusionssets mit t:lock Anschluss sind nur mit dem t:slim Reservoir mit t:lock
                        Schlauchanschluss kompatibel.
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="cust-padding" id="products-thumbnav">
    <div class="uk-text-center">
        <h2 class="txt-blue roboto-slab-regular">
            Verbrauchsmaterialien
        </h2>
    </div>

    <div class="uk-position-relative">
        <div class="uk-position-relaitve">
            <ul class=" uk-switcher slide-switch-1">
                @foreach ($products as $product)
                <li class="uk-active">
                    <div class="uk-grid-match" uk-grid>
                        <div class="uk-width-1-3@m uk-width-1-1@s">
                            <div>
                                @foreach($product_images as $img)
                                @if($img->product_id == $product->id)
                                @if($img->imagealt)
                                <img src="{{url('/storage/'.$img->filename)}}" alt="{{ $img->imagealt }}">
                                @else
                                <img src="{{url('/storage/'.$img->filename)}}" alt="productslisting">
                                @endif
                                @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="uk-width-2-3@m uk-width-1-1@s grid-center">
                            <div>
                                <h2 class="roboto-slab-regular txt-grey">
                                    {{$product->article_name}}
                                </h2>
                                <span>
                                    {!!$product->product_description!!}
                                </span>
                                <br />
                                <div class="uk-text-left" style="margin-left: 30px">
                                    <a class="custom-button font16" href="{{ $product->link }}" target="_blank"
                                        rel="noopener">
                                        ZUM ONLINESHOP
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <br><br>
    <div class="uk-position-relaitve uk-text-center">

        <div class="uk-inline">
            <ul class="uk-thumbnav thumbnav-ver-margin"
                uk-switcher="connect:.slide-switch-1;animation: uk-animation-fade">
                @foreach ($products as $product)
                @foreach($product_images as $img)
                @if($img->product_id == $product->id)
                @if($id == $product->id)
                @if($img->imagealt)
                <li class="uk-active" style="margin-top: 10px"><a href="#"><img
                            src="{{url('/storage/'.$img->filename)}}" width="100" alt="{{ $img->imagealt }}"></a>
                </li>
                @else
                <li class="uk-active" style="margin-top: 10px"><a href="#"><img
                            src="{{url('/storage/'.$img->filename)}}" width="100" alt="product"></a>
                </li>
                @endif
                @else
                @if($img->imagealt)
                <li style="margin-top: 10px"><a href="#"><img src="{{url('/storage/'.$img->filename)}}" width="100"
                            alt="{{ $img->imagealt }}"></a>
                </li>
                @else
                <li style="margin-top: 10px"><a href="#"><img src="{{url('/storage/'.$img->filename)}}" width="100"
                            alt="product"></a>
                </li>
                @endif
                @endif
                @endif
                @endforeach
                @endforeach
            </ul>
        </div>
    </div>
</div>
<div class="back-grey">
    <div class="cust-padding">
        <div class="uk-text-center">
            <h3 class="roboto-slab-regular txt-grey font32">
                Übersicht vergleichbare Infusionssets
            </h3>
            <br>
            <div>
                <img style="border:5px solid rgb(128,176, 187);"
                    src="{{url('/assets/images/frontend/infusionssets-uebersicht-vitalaire-tslim-x2-insulinpumpe-1600px.jpg')}}"
                    alt="infusionssets-uebersicht-vitalaire-tslim-x2-insulinpumpe" width="80%">
            </div>
        </div>
        <br><br>
        <div class="uk-text-center">
            <p class="font18">
                Das richtige Infusionsset zu finden, ist ein wichtiger Aspekt bei einer erfolgreichen
                Insulinpumpentherapie. Die Übersicht dient zur Unterstützung, welches vergleichbare Infusionsset zum
                bisher genutzten Infusionsset bei VitalAire bestellt werden kann.
            </p>
        </div>
    </div>
</div>
<div class="cust-padding">
    <div>
        <h3 class="font20 txt-blue">
            <b>Zubehör für die t:slim X2 Insulinpumpe</b>
        </h3>
        <p class="font18">
            Außerdem stehen eine große Auswahl an Pumpenhüllen sowie weiteres t:slim X2™ Zubehör für den
            individuellen Bedarf und persönlichen Stil zur Verfügung.
        </p>
        <p class="font18">
            Alle Informationen zum Zubehör finden Sie in der Produktübersicht im Downloadbereich sowie in
            unserem Onlineshop.
        </p>
    </div>
</div>
<div class="cust-padding" id="zubehor-thumbnav">
    <div class="uk-text-center">
        <h2 class="txt-blue roboto-slab-regular">
            Zubehör
        </h2>
    </div>

    <div class="uk-position-relative">
        <div class="uk-position-relaitve">
            <ul class=" uk-switcher slide-switch-2">
                @foreach ($zubehors as $zubehor)
                <li class="uk-active">
                    <div class="uk-grid-match" uk-grid>
                        <div class="uk-width-1-3@m uk-width-1-1@s">
                            <div>
                                @foreach($product_images as $img)
                                @if($img->product_id == $zubehor->id)
                                @if($img->imagealt)
                                <img src="{{url('/storage/'.$img->filename)}}" alt="{{ $img->imagealt }}">
                                @else
                                <img src="{{url('/storage/'.$img->filename)}}" alt="product">
                                @endif
                                @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="uk-width-2-3@m uk-width-1-1@s grid-center">
                            <div>
                                <h2 class="roboto-slab-regular txt-grey">
                                    {{$zubehor->article_name}}
                                </h2>
                                <span>
                                    {!!$zubehor->product_description!!}
                                </span>
                                <br />
                                <div class="uk-text-left" style="margin-left: 30px">
                                    <a class="custom-button font16" href="{{ $zubehor->link }}" target="_blank"
                                        rel="noopener">
                                        ZUM ONLINESHOP
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <br><br>
    <div class="uk-position-relaitve uk-text-center">

        <div class="uk-inline">
            <ul class="uk-thumbnav thumbnav-ver-margin"
                uk-switcher="connect:.slide-switch-2;animation: uk-animation-fade">
                @foreach ($zubehors as $zubehor)
                @foreach($product_images as $img)
                @if($img->product_id == $zubehor->id)
                @if($id == $zubehor->id)
                @if($img->imagealt)
                <li class="uk-active" style="margin-top: 10px"><a href="#"><img
                            src="{{url('/storage/'.$img->filename)}}" width="100" alt="{{ $img->imagealt }}"></a>
                </li>
                @else
                <li class="uk-active" style="margin-top: 10px"><a href="#"><img
                            src="{{url('/storage/'.$img->filename)}}" width="100" alt="product"></a>
                </li>
                @endif
                @else
                @if($img->imagealt)
                <li style="margin-top: 10px"><a href="#"><img src="{{url('/storage/'.$img->filename)}}" width="100"
                            alt="{{ $img->imagealt }}"></a>
                </li>
                @else
                <li style="margin-top: 10px"><a href="#"><img src="{{url('/storage/'.$img->filename)}}" width="100"
                            alt="product"></a>
                </li>
                @endif
                @endif
                @endif
                @endforeach
                @endforeach
            </ul>
        </div>
    </div>
</div>

@if (!empty($broschures))
<div class="cust-padding">
    <div class="uk-text-center">
        <p class="txt-blue roboto-slab-regular font28">
            Downloads zur Produktübersicht
        </p>
        <br>
        <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match grid-stick" uk-grid>
            @foreach($broschures as $broschure)
            <div>
                <div class="card-blue uk-position-relative">
                    <div style="width: 100%">
                        @foreach ($tags as $tag)
                        @foreach ($broschure->tag as $singletag)
                        @if ($singletag)
                        @if ($singletag == $tag->id)
                        <span class="tags-global" style="background-color: {{ $tag->bg_color }}">{{ $tag->name }}</span>
                        @endif
                        @else
                        <span class="tags-global" style="visibility: hidden">PDF</span>
                        @endif
                        @endforeach
                        @endforeach
                    </div>
                    <div class=" card-text-hover uk-position-center">
                        <span class="txt-blue roboto-slab-regular font18">
                            {{$broschure->name}}
                        </span>
                        <br>
                        <span class="txt-blue roboto-slab-regular font18">
                            {{$broschure->description}}
                        </span>
                        <br><br>
                        <a class="custom-button download-button font16"
                            href="{{$broschure->type == 'link' ? $broschure->link : storage($broschure->file_name)}}"
                            target="_blank">DOWNLOAD</span></a>
                    </div>
                    @if($broschure->imagealt)
                    <img src="{{storage($broschure->uploaded_image)}}" alt="{{ $broschure->imagealt }}">
                    @else
                    <img src="{{storage($broschure->uploaded_image)}}" alt="PDF">
                    @endif

                </div>
            </div>
            @endforeach
        </div>
    </div>


</div>
@endif
@include('frontend.components.footer')
@endsection
@push('css')
@css('frontend/verbrauchsmaterialien')
@endpush