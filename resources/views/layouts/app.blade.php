<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags always come first -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>{{config('app.name')}}</title>
  <link rel="icon" href="{{asset('./favicon.ico')}}">
</head>
@include('home.shared._css')
<body>
  <div class="container-fulid">
    {{-- 导航栏 --}}
    @include('home.shared._nav')

    @section('content')
      {{-- ... --}}
    @show
    {{-- 页尾 --}}
    @include('home.shared._footer')
  </div>
  @include('home.shared._js')
</body>
</html>
