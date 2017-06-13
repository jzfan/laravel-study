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
        if (! preg_match_all('/```([\s\S]+?)```/', $this->content, $match)) {
            return false;
        }
        $lines = '';
        foreach ($match[1] as $segment) {
            $lines .= $segment;
            if(preg_match_all('/\n/', $lines) >= 5) {
                break;
            }         
        }
        // dd($lines);
        // $str = str_replace(PHP_EOL, '', $match[1]); 
        // dd($str);
        return preg_replace('/\t/', ' ', $lines);
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

    public function scopeLastPublishedOfCategory($query, $category)
    {
        $query->whereNotNull('published_at')->where('category', $category)
                    ->orderBy('published_at', 'desc');
    }

    public function scopeLastPublishedOfAll($query)
    {
        $query->whereNotNull('published_at')
                    ->orderBy('published_at', 'desc');
    }
}
