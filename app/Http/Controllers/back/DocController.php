<?php

namespace App\Http\Controllers\back;

use App\Doc;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DocController extends Controller
{
    public function index()
    {
    	$doc = Doc::latest()->paginate(10);
    	return view('back.doc.index', compact('doc'));
    }

    public function edit(Doc $doc)
    {
    	return view('back.doc.edit', compact('doc'));
    }

    public function update(Doc $doc)
    {
    	$this->validate(request(), [
    			'version' => 'required',
    			'category' => 'required',
    			'entry' => 'required',
    			'content' => 'required'
    		]);
    	$doc->update(request()->all());
    	return redirect('/back/docs');
    }
}
