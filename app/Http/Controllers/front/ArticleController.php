<?php

namespace App\Http\Controllers\front;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function show($category, $id)
    {
        $article = Article::with('tags')->find($id);
        $article->increment('view');
        return view('front.article', compact('article'));
    }
}
