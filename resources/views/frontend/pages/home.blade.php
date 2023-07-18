@extends('frontend.shell')
@section('body')
@include('frontend.components.header')
<img src="{{url('/assets/images/frontend/Vitalairehome.png')}}" class="homepagemain" alt="t:slim X2" />
<br />
<br />
<br />
<div class="toptextdiv">
    <h1 class="h1inhomepage">t:slim X2™ – die clevere Insulinpumpe</h1>
    <h2 class="h2inhomepage">
        Einfach entspannter leben mit der cleveren Insulinpumpe und VitalAire
    </h2>
    <br />
    <p class="pinhomepage font18">
        Ein Leben mit Typ-1-Diabetes bringt diverse Herausforderungen mit sich.
        Den Blutzuckerspiegel im Zielbereich zu halten, ist dabei die größte Hürde,
        nicht nur in den verschiedenen Lebensphasen, auch bei den unterschiedlichsten Aktivitäten.
    </p>
    <p class="pinhomepage font18">
        Dafür haben Sie zwei starke Partner an Ihrer Seite: Die <a class="link"
            href="{{url('/tslim-x2-insulinpumpe')}}">t:slim X2™ Insulinpumpe</a>
        mit innovativer Technologie und <a class="link" href="{{url('/vitalaire')}}">VitalAire</a> als kompetenten
        Service-Partner, wenn es um Diabetes (Typ-1) geht. <br>
        Mit unserem Rundum-Service sorgen wir dafür, dass Sie sich weniger Gedanken um schwankende Blutzuckerwerte
        machen müssen.
    </p>
    <p class="pinhomepage font18">
        <span class="bold" style="color: #86b5c3;">Für die t:slim X2 Insulinpumpe stehen zwei innovative Technologien
            für die Verbesserung der Diabetes-Therapie zur Verfügung.</span>
    </p>
    <p class="pinhomepage font18">
        <span class="bold" style="color: #86b5c3;"><a class="link" href="{{url('/control-iq-technologie')}}">Control-IQ™
                Technologie:</a></span><br>
        30-Minuten-Vorhersage des Gewebeglukosespiegels und automatische Anpassung der Insulinabgabe an den
        vorhergesagten Glukosespiegel in Verbindung mit <a class="link" href="{{url('/integration-rtcgm')}}">Dexcom
            G6<sup>®</sup> CGM</a> .
    </p>
    <p class="pinhomepage font18">
        <span class="bold" style="color: #86b5c3;"><a class="link" href="{{url('/basal-iq-technologie')}}">Basal-IQ™
                Technologie:</a></span> <br>
        Vorhersage niedriger Blutzuckerwerte sowie automatische Unterbrechung und Fortsetzung der Insulinabgabe in
        Verbindung mit <a class="link" href="{{url('/integration-rtcgm')}}">Dexcom G6<sup>®</sup> CGM</a> .
    </p>
    <p class="pinhomepage font18">
        Alle wichtigen Entscheidungen laufen bei beiden Systemen im Hintergrund, ohne dass ständige Eingaben oder
        Interaktionen mit der Pumpe erforderlich sind. Dank der einfachen
        Bedienung und des modernen Designs lenkt die t:slim X2™ Insulinpumpe den Fokus auf das Leben und nicht auf den
        Diabetes.
    </p>
    <p class="pinhomepage font18">
        Auf dieser Website finden Sie alles rund um die clevere Insulinpumpe: <a class="link"
            href="{{url('/downloads')}}" title="Downloads">Downloads</a>, <a class="link" href="{{url('/faq')}}"
            title="FAQs">FAQs</a>, <a class="link" href="{{url('/blog')}}" title="FAQs">Blog</a>, <a class="link"
            title="Anwendungsvideos" href="{{url('/videos-tslim-x2-insulinpumpe-einstellen')}}">Anwendungsvideos</a> und
        viele nützliche Hinweise, die den
        <a class="link" title="Alltag" href="{{url('/tslim-x2-insulinpumpe-im-alltag')}}">Alltag</a> mit der
        t:slim X2 Insulinpumpe noch einfacher machen können.
    </p>
    <br>
    <a class="buttoninfos font16" href="{{url('/tslim-x2-insulinpumpe')}}">MEHR ZUR INSULINPUMPE</a>
    <br />
    <br />
