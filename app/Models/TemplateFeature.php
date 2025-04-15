<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemplateFeature extends Model
{
    use HasFactory;

    protected $fillable = [
        'template_id',
        'feature_name'
    ];

    public function template()
    {
        return $this->belongsTo(Template::class);
    }
}