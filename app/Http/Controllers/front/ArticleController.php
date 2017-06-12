<?php

namespace App\Http\Controllers\front;

use App\Tag;
use App\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show($category, $id)
    {
        $article = Article::with('tags')->find($id)->parseMarkdownContent();
        $article->increment('view');
        return view('front.articles.show', compact('article'));
    }

    public function byTag(Tag $tag)
    {
        $articles = $tag->articles()->simplePaginate(12);
        return view('front.articles.index', compact('articles', 'tag'));
    }
}
