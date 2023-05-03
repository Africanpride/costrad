<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\Feature;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Support\Facades\Http;
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
        'introduction',
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

    protected $appends = [
        'frontend_url',
        'institute_logo',
        'institute_banner_url',
        'services',
        'progress',
        'duration',
        'featured_image',
        'local_currency'
    ];

    public function getLocalCurrencyAttribute()
    {
        $response = Http::get('https://openexchangerates.org/api/latest.json', [
            'app_id' => config('app.openExchange'),
            'symbols' => 'GHS'
        ]);

        $data = $response->json();
        $exchange_rate = $data['rates']['GHS'];
        $ghs_amount = $this->attributes['price'] * ($exchange_rate + 1);

        return round($ghs_amount);
    }

    public function getServicesAttribute()
    {
        return $this->services;
    }


    function getDurationAttribute(): string
    {
        $startDate = Carbon::parse($this->startDate);
        $endDate = Carbon::parse($this->endDate);
        $startMonth = $startDate->format('M');
        $startDay = $startDate->format('d');
        $endMonth = $endDate->format('M');
        $endDay = $endDate->format('d');
        return "{$startMonth} {$startDay} – {$endMonth} {$endDay}";
    }

    function getProgressAttribute(): int
    {

        $startYear = Carbon::parse($this->startDate)->year;
        $currentYear = Carbon::now()->year;

        // Create Carbon instances from the date strings
        $start = Carbon::parse($this->startDate);
        $end = Carbon::parse($this->endDate);

        // Get the start and end dates for the current year
        // $currentYearStart = Carbon::create($currentYear, 1, 1);
        // $currentYearEnd = Carbon::create($currentYear, 12, 31);

        // Calculate the total number of days between the two dates
        $totalDays = $start->diffInDays($end);

        // Calculate the number of days elapsed since the start date
        $elapsedDays = $start->diffInDays($end);

        // Calculate the progress as a percentage
        $progress = round(($elapsedDays / $totalDays) * 100);

        // Check if the start and end dates fall within the current year
        //We evaluate further: if todays date  is greater than the end of institute, return zero (0)
        if ($startYear == $currentYear && Carbon::now() > $end ) {
            return 100;
        }

        if($startYear == $currentYear && Carbon::now() > $start && Carbon::now() > $end){

            return $progress;
        }

        return 0;

    }

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

    public function getFeaturedImageAttribute() : string
    {

        return ($this->getFirstMediaUrl('featured_image') != null) ? $this->getFirstMediaUrl('featured_image')  :  $this->getFirstMediaUrl('banner');
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
        $this->addMediaConversion('featured_image')
            ->width(1024)
            ->height(500)
            ->sharpen(10);

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
