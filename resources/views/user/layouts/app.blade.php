@php
    use Illuminate\Support\Facades\Auth;
@endphp

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>@yield('title')</title>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/backend/app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/backend/app-assets/vendors/css/charts/apexcharts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/backend/app-assets/vendors/css/extensions/toastr.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/backend/app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/backend/app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/backend/app-assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/backend/app-assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/backend/app-assets/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/backend/app-assets/css/themes/bordered-layout.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/backend/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/backend/app-assets/css/pages/dashboard-ecommerce.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/backend/app-assets/css/plugins/charts/chart-apex.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/backend/assets/css/style.css') }}">
    <!-- END: Custom CSS-->


    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/vendors/css/forms/wizard/bs-stepper.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/vendors/css/forms/select/select2.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/backend/app-assets/css/plugins/forms/form-validation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/backend/app-assets/css/plugins/forms/form-wizard.css') }}">
    <!-- END: Page CSS-->

    @yield('css')
    <style type="text/css">
        .tata-title{color: #fff !important};
        .header-navbar .navbar-container ul.navbar-nav li.dropdown-user .dropdown-menu{
            width: 15rem !important
        }
        .main-menu.menu-dark .navigation > li.active > a{
            /*background: linear-gradient(118deg, #327fb3, rgb(37 114 189)) !important;*/
            /*box-shadow: 0 0 10px 1px rgb(60 129 185) !important;*/

            background: -webkit-linear-gradient(332deg, #e47f39, rgb(233 90 7)) !important;
            background: linear-gradient(118deg, #e47f39, rgb(217 125 70)) !important;
            box-shadow: 0 0 10px 1px rgb(228 124 53) !important;
        }
        .main-menu .navbar-header .navbar-brand .brand-text{
            color: #fff !important;
        }
        .main-menu.menu-dark .navigation {
            background: #327fb3;
        }
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
        .avatar.bg-light-primary {
            color: #327fb3 !important;
        }
        .header-navbar .navbar-container ul.navbar-nav li.dropdown-user .dropdown-menu{
            width: 15rem !important
        }
    </style>
    <style type="text/css">
        /*#preloader{
            background: #fff url({{ asset('loading.gif') }}) no-repeat center center;
            background-size: 10%;
            height: 100vh;
            width: 100%;
            position: fixed;
            z-index: 1040 !important;
        }*/

        #loaderContainer{
            background: #fff !important;
            height: 100vh;
            width: 100%;
            position: fixed;

            z-index: 1040 !important;
        }
        #loader {

            position: absolute;
            width: 300px;
            height: 200px;
            z-index: 15;
            top: 50%;
            left: 50%;


          border: 5px solid #e47f39;
          border-radius: 50%;
          border-top: 5px solid #f3f3f3;
          width: 50px;
          height: 50px;
          -webkit-animation: spin 1.3s linear infinite; /* Safari */
          animation: spin 1.3s linear infinite;
        }

        /* Safari */
        @-webkit-keyframes spin {
          0% { -webkit-transform: rotate(0deg); }
          100% { -webkit-transform: rotate(360deg); }
        }

        @keyframes spin {
          0% { transform: rotate(0deg); }
          100% { transform: rotate(360deg); }
        }
    </style>
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">
    <div id="loaderContainer">
        <div id="loader"></div>
    </div> 
    <!-- BEGIN: Header-->
    
    @include('user.layouts.include.navbar')

    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    @include('user.layouts.include.sidebar')
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    @yield('content')
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    @include('user.layouts.include.footer')
    
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->

    <script type="text/javascript">
        let form = document.querySelector('#form-submit');

        form.addEventListener('submit', function (event) {
            event.preventDefault();

            let valid = true;
            $('[required]').each(function() {
            if ($(this).is(':invalid') || !$(this).val()) valid = false;})
            if (valid) {
                $("#Loading").modal('show');
                form.submit();
            }else{
                console.log("error please fill all fields!")
            }

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
    <script src="{{ asset('/backend/app-assets/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('/backend/app-assets/vendors/js/charts/apexcharts.min.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('/backend/app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('/backend/app-assets/js/core/app.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('/backend/app-assets/js/scripts/pages/dashboard-ecommerce.js') }}"></script>
    <!-- END: Page JS-->


    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('/backend/app-assets/vendors/js/forms/wizard/bs-stepper.min.js') }}"></script>
    <script src="{{ asset('/backend/app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
    <script src="{{ asset('/backend/app-assets/vendors/js/forms/validation/jquery.validate.min.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('/backend/app-assets/js/scripts/forms/form-wizard.js') }}"></script>
    <!-- END: Page JS-->

    @yield('js')
    
    
    <script type="text/javascript">
         // $("#Loading").modal('show');
        const loader = document.getElementById("loaderContainer");
        window.addEventListener("load", function(){
            loader.style.display = "none";
            // $("#Loading").modal('hide');
        })
    </script>
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
</body>
<!-- END: Body-->

</html>