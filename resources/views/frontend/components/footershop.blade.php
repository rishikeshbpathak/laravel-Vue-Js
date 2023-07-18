@push('css')
@css('frontend/footershopcomponent')
@endpush
<footer>
    <div class="footerbg">
        <div class="footertopsection">
            <br />
            <br />
            <br />
            <a onclick="scrollToTop()" class="footerarrowicon" uk-icon="icon: chevron-up; ratio: 1.5"></a>
            <br />
            <br />
            <br />
            <img src="{{url('/assets/png/frontend/vitalairelogohalf.png')}}" width="300" alt="logo" />
            <br />
            <br />
            <br />
        </div>
        <div class="footerbottomsection">
            <div class="uk-child-width-1-4@m uk-child-width-1-1@s" uk-grid>
                <div>
                    {{-- <div class="uk-padding"> --}}
                    <h3>Kundenservice</h3>
                    <div class="uk-grid-column-small uk-grid-row-large" uk-grid>
                        <span class="footergridicons" style="margin-top: 5%"
                            uk-icon="icon: receiver; ratio: 1.5"></span>&nbsp;
                        <div>
                            <a class="footerataglinks" href="tel:0800/1001644">
                                <h4 class="footerh2ptag">0800/100 16 44*</h4>
                            </a>
                            <footer class="footernumberfooter">*kostenlos aus dem deutschen Festznetz</footer>
                        </div>
                    </div>
                    <br>
                    <div class="uk-grid-column-small uk-grid-row-large" uk-grid>
                        <span class="footergridicons" uk-icon="icon: mail; ratio: 1.5"></span>&nbsp;
                        <div>
                            <a class="footerataglinks" href="mailto:diabetes@vitalaire.de">diabetes@vitalaire.de</a>
                            <footer></footer>
                        </div>
                    </div>
                    <br>
                    <div class="uk-grid-column-small uk-grid-row-large" uk-grid>
                        <span class="footergridicons" uk-icon="icon: location; ratio: 1.5"></span>&nbsp;
                        <div>
                            <p class="footerh2ptag">VitalAire GmbH</p>
                            <p class="footerh2ptag">Bornbarch 2</p>
                            <p class="footerh2ptag">22848 Norderstedt</p>
                        </div>
                    </div>
                    {{-- </div> --}}
                </div>
                <div>
                    {{-- <div class="uk-padding"> --}}
                    <h3 class="footerh4">Zahlung & Versand</h3>
                    <div class="uk-child-width-1-3 imagedivfooter" uk-grid>
                        <div class="custompaddingforfotterimage">
                            <img src="{{url('/assets/images/frontend/maestro.png')}}" width="100px" alt="Paypal">
                        </div>
                        <div class="custompaddingforfotterimage">
                            <img src="{{url('/assets/images/frontend/sepa.png')}}" width="100px" alt="Visa">
                        </div>
                        <div class="custompaddingforfotterimage">
                            <img src="{{url('/assets/images/frontend/dhl.png')}}" width="100px" alt="Mastercard">
                        </div>
                    </div>
                    <div class="uk-child-width-1-3 imagedivfooter" uk-grid>
                        <div class="custompaddingforfotterimage">
                            <img src="{{url('/assets/images/frontend/maestro.png')}}" width="100px" alt="Paypal">
                        </div>
                        <div class="custompaddingforfotterimage">
                            <img src="{{url('/assets/images/frontend/sepa.png')}}" width="100px" alt="Visa">
                        </div>
                        <div class="custompaddingforfotterimage">
                        </div>
                    </div>
                    <div class="uk-child-width-1-3 imagedivfooter" uk-grid>
                        <div class="custompaddingforfotterimage">
                            <img src="{{url('/assets/images/frontend/dhl.png')}}" width="100px" alt="Mastercard">
                        </div>
                        <div class="custompaddingforfotterimage">
                        </div>
                        <div class="custompaddingforfotterimage">
                        </div>
                    </div>
                    {{-- </div> --}}
                </div>
                <div>
                    {{-- <div class="uk-padding"> --}}
                    <h3>Shopservice</h3>
                    <p><a class="atag" href="{{url('/kontakt')}}">Kontaktformular</a></p>
                    <p><a class="atag" href="{{url('/')}}">Versand- und Zahlungsbedingungen</a></p>
                    <p><a class="atag" href="{{url('/')}}">Rückage</a></p>
                    <p><a class="atag" href="{{url('/')}}">Widerrufsrecht</a></p>
                    <p><a class="atag" href="{{url('/')}}">Zahlungsarten</a></p>
                    <p><a class="atag" href="{{url('/')}}">Freiumschlag</a></p>
                    {{-- </div> --}}
                </div>
                <div>
                    {{-- <div class="uk-padding"> --}}
                    <h3>Informationen</h3>
                    <p><a class="atag" href="{{url('/')}}">Das zahlen die Krankenkassen</a></p>
                    <p><a class="atag" href="{{url('/')}}">Rezeptservices</a></p>
                    <p><a class="atag" href="{{url('/')}}">Hilfe & FAQ</a></p>
                    <p><a class="atag" href="{{url('/')}}">Partnerlinks</a></p>
                    <p><a class="atag" href="{{url('/')}}">Newsletter</a></p>
                    <p><a class="atag" href="{{url('/')}}">Über uns</a></p>
                    {{-- </div> --}}
                </div>
            </div>
            <br>
            <br>
            <div class="uk-child-width-1-2@m uk-child-width-1-1@s" uk-grid>
                <div>
                    <div class="uk-text-center">
                        <span class="wh">
                            © 2020 VitalAire GmbH. Alle Rechte vorbehalten.
                        </span>
                    </div>
                </div>
                <div>
                    <div class="uk-text-center">
                        <div class="uk-inline footer-link">
                            <a class="atag" href="{{url('/impressum')}}">
                                Impresssum
                            </a>
                            <a class="atag" href="{{url('/datenschutz')}}">
                                Datenschutz
                            </a>
                            <a class="atag" href="">
                                AGB
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <br />
            <br />
        </div>
    </div>
</footer>
@push('js')
@js('frontend/footer')
@endpush