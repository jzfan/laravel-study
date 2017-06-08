<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'quote', 'content', 'view'];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
