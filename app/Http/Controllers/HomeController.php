<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $request->validate(['content' => 'required' ]);

        //$request->validate(["tags[]" => 'required' ]);

        //dd($posts);
        //dd(\Auth::id());

        //------------------------------------
        //トランザクション開始
        DB::transaction(function() use($posts){


            $memo_id = Memo::insertGetId(['content' => $posts['content'],'user_id' => \Auth::id()]);
            $tag_exists = Tag::where('user_id', '=', \Auth::id()) ->where('name','=',$posts['new_tag'])->exists();
            //新規タグが入力されているかチェック
            //新規タグが既にテーブルに存在するかをチェック


               if(!empty($posts['new_tag']) && !$tag_exists){
                //dd($posts);
                //新規タグが既に存在しなければ、tagsテーブルにインサート→IDを取得
                $tag_id = Tag::insertGetId(['user_id' => \Auth::id(), 'name' => $posts['new_tag']]);
                //memo_tagsにインサートして、メモとタグを紐付ける
                MemoTag::insert(['memo_id' => $memo_id, 'tag_id' => $tag_id]);
               // dd('新規タグがあるよ');
                 }
                //既存タグが紐づけられた場合
            //    foreach($posts['tags'] as $tag){
            //     MemoTag::insert(['memo_id' => $memo_id, 'tag_id' => $tag]);
            //    }

            if (!empty($posts['tags'][0])) {
                foreach ($posts['tags'] as $tag) {
                    MemoTag::insert(['memo_id' => $memo_id, 'tag_id' => $tag]);
                }
            }


        });

        //-------ここまでがトランザクション範囲
       // Memo::insert( ['content'=> $posts['content'], 'user_id' => \Auth::id()]);
        //return view('create');
        return redirect('home');
    }
}
