@extends('frontend.shell')
@section('body')
@include('frontend.components.header')
<div class="uk-position-relative">
  <div class="banner-content-absolute" uk-grid>
    <div class="uk-width-1-1 grid-center">
      <div>
        <span class="new-banner-content roboto wh">Veranstaltungen für Fachkreise</span><br><br>
        <span class="roboto wh sub-banner-content">Besuchen Sie VitalAire vor Ort und online</span>
      </div>
    </div>
  </div>
  <img class="banner-width"
    src="{{url('/assets/banner/vitalaire-diabetes-header-18-veranstaltungen-webinare-fachkreise.jpg')}}"
    alt="vitalaire-diabetes-header-18-veranstaltungen-webinare-fachkreise">
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
    <div class="uk-width-auto txt-blue">
      <a href="{{url('/veranstaltungenwebinare')}}" class="atag font16">
        Veranstaltungen und Webinare
      </a>
    </div>
    <div class="uk-width-auto txt-blue">
      <span uk-icon="icon:chevron-double-right;" class="vertical-icon"></span>
    </div>
    <div class="uk-width-expand@m uk-width-1-1@s txt-blue-darker">
      <a class="atag font16">
        Fachkreise
      </a>
    </div>
  </div>

  <h1 class="txt-blue fonth1 roboto-slab-regular">
    Fachkreise: VitalAire Veranstaltungen zur t:slim X2™
  </h1>

  <h2 class="txt-blue fonth2 font24" style="margin-top: -5px;">
    Informationen für Diabetologen*innen zur cleveren Insulinpumpe
  </h2>

  <div class="" uk-grid>
    <div class="uk-width-2-3@m uk-width-1-1@s">
      <div class="uk-text-justify tslim-para">
        <br>
        <p class="font18">Sie sind Arzt, Diabetologe oder gehören sonstigen Fachkreisen an? Wir von VitalAire sorgen
          dafür, dass Ihre Patienten immer auf dem neuesten Stand sind. In regelmäßigen Abständen halten wir
          Online-Webinare ab und sind auch auf Veranstaltungen in Ihrer Nähe anzutreffen. Updates, Upgrades und weitere
          wichtige Informationen zur Einweisung oder zu Produktfeatures erhalten Sie in unseren Webinaren.
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