<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use App\Models\Event;
use App\Models\School;
use App\Models\Category;


class TopController extends Controller
{
    //
     public function top()
    {
        // $titles = DB::table('events')->pluck('title')

        //         ->whereNull('deleted_at')
        //         ->sortByDesc('updated_at');

        $events =DB::table('events')
                ->get();

            //dd($titles);
            //dd($events);
        return view('event.event',compact('events'));

    }

    public function eventDetail($id)
    {
        //ここでメモデータを取得
    //    $image = new Image();

    //    $tags = Tag::where('user_id','=',\Auth::id())->whereNull('deleted_at')->orderBy('id','DESC')
    //    ->get();
       //dd($tags);
      // return view('event_detail',compact('tags','image'));


      return view('event.event_detail',compact('event'));

    }
    public function show($id)
    {
        $events = Event::find($id);

        return view('event.event_detail', compact('events'));
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
