<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lravel Ecomm</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

</head>
<body>
    <div class="wrapper">

        @include('partials.nav')
        @include('partials.style')
        @include('partials.footer')
        {{-- @yield('content') --}}

    </div>
    
  </body>
<style>
    /* @override css */
    .bg-light{
      background-color: rgb(238, 182, 240) !important;
    }
    .margin-top-20 {
    margin-top: 20px;
    }
    .feature-img{
        max-height: 200px;
    }
    .footer-bottom{
      padding: 10px;
      margin-top: 20px;
      background-color: rgb(238, 182, 240);
    }
</style>

</html>