</div>
<div style="overflow: hidden">
    <div class="handimagediv" uk-parallax=" x: 100, 0; scale: 0.8,1; viewport: 0.5;">
        <img src="{{url('/assets/images/frontend/handimagecontrol.png')}}" class="handimage" alt="handimage" />
    </div>
</div>
<div class="centerdiv">
    <div class="handimagetext">Einfach entspannter Leben.</div>
</div>
<div class="bgcolordirt">
    <div class="centerdiv" id="subscriveDive">
        <br />
        <br />
        <span class="colormailicon" uk-icon="icon: mail; ratio: 3.0"></span>
        <br />
        <br />
        <h3 class="textindirt">News, Tipps & Tricks zur t:slim X2 Insulinpumpe.</h3>
        <h3 class="textindirt">Mit unserem Newsletter immer up to date.</h3>
        <br />
        <br />
        <a class="buttonnewsletter font16" href="{{url('/newsletter')}}">JETZT FÜR DEN NEWSLETTER ANMELDEN</a>
        <br />
        <br />
        <br />
        <a href="#header" class="colormailicon" uk-icon="icon: chevron-up; ratio: 1.5" uk-scroll></a>
        <br />
        <br />
    </div>
</div>
<div class="centerdiv">
    <br />
    <br />
    <span class="colormailicon" uk-icon="icon: tag; ratio: 3.0"></span>
    <br />
    <br />
    <h3 class="textindirt font28">Verbrauchsmaterialien & Zubehör</h3>

    <br />
    <br />
    <div class="homeslidercover">
        <div uk-slider="autoplay: true; autoplay-interval: 3000; pause-on-hover: true">

            <div class="uk-position-relative">

                <div class="uk-slider-container uk-light">
                    <ul class="uk-slider-items uk-child-width-1-1@s uk-child-width-1-3@m image-slide">
                        {{-- @foreach($products as $product)
                        <li>
                            <div class="slider-relative">
                                <div class="uk-h3 slide-content">
                                    <span class="roboto-slab-regular font18">{{$product->article_name}} <br />
                                        {{$product->category->name}}</span>
                                    <br />
                                    <br />
                                    @if ($product->thumbnav == "produktubersicht")
                                    <form action="{{url('/verbrauchsmaterialien-zubehoer#products-thumbnav')}}"
                                        method="post">
                                        <input type="hidden" name="id" value="{{ $product->id }}">
                                        <button type="submit" class="custom-button">VERBRAUCHSMATERALIEN</button>
                                    </form>
                                    @else
                                    <form action="{{url('/verbrauchsmaterialien-zubehoer#zubehor-thumbnav')}}"
                                        method="post">
                                        <input type="hidden" name="id" value="{{ $product->id }}">
                                        <button type="submit" class="custom-button">ZUBEHÖR</button>
                                    </form>
                                    @endif
                                </div>
                            </div>
                            @foreach($product_images as $img)
                            @if($img->product_id == $product->id)
                            @if($img->imagealt)
                            <img src="{{url('/storage/'.$img->filename)}}" alt="{{ $img->imagealt }}" uk-cover
                                style="width:100%; padding: 5px;" />
                            @else
                            <img src="{{url('/storage/'.$img->filename)}}" alt="product" uk-cover
                                style="width:100%; padding: 5px;" />
                            @endif
                            @endif
                            @endforeach
                        </li>
                        @endforeach --}}
                    </ul>
                </div>
                <div>
                    <a style="margin:0" class="uk-position-center-left-out uk-position-small slider-arrow" href="#"
                        uk-slidenav-previous uk-slider-item="previous"></a>
                    <a style="margin:0" class="uk-position-center-right-out uk-position-small slider-arrow" href="#"
                        uk-slidenav-next uk-slider-item="next"></a>
                </div>
            </div>
            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
            <br>
            <br>
        </div>
    </div>
