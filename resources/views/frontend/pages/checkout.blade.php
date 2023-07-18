@extends('frontend.oldshell')
@section('body')
<div class="back-header">
    <div class="header-padding mob-header-padding">
        <div uk-grid class="uk-grid-match">
            <div class="uk-width-auto@m uk-width-1-1@s">
                <div class="mob-center">
                    <img src="{{url('/assets/png/frontend/vitalairelogohalf.png')}}" width="150" alt="logo">
                </div>
            </div>

            <div class="uk-width-expand@m grid-center uk-width-1-1@s">
                <div class="uk-position-relative mob-center">
                    <div class="mob-inline">
                        <ul class="uk-subnav uk-subnav-pill payment-switcher uk-child-width-1-5" id="checkoutsuccess"
                            uk-switcher="connect:#payment-step">
                            <li>
                                <a href="#" class="uk-icon-button disabledatag">
                                    <img src="{{url('/assets/png/frontend/cart.png')}}" alt="cart">
                                </a>
                            </li>
                            <li>
                                <a href="#" class="uk-icon-button disabledatag">
                                    <img src="{{url('/assets/png/frontend/user.png')}}" alt="user">
                                </a>
                            </li>
                            <li>
                                <a href="#" class="uk-icon-button disabledatag">
                                    <img src="{{url('/assets/png/frontend/paymentcard.png')}}" alt="paymentcard">
                                </a>
                            </li>
                            <li>
                                <a href="#" class="uk-icon-button disabledatag">
                                    <img src="{{url('/assets/png/frontend/paymenteuro.png')}}" alt="paymenteuro">
                                </a>
                            </li>
                            <li>
                                <a href="#" class="uk-icon-button disabledatag">
                                    <img src="{{url('/assets/png/frontend/success.png')}}" alt="success">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="uk-position-center width100">
                        <div class="uk-text-center">
                            <div class="switcher-back-line">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="header-padding">
    <ul class="uk-switcher uk-margin" id="payment-step">
        <li>
            @include('frontend.components.checkout.summary')
        </li>
        <li>
            @include('frontend.components.checkout.address')
        </li>
        <li>
            @include('frontend.components.checkout.payment')
        </li>
        <li>
            @include('frontend.components.checkout.verify')
        </li>
        <li>
            @include('frontend.components.checkout.success')
        </li>
    </ul>
