<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="robots" content="noindex">
	@if (isset($metatags))
	<title>{{ $metatags->title }}</title>
	<meta name="description" content="{{ $metatags->description }}">
	<meta name="keywords" content="{{ $metatags->keyword }}">
	@else
	<title>VitalAire</title>
	<meta name="description"
		content="Die innovative t:slim X2 ist die clevere Insulinpumpe von VitalAire für Menschen mit Diabetes. Einfach entspannter Leben.">
	<meta name="keywords" content="t:slim X2, Insulinpumpe, Diabetes, VitalAire">
	@endif
	<link rel="icon" type="image/png" sizes="16x16" href="{{url('/assets/png/frontend/favicon.png')}}">
	<link rel="apple-touch-icon" href="{{url('/assets/png/frontend/apple-touch-icon.png')}}">
	<link rel="stylesheet" href="{{url('assets/frontend/uikit.min.css')}}">
	<link rel="stylesheet" href="{{url('assets/frontend/fontstyles.css')}}">
</head>

<body>
	<div id="vapp">
		@yield('body')
	</div>

	@if (!empty($sidebar))
	@include('frontend.components.sidebar');
	@endif
	@if (!empty($popup))
	@include('frontend.components.popup')
	@endif

	<div id="cookie-consent-base" class="uk-flex-top" uk-modal="esc-close: false; bg-close: false;">
		<div id="cookie-base-text" class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical uk-text-center"
			style="border: 5px solid #487886">
			<h3 style="letter-spacing: 1.2px; color: #487886;"><b>Diese Website verwendet Cookies.</b></h3>
			<p style="color: #487886;">
				Wir nutzen Cookies auf unserer Website. Einige Cookies sind technisch notwendig, während andere uns
				helfen, diese Website und lhre Erfahrung zu verbessern.
			</p>
			<div class="consent-padding">
				<button class="custom-button consent-button-darker" onclick="acceptCookies()">AKZEPTIEREN</button>
				<p></p>
				<button class="custom-button consent-button-inverse" onclick="showCustomizeOptions()">COOKIE-EINSTELLUNGEN
					VERWALTEN</button>
			</div>
			<br>
			<p style="color: #487886 !important">
				<a href="{{url('/impressum')}}" target="_blank" rel="noopener" class="link"
					style="color: #487886 !important">Impressum</a>
				| <a href="{{url('/datenschutz')}}" target="_blank" rel="noopener" class="link"
					style="color: #487886 !important">Datenschutz</a>
			</p>
		</div>
		<div id="cookie-base-customize" class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical uk-text-center hide"
			style="border: 5px solid #487886">
			<button class="consent-close" uk-close="ratio: 1.5" onclick="hideCustomizeOptions()"></button>
			<h3 style="letter-spacing: 1.2px; color: #487886; margin-top:10px"><b>Funktionell</b></h3>
			<div class="consent-padding">
				<div class="uk-text-left" uk-grid>
					<div class="uk-width-auto">
						<input class="uk-checkbox consent-checkbox" type="checkbox" name="googleCheckbox" id="googleCheckbox"
							checked>
					</div>
					<div class="uk-width-expand">
						<h4 style="color: #487886; margin-bottom:0px">YouTube (google)</h3>
							<footer style="color: #487886; font-size:12px;">zur Anzeige der Anwendungsvideos
							</footer>
					</div>
				</div>
				<div class="uk-text-left" uk-grid>
					<div class="uk-width-auto">
						<input class="uk-checkbox consent-checkbox" type="checkbox" name="matomoCheckbox" id="matomoCheckbox"
							checked>
					</div>
					<div class="uk-width-expand">
						<h4 style="color: #487886; margin-bottom:0px;">Matomo</h3>
							<footer style="color: #487886; font-size:12px;">zur Webseitenoptimierung</footer>
					</div>
				</div>
				<p></p>
				<button class="custom-button consent-button-darker" onclick="customizeCookies()">SPEICHERN UND
					SCHLIESSEN</button>
			</div>
			<br>
			<p style="color: #487886 !important"><a href="{{url('/impressum')}}" target="_blank" rel="noopener" class="link"
					style="color: #487886 !important">Impressum</a>
				| <a href="{{url('/datenschutz')}}" target="_blank" rel="noopener" class="link"
					style="color: #487886 !important">Datenschutz</a>
			</p>
		</div>
	</div>
	<script src="{{url('assets/frontend/uikit.min.js')}}"></script>
	<script src="{{url('assets/frontend/uikit-icons.min.js')}}"></script>
	{{-- <script src="{{url('assets/frontend/app.js')}}"></script> --}}
	<script src="{{url('assets/frontend/cookieconsent.js')}}"></script>
</body>

</html>
<script>
	UIkit.modal("#modal_sections").show();
</script>