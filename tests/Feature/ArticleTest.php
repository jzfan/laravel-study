<?php

namespace Tests\Feature;

use App\Article;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ArticleTest extends TestCase
{
	use DatabaseMigrations;
    public function test_guest_can_see_article()
    {
        $article = factory(Article::class)->create();
        $this->get('/')->assertSee($article->title);
    }
}
