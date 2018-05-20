<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Commune extends Model
{
    use SoftDeletes;

    protected $table = 'commune';
    protected $dates = ['deleted_at'];

    public $fillable = [
        'district_id',
        'name',

    ];

    public function district(){
        return $this->belongsTo('App\Models\district');
    }

    public function village(){
        return $this->hasMany('App\Models\village');
    }
}
