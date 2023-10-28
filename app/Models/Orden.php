<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    use HasFactory;

    protected $table = 'ordenes';
    
    protected $fillable = ['carrito_id', 'metodo_pago_id', 'fecha_creacion'];
    protected $hidden = ['created_at', 'updated_at','carrito_id', 'metodo_pago_id'];
    protected $guarded = ['id'];

    protected $with = ['carrito', 'metodo_pago'];

    public function carrito(){
        return $this->belongsTo(Carrito::class);
    }

    public function metodo_pago(){
        return $this->belongsTo(MetodoPago::class);
    }
}
