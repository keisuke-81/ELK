@extends('event.event_detail')

@section('category1')
<div class="card">
                        <div class="card-header ">
                         <h4>イベントカテゴリ</h4>
                        </div>
                        <div class="card-body">
                           <div class="btn-group" role="group">
                            <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            地域はどこですか？
                            </button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                            <a class="dropdown-item" href="#">鹿児島</a>
                            <a class="dropdown-item" href="#">Dropdown link</a>
                            </div>
                            </div>


                            <br>
                            <br>
                            <a href="/top" class="card-text d-block text-under-none text-success"> <h4>全て表示</h4></a>
                            <br>
                             @foreach ($tags as $tag)
                            <a href="/top/?tag_abe={{ $tag['id'] }}" class="card-text d-block text-under-none text-success"><h4>{{ $tag['name'] }}</h4></a>
                            <br>
                            @endforeach


                        </div>
                    </div>
@endsection
