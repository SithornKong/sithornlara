<?php

namespace App\Http\Controllers;

use App\Models\Diagnosis;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class DiagnosisController extends Controller
{
    public function index(){
        $diagnoses=Diagnosis::all();
        $output['diagnoses']=$diagnoses;
        return view('diagnosis.index')->with($output);
    }

    public function add($id=null){
        $output=[];
        if($id!=null){
            $diagnosis=Diagnosis::find($id);
            $output['diagnosis']=$diagnosis;

        }
        return view('diagnosis.add')->with($output);
    }

    public function save(Request $request){
        $input=$request->input;
        if($request->has('id')){
            $diagnosis=Diagnosis::find($request->id);

        }else{
            $diagnosis=new Diagnosis();
        }

        $diagnosis->fill($input);
        $diagnosis->save();
        return redirect('/diagnosis');

    }

    public function delete($id){
        Diagnosis::where('id',$id)->delete();
        return redirect('/diagnosis');
    }
}
