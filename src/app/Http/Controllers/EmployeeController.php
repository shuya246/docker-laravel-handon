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
    public function update(Request $request){
        $users = User::find($request->id);
        // dd($users);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = Hash::make($request->password);
        $users->role = $request->role;
        $users->save();
        return redirect()->route('empindex');
    }
}

//     if($request->action === 'back'){
    //         return redirect()->route('emparchive');
    //     }else{
    //         $user = User::find($id);
    //         $user->name = $request->name;
    //         $user->email = $request->email;
    //         $user->password = Hash::make($request->password);
    //         $user->role = $request->role;
    //         $user->save();
    //         return redirect()->route('emparchive');
    //     }
    