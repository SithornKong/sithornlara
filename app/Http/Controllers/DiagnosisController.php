<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiagnosisController extends Controller
{
    public function index(){
        return view('diagnosis.index');
    }

    public function add($id=null){
        return view('diagnosis.add');
    }
}
