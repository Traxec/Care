<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags always come first -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{asset('./bootcss/home/css/bootstrap.min.css')}}">
  <link rel="icon" href="{{asset('./favicon.ico')}}">
</head>

<body>
  <div class="container-fulid">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <div class="carousel-caption">
        {{-- 导航栏 --}}
        <nav class="navbar navbar-light navbar-fixed-top">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Brand</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
              </ul>
              <form class="navbar-form navbar-left">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
              </form>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>      {{-- <nav class="navbar navbar-light navbar-fixed-top">

          <div class="nav pull-left">
          <img src="{{asset('./bootcss/home/images/logo.jpg')}}" alt="care">
        </div>
        <ul class="nav nav-pills pull-right">
        <li class="nav-item"><a class="nav-link" style="" href="{{ route('login') }}" role="tab" data-toggle="tab">Login</a></li>
        <li class="nav-item"><a class="nav-link" style="" href="{{ route('register') }}" role="tab" data-toggle="tab">Register</a></li>
      </ul>
    </nav> --}}

  </div>
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="{{asset('./bootcss/home/images/1.jpg')}}" alt="...">
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
</div>  </div>
<script src="{{asset('./bootcss/home/js/jquery.min.js')}}"></script>
<script src="{{asset('./bootcss/home/js/popper.min.js')}}"></script>
<script src="{{asset('./bootcss/home/js/bootstrap.min.js')}}"></script>
<script type="text/javascript">
$('.carousel').carousel({
  interval: 2000,
})
$(document).ready(function() {
  $(window).scroll(function() {
    if ($(document).scrollTop()<=0){
      $('nav').removeClass('navbar-inverse')
      $('nav').addClass('navbar-light')
    }else{
      $('nav').removeClass('navbar-light')
      $('nav').addClass('navbar-inverse')
    }
  });
});
</script>

</body>

</html>
