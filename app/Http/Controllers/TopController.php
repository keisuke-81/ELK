<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    //
     public function top()
    {
        //ここでメモデータを取得

       // dd($memos);
    //    $image = new Image();

    //    $tags = Tag::where('user_id','=',\Auth::id())->whereNull('deleted_at')->orderBy('id','DESC')
    //    ->get();
       //dd($tags);
     //  return view('event',compact('tags','image'));

        return view('top/top');



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
