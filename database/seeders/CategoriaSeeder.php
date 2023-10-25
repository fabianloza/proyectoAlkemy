<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categorias')->insert([
            'nombre' => 'Ropa',
            'created_at' => '2021-10-25 00:00:00',
            'updated_at' => '2021-10-25 00:00:00',
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Electronica',
            'created_at' => '2021-10-25 00:00:00',
            'updated_at' => '2021-10-25 00:00:00',
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Hogar',
            'created_at' => '2021-10-25 00:00:00',
            'updated_at' => '2021-10-25 00:00:00',
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Juguetes',
            'created_at' => '2021-10-25 00:00:00',
            'updated_at' => '2021-10-25 00:00:00',
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Deportes',
            'created_at' => '2021-10-25 00:00:00',
            'updated_at' => '2021-10-25 00:00:00',
        ]);
    }
}
