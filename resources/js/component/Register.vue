<template>
  <div>
    <ul
      class="uk-subnav uk-subnav-pill uk-child-width-1-2 uk-text-center form-switch uk-grid-match"
      uk-grid
      uk-switcher
    >
      <li>
        <a href="#">Ich bin Patient</a>
      </li>
      <li>
        <a href="#">Ich bin Patientenbetreuer</a>
      </li>
    </ul>
    <br />
    <ul class="uk-switcher uk-margin" id="registration">
      <li>
        <h4 class="txt-blue roboto-slab-regular">Ihre persönlichen Daten</h4>

        <form @submit="passwordValidate" method="POST" :action="storeurl">
          <div class="uk-child-width-1-2@m uk-child-width-1-1@s" uk-grid>
            <div>
              <label>Seriennummer der Pumpe*</label>
              <br />
              <input
                type="text"
                name="serial_number"
                class="uk-width-1-1 margin-top-input"
                v-model="serialNumber"
                v-on:blur="getPatientName"
                required
              />
            </div>
            <div>
              <!-- <label>Andrede*</label>
              <br />
              <select name="speech" class="uk-width-1-1 uk-select" required>
                <option value="Mr">MR</option>
                <option value="Mrs">MRS</option>
                <option value="divorce">DIVR</option>
              </select>-->
            </div>
          </div>
          <div class="uk-child-width-1-2@m uk-child-width-1-1@s" uk-grid>
            <div>
              <label>Andrede*</label>
              <br />
              <select name="speech" class="uk-width-1-1 uk-select margin-top-input" required>
                <option value="Mr">MR</option>
                <option value="Mrs">MRS</option>
                <option value="divorce">DIVR</option>
              </select>
            </div>
            <div>
              <label>Titel</label>
              <br />
              <input
                type="text"
                name="titel"
                id="titel"
                class="uk-width-1-1 margin-top-input"
                v-model="titel"
              />
            </div>
          </div>
          <div>
            <label>Vorname*</label>
            <br />
            <input
              type="text"
              name="firstname"
              class="uk-width-1-1 margin-top-input"
              v-model="firstName"
              required
              readonly
            />
          </div>
          <div>
            <label>Nachname*</label>
            <br />
            <input
              type="text"
              name="surname"
              class="uk-width-1-1 margin-top-input"
              v-model="lastName"
              required
              readonly
            />
          </div>
          <div>
            <label>Gebortstadum*</label>
            <br />
            <input type="date" name="dob" class="uk-width-1-2 margin-top-input" />
          </div>
          <div>
            <label>LandLine number</label>
            <br />
            <input
              type="text"
              name="landline"
              class="uk-width-1-2 margin-top-input"
              onkeypress="return isNumberKey(event)"
            />
          </div>
          <div>
            <label>Mobile Number*</label>
            <br />
            <input
              type="text"
              name="mobile"
              class="uk-width-1-2 margin-top-input"
              required
              onkeypress="return isNumberKey(event)"
            />
          </div>
          <div>
            <label>Insurance Type*</label>
            <br />
            <select class="form-control margin-top-input" name="insurance_type" required>
              <option value="Legal">Legal</option>
              <option value="Private">Private</option>
            </select>
          </div>
          <div>
            <label>E-mail*</label>
            <br />
            <input type="email" name="email" class="uk-width-1-1 margin-top-input" required />
          </div>
          <div>
            <label>Passwort*</label>
            <br />
            <input
              type="password"
              name="password"
              class="uk-width-1-1 margin-top-input"
              v-model="password"
              required
            />
          </div>
          <div>
            <label>Bestätige das Passwort*</label>
            <br />
            <input
              type="password"
              name="confirm_password"
              class="uk-width-1-1 margin-top-input"
              v-model="confirmPassword"
              required
            />
          </div>
          <span v-if="errPassword" style="color:red;">{{passwordStatus}}</span>
          <br />
          <br />
          <span class="font0_8">
            Mit Bestätigung der Schaltfläche “Jetzt Registrieren” willige ich darin ein, dass die VitalAire
            GmbH
            die von mir angegebenen personenbezogenen Daten zum Zwecke der Einrichtung und Verwaltung meines
            Nutzerkontos verarbeitet und speichert. Meine Einwilligung kann ich jederzeit ohne Angabe von
            Gründen per E-Mail an
            <a
              class="text-link"
              href="maiilto:datenschutz@vitalaire.de"
            >datenschutz@vitalaire.de</a>
            widerrufen. Bitte beachten Sie unsere
            <a
              class="text-link"
            >Datenschutzhinweise</a>.
          </span>
          <br />
          <br />
          <div
            class="g-recaptcha"
            name="g_recaptcha_response"
            data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"
          ></div>
          <br />
          <span id="errRecaptcha" style="color:red;"></span>
          <br />
          <!-- secret key: 6Lds3voUAAAAAAvrY3h6D3vq1hfge9JkN3dYDJqA -->
          <button class="custom-button">JETZT REGISTRIEREN</button>
        </form>
      </li>

      <li>
        <h4 class="txt-blue roboto-slab-regular">Daten der zu betreuenden Person</h4>
        <form :action="storeaurl" method="POST" @submit="passwordValidateForm">
          <div class="uk-child-width-1-2@m uk-child-width-1-1@s" uk-grid>
            <div>
              <label>Seriennummer der Pumpe*</label>
              <br />
              <input
                type="text"
                name="serial_number"
                id="serial_number"
                class="uk-width-1-1 margin-top-input"
                v-on:blur="getPatientName"
                v-model="serialNumber"
              />
            </div>
            <div>
              <!-- <label>Andrede*</label>
              <br />
              <select name="speech" id="speech" class="uk-width-1-1 uk-select">
                <option value="Mr">MR</option>
                <option value="Mrs">MRS</option>
                <option value="divorce">DIVR</option>
              </select>-->
            </div>
          </div>
          <div class="uk-child-width-1-2@m uk-child-width-1-1@s" uk-grid>
            <div>
              <label>Andrede*</label>
              <br />
              <select name="speech" id="speech" class="uk-width-1-1 margin-top-input uk-select">
                <option value="Mr">MR</option>
                <option value="Mrs">MRS</option>
                <option value="divorce">DIVR</option>
              </select>
            </div>
            <div>
              <label>Titel</label>
              <br />
              <input
                type="text"
                name="titel"
                id="titel"
                class="uk-width-1-1 margin-top-input"
                v-model="titel"
              />
            </div>
          </div>
          <div>
            <label>Vorname*</label>
            <br />
            <input
              type="text"
              name="firstname"
              id="firstname"
              class="uk-width-1-1 margin-top-input"
              readonly
              v-model="firstName"
            />
          </div>
          <div>
            <label>Nachname*</label>
            <br />
            <input
              type="text"
              name="surname"
              id="surname"
              class="uk-width-1-1 margin-top-input"
              readonly
              v-model="lastName"
            />
          </div>
          <div>
            <label>Gebortstadum*</label>
            <br />
            <input type="date" name="dob" id="dob" class="uk-width-1-2 margin-top-input" />
          </div>
          <div>
            <label>LandLine number</label>
            <br />
            <input
              type="text"
              name="landline"
              id="landline"
              class="uk-width-1-2 margin-top-input"
              onkeypress="return isNumberKey(event)"
            />
          </div>
          <div>
            <label>Mobile Number*</label>
            <br />
            <input
              type="text"
              name="mobile"
              id="mobile"
              class="uk-width-1-2 margin-top-input"
              onkeypress="return isNumberKey(event)"
            />
          </div>
          <div>
            <label>Insurance Type*</label>
            <br />
            <select class="form-control margin-top-input" id="insurance_type" name="insurance_type">
              <option value="Legal">Legal</option>
              <option value="Private">Private</option>
            </select>
          </div>
          <div>
            <label>E-mail*</label>
            <br />
            <input type="email" name="email" id="email" class="uk-width-1-1 margin-top-input" />
          </div>

          <br />
          <br />
          <h4
            class="txt-blue roboto-slab-regular"
          >Daten des Patientenbetreuers/Erziehungsberechtigten</h4>

          <div class="uk-child-width-1-2@m uk-child-width-1-1@s" uk-grid>
            <div>
              <label>Andrede*</label>
              <br />
              <select name="caretaker_speech" id class="uk-width-1-1 margin-top-input uk-select">
                <option value="Mr">MR</option>
                <option value="Mrs">MRS</option>
                <option value="divorce">DIVRC</option>
              </select>
            </div>
            <div>
              <label>Titel</label>
              <br />
              <input
                type="text"
                name="caretaker_titel"
                id="caretaker_titel"
                class="uk-width-1-1 margin-top-input"
                v-model="caretaker_titel"
              />
            </div>
          </div>
          <div>
            <label>Vorname*</label>
            <br />
            <input
              type="text"
              name="caretaker_firstname"
              id="caretaker__firstname"
              class="uk-width-1-1 margin-top-input"
            />
          </div>
          <div>
            <label>Nachname*</label>
            <br />
            <input
              type="text"
              name="caretaker_lastname"
              id="caretaker_lastname"
              class="uk-width-1-1 margin-top-input"
            />
          </div>
          <div>
            <label>Gebortstadum*</label>
            <br />
            <input
              type="date"
              name="caretaker_dob"
              id="caretaker_dob"
              class="uk-width-1-2 margin-top-input"
            />
          </div>
          <div>
            <label>E-mail*</label>
            <br />
            <input
              type="email"
              name="caretaker_email"
              id="caretaker_email"
              class="uk-width-1-1 margin-top-input"
            />
          </div>
          <div>
            <label>Passwort*</label>
            <br />
            <input
              type="password"
              name="password"
              id="password"
              class="uk-width-1-1 margin-top-input"
              required
              v-model="caretaker_password"
            />
          </div>
          <div>
            <label>Bestätige das Passwort*</label>
            <br />
            <input
              type="password"
              name="confirm_password"
              id="confirm_password"
              class="uk-width-1-1 margin-top-input"
              required
              v-model="caretaker_confirmPassword"
            />
          </div>
          <span v-if="errPassword1" style="color:red;">{{passwordStatus}}</span>
          <br />
          <br />
          <span class="font0_8">
            Mit Bestätigung der Schaltfläche “Jetzt Registrieren” willige ich darin ein, dass die VitalAire GmbH
            die von mir angegebenen personenbezogenen Daten zum Zwecke der Einrichtung und Verwaltung meines
            Nutzerkontos verarbeitet und speichert. Meine Einwilligung kann ich jederzeit ohne Angabe von
            Gründen per E-Mail an
            <a
              class="text-link"
              href="maiilto:datenschutz@vitalaire.de"
            >datenschutz@vitalaire.de</a> widerrufen. Bitte beachten
            Sie unsere
            <a
              class="text-link"
            >Datenschutzhinweise</a>.
          </span>
          <br />
          <br />
          <div
            class="g-recaptcha"
            name="g_recaptcha_response"
            data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"
          ></div>
          <br />
          <span id="errRecaptcha1" style="color:red;"></span>
          <br />
          <button class="custom-button">JETZT REGISTRIEREN</button>
        </form>
      </li>
    </ul>
  </div>
