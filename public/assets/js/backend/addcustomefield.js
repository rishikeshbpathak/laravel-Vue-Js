$(document).ready(function () {
    var count = 1;
    dynamic_field(count);

    function dynamic_field(number) {
        html = '<tr >';
        html += '<td ><input class="form-control"  type="text" name="filename[]" placeholder="Dateiname" ></td > ';
        html += '<td ><input class="form-control-file" id="file' + count + '" type="file" onchange="return fileValidation(' + count + ')" name="file[]" ><p style="color:red;" id="errorid' + count + '"></p></td > ';
        // html += '<td ><button type="button" name="add" id="add" class="btn btn-standard">Add</button></td></tr>';
        //     $('tbody').html(html);
        if (number >= 0) {
            html += '<td ><button type="button" name="remove" id="" class="btn btn-standard remove">Entfernen</button></td></tr>';
            $('#tablebody').append(html);
        }
        // else {

        // }
    }
    $(document).on('click', '#add', function () {
        count++;
        dynamic_field(count);
    });
    $(document).on('click', '.remove', function () {
        count--;
        $(this).closest("tr").remove();
    });



});