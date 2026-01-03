<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'category',
        'technologies',
        'date',
        'client',
        'url',
        'is_featured',
    ];

    protected $casts = [
        'technologies' => 'array',
        'is_featured' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function getTechnologiesAttribute($value)
    {
        return is_array($value) ? $value : json_decode($value, true);
    }

    public function setTechnologiesAttribute($value)
    {
        $this->attributes['technologies'] = is_array($value) ? json_encode($value) : $value;
    }
}