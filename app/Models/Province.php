<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Province extends Model
{
    use SoftDeletes;

    protected $table = 'province';
    protected $dates = ['deleted_at'];

    public $fillable = [
        'patient_id',
        'name',

    ];

    public function patient(){
        return $this->belongsTo('App\Models\patient');
    }

    public function district(){
        return $this->hasMany('App\Models\district');
    }






}
