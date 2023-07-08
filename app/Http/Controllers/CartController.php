<?php

namespace App\Http\Controllers;

class CartController extends Controller
{
    /**
     * Show the home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function cart()
    {
        return view('cart.cart');
    }
}