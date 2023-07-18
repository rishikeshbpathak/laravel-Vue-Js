<template>
  <div class="cart-main uk-text-center uk-padding">
    <h3 class="txt-blue roboto-slab-regular">Warenkorb</h3>
    <div v-if="loggedin">
      <ul class="uk-list uk-list-divider">
        <li v-for="cart in carts" :key="cart">
          <div uk-grid class="uk-grid-match">
            <div class="uk-width-1-3 grid-center">
              <div class="uk-width-1-1">
                <div class="shop-card">
                  <div>
                    <img
                      v-bind:src="url+'/storage/'+cart.feature_img"
                      alt
                      class="uk-position-center"
                    />
                  </div>
                </div>
              </div>
            </div>
            <div class="uk-width-expand grid-center small-left-padding">
              <div class="uk-text-left">
                <span class="txt-blue font0_8">{{cart.article_name}}</span>
              </div>
            </div>
            <div class="uk-width-auto grid-center small-left-padding">
              <div>
                <span class="font0_8">x {{cart.quantity}}</span>
              </div>
            </div>
            <div class="uk-width-auto grid-center small-left-padding">
              <div>
                <a href="#" @click="deleteCartItem(cart.cart_id)">
                  <img v-bind:src="url+'/assets/png/frontend/delete.png'" width="20" alt="cart" />
                </a>
              </div>
            </div>
          </div>
        </li>
      </ul>

      <a
        :href="url+'/checkout'"
        class="custom-button atag uk-width-1-1"
        v-if="carts.length> 0"
      >BEZAHLEN</a>
      <a
        href="#"
        class="custom-button atag uk-width-1-1"
        v-if="carts.length == 0"
      >Einkaufswagen ist leer</a>
    </div>
    <div v-if="!loggedin">
      <p class="center">
        Der Warenkorb ist nur
        <br />sichtbar, wenn Sie
        <br />angemeldet sind.
      </p>
      <a class="custom-button atag uk-width-1-1 roboto">JETZT ANMELDEN</a>
    </div>
  </div>
</template>



<script lang="ts">
import Vue from "vue";
import axios from "axios";
import { Component, Prop, Watch } from "vue-property-decorator";
import { cartBus } from "./main";
import { baseurl } from "./main";

@Component
export default class Cartmobile extends Vue {
  carts: any;
  loaded = false;
  url = baseurl;
  @Prop({ required: true }) readonly geturl: string;
  @Prop({ required: true }) readonly deleteurl: string;
  @Prop({ required: true }) readonly loggedin: boolean;

  created() {
    this.loadData();
    cartBus.$on("cartUpdated", () => {
      this.loadData();
    });
    cartBus.$on("cartZero", id => {
      this.deleteCartItem(id);
    });
  }

  loadData() {
    this.carts = [];
    axios
      .get(this.geturl)
      .then(response => {
        this.loaded = true;
        this.carts = response.data.carts;
        // console.log(this.carts);
        this.$forceUpdate();
      })
      .catch(function(error) {
        this.carts = "An error occured " + error;
      });
  }

  deleteCartItem(cart_id) {
    axios
      .get(this.deleteurl + cart_id)
      .then(response => {
        this.carts = response.data;
        //console.log(this.carts);
        this.loadData();
        cartBus.$emit("cartDeleted");
      })
      .catch(function(error) {
        this.carts = "An error occured " + error;
      });
  }
}
</script>


<style lang="css">
/* .cart-main {
  margin-top: 0px !important;
  border: none !important;
} */
</style>