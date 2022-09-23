@extends('layouts/base')




@section('calendar')
<div class="card">
    <div class="card-header">
                            <h4> <span class="fw-bold">記入内容チェック</span> </h4>
    </div>
    <div class="container font-regu">
<form class="px-5 py-5" method="POST" action="{{ url('/thanks') }}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="event_id"class="form-control" placeholder="フリガナ" aria-label="" value="{{ $event['event_id']}}">
    {{-- <h2>イベント名：{{ $school_name->school_name }}</h2> --}}
{{-- {{ dd($event); }} --}}
<div class="row">
<div class="col">
    <label for="exampleInputEmail1" class="form-label">お名前</label>
   <input type="text" name="name"  class="form-control" placeholder="お名前" aria-label="" value="{{ $event['name' ]}}" readonly>
  </div>
  <div class="col">
    <label for="exampleInputEmail1" class="form-label">フリガナ</label>
    <input type="text" name="kana"class="form-control" placeholder="フリガナ" aria-label="" value="{{ $event['kana'] }}" readonly>
  </div>

</div>

<div class="row">

   <div class="col">
    <label for="exampleInputEmail1" class="form-label">ケータイもしくは電話番号</label>
    <input type="number" name="tel" class="form-control" placeholder="電話番号" aria-label="" value="{{ $event ['tel' ]}}" readonly>

  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">e-mailアドレス</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="メールアドレス" value="{{ $event ['email'] }}" readonly>

  </div>
  </div>


  <div class="mb-3 col-4">
    <label for="exampleInputEmail1" class="form-label">お子様の年齢</label>
    <input type="number" name="kids_age" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="お子様の年齢" value="{{ $event ['kids_age'] }}" readonly>

  </div>
  <div class="col">
    <label for="exampleInputEmail1" class="form-label">コメント欄（ご要望、もしくはお子様が２名以上参加される場合、追加の人数と年齢をご記入ください）</label>
    <div class="form-floating">
<textarea class="form-control" name="comment" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" placeholder="お子様の年齢" value="{{ $event [ 'comment'] }}" readonly>{{ $event [ 'comment'] }}</textarea>

</div>

  </div>
   <button type="button"   class="btn btn-warning btn-lg" onClick="history.back()">前の画面へ戻る</button>
  <button type="submit"   class="btn btn-primary btn-lg">お申込み確定</button>
</form>
</div>
@endsection
