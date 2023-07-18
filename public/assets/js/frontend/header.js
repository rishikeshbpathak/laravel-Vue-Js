function naveover1() {
	document.getElementById("nav2").classList.add("page-remove-active");
	document.getElementById("nav3").classList.add("page-remove-active");
	document.getElementById("nav4").classList.add("page-remove-active");
	document.getElementById("nav5").classList.add("page-remove-active");
}

function navout1() {
	document.getElementById("nav2").classList.remove("page-remove-active");
	document.getElementById("nav3").classList.remove("page-remove-active");
	document.getElementById("nav4").classList.remove("page-remove-active");
	document.getElementById("nav5").classList.remove("page-remove-active");
}

function naveover2() {
	document.getElementById("nav1").classList.add("page-remove-active");
	document.getElementById("nav3").classList.add("page-remove-active");
	document.getElementById("nav4").classList.add("page-remove-active");
	document.getElementById("nav5").classList.add("page-remove-active");
}

function navout2() {
	document.getElementById("nav1").classList.remove("page-remove-active");
	document.getElementById("nav3").classList.remove("page-remove-active");
	document.getElementById("nav4").classList.remove("page-remove-active");
	document.getElementById("nav5").classList.remove("page-remove-active");
}

function naveover3() {
	document.getElementById("nav1").classList.add("page-remove-active");
	document.getElementById("nav2").classList.add("page-remove-active");
	document.getElementById("nav4").classList.add("page-remove-active");
	document.getElementById("nav5").classList.add("page-remove-active");
}

function navout3() {
	document.getElementById("nav1").classList.remove("page-remove-active");
	document.getElementById("nav2").classList.remove("page-remove-active");
	document.getElementById("nav4").classList.remove("page-remove-active");
	document.getElementById("nav5").classList.remove("page-remove-active");
}

function naveover4() {
	document.getElementById("nav1").classList.add("page-remove-active");
	document.getElementById("nav2").classList.add("page-remove-active");
	document.getElementById("nav3").classList.add("page-remove-active");
	document.getElementById("nav5").classList.add("page-remove-active");
}

function navout4() {
	document.getElementById("nav1").classList.remove("page-remove-active");
	document.getElementById("nav2").classList.remove("page-remove-active");
	document.getElementById("nav3").classList.remove("page-remove-active");
	document.getElementById("nav5").classList.remove("page-remove-active");
}

function naveover5() {
	document.getElementById("nav1").classList.add("page-remove-active");
	document.getElementById("nav2").classList.add("page-remove-active");
	document.getElementById("nav3").classList.add("page-remove-active");
	document.getElementById("nav4").classList.add("page-remove-active");
}

function navout5() {
	document.getElementById("nav1").classList.remove("page-remove-active");
	document.getElementById("nav2").classList.remove("page-remove-active");
	document.getElementById("nav3").classList.remove("page-remove-active");
	document.getElementById("nav4").classList.remove("page-remove-active");
}

function loadStudienModal() {
	UIkit.dropdown("#nav1dropdown").hide(false);
	UIkit.modal("#studien-confirm-base").show();
}

function hideStudienModal() {
	UIkit.modal("#studien-confirm-base").hide();
	UIkit.dropdown("#nav1dropdown").show();
}

// count = 1;

// function changeType() {
//     if (count == 1) {
//         document.getElementById('c_type').setAttribute('type', 'text');
//         document.getElementById('visible').style.display = "none";
//         document.getElementById('notvisible').style.display = "inline-block";
//         count = 0;
//     } else {
//         document.getElementById('c_type').setAttribute('type', 'password');
//         document.getElementById('notvisible').style.display = "none";
//         document.getElementById('visible').style.display = "inline-block";
//         count = 1;
//     }
// }

// function validate() {

//     if (document.myForm.email.value == "") {
//         $('#errMsg').text('E-Mail-Feld ist erforderlich.');
//         setTimeout(function () {
//             $("#errMsg").hide();
//         }, 5000);
//         return false;
//     }
//     if (document.myForm.password.value == "") {
//         $('#errMsgPass').text('Passwortfeld ist erforderlich.');
//         setTimeout(function () {
//             $("#errMsgPass").hide();
//         }, 5000);
//         return false;
//     }

//     /* if (grecaptcha.getResponse() == "") {
//          $('#errRecaptcha').text('Ups, du musst das Recaptcha überprüfen!');
//          setTimeout(function() {
//              $("#errRecaptcha").hide();
//          }, 5000);
//          return false;
//      }*/

//     var emailID = document.myForm.email.value;
//     atpos = emailID.indexOf("@");
//     dotpos = emailID.lastIndexOf(".");

//     if (atpos < 1 || (dotpos - atpos < 2)) {
//         $('#errMsg').text('Bitte geben Sie die richtige E-Mail-ID ein.');
//         setTimeout(function () {
//             $("#errMsg").hide();
//         }, 5000);
//         return false;
//     }
//     return (true);
// }

// // function openSearch() {
// //     document.getElementById('search_input').style.visibility = "visible";
// //     document.getElementById('search_input_open').style.visibility = "visible";
// //     document.getElementById('search_input_close').style.visibility = "hidden";
// // }

// // function closeSearch() {
// //     document.getElementById('search_input').style.visibility = "hidden";
// // }

// // function openSearchMob() {
// //     document.getElementById('search_input1').style.visibility = "visible";
// // }

// // function closeSearch1() {
// //     document.getElementById('search_input1').style.visibility = "hidden";
// // }
