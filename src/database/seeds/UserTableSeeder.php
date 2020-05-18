<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => '山田太郎',
            'email' => 'yamada@ouner.com',
            'password' => Hash::make('passwod'),
            'role' => 'owner',
            ]);
    }
}
