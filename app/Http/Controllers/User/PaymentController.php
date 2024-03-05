<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\PaymentLink;
use App\Coupon;
use Auth;

class PaymentController extends Controller
{

    public function index()
    {
    	$payment = PaymentLink::where('user_id', auth::user()->id)->first();
        return view('user.payment.index', compact('payment'));

    }


    public function request()
    {
        Notification(0, 'Admin', '<b>'.auth::user()->name.'</b>'.' #<b>'.auth::user()->ref_no.'</b>'.' has request for <b>Payment</b>...');
        return redirect()->back()->with('flash_message_success','Your payment request has successfully initiated wait for payment link in your email...');
    }

    public function coupon_pay(Request $request)
    {
    	$check = Coupon::where(['code' => $request->code, 'status' => 'NotUsed'])->count();
    	if ($check > 0) {
	    	$coupon = Coupon::where('code', $request->code)->first();
	    	$coupon->status = "Used";
	    	$coupon->save();

	    	$payment = new PaymentLink();
	    	$payment->user_id = auth::user()->id;
	    	$payment->payment_link = $request->code;
	    	$payment->amount = $coupon->amount;
	    	$payment->status = "Paid";
	    	$payment->save();
    		return redirect()->back()->with('flash_message_success','Payment Successfully...');

    	}else{
    		return redirect()->back()->with('flash_message_error','Invalid Coupon Code OR Expired...');
    	}
    	
    }
    
}
