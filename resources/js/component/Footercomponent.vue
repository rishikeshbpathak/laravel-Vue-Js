<template>
  <footer>
    <div class="footerbg">
      <div class="footertopsection">
        <br />
        <br />
        <br />
        <a
          href="header"
          class="footerarrowicon"
          uk-icon="icon: chevron-up; ratio: 1.5"
          uk-scroll
        ></a>
        <br />
        <br />
        <br />
        <img
          v-bind:src="url + '/assets/png/frontend/vitalairelogohalf.png'"
          width="300"
          alt="logo"
        />
        <br />
        <br />
        <br />
      </div>
      <div class="footerbottomsection">
        <div
          class="uk-child-width-1-4@l uk-child-width-1-2@m uk-child-width-1-1@s"
          uk-grid
        >
          <div>
            <div>
              <h4 class="text-gray roboto-slab-regular footerh4tag">
                Kundenservice
              </h4>
              <div class="uk-grid-column-small uk-grid-row-large" uk-grid>
                <div class="uk-width-auto">
                  <span class="footergridicons" style="margin-top: 5%"
                    ><img
                      style="color: #c5c5c5"
                      v-bind:src="url + '/assets/svg/frontend/phone.svg'"
                      width="30"
                      height="30"
                      alt="fax"
                    /> </span
                  >&nbsp;
                </div>
                <div class="uk-width-expand">
                  <a class="text-gray kontakt-link" href="tel:0800/1001644">
                    <h3
                      class="footerh2ptag numberfooter text-gray kontakt-link"
                    >
                      0800/100 16 44*
                    </h3>
                  </a>
                  <footer class="footernumberfooter text-gray text-lessbold">
                    *kostenlos aus dem deutschen Festznetz
                  </footer>
                </div>
              </div>
              <br />
              <div class="uk-grid-column-small uk-grid-row-large" uk-grid>
                <div class="uk-width-auto">
                  <span class="footergridicons" style="margin-top: 5%"
                    ><img
                      style="color: #c5c5c5"
                      v-bind:src="url + '/assets/svg/frontend/phone24.svg'"
                      width="30"
                      height="30"
                      alt="fax"
                    /> </span
                  >&nbsp;
                </div>
                <div class="uk-width-expand">
                  <header class="text-gray roboto-bold" style="font-size: 14px">
                    24-Stunden-Hotline aus dem Ausland
                  </header>
                  <a
                    class="text-gray kontakt-link"
                    href="tel:+49(0)421/48631863"
                  >
                    <h3
                      class="footerh2ptag numberfooter text-gray kontakt-link"
                    >
                      +49 (0)421/48 63 18 63
                    </h3>
                  </a>
                </div>
              </div>
              <br />
              <div class="uk-grid-column-small uk-grid-row-large" uk-grid>
                <div class="uk-width-auto">
                  <span class="footergridicons" style="margin-top: 5%">
                    <img
                      style="color: #c5c5c5"
                      v-bind:src="
                        url + '/assets/icons/Fax-Icon_-_Expand-grey-02.svg'
                      "
                      width="30"
                      height="30"
                      alt="fax"
                    /> </span
                  >&nbsp;
                </div>
                <div class="uk-width-expand">
                  <a class="text-gray kontakt-link" href="tel:0800/1001644">
                    <h3
                      class="footerh2ptag numberfooter text-gray kontakt-link"
                    >
                      0800/884 78 63*
                    </h3>
                  </a>
                  <footer class="footernumberfooter text-gray text-lessbold">
                    *kostenlos aus dem deutschen Festznetz
                  </footer>
                </div>
              </div>
              <br />
              <div class="uk-grid-column-small uk-grid-row-large" uk-grid>
                <div class="uk-width-auto">
                  <span
                    class="footergridicons"
                    uk-icon="icon: mail; ratio: 1.5"
                  ></span
                  >&nbsp;
                </div>
                <div>
                  <a
                    class="
                      text-gray text-lessbold
                      responsive-text-size
                      kontakt-link
                    "
                    href="mailto:diabetes@vitalaire.de"
                    >diabetes@vitalaire.de</a
                  >
                  <footer></footer>
                </div>
              </div>
              <br />
              <div class="uk-grid-column-small uk-grid-row-large" uk-grid>
                <div class="uk-width-auto">
                  <span
                    class="footergridicons"
                    uk-icon="icon: location; ratio: 1.5"
                  ></span
                  >&nbsp;
                </div>
                <div class="uk-width-expand">
                  <p
                    class="
                      footerh2ptag
                      text-gray
                      roboto-bold
                      responsive-text-size
                    "
                  >
                    <b>Postadresse für Rezepte</b>
                  </p>

                  <p
                    class="
                      footerh2ptag
                      text-gray text-lessbold
                      responsive-text-size
                    "
                  >
                    VitalAire GmbH
                  </p>
                  <p
                    class="
                      footerh2ptag
                      text-gray text-lessbold
                      responsive-text-size
                    "
                  >
                    Niederlassung Stuttgart <br />
                    - Bereich Diabetes - <br />
                    Mühleweg 5/1 <br />
                    72800 Eningen u.A.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div>
              <h4 class="text-gray roboto-slab-regular footerh4tag">
                Insulinpumpe
              </h4>
              <p class="footerptag">
                <a
                  class="atag text-gray text-lessbold responsive-text-size"
                  v-bind:href="url + '/tslim-x2-insulinpumpe'"
                  >t:slim X2 Insulinpumpe</a
                >
              </p>
              <p class="footerptag">
                <a
                  class="atag text-gray text-lessbold responsive-text-size"
                  v-bind:href="url + '/control-iq-technologie'"
                  >Control-IQ Technologie</a
                >
              </p>
              <p class="footerptag">
                <a
                  class="atag text-gray text-lessbold responsive-text-size"
                  v-bind:href="url + '/basal-iq-technologie'"
                  >Basal-IQ Technologie</a
                >
              </p>
              <p class="footerptag">
                <a
                  class="atag text-gray text-lessbold responsive-text-size"
                  v-bind:href="url + '/integration-rtcgm'"
                  >Integration rtCGM</a
                >
              </p>
              <p class="footerptag">
                <a
                  class="atag text-gray text-lessbold responsive-text-size"
                  v-bind:href="url + '/anwendung-diasend-glooko'"
                  >Anwendung diasend by glooko</a
                >
              </p>
              <p class="footerptag">
                <a
                  class="atag text-gray text-lessbold responsive-text-size"
                  v-bind:href="url + '/verbrauchsmaterialien-zubehoer'"
                  >Verbrauchsmaterialien & Zubehör</a
                >
              </p>
              <p class="footerptag">
                <a
                  class="atag text-gray text-lessbold responsive-text-size"
                  target="_blank"
                  rel="noopener"
                  href="https://www.vitalaire.de/de/shop/641#category-navigation"
                  >Shop</a
                >
              </p>
            </div>
          </div>
          <div>
            <div>
              <h4 class="text-gray roboto-slab-regular footerh4tag">
                Hilfe & Support
              </h4>
              <p class="footerptag">
                <a
                  class="atag text-gray text-lessbold responsive-text-size"
                  v-bind:href="url + '/videos-tslim-x2-insulinpumpe-einstellen'"
                  >Videos zum Einstellen der t:slim X2</a
                >
              </p>
              <p class="footerptag">
                <a
                  class="atag text-gray text-lessbold responsive-text-size"
                  v-bind:href="url + '/faq'"
                  >FAQ</a
                >
              </p>
              <p class="footerptag">
                <a
                  class="atag text-gray text-lessbold responsive-text-size"
                  v-bind:href="url + '/kontakt'"
                  >Kontaktformular</a
                >
              </p>
              <p class="footerptag">
                <a
                  class="atag text-gray text-lessbold responsive-text-size"
                  v-bind:href="url + '/downloads'"
                  >Downloads</a
                >
              </p>
              <p class="footerptag">
                <a
                  class="atag text-gray text-lessbold responsive-text-size"
                  v-bind:href="url + '/newsletter'"
                  >Newsletter</a
                >
              </p>
              <p class="footerptag">
                <a
                  class="atag text-gray text-lessbold responsive-text-size"
                  v-bind:href="url + '/downloads/medien'"
                  >Medien</a
                >
              </p>
            </div>
          </div>
          <div>
            <div>
              <h4 class="text-gray roboto-slab-regular footerh4tag">
                Folgt uns auf
              </h4>
              <div
                class="uk-child-width-1-2 footer-social-icon-padding"
                uk-grid
              >
                <a
                  class="atag"
                  target="_blank"
                  rel="noopener"
                  href="https://www.instagram.com/tslim_insulinpumpe/"
                  uk-icon="icon: instagram; ratio: 2.5"
                ></a>
                <a
                  class="atag"
                  target="_blank"
                  rel="noopener"
                  href="https://www.youtube.com/channel/UC9vtebSfodK06daBxhEd0VA"
                  uk-icon="icon: youtube; ratio: 2.5"
                ></a>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div>
            <p class="text-gray text-lessbold font13" style="margin-top: 50px">
              <b class="roboto-bold">Hinweis:</b> <br />
              <span style="display: block; line-height: 1.2">
                * Wenn Glukosewarnungen und CGM-Werte nicht zu den Symptomen
                oder Erwartungen passen, verwenden Sie für Entscheidungen zur
                Diabetesbehandlung ein Blutzuckermessgerät!
                <br />
                <br />
                Systeme wie die t:slim X2 Insulinpumpe mit Basal-IQ™ Technologie
                sind kein Ersatz für ein aktives Diabetesmanagement, da es
                Situationen gibt, bei denen auch automatische Systeme keine
                Hypoglykämie verhindern können. Die Basal-IQ Funktion basiert
                auf kontinuierlichen CGM-Messwerten und kann weder den
                Glukosespiegel vorhersagen noch die Insulinabgabe unterbrechen,
                wenn Ihr CGM nicht ordnungsgemäß funktioniert oder nicht mit der
                Pumpe kommunizieren kann. Verwenden Sie Pumpe, Reservoir, CGM
                und Infusionssets immer wie vorgegeben und überprüfen Sie sie
                regelmäßig, um eine ordnungsgemäße Funktion zu gewährleisten.
                Achten Sie immer auf Ihre Symptome, überwachen Sie aktiv Ihren
                Glukosespiegel und behandeln Sie gemäß den Empfehlungen Ihres
                Arztes.
                <br />
                Auch mit fortschrittlichen Systemen wie der t:slim X2
                Insulinpumpe mit Control-IQ™ Technologie sind Sie weiterhin für
                das aktive Management Ihres Diabetes verantwortlich, da auch die
                Control-IQ Technologie nicht alle hohen und niedrigen
                Blutzuckerereignisse verhindern kann. Das System wurde
                entwickelt, um Blutzuckerschwankungen zu verringern, erfordert
                jedoch die genaue Eingabe von Informationen wie Mahlzeiten,
                Schlafzeiten oder Bewegung. Die Control-IQ-Technologie ersetzt
                nicht die Bolusgabe zur Nahrungsaufnahme oder Korrektur hoher
                Glukosewerte und behandelt keine niedrigen Blutzuckerwerte.
                <br />
                Die Control-IQ Funktion basiert auf kontinuierlichen
                CGM-Messwerten und kann weder den Glukosespiegel vorhersagen
                noch die Insulinabgabe anpassen, wenn Ihr CGM nicht
                ordnungsgemäß funktioniert oder nicht mit der Pumpe
                kommunizieren kann. Verwenden Sie Pumpe, Reservoir, CGM und
                Infusionssets immer wie vorgegeben und überprüfen Sie sie
                regelmäßig, um eine ordnungsgemäße Funktion zu gewährleisten.
                Achten Sie immer auf Ihre Symptome, überwachen Sie aktiv Ihren
                Glukosespiegel und behandeln Sie gemäß den Empfehlungen Ihres
                Arztes.
              </span>
            </p>
            <p class="text-gray text-lessbold font13">
              <b class="roboto-bold">Quellen:</b> <br />
              <b class="roboto-bold">Basal-IQ:</b> <br />
              <span style="display: block; line-height: 1.2">
                1. Forlenza GP, Li Z, Buckingham BA, et al. Predictive low
                glucose suspend reduces hypoglycemia in adults, adolescents, and
                children with type 1 diabetes in an at-home randomized crossover
                study: Results of the PROLOG trial. Diabetes Care.
                2018;41(10):2155-2161.
              </span>
              <span style="display: block; line-height: 1.2">
                2. Beck RW, et al. The association of biochemical hypoglycemia
                with the subsequent risk of a severe hypoglycemic event:
                analysis of the DCCT data set. Diabetes Technol Ther.
              </span>
              <b class="roboto-bold">Control-IQ:</b> <br />
              <span style="display: block; line-height: 1.2">
                1. Brown SA, Kovatchev BP, Raghinaru D, et al. Six-month
                randomized, multicenter trial of closed-loop control in type 1
                diabetes. N Eng J Med. 2019;381(18):1701-1717.
              </span>
              <span style="display: block; line-height: 1.2">
                2. Brown, S. Clinical acceptance of the artificial pancreas:
                Glycemia outcomes from a 6-month multicenter RCT. 2019 ADA 79th
                Scientific Sessions, San Francisco, CA.
              </span>
            </p>
            <div
              class="text-gray text-lessbold font13"
              style="margin-bottom: 20px"
            >
              <div uk-grid>
                <div class="uk-width-auto">
                  <img
                    width="100"
                    v-bind:src="
                      url +
                      '/assets/images/frontend/tandem-diabetes-logo-tslim-x2-insulinpumpe.png'
                    "
                    alt="tandem"
                  />
                </div>
                <div class="uk-width-expand" style="padding-left: 20px">
                  <span
                    class="font13"
                    style="display: block; line-height: 1.2; color: #e9e9e9"
                  >
                    © Tandem Diabetes Care, Control-IQ und Basal-IQ sind Marken
                    von Tandem Diabetes Care, Inc., eingetragen in den USA und
                    anderen Ländern. t:slim X2 und t:simulator sind Marken von
                    Tandem Diabetes Care, Inc.
                  </span>
                </div>
              </div>
              <br />
              <span
                class="font13"
                style="display: block; line-height: 1.2; color: #e9e9e9"
              >
                Dexcom und Dexcom G6 ist entweder eine eingetragene Marke oder
                eine Marke von Dexcom, Inc. in den USA und/oder anderen Ländern.
                Apple und das Apple-Logo sind Marken von Apple Inc., eingetragen
                in den USA und anderen Ländern. App Store ist eine
                Dienstleistungsmarke von Apple Inc. Google Play ist eine Marke
                von Google Inc.
              </span>
            </div>
          </div>
        </div>

        <div uk-grid class="uk-visible@m">
          <div class="uk-width-expand">
            <div class="uk-text-left">
              <span class="text-gray text-lessbold">
                © {{ new Date().getFullYear() }} VitalAire GmbH. Alle Rechte
                vorbehalten.
              </span>
            </div>
          </div>
          <div class="uk-width-auto">
            <div class="uk-text-right">
              <div class="uk-inline footer-link">
                <a
                  class="atag text-gray text-lessbold"
                  v-bind:href="url + '/impressum'"
                >
                  Impressum
                </a>
                <a
                  class="atag text-gray text-lessbold"
                  v-bind:href="url + '/datenschutz'"
                >
                  Datenschutz
                </a>
                <a
                  class="atag text-gray text-lessbold"
                  v-bind:href="url + '/nutzungsbedingungen'"
                >
                  Nutzungsbedingungen
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="uk-hidden@m">
          <div>
            <div class="uk-text-left">
              <div class="uk-inline footer-link">
                <a
                  class="atag text-gray text-lessbold"
                  v-bind:href="url + '/impressum'"
                >
                  Impressum
                </a>
                <a
                  class="atag text-gray text-lessbold"
                  v-bind:href="url + '/datenschutz'"
                >
                  Datenschutz
                </a>
                <a
                  class="atag text-gray text-lessbold"
                  v-bind:href="url + '/nutzungsbedingungen'"
                >
                  Nutzungsbedingungen
                </a>
              </div>
            </div>
          </div>
          <div>
            <div class="uk-text-left">
              <span class="text-gray text-lessbold">
                © {{ new Date().getFullYear() }} VitalAire GmbH. Alle Rechte
                vorbehalten.
              </span>
            </div>
          </div>
        </div>
        <br />
        <br />
      </div>
    </div>
  </footer>
</template>

<script lang="ts">
import Vue from "vue";
import { Component } from "vue-property-decorator";
import { baseurl } from "./main";

@Component
export default class Footercomponent extends Vue {
  url = baseurl;
}
</script>
