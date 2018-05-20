<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Village extends Model
{
    use SoftDeletes;

    protected $table = 'village';
    protected $dates = ['deleted_at'];

    public $fillable = [
        'commune_id',
        'name',

    ];

    public function commune(){
        return $this->belongsTo('App\Models\commune');
    }
}
