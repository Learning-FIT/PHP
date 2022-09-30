<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(Request $request){
        $message = "";
        return view('message',compact('message'));
    }
}
