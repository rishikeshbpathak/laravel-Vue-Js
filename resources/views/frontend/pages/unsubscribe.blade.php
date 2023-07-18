@extends('frontend.shell')
@section('body')
<div class="bgblue" id="unsubscriveDive">
    <div class="cust-padding">
        <div class="back-grey">
            <div class="center">
                <br>
                <h4 class=" txt-blue roboto-slab-regular">Melden Sie sich von unserer Mailingliste ab</h4>
                <br>
            </div>
            <div class="center">
                <form action="{{url('/unsubscribe/store')}}" method="post">
                    <input type="email" name="email_sub" id="email_sub" placeholder="Geben Sie eine E-Mail-ID ein"
                        class="emailinput center">
                    <br>
                    @if(session_has('error'))
                    <div class="uk-alert-danger" uk-alert>
                        <a class="uk-alert-close" uk-close></a>
                        <p>{{flash('error')}}</p>
                    </div>
                    @endif

                    <br><br>
                    <input type="hidden" name="subscription_type" id="subscription_type" value="unsubscribe">
                    <button type="submit" id="submitSubBtn" class="buttonnewsletter">JETZT FÜR DEN NEWSLETTER
                        ANMELDEN</button>
                </form>
                <br>
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
                <br>
                @endif
                {{-- <span id="successMsg" style="color:green;"></span> --}}
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
@push('js')
@js('backend/jquery.min')
@js('frontend/myjs')
@endpush