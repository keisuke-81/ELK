@extends('layouts.top')


@section('category')
<div class="card" style="padding-top: 3rem">
                        <div class="card-header ">
                         <h4>イベントカテゴリ</h4>
                        </div>
                         <div class="card-body .d-sm-none .d-md-block">
                             {{-- <div class="btn-group" role="group">
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
                            </div> --}}

                            <div class="btn-group" role="group">
                                <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                イベントカテゴリ
                                </button>
                                <div class="dropdown-menu dropdown-menu" aria-labelledby="btnGroupDrop1">
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

                            <a href="{{ url('top') }}" class="card-text d-block text-under-none text-success"> <h4>全て表示</h4></a>
                            
                            {{-- <br>
                            <br>
                            <a href="{{ url('top') }}" class="card-text d-block text-under-none text-success"> <h4>全て表示</h4></a>
                            <br>
                             @foreach ($categories as $category)
                                  <a href="{{ route('categoryEvent', ['id'=>$category->id]) }}" class="card-text d-block text-under-none text-success"><h4>{{ $category->name}}</h4></a>

                            @endforeach --}}


                        </div>
                    </div>
@endsection
@section('content4')

@endsection


@section('content3')
                <div class="card">
                        <div class="card-header">
                        <h4>
                            @isset($goodword)
                                    <span>{{ $goodword }}</span>
                            @endisset
                        イベント一覧</h4>

                        </div>
                        <div class="row">
                           {{-- <div class="card-body"> --}}
                           {{-- {{ dd($event_images) }} --}}
                             @foreach ($events as $event)
                             <div class="card-body col-lg-4 col-sm-5 lg-flex-fill lg-bd-highlight ">

                                {{-- カードを入れてみる --}}
                                <div class="card h-100  center_item" style="width: 18rem;">
                                <img class="card-img-top" src="{{ asset($event -> path) }}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $event->title }}</h5>
                                    <p>スクール名：{{ $event->school_name}}</p>
                                    <p>イベント日程：
                                    @isset($event->event_day)
                                    <span>{{ $event->event_day->format('Y/m/d') }}</span>
                                    @endisset
                                    </p>
                                    <p>イベント料金：{{ $event->price }}円</p>
                                    <p>
                                        対象年齢：
                                        @isset($event->target_min_age)
                                        {{ $event->target_min_age }}歳
                                        @endisset
                                        <span>〜</span>
                                        @isset($event->target_max_age)
                                        {{ $event->target_max_age }}歳</p>
                                        @endisset
                                    <p class="card-text">{{ $event->content_summary }}</p>
                                    {{-- {{ dd($event_image->id) }} --}}
                                    <td><a href="{{ route('show', ['id'=>$event->id]) }}" class="btn btn-primary">詳細</a></td>
                                    {{-- <a href="/eventDetail/?event={{ $event->id }}" class="btn btn-primary">Go somewhere</a> --}}
                                </div>
                                </div>
                            </div>
                            @endforeach


                        {{-- </div> --}}
                        </div>

                    </div>
@endsection
