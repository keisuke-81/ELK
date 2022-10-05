@extends('layouts/base')




@section('calendar')
<div class="card">
    <div class="card-header">
                            <h4> <span class="fw-bold">お申込み完了</span> </h4>
    </div>
    <div class="container font-regu">
<h2>お申込みありがとうございます。</h2>
<p>決済完了後に登録完了とさせていただいきます。</p>
{{-- {{ dd($pay_url -> outlookcalendar_url) }} --}}
<button type="button"   class="btn btn-warning btn-lg" onClick="location.href='{{ $pay_url -> outlookcalendar_url }}'">決済画面へ</button>
<div></div>
</div>
@endsection
