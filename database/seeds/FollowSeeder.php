<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class FollowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Guest follows me (demo)
        DB::table('profile_user')->insert([
            'user_id' => 2,
            'profile_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
