<?php

namespace App\Http\Controllers;

use App\Handlers\ImageUploadHandler;
use App\Http\Requests\StoreAppRequest;
use App\Models\App;
use App\Models\Tag;
use Illuminate\Http\Request;

class AppsController extends Controller
{
    public function __construct()
    {
        $this->middleware('email_verified')->only(['create']);
    }

    public function index()
    {
        $tags = Tag::all();
        $apps = App::paginate(15);
        return view('apps.index', compact('tags', 'apps'));
    }

    public function create()
    {
        $tags = Tag::all();
        return view('apps.create_and_edit', compact('tags'));
    }

    public function store(StoreAppRequest $request, ImageUploadHandler $uploader)
    {
        $user = auth()->user();
        $data = $request->only(['title', 'tags', 'description', 'body']);
        //如果用户未输入摘要，从主要内容里截取前20个字
        if (empty($data['description'])) {
            //先过滤html标签然后替换空格
            $txt                 = preg_replace('/\s|&nbsp;/', '', strip_tags($data['body']));
            $data['description'] = str_limit($txt, 40);
        }
        $data['qrcode'] = $uploader->save($request->qrcode, 'qrcode', $user->id, 150)['path'];

        $user->apps()->create($data);

        return redirect()->route('apps.index')->with('success', '发表成功');
    }

    public function show(App $app)
    {
        return view('apps.show', compact('app'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
