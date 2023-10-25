<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('stocks')->insert([
            'producto_id' => 1,
            'cantidad' => 11,
            'created_at' => '2021-10-25 20:01:01',
            'updated_at' => '2021-10-25 20:01:01',
        ]);
        DB::table('stocks')->insert([
            'producto_id' => 2,
            'cantidad' => 12,
            'created_at' => '2021-10-25 20:01:01',
            'updated_at' => '2021-10-25 20:01:01',
        ]);
        DB::table('stocks')->insert([
            'producto_id' => 3,
            'cantidad' => 13,
            'created_at' => '2021-10-25 20:01:01',
            'updated_at' => '2021-10-25 20:01:01',
        ]);
    }
}
