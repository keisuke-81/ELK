@extends('layouts/base')




@section('calendar')
<div class="card">
    <div class="card-header">
                            <h4> <span class="fw-bold">記入内容チェック</span> </h4>
    </div>
    <div class="container font-regu">
<form class="px-5 py-5">
    {{-- <h2>イベント名：{{ $school_name->school_name }}</h2> --}}

<div class="row">
<div class="col">
    <label for="exampleInputEmail1" class="form-label">お名前</label>
   <p></p>
  </div>
  <div class="col">
    <label for="exampleInputEmail1" class="form-label">フリガナ</label>
    <p></p>
  </div>

</div>

<div class="row">

   <div class="col">
    <label for="exampleInputEmail1" class="form-label">電話番号</label>
    <p></p>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">メールアドレス</label>
    <p></p>

  </div>
  </div>


  <div class="mb-3 col-4">
    <label for="exampleInputEmail1" class="form-label">お子様年齢</label>
    <p>歳</p>

  </div>
  <div class="col">
    <label for="exampleInputEmail1" class="form-label">コメント欄（お子様が２名以上参加される場合、追加の人数と年齢をご記入ください）</label>
    <div class="form-floating">
  <p></p>
  <label for="floatingTextarea2"  ></label>
</div>

  </div>
  {{-- <button type="button"  onclick="location.href='{{ $school_name->event_url }}'" class="btn btn-primary btn-lg">お申込みへ</button> --}}
</form>
</div>
@endsection
