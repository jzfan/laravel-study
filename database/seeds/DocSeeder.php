<?php

use App\Doc;
use Illuminate\Database\Seeder;

class DocSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Doc::truncate();
        $doc = $this->getSortedDoc();
        foreach ($doc as $entry) {
            $entry = $this->filter($entry);
            Doc::create($entry);
        }
    }

    protected function getSortedDoc()
    {
        $doc = json_decode(file_get_contents(base_path('/database/doc54.json')), true);
        return collect($doc)->sortBy('order')->values();
    }

    protected function filter($entry)
    {
        unset($entry['order']);
        $entry['content'] = str_replace('http://laravelacademy.org', '', $entry['content']);
        $entry['content'] = preg_replace('/<a href=[\'|\"]\/.+?>(.+?)<\/a>/', '$1', $entry['content']);
        return $entry;
    }
}
