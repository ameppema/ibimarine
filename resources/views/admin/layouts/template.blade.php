<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="{{asset('css/output.css')}}">
  <script src="https://kit.fontawesome.com/5d3ac5fca1.js" crossorigin="anonymous"></script>
  <title>IBIMARINE - @yield('title')</title>
</head>

<body>
<div class="content-max mx-auto flex">

  @include('admin.layouts.aside')

  @yield('content')

</div>
</body>

</html>