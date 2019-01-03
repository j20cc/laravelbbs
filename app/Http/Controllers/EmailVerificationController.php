<?php

namespace App\Http\Controllers;

use App\Exceptions\BadRequestException;
use App\Models\User;
use App\Notifications\EmailVerificationNotification;
use Illuminate\Http\Request;
use Cache;

class EmailVerificationController extends Controller
{
    public function verify(Request $request)
    {
        $email = $request->input('email');
        $token = $request->input('token');
        if (!$email || !$token) {
            throw new BadRequestException('验证链接错误');
        }

        $key = 'email_verification_' . $email;
        if ($token != Cache::get($key)) {
            throw new BadRequestException('验证链接不正确或已过期');
        }

        if (!$user = User::query()->where('email', $email)->first()) {
            throw new BadRequestException('用户不存在');
        }

        Cache::forget($key);
        $user->update(['email_verified' => true]);

        return view('pages.success_notice', ['msg' => '验证成功']);
    }

    public function send(Request $request)
    {
        $user = $request->user();
        if ($user->email_verified) {
            throw new BadRequestException('你已经验证过邮箱了');
        }

        $user->laravelNotify(new EmailVerificationNotification());

        return view('pages.success_notice', ['msg' => '发送成功']);
    }
}
