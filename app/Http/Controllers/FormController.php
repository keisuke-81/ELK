<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;
use App\Models\Event;
use App\Models\Category;
use App\Models\Image;
use App\Models\EventCategory;
use App\Models\EventImage;
use App\Models\EventUser;
use Carbon\Carbon;
use DB;



class FormController extends Controller
{
    //
    public function form($id)
    {



        $school_name = Event::join('schools', 'events.school_id', '=', 'schools.id')
        ->join('images', 'events.image_id', '=', 'images.id')
        ->join('event_categories', 'events.id', '=', 'event_categories.event_id')
        ->join('categories', 'event_categories.category_id', '=', 'categories.id')

        ->where('events.id', $id)
        ->first();
        return view('event.event_form');


    }


    public function myshow($id)
    {


        $school_name = Event:: join('schools','events.school_id','=','schools.id')
        ->join('images','events.image_id','=','images.id')
        ->join('event_categories','events.id','=','event_categories.event_id')
        ->join('categories','event_categories.category_id','=','categories.id')

        ->where('events.id',$id)
        ->first();


        return view('event.myevent_detail', compact('school_name'));
    }

    public function check($id)
    {


        $school_name = Event:: join('schools','events.school_id','=','schools.id')
        ->join('images','events.image_id','=','images.id')
        ->join('event_categories','events.id','=','event_categories.event_id')
        ->join('categories','event_categories.category_id','=','categories.id')

        ->where('events.id',$id)
        ->first();


        return view('event.check_form', compact('school_name'));
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

    public function upform(Request $request)
    {

        $posts = $request->all();
       // $request->validate(['content' => 'required' ]);
       //dd($posts);
        // $key = $request->id;
        // dd($key);
        $event_id = EventUser::insertGetId(['event_id' => $posts['event_id'],'name' => $posts['name'],'kana' => $posts['kana'],'email' => $posts['email'],'tel' => $posts['tel'],'kids_age' => $posts['kids_age'],'comment' => $posts['comment']]);
       //もし他のテーブルにもデータを送る場合下の記述で入ります。
        // EventImage::insert(['image_id' => $posts['school_id'],'event_id' => $posts['_token']]);
        //dd($event_id);

        
        return view('event.check_form', compact('event_id'));



    }


}
