<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Cache;

class EmailVerificationNotification extends Notification implements ShouldQueue
{
    use Queueable;

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        $token = str_random(16);
        Cache::set('email_verification_' . $notifiable->email, $token, 30);
        $url = route('email-verifcation.verify', ['email' => $notifiable->email, 'token' => $token]);
        return (new MailMessage)
            ->greeting($notifiable->name . '您好:')
            ->subject('注册成功，请验证您的邮箱')
            ->line('请点击下方链接验证您的邮箱，有效期30分钟')
            ->action('验证', $url);
    }

    public function toArray($notifiable)
    {
        return [];
    }
}
