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

    public function post(Request $request){
        $request->validate([
            'name' => ['required']
            ,'author' => ['required']
            ,'overview' => ['required']
        ],[
            'name.required' => '書籍名を入力してください。'
            ,'author.required' => '著者名を入力してください。'
            ,'overview.required' => '概要を入力してください。'
        ]
        );
        $book = new Book();
        $book->fill($request->input());
        $book->save();

        $message = "書籍情報を登録しました。";
        $books = Book::all();
        return view('manage',compact('books','message'));

    }
    public function delete(Request $request){
        //削除
        $deleteId = $request->input('book_id');
        $book = Book::find($deleteId);
        $book->delete();
        $message = "書籍情報を削除しました。";
        $books = Book::all();
        return view('manage',compact('books','message'));
    }

}
