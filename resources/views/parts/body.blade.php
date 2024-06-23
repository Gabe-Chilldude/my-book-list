<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('app.css')}}">
</head>
<body @yield('body_atrb')>
   @yield('content') 

   <script src="{{asset('app.js')}}"></script>
</body>
</html>