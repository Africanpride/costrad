<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Jetstream\HasProfilePhoto;

class Patient extends Model
{
    use HasFactory, HasUuids, HasProfilePhoto;

    protected $fillable = [
        'title',
        'gender',
        'DOB',
        'firstName',
        'lastName',
        'email',
        'address_1',
        'address_2',
        'telephone',
        'emergencyContactName',
        'emergencyContactTelephone',
        'nationality',
        'insurance_id',
        'insured',
        'active',
        'avatar'
    ];

    protected $casts = [
        'insured' => 'boolean',
        'active' => 'boolean'
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

            return url('/') . '/storage/' . $this->avatar;
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
