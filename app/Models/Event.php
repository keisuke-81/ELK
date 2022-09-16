<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Event extends Model
{
    /**
     * モデルの日付カラムの保存用フォーマット
     *
     * @var string
     */

      protected $dates = [
        'event_day'
    ];
    protected $dateFormat = 'U';

    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'updated_date';
    const EVENT_DAY = 'event_day';

    //use HasFactory;
    public function school(){
        return $this->belongsTo('App\Models\School');

    }

    public function category(){
        return $this -> belongsToMany('App\Models\Category');
    }

    


}