</div>

<div class="centerdiv bgcolordirt">
    <br />
    <br />
    <img src="{{url('/assets/png/frontend/vitalaire-webicon-kalender-online-training-tslim-x2-insulinpumpe-no-circle.png')}}"
        alt="" width="80" />
    <br />
    <br />
    <h3 class="textindirt font28">
        Die nächsten Veranstaltungs-Termine für Fachkreise und Patienten von
        VitalAire | Diabetes
    </h3>
    <br />
    <br />
    <br>
    <iframe src="{{url('/slideshowwebinar')}}" width="100%" class="slideshowheight" scrolling="no"
        style="overflow: hidden" frameborder="0"></iframe>
    <br />
    <br />
    <br>

    <a class="buttonnewsletter font16" href="{{url('/veranstaltungenwebinare')}}">ZUR
        VERANSTALTUNGSÜBERSICHT</a>
    <br />
    <br />
    <br>
    <a href="#header" class="colormailicon" uk-icon="icon: chevron-up; ratio: 1.5" uk-scroll></a>
    <br />
    <br>
    <br />
</div>

<div uk-slider class="uk-position-relative">
    <ul class="uk-slider-items uk-child-width-1-1 uk-grid-match">
        <li>
            <div class="back-purple" style="height: 100%">
                <div class="cust-home-padding">
                    <div class="uk-text-center">
                        <h3 class="wh roboto-slab-regular font28" style="color: #62137a;">Control-IQ: Ergebnisse
                            klinischer Studien</h3>
                    </div>
                    <br>
                    <div class="uk-child-width-1-2@m uk-child-width-1-1@s div-padding" uk-grid>
                        <div uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
                            <div class="percent-number roboto-slab-regular"
                                style="margin-bottom: 10px; color: #62137a;">
                                2,6h
                            </div>
                            <div class="back-white-text roboto font24"
                                style="background-color: #62137a; color: #e0d0e4;">
                                mehr Zeit im Zielbereich
                            </div>
                            <div class="uk-padding-small uk-text-center">
                                <p class="wh roboto font18" style="color: #62137a;">
                                    Durchschnittlich 2,6 h mehr Zeit im Zielbereich pro Tag, wenn Studienteilnehmer
                                    die
                                    t:slim X2 Pumpe mit Control-IQ Technologie verwendeten.<sup>1</sup>
                                </p>
                            </div>
                        </div>
                        <div uk-scrollspy="cls: uk-animation-slide-right; repeat: true">
                            <div class="percent-number roboto-slab-regular"
                                style="margin-bottom: 10px; color: #62137a;">
                                97%
                            </div>

                            <div class="back-white-text roboto font24"
                                style="background-color: #62137a; color: #e0d0e4;">
                                Einfache Handhabung
                            </div>
                            <div class="uk-padding-small roboto uk-text-center">
                                <p class="wh roboto font18" style="color: #62137a;">
                                    der Studienteilnehmer fanden die
                                    Control-IQ Technologie der t:slim X2 Insulinpumpe
                                    einfach zu handhaben.<sup>2</sup>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="div-padding">
                        <div style="display: flex; justify-content: center"
                            uk-scrollspy="cls: uk-animation-slide-bottom; repeat: true">
                            <a href="{{url('/control-iq-technologie')}}" class="transparent-a-tag">
                                <div style=" width: fit-content" class="back-purple-text roboto font16">
                                    MEHR ÜBER DIE CONTROL-IQ TECHNOLOGIE
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="back-blue" style="height: 100%">
                <div class="cust-home-padding">
                    <div class="uk-text-center">
                        <h3 class="wh roboto-slab-regular font28">Basal-IQ: Ergebnisse klinischer Studien</h3>
                    </div>
                    <br>
                    <div class="uk-child-width-1-2@m uk-child-width-1-1@s div-padding" uk-grid>
                        <div uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
                            <div class="percent-number roboto-slab-regular" style="margin-bottom: 10px">
                                31%
                            </div>
                            <div class="back-white-text roboto font24">
                                Weniger Hypoglykämien
                            </div>
                            <div class="uk-padding-small uk-text-center">
                                <p class="wh roboto font18">
                                    relative Reduzierung der Dauer und Häufigkeit von niedrigen Glukosewerten unter
                                    70
                                    mg/dl, wenn
                                    Studienteilnehmer eine t:slim X2 Pumpe mit Basal-IQ Technologie einsetzen.
                                    <sup>1,2</sup>
                                </p>
                            </div>
                        </div>
                        <div uk-scrollspy="cls: uk-animation-slide-right; repeat: true">
                            <div class="percent-number roboto-slab-regular" style="margin-bottom: 10px">
                                91%
                            </div>

                            <div class="back-white-text roboto font24">
                                Einfache Handhabung
                            </div>
                            <div class="uk-padding-small roboto uk-text-center">
                                <p class="wh roboto font18">
                                    der Studienteilnehmer fanden die Basal-IQ Technologie der t:slim X2 Insulinpumpe
                                    einfach zu
                                    handhaben. <sup>1,2</sup>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="div-padding">
                        <div style="display: flex; justify-content: center"
                            uk-scrollspy="cls: uk-animation-slide-bottom; repeat: true">
                            <a href="{{url('/basal-iq-technologie')}}" class="transparent-a-tag">
                                <div style=" width: fit-content" class="back-blue-text roboto font16">
                                    MEHR ÜBER DIE BASAL-IQ TECHNOLOGIE
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous
        uk-slider-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next
        uk-slider-item="next"></a>
