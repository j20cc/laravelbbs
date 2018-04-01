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
        $topics = Topic::paginate(10);
        return $topics->appends($request->all())->render();
    }
}
