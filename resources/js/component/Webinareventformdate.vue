<template>
  <div v-if="webinar">
    <select name="date" id="date" class="webinar-widget-input txt-black select_tag">
      <template v-for="(webinardate, index) in webinar.dates">
        <template v-if="new Date(webinardate.date.replace(/-/g, '/')).getTime() >
          new Date().getTime()
          ">
          <option :key="index" :value="webinardate.date">
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
          </option>
        </template>
      </template>
    </select>
  </div>
</template>

<script lang="ts">
import Vue from 'vue';
import {Component, Prop} from 'vue-property-decorator';
import axios from 'axios';

@Component
export default class Webinareventformdate extends Vue {
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

<style lang="css"></style>
