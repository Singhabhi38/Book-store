<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use App\Author;
use App\Book;
class BookController extends Controller
{
    public function getIndex()
  {

    $books = Book::all();

    return View::make('book_list')->with('books',$books);

  }
}
