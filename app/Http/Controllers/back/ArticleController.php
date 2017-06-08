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
    	return view('back.articles.index', compact('articles', 'category'));
    }

    public function edit($category, Article $article)
    {
    	return view('back.articles.edit', compact('article'));
    }

    public function update(Article $article)
    {
        $this->validate(request(), [
                'title' => 'required',
                'category' => 'required|exists:articles',
                'content' => 'required',
                'submit' => 'required|in:Update Draft,Publish'
            ]);
        $article->{camel_case(request('submit'))}(request()->all());
        return redirect('/back/'.request('category'))->with('success', 'hahaha');
    }

    public function create($category)
    {
        return view('back.articles.create', compact('category'));   
    }

    public function store()
    {
        $this->validate(request(), [
                'title' => 'required',
                'category' => 'required',
            ]);
        dd(request()->all());
        $page_image = request()->file('page_image')->move(public_path('uploads/articles'));
        dd($page_image);
        Article::{camel_case(request('submit'))}(request()->all());
    }
}
