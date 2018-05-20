<?php

namespace App\Http\Controllers;
use App\Models\doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DoctorController extends Controller
{
    public function index(){

        $doctor = doctor::get();
        $output['doctors']=$doctor;
        return view('doctor.index')->with($output);
    }

    public function add($id=null){
        $output=[];
        if ($id!=null){
            $doctor = doctor::find($id);
            $output['doctor']=$doctor;
        }
        //dd($output);
        return view('doctor.add')->with($output);

    }

    public function save(Request $request){
        //dd($request->all());
        $input=$request->input;
        $rule=[];
        if($request->has('id')){

            $doctor=doctor::find($request->id);
            //dd($doctor);
            $rule=$doctor->rule($request->id);
        } else{
            $doctor= new doctor();
            $rule=$doctor->rule();
        }

        Validator::make($input,$rule,$doctor->message())->validate();

        $doctor->fill($input);

        $doctor->save();
        return redirect('/doctor')->with('success','Your name have been saved...');

    }

    public function delete($id){
        doctor::where('id',$id)->delete();
        return redirect('/doctor');
    }
}
