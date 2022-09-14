<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;
use App\Models\Event;

class EventController extends Controller
{
    //
    public function event(){
        $event_it = School::find(1) -> events;
        $event_name =School::find(1)->events;
        //dd($event_it);
    }
}
