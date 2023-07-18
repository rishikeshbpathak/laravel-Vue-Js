<template>
  <div v-if="webinar">
    <ul class="uk-list uk-list-striped" style="margin-bottom: 0px !important;">
      <template v-for="(webinardate, index) in webinar.dates">
        <template v-if="new Date(webinardate.date.replace(/-/g, '/')).getTime() >
          new Date().getTime()">
          <li style="color:#666;" :date_show="new Date(
                webinardate.date_end.replace(/-/g, '/')
              ).toDateString()+' - '+ new Date(
                  webinardate.date.replace(/-/g, '/')
                ).toLocaleDateString('de-DE', {
                  day: '2-digit',
                  month: 'long',
                  year: 'numeric',
                })" :date_list="webinardate.date" id="btn_date_list" class="font18 uk-transition-toggle" tabindex="0" :key="index" :value="webinardate.date">
            <template v-if="new Date(webinardate.date.replace(/-/g, '/')).toDateString() ==
              new Date(
                webinardate.date_end.replace(/-/g, '/')
              ).toDateString()
              ">
              {{
                new Date(
                  webinardate.date.replace(/-/g, '/')
                ).toLocaleDateString('de-DE', {
                  day: '2-digit',
                  month: 'long',
                  year: 'numeric',
                })
              }}
            </template>
            <template v-else>
              <template v-if="new Date(webinardate.date.replace(/-/g, '/')).getMonth() !=
                  new Date(webinardate.date_end.replace(/-/g, '/')).getMonth()
                  ">
                {{
                  new Date(
                    webinardate.date.replace(/-/g, '/')
                  ).toLocaleDateString('de-DE', {
                    day: '2-digit',
                  })
                }}. -
                {{
                  new Date(
                    webinardate.date_end.replace(/-/g, '/')
                  ).toLocaleDateString('de-DE', {
                    day: '2-digit',
                    month: 'long',
                    year: 'numeric',
                  })
                }}
              </template>
              <template v-else>
                {{
                  new Date(
                    webinardate.date.replace(/-/g, '/')
                  ).toLocaleDateString('de-DE', {
                    day: '2-digit',
                    month: 'long',
                  })
                }}
                -
                {{
                  new Date(
                    webinardate.date_end.replace(/-/g, '/')
                  ).toLocaleDateString('de-DE', {
                    day: '2-digit',
                    month: 'long',
                    year: 'numeric',
                  })
                }}
              </template>
            </template>
            {{
              new Date(webinardate.date.replace(/-/g, '/')).toLocaleTimeString(
                'de-DE',
                {
                  hour12: false,
                  hour: '2-digit',
                  minute: '2-digit',
                }
              )
            }}-{{
  new Date(
    webinardate.date_end.replace(/-/g, '/')
  ).toLocaleTimeString('de-DE', {
    hour12: false,
    hour: '2-digit',
    minute: '2-digit',
  })
}}
            Uhr
          </li>          
        </template>
      </template>
    </ul>
  </div>
</template>
<script lang="ts">
import Vue from 'vue';
import {Component, Prop} from 'vue-property-decorator';
import axios from 'axios';

@Component
export default class Webinareventdatelist extends Vue {
  @Prop({required: true}) readonly webinarurl: any;
  webinar: any;

  created() {
    axios.get(this.webinarurl).then((resp) => {
      this.webinar = resp.data;
      this.$forceUpdate();
    });
  }
}
</script>
<style lang="css">
/* li.font18.uk-transition-toggle 
    float: left;
    padding: 3px 22px;
    list-style: none;
    margin: 1px;
}*/
</style> 

