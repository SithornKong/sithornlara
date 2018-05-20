<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Symptom extends Model
{
    use SoftDeletes;

    protected $table = 'symptom';
    protected $dates = ['deleted_at'];

    public $fillable = [
        'symptom',
        'description',

    ];

    public function prescription(){
        return $this->hasOne('App\Models\prescription');
    }


}
