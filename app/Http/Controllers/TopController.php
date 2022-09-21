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

     public function index(Request $request) // 追加①
    {
        // 検索したキーワード
        $word = $request->search; // 追加②
        //dd($word); // 追加③

        // Eloquentでeventsテーブルにあるデータを全て取得
        $events = $this->event->allEventsData();

        return view('top.index', compact('events'));
    }

    public function event(){

        $school = new School();
        //dd($school);
        $all_events = Category::find(1)->events;
        //dd($all_events);
        $event = new Event();
       // dd($event);
    }

     public function top()
    {

       // $categories =DB::table('categories')
       $categories =Category::whereNull('deleted_at')
        ->orderBy('id','DESC')
        ->get();


         $events = Event::join('schools','events.school_id','=','schools.id')
            ->join('images','events.image_id','=','images.id')
            ->where('status', '=', 'open')
            ->orderBy('event_day','DESC')
            ->get();                      //
       // dd($event_images);
    //       -> join('event_categories', 'events.id', '=', 'event_categories.event_id')
     //       ->join('categories', 'event_categories.category_id', '=', 'categories.id')

        $count = DB::table('event_categories')
        ->join('events','event_categories.event_id','events.id')
       // ->where('event_day','=','2022-09-15 00:00:00')
        ->where('category_id','=','3')
        ->where('status', '=', 'open')
        ->count();
        //dd($count);

        return view('event.event',compact('categories','events'));

    }

    public function show($id)
    {

        //dd($id);
        $school_name = Event:: join('schools','events.school_id','=','schools.id')
        ->join('images','events.image_id','=','images.id')
        ->join('event_categories','events.id','=','event_categories.event_id')
        ->join('categories','event_categories.category_id','=','categories.id')
        ->where('events.id','=',$id)
        ->first();
        //dd($school_name);

        return view('event.event_detail', compact('school_name'));
    }

    public function categoryEvent($id)
    {


        $categories =DB::table('categories')
                ->whereNull('deleted_at')
                ->orderBy('id', 'DESC')
                ->get();
        //dd($categories);

        $categories_name =DB::table('categories')
                        ->where('id','=',$id)
                        ->orderBy('id', 'DESC')
                        ->first();
       // dd($categories_name);



        $schools =DB::table('schools')
        ->whereNull('deleted_at')
        ->orderBy('id', 'DESC')
        ->get();


        $events =DB::table('events')
        ->whereNull('deleted_at')
        ->orderBy('id', 'DESC')
        ->get();


        $images =DB::table('images')
        ->orderBy('id', 'DESC')
        ->get();


        //dd($events);

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
            ->where('status', '=', 'open')
            ->where('event_categories.category_id','=',$id)
            ->whereNull('events.deleted_at')
            ->orderBy('updated_at','DESC')
            ->get();
        //dd($vents);


        $include_categories = [];
        foreach($event_categories as $event){
            array_push($include_categories,$event['category_id']);
        }


        return view('event.category_event', compact('events','event_categories','categories','schools','images','vents','categories_name'));
    }

    public function calendar()
    {

    return view('calendar');


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
