<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;
use App\Models\Event;
use App\Models\Category;
use App\Models\Image;
use App\Models\EventCategory;
use App\Models\EventImage;
use Carbon\Carbon;


class FormController extends Controller
{
    //
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

    public function check($id)
    {


        $school_name = Event:: join('schools','events.school_id','=','schools.id')
        ->join('images','events.image_id','=','images.id')
        ->join('event_categories','events.id','=','event_categories.event_id')
        ->join('categories','event_categories.category_id','=','categories.id')

        ->where('events.id',$id)
        ->first();


        return view('event.check_form', compact('school_name'));
    }

    public function elkevent()
    {



        $event_images = Event::join('images', 'events.image_id', '=', 'images.id')
                                                    ->where('my_event', 1)
                                                    ->where('status', '=', 'open')
                                                    ->get();

        //dd($event_images);


        return view('event.elk', compact('event_images'));

    }


}
