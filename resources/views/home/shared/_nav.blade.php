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
                {{-- <li><a href="{{ route('3D') }}">3D相册</a></li> --}}
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
