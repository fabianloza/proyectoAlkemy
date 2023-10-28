<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class Usuario extends Authenticatable
{
    use HasFactory, HasApiTokens, Notifiable;
    
    protected $fillable = ['id','nombre','email','contrasena','telefono','domicilio'];
    
    protected $hidden = ['created_at', 'updated_at', 'contrasena'];

    protected $casts = ['contrsena' => 'hsahed'];

    public function carritos(){
        return $this->hasMany(Carrito::class);
    }

    public function getAuthPassword()
    {
        return $this->contrasena;
    }
}
