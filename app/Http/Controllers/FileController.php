<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    //
    function upload(Request $request){
        // return "File upload function";
        $file_name = $request->file('file')->getClientOriginalName();
        $path = Storage::putFileAs("images/", $request->file('file'),$file_name);

        // return $path;
        return view('display',['path'=>Storage::get("images/$file_name")]);
    }
}
