<template>
  <div v-if="webinar">
    <svg
      version="1.1"
      id="f6982601-e7eb-4d75-b73a-052f0aab0a06"
      xmlns="http://www.w3.org/2000/svg"
      xmlns:xlink="http://www.w3.org/1999/xlink"
      x="0px"
      y="0px"
      viewBox="0 0 75 75"
      style="enable-background: new 0 0 75 75"
      xml:space="preserve"
    >
      <g>
        <defs>
          <rect id="SVGID_1_" x="11.9" y="11.9" width="51.3" height="49.1" />
        </defs>
        <text
          x="50%"
          y="50%"
          dominant-baseline="middle"
          text-anchor="middle"
          class="webinardate"
        >
          {{
            new Date(
              webinar.next_date.date.replace(/-/g, "/")
            ).toLocaleDateString("de-DE", {
              day: "2-digit",
            })
          }}.
          <template
            v-if="
              new Date(
                webinar.next_date.date.replace(/-/g, '/')
              ).toDateString() !=
              new Date(
                webinar.next_date.date_end.replace(/-/g, '/')
              ).toDateString()
            "
          >
            -{{
              new Date(
                webinar.next_date.date_end.replace(/-/g, "/")
              ).toLocaleDateString("de-DE", {
                day: "2-digit",
              })
            }}.
          </template>
        </text>
        <text
          x="50%"
          y="65%"
          dominant-baseline="middle"
          text-anchor="middle"
          class="webinarmonth"
        >
          {{
            new Date(
              webinar.next_date.date.replace(/-/g, "/")
            ).toLocaleDateString("de-DE", {
              month: "short",
            })
          }}
          <template
            v-if="
              new Date(webinar.next_date.date.replace(/-/g, '/')).getMonth() !=
              new Date(webinar.next_date.date_end.replace(/-/g, '/')).getMonth()
            "
          >
            -{{
              new Date(
                webinar.next_date.date_end.replace(/-/g, "/")
              ).toLocaleDateString("de-DE", {
                month: "short",
              })
            }}
          </template>
        </text>
        <clipPath
          id="SVGID_00000038388909590008140740000012310117511239638680_"
        >
          <use xlink:href="#SVGID_1_" style="overflow: visible" />
        </clipPath>
        <path
          style="
            clip-path: url(#SVGID_00000038388909590008140740000012310117511239638680_);
            fill: #86b5c3;
          "
          d="M53.5,20.4
		c-0.6,0-1.1-0.5-1.1-1.1v-6.4c0-0.6,0.5-1.1,1.1-1.1c0.6,0,1.1,0.5,1.1,1.1v6.4C54.6,19.9,54.1,20.4,53.5,20.4"
        />
        <path
          style="
            clip-path: url(#SVGID_00000038388909590008140740000012310117511239638680_);
            fill: #86b5c3;
          "
          d="M21.5,20.4
		c-0.6,0-1.1-0.5-1.1-1.1v-6.4c0-0.6,0.5-1.1,1.1-1.1s1.1,0.5,1.1,1.1v6.4C22.6,19.9,22.1,20.4,21.5,20.4"
        />
        <path
          style="
            clip-path: url(#SVGID_00000038388909590008140740000012310117511239638680_);
            fill: #86b5c3;
          "
          d="M16.2,16.2
		c-1.2,0-2.1,1-2.1,2.1v38.5c0,1.2,1,2.1,2.1,2.1h42.7c1.2,0,2.1-1,2.1-2.1V18.3c0-1.2-1-2.1-2.1-2.1H16.2z M58.9,61H16.2
		c-2.4,0-4.3-1.9-4.3-4.3V18.3c0-2.4,1.9-4.3,4.3-4.3h42.7c2.4,0,4.3,1.9,4.3,4.3v38.5C63.2,59.1,61.2,61,58.9,61"
        />
        <path
          style="
            clip-path: url(#SVGID_00000038388909590008140740000012310117511239638680_);
            fill: #86b5c3;
          "
          d="M54.6,27.9H20.4
		c-0.6,0-1.1-0.5-1.1-1.1c0-0.6,0.5-1.1,1.1-1.1h34.2c0.6,0,1.1,0.5,1.1,1.1C55.7,27.4,55.2,27.9,54.6,27.9"
        />
      </g>
    </svg>
  </div>
</template>


<script lang="ts">
import Vue from "vue";
import { Component, Prop } from "vue-property-decorator";
import axios from "axios";

@Component
export default class Webinareventdatesvg extends Vue {
  @Prop({ required: true }) readonly webinarurl: any;
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
</style>