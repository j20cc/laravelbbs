<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;

use Illuminate\Database\Eloquent\Model;
use DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PagesController extends Controller
{
    public function root()
    {
        return view('pages.root');
    }

    public function permissionDenied()
    {
        // 如果当前用户有权限访问后台，直接跳转访问
        if (config('administrator.permission')()) {
            return redirect(url(config('administrator.uri')), 302);
        }
        // 否则使用视图
        return view('pages.permission_denied');
    }

    public function test()
    {
//        dd(config('app.name')());
//        dd(substr(get_class(), 21));
        throw new \Exception('test');
    }
}
