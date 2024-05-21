<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function order_item(OrderRequest $request)
    {
        //to send the items in the cart as order
    }
    public function show_orders($request)
    {
        //to get the order from a user
    }
}
