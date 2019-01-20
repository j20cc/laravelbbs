<?php

namespace App\Http\Requests;

class StoreAppRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'       => ['required', 'min:3', 'max:15'],
            'tags'        => ['required', 'array', 'min:1', 'max:3'],
            'qrcode'      => ['required', 'image'],
            'description' => ['max:15'],
            'body'        => ['required', 'min:5']
        ];
    }

    public function attributes()
    {
        return [
            'tags'        => '标签',
            'qrcode'      => '小程序码',
            'description' => '摘要',
            'body'        => '内容'
        ];
    }
}
