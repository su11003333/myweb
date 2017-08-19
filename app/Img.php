<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Img extends Model
{
    //
    protected $fillable=[

      'title','post_id','introl'

    ];

    public function post(){

        $this->belongsTo('App\Post');

    }
}
