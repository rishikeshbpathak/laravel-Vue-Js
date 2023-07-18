<template>
  <div class="cust-padding custom-padding-top uk-padding-remove-bottom">
    <div class="uk-text-center">
      <h2 class="txt-blue fonth2 font24">
        Die nächsten Veranstaltungs-Termine von VitalAire | Diabetes
      </h2>
      <br />
      <div class="cust-padding-top uk-text-center">
        <span class="txt-blue faq-font letter-spacing-1 catname bold">
          Nur Veranstaltungen zum folgenden Thema anzeigen:
        </span>
        <div class="uk-padding uk-padding-remove-bottom">
          <span
            @click="showEvent()"
            class="tags-global cursor-pointer tag-event"
            :style="{
              'background-color':
                filterSelected === 'events' ? '#487886' : '#75a6b5',
            }"
          >
            Veranstaltungen
          </span>
          <span
            @click="showWebinars()"
            class="tags-global cursor-pointer tag-webinar"
            :style="{
              'background-color':
                filterSelected === 'webinars' ? '#f0666e' : '#f49499',
            }"
          >
            Webinare
          </span>
        </div>
      </div>
    </div>
    <br />
    <ul
      class="uk-subnav uk-subnav-pill uk-flex-center"
      style="margin-left: 35px"
      uk-switcher="animation: uk-animation-slide-left-medium, uk-animation-slide-right-medium"
    >
      <li class="">
        <a href="#" class="switcher-button" title="In Listenansicht anzeigen">
          <img
            v-bind:src="
              url +
              '/assets/png/frontend/vitalaire-webicon-tslim-x2-insulinpumpe-slide1-petrol.png'
            "
            alt=""
            width="50"
          />
        </a>
      </li>
      <li class="">
        <a href="#" class="switcher-button" title="In Kalenderansicht anzeigen">
          <img
            v-bind:src="
              url +
              '/assets/png/frontend/vitalaire-webicon-tslim-x2-insulinpumpe-slide2-petrol.png'
            "
            alt=""
            width="50"
          />
        </a>
      </li>
    </ul>

    <ul class="uk-switcher uk-margin uk-padding">
      <li>
        <template v-if="showListingLoader">
          <div class="uk-text-center uk-padding-large">
            <div uk-spinner="ratio: 3"></div>
          </div>
        </template>
        <template v-else>
          <template v-if="listWebinars.length === 0">
            <h2 class="uk-text-center txt-blue">
              Keine Veranstaltungen/Webinare vorhanden
            </h2>
          </template>
          <template v-for="(webinar, index) in listWebinars">
            <template v-if="index <= listcount - 1">
              <div :key="index" style="margin-bottom: 10px">
                <a
                  class="link no-underline"
                  v-bind:href="
                    url +
                    '/veranstaltungenwebinare/' +
                    (webinar.title.split('++')[0] === 'Webinar'
                      ? 'webinar/'
                      : 'event/') +
                        encodeURIComponent(
                          webinar.title.split('++')[3].replace(/ /g, '-')
                        ) +
                    '/' +
                    webinar.id
                  "
                >
                  <div class="bgcolordirt uk-text-center" uk-grid>
                    <div
                      class="uk-width-auto@m uk-width-1-1@s"
                      style="padding-left: 0"
                    >
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
                        <h3 class="txt-blue font22" style="margin-bottom: 15px">
                          {{ webinar.title.split("++")[3] }}
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
                    <div
                      class="uk-width-auto@m uk-width-1-1@s"
                      style="margin: auto"
                    >
                      <div class="uk-padding-small uk-text-center">
                        <div style="width: 150px">
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
                                      webinar.next_date.date.replace(/-/g, '/')
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
                                      webinar.next_date.date.replace(/-/g, '/')
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
						  		<p style="margin:0; padding: 0;" class="font18 txt-blue">{{filteresDates(webinar.dates) ? 'Weitere Termine': '&nbsp;'}}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </template>
          </template>
        </template>

        <br />
        <br />
         <template v-if="listWebinars.length > listcount">
          <div  class="uk-text-center">
          <button
            class="custom-button letter-spacing-1 font16 cursor-pointer"
            @click="showMoreListings()"
          >
            WEITERE TERMINE ANZEIGEN
          </button>
        </div> 
        </template>
      </li>
      <li>
        <template v-if="showCalendarLoader">
          <div class="uk-text-center uk-padding-large">
            <div uk-spinner="ratio: 3"></div>
          </div>
        </template>
        <template v-else>
          <vue-event-calendar :events="calendarWebinars">
            <template slot-scope="props">
              <div
                v-for="(event, index) in props.showEvents"
                class="event-item"
                :key="`key-${index}`"
              >
                <div class="wrapper">
                  <h3
                    class="
                      title-wrapper
                      uk-padding uk-padding-remove-horizontal
                    "
                  >
                    <div uk-grid>
                      <div class="uk-width-expand" style="margin: auto">
                        <p class="title-tag-calendar">
                          <span style="float: left">
                            {{ event.title.split("++")[0] }}
                          </span>
                          <template
                            v-if="
                              currentDate.getTime() >
                              new Date(event.date_end).getTime()
                            "
                          >
                            <span class="uk-text-danger" style="float: right">
                              Vorbei
                            </span>
                          </template>
                        </p>
                        <template
                          v-if="event.title.split('++')[0] === 'Webinar'"
                        >
                          <a
                            class="link title-calendar"
                            v-bind:href="
                              url +
                              '/veranstaltungenwebinare/webinar/' +
                              encodeURIComponent(
                                event.title.split('++')[3].replace(/ /g, '-')
                              ) +
                              '/' +
                              event.id
                            "
                          >
                            {{ event.title.split("++")[3] }}
                          </a>
                        </template>
                        <template
                          v-else-if="event.title.split('++')[0] === 'Event'"
                        >
                          <a
                            class="link title-calendar"
                            v-bind:href="
                              url +
                              '/veranstaltungenwebinare/event/' +
                              encodeURIComponent(
                                event.title.split('++')[3].replace(/ /g, '-')
                              ) +
                              '/' +
                              event.id
                            "
                          >
                            {{ event.title.split("++")[3] }}
                          </a>
                        </template>
                      </div>
                      <div
                        class="uk-width-1-3@m uk-width-1-2@s"
                        style="margin: auto"
                      >
                        <p class="datetime-calendar">
                          <template v-if="event.date == event.date_end">
                            {{
                              new Date(event.date).toLocaleDateString("de-DE")
                            }}
                            {{ event.time_start }} -
                            {{ event.time_end }}
                          </template>
                          <template v-else>
                            {{
                              new Date(event.date).toLocaleDateString("de-DE")
                            }}
                            {{ event.time_start }} -
                            {{
                              new Date(event.date_end).toLocaleDateString(
                                "de-DE"
                              )
                            }}
                            {{ event.time_end }}
                          </template>
                        </p>
                      </div>
                    </div>
                  </h3>
                  <p class="desc">{{ event.desc | stripHTML }}</p>
                </div>
              </div>
            </template>
          </vue-event-calendar>
        </template>
        <br />
        <br />
        <div class="uk-text-center">
          <template v-if="!archiveVisible">
            <button
              class="custom-button letter-spacing-1 font16 cursor-pointer"
              @click="showArchive()"
            >
              ARCHIVIERTE EVENTS ANZEIGEN
            </button>
          </template>
          <template v-else>
            <button
              class="custom-button letter-spacing-1 font16 cursor-pointer"
              @click="getAllData()"
            >
              AKTIVE EVENTS ANZEIGEN
            </button>
          </template>
        </div>
      </li>
    </ul>
  </div>
