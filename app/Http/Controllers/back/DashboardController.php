<?php

namespace App\Http\Controllers\back;

use App\User;
use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $users_count = User::count();
        $articles_count = Article::count();
        $views = Article::sum('view');
    	return view('back.dashboard', compact('users_count', 'articles_count', 'views'));
    }
}
