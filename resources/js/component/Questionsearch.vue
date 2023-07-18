<template>
  <div class="uk-margin-remove">
    <input
      class="uk-input searchfield"
      type="text"
      v-model="searchtextquestions"
      placeholder="Was suchst Du?"
      id="dropdownsearchquestions"
      name="dropdownsearchquestions"
    />
    <div
      uk-dropdown="mode: click; toggle: #dropdownsearchquestions;pos: bottom-justify;flip:false;"
      class="search-dropdwon"
    >
      <div class="arrowsearch"></div>
      <div class="search-main uk-text-center uk-padding">
        <template v-if="searchtextquestions">
          <h3 class="txt-blue roboto-slab-regular">
            {{ filteredQuestions.length }} Treffer
          </h3>
          <ul class="uk-list uk-list-divider">
            <template v-for="(question, index) in filteredQuestions">
              <li v-if="index < 5" :key="question + index">
                <a
                  class="searchlist"
                  v-bind:href="baseurl + '/faq/question/' + question.url"
                >
                  <text-highlight
                    style="display: block"
                    :queries="searchtextquestions"
                    :caseSensitive="false"
                    :highlightClass="bold"
                  >
                    {{ question.question | snippet }}
                  </text-highlight>
                </a>
              </li>
            </template>
          </ul>
        </template>
        <template v-if="!searchtextquestions">
          <h3>
            <h3 class="txt-blue roboto-slab-regular">0 Treffer</h3>
          </h3>
        </template>
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
  @Prop({ required: true }) readonly questionslist: string;

  name: any;
  baseurl = baseurl;
  searchtextquestions: string = "";
  questions: any = [];

  created() {
    Vue.component("text-highlight", TextHighlight);
    Vue.filter("snippet", (value) => {
      var searchtextindex = value
        .toLowerCase()
        .search(this.searchtextquestions.toLowerCase());
      var startindex = searchtextindex - 30;
      if (startindex < 0) {
        startindex = 0;
      }
      var endindex = searchtextindex + this.searchtextquestions.length + 30;
      if (endindex < 0) {
        endindex = 0;
      }
      return value.slice(startindex, endindex);
    });
    this.loadproducts();
  }

  loadproducts() {
    Axios.get(this.questionslist)
      .then((response) => {
        // console.log("questions list", response.data);
        // var parsedObj = JSON.parse(JSON.stringify(response.data.subproducts));
        // console.log(parsedObj);
        this.questions = Object.assign([], response.data);
        // console.log("questions list", this.questions);
      })
      .catch((error) => {
        console.log(error);
      });
  }

  get filteredQuestions() {
    return this.questions.filter((question) => {
      return (
        question.question
          .toLowerCase()
          .indexOf(this.searchtextquestions.toLowerCase()) >= 0
      );
    });
  }
}
</script>



<style lang="css">
</style>