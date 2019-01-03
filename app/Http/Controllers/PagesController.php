<?php

namespace App\Http\Controllers;

use App\Handlers\ImageUploadHandler;
use App\Notifications\EmailVerificationNotification;
use Illuminate\Http\Request;
use DB;
use Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

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
        return view('pages.error_notice', ['msg' => '没有权限访问后台']);
    }

    public function emailVerifyNotice()
    {
        return view('pages.email_verify_notice');
    }

    public function editorImageUpload(Request $request, ImageUploadHandler $uploader)
    {
        $data = [
            'success'   => false,
            'msg'       => '上传失败!',
            'file_path' => ''
        ];
        // 图片类型
        $type = $request->input('type');
        // 判断是否有上传文件，并赋值给 $file
        if ($file = $request->upload_file) {
            // 保存图片到本地
            $result = $uploader->save($request->upload_file, $type, Auth::id(), 1024);
            // 图片保存成功的话
            if ($result) {
                $data['file_path'] = $result['path'];
                $data['msg']       = "上传成功!";
                $data['success']   = true;
            }
        }
        return $data;
    }

    public function test(Request $request)
    {
        $user = $request->user();
        $user->laravelNotify(new EmailVerificationNotification);
        dd($user);
    }
}
