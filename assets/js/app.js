$(document).ready(function () {

    // flatpickr
    flatpickr(".date-picker");

    // select2
    $('.select2').select2();

    // datatable
    $('#table').DataTable();

    console.log("App Loaded");

});