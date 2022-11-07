<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'slug', 'title', 'app_icon', 'splash_screen', 'android_link', 'ios_link', 'short_description', 'detailed_description',
        'seo_description', 'seo_abstraction', 'seo_keywords', 'policies', 'clicks', 'downloads', 'release_date', 'updated_date', 'status', 'featured'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function appImages()
    {
        return $this->hasMany(AppImage::class, 'app_id', 'id');
    }

    public function appFaqs()
    {
        return $this->hasMany(AppFaq::class, 'app_id', 'id');
    }
}
