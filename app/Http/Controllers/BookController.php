<?php

namespace App\Http\Controllers;

class BookController extends Controller
{
    /**
     * Show the books page.
     *
     * @return \Illuminate\Http\Response
     */
    public function books()
    {
        return view('books.books');
    }

    /**
     * View the book.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewBook($id)
    {
        return view('view-book.blade.php');
    }
}