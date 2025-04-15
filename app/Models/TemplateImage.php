<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemplateImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'template_id',
        'image_url',
        'is_thumbnail',
        'is_main',
        'display_order'
    ];

    protected $casts = [
        'is_thumbnail' => 'boolean',
        'is_main' => 'boolean'
    ];

    public function template()
    {
        return $this->belongsTo(Template::class);
    }
}