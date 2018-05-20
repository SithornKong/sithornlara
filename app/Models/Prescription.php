<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Prescription extends Model
{
    use SoftDeletes;
    protected $table='prescription';
    protected $dates=['deleted_at'];

    public $fillable=[
        'patient_id',
        'doctor_id',
        'regiment_id',
        'symptom_id',
        'diagnosis_id',
        'datevisit',
        'drugquentity',
        'transfer',
        'support',
        'description',
    ];

    public function doctor(){
        return $this->belongsTo('App\Models\doctor');
    }

    public function patient(){
        return $this->belongsTo('App\Models\patient');
    }

    public function regiment(){
        return $this->belongsTo('App\Models\regiment');
    }

    public function symptom(){
        return $this->belongsTo('App\Models\symptom');
    }

    public function diagnosis(){
        return $this->belongsTo('App\Models\diagnosis');
    }
}
