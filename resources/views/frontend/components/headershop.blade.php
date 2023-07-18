<link rel="stylesheet" href="{{url('assets/frontend/headershopcomponent.css')}}">
<header class="headerbg" uk-sticky="media: (max-width: 800px); animation: uk-animation-slide-top">
    <div class="bgtopdiv des">
        <div class="uk-child-width-1-4 uk-grid-collapse" uk-grid>

            <div>
                <p class="header-text center">
                    <img src="{{url('/assets/png/frontend/checklist.png')}}" width="30" alt="checklist">
                    &nbsp;
                    <a class="numberemail atag" href="">Partner aller Krankenkassen</a>
                </p>
            </div>
            <div>
                <p class="header-text center">
                    <img src="{{url('/assets/png/frontend/truck.png')}}" width="30" alt="truck">
                    &nbsp;
                    <a class="numberemail atag" href="">Versandkostenfreie Lieferung*</a>
                </p>
            </div>
            <div>
                <p class="header-text center">
                    <img src="{{url('/assets/png/frontend/phone.png')}}" width="30" alt="phone">
                    &nbsp;
                    <a class="numberemail atag" href="tel:0800/1001644">0800/100 16 44</a>
                </p>
            </div>
            <div>
                <p class="header-text left">
                    <img src="{{url('/assets/png/frontend/mail.png')}}" width="30" alt="mail">
                    &nbsp;
                    <a class="numberemail atag" href="mailto:diabetes@vitalaire.de">diabetes@vitalaire.de</a>
                </p>
            </div>
            {{-- <div></div> --}}
        </div>
    </div>
    <div class="bgcenterdiv des"></div>
    <div class="bgbottomdiv">
        <br />
        <div class="bgbottomdivone">
            <div class="uk-child-width-1-3 uk-grid-center" uk-grid>
                <div class="bgbottomleftside">
                    <div class="des">
                        <br>
                        <a class="atag roboto-slab-regular" href="{{url('/')}}"><span class="atag"
                                uk-icon="icon: chevron-left; ratio: 1.5"></span>DIE-CLEVERE-INSULINPUMPE.DE</a>
                    </div>
                    <div class="mob">
                        <a class="sideicons" href="#offcanvas-nav" uk-icon="icon: menu; ratio: 2" style="color: white;"
                            uk-toggle></a>
                    </div>
                </div>

                <div class="bgbottomcenterside">
                    <a href="{{url('/tslimonlineshop')}}">
                        <img src="{{url('/assets/png/frontend/vitalairelogohalf.png')}}" width="200" alt="logo" />
                    </a>
                </div>
                <div class="bgbottomrightside">

                    <div class="des">
                        <Search style="display: inline;" url="{{url('/header/search')}}"
                            productslist="{{url('/header/searchproducts')}}"></Search>
                        <div style=" display: inline;">
                            <a uk-icon=" icon: user; ratio: 1.5" class="sideicons" id="dropdownuser"></a>
                            <div uk-dropdown="mode: click; toggle: #dropdownuser; pos: bottom-center;"
                                class="user-dropdwon">
                                <div class="arrowuser">

                                </div>
                                @if(session_has('user_id'))
                                <div class="user-main uk-text-center uk-padding">
                                    <a class="txt-blue roboto-slab-regular atag"
                                        href="{{url('/profile')}}">Profile</a><br>
                                    <hr class="darkhr">
                                    <a class="txt-blue roboto-slab-regular atag" href="{{url('/orders')}}">Order
                                        History</a><br>
                                    <hr class="darkhr">
                                    <a class=" txt-blue roboto-slab-regular atag"
                                        href="{{url('/header/Logout')}}">Logout</a>
                                </div>
                                @else
                                <div class="user-main uk-text-center uk-padding ">
                                    <h3 class="txt-blue roboto-slab-regular">
                                        Anmelden
                                    </h3>
                                    @if(session_has('error'))
                                    <p class="uk-alert-danger col-sm-12">{{flash('error')}}</p>
                                    @endif
                                    <form class="login-form" action="{{url('/login/login')}}" method="post">
                                        <div class="uk-text-left">
                                            <div>
                                                <label for="" class="txt-blue">E-mail</label>
                                                <div class="uk-margin uk-margin-remove-top">
                                                    <div class="uk-inline uk-width-1-1">
                                                        <input class="uk-input uk-width-1-1 login-f" type="email"
                                                            name="email" id="email">
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <label for="" class="txt-blue">Passwort</label>
                                                <div class="uk-margin uk-margin-remove-top">
                                                    <div class="uk-inline uk-width-1-1">
                                                        <a class="uk-form-icon uk-form-icon-flip"
                                                            onclick="changeType()">
                                                            <img src="{{url('/assets/png/frontend/visible.png')}}"
                                                                alt="eye icon" id="visible">
                                                            <img src="{{url('/assets/png/frontend/notvisible.png')}}"
                                                                alt="eye icon close" id="notvisible"
                                                                style="display:none;">
                                                        </a>
                                                        <input class="uk-input uk-width-1-1 login-f" type="password"
                                                            id="c_type" name="password">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="uk-text-center uk-padding-top custom-checkbox-padding">
                                            <div class="uk-form-controls">
                                                <label style="font-size:1.2rem;"><input class="uk-checkbox"
                                                        type="checkbox" name="radio1"> <span class="txt-blue">
                                                        Angemeldet bleiben</span></label>
                                            </div>
                                        </div> --}}
                                        <br>
                                        <button class="uk-width-1-1 custom-button" type="submit">JETZT
                                            ANMELDEN</button>
                                    </form>

                                    <br><br>
                                    <div class="uk-child-width-1-2@m uk-child-width-1-1@s login-links" uk-grid>
                                        <div>
                                            <div>
                                                <a href="{{url('/registrierung')}}" class="txt-blue">
                                                    Registrieren
                                                </a>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="uk-text-right">
                                                <a class="txt-blue">
                                                    Passwort vergessen
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                {{-- start --}}
                                {{-- end --}}
                            </div>
                        </div>
                        <Cart style="display: inline;" geturl=" {{url('/header/common')}}"
                            deleteurl="{{url('/header/deletecart')}}" loggedin="{{session_has('user_id')}}"></Cart>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <div class="bgbottomdivtwo">
            <Menus geturl="{{url('/header/common')}}"></Menus>
        </div>
    </div>
    {{-- </div> --}}



    <div id="offcanvas-nav" uk-offcanvas="mode: push; overlay: true">
        <div class="uk-offcanvas-bar my-class">
            <br><br>
            <div class="uk-child-width-1-3 boundary-align" uk-grid>
                <div>
                    <a uk-icon="icon: search; ratio: 1.5" style="margin-left: 0px!important;" class="sideicons"
                        href="{{url('/search')}}"></a>
                </div>
                <div>
                    <a uk-icon="icon: user; ratio: 1.5" id="dropdownusermob" class="sideicons"
                        href="{{url('/profile')}}"></a>

                </div>
                <div>
                    <a uk-icon="icon: cart; ratio: 1.5" id="dropdowncartmob" class="sideicons"
                        href="{{url('/cart')}}"></a>
                </div>
            </div>


            <Mobilemenu geturl="{{url('/header/common')}}"></Mobilemenu>
            @if(session_has('user_id'))
            <div class="uk-text-left" style="margin-top: 20px;font-size:1.4em;margin-left:10px">
                <a href="{{url('/header/Logout')}}">
                    <span class=" wh" uk-icon="icon:sign-out;ratio:1.5"></span>
                    <span class="wh">
                        Logout
                    </span></a>
            </div>
            @endif
        </div>
    </div>
</header>

<script src="{{url('assets/frontend/header.js')}}"></script>
<script src="{{url('assets/backend/jquery.min.js')}}"></script>