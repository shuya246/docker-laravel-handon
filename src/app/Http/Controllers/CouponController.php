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
    public function create(){
        return view('create');
    }
    public function post(Request $request , Coupon $coupon){
        $coupon = new Coupon();
        $coupon->title = $request->title;
        $coupon->introduce = $request->introduce;
        $coupon->body = $request->body;
        $coupon->time = $request->time;
        $coupon->start = $request->start;
        $coupon->end = $request->end;
        $coupon->memo = $request->memo;
        $coupons->save();
        return redirect()->route('index');
    }
}
