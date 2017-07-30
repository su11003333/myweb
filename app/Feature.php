<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    //

    protected $upload = '/images/upload/';

    protected $fillable = [

      'path'

    ];

    public function getPathAttribute($feature){


        return $this->upload.$feature;
    }


}
