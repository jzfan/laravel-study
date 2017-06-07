<?php

use App\User;
use App\Article;
use App\Doc;

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

        // $this->call(UsersTableSeeder::class);
        Doc::truncate();
        $doc = json_decode(file_get_contents(base_path('/database/doc54.json')), true);
        $sorted = collect($doc)->sortBy('order')->values();
        foreach ($sorted as $entry) {
            unset($entry['order']);
            $entry['content'] = str_replace('http://laravelacademy.org', '', $entry['content']);
            Doc::create($entry);
        }
    }
}
