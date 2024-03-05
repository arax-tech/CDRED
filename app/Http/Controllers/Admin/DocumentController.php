<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\ApplicationProfessional;
use App\ApplicationEducation;
use Illuminate\Http\Request;
use App\Application;
use App\Document;
use App\User;
use Auth;
use DB;


class DocumentController extends Controller
{

    public function index()
    {
    	$documents = Document::get();
        return view('admin.document.index', compact('documents'));

    }

    public function create()
    {
        $users = User::where('role','User')->get();
    	return view('admin.document.create', compact('users'));
    }

    public function edit($id)
    {
        $users = User::where('role','User')->get();
        $document = Document::where('id', $id)->first();
        return view('admin.document.edit', compact('document','users'));
    }


    public function request(Request $request)
    {
        $applicationCheck = Document::where('user_id', $request->user_id)->count();
        if ($applicationCheck > 0) {
            return redirect()->back()->with('flash_message_error', 'You have already document...');
        }
        $application = Application::where('user_id', $request->user_id)->first();

        $user = User::find($request->user_id);

        // dd($request->all());
        $document = new Document();
        $document->user_id = $request->user_id;
        $document->application_id = $application->id;
        $document->id_proof = $request->id_proof;
        $document->name_change_evidence = $request->name_change_evidence;
        $document->work_experience_letter = $request->work_experience_letter;
        $document->appointment_letter = $request->appointment_letter;
        $document->pay_slips = $request->pay_slips;
        $document->resume = $request->resume;
        $document->salary_statement = $request->salary_statement;
        $document->apprenticeship_certificate = $request->apprenticeship_certificate;
        $document->affidavit = $request->affidavit;
        $document->status = "Requested";
        $document->save();

        Notification($application->user_id, 'User', '<b>'.auth::user()->name.'</b>'.' have send <b>documents</b> request, <b>CR'.$user->ref_no.'</b>...');
        return redirect('/admin/document')->with('flash_message_success', 'Request Successfully...');
    }

    public function update_request(Request $request, $id)
    {
        $application = Application::where('user_id', $request->user_id)->first();

        // dd($request->all());
        $document = Document::find($id);
        $document->user_id = $request->user_id;
        $document->application_id = $application->id;
        $document->id_proof = $request->id_proof ? $request->id_proof : $document->id_proof;
        $document->name_change_evidence = $request->name_change_evidence ? $request->name_change_evidence : $document->name_change_evidence;
        $document->work_experience_letter = $request->work_experience_letter ? $request->work_experience_letter : $document->work_experience_letter;
        $document->appointment_letter = $request->appointment_letter ? $request->appointment_letter : $document->appointment_letter;
        $document->pay_slips = $request->pay_slips ? $request->pay_slips : $document->pay_slips;
        $document->resume = $request->resume ? $request->resume : $document->resume;
        $document->salary_statement = $request->salary_statement ? $request->salary_statement : $document->salary_statement;
        $document->apprenticeship_certificate = $request->apprenticeship_certificate ? $request->apprenticeship_certificate : $document->apprenticeship_certificate;
        $document->affidavit = $request->affidavit ? $request->affidavit : $document->affidavit;
        $document->status = "Requested";
        $document->save();
        Notification($application->user_id, 'User', '<b>'.auth::user()->name.'</b>'.' have send <b>documents</b> request...');
        return redirect('/admin/document')->with('flash_message_success', 'Request Update Successfully...');
    }
    public function view($id)
    {
        $document = Document::find($id);
        return view('admin.document.view', compact('document'));
    }

    public function delete($id)
    {
        Document::find($id)->delete();
    	return redirect()->back()->with('flash_message_success', 'Document Delete Successfully...');
    }
    
}