</template>


<script lang="ts">
import Vue from "vue";
import { Component, Prop, Emit } from "vue-property-decorator";
import axios from "axios";
import { baseurl } from "./main";

@Component
export default class Register extends Vue {
  password: any;
  confirmPassword: any;
  caretaker_password: any;
  caretaker_confirmPassword: any;
  passwordStatus: any;
  serialNumber: any;
  firstName: any;
  lastName: any;
  errPassword: boolean = false;
  errPassword1: boolean = false;
  url = baseurl;
  @Prop({ required: true }) readonly storeurl: string;
  @Prop({ required: true }) readonly storeaurl: string;
  @Prop({ required: true }) readonly nameurl: string;

  async getPatientName() {
    await axios
      .get(this.nameurl + this.serialNumber)
      .then(response => {
        this.firstName = response.data.first_name;
        this.lastName = response.data.last_name;
        this.$forceUpdate();
      })
      .catch(function(error) {
        this.address = "An error occured " + error;
      });
  }

  async passwordValidate(event) {
    if (this.password != this.confirmPassword) {
      this.errPassword = true;
      this.errPassword1 = false;
      this.passwordStatus =
        "Ihr Passwort und Ihr Bestätigungspasswort stimmen nicht überein.";
      event.preventDefault();
      return false;
    }
    return true;
  }

  async passwordValidateForm(event) {
    this.errPassword1 = true;
    this.errPassword = false;
    if (this.caretaker_password != this.caretaker_confirmPassword) {
      this.passwordStatus =
        "Ihr Passwort und Ihr Bestätigungspasswort stimmen nicht überein.";
      event.preventDefault();
      return false;
    }
    // await axios
    //   .post(this.storeurl)
    //   .then(response => {
    //     console.log(response);
    //   })
    //   .catch(function(error) {
    //     this.address = "An error occured " + error;
    //   });
    return true;
  }
}
</script>



<style lang="css">
</style>