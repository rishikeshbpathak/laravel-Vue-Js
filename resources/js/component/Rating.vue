<template>
  <div>
    <div>
      <div class="uk-inline uk-width-1-3" style="padding-left: 30px">
        <div class="uk-child-width-1-5" uk-grid>
          <a class="small-left-padding" v-for="i in startcount" v-bind:key="i">
            <img
              class="stars"
              v-bind:src="url+'/assets/png/frontend/starfilled.png'"
              width="20"
              alt
              v-if="i <= parseInt(ratingvalue)"
              @click="getRatings(i)"
            />
            <img
              class="stars"
              v-bind:src="url+'/assets/png/frontend/starempty.png'"
              width="20"
              @click="getRatings(i)"
              alt
              v-else
            />
          </a>
        </div>
      </div>
    </div>

    <form @submit="submitReview" action="POST">
      <span class="txt-blue roboto-bold">Mit deiner Meinung hilfst du uns und anderen.</span>
      <br />
      <input type="hidden" v-model="ratingvalue" name="rating_value" id="rating_value" />
      <input type="hidden" name="user_id" v-model="loggedin" />
      <input type="hidden" name="product_id" v-model="productid" />
      <textarea class="rating-textarea" v-model="comments" rows="4"></textarea>
      <br />
      <br />
      <div class="uk-inline uk-form-controls">
        <label>
          <input class="uk-checkbox" type="checkbox" name="radio1" value="on" @click="setFirstname" />
          <span class="txt-blue">
            Zeige
            meinen Vornamen an
          </span>
        </label>
      </div>
      <br />
      <br />
      <button class="custom-button atag">BEWERTUNG ABSENDEN</button>
    </form>
  </div>
</template>


<script lang="ts">
import Vue from "vue";
import axios from "axios";
import { Component, Prop, Watch } from "vue-property-decorator";
import { cartBus } from "./main";
import { baseurl } from "./main";

@Component
export default class Rating extends Vue {
  ratingvalue = 0;
  url = baseurl;
  startcount = 5;
  comments: "";
  checkfirstname = "off";

  @Prop({ required: true }) readonly storeaurl: string;
  @Prop({ required: true }) readonly productid: boolean;
  @Prop({ required: true }) readonly loggedin: boolean;

  created() {}

  getRatings(id) {
    this.ratingvalue = id;
  }

  setFirstname(event) {
    this.checkfirstname = event.target.value;
  }

  submitReview(e) {
    e.preventDefault();
    axios
      .post(this.storeaurl, {
        product_id: this.productid,
        user_id: this.loggedin,
        rating: this.ratingvalue,
        comments: this.comments,
        radio1: this.checkfirstname
      })
      .then(response => {
        window.location.href = response.data;
      })
      .catch(function(error) {});
  }
}
</script>



<style lang="css">
</style>