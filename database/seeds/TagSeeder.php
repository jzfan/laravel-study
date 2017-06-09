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
        $arr = ['Composer', 'Validate', 'Api', 'Json', 'Artisan', 'Blade', 'Exception'];
        foreach ($arr as $name) {
            Tag::create(['name' => $name]);
        }
    }
}
