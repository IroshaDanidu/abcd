<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function store(Request $request){


        if($request->hasFile('avater')){
            $file=$request->file('avatar');
            $filename=$file->getClientOriginalNaame();
            $folder=uniqid() . '-' . now()->timestamp;
            $file->storeAs('avatars/' . $folder, $filename);


            return $folder;
        }
        return '';



    }



    public function uniqueMethod()
    {
        return view('form');
    }



}

