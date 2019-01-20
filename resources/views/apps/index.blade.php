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
                    {{-- 小程序列表 --}}
                    @include('apps._app_list')
                    {{-- 分页 --}}
                    {!! $apps->render() !!}
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-3 sidebar">
            @include('apps._sidebar')
        </div>
    </div>
@endsection