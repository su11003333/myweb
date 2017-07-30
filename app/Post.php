<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    protected $fillable = [

      'title','user_id','feature_id','category_id','subcategory_id','body'

    ];

    public function Category(){

        return $this->belongsTo('App\Category');

    }

    public function Subcategory(){

        return $this->belongsTo('App\Subcategory');

    }

    public function User(){

        return $this->belongsTo('App\User');

    }


    public function Feature(){

        return $this->belongsTo('App\Feature');

    }

    public function tags(){

        return $this->belongsToMany('App\Tag')->withTimestamps();
//

    }

}
