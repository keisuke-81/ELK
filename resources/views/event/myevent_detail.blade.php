@extends('layouts/top')


@section('category')
 <div class="card" style="padding-top: 3rem">
                        <div class="card-header ">
                         <h4>イベントカテゴリ</h4>
                        </div>
                         <div class="card-body .d-sm-none .d-md-block">
                             {{-- <div class="btn-group" role="group">
                                <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                地域別イベント
                                </button>
                                <div class="dropdown-menu font-regu" aria-labelledby="btnGroupDrop1">
                                <a class="dropdown-item" href="#">北海道、東北</a>
                                <a class="dropdown-item" href="#">関東</a>
                                <a class="dropdown-item" href="#">中部</a>
                                <a class="dropdown-item" href="#">近畿</a>
                                <a class="dropdown-item" href="#">中国、四国</a>
                                <a class="dropdown-item" href="#">九州、沖縄</a>
                                </div>
                            </div> --}}

                            <div class="btn-group" role="group">
                                <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                イベントカテゴリ
                                </button>
                                <div class="dropdown-menu dropdown-menu" aria-labelledby="btnGroupDrop1">
                                <br>
                                <br>
                                <a href="{{ url('top') }}" class="card-text d-block text-under-none text-success"> <h4>全て表示</h4></a>
                                <br>
                                @foreach ($categories as $category)
                                    <a href="{{ route('categoryEvent', ['id'=>$category->id]) }}" class="card-text d-block text-under-none text-success"><h4>{{ $category->name}}</h4></a>
                                <br>
                               @endforeach
                                </div>
                            </div>

                            <a href="{{ url('top') }}" class="card-text d-block text-under-none text-success"> <h4>全て表示</h4></a>
                                <br>
                            {{-- <br>
                            <br>
                            <a href="{{ url('top') }}" class="card-text d-block text-under-none text-success"> <h4>全て表示</h4></a>
                            <br>
                             @foreach ($categories as $category)
                                  <a href="{{ route('categoryEvent', ['id'=>$category->id]) }}" class="card-text d-block text-under-none text-success"><h4>{{ $category->name}}</h4></a>
                            <br>
                            @endforeach --}}


                        </div>
                    </div>
@endsection
@section('content4')

@endsection
@section('content3')
{{-- {{ dd($event) }} --}}
{{-- {{ dd($images) }} --}}
{{-- {{ dd($school_name) }} --}}
<div class="card mb-3" style="">
  <div class="row g-0">
    <div class="col-md" style="width: 18rem;">

      <img src="{{ asset($school_name ->path) }}"  width="100%">
    </div>
    <div class="col-md">
      <div class="">
        <h3 class="card-title">＜イベントタイトル＞</h3>
        <p class="font-regu2">{{ $school_name->title }}</p>
        <ul class="font-regu ">
          <li>イベント日時：</li>
          <p>@isset($school_name->event_day)
            <span>{{ $school_name->event_day->format('Y/m/d') }}</span>
            @endisset</p>
          <li>対象年齢</li>
           <p>
          @isset($school_name->target_min_age)
            {{ $school_name->target_min_age }}歳
          @endisset
            <span>〜</span>
            @isset($school_name->target_max_age)
            {{ $school_name->target_max_age }}歳
          @endisset</>
          </p>
          <li>イベント運営会社</li>
          <p>{{ $school_name->school_name }}</p>

        </ul>

      </div>
    </div>
  </div>

  <div class="card-body font-regu">

    <h5 class="card-title">(イベント内容)</h5>
    <p class="card-text space-text">{{ $school_name->content }}</p>
  </div>
  <ul class="list-group list-group-flush font-regu">
    <li class="list-group-item">(イベントカテゴリ)<p>{{ $school_name->name }}</p></li>
    <li class="list-group-item">(主催者（スクール名）)<p>{{ $school_name->school_name }}</p></li>
    <li class="list-group-item">(スクールについて)
        <p>{{ $school_name->about }}</p>
        {{-- <p><a href="{{ $school_name->school_url }}">イベントの公式サイトへ</a></p></li> --}}
    <li class="list-group-item">(スクール住所)<p>{{ $school_name->school_address }}</p></li>

    <li class="list-group-item">(スクール連絡先)<p>{{ $school_name->school_tel }}</p></li>
  </ul>

</div>


@endsection
@section('form')
<div class="card">
    <div class="card-header">
                            <h4> <span class="fw-bold">イベント参加申し込み</span> フォーム</h4>
    </div>
    <div class="container font-regu">
 <form class="px-5 py-5" method="POST" action="{{ url('/upform') }}" enctype="multipart/form-data">
    @csrf
    {{-- {{ dd($school_name) }} --}}
    <input type="hidden" name="event_id"class="form-control" placeholder="フリガナ" aria-label="" value="{{ $school_name->event_id }}">

    <h2>イベント名：{{ $school_name->school_name }}</h2>

    <div class="row">
    <div class="col ">
        <label for="exampleInputEmail1" class="form-label">お名前</label>
        <div class="form-group">
            <input type="text" name="name"  class="form-control" placeholder="お名前" aria-label="">様
            @error('name')
            <div class="alert alert-danger">お名前のご記入をお願いします</div>
            @enderror
        </div>


    </div>
    <div class="col">
        <label for="exampleInputEmail1" class="form-label">フリガナ</label>
        <input type="text" name="kana"class="form-control" placeholder="フリガナ" aria-label="">
         @error('kana')
        <div class="alert alert-danger">フリガナのご記入をお願いします</div>
        @enderror
    </div>

    </div>

    <div class="row">

    <div class="col">
        <label for="exampleInputEmail1" class="form-label">ケータイもしくは電話番号</label>
        <input type="tel" name="tel" class="form-control" placeholder="電話番号" aria-label="">
        @error('tel')
        <div class="alert alert-danger">ケータイもしくは電話番号のご記入をお願いします</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">メールアドレス</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="メールアドレス">
        @error('email')
        <div class="alert alert-danger">メールアドレスのご記入をお願いします</div>
        @enderror
    </div>
    </div>


    <div class="mb-3 col-4">
        <label for="exampleInputEmail1" class="form-label">お子様年齢</label>
        <input type="number" name="kids_age" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="お子様の年齢">
        @error('kids_age')
        <div class="alert alert-danger">お子様年齢のご記入をお願いします</div>
        @enderror
    </div>
    <div class="col">
        <label for="exampleInputEmail1" class="form-label">コメント欄（ご要望、もしくはお子様が２名以上参加される場合、追加の人数と年齢をご記入ください）</label>
        <div class="form-floating">
    <textarea class="form-control" name="comment" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" placeholder="お子様の年齢"></textarea>
    <label for="floatingTextarea2"  ></label>
    </div>

    </div>

  <button type="submit"   class="btn btn-primary btn-lg">お申込みへ</button>
</form>
</div>
@endsection
