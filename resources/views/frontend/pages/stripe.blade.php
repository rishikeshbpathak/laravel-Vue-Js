@extends('frontend.shell')
@section('body')
@include('frontend.components.header')

<script src="https://js.stripe.com/v3/"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style>
    .spacer {
        margin-bottom: 24px;
    }

    /**
             * The CSS shown here will not be introduced in the Quickstart guide, but shows
             * how you can use CSS to style your Element's container.
             */
    .StripeElement {
        background-color: white;
        padding: 10px 12px;
        border-radius: 4px;
        border: 1px solid #ccd0d2;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        -webkit-transition: box-shadow 150ms ease;
        transition: box-shadow 150ms ease;
    }

    .StripeElement--focus {
        box-shadow: 0 1px 3px 0 #cfd7df;
    }

    .StripeElement--invalid {
        border-color: #fa755a;
    }

    .StripeElement--webkit-autofill {
        background-color: #fefde5 !important;
    }

    #card-errors {
        color: #fa755a;
    }

    .stripe-card {
        border: solid 1px lightgray;
        height: 39px;
        padding: 10px;
        border-radius: 6px;
    }
</style>
<div class="container" id="app">
    <div class="col-md-6 col-md-offset-3">
        <h1>Payment Form</h1>
        <div class="spacer"></div>

        {{-- @if (session()->has('success_message'))
        <div class="alert alert-success">
            {{ session()->get('success_message') }}
    </div>
    @endif

    @if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif --}}
    <div style="margin:10px;">
        <paymentform></paymentform>
    </div>

</div>
</div>

@include('frontend.components.footer')
@endsection
@push('css')
@css('frontend/unsubscribe')
@endpush