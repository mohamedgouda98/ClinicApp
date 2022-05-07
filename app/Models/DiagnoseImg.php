<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DiagnoseImg extends Model
{
    use HasFactory;

    protected $fillable = ['img', 'diagnose_id'];

    public function diagonse(): BelongsTo
    {
        return $this->belongsTo(Diagnosis::class, 'diagnose_id', 'id');
    }
}
