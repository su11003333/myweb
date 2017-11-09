<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    protected $fillable = [

      'title','user_id','category_id','subcategory_id','body','img' ,'banner'

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


    public function features(){

        return $this->hasMany('App\Feature');

    }

    public function tags(){

        return $this->belongsToMany('App\Tag')->withTimestamps();
//

    }
    public function imgs(){

        return $this->hasMany('App\Img');
    }

    public function comments(){

        return $this->hasMany('App\Comment');

    }


}
