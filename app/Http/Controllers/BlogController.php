<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Show the blog page.
     *
     * @return \Illuminate\Http\Response
     */
    public function blog()
    {
        return view('blog.blog');
    }
}
