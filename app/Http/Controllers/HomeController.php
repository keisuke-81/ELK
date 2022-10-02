<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\School;
use App\Models\Category;
use App\Models\Image;
use App\Models\EventImage;
use App\Models\EventCategory;



use DB;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

         $event = Event::select('event.*');
        //dd($event);

        return view('event.event');
        return view('home');
    }
    //top画面を表示する

    public function admin(){
        return view('edit.create');
    }





   

    //top -> home
      public function home()
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

        return view('home',compact('categories','events'));

    }
}
