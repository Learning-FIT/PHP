<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('books')->delete();
        
        \DB::table('books')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => '坊っちゃん',
                'author' => '夏目漱石',
                'overview' => 'ぼっちゃんが先生になって頑張ったけど結局ダメでした。',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => '吾輩は猫である',
                'author' => '夏目漱石',
                'overview' => '吾輩は猫ですが失恋してから人間の前足の使い方が不思議に思えました。',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => '走れメロス',
                'author' => '太宰治',
                'overview' => '激怒して走ったら結構速かったので友人と殴り合いました。',
            ),
        ));
        
        
    }
}