<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseUser extends Model
{
    protected $table = 'course_user';

    protected $fillable = [
        'user_id', 'course_id'
    ];

    public function course(){
        return $this->belongsTo('App\Course');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
