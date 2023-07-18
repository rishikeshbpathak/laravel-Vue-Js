<template>
  <div>
    <!-- <div class="nav-overlay">
      <a
        uk-icon="icon: search; ratio: 1.5"
        class="sideicons uk-navbar-toggle"
        uk-toggle="target: .nav-overlay; animation: uk-animation-fade"
      ></a>
    </div> -->

    <div class="nav-overlay top-margin">
      <div>
        <div class="uk-inline searchbarwidth" id="search_input">
          <form
            v-bind:action="baseurl + '/header/search'"
            class="uk-margin-remove"
            method="post"
          >
            <!-- <span
              class="uk-form-icon wh"
              style="justify-content: left;"
              uk-icon="icon: search; ratio: 1.2"
            ></span> -->
            <a
              class="uk-form-icon wh uk-form-icon-flip"
              uk-toggle="target: .search-hidden; animation: uk-animation-fade; cls: uk-invisible;"
            >
              <span
                class="search-hidden uk-invisible"
                uk-icon="icon: close; ratio: 2.0"
              ></span>
              <span uk-icon="icon: search; ratio: 3.0"></span>
            </a>
            <input
              class="uk-input search-input search-hidden uk-invisible"
              type="text"
              v-model="searchtext"
              placeholder="Suche"
              id="dropdownsearch"
              name="dropdownsearch"
            />
            <div
              uk-dropdown="mode: click; toggle: #dropdownsearch; pos: bottom-center; flip:false;"
              class="search-dropdwon uk-padding-remove-horizontal"
            >
              <div class="arrowsearch"></div>
              <div class="search-main uk-text-center uk-padding">
                <template v-if="searchtext">
                  <h3 class="txt-blue roboto-slab-regular">
                    {{ filteredPages.length }} Treffer
                  </h3>
                  <ul class="uk-list uk-list-divider">
                    <template v-for="(pages, index) in filteredPages">
                      <li v-if="index < 5" :key="pages + index">
                        <a
                          class="searchlist uk-text-left"
                          v-bind:href="baseurl + pages[1]"
                        >
                          <p
                            class="txt-blue roboto-slab-regular uk-margin-remove"
                          >
                            {{ pages[2] }}
                          </p>
                          <p class="font14 uk-margin-remove txt-blue">
                            https://vital.itinserts.de{{ pages[1] }}
                          </p>
                          <text-highlight
                            style="display: block"
                            :queries="searchtext"
                            :caseSensitive="false"
                            :highlightClass="bold"
                            >{{ pages[0] | snippet }}</text-highlight
                          >
                        </a>
                      </li>
                    </template>
                  </ul>
                  <button
                    :disabled="filteredPages.length == 0"
                    type="submit"
                    class="custom-button custom atag uk-width-1-1 roboto"
                  >
                    ALLE ERGEBNISSE ANZEIGEN
                  </button>
                </template>
                <template v-if="!searchtext">
                  <h3>
                    <h3 class="txt-blue roboto-slab-regular">0 Treffer</h3>
                  </h3>
                  <button
                    class="custom-button custom atag uk-width-1-1 roboto uk-disabled"
                  >
                    ALLE ERGEBNISSE ANZEIGEN
                  </button>
                </template>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>


<script lang="ts">
import Vue from "vue";
import { Component, Prop } from "vue-property-decorator";
import { baseurl } from "./main";
import Axios from "axios";
import TextHighlight from "vue-text-highlight";

@Component
export default class Search extends Vue {
  @Prop({ required: true }) readonly url: string;
  @Prop({ required: true }) readonly pageslist: string;

  name: any;
  baseurl = baseurl;
  searchtext: string = "";
  pages: any = [];

  created() {
    Vue.component("text-highlight", TextHighlight);
    Vue.filter("snippet", (value) => {
      var searchtextindex = value.search(this.searchtext);
      var startindex = searchtextindex - 30;
      console.log("value ", value);
      if (startindex < 0) {
        startindex = 0;
      }
      var endindex = searchtextindex + this.searchtext.length + 30;
      if (endindex < 0) {
        endindex = 0;
      }
      return value.slice(startindex, endindex);
    });
    this.loadproducts();
  }

  loadproducts() {
    Axios.get(this.pageslist)
      .then((response) => {
        // console.log("response search", response);
        // var parsedObj = JSON.parse(JSON.stringify(response.data.subproducts));
        // console.log(parsedObj);
        this.pages = Object.assign([], response.data);
        // console.log("pages search", this.pages);
      })
      .catch((error) => {
        console.log(error);
      });
  }

  get filteredPages() {
    return this.pages.filter((page) => {
      console.log("Pages", page);
      return page[0].toLowerCase().indexOf(this.searchtext.toLowerCase()) >= 0;
    });
  }
}
</script>



<style lang="css">
</style>