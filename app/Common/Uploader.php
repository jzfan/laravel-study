<?php

namespace App\Common;

use Image;

class Uploader
{
	public function handleArticlePageImage()
	{
		$page_image = Image::make(request()->file('page_image'))
		                ->resize(1110, 568)
		                ->save(public_path('upload/articles/' . str_random(20) . '.jpg'));
		return '/upload/articles/' . $page_image->basename;
	}
}