@extends('layouts.app')
    @section('content')
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

      <div class="carousel-caption weather">
        @include('home.shared._weather')
      </div>

      <div class="carousel-caption">
        @include('home.statics._love_time')
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
    <div id="xc" class="container-fills" style="height:0px;">
      @include('home.statics.3D')
    </div>
    <div id="i_kj_z" class="container-fills">
      @include('home.shared._kuaiji')
    </div>
  @show
