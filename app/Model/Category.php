<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded=[];

    public function getRouteKeyName()
    {
        return 'slug';
    }// end of get route key name
}// end of Model
