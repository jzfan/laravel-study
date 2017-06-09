<?php

namespace App;

use App\Article;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name', 'display'];
    public $timestamps = false;

    public function articles()
    {
        return $this->morphedByMany(Article::class, 'taggable');
    }
}
