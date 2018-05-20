<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    use SoftDeletes;

    protected $table = 'patient';
    protected $dates = ['deleted_at'];

    public $fillable = [
        'doctor_id',
        'code',
        'name',
        'gender',
        'age',
        'dateregister',
        'isactive',
        'description',



    ];

    public function doctor(){
        return $this->belongsTo('App\Models\doctor');
    }

    public function province(){
        return $this->hasOne('App\Models\province');
    }

    public function prescription(){
        return $this->hasMany('App\Models\prescription');
    }


}
