<?php

namespace App\Http\Controllers;

use App\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function index(){
        return view('index');
    }
    public function show(){
        return view('couponShow');
    }
    public function archive(){
        $coupons = Coupon::all();
        
        return view('archive', compact('coupons'));
    }
    public function showCreate(){
        return view('create');
    }
    public function create(Request $request , Coupon $coupon){
        $coupon = new Coupon();
        $coupon->title = $request->title;
        $coupon->introduction = $request->introduction;
        $coupon->body = $request->body;
        $coupon->time = $request->time;
        $coupon->start = $request->start;
        $coupon->end = $request->end;
        $coupon->memo = $request->memo;
        $coupon->save();
        return redirect()->route('archive');
    }
}
