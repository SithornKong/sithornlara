<?php

namespace App\Http\Controllers;

use App\Models\Symptom;
use Illuminate\Http\Request;

class SymptomController extends Controller
{
    public function index(){
        $symptoms = Symptom::all();
        $output['symptoms']= $symptoms;
        return view('symptom.index')->with($output);
    }

    public function add($id=null){
        $output=[];
        if($id!=null){
            $symptom=Symptom::find($id);
            $output['symptom']=$symptom;
        }
        return view('symptom.add')->with($output);
    }

    public function save(Request $request){
        $input = $request->input;
       // dd($input);
        if($request->has('id')){
            $symptom = Symptom::find($request->id);
        }else{
            $symptom = new Symptom();
        }
        $symptom->fill($input);
        $symptom->save();
        return redirect('/symptom');

    }

    public function delete($id){
        Symptom::where('id',$id)->delete();
        return redirect('/symptom');
    }
}
