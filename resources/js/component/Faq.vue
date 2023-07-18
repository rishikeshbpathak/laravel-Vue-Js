<template>
	<div>
		<div class="back-lblue">
			<div class="cust-padding-cat">
				<ul
					class="uk-grid-match uk-child-width-1-4@m uk-child-width-1-1@s"
					uk-grid
					uk-switcher="connect: .question-switch"
					id="switcherquestion"
				>
					<li id="all" hidden>
						<a href></a>
					</li>
					<li v-for="category in allcategories" :key="category">
						<a
							class="uk-text-center atagshowall catlist"
							:id="category.id"
							@click="resetCount(category.id)"
						>
							<img
								class="catimage"
								v-bind:src="url + '/storage/' + category.image"
								width="90"
								:alt="category.imagealt ? category.imagealt : 'category'"
							/>
							<div class="faq-m-top catnamediv">
								<span class="txt-blue faq-font letter-spacing-1 catname">
									{{ category.name }}
								</span>
							</div>
						</a>
					</li>
				</ul>
				<div class="cust-padding-top">
					<ul class="uk-list" uk-switcher="connect: .question-switch">
						<li id="alls" class="uk-text-center">
							<a
								href
								class="atagshowall uk-text-center"
								@click="resetUkActive()"
								uk-switcher-item="0"
							>
								<span class="border-button txt-blue faq-font letter-spacing-1"
									>Alle anzeigen</span
								>
							</a>
						</li>
					</ul>
				</div>
				<div class="cust-padding-top uk-text-center">
					<span class="txt-blue faq-font letter-spacing-1 catname bold">
						Nur Antworten zur Technologie anzeigen:
					</span>
					<br />
					<div class="uk-padding uk-padding-remove-bottom">
						<template v-for="tag in alltags">
							<span
								@click="selectTag(tag.id)"
								:key="tag.id"
								class="tags-global cursor-pointer"
								:style="{
									'background-color': list.includes(tag.id)
										? tag.hv_color
										: tag.bg_color,
								}"
							>
								{{ tag.name }}
							</span>
						</template>
					</div>
				</div>
			</div>
		</div>

		<div class="cust-padding">
			<div class="uk-text-center">
				<h3 class="txt-blue letter-spacing-1 roboto-slab-regular font28">
					Häufige Fragen
				</h3>
				<ul class="uk-switcher uk-margin question-switch" id="questionlist">
					<li>
						<template v-for="(question, name, index) in allquestions">
							<template v-if="index <= listcount - 1">
								<a
									:key="question"
									v-bind:href="url + '/faq/question/' + question.url"
									class="faq-link"
								>
									<div class="back-lblue">
										<div class="uk-grid-match uk-padding-small" uk-grid>
											<div class="uk-width-1-4@m uk-width-1-1@s grid-center">
												<div
													class="uk-padding uk-padding-remove-top uk-padding-remove-bottom"
												>
													<div
														class="uk-padding-small uk-padding-remove-left uk-padding-remove-right"
													>
														<template v-for="category in allcategories">
															<template
																v-if="question.faqcategory_id == category.id"
															>
																<img
																	:key="category"
																	v-bind:src="
																		url + '/storage/' + category.image
																	"
																	width="90"
																	:alt="
																		category.imagealt
																			? category.imagealt
																			: 'category'
																	"
																/>
															</template>
														</template>
													</div>
												</div>
											</div>
											<div class="uk-width-1-2@m uk-width-1-1@s grid-center">
												<div class="uk-text-left">
													<span class="faq-font txt-blue letter-spacing-1">
														{{ question.question }}
													</span>
												</div>
											</div>
											<div
												style="display:inline-block"
												class="uk-width-1-4@m uk-width-1-1@s"
											>
												<span v-for="tag in alltags" :key="tag.id">
													<template v-for="singletag in question.tag">
														<template v-if="singletag == tag.id">
															<span
																:key="singletag"
																class="tags-global"
																:style="{ 'background-color': tag.bg_color }"
																>{{ tag.name }}</span
															>
														</template>
													</template>
												</span>
											</div>
										</div>
									</div>
								</a>
							</template>
						</template>
						<br />
						<br />
						<div class="uk-text-center">
							<button
								class="custom-button letter-spacing-1 font16"
								@click="showCat()"
							>
								MEHR ANZEIGEN
							</button>
						</div>
					</li>
					<li v-for="category in allcategories" :key="category.id">
						<template v-for="(question, name, index) in catquestions">
							<template v-if="index <= listcount - 1">
								<a
									v-bind:href="url + '/faq/question/' + question.url"
									class="faq-link"
									:key="question"
								>
									<div class="back-lblue">
										<div class="uk-grid-match uk-padding-small" uk-grid>
											<div class="uk-width-1-4@m uk-width-1-1@s grid-center">
												<div
													class="uk-padding uk-padding-remove-top uk-padding-remove-bottom"
												>
													<div
														class="uk-padding-small uk-padding-remove-left uk-padding-remove-right"
													>
														<template
															v-if="category.id == question.faqcategory_id"
														>
															<img
																v-bind:src="url + '/storage/' + category.image"
																width="90"
																:alt="
																	category.imagealt
																		? category.imagealt
																		: 'category'
																"
															/>
														</template>
													</div>
												</div>
											</div>
											<div class="uk-width-1-2@m uk-width-1-1@s grid-center">
												<div class="uk-text-left">
													<span class="faq-font txt-blue letter-spacing-1">
														{{ question.question }}
													</span>
												</div>
											</div>
											<div
												style="display:inline-block"
												class="uk-width-1-4@m uk-width-1-1@s"
											>
												<span v-for="tag in alltags" :key="tag.id">
													<template v-for="singletag in question.tag">
														<template v-if="singletag == tag.id">
															<span
																:key="singletag"
																class="tags-global"
																:style="{ 'background-color': tag.bg_color }"
																>{{ tag.name }}</span
															>
														</template>
													</template>
												</span>
											</div>
										</div>
									</div>
								</a>
							</template>
						</template>
						<br />
						<br />
						<div class="uk-text-center">
							<button
								class="custom-button letter-spacing-1 font16"
								@click="showCat()"
							>
								MEHR ANZEIGEN
							</button>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</template>

