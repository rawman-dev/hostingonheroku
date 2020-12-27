<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design for Bootstrap</title>
 
  <!-- MDB icon -->
  <link rel="icon" href="{{ asset('files/img/mdb-favicon.ico') }}" type="image/x-icon">
 
  <!-- Bootstrap core CSS -->
 <link rel="stylesheet" href="{{ asset('files/css/bootstrap.min.css') }}"/>
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="{{ asset('files/css/mdb.min.css') }}"/>
  <!-- Your custom styles (optional) -->
  <!--<link rel="stylesheet" href="{{ asset('\public\files\css\style.css') }}">-->
  
  <!-- Custom styles -->
  <style>
    .icon-color {
      background-color:#94536d !important;
    }
    body{
      background-color: white;
    }
    
  </style>
</head>
<body>

   @include('layouts.menu')
   @yield('content')
   @include('layouts.footer')

  <!-- jQuery -->
  <script type="text/javascript" src="{{ asset('files/js/jquery.min.js') }}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{ asset('files/js/popper.min.js') }}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{ asset('files/js/bootstrap.min.js') }}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{ asset('files/js/mdb.min.js') }}"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>

</body>
</html>
