<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\StudentGroup;
use App\User;
use App\Theme;
class Group extends Model
{
    protected $fillable = [
        'course_name', 'start_date', 'end_date',
    ];


    public function students(){

        return $this->belongsToMany('App\User' , 'studentsgroups', 'group_id', 'student_id');
    }

    public function hasUser(){
        return $this->belongsToMany('App\User');
    }

    public function themes(){
        return $this->hasMany('App\Theme', 'group_id');
    }
}
