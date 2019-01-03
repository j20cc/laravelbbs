<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppsController extends Controller
{
    public function __construct()
    {
        $this->middleware('email_verified')->only(['create']);
    }

    public function index()
    {
        return view('apps.index');
    }

    public function create()
    {
        $tags = [
            ['id'=>1,'text'=>'zheng'],
            ['id'=>2,'text'=>'liu'],
        ];
        return view('apps.create_and_edit', compact('tags'));
    }

    public function store(Request $request)
    {
        dd($request->all());
    }

    public function show($id)
    {
        return view('apps.show');
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
