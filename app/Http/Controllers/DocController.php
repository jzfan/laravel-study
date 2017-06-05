<?php

namespace App\Http\Controllers;

use App\Doc;
use Illuminate\Http\Request;

class DocController extends Controller
{
    public function index($version)
    {
    	$entries = Doc::whereVersion($version)->get(['category', 'entry']);
        $groups = $entries->groupBy('category');
    	return view('front.docs.index', compact('groups'));
    }
}
