<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\PaymentLink;
use App\Coupon;
use App\User;


class PaymentController extends Controller
{

    public function index()
    {
    	$users = User::where('role', 'User')->get();
    	$payments = PaymentLink::get();
        return view('admin.payment.index', compact('users', 'payments'));

    }

    public function store(Request $request)
    {
        $checkPayment = PaymentLink::where('user_id', $request->user_id)->count();
    	// dd($request->all());
        if ($checkPayment > 0) {
    	   return redirect()->back()->with('flash_message_error', 'Your payment already initiated or completed...');
        }
        $payment = new PaymentLink();
        $payment->user_id = $request->user_id;
        $payment->amount = $request->amount;
        $payment->payment_link = $request->payment_link;
        $payment->status = $request->status;
        $payment->save();
        return redirect()->back()->with('flash_message_success', 'Payment Create Successfully');
    }
    public function update(Request $request, $id)
    {
    	$payment = PaymentLink::find($id);
    	$payment->user_id = $request->user_id;
    	$payment->amount = $request->amount;
    	$payment->payment_link = $request->payment_link;
    	$payment->status = $request->status;
    	$payment->save();
    	return redirect()->back()->with('flash_message_success', 'Payment Update Successfully');
    }

    public function delete($id)
    {
    	PaymentLink::find($id)->delete();
    	return redirect()->back()->with('flash_message_success', 'Payment Delete Successfully');
    }
    
}
