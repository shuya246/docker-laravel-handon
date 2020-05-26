<?php

namespace App\Http\Controllers;

use App\Coupon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CouponRequest;

class CouponController extends Controller
{
    public function index(Request $request){
        $user = Auth::user();
        return view('index' ,['user'=>$user]);
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
    public function create(CouponRequest $request , Coupon $coupon){
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
    public function delete(Request $request){
        // dd($request);
        Coupon::find($request->id)->delete();
        return view('delete');
    }
    public function forstaff(){
        $coupons = Coupon::all();
        return view('couponforstaff',compact('coupons'));
    }
}
