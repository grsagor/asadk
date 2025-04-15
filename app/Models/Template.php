<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'description',
        'short_description',
        'regular_price',
        'framework',
        'browser_compatibility',
        'documentation_status',
        'support_period',
        'demo_url',
        'template_file'
    ];

    public function author()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function features()
    {
        return $this->hasMany(TemplateFeature::class);
    }

    public function images()
    {
        return $this->hasMany(TemplateImage::class);
    }

    public function licenses()
    {
        return $this->belongsToMany(LicenseType::class, 'template_license_types');
    }
}