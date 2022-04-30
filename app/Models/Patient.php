<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $table="patients";

    protected $fillable = [
        'name',
        'age',
        'address',
        'phone',
        'father_name',
        'father_age',
        'father_job',
        'mather_name',
        'mather_age',
        'mather_job',
        'relation_type',
        'number_of_births',
        'date',
        'note'
    ];

    public function book()
    {
        return $this->hasMany(Booking::class, 'patient_id', 'id');
    }
    public function diagnosis(){
        return $this->hasMany(diagnosis::class,'patient_id','id');
    }

}
