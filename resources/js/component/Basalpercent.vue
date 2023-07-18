<template>
  <div class="firstscroll">
    <br>
    <div class="cust-padding uk-padding-remove-bottom uk-padding-remove-top">
      <br>
        <h3 class="roboto-slab-regular txt-blue font28">Die PROLOG-Studie<sup class="sup-prolog">1</sup></h3>
        <br>
        <br>
      <div>
        <h3 class="roboto-bold txt-blue font26 uk-margin-remove-bottom">
          Studienziel
        </h3>
        <p class="font18 uk-margin-remove-top">
          Untersucht wurde die Sicherheit und Wirksamkeit eines in der t:slim
          X2 Insulinpumpe integrierten prädiktiven Algorithmus zur
          automatischen Unterbrechung der Insulinzufuhr bei Detektion niedriger
          Glukosewerte (Basal-IQ Technologie) zur Reduktion von Hypoglykämien.
          Die Insulinzufuhr wird automatisch unterbrochen, wenn der Algorithmus
          aufgrund der aktuell gemessenen CGM-Werte ein Absinken des
          Glukosespiegels auf unter 80 mg/dl innerhalb der nächsten 30 Minuten
          vorhersagt. Die Insulingabe wird automatisch wieder aufgenommen,
          sobald der CGM-Sensor einen Glukoseanstieg verzeichnet.
        </p>
        <h3 class="roboto-bold txt-grey font26 uk-margin-remove-bottom">
          Einschlusskriterien:
        </h3>
        <p class="font18 uk-margin-remove-top">
          <ul>
            <li>
              Diagnose eines Diabetes mellitus Typ 1 seit mindestens einem Jahr
            </li>
            <li>
              Alter > 6 Jahre
            </li>
            <li>Insulinpumpe oder mehrere Injektionen am Tag</li>
            <li>CGM-Anwender oder naiv</li>
            <li>Keine Einschränkungen bzgl. des HbA1C-Wertes</li>
          </ul>
        </p>
        <h3 class="roboto-bold txt-grey font26 uk-margin-remove-bottom">
          Studienmethodik:
        </h3>
        <p class="font18 uk-margin-remove-top">
          Randomisierte, Cross-over-Studie mit 102 Patienten, die zuhause drei Wochen lang entweder die Basal-IQ-Pumpe oder eine Insulinpumpe mit Sensorunterstützung (Sensor-unterstützte Pumpentherapie, SUP) verwendeten. Nach den ersten 3 Wochen wechselten die Studienteilnehmer in den jeweils anderen Studienarm.
        </p>
        <div class="uk-text-center">
        <img v-bind:src="url + '/assets/images/frontend/vitalaire-diabetes-prolog-studie-tslim-x2-insulinpumpe-verbesserte-studienmethodik.png'" alt="vitalaire-diabetes-prolog-studie-tslim-x2-insulinpumpe-verbesserte-studienmethodik">
        </div>
      </div>
      <div class="uk-text-center">
        <div>
          <div
            class="uk-grid-match uk-child-width-1-1@s uk-child-width-1-2@m"
            uk-grid
          >
            <div class="grid-center uk-text-left">
              <div >
                <h3 class="roboto-bold txt-blue font26"> 
                  Ergebnisse: Reduzierte Hypoglykämieraten
                </h3>
                <p class="font18">
                  Im Basal-IQ-Arm zeigten die Ergebnisse insgesamt <b>eine relative Reduktion der Sensorzeit unter 70 mg/dl von 31 %.</b> Bei Patienten, die während der Run-in-Phase (Baseline) mehrere hypoglykämische Episoden zeigten, lag die relative Reduktion der Sensorzeit unter 70 mg/dl bei 40 %. In allen Subgruppenanalysen wurden weniger Hypoglykämien beobachtet, unabhängig von einer früheren Pumpen- und/oder CGM-Therapie.
                </p>
              </div>
            </div>
            <div class="grid-center uk-text-center">
              <div>
                <br class="" />
                <br class="" />
                <br class="" />
                <br class="" />
				<br class="uk-visible@m">
				<br class="uk-visible@m">
				<br class="uk-visible@m">
                <div class="uk-inline">
                  <div class="percent-card">
                    <div class="percent-box">
                      <div class="percent-main">
                        <div class="percent-circle-background">
                          <svg
                            class="circle-svg first-perc"
                            :style="'--firstperc:' + loadfirstpercent + ';'"
                          >
                            <circle cx="70" cy="70" r="70" />
                            <circle cx="70" cy="70" r="70" />
                          </svg>
                        </div>
                        <div class="percent-number">
                          <h2 class="roboto-bold txt-blue percent-text-size">
                            <span v-if="numberloaded">
                              <animate-number
                                ref="myNum"
                                from="0"
                                :to="firstnum"
                                mode="manual"
                              ></animate-number>
                            </span>
                            <span>%</span>
                          </h2>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <br />
                <br />
				<br>
                <h2 class="roboto-bold txt-blue font28">relative Reduktion</h2>
                <span
                  class="txt-blue font18"
                  style="margin-top: -20px; display: block"
                  >der Sensorzeit unter 70 mg/dl</span
                >
              </div>
            </div>
          </div>
        </div>
      </div>
      <br />
      <br />
      <br />
	    <div class="uk-text-center">
        <img v-bind:src="url + '/assets/images/frontend/vitalaire-diabetes-prolog-studie-tslim-x2-insulinpumpe-reduzierte-hypoglykaemieraten.png'" alt="vitalaire-diabetes-prolog-studie-tslim-x2-insulinpumpe-reduzierte-hypoglykaemieraten">
      </div>
		  <br>
		  <br>
		  <br>
      <div class="uk-grid-match uk-child-width-1-1@s uk-child-width-1-2@m secondscroll" uk-grid>
        <div class="grid-center">
			    <h3 class="roboto-bold txt-grey font26 uk-margin-remove-bottom">
          Verbesserte glykämische Kontrolle
          </h3>
          <p class="font18 uk-margin-remove-top">
        	  Die durchschnittliche Dauer im festgelegten Zielbereich (70-180 mg/dl) verbesserte sich im Basal-IQ-Arm um 2 %, was einer Verlängerung der Zeit im Zielbereich von 30 Minuten pro Tag entspricht. Darüber hinaus gab es zwischen dem Basal-IQ- und SUP-Arm keinen Unterschied des mittleren Glukosespiegels. Diese Ergebnisse stehen im Gegensatz zu mehreren veröffentlichten Studien zu PLGS-Systemen<sup>2,3</sup>, die einen erhöhten Glukosemittelwert sowie einen geringeren Zeitraum im gewünschten Zielbereich feststellten, und zeigen das Fehlen von einer Rebound-Hyperglykämie während der Verwendung des Basal-IQ-Systems.
          </p>
		    </div>
        <div class="grid-center uk-text-center">
          <div class="uk-inline">
            <div>
              <img
                v-bind:src="
                  url +
                  '/assets/images/frontend/vitalaire-diabetes-studie-04-tslim-x2-insulinpumpe-check.png'
                "
                alt
                width="150"
              />
            </div>
            <h2 class="roboto-bold txt-blue font28">Kein Hinweis</h2>
            <span
              class="txt-blue font18"
              style="margin-top: -20px; display: block"
            >
              auf einen Rebound-Effekt.
            </span>
          </div>
        </div>
      </div>
	    <br>
	    <br>
	    <br>
	    <div class="uk-text-center">
		    <img v-bind:src="url + '/assets/images/frontend/vitalaire-diabetes-prolog-studie-tslim-x2-insulinpumpe-verbesserte-glykaemische-kontrolle.png'" alt="vitalaire-diabetes-prolog-studie-tslim-x2-insulinpumpe-verbesserte-glykaemische-kontrolle">
	    </div>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
  </div>
		  <div class="back-circle-blue">
        <div class="cust-padding uk-padding-remove-bottom">
          <div class="uk-grid-match uk-child-width-1-1@s uk-child-width-1-2@m basal-custom-margin-top" uk-grid>
            <div class="grid-center">
              <h2 class="roboto-slab-regular txt-blue font28">Benutzerfreundlich und intuitiv zu bedienen</h2>
              <p class="font18">
                Ein zu Studienende durch die Studienteilnehmer ausgefüllter,
                validierter Fragebogen zur Bewertung der Benutzerfreundlichkeit
                des Systems<sup>1</sup>, bescheinigte eine außergewöhnlich hohe
                Benutzerfreundlichkeit.
              </p>
            </div>
            <div>
            <br class="uk-hidden@m" />
            <br class="uk-hidden@m" />
            <div class="uk-inline">
              <div class="percent-card percent-card-bigger">
                <div class="percent-box">
                  <div class="percent-main">
                    <div class="percent-circle-background">
                      <svg
                        class="circle-svg second-perc"
                        :style="'--secondperc:' + loadsecondpercent + ';'"
                      >
                        <circle cx="70" cy="70" r="70" />
                        <circle cx="70" cy="70" r="70" />
                      </svg>
                    </div>
                    <div class="percent-number">
                      <h2 class="roboto-bold txt-blue percent-text-size">
                        <span v-if="numberloaded">
                          <animate-number
                            ref="myNum1"
                            from="0"
                            :to="secondnum"
                            mode="manual"
                          ></animate-number>
                        </span>
                        <span>%</span>
                      </h2>
                    </div>
                  </div>
                </div>
              </div>
              <br class="uk-visible@m">
              <br class="uk-visible@m">
              <br >
              <div class="uk-text-center">
                <h3 class="roboto-bold txt-blue">&nbsp;</h3>
                <span
                  class="txt-blue font26 roboto-bold"
                  style="margin-top: -20px; display: block"
                >
                  fühlten sich bei der Bedienung des Systems sicher
                </span>
              </div>
            </div>
          </div>
        </div>
        <br>
        <br>
        <br class="uk-visible@m">
        <br class="uk-visible@m" />
        <br class="uk-visible@m" />
        <div
          class="uk-child-width-1-4@m uk-child-width-1-1@s uk-text-center"
          id="scrolltest"
          uk-scrollspy
          uk-grid
        >
        <div>
          <br class="uk-hidden@m" />
          <br class="uk-hidden@m" />
          <div class="uk-inline">
            <div class="percent-card">
              <div class="percent-box">
                <div class="percent-main">
                  <div class="percent-circle-background">
                    <svg
                      class="circle-svg third-perc"
                      :style="'--thirdperc:' + loadthirdpercent + ';'"
                    >
                      <circle cx="70" cy="70" r="70" />
                      <circle cx="70" cy="70" r="70" />
                    </svg>
                  </div>
                  <div class="percent-number">
                    <h2 class="roboto-bold txt-blue percent-text-size">
                      <span v-if="numberloaded">
                        <animate-number
                          ref="myNum2"
                          from="0"
                          :to="thirdnum"
                          mode="manual"
                        ></animate-number>
                      </span>
                      <span>%</span>
                    </h2>
                  </div>
                </div>
              </div>
            </div>
            <br class="uk-visible@m">
            <br class="uk-visible@m">
            <br />
            <div class="uk-text-center">
              <h3 class="roboto-bold txt-blue">&nbsp;</h3>
              <span
                class="txt-blue font18 roboto-bold"
                style="margin-top: -20px; display: block"
              >
                berichten, dass sie das System gerne regelmäßig nutzen würden.
              </span>
            </div>
          </div>
        </div>
        <div>
          <br class="uk-hidden@m" />
          <br class="uk-hidden@m" />
          <div class="uk-inline">
            <div class="percent-card">
              <div class="percent-box">
                <div class="percent-main">
                  <div
                    class="percent-circle-background"
                  >
                    <svg
                      class="circle-svg fourth-perc"
                      :style="'--fourthperc:' + loadfourthpercent + ';'"
                    >
                      <circle cx="70" cy="70" r="70" />
                      <circle data-count="90" cx="70" cy="70" r="70" />
                    </svg>
                  </div>
                  <div class="percent-number">
                    <h2
                      class="roboto-bold txt-blue percent-text-size"
                      style="color: rgb(120, 120, 120)"
                    >
                      <span v-if="numberloaded">
                        <animate-number
                          ref="myNum3"
                          from="0"
                          :to="fourthnum"
                          mode="manual"
                        ></animate-number>
                      </span>
                      <span>%</span>
                    </h2>
                  </div>
                </div>
              </div>
            </div>
            <br class="uk-visible@m">
            <br class="uk-visible@m">
            <br />
            <div class="uk-text-center">
              <h3 class="roboto-bold txt-blue">&nbsp;</h3>
              <span
                class="txt-blue font18 roboto-bold"
                style="margin-top: -20px; display: block"
              >
                waren der Meinung, dass das System leicht zu bedienen sei.
              </span>
            </div>
          </div>
        </div>
        <div>
          <br class="uk-hidden@m" />
          <br class="uk-hidden@m" />
          <div class="uk-inline">
            <div class="percent-card">
              <div class="percent-box">
                <div class="percent-main">
                  <div
                    class="percent-circle-background"
                  >
                    <svg
                      class="circle-svg fifth-perc"
                      :style="'--fifthperc:' + loadfifthpercent + ';'"
                    >
                      <circle cx="70" cy="70" r="70" />
                      <circle data-count="90" cx="70" cy="70" r="70" />
                    </svg>
                  </div>
                  <div class="percent-number">
                    <h2
                      class="roboto-bold txt-blue percent-text-size"
                      style="color: rgb(120, 120, 120)"
                    >
                      <span v-if="numberloaded">
                        <animate-number
                          ref="myNum4"
                          from="0"
                          :to="fifthnum"
                          mode="manual"
                        ></animate-number>
                      </span>
                      <span>%</span>
                    </h2>
                  </div>
                </div>
              </div>
            </div>
            <br class="uk-visible@m">
            <br class="uk-visible@m">
            <br />
            <div class="uk-text-center">
              <h3 class="roboto-bold txt-blue">&nbsp;</h3>
              <span
                class="txt-blue font18 roboto-bold"
                style="margin-top: -20px; display: block"
              >
                hatten nicht das Gefühl, dass die Bedienung mit einem hohen Lernaufwand verbunden sei.
              </span>
            </div>
          </div>
        </div>
        <div>
          <br class="uk-hidden@m" />
          <br class="uk-hidden@m" />
          <div class="uk-inline">
            <div class="percent-card">
              <div class="percent-box">
                <div class="percent-main">
                  <div
                    class="percent-circle-background"
                  >
                    <svg
                      class="circle-svg sixth-perc"
                      :style="'--sixthperc:' + loadsixthpercent + ';'"
                    >
                      <circle cx="70" cy="70" r="70" />
                      <circle data-count="90" cx="70" cy="70" r="70" />
                    </svg>
                  </div>
                  <div class="percent-number">
                    <h2
                      class="roboto-bold txt-blue percent-text-size"
                      style="color: rgb(120, 120, 120)"
                    >
                      <span v-if="numberloaded">
                        <animate-number
                          ref="myNum5"
                          from="0"
                          :to="sixthnum"
                          mode="manual"
                        ></animate-number>
                      </span>
                      <span>%</span>
                    </h2>
                  </div>
                </div>
              </div>
            </div>
            <br class="uk-visible@m">
            <br class="uk-visible@m">
            <br />
            <div class="uk-text-center">
              <h3 class="roboto-bold txt-blue">&nbsp;</h3>
              <span
                class="txt-blue font18 roboto-bold"
                style="margin-top: -20px; display: block"
              >
                hatten nicht den Eindruck, dass sie bei der Bedienung des Systems auf technischen Support angewiesen wären.
                </span>
              </div>
            </div>
          </div>
        </div>
        <br />
        <br />
        </div>
      </div>
    <div class="cust-padding uk-padding-remove-bottom">
        
          <h2 class="roboto-slab-regular txt-blue font28">
          Basal-IQ Technologie: Real World Data
          </h2>
          <br>
        <p class="font18">
          Das Auftreten von Hypoglykämien ist eine der größten Probleme bei der Behandlung des Diabetes Mellitus Typ 1.<sup>2</sup> Die Dauer von
          Glukosewerten unter 70 mg/dl ist mit einem erhöhten Risiko für schwere Hypoglykämien assoziiert.<sup>3</sup>
        </p>
        <p class="font18">
          Die Basal-IQ Technologie liefert eine 30-Minuten-Vorhersage des Glukosespiegels und unterbricht die Insulinabgabe, wenn ein Absinken
          unter 80 mg/dl erwartet wird oder ein CGM-Wert unter 70 mg/dl fällt. Die Insulinabgabe wird fortgesetzt, sobald die Sensorglukosewerte
          wieder ansteigen.
        </p>
        <p class="font18">
          Die zwischen dem 31. August 2018 und 9. Januar 2019 auf die t:connect<sup>®</sup> Diabetes Management App hochgeladenen Daten von
          Pumpenanwendern in den USA wurden anonymisiert ausgewertet. Grundlage war die Anwendung der Basal-IQ Technologie in
          drei aufeinanderfolgenden Wochen (n = 2.712) bzw. sechs aufeinanderfolgenden Wochen (n = 1.437). Diese Daten aus der Praxis
          wurden mit den Ergebnissen der klinischen Zulassungsstudie PROLOG verglichen, bei der die Basal-IQ Technologie drei Wochen
          lang verwendet wurde (n = 102). Alle Ergebnisse geben Medianwerte wieder.
        </p>
        <p class="font18 txt-blue">
          Die nachfolgenden Daten wurden von der UC San Diego School of Medicine und dem UC San Diego Design Lab Center for Health
          ausgewertet und verifiziert.*
        </p>
        <br>
        <h3 class="roboto-bold txt-blue font26"> 
          Ergebnisse: <u>Drei</u> Wochen mit Basal-IQ Technologie
        </h3>
        <p class="font18">
          <b class="font20">In der Praxis beobachtete Reduktion von Hypoglykämien</b><br>
          Im Vergleich zu den Ergebnissen der PROLOG-Zulassungsstudie<sup>1</sup> zeigte die Verwendung der Basal-IQ Technologie in der Praxis eine
          Reduktion der Hypoglykämiedauer.
        </p>
        <div class="uk-text-center">
        <img
          v-bind:src="
            url +
            '/assets/images/frontend/vitalaire-diabetes-basal-iq-studie-tslim-x2-insulinpumpe-3-wochen.png'"
          alt="vitalaire">
        </div>
        <br />
        <br>
        <p class="font18">
          <b class="font20">Beobachtete Verbesserungen nächtlicher Hypoglykämieraten</b><br>
          Nächtliche Hypoglykämien können besonders gefährlich sein, wenn Patienten von den Symptomen nicht wach werden. Im Vergleich
          zur PROLOG-Studie wurden in der Praxisanwendung weitere Verbesserungen in der Dauer &lt;70 mg/dl sowohl tagsüber (6 bis
          22 Uhr) als auch in der Nacht (22 bis 6 Uhr) beobachtet.
        </p>
        <div class="uk-text-center">
          <div class="image-wrapper-div-basal">
        <img
          v-bind:src="
            url +
            '/assets/images/frontend/vitalaire-diabetes-basal-iq-studie-tslim-x2-insulinpumpe-verbesserte-hypoglykaemieraten.png'"
          alt="vitalaire">
          <p class="font16">
            Konkrete Praxiswerte (Median [Quartile]) bei einer dreiwöchigen Anwendung: insgesamt 1,16 [1,45;
            2,42]; Tag 1,18 [0,44;.2,46]; Nacht 0,71 [0,07; 2,16].
            </p>
          </div>
        </div>
        <br>
        <br>
        <h3 class="roboto-bold txt-blue font26"> 
          Ergebnisse: <u>Sechs</u> Wochen mit Basal-IQ Technologie
        </h3>
        <p class="font18">
          <b class="font20">Anhaltende Reduktion von Hypoglykämien über einen Beobachtungszeitraum von sechs Wochen</b><br>
          Die Ergebnisse für Hypoglykämien nach sechs Wochen waren vergleichbar mit denen der dreiwöchigen Anwendung der Basal-IQ
          Technologie (n = 1.437).
        </p>
        <div class="uk-text-center">
        <img
          v-bind:src="
            url +
            '/assets/images/frontend/vitalaire-diabetes-basal-iq-studie-tslim-x2-insulinpumpe-6-wochen.png'"
          alt="vitalaire">
        </div>
        <br>
        <p class="font16">
          <ul style="list-style-type: none;">
            <li class="star-list-class">Die UC San Diego School of Medicine und das UC San Diego Design Lab Center for Health haben von Tandem Diabetes Care, Inc. für die Durchführung dieser unabhängigen Analyse der anonymisierten t:connect Daten ein Entgelt erhalten.</li>
          </ul>
        </p>
        <br>
        <br>

      <br />
    </div>
  </div>
