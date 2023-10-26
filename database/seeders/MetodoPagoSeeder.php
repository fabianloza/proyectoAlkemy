<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\metodoPago;

class MetodoPagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         MetodoPago::create([
            'nombre' => 'Efectivo',
        ]);
        MetodoPago::create([
            'nombre' => 'Tarjeta',
        ]);
        MetodoPago::create([
            'nombre' => 'transferencia',
        ]);
    }
}
