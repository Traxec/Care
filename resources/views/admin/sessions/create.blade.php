<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>会员中心 - 三代CRM</title>

    @include('admin.layouts._css')

  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            @include('admin.shared._messages')
            @include('admin.shared._error')
            <form action="{{route('admin.login')}}" method="POST">
              {{ csrf_field() }}
              <h1>Login Form</h1>
              <div>
                <input type="text" name="username"  class="form-control" placeholder="Username" required="" value="{{ old('username') }}"/>
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required="" value={{ old('password') }} />
              </div>
              <div>
                <button type="submit" class="btn btn-default submit" >Log in</button>
                <button type="reset" class="btn btn-default submit" >reset </button>
                {{-- <a class="reset_pass" href="#">Lost your password?</a> --}}
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                {{-- <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p> --}}

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
