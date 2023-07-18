@extends('frontend.shell')
@section('body')
@include('frontend.components.header')
<div class="form-padding custom-padding-top">
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
            <a class="atag font16" href="{{url('/newsletter')}}">
                Newsletter
            </a>
        </div>
        <div class="uk-width-auto txt-blue">
            <span uk-icon="icon:chevron-double-right;" class="vertical-icon"></span>
        </div>
        <div class="uk-width-expand@m uk-width-1-1@s txt-blue-darker">
            <a class="atag font16">
                Danke
            </a>
        </div>

    </div>
    <h1 class="txt-blue fonth1 roboto-slab-regular">
        Vielen Dank für die Anmeldung zum Newsletter.
    </h1>

    <h2 class="txt-blue fonth2 font24">
        Du bekommst von uns gleich eine Willkommens-E-Mail.
        <br>
        Dein VitalAire Diabetes-Team
    </h2>

</div>
@include('frontend.components.footer')
@push('js')
{{-- @js('backend/recaptcha') --}}
@endpush
@endsection
@push('css')
@css('frontend/registrierung')
@endpush