<?php

namespace App\Http\Controllers;
use App\Models\project;
use Illuminate\Http\Request;

class CreateController extends Controller
{
  
    public function index()
    {
        $all=project::all();
        return view('portfolio.index',[
            'all'=>$all
        ]);
    }
}
