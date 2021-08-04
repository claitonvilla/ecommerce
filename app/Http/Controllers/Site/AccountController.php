<?php

namespace App\Http\Controllers\Site;

use 

Auth;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    public function getOrders()
    {
        $orders = Order::where('user_id', Auth::user()->id)->get();

        return view('site.pages.account.orders', compact('orders'));
    }
}