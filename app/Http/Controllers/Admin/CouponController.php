<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\PaymentLink;
use App\Coupon;
use App\User;


class CouponController extends Controller
{

    public function index()
    {
    	$coupons = Coupon::get();
        return view('admin.coupon.index', compact('coupons'));

    }

    public function store(Request $request)
    {
        
    	// dd($request->all());
    	$coupon = new Coupon();
    	$coupon->code = $request->code;
    	$coupon->amount = $request->amount;
    	$coupon->save();
    	return redirect()->back()->with('flash_message_success', 'Coupon Create Successfully');
    }
    public function update(Request $request, $id)
    {
    	$coupon = Coupon::find($id);
    	$coupon->code = $request->code;
    	$coupon->amount = $request->amount;
    	$coupon->save();
    	return redirect()->back()->with('flash_message_success', 'Coupon Update Successfully');
    }

    public function delete($id)
    {
    	Coupon::find($id)->delete();
    	return redirect()->back()->with('flash_message_success', 'Coupon Delete Successfully');
    }
    
}
