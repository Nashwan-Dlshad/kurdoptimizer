<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ImageOptimizer;

class file extends Controller
{
    public function upload(Request $request){

        $file = $request->file('file')->move(public_path('image'),$request->file('file')->getClientOriginalName());
        $FileName=$request->file('file')->getClientOriginalName();
        if($file){
          $Optimized = ImageOptimizer::optimize(public_path('image/').$FileName);     
          return response()->json([
            'message'=>'success'
          ]);                
        }
      }
      public function download(Request $request){
        $file = $request->file('file')->move(public_path('image'),$request->file('file')->getClientOriginalName());
        $FileName=$request->file('file')->getClientOriginalName();
        return response()->download(public_path('image/').$FileName);
      }
}

