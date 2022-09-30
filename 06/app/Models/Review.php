<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = ['post_name','post_time','review'];

    protected function rules(){
        return [
            'post_name' => 'required'
            ,'review' => 'required'
        ];        
    }

    protected function messages(){
        return [
            'post_name.required' => '投稿者名を入力してください。'
            ,'review.required' => 'レビュー内容を入力してください。'
        ];
    }

    public function validate($request){
        $request->validate(
            $this->rules(),$this->messages()
        );
    }

}
