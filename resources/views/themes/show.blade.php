@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h4>Popular</h4>
            <div class="row form-group">
                @if ($theme)
                        <div class="col-xs-12 col-md-8">
                            <div class="panel panel-default">
                                <div class="panel-image">
                                    <img src="{{$theme->image_url_details}}" class="panel-image-preview" />
                                    <label for="toggle-1"></label>
                                </div>
                                <div class="panel-body">
                                    <h4></h4>
                                    <p>{{$theme->details}}</p>
                                </div>

                                <div class="panel-footer text-center" style="height:45px;">

                                    <a href="{{$theme->theme_url}}" class="pull-left"><span>{{$theme->title}}</span></a>
                                    <a href="{{$theme->download_url}}" class="pull-right" style="border: 1px solid #ccc;"><span>download</span></a>
                                    {{--<a href="#twitter"><span class="fa fa-twitter"></span></a>--}}

                                </div>
                            </div>
                        </div>
                        <div clas="col-md-4">

                        </div>

                @endif
            </div>
        </div>
    </div>

@endsection