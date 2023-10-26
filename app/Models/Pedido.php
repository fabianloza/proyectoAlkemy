<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = [
        'producto_id',
        'carrito_id',
        'cantidad',
        'importe',
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function carrito(){
        return $this->belongsTo(Carrito::class);
    }

    public function producto(){
        return $this->belongsTo(Producto::class);
    }
}
