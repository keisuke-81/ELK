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
                            {{-- {{ dd($categories) }} --}}
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
                        <h4>
                            @isset($goodword)
                                    <span>{{ $goodword }}</span>
                            @endisset
                        イベント一覧</h4>

                        </div>
                        <div class="row">
                           {{-- <div class="card-body"> --}}
                           {{-- {{ dd($event_images) }} --}}
                             @foreach ($event_images as $event_image)
                             <div class="card-body col-4 flex-fill bd-highlight">

                                {{-- カードを入れてみる --}}
                                <div class="card h-100" style="width: 18rem;">
                                       {{-- {{ dd(asset($event_image -> path)) }} --}}
                                <img class="card-img-top" src="{{ asset($event_image -> path) }}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $event_image->title }}</h5>
                                    <p>スクール名：{{ $event_image->school_name}}</p>
                                    <p>イベント日程：
                                    @isset($event_image->event_day)
                                    <span>{{ $event_image->event_day->format('Y/m/d') }}</span>
                                    @endisset
                                    </p>
                                    <p>イベント料金：{{ $event_image->price }}円</p>
                                    <p>
                                        対象年齢：
                                        @isset($event_image->target_min_age)
                                        {{ $event_image->target_min_age }}歳
                                        @endisset
                                        <span>〜</span>
                                        @isset($event_image->target_max_age)
                                        {{ $event_image->target_max_age }}歳</p>
                                        @endisset
                                    <p class="card-text">{{ $event_image->content_summary }}</p>
                                    {{-- {{ dd($event_image->id) }} --}}
                                    <td><a href="{{ route('show', ['id'=>$event_image->id]) }}" class="btn btn-primary">詳細</a></td>
                                    {{-- <a href="/eventDetail/?event={{ $event->id }}" class="btn btn-primary">Go somewhere</a> --}}
                                </div>
                                </div>
                            </div>
                            @endforeach


                        {{-- </div> --}}
                        </div>

                    </div>
@endsection