</div>
<footer>
    <div class="back-grey-dark">
        <div class="uk-padding">
            <div class="uk-child-width-1-2@m uk-child-width-1-1@s" uk-grid>
                <div>
                    <div class="uk-text-center">
                        <span class="wh">
                            &copy;2020 VitalAire GmbH. Alle Rechte vorbehalten
                        </span>
                    </div>
                </div>
                <div>
                    <div class="uk-text-center">
                        <div class="uk-inline footer-link">
                            <a href="{{url('/impressum') }}">
                                Impresssum
                            </a>
                            <a href="{{url('/datenschutz') }}">
                                Datenschutz
                            </a>
                            <a href="{{url('/agb') }}">
                                AGB
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
@push('js')
@js('backend/jquery.min')
<script>
    var vm = new Vue({
        el: '#app'
        , data: {
            url: ''
            , summerycartdet: ''
            , summeryimages: ''
            , array: ''
            , total: []
            , sum: 0
            , pro_total: ''
            , sub_total: 0
            , vat: ''
            , number: ''
            , btn: ''
            , oldValue: 0
            , newVal: 0
            , payment_option: ''
            , file: ''
            , cartdetail: ''
            , privacycheck: ''
            , error: ''
            , coupon_code: ''
            , order: []
            , address_info_delivery: boolean = false
            , address_info_billing: boolean = false
            , addressEditForm: boolean = false
            , formbillingid: ''
            , formdeliveryid: ''
            , deliveryaddress: ''
            , billingaddress: ''
            , street: ''
            , coupon_code: ''
            , discountPercent: 0
            , isCoupon: 0
            , discountfinalprice: 0
            , discountfinalpriceamount: 0
            , discount_amount: 0
            , discounterrmsg: boolean = false
            , paymenterrormsg: boolean = false
            , checckpaymentoption: []
            , successdeliveryaddress: ''
            , successbillingaddress: ''
            , grand_total: 0
            , vat_amount: ''
            , discountfinalvat: 0
            , discountgrandtotal: 0
            , deliveryaddresssuccessmsg: boolean = false
            , billingaddresssuccessmsg: boolean = false
            , filevalidationmsg: boolean = false
            , expected_delivery_date: ''
            , @stack('vuedata')
        },

        watch: {
            @stack('vuewatch')
        },

        created() {
            this.loadSummeryCart();
            this.checkouttotal();
            @stack('vuecreated')
        },

        mounted() {
            @stack('vuemounted')
        },

        methods: {
            loadSummeryCart() {
                // console.log("loadsummerycart called");
                axios.get("{{url('/Checkout/SummeryCart')}}")
                    .then(response => {
                        // console.log(response);

                        this.summerycartdet = response.data.carts;
                        this.summeryimages = response.data.product_images;
                        if (response.data.delivery_address.length == 0) {
                            this.deliveryaddress = null
                        } else {
                            this.deliveryaddress = response.data.delivery_address;
                        }
                        if (response.data.billing_address.length == 0) {
                            this.billingaddress = null
                        } else {
                            this.billingaddress = response.data.billing_address;
                        }
                        this.checckpaymentoption = response.data.payment_array;
                        // console.log(this.deliveryaddress);
                        // console.log(this.billingaddress);
                    })
                    .catch((error) => {})
            },

            checkouttotal() {
                axios.get("{{url('/checkout/Checkouttotal/')}}")
                    .then(response => {
                        array = response.data;

                        const formatter = new Intl.NumberFormat('it-IT', {
                            style: 'currency'
                            , currency: 'EUR'
                        })

                        for (i = 0; i < array.length; i++) {
                            this.sum += parseInt(array[i]['price']);
                            this.total.push(this.sum);
                        }

                        this.pro_total = formatter.format(this.total[this.total.length - 1]);
                        this.sub_total = this.total[this.total.length - 1];

                        var date1 = new Date(); //Year, Month, Date    
                        var date2 = new Date(2021, 00, 01); //Year, Month, Date  

                        if (date2 > date1) {
                            this.vat_amount = (16 / 100) * this.sub_total;
                            this.vat = formatter.format(this.vat_amount);
                        } else {
                            this.vat_amount = (19 / 100) * this.sub_total;
                            this.vat = formatter.format(this.vat_amount);
                        }

                        this.grand_total = formatter.format(this.sub_total + this.vat_amount);




                    }).catch((error) => {})
            }
            , deleteCartItem(cart_id) {
                axios.get("{{url('/checkout/Deletecheckoutcart/')}}" + cart_id).then(response => {
                        console.log(response);
                        if (response.data.carts.length == 0) {
                            window.location = "{{url('/tslimonlineshop')}}"
                        }
                        this.summerycartdet = response.data.carts;
                        this.summeryimages = response.data.product_images;

                    })
                    .catch((error) => {

                    })
            },

            changePaymentopt(event, quantity, id) {
                this.payment_option = event.target.value;
                this.count(quantity - 1, id, 'inc', this.payment_option)

            },

            count(quantity, cartid, status, paymentoption) {

                this.sum = 0;
                this.discountfinalprice = 0;
                if (this.payment_option == "") {
                    var pay_opt = paymentoption;
                } else {
                    var pay_opt = this.payment_option;
                }

                axios.post("{{url('/checkout/updatecart/')}}", {
                        quan: quantity
                        , id: cartid
                        , type: status
                        , pay_option: pay_opt
                    })
                    .then(response => {
                        this.loadSummeryCart();
                        this.checkouttotal();
                    })
                    .catch((error) => {})

            },

            validatePayment() {
                axios.post("{{url('/checkout/validatepayment/')}}")
                    .then(response => {
                        if (response.data == 'error') {
                            this.paymenterrormsg = true;
                        } else if (response.data == 'success') {
                            UIkit.switcher("#checkoutsuccess").show(3);
                        }
                    })
                    .catch((error) => {})
            },

            onFileChange(e) {
                // e.preventDefault();
                this.file = e.target.files[0];
                /*console.log(this.file.size);*/

                /*if (this.file.type == "image/bmp" || this.file.type == "image/jpeg" || this.file.type == "image/png" || this.file.type == "application/pdf") {
                    if (this.file.size <= 3000000) {
                        console.log("exist"); */
                let formData = new FormData();
                formData.append('file', this.file);

                const config = {
                    headers: {
                        'content-type': 'multipart/form-data'
                    }
                }
                axios.post("{{url('/checkout/Receipt')}}", formData, config)
                    .then(response => {
                        this.cartdetail = response.data.cart_detail;
                        e.target.reset();
                    })
                    .catch((error) => {

                    });
                /*} else {
                    console.log("not exist");
                    this.filevalidationmsg = true;
                }*/

            // } else {
            //     this.filevalidationmsg = true;
            // }
        },

        setPaymentOption(event) {
            const value = event.target.value;

            axios.post("{{url('/checkout/PaymentOption')}}", {
                    payment_option: value
                , })
                .then((response) => {

                })
        },

        checkPrivacy(event) {
            this.privacycheck = event.target.checked;
        },

        generateOrder() {
            if (this.privacycheck == true) {
                if (this.discountfinalprice == 0) {
                    // console.log(this.grand_total, this.vat);
                    var total_amount = this.grand_total;
                    var discount_amount = "0,00";
                    var discout_vat = this.vat;
                } else {
                    // console.log(this.discountgrandtotal, this.discount_amount, this.discountfinalvat);
                    var total_amount = this.discountgrandtotal;
                    var discount_amount = this.discount_amount;
                    var discout_vat = this.discountfinalvat;
                }
                // console.log("before")
                axios.post("{{url('/checkout/generateorder')}}", {
                        amount: total_amount
                        , discount: discount_amount
                        , vat: discout_vat
                    })
                    .then((response) => {
                        this.cartdetail = response.data.cart_detail;
                        this.order = response.data.order;
                        this.successdeliveryaddress = response.data.delivery_address;
                        this.successbillingaddress = response.data.billing_address;
                        this.expected_delivery_date = response.data.expected_delivery_date;
                        UIkit.switcher("#checkoutsuccess").show(4);
                    })
                    .catch((error) => {});
            } else {
                this.error = "Bitte bestätigen!";
            }
        },

        addressOpen(type) {
            if (type == 'delivery') {
                this.address_info_delivery = true;
            } else if (type == 'billing') {
                this.address_info_billing = true;
            }
        }
        , backAddress() {
            this.address_info_delivery = false;
            this.address_info_billing = false;
        },

        editAddress(type, id) {
            if (type == 'delivery') {
                this.formdeliveryid = id;
            } else if (type == 'billing') {
                this.formbillingid = id;
            }
        },

        setPrefrence(type, id) {
            axios.post("{{url('/checkout/setaddress')}}", {
                    tabletype: type
                    , address_id: id
                })
                .then((response) => {
                    this.loadSummeryCart();
                })
                .catch((error) => {});
        },

        checkAddress() {
            axios.post("{{url('/checkout/checkaddress')}}")
                .then((response) => {
                    if (response.data == 'success'); {
                        // console.log(response.data)
                        UIkit.switcher("#checkoutsuccess").show(2);
                        this.loadSummeryCart();
                    }
                })
                .catch((error) => {});
        },

        updateBilling(badd, type) {
            axios.post("{{url('/checkout/Addressupdate')}}", {
                    type: type
                    , details: badd
                })
                .then((response) => {
                    if (response.data == 'success'); {
                        this.billingaddresssuccessmsg = true;
                        UIkit.switcher("#checkoutsuccess").show(1);
                        this.loadSummeryCart();
                    }
                })
                .catch((error) => {});
        },

        updateDelivery(dadd, type) {
            axios.post("{{url('/checkout/Addressupdate')}}", {
                    type: type
                    , details: dadd
                })
                .then((response) => {
                    if (response.data == 'success'); {
                        this.deliveryaddresssuccessmsg = true;
                        UIkit.switcher("#checkoutsuccess").show(1);
                        this.loadSummeryCart();
                    }
                })
                .catch((error) => {});
        },

        formSubmit(e) {

            if (this.coupon_code == "") {

                e.preventDefault();
            } else {

                e.preventDefault();
                let currentObj = this;

                axios.post("{{url('/checkout/validatecoupon')}}", {
                        coupon_code: this.coupon_code
                    })
                    .then((response) => {

                        const formatter = new Intl.NumberFormat('it-IT', {
                            style: 'currency'
                            , currency: 'EUR'
                        })

                        if (response.data == null) {
                            currentObj.discounterrmsg = true;
                            currentObj.discount_amount = 0;
                            currentObj.discountfinalprice = 0;
                        } else {
                            currentObj.discount_amount = formatter.format((((response.data.coupon_discount * 1) / 100) * currentObj.sub_total));

                            currentObj.discountfinalpriceamount = currentObj.sub_total - (((response.data.coupon_discount * 1) / 100) * currentObj.sub_total);
                            currentObj.discountfinalprice = formatter.format(currentObj.discountfinalpriceamount);

                            var date1 = new Date(); //Year, Month, Date    
                            var date2 = new Date(2021, 00, 01); //Year, Month, Date  

                            if (date2 > date1) {
                                currentObj.discountfinalvat = formatter.format((16 / 100) * currentObj.discountfinalpriceamount);
                                currentObj.discountgrandtotal = formatter.format(currentObj.discountfinalpriceamount + (16 / 100) * currentObj.discountfinalpriceamount)
                            } else {
                                currentObj.discountfinalvat = formatter.format((19 / 100) * currentObj.discountfinalpriceamount);
                                currentObj.discountgrandtotal = formatter.format(currentObj.discountfinalpriceamount + (16 / 100) * currentObj.discountfinalpriceamount)
                            }

                            currentObj.isCoupon = 1;
                            this.loadSummeryCart();
                        }

                    })
                    .catch((error) => {
                        currentObj.output = error;
                    });

            }
        }
        , @stack('vuemethods')
    }

    });

</script>
@endpush
@endsection
@push('css')
@css('frontend/checkout')
@endpush