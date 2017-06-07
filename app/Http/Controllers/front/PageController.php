<?php

namespace App\Http\Controllers\front;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index()
    {
    	$articles = Article::latest()->take(5)->get();
    	return view('front.index', compact('articles'));
    }
}
