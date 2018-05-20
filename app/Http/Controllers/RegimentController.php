<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegimentController extends Controller
{
    public function index(){
        return view('regiment.index');
    }

    public function add($id=null){
        return view('regiment.add');
    }
}
