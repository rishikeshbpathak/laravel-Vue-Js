var base = document.getElementById("cookie-consent-base");
var textbase = document.getElementById("cookie-base-text");
var textcustomize = document.getElementById("cookie-base-customize");
var matomoCheckbox = document.getElementById("matomoCheckbox");
var googleCheckbox = document.getElementById("googleCheckbox");
var youtube = document.getElementById("youtube-base");
var head = document.getElementsByTagName("head")[0];
// var analytics = document.createElement("script");
var baseurl = "/vital-aire";

// analytics.type = "text/javascript";
var urlcurrent = window.location;
if (urlcurrent.origin.includes("localhost")) {
	baseurl = "/vital-aire";
} else {
	baseurl = "";
}

checkConsent();

function checkConsent() {
	// console.log(window.location)
	var pathname = window.location.pathname;
	if (!pathname.includes("impressum") && !pathname.includes("datenschutz")) {
		// console.log("CHECK");
		if (getMatomoValue() == null) {
			showConsentText();
		} else {
			if (getMatomoValue() == "true") {
				// console.log("LOAD MATOMO");
				loadMatomo();
			}
			if (getGoogleValue() == "true") {
				// console.log("LOAD GOOGLE");
				loadYoutubeVid();
			} else {
				loadConsentYT();
			}
		}
	}
}

function showConsentText() {
	// base.style.display = "block";
	UIkit.modal("#cookie-consent-base").show();
}

function hideConsentText() {
	UIkit.modal("#cookie-consent-base").hide();
	// base.style.display = "none";
}

function loadMatomo() {
	// var origin = window.location.origin;
	// console.log(origin + baseurl + "/assets/js/frontend/analytics.js")
	// analytics.src = origin + baseurl + "/assets/js/frontend/analytics.js";
	// console.log("matomo loaded")
	var _paq = (window._paq = window._paq || []);
	/* tracker methods like "setCustomDimension" should be called before "trackPageView" */
	_paq.push(["trackPageView"]);
	_paq.push(["enableLinkTracking"]);
	(function() {
		var u = "https://dhannemann.matomo.cloud/";
		_paq.push(["setTrackerUrl", u + "matomo.php"]);
		_paq.push(["setSiteId", "1"]);
		var d = document,
			g = d.createElement("script"),
			s = d.getElementsByTagName("script")[0];
		g.type = "text/javascript";
		g.async = true;
		g.src = "//cdn.matomo.cloud/dhannemann.matomo.cloud/matomo.js";
		s.parentNode.insertBefore(g, s);
	})();
}

function loadYoutubeVid() {
	if (youtube) {
		youtube.style.display = "block";
		// console.log("Youtube Loaded")
	}
}

function showCustomizeOptions() {
	// console.log("customize")
	textbase.style.display = "none";
	textcustomize.style.display = "block";
}

function hideCustomizeOptions() {
	textcustomize.style.display = "none";
	textbase.style.display = "block";
}

function loadConsentYT() {
	if (youtube) {
		youtube.style.display = "block";
		youtube.innerHTML = `
        <div class="uk-text-center yt-consent-padding">
        <div class="uk-padding-large uk-padding-remove-vertical">
            <div style="border: 5px solid #487886" class="uk-padding-large">
                <p style="color: #487886;">
                    Dieser Inhalt wird blockiert, da Video-Cookies nicht akzeptiert wurden.
                </p>
                <div class="consent-padding">
                    <button class="custom-button consent-button-darker" onclick="acceptCookies()">ALLE COOKIES AKZEPTIEREN</button>
                    <p></p>
                    <button class="custom-button consent-button-inverse" onclick="acceptYoutubeCookies()">NUR VIDEO-COOKIES AKZEPTIEREN</button>
                </div>
            </div>
        </div>
    </div>
    <br>
        `;
	}
}

function acceptCookies() {
	// console.log("accept")
	localStorage.setItem("cookiePreferenceMatomo", true);
	localStorage.setItem("cookiePreferenceGoogle", true);
	hideConsentText();
	window.location.reload();
}

function acceptYoutubeCookies() {
	// console.log("accept yt")
	localStorage.setItem("cookiePreferenceGoogle", true);
	window.location.reload();
}

function rejectCookies() {
	// console.log("reject")
	localStorage.setItem("cookiePreferenceMatomo", false);
	localStorage.setItem("cookiePreferenceGoogle", false);
	hideConsentText();
	window.location.reload();
}

function customizeCookies() {
	// console.log("save customized cookies")
	if (matomoCheckbox.checked == true) {
		// console.log("Set matomo true")
		localStorage.setItem("cookiePreferenceMatomo", true);
	} else {
		// console.log("Set matomo false")
		localStorage.setItem("cookiePreferenceMatomo", false);
	}
	if (googleCheckbox.checked == true) {
		// console.log("Set google true")
		localStorage.setItem("cookiePreferenceGoogle", true);
	} else {
		// console.log("Set google false")
		localStorage.setItem("cookiePreferenceGoogle", false);
	}
	hideConsentText();
	window.location.reload();
}

function getMatomoValue() {
	return localStorage.getItem("cookiePreferenceMatomo");
}

function getGoogleValue() {
	return localStorage.getItem("cookiePreferenceGoogle");
}