</div>

<div class="cust-padding uk-text-center">
    <h3 class="txt-blue roboto-slab-regular font28">
        Testen Sie die t:slim X2 auf Ihrem Smartphone
    </h3>
    <br />
    <span class="roboto font18">
        Überzeugen Sie sich von der Einfachheit der Funktionen, und laden Sie sich die Demo-App für Ihr Apple- oder
        Android-Handy
        herunter:
    </span>
    <br />
    <br />
    <br />
    <span class="txt-blue roboto" style="font-size: 20px;">
        t:simulator™ App
    </span>
    <br />
    <br />
    <div uk-grid>
        <div class="uk-width-expand">
            <div class="uk-text-right">
                <a target="_blank" rel="noopener" href="https://apple.co/3aIuBwc">
                    <img src="{{url('/assets/images/frontend/appstorewitharrow.png')}}" width="300" alt="Appstore">
                </a>
            </div>
        </div>
        <div class="uk-width-auto">
            <img src="{{url('/assets/png/frontend/rightarrow.png')}}" width="50" style="visibility: hidden" alt="space">
        </div>
        <div class="uk-width-expand">
            <div class="uk-text-left">
                <a target="_blank" rel="noopener" href="https://bit.ly/2Yd6iBp">
                    <img src="{{url('/assets/images/frontend/googleplaywitharrow.png')}}" width="300" alt="Playstore">
                </a>
            </div>
        </div>
    </div>
</div>
<div class="homeoutercover">
    <div uk-grid class="">
        <div class="uk-width-1-2@m uk-width-1-1@s">
            <div class=" ">
                <div>
                    <h3 class="txt-blue roboto-slab-regular double-quotes">Ich hatte anfangs etwas Angst und wollte
                        keine
                        Insulinpumpe haben. Als wir sie dann aber hatten, fand ich sie toll.
                    </h3>
                    <div>
                        <p class="sectionptag font18">
                            Charlotte, Typ-1-Diabetes, baut Roboter, liebt das Meer und ist eine witzige Schwester
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-width-1-2@m uk-width-1-1@s">
            <img src="{{url('/assets/images/frontend/girl.png')}}" alt="girl">
        </div>
    </div>
