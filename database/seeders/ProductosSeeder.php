<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\productos;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Ejemplo 1
         Producto::create([
            'nombre' => 'Ejemplo de Producto 1',
            'precio' => 19.99,
            'imagen' => 'imagen1.jpg',
            'descripcion' => 'Esta es la descripción del Producto 1.',
            'categoria_id' => 1,
            'habilitado' => true,
        ]);

        // Ejemplo 2
        Producto::create([
            'nombre' => 'Ejemplo de Producto 2',
            'precio' => 29.99,
            'imagen' => 'imagen2.jpg',
            'descripcion' => 'Esta es la descripción del Producto 2.',
            'categoria_id' => 2,
            'habilitado' => true,
        ]);

        // Ejemplo 3
        Producto::create([
            'nombre' => 'Ejemplo de Producto 3',
            'precio' => 39.99,
            'imagen' => 'imagen3.jpg',
            'descripcion' => 'Esta es la descripción del Producto 3.',
            'categoria_id' => 3,
            'habilitado' => true,
        ]);
    }
}
