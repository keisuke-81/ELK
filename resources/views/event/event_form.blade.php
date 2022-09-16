@extends('layouts.base')

{{-- @section('category')
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





                        </div>
                    </div>
@endsection --}}
@yield('content4')
@section('form')
<div class="card">
    <div class="card-header">
                            <h4> <span class="fw-bold">イベント参加申し込み</span> フォーム</h4>
    </div>
    <div class="container font-regu">
<form class="px-5 py-5">
    <label for="exampleInputEmail1" class="form-label">参加するイベントを選んでください！</label>
<select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">

  <option selected>イベント選択</option>
  <option value="9/30(日)　英語で遊ぼう！">9/30(日)　英語で遊ぼう！</option>
  <option value="9/30(日)　ズームで遊ぼう！">9/30(日)　ズームで遊ぼう！</option>
  <option value="9/30(日)　ズームで学ぼう！">9/30(日)　ズームで学ぼう！</option>
</select>
<div class="row">
<div class="col">
    <label for="exampleInputEmail1" class="form-label">お名前</label>
    <input type="text" class="form-control" placeholder="お名前" aria-label="">
  </div>
  <div class="col">
    <label for="exampleInputEmail1" class="form-label">フリガナ</label>
    <input type="text" class="form-control" placeholder="フリガナ" aria-label="">
  </div>

</div>

<div class="row">

   <div class="col">
    <label for="exampleInputEmail1" class="form-label">電話番号</label>
    <input type="number" class="form-control" placeholder="電話番号" aria-label="">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">メールアドレス</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="メールアドレス">

  </div>
  </div>


  <div class="mb-3 col-4">
    <label for="exampleInputEmail1" class="form-label">お子様年齢</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="お子様の年齢">

  </div>
  <div class="col">
    <label for="exampleInputEmail1" class="form-label">コメント欄（お子様が２名以上参加される場合、追加の人数と年齢をご記入ください）</label>
    <div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" placeholder="お子様の年齢"></textarea>
  <label for="floatingTextarea2"  ></label>
</div>

  </div>
  <button type="button" onclick="location.href='{{ $school_name->event_url }}'" class="btn btn-primary btn-lg">お申込みへ</button>
</form>
</div>
@endsection

