@extends('frontend.shell')
@section('body')
@include('frontend.components.headershop')
<div class="back-grey">
    <div class="order-padding header-shadow">
        <div class="uk-grid-match" uk-grid>
            <div class="uk-width-expand@m uk-width-1-1@s grid-center">
                <div>
                    <h3 class="roboto-bold">
                        Arriving tomorrow 2PM - 4PM
                    </h3>
                    <span class="black min-margin-bottom">
                        We'll hand order to someone at your address
                    </span>
                </div>
            </div>
            <div class="uk-width-auto@m uk-width-1-1@s">
                <div>
                    <div class="product-image-header">
                        <img src="{{url('/assets/images/frontend/slider3.png')}}" alt="slider">
                    </div>
                    <div class="product-image-header">
                        <img src="{{url('/assets/images/frontend/slider2.png')}}" alt="slider">
                    </div>
                    <div class="product-image-header">
                        <img src="{{url('/assets/images/frontend/slider2.png')}}" alt="slider">
                    </div>
                    <div class="grid-center mob-block uk-inline ">
                        <a href="" class="hover-black">View all items</a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="order-padding">
        <br>
        <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>
            <div>
                <div class="order-card-white">
                    <h4 class="roboto-bold">Order Summery</h4>
                    <span>Order #: 400923-372</span><br>
                    <span>Ordered </span>
                    <br><br>

                    <div class="child-margin-none">
                        @foreach($carts as $c)
                        <div uk-grid>
                            <div class="uk-width-expand">
                                <div>
                                    <span class="black">
                                        {{$c->product->article_name}} x {{$c->quantity}}
                                    </span>
                                </div>
                            </div>

                            <div class="uk-width-auto">
                                <div class="uk-text-right">
                                    <span class="black">
                                        {{$c->price}} €
                                    </span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div uk-grid>
                            <div class="uk-width-expand">
                                <div>
                                    <span class="black">
                                        Delivery Charge:
                                    </span>
                                </div>
                            </div>
                            <div class="uk-width-auto">
                                <div class="uk-text-right">
                                    <span class="black">
                                        30 €
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- <div uk-grid>
                            <div class="uk-width-expand">
                                <div>
                                    <span class="black">
                                        Total before tax:
                                    </span>
                                </div>
                            </div>
                            <div class="uk-width-auto">
                                <div class="uk-text-right">
                                    <span class="black">
                                        30 €
                                    </span>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div uk-grid>
                            <div class="uk-width-expand">
                                <div>
                                    <span class="black">
                                        Est. Tax:
                                    </span>
                                </div>
                            </div>
                            <div class="uk-width-auto">
                                <div class="uk-text-right">
                                    <span class="black">
                                        30 €
                                    </span>
                                </div>
                            </div>
                        </div> -->

                        <div uk-grid>
                            <div class="uk-width-expand">
                                <div>
                                    <span class="black">
                                        Items total:
                                    </span>
                                </div>
                            </div>
                            <div class="uk-width-auto">
                                <div class="uk-text-right">
                                    <span class="black">
                                        {{$total}} €
                                    </span>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div uk-grid>
                            <div class="uk-width-expand">
                                <div>
                                    <span class="black roboto-bold">
                                        Grand total:
                                    </span>
                                </div>
                            </div>
                            <div class="uk-width-auto">
                                <div class="uk-text-right">
                                    <span class="black roboto-bold">
                                        {{$total+30}} €
                                    </span>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <span class="black roboto-bold">
                            Payment Methods
                        </span>
                        <br>
                        <span class="black">
                            Stripe
                        </span>
                    </div>
                </div>
            </div>
            <div>
                @foreach($user_address as $address)
                @if($order->cart_detail->delivery_address_id == $address->id)
                <div class="order-card-white">
                    <h4 class="roboto-bold">Deliver Address</h4>
                    @foreach($delivery_details as $dd)
                    @if($dd->user_address_id == $address->id)
                    <span class="black">{{$dd->name}}</span><br>
                    <span class="black">{{$dd->contact}}</span><br>
                    @endif
                    @break
                    @endforeach
                    <br><br>
                    <span class="black">{{$address->company_name}}</span><br>
                    <span class="black">{{$address->street}}</span><br>
                    <span class="black">{{$address->house_number}}</span><br>
                    <span class="black">{{$address->place}}</span><br>
                    <span class="black">{{$address->postcode}}</span><br>
                    <span class="black">
                        9876543211
                    </span>
                </div>
                @endif
                @break
                @endforeach
            </div>
            <div>
                <div class="order-card-white">
                    <h4 class="roboto-bold">Need help with thos order?</h4>
                    <a href="" class="hover-black">
                        Cancel your order
                    </a>
                    <br><br>
                    <a href="" class="hover-black">
                        Conatct Customer Service
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>

@include('frontend.components.footershop')
@endsection
@push('css')
@css('frontend/orders')
@endpush