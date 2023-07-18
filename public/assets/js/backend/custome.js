$(document).ready(function () {
    var count = 1;
    dynamic_field(count);

    function dynamic_field(number) {
        html = '<tr>';
        html += '<td><input type="text" name="video_url[]" class="form-control" /></td>';
        if (number >= 0) {
            html += '<td><button type="button" name="remove" id="" class="btn btn-standard remove">Remove</button></td></tr>';
            $('#producttbody').append(html);
        }
        // else {
        //     html += '<td><button type="button" name="add" id="add" class="btn btn-standard">Add</button></td></tr>';
        //     $('tbody').html(html);
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