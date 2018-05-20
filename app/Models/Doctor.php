<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doctor extends Model
{
    use SoftDeletes;


    protected $table = 'doctor';
    protected $dates = ['deleted_at'];

    protected $fillable = ['name'];

    public function rule($id=null){
        return [
            'name'=>'required|unique:doctor,name,'.$id,

        ];
    }

    public function message(){
        return [
            'name.required'=>'អ្នកត្រូវតែបំពេញឈ្មោះគ្រូពេទ្យ',
            'name.unique'=>'ឈ្មោះគ្រូពេទ្យនេះមានម្តងហើយ',
        ];
    }



    public function patient(){
        return $this->hasMany('App\Models\patient');
    }

    public function prescription(){
        return $this->hasMany('App\Models\prescription');
    }


}
