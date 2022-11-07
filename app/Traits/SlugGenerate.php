<?php

namespace App\Traits;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

trait SlugGenerate
{
    /*
    |======================================================================
    | This Function Converts name to slug
    |======================================================================
    */

    public function createSlug($table, $title, $id = 0)
    {
        $slug = Str::slug($title);
        $allSlugs = $this->getRelatedSlugs($table, $slug, $id);
        if (!$allSlugs->contains('slug', $slug)) {
            return $slug;
        }

        $i = 1;
        $is_contain = true;
        do {
            $newSlug = $slug . '-' . $i;
            if (!$allSlugs->contains('slug', $newSlug)) {
                $is_contain = false;
                return $newSlug;
            }
            $i++;
        } while ($is_contain);
    }

    protected function getRelatedSlugs($table, $slug, $id = 0)
    {
        return DB::table($table)->select('slug')->where('slug', 'like', $slug . '%')
            ->where('id', '<>', $id)
            ->get();
    }

    /*
       |======================================================================
       | This Function Converts Arbic
       |======================================================================
       */

  
}
