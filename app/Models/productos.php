<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    use HasFactory;
    
    protected $table = 'productos'; 

    protected $primaryKey = 'id';

    protected $fillable = [
        'nombre', 'precio', 'imagen', 'descripcion', 'categoria_id', 'habilitado'
    ];

    protected $casts = [
        'precio' => 'double',
        'habilitado' => 'boolean',
    ];

   // public function categoria()                               relaciones entre tablas 
  // {
  //      return $this->belongsTo(Categoria::class);
   // }

}
