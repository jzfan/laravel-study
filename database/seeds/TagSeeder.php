<?php

use App\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::truncate();
        $arr = ['laravel', 'php', 'js', '项目|包'];
        foreach ($arr as $name) {
            Tag::create(['name' => $name]);
        }
    }
}
