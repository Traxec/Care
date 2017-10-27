        <nav id="nav" class="navbar navbar-light navbar-fixed-top">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <a class="navbar-brand" href="{{route('welcome')}}"><img src="{{asset('./bootcss/home/images/Care.png')}}" alt=""></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
              @guest
                <li><a href="{{ route('login') }}">登录</a></li>
                <li><a href="{{ route('register') }}">注册</a></li>
              @else
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <ul class="dropdown-menu" role="menu">
                    <li>
                      <a href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                      退出
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                    </form>
                  </li>
                </ul>
              </li>
              @endguest
              </ul>
              @auth
              <ul class="nav navbar-nav navbar-right col-md-4">
                {{-- <li><a href="{{ route('3D') }}">3D相册</a></li> --}}
                {{-- <li><a href="{{ route('register') }}">音乐推荐</a></li> --}}
                {{-- <li><a href="{{ route('login') }}">会计学习</a></li> --}}
                <li><a href="{{ route('AL') }}">我们的爱</a></li>
              </ul>
              @endauth
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
        <nav style="margin-top:15px;margin-right:30px;" class="navbar navbar-light navbar-fixed-top">
          <ul class="navbar-right" style="list-style-type:none">
            <li role="presentation" class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <i class="glyphicon glyphicon-music"></i>
              </a>
              <ul class="dropdown-menu">
                @include('home.shared._music')
              </ul>
            </li>
          </ul>
        </nav>