</div>
{{-- @if (count($blogs) > 0)
<div class="bgcolordirt">
    <div class="cust-padding uk-text-center">
        <div class="uk-padding uk-padding-remove-vertical">
            <span class="txt-blue" uk-icon="icon: mail; ratio: 4"></span>
            <h3 class="txt-blue roboto-slab-regular font28">
                Diabetes Blog
            </h3>
            <div tabindex="-1" uk-slider>
                <div class="uk-position-relative">
                    <div class="uk-slider-container uk-visible-toggle uk-light">


                        <ul class="uk-slider-items uk-child-width-1-1@s uk-child-width-1-3@m uk-grid-small" uk-grid>
                            @foreach ($blogs as $blog)
                            <li class="uk-transition-toggle" tabindex="0">
                                <div class="blog-slider-bg uk-position-relative">
                                    <img src="{{url('/storage/'.$blog->image)}}" alt="{{ $blog->imagealt }}">
                                    <div class="uk-position-center uk-padding non-hover-text"
                                        style="width: 100%; height: 100%;">
                                        <h3 class="multi-line-ellipsis-home roboto-slab-regular" style="color: white">{{
                                            $blog->blogtitle }}</h3>
                                        <div class="uk-position-bottom uk-padding">
                                            <p style="color: white; font-size: 12px" class="roboto-slab-regular">
                                                {{date('d. F Y', strtotime($blog->edited_at))}} | {{ $blog->likes }}
                                                LIKES</p>
                                        </div>
                                    </div>
                                    <div class="uk-position-center uk-transition-fade uk-padding"
                                        style="width: 100%; height: 100%;">
                                        <h3 class="multi-line-ellipsis-home roboto-slab-regular" style="color: white">{{
                                            $blog->blogtitle }}</h3>
                                        <div class="uk-position-bottom uk-padding">
                                            <p style="color: white; font-size: 12px" class="roboto-slab-regular">
                                                {{date('d. F Y', strtotime($blog->edited_at))}} | {{ $blog->likes }}
                                                LIKES</p>
                                            <a href="{{url('/blog/view/'.$blog->url)}}"
                                                class="custom-button custom-button-blog-results letter-spacing-1 font16">ARTIKEL
                                                LESEN</a>
                                        </div>
                                    </div>

                                </div>
                            </li>
                            @endforeach
                        </ul>



                    </div>
                    <a style="margin:0" class="uk-position-center-left-out uk-position-small slider-arrow"
                        style="fill: black" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a style="margin:0" class="uk-position-center-right-out uk-position-small slider-arrow" href="#"
                        uk-slidenav-next uk-slider-item="next"></a>
                </div>
            </div>
            <div>

                <br>
                <br>
                <a href="{{url('/blog')}}" class="buttonnewsletter font16">ZUM BLOG</a>
                <br />
                <br />
                <br />
                <a href="#header" class="colormailicon" uk-icon="icon: chevron-up; ratio: 1.5" uk-scroll></a>
            </div>
        </div>
    </div>
</div>
@endif --}}
@include('frontend.components.footer')
@endsection
<link rel="stylesheet" href="{{url('assets/frontend/home.css')}}">
@push('js')
{{-- @js('backend/jquery.min') --}}
{{-- @js('frontend/custome') --}}
@endpush

<script>
    window.addEventListener('message', (e) => {
        if (typeof e.data === 'string') {
            if (e.data) {
                var path = e.data
                var baseurl = "{{url('')}}";
                window.location.href = baseurl+path;
            }
        }
    });
</script>
@vite('resources/js/component/main.ts')