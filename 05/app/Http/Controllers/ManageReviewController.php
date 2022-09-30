<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Review;

class ManageReviewController extends Controller
{
    public function index(Request $request){
        $message = "";
        $id = $request->route('id');
        $book = Book::find($id);
        $reviews = Review::where('book_id',$id)->get();
        return view('managereview',compact('book','reviews','message'));
    }

    public function post(Request $request){
        $review_id = $request->input('review_id');
        $review = Review::find($review_id);
        $review->delete();
        $message = "レビューを削除しました。";

        $id = $request->route('id');
        $book = Book::find($id);
        $reviews = Review::where('book_id',$id)->get();
        return view('managereview',compact('book','reviews','message'));
    }
}
