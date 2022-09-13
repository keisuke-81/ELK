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
    <div class="container">
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
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="text" class="form-control" placeholder="お名前" aria-label="">
  </div>
  <div class="col">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="text" class="form-control" placeholder="フリガナ" aria-label="">
  </div>

</div>
<div class="col">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="text" class="form-control" placeholder="ご住所" aria-label="">
  </div>
  <p>郵便番号：<input id="zip"  type="text" name="zip" size="7">例：1020072（半角数字）</p>
    <button class="api-address" type="button">住所を自動入力</button>
    <p>住所：<input id="address" type="text" name="address" size="30"></p>
<div class="row">

   <div class="col">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="text" class="form-control" placeholder="電話番号" aria-label="">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="メールアドレス">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  </div>


  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="メールアドレス">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="col">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="text" class="form-control" placeholder="電話番号" aria-label="">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection

