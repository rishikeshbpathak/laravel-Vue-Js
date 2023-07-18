@extends('frontend.shell')
@section('body')
@include('frontend.components.headershop')


<profile profiledetails="{{url('/profile/userdetails')}}" profileurl="{{url('/profile/addressdetails')}}"
    deleteurl="{{ url('/profile/delete') }}" storedeliveryurl="{{url('/profile/deliveryaddress')}}"
    storebillingurl="{{url('/profile/billingaddress')}}" storeprofileimgurl="{{url('/profile/storeprofileimg')}}">
</profile>

@include('frontend.components.footershop')
@endsection
@push('css')
@css('frontend/profile')
@endpush

@push('js')
@js('backend/jquery.min')
@js('frontend/custome')
@endpush