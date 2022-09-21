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
        $goodword = $request->word;
        //dd($word);
        // $goodword = implode( $word  );
    //dd($goodword);
       // $query = Event::query();

if (!empty($goodword)) {
    $events = Event::query()
            ->join('schools', 'events.school_id', '=', 'schools.id')
            ->join('images', 'events.image_id', '=', 'images.id')
            ->join('event_categories', 'events.id', '=', 'event_categories.event_id')
            ->join('categories', 'event_categories.category_id', '=', 'categories.id')
            ->where('status', '=', 'open')
            ->where(function ($query) use ($goodword) {
                $query->Where('title', 'LIKE', "%{$goodword}%")
                        ->orWhere('content', 'LIKE', "%{$goodword}%");
                    });
            // ->where(function ($query) use ($goodword) {
            //     $query->orWhere('target_min_age', 'like', "%{$goodword}%")
            //             ->orWhere('target_max_age', 'like', "%{$goodword}%");})
            //->where(function ($query) use ($goodword) {
                //$query->Where('title', 'LIKE', "%{$goodword}%")
                      // -> orWhere('content', 'LIKE', "%$goodword%");});
            // ->where(function ($query) use ($goodword) {
            //     $query->orWhere('content', 'LIKE', "%$goodword%");});
            // ->where(function ($query) use ($goodword) {
            //     $query->orwhere('title', 'like', "%{$goodword}%");})
            //             //->orWhere('price', 'like', "%{$goodword}%");})
            // ->where(function ($query) use ($goodword) {
            //     $query->orWhere('name', 'like', "%{$goodword}%");})
            // ->where(function ($query) use ($goodword) {
            //     $query->orWhere('school_name', 'like', "%{$goodword}%");});
            // ->where(function ($query) use ($goodword) {
            //     $query->orWhere('about', 'like', "%{$goodword}%");
        //    ->get();
            // });
        }

        $event_images = $events->get();
        //dd($event_images);
        // $event_images = $event->orWhere('event_day','like' ,"%{$goodword}%")
        //                     ->orWhere('area','like' ,"%{$goodword}%")
        //                     ->orWhere('target_min_age','like' ,"%{$goodword}%")
        //                     ->orWhere('target_max_age','like' ,"%{$goodword}%")
        //                     ->orWhere('content','like' ,"%{$goodword}%")
        //                     ->orWhere('price','like' ,"%{$goodword}%")
        //                     ->orWhere('name','like' ,"%{$goodword}%")
        //                     ->orWhere('school_name','like' ,"%{$goodword}%")
        //                     ->orWhere('about','like' ,"%{$goodword}%")
        //                     ->get();
        //dd($event);
        //dd($event_images);




        // $goodword = implode( $word  );
        // $event_images = Event::join('schools','events.school_id','=','schools.id')
        //     ->join('images','events.image_id','=','images.id')
        //     ->join('event_categories', 'events.id', '=', 'event_categories.event_id')
        //     ->join('categories', 'event_categories.category_id', '=', 'categories.id')
        //     ->where('status', '=', 'open')
        //     ->orwhere('title','like' ,"%$goodword%")
        //     ->orWhere('event_day','like' ,"%$goodword%")
        //     ->orWhere('area','like' ,"%$goodword%")
        //     ->orWhere('target_min_age','like' ,"%$goodword%")
        //     ->orWhere('target_max_age','like' ,"%$goodword%")
        //     ->orWhere('content','like' ,"%$goodword%")
        //     ->orWhere('price','like' ,"%$goodword%")
        //     ->orWhere('name','like' ,"%$goodword%")
        //     ->orWhere('school_name','like' ,"%$goodword%")
        //     ->orWhere('about','like' ,"%$goodword%")
        //     ->get();
            //dd($event_images);



            $categories =Category::whereNull('deleted_at')
            ->orderBy('id', 'DESC')
            ->get();

            $count = Event::where('event_day', 'like', "%$goodword%")
                        ->count();
            //dd($count);

            return view('event.event2', compact('event_images','goodword','count','categories'));

    }

    public function daySearch(Request $request){
        $day = $request->all();
        //dd($word);
        $good_day = implode( $day  );
        $event_days = Event::where('event_day','like' ,"%$good_day%")
            ->join('schools','events.school_id','=','schools.id')
            ->join('images','events.image_id','=','images.id')
            ->where('status', '=', 'open')
            ->get();
            //dd($event_days);
        $count = Event::where('event_day','like' ,"%$good_day%")
            ->where('status', '=', 'open')
            ->count();
            //dd($count);
            return view('dayevent', compact('event_days','good_day','count'));


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
