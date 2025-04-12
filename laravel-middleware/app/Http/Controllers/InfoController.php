<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InfoController extends Controller
{
    public function storeInfo(Request $request){
        $request->validate([
            'age'=>'required|integer|min:5|max:100',
            'gender'=>'required',
            'phone'=>'required',
            'address'=>'required',
            
        ]);
        Info::create([
            'age'=>$request->age,
            'gender'=>$request->gender,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'user_id'=>Auth::id(),
        ]);

        return redirect()->back()->with('success', 'Information saved successfully!');
    }
}
