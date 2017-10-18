<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }} -  后台管理</title>

    @include('admin.layouts._css')

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>{{ config('app.name') }}</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{asset('bootcss/admin/local/images/img.jpg')}}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{ Auth::guard('admin')->user()->name }}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />
            @include('admin.layouts._sidebar')
            @include('admin.layouts._footer')
          </div>
        </div>

        @include('admin.layouts._top_navigation')
        @include('admin.layouts._content')
        @include('admin.layouts._footer_content')

      </div>
    </div>

    @include('admin.layouts._js')

  </body>
</html>
