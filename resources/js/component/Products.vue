<template>
  <div class="uk-child-width-1-2@m uk-child-width-1-1@s" uk-grid>
    <div>
      <div>
        <div class="uk-text-right" v-if="loaded">
          <img v-bind:src="url+'/storage/'+product.image" width="90" alt="product" />
        </div>
        <div class="uk-position-relative" uk-slideshow="animation: fade">
          <ul class="uk-slideshow-items product-image">
            <li v-for="img in productimages" :key="img">
              <div>
                <img v-bind:src="url+'/storage/'+img.filename" style="5px" alt="product" />
              </div>
            </li>
          </ul>

          <div class="uk-position-small">
            <ul class="uk-thumbnav">
              <li
                v-bind:uk-slideshow-item="index"
                v-for="(img,name, index) in productimages"
                :key="img"
              >
                <a href="#" class="uk-text-center hover-underline-none">
                  <img v-bind:src="url+'/storage/'+img.filename" width="100" alt="product" />
                  <br />
                  <span>13mm</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="padd-left">
      <div v-if="loaded">
        <span id="successMsg" style="color:green;"></span>

        <h3
          class="txt-blue roboto-slab-regular"
          :id="subprodetail.article_name"
        >{{subprodetail.article_name}}</h3>
        <br />
        <div style="margin-top:-30px;">
          <div style="margin-left:0px!important;">
            <div
              class="small-left-padding"
              v-for="i in startcount"
              v-bind:key="i"
              style="display:inline;"
            >
              <a class="staratag" v-if="i <= parseInt(average_rating)">
                <img v-bind:src="url+'/assets/png/frontend/starfilled.png'" width="20" alt="starfilled" />
              </a>

              <a class="staratag" v-else>
                <img v-bind:src="url+'/assets/png/frontend/starempty.png'" width="20" alt="starempty" />
              </a>
            </div>
          </div>
        </div>
        <br />
        <div>
          <div class="uk-inline">
            <h3
              class="txt-blue roboto-bold"
              style="margin-bottom:0px;"
              id="subproduct_price"
            >{{subprodetail.price}} €</h3>
          </div>
          <div class="uk-inline">
            <div
              class="txt-blue font0_8 uk-position-relative"
            >&nbsp; inkl. {{product.vat}} % MwSt. zzgl. Versandkosten</div>
          </div>
        </div>
        <br />
        <span class="font0_8 roboto-bold txt-blue">Größe auswählen:</span>
        <span class="font0_8 txt-blue">Kanülenlänge / Schlauchlänge</span>
        <br />
        <br />
        <div class="uk-child-width-1-4 grid-padd new-margin" uk-grid>
          <div v-for="subp in subproducts" :key="subp">
            <div v-if="subp.id == subprodetail.id">
              <a class="blue-card-focus" v-on:click="subproductdetail(subp.id)">
                <div>
                  {{subp.cannula_length}} mm
                  <br />–
                  <br />
                  {{subp.house_length}} cm
                </div>
              </a>
            </div>
            <div v-if="subp.id != subprodetail.id">
              <a class="blue-card-notfocus" v-on:click="subproductdetail(subp.id)">
                <div>
                  {{subp.cannula_length}} mm
                  <br />–
                  <br />
                  {{subp.house_length}} cm
                </div>
              </a>
            </div>
          </div>
        </div>
        <br />
        <span class="font0_8 roboto-bold txt-blue">Inhalt :</span>
        <span class="font0_8 txt-blue">10 Stück (1,23 € * / 1 Stück)</span>
        <br />
        <br />
        <div class="uk-child-width-1-2@m uk-child-width-1-1@s" uk-grid>
          <div class="grid-center">
            <div v-for="subcart in subproducts" :key="subcart">
              <div v-if="check == 'exist' && subcart.id == subprodetail.id">
                <div v-for="car in subproductcarts" :key="car">
                  <select
                    v-if="car.sub_product_id == subprodetail.id"
                    name="payment_opt"
                    class="uk-select inner-padding-select txt-blue font0_8 uk-text-center"
                    @change="changePaymentopt($event)"
                  >
                    <option
                      value="mit_kassenrezept"
                      :selected="(car.payment_opt == 'mit_kassenrezept')"
                    >Mit Kassenrezept</option>
                    <option
                      value="mit_privatrezept"
                      :selected="(car.payment_opt == 'mit_privatrezept')"
                    >Mit Privatrezept</option>
                    <option
                      value="selbstzahler"
                      :selected="(car.payment_opt == 'selbstzahler')"
                    >Selbstzahler</option>
                  </select>
                </div>
              </div>
              <div v-if="check == 'notexist' && subcart.id == subprodetail.id">
                <select
                  name="payment_opt"
                  class="uk-select inner-padding-select txt-blue font0_8 uk-text-center"
                  @change="changePaymentopt($event)"
                >
                  <option value="mit_kassenrezept">Mit Kassenrezept</option>
                  <option value="mit_privatrezept">Mit Privatrezept</option>
                  <option value="selbstzahler">Selbstzahler</option>
                </select>
              </div>
            </div>

            <!-- <div v-if="cartempty">
              <select
                name="payment_opt"
                class="uk-select inner-padding-select txt-blue font0_8 uk-text-center"
                @change="changePaymentopt($event)"
              >
                <option value="mit_kassenrezept">Mit Kassenrezept</option>
                <option value="mit_privatrezept">Mit Privatrezept</option>
                <option value="selbstzahler">Selbstzahler</option>
              </select>
            </div>-->
          </div>
          <!-- <div v-if="check == 'notexist'">
            <select
              name="payment_opt"
              class="uk-select inner-padding-select txt-blue font0_8 uk-text-center"
              @change="changePaymentopt($event)"
            >
              <option value="mit_kassenrezept">Mit Kassenrezept</option>
              <option value="mit_privatrezept">Mit Privatrezept</option>
              <option value="selbstzahler">Selbstzahler</option>
            </select>
          </div>-->
          <div class="grid-center">
            <div uk-grid>
              <div class="uk-width-auto grid-center">
                <img v-bind:src="url+'/assets/png/frontend/greencircle.png'" width="20" alt="green" />
              </div>
              <div class="uk-width-expand" style="padding-left: 10px!important">
                <span class="font0_8 txt-blue">Lieferzeit ca. 3-5 Werktage</span>
              </div>
            </div>
          </div>
        </div>
        <br />
        <br />
        <div v-if="subprodetail.inventory == 0" class="uk-text-center uk-padding">
          <h6 class="txt-blue roboto-slab-regular">Out of stock</h6>
        </div>
        <div v-if="subprodetail.inventory != 0">
          <div v-if="check == 'notexist'">
            <div>
              <a class="custom-button uk-width-1-1" @click="addCart()">
                IN DEN WARENKORB &nbsp;
                <span uk-icon="icon:cart" class="wh"></span>
              </a>
            </div>
          </div>
          <div v-if="check == 'exist'">
            <div v-for="car in subproductcarts" :key="car">
              <div class="grid-center" v-if="car.sub_product_id == subprodetail.id">
                <div class="number-spinner" style="padding-left:30%" uk-grid>
                  <div class="uk-width-auto">
                    <div>
                      <button
                        class="butoncoveringanimg"
                        data-dir="dwn"
                        id="minus"
                        @click="AddDecQuantity(car.quantity,car.id,'dec')"
                      >
                        <img
                          v-bind:src="url+'/assets/png/frontend/minus.png'"
                          alt="minus"
                          width="20"
                        />
                      </button>
                    </div>
                  </div>
                  <div class="uk-width-auto" style="padding-left:20px">
                    <div>
                      <input
                        type="tel"
                        class="quantityofcart uk-text-center"
                        v-bind:value="car.quantity"
                      />
                    </div>
                  </div>
                  <div class="uk-width-auto" style="padding-left:20px">
                    <div>
                      <button class="butoncoveringanimg" data-dir="up" id="plus">
                        <img
                          v-bind:src="url+'/assets/png/frontend/plus.png'"
                          alt="plus"
                          width="20"
                          @click="AddDecQuantity(car.quantity,car.id,'inc')"
                        />
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>


