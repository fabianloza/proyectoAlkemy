<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    use HasFactory;

    protected $table = 'ordenes';
    
    protected $fillable = ['carrito_id', 'metodo_pago_id', 'fecha_creacion'];
    protected $hidden = ['created_at', 'updated_at'];
    protected $guarded = ['id'];
}
