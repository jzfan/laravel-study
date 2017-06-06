<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show($slug)
    {
        $article = Article::whereSlug($slug)->first();
        $article->increment('view');
        return view('front.article', compact('article'));
    }
}
