<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\School;
use App\Models\Category;
use App\Models\Image;
use App\Models\EventImage;


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

    public function store(Request $request)
    {

        $posts = $request->all();
       // $request->validate(['content' => 'required' ]);
       //dd($posts);
        // $key = $request->id;
        // dd($key);
        Event::insert(['content' => $posts['content'],'content_summary' => $posts['content_summary'],'title' => $posts['title'],'event_day' => $posts['event_day'],'target_min_age' => $posts['target_min_age'],'target_max_age' => $posts['target_max_age'],'school_id' => $posts['school_id'],'image_id' => $posts['image_id'],'area' => $posts['area'],'my_event' => $posts['my_event'],'price_free' => $posts['price_free'], 'price' => $posts['price'],'event_url' => $posts['event_url'],'status' => $posts['status']]);
       //もし他のテーブルにもデータを送る場合下の記述で入ります。
        // EventImage::insert(['image_id' => $posts['school_id'],'event_id' => $posts['_token']]);
        return redirect('admin');


    }

    public function school(Request $request)
    {
        //dd($request);
        $posts = $request->all();
       // $request->validate(['content' => 'required' ]);

        School::insert(['school_name' => $posts['school_name'],'school_url' => $posts['school_url'],'about' => $posts['about'],'school_address' => $posts['school_address'],'school_tel' => $posts['school_tel']]);

        return redirect('admin');


    }
    public function category(Request $request)
    {
        //dd($request);
        $posts = $request->all();
       // $request->validate(['content' => 'required' ]);

        Category::insert(['name' => $posts['name']]);

        return redirect('admin');


    }
}
