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
        'about',
        'icon',
        'logo',
        'banner',
        'startDate',
        'endDate',
        'seo',
        'active',
        'slug',
        'price'
    ];

    protected $casts = [
        'active' => 'boolean',
        'price' => 'float'
    ];

    public function getInstituteLogoAttribute(): string
    {

            return url('/') . "/storage/" .  $this->logo;

    }



}
