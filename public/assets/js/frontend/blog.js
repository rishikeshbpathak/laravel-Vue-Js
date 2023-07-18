var baseurl = "/vital-aire";
if (window.location.origin.includes("localhost")) {
	baseurl = "/vital-aire";
} else {
	baseurl = "";
}

var searchblogs = document.getElementById("searchblogs");
searchblogs.addEventListener("keydown", (e) => {
	if (e.key === "Enter") {
		var originURL = window.location.origin;
		window.location = originURL + baseurl + "/blog/search/" + searchblogs.value;
	}
});

var categoryselect = document.getElementById("categoryselect");
categoryselect.addEventListener("change", (e) => {
	var originURL = window.location.origin;
	window.location =
		originURL + baseurl + "/blog/category/" + categoryselect.value;
});

function catSelected() {}
