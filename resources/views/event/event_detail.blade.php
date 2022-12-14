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

                            {{-- <br>
                            <br>
                            <a href="{{ url('top') }}" class="card-text d-block text-under-none text-success"> <h4>全て表示</h4></a>
                            <br>
                             @foreach ($categories as $category)
                                  <a href="{{ route('categoryEvent', ['id'=>$category->id]) }}" class="card-text d-block text-under-none text-success"><h4>{{ $category->name}}</h4></a>

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
      <div class="px-3">
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
    <li class="list-group-item ">(スクールについて)
        <p>{{ $school_name->about }}</p>
        <p><a href="{{ $school_name->school_url }}">スクールの公式サイトへ(外部リンク)</a></p></li>
    <li class="list-group-item">(スクール住所)<p>{{ $school_name->school_address }}</p></li>

    <li class="list-group-item">(スクール連絡先)<p>{{ $school_name->school_tel }}</p></li>
  </ul>
  <div class="d-flex flex-row font-s bd-highlight">
    <div class="card-body col font-s">
    <button type="button"  onclick="location.href='{{ $school_name->event_url }}'" class="btn btn-primary btn-lg font-s">お申込みサイトへ</button>
  </div>
  <div class="card-body col">
    <button type="button" onclick="location.href='{{ $school_name->calendar_url }}'" class="btn btn-warning btn-lg font-s">カレンダーに同期</button>
  </div>
  <div class="card-body col">
    <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-size="large" data-url="{{ $school_name->event_url }}" data-text="キッズイベントの紹介です！タイトル：{{ $school_name->title }}" data-show-count="false">Tweet</a>
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
  </div>
  {{-- <div class="card-body col">
    <button type="button" onclick="location.href='{{ $school_name->outlookcalendar_url }}'" class="btn btn-success btn-lg font-s">Outlookに同期</button>
  </div> --}}
  </div>

</div>


@endsection
