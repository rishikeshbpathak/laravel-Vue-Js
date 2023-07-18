var fancyTableA
var pageNumber = 10;
$(document).ready(function () {
    loadFancyTable();
});

function loadFancyTable() {
    fancyTableA = $("#sampleTableA").fancyTable({
        sortColumn: 0,
        pagination: true,
        perPage: pageNumber,
        globalSearch: true
    });
}

function showMore() {
    pageNumber = pageNumber + 5;
    loadFancyTable();
    fancyTableA.reinit();
}