<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Symptom extends Model
{
    use SoftDeletes;

    protected $table = 'symptom';
    protected $dates = ['deleted_at'];

    public $fillable = [
        'name',
        'description'

    ];

    public function prescription(){
        return $this->hasOne('App\Models\prescription');
    }


}
