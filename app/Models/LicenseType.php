<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LicenseType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];

    public function templates()
    {
        return $this->belongsToMany(Template::class, 'template_license_types');
    }
}