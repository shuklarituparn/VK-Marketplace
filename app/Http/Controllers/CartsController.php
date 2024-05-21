<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartsController extends Controller
{
    public function show_cart($request)
    {
            //to show the cart of the user
        //parse userID to get the cart and then render it using blade

    }

    public function edit_cart($request)
    {
        //to edit the quantity of things in cart
        //parse userID to get the cart and then edit it based on the request

    }

    public function remove_cart($request)
    {
            //to remove things from the cart
        //parse userID to get the cart and then delete it

    }
}
