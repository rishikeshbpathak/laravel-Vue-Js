@extends('frontend.shell')
@section('body')
@include('frontend.components.header')
<div class="uk-position-relative">
    <div class="banner-content-absolute" uk-grid>
        <div class="uk-width-1-1 grid-center">
            <div>
                <span class="new-banner-content roboto wh">FAQ</span><br><br>
                <span class="roboto wh sub-banner-content">Service & Support</span>
            </div>
        </div>
    </div>
    <img class="banner-width" src="{{url('/assets/banner/vitalaire-diabetes-header-07-tslim-x2-insulinpumpe-faq.jpg')}}"
        alt="FAQ banner">
    <br class="mob">
</div>
<div class="cust-padding">
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
            <a class="vitalaireatag font16">
                Service & Support
            </a>
        </div>
        <div class="uk-width-auto txt-blue">
            <span uk-icon="icon:chevron-double-right;" class="vertical-icon"></span>
        </div>
        <div class="uk-width-expand@m uk-width-1-1@s txt-blue-darker">
            <a class="vitalaireatag font16">
                FAQ
            </a>
        </div>
    </div>

    <h1 class="txt-blue fonth1 roboto-slab-regular letter-spacing-2">
        FAQ. Antworten auf Fragen rund um die t:slim X2™ Insulinpumpe
    </h1>
    <h2 class="txt-blue fonth2 font24 letter-spacing-1" style="margin-top: -5px;">
        Wie komme ich zur Insulinpumpe? Was muss auf dem Rezept stehen? Was ist der t:lock Anschluss? Welche Insuline
        kann ich mit der t:slim X2™ nutzen?
    </h2>
    <br>
    <div class="uk-grid-match" uk-grid>
        <div class="uk-width-expand@m uk-width-1-1@s grid-center">
            <div class="uk-text-center">
                <div>
                    <Questionsearch style="display: inline" questionslist="{{url('/faq/allquestions')}}">
                    </Questionsearch>
                    <img style="margin-left: 10px" src="{{url('/assets/png/frontend/search.png')}}" width="25"
                        alt="search">
                </div>
            </div>
        </div>
        <div class="uk-width-1-3@m uk-width-1-1@s grid-center uk-text-center">
            <div>
                <img src="{{url('/assets/png/frontend/laptopwithbg.png')}}" alt="laptop">
            </div>
        </div>
    </div>

</div>
<Faq allvquestions="{{ url('/faq/allvuequestions') }}" allvcategories="{{ url('/faq/allvuecategories') }}"
    allcatquestions="{{ url('/faq/categoryquestions/') }}" alltagsquery="{{ url('/faq/alltags') }}" 
    allcatquestionswithtag="{{ url('/faq/categoryquestionswithtag/') }}" allvquestionswithtag="{{ url('/faq/allvuequestionswithtag/') }}"></Faq>
@include('frontend.components.footer')
@endsection
@push('css')
@css('frontend/faq')
@endpush