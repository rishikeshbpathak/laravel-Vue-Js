<template>
  <form @submit="submitForm">
    <input
      type="email"
      v-model="email"
      placeholder="Geben Sie eine E-Mail-ID ein"
      class="emailinput center"
    />

    <div class="uk-alert-danger" uk-alert v-if="errormsg">
      <a class="uk-alert-close" uk-close></a>
      <p>{{message}}</p>
    </div>
    <div class="uk-alert-danger" uk-alert v-if="errormsg1">
      <a class="uk-alert-close" uk-close></a>
      <p>{{message}}</p>
    </div>
    <div class="uk-alert-success" uk-alert v-if="successmsg">
      <a class="uk-alert-close" uk-close></a>
      <p>{{message}}</p>
    </div>

    <br />
    <br />

    <button class="buttonnewsletter">JETZT FÜR DEN NEWSLETTER ANMELDEN</button>
  </form>
</template>


<script lang="ts">
import Vue from "vue";
import { Component, Prop } from "vue-property-decorator";
import axios from "axios";

@Component
export default class Subscribe extends Vue {
  email: string;
  successmsg: boolean = false;
  errormsg: boolean = false;
  errormsg1: boolean = false;
  message: string;

  @Prop({ required: true }) readonly storeurl: string;

  created() {}

  submitForm(e) {
    e.preventDefault();

    if (this.email == undefined) {
      this.errormsg1 = false;
      this.errormsg = true;
      this.message = "E-Mail-Feld ist erforderlich.";
    } else {
      axios
        .post(this.storeurl, {
          email: this.email
        })
        .then(response => {
          console.log(response.data);
          if (response.data == "success") {
            this.errormsg = false;
            this.errormsg1 = false;
            this.successmsg = true;
            this.message = "Erfolgreich abonniert.";
            //   this.successStatus = "Adresse erfolgreich hinzugefügt.";
            //   this.loadAddressDetails();
            this.email = "";
          } else {
            this.errormsg = false;
            this.errormsg1 = true;
            this.message = "Bereits abonniert.";
          }
        })
        .catch(function(error) {});
      // e.preventDefault();
    }
  }
}
</script>



<style lang="css">
</style>