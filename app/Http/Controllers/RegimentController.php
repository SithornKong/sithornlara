<?php

namespace App\Http\Controllers;

use App\Models\Regiment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegimentController extends Controller
{
    public function index(){
        $regiment= Regiment::all();
        $output['regiments']= $regiment;
        return view('regiment.index')->with($output);
    }

    public function add($id=null){
        $output=[];
        if($id!=null){
            $regiment= Regiment::find($id);
            $output['regiment']= $regiment;
        }
        return view('regiment.add')->with($output);
    }

    public function save(Request $request){
        //dd($request->all());
        $input=$request->input;
        $rule=[];
        if($request->has('id')){

            $regiment=Regiment::find($request->id);
            //dd($doctor);
            $rule=$regiment->rule($request->id);
        } else{
            $regiment= new Regiment();
            $rule=$regiment->rule();
        }

        Validator::make($input,$rule,$regiment->message())->validate();

        $regiment->fill($input);

        $regiment->save();
        return redirect('/regiment')->with('success','Regiment have been saved...');

    }

    public function delete($id){
        regiment::where('id',$id)->delete();
        return redirect('/regiment');
    }
}
