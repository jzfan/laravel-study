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
        return $this->belongsToMany(Article::class)
                    ->whereNotNull('published_at')->orderBy('published_at', 'desc');
    }

    public static function byTagsInputString($names)
    {
        return collect(explode(',', $names))->map( function ($name) {
                    return static::firstOrCreate(['name' => $name]);
                });
    }
}
