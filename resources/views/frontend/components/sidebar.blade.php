<style>
	.side-bar {
		background-color:
			<?php echo $sidebar->sidebar_bg_color ?? '#e7000e' ?>
	}

	.side-bar-text {
		color:
			<?php echo $sidebar->sidebar_text_color ?? '#fff' ?>;
	}

	.side-bar-button {
		background-color:
			<?php echo $sidebar->button_bg_color ?? '#e7000e' ?>;
		color:
			<?php echo $sidebar->button_text_color ?? '#fff' ?>;
		border: 2px solid <?php echo $sidebar->button_border_color ?? '#fff' ?>;
	}

	.side-bar-button:hover {
		background-color:
			<?php echo $sidebar->button_bg_hover ?? '#fff' ?>;
		color:
			<?php echo $sidebar->button_text_hover ?? '#e7000e' ?>;
		border: 2px solid <?php echo $sidebar->button_border_hover ?? '#fff' ?>;
	}

	.side-bar-left {
		/*transform: translate(0px, -50%);
*/
		transform: translate(-400px, -50%);
		left: 0;
		right: unset;
	}

	.side-bar-top {
		transform: translate(0px, -83%);
		left: 50;
		right: 50;
		position: fixed;
		top: 0%;
		width: fit-content;
		z-index: 9999;
		margin: auto;
	}

	.vertical-text {
		padding: 15px 0px
	}

	.side-bar-top .side-bar-text {
		padding-bottom: 0px;
		padding-top: 5px;
	}

	.side-bar-top.transition-side-bar:hover {
		transform: translate(0px, 0%);
	}

	.side-bar-bottom {
		transform: translate(0px, 88%);
		left: 50;
		right: 50;
		position: fixed;
		/* top: -33%; */
		bottom: 0%;
		width: fit-content;
		z-index: 9999;
		margin: auto;
	}

	.side-bar-bottom .side-bar-text {
		padding-top: 3px;
	}

	.side-bar-bottom.transition-side-bar:hover {
		transform: translate(0px, 48%);
	}

	.side-bar-left {
		/*transform: translate(0px, -50%);
*/
		transform: translate(-400px, -50%);
		left: 0;
		right: unset;
		-webkit-transform: ;
		-moz-transform: ;
		-ms-transform: ;
		-o-transform: ;
	}

	.side-bar-top .vertical-text {
		padding-bottom: 5px;
		padding-top: 20px;
		writing-mode: horizontal-tb !important;
		-webkit-transform: rotate(0deg) !important;
		transform: rotate(0deg) !important;
		-moz-transform: rotate(0deg) !important;
	}

	.side-bar-bottom .vertical-text {
		padding-bottom: 5px;
		padding-top: 5px !important;
		writing-mode: horizontal-tb !important;
		-webkit-transform: rotate(0deg) !important;
		transform: rotate(0deg) !important;
		-moz-transform: rotate(0deg) !important;
	}

	.side-bar-bottom {
		transform: translate(0px, 90%);
		left: 50;
		right: 50;
		position: fixed;
		/*top: -33%;*/
		width: fit-content;
		z-index: 9999;
		margin: auto;

	}

	.side-bar-bottom .side-bar-text {
		padding-top: 0px;
		padding-bottom: 2px;
	}

	.side-bar-bottom .uk-padding {
		padding: 0px;
	}

	.side-bar-top .uk-padding {
		padding: 0px;
	}
</style>
@if (!empty($sidebar->sidebar_position))
<div
	class="side-bar side-bar-{{ $sidebar->sidebar_position }} transition-side-bar uk-padding uk-padding-remove-vertical">
	@if($sidebar->sidebar_position =='right' || $sidebar->sidebar_position =='left')
	<div class="uk-grid-match" uk-grid>
		@else
		<div class="uk-grid-match" uk-grid-1>
			@endif
			@if($sidebar->sidebar_position =='right' || $sidebar->sidebar_position =='bottom')
			<div class="uk-width-auto uk-text-center">
				<div class="vertical-text side-bar-text">{!!
					$sidebar->verticaltext !!}</div>
			</div>
			@endif
			<div class="uk-width-expand inner-content-side-bar uk-padding">
				<div class="uk-text-center">
					<p class="font20 bold side-bar-text">
						{!! $sidebar->header !!}
					</p>
					<p class=" font16 side-bar-text">
						{!! $sidebar->content !!}
					</p>
					@if ($sidebar->type == "link")
					<a href="{{$sidebar->link}}" {{ $sidebar->external_link == 'true' ? 'target="_blank"
						rel="noopener"' : '' }}
						class=" transparent-a-tag-side-bar ">
						<span class="side-bar-button back-red-text roboto font16">
							{!! $sidebar->btn_title ?? "CLICK ME" !!}
						</span>
					</a>
					@else
					<a href="{{storage($sidebar->file_name)}}" class="transparent-a-tag-side-bar" download>
						<span class="side-bar-button back-red-text roboto font16">
							{!! $sidebar->btn_title ?? "DOWNLOAD PDF" !!}
						</span>
					</a>
					@endif
				</div>
			</div>
			@if($sidebar->sidebar_position =='top' || $sidebar->sidebar_position =='left')
			<div class="uk-width-auto uk-text-center">
				<div class="vertical-text side-bar-text">{!!
					$sidebar->verticaltext !!}</div>
			</div>
			@endif
		</div>
	</div>
	@else
	<div class="side-bar transition-side-bar uk-padding uk-padding-remove-vertical">
		<div class="uk-grid-match" uk-grid>
			<div class="uk-width-auto uk-text-center uk-padding uk-padding-remove-right">
				<div class="vertical-text side-bar-text">{!!
					$sidebar->verticaltext !!}</div>
			</div>
			<div class="uk-width-expand inner-content-side-bar uk-padding">
				<div class="uk-text-center">
					<div class="font20 bold side-bar-text">
						{!! $sidebar->header !!}
					</div>
					<div class=" font16 side-bar-text">
						{!! $sidebar->content !!}
					</div>
					@if ($sidebar->type == "link")
					<a href="{{$sidebar->link}}" {{ $sidebar->external_link == 'true' ? 'target="_blank"
						rel="noopener"' : '' }}
						class=" transparent-a-tag-side-bar ">
						<span class="side-bar-button back-red-text roboto font16">
							{!! $sidebar->btn_title ?? "CLICK ME" !!}
						</span>
					</a>
					@else
					<a href="{{storage($sidebar->file_name)}}" class="transparent-a-tag-side-bar" download>
						<span class="side-bar-button back-red-text roboto font16">
							{!! $sidebar->btn_title ?? "DOWNLOAD PDF" !!}
						</span>
					</a>
					@endif
				</div>
			</div>
		</div>
	</div>
	@endif