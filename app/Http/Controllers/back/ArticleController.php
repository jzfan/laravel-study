<?php

namespace App\Http\Controllers\back;

use Image;
use App\Article;
use App\Common\Uploader;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    protected $uploader;

    public function __construct(Uploader $uploader)
    {
        $this->uploader = $uploader;
    }

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
        return redirect('/back/category/'.strtolower(request('category')))->with('success', 'hahaha');
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
        $data = request()->all();
        if (request('page_image')) {
            $data['page_image'] = $this->uploader->handleArticlePageImage();
        }
        Article::{camel_case(request('submit'))}($data);
        return redirect('/back/category/' . request('category'))->withSuccess('hahaha');
    }

    public function uploadPageImage(Article $article)
    {
        $this->validate(request(), [
                'page_image' => 'required|file'
            ]);
        if ( $path = $this->uploader->handleArticlePageImage()) {
            $article->update(['page_image' => $path]);
        }
        return redirect()->back()->withSuccess('上传图片成功！');
    }
}
