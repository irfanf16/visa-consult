<?php

namespace App\Models;

use App\Models\Abbreviation\Abbreviation;
use App\Models\Acronym\Acronym;
use App\Models\Proverb\Proverb;
use App\Models\Quiz\Quiz;
use App\Models\Science\ScienceBranch;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'app_type_id',
        'category_id',
        'title',
        'image',
        'slug',
        'seo_description',
        'seo_keywords',
        'seo_abstraction',
        'subscribers',
        'likes',
        'views',
        'status',
        'featured',
    ];


    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];



    /*
    |========================================================
    | Get Subcategory Details For This Category
    |========================================================
    */
    public function subcateogry()
    {
        return $this->belongsTo(Category::class);
    }


    /*
    |========================================================
    | Get listing of all abbreviations for this category
    |========================================================
    */

    public function apps()
    {
        return $this->hasMany(App::class, 'category_id', 'id');
    }
}
