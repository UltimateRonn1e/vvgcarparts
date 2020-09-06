<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="/vvg/public/favicon.ico" type="image/png">
  <title>@yield('title-block')</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  @yield('scripts')
  <link rel="stylesheet" href="/vvg/public/css/app.css">
</head>

<body>
  @include('inc.header')
  <div class="container-fluid">
    <div class="row">
      @yield('content')
    </div>
  </div>
  @include('inc.footer')
</body>
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="/vvg/public/js/app.js"></script>
<script type="text/javascript" src="/vvg/public/js/main.js"></script>
</body>

</html>
