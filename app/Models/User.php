<?php

namespace App\Models;

use App\Models\Abbreviation\Abbreviation;
use App\Models\Acronym\Acronym;
use App\Models\Proverb\BookMarkedProverb;
use App\Models\Quiz\Quiz;
use App\Models\Science\BookmarkedScienceBranch;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'password',
        'is_email_verified',
        'email_verified_at',
        'email_confirmation_code',
        'country_code',
        'mobile_no',
        'is_mobile_verified',
        'mobile_verified_at',
        'profile_image',
        'country_id',
        'city_id',
        'gender',
        'date_of_birth',
        'status',
    ];


    // protected $hidden = [
    //     'password',
    //     'created_at',
    //     'updated_at',
    //     'deleted_at'
    // ];

   
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];


    /*
    |=========================================================
    | Get Listing of All The Followers of This User
    |=========================================================
    */
    public function followers()
    {
        return $this->hasMany(UserFollower::class);
    }



    /*
    |========================================================
    | Get Country Details For This User --
    |========================================================
    */
    public function country()
    {
        return $this->belongsTo(Country::class);
    }


    /*
    |========================================================
    | Get City Details For This User --
    |========================================================
    */
    public function city()
    {
        return $this->belongsTo(City::class);
    }


    /*
    |=========================================================
    | Get Listing of Abbreviations Uploaded By This User
    |=========================================================
    */
    public function abbreviations()
    {
        return $this->hasMany(Abbreviation::class);
    }


    /*
    |=========================================================
    | Get Listing of Bookmarked-Abbreviations By This User
    |=========================================================
    */
    public function bookmarkedAbbreviations()
    {
        return $this->hasMany(BookmarkedAbbreviation::class, 'user_id', 'id');
    }

    public function acronyms()
    {
        return $this->hasMany(Acronym::class, 'user_id','id');
    }

    public function bookMarkedAcronyms()
    {
        return $this->hasMany(bookMarkedAcronyms::class, 'user_id', 'id');
    }

    public function scienceBranches()
    {
        return $this->hasMany(ScienceBranch::class, 'user_id', 'id');
    }

    public function bookMarkedScienceBranches()
    {
        return $this->hasMany(BookmarkedScienceBranch::class, 'user_id', 'id');
    }

    public function proverbs()
    {
        return $this->hasMany(Proverb::class, 'user_id', 'id');
    }

    public function bookMarkedProverbs()
    {
        return $this->hasMany(BookMarkedProverb::class, 'user_id', 'id');
    }

    public function quizzes()
    {
        return $this->hasMany(Quiz::class, 'user_id', 'id');
    }

}
