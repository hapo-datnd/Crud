<?php
/**
 * Created by PhpStorm.
 * User: Dat
 * Date: 2/27/2019
 * Time: 8:42 AM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-4.2.1-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>@yield('title')</title>
</head>
<body>
<div class="container">
    @yield('content')
</div>
</body>
</html>
