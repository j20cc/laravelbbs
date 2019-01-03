@extends('layouts.app')
@section('title', '错误')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">错误</div>
        <div class="panel-body text-center">
            <h1 style="color: #9c3328">{{$msg}}</h1>
            <a class="btn btn-primary" href="{{ route('root') }}">
                (<span class="timer">5</span>s)后返回首页
            </a>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            var timer = 5
            var countdown = setInterval(function () {
                timer = timer - 1
                $('.timer').text(timer)
                if (timer === 0) {
                    window.location.href = '//' + window.location.host
                    clearInterval(countdown)
                }
            }, 1000)
        })
    </script>
@endsection