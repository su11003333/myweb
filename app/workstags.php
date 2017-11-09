<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workstags extends Model
{
    //
    protected $fillable = [
        'name'
    ];
    public function works(){

        return $this->belongsToMany('App\Works');

    }
}
