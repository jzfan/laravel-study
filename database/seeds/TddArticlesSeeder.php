<?php

use App\Tag;
use App\Article;
use Illuminate\Database\Seeder;
use League\HTMLToMarkdown\HtmlConverter;

class TddArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$tag = Tag::firstOrCreate(['name'=>'test']);
        $tdds = json_decode(file_get_contents(base_path('/database/files/tdd.json')), true);
        $tdds = collect($tdds)->sortBy('title')->values();
        // dd($tdds[0]['content']);
        $converter = new HtmlConverter();
        foreach ($tdds as $article) {
        	$article['content'] = $converter->convert($article['content']);
        	$article['category'] = 'TDD';
        	Article::create($article)->tags()->attach([$tag->id]);
        }
    }
}
