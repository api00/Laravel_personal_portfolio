<?php

namespace App\Http\Controllers;

use App\Models\detail;
use Illuminate\Http\Request;


class detailsOfusers extends Controller
{
    public function store1(Request $request){
        $details = new detail();
        $details->name=$request->input('name');
        $details->email=$request->input('email');
        $details->message=$request->input('message');
        $details->save();
        return redirect('/');
    }
    public function show(){
        $details = new detail();
       
    }
}
