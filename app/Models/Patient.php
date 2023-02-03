<?php

namespace App\Models;

use DateTime;
use Carbon\Carbon;
use App\Models\Insurance;
use Illuminate\Support\Facades\URL;
use Laravel\Jetstream\HasProfilePhoto;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Patient extends Model
{
    use HasFactory, HasUuids, HasProfilePhoto;

    protected $fillable = [
        'title',
        'gender',
        'dateOfBirth',
        'firstName',
        'lastName',
        'email',
        'address_1',
        'address_2',
        'city',
        'state',
        'zipcode',
        'country',
        'telephone',
        'emergencyContactName',
        'emergencyContactTelephone',
        'nationality',
        'insurance_id',
        'insuranceNumber',
        'insured',
        'active',
        'avatar'
    ];

    protected $casts = [
        'insured' => 'boolean',
        'active' => 'boolean',
        'dateOfBirth' => 'date',
        'insurance_id' => 'integer'
    ];

    protected $append = [
        'patient_avatar',
        'full_name'
    ];
    public function getNiceDateAttribute()
    {
        return Carbon::parse($this->dateOfBirth)->format('d-M-Y');
    }
    public function getPatientAvatarAttribute(): string
    {
        $email = strtolower(trim($this->email));
        $hash = md5($email);
        if (!is_null($this->avatar)) {
            if (str_contains($this->avatar, 'placeholder')) {
                return $this->avatar;
            }
            return url('/') . "/storage/" .  $this->avatar;
        }

        return 'https://www.gravatar.com/avatar/' . $hash;
    }

    public function insurance()
    {
        return $this->belongsTo(Insurance::class);
    }

    public function getFullNameAttribute(): string
    {
        return ucfirst($this->firstName) . ' ' . ucfirst($this->lastName);
    }

    public function getUniqueIdentificationAttribute(): string
    {
        return ucfirst($this->id) . ' ' . ucfirst($this->lastName) / ${$this->DOB};
    }
}
