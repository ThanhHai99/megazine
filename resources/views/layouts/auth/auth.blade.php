<!DOCTYPE html>
<html lang="en">

<head>
  <base href="/megazine/public/">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>{{ config('app.name', 'Laravel') }}</title>



  <!-- Custom fonts for this template-->
  <link href="{{ asset('css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

  <link rel="stylesheet" href="{{asset('css/alertify.min.css')}}" />
  <link rel="stylesheet" href="{{asset('css/themes/default.min.css')}}" />
  <script src="{{asset('js/alertify.min.js')}}"></script>
  
  <!-- Custom styles for this template-->
  <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  @yield('content')

  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

  </body>

</html>
