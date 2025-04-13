<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Template extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'price',
        'sale_price',
        'sale_starts_at',
        'sale_ends_at',
        'thumbnail',
        'preview_url',
        'file_path',
        'category_id',
        'status',
        'downloads',
        'specifications',
        'version',
        'changelog',
        'featured'
    ];

    protected $casts = [
        'specifications' => 'array',
        'sale_starts_at' => 'datetime',
        'sale_ends_at' => 'datetime',
        'featured' => 'boolean',
        'price' => 'decimal:2',
        'sale_price' => 'decimal:2',
        'downloads' => 'integer'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class)
                    ->withTimestamps();
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }

    public function getAverageRatingAttribute(): float
    {
        return $this->reviews()
                    ->where('is_approved', true)
                    ->avg('rating') ?? 0.0;
    }

    public function getReviewsCountAttribute(): int
    {
        return $this->reviews()
                    ->where('is_approved', true)
                    ->count();
    }

    public function isOnSale(): bool
    {
        if (!$this->sale_price || !$this->sale_starts_at || !$this->sale_ends_at) {
            return false;
        }

        $now = now();
        return $now->between($this->sale_starts_at, $this->sale_ends_at);
    }

    public function getCurrentPriceAttribute(): float
    {
        return $this->isOnSale() ? $this->sale_price : $this->price;
    }
}
