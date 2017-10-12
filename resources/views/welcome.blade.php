<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    </head>
    <body>
          <header class="navbar navbar-fixed-top navbar-inverse">
            <div class="container">
              <div class="col-md-offset-1 col-md-10">
                <a href="{{route('welcome')}}" id="logo">Care</a>
                <nav>
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"></a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </header>

    </body>
</html>
