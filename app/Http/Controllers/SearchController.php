<?php

namespace App\Http\Controllers;

class SearchController extends Controller
{
    /**
     * Show the search page.
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        return view('search.search');
    }
}