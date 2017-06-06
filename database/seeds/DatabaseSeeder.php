<?php

use App\User;
use App\Article;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        factory(User::class)->create([
        		'name' => 'jzfan',
        		'email' => 'jzmcc@163.com',
        		'password' => bcrypt(env('APP_PASSWORD'))
        	]);

        Article::truncate();
        factory(Article::class, 33)->create();

    }
}
