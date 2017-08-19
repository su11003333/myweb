<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    //

    protected $upload = '/images/upload/';

    protected $fillable = [

      'path','post_id'

    ];

    public function getPathAttribute($feature){


        return $this->upload.$feature;
    }

    public function post(){

        return $this->belongsTo('App\Post');

    }

}
