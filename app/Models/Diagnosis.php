<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Diagnosis extends Model
{
    use SoftDeletes;

    protected $table = 'diagnosis';
    protected $dates = ['deleted_at'];

    public $fillable = [
        'icd',
        'description',

    ];

    public function prescription(){
        return $this->hasOne('App\Models\prescription');
    }
}
