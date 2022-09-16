<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;
use App\Models\Event;

class EventController extends Controller
{
    //

    public function index(){
        $event = Event::join('schools', 'events.school_id', '=', 'schools.id')
        ->get();

    }
    public function event(){
        $event_it = School::find(1) -> events;
        $event_name =School::find(1)->events;
        //dd($event_it);
    }

     public function form($id)
    {



        $school_name = Event::join('schools', 'events.school_id', '=', 'schools.id')
        ->join('images', 'events.image_id', '=', 'images.id')
        ->join('event_categories', 'events.id', '=', 'event_categories.event_id')
        ->join('categories', 'event_categories.category_id', '=', 'categories.id')

        ->where('events.id', $id)
        ->first();
        return view('event.event_form');


    }

    public function myshow($id)
    {


        $school_name = Event:: join('schools','events.school_id','=','schools.id')
        ->join('images','events.image_id','=','images.id')
        ->join('event_categories','events.id','=','event_categories.event_id')
        ->join('categories','event_categories.category_id','=','categories.id')

        ->where('events.id',$id)
        ->first();


        return view('event.myevent_detail', compact('school_name'));
    }


}
