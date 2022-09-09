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
        $event = DB::table('events')
                // ->whereNull('deleted_at')
                // ->orderBy('updated_at','DESC')
                ->get();
            dd($event);
        return view('top');

    }

    public function eventDetail()
    {
        //ここでメモデータを取得

       // dd($memos);
    //    $image = new Image();

    //    $tags = Tag::where('user_id','=',\Auth::id())->whereNull('deleted_at')->orderBy('id','DESC')
    //    ->get();
       //dd($tags);
      // return view('event_detail',compact('tags','image'));
      return view('event.event_detail');



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
