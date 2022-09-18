<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;
use App\Models\Event;





class EventController extends Controller
{
    //

    // public function index(){
    //     $event = Event::join('schools', 'events.school_id', '=', 'schools.id')
    //     ->get();

    // }
    public function event(){
        $event_it = School::find(1) -> events;
        $event_name =School::find(1)->events;
        //dd($event_it);
    }
    public function search(Request $request){
        $word = $request->all();
        //dd($word);
        $goodword = implode( $word  );
        $event = Event::join('event_categories', 'events.id', '=', 'event_categories.event_id')
            ->join('categories', 'event_categories.category_id', '=', 'categories.id')
            ->join('schools','events.school_id','=','schools.id')
            ->where('title','like' ,"%$goodword%")
            ->orWhere('event_day','like' ,"%$goodword%")
             ->orWhere('area','like' ,"%$goodword%")
             ->orWhere('target_min_age','like' ,"%$goodword%")
             ->orWhere('target_max_age','like' ,"%$goodword%")
             ->orWhere('content','like' ,"%$goodword%")
             ->orWhere('price','like' ,"%$goodword%")
             ->orWhere('name','like' ,"%$goodword%")
             ->orWhere('school_name','like' ,"%$goodword%")
             ->orWhere('about','like' ,"%$goodword%")
            ->get();
            //dd($event);

    }

    public function daySearch(Request $request){
        $day = $request->all();
        //dd($word);
        $good_day = implode( $day  );
        $event_day = Event::where('event_day','like' ,"%$good_day%")
            ->join('schools','events.school_id','=','schools.id')
            ->get();
            //dd($event_day);

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

    /**
     * イベント一覧画面
     */







}
