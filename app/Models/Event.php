<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //use HasFactory;
    public function school(){
        return $this->belongsTo('App\Models\School');
    }

    public function category(){
        return $this -> belongsToMany('App\Models\Category');
    }

}
