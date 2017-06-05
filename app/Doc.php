<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doc extends Model
{
    protected $fillable = ['version', 'entry', 'category', 'content'];

    public function appendAnchors()
    {
        preg_match_all('/(toc_\d{1,2})[\'|\"]>(.+?)</', $this->content, $matches);
        $this->anchors = collect($matches[1])->combine($matches[2]);
        return $this;
    }
}
