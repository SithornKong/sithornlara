<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SymptomController extends Controller
{
    public function index(){
        return view('symptom.index');
    }

    public function add($id=null){
        return view('symptom.add');
    }
}
