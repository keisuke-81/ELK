<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;

class SchoolController extends Controller
{
    //
    public function school(Request $request)
    {
        //dd($request);
        $posts = $request->all();
       // $request->validate(['content' => 'required' ]);

        School::insert(['school_name' => $posts['school_name'],'school_url' => $posts['school_url'],'about' => $posts['about'],'school_address' => $posts['school_address'],'school_tel' => $posts['school_tel']]);

        return redirect('admin');


    }
}
