<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ordenes')->insert([
            'carrito_id' => 1,
            'metodo_pago_id' => 1,
            'fecha_creacion' => '2021-10-25',
            'created_at' => '2021-10-25 00:00:00',
            'updated_at' => '2021-10-25 00:00:00',
        ]);
        DB::table('ordenes')->insert([
            'carrito_id' => 2,
            'metodo_pago_id' => 2,
            'fecha_creacion' => '2021-10-25',
            'created_at' => '2021-10-25 00:00:00',
            'updated_at' => '2021-10-25 00:00:00',
        ]);
    }
}
