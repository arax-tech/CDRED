@extends('user.layouts.app')
@section('title', 'Dashboard')

@section('css')
<style type="text/css">
    .card-statistics .statistics-body .avatar .avatar-content {
        width: 70px !important;
        height: 70px !important;
    }
    .bs-stepper .bs-stepper-header .step.active .step-trigger .bs-stepper-box{
        background-color: #e47f39 !important;
        box-shadow: none !important
    }
    .bs-stepper .bs-stepper-header .step.active .step-trigger .bs-stepper-label .bs-stepper-title{
        color: #e47f39 !important
    }
    .bs-stepper .bs-stepper-header .step .step-trigger .bs-stepper-label .bs-stepper-subtitle{
        font-size: 0.7rem !important
    }
    
</style>
@endsection
@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- Dashboard Ecommerce Starts -->
            <section id="dashboard-ecommerce">
                <div class="row match-height">
                    <!-- Medal Card -->
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="card card-congratulation-medal">
                            <div class="card-body d-flex flex-column justify-content-between">
                                <div>
                                    <h2>Hi, {{ auth::user()->name }} </h2>
                                    <h5>Welcome to CDRED!</h5>
                                </div>
                                <hr size="10">
                                <div>
                                    <p class="card-text font-small-5 mt-3" style="margin-bottom: 4px !important">Your CR Rererence Number</p>
                                    <h3 class="">CR{{ auth::user()->ref_no }}</h3>
                                </div>
                                <img src="{{ asset('/backend/app-assets/images/illustration/badge.svg') }}" class="congratulation-medal" alt="Medal Pic" />
                            </div>
                        </div>
                    </div>
                    <!--/ Medal Card -->

                    <!-- Statistics Card -->
                    <div class="col-xl-8 col-md-6 col-12">
                        
                        <div class="card card-congratulation-medal">
                            <div class="card-body align-items-center">
                                <div>
                                    <h2>Need a Skill Evaluation</h2>
                                    <h5>Apply Now</h5>
                                </div>
                                <br><br>
                                <center>
                                    <a class="btn btn-primary" href="{{ url('/user/application/create') }}">Get Evaluation Now</a>
                                </center>
                            </div>
                        </div>
                    </div>
                    <!--/ Statistics Card -->
                </div>

                <div class="row match-height">
                    

                    <!-- Statistics Card -->
                    <div class="col-xl-12 col-md-12 col-12">
                        <div class="card card-statistics" style="background: transparent !important; box-shadow: none !important">
                            
                            @if ($application)
                                <div class="card-header p-0">
                                    <h4 class="card-title m-0" style="padding: 3px;">Application</h4>
                                </div>
                                <div class="bs-stepper checkout-tab-steps">
                                    <div class="bs-stepper-header">
                                        <div class="step @if ($application->status == "Started") active @endif" data-target="#step-cart">
                                            <button type="button" class="step-trigger" aria-selected="true">
                                            <span class="bs-stepper-box">
                                                <i data-feather="activity" class="font-medium-3"></i>
                                            </span>
                                            <span class="bs-stepper-label">
                                                <span class="bs-stepper-title">Started</span>
                                                <span class="bs-stepper-subtitle">Process started</span>
                                            </span>
                                            </button>
                                        </div>
                                        <div class="line">
                                            <i data-feather="chevron-right" class="font-medium-2"></i>
                                        </div>
                                        <div class="step @if ($application->status == "Documents") active @endif" data-target="#step-cart">
                                            <button type="button" class="step-trigger" aria-selected="true">
                                            <span class="bs-stepper-box">
                                                <i data-feather="file" class="font-medium-3"></i>
                                            </span>
                                            <span class="bs-stepper-label">
                                                <span class="bs-stepper-title">Documents</span>
                                                <span class="bs-stepper-subtitle">documents uploaded</span>
                                            </span>
                                            </button>
                                        </div>
                                        <div class="line">
                                            <i data-feather="chevron-right" class="font-medium-2"></i>
                                        </div>
                                        <div class="step @if ($application->status == "Payment") active @endif" data-target="#step-cart">
                                            <button type="button" class="step-trigger" aria-selected="true">
                                            <span class="bs-stepper-box">
                                                <i data-feather="dollar-sign" class="font-medium-3"></i>
                                            </span>
                                            <span class="bs-stepper-label">
                                                <span class="bs-stepper-title">Payment</span>
                                                <span class="bs-stepper-subtitle">payment confirmed</span>
                                            </span>
                                            </button>
                                        </div>
                                        <div class="line">
                                            <i data-feather="chevron-right" class="font-medium-2"></i>
                                        </div>
                                        <div class="step @if ($application->status == "In Process") active @endif" data-target="#step-cart">
                                            <button type="button" class="step-trigger" aria-selected="true">
                                            <span class="bs-stepper-box">
                                                <i data-feather="upload-cloud" class="font-medium-3"></i>
                                            </span>
                                            <span class="bs-stepper-label">
                                                <span class="bs-stepper-title">In Process</span>
                                                <span class="bs-stepper-subtitle">reviewing</span>
                                            </span>
                                            </button>
                                        </div>
                                        <div class="line">
                                            <i data-feather="chevron-right" class="font-medium-2"></i>
                                        </div>

                                        <div class="step @if ($application->status == "Completed") active @endif" data-target="#step-cart">
                                            <button type="button" class="step-trigger" aria-selected="true">
                                            <span class="bs-stepper-box">
                                                <i data-feather="check-square" class="font-medium-3"></i>
                                            </span>
                                            <span class="bs-stepper-label">
                                                <span class="bs-stepper-title">Completed</span>
                                                <span class="bs-stepper-subtitle">Congrats! Done</span>
                                            </span>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- Wizard ends -->
                                </div>

                                <br>
                                <div class="card-header p-0">
                                    <h4 class="card-title m-0" style="padding: 3px;">Verication Process</h4>
                                </div>
                                <div class="bs-stepper checkout-tab-steps">
                                    <div class="bs-stepper-header">
                                    <div class="step @if ($application->employment_verication == "Requested") active @endif" data-target="#step-cart">
                                            <button type="button" class="step-trigger" aria-selected="true">
                                            <span class="bs-stepper-box">
                                                <i data-feather="alert-circle" class="font-medium-3"></i>
                                            </span>
                                            <span class="bs-stepper-label">
                                                <span class="bs-stepper-title">Pending</span>
                                                <span class="bs-stepper-subtitle">not started yet</span>
                                            </span>
                                            </button>
                                        </div>
                                        <div class="line">
                                            <i data-feather="chevron-right" class="font-medium-2"></i>
                                        </div>
                                    <div class="step @if ($application->employment_verication == "In Process") active @endif" data-target="#step-cart">
                                            <button type="button" class="step-trigger" aria-selected="true">
                                            <span class="bs-stepper-box">
                                                <i data-feather="upload-cloud" class="font-medium-3"></i>
                                            </span>
                                            <span class="bs-stepper-label">
                                                <span class="bs-stepper-title">In Process</span>
                                                <span class="bs-stepper-subtitle">verification in process</span>
                                            </span>
                                            </button>
                                        </div>
                                        <div class="line">
                                            <i data-feather="chevron-right" class="font-medium-2"></i>
                                        </div>
                                    <div class="step @if ($application->employment_verication == "Awaiting") active @endif" data-target="#step-cart">
                                            <button type="button" class="step-trigger" aria-selected="true">
                                            <span class="bs-stepper-box">
                                                <i data-feather="alert-triangle" class="font-medium-3"></i>
                                            </span>
                                            <span class="bs-stepper-label">
                                                <span class="bs-stepper-title">Awaiting for Response</span>
                                                <span class="bs-stepper-subtitle">waiting for confirmation</span>
                                            </span>
                                            </button>
                                        </div>
                                        <div class="line">
                                            <i data-feather="chevron-right" class="font-medium-2"></i>
                                        </div>
                                    <div class="step @if ($application->employment_verication == "Completed") active @endif" data-target="#step-cart">
                                            <button type="button" class="step-trigger" aria-selected="true">
                                            <span class="bs-stepper-box">
                                                <i data-feather="check-square" class="font-medium-3"></i>
                                            </span>
                                            <span class="bs-stepper-label">
                                                <span class="bs-stepper-title">Completed</span>
                                                <span class="bs-stepper-subtitle">Congrats !</span>
                                            </span>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- Wizard ends -->
                                </div>
                            @endif
                            
                           
                        </div>
                    </div>
                    <!--/ Statistics Card -->
                </div>



                <div class="row match-height">
                    <!-- Company Table Card -->
                    <div class="col-lg-12 col-12">
                        <div class="card card-company-table">
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>User</th>
                                                <th>Application ID</th>
                                                <th>Phone</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($application)
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar rounded mr-1">
                                                                <div class="avatar-content">
                                                                    @if (!empty(auth::user()->image))
                                                                        <img width="40" class="rounded" src="{{ asset('/backend/user/profile/'.auth::user()->image) }}" />
                                                                    @else
                                                                        <img width="40" class="rounded" src="{{ asset('placeholder.jpg') }}" />
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="font-weight-bolder">{{ $application->first_name }} {{ $application->middle_name }} {{ $application->last_name }}</div>
                                                                <div class="font-small-2 text-muted">{{ $application->email }}</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    
                                                    <td>{{ $application->application_id }}</td>
                                                    <td>{{ $application->mobile_number }}</td>
                                                    <td>{{ date('d M Y, h:i A', strtotime($application->created_at)) }}</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <span class="font-weight-bolder mr-1">{{ $application->status }}</span>
                                                            @if ($application->status == "Completed")
                                                                <i data-feather="trending-up" class="text-success font-medium-1"></i>
                                                            @else
                                                                <i data-feather="trending-down" class="text-danger font-medium-1"></i>
                                                            @endif
                                                        </div>
                                                    </td>
                                                </tr>
                                            @else
                                                <td colspan="6">No applicaiton found...</td>
                                            @endif
                                            

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Company Table Card -->

                 
  
  

                   =
                </div>
            </section>
            <!-- Dashboard Ecommerce ends -->

        </div>
    </div>
</div>
@endsection
