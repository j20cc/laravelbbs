<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;

class PagesController extends Controller
{
    public function root()
    {
        return view('pages.root');
    }

    public function test(Request $request)
    {
        $topic = Topic::find(10);
        dd($topic->user());
    }
}
