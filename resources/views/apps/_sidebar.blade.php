<div class="panel panel-default">
    <div class="panel-body">
        <a href="{{ route('apps.create') }}" class="btn btn-success btn-block" aria-label="Left Align">
            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 发布小程序
        </a>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-body app-tags">
        <div>所有标签</div>
        <hr>
        <div class="media-body">
            @foreach($tags as $tag)
            <a class="media" href="#"><span class="label label-primary">{{$tag->name}}</span></a>
            @endforeach
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-body top-apps">
        <div>热门小程序</div>
        <hr>
        <a class="media" href="">
            <div class="media-body">
                <span class="media-heading">啦啦啦啦啦啦啦啦啦啦啦啦</span>
            </div>
            <div class="media-right pull-right">
                <span class="glyphicon glyphicon-star"></span> 100
            </div>
        </a>
    </div>
</div>