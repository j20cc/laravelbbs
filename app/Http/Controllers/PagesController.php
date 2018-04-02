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

    public function test()
    {
        // dump(Permission::create(['name' => 'manage_contents']));
        dump(DB::table('permissions')->delete());
    }
}
