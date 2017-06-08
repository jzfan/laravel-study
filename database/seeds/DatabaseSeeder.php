<?php

use App\Article;
use App\Tag;
use App\User;
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

        $this->call(DocSeeder::class);
        $this->call(TagSeeder::class);

        Article::truncate();
        factory(Article::class, 33)->create()->each( function ($a) {
            $ids = Tag::inRandomOrder()->take(mt_rand(1,2))->get(['id'])->pluck('id')->toArray();
            $a->tags()->sync($ids);
        });
    }
}
