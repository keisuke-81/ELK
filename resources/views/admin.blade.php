@extends('layouts.app', ['authgroup'=>'admin'])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">管理者 {{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as 管理者!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('memo')
<div class="row ">
    <div class="col-6">
        <div class="card mb-3 " style="">
        <div class="row g-0 ">
            <div class="col-md">
            <form method="POST" action="upload" enctype="multipart/form-data">
                @csrf
                <input type="file" name="image">
                <button>アップロード</button>
                </form>
                {{-- <img src="{{ asset('storage/sample/yubikiri_business.png
') }}"> --}}
            </div>

            <form method="POST" action="{{ route('store') }}" class="row g-3">
                 @csrf
                <div class="col-md-6">
            <div class="col-12"><h2>イベント情報入力</h2></div>

                <label for="inputEmail4" class="form-label">eventTitle</label>
                <input type="name" name="title" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-6">
                <label for="inputEmail4" class="form-label">eventDay</label>
                <input type="date" name="event_day" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">target_min_age</label>
                <input type="number" name="target_min_age" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">target_max_age</label>
                <input type="number" name="target_max_age" class="form-control" id="inputPassword4">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">school_name</label>
                <input type="number" name="school_id" class="form-control" id="inputAddress" placeholder="">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">image_id</label>
                <input type="number" name="image_id" class="form-control" id="inputAddress" placeholder="">
            </div>
            <div class="col-6">
                <label for="inputAddress2" class="form-label">area</label>
                <input type="text" name="area" class="form-control" id="inputAddress2" placeholder="都道府県">
            </div>
            <div class="col-6">
                <label for="inputAddress2" class="form-label">myEvent=1 , another=0</label>
                <input type="number" name="my_event" class="form-control" id="inputAddress2" value="0" placeholder="Apartment, studio, or floor">
            </div>
            <div class="col-6">
                <label for="inputAddress2" class="form-label">priceFree=1 , notFree=0</label>
                <input type="number" name="price_free" class="form-control" id="inputAddress2" value="0" placeholder="">
            </div>
            <div class="col-6">
                <label for="inputAddress2" class="form-label">price</label>
                <input type="number" name="price" class="form-control" id="inputAddress2" placeholder="">
            </div>
            <div class="col-6">
                <label for="inputAddress2" class="form-label">eventUrl</label>
                <input type="url" name="event_url" class="form-control" id="inputAddress2" placeholder="">
            </div>
            <div class="col-2">
                <label for="inputAddress2" class="form-label">calendarUrl_day</label>
                <input type="number" name="day" class="form-control" id="inputAddress2" placeholder="221014">
            </div>
            <div class="col-2">
                <label for="inputAddress2" class="form-label">calendarUrl_open</label>
                <input type="number" name="open" class="form-control" id="inputAddress2" placeholder="1600">
            </div>
            <div class="col-2">
                <label for="inputAddress2" class="form-label">calendarUrl_end</label>
                <input type="number" name="end" class="form-control" id="inputAddress2" placeholder="1700">
            </div>
            <div class="col-6">
                <label for="inputAddress2" class="form-label">status wait=0 deploy=1 end=2</label>
                <input type="text" name="status" class="form-control" id="inputAddress2" value="0" placeholder="">
            </div>
            <div class="col-12">
                <textarea id="body" name="content" rows="8" cols="40" placeholder="イベント内容"></textarea>

            </div>
            <div class="col-12">
                <textarea id="body"  name="content_summary" cols="100" rows="10" placeholder="イベント内容要約"></textarea>

            </div>



            <div class="col-12">

            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">データ送信</button>
            </div>
            </form>
              <form method="POST" action="{{ route('school') }}" class="row g-3 bg-info">
                 @csrf
                <div class="col-md-6 ">
            <div class="col-12"><h2>スクール情報</h2></div>

                <label for="inputEmail4" class="form-label">school_name</label>
                <input type="name" name="school_name" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-6">
                <label for="inputEmail4" class="form-label">school_url</label>
                <input type="url" name="school_url" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">school_address</label>
                <input type="text" name="school_address" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">school_tel</label>
                <input type="number" name="school_tel" class="form-control" id="inputPassword4">
            </div>

            <div class="col-12">
                <textarea name="about" id="" cols="100" rows="10" placeholder="about"></textarea>

            </div>




            <div class="col-12">

            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">データ送信</button>
            </div>
            </form>
             <form method="POST" action="{{ route('category') }}" class="row g-3 bg-warning">
                 @csrf
                <div class="col-md-6">
            <div class="col-12"><h2>カテゴリ名前</h2></div>

                <label for="inputEmail4" class="form-label">name</label>
                <input type="name" name="name" class="form-control" id="inputEmail4">
                </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">データ送信</button>
            </div>
            </form>
            <form method="POST" action="{{ route('eventCategory') }}" class="row g-3 bg-secondary">
                 @csrf
                <div class="col-md-6">
            <div class="col-12"><h2>イベントカテゴリ連結</h2></div>

                <label for="inputEmail4" class="form-label">event_id</label>
                <input type="number" name="event_id" class="form-control" id="inputEmail4">
                 <label for="inputEmail4" class="form-label">category_id</label>
                <input type="number" name="category_id" class="form-control" id="inputEmail4">
                </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">データ送信</button>
            </div>
            </form>
        </div>


</div>
    </div>
    <div class="col-6">
        <d class="card mb-3" style="">



    </d iv>
    </div>
</div>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
<script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script>
    $(document).ready(function(){
        var simplemde = new SimpleMDE({ element: document.getElementById("body") });
    });
</script>
</body>
</html>
@endsection
