<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Notification;
use App\Application;
use App\User;
use Auth;

class UsersController extends Controller
{
    public function dashboard()
    {
        error_reporting(0);
        $application = Application::where('user_id', auth::user()->id)->first();
    	return view('user.dashboard', compact('application'));
    }


    public function notification_delete($id)
    {
        Notification::find($id)->delete();
        return redirect()->back()->with('flash_message_success', 'Notification Delete Successfully');
    }
    public function notification_delete_all()
    {
        error_reporting(0);
        $notification = Notification::where('user_id', auth::user()->id)->delete();
        return redirect()->back()->with('flash_message_success', 'Notification Delete Successfully');
    }


    public function profile(Request $request)
    {
    	if ($request->isMethod('POST'))
    	{

            // dd($request->all());
    		$id = Auth::User()->id;

    		$user = User::find($id);
            $user->name = $request->name;
            $user->email = $request->email;    
    		$user->phone = $request->phone;    
            $user->address = $request->address;    


            if ($request->hasFile('profile')) 
            {
                $file1 = $request->profile->getClientOriginalName();
                $request->profile->storeAs('/user/profile/', $file1, 'my_files');
                $user->image = $file1;
            }
            else
            {
                $user->image = $user->image;
            }


    		
    		$user->save();
    		return redirect()->back()->with('flash_message_success', 'Profile Update Successfully');

    	}
    	return view('user.profile');
    }

    public function logout()
    {
    	Auth::logout();
    	return redirect('/login')->with('flash_message_success', 'Logout Successfully...');
    }
}
