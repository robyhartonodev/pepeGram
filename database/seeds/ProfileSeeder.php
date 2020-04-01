<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->insert([
            'user_id' => 1,
            'title' => 'Random Title: ' . Str::random(10),
            'description' => 'Random Description: ' . Str::random(10),
            'url' => 'https://poggers.com',
            'image' => '/image/pepehands.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('profiles')->insert([
            'user_id' => 2,
            'title' => 'Random Title: ' . Str::random(10),
            'description' => 'Random Description: ' . Str::random(10),
            'url' => 'https://poggers.com',
            'image' => '/image/clown.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
