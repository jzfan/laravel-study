<?php

namespace App\traits;

use App\Tag;
use Carbon\Carbon;

Trait ArticleWriter
{

    public static function createWithTags($data)
    {
        $article = static::create($data);
        if ($data['tags']) {
            $tags = Tag::byTagsInputString($data['tags']);
            $article->tags()->attach($tags->pluck('id')->toArray());
        }
        return $article;
    }

    public function updateWithTags($data)
    {
        $this->update($data);
        if ($data['tags']) {
            $tags = Tag::byTagsInputString($data['tags']);
            $this->tags()->attach($tags->pluck('id')->toArray());
        }
        return $this;
    }
}