<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

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
    public function showCreate(){
        return view('empcreate');
    }
    public function create(Request $request, User $user){
        
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        // $user->password = $request->password;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;
        $user->save();
        return redirect()->route('emparchive');
    }
    public function delete(Request $request){
        User::find($request->id)->delete();
        return view('empdelete');
    }
}
