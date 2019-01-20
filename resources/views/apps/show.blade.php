@extends('layouts.app')

@section('title', '小程序标题')
@section('description', '小程序标题')

@section('content')
    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <div class="panel panel-default app">
                <div class="panel-body row">
                    <div class="col-md-9">
                        <h1 style="font-size:25px;">
                            <a href="https://laravel-china.org/projects/vendors/dingo">
                                <img src="{{asset('uploads/images/wepay.png')}}" alt="" class="img-thumbnail img-circle"
                                     style="width:44px;margin-right: 10px;">
                            </a>
                            <span>dingo/api</span>
                            <small style="font-size: 50%;margin-left: 15px;">Updated at 7 days ago</small>
                        </h1>
                        <p>构建 RESTful API 服务的完整解决方案</p>
                        <div style="line-height: 50px;">
                            <a href="" class="btn btn-default">
                                <span class="glyphicon glyphicon-star"></span> 100+
                            </a>
                            <a href="" class="btn btn-default">
                                <span class="glyphicon glyphicon-link"></span> github
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <img src="{{asset('uploads/images/wepay.png')}}" class="img-thumbnail qrcode" width="150px" alt="">
                    </div>
                </div>
                <hr style="width: 97%;margin-top: 5px">
                <div class="description">

                </div>
                <hr style="width: 97%;margin-top: 5px">
                <div class="tags">
                    <h2 style="font-size:20px;"><i class="glyphicon glyphicon-tags"></i> 标签</h2>
                    <p>
                        <span class="label label-primary">工具</span>
                        <span class="label label-primary">效率</span>
                        <span class="label label-primary">聚合查询</span>
                    </p>
                </div>
            </div>

            {{-- 用户回复列表 --}}
            <div class="panel panel-default topic-reply">
                <div class="panel-body">

                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 hidden-sm hidden-xs author-info">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="text-center">
                        作者：luke
                    </div>
                    <hr>
                    <div class="media">
                        <div align="center">
                            <a href="#">
                                <img class="thumbnail img-responsive" src="{{asset('uploads/images/wepay.png')}}"
                                     width="300px" height="300px">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop