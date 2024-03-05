<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Report;
use App\User;
use Auth;


class ReportController extends Controller
{

    public function index()
    {
    	$users = User::where('role', 'User')->get();
    	$reports = Report::get();
        return view('admin.report.index', compact('users', 'reports'));

    }

    public function store(Request $request)
    {
    	$report = new Report();
    	$report->user_id = $request->user_id;
    	

    	if ($request->hasFile('pdf')) 
    	{
    	    $file1 = $request->pdf->getClientOriginalName();
    	    $request->pdf->storeAs('/user/pdf/', $file1, 'my_files');
    	    $report->pdf = $file1;
    	}
    	$report->save();
    	return redirect()->back()->with('flash_message_success','Report Create Successfully...');
    }

    public function update(Request $request, $id)
    {
    	$report = Report::find($id);
    	$report->user_id = $request->user_id;
    	if ($request->hasFile('pdf')) 
    	{
    	    $file1 = $request->pdf->getClientOriginalName();
    	    $request->pdf->storeAs('/user/pdf/', $file1, 'my_files');
    	    $report->pdf = $file1;
    	}else{
    		$report->pdf = $report->pdf;
    	}
    	$report->save();
    	return redirect()->back()->with('flash_message_success','Report Update Successfully...');
    }

    public function delete($id)
    {
    	$report = Report::find($id)->delete();
    	return redirect()->back()->with('flash_message_success','Report Delete Successfully...');
    }
    
}
