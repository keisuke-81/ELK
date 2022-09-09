@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-6">
        <div class="card mb-3" style="">
        <div class="row g-0">
            <div class="col-md">
            <form method="POST" action="/upload" enctype="multipart/form-data">
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
            <div class="col-6">
                <label for="inputAddress2" class="form-label">status wait=0 deploy=1 end=2</label>
                <input type="text" name="status" class="form-control" id="inputAddress2" value="0" placeholder="">
            </div>
            <div class="col-12">
                <textarea name="content" id="" cols="100" rows="10" placeholder="イベント内容"></textarea>

            </div>
            <div class="col-12">
                <textarea name="content_summary" id="" cols="100" rows="10" placeholder="イベント内容要約"></textarea>

            </div>



            <div class="col-12">

            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">データ送信</button>
            </div>
            </form>
        </div>


</div>
    </div>
    <div class="col-6">
        <div class="card mb-3" style="">
        <div class="row g-0">
            <div class="col-md">
            {{-- <img src="{{ asset('storage/sample/event2.png') }}"> --}}
            </div>
            <div class="col-md">
            <div class="">
                <h3 class="card-title">＜イベントタイトル＞</h3>
                <p class="font-regu2">みんなでお絵描き</p>
                <ul class="font-regu ">
                <li>イベント日時：</li>
                <p>2022/10/10</p>
                <li>対象年齢</li>
                <p>6歳〜</p>
                <li>イベント運営会社</li>
                <p>キッズクラブ</p>
                <li>無料</li>
                </ul>

            </div>
            </div>
  </div>

  <div class="card-body font-regu">
    <h5 class="card-title">(イベント内容)</h5>
    <p class="card-text">思いっきり絵の具！
プチ工作、楽器、親子で体遊び、絵本　etc.

年齢や月齢ごとに変化する、子どものキラッと光る「旬の成長」を見つけるアートワークです。
20年の歴史を持つ「赤ちゃんアート」スタッフが、それぞれのお子さんの成長にあう関わり方やアート表現をサポート。</p>
  </div>
  <ul class="list-group list-group-flush font-regu">
    <li class="list-group-item">(イベントカテゴリ)<p>アート・家族で一緒に</p></li>

    <li class="list-group-item">(スクールについて) <p><a href="https://www.art-friendship.org/">イベントの公式サイトへ</a>(外部リンク)</p></li>
    <li class="list-group-item">(スクール住所)<p>神奈川県茅ヶ崎市東海岸北1-4-45茅ヶ崎市美術館　2Fアトリエ室</p></li>
    {{-- <li class="list-group-item"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13020.747285214595!2d139.406301!3d35.326182!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfa5816e966e0d23c!2zMzXCsDE5JzM0LjMiTiAxMznCsDI0JzIyLjciRQ!5e0!3m2!1sja!2sus!4v1662596001698!5m2!1sja!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></li> --}}
    <li class="list-group-item">(スクール連絡先)<p></p></li>
  </ul>
  <div class="card-body">
    <button type="button" onclick="location.href='https://www.art-friendship.org/%E5%BD%93%E4%BC%9A%E3%81%AB%E3%81%A4%E3%81%84%E3%81%A6/%E3%81%8A%E5%95%8F%E3%81%84%E5%90%88%E3%82%8F%E3%81%9B%E3%83%95%E3%82%A9%E3%83%BC%E3%83%A0/'" class="btn btn-primary btn-lg">お申込みへ(外部リンク)</button>
  </div>
</div>
    </div>
</div>
</body>
</html>
@endsection


