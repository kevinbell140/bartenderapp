<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Order;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class OrdersController extends Controller
{
    public function index(User $user)
    {
        $user_id = $user->id;
        $orders = DB::table('orders')->where('user_id', '=', $user_id)->get();
        return view('users.orders.index', compact('user','orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {
        $menu = DB::table('menus')->get();
        return view('users.orders.create', compact('user'), ['menus' => $menu]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(User $user, Request $request)
    {

        $user_id = $user->id;
        $order = new Order;
        $order->beer = $request->beer;
        $order->red_wine = $request->red_wine;
        $order->white_wine = $request->white_wine;
        $order->whiskey = $request->whiskey;
        $order->vodka = $request->vodka;
        $order->rum = $request->rum;
        $order->user_id = $user_id;

        $order->save();

        Session::flash('success', 'The order was successfully placed');

        return redirect()->route('users.orders.index', compact('user'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user, Order $order)
    {
        $order->delete();

        redirect()->route('users.orders.index', $user->id);
    }
}
