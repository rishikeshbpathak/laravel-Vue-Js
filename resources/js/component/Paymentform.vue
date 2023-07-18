<template>
    <form action="http://localhost/vital-aire/stripe/store" method="POST"  id="payment-form" @submit.prevent="pay()">
      <div class="form-group">
          <label for="email">Email Address</label>
          <input type="email" class="form-control" id="email">
      </div>

      <div class="form-group">
          <label for="name_on_card">Name on Card</label>
          <input type="text" class="form-control" id="name_on_card" name="name_on_card" v-model="name_on_card">
      </div>

      <!--<div class="row">
          <div class="col-md-6">
              <div class="form-group">
                  <label for="address">Address</label>
                  <input type="text" class="form-control" id="address" name="address">
              </div>
          </div>

          <div class="col-md-3">
              <div class="form-group">
                  <label for="city">City</label>
                  <input type="text" class="form-control" id="city" name="city">
              </div>
          </div>

          <div class="col-md-3">
              <div class="form-group">
                  <label for="province">Province</label>
                  <input type="text" class="form-control" id="province" name="province">
              </div>
          </div>

      </div>

      <div class="row">
          <div class="col-md-4">
              <div class="form-group">
                  <label for="postalcode">Postal Code</label>
                  <input type="text" class="form-control" id="postalcode" name="postalcode">
              </div>
          </div>

          <div class="col-md-4">
              <div class="form-group">
                  <label for="country">Country</label>
                  <input type="text" class="form-control" id="country" name="country">
              </div>
          </div>

          <div class="col-md-4">
              <div class="form-group">
                  <label for="phone">Phone</label>
                  <input type="text" class="form-control" id="phone" name="phone">
              </div>
          </div>

      </div>-->

      <div class="form-group">
          <label for="card-element">Credit Card</label>
          <card class='stripe-card'
          :class='{ complete }'
          stripe='pk_test_JKVJPMynL8ckk7ivBxoroTlT'
          :options='stripeOptions'
          @change='change($event)'
        />
        <div id="card-errors" role="alert" v-text="errorMessage"></div>
      </div>

      <!-- 
      CSRF Field 
      <input type="hidden" name="_token" :value="csrf">
      -->
      

      <div class="spacer"></div>

      <button style="display:block;margin:auto;" type="submit" class="btn btn-success">Pay Now</button>
  </form>
</template>

<script lang="ts">
    import Vue from "vue";
    import { Component, Prop } from "vue-property-decorator";
    import axios from "axios";
    import { createToken, Card } from 'vue-stripe-elements-plus'

    export default {


components: { Card },

        data () {
            return {
              complete: false,
              name_on_card: '',
              errorMessage: '',
              stripeOptions: {
                // see https://stripe.com/docs/stripe.js#element-options for details
                style: {
                  base: {
                    color: '#32325d',
                    lineHeight: '18px',
                    fontFamily: '"Raleway", Helvetica, sans-serif',
                    fontSmoothing: 'antialiased',
                    fontSize: '16px',
                    '::placeholder': {
                      color: '#aab7c4'
                    }
                  },
                  invalid: {
                    color: '#fa755a',
                    iconColor: '#fa755a'
                  }
                },
                hidePostalCode: true
            }
          }
        },

        methods: {
            pay () {

                createToken().then(data => console.log(data.token));
              // createToken returns a Promise which resolves in a result object with
              // either a token or an error key.
              // See https://stripe.com/docs/api#tokens for the token object.
              // See https://stripe.com/docs/api#errors for the error object.
              // More general https://stripe.com/docs/stripe.js#stripe-create-token.


              var options = {
                name: this.name_on_card,
              }
              createToken(options).then(result => {
                // var form = document.getElementById('payment-form');
                var hiddenInput = document.createElement('input');
                hiddenInput.setAttribute('type', 'hidden');
                hiddenInput.setAttribute('name', 'stripeToken');
                hiddenInput.setAttribute('value', result.token.id);

                this.$el.appendChild(hiddenInput);

                // Submit the form
                this.$el.submit();
              })
            },

            change(event) {
                // if (event.error) {
                //   this.errorMessage = event.error.message;
                // } else {
                //   this.errorMessage = ''
                // }

                this.errorMessage = event.error ? event.error.message : ''
            }
      }
    }
</script>

<style lang="css">
.stripe-card {
        border: solid 1px lightgray;
        height: 39px;
        padding: 10px;
        border-radius: 6px;
    }
</style>