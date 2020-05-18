<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class EmployeeController extends Controller
{
    //
    public function index(){
        return view('empindex');
    }
    public function archive(){
        $users = User::all();
        return view('emparchive',compact('users'));
    }
}
