<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Facades\Auth;

class QueueController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $user = Auth::user();
        $user_id = Auth::id();
        $is_admin = Auth::user()->is_admin;
        if ($is_admin == 1){
            $order = DB::table('orders')->get();
            return view('queue.index', ['orders' => $order, 'user' => $user]);
        }
        else{
            $orders = DB::table('orders')->where('user_id', '=', $user_id)->get();
            return view('users.orders.index', compact('user','orders'));
        }

    }
}