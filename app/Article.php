<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'quote', 'content', 'view', 'category', 'series', 'published_at', 'page_image'];
    protected $dates = ['published_at'];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
