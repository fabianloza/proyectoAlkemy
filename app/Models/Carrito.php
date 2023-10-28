<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Carrito extends Model
{
    use HasFactory;

    protected $fillable = ['usuario_id','finalizado','importe'];
    protected $guarded = ['id'];
    protected $hidden = ['created_at','updated_at'];
    protected $with = ['usuario'];

    public function usuario(){
        return $this->belongsTo(Usuario::class);
    }

    public function pedidos(){
        return $this->hasMany(Pedido::class);
    }

    public function orden(){
        return $this->hasOne(Orden::class);
    }

    public static function carritoUsuarioActual(){
        $usuario = Usuario::find(Auth::user()->id);
        $carrito = $usuario->carritos()->where('finalizado', false)->first();
        return $carrito;
    }
}
