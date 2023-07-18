<template>
	<div>
		<div class="back-lblue">
			<div class="uk-text-center cust-padding">
				<h3 class="txt-blue roboto-slab-regular letter-spacing-1 font28">
					Weitere Fragen
				</h3>
				<template v-for="category in vcategory">
					<div :key="category">
						<template v-for="(question, name, index) in vquestions">
							<template v-if="question.faqcategory_id == category.id">
								<template v-if="index <= listcount - 1">
									<a
										:key="question"
										v-bind:href="url + '/faq/question/' + question.url"
										class="faq-link"
									>
										<div class="back-lblue">
											<div class="uk-grid-match" uk-grid>
												<div class="uk-width-1-4@m uk-width-1-1@s grid-center">
													<div class="uk-padding-small">
														<template
															v-if="category.id == question.faqcategory_id"
														>
															<img
																:src="url + '/storage/' + category.image"
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
						</template>
					</div>
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
export default class Faqsubquestion extends Vue {
	@Prop({ required: true }) readonly allvquestions: string;
	@Prop({ required: true }) readonly faqcategory: string;
	@Prop({ required: true }) readonly alltagsquery: string;

	url = baseurl;
	vquestions: any;
	vcategory: any;
	listcount: any = 5;
	alltags: any;

	created() {
		this.faqData();
	}

	faqData() {
		axios.get(this.allvquestions).then((resp) => {
			// console.log(resp);
			this.vquestions = resp.data;
			this.$forceUpdate();
		});

		axios.get(this.faqcategory).then((res) => {
			// console.log(res);
			this.vcategory = res.data;
			this.$forceUpdate();
		});

		axios.get(this.alltagsquery).then((resp) => {
			this.alltags = resp.data;
			this.$forceUpdate();
		});
	}

	showCat() {
		this.listcount += 5;
		this.$forceUpdate();
	}
}
</script>

<style lang="css"></style>
