<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institute extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'acronym',
        'overview',
        'icon',
        'logo',
        'banner',
        'startDate',
        'endDate',
        'seo',
        'active',
        'url',
        'price'
    ];

    protected $casts = [
        'active' => 'boolean',
        'price' => 'float'
    ];

}
