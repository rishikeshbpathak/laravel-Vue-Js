@extends('frontend.shell')
@section('body')
@include('frontend.components.header')
<div class="uk-position-relative">
    <div class="banner-content-absolute" uk-grid>
        <div class="uk-width-1-1 grid-center">
            <div>
                <span class="new-banner-content roboto wh">Downloads</span><br><br>
                <span class="roboto wh sub-banner-content">Service & Support</span>
            </div>
        </div>
    </div>
    <img class="banner-width"
        src="{{url('/assets/banner/vitalaire-diabetes-header-06-tslim-x2-insulinpumpe-tipps-tricks.jpg')}}"
        alt="Downloads banner">
    {{-- src="{{url('/assets/banner/vitalaire-diabetes-header-08-tslim-x2-insulinpumpe-downloads.jpg')}}" --}}
    {{-- <div class="cust-padding uk-padding-remove-bottom"> --}}

    {{-- </div> --}}
    <br class="mob">
</div>

<div class="cust-padding custom-padding-top">
    <div uk-grid class="nav-tab">
        <div class="uk-width-auto">
            <a href="{{url('')}}">
                <img src=" {{url('/assets/icons/home.png')}}" class="home-icons" alt="home">
            </a>
        </div>
        <div class="uk-width-auto txt-blue">
            <span uk-icon="icon:chevron-double-right;" class="vertical-icon"></span>
        </div>
        <div class="uk-width-auto txt-blue">
            <a class="atag font16">
                Service & Support
            </a>
        </div>
        <div class="uk-width-auto txt-blue">
            <span uk-icon="icon:chevron-double-right;" class="vertical-icon"></span>
        </div>
        <div class="uk-width-expand@m uk-width-1-1@s txt-blue-darker">
            <a class="atag font16">
                Downloads
            </a>
        </div>
    </div>

    <h1 class="txt-blue fonth1 roboto-slab-regular">
        Downloads von Dokumenten zur t:slim X2 Insulinpumpe
    </h1>

    <h2 class="txt-blue fonth2 font24" style="margin-top: -5px;">
        Anleitungen, Hilfsmaterialien, Produktinfos und Dokumente für Fachkreise
    </h2>


    <div class="" uk-grid>
        <div class="uk-width-2-3@m uk-width-1-1@s">
            <div class="uk-text-justify tslim-para">
                <br>
                <p class="font18">
                    Wichtige Formulare und Dokumente - für Privatpersonen und Ärzte - als PDF zur t:slim X2 Insulinpumpe
                    findet man hier zum Download. Wir von VitalAire stellen immer wieder neue Dokumente auf dieser Seite
                    zur Reise, Anwendung, Bestellung etc. zur Verfügung.
                </p>
            </div>
        </div>
        <div class="uk-width-1-3@m uk-width-1-1@s grid-center uk-text-center">
            <div>
                <img src="{{url('/assets/png/frontend/downloadwithbg.png')}}" alt="download">
            </div>
        </div>
    </div>
    <div class="uk-text-center">
        <div class="uk-inline">
            <ul class="uk-subnav uk-subnav-pill shop-switcher" uk-switcher="connect: .card-switch; active: {{ $activeIndex }}" id="categories">
                <li><a href="" class="uk-text-center" id="all" clicked="true">
                        <div class="file-m-top">
                            <span class="faq-font letter-spacing-1">
                                Alle
                            </span>
                        </div>
                    </a>
                </li>
                @foreach ($filecategories as $filecategory)
                <li>
                    <a class="uk-text-center" id="{{$filecategory->id}}">
                        <div class="file-m-top">
                            <span class="faq-font letter-spacing-1">
                                {{ $filecategory->name }}
                            </span>
                        </div>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
        <br>

        <ul class="uk-switcher uk-margin card-switch" id="productContainer">
            <li class="uk-active uk-child-width-1-3@m uk-grid-match" uk-grid>
                @foreach ($files as $file)
                <div>
                    <div class="card-blue uk-position-relative">
                        <div style="width: 100%">
                        @foreach ($tags as $tag)
                            @foreach ($file->tag as $singletag)
                            @if ($singletag)
                                @if ($singletag == $tag->id)
                                    <span class="tags-global" style="background-color: {{ $tag->bg_color }}">{{ $tag->name }}</span>
                                @endif
                                @else
                                <span class="tags-global" style="visibility: hidden" >PDF</span>
                                @endif
                            @endforeach
                        @endforeach
                        </div>
                        <div class="card-text-hover uk-position-center">
                            <span class="txt-blue roboto-slab-regular font18">
                                {{$file->name}}
                            </span>
                            <br>
                            <span class="txt-blue roboto-slab-regular font18">
                                {{$file->description}}
                            </span>
                            <br><br>
                            {{-- download-btn --}}
                            <a class="custom-button download-button font16" target="_blank"
                                href="{{$file->type == 'link' ? $file->link : storage($file->file_name)}}">DOWNLOAD
                                &nbsp;<span class="download-uk-icon" uk-icon="icon:download" style="margin-top: -5px"
                                    ratio="0.8"></span></a>
                        </div>
                        @if($file->imagealt)
                        <img src="{{storage($file->uploaded_image)}}" class="uk-padding" alt="{{ $file->imagealt }}">
                        @else
                        <img src="{{storage($file->uploaded_image)}}" class="uk-padding" alt="Download PDF">
                        @endif
                        <span class="txt-blue letter-spacing-1-5 roboto-slab-regular font18 card-blue-text">
                            {{$file->name}}
                        </span>
                    </div>
                </div>
                @endforeach
            </li>
            @foreach ($filecategories as $filecategory)
            <li class="uk-child-width-1-3@m uk-grid-match" uk-grid>
                @foreach ($files as $file)
                @if($filecategory->id == $file->filecategory_id)
                <div>
                    <div class="card-blue uk-position-relative">
                        <div style="width: 100%">
                        @foreach ($tags as $tag)
                            @foreach ($file->tag as $singletag)
                            @if ($singletag)
                                @if ($singletag == $tag->id)
                                    <span class="tags-global" style="background-color: {{ $tag->bg_color }}">{{ $tag->name }}</span>
                                @endif
                                @else
                                <span class="tags-global" style="visibility: hidden" >PDF</span>
                                @endif
                            @endforeach
                        @endforeach
                        </div>
                        <div class="card-text-hover uk-position-center">
                            <span class="txt-blue roboto-slab-regular font18">
                                {{$file->name}}
                            </span>
                            <br>
                            <span class="txt-blue roboto-slab-regular font18">
                                {{$file->description}}
                            </span>
                            <br><br>
                            <a class="custom-button download-button font16" target="_blank"
                                href="{{$file->type == 'link' ? $file->link : storage($file->file_name)}}">DOWNLOAD
                                &nbsp;<span class="download-uk-icon" uk-icon="icon:download" style="margin-top: -5px"
                                    ratio="0.8"></span></a>
                        </div>
                        @if($file->imagealt)
                        <img src="{{storage($file->uploaded_image)}}" class="uk-padding" alt="{{ $file->imagealt }}">
                        @else
                        <img src="{{storage($file->uploaded_image)}}" class="uk-padding" alt="Download PDF">
                        @endif
                        <span class="txt-blue letter-spacing-1-5 roboto-slab-regular font18 card-blue-text">
                            {{$file->name}}
                        </span>
                    </div>
                </div>
                @endif
                @endforeach
            </li>
            @endforeach
        </ul>
    </div>
</div>

@include('frontend.components.footer')
@endsection
@push('css')
@css('frontend/einfach')
@endpush