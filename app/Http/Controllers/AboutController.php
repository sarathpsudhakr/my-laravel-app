<?php

namespace App\Http\Controllers;

class AboutController extends Controller
{
    /**
     * Show the about page.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('about.about');
    }
}