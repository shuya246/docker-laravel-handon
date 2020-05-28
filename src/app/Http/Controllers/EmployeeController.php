<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\EmployeeRequest;

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
    public function create(EmployeeRequest $request, User $user){
        
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;
        $user->save();
        return redirect()->route('emparchive');
    }
    public function delete(Request $request){
        User::find($request->id)->delete();
        return view('empdelete');
    }
    public function edit($id){
        $users = User::find($id);
        return view('empedit',compact('users'));
    }
    public function update(EmployeeRequest $request){
        $users = User::find($request->id);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = Hash::make($request->password);
        $users->role = $request->role;
        $users->save();
        return redirect()->route('empindex');
    }
}

