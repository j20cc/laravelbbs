@extends('layouts.app')

@section('title', '发布小程序')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/simditor/simditor.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/select2/select2.min.css') }}">
    <style>
        .select2-selection{ padding-left: 7px; }
        .select2-container--default .select2-selection--multiple { border: 1px solid #ccd0d2; }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h2 class="text-center">
                        <i class="glyphicon glyphicon-edit"></i> 发布小程序
                    </h2>
                    <hr>
                    @include('common.error')
                    <form action="{{ route('apps.store') }}" method="POST" accept-charset="UTF-8">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <input class="form-control" type="text" name="title" value="{{ old('title') }}"
                                   placeholder="请填写标题" required/>
                        </div>

                        <div class="form-group">
                            <select class="form-control app-tags-select" name="tags[]" multiple="multiple">
                                @foreach($tags as $tag)
                                <option value="{{$tag['id']}}">{{$tag['text']}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <input type="file" name="qrcode" class="form-control">
                            <p class="help-block">请选择一张小程序码图片</p>
                        </div>

                        <div class="form-group">
                            <textarea name="body" class="form-control" id="editor" rows="3" placeholder="请填入至少三个字符的内容。"
                                      required></textarea>
                        </div>

                        <div class="well well-sm">
                            <button type="submit" class="btn btn-primary">
                                <span class="glyphicon glyphicon-ok"></span> 保存
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('js/simditor/module.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/simditor/hotkeys.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/simditor/uploader.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/simditor/simditor.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/select2/select2.min.js') }}"></script>

    <script>
        $(document).ready(function () {
            new Simditor({
                textarea: $('#editor'),
                upload: {
                    url: '{{ route('editor-image-upload') }}',
                    params: {_token: '{{ csrf_token() }}', type: 'apps'},
                    fileKey: 'upload_file',
                    connectionCount: 3,
                    leaveConfirm: '文件上传中，关闭此页面将取消上传。'
                },
                pasteImage: true
            });

            $('.app-tags-select').select2({
                placeholder: '选择标签，最多三个，最少一个',
                tags: "true",
                allowClear: true,
            });
        });
    </script>

@endsection