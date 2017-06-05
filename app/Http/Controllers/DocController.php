<?php

namespace App\Http\Controllers;

use App\Doc;
use Illuminate\Http\Request;

class DocController extends Controller
{
    public function index($version)
    {
    	$entries = Doc::whereVersion($version)->get(['entry', 'title']);
    	return view('front.docs.index', compact('entries'));
    }
}
