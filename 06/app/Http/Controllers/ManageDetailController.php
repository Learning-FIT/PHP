<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class ManageDetailController extends Controller
{
    public function index(Request $request){
        $book = Book::find($request->route('id'));
        return view('managedetail',compact('book'));
    }

    public function post(Request $request){
        if($request->input('submit') == 'キャンセル'){
            return redirect('/manage');
        }
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
        $book = Book::find($request->route('id'));
        $book->fill($request->input());
        $book->save();
        return redirect('/manage')
            ->with('flash_message','書籍情報を更新しました。');
    }
}
