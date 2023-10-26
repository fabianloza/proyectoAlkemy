<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usuarios')->insert([
            'nombre' => 'Juan',
            'email' => 'Perez@gmail.com',
            'contrasena' => '123451',
            'telefono' => '123456789',
            'domicilio' => 'Calle 123',
            'created_at' => '2021-10-25 00:00:00',
            'updated_at' => '2021-10-25 00:00:00',
        ]);
    }
}
