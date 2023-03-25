<?php

namespace App\Models;

use Spatie\Image\Manipulations;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Newsroom extends Model
{

    use HasFactory, HasUuids;

    protected $fillable = ['title', 'slug', 'active', 'overview', 'body', 'featured_image', 'user_id'];


    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getFrontendUrlAttribute()
    {
        return url('/') . "/" . $this->slug;
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    protected $casts = [
        'active' => 'boolean',
    ];

    protected $appends = [
        'frontend_url',
        'newsroom_image',
    ];

    public function getNewsroomImageAttribute(): string
    {
        return asset("storage/{$this->featured_image}");
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
