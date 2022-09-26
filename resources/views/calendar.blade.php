@extends('layouts/top')
@section('category')
 <div class="card" style="padding-top: 3rem">
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
    <div class="input-group mt-3 ">
  <span class="input-group-text" id="inputGroup-sizing-lg">日付</span>
  <input type="date" name="day" class="form-control " aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" value="{{ isset($word) ? $word : '' }}">
    <button type="submit" class="btn btn-primary">serch</button>
    </div>
</form>

<html>
<body>
<style>

  /* カレンダーのヘッダースタイル(年月がある部分) */

  .fc-title{
    font-size: .1.5rem;
}


</style>
    <div id='calendar' class="fc-title"></div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
@endsection

