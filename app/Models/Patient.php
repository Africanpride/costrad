<?php

namespace App\Models;

use DateTime;
use Illuminate\Support\Facades\URL;
use Laravel\Jetstream\HasProfilePhoto;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
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
        'dateOfBirth' => 'date'
    ];

    protected $append = [
        'patient_avatar',
        'full_name'
    ];

    public function getPatientAvatarAttribute() : string
    {
        $email = strtolower(trim($this->email));
        $hash = md5($email);
        if (!is_null($this->avatar)) {
            if(str_contains($this->avatar, 'placeholder')) {
                return $this->avatar;
            }
            return url('/'). "/storage/" .  $this->avatar;
        }

        return 'https://www.gravatar.com/avatar/' . $hash;
    }

    public function getFullNameAttribute() : string
    {
        return ucfirst($this->firstName) . ' ' . ucfirst($this->lastName);
    }

    public function getUniqueIdentificationAttribute() : string
    {
        return ucfirst($this->id) . ' ' . ucfirst($this->lastName)/${$this->DOB};
    }


}
