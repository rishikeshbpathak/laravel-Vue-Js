<template>
  <ul class="uk-nav uk-navbar-default">
    <a class="closeicon uk-offcanvas-close" href="#offcanvas-nav" uk-close></a>
    <br />
    <li v-for="catagory in catagories" :key="catagory">
      <a class v-bind:href="url+'/kategorie/'+ catagory.name">{{ catagory.name }}</a>
      <br />
    </li>
  </ul>
</template>


<script lang="ts">
import Vue from "vue";
import axios from "axios";
import { Component, Prop } from "vue-property-decorator";
import { baseurl } from "./main";

@Component
export default class Mobilemenu extends Vue {
  @Prop({ required: true }) readonly geturl: string;

  //   name: any;
  catagories: any = [];
  url = baseurl;

  created() {
    //this.cat_menus = "Loading";
    axios
      .get(this.geturl)
      .then(response => {
        this.catagories = response.data.cat_menus;
      })
      .catch(function(error) {
        console.log(error);
      });
  }
}
</script>




<style lang="css">
</style>