<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

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

        Event::insert(['content' => $posts['content'],'content_summary' => $posts['content_summary'],'title' => $posts['title'],'event_day' => $posts['event_day'],'target_min_age' => $posts['target_min_age'],'target_max_age' => $posts['target_max_age'],'school_id' => $posts['school_id'],'area' => $posts['area'],'my_event' => $posts['my_event'],'price_free' => $posts['price_free'], 'price' => $posts['price'],'event_url' => $posts['event_url'],'status' => $posts['status']]);

        return redirect('admin');


    }
}
