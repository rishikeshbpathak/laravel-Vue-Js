<div class="max-height">

    <div v-if="!address_info_delivery && !address_info_billing">
        <div class="uk-text-center">
            <h3 class="txt-blue robotoslab-regular">
                Bitte überprüfe deine Adresse
            </h3>
        </div>

        <div class="uk-child-width-1-2@m k-child-width-1-1@s uk-grid-match" uk-grid>
            <div>
                <div class="back-light-blue">
                    <div class="uk-padding">
                        <h5 class="txt-blue roboto-bold">
                            Lieferadresse
                        </h5>
                        <div class="uk-grid-match" uk-grid v-if="deliveryaddress != null">
                            <div class="uk-width-expand@m uk-width-1-1@s">
                                <div v-for="dadd in deliveryaddress">
                                    <span class="txt-grey" v-if="dadd.preference == '1'">
                                        @{{dadd.firstname}} @{{dadd.lastname}}<br>
                                        @{{dadd.street}} <br>
                                        @{{dadd.house_number}} <br>
                                        @{{dadd.place}} <br>
                                        @{{dadd.postcode}} <br>
                                    </span>
                                </div>
                            </div>
                            <div class="uk-width-expand@m uk-width-1-1@s">
                                <div class="uk-position-relative height100">
                                    <a @click="addressOpen('delivery')" class="custom-button roboto-bold position-bottom">
                                        ÄNDERN
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div v-if="deliveryaddress == null" class="uk-padding uk-text-center">
                            <a href="{{url('/profile')}}" class="custom-button roboto-bold">
                                Adresse hinzufügen
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="back-light-blue">
                    <div class="uk-padding">
                        <h5 class="txt-blue roboto-bold">
                            Rechnungsadresse
                        </h5>
                        <div class="uk-grid-match" uk-grid v-if="billingaddress != null">
                            <div class="uk-width-expand@m uk-width-1-1@s">
                                <div v-for="badd in billingaddress">
                                    <span class="txt-grey" v-if="badd.preference == '1'">
                                        @{{badd.street}} <br>
                                        @{{badd.house_number}} <br>
                                        @{{badd.place}} <br>
                                        @{{badd.postcode}} <br>
                                        <br>
                                    </span>
                                </div>
                            </div>
                            <div class="uk-width-expand@m uk-width-1-1@s">
                                <div class="uk-position-relative height100">
                                    <a @click="addressOpen('billing')" class="custom-button roboto-bold position-bottom">
                                        ÄNDERN
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div v-if="billingaddress == null" class="uk-padding uk-text-center">
                            <a href="{{url('/profile')}}" class="custom-button roboto-bold">
                                Adresse hinzufügen
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br><br>
        <div class="uk-grid-match" uk-grid>
            <div class="uk-width-auto@m uk-width-1-1@s grid-center">
                <div>
                    <a uk-switcher-item="previous" class="custom-button roboto-bold">
                        ZURÜCK
                    </a>
                </div>
            </div>
            <div class="uk-width-expand@m uk-width-1-1@s grid-center">
                <div class="uk-text-center">
                    <span>
                        Du brauchst Hilfe? Rufe uns jetzt unter 0800 / 11234567 an.
                    </span>
                </div>
            </div>
            <div class="uk-width-auto@m uk-width-1-1@s grid-center">
                <div>
                    <a class="custom-button-orange roboto-bold" @click="checkAddress()">
                        WEITER
                    </a>
                </div>
            </div>
        </div>
    </div>




    <div v-if="address_info_delivery">
        <div class="uk-text-center">
            <h3 class="txt-blue robotoslab-regular">
                Lieferadresse
            </h3>


            <div class="form-padding uk-text-left">
                <ul class="uk-list uk-list-divider">
                    <li v-for="dadd in deliveryaddress">
                        <div>
                            <div class="uk-alert-success" uk-alert v-if="deliveryaddresssuccessmsg">
                                <a class="uk-alert-close" uk-close></a>
                                <p>Adresse erfolgreich aktualisiert.</p>
                            </div>
                            <div uk-grid>
                                <div class="uk-width-auto">
                                    <div v-if="dadd.preference == 1">
                                        <input class="uk-radio" type="radio" checked name="radio2" @click="setPrefrence('delivery',dadd.id)">
                                    </div>
                                    <div v-if="dadd.preference != 1">
                                        <input class="uk-radio" type="radio" name="radio2" @click="setPrefrence('delivery',dadd.id)">
                                    </div>
                                </div>
                                <div class="uk-width-expand ">
                                    <div id="address-form-fix">
                                        <span class="font0_8">
                                            @{{dadd.firstname}} @{{dadd.lastname}}<br>
                                            @{{dadd.company_name}} <br>
                                            @{{dadd.street}} <br>
                                            @{{dadd.house_number}} <br>
                                            @{{dadd.place}} <br>
                                            @{{dadd.postcode}}
                                        </span>
                                    </div>
                                </div>
                                <div class="uk-width-auto">
                                    <div>
                                        <a class="uk-icon-button edit-icon" @click="editAddress('delivery',dadd.id)">
                                            <img src="{{url('/assets/png/frontend/edit.png')}}" width="60%" alt="edit">
                                        </a>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="form-address" v-if="dadd.id == formdeliveryid">
                            <h5 class="txt-blue roboto-bold">
                                Adresse bearbeiten
                            </h5>
                            <div>
                                <form v-on:submit.prevent="updateDelivery(dadd,'delivery')">

                                    <div class="uk-child-width-1-2@m uk-child-width-1-1@s" uk-grid>
                                        <div>
                                            <label>Andrede*</label> <br />
                                            <select name="title" id="title" class="uk-width-1-1 uk-select">
                                                <option value="Mr">MR</option>
                                                <option value="Mrs">MRS</option>
                                                <option value="Divorce">DIVR</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div>
                                        <label>First Name*</label> <br />
                                        <input type="text" name="firstname" id="firstname" class="uk-width-1-1" v-model="dadd.firstname">
                                    </div>
                                    <div>
                                        <label>Last Name*</label> <br />
                                        <input type="text" name="lastname" id="lastname" class="uk-width-1-1"
                                            v-model="dadd.lastname">
                                    </div>
                                    <div>
                                        <label>Straße*</label> <br />
                                        <input type="text" name="street" id="street" class="uk-width-1-1" v-model="dadd.street">
                                    </div>
                                    <div>
                                        <label>Hausnummer</label> <br />
                                        <input type="text" name="house_number" id="house_number" class="uk-width-1-1" v-model="dadd.house_number">
                                    </div>
                                    <div>
                                        <label>Postleitzahl*</label> <br />
                                        <input type="text" name="postcode" id="postcode" class="uk-width-1-1" v-model="dadd.postcode">
                                    </div>
                                    <div>
                                        <label>Platz*</label> <br />
                                        <input type="text" name="place" id="place" class="uk-width-1-1" v-model="dadd.place">
                                    </div>
                                    <div>
                                        <div class="uk-child-width-1-2@m uk-child-width-1-1@s" uk-grid>
                                            <div>
                                                <div>
                                                    <a @click="backAddress()" class="custom-button font0_8">
                                                        ENTFERNEN
                                                    </a>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="uk-text-right">
                                                    <button class="custom-button font0_8">SPEICHERN</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="uk-grid-match" uk-grid>
            <div class="uk-width-1-5@m uk-width-1-1@s">
                <div>
                    <a href="{{url('/profile')}}" class="custom-button roboto-bold">
                        Adresse hinzufügen
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
                    <a @click="backAddress()" class="custom-button-orange roboto-bold">
                        ZURÜCK
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div v-if="address_info_billing">
        <div class="uk-text-center">
            <h3 class="txt-blue robotoslab-regular">
                Rechnungsadresse
            </h3>

            <div class="form-padding uk-text-left">
                <ul class="uk-list uk-list-divider">

                    <li v-for="badd in billingaddress">
                        <div>
                            <div class="uk-alert-success" uk-alert v-if="billingaddresssuccessmsg">
                                <a class="uk-alert-close" uk-close></a>
                                <p>Adresse erfolgreich aktualisiert.</p>
                            </div>
                            <div uk-grid>
                                <div class="uk-width-auto">
                                    <div v-if="badd.preference == 1">
                                        <input class="uk-radio" type="radio" checked name="radio2"
                                            @click="setPrefrence('billing',badd.id)">
                                    </div>
                                    <div v-if="badd.preference != 1">
                                        <input class="uk-radio" type="radio" name="radio2"
                                            @click="setPrefrence('billing',badd.id)">
                                    </div>
                                </div>
                                <div class="uk-width-expand ">
                                    <div id="address-form-fix">
                                        <span class="font0_8">
                                            @{{badd.street}} <br>
                                            @{{badd.house_number}} <br>
                                            @{{badd.place}} <br>
                                            @{{badd.postcode}}
                                        </span>
                                    </div>
                                </div>
                                <div class="uk-width-auto">
                                    <div>
                                        <a class="uk-icon-button edit-icon" @click="editAddress('billing',badd.id)">
                                            <img src="{{url('/assets/png/frontend/edit.png')}}" width="60%" alt="edit">
                                        </a>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="form-address" v-if="badd.id == formbillingid">
                            <h5 class="txt-blue roboto-bold">
                                Adresse bearbeiten5
                            </h5>
                            <div>
                                <form v-on:submit.prevent="updateBilling(badd,'billing')">
                                    <div>
                                        <label>Straße*</label> <br />
                                        <input type="text" name="street" id="street" class="uk-width-1-1"
                                            v-model="badd.street" value="1">
                                    </div>
                                    <div>
                                        <label>Hausnummer</label> <br />
                                        <input type="text" name="house_number" id="house_number" class="uk-width-1-1"
                                            v-model="badd.house_number">
                                    </div>
                                    <div>
                                        <label>Postleitzahl*</label> <br />
                                        <input type="text" name="postcode" id="postcode" class="uk-width-1-1"
                                            v-model="badd.postcode">
                                    </div>
                                    <div>
                                        <label>Platz*</label> <br />
                                        <input type="text" name="place" id="place" class="uk-width-1-1"
                                            v-model="badd.place">
                                    </div>
                                    <div>
                                        <div class="uk-child-width-1-2@m uk-child-width-1-1@s" uk-grid>
                                            <div>
                                                <div>
                                                    <a @click="backAddress()" class="custom-button font0_8">
                                                        ENTFERNEN
                                                    </a>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="uk-text-right">
                                                    <button class="custom-button font0_8">SPEICHERN</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="uk-grid-match" uk-grid>
            <div class="uk-width-1-5@m uk-width-1-1@s">
                <div>
                    <a href="{{url('/profile')}}" class="custom-button roboto-bold">
                        Adresse hinzufügen
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
                    <a @click="backAddress()" class="custom-button-orange roboto-bold">
                        ZURÜCK
                    </a>
                </div>
            </div>
        </div>
    </div>


</div>
@push('js')

@endpush
