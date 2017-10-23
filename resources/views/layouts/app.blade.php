<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags always come first -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>{{config('app.name')}}</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{asset('./bootcss/home/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('./bootcss/home/css/app.css')}}">
  <link rel="icon" href="{{asset('./favicon.ico')}}">

</head>

<body>
  <div class="container-fulid">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

      <div class="carousel-caption weather">
        @include('home.shared._weather')
      </div>
      <div class="carousel-caption">
        {{-- 导航栏 --}}
        <nav id="nav" class="navbar navbar-light navbar-fixed-top">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <a class="navbar-brand" href="{{route('welcome')}}"><img src="{{asset('./bootcss/home/images/Care.png')}}" alt=""></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ route('login') }}">登录</a></li>
                <li><a href="{{ route('register') }}">注册</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right col-md-4">
                <li><a href="{{ route('3D') }}">3D相册</a></li>
                <li><a href="{{ route('register') }}">音乐推荐</a></li>
                <li><a href="{{ route('login') }}">会计学习</a></li>
                <li><a href="{{ route('AL') }}">我们的爱</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
        <nav class="navbar navbar-light navbar-fixed-bottom">
          {{-- @include('home.shared._music') --}}
        </nav>
      </div>
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        <li data-target="#carousel-example-generic" data-slide-to="4"></li>
        <li data-target="#carousel-example-generic" data-slide-to="5"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="{{asset('./bootcss/home/images/1.jpg')}}" alt="..." height="200">
          <div class="carousel-caption">
          </div>
        </div>
        <div class="item">
          <img src="{{asset('./bootcss/home/images/2.jpg')}}" alt="...">
          <div class="carousel-caption">
          </div>
        </div>
        <div class="item">
          <img src="{{asset('./bootcss/home/images/3.jpg')}}" alt="...">
          <div class="carousel-caption">
          </div>
        </div>
        <div class="item">
          <img src="{{asset('./bootcss/home/images/4.jpg')}}" alt="...">
          <div class="carousel-caption">
          </div>
        </div>
        <div class="item">
          <img src="{{asset('./bootcss/home/images/5.jpg')}}" alt="...">
          <div class="carousel-caption">
          </div>
        </div>
        <div class="item">
          <img src="{{asset('./bootcss/home/images/6.jpg')}}" alt="...">
          <div class="carousel-caption">
          </div>
        </div>
      </div>
      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    {{-- 轮播结束 --}}
    <div id="xc" class="container-fills">
      @include('home.statics.3D')
    </div>
    <div id="i_kj_z" class="container-fills">
      @include('home.shared._kuaiji')
    </div>
  </div>
  <script src="{{asset('./bootcss/home/js/jquery.min.js')}}"></script>
  <script src="{{asset('./bootcss/home/js/popper.min.js')}}"></script>
  <script src="{{asset('./bootcss/home/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('./bootcss/home/js/app.js')}}"></script>
  {{-- <audio id="bgmMusic" src="{{asset('./bootcss/home/AI/lovebgm.mp3')}}" autoplay="autoplay" loop="loop" preload="auto" type="{{asset('./bootcss/home/AI/audio/mp3')}}"></audio> --}}
  {{-- <script src="jquery.min.js" tppabs="http://libs.baidu.com/jquery/1.8.3/jquery.min.js"></script> --}}
  <script src="{{asset('./bootcss/home/AI/all.min.js')}}" ></script>
  <script src="{{asset('./bootcss/home/AI/love.min.js')}}" ></script>

</body>

</html>
