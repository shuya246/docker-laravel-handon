<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CouponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('coupons')->insert([
            'title' => 'title',
            'introduction' => 'introduction',
            'body' => 'body',
            'time' => 1,
            'start' => 20200513,
            'end' => 20200520,
            'memo' => 'memo',
        ]);
    }
}
