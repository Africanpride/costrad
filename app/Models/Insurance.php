<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
    use HasFactory;

    protected $table = 'insurances';

    protected $fillable = [
        'name',
        'telephone_1',
        'telephone_2',
        'telephone_3',
        'address',
        'country',
        'email',
        'percentage',
        'logo'
    ];

    public $guard_name = 'sanctum';


}
