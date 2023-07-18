@extends('frontend.shell')
@section('body')
@include('frontend.components.header')
<div class="uk-position-relative">
  <div class="banner-content-absolute" uk-grid>
    <div class="uk-width-1-1 grid-center">
      <div>
        <span class="new-banner-content roboto wh">Veranstaltungen und Webinare</span><br><br>
        <span class="roboto wh sub-banner-content">Vor Ort und online</span>
      </div>
    </div>
  </div>
  <img class="banner-width" src="{{url('/assets/banner/vitalaire-diabetes-header-17-veranstaltungen-webinare.jpg')}}"
    alt="vitalaire-diabetes-header-17-veranstaltungen-webinare">
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
        Veranstaltungen und Webinare
      </a>
    </div>
  </div>

  <h1 class="txt-blue fonth1 roboto-slab-regular">
    Veranstaltungen und Webinare zur t:slim X2™
  </h1>

  <h2 class="txt-blue fonth2 font24" style="margin-top: -5px;">
    Die clevere Insulinpumpe live erleben – online oder auf unseren Veranstaltungen
  </h2>

  <div class="" uk-grid>
    <div class="uk-width-2-3@m uk-width-1-1@s">
      <div class="uk-text-justify tslim-para">
        <br>
        <p class="font18">Erleben Sie die t:slim X2 Insulinpumpe von VitalAire online von Ihrer Couch aus oder direkt
          auf unseren Live-Veranstaltungen. Überzeugen Sie sich selber vom modernen Design und den erleichternden
          Pumpenfunktionen für Typ 1 Diabetiker.
          Als Patient, Angehöriger, Diabetologe oder Arzt werden Sie Fragen haben, die Sie uns im Webinar oder auf den
          Veranstaltungen direkt stellen können. Für kurzfristige Fragen nutzen Sie bitte unser Kontaktformular oder
          schauen Sie im <a class="link" href="{{url('/faq')}}">FAQ-Bereich</a> nach.
        </p>
        <p class="font18"><b>Veranstaltungen für Fachkreise</b><br>
          Fachkräfte haben die Möglichkeit, sich bei unseren Fortbildungen rund um die t:slim X2 Insulinpumpe und
          anzumelden.
        </p>
        <p class="font18"><b>Veranstaltungen und Webinare für Patienten</b><br>
          Patienten können sich über Veranstaltungen mit VitalAire zum Thema Diabetes vor Ort informieren und anmelden.
        </p>
        <p class="font18"><b>Webinar nach Upgrade Control-IQ</b><br>
          Fragen, die nach dem erfolgreichen Upgrade von der Basal-IQ auf die Control-IQ Technologie entstehen,
          beantworten wir online in unseren Live-Webinaren.
        </p>
      </div>
    </div>
    <div class="uk-width-1-3@m uk-width-1-1@s grid-center">
      <div>
        <img src="{{url('/assets/png/frontend/laptopwithbg.png')}}" alt="webinar">
      </div>
    </div>
  </div>
</div>

<div class="bgcolordirt">
  <div class="cust-padding uk-text-center">
    <div class="uk-padding uk-padding-remove-vertical">
      <div tabindex="-1" uk-slider>
        <div class="uk-position-relative">
          <div class="uk-slider-container uk-visible-toggle uk-light">
            <ul class="uk-slider-items uk-child-width-1-1@s uk-child-width-1-3@m uk-grid-small" uk-grid>
              <li class="uk-transition-toggle" tabindex="0">
                <div class="blog-slider-bg uk-position-relative">
                  <img src="{{url('/assets/images/frontend/vitalaire-diabetes-header-kachel-fachkreise.jpg')}}"
                    alt="webinar img">
                  <div class="uk-position-center uk-padding non-hover-text center-text-title"
                    style="width: 100%; height: 100%;">
                    <h3 class="multi-line-ellipsis-home roboto-slab-regular text-shadow" style="color: white">
                      Veranstaltungen
                      für Fachkreise</h3>
                  </div>
                  <div class="uk-position-center uk-transition-fade uk-padding center-text-title"
                    style="width: 100%; height: 100%;">
                    <h3 class="multi-line-ellipsis-home roboto-slab-regular text-shadow" style="color: white">
                      Veranstaltungen
                      für Fachkreise</h3>
                    <div class="uk-position-bottom uk-padding bottom-button-title">
                      <a href="{{url('/veranstaltungenwebinare/fachkreise')}}"
                        class=" custom-button custom-button-blog-results letter-spacing-1 font16">Zu den
                        Veranstaltungen</a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="uk-transition-toggle" tabindex="0">
                <div class="blog-slider-bg uk-position-relative">
                  <img src="{{url('/assets/images/frontend/vitalaire-diabetes-header-kachel-patienten.jpg')}}"
                    alt="webinar img">
                  <div class="uk-position-center uk-padding non-hover-text center-text-title"
                    style="width: 100%; height: 100%;">
                    <h3 class="multi-line-ellipsis-home roboto-slab-regular text-shadow" style="color: white">
                      Veranstaltungen und
                      Webinare für Patienten</h3>
                  </div>
                  <div class="uk-position-center uk-transition-fade uk-padding center-text-title"
                    style="width: 100%; height: 100%;">
                    <h3 class="multi-line-ellipsis-home roboto-slab-regular text-shadow" style="color: white">
                      Veranstaltungen und
                      Webinare für Patienten</h3>
                    <div class="uk-position-bottom uk-padding bottom-button-title">
                      <a href="{{url('/veranstaltungenwebinare/patienten')}}"
                        class=" custom-button custom-button-blog-results letter-spacing-1 font16">Zu den
                        Veranstaltungen</a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="uk-transition-toggle" tabindex="0">
                <div class="blog-slider-bg uk-position-relative">
                  <img src="{{url('/assets/images/frontend/vitalaire-diabetes-header-kachel-webinare.jpg')}}"
                    alt="webinar img">
                  <div class="uk-position-center uk-padding non-hover-text center-text-title"
                    style="width: 100%; height: 100%;">
                    <h3 class="multi-line-ellipsis-home roboto-slab-regular text-shadow" style="color: white">Webinar
                      nach
                      Upgrade Control-IQ</h3>
                  </div>
                  <div class="uk-position-center uk-transition-fade uk-padding center-text-title"
                    style="width: 100%; height: 100%;">
                    <h3 class="multi-line-ellipsis-home roboto-slab-regular text-shadow" style="color: white">Webinar
                      nach
                      Upgrade Control-IQ</h3>
                    <div class="uk-position-bottom uk-padding bottom-button-title">
                      <a href="{{url('/veranstaltungenwebinare/webinar-nach-control-iq-upgrade')}}"
                        class=" custom-button custom-button-blog-results letter-spacing-1 font16">Zum Webinar</a>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<br>
@include('frontend.components.webinar.widget')
<br>

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



@include('frontend.components.footer')
@endsection
@push('css')
@css('frontend/webinar')
@endpush