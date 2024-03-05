<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\ApplicationProfessional;
use App\ApplicationEducation;
use Illuminate\Http\Request;
use App\Application;
use App\User;
use Auth;
use DB;


class ApplicationController extends Controller
{

    public function index()
    {
    	$application = Application::where('user_id', auth::user()->id)->first();
        return view('user.application.index', compact('application'));

    }

    public function create()
    {
    	$applicationCheck = Application::where('user_id', auth::user()->id)->count();
    	if ($applicationCheck > 0) {
    		return redirect()->back()->with('flash_message_error', 'You have already application...');
    	}

    	$application = new Application();
    	$application->user_id = auth::user()->id;
    	$application->first_name = auth::user()->name;
    	$application->mobile_number = auth::user()->phone;
    	$application->email = auth::user()->email;

    	$application_id = rand(3800000, 98000000);

    	$application->application_id = $application_id;
    	$application->save();
    	
    	// $application_id = DB::getPdo()->lastInsertId();
        return redirect('/user/application/edit/'.$application_id."?tab=Personal");
    }

    public function edit($id)
    {
    	$application = Application::where('application_id', $id)->first();
    	$applicationEducations = ApplicationEducation::where('application_id', $application->id)->get();
    	$applicationProfessionals = ApplicationProfessional::where('application_id', $application->id)->get();
    	// dd($applicationEducations);
        return view('user.application.create', compact('application', 'applicationEducations', 'applicationProfessionals'));
    }

    public function personal_update(Request $request, $id)
    {
    	// dd($request->all());
    	$application = Application::find($id);
    	$application->first_name = $request->first_name;
    	$application->middle_name = $request->middle_name;
    	$application->last_name = $request->last_name;
    	$application->mobile_number = $request->phonecode."-".$request->mobile_number;
    	$application->pin_code = $request->pin_code;
    	$application->email = $request->email;
    	$application->address = $request->address;
    	$application->city = $request->city;
    	$application->country = $request->country;
    	$application->save();
        Notification(0, 'Admin', '<b>'.auth::user()->name.'</b>'.' has create new application...');

    	return redirect('/user/application/edit/'.$application->application_id."?tab=Education");
    	// $application->
    }

    public function education_update(Request $request, $id)
    {
    	// dd($request->all());
    	error_reporting(0);
    	$application = Application::find($id);
    	ApplicationEducation::where('application_id', $application->id)->delete();
    	foreach ($request->education_country as $key => $country) {
    		$education = new ApplicationEducation();
    		$education->user_id = auth::user()->id;
    		$education->application_id = $id;
    		$education->country = $country;
    		$education->institute = $request->education_institute[$key];
    		$education->level = $request->education_level[$key];
    		$education->field_of_study = $request->education_field_Of_study[$key];
    		$education->start_date = $request->education_start_date[$key];
    		$education->end_date = $request->education_end_date[$key];
    		$education->save();
    	}

    	return redirect('/user/application/edit/'.$application->application_id."?tab=Professional");
    	// $application->
    }

    public function professional_update(Request $request, $id)
    {
    	// dd($request->all());
    	error_reporting(0);
    	$application = Application::find($id);
    	ApplicationProfessional::where('application_id', $application->id)->delete();
    	foreach ($request->professional_country_of_employment as $key => $country) {
    		$professional = new ApplicationProfessional();
    		$professional->user_id = auth::user()->id;
    		$professional->application_id = $id;
    		$professional->country = $country;
    		$professional->internship = $request->professional_any_internship[$key];
    		$professional->company = $request->professional_compay_or_organization[$key];
    		$professional->whether = $request->professional_whether[$key];
    		$professional->experience_duration = $request->professional_duration_Of_experience[$key];
    		$professional->experience_type = $request->experience_type[$key];
    		$professional->company_email = $request->professional_company_email[$key];
    		$professional->company_contact = $request->professional_company_contact[$key];
    		$professional->designation = $request->professional_designation[$key];
    		$professional->start_date = $request->professional_start_date[$key];
    		$professional->end_date = $request->professional_end_date[$key];
    		$professional->save();
    	}

        return redirect('/user/application/edit/'.$application->application_id."?tab=Review");
    	// return redirect('/user/application/')->with('flash_message_success', 'Successfully...');
    	// $application->
    }

    public function save($id)
    {
        $application = Application::find($id);
        $application->isSubmited = "Yes";
        $application->save();
        Notification($application->user_id, 'User', "Great !  Your application for Skill Evaluation has been submitted successfully ! <br><br>Next step : Make payment of $185 for your application under Payment section in your user dashboard");

        return redirect('/user/application')->with('flash_message_success', 'Successfully...');
        // return redirect()->back()->with('flash_message_success', 'Successfully...');
    }


    public function view($id)
    {
        $application = Application::where('application_id', $id)->first();
        $applicationEducations = ApplicationEducation::where('application_id', $application->id)->get();
        $applicationProfessionals = ApplicationProfessional::where('application_id', $application->id)->get();
        // dd($applicationEducations);
        return view('user.application.view', compact('application', 'applicationEducations', 'applicationProfessionals'));
    }
    public function delete($id)
    {
    	error_reporting(0);
    	$application = Application::find($id);
    	ApplicationProfessional::where('application_id', $application->id)->delete();
    	ApplicationEducation::where('application_id', $application->id)->delete();
    	Application::find($id)->delete();
    	return redirect()->back()->with('flash_message_success', 'Application Delete Successfully...');
    }
    
}