</template>


<script lang="ts">
import Vue from "vue";
import { Component, Prop } from "vue-property-decorator";
import { baseurl } from "./main";
import "vue-event-calendar/dist/style.css";
import vueEventCalendar from "vue-event-calendar";
import axios from "axios";
import _ from "lodash";

@Component
export default class Webinarwidget extends Vue {
  @Prop({ required: true }) readonly listwebinarurl: string;

  url = baseurl;
  filterSelected: string = "none";
  allwebinars: [];
  allStandardwebinars: [];
  listcount: number = 4;
  listWebinars: any[];
  calendarWebinars: any[] = [];
  showListingLoader: boolean = false;
  showCalendarLoader: boolean = false;
  currentDate: any = new Date();
  archiveVisible: boolean = false;
  testString: string = "Webinar++Fachkreise++Online++Testing Webinar";
  demoEvents = [
    {
      date: "2022/07/13",
      title: "Webinar",
      desc: "first description",
      time: "12:00-14:00",
    },
    {
      date: "2022/07/15",
      title: "Event",
      desc: "second description",
      time: "15:00-18:00",
    },
  ];

  created() {
    this.getAllData();
    Vue.use(vueEventCalendar, { locale: "de", color: "#86b5c3" });
    Vue.filter("stripHTML", (value) => {
      const div = document.createElement("div");
      div.innerHTML = value;
      const text = div.textContent || div.innerText || "";
      return text;
    });
  }

