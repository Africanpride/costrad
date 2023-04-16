<?php

namespace App\Models;

use App\Models\Feature;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Institute extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;


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
        'price' => 'float',
        'services' => 'array'
    ];

    protected $services = [
        'Certificate of Completion',
        'Protocol & Hospitality Assistance',
        'Access to COSTrAD Resources',
        'Access to Faculty Members',
        'Mentorship on Systems Development',
    ];

    public function getServicesAttribute()
    {
        return $this->services;
    }

    protected $appends = [
        'frontend_url',
        'institute_logo',
        'institute_banner_url',
        'services'
    ];

    public function features(): HasMany
    {
        return $this->hasMany(Feature::class);
    }

    public function getInstituteLogoAttribute(): string
    {
        return asset("storage/{$this->logo}");
    }

    public function getInstituteBannerUrlAttribute(): string
    {
        return asset("storage/{$this->banner}");
    }

    public function getFrontendUrlAttribute()
    {
        return url('/') . "/" . $this->slug;
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this
            ->addMediaConversion('preview')
            ->fit(Manipulations::FIT_CROP, 300, 300)
            ->nonQueued();
    }
    public function registerMediaCollections(): void
    {
        $this->addMediaConversion('banner')
            ->width(1024)
            ->height(500)
            ->sharpen(10);

        $this->addMediaConversion('logo')
            ->width(300)
            ->height(300)
            ->sharpen(10);
    }
}
