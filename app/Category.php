<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //

    protected $fillable = [

      'name'

    ];

    public function Posts(){

        return $this->hasMany('App\Post');

    }

    public function Subcategories(){

        return $this->hasMany('App\Subcategory');

    }
}
