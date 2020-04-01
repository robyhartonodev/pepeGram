<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => Str::of('Roby Hartono'),
            'email' => Str::of('robyhartonodev312') . '@gmail.com',
            'username' => Str::of('rhrt04'),
            'password' => Hash::make('secretpassword'),
            'created_at' => now(),
            'updated_at' => now(),
            'remember_token' => ''
        ]);

        DB::table('users')->insert([
            'name' => Str::of('Gäste'),
            'email' => Str::of('guest123') . '@gmail.com',
            'username' => Str::of('Gäste123'),
            'password' => Hash::make('secretguest'),
            'created_at' => now(),
            'updated_at' => now(),
            'remember_token' => ''
        ]);
    }
}