  showEvent() {
    this.showListingLoader = true;
    this.showCalendarLoader = true;
    this.archiveVisible = false;
    this.calendarWebinars = [];
    if (this.filterSelected !== "events") {
      this.filterSelected = "events";
      axios.get(this.listwebinarurl).then((resp) => {
        this.allwebinars = resp.data.webinars;
        if (window.location.pathname.split("/").pop() === "fachkreise") {
          this.allStandardwebinars = this.justFachkreise(
            this.orderedListing(this.removeNonStandard(this.allwebinars))
          );
        } else if (window.location.pathname.split("/").pop() === "patienten") {
          this.allStandardwebinars = this.justPatienten(
            this.orderedListing(this.removeNonStandard(this.allwebinars))
          );
        } else {
          this.allStandardwebinars = this.orderedListing(
            this.removeNonStandard(this.allwebinars)
          );
        }
        this.listWebinars = this.removeExpired(this.allStandardwebinars);
        this.listWebinars = this.justEvents(this.listWebinars);
        this.createCalendarArray(this.allStandardwebinars);
        this.calendarWebinars = this.justEvents(this.calendarWebinars);
        this.showListingLoader = false;
        this.showCalendarLoader = false;
        this.$forceUpdate();
      });
    } else {
      this.filterSelected = "none";
      this.getAllData();
    }
  }

  showWebinars() {
    this.showListingLoader = true;
    this.showCalendarLoader = true;
    this.archiveVisible = false;
    this.calendarWebinars = [];
    if (this.filterSelected !== "webinars") {
      this.filterSelected = "webinars";
      axios.get(this.listwebinarurl).then((resp) => {
        this.allwebinars = resp.data.webinars;
        if (window.location.pathname.split("/").pop() === "fachkreise") {
          this.allStandardwebinars = this.justFachkreise(
            this.orderedListing(this.removeNonStandard(this.allwebinars))
          );
        } else if (window.location.pathname.split("/").pop() === "patienten") {
          this.allStandardwebinars = this.justPatienten(
            this.orderedListing(this.removeNonStandard(this.allwebinars))
          );
        } else {
          this.allStandardwebinars = this.orderedListing(
            this.removeNonStandard(this.allwebinars)
          );
        }
        this.listWebinars = this.removeExpired(this.allStandardwebinars);
        this.listWebinars = this.justWebinars(this.listWebinars);
        this.createCalendarArray(this.allStandardwebinars);
        this.calendarWebinars = this.justWebinars(this.calendarWebinars);
        this.showListingLoader = false;
        this.showCalendarLoader = false;
        this.$forceUpdate();
      });
    } else {
      this.filterSelected = "none";
      this.getAllData();
    }
  }

