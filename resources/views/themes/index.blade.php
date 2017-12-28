@extends('layouts.master')
@section('content')
    <ul class="nav nav-pills">
        <li class="active"><a data-toggle="pill" href="#home">Popular</a></li>
        <li><a data-toggle="pill" href="#menu1">Recent</a></li>
        <li><a data-toggle="pill" href="#menu2">Featured</a></li>

    </ul>

    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
            <div class="row">
                <div class="col-md-12">
                    <h4>Popular</h4>
                    <div class="row form-group">
                        @foreach ($populars as $theme)

                                <div class="col-xs-12 col-md-4">
                                <div class="panel panel-default">
                                    <div class="panel-image">
                                        <img src="{{$theme->image_url}}" class="panel-image-preview" />
                                        <label for="toggle-1"></label>
                                    </div>
                                    {{--<div class="panel-body">--}}
                                    {{--<h4></h4>--}}
                                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in lobortis nisl, vitae iaculis sapien. Phasellus ultrices gravida massa luctus ornare. Suspendisse blandit quam elit, eu imperdiet neque semper et.</p>--}}
                                    {{--</div>--}}
                                    <div class="panel-footer text-center" style="height:45px;">

                                        <a href="{{route('themes.show',$theme->slug)}}" class="pull-left"><span>{{$theme->title}}</span></a>
                                        {{--<a href="{{$theme->download_url}}" class="pull-right" style="border: 1px solid #ccc;"><span>download</span></a>--}}
                                        {{--<a href="#twitter"><span class="fa fa-twitter"></span></a>--}}

                                    </div>
                                </div>
                            </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div id="menu1" class="tab-pane fade">
            <div class="row">
                <div class="col-md-12">
                    <h4>Recent</h4>
                    <div class="row form-group">
                        @foreach ($latests as $theme)
                            <div class="col-xs-12 col-md-4">
                                <div class="panel panel-default">
                                    <div class="panel-image">
                                        <img src="{{$theme->image_url}}" class="panel-image-preview" />
                                        <label for="toggle-1"></label>
                                    </div>
                                    {{--<div class="panel-body">--}}
                                    {{--<h4></h4>--}}
                                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in lobortis nisl, vitae iaculis sapien. Phasellus ultrices gravida massa luctus ornare. Suspendisse blandit quam elit, eu imperdiet neque semper et.</p>--}}
                                    {{--</div>--}}
                                    <div class="panel-footer text-center" style="height:45px;">

                                        <a href="{{route('themes.show',$theme->slug)}}" class="pull-left"><span>{{$theme->title}}</span></a>
                                        {{--<a href="{{$theme->download_url}}" class="pull-right" style="border: 1px solid #ccc;"><span>download</span></a>--}}
                                        {{--<a href="#twitter"><span class="fa fa-twitter"></span></a>--}}

                                    </div>
                                </div>
                            </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div id="menu2" class="tab-pane fade">
            <div class="row">
                <div class="col-md-12">
                    <h4>Featured</h4>
                    <div class="row form-group">
                        @foreach ($featureds as $theme)
                            <div class="col-xs-12 col-md-4">
                                <div class="panel panel-default">
                                    <div class="panel-image">
                                        <img src="{{$theme->image_url}}" class="panel-image-preview" />
                                        <label for="toggle-1"></label>
                                    </div>
                                    {{--<div class="panel-body">--}}
                                    {{--<h4></h4>--}}
                                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in lobortis nisl, vitae iaculis sapien. Phasellus ultrices gravida massa luctus ornare. Suspendisse blandit quam elit, eu imperdiet neque semper et.</p>--}}
                                    {{--</div>--}}
                                    <div class="panel-footer text-center" style="height:45px;">

                                        <a href="{{route('themes.show',$theme->slug)}}" class="pull-left"><span>{{$theme->title}}</span></a>
                                        {{--                                <a href="{{$theme->download_url}}" class="pull-right" style="border: 1px solid #ccc;"><span>download</span></a>--}}
                                        {{--<a href="#twitter"><span class="fa fa-twitter"></span></a>--}}

                                    </div>
                                </div>
                            </div>

                        @endforeach
                    </div>
                </div>
            </div>

        </div>

    </div>







@endsection