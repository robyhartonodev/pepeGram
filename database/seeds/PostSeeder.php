<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'user_id' => 1,
            'title' => 'Random Title: '. Str::random(10),
            'caption' => 'Random Caption: '. Str::random(10),
            'image' => 'image/poggies.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('posts')->insert([
            'user_id' => 1,
            'title' => 'Random Title: '. Str::random(10),
            'caption' => 'Random Caption: '. Str::random(10),
            'image' => 'image/poggers.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('posts')->insert([
            'user_id' => 2,
            'title' => 'Random Title: '. Str::random(10),
            'caption' => 'Random Caption: '. Str::random(10),
            'image' => 'image/monkaHands.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
