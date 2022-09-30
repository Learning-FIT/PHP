<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class IndexController extends Controller
{
    public function index(){
        $search = "";
        $books = Book::all();
        return view('index', compact('books','search'));
    }

    public function post(Request $request){
        //絞り込み
        $search = $request->input('search');
        if($search == null || $search == ''){
            $books = Book::all();
        }else{
            $books = Book::where('name','like','%'.$search.'%')
                ->orWhere('author','like','%'.$search.'%')
                ->get();
            return view('index', compact('books','search'));
        }
    }
}
