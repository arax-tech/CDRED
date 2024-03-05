<?php

namespace App\Http\Controllers\User;

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
    	$document = Document::where('user_id', auth::user()->id)->first();
        return view('user.document.index', compact('document'));

    }

    public function create()
    {
        $users = User::where('role','User')->get();
    	return view('user.document.create', compact('users'));
    }

    public function upload($id)
    {
        $document = Document::where('id', $id)->first();
        return view('user.document.upload', compact('document'));
    }


    public function upload_update(Request $request, $id)
    {
        // dd($request->all());

        $document = Document::find($id);
        if ($request->hasFile('id_proof')) 
        {
            $id_proof = $request->id_proof->getClientOriginalName();
            $request->id_proof->storeAs('/user/application/document/', $id_proof, 'my_files');
            $document->id_proof = $id_proof;
        }

        if ($request->hasFile('name_change_evidence')) 
        {
            $name_change_evidence = $request->name_change_evidence->getClientOriginalName();
            $request->name_change_evidence->storeAs('/user/application/document/', $name_change_evidence, 'my_files');
            $document->name_change_evidence = $name_change_evidence;
        }

        if ($request->hasFile('work_experience_letter')) 
        {
            $work_experience_letter = $request->work_experience_letter->getClientOriginalName();
            $request->work_experience_letter->storeAs('/user/application/document/', $work_experience_letter, 'my_files');
            $document->work_experience_letter = $work_experience_letter;
        }

        if ($request->hasFile('appointment_letter')) 
        {
            $appointment_letter = $request->appointment_letter->getClientOriginalName();
            $request->appointment_letter->storeAs('/user/application/document/', $appointment_letter, 'my_files');
            $document->appointment_letter = $appointment_letter;
        }

        if ($request->hasFile('pay_slips')) 
        {
            $pay_slips = $request->pay_slips->getClientOriginalName();
            $request->pay_slips->storeAs('/user/application/document/', $pay_slips, 'my_files');
            $document->pay_slips = $pay_slips;
        }

        if ($request->hasFile('resume')) 
        {
            $resume = $request->resume->getClientOriginalName();
            $request->resume->storeAs('/user/application/document/', $resume, 'my_files');
            $document->resume = $resume;
        }

        if ($request->hasFile('salary_statement')) 
        {
            $salary_statement = $request->salary_statement->getClientOriginalName();
            $request->salary_statement->storeAs('/user/application/document/', $salary_statement, 'my_files');
            $document->salary_statement = $salary_statement;
        }

        if ($request->hasFile('apprenticeship_certificate')) 
        {
            $apprenticeship_certificate = $request->apprenticeship_certificate->getClientOriginalName();
            $request->apprenticeship_certificate->storeAs('/user/application/document/', $apprenticeship_certificate, 'my_files');
            $document->apprenticeship_certificate = $apprenticeship_certificate;
        }

        if ($request->hasFile('affidavit')) 
        {
            $affidavit = $request->affidavit->getClientOriginalName();
            $request->affidavit->storeAs('/user/application/document/', $affidavit, 'my_files');
            $document->affidavit = $affidavit;
        }

        $document->status = "Completed";
        $document->save();
        return redirect('/user/document')->with('flash_message_success', 'Document Upload Successfully...');
    }

    
    
    public function view($id)
    {
    	$document = Document::find($id);
        return view('user.document.view', compact('document'));
    }

    public function delete($id)
    {
        Document::find($id)->delete();
    	return redirect()->back()->with('flash_message_success', 'Document Delete Successfully...');
    }
    
}
