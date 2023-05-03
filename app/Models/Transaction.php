<?php

namespace App\Models;

use App\Models\Institute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{

    use HasUuids;

    protected $fillable = [
        'participant_id',
        'authorization_code',
        'amount',
        'description',
        'fees',
        'transaction_id',
        'transaction_reference',
        'transaction_date',
        'currency',
        'institute_id',
        'ipAddress'
    ];

    public $incrementing = false;
    protected $keyType = 'string';
    public function getRouteKeyName()
    {
        return 'id';
    }

    public function participant()
    {
        return $this->belongsTo(User::class, 'participant_id');
    }

    public function institute()
    {
        return $this->belongsTo(Institute::class, 'institute_id');
    }
}
