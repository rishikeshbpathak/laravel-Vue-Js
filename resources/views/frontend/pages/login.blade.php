@extends('frontend.shell')
@section('body')
<div class="uk-position-center">

    <div class="user-main uk-text-center uk-padding ">
        <h3 class="txt-blue roboto-slab-regular">
            Anmelden
        </h3>
        @if(session_has('status'))
        <div class="uk-alert-success" uk-alert>
            <a class="uk-alert-close" uk-close></a>
            <p>{{flash('status')}}</p>
        </div>
        @endif
        @if(session_has('error'))
        <div class="uk-alert-danger" uk-alert>
            <a class="uk-alert-close" uk-close></a>
            <p>{{flash('error')}}</p>
        </div>
        @endif
        <form class="login-form" action="{{url('/login/login')}}" method="post">
            <div class="uk-text-left">
                <div>
                    <label for="" class="txt-blue">E-mail</label>
                    <div class="uk-margin uk-margin-remove-top">
                        <div class="uk-inline uk-width-1-1">
                            <input class="uk-input uk-width-1-1 login-f" type="email" name="email">
                        </div>
                    </div>
                </div>
                <div>
                    <label for="" class="txt-blue">Passwort</label>
                    <div class="uk-margin uk-margin-remove-top">
                        <div class="uk-inline uk-width-1-1">
                            <a class="uk-form-icon uk-form-icon-flip" onclick="changeType()">
                                <img src="{{url('/assets/png/frontend/visible.png')}}" alt="eye icon" id="visible">
                                <img src="{{url('/assets/png/frontend/notvisible.png')}}" alt="eye icon close"
                                    id="notvisible" style="display:none;">
                            </a>
                            <input class="uk-input uk-width-1-1 login-f" type="password" id="c_type" name="password">
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="uk-text-center uk-padding-top custom-checkbox-padding">
                <div class="uk-form-controls">
                    <label tyle="font-size:1.2rem;"><input class="uk-checkbox" type="checkbox" name="radio1"> <span
                            class="txt-blue ">Angemeldet
                            bleiben</span></label>
                </div>
            </div> --}}
            <br>
            <button class="uk-width-1-1 custom-button " type="submit">JETZT
                ANMELDEN</button>
        </form>



        <br><br class="uk-visible@m">
        <div class="uk-child-width-1-2@m uk-child-width-1-1@s login-links" uk-grid>
            <div>
                <div>
                    <a href="{{url('/registrierung')}}" class="txt-blue">
                        Registrieren
                    </a>
                </div>
            </div>
            <div>
                <div class="uk-text-right mob-center">
                    <a class="txt-blue" href="{{url('/Passwortvergessen')}}">
                        Passwort vergessen
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@push('js')
@js('frontend/header')
@js('backend/jquery.min')
@endpush
@endsection
@push('css')
@css('frontend/login')
@endpush
<script type="text/javascript">
    // function validate() {

    //     if (grecaptcha.getResponse() == "") {
    //         $('#errRecaptcha').text('Ups, du musst das Recaptcha überprüfen!');
    //         setTimeout(function() {
    //             $("#errRecaptcha").hide();
    //         }, 5000);
    //         return false;
    //     }

    // }

</script>