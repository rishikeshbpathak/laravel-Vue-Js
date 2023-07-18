@extends('frontend.shell')
@section('body')
@include('frontend.components.headershop')

<div class="cust-padding">

    @foreach($orders as $order)
    <div class="order-card">
        <div class="order-details">
            <div class="uk-grid-match" uk-grid>
                <div class="uk-width-expand@m uk-width-1-1@s">
                    <div uk-grid>
                        <div class="uk-width-auto">
                            <div>
                                <span>
                                    ORDER PLACED
                                </span>
                                <br>
                                <span>
                                    {{$order->created_at}}
                                </span>
                            </div>
                        </div>
                        <div class="uk-width-auto">
                            <div>
                                <span>
                                    TOTAL
                                </span>
                                <br>
                                <span>
                                    {{$order->amount}} €
                                </span>
                            </div>
                        </div>
                        <div class="uk-width-auto">
                            <div>
                                <span>
                                    DELIVER TO
                                </span>
                                <br>
                                @foreach($cart_details as $cart_detail)
                                @if($cart_detail->id == $order->cartdetail_id)

                                @foreach($delivery_address as $dadd)
                                @if($dadd->id == $cart_detail->delivery_address_id)
                                <span>
                                    {{$dadd->title}} {{$dadd->firstname}} {{$dadd->lastname}}
                                </span>
                                @endif
                                @endforeach

                                @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-auto@m uk-width-1-1@s">
                    <div>
                        <span>
                            ORDER
                        </span>
                        <br>
                        <div>
                            <a href="{{url('/orders/invoice/'.$order->id)}}" target="_blank" rel="noopener">Invoice</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="order-image-track">
            <span class="black roboto-bold">
                @if($order->status == 0)
                Pending
                @elseif($order->status == 1)
                Order In Process
                @elseif($order->status == 2)
                Delivered
                @elseif($order->status == 3)
                Cancel
                @endif
            </span>
            <div class="image-flex">
                @foreach($product_image as $pi)
                @foreach($carts as $cart)

                @if($cart->cart_number == $order->cart_number)
                @if($pi->product_id == $cart->product_id)
                <div>
                    <img src="{{url('/storage/'.$pi->filename)}}" alt="product">&nbsp;
                </div>
                @endif
                @endif
                @endforeach
                @endforeach

            </div>
        </div>
    </div>
    @endforeach
</div>

@include('frontend.components.footershop')
@endsection
@push('css')
@css('frontend/orders')
@endpush