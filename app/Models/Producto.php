<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
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

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function pedidos(){
        return $this->hasMany(Pedido::class);
    }

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }

    public function stock(){
        return $this->hasOne(Stock::class);
    }
}