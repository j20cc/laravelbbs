<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use App\Http\Requests\ReplyRequest;
use Auth;

class RepliesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

	public function store(ReplyRequest $request, Reply $reply)
	{
        $reply->content = $request->input('content');
        $reply->topic_id = $request->input('topic_id');
		$reply->user_id = Auth::id();
        $reply->save();

        return redirect()->to($reply->topic->link())->with('success', '发表成功！');
	}

	public function destroy(Reply $reply)
	{
		$this->authorize('destroy', $reply);
		$reply->delete();

		return redirect()->to($reply->topic->link())->with('message', '删除成功！');
	}
}