@extends('top.top')


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
                            <a href="/top" class="card-text d-block text-under-none text-success"> <h4>全て表示</h4></a>
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


@endsection
