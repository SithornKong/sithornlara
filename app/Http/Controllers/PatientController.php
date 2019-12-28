<?php

namespace App\Http\Controllers;

use App\Models\Commune;
use App\Models\District;
use App\Models\Province;
use App\Models\Village;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index(){

        return view('patient.index');
    }



   public  function  add(){
        return view('patient.add');
   }



    public function save($id){

    }

    public function delete($id){

    }
}
