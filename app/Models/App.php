<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    protected $fillable = ['title', 'qrcode', 'tags', 'description', 'body'];

    public function setTagsAttribute(array $tags)
    {
        $this->attributes['tags'] = implode(',', $tags);
    }

    public function getTagsAttribute($value)
    {
        $tagKeys = explode(',', $value);
        return Tag::query()->find($tagKeys);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
