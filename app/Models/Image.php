<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Image extends Model
{
    protected $fillable = [
      'name',
      'path',
    ];

    public function event()
    {
        return $this->hasOne(Event::class,'path');
    }
    // public function event(){
    //     return $this->belongsTo(Event::class,'path');

    // }


}