</template>


<script lang="ts">
import Vue from "vue";
import { Component, Prop } from "vue-property-decorator";
import axios from "axios";
import { baseurl } from "./main";
import VueAnimateNumber from "vue-animate-number";

@Component
export default class Basalpercent extends Vue {
  firstpercent: number;
  secondpercent: number;
  thirdpercent: number;
  fourthpercent: number;
  fifthpercent: number;
  sixthpercent: number;
  loadfirstpercent: any = 0;
  loadsecondpercent: any = 0;
  loadthirdpercent: any = 0;
  loadfourthpercent: any = 0;
  loadfifthpercent: any = 0;
  loadsixthpercent: any = 0;
  firstbollean: boolean = false;
  secbollean: boolean = false;
  url = baseurl;
  numberloaded: boolean;
  // numberloaded1: boolean;
  firstnum: number = 0;
  secondnum: number = 0;
  thirdnum: number = 0;
  fourthnum: number = 0;
  fifthnum: number = 0;
  sixthnum: number = 0;
  scrollcount1 = 0;
  scrollcount2 = 0;
  @Prop({ required: true }) readonly percentststistic: string;

  created() {
    this.statisticlist();
    window.addEventListener("scroll", this.handleScroll);
  }

  destroyed() {
    window.removeEventListener("scroll", this.handleScroll);
  }

