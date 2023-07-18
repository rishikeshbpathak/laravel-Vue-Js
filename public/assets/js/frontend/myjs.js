function myFunction() {
    var x = document.getElementById("myDIV");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

// $("#data_check").on('click', function () {
//     alert("hi");
//     if ($(this).is(':checked')) {
//         document.getElementById("auto_name").value = document
//             .getElementById("patient_name").value;

//         document.getElementById("auto_contact").value = document
//             .getElementById("patient_contact").value;
//     } else {
//         document.getElementById("auto_name").value = "";
//         document.getElementById("auto_contact").value = ""
//     }
// });




// function subproduct(id) {

//     $.ajax({
//         type: 'get',
//         url: '../store',
//         data: "id=" + id,
//         success: function (data) {

//             var obj = JSON.parse(data);
//             $('#subproduct_name').html(obj.article_name);
//             $('#subproduct_price').html(obj.price + "€");
//             $("#subproduct_id").val(obj.id);
//             $("#product_price").val(obj.price)
//             $("#product_id").val(obj.product_id);
//         }
//     });
// }

// function isNumberKey(evt) {
//     var charCode = (evt.which) ? evt.which : evt.keyCode;
//     if (charCode != 46 && charCode > 31 &&
//         (charCode < 48 || charCode > 57))
//         return false;

//     return true;
// }


// function addCart() {

//     var s_id = $("#subproduct_id").val();
//     var p_id = $("#product_id").val();
//     var p_price = $("#product_price").val();

//     $.ajax({
//         type: 'post',
//         url: '../addcart',
//         data: {
//             sub_id: s_id,
//             pro_id: p_id,
//             pro_price: p_price
//         },
//         success: function (data) {
//             // $('#successMsg').text('Newsletter erfolgreich abonniert.');
//             // setTimeout(function () {
//             //     $("#successMsg").hide();
//             // }, 5000);
//             // window.location.href = window.location.pathname;
//         }
//     });
// }

// function deleteCartItem(id) {
//     $.ajax({
//         type: 'post',
//         url: './header/Deletecheckoutcart',
//         data: "id=" + id,
//         success: function (data) {
//             console.log(data);
//             // $('#successMsg').text('cart item deleted successfully.');
//             // setTimeout(function () {
//             //     $("#successMsg").hide();
//             // }, 5000);

//             $("#cartDiv").load(window.location.pathname + " #cartDiv");
//         }
//     });
// }

// function checkouttotal() {
//     $.ajax({
//         type: 'get',
//         url: './checkout/checkouttotal',

//         success: function (data) {
//             var array = JSON.parse(data);
//             var total = [];
//             var sum = 0;
//             for (i = 0; i < array.length; i++) {
//                 $('#price' + array[i]['id']).html(array[i]['price'] + "€");
//                 $('#pricev' + array[i]['id']).html(array[i]['price'] + "€");
//                 sum += parseInt(array[i]['price']);
//                 total.push(sum);
//             }
//             $('#total').html(total[total.length - 1] + " €");
//             $('#grand_total').html(total[total.length - 1] + " €");
//             $('#vat').html((16 / 100) * total[total.length - 1] + " €");
//             $('#total_tital').html("Dein Warenkorb gesamt:" + total[total.length - 1] + " €");
//             $('#totalv').html(total[total.length - 1] + " €");
//             $('#grand_totalv').html(total[total.length - 1] + " €");
//             $('#vatv').html((16 / 100) * total[total.length - 1] + " €");
//         }
//     });
// }

// $(document).on('click', '.number-spinner button', function () {

//     var btn = $(this),
//         oldValue = btn.closest('.number-spinner').find('input').val().trim(),
//         newVal = 0;

//     if (btn.attr('data-dir') == 'up') {
//         newVal = parseInt(oldValue) + 1;
//     } else {
//         if (oldValue > 1) {
//             newVal = parseInt(oldValue) - 1;
//         } else {
//             newVal = 1;
//         }
//     }

//     var cartid = btn.attr('id');
//     var itemprice = $("#cartp").val();
//     totalitem_price = itemprice * newVal;
//     $('#price' + cartid).html(totalitem_price + "€");
//     $('#pricev' + cartid).html(totalitem_price + "€");

//     $.ajax({
//         type: 'post',
//         url: './checkout/updatecart',
//         data: {
//             cart_id: cartid,
//             price: totalitem_price,
//             quantity: newVal
//         },
//         success: function (data) {
//             return checkouttotal();

//         }
//     });

//     btn.closest('.number-spinner').find('input').val(newVal);
// });

// $(document).ready(function () {
//     $("#submitBtn").click(function () {
//         var email = $("#email").val();
//         var password = $("#password").val();
//         if ($("#email").val() == "" || $("#password").val() == "") {
//             $('#errMsg').text('Alle Felder sind erforderlich.');
//             setTimeout(function () {
//                 $("#errMsg").hide();
//             }, 5000);
//         } else {

//             $.ajax({
//                 type: 'post',
//                 url: './login/Login',
//                 data: $('form').serialize(),
//                 success: function (data) {
//                     console.log(data);
//                     if (data == "password is wrong") {
//                         $('#errMsg').text('Passwort ist falsch.');
//                         setTimeout(function () {
//                             $("#errMsg").hide();
//                         }, 5000);
//                     } else if (data == "not exist") {
//                         $('#errMsg').text('Benutzer existiert nicht.');
//                         setTimeout(function () {
//                             $("#errMsg").hide();
//                         }, 5000);
//                     } else if (data == "success") {

//                         window.location.href = 'http://localhost/vital-aire/tslimonlineshop';
//                     }

//                 }
//             });
//         }
//         // $("#myForm").submit(); // Submit the form
//     });


//     $("#submitSubBtn").click(function () {

//         if ($("#email_sub").val() == "") {
//             $('#errMsg1').text('E-Mail-Feld ist erforderlich.');
//             setTimeout(function () {
//                 $("#errMsg1").hide();
//             }, 5000);

//         } else {
//             var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
//             if ($("#email_sub").val().match(mailformat)) {
//                 console.log("valid");
//                 $.ajax({
//                     type: 'post',
//                     url: './store',
//                     data: $('form').serialize(),
//                     success: function (data) {
//                         console.log(data);
//                         $("#subscribeForm")[0].reset();
//                         if (data == "already subscribed") {
//                             $('#errMsg1').text('Newsletter bereits abonniert.');
//                             setTimeout(function () {
//                                 $("#errMsg1").hide();
//                             }, 5000);
//                         } else if (data == "not exist") {
//                             $('#errMsg1').text('Diese E-Mail ist nicht vorhanden..');
//                             setTimeout(function () {
//                                 $("#errMsg1").hide();
//                             }, 5000);
//                         } else if (data == "unsubscribe_success") {
//                             $('#successMsg').text('Newsletter erfolgreich abonniert.');
//                             setTimeout(function () {
//                                 $("#successMsg").hide();
//                             }, 5000);
//                             window.location.href = 'http://localhost/vital-aire/';
//                         } else {
//                             $('#successMsg').text('Newsletter erfolgreich abonniert.');
//                             setTimeout(function () {
//                                 $("#successMsg").hide();
//                             }, 5000);
//                         }

//                     }
//                 });
//             } else {
//                 $('#errMsg1').text('Sie haben eine ungültige Email-Adresse eingegeben!');
//                 setTimeout(function () {
//                     $("#errMsg1").hide();
//                 }, 5000);
//             }

//         }

//     });
// });




// function isLogin() {
//     var email = $("#email").val();
//     var password = $("#password").val();
//     if ($("#email").val() == "" || $("#password").val() == "") {
//         $('#errMsg').text('Alle Felder sind erforderlich.');
//         setTimeout(function () {
//             $("#errMsg").hide();
//         }, 5000);
//     } else {

//         $.ajax({
//             type: 'post',
//             url: './loginuser',
//             data: $('form').serialize(),
//             success: function (data) {
//                 console.log(data);
//                 if (data == "password is wrong") {
//                     $('#errMsg').text('Passwort ist falsch.');
//                     setTimeout(function () {
//                         $("#errMsg").hide();
//                     }, 5000);
//                 } else if (data == "not exist") {
//                     $('#errMsg').text('Benutzer existiert nicht.');
//                     setTimeout(function () {
//                         $("#errMsg").hide();
//                     }, 5000);
//                 } else if (data == "success") {
//                     window.location.href = 'http://localhost/vital-aire/';
//                 }
//             }
//         });
//     }
//     alert("email : " + email + " password :" + password);
// }