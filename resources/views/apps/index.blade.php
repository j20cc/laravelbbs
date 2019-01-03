@extends('layouts.app')

@section('title', '小程序列表')

@section('content')
    <div class="row">
        <div class="col-lg-9 col-md-9 app-list">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <ul class="nav nav-pills">
                        <li class="{{ active_class( !if_query('order', 'most') ) }}">
                            <a href="{{ Request::url() }}?order=recent">最新发布</a>
                        </li>
                        <li class="{{ active_class( if_query('order', 'most') ) }}">
                            <a href="{{ Request::url() }}?order=most">最多点赞</a>
                        </li>
                    </ul>
                </div>

                <div class="panel-body">
                    <ul>
                        <li class="row">
                            <div class="col-md-7">
                                <a href="#" target="_blank"><h4>Luke/php-chatroom</h4></a>
                                <p class="info">基于的在线聊天室基于的在线聊天室基于的在线聊天室线聊天室线聊天室</p>
                                <div class="tags">
                                    <span class="label label-default">php</span>
                                    <span class="label label-default">swoole</span>
                                    <span class="label label-default">html</span>
                                </div>
                                <p class="time">update at 7 days ago</p>
                            </div>
                            <div class="col-md-5">
                                <img src="{{asset('uploads/images/wepay.png')}}" class="img-thumbnail qrcode" width="120px" height="120px">
                                <div class="pull-right stars">
                                    <span class="glyphicon glyphicon-star"></span> 100
                                </div>
                            </div>
                        </li>
                        <hr>
                        <li class="row">
                            <div class="col-md-7">
                                <a href="#" target="_blank"><h4>Luke/php-chatroom</h4></a>
                                <p class="info">基于的在线聊天室基于的在线聊天室基于的在线聊天室线聊天室线聊天室</p>
                                <div class="tags">
                                    <span class="label label-default">php</span>
                                    <span class="label label-default">swoole</span>
                                    <span class="label label-default">html</span>
                                </div>
                                <p class="time">update at 7 days ago</p>
                            </div>
                            <div class="col-md-5">
                                <img src="{{asset('uploads/images/wepay.png')}}" class="img-thumbnail qrcode" width="120px" height="120px">
                                <div class="pull-right stars">
                                    <span class="glyphicon glyphicon-star"></span> 100
                                </div>
                            </div>
                        </li>
                        <hr>
                        <li class="row">
                            <div class="col-md-7">
                                <a href="#" target="_blank"><h4>Luke/php-chatroom</h4></a>
                                <p class="info">基于的在线聊天室基于的在线聊天室基于的在线聊天室线聊天室线聊天室</p>
                                <div class="tags">
                                    <span class="label label-default">php</span>
                                    <span class="label label-default">swoole</span>
                                    <span class="label label-default">html</span>
                                </div>
                                <p class="time">update at 7 days ago</p>
                            </div>
                            <div class="col-md-5">
                                <img src="{{asset('uploads/images/wepay.png')}}" class="img-thumbnail qrcode" width="120px" height="120px">
                                <div class="pull-right stars">
                                    <span class="glyphicon glyphicon-star"></span> 100
                                </div>
                            </div>
                        </li>
                        <hr>
                        <li class="row">
                            <div class="col-md-7">
                                <a href="#" target="_blank"><h4>Luke/php-chatroom</h4></a>
                                <p class="info">基于的在线聊天室基于的在线聊天室基于的在线聊天室线聊天室线聊天室</p>
                                <div class="tags">
                                    <span class="label label-default">php</span>
                                    <span class="label label-default">swoole</span>
                                    <span class="label label-default">html</span>
                                </div>
                                <p class="time">update at 7 days ago</p>
                            </div>
                            <div class="col-md-5">
                                <img src="{{asset('uploads/images/wepay.png')}}" class="img-thumbnail qrcode" width="120px" height="120px">
                                <div class="pull-right stars">
                                    <span class="glyphicon glyphicon-star"></span> 100
                                </div>
                            </div>
                        </li>
                        <hr>
                        <li class="row">
                            <div class="col-md-7">
                                <a href="#" target="_blank"><h4>Luke/php-chatroom</h4></a>
                                <p class="info">基于的在线聊天室基于的在线聊天室基于的在线聊天室线聊天室线聊天室</p>
                                <div class="tags">
                                    <span class="label label-default">php</span>
                                    <span class="label label-default">swoole</span>
                                    <span class="label label-default">html</span>
                                </div>
                                <p class="time">update at 7 days ago</p>
                            </div>
                            <div class="col-md-5">
                                <img src="{{asset('uploads/images/wepay.png')}}" class="img-thumbnail qrcode" width="120px" height="120px">
                                <div class="pull-right stars">
                                    <span class="glyphicon glyphicon-star"></span> 100
                                </div>
                            </div>
                        </li>
                        <hr>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-3 sidebar">
            @include('apps._sidebar')
        </div>
    </div>
@endsection