@extends('layouts/top')


@section('category')
 <div class="card">
                        <div class="card-header ">
                         <h4>イベントカテゴリ</h4>
                        </div>
                        <div class="card-body">
                             <div class="btn-group" role="group">
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
                            </div>


                            <br>
                            <br>
                            <a href="{{ url('top') }}" class="card-text d-block text-under-none text-success"> <h4>全て表示</h4></a>
                            <br>
                             {{-- @foreach ($tags as $tag)
                            <a href="/top/?tag_abe={{ $tag['id'] }}" class="card-text d-block text-under-none text-success"><h4>{{ $tag['name'] }}</h4></a>
                            <br>
                            @endforeach --}}


                        </div>
                    </div>
@endsection
@section('content4')
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            {{-- <img src="{{ asset('storage/sample/event3.png') }}"> --}}
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
            </div>
            <div class="carousel-item">
            {{-- <img src="{{ asset('storage/sample/event2.png') }}"> --}}
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
            </div>
            <div class="carousel-item">
            {{-- <img src="{{ asset('storage/sample/yamituki.png') }}"> --}}
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
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
          <p>{{ $school_name->target_min_age }}歳〜{{ $school_name->target_max_age }}歳</p>
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
        <p><a href="{{ $school_name->school_url }}">イベントの公式サイトへ(外部リンク)</a></p></li>
    <li class="list-group-item">(スクール住所)<p>{{ $school_name->school_address }}</p></li>

    <li class="list-group-item">(スクール連絡先)<p>{{ $school_name->school_tel }}</p></li>
  </ul>
  <div class="card-body">
    <button type="button" onclick="location.href='{{ $school_name->event_url }}'" class="btn btn-primary btn-lg">お申込みへ(外部リンク)</button>
  </div>
</div>


@endsection