  $refs: {
    myNum: HTMLFormElement;
    myNum1: HTMLFormElement;
    myNum2: HTMLFormElement;
    myNum3: HTMLFormElement;
    myNum4: HTMLFormElement;
    myNum5: HTMLFormElement;
  };

  statisticlist() {
    axios.get(this.percentststistic).then((resp) => {
      // console.log(resp);
      this.firstpercent = resp.data.firstpercent;
      this.secondpercent = resp.data.secondpercent;
      this.thirdpercent = resp.data.thirdpercent;
      this.fourthpercent = resp.data.fourthpercent;
      this.fifthpercent = resp.data.fifthpercent;
      this.sixthpercent = resp.data.sixthpercent;
      this.firstnum = this.firstpercent;
      this.secondnum = this.secondpercent;
      this.thirdnum = this.thirdpercent;
      this.fourthnum = this.fourthpercent;
      this.fifthnum = this.fifthpercent;
      this.sixthnum = this.sixthpercent;
      this.numberloaded = true;
      this.$forceUpdate();
    });
  }

  handleScroll() {
    const els = document.querySelectorAll(".firstscroll");
    els.forEach((el) => {
      const elTop = el.getBoundingClientRect().top;
      const elBottom = el.getBoundingClientRect().bottom;
      if (elTop >= 0 || elBottom <= 0) {
        this.firstbollean = false;
        this.$forceUpdate();
      }
      if (elTop <= 0 && elBottom >= 0) {
        this.firstbollean = true;
        this.$forceUpdate();
      }
    });

    const els1 = document.querySelectorAll(".secondscroll");
    els1.forEach((el1) => {
      const elTop1 = el1.getBoundingClientRect().top;
      const elBottom1 = el1.getBoundingClientRect().bottom;
      if (elTop1 >= 0 || elBottom1 <= 0) {
        this.secbollean = false;
        this.$forceUpdate();
      }
      if (elTop1 <= 0 && elBottom1 >= 0) {
        this.secbollean = true;
        this.$forceUpdate();
      }
    });

    if (this.firstbollean == true) {
      this.loadfirstpercent = this.firstpercent;
      if (this.scrollcount1 == 0) {
        this.$refs.myNum.start();
        this.scrollcount1 = 1;
        this.$forceUpdate();
      }
      // console.log(this.loadfirstpercent, this.firstpercent);
      this.$forceUpdate();
    }
    if (this.secbollean == true) {
      this.loadsecondpercent = this.secondpercent;
      this.loadthirdpercent = this.thirdpercent;
      this.loadfourthpercent = this.fourthpercent;
      this.loadfifthpercent = this.fifthpercent;
      this.loadsixthpercent = this.sixthpercent;
      if (this.scrollcount2 == 0) {
        this.$refs.myNum1.start();
        this.$refs.myNum2.start();
        this.$refs.myNum3.start();
        this.$refs.myNum4.start();
        this.$refs.myNum5.start();
        this.scrollcount2 = 1;
        this.$forceUpdate();
      }
      this.$forceUpdate();
    }
  }
}
</script>



<style lang="css">
</style>