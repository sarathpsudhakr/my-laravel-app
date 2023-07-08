<?php

namespace App\Http\Controllers;

class AccountController extends Controller
{
    /**
     * Show the account page.
     *
     * @return \Illuminate\Http\Response
     */
    public function account()
    {
        return view('account.account');
    }
}