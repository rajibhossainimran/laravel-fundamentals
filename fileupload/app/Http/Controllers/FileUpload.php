<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class FileUpload extends Controller
{
    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $request->validate([
            'file'=>'required|mimes:jpg,JPG,png,PNG,PDF,pdf|max:3000',
        ]);

        $file = $request->file->store('images','public');
        Image::create([
            'file_name'=>$file,
        ]);
        return back()->with('success','upload successfully');
    }

    public function getdata(){
        $data = Image::get();
        return view('create',compact('data'));
    }

}