<script lang="ts">
import Vue from "vue";
import { Component, Prop } from "vue-property-decorator";
import axios from "axios";
import { baseurl } from "./main";

@Component
export default class Faq extends Vue {
	@Prop({ required: true }) readonly allvcategories: string;
	@Prop({ required: true }) readonly allvquestions: string;
	@Prop({ required: true }) readonly allcatquestions: string;
	@Prop({ required: true }) readonly alltagsquery: string;
	@Prop({ required: true }) readonly allcatquestionswithtag: string;

	url = baseurl;
	name: any;
	allquestions: [];
	allcategories: any;
	alltags: any;
	listcount: any = 5;
	catquestions: [];
	selectedCat: number;
	list = [];
	test: boolean = true;

	created() {
		this.faqdata();
	}

	showCat() {
		this.listcount += 5;
		this.$forceUpdate();
	}

	resetUkActive() {
		this.selectedCat = undefined;
		this.list = [];
		var liswitcher = document
			.getElementById("switcherquestion")
			.getElementsByClassName("uk-active")[0];
		if (liswitcher) {
			liswitcher.classList.remove("uk-active");
		}
		axios.get(this.allvquestions).then((resp) => {
			this.allquestions = resp.data;
			this.$forceUpdate();
		});
	}

	resetCount(id) {
		this.selectedCat = id;
		this.listcount = 5;
		this.list = [];
		this.$forceUpdate();
		axios.get(this.allcatquestions + id).then((resp) => {
			this.catquestions = resp.data;
			this.$forceUpdate();
		});
	}

	selectTag(id) {
		if (this.list.includes(id) == false) {
			this.list.push(id);
		} else {
			const index = this.list.indexOf(id);
			if (index > -1) {
				this.list.splice(index, 1);
			}
		}
		let strlist = this.list.toString();
		let tags = strlist.replace(/,/g, "+");
		if (this.selectedCat == undefined) {
			this.selectedCat = 0;
		}
		axios
			.get(`${this.allcatquestionswithtag}${this.selectedCat}&${tags}`)
			.then((resp) => {
				// console.log(resp.data);
				if (this.selectedCat == 0 || this.selectedCat == undefined) {
					this.allquestions = resp.data;
				} else {
					this.catquestions = resp.data;
				}

				this.$forceUpdate();
			});
	}

	faqdata() {
		axios.get(this.allvquestions).then((resp) => {
			this.allquestions = resp.data;
			this.$forceUpdate();
		});

		axios.get(this.allvcategories).then((respn) => {
			this.allcategories = respn.data;
			this.$forceUpdate();
		});

		axios.get(this.alltagsquery).then((resp) => {
			this.alltags = resp.data;
			this.$forceUpdate();
		});
	}
}
</script>

<style lang="css"></style>
