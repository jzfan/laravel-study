<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'quote', 'content', 'view', 'category', 'series', 'published_at', 'page_image'];
    protected $dates = ['published_at'];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function updateDraft($data)
    {
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
        return static::create($data);
    }
}
