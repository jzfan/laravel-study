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
                'tops' => Article::lastPublishedOfAll(6),
                'laravels' => Article::lastPublishedOfCategory('Laravel', 3),
                'tdds' => Article::lastPublishedOfCategory('TDD', 3),
                'vues' => Article::lastPublishedOfCategory('Vue', 3),
            ]);
    }

    public function resources()
    {
    	return view('front.resources');
    }
}
