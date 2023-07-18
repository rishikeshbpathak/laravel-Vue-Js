@extends('frontend.shell')
@section('body')
@include('frontend.components.headershop')
{{-- <div class="uk-padding">
    <ul class="uk-list uk-list-divider">
        <li>
            <div class="uk-grid-match" uk-grid>
                <div class="uk-width-auto grid-center">
                    <div class="p-image-width">
                        <img {{url('/assets/png/frontend/slider2.png')}} alt="slider">
</div>
</div>
<div class="uk-width-expand">
    <div>
        <h3 class="txt-blue">Product name</h3>
    </div>
</div>
<div class="uk-width-auto grid-center">
    <div>

    </div>
</div>
</div>
</li>
</ul>
</div> --}}
<Cartmobile geturl=" {{url('/header/common')}}" deleteurl="{{url('/header/deletecart')}}"
    loggedin="{{session_has('user_id')}}"></Cartmobile>

@include('frontend.components.footershop')
@endsection
@push('css')
@css('frontend/cart')
@endpush