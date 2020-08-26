<?php

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
        //
        DB::table('news')->insert([
            'id_news' => Str::random(10),
            'title_news' => Str::random(10),
            'descriptipn' => Str::random(10),
            'image' => Str::random(10),
        ]);
    }
}
