<?php

namespace App\Http\Controllers\back;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index($category)
    {
    	$articles = Article::whereCategory($category)->latest()->paginate(10);
    	return view('back.articles.index', compact('articles'));
    }

    public function edit($category, Article $article)
    {
    	return view('back.articles.edit', compact('article'));
    }
}
