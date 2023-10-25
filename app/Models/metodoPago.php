<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class metodoPago extends Model
{
    use HasFactory;
    protected $table = 'metodo_pagos';

    protected $fillable = [
        'tipo', 
    ];
    protected $hidden = ['created_at', 'updated_at'];

}
