<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    use HasFactory;

    protected $fillable = ['usuario_id','importe','finalizado'];

    public function usuario(){
        return $this->belongsTo(Usuario::class);
    }

    public function pedidos(){
        return $this->hasMany(Pedido::class);
    }

    public function orden(){
        return $this->hasOne(Orden::class);
    }
}