<script lang="ts">
import Vue from "vue";
import { Component, Prop, Emit } from "vue-property-decorator";
import axios from "axios";
import { cartBus } from "./main";
import { baseurl } from "./main";

@Component
export default class Products extends Vue {
  product: any;
  subproduct: any;
  carts: any;
  subproductdetails: any;
  subpr_id: any;
  product_id: any;
  product_price: any;
  subprname: any;
  subprprice: any;
  subprodetail: any = "";
  productimages: any;
  check: any;
  subproductcarts: any;
  subproducts: any;
  payment_option: any;
  loaded: boolean = false;
  cartempty: boolean;
  url = baseurl;
  average_rating = 0;
  startcount = 5;

  @Prop({ required: true }) readonly detailsurl: string;
  @Prop({ required: true }) readonly subproducturl: string;
  @Prop({ required: true }) readonly carturl: string;
  @Prop({ required: true }) readonly quantityurl: string;

  mounted() {
    this.loadData();
    cartBus.$on("cartDeleted", () => {
      this.loadData();
    });
  }

  loadData() {
    this.subproductcarts = [];
    axios
      .get(this.detailsurl)
      .then(response => {
        //console.log(response)
        this.product = response.data.product;
        this.average_rating = response.data.product.average_rating;
        // console.log(this.average_rating);
        this.productimages = response.data.product_images;
        this.subproductcarts = response.data.carts;
        this.subproducts = response.data.subproducts;
        this.payment_option = "";
        var cart = Object.values(
          JSON.parse(JSON.stringify(this.subproductcarts))
        );
        this.cartempty = !cart.length;

        var sub = Object.values(JSON.parse(JSON.stringify(this.subproducts)));

        sub.every((subp: any) => {
          let pro_id;
          if (this.subprodetail == "") {
            pro_id = subp.id;
          } else {
            pro_id = this.subprodetail.id;
          }
          this.subproductdetail(pro_id);
          return false;
        });
      })
      .catch(function(error) {});
  }

