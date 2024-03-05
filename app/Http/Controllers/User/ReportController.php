<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Report;
use Auth;


class ReportController extends Controller
{

    public function index()
    {
    	$report = Report::where('user_id', auth::user()->id)->first();
        return view('user.report.index', compact('report'));

    }
    
}
