<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Appointment extends Model
{
    use HasFactory;


    protected $table = 'appointments';

    protected $fillable = [
        'appointment_date',
        'appointment_time',
        'appointment_reason',
        'priority',
        'active',
        'patient_id',
        'user_id',
    ];

    protected $casts = [
        'active' => 'boolean',
        'priority' => 'boolean',
        'appointment_date' => 'datetime',
    ];

    public function patient() :BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }
    public function staff() :BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id' );
    }


}
