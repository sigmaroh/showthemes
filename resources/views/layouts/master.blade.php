<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, user-scalable=yes">
    {{--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">--}}
    <link href="{{ asset('css/bootstrap/bootstrap-3.3.6/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{asset('font/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel='stylesheet' type='text/css'>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate-css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('js/sweetalert/sweetalert.css') }}" rel="stylesheet">
    @yield('styles')
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Brand</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav pull-right">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="container wrapper">

            @yield('content')

        </div>
    </div>
</div>
@yield('script')

@include('includes.scripts')
</body>
</html>