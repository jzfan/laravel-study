<?php

namespace App\Http\Controllers\front;

use App\Tag;
use App\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show(Article $article)
    {
        $article->increment('view');
        return view('front.articles.show', [
                'article' => $article->parseMarkdownContent()
            ]);
    }

    public function byTag(Tag $tag)
    {
        return view('front.articles.index', [
                'articles' => $tag->articles()->simplePaginate(9),
                'title' => $tag->name
            ]);
    }

    public function byCategory($category)
    {
        return view('front.articles.index', [
                'articles' => Article::lastPublishedOfCategory($category)->simplePaginate(9),
                'title' => $category
            ]);
    }
}
