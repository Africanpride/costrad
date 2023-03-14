<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Announcement extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'title',
        'slug',
        'body',
        'image',
        'user_id',
    ];

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
