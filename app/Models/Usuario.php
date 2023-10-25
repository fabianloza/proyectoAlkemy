<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $fillable = ['id','nombre','email','contrasena','telefono','domicilio'];
    
    protected $hidden = ['created_at', 'updated_at'];
}
