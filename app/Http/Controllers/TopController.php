<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use App\Models\Event;
use App\Models\School;
use App\Models\Category;
use App\Models\Image;
use App\Models\EventCategory;
use App\Models\EventImage;
use Carbon\Carbon;







class TopController extends Controller
{
    //
    public function event(){
        $all_events = Category::find(1)->events;
        dd($all_events);
    }

     public function top()
    {

       // $categories =DB::table('categories')
       $categories =Category::whereNull('deleted_at')
        ->orderBy('id','DESC')
        ->get();
        // dd($categories);

         $event_images = Event::join('images','events.image_id','=','images.id')
            ->whereNull('deleted_at')
            ->orderBy('event_day','DESC')
            ->get();                      //


       // dd($event_images);

        return view('event.event',compact('categories','event_images'));

    }


    public function show($id)
    {

        $school_name = Event::join('schools','events.school_id','=','schools.id')
        ->join('images','events.image_id','=','images.id')
        ->join('event_categories','events.id','=','event_categories.event_id')
        ->join('categories','event_categories.category_id','=','categories.id')

        ->where('events.id',$id)
        ->first();
        //dd($school_name);

        return view('event.event_detail', compact('school_name'));
    }

    public function categoryEvent($id)
    {

        $categories =Category::whereNull('deleted_at')
                ->orderBy('id', 'DESC')
                ->get();
        //dd($categories);

        $categories_name =Category::where('id','=',$id)
                        ->orderBy('id', 'DESC')
                        ->first();
       // dd($categories_name);

        $event_categories = Event::select('events.*','categories.id AS category_id')
        ->leftJoin('event_categories','event_categories.event_id','=','events.id')
        ->leftJoin('categories','event_categories.category_id','=','categories.id')

        ->where('events.id','=',$id)
        ->whereNull('events.deleted_at')
        ->orderBy('updated_at','DESC')
        ->get();

        // $vents =DB::table('events')
        $vents =Event::join('images', 'images.id', '=', 'events.image_id')
            ->join('event_categories','event_categories.event_id','=','events.id')
            ->select('events.*', 'images.path','event_id')
            ->where('event_categories.category_id','=',$id)
            ->whereNull('events.deleted_at')
            ->orderBy('updated_at','DESC')
            ->get();
        //dd($vents);


        $include_categories = [];
        foreach($event_categories as $event){
            array_push($include_categories,$event['category_id']);
        }


        return view('event.category_event', compact('categories','vents','categories_name'));
    }

    public function calendar()
    {
        //ここでメモデータを取得

    return view('calendar');


    }

    public function form()
    {

    return view('event.event_form');


    }

      public function elkevent()
    {


          // $event_images = DB::table('events') -> join('images', 'events.image_id', '=', 'images.id')
        //                                     ->where('my_event', 1)
        //                                     ->get();


        $event_images = Event::join('images', 'events.image_id', '=', 'images.id')
                                                    ->where('my_event', 1)
                                                      ->get();

        //dd($event_images);


        return view('event.elk', compact('event_images'));

    }


}
