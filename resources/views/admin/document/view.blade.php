@extends('admin.layouts.app')
@section('title', 'View Uploaded Documents')
@section('css')

<style type="text/css">
    p{font-weight: bolder !important; font-size: 14px !important; text-transform: capitalize;}
</style>
@endsection
@php
    error_reporting(0);
 
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
                                View Uploaded Documents
                                <a class="btn btn-primary float-right btn-sm" href="{{ url('/admin/document') }}"><i data-feather="arrow-left"></i>&nbsp;Back</a>
                            </div>
                            <div class="card-body">
                                <div class="form-card p-2">
                                    <div class="row">
                                        @if ($document->id_proof !== null)
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <p class="mb-1">id proof</p>
                                                    <a target="_blank" href="{{ asset('/backend/user/application/document/'.$document->id_proof) }}">View</a>
                                                </div>
                                            </div>
                                        @endif


                                        @if ($document->name_change_evidence !== null)
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <p class="mb-1">name change evidence</p>
                                                    <a target="_blank" href="{{ asset('/backend/user/application/document/'.$document->name_change_evidence) }}">View</a>
                                                </div>
                                            </div>
                                        @endif


                                        @if ($document->work_experience_letter !== null)
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <p class="mb-1">work experience letter</p>
                                                    <a target="_blank" href="{{ asset('/backend/user/application/document/'.$document->work_experience_letter) }}">View</a>
                                                </div>
                                            </div>
                                        @endif
                                        
                                        

                                     
                                        @if ($document->appointment_letter !== null)
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <p class="mb-1">appointment letter</p>
                                                    <a target="_blank" href="{{ asset('/backend/user/application/document/'.$document->appointment_letter) }}">View</a>
                                                </div>
                                            </div>
                                        @endif


                                        @if ($document->pay_slips !== null)
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <p class="mb-1">pay slips</p>
                                                    <a target="_blank" href="{{ asset('/backend/user/application/document/'.$document->pay_slips) }}">View</a>
                                                </div>
                                            </div>
                                        @endif


                                        @if ($document->resume !== null)
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <p class="mb-1">resume</p>
                                                    <a target="_blank" href="{{ asset('/backend/user/application/document/'.$document->resume) }}">View</a>
                                                </div>
                                            </div>
                                        @endif
                                        
                                        

                                        
                             
                                        
                                        @if ($document->salary_statement !== null)
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <p class="mb-1">salary statement</p>
                                                    <a target="_blank" href="{{ asset('/backend/user/application/document/'.$document->salary_statement) }}">View</a>
                                                </div>
                                            </div>
                                        @endif


                                        @if ($document->apprenticeship_certificate !== null)
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <p class="mb-1">apprenticeship certificate</p>
                                                    <a target="_blank" href="{{ asset('/backend/user/application/document/'.$document->apprenticeship_certificate) }}">View</a>
                                                </div>
                                            </div>
                                        @endif


                                        @if ($document->affidavit !== null)
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <p class="mb-1">affidavit</p>
                                                    <a target="_blank" href="{{ asset('/backend/user/application/document/'.$document->affidavit) }}">View</a>
                                                </div>
                                            </div>
                                        @endif
                                        

                                        
                                    </div>

                                    
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
