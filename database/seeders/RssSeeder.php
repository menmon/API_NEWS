<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rss;

class RssSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Rss::Create([
            'name'=>'Mangapark.net',
            'url'=>'https://mangapark.net/latest'
        ])
    }
}
