<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index(Request $request){
        //GET
        $message = "";
        return view('login',compact('message'));
    }
    public function post(Request $request){
        //POST
        $message = "";
        $post = $request->input();
        $user = DB::table('users')
            ->where('name',$post['id'])
            ->where('password',$post['password'])
            ->first();
        if($user != null){
            //ログイン成功
            $request->session()->put('user',$user);
            return redirect('/manage');
        }else{
            $message = "IDかパスワードに間違いがあります。";
        }
        return view('login',compact('message'));
    }
}
