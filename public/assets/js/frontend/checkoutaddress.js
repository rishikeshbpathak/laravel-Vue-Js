function editAddress(id) {
    // document.getElementById('address-form-fix').style.display = "none";
    // document.getElementById('address-form-edit').style.display = "block";
    const data = document.getElementById('address-form-fix-' + id);
    const form = document.getElementById('address-form-edit-' + id);
    if (data.style.display == "none") {
        data.style.display = "block";
        form.style.display = "none";
    } else {
        data.style.display = "none";
        form.style.display = "block";
    }
}

// function toSave() {
//     document.getElementById('address-form-fix').style.display = "block";
//     document.getElementById('address-form-edit').style.display = "none";
// }

// function addressEdit() {
//     document.getElementById('address-info').style.display = "none";
//     document.getElementById('address-edit').style.display = "block";
// }

// function backAddress() {
//     document.getElementById('address-info').style.display = "block";
//     document.getElementById('address-edit').style.display = "none";
// }

function toSave(str) {
    document.getElementById('address-form-fix-' + str).style.display = "block";
    document.getElementById('address-form-edit-' + str).style.display = "none";
    document.getElementById('address-info').attr({
        'uk-switcher-item': 1
    });
}

function addressEdit(str) {
    document.getElementById('address-info').style.display = "none";
    document.getElementById('address-edit-' + str).style.display = "block";
}

function backAddress(str) {
    document.getElementById('address-info').style.display = "block";
    document.getElementById('address-edit-' + str).style.display = "none";
}