@extends('frontend.shell')
@section('body')
@include('frontend.components.header')
<div class="uk-position-relative">
    <div class="banner-content-absolute" uk-grid>
        <div class="uk-width-1-1 grid-center">
            <div>
                <span class="new-banner-content roboto wh">Die t:slim X2<br>
                    Insulinpumpe beantragen</span><br><br>
                <span class="roboto wh sub-banner-content">Service & Support</span>
            </div>
        </div>
    </div>
    <img class="banner-width" src="{{url('/assets/banner/vitalaire-diabetes-header-01-tslim-x2-insulinpumpe.jpg')}}"
        alt="Die t:slim X2 Insulinpumpe beantragen">
    {{-- <div class="cust-padding uk-padding-remove-bottom"> --}}

    {{-- </div> --}}
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
                Service & Support
            </a>
        </div>
        <div class="uk-width-auto txt-blue">
            <span uk-icon="icon:chevron-double-right;" class="vertical-icon"></span>
        </div>
        <div class="uk-width-expand@m uk-width-1-1@s txt-blue-darker">
            <a class="atag font16">
                Die t:slim X2 Insulinpumpe beantragen
            </a>
        </div>
    </div>

    <h1 class="txt-blue fonth1 roboto-slab-regular">
        Mit der t:slim X2™ Insulinpumpe einfach entspannter Leben
    </h1>

    <h2 class="txt-blue fonth2 font24" style="margin-top: -5px;">
        Privat oder Kassenrezepte für die Pumpe und das Verbrauchsmaterial beantragen
    </h2>

    <div class="" uk-grid>
        <div class="uk-width-2-3@m uk-width-1-1@s">
            <div class="uk-text-justify tslim-para">
                <br>
                <h3 class="txt-blue font20">Wie komme ich zu einer t:slim X2 Insulinpumpe?</h3>
                <p class="font18"><b>So einfach geht’s:</b></p>
                <ol>
                    <li class="font18">
                        <p>
                            Für die Versorgung mit der t:slim X2 Insulinpumpe ist grundsätzlich eine fachärztliche
                            Verordnung bzw. ein Rezept erforderlich. 
                        </p>
                        <p>
                            Für die Versorgung mit der t:slim X2 Insulinpumpe werden anfangs zwei Rezepte benötigt,
                            ein <b>Rezept</b> für die <b>Pumpe</b> und ein <b>Rezept</b> für das
                            <b>Verbrauchsmaterial</b>.
                            Bitte darauf achten, dass das Verordnungsfeld auf dem Rezept alle notwendigen Angaben
                            aufweist, siehe Hinweise zur Verordnung.
                        </p>
                    </li>
                    <li class="font18">
                        <p>
                            Das ausgefüllte Rezept, die Verordnung und die unterschriebene DSGVO-Erklärung im Original
                            per Post an VitalAire GmbH, Niederlassung Stuttgart, Bereich Diabetes, Mühleweg 5/1, 72800
                            Eningen u.A. schicken. Ein Vorabversand der unterschriebenen DSGVO-Erklärung per E-Mail ist
                            möglich.
                        </p>
                    </li>
                    <li class="font18">
                        <p>
                            Sobald die Rezepte eingetroffen sind, übernimmt VitalAire die Beantragung der
                            Kostenübernahme bei der gesetzlichen Krankenversicherung. Dafür werden die Rezepte im
                            Original benötigt. Gegebenenfalls können weitere Angaben von den Krankenversicherungen/MDKs
                            gefordert werden.
                        </p>
                        <p>
                            Privatversicherte und Selbstzahler erhalten bei Einsendung der Rezepte ein Kaufangebot. Die
                            Kostenübernahme wird durch den Versicherten selbst bei der privaten Krankenversicherung
                            beantragt. 
                        </p>
                    </li>
                    <li class="font18">
                        <p>
                            Nach erfolgter Genehmigung der t:slim X2 und der benötigten Verbrauchsmaterialien durch
                            die gesetzliche Krankenversicherung vereinbart das VitalAire Diabetes-Team einen Termin zur
                            technischen Einweisung und Übergabe der t:slim X2 Insulinpumpe.
                        </p>
                        <p>
                            Mit der Übergabe und Einweisung in die t:slim X2 erfolgt die Freischaltung für den
                            VitalAire Onlineshop.
                        </p>
                    </li>
                </ol>
            </div>
        </div>
        <div class="uk-width-1-3@m uk-width-1-1@s grid-center">
            <div>
                <img src="{{url('/assets/png/frontend/tslimx2withbg.png')}}" alt="tslimx2">
            </div>
        </div>
    </div>
</div>

@if (!empty($pdfs))
<div class="cust-padding uk-text-center">
    <p class="txt-blue roboto-slab-regular font28">
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
@endif

@include('frontend.components.footer')
@endsection
@push('css')
@css('frontend/einfach')
@endpush