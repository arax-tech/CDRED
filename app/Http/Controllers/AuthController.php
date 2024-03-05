<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\User;
use Auth;
class AuthController extends Controller
{
	public function login(Request $request)
	{
		if (auth::check())
		{
		    return redirect(strtolower(auth::user()->role).'/dashboard');
		}
		if ($request->isMethod("POST"))
		{
		    // dd($request->all());
		    
		    if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'isVerified' => 1]))
            {
                return redirect(strtolower(auth::user()->role).'/dashboard')->with('flash_message_success', 'Welcome '.auth::user()->name.' !');
            }
            else if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'isVerified' => 0])) 
            {
                auth::logout();
                return redirect()->back()->with('flash_message_error', 'Please verify your email first...');
            }
            else
            {
                return redirect()->back()->with('flash_message_error', 'Invalid Email OR Password, Please try Again...');
            }           
		}
		return view('login');
	}
    public function register(Request $request)
    {
	    if (auth::check())
	    {
	        return redirect(strtolower(auth::user()->role).'/dashboard');
	    }
		if ($request->isMethod("POST"))
	    {
	        // dd($request->all());
	        /*Check Email*/
	        $user_count = User::where('email',$request->email)->count();
	        if ($user_count>0)
	        {
	            return redirect()->back()->with('flash_message_error','Email is Already Taken Please Use Another Email...');
	        }

	        if ($request->password != $request->confirm_password)
	        {
	            return redirect()->back()->with('flash_message_error','Password confirmation odes not match...');
	        }

	        $user = New User();
	        $user->ref_no = rand(3800000, 98000000);
	        $user->name = $request->name;
	        $user->email = $request->email;
	        $user->phone = $request->phonecode."-".$request->mobile_number;
	        $verification_code = sha1(time());
	        $user->verification_code = $verification_code;
	        $user->password = Hash::make($request->password);
	        $user->save();

	        $details = [
	                'verify_url' => url('/verify?code='.$verification_code),
	            ];
	           
	        Mail::to($request->email)->send(new \App\Mail\EmailVerification($details));

	        return redirect('/login')->with('flash_message_success', 'Registration Successfully. Please very your account we have send email to you, please check you inbox or spam folder...');
	    }
	    return view('register');
    }


    public function verify (Request $request)
    {
        $verification_code = $request->code;
        $user = User::where(['verification_code' => $verification_code])->first();
        if ($user != null)
        {
            $user->isVerified = 1;
            $user->save();
            return redirect('/login')->with('flash_message_success','Email Verified Successfully...');
        }
        else
        {
        return redirect('/login')->with('flash_message_error','Invalid Verification Code...');

        }

    }



    public function term_and_condition()
    {
        return view('term-and-conditions');
    }
}
