@extends('admin.layouts.app')
@section('title', 'Create Application')
@section('css')

<style type="text/css">
    .bs-stepper .bs-stepper-header .step.active .step-trigger .bs-stepper-box{
        background-color: #e47f39 !important;
        box-shadow: 0 3px 6px 0 rgb(228 127 57) !important;
    }
    .bs-stepper .bs-stepper-header .step.active .step-trigger .bs-stepper-label .bs-stepper-title{
        color: #e47f39 !important;
    }
    .bs-stepper .bs-stepper-header .step.crossed .step-trigger .bs-stepper-box{
        color: #e47f39 !important;
    }
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
    .demo-inline-spacing > *{
        margin-top: 0.5rem !important
    }
    #mobile_number-error{
        width: 100% !important; 
        top: 64px !important;
        position: absolute !important;
    }
  

    #country-error{
        top: 40px !important;
        position: absolute !important;
    }
    .error{
        border-color: #EA5455 !important
    }

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
        <div class="content-body">
         

           

            <!-- Modern Horizontal Wizard -->
            <section class="modern-horizontal-wizard">
                <div class="bs-stepper wizard-modern modern-wizard-example">
                    <div class="bs-stepper-header">
                        <div class="step @if ($tab === "Personal") active  @endif">
                            <button type="button" class="step-trigger">
                                <span class="bs-stepper-box">
                                    <i data-feather="user" class="font-medium-3"></i>
                                </span>
                                <span class="bs-stepper-label">
                                    <span class="bs-stepper-title">Personal Info</span>
                                    <span class="bs-stepper-subtitle">Add personal info.</span>
                                </span>
                            </button>
                        </div>
                        <div class="line">
                            <i data-feather="chevron-right" class="font-medium-2"></i>
                        </div>
                        <div class="step @if ($tab === "Education") active @endif">
                            <button type="button" class="step-trigger">
                                <span class="bs-stepper-box">
                                    <i data-feather="bookmark" class="font-medium-3"></i>
                                </span>
                                <span class="bs-stepper-label">
                                    <span class="bs-stepper-title">Education Info</span>
                                    <span class="bs-stepper-subtitle">Add Education Info</span>
                                </span>
                            </button>
                        </div>
                        <div class="line">
                            <i data-feather="chevron-right" class="font-medium-2"></i>
                        </div>
                        <div class="step @if ($tab === "Professional") active dstepper-block @endif">
                            <button type="button" class="step-trigger">
                                <span class="bs-stepper-box">
                                    <i data-feather="award" class="font-medium-3"></i>
                                </span>
                                <span class="bs-stepper-label">
                                    <span class="bs-stepper-title">Professional Info</span>
                                    <span class="bs-stepper-subtitle">Add Professional Info</span>
                                </span>
                            </button>
                        </div>
                        <div class="line">
                            <i data-feather="chevron-right" class="font-medium-2"></i>
                        </div>

                        <div class="step @if ($tab === "Review") active dstepper-block @endif">
                            <button type="button" class="step-trigger">
                                <span class="bs-stepper-box">
                                    <i data-feather="eye" class="font-medium-3"></i>
                                </span>
                                <span class="bs-stepper-label">
                                    <span class="bs-stepper-title">Review Info</span>
                                    <span class="bs-stepper-subtitle">Review All Info</span>
                                </span>
                            </button>
                        </div>
                        
                    </div>
                    <div class="bs-stepper-content">
                        {{-- <form method="post" action="{{ url('/admin/application/store') }}"> --}}
                            {{-- @csrf --}}
                            <div id="" class="content @if ($tab === "Personal") active dstepper-block @endif">
                                <div class="content-header">
                                    <h5 class="mb-0">Personal Info</h5>
                                </div>


                                <form id="form-submit" method="post" action="{{ url('/admin/application/personal/update/'.$application->id) }}">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label class="form-label">First Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="first_name" required value="{{ $application->first_name }}" />
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="form-label">Middle Name</label>
                                            <input type="text" class="form-control" name="middle_name" value="{{ $application->middle_name }}" />
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="form-label">Last Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="last_name" required value="{{ $application->last_name }}" />
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label class="form-label">Mobile Number <span class="text-danger">*</span></label>
                                            <div class="d-flex flex-row">
                                                
                                                <select class="select2 w-25" name="phonecode" required="">
                                                    @foreach ($countries as $country)
                                                        <option value="+{{ $country->phonecode }}"
                                                            @if ($mobile_number_array[0] == $country->phonecode)
                                                                selected 
                                                            @endif
                                                        >+{{ $country->phonecode }}</option>
                                                    @endforeach
                                                </select>
                                                <input type="text" class="form-control w-100" name="mobile_number" placeholder="##########" value="{{ $mobile_number_array[1] }}" /> <br>
                                                
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="form-label">Email <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="email" required="" value="{{ $application->email }}" value="{{ $application->email }}" />
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="form-label">Pin Code <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="pin_code" required="" value="{{ $application->pin_code }}" />
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        
                                        <div class="form-group col-md-4">
                                            <label class="form-label">Address <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="address" required="" value="{{ $application->address }}" />
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label class="form-label">City <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="city" required="" value="{{ $application->city }}" id="city" />
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="form-label">Country <span class="text-danger">*</span></label>
                                            <select class="select2 w-100" name="country" required="">
                                                <option value="" selected="" disabled="">Choose...</option>
                                                @foreach ($countries as $country)
                                                    <option value="{{ $country->id }}"
                                                        @if ($application->country == $country->id)
                                                            selected 
                                                        @endif
                                                    >{{ $country->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    


                                    
                                    

                                    <div class="d-flex justify-content-between">
                                        <button type="button" class="btn btn-outline-secondary btn-prev" disabled>
                                            <i data-feather="arrow-left" class="align-middle mr-sm-25 mr-0"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                        </button>
                                        <button type="submit" class="btn btn-primary btn-next">
                                            <span class="align-middle d-sm-inline-block d-none">Next</span>
                                            <i data-feather="arrow-right" class="align-middle ml-sm-25 ml-0"></i>
                                        </button>
                                    </div>
                                </form>
                            
                            </div>
                            <div id="" class="content @if ($tab === "Education") active dstepper-block @endif">
                                <div class="content-header">
                                    <h5 class="mb-0">Education Info</h5>
                                </div>

                                @if (count($applicationEducations) > 0)
                                    <form method="post" action="{{ url('/admin/application/education/update/'.$application->id) }}">
                                        @csrf
                                        <div class="education_wrapper">
                                            @foreach ($applicationEducations as $key => $education)
                                                @if ($key != 0) <div> @endif
                                                    <div class="row">
                                                        <div class="form-group col-md-4">
                                                            <label class="form-label">Country Of Education</label>
                                                            <select class="select2 w-100" name="education_country[]">
                                                                <option value="" selected="" disabled="">Choose...</option>
                                                                @foreach ($countries as $country)
                                                                    <option value="{{ $country->id }}"
                                                                        @if ($education->country == $country->id)
                                                                            selected
                                                                        @endif
                                                                    >{{ $country->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label class="form-label">Educational Institute Name</label>
                                                            <input type="text" class="form-control" name="education_institute[]" value="{{ $education->institute }}" />
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label class="form-label">Educational Level</label>
                                                            <select class="select2 w-100" name="education_level[]">
                                                                <option value="Trade Certificate"
                                                                @if ($education->level == "Trade Certificate")
                                                                    selected 
                                                                @endif
                                                                >Trade Certificate</option>
                                                                <option value="Diploma"
                                                                @if ($education->level == "Diploma")
                                                                    selected 
                                                                @endif
                                                                >Diploma</option>
                                                                <option value="Bachelors"
                                                                @if ($education->level == "Bachelors")
                                                                    selected 
                                                                @endif
                                                                >Bachelors</option>
                                                                <option value="Masters"
                                                                @if ($education->level == "Masters")
                                                                    selected 
                                                                @endif
                                                                >Masters</option>
                                                                <option value="PhD"
                                                                @if ($education->level == "PhD")
                                                                    selected 
                                                                @endif
                                                                >PhD</option>
                                                                <option value="Skill Diploma (DD)"
                                                                @if ($education->level == "Skill Diploma (DD)")
                                                                    selected 
                                                                @endif
                                                                >Skill Diploma (DD)</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-4">
                                                            <label class="form-label">Field Of Study</label>
                                                            <input type="text" class="form-control" name="education_field_Of_study[]" value="{{ $education->field_of_study }}" />
                                                        </div>
                                                        <div class="form-group @if ($key == 0) col-md-2 @else col-md-4 @endif">
                                                            <label class="form-label">Start Date</label>
                                                            <input type="date" class="form-control" name="education_start_date[]" value="{{ $education->start_date }}" />
                                                        </div>
                                                        <div class="form-group @if ($key == 0) col-md-2 @else col-md-4 @endif">
                                                            <label class="form-label">End Date</label>
                                                            <input type="date" class="form-control" name="education_end_date[]" value="{{ $education->end_date }}" />
                                                        </div>
                                                        @if ($key == 0)
                                                            <div class="form-group col-md-4">
                                                                <label class="form-label" style=""></label>
                                                                <button type="button" class="btn btn-primary w-100 add_more_education">Add More</button>
                                                            </div>
                                                        @endif
                                                        
                                                    </div>

                                                    @if ($key != 0)
                                                        <button type="button" class="btn btn-danger mb-2 w-100 remove_field">Remove</button>
                                                    @endif
                                                @if ($key != 0) </div> @endif
                                                <hr class="my-1">
                                            @endforeach
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <a href="{{ url('/admin/application/edit/'.$application->application_id."?tab=Personal") }}" class="btn btn-primary btn-prev">
                                                <i data-feather="arrow-left" class="align-middle mr-sm-25 mr-0"></i>
                                                <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                            </a>
                                            <button type="submit" data-toggle="modal" data-target="#Loading" class="btn btn-primary btn-next">
                                                <span class="align-middle d-sm-inline-block d-none">Next</span>
                                                <i data-feather="arrow-right" class="align-middle ml-sm-25 ml-0"></i>
                                            </button>
                                        </div>
                                    </form>
                                @else
                                    <form method="post" action="{{ url('/admin/application/education/update/'.$application->id) }}">
                                        @csrf
                                        <div class="education_wrapper">
                                            <div class="row">
                                                <div class="form-group col-md-4">
                                                    <label class="form-label">Country Of Education</label>
                                                    <select class="select2 w-100" name="education_country[]">
                                                        <option value="" selected="" disabled="">Choose...</option>
                                                        @foreach ($countries as $country)
                                                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label class="form-label">Educational Institute Name</label>
                                                    <input type="text" class="form-control" name="education_institute[]" />
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label class="form-label">Educational Level</label>
                                                    <select class="select2 w-100" name="education_level[]">
                                                        <option value="Trade Certificate">Trade Certificate</option>
                                                        <option value="Diploma">Diploma</option>
                                                        <option value="Bachelors">Bachelors</option>
                                                        <option value="Masters">Masters</option>
                                                        <option value="PhD">PhD</option>
                                                        <option value="Skill Diploma (DD)">Skill Diploma (DD)</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-4">
                                                    <label class="form-label">Field Of Study</label>
                                                    <input type="text" class="form-control" name="education_field_Of_study[]" />
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label class="form-label">Start Date</label>
                                                    <input type="date" class="form-control" name="education_start_date[]" />
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label class="form-label">End Date</label>
                                                    <input type="date" class="form-control" name="education_end_date[]" />
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label class="form-label" style=""></label>
                                                    <button type="button" class="btn btn-primary w-100 add_more_education">Add More</button>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <a href="{{ url('/admin/application/edit/'.$application->application_id."?tab=Personal") }}" class="btn btn-primary btn-prev">
                                                <i data-feather="arrow-left" class="align-middle mr-sm-25 mr-0"></i>
                                                <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                            </a>
                                            <button type="submit" data-toggle="modal" data-target="#Loading" class="btn btn-primary btn-next">
                                                <span class="align-middle d-sm-inline-block d-none">Next</span>
                                                <i data-feather="arrow-right" class="align-middle ml-sm-25 ml-0"></i>
                                            </button>
                                        </div>
                                    </form>
                                @endif
                            </div>
                            <div id="" class="content @if ($tab === "Professional") active dstepper-block @endif">
                                <div class="content-header">
                                    <h5 class="mb-0">Professional Info</h5>
                                </div>
                                @if (count($applicationProfessionals) > 0)
                                    <form method="post" action="{{ url('/admin/application/professional/update/'.$application->id) }}">
                                        @csrf
                                        <div class="professional_wrapper">
                                            @foreach ($applicationProfessionals as $key => $professional)
                                                @if ($key != 0) <div> @endif
                                                    <div class="row">
                                                        <div class="form-group col-md-8">
                                                            <label class="form-label">Country of Employment</label>
                                                            <select class="select2 w-100" name="professional_country_of_employment[]">
                                                                <option value="" selected="" disabled="">Choose...</option>
                                                                @foreach ($countries as $country)
                                                                    <option value="{{ $country->id }}"
                                                                        @if ($professional->country == $country->id)
                                                                            selected 
                                                                        @endif
                                                                    >{{ $country->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label class="form-label">Any Internship?</label>
                                                            <select class="select2 w-100" name="professional_any_internship[]">
                                                                <option value="Yes"
                                                                @if ($professional->internship == "Yes")
                                                                    selected 
                                                                @endif
                                                                >Yes</option>
                                                                <option value="No"
                                                                @if ($professional->internship == "No")
                                                                    selected 
                                                                @endif
                                                                >No</option>
                                                            </select>

                                                        </div>                                   
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-md-8">
                                                            <label class="form-label">Name of Company or Organization</label>
                                                            <input type="text"  class="form-control" name="professional_compay_or_organization[]" value="{{ $professional->company }}" />
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label class="form-label">Whether?</label>
                                                            <select class="select2 w-100" name="professional_whether[]">
                                                                <option value="Paid"
                                                                @if ($professional->whether == "Paid")
                                                                    selected 
                                                                @endif
                                                                >Paid</option>
                                                                <option value="UnPaid"
                                                                @if ($professional->whether == "UnPaid")
                                                                    selected 
                                                                @endif
                                                                >UnPaid</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-3">
                                                            <label class="form-label">Duration of Experience</label>
                                                            <input type="number" maxlength="2"  class="form-control" name="professional_duration_Of_experience[]" value="{{ $professional->experience_duration }}" />
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label class="form-label">Choose – drop down</label>
                                                            <select class="select2 w-100" name="experience_type[]">
                                                                <option value="Months"
                                                                @if ($professional->experience_type == "Months")
                                                                    selected 
                                                                @endif
                                                                >Months</option>
                                                                <option value="Years"
                                                                @if ($professional->experience_type == "Years")
                                                                    selected 
                                                                @endif
                                                                >Years</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label class="form-label">Company official Email</label>
                                                            <input type="text"  class="form-control" name="professional_company_email[]" value="{{ $professional->company_email }}" />
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label class="form-label">Company Contact</label>
                                                            <input type="text"  class="form-control" name="professional_company_contact[]" value="{{ $professional->company_contact }}" />
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group @if ($key == 0) col-md-3 @else col-md-4 @endif">
                                                            <label class="form-label">Designation</label>
                                                            <input type="text"  class="form-control" name="professional_designation[]" value="{{ $professional->designation }}" />
                                                        </div>
                                                        <div class="form-group @if ($key == 0) col-md-3 @else col-md-4 @endif">
                                                            <label class="form-label">Start Date</label>
                                                            <input type="date"  class="form-control" name="professional_start_date[]" value="{{ $professional->start_date }}" />
                                                        </div>
                                                        <div class="form-group @if ($key == 0) col-md-3 @else col-md-4 @endif">
                                                            <label class="form-label">End Ddate</label>
                                                            <input type="date"  class="form-control" name="professional_end_date[]" value="{{ $professional->end_date }}" />
                                                        </div>
                                                        @if ($key == 0)
                                                            <div class="form-group col-md-3">
                                                                <label class="form-label"></label>
                                                                <button class="btn btn-primary add_more_professional w-100">Add More</button>
                                                            </div>
                                                        @endif
                                                    </div>
                                                @if ($key != 0)
                                                    <button type="button" class="btn btn-danger mb-2 w-100 remove_field">Remove</button>
                                                @endif
                                            @if ($key != 0) </div> @endif
                                            <hr class="my-2">
                                            @endforeach

                                        </div>
                                        


                                        <div class="d-flex justify-content-between">
                                            <a href="{{ url('/admin/application/edit/'.$application->application_id."?tab=Education") }}" class="btn btn-primary btn-prev">
                                                <i data-feather="arrow-left" class="align-middle mr-sm-25 mr-0"></i>
                                                <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                            </a>
                                            <button type="submit" data-toggle="modal" data-target="#Loading" class="btn btn-primary btn-next">
                                                <span class="align-middle d-sm-inline-block d-none">Next</span>
                                                <i data-feather="arrow-right" class="align-middle ml-sm-25 ml-0"></i>
                                            </button>
                                        </div>


                                        {{-- <div class="d-flex justify-content-between">
                                            <a href="{{ url('/admin/application/edit/'.$application->application_id."?tab=Education") }}" class="btn btn-primary btn-prev">
                                                <i data-feather="arrow-left" class="align-middle mr-sm-25 mr-0"></i>
                                                <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                            </a>
                                            <button type="submit" data-toggle="modal" data-target="#Loading" class="btn btn-success">Save</button>
                                        </div> --}}
                                    </form>
                                @else
                                    <form method="post" action="{{ url('/admin/application/professional/update/'.$application->id) }}">
                                        @csrf
                                        <div class="professional_wrapper">
                                            <div class="row">
                                                <div class="form-group col-md-8">
                                                    <label class="form-label">Country of Employment</label>
                                                    {{-- <input type="text"  class="form-control" name="professional_country_of_employment[]" /> --}}
                                                    <select class="select2 w-100" name="professional_country_of_employment[]">
                                                        <option value="" selected="" disabled="">Choose...</option>
                                                        @foreach ($countries as $country)
                                                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label class="form-label">Any Internship?</label>
                                                    <select class="select2 w-100" name="professional_any_internship[]">
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>

                                                </div>                                   
                                            </div>

                                            <div class="row">
                                                <div class="form-group col-md-8">
                                                    <label class="form-label">Name of Company or Organization</label>
                                                    <input type="text"  class="form-control" name="professional_compay_or_organization[]" />
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label class="form-label">Whether?</label>
                                                    <select class="select2 w-100" name="professional_whether[]">
                                                        <option value="Paid">Paid</option>
                                                        <option value="UnPaid">UnPaid</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-3">
                                                    <label class="form-label">Duration of Experience</label>
                                                    <input type="number" maxlength="2"  class="form-control" name="professional_duration_Of_experience[]" />
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label class="form-label">Choose – drop down</label>
                                                    {{-- <input type="text"  class="form-control" name="professional_employment_history[]" /> --}}
                                                    <select class="select2 w-100" name="experience_type[]">
                                                        <option value="Months">Months</option>
                                                        <option value="Years">Years</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label class="form-label">Company official Email</label>
                                                    <input type="text"  class="form-control" name="professional_company_email[]" />
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label class="form-label">Company Contact</label>
                                                    <input type="text"  class="form-control" name="professional_company_contact[]" />
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="form-group col-md-3">
                                                    <label class="form-label">Designation</label>
                                                    <input type="text"  class="form-control" name="professional_designation[]" />
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label class="form-label">Start Date</label>
                                                    <input type="date"  class="form-control" name="professional_start_date[]" />
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label class="form-label">End Ddate</label>
                                                    <input type="date"  class="form-control" name="professional_end_date[]" />
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label class="form-label"></label>
                                                    <button class="btn btn-primary add_more_professional w-100">Add More</button>
                                                </div>
                                            </div>

                                        </div>
                                        
                                        <div class="d-flex justify-content-between">
                                            <a href="{{ url('/admin/application/edit/'.$application->application_id."?tab=Education") }}" class="btn btn-primary btn-prev">
                                                <i data-feather="arrow-left" class="align-middle mr-sm-25 mr-0"></i>
                                                <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                            </a>
                                            <button type="submit" data-toggle="modal" data-target="#Loading" class="btn btn-primary btn-next">
                                                <span class="align-middle d-sm-inline-block d-none">Next</span>
                                                <i data-feather="arrow-right" class="align-middle ml-sm-25 ml-0"></i>
                                            </button>
                                        </div>
                                    </form>
                                @endif
                                

                                
                            </div>

                            <div id="" class="content @if ($tab === "Review") active dstepper-block @endif">
                                
                                <div class="form-card p-3">
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
                                <div class="d-flex justify-content-between">
                                    <a href="{{ url('/admin/application/edit/'.$application->application_id."?tab=Professional") }}" class="btn btn-primary btn-prev">
                                        <i data-feather="arrow-left" class="align-middle mr-sm-25 mr-0"></i>
                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                    </a>
                                    <form id="form-submit" action="{{ url('/admin/application/complete/save/'.$application->id) }}">
                                        <button type="submit" class="btn btn-success">Submit</a>
                                    </form>
                                </div>

                                

                                
                            </div>
                            

                        {{-- </form> --}}
                    </div>
                </div>
            </section>
            <!-- /Modern Horizontal Wizard -->

           


        </div>
    </div>
</div>

@endsection

@section('js')
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
<script type="text/javascript">
    $(document).ready(function() {
        var max_fields      = 10; //maximum input boxes allowed
        var wrapper         = $(".education_wrapper"); //Fields wrapper
        var add_button      = $(".add_more_education"); //Add button ID

        var x = 1; //initlal text box count
        $(add_button).click(function(e){ //on add input button click
            e.preventDefault();
            $('.custom-select').select2();
            $('.custom-select').select2({
              dropdownParent: $(".education_wrapper")
            });
            $('#staff_id1').trigger('change');
            if(x < max_fields){ //max input box allowed
                x++; //text box increment
                $(wrapper).append(`
                    <div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label class="form-label">Country Of Education</label>
                                <select class="form-control w-100" name="education_country[]">
                                    <option value="" selected="" disabled="">Choose...</option>
                                    @foreach ($countries as $country)
                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label">Educational Institute Name</label>
                                <input type="text" class="form-control" name="education_institute[]" />
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label">Educational Level</label>
                                <select class="form-control w-100" name="education_level[]">
                                    <option value="Trade Certificate">Trade Certificate</option>
                                    <option value="Diploma">Diploma</option>
                                    <option value="Bachelors">Bachelors</option>
                                    <option value="Masters">Masters</option>
                                    <option value="PhD">PhD</option>
                                    <option value="Skill Diploma (DD)">Skill Diploma (DD)</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label class="form-label">Field Of Study</label>
                                <input type="text" class="form-control" name="education_field_Of_study[]" />
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label">Start Date</label>
                                <input type="date" class="form-control" name="education_start_date[]" />
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label">End Date</label>
                                <input type="date" class="form-control" name="education_end_date[]" />
                            </div>
                            
                        </div>
                        <button type="button" class="btn btn-danger mb-2 w-100 remove_field">Remove</button>
                    </div>
                    `);
            }
        });

        $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
            e.preventDefault(); $(this).parent('div').remove(); x--;
        })
    });




    $(document).ready(function() {
        var max_fields      = 10; //maximum input boxes allowed
        var wrapper         = $(".professional_wrapper"); //Fields wrapper
        var add_button      = $(".add_more_professional"); //Add button ID

        var x = 1; //initlal text box count
        $(add_button).click(function(e){ //on add input button click
            e.preventDefault();
            if(x < max_fields){ //max input box allowed
                x++; //text box increment
                $(wrapper).append(`
                    <div class="mt-2">
                        <div class="row">
                            <div class="form-group col-md-8">
                                <label class="form-label">Country of Employment</label>
                                <select class="form-control w-100" name="professional_country_of_employment[]">
                                    <option value="" selected="" disabled="">Choose...</option>
                                    @foreach ($countries as $country)
                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label">Any Internship?</label>
                                <select class="form-control w-100" name="professional_any_internship[]">
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>

                            </div>                                   
                        </div>

                        <div class="row">
                            <div class="form-group col-md-8">
                                <label class="form-label">Name of Company or Organization</label>
                                <input type="text"  class="form-control" name="professional_compay_or_organization[]" />
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label">Whether?</label>
                                <select class="form-control w-100" name="professional_whether[]">
                                    <option value="Paid">Paid</option>
                                    <option value="UnPaid">UnPaid</option>
                                </select>
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-3">
                                <label class="form-label">Duration of Experience</label>
                                <input type="number" maxlength="2"  class="form-control" name="professional_duration_Of_experience[]" />
                            </div>
                            <div class="form-group col-md-3">
                                <label class="form-label">Choose – drop down</label>
                                {{-- <input type="text"  class="form-control" name="professional_employment_history[]" /> --}}
                                <select class="form-control w-100" name="experience_type[]">
                                    <option value="Months">Months</option>
                                    <option value="Years">Years</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="form-label">Company official Email</label>
                                <input type="text"  class="form-control" name="professional_company_email[]" />
                            </div>
                            <div class="form-group col-md-3">
                                <label class="form-label">Company Contact</label>
                                <input type="text"  class="form-control" name="professional_company_contact[]" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-4">
                                <label class="form-label">Designation</label>
                                <input type="text"  class="form-control" name="professional_designation[]" />
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label">Start Date</label>
                                <input type="date"  class="form-control" name="professional_start_date[]" />
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label">End Ddate</label>
                                <input type="date"  class="form-control" name="professional_end_date[]" />
                            </div>
                        </div>
                        <button type="button" class="btn btn-danger w-100 mb-2 remove_field">Remove</button>
                    </div>
                    `);
            }
        });

        $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
            e.preventDefault(); $(this).parent('div').remove(); x--;
        })
    });
</script>

@endsection
