<?php

namespace App\Http\Controllers;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use App\Http\Controllers\Controller;
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

    /*
     * 入力から確認へ遷移する際の処理
     */
        // function post(Request $request)
        // {
        //     $this->validator($request->all())->validate();

        //     $input = $request->only($this->formItems);

        //     //セッションに書き込む
        //     $request->session()->put("form_input", $input);

        //     return redirect()->action($this->form_confirm);
        // }



    public function myshow($id)
    {

        $categories =Category::whereNull('deleted_at')
            ->orderBy('id', 'DESC')
            ->get();


        $school_name = Event:: join('schools','events.school_id','=','schools.id')
        ->join('images','events.image_id','=','images.id')
        ->join('event_categories','events.id','=','event_categories.event_id')
        ->join('categories','event_categories.category_id','=','categories.id')

        ->where('events.id',$id)
        ->first();

        //セッションに書き込む
        //$request->session()->put("form_input", $input);



        return view('event.myevent_detail', compact('school_name','categories'));
    }

    public function check($id)
    {


        $school_name = Event:: join('schools','events.school_id','=','schools.id')
        ->join('images','events.image_id','=','images.id')
        ->join('event_categories','events.id','=','event_categories.event_id')
        ->join('categories','event_categories.category_id','=','categories.id')

        ->where('events.id',$event_id)
        ->first();


        return view('event.check_form', compact('school_name'));
    }

     public function thanks(Request $request)
    {
         //dd($request);

        $event_id = EventUser::insertGetId(['event_id' => $request['event_id'],'name' => $request['name'],'kana' => $request['kana'],'email' => $request['email'],'tel' => $request['tel'],'kids_age' => $request['kids_age'],'comment' => $request['comment']]);
        //dd($request);
        //dd($event_id );
        $event_images = Event::join('images', 'events.image_id', '=', 'images.id')
                                                    ->where('my_event', 1)
                                                    ->where('status', '=', 'open')
                                                    ->first();

        //dd($event_images);

        return view('event.thanks_form', compact('event_images'));

    }

    public function elkevent()
    {

$categories =Category::whereNull('deleted_at')
        ->orderBy('id', 'DESC')
        ->get();



        $event_images = Event::join('images', 'events.image_id', '=', 'images.id')
                                                    ->where('my_event', 1)
                                                    ->where('status', '=', 'open')
                                                    ->get();

        //dd($event_images);


        return view('event.elk', compact('event_images','categories'));

    }

    public function upform(Request $request)
    {

        $posts = $request->all();
       // $request->validate(['content' => 'required' ]);
       //dd($posts);
        // $key = $request->id;
        // dd($key);
        //$event_id = EventUser::insertGetId(['event_id' => $posts['event_id'],'name' => $posts['name'],'kana' => $posts['kana'],'email' => $posts['email'],'tel' => $posts['tel'],'kids_age' => $posts['kids_age'],'comment' => $posts['comment']]);
       //もし他のテーブルにもデータを送る場合下の記述で入ります。
        // EventImage::insert(['image_id' => $posts['school_id'],'event_id' => $posts['_token']]);
        //dd($event_id);
        $event = $posts;
        //dd($event);

        $validatedData = $request->validate([
            'name' => ['required', 'max:255'],
            'kana' => ['required'],
            'tel' => ['required'],
            'email' => ['required'],
            'kids_age' => ['required'],

        ]);



        return view('event.check_form', compact('event'));



    }


}
