<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
    	$articles = Article::latest()->take(5)->get();
    	return view('front.index', compact('articles'));
    }
}
