<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class ManageController extends Controller
{
    public function index(Request $request){
        $message = "";
        $books = Book::all();
        return view('manage',compact('books','message'));
    }

}
