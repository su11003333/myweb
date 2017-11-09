<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Works extends Model
{
    //
    protected $fillable = [

        'title','workscategories_id','user_id','company','intro','body','url','banner','star','like','date'

    ];

    public function User(){

        return $this->belongsTo('App\User');

    }

    public function worksfeatures(){

        return $this->hasMany('App\Worksfeatures');

    }

    public function workscategories(){

        return $this->belongsTo('App\Workscategories');
//

    }
    public function workstags(){

        return $this->belongsToMany('App\Workstags')->withTimestamps();
//

    }


}
