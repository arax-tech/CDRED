<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="author" content="Arham Khan">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/vendors/css/vendors.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/themes/bordered-layout.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/plugins/forms/form-validation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/pages/page-auth.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/custom.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/vendors/css/forms/select/select2.min.css') }}">
    <!-- END: Custom CSS-->
    <style type="text/css">
        .tata-title{color: #fff !important};

        .text-primary{
            color: #327fb3 !important;
        }
        .btn-primary{
            background-color: #e47f39!important;
            border-color: #e47f39!important;
        }
        .btn-primary:focus, .btn-primary:active, .btn-primary.active{
            background-color: #e47f39!important;
            border-color: #e47f39!important;   
        }
        .form-control:focus{
            border-color: #e47f39!important;   
        }
        .btn-primary:hover:not(.disabled):not(:disabled){
            box-shadow: 0 8px 25px -8px #e47f39 !important;
        }
        .text-primary{
          color: #e47f39 !important;
        }
        .custom-control-input:checked ~ .custom-control-label::before{
          border-color: #e47f39 !important;
          background-color: #e47f39 !important;
        }
        a{
          color: #e47f39 !important;
        }
        .input-group:not(.bootstrap-touchspin):focus-within .form-control, .input-group:not(.bootstrap-touchspin):focus-within .input-group-text{
          border-color: #e47f39 !important;
        }
    </style>
    @yield('css')
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

@yield('content')
<!-- END: Body-->

<script type="text/javascript">
    let form = document.querySelector('#auth-submit');

    form.addEventListener('submit', function (event) {
        event.preventDefault();

        let valid = true;
        $('[required]').each(function() {
        if ($(this).is(':invalid') || !$(this).val()) valid = false;})
        if (valid) {
            $("#Loading").modal('show');
            form.submit();
        };

    });
</script>
{{-- <button  data-toggle="modal" data-target="#Loading" class="btn btn-primary float-right btn-sm">Loading</button> --}}
<div class="modal fade" id="Loading">
    <div class="modal-dialog modal-lg modal-dialog-centered d-flex justify-content-center">
        <div class="spinner-border text-light" style="width: 3rem; height: 3rem;" role="status">
          <span class="sr-only">Loading...</span>
        </div>
    </div>
</div>

<!-- BEGIN: Vendor JS-->
<script src="{{ asset('backend/app-assets/vendors/js/vendors.min.js') }}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{ asset('backend/app-assets/vendors/js/forms/validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('backend/app-assets/js/scripts/forms/form-validation.js') }}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{ asset('backend/app-assets/js/core/app-menu.js') }}"></script>
<script src="{{ asset('backend/app-assets/js/core/app.js') }}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{ asset('backend/app-assets/js/scripts/pages/page-auth-login.js') }}"></script>
<script src="{{ asset('/backend/app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
<!-- END: Page JS-->

<script>
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })
</script>

<script src="{{ asset('/toaster/dist/tata.js') }}"></script>


    
@if (Session::has('flash_message_error'))
    <script>
        tata.error('Opps...', '{!! session('flash_message_error') !!}', {
          position: 'br',
          duration: 10000,
          animate: 'slide'
        })
    </script>
@endif

@if (Session::has('flash_message_success'))
    <script>
        tata.success('Success...', '{!! session('flash_message_success') !!}', {
          position: 'br',
          duration: 10000,
          animate: 'slide'
        })

    </script>
@endif

@error('email'))
    <script>
        tata.error('Opps...', '{{ $message }}', {
          position: 'br',
          duration: 10000,
          animate: 'slide'
        })

    </script>
@enderror

@error('password')
    <script>
        tata.error('Opps...', '{{ $message }}', {
          position: 'br',
          duration: 10000,
          animate: 'slide'
        })

    </script>
@enderror

@if (session('status'))
    <script>
        tata.success('Success...', '{!! session('status') !!}', {
          position: 'br',
          duration: 10000,
          animate: 'slide'
        })

    </script>
@endif
</html>