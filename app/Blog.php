<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Blog extends Model{
    
    use HasSlug;

    protected $table = 'blog';
    
    protected $fillable = [
        'id', 'title', 'description', 'visible', 'image', 'short_description', 'slug'
    ];

    public function getSlugOptions() : SlugOptions{
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }
    
    public function scopeVisible($query) {
        return $query->where('visible', 1);
    }
    
}
