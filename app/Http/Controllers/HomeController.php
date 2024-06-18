<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $records = Order::Where('state', '=', 'pending')
        ->orderBy('created_at', 'DESC')
        ->paginate(15);
        $orders = Order::Where('state', '=', 'pending')
        ->get();
        return view('admin.home', compact('records', 'orders'));


    }
}
