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
}
