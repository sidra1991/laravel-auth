<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\str;

class Pots extends Model
{
    public function generateSlug($originalStr){
        $baseSlug = str::of($originalStr)->slug('-');
        $slug = $baseSlug;
        $i = 1;
        while(self::where('slug',$slug)->first()){
            $slug .= "$baseSlug-$i";
            $i++;
        }
        return $slug;
    }
}
