<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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

    protected $appends = [
        'company_logo'
    ];

    public function patients(): HasMany
    {
        return $this->hasMany(Patient::class);
    }

    public function getCompanyLogoAttribute()
    {
        $address = strtolower(trim($this->email));
        $hash = md5($address);
        if (!is_null($this->logo)) {

            return url('/') . '/storage/' . $this->logo;
        }

        return 'https://www.gravatar.com/avatar/' . $hash;
    }
}
