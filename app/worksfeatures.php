<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Worksfeatures extends Model
{
    //
    protected $upload = '/images/upload/works/';

    protected $fillable = [

        'path','works_id'

    ];

    public function getPathAttribute($feature){

        return $this->upload.$feature;
    }

    public function works(){

        return $this->belongsTo('App\Works');

    }
}
