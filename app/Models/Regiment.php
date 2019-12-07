<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Regiment extends Model
{
    use SoftDeletes;

    protected $table='regiment';
    protected $dates=['deleted_at'];
    protected $fillable=['name','description'];

    public function rule($id=null){
        return [
            'name'=>'required|unique:regiment,name,'.$id,
            'description'=>'required',

        ];
    }

    public function message()
    {
        return [
            'name.required' => 'អ្នកត្រូវតែបំពេញឈ្មោះថ្នាំ',
            'name.unique' => 'ឈ្មោះថ្នាំនេះមានម្តងហើយ',
            'description.required'=>'ត្រូវបរិយាយ',
        ];
    }

    public function prescription(){
        return $this->hasMany('App\Models\prescription');
    }

}
