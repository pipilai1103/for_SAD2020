<!DOCTYPE html>
<html lang="zh-TW">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>@yield('title')</title>
  <!-- Bootstrap core CSS -->
  <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
  <!-- Custom styles for backend -->
  <link href="{{ asset('css/backend.css') }}" rel="stylesheet">
  <script src="{{ asset('tinymce/tinymce.min.js') }}"></script>
  <script>
    tinymce.init({ selector:'textarea' });
  </script>
</head>
<body>
  @include('backend.layouts.navbar') @yield('content')
  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>