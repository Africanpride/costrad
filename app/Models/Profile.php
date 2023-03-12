<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    use HasUuids,HasFactory;


    protected $fillable = [
        'title',
        'gender',
        'dateOfBirth',
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
        'active',
        'bio',
        'resume',
        'disabled',
        'marital_status',
        'avatar'
    ];

    public $incrementing = false;

    protected $keyType = 'string';

    protected $append = [
        'participant_avatar',
        'full_name',
        'country_flag'
    ];

    public function getCountryFlagAttribute()
    {

        if(empty($this->country)) {
            $this->country = 'ghana';
        }

        $response = Http::get("https://restcountries.com/v3.1/name/{$this->country}");
        $data = $response->json();
        $flagUrl = $data[0]['flag'];
        return $flagUrl;
    }

    protected $casts = [
        'disabled' => 'boolean',
        'active' => 'boolean',
    ];

    public function getNiceDateAttribute()
    {
        return Carbon::parse($this->dateOfBirth)->format('d-M-Y');
    }

    public function getParticipantAvatarAttribute(): string
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

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }


}
