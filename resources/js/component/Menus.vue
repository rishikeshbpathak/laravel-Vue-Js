<template>
  <nav class="uk-navbar-container uk-navbar-transparent des" uk-navbar>
    <div class="uk-navbar-center">
      <ul class="uk-navbar-nav">
        <li v-for="catagory in catagories" :key="catagory">
          <a
            class="navlink"
            v-bind:uk-toggle="'target:#' +catagory.name + ';mode: hover'"
            v-bind:href="url+'/kategorie/'+ catagory.name"
          >{{ catagory.name }}</a>
          <div
            v-bind:uk-toggle="'target:#' +catagory.name + ';mode: hover'"
            class="hidden-top-white"
          >
            <br />
          </div>
          <div
            v-bind:uk-toggle="'target:#' + catagory.name + ';mode: hover'"
            v-bind:id="catagory.name"
            hidden
          >
            <div v-for="product in products" :key="product">
              <div v-if="catagory.id == product.category_id">
                <div class="absolute-width100">
                  <div class="hidden-hover-links">
                    <a v-bind:href="url+'/produkt/'+product.article_name">{{ product.article_name }}</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </nav>
</template>


<script lang="ts">
import Vue from "vue";
import axios from "axios";
import { Component, Prop } from "vue-property-decorator";
import { baseurl } from "./main";

@Component
export default class Menus extends Vue {
  @Prop({ required: true }) readonly geturl: string;

  name: any;
  catagories: any = [];
  products: any = [];
  url = baseurl;

  created() {
    //this.cat_menus = "Loading";
    axios
      .get(this.geturl)
      .then(response => {
        this.catagories = response.data.cat_menus;
        this.products = response.data.prod_menus;
      })
      .catch(function(error) {
        console.log(error);
      });
  }
}
</script>

