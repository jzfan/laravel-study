<?php

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
        // $this->call(UsersTableSeeder::class);
        Doc::truncate();
        $doc = json_decode(file_get_contents(public_path('doc54.json')), true);
        foreach ($doc as $entry) {
            $entry['content'] = str_replace('http://laravelacademy.org', '', $entry['content']);
            Doc::create($entry);
        }
    }
}
