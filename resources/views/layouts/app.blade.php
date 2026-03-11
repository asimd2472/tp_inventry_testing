<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<title>Home</title>

<link rel="icon" href="{{ asset('assets/images/Tata-Pravesh-Favicon.png')}}" sizes="32x32" />

<!-- ================= CSS ================= -->

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Select2 -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet"/>

<!-- DataTables -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/datatables.net-bs5/css/dataTables.bootstrap5.min.css">

<!-- Flatpickr -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

<!-- intlTelInput -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.5.6/build/css/intlTelInput.css">

<!-- Custom CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/fonts/stylesheet.css') }}">

</head>

<body>

    <div class="loader-wrap" style="display: none;">
        <div class="ml-loader">
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
        </div>
    </div>

@include('admin.includes.header')

@yield('content')

@include('admin.includes.footer_user')

<!-- ================= JS ================= -->

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<!-- Lodash -->
<script src="https://cdn.jsdelivr.net/npm/lodash/lodash.min.js"></script>

<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Select2 -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

<!-- DataTables -->
<script src="https://cdn.jsdelivr.net/npm/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>

<!-- Flatpickr -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<!-- SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Axios -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<!-- jQuery Validation -->
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.min.js"></script>

<!-- intlTelInput -->
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.5.6/build/js/intlTelInput.min.js"></script>

<!-- ================= Custom JS ================= -->

<script src="{{ asset('assets/js/app.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
<script src="{{ asset('assets/js/common.js') }}"></script>

<script>
var base_url = "{{ url('/') }}";
</script>

<script>

$(document).ready(function(){

    // Select2
    $('.select2').select2();

    // DataTable
    $('.datatable').DataTable();

    // Flatpickr
    $(".date-picker").flatpickr();

});

</script>

<script>

var input = document.querySelector("#phone_prifix");

if(input){

    var iti = window.intlTelInput(input,{
        separateDialCode:true,
        initialCountry:"es"
    });

    $('#dialCode').val(iti.getSelectedCountryData().dialCode);

    input.addEventListener("countrychange",function(){
        $('#dialCode').val(iti.getSelectedCountryData().dialCode);
    });

}

</script>

<meta name="csrf-token" content="{{ csrf_token() }}">

@stack('scripts')

</body>
</html>