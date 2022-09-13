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
    <script src="/js/confirm.js"></script>
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
    <!--==============レイアウトを制御する独自のCSSを読み込み===============-->
    <link rel="stylesheet" type="text/css" href="http://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/move02/5-10/css/reset.css">
    <link rel="stylesheet" type="text/css" href="http://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/move02/5-10/css/5-10.css">

</head>
<body>
 <canvas id="waveCanvas"></canvas>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm">

            <div class="container">
                <a class="navbar-brand" href="{{ url('/top') }}">
                    <div class="row">
                        <h1 class=" display-1 text-success top-title">{{ config('app.name', 'Laravel') }}    <span class="display-5 text-warning">e-learning</span><span class="display-5">!</span><span class="display-5 text-warning"> kids</span></h1>


                    </div>

                </a>
                <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->


                    <!-- Right Side Of Navbar -->

                </div>

        </nav>
        </div>

        <main>
            <div class="container j-font">
            <div class="row">
             <div class="col-md-12 p-0">

                    @yield('form')
                </div>

        </div>

        </main>
    </div>
    <script src="http://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/move02/5-10/js/5-10.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
