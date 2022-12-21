<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function home(){
        $data = Book::get();
        return view('index')->with(['books'=> $data]);
    }
}
