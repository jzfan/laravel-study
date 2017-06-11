<?php

namespace App\traits;

use App\Tag;
use Carbon\Carbon;

Trait ArticleWriter
{
    public function updateDraft($data)
    {
        $tags = Tag::byTagsInputString($data['tag']);
        $this->tags()->sync($tags->pluck('id')->toArray());

        return $this->update($data);
    }

    public function publish($data)
    {
        return $this->updateDraft(array_merge($data, ['published_at' => Carbon::now()]));
    }

    public static function publishNew($data)
    {
        return static::saveDraft(array_merge($data, ['published_at' => Carbon::now()]));
    }

    public static function saveDraft($data)
    {
        $tags = Tag::byTagsInputString($data['tag']);
        $article = static::create($data);
        $article->tags()->attach($tags->pluck('id')->toArray());
        return $article;
    }
}