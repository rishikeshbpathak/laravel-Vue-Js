<div class="max-height">

    <div class="uk-text-center">
        <h3 class="txt-blue robotoslab-regular">
            Bitte überprüfe deine Adresse
        </h3>
        <br>

        <span style="color:red;" v-if="paymenterrormsg">Bitte wählen Sie eine Zahlungsoption.</span>

        <span style="color:red;" v-if="filevalidationmsg">Bitte wählen Sie das Dateiformat bmp, jpg, png, pdf.</span>

        {{-- <div v-if="checckpaymentoption.includes('mit_privatrezept') || checckpaymentoption.includes('selbstzahler')">
            <div v-if="grand_total !=0">
                <span>
                    Ein Teil der Bestellung wird von deiner Krankenkasse bezahlt. Für den Rest überprüfe bitte deine
                    Zahlungsdaten
                </span>
                <br><br>
                <ul class="uk-list uk-list-divider list-divider-margin">

                    <li>
                        <div uk-grid class="uk-grid-match">
                            <div class="uk-width-auto grid-center">
                                <div>
                                    <input class="uk-radio" type="radio" v-model="payment_option" id="payment_option"
                                        value="stripe" @click="setPaymentOption">
                                </div>

                            </div>
                            <div class="uk-width-expand grid-center">
                                <div class="uk-text-left">
                                    <div class="uk-child-width-1-2@m uk-child-width-1-1@s " uk-grid>
                                        <div class="grid-center">
                                            <span class="txt-blue">
                                                Stripe
                                            </span>
                                        </div>
                                        <div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <br><br>
                <br>
            </div>
        </div> --}}


        <div v-if="checckpaymentoption.includes('mit_kassenrezept') || checckpaymentoption.includes('mit_privatrezept') || checckpaymentoption.includes('selbstzahler')">
            <span class="roboto-bold txt-blue">
                (Optional) Bitte lade dein Rezept vorab hoch. Wir können deine Bestellung dadurch schneller verarbeiten.
            </span>
            <br><br>
            <div class="back-light-blue">
                <div class="uk-padding-small">
                    <span class="roboto-bold txt-dark-blue">
                        Lege das Rezept hier ab oder klicke auf den Button “Rezept hochladen”.
                    </span>
                    <br>
                    <span class="roboto-italic txt-dark-blue">
                        Akzeptierte Dateiformate: bmp, jpg, png, pdf. Dateigröße: Max. 3 MB.
                    </span>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="form-group col-md-6 upload-btn-wrapper">
                    <input class="form-control uploadhover" id="filename" type="file" name="filename" @change="onFileChange" required>
                    <a class="custom-button">REZEPT HOCHLADEN</a>
                </div>

            </div>
        </div>

    </div>

    <br>

    <div class="uk-grid-match" uk-grid>
        <div class="uk-width-1-5@m uk-width-1-1@s">
            <div>
                <a uk-switcher-item="previous" class="custom-button roboto-bold uk-width-auto@m uk-width-1-1@s">
                    ZURÜCK
                </a>
            </div>
        </div>
        <div class="uk-width-3-5@m uk-width-1-1@s grid-center">
            <div class="uk-text-center">
                <span class="txt-grey">
                    Du brauchst Hilfe? Rufe uns jetzt unter 0800 / 11234567 an.
                </span>
            </div>
        </div>
        <div class="uk-width-1-5@m uk-width-1-1@s grid-center">
            <div>
                <a @click="validatePayment()" class="custom-button-orange roboto-bold uk-width-auto@m uk-width-1-1@s">
                    WEITER
                </a>
            </div>
        </div>
    </div>
</div>
