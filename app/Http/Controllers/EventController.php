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
    public function free(){
        $events = Event::query()
                ->where('status', '=', 'open')
                ->Where('price_free','=',0)
                ->join('schools', 'events.school_id', '=', 'schools.id')
                ->join('images', 'events.image_id', '=', 'images.id')
                ->orderBy('event_day','DESC')
                ->get();
                //dd($events);

                $categories =Category::whereNull('deleted_at')
                ->orderBy('id', 'DESC')
                ->get();

                $goodword = "無料";

        return view('event.event', compact('categories', 'events','goodword'));


    }
     public function paid(){
        $events = Event::query()
                ->where('status', '=', 'open')
                ->Where('price_free','=',1)
                ->join('schools', 'events.school_id', '=', 'schools.id')
                ->join('images', 'events.image_id', '=', 'images.id')
                ->orderBy('event_day','DESC')
                ->get();
                //dd($events);


                $categories =Category::whereNull('deleted_at')
                ->orderBy('id', 'DESC')
                ->get();

                $goodword = "有料";


        return view('event.event', compact('categories', 'events','goodword'));


    }

    public function search(Request $request){

        // $goodword = $request->word;
        // dd($word);
        // $goodword = implode( $word  );
    //dd($goodword);
       // $query = Event::query();

if (!empty($request)) {

    $goodword = $request->word;
    //dd($goodword);

    $events = Event::query()
               ->join('schools', 'events.school_id', '=', 'schools.id')
                ->join('images', 'events.image_id', '=', 'images.id')
            //    ->join('event_categories', 'events.id', '=', 'event_categories.event_id')
            //    ->join('categories', 'event_categories.category_id', '=', 'categories.id')
            ->where('status', '=', 'open')
            ->where(function($query)use($goodword){
                $query->where('title','LIKE',"%{$goodword}%")
                ->orWhere(function ($query) use ($goodword) {
                $query->where('content', 'LIKE', "%{$goodword}%");
                })
                ->orWhere(function ($query) use ($goodword) {
                $query->where('content_summary', 'LIKE', "%{$goodword}%");
                })
                ->orWhereHas('school', function ($query) use ($goodword) {
                $query->where('about', 'LIKE', "%{$goodword}%");
                })
                ->orWhereHas('school', function ($query) use ($goodword) {
                $query->where('school_address', 'LIKE', "%{$goodword}%");
                })
                ->orWhereHas('school', function ($query) use ($goodword) {
                $query->where('school_name', 'LIKE', "%{$goodword}%");
                })
                ->orWhereHas('categories', function ($query) use ($goodword) {
                    $query->where('name', 'LIKE', "%{$goodword}%");
                });
            });


        }

        if (!empty($events)) {
            $event_images = $events->get();
        }


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




    /**
     * イベント一覧画面
     */







}
