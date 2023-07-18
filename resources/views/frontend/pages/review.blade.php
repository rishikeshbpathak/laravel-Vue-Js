@extends('frontend.shell')
@section('body')
@include('frontend.components.headershop')
<br>
<br>
<br>

<div id="rating">
    <div class="uk-text-center">
        <div class="uk-inline uk-width-1-3   back-light-blue">
            <div class="uk-padding-small">
                <h3 class="txt-blue roboto-slab-regular">
                    Anwendungsvideos
                </h3>
                <div uk-grid class="uk-grid-match">
                    <div class="uk-width-auto">
                        <div>
                            <img src="{{url('/assets/images/frontend/productdouble.png')}}" width="80" alt="product">

                        </div>
                    </div>
                    <div class="uk-width-expand small-left-padding grid-center">
                        <div class="uk-text-left">
                            <span class="txt-blue roboto-bold">
                                Anwendungsvideos
                            </span>
                            <br>
                            <span class="txt-blue">
                                13 mm – 60 cm
                            </span>
                        </div>
                    </div>
                </div>
                <br>

                <rating storeaurl="{{url('/produkt/review')}}" productid="{{$product->id}}"
                    loggedin="{{session_has('user_id')}}"></rating>

            </div>
        </div>
        <div class="uk-text-center cust-padding">
            <div class="uk-inline uk-width-1-3">
                <div uk-grid>
                    <div class="uk-width-1-5">
                        <div>
                            <img src="{{url('/assets/png/frontend/starfilled.png')}}" width="50" alt="starfilled">
                        </div>

                    </div>
                    <div class="uk-width-1-5">
                        <div>
                            <img src="{{url('/assets/png/frontend/starfilled.png')}}" width="50" alt="starfilled">
                        </div>
                    </div>
                    <div class="uk-width-1-5">
                        <div>
                            <img src="{{url('/assets/png/frontend/starfilled.png')}}" width="50" alt="starfilled">
                        </div>
                    </div>
                    <div class="uk-width-1-5">
                        <div>
                            <img src="{{url('/assets/png/frontend/starfilled.png')}}" width="50" alt="starfilled">
                        </div>
                    </div>
                    <div class="uk-width-1-5">
                        <div>
                            <img src="{{url('/assets/png/frontend/starfilled.png')}}" width="50" alt="starfilled">
                        </div>
                    </div>
                </div>
                <span class="txt-blue">
                    Excellent
                </span>
            </div>

            <br><br>
            <div class="uk-inline uk-width-1-3">
                <div uk-grid>
                    <div class="uk-width-1-5">
                        <div>
                            <img src="{{url('/assets/png/frontend/starfilled.png')}}" width="50" alt="starfilled">
                        </div>

                    </div>
                    <div class="uk-width-1-5">
                        <div>
                            <img src="{{url('/assets/png/frontend/starfilled.png')}}" width="50" alt="starfilled">
                        </div>
                    </div>
                    <div class="uk-width-1-5">
                        <div>
                            <img src="{{url('/assets/png/frontend/starfilled.png')}}" width="50" alt="starfilled">
                        </div>
                    </div>
                    <div class="uk-width-1-5">
                        <div>
                            <img src="{{url('/assets/png/frontend/starfilled.png')}}" width="50" alt="starfilled">
                        </div>
                    </div>
                    <div class="uk-width-1-5">
                        <div>
                            <img src="{{url('/assets/png/frontend/starempty.png')}}" width="50" alt="starempty">
                        </div>
                    </div>
                </div>
                <span class="txt-blue">
                    Gut
                </span>
            </div>

            <br><br>
            <div class="uk-inline uk-width-1-3">
                <div uk-grid>
                    <div class="uk-width-1-5">
                        <div>
                            <img src="{{url('/assets/png/frontend/starfilled.png')}}" width="50" alt="starfilled">
                        </div>

                    </div>
                    <div class="uk-width-1-5">
                        <div>
                            <img src="{{url('/assets/png/frontend/starfilled.png')}}" width="50" alt="starfilled">
                        </div>
                    </div>
                    <div class="uk-width-1-5">
                        <div>
                            <img src="{{url('/assets/png/frontend/starfilled.png')}}" width="50" alt="starfilled">
                        </div>
                    </div>
                    <div class="uk-width-1-5">
                        <div>
                            <img src="{{url('/assets/png/frontend/starempty.png')}}" width="50" alt="starempty">
                        </div>
                    </div>
                    <div class="uk-width-1-5">
                        <div>
                            <img src="{{url('/assets/png/frontend/starempty.png')}}" width="50" alt="starempty">
                        </div>
                    </div>
                </div>
                <span class="txt-blue">
                    Ganz ok
                </span>
            </div>

            <br><br>
            <div class="uk-inline uk-width-1-3">
                <div uk-grid>
                    <div class="uk-width-1-5">
                        <div>
                            <img src="{{url('/assets/png/frontend/starfilled.png')}}" width="50" alt="starfilled">
                        </div>

                    </div>
                    <div class="uk-width-1-5">
                        <div>
                            <img src="{{url('/assets/png/frontend/starfilled.png')}}" width="50" alt="starfilled">
                        </div>
                    </div>
                    <div class="uk-width-1-5">
                        <div>
                            <img src="{{url('/assets/png/frontend/starempty.png')}}" width="50" alt="starempty">
                        </div>
                    </div>
                    <div class="uk-width-1-5">
                        <div>
                            <img src="{{url('/assets/png/frontend/starempty.png')}}" width="50" alt="starempty">
                        </div>
                    </div>
                    <div class="uk-width-1-5">
                        <div>
                            <img src="{{url('/assets/png/frontend/starempty.png')}}" width="50" alt="starempty">
                        </div>
                    </div>
                </div>
                <span class="txt-blue">
                    Gefällt mir nicht
                </span>
            </div>
            <br><br>
            <div class="uk-inline uk-width-1-3">
                <div uk-grid>
                    <div class="uk-width-1-5">
                        <div>
                            <img src="{{url('/assets/png/frontend/starfilled.png')}}" width="50" alt="starfilled">
                        </div>
                    </div>
                    <div class="uk-width-1-5">
                        <div>
                            <img src="{{url('/assets/png/frontend/starempty.png')}}" width="50" alt="starempty">
                        </div>
                    </div>
                    <div class="uk-width-1-5">
                        <div>
                            <img src="{{url('/assets/png/frontend/starempty.png')}}" width="50" alt="starempty">
                        </div>
                    </div>
                    <div class="uk-width-1-5">
                        <div>
                            <img src="{{url('/assets/png/frontend/starempty.png')}}" width="50" alt="starempty">
                        </div>
                    </div>
                    <div class="uk-width-1-5">
                        <div>
                            <img src="{{url('/assets/png/frontend/starempty.png')}}" width="50" alt="starempty">
                        </div>
                    </div>
                </div>
                <span class="txt-blue">
                    Miserabel
                </span>
            </div>
        </div>
    </div>
</div>

@include('frontend.components.footershop')

@endsection
@push('css')
@css('frontend/produkt')
@endpush