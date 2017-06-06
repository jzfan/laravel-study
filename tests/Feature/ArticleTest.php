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
    public function test_article_index()
    {
        $article = factory(Article::class)->create();
        $this->get('/')->assertStatus(200)->assertSee($article->title);
    }

    public function test_article_show()
    {
        $article = factory(Article::class)->create();
        $this->get('/articles/' . $article->slug)
            ->assertSee($article->title);
    }

    public function test_article_view_count_increased_after_vist()
    {
        $article = factory(Article::class)->create();
        $this->get('/articles/' . $article->slug)->assertStatus(200);
        $this->assertEquals(1, $article->fresh()->view);
    }
}
