<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class District extends Model
{
    use SoftDeletes;

    protected $table = 'district';
    protected $dates = ['deleted_at'];

    public $fillable = [
        'province_id',
        'name',

    ];

    public function province(){
        return $this->belongsTo('App\Models\province');
    }

    public function commune(){
        return $this->hasMany('App\Models\commune');
    }


}
