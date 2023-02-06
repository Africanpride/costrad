<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Treatment extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'description',
        'active',
        'author_id',
        'price'
    ];

    protected $casts = [
        'active' => 'boolean',
        'price' => 'float'
    ];

    public function author() : BelongsTo {
        return $this->belongsTo(User::class);
    }
}