  changePaymentopt(event) {
    this.payment_option = event.target.value;
  }

  subproductdetail(subproduct_id) {
    // console.log(subproduct_id);
    axios
      .get(this.subproducturl + subproduct_id)
      .then(response => {
        // console.log(response)
        this.subprodetail = response.data.subproducts;
        this.loaded = true;
        this.check = response.data.check;
        // console.log(this.check);
        this.$forceUpdate();
      })
      .catch(function(error) {
        console.log(error);
      });
  }

  addCart() {
    let pay_opt;
    if (this.payment_option == "") {
      pay_opt = "mit_kassenrezept";
    } else {
      pay_opt = this.payment_option;
    }
    let sub_id = this.subprodetail.id;
    axios
      .post(this.carturl, {
        sub_id: this.subprodetail.id,
        pro_id: this.subprodetail.product_id,
        pro_price: this.subprodetail.price,
        pay_option: pay_opt
      })
      .then(response => {
        this.check = "exist";
        cartBus.$emit("cartUpdated");
        this.loadData();
        //@ts-ignore
        //Cart.loadData();
      })
      .catch(function(error) {});
  }

  AddDecQuantity(quantity, cartid, status) {
    if (quantity == 1 && status == "dec") {
      // console.log("not exist called");
      this.check = "notexist";
      cartBus.$emit("cartZero", cartid);
      this.$forceUpdate();
    } else {
      if (quantity >= 0) {
        let pay_opt;
        if (this.payment_option == "") {
          pay_opt = "mit_kassenrezept";
          this.$forceUpdate();
        } else {
          pay_opt = this.payment_option;
          this.$forceUpdate();
        }

        axios
          .post(this.quantityurl, {
            quan: quantity,
            id: cartid,
            type: status,
            pay_option: pay_opt
          })
          .then(response => {
            // console.log(response);
            //this.product = response.data.product;
            //this.productimages = response.data.product_images;
            this.subproductcarts = response.data.carts;
            this.$forceUpdate();
            cartBus.$emit("cartUpdated");
            this.$forceUpdate();
          })
          .catch(function(error) {
            console.log(error);
          });
        this.$forceUpdate();
      }
    }
  }
}
</script>



<style lang="css">
</style>