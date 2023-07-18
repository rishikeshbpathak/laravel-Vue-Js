alert("hi");

function addCart() {

    var id = $("#subproduct_id").val();
    alert(id)
    $.ajax({
        type: 'post',
        url: '../Addcart',
        data: "id=" + id,
        success: function (data) {
            console.log(data);
            // $('#successMsg').text('Newsletter erfolgreich abonniert.');
            // setTimeout(function () {
            //     $("#successMsg").hide();
            // }, 5000);
        }
    });
}