<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens as SanctumHasApiTokens;

class Usuario extends Authenticatable
{
    use HasFactory, SanctumHasApiTokens, Notifiable;
    
    protected $fillable = ['id','nombre','email','contrasena','telefono','domicilio'];
    
    protected $hidden = ['created_at', 'updated_at'];

    public function carritos(){
        return $this->hasMany(Carrito::class);
    }
}
