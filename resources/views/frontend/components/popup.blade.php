<div id="modal_sections" class="uk-modal uk-flex-top">
	<div class="uk-modal-dialog uk-margin-auto-vertical" style="border: 5px solid rgb(72, 120, 134);">
		<button uk-close="ratio: 1.5"
			class="consent-close uk-modal-close-default uk-icon uk-close {{ $popup->top_close_btn}} ">
			<svg width="21" height="21" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg" data-svg="close-icon">
				<line fill="none" stroke="#000" stroke-width="1.1" x1="1" y1="1" x2="13" y2="13"></line>
				<line fill="none" stroke="#000" stroke-width="1.1" x1="13" y1="1" x2="1" y2="13"></line>
			</svg>
		</button>
		<div class="uk-modal-body uk-padding">
			<div class="uk-modal-title modal_title">{!! $popup->title_text !!}</div>
			<div class="">{!! $popup->text_content !!}</div>
			<div class="uk-container uk-width-large">
				@if($popup->type=="close_btn")
				<button class="uk-button uk-margin-bottom buttoninfos custom-button uk-modal-close
						consent-button-darker uk-padding-remove-top uk-padding-remove-bottom" type="button">
					Akzeptieren
				</button>
				@elseif ($popup->type == "link")
				<a href="{{$popup->link}}" {{ $popup->external_link == 'true' ? 'target="_blank"
					rel="noopener"' : '' }} class="uk-button uk-margin-bottom buttoninfos custom-button
					consent-button-darker uk-padding-remove-top uk-padding-remove-bottom"
					{{ $popup->confirm_btn_text ?? 'style=display:none'}}
					type="button">
					{{$popup->confirm_btn_text ?? "CLICK ME"}}
				</a>
				@else
				<a href="{{storage($popup->file_name)}}" class="uk-button uk-margin-bottom buttoninfos custom-button
					consent-button-darker uk-padding-remove-top uk-padding-remove-bottom" {{ $popup->confirm_btn_text ??
					'style=display:none'}}
					type="button" download>
					{{$popup->confirm_btn_text ?? "DOWNLOAD PDF"}}
				</a>
				@endif
				<button
					class="uk-button uk-margin-bottom custom-button consent-button-inverse uk-modal-close {{ $popup->close_btn_status}}"
					{{ $popup->cancel_btn_text ?? 'style=display:none'}} type="button">{{
					$popup->cancel_btn_text ?? "CANCEL"}}</button>
			</div>
		</div>