<template>
  <div class="bgcolordirt slideshowheight">
    <div class="homeslidercover">
      <div
        uk-slider="autoplay: true; autoplay-interval: 3000; pause-on-hover: true"
      >
        <div class="uk-position-relative">
          <div class="uk-slider-container uk-light">
            <ul class="uk-slider-items uk-child-width-1-1">
              <template v-for="(webinar, index) in listWebinars">
                <li :key="index">
                  <div>
                    <div class="bgcolordirt uk-text-center" uk-grid>
                      <div class="uk-width-auto@m uk-width-1-1@s slideshowimg">
                        <img
                          v-bind:src="webinar.landingpage.image.url"
                          alt="listing"
                          width="300"
                        />
                      </div>
                      <div
                        class="uk-width-expand@m uk-width-1-1@s"
                        style="margin: auto"
                      >
                        <div
                          class="
                            uk-padding uk-padding-remove-horizontal uk-text-left
                          "
                        >
                          <h3
                            class="txt-blue font22"
                            style="margin-bottom: 15px"
                          >
                            <template
                              v-if="webinar.title.split('++')[0] === 'Webinar'"
                            >
                              <a
                                class="link"
                                @click="
                                  routeToPage(
                                    '/veranstaltungenwebinare/webinar/' +
                                      encodeURIComponent(
                                        webinar.title
                                          .split('++')[3]
                                          .replace(/ /g, '-')
                                      ) +
                                      '/' +
                                      webinar.id
                                  )
                                "
                              >
                                {{ webinar.title.split("++")[3] }}
                              </a>
                            </template>
                            <template
                              v-else-if="
                                webinar.title.split('++')[0] === 'Event'
                              "
                            >
                              <a
                                class="link"
                                @click="
                                  routeToPage(
                                    '/veranstaltungenwebinare/event/' +
                                      encodeURIComponent(
                                        webinar.title
                                          .split('++')[3]
                                          .replace(/ /g, '-')
                                      ) +
                                      '/' +
                                      webinar.id
                                  )
                                "
                              >
                                {{ webinar.title.split("++")[3] }}
                              </a>
                            </template>
                          </h3>
                          <div
                            class="uk-child-width-1-2@m uk-child-width-1-1@s"
                            uk-grid
                          >
                            <div>
                              <p class="font18 txt-blue">
                                <img
                                  v-bind:src="
                                    url +
                                    '/assets/png/frontend/vitalaire-webicon-tslim-x2-insulinpumpe-fachkreise-petrol.png'
                                  "
                                  alt="people"
                                  width="30"
                                />
                                {{ webinar.title.split("++")[1] }}
                              </p>
                            </div>
                            <div>
                              <p class="font18 txt-blue">
                                <img
                                  v-bind:src="
                                    url +
                                    '/assets/png/frontend/vitalaire-webicon-tslim-x2-insulinpumpe-standort-petrol.png'
                                  "
                                  alt="location"
                                  width="30"
                                />
                                {{ webinar.title.split("++")[2] }}
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="uk-width-auto@m uk-width-1-1@s">
                        <div class="uk-padding uk-text-center">
                          <div style="width: 100px">
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
                                  <rect
                                    id="SVGID_1_"
                                    x="11.9"
                                    y="11.9"
                                    width="51.3"
                                    height="49.1"
                                  />
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
                                        webinar.next_date.date.replace(
                                          /-/g,
                                          '/'
                                        )
                                      ).toDateString() !=
                                      new Date(
                                        webinar.next_date.date_end.replace(
                                          /-/g,
                                          '/'
                                        )
                                      ).toDateString()
                                    "
                                  >
                                    -{{
                                      new Date(
                                        webinar.next_date.date_end.replace(
                                          /-/g,
                                          "/"
                                        )
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
                                      new Date(
                                        webinar.next_date.date.replace(
                                          /-/g,
                                          '/'
                                        )
                                      ).getMonth() !=
                                      new Date(
                                        webinar.next_date.date_end.replace(
                                          /-/g,
                                          '/'
                                        )
                                      ).getMonth()
                                    "
                                  >
                                    -{{
                                      new Date(
                                        webinar.next_date.date_end.replace(
                                          /-/g,
                                          "/"
                                        )
                                      ).toLocaleDateString("de-DE", {
                                        month: "short",
                                      })
                                    }}
                                  </template>
                                </text>
                                <clipPath
                                  id="SVGID_00000038388909590008140740000012310117511239638680_"
                                >
                                  <use
                                    xlink:href="#SVGID_1_"
                                    style="overflow: visible"
                                  />
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
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </template>
            </ul>
          </div>
          <div>
            <a
              style="margin: 0"
              class="uk-position-center-left-out uk-position-small slider-arrow"
              href="#"
              uk-slidenav-previous
              uk-slider-item="previous"
            ></a>
            <a
              style="margin: 0"
              class="
                uk-position-center-right-out uk-position-small
                slider-arrow
              "
              href="#"
              uk-slidenav-next
              uk-slider-item="next"
            ></a>
          </div>
        </div>

        <!-- <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul> -->
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import Vue from "vue";
import { Component, Prop } from "vue-property-decorator";
import { baseurl } from "./main";
import axios from "axios";
import _ from "lodash";
import UIkit from "uikit";
import Icons from "uikit/dist/js/uikit-icons";

@Component
export default class Slideshowwebinar extends Vue {
  @Prop({ required: true }) readonly listwebinarurl: string;

  url = baseurl;
  allwebinars: [];
  allStandardwebinars: [];
  listWebinars: any[];
  showListingLoader: boolean = false;
  currentDate: any = new Date();

  created() {
    UIkit.use(Icons);
    this.showListingLoader = true;
    this.getAllData();
  }

  routeToPage(url) {
    // const message = JSON.stringify({
    //   url: url,
    // });
    window.parent.postMessage(url, "*");
  }

  getAllData() {
    this.showListingLoader = true;
    axios.get(this.listwebinarurl).then((resp) => {
      this.allwebinars = resp.data.webinars;
      this.allStandardwebinars = this.orderedListing(
        this.removeNonStandard(this.allwebinars)
      );
      this.listWebinars = this.removeExpired(this.allStandardwebinars);
      // console.log("listWebinars", this.listWebinars);
      this.showListingLoader = false;
      this.$forceUpdate();
    });
  }

  removeExpired(array) {
    return array
      .filter((item) => item.next_date !== null)
      .map((item) => (Array.isArray(item) ? this.removeExpired(item) : item));
  }

  removeNonStandard(array) {
    return array
      .filter((item) => (item.title.match(/\+/g) || []).length === 6)
      .map((item) =>
        Array.isArray(item) ? this.removeNonStandard(item) : item
      );
  }

  orderedListing(array) {
    return _.orderBy(array, (item) => item.next_date === null ? '' : item.next_date.date, "asc");
  }
}
</script>


<style lang="css">
.link {
  color: #86b5c3 !important;
  text-decoration: none;
}

.link:hover {
  color: #487886 !important;
  cursor: pointer;
}
</style>
