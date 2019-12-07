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

    public function summary()
    {

            return view('patient.summary');

    }


    public function add($id=null){
        $provinces = Province::all();
        $output['provinces']=$provinces;
        return view('patient.add')->with($output);
    }

    public function district(Request $request){


        //if our chosen id and products table prod_cat_id col match the get first 100 data

        //$request->id here is the id of our chosen option id

        $district=District::select('id','name')->where('province_id',$request->id)->get();
        return response()->json($district);//then sent this data to ajax success
    }

    public function commune(Request $request){


        //if our chosen id and products table prod_cat_id col match the get first 100 data

        //$request->id here is the id of our chosen option id
        $commune=Commune::select('id','name')->where('id',$request->id)->get();
        return response()->json($commune);//then sent this data to ajax success
    }


    public function village(Request $request){

        //it will get price if its id match with product id
        $village=Village::select('name')->where('id',$request->id)->get();

        return response()->json($village);
    }


    public function save($id){

    }

    public function delete($id){

    }
}
