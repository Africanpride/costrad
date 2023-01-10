<?php

namespace App\Models;

use Carbon\Carbon;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Laravel\Jetstream\HasProfilePhoto;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Rappasoft\LaravelAuthenticationLog\Traits\AuthenticationLoggable;

class User extends Authenticatable
{
    use HasApiTokens,
        HasFactory,
        HasProfilePhoto,
        Notifiable,
        TwoFactorAuthenticatable,
        HasRoles,
        HasUuids,
        AuthenticationLoggable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */

    protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'password',
        'active'
    ];

    // public $incrementing = false;
    // protected $keyType = 'string';

    public $guard_name = 'sanctum';


    public function getRouteKeyName()
    {
        return 'id';
    }
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
        'full_name'
    ];

    public function getUserRoleAttribute()
    {
        return $this->getRoleNames()->implode(' | ');
    }

    public function getFullNameAttribute()
    {
        return ucfirst($this->firstName) . ' ' . ucfirst($this->lastName);
    }

    public function isLoggedIn()
    {
        return Auth::check();
    }


    public function isOnline()
    {
        $timestamp = Carbon::parse('2 minute ago');
        return $this->last_seen > $timestamp;
    }

    function getAvatarUrlAttribute()
    {
        $address = strtolower(trim($this->email));
        $hash = md5($address);
        return 'https://www.gravatar.com/avatar/' . $hash;
    }
}
