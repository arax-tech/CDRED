@extends('admin.layouts.app')
@section('title', 'Create Application')
@section('css')

<style type="text/css">
    h6{font-weight: bolder !important; font-size: 14px !important}
</style>
@endsection
@php
    error_reporting(0);
    $countries = DB::table('countries')->get();
    $mobile_number_array = explode("-", $application->mobile_number);
    $tab = request()->tab;

    $country= DB::table('countries')->where('id', $application->country)->first();
    // dd($tab);
@endphp
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
                    <div class="col-xl-12">
                        <!-- Account details card-->
                        <div class="card mb-4">
                            <div class="card-header bg-light mb-1">
                                View Application #{{ $application->application_id }}
                                <a class="btn btn-primary float-right btn-sm" href="{{ url('/admin/application') }}"><i data-feather="arrow-left"></i>&nbsp;Back</a>
                            </div>
                            <div class="card-body">
                                <div class="form-card p-2">
                                    <div class="content-header">
                                        <h2 class="fs-title mb-3" style="color: #327FB4; margin-top: -20px !important">Review Info</h2>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <h6>First Name</h6>
                                                <p>{{ $application->first_name }}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <h6>Middle Name</h6>
                                                <p>{{ $application->middle_name ? $application->middle_name : 'Null' }}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <h6>Last Name</h6>
                                                <p>{{ $application->last_name }}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <h6>Mobile Number</h6>
                                                <p>{{ $application->mobile_number }}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <h6>Email</h6>
                                                <p>{{ $application->email }}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <h6>Pin Code</h6>
                                                <p>{{ $application->pin_code }}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <h6>Address</h6>
                                                <p>{{ $application->address }}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <h6>City</h6>
                                                <p>{{ $application->city }}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <h6>Country</h6>                                                
                                                <p>{{ $country->name }}</p>
                                            </div>
                                        </div>
                                    </div>

                                    <h2 class="fs-title mt-3 mb-3" style="color: #327FB4;">Educational Info</h2>
                                    @forelse ($applicationEducations as $education1)
                                        @php
                                            $country1= DB::table('countries')->where('id', $education1->country)->first();
                                        @endphp

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <h6>Country Of Education</h6>
                                                    <p>{{ $country1->name }}</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <h6>Educational Institute Name</h6>
                                                    <p>{{ $education1->institute }}</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <h6>Educational Level</h6>
                                                    <p>{{ $education1->level }}</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-1">
                                                    <h6>Field Of Study</h6>
                                                    <p>{{ $education1->field_of_study }}</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-1">
                                                    <h6>Start Date</h6>
                                                    <p>{{ date('d M Y', strtotime($education1->start_date)) }}</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-1">
                                                    <h6>End Date</h6>
                                                    <p>{{ date('d M Y', strtotime($education1->end_date)) }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="mb-2">
                                    @empty
                                        <p>No educations found...</p>
                                    @endforelse
                                    

                                    <h2 class="fs-title mt-3 mb-3" style="color: #327FB4;">Professional Info</h2>
                                    @forelse ($applicationProfessionals as $professional1)
                                        @php
                                            $country2= DB::table('countries')->where('id', $professional1->country)->first();
                                        @endphp
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <h6>Country of Employment</h6>
                                                    <p>{{ $country2->name }}</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <h6>Any Internship?</h6>
                                                    <p>{{ $professional1->internship }}</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <h6>Name of Company or Organization</h6>
                                                    <p>{{ $professional1->company }}</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <h6>Whether?</h6>
                                                    <p>{{ $professional1->whether }}</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <h6>Duration Of Internship</h6>
                                                    <p>{{ $professional1->experience_duration }} {{ $professional1->experience_type }}</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <h6>Designation</h6>
                                                    <p>{{ $professional1->designation }}</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <h6>Company Email</h6>
                                                    <p>{{ $professional1->company_email }}</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <h6>Company Contact</h6>
                                                    <p>{{ $professional1->company_contact }}</p>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <h6>Start Date</h6>
                                                    <p>{{ date('d M Y', strtotime($professional1->end_date)) }}</p>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <h6>End Date</h6>
                                                    <p>{{ date('d M Y', strtotime($professional1->end_date)) }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                        <p>No professional found...</p>
                                    @endforelse
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Dashboard Ecommerce ends -->

        </div>
    </div>
</div>


@endsection
