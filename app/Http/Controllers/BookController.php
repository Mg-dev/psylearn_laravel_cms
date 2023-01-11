<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function getBooks(){
        $books = Book::get();
        return $books;
    }
    public function getBookDetail($id){
        $book = Book::findOrFail($id);
        return $book->additionBookInfo;
    }
}
