<?php

namespace App\Http\Controllers;

use App\Doc;
use Illuminate\Http\Request;

class DocController extends Controller
{
    public function index($version)
    {
    	$entries = Doc::whereVersion($version)->get(['category', 'entry', 'slug']);
        $groups = $entries->groupBy('category');
    	return view('front.docs.index', compact('groups', 'version'));
    }

    public function show($version, $slug)
    {
        $entry = Doc::whereVersion($version)->whereSlug($slug)->first()->appendAnchors();
        // dd($entry->content);
        return view('front.docs.show', compact('entry'));
    }
}
