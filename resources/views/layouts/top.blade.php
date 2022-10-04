<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
{{-- ファビコン設定------------ --}}
    <link rel="icon" href="favicon.ico">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    @yield('javascript')
    {{-- <script src="/js/confirm.js"></script> --}}
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/earlyaccess/nicomoji.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ribeye+Marrow&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&family=Mochiy+Pop+P+One&family=Ribeye+Marrow&family=Yusei+Magic&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

<style>

  /* カレンダーのヘッダースタイル(年月がある部分) */
  .fc-header-toolbar {

    padding-top: 1em;


    padding-left: 1em;


    padding-right: 1em;

  }
  .fc-title{
    font-size: .1.5rem;
}


</style>
</head>
<body style="padding-top: 5rem">

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm fixed-top">

            <div class="container">
                <a class="navbar-brand" href="{{ url('/top') }}">
                    <div class="row">
                        <h1 class=" display-1 text-success top-title3">{{ config('app.name', 'Laravel') }}    <span class="display-5 text-warning">e-learning</span><span class="display-5">!</span><span class="display-5 text-warning"> kids</span></h1>
                         {{-- <h1 class=" display-1 text-primary top-title1">夢<span class="display-1 top-title2">mid</span><span class="display-1 top-title1">!</span></h1> --}}

                    </div>

                </a>
                {{-- <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button> --}}

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->


                    <!-- Right Side Of Navbar -->

                </div>
                <div class=" lg-w-50 pe-3">
                    <form method="GET" action="{{ route('search') }}">
                        <div class="input-group input-group-lg">
                            <span class="input-group-text" id="inputGroup-sizing-lg">検索</span>
                            <input class="form-control bg-white form-select-lg" name="word" list="datalistOptions" id="exampleDataList" placeholder="" value="{{ isset($word) ? $word : '' }}" >
                            <datalist id="datalistOptions">
                            <option value="スポーツ">
                            <option value="英語">
                            <option value="科学">
                            </datalist>
                            <button type="submit" class="btn btn-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                </svg>
                            </button>
                        </div>
                    </form>



                </div>

        </nav>
        </div>

        <main>
            <div class="container j-font">
            <div class="row">
             <div class="col-md-2 p-0">

                    @yield('category')

                </div>
            <div class="col-md-10 p-0">

                <div class="card">
                        <div class="card-header">
                            <h4> <span class="fw-bold">E.L.K</span> トピック</h4>

                        </div>

                        <div class="card-body row flex-fill ">
                        {{-- <div class="btn-group-vertical  col-3 "> --}}
                        <button type="button" onclick="location.href='{{  url('calendar') }}'" class="col-3 btn btn-warning sm-font-regu">イベント<br>カレンダー</button>
                        <button type="button" onclick="location.href='{{  url('elkevent') }}'" class="col-3 btn btn-success sm-font-regu">E.L.Kの<br>イベント</button>
                        <button type="button" onclick="location.href='{{  url('free') }}'" class="col-3 btn btn-outline-primary sm-font-regu">無料<br>イベント</button>
                        <button type="button" onclick="location.href='{{  url('paid') }}'" class="col-3 btn btn-outline-primary sm-font-regu">有料<br>イベント</button>
                        {{-- <a href="{{ url('elkevent') }}" class="btn btn-outline-primary " tabindex="-1" role="button" aria-disabled="true"><h4>E.L.Kのイベント</h4></a>
                        <a href="{{ url('calendar') }}" class="btn btn-outline-primary  " tabindex="-1" role="button" aria-disabled="true"><h4>イベントカレンダー</h4></a>
                        <a href="{{ url('free') }}" class="btn btn-outline-primary " tabindex="-1" role="button" aria-disabled="true"><h4>無料イベント</h4></a>
                        <a href="{{ url('paid') }}" class="btn btn-outline-primary " tabindex="-1" role="button" aria-disabled="true"><h4>有料イベント</h4></a> --}}

                        {{-- </div> --}}

                    <div class="col-lg-9">

                    @yield('content4')
                    </div>

                    </div>

                </div>

                    @yield('content3')
                    @yield('form')
            </div>
            {{-- <div class="d-flex justify-content-center ">
        {{ $articles->links() }}
  </div> --}}

        </div>

        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
