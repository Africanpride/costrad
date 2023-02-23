<?php

namespace App\Models;

use Carbon\Carbon;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Laravel\Jetstream\HasProfilePhoto;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\Storage;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Rappasoft\LaravelAuthenticationLog\Traits\AuthenticationLoggable;

class User extends Authenticatable implements MustVerifyEmail
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
        'email_verified_at',
        'password',
        'avatar',
        'facultyMember',
        'participant',
        'staff',
        'active',
        'google_id',
        'apple_id'

    ];

    // public $incrementing = false;
    // protected $keyType = 'string';

    public $guard_name = 'web';


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
        'facultyMember' => 'boolean',
        'participant' => 'boolean',
        'staff' => 'boolean',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
        'full_name',
        'name'
    ];


    public function scopeParticipant($query)
    {
        return $query->where('participant', true);
    }

    public function scopeStaff($query)
    {
        return $query->where('staff', true);
    }

    public function getUserRoleAttribute()
    {
        return $this->getRoleNames()->implode(' | ');
    }

    public function getFullNameAttribute()
    {
        return ucfirst($this->firstName) . ' ' . ucfirst($this->lastName);
    }
    public function getNameAttribute()
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
    public function isAdmin(): bool
    {
        return $this->hasRole('admin');
    }

    public function dashboard()
    {
        return $this->isAdmin() ? 'admin/dashboard' :  'dashboard';
    }


    public function getAvatarUrlAttribute()
    {
        $address = strtolower(trim($this->email));
        $hash = md5($address);
        return 'https://www.gravatar.com/avatar/' . $hash;
    }


    public function profile(): HasOne
    {
        return $this->hasOne(Profile::class);
    }

    public function defaultProfilePhotoUrl()
    {
        if(!empty($this->avatar)) {
            return $this->avatar;
        } else {

            $name = trim(collect(explode(' ', $this->full_name))->map(function ($segment) {
                return mb_substr($segment, 0, 1);
            })->join(' '));

            return 'https://ui-avatars.com/api/?name=' . urlencode($name) . '&color=7F9CF5&background=EBF4FF';
        }
    }
}
