@extends('frontend.shell')
@section('body')
<div class="bgblue" id="unsubscriveDive">
    <div class="cust-padding">
        <div class="back-grey">
            <div class="center">
                <br>
                <h4 class=" txt-blue roboto-slab-regular">Hier können Sie Ihr Passwort zurücksetzen</h4>
                <br>
            </div>
            <div class="center">
                @if(session_has('status'))
                <div class="uk-alert-success" uk-alert>
                    <a class="uk-alert-close" uk-close></a>
                    <p>{{flash('status')}}</p>
                </div>
                @endif
                <form action=" {{url('/Passwortvergessen/store')}}" method="post">

                    <input type="email" name="email" id="email" placeholder="Geben Sie eine E-Mail-ID ein"
                        class="emailinput center">
                    <br>
                    @if(session_has('errStatus'))
                    <div class="uk-alert-danger" uk-alert>
                        <a class="uk-alert-close" uk-close></a>
                        <p>{{flash('errStatus')}}</p>
                    </div>
                    @endif
                    <br><br>
                    <button type="submit" id="submitSubBtn" class="buttonnewsletter">Einreichen</button>
                </form>
                <br>
                <p id="successMsg" style="color:green;"></p>
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