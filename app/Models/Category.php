<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $casts = [
        'published_at' => 'datetime'
    ];

    protected $fillable = ['name', 'slug', 'thumbnail'];

    public function tutorials()
    {
        return $this->hasMany(Tutorial::class);
    }
}