  getAllData() {
    this.showListingLoader = true;
    this.showCalendarLoader = true;
    this.archiveVisible = false;
    this.calendarWebinars = [];
    axios.get(this.listwebinarurl).then((resp) => {
      this.allwebinars = resp.data.webinars;
      if (window.location.pathname.split("/").pop() === "fachkreise") {
        this.allStandardwebinars = this.justFachkreise(
          this.orderedListing(this.removeNonStandard(this.allwebinars))
        );
      } else if (window.location.pathname.split("/").pop() === "patienten") {
        this.allStandardwebinars = this.justPatienten(
          this.orderedListing(this.removeNonStandard(this.allwebinars))
        );
      } else {
        this.allStandardwebinars = this.orderedListing(
          this.removeNonStandard(this.allwebinars)
        );
      }
      this.listWebinars = this.removeExpired(this.allStandardwebinars);
    //   console.log("listWebinars", this.listWebinars);
      this.createCalendarArray(this.allStandardwebinars);
      this.showListingLoader = false;
      this.showCalendarLoader = false;
      this.$forceUpdate();
    });
  }

  showArchive() {
    this.archiveVisible = true;
    this.showCalendarLoader = true;
    this.calendarWebinars = [];
    axios.get(this.listwebinarurl).then((resp) => {
      this.allwebinars = resp.data.webinars;
      this.allStandardwebinars = this.orderedListing(
        this.removeNonStandard(this.allwebinars)
      );
      this.createExpiredCalendarArray(this.allStandardwebinars);
      this.showCalendarLoader = false;
      this.$forceUpdate();
    });
  }

  // function to return true or false based on how many dates are available
	filteresDates(webinarDates) {
		var activeWebinarDates = webinarDates
			.filter((item) => new Date(item.date.replace(/-/g, '/')).getTime() >
				new Date().getTime())
		if (activeWebinarDates.length > 1) {
			return true;
		}
		else {
			return false;
		}
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

  justWebinars(array) {
    return array
      .filter((item) => item.title.split("++")[0] === "Webinar")
      .map((item) => (Array.isArray(item) ? this.justWebinars(item) : item));
  }

  justEvents(array) {
    return array
      .filter((item) => item.title.split("++")[0] === "Event")
      .map((item) => (Array.isArray(item) ? this.justEvents(item) : item));
  }

  justFachkreise(array) {
    return array
      .filter((item) => item.title.split("++")[1] === "Fachkreise")
      .map((item) => (Array.isArray(item) ? this.justFachkreise(item) : item));
  }

  justPatienten(array) {
    return array
      .filter((item) => item.title.split("++")[1] === "Patienten")
      .map((item) => (Array.isArray(item) ? this.justPatienten(item) : item));
  }

  orderedListing(array) {
    return _.orderBy(array, (item) => item.next_date === null ? '' : item.next_date.date, "asc");
  }

  createCalendarArray(array) {
    array.map((item) => {
      item.dates.map((date) => {
        if (
          new Date(date.date_end.replace(/-/g, "/")).getTime() >
          this.currentDate.getTime()
        ) {
          this.calendarWebinars.push({
            title: item.title,
            date: date.date.split(" ")[0].replace(/-/g, "/"),
            date_end: date.date_end.split(" ")[0].replace(/-/g, "/"),
            next_date: item.next_date,
            desc: item.landingpage.description_short,
            time_start: date.date.split(" ")[1].replace(/(:\d{2}| [AP]M)$/, ""),
            time_end: date.date_end
              .split(" ")[1]
              .replace(/(:\d{2}| [AP]M)$/, ""),
            id: item.id,
          });
          this.$forceUpdate();
        }
      });
    });
  }

  createExpiredCalendarArray(array) {
    array.map((item) => {
      item.dates.map((date) => {
        if (
          new Date(date.date_end.replace(/-/g, "/")).getTime() <
          this.currentDate.getTime()
        ) {
          this.calendarWebinars.push({
            title: item.title,
            date: date.date.split(" ")[0].replace(/-/g, "/"),
            date_end: date.date_end.split(" ")[0].replace(/-/g, "/"),
            next_date: item.next_date,
            desc: item.landingpage.description_short,
            time_start: date.date.split(" ")[1].replace(/(:\d{2}| [AP]M)$/, ""),
            time_end: date.date_end
              .split(" ")[1]
              .replace(/(:\d{2}| [AP]M)$/, ""),
            id: item.id,
          });
          this.$forceUpdate();
        }
      });
    });
  }

  showMoreListings() {
    this.listcount += 4;
    this.$forceUpdate();
  }
}
</script>



<style lang="css">
</style>