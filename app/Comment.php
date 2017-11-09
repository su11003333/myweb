<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable = [
        'post_id',
        'author',
        'body',
        'email',
        'is_active',
        'file'
    ];

    public function replies(){

        return $this->hasMany('App\CommentReply');

    }

    public function post(){
        return $this->belongsTo('App\Post');

    }

}
