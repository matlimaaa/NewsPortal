<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // set limit on memory to prevent default PHP memory from overflowing
        ini_set('memory_limit', '512M');
        News::factory(1000)->create();
    }
}
