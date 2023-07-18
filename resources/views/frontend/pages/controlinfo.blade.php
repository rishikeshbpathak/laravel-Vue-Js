@extends('frontend.shell')
@section('body')
@include('frontend.components.header')
<div class="uk-position-relative">
    <div class="banner-content-absolute" uk-grid>
        <div class="uk-width-1-1 grid-center">
            <div>
                <span class="new-banner-content roboto wh">Basal-IQ-Technologie</span><br><br>
                <span class="roboto wh sub-banner-content">Studienergebnisse</span>
            </div>
        </div>
    </div>
    <img class="banner-width"
        src="{{url('/assets/banner/vitalaire-diabetes-header-15-tslim-x2-fachkreise-studien-prolog-basal.jpg')}}"
        alt="Studienergebnisse banner">
    <br class="mob">
</div>

<div class="cust-padding custom-padding-top uk-padding-remove-bottom">
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
            <a class="atag font16">
                t:slim X2
            </a>
        </div>
        <div class="uk-width-auto txt-blue">
            <span uk-icon="icon:chevron-double-right;" class="vertical-icon"></span>
        </div>
        <div class="uk-width-auto txt-blue">
            <a href="{{url('/informationen-fur-fachkreise')}}" class="atag font16">
                Informationen für Fachkreise
            </a>
        </div>
        <div class="uk-width-auto txt-blue">
            <span uk-icon="icon:chevron-double-right;" class="vertical-icon"></span>
        </div>
        <div class="uk-width-expand@m uk-width-1-1@s txt-blue-darker">
            <a class="tslimatag font16">
                Control-IQ Technologie
            </a>
        </div>

    </div>
    <h1 class="txt-blue fonth1 roboto-slab-regular">
        Für Fachkreise: PROLOG-Studie und Basal-IQ™ Technologie: Real World Data
    </h1>

    <h2 class="txt-blue roboto fonth2 font24" style="margin-top: -5px">
        Studienergebnisse zur Sicherheit und Wirksamkeit der t:slim X2™ Insulinpumpe mit Basal-IQ Technologie
    </h2>

</div>
<Basalpercent percentststistic="{{ url('/basal/statistic') }}"></Basalpercent>

@if (!empty($pdfs))
<div class="cust-padding uk-padding-remove-top">

    <div class="uk-text-center">
        <p class="roboto-slab-regular txt-blue font28">
            Downloads
        </p>
        <br>
        <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match grid-stick mob-padding-download" uk-grid>
            @foreach($pdfs as $pdf)
            <div>
                <div class="card-blue uk-position-relative">
                    <div style="width: 100%">
                    @foreach ($tags as $tag)
                            @foreach ($pdf->tag as $singletag)
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
                            {{$pdf->name}}
                        </span>
                        <br>
                        <span class="txt-blue roboto-slab-regular font18">
                            {{$pdf->description}}
                        </span>
                        <br><br>
                        <a class="custom-button download-button font16" target="_blank"
                            href="{{$pdf->type == 'link' ? $pdf->link : storage($pdf->file_name)}}">DOWNLOAD
                            &nbsp;<span class="download-uk-icon" uk-icon="icon:download" style="margin-bottom: 1px"
                                ratio="0.8"></span></a>
                    </div>
                    @if($pdf->imagealt)
                    <img src="{{storage($pdf->uploaded_image)}}" alt="{{ $pdf->imagealt }}">
                    @else
                    <img src="{{storage($pdf->uploaded_image)}}" alt="PDF">
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
@css('frontend/basal')
@endpush