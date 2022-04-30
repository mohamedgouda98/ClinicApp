<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnose_img extends Model
{
    use HasFactory;
    protected $table="diagnose_imgs";
    protected $fillabe= ['img','diagnose_id'];


    public function diagnosis(){
        return $this->belongsTo(Diagnosis::class,'diagnose_id','id');
    }
}
