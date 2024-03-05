@extends('layouts.auth')
@section('title', 'Sign In')
@section('content')
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
                            <h2 class="brand-text text-primary ml-1"> Sign In</h2>
                        </a> --}}
                        <!-- /Brand logo-->
                        <!-- Left Text-->
                        <div class="d-none d-lg-flex col-lg-8 align-items-center p-5">
                            <div class="w-100 d-lg-flex align-items-center justify-content-center px-5"><img class="img-fluid" src="{{ asset('backend/app-assets/images/pages/login-v2.svg') }}" alt="Login V2" /></div>
                        </div>
                        <!-- /Left Text-->
                        <!-- Login-->
                        <div class="d-flex col-lg-4 align-items-center auth-bg px-2">
                            <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                                <center>
                                    <img style="width: 70%" src="{{ asset('/logo.png') }}">
                                </center>
                                <br><br>

                                <h4 class="card-title mb-1">Sign In  🚀</h4>
                                <p class="card-text mb-2">Sign in to start advancher !</p>
                                <form id="auth-submit" class="auth-login-form mt-2" action="{{ url('/login') }}" method="POST">
                                    @csrf

                                    
                                 

                                    <div class="form-group">
                                        <label class="form-label" >Email <span class="text-danger">*</span></label>
                                        <input class="form-control" name="email" type="text"  value="{{ old('email') }}" required />
                                    </div>


                                    

                                    


                               


                                    
                                    <div class="form-group">
                                        <div class="d-flex justify-content-between">
                                            <label>Password <span class="text-danger">*</span></label><a href="{{ url('/password/reset') }}"><small>Forgot Password ?</small></a>
                                        </div>
                                        <div class="input-group input-group-merge form-password-toggle">
                                            <input class="form-control form-control-merge" name="password"  value="{{ old('password') }}" type="password" required />
                                            <div class="input-group-append"><span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span></div>
                                        </div>
                                       
                                    </div>


                                    <button class="btn btn-primary btn-block" tabindex="4">Sign In</button>
                                </form>
                                <p class="text-center mt-2"><span>Dont Have a Account ?</span><a href="{{ url('/register') }}"><span>&nbsp;Sign Up</span></a></p>
                               
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