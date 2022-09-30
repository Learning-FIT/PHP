<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ManageReviewDetailController extends Controller
{
    public function index(Request $request){
        $message="";
        $review_id = $request->route('review_id');
        $review = Review::find($review_id);
        return view('managereviewdetail',compact('review','message'));
    }

    public function post(Request $request){
        $review_id = $request->route('review_id');
        $review = Review::find($review_id);
        $review->validate($request);

        $review->fill($request->input());
        $review->save();
        $message = "レビューを更新しました。";
        return view('managereviewdetail',compact('review','message'));
    }
}
