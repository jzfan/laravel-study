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
        $versions = [51, 52, 53, 54];
        foreach ($versions as $version) {
            $doc = $this->getSortedDoc($version);
            foreach ($doc as $entry) {
                $entry = $this->filter($entry);
                Doc::create($entry);
            }
        }
    }

    protected function getSortedDoc($version)
    {
        $doc = json_decode(file_get_contents(base_path('/database/doc'.$version.'.json')), true);
        return collect($doc)->sortBy('order')->values();
    }

    protected function filter($entry)
    {
        unset($entry['order']);
        $entry['content'] = str_replace('http://laravelacademy.org', '', $entry['content']);
        $entry['content'] = preg_replace('/<a href=[\'|\"]\/.+?>(.+?)<\/a>/', '$1', $entry['content']);
        $entry['content'] = preg_replace('/ipt_kb_toc_\d{1,6}_(\d{1,3})/', 'anchor_$1', $entry['content']);
        $entry['content'] = preg_replace('/toc_(\d)/', 'anchor_$1', $entry['content']);
        $entry['content'] = preg_replace('/(<h\d .+?>)<(strong|b)>(.+?)<\/(strong|b)>/', '$1$3', $entry['content']);
        return $entry;
    }
}
