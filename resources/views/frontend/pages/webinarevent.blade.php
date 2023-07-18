@extends('frontend.shell')
@section('body')
@include('frontend.components.header')
@php(setlocale(LC_TIME, 'de_DE'))
<div class="cust-padding custom-padding-top uk-padding-remove-bottom">
	<div uk-grid class="nav-tab">
		<div class="uk-width-auto">
			<a href="{{url('')}}">
				<img src="{{url('/assets/icons/home.png')}}" class="home-icons" alt="home">
			</a>
		</div>
		<div class="uk-width-auto txt-blue">
			<span uk-icon="icon:chevron-double-right;" class="vertical-icon"></span>
		</div>
		<div class="uk-width-auto txt-blue">
			<a class="atag font16">
				Service & Support
			</a>
		</div>
		<div class="uk-width-auto txt-blue">
			<span uk-icon="icon:chevron-double-right;" class="vertical-icon"></span>
		</div>
		<div class="uk-width-auto txt-blue">
			<a href="{{url('/veranstaltungenwebinare')}}" class="atag font16">
				Veranstaltungen und Webinare
			</a>
		</div>
		<div class="uk-width-auto txt-blue">
			<span uk-icon="icon:chevron-double-right;" class="vertical-icon"></span>
		</div>
		<div class="uk-width-expand@m uk-width-1-1@s txt-blue-darker">
			<a class="atag font16">
				{{explode("++",$firstDetails->webinar->title)[0]}}
			</a>
		</div>
	</div>

	<p class="font24 txt-blue">
		<img src="{{url('/assets/png/frontend/kontakt.png')}}" alt="kontakt" width="50" />
		{{ explode("++",$firstDetails->webinar->title)[1] }}
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<br class="uk-hidden@m">
		<img src="{{url('/assets/png/frontend/vitalaire-webicon-tslim-x2-insulinpumpe-standort-petrol.png')}}"
			alt="location" width="50" />
		{{ explode("++",$firstDetails->webinar->title)[2] }}
	</p>

	<h1 class="txt-blue fonth1 roboto-slab-regular">
		{{ explode("++",$firstDetails->webinar->title)[3] }}
	</h1>
	<br>

	{{-- <div class="font18" id="datelist">
		<p class="font24 txt-blue">Event-List</p>
		<div uk-slider>
			<webinareventdatelist webinarurl="{{ url('/veranstaltungenwebinare/directdetails/' . $secondDetails[0]->id) }}">
			</webinareventdatelist>
			<ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
		</div>
	</div> --}}
	<div class="" uk-grid>
		<div class="uk-width-2-3@m uk-width-1-1@s">
			<div class="uk-text-justify tslim-para description-webinar">
				<p class="font18">
					<webinareventdate webinarurl="{{ url('/veranstaltungenwebinare/directdetails/' . $secondDetails[0]->id) }}">
					</webinareventdate>
					<button class="custom-button font18 uk-float-right" type="button"
						uk-toggle="target: #modal-close-default">Weitere Termine</button>
					<br>
					{{date('H:i-', strtotime($secondDetails[0]->next_date->date))}}{{date('H:i',
					strtotime($secondDetails[0]->next_date->date_end))}} Uhr <br>
					{{ explode("++",$firstDetails->webinar->title)[2] }}
				</p>
				{!! $secondDetails[0]->landingpage->description !!}
			</div>
		</div>
		<div class="uk-width-1-3@m uk-width-1-1@s">
			<div>
				<img src="{{$secondDetails[0]->landingpage->image->url}}" alt="webinar">
				<div class="uk-padding">
					<webinareventdatesvg
						webinarurl="{{ url('/veranstaltungenwebinare/directdetails/' . $secondDetails[0]->id) }}">
					</webinareventdatesvg>
				</div>
			</div>
		</div>
	</div>

	@if (explode("++",$firstDetails->webinar->title)[0] == 'Webinar')
	<div id="registration-form-webinar">
		<div class="uk-padding" uk-grid style="padding-right: 0">
			<div class="uk-width-1-2@m uk-width-1-1@s uk-padding" style="background-color: #85b5c3">
				<form action="{{url('/veranstaltungenwebinare/registeruser')}}" method="POST" name="registerForm"
					id="registerForm">
					<h2 class="font22 txt-black">
						<b>Anmeldung zum Webinar</b>
					</h2>

					<div uk-grid>
						<div class="uk-width-1-1">
							<label class="txt-black">
								Termin
							</label><br>
							<span>
								<webinareventformdate webinarurl="{{ url('/veranstaltungenwebinare/directdetails/' .
                     $secondDetails[0]->id) }}">
								</webinareventformdate>
							</span>
						</div>
						{{-- <div class="uk-width-expand">
							{{-- <span class="txt-black">
								<b> --}}
									{{-- @if (date('Y-m-d', strtotime($secondDetails[0]->next_date->date)) ==
									date('Y-m-d',
									strtotime($secondDetails[0]->next_date->date_end)))
									{{date('d. F Y', strtotime($secondDetails[0]->next_date->date))}},
									@else
									@if (date('m', strtotime($secondDetails[0]->next_date->date)) == date('m',
									strtotime($secondDetails[0]->next_date->date_end)))
									{{date('d.-', strtotime($secondDetails[0]->next_date->date))}}{{date('d. F Y',
									strtotime($secondDetails[0]->next_date->date_end))}},
									@else
									{{date('d. F - ', strtotime($secondDetails[0]->next_date->date))}}{{date('d. F Y',
									strtotime($secondDetails[0]->next_date->date_end))}},
									@endif
									@endif --}}
									{{-- <webinareventdate
										webinarurl="{{ url('/veranstaltungenwebinare/directdetails/' . $secondDetails[0]->id) }}">
									</webinareventdate>,
									{{date('H:i-', strtotime($secondDetails[0]->next_date->date))}}{{date('H:i',
									strtotime($secondDetails[0]->next_date->date_end))}} Uhr
								</b> ---
							</span>
						</div> --}}
					</div>
					<br>
					<input type="hidden" name="date_a" id="date_a" value="{{date('Y-m-d H:i:s',
            strtotime($secondDetails[0]->next_date->date))}}">
					<input type="hidden" name="webinar_id" id="webinar_id" value="{{$firstDetails->webinar->id}}">
					<input type="hidden" name="firstCheckbox" id="firstCheckbox"
						value="{{$firstDetails->webinar->registration_fields[3]->name}}">
					<input type="hidden" name="secondCheckbox" id="secondCheckbox"
						value="{{$firstDetails->webinar->registration_fields[4]->name}}">
					<input type="hidden" name="thirdCheckbox" id="thirdCheckbox"
						value="{{$firstDetails->webinar->registration_fields[5]->name}}">
					<input type="hidden" name="url" id="url" value="{{ s()->request()->getURI() }}">
					<div>
						<label class="txt-black">Vorname<sup>*</sup></label><br>
						<input class="uk-width-1-1 webinar-widget-input" min-length="3" max-length="255" type="text" required
							id="firstname" name="firstname">
					</div>
					<br>
					<div>
						<label class="txt-black">Nachname<sup>*</sup></label><br>
						<input class="uk-width-1-1 webinar-widget-input" min-length="3" max-length="255" type="text" required
							id="lastname" name="lastname">
					</div>
					<br>
					<div>
						<label class="txt-black">E-Mail<sup>*</sup></label><br>
						<input class="uk-width-1-1 webinar-widget-input" min-length="3" max-length="255" type="email" required
							id="email" name="email">
					</div>
					<br>
					{{-- Fachkreise') --}}
					@if(explode("++",$firstDetails->webinar->title)[1] =='Patienten')
					<div style="display:none">
						<input class="uk-width-1-1 webinar-widget-input" value="-" min-length="5" max-length="5" type="number"
							required id="postcode" name="postcode">
						<input class="uk-width-1-1 webinar-widget-input" value="-" min-length="5" max-length="25" type="text"
							required id="praxis" name="praxis">
					</div>
					@else
					<div>
						<label class="txt-black">PLZ<sup>*</sup></label><br>
						<input class="uk-width-1-1 webinar-widget-input" min-length="5" max-length="5" type="number" required
							id="postcode" name="postcode">
					</div>
					<br>
					<div>
						<label class="txt-black">Praxis<sup>*</sup></label><br>
						<input class="uk-width-1-1 webinar-widget-input" min-length="5" max-length="25" type="text" required
							id="praxis" name="praxis">
					</div>
					@endif


					<br>
					<label class="txt-black">
						<input type="checkbox" name="type" value="general" id="type-general" required="required"
							class="uk-checkbox">
						&nbsp;Ich stimme den Nutzungsbedingungen für Webinare der VitalAire GmbH zu. <a
							href="https://die-clevere-insulinpumpe.de/nutzungsbedingungen"
							target="_blank">https://die-clevere-insulinpumpe.de/nutzungsbedingungen</a>
					</label>
					<br>
					<br>
					<label class="txt-black">
						<input type="checkbox" name="type" value="general" id="type-general" required="required"
							class="uk-checkbox">
						&nbsp;Ich habe die Datenschutzerklärung für Webinare zu Kenntnis genommen. <a
							href="https://die-clevere-insulinpumpe.de/datenschutz"
							target="_blank">https://die-clevere-insulinpumpe.de/datenschutz</a>
					</label>
					<br>
					<br>
					<label class="txt-black">
						<input type="checkbox" name="type" value="general" id="type-general" required="required"
							class="uk-checkbox">
						&nbsp;Ich stimme der Verarbeitung meiner personenbezogenen Daten zum Zwecke der Anmeldung und
						Durchführung
						des Webinars zu. Diese Einwilligung erstreckt sich auch auf die Verarbeitung von
						Gesundheitsdaten im Sinne
						des Art. 9 DSGVO. Die Einwilligung erfolgt freiwillig und kann jederzeit ohne die Angaben von
						Gründen
						widerrufen werden. Nähere Information hierzu sowie zur Datenverarbeitung finden Sie unter <a
							href="https://die-clevere-insulinpumpe.de/datenschutz"
							target="_blank">https://die-clevere-insulinpumpe.de/datenschutz</a>
					</label>
					<br>
					@if(session_has('status'))
					<div class="uk-alert-warning" uk-alert>
						<a class="uk-alert-close" uk-close></a>
						<p class="font16">{{flash('status')}}</p>
					</div>
					@endif
					<br>
					<button type="submit" class="webinar-widget-button font16 ">
						Jetzt anmelden
					</button>
					<br>
					<p class="font14 txt-black">Durch Ihre Anmeldung übermitteln Sie Ihre Angaben an den
						Webinar-Anbieter. Felder
						mit * sind Pflichtfelder und müssen ausgefüllt werden.</p>
				</form>
			</div>
		</div>
	</div>
	@endif
</div>
<div class="emailwidgetbg">
	<div class="uk-padding-large">
		<div class="uk-padding-large uk-padding-remove-vertical">
			<div class="uk-padding-large uk-padding-remove-vertical" uk-grid>
				<div class="uk-width-expand@m uk-width-1-1@s uk-text-center">
					<p class="font32 txt-white">
						Fragen zur Veranstaltung?
					</p>
				</div>
				<div class="uk-width-auto@m uk-width-1-1@s">
					<a href="{{ 'mailto:support.diabetes@vitalaire.de?subject=Frage zur Veranstaltung ' . $title }}"
						class="email-button">
						E-MAIL AN VITALAIRE SENDEN
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-----------event-list-box----->
<div id="modal-close-default" uk-modal>
	<div class="uk-modal-dialog uk-border-rounded">
		<button class="uk-modal-close-default custom-button" style="padding:5px;" type="button" uk-close></button>
		{{-- <p style="margin: 0px; margin-bottom: 10px;padding-left: 10px;border-bottom: solid 1px #bcb2b247;"
			class="font24 txt-blue">Date List</p> --}}
		<p style="padding: 20px; margin-bottom: 0px;" class="font18 txt-blue">{{
			explode("++",$firstDetails->webinar->title)[3] }}</p>
		{{-- <div style="padding-left:10px;padding-bottom:10px"> --}}

			<div class="event_list">
				<webinareventdatelist webinarurl="{{ url('/veranstaltungenwebinare/directdetails/' . $secondDetails[0]->id) }}">
				</webinareventdatelist>
			</div>
			<div class="uk-modal-footer uk-padding-remove">
				<p style="padding: 20px; margin-bottom: 0px;">Wählen Sie Ihren Termin aus und scrollen Sie nach unten auf dieser
					Seite um sich für das Event anzumelden.
				</p>
			</div>
		</div>
	</div>
	<!-----------end-box----->

	@include('frontend.components.footer')
	@endsection
	@push('css')
	@css('frontend/webinar')
	@endpush

	<style>
		.select_tag {
			width: 100%;
			font-weight: bolder;
			min-width: 100px;

		}

		.select_tag option {
			font-weight: bolder;
		}

		.event_list .uk-list-striped>li {
			padding: 10px 18px;
			cursor: pointer;
		}
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$(document).on('click','#btn_date_list',function(){
				var date=$(this).attr('date_list');
				var date_show=$(this).attr('date_show');
			  //alert(date_show);		
				// $('#date').value = date;
				document.getElementById('date').value = date;
				$('#modal-close-default').removeClass('uk-open');
});
});
	</script>