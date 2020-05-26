<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use \Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/home';
    // public function redirectTo(){
    //     return '/couponapp';
    // }
    public function redirectTo(){
        $role = $this->guard()->user()->role;
        if($role === 'owner'){
            return '/couponapp';
        }
        if($role === 'staff'){
            return 'couponnapp/coupon/for_staff';
        }
        return '/register';
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    protected function loggedOut(Request $request)
    {
        return redirect('login');
    }
    // public function redirectPath()
    // {
    //     return '/couponapp';
    // }
}
