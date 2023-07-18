// function validation() {
//     alert("hi");
//     if (grecaptcha.getResponse() == "") {
//         $('#errRecaptcha').text('Ups, du musst das Recaptcha überprüfen!');
//         setTimeout(function () {
//             $("#errRecaptcha").hide();
//         }, 5000);
//         return false;
//     }
//     return true;
// }

var frmMain = document.getElementById("contactForm");
frmMain.onsubmit = function() {
	if (grecaptcha.getResponse() != "") {
		var requiredDiv = document.getElementById("content-editable-div");
		if (requiredDiv.innerHTML.trim().length == 0) {
			document.getElementById("requireddiv").classList.remove("uk-hidden");
			return false;
		} else {
			document.getElementById("message").value = document.getElementById(
				"content-editable-div"
			).innerText;
			return true;
		}
	} else {
		$("#errRecaptcha").text("Ups, du musst das Recaptcha überprüfen!");
		setTimeout(function() {
			$("#errRecaptcha").hide();
		}, 5000);
		return false;
	}
};
