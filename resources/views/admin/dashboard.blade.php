@extends('admin.layouts.app')
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
                

                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <div>
                                    <h2 class="font-weight-bolder mb-0">{{ DB::table('users')->where('role','User')->count() }}</h2>
                                    <p class="card-text">Users</p>
                                </div>
                                <div class="avatar bg-light-primary p-50 m-0">
                                    <div class="avatar-content">
                                        <i data-feather="users" class="font-medium-5"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <div>
                                    <h2 class="font-weight-bolder mb-0">{{ DB::table('applications')->count() }}</h2>
                                    <p class="card-text">Applications</p>
                                </div>
                                <div class="avatar bg-light-primary p-50 m-0">
                                    <div class="avatar-content">
                                        <i data-feather="activity" class="font-medium-5"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <div>
                                    <h2 class="font-weight-bolder mb-0">{{ DB::table('payment_links')->count() }}</h2>
                                    <p class="card-text">Payments</p>
                                </div>
                                <div class="avatar bg-light-primary p-50 m-0">
                                    <div class="avatar-content">
                                        <i data-feather="dollar-sign" class="font-medium-5"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <div>
                                    <h2 class="font-weight-bolder mb-0">{{ DB::table('coupons')->count() }}</h2>
                                    <p class="card-text">Coupons</p>
                                </div>
                                <div class="avatar bg-light-primary p-50 m-0">
                                    <div class="avatar-content">
                                        <i data-feather="alert-octagon" class="font-medium-5"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <div>
                                    <h2 class="font-weight-bolder mb-0">{{ DB::table('reports')->count() }}</h2>
                                    <p class="card-text">Reports</p>
                                </div>
                                <div class="avatar bg-light-primary p-50 m-0">
                                    <div class="avatar-content">
                                        <i data-feather="file-plus" class="font-medium-5"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <div>
                                    <h2 class="font-weight-bolder mb-0">{{ DB::table('documents')->count() }}</h2>
                                    <p class="card-text">Documents</p>
                                </div>
                                <div class="avatar bg-light-primary p-50 m-0">
                                    <div class="avatar-content">
                                        <i data-feather="file" class="font-medium-5"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                                <th>Applicant ID</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($applications as $application)
                                                @php
                                                    $user = DB::table('users')->where('id', $application->user_id)->first();
                                                @endphp
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar rounded mr-1">
                                                                <div class="avatar-content">
                                                                    @if (!empty($user->image))
                                                                        <img width="40" class="rounded" src="{{ asset('/backend/user/profile/'.$user->image) }}" />
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
                                            @endforeach
                                            

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Company Table Card -->

                 
  

                    <!-- Goal Overview Card -->
                    {{-- <div class="col-lg-3 col-md-6 col-12"> --}}
                    {{--     <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h4 class="card-title">Applications</h4>
                            </div>
                            <div class="card-body p-0">
                                <div id="goal-overview-radial-bar-chart" class="my-2"></div>
                            </div>
                        </div>
                    </div> --}}
                    <!--/ Goal Overview Card -->

                   
                </div>
            </section>
            <!-- Dashboard Ecommerce ends -->

        </div>
    </div>
</div>
@endsection
