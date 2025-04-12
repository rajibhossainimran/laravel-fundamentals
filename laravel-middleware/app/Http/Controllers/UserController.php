<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register(Request $request){
        $checkField = $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:6|max:12',
            'role'=>'required'
        ]);
        if($checkField){
            User::create($checkField);
            return redirect('login')->with('success', 'Registration successful! Please log in.');
        }
        return back()->with('error', 'something wrong!');
    }

    public function login(Request $request){
        $checkData = $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        if(Auth::attempt($checkData)){

            $user = Auth::user();
            if($user->role === 'admin'){
                return redirect('admin/dashboard');
            }elseif($user->role === 'customer'){
                return redirect('customer/dashboard');
            }elseif($user->role === 'company'){
                return redirect('company/dashboard');
            }else{
                Auth::logout();
                return redirect()->back()->with('error', 'Unauthorized role.');
            }


        }else{
            return redirect()->back()->with('error','invalid cradentails');
        }
    }


    public function logout(){
        Auth::logout();
        return redirect('login');
    }

    public function showUserDetails(){
        $info = User::with('info')->find(Auth::id());
        
        return view('customerdetails',compact('info'));
    }
}
