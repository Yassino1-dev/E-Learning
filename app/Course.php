<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function user(){
        return $this->belongsTo('App\User');//autant que formateur
    }

    public function sections(){
        return $this->hasMany('App\Section');
    }

    public function payment(){
        return $this->belongsTo('App\Payment');
    }

    public function participants(){
        return $this->belongsToMany('App\User');//autant que participant
    }
}
