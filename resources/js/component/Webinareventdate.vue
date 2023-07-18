<template>
  <div v-if="webinar" style="display:inline-block">
    <template
      v-if="
        new Date(webinar.next_date.date.replace(/-/g, '/')).toDateString() ==
        new Date(webinar.next_date.date_end.replace(/-/g, '/')).toDateString()
      "
    >
      {{
        new Date(webinar.next_date.date.replace(/-/g, "/")).toLocaleDateString(
          "de-DE",
          {
            day: "2-digit",
            month: "long",
            year: "numeric",
          }
        )
      }}
    </template>
    <template v-else>
      <template
        v-if="
          new Date(webinar.next_date.date.replace(/-/g, '/')).getMonth() !=
          new Date(webinar.next_date.date_end.replace(/-/g, '/')).getMonth()
        "
      >
        {{
          new Date(
            webinar.next_date.date.replace(/-/g, "/")
          ).toLocaleDateString("de-DE", {
            day: "2-digit",
          })
        }}. -
        {{
          new Date(
            webinar.next_date.date_end.replace(/-/g, "/")
          ).toLocaleDateString("de-DE", {
            day: "2-digit",
            month: "long",
            year: "numeric",
          })
        }}
      </template>
      <template v-else>
        {{
          new Date(
            webinar.next_date.date.replace(/-/g, "/")
          ).toLocaleDateString("de-DE", {
            day: "2-digit",
            month: "long",
          })
        }}
        -
        {{
          new Date(
            webinar.next_date.date_end.replace(/-/g, "/")
          ).toLocaleDateString("de-DE", {
            day: "2-digit",
            month: "long",
            year: "numeric",
          })
        }}
      </template>
    </template>
  </div>
</template>


<script lang="ts">
import Vue from "vue";
import { Component, Prop } from "vue-property-decorator";
import axios from "axios";

@Component
export default class Webinareventdate extends Vue {
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