<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Review;

class DetailController extends Controller
{
    public function index($id,Request $request
        ,$message = "",$hasError = false){
        $book = Book::where('id',$id)->first();
        $reviews = Review::where('book_id',$id)->get();
        $messageClass = $hasError ? 'red' : '';
        return view('detail',compact(
            'book','reviews','message','messageClass'));
    }

    public function post($id,Request $request){
        $post_name = $request->input('post_name');
        $review = $request->input('review');
        if($post_name == null || $post_name == ""){
            $message = "名前を入力してください。";
            return $this->index($id,$request,$message,true);
        }
        if($review == null || $review == ""){
            $message = "レビュー内容を入力してください。";
            return $this->index($id,$request,$message,true);
        }
        Review::insert([
            'book_id' => $id
            , 'post_name' => $post_name
            , 'post_time' => date('Y-m-d H:i:s')
            , 'review' => $review
        ]);
        $message = "レビューを投稿しました。";
        return $this->index($id,$request,$message,false);
    }
}
