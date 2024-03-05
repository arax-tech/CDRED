@extends('layouts.auth')
@section('title', 'Sign Up')
@section('css')
<style type="text/css">
    .select2-container--default .select2-selection--single .select2-selection__arrow{
        display: none !important;
    }
    .select2-container--classic.select2-container--open .select2-selection--single, .select2-container--default.select2-container--open .select2-selection--single{
        border-color: #e47f39 !important
    }
    .select2-container--default .select2-selection--single{
        border: 1px solid #D8D6DE !important;
        min-width: 120px !important
    }
    .select2-container--classic .select2-results__option[aria-selected='true'], .select2-container--default .select2-results__option[aria-selected='true']{
        background: #e47f39 !important
    }
    .select2-container--classic .select2-selection--single:focus, .select2-container--default .select2-selection--single:focus{
        border-color: #e47f39 !important;
    }
    .input-group:not(.bootstrap-touchspin):focus-within .form-control, .input-group:not(.bootstrap-touchspin):focus-within .input-group-text{
        border-color: #e47f39 !important;
    }
    #mobile_number-error{
        width: 100% !important; 
        top: 64px !important;
        position: absolute !important;
    }
</style>
@endsection
@section('content')
@php
    error_reporting(0);
    $countries = DB::table('countries')->get();
@endphp
<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-v2">
                    <div class="auth-inner row m-0">
                        <!-- Brand logo-->{{-- <a class="brand-logo" href="javascript:void(0);">
                            <h2 class="brand-text text-primary ml-1"> SignUp</h2>
                        </a> --}}
                        <!-- /Brand logo-->
                        <!-- Left Text-->
                        <div class="d-none d-lg-flex col-lg-8 align-items-center p-5">
                            <div class="w-100 d-lg-flex align-items-center justify-content-center px-5"><img class="img-fluid" src="{{ asset('backend/app-assets/images/pages/register-v2.svg') }}" alt="Login V2" /></div>
                        </div>
                        <!-- /Left Text-->
                        <!-- Login-->
                        <div class="d-flex col-lg-4 align-items-center auth-bg  ">
                            <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                                <center>
                                    <img style="width: 70%" src="{{ asset('/logo.png') }}">
                                </center>
                                <br><br>
                                <h4 class="card-title mb-1">Sign Up  🚀</h4>
                                <p class="card-text mb-2">Make your app management easy and fun!</p>
                                <form id="auth-submit" class="auth-login-form mt-2" action="{{ url('/register') }}" method="POST">
                                    @csrf

                                    
                                    <div class="form-group">
                                        <label class="form-label" >Name <span class="text-danger">*</span></label>
                                        <input class="form-control" name="name" type="text"  value="{{ old('name') }}" autofocus="" required />
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" >Email <span class="text-danger">*</span></label>
                                        <input class="form-control" name="email" type="text"  value="{{ old('email') }}" required />
                                    </div>


                                    

                         

                                
                                    <div class="row">
                                        <dov class="col">
                                            <div class="form-group">
                                                <label class="form-label" >Mobile Number <span class="text-danger">*</span></label>
                                                <div class="d-flex flex-row">
                                                    
                                                    <select class="select2 w-25" name="phonecode">
                                                        @foreach ($countries as $country)
                                                            <option value="+{{ $country->phonecode }}">+{{ $country->phonecode }}</option>
                                                        @endforeach
                                                    </select>
                                                    <input type="text" class="form-control w-75" name="mobile_number" placeholder="##########" required="" /> <br>
                                                    
                                                </div>
                                            </div>
                                        </dov>
                                        
                                    </div>
                                     


                                    
                                    <div class="form-group mt-1">
                                        <div class="row">
                                            <dov class="col">
                                                <div class="d-flex justify-content-between">
                                                    <label >Password <span class="text-danger">*</span></label>
                                                </div>
                                                <div class="input-group input-group-merge form-password-toggle">
                                                    <input class="form-control form-control-merge" name="password"  value="{{ old('password') }}" type="password" required />
                                                    <div class="input-group-append"><span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span></div>
                                                </div>
                                            </dov>
                                            <dov class="col">
                                                <div class="d-flex justify-content-between">
                                                    <label >Confirm Password <span class="text-danger">*</span></label>
                                                </div>
                                                <div class="input-group input-group-merge form-password-toggle">
                                                    <input class="form-control form-control-merge" name="confirm_password"  type="password" required />
                                                    <div class="input-group-append"><span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span></div>
                                                </div>
                                            </dov>
                                        </div>
                                       
                                    </div>


                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" id="register-privacy-policy" type="checkbox" checked="" tabindex="4">
                                            <label class="custom-control-label" for="register-privacy-policy">I agree to<a href="{{ url('/term-and-condition') }}">&nbsp;Terms & Condition</a></label>
                                        </div>
                                    </div>


                                    <button class="btn btn-primary btn-block" tabindex="4">Sign Up</button>
                                </form>
                                <p class="text-center mt-2"><span>Have a Account?</span><a href="{{ url('/login') }}"><span>&nbsp;Sign In</span></a></p>
                               
                            </div>
                        </div>
                        <!-- /Login-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->



</body>
@endsection