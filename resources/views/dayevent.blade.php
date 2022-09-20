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
<form method="GET" action="{{ route('daySearch') }}">
    <div class="input-group">
  <span class="input-group-text" id="inputGroup-sizing-lg">日付</span>
  <input type="date" name="day" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" value="{{ isset($word) ? $word : '' }}">
    <button type="submit" class="btn btn-primary">search</button>
    </div>
</form>

<html>
<body>
    <div id='calendar'></div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
@endsection
@section('content3')
                <div class="card">
                        <div class="card-header">
                            {{-- {{ dd(strval($good_day)) }} --}}
                        <h4>{{ strval($good_day)}} イベント一覧 （{{ $count }}件あります）</h4>

                        </div>
                        <div class="row">
                           {{-- <div class="card-body"> --}}
                           {{-- {{ dd($event_days) }} --}}
                             @foreach ($event_days as $event_day)
                             <div class="card-body col-4 flex-fill bd-highlight">

                                {{-- カードを入れてみる --}}
                                <div class="card h-100" style="width: 18rem;">
                                <img class="card-img-top" src="{{ asset($event_day -> path) }}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $event_day->title }}</h5>
                                    <p>イベント日程：
                                    @isset($event_day->event_day)
                                    <span>{{ $event_day->event_day->format('Y/m/d') }}</span>
                                    @endisset
                                    </p>
                                    <p>イベント料金：{{ $event_day->price }}円</p>
                                    <p>対象年齢：{{ $event_day->target_min_age }}歳〜{{ $event_day->target_max_age }}歳</p>
                                    <p class="card-text">{{ $event_day->content_summary }}</p>
                                    <td><a href="{{ route('show', ['id'=>$event_day->id]) }}" class="btn btn-primary">詳細</a></td>
                                    {{-- <a href="/eventDetail/?event={{ $event->id }}" class="btn btn-primary">Go somewhere</a> --}}
                                </div>
                                </div>
                            </div>
                            @endforeach


                        {{-- </div> --}}
                        </div>

                    </div>
@endsection
