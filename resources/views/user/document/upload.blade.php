@extends('admin.layouts.app')
@section('title', 'Upload Document')
@section('css')


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
                    Upload Document
                    <a class="btn btn-primary float-right btn-sm" href="{{ url('/user/document') }}"><i data-feather="arrow-left"></i>&nbsp;Back</a>
                </div>
                <div class="card-body">
                    <form id="form-submit" method="post" action="{{ url('/user/document/upload/update/'.$document->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-2">                             
                                    
                            @if ($document->id_proof == "Yes")
                                <div class="form-group col-md-4 mb-2">
                                    <label class="form-label" for="id_proof">ID Proof @if ($document->id_proof == "Yes") <span class="text-danger">*</span> @endif</label>
                                    <input class="form-control" type="file" name="id_proof" @if ($document->id_proof == "Yes") required @endif>
                                </div>
                            @endif
    
                            @if ($document->name_change_evidence == "Yes")
                                <div class="form-group col-md-4 mb-2">
                                    <label class="form-label" for="name_change_evidence">Name change evidence @if ($document->name_change_evidence == "Yes") <span class="text-danger">*</span> @endif</label>
                                    <input class="form-control" type="file" name="name_change_evidence" @if ($document->name_change_evidence == "Yes") required @endif>
                                </div>
                            @endif
    
                            @if ($document->work_experience_letter == "Yes")
                                <div class="form-group col-md-4 mb-2">
                                    <label class="form-label" for="work_experience_letter">Work experience letter @if ($document->work_experience_letter == "Yes") <span class="text-danger">*</span> @endif</label>
                                    <input class="form-control" type="file" name="work_experience_letter" @if ($document->work_experience_letter == "Yes") required @endif>
                                </div>
                            @endif
                            
                            @if ($document->appointment_letter == "Yes")
                                <div class="form-group col-md-4 mb-2">
                                    <label class="form-label" for="appointment_letter">Appointment letter @if ($document->appointment_letter == "Yes") <span class="text-danger">*</span> @endif</label>
                                    <input class="form-control" type="file" name="appointment_letter" @if ($document->appointment_letter == "Yes") required @endif>                                
                                </div>
                            @endif
    
                            @if ($document->pay_slips == "Yes")        
                                <div class="form-group col-md-4 mb-2">
                                    <label class="form-label" for="pay_slips">Pay slips @if ($document->pay_slips == "Yes") <span class="text-danger">*</span> @endif</label>
                                    <input class="form-control" type="file" name="pay_slips" @if ($document->pay_slips == "Yes") required @endif>
                                </div>
                            @endif
    
                            @if ($document->resume == "Yes")        
                                <div class="form-group col-md-4 mb-2">
                                    <label class="form-label" for="resume">Resume @if ($document->resume == "Yes") <span class="text-danger">*</span> @endif</label>
                                    <input class="form-control" type="file" name="resume" @if ($document->resume == "Yes") required @endif>
                                </div>
                            @endif
                            
                            @if ($document->salary_statement == "Yes")        
                                <div class="form-group col-md-4 mb-2">
                                    <label class="form-label" for="salary_statement">Salary statement @if ($document->salary_statement == "Yes") <span class="text-danger">*</span> @endif</label>
                                    <input class="form-control" type="file" name="salary_statement" @if ($document->salary_statement == "Yes") required 
                                    @endif>                                
                            @endif
    
                            @if ($document->apprenticeship_certificate == "Yes")
                                <div class="form-group col-md-4 mb-2">
                                    <label class="form-label" for="apprenticeship_certificate">Apprenticeship certificate @if ($document->apprenticeship_certificate == "Yes") <span class="text-danger">*</span> @endif</label>
                                    <input class="form-control" type="file" name="apprenticeship_certificate" @if ($document->apprenticeship_certificate == "Yes") required @endif>
                                </div>
                            @endif
    
                            @if ($document->affidavit == "Yes")
                                <div class="form-group col-md-4 mb-2">
                                    <label class="form-label" for="affidavit">Affidavit @if ($document->affidavit == "Yes") <span class="text-danger">*</span> @endif</label>
                                    <input class="form-control" type="file" name="affidavit" @if ($document->affidavit == "Yes") required @endif>
                                </div>
                            @endif
                        </div>


                       
                       
                        <button class="btn btn-primary w-100 mt-1" type="submit">Upload Documents</button>
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
