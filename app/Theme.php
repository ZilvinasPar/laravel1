<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Group;

class Theme extends Model
{
    public function groups(){

        return $this->belongsToMany('App\Group');
    }

    public function files(){
        return $this->hasMany('App\File', 'theme_id', 'id');
    }
}
