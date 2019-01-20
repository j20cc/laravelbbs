@if (count($apps))
    <ul>
        @foreach($apps as $app)
            <li class="row">
                <div class="col-md-7">
                    <a href="{{route('apps.show', ['id'=>$app->id])}}" target="_blank">
                        <h4>{{$app->user->name}}/{{$app->title}}</h4>
                    </a>
                    <p class="info">{{$app->description}}</p>
                    <div class="tags">
                        @foreach($app->tags as $tag)
                            <span class="label label-default">{{$tag->name}}</span>
                        @endforeach
                    </div>
                    @if($app->created_at < $app->updated_at)
                        <p class="time">Updated at {{$app->updated_at->diffForHumans()}}</p>
                    @else
                        <p class="time">Created at {{$app->created_at->diffForHumans()}}</p>
                    @endif
                </div>
                <div class="col-md-5">
                    <img src="{{$app->qrcode}}" class="img-thumbnail qrcode"
                         width="120px" height="120px">
                    <div class="pull-right stars">
                        <span class="glyphicon glyphicon-star"></span> {{$app->stars}}
                    </div>
                </div>
            </li>
            <hr>
        @endforeach
    </ul>
@else
    <div class="empty-block">暂无数据 ~_~</div>
@endif