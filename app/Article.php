<?php

namespace App;

use App\traits\ArticleWriter;
use Illuminate\Database\Eloquent\Model;
use Michelf\MarkdownExtra as Markdown;

class Article extends Model
{
    use ArticleWriter;

    protected $fillable = ['title', 'quote', 'content', 'view', 'category', 'series', 'published_at', 'page_image'];
    protected $dates = ['published_at'];

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }

    public function pageImageName()
    {
        $arr = explode('/', $this->page_image);
        return end($arr);
    }

    public function defaultImage()
    {
        if (is_null($this->page_image)) {
            return 'coding.jpeg';
        }
    }

    public function pageCode()
    {
        if (preg_match('/```([\s\S]+?)```/', $this->content, $match)) {
            // dd($match[1]);
            return preg_replace('/\t/', ' ', $match[1]);
        }
        return false;
    }

    public function parseMarkdownContent()
    {
        $this->content = Markdown::defaultTransform($this->content);
        return $this;
    }

    public function getTagsInputString()
    {
        return join(",", $this->tags->pluck("name")->toArray());
    }

    public static function lastPublishedOfCategory($category, $n=3)
    {
        return static::whereNotNull('published_at')->whereCategory($category)
                    ->orderBy('published_at', 'desc')->take($n)->get();
    }

    public static function lastPublishedOfAll($n=6)
    {
        return static::whereNotNull('published_at')
                    ->orderBy('published_at', 'desc')->take($n)->get();
    }
}
