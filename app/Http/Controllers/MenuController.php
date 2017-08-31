<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    public function index(User $user)
    {
        $menu = DB::table('menus')->get();
        $user_id = Auth::id();
        return view('menu.index', ['menu' => $menu, 'user' => $user_id]);
    }
}
