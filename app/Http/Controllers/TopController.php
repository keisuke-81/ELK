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




class TopController extends Controller
{
    //
     public function top()
    {

        $categories =DB::table('categories')
        ->whereNull('deleted_at')
        ->orderBy('id','DESC')
        ->get();
           //dd($categories);

        $events =DB::table('events')
        ->whereNull('deleted_at')
        ->orderBy('id','DESC')
        ->get();

        $schools =DB::table('schools')
        ->whereNull('deleted_at')
        ->orderBy('id','DESC')
        ->get();

        // $images = DB::table('events')
        // ->select('events.id','images.id as image_id','images.path as image_path')
        // ->join('images','events.image_id', '=','images.id')
        // ->get();
        // $event_images = DB::table('events')
        // ->select('events.id','images.id as image_id','images.path as image_path')
        // ->leftJoin('images','events.image_id','=','images.id')
        // ->get();
        // dd('$event_images');
        $event_images = DB::table('events') -> join('images','events.image_id','=','images.id')
        ->get();
        //dd($event_images);



       // $school_id =($schools[id]);
       // dd($schools['id']);

            //dd($titles);
            //dd($events);
        return view('event.event',compact('events','categories','event_images'));

    }

    // public function eventDetail($id)
    // {
    //     //ここでメモデータを取得
    // //    $image = new Image();

    // //    $tags = Tag::where('user_id','=',\Auth::id())->whereNull('deleted_at')->orderBy('id','DESC')
    // //    ->get();
    //    //dd($tags);
    //   // return view('event_detail',compact('tags','image'));


    //   return view('event.event_detail',compact('event'));

    // }
    public function show($id)
    {

        $events = Event::find($id);
        //dd($events);
        $schools = School::where('id',$events->school_id)
                ->first();
        $images = Image::where('id', $events->image_id)
                ->first();


       // dd($school);

        return view('event.event_detail', compact('events','schools','images'));
    }

    public function categoryEvent($id)
    {
       // dd($id);
        // $events = Event::select('event.*')
        // ->whereNull('deleted_at')
        // ->orderBy('updated_at','DESC')
        // ->get();

        $categories =DB::table('categories')
                ->whereNull('deleted_at')
                ->orderBy('id', 'DESC')
                ->get();
        //dd($categories);



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

        $vents =DB::table('events')
            ->join('images', 'images.id', '=', 'events.image_id')
            ->select('events.*', 'images.path')
            ->where('events.id','=',$id)
            ->whereNull('events.deleted_at')
            ->orderBy('updated_at','DESC')
            ->get();
        //dd($vents);
//このしたらへんは消す予定です。
        // $event_categories = Event::select('events.*','categories.id AS category_id')
        // ->rightJoin('event_images','event_images.event_id','=','events.id')
        // ->rightJoin('images','events.image_id','=','images.id')
        //  ->where('events.id','=',$id)
        // ->whereNull('events.deleted_at')
        // ->orderBy('updated_at','DESC')
        // ->get();
       // dd($event_categories);

        $include_categories = [];
        foreach($event_categories as $event){
            array_push($include_categories,$event['category_id']);
        }


        $all_data = $event_categories -> join('images', 'event_categories_id', '=', 'images.id')
        ->get();

        //dd($all_data);



       // $events = Event::find($id);
        // $schools = School::where('id',$events->school_id)
        //         ->first();
        // $images = Image::where('id', $events->image_id)
                 //->first();


        //dd($include_category_events);

        return view('event.category_event', compact('events','event_categories','categories','schools','images','vents'));
    }

    public function calendar()
    {
        //ここでメモデータを取得

       // dd($memos);
    //    $image = new Image();

    //    $tags = Tag::where('user_id','=',\Auth::id())->whereNull('deleted_at')->orderBy('id','DESC')
    //    ->get();
    //    //dd($tags);
    //    return view('calendar',compact('tags','image'));
    return view('calendar');


    }


}
