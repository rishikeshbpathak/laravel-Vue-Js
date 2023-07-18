@extends('frontend.shell')
@section('body')
@include('frontend.components.header')

<div class="form-padding">

    <h2 class="txt-blue roboto-slab-regular">Registrierung</h2>

    <h4 class="txt-blue">Bitte geben Sie Ihre persönlichen Informationen ein, um Ihr Benutzerkonto anzulegen.</h4>
    <div class="uk-text-justify tslim-para">
        <p>
            Sie können sich nur in unserem Onlineshop anmelden, wenn Sie bereits Kunde der VitalAire GmbH sind und eine
            t:slim X2 Insulinpumpe besitzen bzw. beantragt haben.
        </p>
        <p>
            Für die Anmeldung benötigen Sie Ihre
            <b>E-Mail Adresse</b> mit der Sie bereits bei uns hinterlegt sind und
            die
            <b>Seriennummer Ihrer t:slim X2 Insulinpumpe.</b>
        </p>
        <p>
            Sie können Sie nicht anmelden? Bitte melden Sie sich bei unserer Hotline unter 0800 / 100 16 44 oder
            schreiben uns eine E-Mail.
        </p>
    </div>


    @if(session_has('error'))
    <div class="uk-alert-danger" uk-alert>
        <a class="uk-alert-close" uk-close></a>
        <p style="color:red;">{{flash('error')}}</p>
    </div>
    @endif
    <Register storeaurl="{{url('/registrierung/storeAdvisor')}}" nameurl="{{url('/registrierung/name')}}"
        storeurl="{{url('/registrierung/store')}}"></Register>
</div>

@include('frontend.components.footer')
@push('js')
@js('backend/jquery.min')
@js('backend/recaptcha')
@endpush
@endsection
@push('css')
@css('frontend/registrierung')
@endpush