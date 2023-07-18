<template>
  <header
    class="header"
    id="header"
    uk-sticky="media: (max-width: 800px); animation: uk-animation-slide-top"
  >
    <div class="bgtopdiv des">
      <div class="uk-child-width-1-5 uk-grid-collapse font18" uk-grid>
        <div></div>
        <div>
          <p class="header-text right">Kundenservice:</p>
        </div>
        <div>
          <p class="header-text center">
            <img
              v-bind:src="baseurl + '/assets/png/frontend/phone.png'"
              style="margin-top: -6px"
              width="25"
              alt="phone"
            />
            &nbsp;
            <a class="numberemail kontakt-link" href="tel:0800/1001644"
              >0800/100 16 44</a
            >
          </p>
        </div>
        <div>
          <p class="header-text left">
            <img
              v-bind:src="baseurl + '/assets/png/frontend/mail.png'"
              style="margin-top: -3px"
              width="25"
              alt="mail"
            />
            &nbsp;
            <a
              class="numberemail kontakt-link"
              href="mailto:diabetes@vitalaire.de"
              >diabetes@vitalaire.de</a
            >
          </p>
        </div>
        <div></div>
      </div>
    </div>
    <div class="bgbottomdiv">
      <br />
      <div class="bgbottomdivone">
        <div class="uk-child-width-1-3 uk-grid-center" uk-grid>
          <div class="bgbottomleftside">
            <div class="mob">
              <a
                class="sideicons"
                href="#offcanvas-nav"
                uk-icon="icon: menu; ratio: 2"
                style="color: white"
                uk-toggle
              >
              </a>
            </div>
          </div>
          <div class="bgbottomcenterside">
            <a v-bind:href="baseurl + '/'">
              <img
                v-bind:src="
                  baseurl + '/assets/png/frontend/vitalairelogohalf.png'
                "
                width="200"
                alt="logo"
              />
            </a>
          </div>
          <div class="bgbottomrightside">
            <div class="des">
              <div style="display: inline">
                <div class="nav-overlay top-margin">
                  <div>
                    <div class="uk-inline searchbarwidth" id="search_input">
                      <form
                        v-bind:action="baseurl + '/header/search'"
                        class="uk-margin-remove"
                        method="post"
                      >
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
                          class="
                            uk-input
                            search-input search-hidden
                            uk-invisible
                          "
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
                                <template
                                  v-for="(pages, index) in filteredPages"
                                >
                                  <li v-if="index < 5" :key="pages + index">
                                    <a
                                      class="searchlist uk-text-left"
                                      v-bind:href="baseurl + pages[1]"
                                    >
                                      <p
                                        class="
                                          txt-blue
                                          roboto-slab-regular
                                          uk-margin-remove
                                        "
                                      >
                                        {{ pages[2] }}
                                      </p>
                                      <p
                                        class="font14 uk-margin-remove txt-blue"
                                      >
                                        https://die-clevere-insulinpumpe.de{{
                                          pages[1]
                                        }}
                                      </p>
                                      <text-highlight
                                        style="display: block"
                                        :queries="searchtext"
                                        :caseSensitive="false"
                                        :highlightClass="bold"
                                      >
                                        {{ pages[0] | snippet }}
                                      </text-highlight>
                                    </a>
                                  </li>
                                </template>
                              </ul>
                              <button
                                :disabled="filteredPages.length == 0"
                                type="submit"
                                class="
                                  custom-button custom
                                  atag
                                  uk-width-1-1
                                  roboto
                                "
                              >
                                ALLE ERGEBNISSE ANZEIGEN
                              </button>
                            </template>
                            <template v-if="!searchtext">
                              <h3>
                                <h3 class="txt-blue roboto-slab-regular">
                                  0 Treffer
                                </h3>
                              </h3>
                              <button
                                class="
                                  custom-button custom
                                  atag
                                  uk-width-1-1
                                  roboto
                                  uk-disabled
                                "
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
            </div>
          </div>
        </div>
      </div>
      <br />
      <div
        uk-sticky="show-on-up: true;animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; cls-inactive: uk-navbar-transparent uk-light; top: 200"
        class="des header-back margin-bottom-sidemenu"
      >
        <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
          <div class="uk-navbar-center">
            <ul class="uk-navbar-nav">
              <li
                class="uk-inline page1-active"
                id="nav1"
                onmouseover="naveover1()"
                onmouseout="navout1()"
              >
                <a class="navlink font24">t:slim X2</a>
                <div
                  id="nav1dropdown"
                  class="submenudropdown"
                  uk-dropdown="pos: bottom-justify; boundary: .header; boundary-align: true; offset: 0; animation: uk-animation-slide-top-small; duration: 200; mode: hover;"
                >
                  <div
                    class="
                      uk-dropdown-grid uk-child-width-1-4@m
                      headersubmenubg
                      font16
                    "
                    uk-grid
                  >
                    <div class="grid-center">
                      <p style="color: white" class="uk-text-left font16">
                        Die intuitive Bedienung und das unauffällige,
                        zurückgenommene Design der cleveren Insulinpumpe
                        ermöglicht den Fokus auf das Leben zu lenken und nicht
                        auf Diabetes.
                      </p>
                    </div>
                    <div>
                      <ul class="uk-nav uk-dropdown-nav">
                        <li>
                          <a
                            v-bind:href="baseurl + '/tslim-x2-insulinpumpe'"
                            title="t:slim X2™ Insulinpumpe"
                          >
                            <div uk-grid>
                              <div class="uk-width-auto">
                                <img
                                  v-bind:src="
                                    baseurl + '/assets/png/frontend/tslimx2.png'
                                  "
                                  width="50"
                                  alt="tslimx2"
                                />
                              </div>
                              <div
                                class="
                                  uk-width-expand
                                  center-vertical
                                  uk-text-left
                                "
                              >
                                <p class="white-space-normal font16">
                                  t:slim X2 Insulinpumpe
                                </p>
                              </div>
                            </div>
                          </a>
                        </li>
                        <br />
                        <li>
                          <a
                            v-bind:href="baseurl + '/control-iq-technologie'"
                            title="Control-IQ Technologie"
                          >
                            <div uk-grid>
                              <div class="uk-width-auto">
                                <img
                                  v-bind:src="
                                    baseurl + '/assets/png/frontend/control.png'
                                  "
                                  width="50"
                                  alt="control"
                                />
                              </div>
                              <div
                                class="
                                  uk-width-expand
                                  center-vertical
                                  uk-text-left
                                "
                              >
                                <p class="white-space-normal font16">
                                  Control-IQ Technologie
                                </p>
                              </div>
                            </div>
                          </a>
                        </li>
                        <br />
                        <li>
                          <a
                            v-bind:href="baseurl + '/basal-iq-technologie'"
                            title="Basal-IQ Technologie"
                          >
                            <div uk-grid>
                              <div class="uk-width-auto">
                                <img
                                  v-bind:src="
                                    baseurl + '/assets/png/frontend/basal.png'
                                  "
                                  width="50"
                                  alt="basal"
                                />
                              </div>
                              <div
                                class="
                                  uk-width-expand
                                  center-vertical
                                  uk-text-left
                                "
                              >
                                <p class="white-space-normal font16">
                                  Basal-IQ Technologie
                                </p>
                              </div>
                            </div>
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div>
                      <ul class="uk-nav uk-dropdown-nav">
                        <li>
                          <a
                            v-bind:href="baseurl + '/integration-rtcgm'"
                            title="Integration rtCGM"
                          >
                            <div uk-grid>
                              <div class="uk-width-auto">
                                <img
                                  v-bind:src="
                                    baseurl +
                                    '/assets/png/frontend/integration.png'
                                  "
                                  width="50"
                                  alt="integration"
                                />
                              </div>
                              <div
                                class="
                                  uk-width-expand
                                  center-vertical
                                  uk-text-left
                                "
                              >
                                <p class="white-space-normal font16">
                                  Integration rtCGM
                                </p>
                              </div>
                            </div>
                          </a>
                        </li>
                        <br />
                        <li>
                          <a
                            v-bind:href="baseurl + '/anwendung-diasend-glooko'"
                            title="Anwendung Diasend by glooko"
                          >
                            <div uk-grid>
                              <div class="uk-width-auto">
                                <img
                                  v-bind:src="
                                    baseurl + '/assets/png/frontend/diasend.png'
                                  "
                                  width="50"
                                  alt="diasend"
                                />
                              </div>
                              <div
                                class="
                                  uk-width-expand
                                  center-vertical
                                  uk-text-left
                                "
                              >
                                <p class="white-space-normal font16">
                                  Anwendung diasend by glooko
                                </p>
                              </div>
                            </div>
                          </a>
                        </li>
                        <br />
                        <li>
                          <a
                            v-bind:href="
                              baseurl + '/verbrauchsmaterialien-zubehoer'
                            "
                            title="Verbrauchsmaterialien & Zubehör"
                          >
                            <div uk-grid>
                              <div class="uk-width-auto">
                                <img
                                  v-bind:src="
                                    baseurl +
                                    '/assets/png/frontend/verbrauchsmaterialien.png'
                                  "
                                  width="50"
                                  alt="verbrauchsmaterialien"
                                />
                              </div>
                              <div
                                class="
                                  uk-width-expand
                                  center-vertical
                                  uk-text-left
                                "
                              >
                                <p class="white-space-normal font16">
                                  Verbrauchsmaterialien & Zubehör
                                </p>
                              </div>
                            </div>
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div>
                      <ul class="uk-nav uk-dropdown-nav">
                        <li>
                          <a
                            v-bind:href="
                              baseurl + '/informationen-fur-fachkreise'
                            "
                            style="display: inline-block"
                            title="Informationen für Fachkreise"
                          >
                            <div uk-grid>
                              <div class="uk-width-auto">
                                <img
                                  v-bind:src="
                                    baseurl +
                                    '/assets/png/frontend/vitalaire-webicon-studien-petrol.png'
                                  "
                                  width="50"
                                  alt="vitalaire-webicon-studien-petrol"
                                />
                              </div>
                              <div
                                class="
                                  uk-width-expand
                                  center-vertical
                                  uk-text-left
                                "
                              >
                                <p class="white-space-normal font16">
                                  Informationen für Fachkreise
                                </p>
                              </div>
                            </div>
                          </a>
                          <span
                            style="cursor: pointer"
                            @click="toggleAccordin"
                            v-bind:uk-icon="[
                              accordinShown
                                ? 'icon: chevron-down; ratio: 2'
                                : 'icon: chevron-right; ratio: 2',
                            ]"
                          ></span>
                        </li>
                        <div
                          v-bind:class="[
                            accordinShown
                              ? 'custom-accordin-show'
                              : 'custom-accordin-hide',
                          ]"
                          style="padding-left: 25px; padding-top: 10px"
                        >
                          <ul class="uk-nav uk-dropdown-nav">
                            <li>
                              <a
                                v-bind:href="
                                  baseurl + '/control-iq-informationen'
                                "
                                title="Control-IQ Technologie"
                              >
                                <div uk-grid>
                                  <div class="uk-width-auto">
                                    <img
                                      v-bind:src="
                                        baseurl +
                                        '/assets/png/frontend/control.png'
                                      "
                                      width="25"
                                      alt="control"
                                    />
                                  </div>
                                  <div
                                    class="
                                      uk-width-expand
                                      center-vertical
                                      uk-text-left
                                    "
                                  >
                                    <p class="white-space-normal font16">
                                      Control-IQ Technologie
                                    </p>
                                  </div>
                                </div>
                              </a>
                            </li>
                            <li>
                              <a
                                v-bind:href="
                                  baseurl + '/basal-iq-informationen'
                                "
                                title="Basal-IQ Technologie"
                              >
                                <div uk-grid>
                                  <div class="uk-width-auto">
                                    <img
                                      v-bind:src="
                                        baseurl +
                                        '/assets/png/frontend/basal.png'
                                      "
                                      width="25"
                                      alt="basal"
                                    />
                                  </div>
                                  <div
                                    class="
                                      uk-width-expand
                                      center-vertical
                                      uk-text-left
                                    "
                                  >
                                    <p class="white-space-normal font16">
                                      Basal-IQ Technologie
                                    </p>
                                  </div>
                                </div>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
              <li
                id="nav2"
                class="page2-active"
                onmouseover="naveover2()"
                onmouseout="navout2()"
              >
                <a class="navlink font24">Service & Support</a>
                <div
                  class="submenudropdown"
                  uk-dropdown="pos: bottom-justify; boundary: .header; boundary-align: true; offset: 0; animation: uk-animation-slide-top-small; duration: 200; mode: hover;"
                >
                  <div
                    class="
                      uk-dropdown-grid uk-child-width-1-4@m
                      headersubmenubg
                    "
                    uk-grid
                  >
                    <div class="grid-center">
                      <p style="color: white" class="uk-text-left font16">
                        Alles rund um die clevere Insulinpumpe, viele hilfreiche
                        Anwendungstipps sowie nützliche Informationen, die das
                        Leben mit der t:slim X2 Insulinpumpe angenehmer machen.
                      </p>
                    </div>
                    <div>
                      <ul class="uk-nav uk-dropdown-nav">
                        <li>
                          <a
                            v-bind:href="
                              baseurl + '/tslim-x2-insulinpumpe-beantragen'
                            "
                            title="Die t:slim X2™ Insulinpumpe beantragen"
                          >
                            <div uk-grid>
                              <div class="uk-width-auto">
                                <img
                                  v-bind:src="
                                    baseurl + '/assets/png/frontend/tslimx2.png'
                                  "
                                  width="50"
                                  alt="tslimx2"
                                />
                              </div>
                              <div
                                class="
                                  uk-width-expand
                                  center-vertical
                                  uk-text-left
                                "
                              >
                                <p class="white-space-normal font16">
                                  Die t:slim X2 Insulinpumpe beantragen
                                </p>
                              </div>
                            </div>
                          </a>
                        </li>
                        <br />
                        <li>
                          <a
                            v-bind:href="
                              baseurl + '/erste-schritte-tslim-x2-insulinpumpe'
                            "
                            title="Erste Schritte mit der t:slim X2™"
                          >
                            <div uk-grid>
                              <div class="uk-width-auto">
                                <img
                                  v-bind:src="
                                    baseurl +
                                    '/assets/png/frontend/fingersensor.png'
                                  "
                                  width="50"
                                  alt="fingersensor"
                                />
                              </div>
                              <div
                                class="
                                  uk-width-expand
                                  center-vertical
                                  uk-text-left
                                "
                              >
                                <p class="white-space-normal font16">
                                  Erste Schritte mit der t:slim X2
                                </p>
                              </div>
                            </div>
                          </a>
                        </li>
                        <br />
                        <li>
                          <a
                            v-bind:href="
                              baseurl +
                              '/videos-tslim-x2-insulinpumpe-einstellen'
                            "
                            title="Videos zum Einstellen der t:slim X2"
                          >
                            <div uk-grid>
                              <div class="uk-width-auto">
                                <img
                                  v-bind:src="
                                    baseurl +
                                    '/assets/png/frontend/settings.png'
                                  "
                                  width="50"
                                  alt="settings"
                                />
                              </div>
                              <div
                                class="
                                  uk-width-expand
                                  center-vertical
                                  uk-text-left
                                "
                              >
                                <p class="white-space-normal font16">
                                  Videos zum Einstellen der t:slim X2
                                </p>
                              </div>
                            </div>
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div>
                      <ul class="uk-nav uk-dropdown-nav">
                        <li>
                          <a
                            v-bind:href="
                              baseurl + '/tslim-x2-insulinpumpe-im-alltag'
                            "
                            title="Die t:slim X2™ im Alltag"
                          >
                            <div uk-grid>
                              <div class="uk-width-auto">
                                <img
                                  v-bind:src="
                                    baseurl +
                                    '/assets/png/frontend/calculator.png'
                                  "
                                  width="50"
                                  alt="calculator"
                                />
                              </div>
                              <div
                                class="
                                  uk-width-expand
                                  center-vertical
                                  uk-text-left
                                "
                              >
                                <p class="white-space-normal font16">
                                  Die t:slim X2 im Alltag
                                </p>
                              </div>
                            </div>
                          </a>
                        </li>
                        <br />
                        <li>
                          <a v-bind:href="baseurl + '/faq'" title="FAQ">
                            <div uk-grid>
                              <div class="uk-width-auto">
                                <img
                                  v-bind:src="
                                    baseurl + '/assets/png/frontend/laptop.png'
                                  "
                                  width="50"
                                  alt="laptop"
                                />
                              </div>
                              <div
                                class="
                                  uk-width-expand
                                  center-vertical
                                  uk-text-left
                                "
                              >
                                <p class="white-space-normal font16">FAQ</p>
                              </div>
                            </div>
                          </a>
                        </li>
                        <br />
                        <li>
                          <a
                            v-bind:href="baseurl + '/downloads'"
                            title="Downloads"
                          >
                            <div uk-grid>
                              <div class="uk-width-auto">
                                <img
                                  v-bind:src="
                                    baseurl +
                                    '/assets/png/frontend/download.png'
                                  "
                                  width="50"
                                  alt="download"
                                />
                              </div>
                              <div
                                class="
                                  uk-width-expand
                                  center-vertical
                                  uk-text-left
                                "
                              >
                                <p class="white-space-normal font16">
                                  Downloads
                                </p>
                              </div>
                            </div>
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div>
                      <ul class="uk-nav uk-dropdown-nav">
                        <li>
                          <a
                            v-bind:href="baseurl + '/kontakt'"
                            title="Kontaktformular"
                          >
                            <div uk-grid>
                              <div class="uk-width-auto">
                                <img
                                  v-bind:src="
                                    baseurl + '/assets/png/frontend/kontakt.png'
                                  "
                                  width="50"
                                  alt="kontakt"
                                />
                              </div>
                              <div
                                class="
                                  uk-width-expand
                                  center-vertical
                                  uk-text-left
                                "
                              >
                                <p class="white-space-normal font16">Kontakt</p>
                              </div>
                            </div>
                          </a>
                        </li>
                        <br />
                        <li>
                          <a
                            v-bind:href="baseurl + '/newsletter'"
                            title="Newsletter"
                          >
                            <div uk-grid>
                              <div class="uk-width-auto">
                                <img
                                  v-bind:src="
                                    baseurl + '/assets/png/frontend/bulb.png'
                                  "
                                  width="50"
                                  alt="bulb"
                                />
                              </div>
                              <div
                                class="
                                  uk-width-expand
                                  center-vertical
                                  uk-text-left
                                "
                              >
                                <p class="white-space-normal font16">
                                  Newsletter
                                </p>
                              </div>
                            </div>
                          </a>
                        </li>
                        <br />
                        <!-- <li>
													<a
														v-bind:href="
															baseurl + '/veranstaltungenwebinare/webinar-nach-control-iq-upgrade'
														"
														title="Webinar nach Upgrade Control-IQ"
													>
														<div uk-grid>
															<div class="uk-width-auto">
																<img
																	v-bind:src="
																		baseurl +
																			'/assets/png/frontend/kalender.png'
																	"
																	width="50"
																	alt="kalender"
																/>
															</div>
															<div
																class="uk-width-expand center-vertical uk-text-left"
															>
																<p class="white-space-normal font16">
																	Webinar nach Upgrade Control-IQ
																</p>
															</div>
														</div>
													</a>
												</li> -->
                        <li style="display: flex">
                          <a
                            v-bind:href="baseurl + '/veranstaltungenwebinare'"
                            title="Veranstaltungen & Webinare"
                          >
                            <div uk-grid>
                              <div class="uk-width-auto">
                                <img
                                  v-bind:src="
                                    baseurl +
                                    '/assets/png/frontend/vitalaire-webicon-kalender-online-training-tslim-x2-insulinpumpe.png'
                                  "
                                  width="50"
                                  alt="vitalaire-webicon-kalender-online-training-tslim-x2-insulinpumpe"
                                />
                              </div>
                              <div
                                class="
                                  uk-width-expand
                                  center-vertical
                                  uk-text-left
                                "
                              >
                                <p class="white-space-normal font16">
                                  Veranstaltungen & Webinare
                                </p>
                              </div>
                            </div>
                          </a>
                          <span
                            style="cursor: pointer; margin: auto"
                            @click="toggleAccordin"
                            v-bind:uk-icon="[
                              accordinShown
                                ? 'icon: chevron-down; ratio: 2'
                                : 'icon: chevron-right; ratio: 2',
                            ]"
                          ></span>
                        </li>
                        <div
                          v-bind:class="[
                            accordinShown
                              ? 'custom-accordin-show'
                              : 'custom-accordin-hide',
                          ]"
                          style="padding-left: 25px"
                        >
                          <ul class="uk-nav uk-dropdown-nav">
                            <li>
                              <a
                                v-bind:href="
                                  baseurl +
                                  '/veranstaltungenwebinare/fachkreise'
                                "
                                title="Für Fachkreise"
                                style="
                                  padding-top: 0;
                                  padding-bottom: 0;
                                  margin-top: 0;
                                  margin-bottom: 0;
                                "
                              >
                                <div uk-grid>
                                  <div class="uk-width-auto">
                                    <img
                                      v-bind:src="
                                        baseurl +
                                        '/assets/images/frontend/vitalaire-diabetes-menue-fachkreise.png'
                                      "
                                      width="20"
                                      alt="control"
                                    />
                                  </div>
                                  <div
                                    class="
                                      uk-width-expand
                                      center-vertical
                                      uk-text-left
                                    "
                                  >
                                    <p class="white-space-normal font16">
                                      Für Fachkreise
                                    </p>
                                  </div>
                                </div>
                              </a>
                            </li>
                            <li>
                              <a
                                v-bind:href="
                                  baseurl + '/veranstaltungenwebinare/patienten'
                                "
                                title="Für Patienten"
                                style="
                                  padding-top: 0;
                                  padding-bottom: 0;
                                  margin-top: 0;
                                  margin-bottom: 0;
                                "
                              >
                                <div uk-grid>
                                  <div class="uk-width-auto">
                                    <img
                                      v-bind:src="
                                        baseurl +
                                        '/assets/images/frontend/vitalaire-diabetes-menue-patienten.png'
                                      "
                                      width="20"
                                      alt="basal"
                                    />
                                  </div>
                                  <div
                                    class="
                                      uk-width-expand
                                      center-vertical
                                      uk-text-left
                                    "
                                  >
                                    <p class="white-space-normal font16">
                                      Für Patienten
                                    </p>
                                  </div>
                                </div>
                              </a>
                            </li>
                            <li>
                              <a
                                v-bind:href="
                                  baseurl +
                                  '/veranstaltungenwebinare/webinar-nach-control-iq-upgrade'
                                "
                                title="Webinar nach Upgrade Control-IQ"
                                style="
                                  padding-top: 0;
                                  padding-bottom: 0;
                                  margin-top: 0;
                                  margin-bottom: 0;
                                "
                              >
                                <div uk-grid>
                                  <div class="uk-width-auto">
                                    <img
                                      v-bind:src="
                                        baseurl +
                                        '/assets/images/frontend/vitalaire-diabetes-menue-webinare.png'
                                      "
                                      width="20"
                                      alt="basal"
                                    />
                                  </div>
                                  <div
                                    class="
                                      uk-width-expand
                                      center-vertical
                                      uk-text-left
                                    "
                                  >
                                    <p class="white-space-normal font16">
                                      Webinar nach Upgrade Control-IQ
                                    </p>
                                  </div>
                                </div>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
              <li
                class="page5-active"
                onmouseover="naveover5()"
                onmouseout="navout5()"
                id="nav5"
              >
                <a class="navlink font24" v-bind:href="baseurl + '/blog'"
                  >Blog</a
                >
              </li>
              <li
                class="page3-active"
                onmouseover="naveover3()"
                onmouseout="navout3()"
                id="nav3"
              >
                <a class="navlink font24" v-bind:href="baseurl + '/vitalaire'"
                  >VitalAire</a
                >
              </li>
              <li
                class="page4-active"
                id="nav4"
                onmouseover="naveover4()"
                onmouseout="navout4()"
              >
                <a
                  class="navlink font24"
                  href="https://www.vitalaire.de/de/shop/641#category-navigation"
                  target="_blank"
                  rel="noopener"
                  >Shop</a
                >
              </li>
            </ul>
          </div>
        </nav>
      </div>
      <br class="des" />

      <div id="offcanvas-nav" uk-offcanvas=" overlay: true">
        <div class="uk-offcanvas-bar">
          <br /><br />
          <div class="uk-child-width-1-2 boundary-align" uk-grid>
            <div>
              <a
                uk-icon="icon: search; ratio: 1.5"
                class="sideicons"
                v-bind:href="baseurl + '/search'"
              ></a>
            </div>
          </div>
          <ul class="uk-nav uk-navbar-default uk-nav-parent-icon" uk-nav>
            <a
              class="closeicon uk-offcanvas-close"
              href="#offcanvas-nav"
              uk-close
            ></a>
            <br />
            <li class="uk-parent">
              <a class="navlink page1-active"><b>t:slim X2</b></a>
              <ul style="padding-left: 0" class="uk-nav-sub uk-text-left">
                <li>
                  <a
                    class="line-height1 txt-light"
                    v-bind:href="baseurl + '/tslim-x2-insulinpumpe'"
                    >t:slim X2 Insulinpumpe</a
                  ><br />
                </li>
                <li>
                  <a
                    class="line-height1 txt-light"
                    v-bind:href="baseurl + '/control-iq-technologie'"
                    >Control-IQ Technologie</a
                  ><br />
                </li>
                <li>
                  <a
                    class="line-height1 txt-light"
                    v-bind:href="baseurl + '/basal-iq-technologie'"
                    >Basal-IQ Technologie</a
                  ><br />
                </li>
                <li>
                  <a
                    class="line-height1 txt-light"
                    v-bind:href="baseurl + '/integration-rtcgm'"
                    >Integration rtCGM</a
                  ><br />
                </li>
                <li>
                  <a
                    class="line-height1 txt-light"
                    v-bind:href="baseurl + '/anwendung-diasend-glooko'"
                    >Anwendung Diasend by glooko</a
                  ><br />
                </li>
                <li>
                  <a
                    class="line-height1 txt-light"
                    v-bind:href="baseurl + '/verbrauchsmaterialien-zubehoer'"
                    >Verbrauchsmaterialien & Zubehör</a
                  >
                  <br />
                </li>
                <li>
                  <a
                    v-bind:href="baseurl + '/informationen-fur-fachkreise'"
                    style="display: inline-block"
                    class="line-height1 txt-light"
                    >Informationen für Fachkreise</a
                  >
                  <span
                    @click="toggleAccordin"
                    v-bind:uk-icon="[
                      accordinShown
                        ? 'icon: chevron-down; ratio: 1'
                        : 'icon: chevron-left; ratio: 1',
                    ]"
                  ></span>
                  <div
                    v-bind:class="[
                      accordinShown
                        ? 'custom-accordin-show'
                        : 'custom-accordin-hide',
                    ]"
                  >
                    <a
                      class="line-height1 txt-light"
                      v-bind:href="baseurl + '/control-iq-informationen'"
                      >Control-IQ Technologie</a
                    >
                    <br />
                    <a
                      class="line-height1 txt-light"
                      v-bind:href="baseurl + '/basal-iq-informationen'"
                      >Basal-IQ Technologie</a
                    >
                  </div>
                </li>
              </ul>
            </li>
            <br />
            <li class="uk-parent">
              <a class="navlink page2-active"><b>Service & Support</b></a>
              <ul style="padding-left: 0" class="uk-nav-sub uk-text-left">
                <li>
                  <a
                    class="line-height1 txt-light"
                    v-bind:href="baseurl + '/tslim-x2-insulinpumpe-beantragen'"
                    >Die t:slim X2 Insulinpumpe beantragen</a
                  ><br />
                </li>
                <li>
                  <a
                    class="line-height1 txt-light"
                    v-bind:href="
                      baseurl + '/erste-schritte-tslim-x2-insulinpumpe'
                    "
                    >Erste Schritte mit der t:slim X2</a
                  ><br />
                </li>
                <li>
                  <a
                    class="line-height1 txt-light"
                    v-bind:href="
                      baseurl + '/videos-tslim-x2-insulinpumpe-einstellen'
                    "
                    >Videos zum Einstellen der t:slim X2</a
                  ><br />
                </li>
                <li>
                  <a
                    class="line-height1 txt-light"
                    v-bind:href="baseurl + '/tslim-x2-insulinpumpe-im-alltag'"
                    >Die t:slim X2 im Alltag</a
                  ><br />
                </li>
                <li>
                  <a
                    class="line-height1 txt-light"
                    v-bind:href="baseurl + '/faq'"
                    >FAQ</a
                  ><br />
                </li>
                <li>
                  <a
                    class="line-height1 txt-light"
                    v-bind:href="baseurl + '/downloads'"
                    >Downloads</a
                  ><br />
                </li>
                <li>
                  <a
                    class="line-height1 txt-light"
                    v-bind:href="baseurl + '/kontakt'"
                    >Kontakt</a
                  ><br />
                </li>
                <li>
                  <a
                    class="line-height1 txt-light"
                    v-bind:href="baseurl + '/newsletter'"
                    >Newsletter</a
                  ><br />
                </li>
                <!-- <li>
                  <a
                    class="line-height1 txt-light"
                    v-bind:href="baseurl + '/veranstaltungenwebinare/webinar-nach-control-iq-upgrade'"
                    >Webinar nach Upgrade Control-IQ</a
                  >
                </li> -->
                <li>
                  <a
                    v-bind:href="baseurl + '/veranstaltungenwebinare'"
                    style="display: inline-block"
                    class="line-height1 txt-light"
                    >Veranstaltungen & Webinare</a
                  >
                  <span
                    @click="toggleAccordin"
                    v-bind:uk-icon="[
                      accordinShown
                        ? 'icon: chevron-down; ratio: 1'
                        : 'icon: chevron-left; ratio: 1',
                    ]"
                  ></span>
                  <div
                    v-bind:class="[
                      accordinShown
                        ? 'custom-accordin-show'
                        : 'custom-accordin-hide',
                    ]"
                  >
                    <a
                      class="line-height1 txt-light"
                      v-bind:href="
                        baseurl + '/veranstaltungenwebinare/fachkreise'
                      "
                      >Für Fachkreise</a
                    >
                    <br />
                    <a
                      class="line-height1 txt-light"
                      v-bind:href="
                        baseurl + '/veranstaltungenwebinare/patienten'
                      "
                      >Für Patienten</a
                    >
                    <br />
                    <a
                      class="line-height1 txt-light"
                      v-bind:href="
                        baseurl +
                        '/veranstaltungenwebinare/webinar-nach-control-iq-upgrade'
                      "
                      >Webinar nach Upgrade Control-IQ</a
                    >
                  </div>
                </li>
              </ul>
            </li>
            <br />
            <li>
              <a class="navlink page5-active" v-bind:href="baseurl + '/blog'"
                ><b>Blog</b></a
              >
            </li>
            <br />
            <li>
              <a
                class="navlink page3-active"
                v-bind:href="baseurl + '/vitalaire'"
                ><b>VitalAire</b></a
              >
            </li>
            <br />
            <li>
              <a
                class="navlink page4-active"
                href="https://www.vitalaire.de/de/shop/641#category-navigation"
                target="_blank"
                rel="noopener"
                ><b>Shop</b></a
              >
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div
      id="studien-confirm-base"
      class="uk-flex-top"
      uk-modal="esc-close: false; bg-close: false;"
    >
      <div
        id="studien-confirm-text"
        class="
          uk-modal-dialog uk-modal-body uk-margin-auto-vertical uk-text-center
        "
        style="border: 5px solid #487886"
      >
        <button
          class="consent-close uk-modal-close-default"
          uk-close="ratio: 1.5"
          onclick="hideStudienModal()"
        ></button>
        <h3 style="letter-spacing: 1.2px; color: #487886">
          <b>Bestätigung der Nutzung</b>
        </h3>
        <p style="color: #487886">
          Die folgenden Informationen sind ausschließlich für <b>Ärzte</b>,
          <b>Kliniken</b> und <b>Medizinisches Fachpersonal</b> bestimmt.
        </p>
        <p style="color: #487886">
          Mit dem Klick auf “AKZEPTIEREN UND WEITER” wird bestätigt, zu den o.g.
          Fachkreisen zu gehören.
        </p>
        <div class="consent-padding">
          <a v-bind:href="baseurl + '/studien-fuer-fachkreise'">
            <button class="custom-button consent-button-darker">
              AKZEPTIEREN UND WEITER
            </button>
          </a>
          <p></p>
          <button
            onclick="hideStudienModal()"
            class="custom-button consent-button-inverse"
          >
            ABLEHNEN UND ZURÜCK
          </button>
        </div>
        <br />
      </div>
    </div>
  </header>
</template>

<script lang="ts">
import Vue from "vue";
import { Component, Prop } from "vue-property-decorator";
import { baseurl } from "./component/main.ts";
import Axios from "axios";
import TextHighlight from "vue-text-highlight";

@Component
export default class Headercomponent extends Vue {
  @Prop({ required: false }) readonly url: string;
  @Prop({ required: false }) readonly pageslist: string;

  baseurl = baseurl;
  searchtext: string = "";
  pages: any = [];
  accordinShown: boolean = false;

  created() {
    Vue.component("text-highlight", TextHighlight);
    Vue.filter("snippet", (value) => {
      var searchtextindex = value
        .toLowerCase()
        .search(this.searchtext.toLowerCase());
      var startindex = searchtextindex - 30;
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

  toggleAccordin() {
    this.accordinShown = !this.accordinShown;
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
      return page[0].toLowerCase().indexOf(this.searchtext.toLowerCase()) >= 0;
    });
  }
}
</script>
