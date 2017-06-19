<?php

namespace Tests\Feature;

use App\Article;
use Carbon\Carbon;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ArticleTest extends TestCase
{
	use DatabaseTransactions;
    public function test_article_index()
    {
        $article = factory(Article::class)->create(['published_at' => Carbon::now()]);
        $this->get('/')->assertStatus(200)->assertSee($article->title);
    }

    public function test_article_show()
    {
        $article = factory(Article::class)->create(['published_at' => Carbon::now()]);
        $this->get('/articles/' . $article->id)
            ->assertSee($article->title);
    }

    public function test_article_view_count_increased_after_vist()
    {
        $article = factory(Article::class)->create();
        $this->get('/articles/' . $article->id)->assertStatus(200);
        $this->assertEquals(1, $article->fresh()->view);
    }
}
