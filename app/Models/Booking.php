<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Booking extends Model
{
    use HasFactory;

    protected $table = "orders";
    protected $fillable = ['patient_id'];

    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class, 'patinet_id', 'id');
    }
}
