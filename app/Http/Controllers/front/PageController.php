<?php

namespace App\Http\Controllers\front;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{

    public function index()
    {
    	return view('front.index', [
                'tops' => Article::lastPublishedOfAll()->take(6)->get(),
                'laravels' => Article::lastPublishedOfCategory('Laravel')->take(3)->get(),
                'tdds' => Article::lastPublishedOfCategory('TDD')->take(3)->get(),
                'vues' => Article::lastPublishedOfCategory('Vue')->take(3)->get(),
            ]);
    }

    public function resources()
    {
    	return view('front.resources');
    }
}
