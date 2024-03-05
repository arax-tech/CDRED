@extends('admin.layouts.app')
@section('title', 'Create Document Request')
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
         

           

            <div class="card mb-4">
                <div class="card-header bg-light mb-1">
                    Create Document Request
                    <a class="btn btn-primary float-right btn-sm" href="{{ url('/admin/document') }}"><i data-feather="arrow-left"></i>&nbsp;Back</a>
                </div>
                <div class="card-body">
                    <form id="form-submit" method="post" action="{{ url('/admin/document/request') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-2">
                            <div class="form-group col-md-12">
                                <label class="form-label">Select User</label>
                                <select class="select2 w-100" name="user_id">
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }} - CR{{ $user->ref_no }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-2">                            
                            <div class="form-group col-md-4">
                                <label class="form-label" for="id_proof">ID Proof</label>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="id_proof" name="id_proof" value="Yes">
                                    <label class="custom-control-label" for="id_proof">Yes</label>
                                </div>
                            </div>

                            <div class="form-group col-md-4">
                                <label class="form-label" for="name_change_evidence">Name change evidence</label>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="name_change_evidence" name="name_change_evidence" value="Yes">
                                    <label class="custom-control-label" for="name_change_evidence">Yes</label>
                                </div>
                            </div>

                            <div class="form-group col-md-4">
                                <label class="form-label" for="work_experience_letter">Work experience letter</label>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="work_experience_letter" name="work_experience_letter" value="Yes">
                                    <label class="custom-control-label" for="work_experience_letter">Yes</label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-2">                            
                            <div class="form-group col-md-4">
                                <label class="form-label" for="appointment_letter">Appointment letter</label>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="appointment_letter" name="appointment_letter" value="Yes">
                                    <label class="custom-control-label" for="appointment_letter">Yes</label>
                                </div>
                            </div>

                            <div class="form-group col-md-4">
                                <label class="form-label" for="pay_slips">Pay slips</label>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="pay_slips" name="pay_slips" value="Yes">
                                    <label class="custom-control-label" for="pay_slips">Yes</label>
                                </div>
                            </div>

                            <div class="form-group col-md-4">
                                <label class="form-label" for="resume">Resume</label>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="resume" name="resume" value="Yes">
                                    <label class="custom-control-label" for="resume">Yes</label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-2">                            
                            <div class="form-group col-md-4">
                                <label class="form-label" for="salary_statement">Salary statement</label>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="salary_statement" name="salary_statement" value="Yes">
                                    <label class="custom-control-label" for="salary_statement">Yes</label>
                                </div>
                            </div>

                            <div class="form-group col-md-4">
                                <label class="form-label" for="apprenticeship_certificate">Apprenticeship certificate</label>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="apprenticeship_certificate" name="apprenticeship_certificate" value="Yes">
                                    <label class="custom-control-label" for="apprenticeship_certificate">Yes</label>
                                </div>
                            </div>

                            <div class="form-group col-md-4">
                                <label class="form-label" for="affidavit">Affidavit</label>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="affidavit" name="affidavit" value="Yes">
                                    <label class="custom-control-label" for="affidavit">Yes</label>
                                </div>
                            </div>
                        </div>


                       
                       
                        <button class="btn btn-primary w-100 mt-1" type="submit">Request</button>
                    </form>
                </div>
            </div>

           


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
