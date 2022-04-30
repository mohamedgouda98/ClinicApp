<?php

namespace App\Models;

use App\Models\Diagnose_img;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Diagnosis extends Model
{
    use HasFactory;
    protected $table = "diagnoses";
    protected $fillable= 
    [
        'complaint',
        'diagnosis',
        'investigation',
        'treamtent',
        'treamtent',
        'reseen',
        'hn',
        'phnx',
        'wt',
        'tep',
        'hc',
        'hrt',
        'chest',
        'abd',
        'gentalia'
        ,'other'
        ,'created_at'
    ];

    public function patients(){
        return $this->belongsTo(Patient::class,'patient_id','id');
    }
    public function diagnosisImg(){
        return $this->hasMany(Diagnose_img::class,'diagnose_id','id');
    }
}
