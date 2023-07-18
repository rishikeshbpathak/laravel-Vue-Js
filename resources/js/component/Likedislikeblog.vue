<template>
	<div class="uk-grid-match" uk-grid>
		<div class="uk-width-expand@m uk-width-1-1@s"></div>
		<div class="uk-width-expand@m uk-width-1-1@s"></div>
		<div class="uk-width-expand@m uk-width-1-1@s">
			<div>
				<button
					:disabled="isDisabled"
					class="likesclass"
					:class="{ animationlike: !isDisabled }"
					@click="like(blog.id)"
				>
					<img
						v-bind:src="url + '/assets/png/frontend/like.png'"
						width="100"
						alt="like"
					/>
				</button>
				<div class="faq-m-top">
					<span class="txt-blue faq-font font24">{{ blog.likes }}</span>
				</div>
			</div>
		</div>
		<div class="uk-width-expand@m uk-width-1-1@s padding-left-like">
			<div>
				<button
					class="likesclass"
					:class="{ animationlike: !isDisabled }"
					:disabled="isDisabled"
					@click="dislike(blog.id)"
				>
					<img
						v-bind:src="url + '/assets/png/frontend/like.png'"
						width="100"
						alt="dislike"
						style="transform: rotate(180deg)"
					/>
				</button>
				<div class="faq-m-top">
					<span class="txt-blue faq-font font24">{{ blog.dislikes }}</span>
				</div>
			</div>
		</div>
		<div class="uk-width-expand@m uk-width-1-1@s"></div>
		<div class="uk-width-expand@m uk-width-1-1@s"></div>
	</div>
</template>

<script lang="ts">
import Vue from "vue";
import { Component, Prop } from "vue-property-decorator";
import { baseurl } from "./main";
import Axios from "axios";

@Component
export default class Likedislike extends Vue {
	@Prop({ required: true }) readonly likeslist: string;
	@Prop({ required: true }) readonly likesupdate: string;
	@Prop({ required: true }) readonly dislikesupdate: string;

	url = baseurl;
	blog: any = [];
	isDisabled: boolean;
	interacted = "interactedBlog";

	created() {
		this.loadlikes();
	}

	checkbtn() {
		if (localStorage.getItem(this.interacted)) {
			// console.log("inside created");
			this.isDisabled = true;
		} else if (!localStorage.getItem(this.interacted)) {
			this.isDisabled = false;
		}
		this.$forceUpdate();
	}

	loadlikes() {
		Axios.get(this.likeslist)
			.then((response) => {
				this.blog = Object.assign([], response.data);
				this.interacted = "interactedBlog" + this.blog.id;
				this.checkbtn();
			})
			.catch((error) => {
				console.log(error);
			});
	}

	like(id) {
		// console.log("inside like");
		// console.log(this.likesupdate);
		// console.log(id);
		Axios.get(this.likesupdate + id).then((response) => {
			// console.log(response.data);
			this.blog.likes++;
			localStorage.setItem(this.interacted, "true");
			// localStorage.interact = true;
			this.checkbtn();
		});
	}

	dislike(id) {
		// console.log("inside dislike");
		Axios.get(this.dislikesupdate + id).then((response) => {
			// console.log(response.data);
			this.blog.dislikes++;
			localStorage.setItem(this.interacted, "true");
			// localStorage.interacted = true;
			this.checkbtn();
		});
	}
}
</script>
