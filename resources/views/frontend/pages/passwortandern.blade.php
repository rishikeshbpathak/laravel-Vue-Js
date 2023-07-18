@extends('frontend.shell')
@section('body')
<div class="bgblue" id="unsubscriveDive">
    <div class="cust-padding">
        <div class="back-grey">
            <div class="center">
                <br>
                <h4 class=" txt-blue roboto-slab-regular">Passwort hier ändern</h4>
                <br>
            </div>
            <div class="center">
                @if(session_has('errStatus'))
                <div class="uk-alert-danger" uk-alert>
                    <a class="uk-alert-close" uk-close></a>
                    <p>{{flash('errStatus')}}</p>
                </div>
                <br>
                @endif
                <form action="{{url('/Passwortvergessen/storepassword')}}" method="post">
                    <input type="hidden" name="patient_id" value="{{$patient_id}}">
                    <input type="hidden" name="email" value="{{$email}}">
                    <input type="password" name="password" id="password" placeholder="Passwort"
                        class="emailinput center" required>
                    <br><br><br>
                    <input type="password" name="confirm_password" id="confirm_password"
                        placeholder="Kennwort bestätigen" class="emailinput center" required>
                    <br><br>
                    <button type="submit" id="submitSubBtn" class="buttonnewsletter">Einreichen</button>
                </form>
                <br>
                <br>
                <br>
            </div>
        </div>
    </div>
</div>

@endsection
@push('css')
@css('frontend/unsubscribe')
@endpush