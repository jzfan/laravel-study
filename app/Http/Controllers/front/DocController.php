<?php

namespace App\Http\Controllers\front;

use App\Doc;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DocController extends Controller
{
    public function index($version)
    {
    	$entries = Doc::whereVersion($version)->get(['category', 'entry', 'id']);
        $groups = $entries->groupBy('category');
    	return view('front.docs.index', compact('groups', 'version'));
    }

    public function show($version, $id)
    {
        $entry = Doc::find($id)->appendAnchors();
        // dd($entry->anchors);
        return view('front.docs.show', compact('entry'));
    }
}
