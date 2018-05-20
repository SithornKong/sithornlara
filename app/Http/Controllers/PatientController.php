<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index(){
        return view('patient.index');
    }

    public function preview()
    {

            return view('patient.preview');

    }
    public function treat()
    {

        return view('patient.treat');

    }

    public function add($id=null){
        return view('patient.add');
    }

    public function save($id){

    }

    public function delete($id){

    }
}
