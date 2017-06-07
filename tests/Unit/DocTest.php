<?php

namespace Tests\Unit;

use App\Doc;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class DocTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_append_anchors()
    {
        $content = Doc::find(5)->content;
        preg_match_all('/(toc_\d{1,2})[\'|\"]>(.+?)</', $content, $matches);
        return collect($matches[1])->combine($matches[2]);
    }
}
