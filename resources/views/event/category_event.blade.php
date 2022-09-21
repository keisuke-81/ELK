@extends('layouts.top')

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
                            <a href="{{ url('top') }}" class="card-text d-block text-under-none text-success"> <h4>全て表示</h4></a>
                            <br>
                             @foreach ($categories as $category)
                                  <a href="{{ route('categoryEvent', ['id'=>$category->id]) }}" class="card-text d-block text-under-none text-success"><h4>{{ $category->name}}</h4></a>
                            <br>
                            @endforeach


                        </div>
                    </div>
@endsection
@section('content4')

@endsection


@section('content3')
                <div class="card">
                        <div class="card-header">
                           {{-- {{ dd($categories_name) }} --}}
                        <h4>{{ $categories_name->name  }}イベント一覧</h4>

                        </div>
                        <div class="row">
                           {{-- <div class="card-body"> --}}
                             @foreach ($vents as $vent)
                             {{-- {{ dd($vent) }} --}}
                             {{-- {{ dd($event_category) }} --}}
                             <div class="card-body col-4 flex-fill bd-highlight">
                                {{-- カードを入れてみる --}}
                               <div class="card h-100" style="width: 18rem;">
                                <img class="card-img-top" src="{{ asset($vent -> path) }}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $vent->title }}</h5>
                                    <p>イベント日程：
                                    @isset($vent->event_day)
                                    <span>{{ $vent->event_day->format('Y/m/d') }}</span>
                                    @endisset
                                    </p>
                                    <p>イベント料金：{{ $vent->price }}円</p>
                                    <p>対象年齢：{{ $vent->target_min_age }}歳〜{{ $vent->target_max_age }}歳</p>
                                    <p class="card-text">{{ $vent->content_summary }}</p>
                                    <td><a href="{{ route('show', ['id'=>$vent->id]) }}" class="btn btn-primary">詳細</a></td>
                                    {{-- <a href="/eventDetail/?event={{ $event->id }}" class="btn btn-primary">Go somewhere</a> --}}
                                </div>
                                </div>
                            </div>
                            @endforeach


                        {{-- </div> --}}
                        </div>

                    </div>
@endsection
